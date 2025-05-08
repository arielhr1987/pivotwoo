<?php

namespace Pivotwoo\Core\Axis;

use Pivotwoo\Core\Dimension;
use Pivotwoo\Core\Tree\NodeInterface;
use Pivotwoo\Core\Tree\NodeTrait;

/**
 * Class AxisValue
 */
class AxisValue implements NodeInterface
{
	/**
	 * Trait to implement the node interface
	 */
	use NodeTrait;

	/**
	 * The node dimension
	 *
	 * @var Dimension|null
	 */
	protected $dimension = null;

	/**
	 * Class constructor
	 *
	 * @param  string  $value  The value of the node
	 * @param  Dimension  $dimension  The dimension associated with this node
	 */
	public function __construct(string $value, Dimension $dimension)
	{
		$this->setValue($value);
		$this->setDimension($dimension);
	}

	/**
	 * Get the dimension associated with this node
	 *
	 * @return Dimension
	 */
	public function getDimension(): Dimension
	{
		return $this->dimension;
	}

	/**
	 * Set the dimension associated with this node
	 *
	 * @param  Dimension  $dimension
	 */
	protected function setDimension(Dimension $dimension): void
	{
		$this->dimension = $dimension;
	}

	/**
	 * Determine if this node should be expanded
	 *
	 * @return bool
	 */
	public function shouldExpand(): bool
	{
		//TODO: Determine if this node is expanded
		return true;
	}

	/**
	 * Get the children dimension values
	 *
	 * @return void
	 */
	public function expand()
	{
		$childDimension = $this->getDimension()->getAxis()->getDimensions()[$this->getDepth() + 1] ?? null;
		if (empty($childDimension)) {
			//No child dimension, therefore nothing to expand
			return;
		}

		//pivot instance
		$pivot = $this->getDimension()->getAxis()->getPivot();

		//TODO: use correct query
		$sql = 'SELECT DISTINCT `'.$childDimension->getColumn().'` FROM `'.$pivot->getTable().'`';

		$where = $this->getCondition();
		if (!empty($where)) {
			$sql .= ' WHERE '.$where;
		}

		$result = $pivot->getDataSource()->query($sql);

		foreach ($result as $row) {
			$child = new AxisValue($row[0], $childDimension);
			$this->addChild($child);

			if ($this->shouldExpand()) {
				$child->expand();// Recursively expand the child
			}
		}
	}

	/**
	 * Get the where condition for this node
	 *
	 * @return string
	 */
	public function getCondition()
	{
		$ds = $this->getDimension()->getAxis()->getPivot()->getDataSource();

		$nodes = array_map(function ($node) use ($ds) {
			return "`{$node->getDimension()->getColumn()}` = '{$ds->escape($node->getValue())}'";
		}, $this->getAncestorsAndSelf());

		return implode(' AND ', $nodes);
	}

	/**
	 * Get the unique name for this node
	 *
	 * @return string
	 */
	public function getUniqueName()
	{
		$nodes = array_map(function ($node){
			return $node->getValue();
		}, $this->getAncestorsAndSelf());

		return implode(' - ', $nodes);
	}

}
