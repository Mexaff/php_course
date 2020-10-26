<?php


namespace App\Controllers\Social;

use App\Controllers\Controller;
use App\Model\Contacts;

class ContactController extends Controller
{
    public function actionIndex()
    {
        $contact = new Contacts();
        $data = $contact->getContact(1);
        $this->generateTemplate('social','Social/contact', $data);
    }
}