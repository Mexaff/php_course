<?php


namespace Core\Database;


class Connecter
{
    protected $config = [];

    public function __constructor()
    {
        $this->set_config();
    }

    public function set_config()
    {
        $this->config =  include APP_ABSOLUTE_PATH . '/Config/DB.php';
    }

    public function connectDB()
    {
        $connect = false;
        if(is_array($this->config) && !empty($this->config)) {
            extract($this->config);
            $connect =  mysqli_connect($host, $user, $password);
        }

        return $connect;

    }





}