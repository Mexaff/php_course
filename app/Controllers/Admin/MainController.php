<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->generateTemplate('social' ,'social/index');
    }
}