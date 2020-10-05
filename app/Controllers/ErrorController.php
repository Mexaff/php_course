<?php


namespace App\Controllers;

class ErrorController extends Controller
{
    public function indexError() {
        $this->generate('templates/404');
    }
}