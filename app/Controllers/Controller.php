<?php

namespace App\Controllers;

use Core\View;

class Controller
{
    public function generateTemplate(string $templateName ,string $viewName, array $param = [])
    {
        View::generateTemplate($templateName, $viewName, $param);
    }
    public function generateView(string $viewName, array $param = [])
    {
        View::generateView($viewName, $param);
    }
}
