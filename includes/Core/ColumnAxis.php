<?php

namespace Pivotwoo\Core;

/**
 * Class ColumnAxis
 *
 * @class ColumnAxis
 * @namespace Pivotwoo\Core
 * @since 0.1.0
 */
class ColumnAxis
{
	/**
	 * List of dimensions in the axis.
	 *
	 * @var DimensionValue[]|null
	 * @since 0.1.0
	 */
	protected $dimensions = array();

	/**
	 * Nodes are generated when processing the axis.
	 *
	 * @var array|null The nodes as a tree
	 * @since 0.1.0
	 */
	protected $nodes = null;

	/**
	 * Class constructor.
	 *
	 * @param  Dimension  $dimensions  List of dimensions in the axis.
	 *
	 * @since 0.1.0
	 */
	public function __construct($dimensions){

		$this->dimensions = $dimensions;
	}

	/**
	 * Process the axis.
	 *
	 * @return void
	 */
	public function process()
	{
		$dimension = $this->dimensions[0] ?? null;

		if(empty($dimension)){
			return;
		}


		$query = new Query2();

		// Select DISTINCT values
		$query->distinct();

		// SELECT `dimension` AS `alias`
		$query->select($dimension->getColumn()); //TODO: include alias

		// ORDER BY `dimension` DESC
		$query->order_by($dimension->getColumn(), $dimension->getSort());

		// WHERE `dimension` = `value`
		$query = $this->where($query);

	}
}
