<?php

use PHPUnit\Framework\TestCase;
use Pivotwoo\Core\DataSource\MySQLDataSource;
use Pivotwoo\Core\DataSource\WordpressDataSource;
use Pivotwoo\Core\Dimension;
use Pivotwoo\Core\Measure\Measure;
use Pivotwoo\Core\Pivot;

/**
 * Basic unit tests for Pivot.
 */
final class TestPivot extends TestCase
{

	/**
	 * Test if 1 === 1.
	 */
	public function testAxisExpand(): void
	{
		//pivot
		$pivot = new Pivot();

		//Data source
		$ds = new WordpressDataSource();
		$pivot->setDataSource($ds);

		//Columns
		$country  = new Dimension('country');
		$city     = new Dimension('city');
		$customer = new Dimension('customerName');
		$pivot->setColumns([$country, $city, $customer]);

		//Rows
		$productLine = new Dimension('productLine');
		$productName = new Dimension('productName');
		$pivot->setRows([$productLine, $productName]);

		//Measures dollar_sales
		$sales = new Measure('dollar_sales');
		$pivot->setMeasures([$sales]);

		//Process the pivot
		$pivot->process();

		$this->assertEquals(1, 1);
	}


}
