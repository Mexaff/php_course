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
        $temp = $dbconnecter->connectDB();
        if($temp) {
            echo 'Connect successful<br>';
            var_export($temp);
        } else {
            echo 'Connect failed<br>';
        }
    }
}