<?php

namespace Pivotwoo\Query\Clause;

/**
 * Class to handle LIMIT clause
 */
class Limit
{
	/**
	 * The limit to use in the query
	 *
	 * @var null|int
	 * @since 0.1.0
	 */
	protected $limit = null;

	/**
	 * The offset to select
	 *
	 * @var null|int
	 * @since 0.1.0
	 */
	protected $offset = null;

	/**
	 * Limit class constructor
	 *
	 * @param  null|integer  $limit
	 * @param  null|integer  $offset
	 *
	 * @since 0.1.0
	 */
	public function __construct($limit = null, $offset = null)
	{
		$this->limit  = $limit;
		$this->offset = $offset;
	}

	/**
	 * Get the limit
	 *
	 * @return int|null
	 * @since 0.1.0
	 */
	public function getLimit()
	{
		return $this->limit;
	}

	/**
	 * Get the offset
	 *
	 * @return int|null
	 * @since 0.1.0
	 */
	public function getOffset()
	{
		return $this->offset;
	}

	/**
	 * Set the limit
	 *
	 * @param  integer  $value  The value to set
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function set($value)
	{
		$this->limit = max(1, (int) $value);

		return $this;
	}

	/**
	 * Set the offset
	 *
	 * @param  integer  $value  The value to set
	 *
	 * @return self
	 * @since 0.1.0
	 */
	public function offset($value)
	{
		$this->offset = max(0, (int) $value);
		return $this;
	}

	/**
	 * Compile the clause
	 *
	 * @return string
	 * @since 0.1.0
	 */
	public function compile()
	{
		if (is_null($this->limit)) {
			return '';
		}

		return 'LIMIT '.(is_null($this->offset) ? '' : ((int) $this->offset.', ')).(int) $this->limit;
	}

	/**
	 * @return array
	 * @since 0.1.0
	 */
	public function getBindings()
	{
		return [];
	}
}
