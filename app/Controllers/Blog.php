<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Blog extends BaseController
{
    private $blogModel;
    private $file;

    public function __construct()
    {
        $this->blogModel = model('Blog');
        $this->file = new \CodeIgniter\Files\File('');
    }

    public function index()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function ajout()
    {
        return view('PrimaStem/ajout_article');
    }

    public function create()
    {
        $articleData = $this->request->getPost();

        $newImgName = $this->file->getRandomName();
        $this->file->move(WRITEPATH . '..\upload');

        // var_dump($articleData);
        // die();
        $this->blogModel->save($articleData);

        return redirect('primastem');
    }

    public function modif()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function update()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }

    public function delete()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/blog', [
            'listeArticles' => $articles
        ]);
    }
}
