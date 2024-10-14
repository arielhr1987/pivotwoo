<?php

namespace Pivotwoo\Core;

/**
 * Class Pivotwoo\Cor\Measure
 *
 * Base class that represents a measure
 *
 * @since 0.1.0
 */
class Measure
{
	/**
	 * The measure name.
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $name;

	/**
	 * The measure display name.
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $display_name;

	/**
	 * The field to use in queries
	 *
	 * @var string
	 */
	protected $column;

	/**
	 * Aggregator method
	 *
	 * @var string
	 * @since 0.1.0
	 */
	protected $aggregator = 'SUM';

	/**
	 * @return string
	 */
	public function get_name(): string
	{
		return $this->name;
	}

	/**
	 * Get measure display name
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function get_display_name()
	{
		return $this->display_name;
	}

	/**
	 * Get database column
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function get_column()
	{
		return $this->column;
	}

	/**
	 * Get the aggregator
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function get_aggregator()
	{
		return $this->aggregator;
	}

	/**
	 * Get total expression
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function get_total_expression()
	{
		return sprintf('%s(%s)', $this->aggregator, $this->column);
	}

	/**
	 * Format a given value
	 *
	 * @param $value
	 *
	 * @return mixed
	 * @since 0.1.0
	 */
	public function format($value)
	{
		return $value;
	}
}
