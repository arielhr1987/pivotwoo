<?php

namespace Pivotwoo\Core;

use Illuminate\Database\Query\Builder;
use Pivotwoo\Core\Axis\Axis;
use Pivotwoo\Core\Axis\AxisValue;
use Pivotwoo\Core\DataSource\DataSource;
use Pivotwoo\Core\Measure\Measure;

/**
 * Class Pivotwoo\Core\Pivot
 *
 * Core class to handle multidimensional queries.
 * The heart of Pivotwoo plugin
 *
 * @since 0.1.0
 */
class Pivot
{
	/**
	 * Data Source provider
	 *
	 * @var DataSource
	 * @since 0.1.0
	 */
	protected $ds = null;

	/**
	 * Filters applied to the current pivot
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $filters = array();

	/**
	 * All registered measures
	 *
	 * @var Measure[]
	 * @since 0.1.0
	 */
	protected $measures = array();

	/**
	 * Left axis dimensions
	 *
	 * @var Axis|null
	 * @since 0.1.0
	 */
	protected $rows = null;

	/**
	 * Top axis dimensions
	 *
	 * @var Axis|null
	 * @since 0.1.0
	 */
	protected $columns = null;

	/**
	 * Totals
	 *
	 * @var null
	 */
	protected $totals = null;

	/**
	 * All data processed
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $data = array();

	/**
	 * Pivot constructor.
	 *
	 * @since 0.1.0
	 */
	public function __construct()
	{
		//Set row Axis
		$this->rows = new Axis();
		$this->rows->setPivot($this);

		//set column Axis
		$this->columns = clone $this->rows;
	}

	/**
	 * Get the data source for this pivot
	 *
	 * @return DataSource
	 */
	public function getDataSource()
	{
		return $this->ds;
	}

	/**
	 * Set the data source for this pivot
	 *
	 * @param  DataSource  $ds
	 *
	 * @return $this
	 */
	public function setDataSource(DataSource $ds)
	{
		$this->ds = $ds;
		return $this;
	}

	/**
	 * Get the measures
	 *
	 * @return Measure[]
	 */
	public function getMeasures()
	{
		return $this->measures;
	}

	/**
	 * Set the measures to be used in the pivot
	 *
	 * @param  array  $measures
	 *
	 * @return $this
	 */
	public function setMeasures(array $measures)
	{
		$this->measures = $measures;
		return $this;
	}

	/**
	 * Return the row dimensions
	 *
	 * @return Axis
	 * @since 0.1.0
	 */
	public function getRows()
	{
		return $this->rows;
	}

	/**
	 * Set the row dimensions in the pivot
	 *
	 * @param  Dimension[]  $dimensions
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function setRows($dimensions)
	{
		//Allow user to provide multiple dimensions as parameters
		if (!is_array($dimensions)) {
			$dimensions = func_get_args();
		}
		$this->rows->setDimensions($dimensions);

		return $this;
	}

	/**
	 * Return the column dimensions set
	 *
	 * @return Axis
	 * @since 0.1.0
	 */
	public function getColumns(): Axis
	{
		return $this->columns;
	}

	/**
	 * Set the column dimensions in the pivot
	 *
	 * @param  Dimension[]  $dimensions
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function setColumns($dimensions)
	{
		//Allow user to provide multiple dimensions as parameters
		if (!is_array($dimensions)) {
			$dimensions = func_get_args();
		}
		$this->columns->setDimensions($dimensions);
		return $this;
	}

	/**
	 * Get the table or query to get the info from
	 *
	 * @return string
	 */
	public function getTable()
	{
		return 'customer_product_dollarsales';
	}

	/**
	 * Process the pivot table
	 *
	 * @return Pivot
	 * @since 0.1.0
	 */
	public function process()
	{
		/**
		 * Process all measure totals
		 */
		$this->processTotals();

		/**
		 * Process columns
		 */
		$this->getColumns()->process();

		/**
		 * Process rows
		 */
		//$this->getRows()->process();

		/**
		 * Process data
		 */
		$this->processData();

		return $this;
	}

	/**
	 * Process subtotals
	 *
	 * @return void
	 */
	public function processTotals()
	{
		//TODO: Implement filters
		$measures = implode(',', array_map(function ($measure){
			return sprintf('%s AS %s', $measure->getTotalExpression(), $measure->getName());
		}, $this->measures));

		$sql = sprintf('SELECT %s FROM %s', $measures, $this->getTable());

		$totals = $this->getDataSource()->query($sql);

		$this->totals = $totals[0] ?? array();
	}

	/**
	 * Process the data
	 *
	 * @return void
	 */
	public function processData()
	{
		$measures    = $this->getMeasures();
		$columnsData = $this->getColumns()->getData();

		$queries = [];

		//Column selects
		$columnsSelect = $this->getColumnSelects($columnsData);
		//Remove last comma
		$columnsSelect = rtrim($columnsSelect, ",\n");

		//Totals select
		$totalSelects = [];
		foreach ($measures as $measure) {
			$totalSelects[] = sprintf("`%s` AS '%s'", $measure->getColumn(), "Total ".$measure->getName());
		}
		$totalSelects = implode(",\n ", $totalSelects);

		//Loop through each row dimension and create a query for it
		foreach ($this->getRows()->getDimensions() as $i => $dimension) {

			$sql     = 'SELECT ';
			$selects = [];

			foreach ($this->getRows()->getDimensions() as $j => $dim) {

				if ($j > $i) {
					$selects[] = sprintf("NULL AS '%s'", $dim->getName());
				}else {
					$selects[] = sprintf("`%s` AS '%s'", $dim->getColumn(), $dim->getName());
				}
			}

			$selects[] = $columnsSelect;
			$selects[] = $totalSelects;
			$selects   = implode(",\n ", $selects);

			$sql .= $selects;

			$sql .= sprintf("\n FROM %s", $this->getTable());

			$sql .= "\n GROUP BY ";

			$order = [];
			foreach ($this->getRows()->getDimensions() as $k => $rowOrder) {
				if($k <= $i){
					$order[] = $rowOrder->getColumn();
				}
			}
			$sql .= implode(', ', $order);

			$queries[] = "($sql)\n";
		}

		$sql = implode(" UNION \n", $queries);

		$order = [];
		foreach ($this->getRows()->getDimensions() as $k => $rowOrder) {
			$order[] = $rowOrder->getColumn();
		}
		$sql .= ' ORDER BY ' . implode(', ', $order);

		$data = $this->getDataSource()->query($sql);

		$this->data = $data;

	}

	/**
	 * Get the columns select SQL statement
	 *
	 * @param  AxisValue[]  $data  The nodes to get the select statement
	 *
	 * @return string The SQL statement
	 */
	protected function getColumnSelects($data)
	{
		$sql = '';

		$measures = $this->getMeasures();

		foreach ($data as $value) {
			$case = "SUM(CASE WHEN %s THEN %s END) AS '%s',\n";

			$condition = $value->getCondition(); //"productLine = 'Classic Cars'";

			foreach ($measures as $measure) {
				$then = $measure->getColumn();
				$as   = $value->getUniqueName().' - '.$measure->getColumn();
				$as = $this->getDataSource()->escape($as);
				$sql  .= sprintf($case, $condition, $then, $as);
			}

			if (!$value->isLeaf()) {
				$sql .= $this->getColumnSelects($value->getChildren());
			}
		}

		return $sql;
	}
}
