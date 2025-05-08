<?php

namespace Pivotwoo\Core;

use InvalidArgumentException;

/**
 * This class contains all the logic to keep dimension values.
 * Dimension values are those values shown in either row or columns.
 *
 * @class Pivotwoo\Core\DimensionValue
 * @since 0.1.0
 */
class DimensionValue
{
	/**
	 * The dimension associated with this value.
	 *
	 * @var Dimension
	 * @since 0.1.0
	 */
	protected $dimension = null;

	/**
	 * The dimension value.
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $value = null;

	/**
	 * There are all those DimensionValue objects that are children of this.
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $children = array();

	/**
	 * Class constructor.
	 *
	 * @since 0.1.0
	 */
	public function __construct($dimension, $value)
	{
		if (!$dimension instanceof Dimension) {
			throw new InvalidArgumentException("Dimension object must be instance of Dimension");
		}

		if (!is_string($value)) {
			throw new InvalidArgumentException("Dimension value must be a string");
		}

		$this->dimension = $dimension;
		$this->value     = $value;
	}

	/**
	 * Get the dimension associated with this value.
	 *
	 * @since 0.1.0
	 */
	public function addChild(DimensionValue $child)
	{
		$child->setParent($this);
		$this->children[] = $child;
	}

	/**
	 * Get the dimension associated with this value.
	 *
	 * @return Dimension
	 * @since 0.1.0
	 */
	public function where($query)
	{
		//$query->where($this->dimension->column, $this->value);
	}

	public function getCondition()
	{


		return $this->dimension->getColumn() . " = '" . $this->value . "'";
	}
}
