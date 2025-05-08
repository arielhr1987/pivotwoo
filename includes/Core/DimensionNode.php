<?php

namespace Pivotwoo\Core;

class DimensionNode
{
	protected $dimension = null;

	protected $value = null;

	public function __construct($dimension, $value)
	{
		$this->dimension = $dimension;
		$this->value     = $value;
	}

	public function getChildrenDimensions()
	{

	}
}
