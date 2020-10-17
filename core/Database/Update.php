<?php


namespace Core\Database;


class Update
{
    private $connector;

    protected $tableName = '';

    protected $columns = '';

    protected $valueString = '';

    protected $id = 0;

    public function __construct()
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
    }

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function setCondition(array $condition, $id)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->valueString = $columnName . '= \'' . $value . '\'';
                } else {
                    $this->valueString = ',' . $columnName . '= \'' . $value . '\'';
                }
            }
            $this->id = '\'' . $id . '\'';
        }
    }

    private function setString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' . $this->valueString . ' WHERE id = ' . $this->id;
    }

    public function execute()
    {
        //var_export($this->setString());
        return mysqli_query($this->connector, $this->setString());
    }

}
