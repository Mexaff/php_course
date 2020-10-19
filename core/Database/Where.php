<?php


namespace Core\Database;


class Where
{
    private $where;
    private $columns;

    public function setWhere(string $temp)
    {
        $this->where = $temp;
    }

    public function setWhereArray(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $columnName => $value) {
                if(empty($this->columns)) {
                    $this->where = $columnName . '=' . $value;
                }
            }
        }
    }

    public function stringWhere()
    {
        if(!empty($this->where)) {
            return ' WHERE ' . $this->where;
        }
    }

}