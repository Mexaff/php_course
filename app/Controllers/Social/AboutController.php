<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;

class AboutController extends Controller
{
    public function actionIndex()
    {
        $this->generate('social', 'Social/about');
    }
}