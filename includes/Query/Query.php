<?php

namespace Pivotwoo\Query;

use Pivotwoo\Query\Clause\From;
use Pivotwoo\Query\Clause\GroupBy;
use Pivotwoo\Query\Clause\Limit;
use Pivotwoo\Query\Clause\OrderBy;
use Pivotwoo\Query\Clause\Select;

/**
 * Query Builder class
 */
class Query
{
	/**
	 * The SELECT clause
	 *
	 * @var null|Select
	 * @since 0.1.0
	 */
	protected $select = null;

	/**
	 * The FROM portion of the query
	 *
	 * @var null|From
	 * @since 0.1.0
	 */
	protected $from = null;

	/**
	 * THe JOIN portion of the query
	 *
	 * @var null
	 * @since 0.1.0
	 */
	protected $join = null;

	/**
	 * The WHERE portion of the query
	 *
	 * @var null
	 * @since 0.1.0
	 */
	protected $where = null;

	/**
	 * The GROUP BY portion of the query
	 *
	 * @var null|GroupBy
	 * @since 0.1.0
	 */
	protected $groupBy = null;

	/**
	 * The HAVING portion of the query
	 *
	 * @var null
	 * @since 0.1.0
	 */
	protected $having = null;

	/**
	 * The ORDER BY portion of the query
	 *
	 * @var null |OrderBy
	 * @since 0.1.0
	 */
	protected $orderBy = null;

	/**
	 * The LIMIT clause
	 *
	 * @var null|Limit
	 * @since 0.1.0
	 */
	protected $limit = null;

	/**
	 * The UNION portion of the query
	 *
	 * @var null
	 * @since 0.1.0
	 */
	protected $union = null;

	/**
	 * Class builder constructor
	 */
	public function __construct()
	{
		$this->select  = new Select();
		$this->from    = new From();
		$this->groupBy = new GroupBy();
		$this->orderBy = new OrderBy();
		$this->limit   = new Limit();
	}

	/**
	 * Add a column to the list of columns to select.
	 *
	 * @param  string|Closure|static  $column  The column to select
	 * @param  string|null  $as  The alias of the column in the select clause
	 * @param  string|null  $aggregate  The aggregate function to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function column($column, $as = null, $aggregate = null)
	{
		$this->select->column($column, $as, $aggregate);
		return $this;
	}

	/**
	 * Set the columns to be selected.
	 *
	 * @param  array|string|static|mixed  $columns  The columns to select
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function select($columns = ['*'])
	{
		//Accept an array of columns
		$columns = is_array($columns) ? $columns : func_get_args();

		foreach ($columns as $as => $column) {
			$this->column($column, is_string($as) ? $as : null);
		}

		return $this;
	}

	/**
	 * Retrieve the SUM of values in a given column.
	 *
	 * @param  string  $column  The column name or raw query to aggregate
	 * @param  string|null  $alias  The alias to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function sum($column, $alias = null)
	{
		return $this->column($column, $alias, 'SUM');
	}

	/**
	 * Retrieve the AVG of values in a given column.
	 *
	 * @param  string  $column  The column name or raw query to aggregate
	 * @param  string|null  $alias  The alias to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function avg($column, $alias = null)
	{
		return $this->column($column, $alias, 'AVG');
	}

	/**
	 * Retrieve the MAX value of a given column.
	 *
	 * @param  string  $column  The column name or raw query to aggregate
	 * @param  string|null  $alias  The alias to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function max($column, $alias = null)
	{
		return $this->column($column, $alias, 'MAX');
	}

	/**
	 * Retrieve the MIN value of a given column.
	 *
	 * @param  string  $column  The column name or raw query to aggregate
	 * @param  string|null  $alias  The alias to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function min($column, $alias = null)
	{
		return $this->column($column, $alias, 'MIN');
	}

	/**
	 * Retrieve the COUNT of values in a given column.
	 *
	 * @param  string  $column  The column name or raw query to aggregate
	 * @param  string|null  $alias  The alias to use
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function count($column, $alias = null)
	{
		return $this->column($column, $alias, 'COUNT');
	}

	/**
	 * The FROM portion of the query
	 *
	 * @param  string|mixed  $table
	 * @param  string  $as
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function from($table, $as = null)
	{
		$this->from->table($table, $as);
		return $this;
	}

	public function join($table)
	{

	}

	/**
	 * Add a column to the group by clause
	 *
	 * @param  string|array  $column
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function groupBy($column)
	{
		$this->groupBy->column($column);
		return $this;
	}

	/**
	 * Order by asd
	 *
	 * @param  string  $column  The name of the column to order
	 * @param  string  $direction  The direction of the order, default ASC
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function orderBy($column, $direction = OrderBy::ASC)
	{
		$this->orderBy->column($column, $direction);
		return $this;
	}

	/**
	 * Order by desc
	 *
	 * @param  string|Query|Closure  $column  The name of the column to order
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function orderByDesc($column)
	{
		return $this->orderBy($column, OrderBy::DESC);
	}

	/**
	 * Set the LIMIT of the query
	 *
	 * @param  int  $value
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function limit($value)
	{
		$this->limit->set($value);
		return $this;
	}

	/**
	 * Set the OFFSET of the query
	 *
	 * @param  int  $value
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function offset($value)
	{
		$this->limit->offset($value);
		return $this;
	}

}
