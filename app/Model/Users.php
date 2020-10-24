<?php


namespace App\Model;

use Core\Database\Select;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;

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
        if(!empty($condition)) {
            $this->firstname = $condition['firstname'];
            $this->secondname = $condition['secondname'];
            $this->email = $condition['email'];
            $this->login = $condition['login'];
            $this->password = $condition['password'];
            $this->role = $condition['role'];
            if (array_key_exists('id', $condition)) {
                $this->id = $condition['id'];
                $update = new Update();
                $update->setTableName($this->tableName);
                $update->setCondition([
                    'id' => $this->id,
                    'firstname' => $this->firstname,
                    'secondname' => $this->secondname,
                    'email' => $this->email,
                    'login' => $this->login,
                    'password' => $this->password,
                    'role' => $this->role,
                ]);
                $update->setWhere(['id','=', $this->id]);
                $update->execute();
            } else {
                $insert = new Insert();
                $insert->setTableName($this->tableName);
                $insert->setCondition([
                    'firstname' => $this->firstname,
                    'secondname' => $this->secondname,
                    'email' => $this->email,
                    'login' => $this->login,
                    'password' => $this->password,
                    'role' => $this->role,
                ]);
                $insert->execute();
            }
        }
    }

    public function deleteUser(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->setWhere(['id','=', $id]);
        $delete->execute();
    }

    public function getUser(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere(['id','=', $id]);
            $return = $select->execute();
            var_export($return); echo '<br>';
            return $return;
        }
    }

    /**
     * @param array $ids
     * $ids [['id','=', 'number'],
     *       ['id','=', 'number'],
     *       ['id','=', 'number'],
     *      ]
     */
    public function getUsers(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }

}