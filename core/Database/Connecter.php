<?php


namespace Core\Database;


class Connecter
{
    private $config = [];

    public function __constructor()
    {
        $this->setConfig();
    }

    public function setConfig()
    {
        $this->config = include APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config/DB.php';
    }

    public function connectDB()
    {
//        if(is_array($this->config) && !empty($this->config)) {
            var_export($this->config);
            echo '<br>';
            extract($this->config);
            var_export($host);
//            $temp = array_values($this->config);
//            $host = $temp[0];
//            $user = $temp[1];
//            $password = $temp[2];
            $connect =  mysqli_connect($host, $user, $password);
            var_export($connect);
//            return $connect;
//        } else {
//            return false;
//        }
    }





}