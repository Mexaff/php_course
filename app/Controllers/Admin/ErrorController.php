<?php


namespace App\Controllers\Admin;

use App\Controllers\Controller;

class ErrorController extends Controller
{
    public function indexError() {
        $this->generate('templates/404');
    }
}