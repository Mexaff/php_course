<?php

namespace App\Controllers;

use Core\View;

class Controller
{
    public function generate(string $templateName ,string $viewName, array $param = [])
    {
        View::generate($templateName, $viewName, $param);
    }
}
