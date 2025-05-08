<?php

namespace Pivotwoo\Query\Expression;

/**
 * Class to define a query expression
 */
class Expression
{

	/**
	 * The SQL expression
	 * @var null|string
	 */
	protected $sql = null;

	/**
	 * The bindings to use in the query
	 * @var array|mixed
	 */
	protected $bindings = [];

	/**
	 * Class constructor
	 *
	 * @param  string  $sql
	 * @param  array  $bindings
	 */
	public function __construct($sql, $bindings = [])
	{
		$this->sql      = $sql;
		$this->bindings = $bindings;
	}

	/**
	 * Get the SQL expression
	 *
	 * @return string
	 */
	public function getSQL()
	{
		return $this->sql;
	}

	/**
	 * Get the bindings to use in the query
	 *
	 * @return array|mixed
	 */
	public function getBindings()
	{
		return $this->bindings;
	}
}
