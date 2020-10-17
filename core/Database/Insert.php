<?php


namespace Core\Database;


class Insert
{
    private $connector;

    protected $columns = '';

    protected $tableName = '';

    protected $values = '';

    public function __construct()
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
    }

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }


    public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->columns = $columnName;
                    $this->values = '\'' . $value . '\'';
                } else {
                    $this->columns = ', ' . $columnName;
                    $this->values = ', ' . '\'' . $value . '\'';
                }
            }
        }
    }

    private function setString()
    {
        return 'INSERT INTO ' . $this->tableName . ' (' . $this->columns . ') VALUES (' .  $this->values . ')';
    }

    public function execute()
    {
        //var_export($this->setString());
        return mysqli_query($this->connector, $this->setString());
    }
}