<?php

namespace Pivotwoo\Core\Tree;

use InvalidArgumentException;
use function array_filter;
use function array_merge;
use function array_unshift;
use function array_values;
use function max;

/**
 * Node Trait
 */
trait NodeTrait
{
	/**
	 * The value of the node
	 * @var mixed|null
	 */
	protected mixed $value = null;

	/**
	 * The parent of the node
	 *
	 * @var NodeInterface|null
	 */
	protected ?NodeInterface $parent = null;

	/**
	 * List of children of the node
	 *
	 * @var NodeInterface[]
	 */
	private array $children = [];

	/**
	 * Set the value of the current node.
	 *
	 * @param  mixed  $value
	 *
	 * @return static
	 */
	public function setValue(mixed $value): static
	{
		$this->value = $value;

		return $this;
	}

	/**
	 * Get the current node value.
	 *
	 * @return mixed
	 */
	public function getValue(): mixed
	{
		return $this->value;
	}

	/**
	 * Add a child.
	 *
	 * @param  NodeInterface  $child
	 *
	 * @return static
	 *
	 * @throws InvalidArgumentException
	 */
	public function addChild(NodeInterface $child): static
	{
		$child->setParent($this);
		$this->children[] = $child;

		return $this;
	}

	/**
	 * Remove a node from children.
	 *
	 * @param  NodeInterface  $child
	 *
	 * @return static
	 */
	public function removeChild(NodeInterface $child): static
	{
		foreach ($this->children as $key => $myChild) {
			if ($child === $myChild) {
				unset($this->children[$key]);
			}
		}

		$this->children = array_values($this->children);

		$child->setParent(null);

		return $this;
	}

	/**
	 * Remove all children.
	 *
	 * @return static
	 */
	public function removeAllChildren(): static
	{
		$this->setChildren([]);

		return $this;
	}

	/**
	 * Return the array of children.
	 *
	 * @return NodeInterface[]
	 */
	public function getChildren(): array
	{
		return $this->children;
	}

	/**
	 * Replace the children set with the given one.
	 *
	 * @param  NodeInterface[]  $children
	 *
	 * @return static
	 */
	public function setChildren(array $children): static
	{
		foreach ($this->getChildren() as $child) {
			$child->setParent(null);
		}

		$this->children = [];

		foreach ($children as $child) {
			$this->addChild($child);
		}

		return $this;
	}

	/**
	 * Set the parent node.
	 *
	 * @param  NodeInterface|null  $parent
	 */
	public function setParent(?NodeInterface $parent = null): void
	{
		$this->parent = $parent;
	}

	/**
	 * Return the parent node.
	 *
	 * @return NodeInterface|null
	 */
	public function getParent(): ?static
	{
		return $this->parent;
	}

	/**
	 * Return the ancestors of the current node.
	 *
	 * @return NodeInterface[]
	 */
	public function getAncestors(): array
	{
		$parents = [];
		$node    = $this;

		while (($parent = $node->getParent()) instanceof NodeInterface) {
			array_unshift($parents, $parent);
			$node = $parent;
		}

		return $parents;
	}

	/**
	 * Return the ancestors of the node as well as the node itself.
	 *
	 * @return NodeInterface[]
	 */
	public function getAncestorsAndSelf(): array
	{
		return array_merge($this->getAncestors(), [$this]);
	}

	/**
	 * Return the siblings of the current node.
	 *
	 * @return NodeInterface[]
	 */
	public function getSiblings(): array
	{
		if (empty($this->getParent())) {
			return [];
		}

		$neighbors = $this->parent->getChildren();
		$that      = $this;

		return array_values(array_filter($neighbors, static function (NodeInterface $node) use ($that): bool{
			return $node !== $that;
		}));
	}

	/**
	 * Return the siblings of the current node and the node itself.
	 *
	 * @return NodeInterface[]
	 */
	public function getSiblingsAndSelf(): array
	{
		if (null === $this->parent) {
			return [$this,];
		}

		return $this->parent->getChildren();
	}

	/**
	 * Check if is a root node.
	 *
	 * @return bool
	 */
	public function isRoot(): bool
	{
		return null === $this->getParent();
	}

	/**
	 * Check if is a child node.
	 *
	 * @return bool
	 */
	public function isChild(): bool
	{
		return !$this->isRoot();
	}

	/**
	 * Check if is a leaf node.
	 *
	 * @return bool
	 */
	public function isLeaf(): bool
	{
		return empty($this->getChildren());
	}

	/**
	 * Get the root node of the tree.
	 *
	 * @return static
	 */
	public function root(): static
	{
		$node = $this;

		while (($parent = $node->getParent()) instanceof NodeInterface) {
			$node = $parent;
		}

		return $node;
	}

	/**
	 * Return the distance from the current node to the root.
	 *
	 * Warning: It can be expensive since each descendant is visited
	 */
	public function getDepth(): int
	{
		if ($this->isRoot()) {
			return 0;
		}

		return $this->getParent()->getDepth() + 1;
	}

//	/**
//	 * Return the height of the tree whose root is this node.
//	 */
//	public function getHeight(): int
//	{
//		if ($this->isLeaf()) {
//			return 0;
//		}
//
//		$heights = [];
//
//		foreach ($this->getChildren() as $child) {
//			$heights[] = $child->getHeight();
//		}
//
//		return max($heights) + 1;
//	}
//
//	public function getSize(): int
//	{
//		$size = 1;
//
//		foreach ($this->getChildren() as $child) {
//			$size += $child->getSize();
//		}
//
//		return $size;
//	}
//
//	public function accept(Visitor $visitor): mixed
//	{
//		return $visitor->visit($this);
//	}
}
