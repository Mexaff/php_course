<?php


namespace Core\Database;


class Update
{
    private $connector;

    protected $tableName = '';

    protected $columns = '';

    protected $valueString = '';

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function setCondition(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->valueString = $columnName . '= \'' . $value . '\'';
                } else {
                    $this->valueString = ',' . $columnName . '= \'' . $value . '\'';
                }
            }
        }
    }

   public function GetSqlString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' . $this->valueString;
    }

}
