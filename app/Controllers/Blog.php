<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Blog extends BaseController
{
    private $blogModel;

    public function __construct()
    {  
        $this->blogModel = model('Blog');
    }

    public function index()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }
}
