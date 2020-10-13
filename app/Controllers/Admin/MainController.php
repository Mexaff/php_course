<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Database\Connecter;

class MainController extends Controller
{
    public function actionIndex()
    {
        var_export(APP_ABSOLUTE_PATH . DIRECTORY_SEPARATOR . 'Config' . DIRECTORY_SEPARATOR . 'DB.php');
        echo '<br>';
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