<?php

namespace Pivotwoo\Core\Axis;

use InvalidArgumentException;
use Pivotwoo\Core\Dimension;
use Pivotwoo\Core\Pivot;

/**
 * Class Axis
 *
 * An axis is an object that contains all dimensions to group pivot information
 *
 * @since 0.1.0
 */
class Axis
{
	/**
	 * A reference to the pivot associated with this axis
	 *
	 * @var Pivot|null
	 * @since 0.1.0
	 */
	protected $pivot = null;

	/**
	 * The dimension associated with this node
	 *
	 * @var Dimension|null
	 *
	 * @since 0.1.0
	 */
	protected $dimensions = array();

	/**
	 * The data after we process the axis
	 *
	 * @var AxisValue[]|null
	 */
	protected $data = null;

	/**
	 * Get the pivot table associated with this item
	 *
	 * @return Pivot|null
	 * @since 0.1.0
	 */
	public function getPivot()
	{
		return $this->pivot;
	}

	/**
	 * Set the pivot associated with this axis
	 *
	 * @param  Pivot  $pivot
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function setPivot(Pivot $pivot)
	{
		$this->pivot = $pivot;
		return $this;
	}

	/**
	 * Get the axis dimension
	 *
	 * @return Dimension|null
	 * @since 0.1.0
	 */
	public function getDimensions()
	{
		return $this->dimensions;
	}

	/**
	 * Set the axis dimension
	 *
	 * @param  Dimension[]|  $dimensions
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function setDimensions($dimensions)
	{
		//Verify each dimension is an instance of Dimension, set the axis it belongs to and set dimensions.
		$this->dimensions = array_map(function ($dimension){
			if (!$dimension instanceof Dimension) {
				throw new InvalidArgumentException("Dimension object must be instance of Dimension");
			}
			$dimension->setAxis($this);
			return $dimension;
		}, $dimensions);

		return $this;
	}

	/**
	 * Get the data after is processed
	 *
	 * @return AxisValue[]|null
	 * @since 0.1.0
	 */
	public function getData()
	{
		if ($this->data === null) {
			$this->process();
		}
		return $this->data;
	}

	/**
	 * Process the axis
	 *
	 * @return void
	 */
	public function process()
	{
		$dimension = $this->dimensions[0] ?? null;
		if (empty($dimension)) {
			$this->data = array();
			//Nothing to process as we don't have a dimension
			return;
		}

		$sql = 'SELECT DISTINCT `'.$dimension->getColumn().'` FROM `'.$this->getPivot()->getTable().'`';

		$result = $this->getPivot()->getDataSource()->query($sql);

		foreach ($result as $row) {
			$axisValue    = new AxisValue($row[0], $dimension);
			$this->data[] = $axisValue;

			if ($axisValue->shouldExpand()) {
				$axisValue->expand(); // Recursively expand the child
			}
		}
	}
}
