<?php

namespace Pivotwoo\Query\Clause;

use Closure;
use InvalidArgumentException;
use Pivotwoo\Query\Clause;
use Pivotwoo\Query\Query;

/**
 * Class to handle join logic
 */
class Join extends Clause
{
	/**
	 * Inner join
	 * @since 0.1.0
	 */
	const INNER = 'INNER';

	/**
	 * left join
	 * @since 0.1.0
	 */
	const LEFT = 'LEFT';

	/**
	 * Right join
	 * @since 0.1.0
	 */
	const RIGHT = 'RIGHT';

	/**
	 * Full join
	 * @since 0.1.0
	 */
	const FULL = 'FULL';

	/**
	 * The type of join to make
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $type = self::INNER;

	/**
	 * The table we want to join
	 *
	 * @var null|string
	 * @since 0.1.0
	 */
	protected $table = null;

	/**
	 * The alias for the table
	 *
	 * @var null|string
	 * @since 0.1.0
	 */
	protected $as = null;

	/**
	 * The conditions we're going to use to do the join
	 *
	 * @var null|Condition
	 * @since 0.1.0
	 */
	protected $on = null;

	/**
	 * Class constructor
	 */
	public function __construct($table, $on = null, $type = self::INNER)
	{
		$this->type($type);
		$this->table($table);
		$this->on($on);
	}

	/**
	 * Set the type of the join clause
	 *
	 * @param  string  $value  If not valid value is provided, INNER is set by default
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function type($value)
	{
		$value = !is_string($value) ? self::INNER : strtoupper(trim($value));

		if (!in_array($value, [self::INNER, self::LEFT, self::RIGHT, self::FULL])) {
			$value = self::INNER;
		}

		$this->type = $value;

		return $this;
	}

	/**
	 * Get the join type
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * Determine if is an INNER JOIN
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isInner()
	{
		return $this->type === self::INNER;
	}

	/**
	 * Determine if is a LEFT JOIN
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isLeft()
	{
		return $this->type === self::LEFT;
	}

	/**
	 * Determine if is a RIGHT JOIN
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isRight()
	{
		return $this->type === self::RIGHT;
	}

	/**
	 * Determine if is a FULL JOIN
	 *
	 * @return bool
	 * @since 0.1.0
	 */
	public function isFull()
	{
		return $this->type === self::FULL;
	}

	/**
	 * The table name to join
	 *
	 * @param  string  $table
	 *
	 * @return self
	 */
	public function table($table, $as = null)
	{
		$table = $this->toQueryable($table);
		if (!is_string($table) || !$this->isQueryable($table)) {
			throw new InvalidArgumentException('Argument "table" most be a string or Query');
		}

		if (!is_string($as)) {
			throw new InvalidArgumentException('Argument "as" most be a string');
		}

		$this->table = $table;
		return $this;
	}

	/**
	 * Get the table to join
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getTable()
	{
		return $this->table;
	}

	/**
	 * Set ON condition to join the tables
	 *
	 * @param  Closure|Condition  $on
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function on($on)
	{
		if ($on instanceof Closure) {
			$on($expression = new Condition());
			$on = $expression;
		}

		if (!$on instanceof Condition) {
			throw new InvalidArgumentException('Argument "on" must be a valid Condition');
		}

		$this->on = $on;
		return $this;
	}

	/**
	 * Get ON conditions
	 *
	 * @return Condition|null
	 * @since 0.1.0
	 */
	public function getOn()
	{
		return $this->on;
	}

	/**
	 * Compile the join clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		if (empty($this->table)) {
			return "";
		}

		//determine the join type
		$type = $this->isInner() ? '' : $this->type;

		$table = $this->table;//TODO: validate
		if ($table instanceof Query) {
			$table = "({$table})";
		}

		//determine alias
		$as = $this->as;      //TODO: validate
		if (!empty($as)) {
			$table .= " {$as}";
		}

		//determine ON clause
		$on = $this->on->compile();
		if (!empty($on)) {
			$on = ' ON '.$on;
		}

		return trim("{$type} JOIN {$table} {$on}");
	}
}
