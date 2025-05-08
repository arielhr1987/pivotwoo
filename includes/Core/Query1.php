<?php

namespace Pivotwoo\Core;

use InvalidArgumentException;

/**
 * Query Builder Class
 *
 * This is the platform-independent base Query Builder implementation class.
 * https://github.com/bcit-ci/CodeIgniter/blob/develop/system/database/DB_query_builder.php
 *
 * @package        CodeIgniter
 * @subpackage     Drivers
 * @category       Database
 * @author         EllisLab Dev Team
 * @link           https://codeigniter.com/userguide3/database/
 */
class Query1
{

	/**
	 * Return DELETE SQL flag
	 *
	 * @var    bool
	 */
	protected $returnDeleteSql = false;

	/**
	 * Reset DELETE data flag
	 *
	 * @var    bool
	 */
	protected $resetDeleteData = false;

	/**
	 * QB SELECT data
	 *
	 * @var    array
	 */
	protected $qbSelect = array();

	/**
	 * QB DISTINCT flag
	 *
	 * @var    bool
	 */
	protected $qbDistinct = false;

	/**
	 * QB FROM data
	 *
	 * @var    array
	 */
	protected $qbFrom = array();

	/**
	 * QB JOIN data
	 *
	 * @var    array
	 */
	protected $qbJoin = array();

	/**
	 * QB WHERE data
	 *
	 * @var    array
	 */
	protected $qbWhere = array();

	/**
	 * QB GROUP BY data
	 *
	 * @var    array
	 */
	protected $qbGroupby = array();

	/**
	 * QB HAVING data
	 *
	 * @var    array
	 */
	protected $qbHaving = array();

	/**
	 * QB keys
	 *
	 * @var    array
	 */
	protected $qbKeys = array();

	/**
	 * QB LIMIT data
	 *
	 * @var    int
	 */
	protected $qbLimit = false;

	/**
	 * QB OFFSET data
	 *
	 * @var    int
	 */
	protected $qbOffset = false;

	/**
	 * QB ORDER BY data
	 *
	 * @var    array
	 */
	protected $qbOrderby = array();

	/**
	 * QB data sets
	 *
	 * @var    array
	 */
	protected $qbSet = array();

	/**
	 * QB data set for update_batch()
	 *
	 * @var    array
	 */
	protected $qbSetUpdateBatch = array();

	/**
	 * QB aliased tables list
	 *
	 * @var    array
	 */
	protected $qbAliasedTables = array();

	/**
	 * QB WHERE group started flag
	 *
	 * @var    bool
	 */
	protected $qbWhereGroupStarted = false;

	/**
	 * QB WHERE group count
	 *
	 * @var    int
	 */
	protected $qbWhereGroupCount = 0;

	// Query Builder Caching variables

	/**
	 * QB Caching flag
	 *
	 * @var    bool
	 */
	protected $qbCaching = false;

	/**
	 * QB Cache exists list
	 *
	 * @var    array
	 */
	protected $qbCacheExists = array();

	/**
	 * QB Cache SELECT data
	 *
	 * @var    array
	 */
	protected $qbCacheSelect = array();

	/**
	 * QB Cache FROM data
	 *
	 * @var    array
	 */
	protected $qbCacheFrom = array();

	/**
	 * QB Cache JOIN data
	 *
	 * @var    array
	 */
	protected $qbCacheJoin = array();

	/**
	 * QB Cache aliased tables list
	 *
	 * @var    array
	 */
	protected $qbCacheAliasedTables = array();

	/**
	 * QB Cache WHERE data
	 *
	 * @var    array
	 */
	protected $qbCacheWhere = array();

	/**
	 * QB Cache GROUP BY data
	 *
	 * @var    array
	 */
	protected $qbCacheGroupby = array();

	/**
	 * QB Cache HAVING data
	 *
	 * @var    array
	 */
	protected $qbCacheHaving = array();

	/**
	 * QB Cache ORDER BY data
	 *
	 * @var    array
	 */
	protected $qbCacheOrderby = array();

	/**
	 * QB Cache data sets
	 *
	 * @var    array
	 */
	protected $qbCacheSet = array();

	/**
	 * QB No Escape data
	 *
	 * @var    array
	 */
	protected $qbNoEscape = array();

	/**
	 * QB Cache No Escape data
	 *
	 * @var    array
	 */
	protected $qbCacheNoEscape = array();

	/**
	 * Select
	 *
	 * Generates the SELECT portion of the query
	 *
	 * @param  string  $select  The columns to select
	 * @param  mixed  $escape
	 *
	 * @return    Query1
	 */
	public function select($select = '*', $escape = null)
	{
		if (is_string($select)) {
			$select = explode(',', $select);
		}

		// If the escape value wasn't set, we will base it on the global setting
		is_bool($escape) || $escape = $this->_protect_identifiers;

		foreach ($select as $val) {
			$val = trim($val);

			if ($val !== '') {
				$this->qbSelect[]   = $val;
				$this->qbNoEscape[] = $escape;

				if ($this->qbCaching === true) {
					$this->qbCacheSelect[]   = $val;
					$this->qbCacheExists[]   = 'select';
					$this->qbCacheNoEscape[] = $escape;
				}
			}
		}

		return $this;
	}

	/**
	 * Select Max
	 *
	 * Generates a SELECT MAX(field) portion of a query
	 *
	 * @param  string  $select  the field
	 * @param  string  $alias  an alias
	 *
	 * @return    Query1
	 */
	public function selectMax($select = '', $alias = '')
	{
		return $this->_max_min_avg_sum($select, $alias, 'MAX');
	}

	/**
	 * Select Min
	 *
	 * Generates a SELECT MIN(field) portion of a query
	 *
	 * @param  string  $select  the field
	 * @param  string  $alias  an alias
	 *
	 * @return    Query1
	 */
	public function selectMin($select = '', $alias = '')
	{
		return $this->_max_min_avg_sum($select, $alias, 'MIN');
	}

	/**
	 * Select Average
	 *
	 * Generates a SELECT AVG(field) portion of a query
	 *
	 * @param  string  $select  the field
	 * @param  string  $alias  an alias
	 *
	 * @return    Query1
	 */
	public function selectAvg($select = '', $alias = '')
	{
		return $this->_max_min_avg_sum($select, $alias, 'AVG');
	}

	/**
	 * Select Sum
	 *
	 * Generates a SELECT SUM(field) portion of a query
	 *
	 * @param  string  $select  the field
	 * @param  string  $alias  an alias
	 *
	 * @return    Query1
	 */
	public function selectSum($select = '', $alias = '')
	{
		return $this->_max_min_avg_sum($select, $alias, 'SUM');
	}

	/**
	 * SELECT [MAX|MIN|AVG|SUM]()
	 *
	 * @used-by    selectMax()
	 * @used-by    selectMin()
	 * @used-by    selectAvg()
	 * @used-by    selectSum()
	 *
	 * @param  string  $select  Field name
	 * @param  string  $alias
	 * @param  string  $type
	 *
	 * @return    Query1
	 */
	protected function _max_min_avg_sum($select = '', $alias = '', $type = 'MAX')
	{
		if (!is_string($select) || $select === '') {
			throw new InvalidArgumentException('Invalid select parameter: '.$select);
		}

		$type = strtoupper($type);

		if (!in_array($type, array('MAX', 'MIN', 'AVG', 'SUM'))) {
			throw new InvalidArgumentException('Invalid function type: '.$type);
		}

		if ($alias === '') {
			$alias = $this->createAliasFromTable(trim($select));
		}

		$sql = $type.'('.$this->protect_identifiers(trim($select)).') AS '.$this->escape_identifiers(trim($alias));

		$this->qbSelect[]   = $sql;
		$this->qbNoEscape[] = null;

		if ($this->qbCaching === true) {
			$this->qbCacheSelect[] = $sql;
			$this->qbCacheExists[] = 'select';
		}

		return $this;
	}

	/**
	 * Determines the alias name based on the table
	 *
	 * @param  string  $item  The statement to determine alias
	 *
	 * @return string
	 */
	protected function createAliasFromTable($item)
	{
		if (strpos($item, '.') !== false) {
			$item = explode('.', $item);
			return end($item);
		}

		return $item;
	}

	/**
	 * DISTINCT
	 *
	 * Sets a flag which tells the query string compiler to add DISTINCT
	 *
	 * @param  bool  $val
	 *
	 * @return    Query1
	 */
	public function distinct($val = true)
	{
		$this->qbDistinct = is_bool($val) ? $val : true;
		return $this;
	}

	/**
	 * From
	 *
	 * Generates the FROM portion of the query
	 *
	 * @param  mixed  $from  can be a string or array
	 *
	 * @return    Query1
	 */
	public function from($from)
	{
		foreach ((array) $from as $val) {
			if (strpos($val, ',') !== false) {
				foreach (explode(',', $val) as $v) {
					$v = trim($v);
					$this->_track_aliases($v);

					$this->qbFrom[] = $v = $this->protect_identifiers($v, true, null, false);

					if ($this->qbCaching === true) {
						$this->qbCacheFrom[]   = $v;
						$this->qbCacheExists[] = 'from';
					}
				}
			}else {
				$val = trim($val);

				// Extract any aliases that might exist. We use this information
				// in the protect_identifiers to know whether to add a table prefix
				$this->_track_aliases($val);

				$this->qbFrom[] = $val = $this->protect_identifiers($val, true, null, false);

				if ($this->qbCaching === true) {
					$this->qbCacheFrom[]   = $val;
					$this->qbCacheExists[] = 'from';
				}
			}
		}

		return $this;
	}

	/**
	 * JOIN
	 *
	 * Generates the JOIN portion of the query
	 *
	 * @param  string  $table  The table to join
	 * @param  string  $cond  The join condition
	 * @param  string  $type  The type of join
	 * @param  string  $escape  Whether not to try to escape identifiers
	 *
	 * @return    Query1
	 */
	public function join($table, $cond, $type = '', $escape = null)
	{
		$type = trim(strtoupper($type).' JOIN');
		preg_match('#^(NATURAL\s+)?((LEFT|RIGHT|FULL)\s+)?((INNER|OUTER)\s+)?JOIN$#', $type) or $type = 'JOIN';

		// Extract any aliases that might exist. We use this information
		// in the protect_identifiers to know whether to add a table prefix
		$this->_track_aliases($table);

		is_bool($escape) || $escape = $this->_protect_identifiers;

		if (strpos($type, 'NATURAL') === 0) {
			$cond = '';
		}elseif (!$this->_has_operator($cond)) {
			$cond = ' USING ('.($escape ? $this->escape_identifiers($cond) : $cond).')';
		}elseif ($escape === false) {
			$cond = ' ON '.$cond;
		}else {
			// Split multiple conditions
			if (preg_match_all('/\sAND\s|\sOR\s/i', $cond, $joints, PREG_OFFSET_CAPTURE)) {
				$conditions = array();
				$joints     = $joints[0];
				array_unshift($joints, array('', 0));

				for ($i = count($joints) - 1, $pos = strlen($cond); $i >= 0; $i--) {
					$joints[$i][1]  += strlen($joints[$i][0]); // offset
					$conditions[$i] = substr($cond, $joints[$i][1], $pos - $joints[$i][1]);
					$pos            = $joints[$i][1] - strlen($joints[$i][0]);
					$joints[$i]     = $joints[$i][0];
				}
			}else {
				$conditions = array($cond);
				$joints     = array('');
			}

			$cond = ' ON ';
			for ($i = 0, $c = count($conditions); $i < $c; $i++) {
				$operator = $this->_get_operator($conditions[$i]);
				$cond     .= $joints[$i];
				$cond     .= preg_match("/(\(*)?([\[\]\w\.'-]+)".preg_quote($operator)."(.*)/i", $conditions[$i],
					$match)
					? $match[1].$this->protect_identifiers($match[2]).$operator.$this->protect_identifiers($match[3])
					: $conditions[$i];
			}
		}

		// Do we want to escape the table name?
		if ($escape === true) {
			$table = $this->protect_identifiers($table, true, null, false);
		}

		// Assemble the JOIN statement
		$this->qbJoin[] = $join = $type.' '.$table.$cond;

		if ($this->qbCaching === true) {
			$this->qbCacheJoin[]   = $join;
			$this->qbCacheExists[] = 'join';
		}

		return $this;
	}

	/**
	 * WHERE
	 *
	 * Generates the WHERE portion of the query.
	 * Separates multiple calls with 'AND'.
	 *
	 * @param  mixed  $key  The column or expression to do the where
	 * @param  mixed  $value  The value to compare
	 * @param  bool  $escape  Scape the statement
	 *
	 * @return    Query1
	 */
	public function where($key, $value = null, $escape = null)
	{
		return $this->_wh('qb_where', $key, $value, 'AND ', $escape);
	}

	/**
	 * OR WHERE
	 *
	 * Generates the WHERE portion of the query.
	 * Separates multiple calls with 'OR'.
	 *
	 * @param  mixed  $key  The column or expression to do the where
	 * @param  mixed  $value  The value to compare
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orWhere($key, $value = null, $escape = null)
	{
		return $this->_wh('qb_where', $key, $value, 'OR ', $escape);
	}

	/**
	 * WHERE, HAVING
	 *
	 * @used-by    where()
	 * @used-by    orWhere()
	 * @used-by    having()
	 * @used-by    orHaving()
	 *
	 * @param  string  $qb_key  'qb_where' or 'qb_having'
	 * @param  mixed  $key
	 * @param  mixed  $value
	 * @param  string  $type
	 * @param  bool  $escape
	 *
	 * @return    Query1
	 */
	protected function _wh($qb_key, $key, $value = null, $type = 'AND ', $escape = null)
	{
		$qb_cache_key = ($qb_key === 'qb_having') ? 'qb_cache_having' : 'qb_cache_where';

		if (!is_array($key)) {
			$key = array($key => $value);
		}

		// If the escape value wasn't set will base it on the global setting
		is_bool($escape) or $escape = $this->_protect_identifiers;

		foreach ($key as $k => $v) {
			$prefix = (count($this->$qb_key) === 0 && count($this->$qb_cache_key) === 0)
				? $this->_group_get_type('')
				: $this->_group_get_type($type);

			if ($v !== null) {
				if ($escape === true) {
					$v = $this->escape($v);
				}

				if (!$this->_has_operator($k)) {
					$k .= ' = ';
				}
			}elseif (!$this->_has_operator($k)) {
				// value appears not to have been set, assign the test to IS NULL
				$k .= ' IS NULL';
			}elseif (preg_match('/\s*(!?=|<>|\sIS(?:\s+NOT)?\s)\s*$/i', $k, $match, PREG_OFFSET_CAPTURE)) {
				$k = substr($k, 0, $match[0][1]).($match[1][0] === '=' ? ' IS NULL' : ' IS NOT NULL');
			}

			$$qb_key           = array('condition' => $prefix.$k, 'value' => $v, 'escape' => $escape);
			$this->{$qb_key}[] = $$qb_key;
			if ($this->qbCaching === true) {
				$this->{$qb_cache_key}[] = $$qb_key;
				$this->qbCacheExists[]   = substr($qb_key, 3);
			}

		}

		return $this;
	}

	/**
	 * WHERE IN
	 *
	 * Generates a WHERE field IN('item', 'item') SQL query,
	 * joined with 'AND' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function whereIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_where', $key, $values, false, 'AND ', $escape);
	}

	/**
	 * OR WHERE IN
	 *
	 * Generates a WHERE field IN('item', 'item') SQL query,
	 * joined with 'OR' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orWhereIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_where', $key, $values, false, 'OR ', $escape);
	}

	/**
	 * WHERE NOT IN
	 *
	 * Generates a WHERE field NOT IN('item', 'item') SQL query,
	 * joined with 'AND' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function whereNotIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_where', $key, $values, true, 'AND ', $escape);
	}

	/**
	 * OR WHERE NOT IN
	 *
	 * Generates a WHERE field NOT IN('item', 'item') SQL query,
	 * joined with 'OR' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orWhereNotIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_where', $key, $values, true, 'OR ', $escape);
	}

	/**
	 * HAVING IN
	 *
	 * Generates a HAVING field IN('item', 'item') SQL query,
	 * joined with 'AND' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function havingIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_having', $key, $values, false, 'AND ', $escape);
	}

	/**
	 * OR HAVING IN
	 *
	 * Generates a HAVING field IN('item', 'item') SQL query,
	 * joined with 'OR' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orHavingIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_having', $key, $values, false, 'OR ', $escape);
	}

	/**
	 * HAVING NOT IN
	 *
	 * Generates a HAVING field NOT IN('item', 'item') SQL query,
	 * joined with 'AND' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function havingNotIn($key, array $values, $escape = null)
	{
		return $this->_wh_in('qb_having', $key, $values, true, 'AND ', $escape);
	}

	/**
	 * OR HAVING NOT IN
	 *
	 * Generates a HAVING field NOT IN('item', 'item') SQL query,
	 * joined with 'OR' if appropriate.
	 *
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orHavingNotIn($key, array $values, $escape = null): static
	{
		return $this->_wh_in('qb_having', $key, $values, true, 'OR ', $escape);
	}

	/**
	 * Internal WHERE/HAVING IN
	 *
	 * @used-by    whereIn()
	 * @used-by    orWhereIn()
	 * @used-by    whereNotIn()
	 * @used-by    orWhereNotIn()
	 * @used-by    havingIn()
	 * @used-by    orHavingIn()
	 * @used-by    havingNotIn()
	 * @used-by    orHavingNotIn()
	 *
	 * @param  string  $qb_key  'qb_where' or 'qb_having'
	 * @param  string  $key  The field to search
	 * @param  array  $values  The values searched on
	 * @param  bool  $not  If the statement is IN or NOT IN
	 * @param  string  $type  The type of the where statement [AND, OR]
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	protected function _wh_in($qb_key, $key, array $values, $not = false, $type = 'AND ', $escape = null)
	{
		$qb_cache_key = ($qb_key === 'qb_having') ? 'qb_cache_having' : 'qb_cache_where';

		if (empty($key) || !is_string($key)) {
			throw new InvalidArgumentException(sprintf('%s() expects $key to be a non-empty string',
				debug_backtrace(0, 2)[1]['function']));
		}

		if (empty($values)) {
			throw new InvalidArgumentException(sprintf('%s() expects $values to be a non-empty array',
				debug_backtrace(0, 2)[1]['function']));
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;

		$not = ($not) ? ' NOT' : '';

		if ($escape === true) {
			$wh_in = array();
			foreach ($values as $value) {
				$wh_in[] = $this->escape($value);
			}
		}else {
			$wh_in = array_values($values);
		}

		$prefix = (count($this->$qb_key) === 0 && count($this->$qb_cache_key) === 0)
			? $this->_group_get_type('')
			: $this->_group_get_type($type);

		$wh_in = array(
			'condition' => $prefix.$key.$not.' IN('.implode(', ', $wh_in).')',
			'value'     => null,
			'escape'    => $escape
		);

		$this->{$qb_key}[] = $wh_in;
		if ($this->qbCaching === true) {
			$this->{$qb_cache_key}[] = $wh_in;
			$this->qbCacheExists[]   = substr($qb_key, 3);
		}

		return $this;
	}

	/**
	 * LIKE
	 *
	 * Generates a %LIKE% portion of the query.
	 * Separates multiple calls with 'AND'.
	 *
	 * @param  mixed  $field  The column
	 * @param  string  $match  The expression to match the column
	 * @param  string  $side  The side of the expression to place the %
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function like($field, $match = '', $side = 'both', $escape = null)
	{
		return $this->_like($field, $match, 'AND ', $side, '', $escape);
	}

	/**
	 * NOT LIKE
	 *
	 * Generates a NOT LIKE portion of the query.
	 * Separates multiple calls with 'AND'.
	 *
	 * @param  mixed  $field  The column
	 * @param  string  $match  The expression to match the columns
	 * @param  string  $side  The side of the expression to place the %
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function notLike($field, $match = '', $side = 'both', $escape = null)
	{
		return $this->_like($field, $match, 'AND ', $side, 'NOT', $escape);
	}

	/**
	 * OR LIKE
	 *
	 * Generates a %LIKE% portion of the query.
	 * Separates multiple calls with 'OR'.
	 *
	 * @param  mixed  $field  The column
	 * @param  string  $match  The expression to match the column
	 * @param  string  $side  The side of the expression to match the columns
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orLike($field, $match = '', $side = 'both', $escape = null)
	{
		return $this->_like($field, $match, 'OR ', $side, '', $escape);
	}

	/**
	 * OR NOT LIKE
	 *
	 * Generates a NOT LIKE portion of the query.
	 * Separates multiple calls with 'OR'.
	 *
	 * @param  mixed  $field  The column
	 * @param  string  $match  The expression to match the column
	 * @param  string  $side  The side of the expression to match the columns
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orNotLike($field, $match = '', $side = 'both', $escape = null)
	{
		return $this->_like($field, $match, 'OR ', $side, 'NOT', $escape);
	}

	/**
	 * Internal LIKE
	 *
	 * @used-by    like()
	 * @used-by    orLike()
	 * @used-by    notLike()
	 * @used-by    orNotLike()
	 *
	 * @param  mixed  $field
	 * @param  string  $match
	 * @param  string  $type
	 * @param  string  $side
	 * @param  string  $not
	 * @param  bool  $escape
	 *
	 * @return    Query1
	 */
	protected function _like($field, $match = '', $type = 'AND ', $side = 'both', $not = '', $escape = null)
	{
		if (!is_array($field)) {
			$field = array($field => $match);
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;
		// lowercase $side in case somebody writes e.g. 'BEFORE' instead of 'before' (doh)
		$side = strtolower($side);

		foreach ($field as $k => $v) {
			$prefix = (count($this->qbWhere) === 0 && count($this->qbCacheWhere) === 0)
				? $this->_group_get_type('') : $this->_group_get_type($type);

			if ($escape === true) {
				$v = $this->escape_like_str($v);
			}

			switch ($side) {
				case 'none':
					$v = "'{$v}'";
					break;
				case 'before':
					$v = "'%{$v}'";
					break;
				case 'after':
					$v = "'{$v}%'";
					break;
				case 'both':
				default:
					$v = "'%{$v}%'";
					break;
			}

			// some platforms require an escape sequence definition for LIKE wildcards
			if ($escape === true && $this->_like_escape_str !== '') {
				$v .= sprintf($this->_like_escape_str, $this->_like_escape_chr);
			}

			$qb_where        = array(
				'condition' => "{$prefix} {$k} {$not} LIKE {$v}", 'value' => null, 'escape' => $escape
			);
			$this->qbWhere[] = $qb_where;
			if ($this->qbCaching === true) {
				$this->qbCacheWhere[]  = $qb_where;
				$this->qbCacheExists[] = 'where';
			}
		}

		return $this;
	}

	/**
	 * Starts a query group.
	 *
	 * @param  string  $not  (Internal use only)
	 * @param  string  $type  (Internal use only)
	 *
	 * @return    Query1
	 */
	public function group_start($not = '', $type = 'AND ')
	{
		$type = $this->_group_get_type($type);

		$this->qbWhereGroupStarted = true;
		$prefix                    = (count($this->qbWhere) === 0 && count($this->qbCacheWhere) === 0) ? '' : $type;
		$where                     = array(
			'condition' => $prefix.$not.str_repeat(' ', ++$this->qbWhereGroupCount).' (',
			'value'     => null,
			'escape'    => false
		);

		$this->qbWhere[] = $where;
		if ($this->qbCaching) {
			$this->qbCacheWhere[] = $where;
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Starts a query group, but ORs the group
	 *
	 * @return    Query1
	 */
	public function or_group_start()
	{
		return $this->group_start('', 'OR ');
	}

	// --------------------------------------------------------------------

	/**
	 * Starts a query group, but NOTs the group
	 *
	 * @return    Query1
	 */
	public function not_group_start()
	{
		return $this->group_start('NOT ', 'AND ');
	}

	// --------------------------------------------------------------------

	/**
	 * Starts a query group, but OR NOTs the group
	 *
	 * @return    Query1
	 */
	public function or_not_group_start()
	{
		return $this->group_start('NOT ', 'OR ');
	}

	// --------------------------------------------------------------------

	/**
	 * Ends a query group
	 *
	 * @return    Query1
	 */
	public function group_end()
	{
		$this->qbWhereGroupStarted = false;
		$where                     = array(
			'condition' => str_repeat(' ', $this->qbWhereGroupCount--).')',
			'value'     => null,
			'escape'    => false
		);

		$this->qbWhere[] = $where;
		if ($this->qbCaching) {
			$this->qbCacheWhere[] = $where;
		}

		return $this;
	}

	// --------------------------------------------------------------------

	/**
	 * Group_get_type
	 *
	 * @used-by    group_start()
	 * @used-by    _like()
	 * @used-by    _wh()
	 * @used-by    _where_in()
	 *
	 * @param  string  $type
	 *
	 * @return    string
	 */
	protected function _group_get_type($type)
	{
		if ($this->qbWhereGroupStarted) {
			$type                      = '';
			$this->qbWhereGroupStarted = false;
		}

		return $type;
	}

	/**
	 * GROUP BY
	 *
	 * @param  mixed  $by  The cloumn to group by
	 * @param  bool  $escape
	 *
	 * @return    Query1
	 */
	public function group_by($by, $escape = null)
	{
		is_bool($escape) or $escape = $this->_protect_identifiers;

		if (is_string($by)) {
			$by = ($escape === true)
				? explode(',', $by)
				: array($by);
		}

		foreach ($by as $val) {
			$val = trim($val);

			if ($val !== '') {
				$val = array('field' => $val, 'escape' => $escape);

				$this->qbGroupby[] = $val;
				if ($this->qbCaching === true) {
					$this->qbCacheGroupby[] = $val;
					$this->qbCacheExists[]  = 'groupby';
				}
			}
		}

		return $this;
	}

	/**
	 * HAVING
	 *
	 * Separates multiple calls with 'AND'.
	 *
	 * @param  string  $key
	 * @param  string  $value
	 * @param  bool  $escape
	 *
	 * @return    Query1
	 */
	public function having($key, $value = null, $escape = null)
	{
		return $this->_wh('qb_having', $key, $value, 'AND ', $escape);
	}

	/**
	 * OR HAVING
	 *
	 * Separates multiple calls with 'OR'.
	 *
	 * @param  string  $key  The key to perform having
	 * @param  string  $value  The value to check
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function orHaving($key, $value = null, $escape = null)
	{
		return $this->_wh('qb_having', $key, $value, 'OR ', $escape);
	}

	// --------------------------------------------------------------------

	/**
	 * ORDER BY
	 *
	 * @param  string  $orderby  Column to order
	 * @param  string  $direction  ASC, DESC or RANDOM
	 * @param  bool  $escape
	 *
	 * @return    Query1
	 */
	public function orderBy($orderby, $direction = '', $escape = null)
	{
		$direction = strtoupper(trim($direction));

		if ($direction === 'RANDOM') {
			$direction = '';

			// Do we have a seed value?
			$orderby = ctype_digit((string) $orderby)
				? sprintf($this->_random_keyword[1], $orderby)
				: $this->_random_keyword[0];
		}elseif (empty($orderby)) {
			return $this;
		}elseif ($direction !== '') {
			$direction = in_array($direction, array('ASC', 'DESC'), true) ? ' '.$direction : '';
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;

		if ($escape === false) {
			$qb_orderby[] = array('field' => $orderby, 'direction' => $direction, 'escape' => false);
		}else {
			$qb_orderby = array();
			foreach (explode(',', $orderby) as $field) {
				$qb_orderby[] = ($direction === '' && preg_match('/\s+(ASC|DESC)$/i', rtrim($field), $match,
						PREG_OFFSET_CAPTURE))
					? array(
						'field'  => ltrim(substr($field, 0, $match[0][1])), 'direction' => ' '.$match[1][0],
						'escape' => true
					)
					: array('field' => trim($field), 'direction' => $direction, 'escape' => true);
			}
		}

		$this->qbOrderby = array_merge($this->qbOrderby, $qb_orderby);
		if ($this->qbCaching === true) {
			$this->qbCacheOrderby  = array_merge($this->qbCacheOrderby, $qb_orderby);
			$this->qbCacheExists[] = 'orderby';
		}

		return $this;
	}

	/**
	 * LIMIT
	 *
	 * @param  int  $value  LIMIT value
	 * @param  int  $offset  OFFSET value
	 *
	 * @return    Query1
	 */
	public function limit($value, $offset = 0)
	{
		is_null($value) || $this->qbLimit = (int) $value;
		empty($offset) || $this->qbOffset = (int) $offset;

		return $this;
	}

	/**
	 * Sets the OFFSET value
	 *
	 * @param  int  $offset  OFFSET value
	 *
	 * @return    Query1
	 */
	public function offset($offset)
	{
		empty($offset) || $this->qbOffset = (int) $offset;
		return $this;
	}

	/**
	 * LIMIT string
	 *
	 * Generates a platform-specific LIMIT clause.
	 *
	 * @param  string  $sql  SQL Query
	 *
	 * @return    string
	 */
	protected function _limit($sql)
	{
		return $sql.' LIMIT '.($this->qbOffset ? $this->qbOffset.', ' : '').(int) $this->qbLimit;
	}

	/**
	 * The "set" function.
	 *
	 * Allows key/value pairs to be set for inserting or updating
	 *
	 * @param  mixed  $key
	 * @param  string  $value
	 * @param  bool  $escape  Escape the statement
	 *
	 * @return    Query1
	 */
	public function set($key, $value = '', $escape = null)
	{
		$key = $this->_object_to_array($key);

		if (!is_array($key)) {
			$key = array($key => $value);
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;

		foreach ($key as $k => $v) {
			$this->qbSet[$this->protect_identifiers($k, false, $escape)] = ($escape)
				? $this->escape($v) : $v;
		}

		return $this;
	}

	/**
	 * Get SELECT query string
	 *
	 * Compiles a SELECT query string and returns the sql.
	 *
	 * @param  string    the table name to select from (optional)
	 * @param  bool    TRUE: resets QB values; FALSE: leave QB values alone
	 *
	 * @return    string
	 */
	public function get_compiled_select($table = '', $reset = true)
	{
		if ($table !== '') {
			$this->_track_aliases($table);
			$this->from($table);
		}

		$select = $this->_compile_select();

		if ($reset === true) {
			$this->_reset_select();
		}

		return $select;
	}

	/**
	 * Get
	 *
	 * Compiles the select statement based on the other functions called
	 * and runs the query
	 *
	 * @param  string  $table  the table
	 * @param  string  $limit  the limit clause
	 * @param  string  $offset  the offset clause
	 *
	 * @return    Query1
	 */
	public function get($table = '', $limit = null, $offset = null)
	{
		if ($table !== '') {
			$this->_track_aliases($table);
			$this->from($table);
		}

		if (!empty($limit)) {
			$this->limit($limit, $offset);
		}

		$result = $this->query($this->_compile_select());
		$this->_reset_select();
		return $result;
	}

	/**
	 * "Count All Results" query
	 *
	 * Generates a platform-specific query string that counts all records
	 * returned by an Query Builder query.
	 *
	 * @param  string  $table
	 * @param  bool  $reset  the reset clause
	 *
	 * @return    int
	 */
	public function count_all_results($table = '', $reset = true)
	{
		if ($table !== '') {
			$this->_track_aliases($table);
			$this->from($table);
		}

		// ORDER BY usage is often problematic here (most notably
		// on Microsoft SQL Server) and ultimately unnecessary
		// for selecting COUNT(*) ...
		$qb_orderby       = $this->qbOrderby;
		$qb_cache_orderby = $this->qbCacheOrderby;
		$this->qbOrderby  = $this->qbCacheOrderby = array();

		$result = ($this->qbDistinct === true or !empty($this->qbGroupby) or !empty($this->qbCacheGroupby) or !empty($this->qbHaving) or $this->qbLimit or $this->qbOffset)
			? $this->query($this->_count_string.$this->protect_identifiers('numrows')."\nFROM (\n".$this->_compile_select()."\n) CI_count_all_results")
			: $this->query($this->_compile_select($this->_count_string.$this->protect_identifiers('numrows')));

		if ($reset === true) {
			$this->_reset_select();
		}else {
			$this->qbOrderby      = $qb_orderby;
			$this->qbCacheOrderby = $qb_cache_orderby;
		}

		if ($result->num_rows() === 0) {
			return 0;
		}

		$row = $result->row();
		return (int) $row->numrows;
	}

	/**
	 * Method get_where()
	 *
	 * Allows the where clause, limit and offset to be added directly
	 *
	 * @param  string  $table
	 * @param  string  $where
	 * @param  int  $limit
	 * @param  int  $offset
	 *
	 * @return    CI_DB_result
	 */
	public function get_where($table = '', $where = null, $limit = null, $offset = null)
	{
		if ($table !== '') {
			$this->from($table);
		}

		if ($where !== null) {
			$this->where($where);
		}

		if (!empty($limit)) {
			$this->limit($limit, $offset);
		}

		$result = $this->query($this->_compile_select());
		$this->_reset_select();
		return $result;
	}

	/**
	 * Insert_Batch
	 *
	 * Compiles batch insert strings and runs the queries
	 *
	 * @param  string  $table  Table to insert into
	 * @param  array  $set  An associative array of insert values
	 * @param  bool  $escape  Whether to escape values and identifiers
	 *
	 * @return    int    Number of rows inserted or FALSE on failure
	 */
	public function insert_batch($table, $set = null, $escape = null, $batch_size = 100)
	{
		if ($set === null) {
			if (empty($this->qbSet)) {
				return ($this->db_debug) ? $this->display_error('db_must_use_set') : false;
			}
		}else {
			if (empty($set)) {
				return ($this->db_debug) ? $this->display_error('insert_batch() called with no data') : false;
			}

			$this->set_insert_batch($set, '', $escape);
		}

		if (strlen($table) === 0) {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}

		// Batch this baby
		$affected_rows = 0;
		for ($i = 0, $total = count($this->qbSet); $i < $total; $i += $batch_size) {
			if ($this->query($this->_insert_batch($this->protect_identifiers($table, true, $escape, false),
				$this->qbKeys, array_slice($this->qbSet, $i, $batch_size)))) {
				$affected_rows += $this->affected_rows();
			}
		}

		$this->_reset_write();
		return $affected_rows;
	}

	/**
	 * Insert batch statement
	 *
	 * Generates a platform-specific insert string from the supplied data.
	 *
	 * @param  string  $table  Table name
	 * @param  array  $keys  INSERT keys
	 * @param  array  $values  INSERT values
	 *
	 * @return    string
	 */
	protected function _insert_batch($table, $keys, $values)
	{
		return 'INSERT INTO '.$table.' ('.implode(', ', $keys).') VALUES '.implode(', ', $values);
	}

	/**
	 * The "set_insert_batch" function.  Allows key/value pairs to be set for batch inserts
	 *
	 * @param  mixed
	 * @param  string
	 * @param  bool
	 *
	 * @return    Query1
	 */
	public function set_insert_batch($key, $value = '', $escape = null)
	{
		$key = $this->_object_to_array_batch($key);

		if (!is_array($key)) {
			$key = array($key => $value);
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;

		$keys = array_keys($this->_object_to_array(reset($key)));
		sort($keys);

		foreach ($key as $row) {
			$row = $this->_object_to_array($row);
			if (count(array_diff($keys, array_keys($row))) > 0 or count(array_diff(array_keys($row), $keys)) > 0) {
				// batch function above returns an error on an empty array
				$this->qbSet[] = array();
				return;
			}

			ksort($row); // puts $row in the same order as our keys

			if ($escape !== false) {
				$clean = array();
				foreach ($row as $value) {
					$clean[] = $this->escape($value);
				}

				$row = $clean;
			}

			$this->qbSet[] = '('.implode(',', $row).')';
		}

		foreach ($keys as $k) {
			$this->qbKeys[] = $this->protect_identifiers($k, false, $escape);
		}

		return $this;
	}

	/**
	 * Get INSERT query string
	 *
	 * Compiles an insert query and returns the sql
	 *
	 * @param  string    the table to insert into
	 * @param  bool    TRUE: reset QB values; FALSE: leave QB values alone
	 *
	 * @return    string
	 */
	public function get_compiled_insert($table = '', $reset = true)
	{
		if ($this->_validate_insert($table) === false) {
			return false;
		}

		$sql = $this->_insert(
			$this->protect_identifiers(
				$this->qbFrom[0], true, null, false
			),
			array_keys($this->qbSet),
			array_values($this->qbSet)
		);

		if ($reset === true) {
			$this->_reset_write();
		}

		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert
	 *
	 * Compiles an insert string and runs the query
	 *
	 * @param  string    the table to insert data into
	 * @param  array    an associative array of insert values
	 * @param  bool  $escape  Whether to escape values and identifiers
	 *
	 * @return    bool    TRUE on success, FALSE on failure
	 */
	public function insert($table = '', $set = null, $escape = null)
	{
		if ($set !== null) {
			$this->set($set, '', $escape);
		}

		if ($this->_validate_insert($table) === false) {
			return false;
		}

		$sql = $this->_insert(
			$this->protect_identifiers(
				$this->qbFrom[0], true, $escape, false
			),
			array_keys($this->qbSet),
			array_values($this->qbSet)
		);

		$this->_reset_write();
		return $this->query($sql);
	}

	/**
	 * Validate Insert
	 *
	 * This method is used by both insert() and get_compiled_insert() to
	 * validate that the there data is actually being set and that table
	 * has been chosen to be inserted into.
	 *
	 * @param  string    the table to insert data into
	 *
	 * @return    string
	 */
	protected function _validate_insert($table = '')
	{
		if (count($this->qbSet) === 0) {
			return ($this->db_debug) ? $this->display_error('db_must_use_set') : false;
		}

		if ($table !== '') {
			$this->qbFrom[0] = $table;
		}elseif (!isset($this->qbFrom[0])) {
			return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
		}

		return true;
	}

	/**
	 * Replace
	 *
	 * Compiles an replace into string and runs the query
	 *
	 * @param  string    the table to replace data into
	 * @param  array    an associative array of insert values
	 *
	 * @return    bool    TRUE on success, FALSE on failure
	 */
	public function replace($table = '', $set = null)
	{
		if ($set !== null) {
			$this->set($set);
		}

		if (count($this->qbSet) === 0) {
			return ($this->db_debug) ? $this->display_error('db_must_use_set') : false;
		}

		if ($table === '') {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}

		$sql = $this->_replace($this->protect_identifiers($table, true, null, false), array_keys($this->qbSet),
			array_values($this->qbSet));

		$this->_reset_write();
		return $this->query($sql);
	}

	/**
	 * Replace statement
	 *
	 * Generates a platform-specific replace string from the supplied data
	 *
	 * @param  string    the table name
	 * @param  array    the insert keys
	 * @param  array    the insert values
	 *
	 * @return    string
	 */
	protected function _replace($table, $keys, $values)
	{
		return 'REPLACE INTO '.$table.' ('.implode(', ', $keys).') VALUES ('.implode(', ', $values).')';
	}

	/**
	 * FROM tables
	 *
	 * Groups tables in FROM clauses if needed, so there is no confusion
	 * about operator precedence.
	 *
	 * Note: This is only used (and overridden) by MySQL and CUBRID.
	 *
	 * @return    string
	 */
	protected function _from_tables()
	{
		return implode(', ', $this->qbFrom);
	}

	/**
	 * Get UPDATE query string
	 *
	 * Compiles an update query and returns the sql
	 *
	 * @param  string    the table to update
	 * @param  bool    TRUE: reset QB values; FALSE: leave QB values alone
	 *
	 * @return    string
	 */
	public function get_compiled_update($table = '', $reset = true)
	{
		// Combine any cached components with the current statements
		$this->_merge_cache();

		if ($this->_validate_update($table) === false) {
			return false;
		}

		$sql = $this->_update($this->qbFrom[0], $this->qbSet);

		if ($reset === true) {
			$this->_reset_write();
		}

		return $sql;
	}

	/**
	 * UPDATE
	 *
	 * Compiles an update string and runs the query.
	 *
	 * @param  string  $table
	 * @param  array  $set  An associative array of update values
	 * @param  mixed  $where
	 * @param  int  $limit
	 *
	 * @return    bool    TRUE on success, FALSE on failure
	 */
	public function update($table = '', $set = null, $where = null, $limit = null)
	{
		// Combine any cached components with the current statements
		$this->_merge_cache();

		if ($set !== null) {
			$this->set($set);
		}

		if ($this->_validate_update($table) === false) {
			return false;
		}

		if ($where !== null) {
			$this->where($where);
		}

		if (!empty($limit)) {
			$this->limit($limit);
		}

		$sql = $this->_update($this->qbFrom[0], $this->qbSet);
		$this->_reset_write();
		return $this->query($sql);
	}

	/**
	 * Validate Update
	 *
	 * This method is used by both update() and get_compiled_update() to
	 * validate that data is actually being set and that a table has been
	 * chosen to be update.
	 *
	 * @param  string  $table  the table to update data on
	 *
	 * @return    bool
	 */
	protected function _validate_update($table)
	{
		if (count($this->qbSet) === 0) {
			return ($this->db_debug) ? $this->display_error('db_must_use_set') : false;
		}

		if ($table !== '') {
			$this->qbFrom = array($this->protect_identifiers($table, true, null, false));
		}elseif (!isset($this->qbFrom[0])) {
			return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
		}

		return true;
	}

	/**
	 * Update_Batch
	 *
	 * Compiles an update string and runs the query
	 *
	 * @param  string  $table  the table to retrieve the results from
	 * @param  array  $set  an associative array of update values
	 * @param  string  $index  the where key
	 *
	 * @return    int    number of rows affected or FALSE on failure
	 */
	public function update_batch($table, $set = null, $index = null, $batch_size = 100)
	{
		// Combine any cached components with the current statements
		$this->_merge_cache();

		if ($index === null) {
			return ($this->db_debug) ? $this->display_error('db_must_use_index') : false;
		}

		if ($set === null) {
			if (empty($this->qbSetUpdateBatch)) {
				return ($this->db_debug) ? $this->display_error('db_must_use_set') : false;
			}
		}else {
			if (empty($set)) {
				return ($this->db_debug) ? $this->display_error('update_batch() called with no data') : false;
			}

			$this->set_update_batch($set, $index);
		}

		if (strlen($table) === 0) {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}

		// Batch this baby
		$affected_rows = 0;
		for ($i = 0, $total = count($this->qbSetUpdateBatch); $i < $total; $i += $batch_size) {
			if ($this->query($this->_update_batch($this->protect_identifiers($table, true, null, false),
				array_slice($this->qbSetUpdateBatch, $i, $batch_size), $index))) {
				$affected_rows += $this->affected_rows();
			}

			$this->qbWhere = array();
		}

		$this->_reset_write();
		return $affected_rows;
	}

	/**
	 * Update_Batch statement
	 *
	 * Generates a platform-specific batch update string from the supplied data
	 *
	 * @param  string  $table  Table name
	 * @param  array  $values  Update data
	 * @param  string  $index  WHERE key
	 *
	 * @return    string
	 */
	protected function _update_batch($table, $values, $index)
	{
		$ids = array();
		foreach ($values as $key => $val) {
			$ids[] = $val[$index]['value'];

			foreach (array_keys($val) as $field) {
				if ($field !== $index) {
					$final[$val[$field]['field']][] = 'WHEN '.$val[$index]['field'].' = '.$val[$index]['value'].' THEN '.$val[$field]['value'];
				}
			}
		}

		$cases = '';
		foreach ($final as $k => $v) {
			$cases .= $k." = CASE \n"
				.implode("\n", $v)."\n"
				.'ELSE '.$k.' END, ';
		}

		$this->where($val[$index]['field'].' IN('.implode(',', $ids).')', null, false);

		return 'UPDATE '.$table.' SET '.substr($cases, 0, -2).$this->_compile_wh('qb_where');
	}

	// --------------------------------------------------------------------

	/**
	 * The "set_update_batch" function.  Allows key/value pairs to be set for batch updating
	 *
	 * @param  array
	 * @param  string
	 * @param  bool
	 *
	 * @return    Query1
	 */
	public function set_update_batch($key, $index = '', $escape = null)
	{
		$key = $this->_object_to_array_batch($key);

		if (!is_array($key)) {
			// @todo error
		}

		is_bool($escape) or $escape = $this->_protect_identifiers;

		foreach ($key as $k => $v) {
			$index_set = false;
			$clean     = array();
			foreach ($v as $k2 => $v2) {
				if ($k2 === $index) {
					$index_set = true;
				}

				$clean[$k2] = array(
					'field' => $this->protect_identifiers($k2, false, $escape),
					'value' => ($escape === false ? $v2 : $this->escape($v2))
				);
			}

			if ($index_set === false) {
				return $this->display_error('db_batch_missing_index');
			}

			$this->qbSetUpdateBatch[] = $clean;
		}

		return $this;
	}

	/**
	 * Empty Table
	 *
	 * Compiles a delete string and runs "DELETE FROM table"
	 *
	 * @param  string    the table to empty
	 *
	 * @return    bool    TRUE on success, FALSE on failure
	 */
	public function empty_table($table = '')
	{
		if ($table === '') {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}else {
			$table = $this->protect_identifiers($table, true, null, false);
		}

		$sql = $this->_delete($table);
		$this->_reset_write();
		return $this->query($sql);
	}

	/**
	 * Truncate
	 *
	 * Compiles a truncate string and runs the query
	 * If the database doesn't support the truncate() command
	 * This function maps to "DELETE FROM table"
	 *
	 * @param  string    the table to truncate
	 *
	 * @return    bool    TRUE on success, FALSE on failure
	 */
	public function truncate($table = '')
	{
		if ($table === '') {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}else {
			$table = $this->protect_identifiers($table, true, null, false);
		}

		$sql = $this->_truncate($table);
		$this->_reset_write();
		return $this->query($sql);
	}

	/**
	 * Truncate statement
	 *
	 * Generates a platform-specific truncate string from the supplied data
	 *
	 * If the database doesn't support the truncate() command,
	 * then this method maps to 'DELETE FROM table'
	 *
	 * @param  string    the table name
	 *
	 * @return    string
	 */
	protected function _truncate($table)
	{
		return 'TRUNCATE '.$table;
	}

	/**
	 * Get DELETE query string
	 *
	 * Compiles a delete query string and returns the sql
	 *
	 * @param  string    the table to delete from
	 * @param  bool    TRUE: reset QB values; FALSE: leave QB values alone
	 *
	 * @return    string
	 */
	public function get_compiled_delete($table = '', $reset = true)
	{
		$this->returnDeleteSql = true;
		$sql                   = $this->delete($table, '', null, $reset);
		$this->returnDeleteSql = false;
		return $sql;
	}

	/**
	 * Delete
	 *
	 * Compiles a delete string and runs the query
	 *
	 * @param  mixed    the table(s) to delete from. String or array
	 * @param  mixed    the where clause
	 * @param  mixed    the limit clause
	 * @param  bool
	 *
	 * @return    mixed
	 */
	public function delete($table = '', $where = '', $limit = null, $reset_data = true)
	{
		// Combine any cached components with the current statements
		$this->_merge_cache();

		if ($table === '') {
			if (!isset($this->qbFrom[0])) {
				return ($this->db_debug) ? $this->display_error('db_must_set_table') : false;
			}

			$table = $this->qbFrom[0];
		}elseif (is_array($table)) {
			empty($where) && $reset_data = false;

			foreach ($table as $single_table) {
				$this->delete($single_table, $where, $limit, $reset_data);
			}

			return;
		}else {
			$table = $this->protect_identifiers($table, true, null, false);
		}

		if ($where !== '') {
			$this->where($where);
		}

		if (!empty($limit)) {
			$this->limit($limit);
		}

		if (count($this->qbWhere) === 0) {
			return ($this->db_debug) ? $this->display_error('db_del_must_use_where') : false;
		}

		$sql = $this->_delete($table);
		if ($reset_data) {
			$this->_reset_write();
		}

		return ($this->returnDeleteSql === true) ? $sql : $this->query($sql);
	}

	/**
	 * Delete statement
	 *
	 * Generates a platform-specific delete string from the supplied data
	 *
	 * @param  string    the table name
	 *
	 * @return    string
	 */
	protected function _delete($table)
	{
		return 'DELETE FROM '.$table.$this->_compile_wh('qb_where')
			.($this->qbLimit !== false ? ' LIMIT '.$this->qbLimit : '');
	}

	/**
	 * DB Prefix
	 *
	 * Prepends a database prefix if one exists in configuration
	 *
	 * @param  string    the table
	 *
	 * @return    string
	 */
	public function dbprefix($table = '')
	{
		if ($table === '') {
			$this->display_error('db_table_name_required');
		}

		return $this->dbprefix.$table;
	}

	/**
	 * Set DB Prefix
	 *
	 * Set's the DB Prefix to something new without needing to reconnect
	 *
	 * @param  string    the prefix
	 *
	 * @return    string
	 */
	public function set_dbprefix($prefix = '')
	{
		return $this->dbprefix = $prefix;
	}

	// --------------------------------------------------------------------

	/**
	 * Track Aliases
	 *
	 * Used to track SQL statements written with aliased tables.
	 *
	 * @param  string    The table to inspect
	 *
	 * @return    string
	 */
	protected function _track_aliases($table)
	{
		if (is_array($table)) {
			foreach ($table as $t) {
				$this->_track_aliases($t);
			}
			return;
		}

		// Does the string contain a comma?  If so, we need to separate
		// the string into discreet statements
		if (strpos($table, ',') !== false) {
			return $this->_track_aliases(explode(',', $table));
		}

		// if a table alias is used we can recognize it by a space
		if (strpos($table, ' ') !== false) {
			// if the alias is written with the AS keyword, remove it
			$table = preg_replace('/\s+AS\s+/i', ' ', $table);

			// Grab the alias
			$table = trim(strrchr($table, ' '));

			// Store the alias, if it doesn't already exist
			if (!in_array($table, $this->qbAliasedTables, true)) {
				$this->qbAliasedTables[] = $table;
				if ($this->qbCaching === true && !in_array($table, $this->qbCacheAliasedTables, true)) {
					$this->qbCacheAliasedTables[] = $table;
					$this->qbCacheExists[]        = 'aliased_tables';
				}
			}
		}
	}

	/**
	 * Compile the SELECT statement
	 *
	 * Generates a query string based on which functions were used.
	 * Shouldn't be called directly.
	 *
	 * @param  bool  $select_override
	 *
	 * @return    string
	 */
	protected function _compile_select($select_override = false)
	{
		// Combine any cached components with the current statements
		$this->_merge_cache();

		// Write the "select" portion of the query
		if ($select_override !== false) {
			$sql = $select_override;
		}else {
			$sql = (!$this->qbDistinct) ? 'SELECT ' : 'SELECT DISTINCT ';

			if (count($this->qbSelect) === 0) {
				$sql .= '*';
			}else {
				// Cycle through the "select" portion of the query and prep each column name.
				// The reason we protect identifiers here rather than in the select() function
				// is because until the user calls the from() function we don't know if there are aliases
				foreach ($this->qbSelect as $key => $val) {
					$no_escape            = isset($this->qbNoEscape[$key]) ? $this->qbNoEscape[$key] : null;
					$this->qbSelect[$key] = $this->protect_identifiers($val, false, $no_escape);
				}

				$sql .= implode(', ', $this->qbSelect);
			}
		}

		// Write the "FROM" portion of the query
		if (count($this->qbFrom) > 0) {
			$sql .= "\nFROM ".$this->_from_tables();
		}

		// Write the "JOIN" portion of the query
		if (count($this->qbJoin) > 0) {
			$sql .= "\n".implode("\n", $this->qbJoin);
		}

		$sql .= $this->_compile_wh('qb_where')
			.$this->_compile_group_by()
			.$this->_compile_wh('qb_having')
			.$this->_compile_order_by(); // ORDER BY

		// LIMIT
		if ($this->qbLimit !== false or $this->qbOffset) {
			return $this->_limit($sql."\n");
		}

		return $sql;
	}

	/**
	 * Compile WHERE, HAVING statements
	 *
	 * Escapes identifiers in WHERE and HAVING statements at execution time.
	 *
	 * Required so that aliases are tracked properly, regardless of whether
	 * where(), or_where(), having(), or_having are called prior to from(),
	 * join() and dbprefix is added only if needed.
	 *
	 * @param  string  $qb_key  'qb_where' or 'qb_having'
	 *
	 * @return    string    SQL statement
	 */
	protected function _compile_wh($qb_key)
	{
		if (count($this->$qb_key) > 0) {
			for ($i = 0, $c = count($this->$qb_key); $i < $c; $i++) {
				// Is this condition already compiled?
				if (is_string($this->{$qb_key}[$i])) {
					continue;
				}elseif ($this->{$qb_key}[$i]['escape'] === false) {
					$this->{$qb_key}[$i] = $this->{$qb_key}[$i]['condition'].(isset($this->{$qb_key}[$i]['value']) ? ' '.$this->{$qb_key}[$i]['value'] : '');
					continue;
				}

				// Split multiple conditions
				$conditions = preg_split(
					'/((?:^|\s+)AND\s+|(?:^|\s+)OR\s+)/i',
					$this->{$qb_key}[$i]['condition'],
					-1,
					PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY
				);

				for ($ci = 0, $cc = count($conditions); $ci < $cc; $ci++) {
					if (($op = $this->_get_operator($conditions[$ci])) === false
						or !preg_match('/^(\(?)(.*)('.preg_quote($op, '/').')\s*(.*(?<!\)))?(\)?)$/i', $conditions[$ci],
							$matches)) {
						continue;
					}

					// $matches = array(
					//	0 => '(test <= foo)',	/* the whole thing */
					//	1 => '(',		/* optional */
					//	2 => 'test',		/* the field name */
					//	3 => ' <= ',		/* $op */
					//	4 => 'foo',		/* optional, if $op is for example 'IS NULL' */
					//	5 => ')'		/* optional */
					// );

					if (!empty($matches[4])) {
						$this->_is_literal($matches[4]) or $matches[4] = $this->protect_identifiers(trim($matches[4]));
						$matches[4] = ' '.$matches[4];
					}

					$conditions[$ci] = $matches[1].$this->protect_identifiers(trim($matches[2]))
						.' '.trim($matches[3]).$matches[4].$matches[5];
				}

				$this->{$qb_key}[$i] = implode('',
						$conditions).(isset($this->{$qb_key}[$i]['value']) ? ' '.$this->{$qb_key}[$i]['value'] : '');
			}

			return ($qb_key === 'qb_having' ? "\nHAVING " : "\nWHERE ")
				.implode("\n", $this->$qb_key);
		}

		return '';
	}

	/**
	 * Compile GROUP BY
	 *
	 * Escapes identifiers in GROUP BY statements at execution time.
	 *
	 * Required so that aliases are tracked properly, regardless of whether
	 * group_by() is called prior to from(), join() and dbprefix is added
	 * only if needed.
	 *
	 * @return    string    SQL statement
	 */
	protected function _compile_group_by()
	{
		if (count($this->qbGroupby) > 0) {
			for ($i = 0, $c = count($this->qbGroupby); $i < $c; $i++) {
				// Is it already compiled?
				if (is_string($this->qbGroupby[$i])) {
					continue;
				}

				$this->qbGroupby[$i] = ($this->qbGroupby[$i]['escape'] === false or $this->_is_literal($this->qbGroupby[$i]['field']))
					? $this->qbGroupby[$i]['field']
					: $this->protect_identifiers($this->qbGroupby[$i]['field']);
			}

			return "\nGROUP BY ".implode(', ', $this->qbGroupby);
		}

		return '';
	}

	/**
	 * Compile ORDER BY
	 *
	 * Escapes identifiers in ORDER BY statements at execution time.
	 *
	 * Required so that aliases are tracked properly, regardless of whether
	 * order_by() is called prior to from(), join() and dbprefix is added
	 * only if needed.
	 *
	 * @return    string    SQL statement
	 */
	protected function _compile_order_by()
	{
		if (empty($this->qbOrderby)) {
			return '';
		}

		for ($i = 0, $c = count($this->qbOrderby); $i < $c; $i++) {
			if (is_string($this->qbOrderby[$i])) {
				continue;
			}

			if ($this->qbOrderby[$i]['escape'] !== false && !$this->_is_literal($this->qbOrderby[$i]['field'])) {
				$this->qbOrderby[$i]['field'] = $this->protect_identifiers($this->qbOrderby[$i]['field']);
			}

			$this->qbOrderby[$i] = $this->qbOrderby[$i]['field'].$this->qbOrderby[$i]['direction'];
		}

		return "\nORDER BY ".implode(', ', $this->qbOrderby);
	}

	/**
	 * Object to Array
	 *
	 * Takes an object as input and converts the class variables to array key/vals
	 *
	 * @param  object
	 *
	 * @return    array
	 */
	protected function _object_to_array($object)
	{
		if (!is_object($object)) {
			return $object;
		}

		$array = array();
		foreach (get_object_vars($object) as $key => $val) {
			// There are some built in keys we need to ignore for this conversion
			if (!is_object($val) && !is_array($val) && $key !== '_parent_name') {
				$array[$key] = $val;
			}
		}

		return $array;
	}

	/**
	 * Object to Array
	 *
	 * Takes an object as input and converts the class variables to array key/vals
	 *
	 * @param  object
	 *
	 * @return    array
	 */
	protected function _object_to_array_batch($object)
	{
		if (!is_object($object)) {
			return $object;
		}

		$array  = array();
		$out    = get_object_vars($object);
		$fields = array_keys($out);

		foreach ($fields as $val) {
			// There are some built in keys we need to ignore for this conversion
			if ($val !== '_parent_name') {
				$i = 0;
				foreach ($out[$val] as $data) {
					$array[$i++][$val] = $data;
				}
			}
		}

		return $array;
	}

	/**
	 * Start Cache
	 *
	 * Starts QB caching
	 *
	 * @return    Query1
	 */
	public function start_cache()
	{
		$this->qbCaching = true;
		return $this;
	}

	/**
	 * Stop Cache
	 *
	 * Stops QB caching
	 *
	 * @return    Query1
	 */
	public function stop_cache()
	{
		$this->qbCaching = false;
		return $this;
	}

	/**
	 * Flush Cache
	 *
	 * Empties the QB cache
	 *
	 * @return    Query1
	 */
	public function flush_cache()
	{
		$this->_reset_run(array(
			'qb_cache_select'         => array(),
			'qb_cache_from'           => array(),
			'qb_cache_join'           => array(),
			'qb_cache_where'          => array(),
			'qb_cache_groupby'        => array(),
			'qb_cache_having'         => array(),
			'qb_cache_orderby'        => array(),
			'qb_cache_set'            => array(),
			'qb_cache_exists'         => array(),
			'qb_cache_no_escape'      => array(),
			'qb_cache_aliased_tables' => array()
		));

		return $this;
	}

	/**
	 * Merge Cache
	 *
	 * When called, this function merges any cached QB arrays with
	 * locally called ones.
	 *
	 * @return    void
	 */
	protected function _merge_cache()
	{
		if (count($this->qbCacheExists) === 0) {
			return;
		}elseif (in_array('select', $this->qbCacheExists, true)) {
			$qb_no_escape = $this->qbCacheNoEscape;
		}

		foreach (array_unique($this->qbCacheExists) as $val) // select, from, etc.
		{
			$qb_variable  = 'qb_'.$val;
			$qb_cache_var = 'qb_cache_'.$val;
			$qb_new       = $this->$qb_cache_var;

			for ($i = 0, $c = count($this->$qb_variable); $i < $c; $i++) {
				if (!in_array($this->{$qb_variable}[$i], $qb_new, true)) {
					$qb_new[] = $this->{$qb_variable}[$i];
					if ($val === 'select') {
						$qb_no_escape[] = $this->qbNoEscape[$i];
					}
				}
			}

			$this->$qb_variable = $qb_new;
			if ($val === 'select') {
				$this->qbNoEscape = $qb_no_escape;
			}
		}
	}

	/**
	 * Is literal
	 *
	 * Determines if a string represents a literal value or a field name
	 *
	 * @param  string  $str
	 *
	 * @return    bool
	 */
	protected function _is_literal($str)
	{
		$str = trim($str);

		if (empty($str) or ctype_digit($str) or (string) (float) $str === $str or in_array(strtoupper($str),
				array('TRUE', 'FALSE'), true)) {
			return true;
		}

		static $_str;

		if (empty($_str)) {
			$_str = ($this->_escape_char !== '"')
				? array('"', "'") : array("'");
		}

		return in_array($str[0], $_str, true);
	}

	/**
	 * Reset Query Builder values.
	 *
	 * Publicly visible method to reset the QB values.
	 *
	 * @return    Query1
	 */
	public function reset_query()
	{
		$this->_reset_select();
		$this->_reset_write();
		return $this;
	}

	/**
	 * Resets the query builder values.  Called by the get() function
	 *
	 * @param  array    An array of fields to reset
	 *
	 * @return    void
	 */
	protected function _reset_run($qb_reset_items)
	{
		foreach ($qb_reset_items as $item => $default_value) {
			$this->$item = $default_value;
		}
	}

	/**
	 * Resets the query builder values.  Called by the get() function
	 *
	 * @return    void
	 */
	protected function _reset_select()
	{
		$this->_reset_run(array(
			'qb_select'         => array(),
			'qb_from'           => array(),
			'qb_join'           => array(),
			'qb_where'          => array(),
			'qb_groupby'        => array(),
			'qb_having'         => array(),
			'qb_orderby'        => array(),
			'qb_aliased_tables' => array(),
			'qb_no_escape'      => array(),
			'qb_distinct'       => false,
			'qb_limit'          => false,
			'qb_offset'         => false
		));
	}

	/**
	 * Resets the query builder "write" values.
	 *
	 * Called by the insert() update() insert_batch() update_batch() and delete() functions
	 *
	 * @return    void
	 */
	protected function _reset_write()
	{
		$this->_reset_run(array(
			'qb_set'     => array(),
			'qb_set_ub'  => array(),
			'qb_from'    => array(),
			'qb_join'    => array(),
			'qb_where'   => array(),
			'qb_orderby' => array(),
			'qb_keys'    => array(),
			'qb_limit'   => false
		));
	}
}
