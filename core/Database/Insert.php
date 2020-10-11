<?php


namespace Core\Database;


class Insert
{
    protected $link;
    public function __constructor()
    {
        $dbconnecter = new Connecter;
        $dbconnecter->connectDB();
    }

}