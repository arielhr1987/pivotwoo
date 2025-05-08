<?php

namespace Pivotwoo\Query\Expression;

class CaseExpression extends Expression
{

	protected $condition;

	protected $then = null;

	protected $else = null;

	public function __construct($condition, $then = null, $else = null)
	{
		$this->condition = $condition;
		$this->then = $then;
		$this->else = $else;
	}

	public function compile()
	{
		$sql = 'CASE ';
	}
}
