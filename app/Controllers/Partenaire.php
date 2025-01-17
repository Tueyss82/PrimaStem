<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Partenaire extends BaseController
{
    private $partenaireModel;

    public function __construct()
    {
        $this->partenaireModel = model('Partenaire');
    }

    public function index()
    {
        $partenaires = $this->partenaireModel->findAll();

        return view('PrimaStem/partenaires', [
            'listePartenaires' => $partenaires
        ]);
    }

    public function ajout()
    {
        $articles = $this->partenaireModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function create()
    {
        $articles = $this->partenaireModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function modif()
    {
        $articles = $this->partenaireModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function update()
    {
        $articles = $this->partenaireModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function delete()
    {
        $articles = $this->partenaireModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }
}
