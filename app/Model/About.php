<?php

namespace App\Model;

use Core\Database\Select;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;

class About
{
    public $tableName = 'about';
    public $id = '';
    public $information = '';



    public function getTableName()
    {
        return $this->tableName;
    }

    public function saveAbout(array $condition)
    {
        if(!empty($condition)) {
            if (array_key_exists('id', $condition)) {
                $this->id = $condition['id'];
                $this->information = $condition['information'];
                $update = new Update();
                $update->setTableName($this->tableName);
                $update->setCondition([
                    'id' => $this->id,
                    'information' => $this->information,
                ]);
                $update->where('id=' . $this->id);
                $update->execute();
            } else {
                if (array_key_exists('information', $condition)) {
                    $this->information = $condition['information'];
                }
                $insert = new Insert();
                $insert->setTableName($this->tableName);
                $insert->setCondition([
                    'information' => $this->information,
                ]);
                $insert->execute();
            }
        }
    }

    public function deleteAbout(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->where('id=' . $id);
        $delete->execute();
    }

    public function getAbout(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere('id=' . $id);
            $select->execute();
        }
    }
    public function getAbouts(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }
}