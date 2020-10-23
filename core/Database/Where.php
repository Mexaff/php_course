<?php


namespace Core\Database;


class Where
{
    private $where = '';
    private $addWhere = '';

    public function setWhere(string $temp)
    {
        $this->where = $temp;
    }

    public function setWhereArray(array $condition)
    {
        if(!empty($condition)) {
            foreach($condition as $key => $value) {
                if(empty($this->where)) {
                    $this->where = $key . '=' . $value;
                } else {
                    if(empty($this->addWhere)) {
                        $this->addWhere = $key . '=' . $value;
                    }
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