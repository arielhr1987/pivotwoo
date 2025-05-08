<?php

namespace Pivotwoo\Query\Clause;

use Closure;
use Pivotwoo\Query\Clause;

/**
 * Class to handle conditions
 */
class Condition extends Clause
{
	/**
	 * List of conditions
	 * @var array
	 * @since 0.1.0
	 */
	protected $conditions = [];

	/**
	 * All available operators
	 *
	 * @var string[]
	 * @since 0.1.0
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
	 * Add a basic condition.
	 *
	 * @param  string|self|Closure|array  $column
	 * @param  mixed  $operator
	 * @param  mixed  $value
	 * @param  string  $boolean
	 * @param  boolean  $not
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function add($column, $operator = null, $value = null, $boolean = 'AND', $not = false)
	{
		// If the column is an array, we will assume it is an array of key-value pairs
		// and can add them each as a condition. We will maintain the boolean we
		// received when the method was called and pass it into the nested condition.
		if (is_array($column)) {
			foreach ($column as $k => $v) {
				$this->add($k, $operator, $v, $boolean);
			}
		}

		// If only 2 values are passed to the method, we will assume that the operator is an equals sign
		if (func_num_args() === 2) {
			$value    = $operator;
			$operator = '=';
		}

		// If the column is a Closure instance, we will assume is a nested where statement.
		if ($column instanceof Closure && is_null($operator)) {
//			$column($query = $this->newQuery());
//			$column = $query;
			$column = $this->toQueryable($column);
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
		$type     = 'comparison';

		// Now that we're working with just a simple query, we can put the elements
		// in our array and add the query binding to our array of bindings that
		// will be bound to each SQL statement when it is finally executed.
		$this->conditions[] = compact('type', 'column', 'operator', 'value', 'boolean', 'not');

		return $this;
	}

	public function compare($column, $operator = null, $value = null, $boolean = 'AND', $not = false)
	{
		$this->conditions[] = new Comparison($column, $operator, $value, 'compare', $boolean);
	}

	public function isNull($column){
		$this->conditions[] = new Comparison($column, null, null, 'isNull');
	}

	public function isNotNull($column)
	{

	}

	public function isIn()
	{

	}

	public function isNotIn()
	{

	}

	public function compile()
	{
		array_map(function ($condition) {

		}, $this->conditions);
	}
}
