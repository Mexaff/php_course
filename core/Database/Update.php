<?php


namespace Core\Database;


class Update
{
    private $connector;

    protected $tableName = '';

    protected $columns = '';

    protected $valueString = '';

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

    public function setWhere(array $condition)
    {
        $where = new Where;
        $where->setWhere($condition);
        $this->where = $where->stringWhere();
    }
    public function orWhere(array $condition)
    {
        $where = new Where;
        $where->orWhere($condition);
        $this->where .= $where->stringWhere();
    }

   public function GetSqlString()
    {
        return 'UPDATE ' . $this->tableName . ' SET ' . $this->valueString . $this->where;
    }
    public function execute()
    {
        return mysqli_query($this->connector, $this->GetSqlString());
    }

}
