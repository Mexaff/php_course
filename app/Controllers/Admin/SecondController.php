<?php


namespace App\Controllers\Admin;

use App\Controllers\Controller;

class SecondController extends Controller
{
    public function actionIndex2()
    {
        echo 'Hello world! It`s second controller';
        return true;
    }

}