<?php

namespace Pivotwoo\Core;

use Pivotwoo\Core\Axis\Axis;

/**
 * Class Pivotwoo\Core\Dimension
 *
 * Base class that represents a dimension
 *
 * @since 0.1.0
 */
class Dimension
{
	/**
	 * The axis this dimension belongs to.
	 *
	 * @var Axis|null
	 * @since 0.1.0
	 */
	protected $axis = null;

	/**
	 * The dimension name.
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $name;

	/**
	 * The dimension display name.
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $displayName;

	/**
	 * The dimension filters.
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $filters = array();

	/**
	 * Order in which we're going to show the dimension items
	 *
	 * @var bool
	 * @since 0.1.0
	 */
	protected $sort = 'ASC';

	/**
	 * Database column name associated to the dimension
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $column;

	/**
	 * The dimensiono items
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $items = [];

	/**
	 * Pivot\Core\Dimension constructor.
	 *
	 * @param  string  $column
	 *
	 * @since 0.1.0
	 */
	public function __construct($column)
	{
		$this->name        = $column;
		$this->displayName = $column;
		$this->column      = $column;
	}

	/**
	 * Get the axis this dimension belongs to.
	 *
	 * @return Axis|null
	 * @since 0.1.0
	 */
	public function getAxis()
	{
		return $this->axis;
	}

	/**
	 * Set the axis this dimension belongs to.
	 *
	 * @param  Axis  $axis  The Axis instances
	 *
	 * @return void
	 * @since 0.1.0
	 */
	public function setAxis($axis)
	{
		$this->axis = $axis;
	}

	/**
	 * Get the dimension name
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set the dimension display name
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * Get all filters
	 *
	 * @return array
	 * @since 0.1.0
	 */
	public function getFilters()
	{
		return $this->filters;
	}

	/**
	 * Set the sort direction
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getSort()
	{
		return $this->sort;
	}

	/**
	 * Set the sort direction
	 *
	 * @since 0.1.0
	 */
	public function setSort(string $sort = 'ASC')
	{
		$sort = strtoupper($sort);
		if (in_array($sort, array('ASC', 'DESC'))) {
			$this->sort = $sort;
		}
	}

	/**
	 * Get the db column to fetch
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getColumn()
	{
		return $this->column;
	}
}
