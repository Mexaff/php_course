<?php


namespace App\Model;

use Core\Database\Select;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;

class Contacts
{
    public $tableName = 'price';
    public $id;
    public $name;
    public $price;

    public function getTableName()
    {
        return $this->tableName;
    }

    public function savePrice(array $condition)
    {
        if(!empty($condition)) {
            $this->name = $condition['name'];
            $this->price = $condition['price'];
            if (array_key_exists('id', $condition)) {
                $this->id = $condition['id'];
                $update = new Update();
                $update->setTableName($this->tableName);
                $update->setCondition([
                    'id' => $this->id,
                    'name' => $this->name,
                    'price' => $this->price,
                ]);
                $update->setWhere(['id','=', $this->id]);
                $update->execute();
            } else {
                $insert = new Insert();
                $insert->setTableName($this->tableName);
                $insert->setCondition([
                    'name' => $this->name,
                    'price' => $this->price,
                ]);
                $insert->execute();
            }
        }
    }

    public function deletePrice(int $id)
    {
        $delete = new Delete();
        $delete->setTableName($this->tableName);
        $delete->setWhere(['id','=', $id]);
        $delete->execute();
    }

    public function getPrice(int $id)
    {
        if ($id > 0) {
            $select = new Select();
            $select->setTableName($this->tableName);
            $select->setWhere(['id','=', $id]);
            $select->execute();
        }
    }

    public function getPrices(array $ids = [])
    {
        $select = new Select();
        $select->setTableName($this->tableName);
        $select->setWhere($ids);
        $select->execute();
    }

}