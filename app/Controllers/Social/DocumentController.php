<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class DocumentController extends Controller
{
    public function actionIndex()
    {
        $this->generate('social','Social/documents');
    }
}