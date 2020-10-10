<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class PriceController extends Controller
{
    public function actionIndex()
    {
        $this->generateTemplate('social','Social/price');
    }
}