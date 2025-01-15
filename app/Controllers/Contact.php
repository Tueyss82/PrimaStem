<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Contact extends BaseController
{
    private $contactModel;

    public function __construct()
    {
        $this->contactModel = model('Contact');
    }

    public function index()
    {
        return view('PrimaStem/contact');
    }

    public function create()
    {
        $contactData = $this->request->getPost(['NOM', 'PRENOM', 'ADRESSEMAIL']);
        // var_dump($contactData);
        // die();
        $this->contactModel->save($contactData);
        
        return redirect('primastem');
    }
}
