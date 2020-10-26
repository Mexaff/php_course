<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Database\Connecter;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;
use Core\Database\DBcontroller;
use App\Model\Users;
use App\Model\Roles;

class MainController extends Controller
{
    public function actionIndex()
    {
        $users = new Users();
        $data = $users->getUsers();

        $this->generateTemplate('social' ,'social/index', $data);
    }
    public function connectDatabase()
    {
        $users = new Users();
        $users->saveUser([
            'firstname' => 'Andrew',
            'secondname' => 'Yarovoy',
            'email' => 'b@b.com',
            'login' => 'andrey',
            'password' => 'apple',
            'role' => '3',
        ]);

    }

}