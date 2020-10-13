<?php


namespace Core\Database;


class Connecter
{
    public $config = [];

    public function __construct()
    {
        $this->setConfig();
    }

    public function setConfig()
    {
        $this->config = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'DB.php';
    }

    public function connectDB()
    {
       if(is_array($this->config) && !empty($this->config)) {

            extract($this->config);
            $connect =  mysqli_connect($host, $user, $password, $nameBD);

            return $connect;

        } else {
            return false;
        }
    }





}