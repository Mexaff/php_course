<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class RegistrController extends Controller
{
    public function actionIndex()
    {
        $this->generateTemplate('social','Social/registr');
    }
}