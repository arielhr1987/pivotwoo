<?php

namespace Pivotwoo\Query\Clause;

use Pivotwoo\Query\Clause;

class Comparison extends Clause
{

	protected $type = 'compare';

	protected $boolean = 'AND';

	protected $column = null;

	protected $operator = '=';

	protected $value = null;

	public function __construct($column, $operator = '', $value = null, $type = 'compare', $boolean = 'AND')
	{
		$this->column   = $column;
		$this->operator = $operator;
		$this->value    = $value;
		$this->boolean  = $boolean;
		$this->type     = $type;
	}
}
