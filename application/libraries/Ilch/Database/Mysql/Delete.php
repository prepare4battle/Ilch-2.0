<?php
/**
 * @copyright Ilch 2.0
 * @package ilch
 */

namespace Ilch\Database\Mysql;
defined('ACCESS') or die('no direct access');

class Delete extends QueryBuilder
{
    /**
     * @var string
     */
    protected $_type = 'delete';

    /**
     * Gets delete query builder sql.
     *
     * @return string
     */
    public function generateSql()
    {
        $sql = 'DELETE  FROM `[prefix]_'.$this->_table.'`';

        if ($this->_where != null) {
            $sql .= 'WHERE 1 ' . $this->_getWhereSql($this->_where);
        }

        return $sql;
    }
}