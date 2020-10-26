<?php

namespace App\Controllers;

use Core\View;

class Controller
{
    public function generateTemplate(string $templateName ,string $viewName, $data = null)
    {
        View::generateTemplate($templateName, $viewName, $data);
    }
    public function generateView(string $viewName, array $param = [])
    {
        View::generateView($viewName, $param);
    }
}
