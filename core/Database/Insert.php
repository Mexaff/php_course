<?php


namespace Core\Database;


class Insert
{
    protected $link;
    public function __construct()
    {
        //$dbconnecter = new Connecter();
        $dbconnecter = new \mysqli('127.0.0.1', 'root', 'root', 'test');
        $link = $dbconnecter->connectDB();
    }

    public function insert($table, $column1 = null, $column2 = null, $column3 = null, $column4 = null, $column5 = null)
    {
        
    }



}