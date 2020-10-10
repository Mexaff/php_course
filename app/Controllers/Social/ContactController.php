<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $this->generateTemplate('social','Social/contact');
    }
}