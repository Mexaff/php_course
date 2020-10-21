<?php


namespace App\Model;
use Core\Database\DBcontroller;

class Users
{
    public $tableName = 'users';
    public $id;
    public $firstname;
    public $secondname;
    public $email;
    public $login;
    public $password;
    public $role;
    public $datacreate;
    public $dataupdate;

    public function getTableName()
    {
        return $this->tableName;
    }

    public function saveUser(array $condition)
    {
        //unset('id')
        //array['id']
    }

    public function deleteUser()
    {

    }

    public function getUser(int $id)
    {
        if($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->where('id=' . $id);
            $select->setJoin('roles', 'users.role=role.id');
            $select->execute();
        }
    }

    public function getsUser(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->where();
        $select->setJoin('roles', 'users.role=role.id');
        $select->execute();
    }



}