<?php


namespace Core\Database;


class Delete
{
    private $connector;

    protected $tableName = '';

    protected $id = 0;

    public function __construct()
    {
        $temp = new Connecter();
        $this->connector = $temp->connectDB();
    }

    public function setTableName(string $name)
    {
        $this->tableName = $name;
    }

    public function setCondition($id)
    {

            $this->id = '\'' . $id . '\'';

    }

    private function setString()
    {
        return 'DELETE FROM ' . $this->tableName . ' WHERE id = ' . $this->id;
    }

    public function execute()
    {
        //var_export($this->setString());
        return mysqli_query($this->connector, $this->setString());
    }

}