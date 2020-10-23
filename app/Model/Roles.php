<?php

namespace App\Model;

use Core\Database\Select;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;

class Roles
{
    public $tableName = 'roles';
    public $id = '';
    public $role_name = '';



    public function getTableName()
    {
        return $this->tableName;
    }

    public function saveRole(array $condition)
    {
        if(!empty($condition)) {
            if (array_key_exists('id', $condition)) {
                $this->id = $condition['id'];
                $this->role_name = $condition['role_name'];
                $update = new Update();
                $update->setTableName($this->tableName);
                $update->setCondition([
                    'id' => $this->id,
                    'role_name' => $this->role_name,
                ]);
                $update->where('id=' . $this->id);
                $update->execute();
            } else {
                if (array_key_exists('role_name', $condition)) {
                    $this->role_name = $condition['role_name'];
                }
                $insert = new Insert();
                $insert->setTableName($this->tableName);
                $insert->setCondition([
                    'role_name' => $this->role_name,
                ]);
                $insert->execute();
            }
        }
    }

    public function deleteRole(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->where('id=' . $id);
        $delete->execute();
    }

    public function getRole(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere('id=' . $id);
            $select->execute();
        }
    }
    public function getRoles(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }
}