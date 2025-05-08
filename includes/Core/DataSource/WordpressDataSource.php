<?php

namespace Pivotwoo\Core\DataSource;

/**
 * Class MysqlDataSource
 *
 * MySQL data source implementation of the DataSource interface.
 *
 * @since 0.1.0
 */
class WordpressDataSource implements DataSource
{

	/**
	 * The database connection
	 *
	 * @var \mysqli
	 */
	protected $db;

	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->db = new \mysqli('mysql', 'root', 'password', 'testdata');

		if (!empty($db->error)) {
			die('Error: '.$db->error);
		}
	}

	/**
	 * Execute a query and fetch all rows
	 *
	 * @var string $sql
	 */
	public function query($sql)
	{
		$results = $this->db->query($sql);

		$results = $results->fetch_all();

		return $results;
	}

	public function escape($str)
	{
		return $this->db->real_escape_string($str);
	}
}
