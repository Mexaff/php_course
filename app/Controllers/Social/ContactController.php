<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $this->generate('Social/contact');
    }
}