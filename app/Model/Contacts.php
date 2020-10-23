<?php


namespace App\Model;

use Core\Database\Select;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;

class Contacts
{
    public $tableName = 'contacts';
    public $id;
    public $firstname;
    public $secondname;
    public $email;
    public $phoneNumber;
    public $homeNumber;
    public $company;

    public function getTableName()
    {
        return $this->tableName;
    }

    public function saveContact(array $condition)
    {
        if(!empty($condition)) {
            $this->firstname = $condition['firstname'];
            $this->secondname = $condition['secondname'];
            $this->email = $condition['email'];
            $this->phoneNumber = $condition['phoneNumber'];
            $this->homeNumber = $condition['homeNumber'];
            $this->company = $condition['company'];
            if (array_key_exists('id', $condition)) {
                $this->id = $condition['id'];
                $update = new Update();
                $update->setTableName($this->tableName);
                $update->setCondition([
                    'id' => $this->id,
                    'firstname' => $this->firstname,
                    'secondname' => $this->secondname,
                    'email' => $this->email,
                    'phoneNumber' => $this->phoneNumber,
                    'homeNumber' => $this->homeNumber,
                    'company' => $this->company,
                ]);
                $update->where('id=' . $this->id);
                $update->execute();
            } else {
                $insert = new Insert();
                $insert->setTableName($this->tableName);
                $insert->setCondition([
                    'firstname' => $this->firstname,
                    'secondname' => $this->secondname,
                    'email' => $this->email,
                    'phoneNumber' => $this->phoneNumber,
                    'homeNumber' => $this->homeNumber,
                    'company' => $this->company,
                ]);
                $insert->execute();
            }
        }
    }

    public function deleteContact(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->where('id=' . $id);
        $delete->execute();
    }

    public function getContact(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere('id=' . $id);
            $select->execute();
        }
    }

    public function getContacts(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }

}