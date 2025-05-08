<?php

namespace Pivotwoo\Query\Clause;

use Closure;
use InvalidArgumentException;
use Pivotwoo\Query\Clause;

/**
 * FROM clause
 */
class From extends Clause
{
	/**
	 * The list of tables to use
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $tables = [];

	/**
	 * From clause constructor
	 *
	 * @since 0.1.0
	 */
	public function __construct(){}

	/**
	 * Set a table to select from
	 *
	 * @param  string|Closure  $table  The table being queried
	 * @param  string|null  $as  The alias for the table
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function table($table, $as = null)
	{
		if (!is_string($table) && !$this->isQueryable($table)) {
			throw new InvalidArgumentException('The "table" parameter must be a string or an object implementing the Queryable interface.');
		}

		if (!is_string($as) && !is_null($as)) {
			throw new InvalidArgumentException('The "as"parameter must be a string.');
		}

		$table = $this->toQueryable($table);

		$this->tables[] = compact('table', 'as');

		return $this;
	}

	/**
	 * Compile
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		$tables = array_map([$this, 'compileTable'], $this->tables);
		$tables = array_filter($tables);

		if (empty($tables)) {
			return '';
		}

		return 'FROM '.implode(', ', $tables);
	}

	/**
	 * Compile a table
	 *
	 * @param  array  $table
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compileTable($table)
	{
		[$table, $as] = $table;
		//TODO: scape table and as
		$sql = $this->isQueryable($table) ? "({$table})" : "{$table}";
		$sql .= empty($as) ? '' : ' AS '.$as;
		return $sql;
	}
}
