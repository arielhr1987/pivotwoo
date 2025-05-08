<?php

namespace Pivotwoo\Core;

use Closure;
use InvalidArgumentException;

/**
 * A query class implementation to handle database SQL creation
 *
 * @since 0.1.0
 */
class Query
{
	/**
	 * Determine if we're doing a SELECT DISTINCT
	 *
	 * @var bool
	 * @since 0.1.0
	 */
	protected $distinct = false;

	/**
	 * SELECT columns statement
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $columns = [];

	/**
	 * Select FROM statement
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $from = [];

	/**
	 * WHERE statements to include in the query
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $where = [];

	/**
	 * GROUP BY statements
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $groupBy = [];

	/**
	 * HAVING statement
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $having = [];

	/**
	 * ORDER statement
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $orderBy = [];

	/**
	 * LIMIT portion
	 *
	 * @var null|int
	 */
	protected $limit = null;

	/**
	 * OFFSET
	 *
	 * @var null
	 */
	protected $offset = null;

	/**
	 * All available operators
	 *
	 * @var string[]
	 */
	protected $operators = [
		'=', '<', '>', '<=', '>=', '<>', '!=', '<=>',
		'LIKE', 'LIKE BINARY', 'NOT LIKE', 'ILIKE',
		'&', '|', '^', '<<', '>>', '&~', 'IS', 'IS NOT',
		'RLIKE', 'NOT RLIKE', 'REGEXP', 'NOT REGEXP',
		'~', '~*', '!~', '!~*', 'SIMILAR TO',
		'NOT SIMILAR TO', 'NOT ILIKE', '~~*', '!~~*',
	];

	/**
	 * DISTINCT
	 *
	 * Sets a flag which tells the query string compiler to add DISTINCT
	 *
	 * @param  bool  $value
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function distinct($value = true)
	{
		$this->distinct = is_bool($value) ? $value : true;
		return $this;
	}

	/**
	 * Add a column to the list of columns to select.
	 * This method validates the info provided and prevents a column from being selected multiple times
	 *
	 * @param  string|Closure|static  $column  The column to select
	 * @param  string|null  $as  The alias of the column in the select clause
	 * @param  string|null  $aggregate  The aggregate function to use
	 *
	 * @return $this
	 */
	public function column($column, $as = null, $aggregate = null)
	{
		//Validate AS
		if (!is_string($as) && !is_null($as)) {
			throw new InvalidArgumentException("Parameter as must be a string");
		}

		//Determine if the column contains AS statement, set each variable accordingly
		if (is_string($column)) {
			$segments = preg_split('/\s+as\s+/i', $column);
			$column   = $segments[0];

			//If the "as" parameter is provided, takes precedence over the segment as
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
		if (!is_string($column) && !$this->isQueryable($column)) {
			throw new InvalidArgumentException("Parameter column must be a string or a Queryable");
		}

		//If Closure given convert to Query
		if ($column instanceof Closure) {
			//TODO: do we need it?
			$column($query = $this->newQuery());
			$column = $query;
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
	 * Set the columns to be selected.
	 *
	 * @param  array|string|static|mixed  $columns  The columns to select
	 *
	 * @return $this
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
	 * @return $this
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
	 * @return $this
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
	 * @return $this
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
	 * @return $this
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
	 * @return $this
	 */
	public function count($column, $alias = null)
	{
		return $this->column($column, $alias, 'COUNT');
	}

	/**
	 * FROM portion of the query
	 *
	 * @param  string  $table  The table being queried
	 * @param  string|null  $as  The alias for the table
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function from($table, $as = null)
	{
		if (!is_string($table) && !$this->isQueryable($table)) {
			throw new InvalidArgumentException("Table must be a string or a Queryable");
		}

		if (!is_string($as) && !is_null($as)) {
			throw new InvalidArgumentException("Parameter as must be a string");
		}

		$this->from = compact('table', 'as');

		return $this;
	}

	/**
	 * Add a basic where clause to the query.
	 *
	 * @param  string|self|Closure|array  $column
	 * @param  mixed  $operator
	 * @param  mixed  $value
	 * @param  string  $boolean
	 * @param  boolean  $not
	 *
	 * @return $this
	 */
	public function where($column, $operator = null, $value = null, $boolean = 'AND', $not = false)
	{
		// If the column is an array, we will assume it is an array of key-value pairs
		// and can add them each as a where clause. We will maintain the boolean we
		// received when the method was called and pass it into the nested where.
		if (is_array($column)) {
			foreach ($column as $k => $v) {
				$this->where($k, $operator, $v, $boolean);
			}
		}

		// If only 2 values are passed to the method, we will assume that the operator is an equals sign
		if (func_num_args() === 2) {
			$value    = $operator;
			$operator = '=';
		}

		// If the column is a Closure instance, we will assume is a nested where statement.
		if ($column instanceof Closure && is_null($operator)) {
			//TODO: Do we need it?
			$column($query = $this->newQuery());
			$column = $query;
		}

		// If the column is a Closure instance and there is an operator value, we will
		// assume the developer wants to run a subquery and then compare the result
		// of that subquery with the given value that was provided to the method.
		if ($this->isQueryable($column) && !is_null($operator)) {
			//TODO: Do we need it?
		}

		// If the given operator is not found in the list of valid operators, we will
		// assume that the developer is just short-cutting the '=' operators, and
		// we will set the operators to '=' and set the values appropriately.
		if (!$this->isValidOperator($operator)) {
			$operator = '=';
		}

		// If the value is a Closure, it means the developer is performing an entire
		// sub-select within the query, and we will need to compile the sub-select
		// within the where clause to get the appropriate query record results.
		if ($this->isQueryable($value)) {
			//TODO: Do we need it?
			//return $this->whereSub($column, $operator, $value, $boolean);
		}

		// If the value is "null", we will just assume the developer wants to add a
		// where null clause to the query. So, we will allow a short-cut here to
		// that method for convenience so the developer doesn't have to check.
		if (is_null($value)) {
			return $this->whereNull($column, $boolean, $operator !== '=');
		}

		$operator = strtoupper($operator);
		$type     = 'Basic';

		// Now that we're working with just a simple query, we can put the elements
		// in our array and add the query binding to our array of bindings that
		// will be bound to each SQL statement when it is finally executed.
		$this->where[] = compact('type', 'column', 'operator', 'value', 'boolean', 'not');

		return $this;
	}

	/**
	 * Add an or where not clause
	 *
	 * @param  string|array|Closure|Query  $column  The column to use in the where statement
	 * @param  string  $operator  The operator to use
	 * @param  mixed  $value  The value to compare with
	 *
	 * @return $this
	 */
	public function whereNot($column, $operator = null, $value = null)
	{
		return $this->where($column, $operator, $value, 'AND', true);
	}

	/**
	 * Add an OR WHERE clause
	 *
	 * @param  string|array|Closure|Query  $column  The column to use in the where statement
	 * @param  string  $operator  The operator to use
	 * @param  mixed  $value  The value to compare with
	 *
	 * @return $this
	 */
	public function orWhere($column, $operator = null, $value = null)
	{
		return $this->where($column, $operator, $value, 'OR');
	}

	/**
	 * Add an OR WHERE clause
	 *
	 * @param  string|array|Closure|Query  $column  The column to use in the where statement
	 * @param  string  $operator  The operator to use
	 * @param  mixed  $value  The value to compare with
	 *
	 * @return $this
	 */
	public function orWhereNot($column, $operator = null, $value = null)
	{
		return $this->where($column, $operator, $value, 'OR', true);
	}

	/**
	 * Add a where null clause
	 *
	 * @param  string|array|mixed  $columns  The column or columns to include in the where
	 * @param  string  $boolean  Operation to use
	 * @param  boolean  $not  Negate the clause
	 *
	 * @return $this
	 */
	public function whereNull($columns, $boolean = 'AND', $not = false)
	{
		$columns = is_array($columns) ? $columns : [$columns];
		$type    = 'Null';

		foreach ($columns as $column) {
			$this->where[] = compact('type', 'column', 'boolean', 'not');
		}

		return $this;
	}

	/**
	 * Add a where not null clause
	 *
	 * @param  string|array|mixed  $columns  The column or columns to include in the where
	 *
	 * @return $this
	 */
	public function whereNotNull($columns)
	{
		return $this->whereNull($columns, 'AND', true);
	}

	/**
	 * Add am or where null clause
	 *
	 * @param  string|array|mixed  $columns  The column or columns to include in the where
	 *
	 * @return $this
	 */
	public function orWhereNull($columns)
	{
		return $this->whereNull($columns, 'OR');
	}

	/**
	 * Add an or where not null clause
	 *
	 * @param  string|array|mixed  $columns  The column or columns to include in the where
	 *
	 * @return $this
	 */
	public function orWhereNotNull($columns)
	{
		return $this->whereNull($columns, 'OR', true);
	}

	/**
	 * Add where in clause
	 *
	 * @param  string  $column
	 * @param  string|array|mixed  $values
	 * @param  string  $boolean
	 * @param  boolean  $not
	 *
	 * @return $this
	 */
	public function whereIn($column, $values, $boolean = 'AND', $not = false)
	{
		$type   = 'In';
		$values = is_array($values) ? $values : [$values];

		if (is_array($values[0] ?? [])) {
			throw new InvalidArgumentException('Nested arrays may not be passed to whereIn method.');
		}

		$this->where[] = compact('type', 'column', 'values', 'boolean', 'not');
		return $this;
	}

	/**
	 * Add where not in clause
	 *
	 * @param  string  $column
	 * @param  mixed  $values
	 *
	 * @return $this
	 */
	public function whereNotIn($column, $values)
	{
		return $this->whereIn($column, $values, 'AND', true);
	}

	/**
	 * Add or where in clause
	 *
	 * @param  string  $column
	 * @param  mixed  $values
	 *
	 * @return $this
	 */
	public function orWhereIn($column, $values)
	{
		return $this->whereIn($column, $values, 'OR');
	}

	/**
	 * Add or where not in clause
	 *
	 * @param  string  $column
	 * @param  mixed  $values
	 *
	 * @return $this
	 */
	public function orWhereNotIn($column, $values)
	{
		return $this->whereIn($column, $values, 'OR', true);
	}

	/**
	 * Add a where with a function modifying column
	 *
	 * @param  string  $function  The function to wrap the column in
	 * @param  string|mixed  $column  The column to include in the clause
	 * @param  string  $operator  The operator to use
	 * @param  string|mixed  $value  The value of to compare to
	 * @param  string  $boolean  Negate the comparison
	 *
	 * @return $this
	 */
	public function whereFunction($function, $column, $operator, $value = null, $boolean = 'AND')
	{
		if (!is_string($function) || empty($function)) {
			throw new InvalidArgumentException("Function must be a string.");
		}

		// If values is null and we not a valid operator, we will assume the operator us an equals sign.
		if (is_null($value) && !$this->isValidOperator($operator)) {
			[$value, $operator] = [$operator, '='];
		}

		// If the given operator is not found in the list of valid operators, we will
		// assume that the developer is just short-cutting the '=' operators, and
		// we will set the operators to '=' and set the values appropriately.
		if (!$this->isValidOperator($operator)) {
			[$value, $operator] = [$operator, '='];
		}

		$operator = strtoupper($operator);
		$type     = 'Function';

		$this->where[] = compact('type', 'column', 'operator', 'value', 'boolean');
		return $this;
	}

	/**
	 * Add a where day clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  string  $boolean
	 *
	 * @return $this
	 */
	public function whereDay($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Day', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where day clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereDay($column, $operator, $value = null)
	{
		return $this->whereDay($column, $operator, $value, 'OR');
	}

	/**
	 * Add a where month clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  boolean  $boolean
	 *
	 * @return $this
	 */
	public function whereMonth($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Month', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where month clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereMonth($column, $operator, $value = null)
	{
		return $this->whereMonth($column, $operator, $value, 'OR');
	}

	/**
	 * Add a where quarter clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  boolean  $boolean
	 *
	 * @return $this
	 */
	public function whereQuarter($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Quarter', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where quarter clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereQuarter($column, $operator, $value = null)
	{
		return $this->whereQuarter($column, $operator, $value, 'OR');
	}

	/**
	 * Add a where year clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  boolean  $boolean
	 *
	 * @return $this
	 */
	public function whereYear($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Year', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where year clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereYear($column, $operator, $value = null)
	{
		return $this->whereYear($column, $operator, $value, 'OR');
	}

	/**
	 * Add a where date clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  boolean  $boolean
	 *
	 * @return $this
	 */
	public function whereDate($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Date', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where date clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereDate($column, $operator, $value = null)
	{
		return $this->whereDate($column, $operator, $value, 'OR');
	}

	/**
	 * Add a where time clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 * @param  boolean  $boolean
	 *
	 * @return $this
	 */
	public function whereTime($column, $operator, $value = null, $boolean = 'AND')
	{
		return $this->whereFunction('Time', $column, $operator, $value, $boolean);
	}

	/**
	 * Add an or where time clause
	 *
	 * @param  string|Closure|static  $column
	 * @param  string  $operator
	 * @param  mixed  $value
	 *
	 * @return $this
	 */
	public function orWhereTime($column, $operator, $value = null)
	{
		return $this->whereTime($column, $operator, $value, 'OR');
	}

	/**
	 * Add GROUP BY clause to the query
	 *
	 * @param  string|self|Closure  $column
	 *
	 * @return $this
	 */
	public function groupBy($column)
	{
		if (is_array($column)) {
			array_map([$this, 'groupBy'], $column);
			return $this;
		}

		$this->groupBy[] = $column;

		return $this;
	}

	/**
	 * Add ORDER BY clause to the query
	 *
	 * @param  string|self|Closure  $column  The column to order
	 * @param  string  $direction  The order direction
	 *
	 * @return $this
	 */
	public function orderBy($column, $direction = 'ASC')
	{
		$direction = strtoupper(trim($direction));

		if (!in_array($direction, ['ASC', 'DESC'], true)) {
			throw new InvalidArgumentException('Order direction must be "ASC" or "DESC".');
		}

		$this->orderBy[] = compact('column', 'direction');

		return $this;
	}

	/**
	 * Order by desc
	 *
	 * @param  string|self|Closure  $column
	 *
	 * @return $this
	 */
	public function orderByDesc($column)
	{
		return $this->orderBy($column, 'DESC');
	}

	/**
	 * Add LIMIT clause to the query
	 *
	 * @param  int  $value
	 *
	 * @return $this
	 */
	public function limit($value)
	{
		$this->limit = max(1, (int) $value);

		return $this;
	}

	/**
	 * Add OFFSET clause to the query
	 *
	 * @param  int  $value
	 *
	 * @return $this
	 */
	public function offset($value)
	{
		$this->offset = max(0, (int) $value);
		return $this;
	}

	/**
	 * Return the SQL representation of the query
	 *
	 * @return string
	 */
	public function toSql()
	{
		return '';
	}


	/**
	 * Determine if the current value is a Queryable object
	 *
	 * @param  string|mixed  $value
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	protected function isQueryable($value)
	{
		return $value instanceof self || $value instanceof Closure;
	}

	/**
	 * Get a new instance of the query builder.
	 *
	 * @return static
	 * @since 0.1.0
	 */
	public function newQuery()
	{
		return new static();
	}

	/**
	 * Escape a value
	 *
	 * @param  string  $value
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function escape($value)
	{
		if ($value !== '*') {
			return '"'.str_replace('"', '""', $value).'"';
		}

		return $value;
	}

	/**
	 * Platform-dependent string escape
	 *
	 * @param  string
	 *
	 * @return    string
	 */
	protected function _escape_str($str)
	{
		return str_replace("'", "''", remove_invisible_characters($str, false));//TODO: implement
	}

	public function selectSubQuery($column, $as)
	{
		//TODO: Implement
	}

	/**
	 * Determine if the given operator valid.
	 *
	 * Prevents using Null values with invalid operators.
	 *
	 * @param  string  $operator
	 *
	 * @return bool
	 */
	protected function isValidOperator($operator)
	{
		//&& !in_array($operator, ['=', '<>', '!='])
		return in_array($operator, $this->operators);
	}

	/**
	 * Compile the SQL statement
	 *
	 * @link https://dev.mysql.com/doc/refman/8.4/en/select.html
	 *
	 * @return string
	 */
	public function compile()
	{
		// Clauses to compile
		$clauses = ['columns', 'from', 'where', 'having', 'groupBy', 'orderBy', 'limit', 'offset'];

		// Let us filter those clauses we're going to compile
		$clauses = array_filter($clauses, function ($prop){
			return !empty($this->$prop);
		});

		//compile each clause
		$clauses = array_map(function ($value){
			return $this->{'compile'.ucfirst($value)}();
		}, $clauses);

		// trim them
		$clauses = array_map('trim', $clauses);
		$clauses = array_filter($clauses);

		return implode(' ', $clauses);
	}

	/**
	 * Compile a single column
	 *
	 * @param  string|array|static  $column
	 *
	 * @return string
	 */
	public function compileColumn($column)
	{
		if (is_array($column)) {
			return implode(', ', array_map([$this, 'compileColumn'], $column));
		}

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
	 * Compile SELECT columns in the query
	 *
	 * @return string
	 */
	public function compileColumns()
	{
		//No columns to select, we will asume this is a WHERE clause
		//No need to compile select clause
		if (empty($this->columns)) {
			return '';
		}

		if ($this->distinct) {
			$select = 'SELECT DISTINCT ';
		}else {
			$select = 'SELECT ';
		}

		$columns = $this->compileColumn($this->columns);
		return $select.$columns;
	}

	/**
	 * Compile FROM clause of the query
	 *
	 * @return string
	 */
	public function compileFrom()
	{
		$from = $this->from['table'] ?? null;
		if (empty($from)) {
			return '';
		}
		//TODO: scape table and as
		[$from, $as] = $this->from;//TODO: fix if no as set in array there is an error
		$sql = $this->isQueryable($from) ? "({$from})" : "{$from}";
		$sql .= empty($as) ? '' : ' AS '.$as;
		return 'FROM '.$sql;
	}

	/**
	 * Compile WHERE statements
	 *
	 * @return string
	 */
	public function compileWhere()
	{
		//TODO: Implement

		// Each type of where clause has its own compiler function, which is responsible
		// for actually creating the where clauses SQL. This helps keep the code nice
		// and maintainable since each clause has a very small method that it uses.
		if (empty($this->where)) {
			return '';
		}


		return '';
	}

	/**
	 * Compile a basic where clause
	 *
	 * @param $where
	 *
	 * @return string
	 */
	public function compileWhereBasic($where)
	{
		$value = $this->parameter($where['value']);

		$operator = str_replace('?', '??', $where['operator']);

		return $this->wrap($where['column']).' '.$operator.' '.$value;
	}

	/**
	 * Compile where in clause
	 *
	 * @param $where
	 *
	 * @return string
	 */
	protected function compileWhereIn($where)
	{
		if (!empty($where['values'])) {
			$in = $where['not'] ? 'NOT IN' : 'IN';
			return $this->wrap($where['column'])." {$in} ".'('.$this->parameterize($where['values']).')';
		}

		return $where['not'] ? '1 = 1' : '0 = 1';
	}

	/**
	 * Compile GROUP BY clause
	 *
	 * @return string
	 */
	public function compileGroupBy()
	{
		if (empty($this->groupBy)) {
			return '';
		}

		//Implode all group by values
		$orders = implode(', ', array_map(function ($value){
			return trim(implode(' ', $value));
		}, $this->orderBy));
		return "GROUP BY {$orders}";
	}

	/**
	 * Compile Having clause
	 *
	 * @return string
	 */
	public function compileHaving()
	{
		//TODO: Implement
		return '';
	}

	/**
	 * Compile ORDER BY portion of the query
	 * Each array element will have the format ['column' => '', 'direction' => '']
	 *
	 * @return string
	 */
	public function compileOrderBy()
	{
		if (empty($this->orderBy)) {
			return '';
		}

		//Implode all order by values
		$orders = implode(', ', array_map(function ($value){
			return trim(implode(' ', $value));
		}, $this->orderBy));
		return "ORDER BY {$orders}";
	}

	/**
	 * Compile LIMIT statement
	 *
	 * @return string
	 */
	public function compileLimit()
	{
		return is_null($this->limit) ? '' : ('LIMIT '.(int) $this->limit);
	}

	/**
	 * Compile OFFSET statement
	 *
	 * @return string
	 */
	public function compileOffset()
	{
		return is_null($this->offset) ? '' : ('OFFSET '.(int) $this->offset);
	}
}
