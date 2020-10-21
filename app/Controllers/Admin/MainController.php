<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use Core\Database\Connecter;
use Core\Database\Delete;
use Core\Database\Insert;
use Core\Database\Update;
use Core\Database\DBcontroller;

class MainController extends Controller
{
    public function actionIndex()
    {
        $this->connectDatabase();
        $this->generateTemplate('social' ,'social/index');
    }
    public function connectDatabase()
    {
//        $temp = new DBcontroller('roles');
//        $temp->update([
//            'role_name' => 'user'
//        ]);
//        //$temp->WhereID(2);
//        $temp->Where('id=1');
//        $temp->execute();


//        $temp = new DBcontroller('roles');
//        $temp->insert([
//            'role_name' => 'test'
//        ]);
//        $temp->execute();

//        $temp = new DBcontroller('roles');
//        $temp->delete();
//        $temp->WhereID(5);
//        $temp->execute();




//        $temp = new Insert();
//        $temp->setTableName('roles');
//        $temp->setCondition([
//            'role_name' => 'admin'
//        ]);
//        $temp->execute();

//        $temp = new Update();
//        $temp->setTableName('roles');
//        $temp->setCondition([
//            'role_name' => 'user'
//       ], 1);
//        $temp->execute();


//        $temp = new Delete();
//        $temp->setTableName('roles');
//        $temp->setCondition(2);
//        $temp->execute();


    }

}