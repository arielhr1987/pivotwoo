<?php

namespace Pivotwoo\Query\Clause;

use Closure;
use InvalidArgumentException;
use Pivotwoo\Query\Clause;

/**
 * SELECT clause
 */
class Select extends Clause
{
	/**
	 * Determine if we're doing a SELECT DISTINCT
	 *
	 * @var bool
	 * @since 0.1.0
	 */
	protected $distinct = false;

	/**
	 * The list of columns to select
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $columns = [];

	/**
	 * Select clause constructor
	 *
	 * @param  bool  $distinct
	 *
	 * @since 0.1.0
	 */
	public function __construct($distinct = false)
	{
		$this->distinct = $distinct;
	}

	/**
	 * Set distinct value
	 *
	 * @param  bool  $distinct
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function distinct($distinct = true)
	{
		$this->distinct = $distinct;
		return $this;
	}

	/**
	 * Determine if is a select distinct type
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isDistinct()
	{
		return $this->distinct;
	}

	/**
	 * Add a column to the list of columns to select.
	 * This method validates the info provided and prevents a column from being selected multiple times
	 *
	 * @param  string|Closure|Query  $column  The column to select
	 * @param  string|null  $as  The alias of the column in the select clause
	 * @param  string|null  $aggregate  The aggregate function to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function column($column, $as = null, $aggregate = null)
	{
		//Validate AS if provided
		if (!is_string($as) && !is_null($as)) {
			throw new InvalidArgumentException('Parameter "as" must be a string');
		}

		//Determine if the column contains AS statement and set each variable accordingly
		if (is_string($column)) {
			$segments = preg_split('/\s+as\s+/i', $column);
			$column   = $segments[0];

			//If the "as" parameter is provided, takes precedence over the segment "as"
			if (!is_string($as)) {
				$as = $segments[1] ?? null;
			}
		}

		//Validate column aggregate
		if (is_string($aggregate)) {
			$aggregate = strtoupper(trim($aggregate));

			if (!in_array($aggregate, ['MIN', 'MAX', 'AVG', 'SUM', 'COUNT'], true)) {
				throw new InvalidArgumentException("Invalid aggregate type: {$aggregate}");
			}
		}else {
			$aggregate = null;
		}

		//Validate column parameter
		if (!is_string($column)) {//&& !$this->isQueryable($column)
			throw new InvalidArgumentException('Parameter "column" must be a string or a Queryable instance');
		}

		//Check if the column exists already
		$exists = !empty(array_filter($this->columns, function ($col) use ($column){
			return $col['column'] == $column;
		}));

		if (!$exists) {
			$this->columns[] = compact('column', 'as', 'aggregate');
		}

		return $this;
	}

	/**
	 * Get the list of columns to select
	 *
	 * @return array
	 * @since 0.1.0
	 */
	public function getColumns()
	{
		return $this->columns;
	}

	/**
	 * Get the Generated SQL
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		// No columns to select
		if (empty($this->columns)) {
			return '';
		}

		$select = 'SELECT ';

		// Determine distinct
		if ($this->distinct) {
			$select .= 'DISTINCT ';
		}

		//Compile all columns
		$columns = implode(', ', array_map([$this, 'compileColumn'], $this->columns));

		return $select.$columns;
	}

	/**
	 * Compile a single column
	 *
	 * @param  array  $column
	 *
	 * @return string
	 * @since 0.1.0
	 */
	protected function compileColumn($column)
	{
		[$column, $as, $aggregate] = $column;

		if ($this->isQueryable($column)) {
			$column = $column->compile();
		}else {
			//TODO: scape column
		}

		if (!empty($as)) {
			//TODO: escape as
		}

		$sql = empty($aggregate) ? $column : "{$aggregate}({$column})";
		$sql .= empty($as) ? '' : ' AS '.$as;

		return $sql;
	}

	/**
	 * Return all params bind to columns.
	 * This only applies if the column is a subquery, as bind parameters aren't supported in the select column itself
	 *
	 * @return array
	 * @since 0.1.0
	 */
	public function getParams()
	{
		$params = array_map(function ($column){
			return $this->isQueryable($column) ? $column->getParams() : [];
		}, $this->columns);

		return $params;
	}
}
