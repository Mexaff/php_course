<?php


namespace Core\Database;


class Where
{
    private $where = '';

    public function setWhere(array $condition)
    {

            if(is_array($condition)) {
                if (!$this->checkSingleCondition($condition)) {
                    trigger_error('Incorrect data in "Where"');
                } else {
                    if (empty($this->where)) {
                        $this->where = $condition[0] . $condition[1] . $condition[2];
                    } else {
                        $this->where .= ' AND ' . $condition[0] . $condition[1] . $condition[2];
                    }
                }
            }

    }

    public function OrWhere($condition)
    {
        if(is_array($condition)) {
            if (!$this->checkSingleCondition($condition)) {
                trigger_error('Incorrect data in "Where"');
            } else {
                    $this->where .= ' OR ' . $condition[0] . $condition[1] . $condition[2];

            }
        }
    }


    public function stringWhere()
    {
        if(!empty($this->where)) {
            return ' WHERE ' . $this->where;
        }
    }



    private function checkSingleCondition(array $condition)
    {
        $result = true;
        if(!empty($condition)) {
            if (empty($condition[0])) $result = false;
            elseif (empty($condition[1])) $result = false;
            elseif (empty($condition[2])) $result = false;
            elseif (!empty($condition[3])) $result = false;
        }
        return $result;
    }



}