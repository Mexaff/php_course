<?php


namespace Core\Database;


class Select
{

    protected $tableName = '';

    protected $column = '*';

    protected $orderBy = '';

    protected $limit = '';
    protected $join;

    protected $where;
    protected $group;


    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function setColumns(array $condition)
    {
        if(is_array($condition)){
            foreach ($condition as $value){
                if($this->column == '*') {
                    $this->column = $value;
                } else {
                    $this->column .= ', ' . $value;
                }
            }
        } else {
            $this->column = $condition;
        }
    }


    public function setWhere(string $where)
    {
        $this->where = $where;
    }

    public function setGroupBy(string $group)
    {
        $this->group = $group;
    }
    public function setOrderBy($order)
    {
        if(is_array($order)) {
            foreach ($order as $key => $value) {
                if(empty($this->orderBy)) {
                    $this->orderBy = $key . ' ' . $value;
                } else {
                    $this->orderBy .= ', ' . $key . ' ' . $value;
                }
            }
        } else {
            $this->orderBy = $order;
        }
    }

    public function setLimit(int $limit, int $offset = null)
    {
        if($offset > 0) {
            $this->limit = $offset . ', ' . $limit;
        } else {
            $this->limit = $limit;
        }
    }

    public function setJoin(string $tableName, string $condition, string $type = null)
    {
        if(is_null($type)) {
            $type = 'INNER';
        }
        $this->join[] = $type . ' JOIN ' .  $tableName . ' ON ' . $condition;
    }


    public function GetSqlString()
    {
        $sql = 'SELECT ' . $this->column . ' FROM ' . $this->tableName;
        if(!empty($this->join)) {
            foreach ($this->join as $item) {
                $sql .=  ' ' . $item;
            }
        }
        if(!empty($this->where)) {
            $sql .=   ' WHERE ' . $this->where;
        }
        if(!empty($this->group)) {
            $sql .=   ' GROUP BY ' . $this->group;
        }
        if(!empty($this->orderBy)) {
            $sql .=   ' ORDER BY ' . $this->orderBy;
        }
        if(!empty($this->limit)) {
            $sql .=   ' LIMIT ' . $this->limit;
        }
        return $sql;
    }
}