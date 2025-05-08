<?php

namespace Pivotwoo\Query;

use Closure;
use Pivotwoo\Core\Query;
use RuntimeException;

/**
 * Clause class
 */
abstract class Clause implements Contracts\Clause
{
	/**
	 * Determine if a given value is queryable
	 *
	 * @param  mixed  $value
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isQueryable($value)
	{
		return $value instanceof Query || $value instanceof Closure;
	}

	/**
	 * Convert a Closure to query object
	 *
	 * @param  mixed  $value
	 *
	 * @return mixed
	 */
	public function toQueryable($value)
	{
		//If Closure given convert to Query
		if ($value instanceof Closure) {
			$value($query = new Query());
			$value = $query;
		}

		return $value;
	}

	/**
	 * Compile the clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		throw new RuntimeException('Child class should implement compile method.');
	}

	/**
	 * Compile the clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function __toString()
	{
		return $this->compile();
	}
}
