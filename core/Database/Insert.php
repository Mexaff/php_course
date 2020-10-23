<?php


namespace Core\Database;


class Insert
{

    protected $columns = '';

    protected $tableName = '';

    protected $values = '';
    protected $connector;

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }
    public function __construct()
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
    }

    public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->columns = $columnName;
                    $this->values = '\'' . $value . '\'';
                } else {
                    $this->columns .= ', ' . $columnName;
                    $this->values .= ', ' . '\'' . $value . '\'';
                }
            }
        }
    }

    public function GetSqlString()
    {
        return 'INSERT INTO ' . $this->tableName . ' (' . $this->columns . ') VALUES (' .  $this->values . ')';
    }

    public function execute()
    {
        var_export($this->GetSqlString());
        return mysqli_query($this->connector, $this->GetSqlString());
    }
}