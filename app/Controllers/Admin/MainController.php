<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Database\Connecter;

class MainController extends Controller
{
    public function actionIndex()
    {
        connectDatabase();
        $this->generateTemplate('social' ,'social/index');
    }
    public function connectDatabase()
    {
        $connecter = new Connecter;
        $connecter->connectDB();
        var_export($connecter);
    }
}