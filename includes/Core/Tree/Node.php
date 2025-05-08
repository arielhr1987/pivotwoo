<?php

namespace Pivotwoo\Core\Tree;

/**
 * Node class
 *
 * A simple tree implementation to handle nodes in a pivot axis.
 *
 * @since 0.1.0
 */
class Node implements NodeInterface
{
	use NodeTrait;

	/**
	 * Class constructor
	 * @param NodeInterface[] $children
	 */
	public function __construct(
		mixed $value = null,
		array $children = [],
	) {
		$this->setValue($value);

		if ([] === $children) {
			return;
		}

		$this->setChildren($children);
	}
}
