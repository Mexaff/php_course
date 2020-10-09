<?php


namespace App\Controllers;

class ErrorController extends Controller
{
    public function indexError() {
        $this->generateView('templates/404');
    }
}