<?php

namespace Core\Database;

class DBcontroller
{
    private $connector;
    private $tableName;

    private $stringWhere = '';
    private $stringUpdate = '';
    private $executeString = '';
    private $insertString = '';
    private $deleteString = '';

    public function __construct(string $tableName)
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
        $this->setTableName($tableName);
    }

    private function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function update(array $condition)
    {
        $update = new Update();
        $update->setTableName($this->tableName);
        $update->setCondition($condition);
        $this->stringUpdate = $update->GetSqlString();
    }

    public function Where(string $string)
    {
        $temp = new Where();
        $temp->setWhere($string);
        $this->stringWhere = $temp->stringWhere();
    }

    public function WhereID(int $id)
    {
        $temp = new Where();
        $temp->setWhere('id='.$id);
        $this->stringWhere = $temp->stringWhere();
    }

    public function select(array $condition)
    {
        $select = new Select();
        $select->setColumns($condition);
        $select->setTableName($this->tableName);
        $select->setWhere($this->stringWhere);
        $this->executeString = $select->GetSqlString();
    }
    public function selectGroupBy(array $condition, string $group)
    {
        $select = new Select();
        $select->setColumns($condition);
        $select->setTableName($this->tableName);
        $select->setGroupBy($group);
        $this->executeString = $select->GetSqlString();
    }
    public function SelectOrderBy(array $condition, $order)
    {
        $select = new Select();
        $select->setColumns($condition);
        $select->setTableName($this->tableName);
        $select->setGroupBy($order);
        $this->executeString = $select->GetSqlString();
    }
    public function selectJoin(array $condition, string $type, string $tableName, array $condition2)
    {
        $select = new Select();
        $select->setColumns($condition);
        $select->setTableName($this->tableName);
        $select->setJoin($type, $tableName, $condition2);
        $this->executeString = $select->GetSqlString();
    }
    public function selectLimit(array $condition, int $limit, int $offset = null)
    {
        $select = new Select();
        $select->setColumns($condition);
        $select->setTableName($this->tableName);
        $select->setLimit($limit, $offset);
        $this->executeString = $select->GetSqlString();
    }

    public function insert(array $conditions)
    {
        $insert = new Insert();
        $insert->setTableName($this->tableName);
        $insert->setCondition($conditions);
        $this->insertString = $insert->GetSqlString();
    }

    public function delete()
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $this->deleteString = $delete->GetSqlString();
    }

    public function execute()
    {
        if(!empty($this->insertString)) {
            $this->executeString = $this->insertString;
        } else if(!empty($this->stringUpdate)) {
            $this->executeString = $this->stringUpdate . $this->stringWhere;
        } else if (!empty($this->deleteString)) {
            $this->executeString = $this->deleteString . $this->stringWhere;
        }


        if(!empty($this->executeString)) {
            //var_export($this->executeString);
            return mysqli_query($this->connector, $this->executeString);
        }
    }

}