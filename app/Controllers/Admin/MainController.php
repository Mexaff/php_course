<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Database\Connecter;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->connectDatabase();
        $this->generateTemplate('social' ,'social/index');
    }
    public function connectDatabase()
    {
        $dbconnecter = new Connecter();
        //$dbconnecter->connectDB();
        $temp = $dbconnecter->connectDB();
        //$temp = mysqli_connect('127.0.0.1', 'root', 'root');
        if($temp) {
            echo 'Connect successful<br>';
            var_export($temp);
        } else {
            echo 'Connect failed<br>';
        }
    }
}