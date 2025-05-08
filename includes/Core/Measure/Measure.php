<?php

namespace Pivotwoo\Core\Measure;

/**
 * Class Pivotwoo\Core\Measure
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
	protected $displayName;

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
	 * Class constructor.
	 *
	 * @param string $name
	 */
	public function __construct($name)
	{
		$this->name        = $name;
		$this->displayName = $name;
		$this->column      = $name;
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * Get the measure display name
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getDisplayName()
	{
		return $this->displayName;
	}

	/**
	 * Get database column
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getColumn()
	{
		return $this->column;
	}

	/**
	 * Get the aggregator
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getAggregator()
	{
		return $this->aggregator;
	}

	/**
	 * Get total expression
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function getTotalExpression()
	{
		return sprintf('%s(`%s`)', $this->aggregator, $this->column);
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
