<?php

namespace Pivotwoo\Query\Clause;

use Pivotwoo\Query\Clause;

/**
 * Class to handle GROUP BY clause
 */
class GroupBy extends Clause
{
	/**
	 * Determine if the clause should contain WITH ROLLUP
	 * @var bool
	 */
	protected $withRollup = false;

	/**
	 * Columns to group by
	 *
	 * @var array{array}
	 * @since 0.1.0
	 */
	protected $columns = [];

	/**
	 * Set with rollup syntax to the query
	 *
	 * @param $value
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function withRollup($value)
	{
		$this->withRollup = (bool) $value;
		return $this;
	}

	/**
	 * Set a new column to GROUP BY
	 *
	 * @param  string|array|mixed  $value
	 *
	 * @return $this
	 * @since 0.1.0
	 */
	public function column($value)
	{
		if (is_array($value)) {
			array_map([$this, 'column'], $value);
			return $this;
		}

		$value = $this->toQueryable($value);

		$this->columns[] = $value;

		return $this;
	}

	/**
	 * Compile GROUP BY clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		if (empty($this->groupBy)) {
			return '';
		}

		//Implode all the group by values
		$orders = implode(', ', array_map(function ($value){
			return trim(implode(' ', $value));
		}, $this->columns));

		return "GROUP BY {$orders}".$this->withRollup ? ' WITH ROLLUP' : '';
	}
}
