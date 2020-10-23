<?php


namespace Core\Database;


class Delete
{
    protected $tableName = '';
    protected $connector;
    protected $where = '';
    public function __construct()
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
    }

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function GetSqlString()
    {
        $sql = 'DELETE FROM ' . $this->tableName . $this->where;
        return $sql;
    }

    public function where(string $str)
    {
        if(empty($this->where)) {
            $this->where = ' WHERE ' . $str;
        } else {
            $this->where .= $str;
        }
    }
    public function execute()
    {
        return mysqli_query($this->connector, $this->GetSqlString());
    }

}