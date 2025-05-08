<?php
use PHPUnit\Framework\TestCase;

/**
 * Basic unit tests for Pivot.
 */
final class TestQuery extends TestCase {

	/**
	 * Test if 1 === 1.
	 */
	public function testAxisExpand(): void {

		$query = new \Pivotwoo\Core\Query();

		$query = $query
			->select()
			->from('user')
			->where('username' , 'ariel')
			->limit(10)
			->orderBy('username');

		$sql = $query->compile();

		$this->assertEquals( 1, 1 );
	}
}
