<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function loginBackoffice()
    {
        return view('Shield/login');
    }

    // public function createLogin()
    // {
    //     return view('PrimaStem/index.php');
    // }
}
