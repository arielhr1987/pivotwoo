<?php

namespace Pivotwoo\Query\Clause;

use InvalidArgumentException;
use Pivotwoo\Query\Clause;
use Pivotwoo\Query\Query;

/**
 * Class to handle ORDER BY clause
 */
class OrderBy extends Clause
{
	/**
	 * Order by ASC
	 * @since 0.1.0
	 */
	const ASC = "ASC";

	/**
	 * Order by DESC
	 * @since 0.1.0
	 */
	const DESC = "DESC";

	/**
	 * The columns to order by
	 *
	 * @var array
	 * @since 0.1.0
	 */
	protected $columns = [];

	/**
	 * Add ORDER BY clause to the query
	 *
	 * @param  string|Closure|Query  $column  The column to order
	 * @param  string  $direction  The order direction
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function column($column, $direction = self::ASC)
	{
		$direction = strtoupper(trim($direction));

		if (!in_array($direction, [self::ASC, self::DESC], true)) {
			throw new InvalidArgumentException('Order direction must be "ASC" or "DESC".');
		}

		$column = $this->toQueryable($column);

		$this->columns[] = compact('column', 'direction');

		return $this;
	}

	/**
	 * Compile the order by Clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		if (empty($this->columns)) {
			return '';
		}

		//Implode all the order by values
		$orders = implode(', ', array_map(function ($value){
			return trim(implode(' ', $value));
		}, $this->columns));

		return "ORDER BY {$orders}";
	}
}
