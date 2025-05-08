<?php

namespace Pivotwoo\Core\DataSource;

/**
 * DataSource interface
 */
interface DataSource
{
	/**
	 * Execute a query against the data source.
	 *
	 * @param string $sql
	 *
	 * @return array
	 */
	function query($sql);
}
