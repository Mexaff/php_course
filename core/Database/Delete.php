<?php


namespace Core\Database;


class Delete
{
    protected $tableName = '';

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function GetSqlString()
    {
        $sql = 'DELETE FROM ' . $this->tableName;
        return $sql;
    }

}