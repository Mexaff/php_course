<?php


namespace App\Controllers;


class ErrorController
{
    public function indexError() {
        http_response_code(404);
    }
}