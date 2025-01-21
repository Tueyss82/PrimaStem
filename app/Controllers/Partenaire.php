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
        return view('PrimaStem/ajoutPartenaire');
    }

    public function create()
    {
        $partenaireData = $this->request->getPost();

        $file = $this->request->getFile('IMGPARTENAIRE');
        $newFileName = $file->getRandomName();
        
        // var_dump($partenaireData);
        // var_dump($file);
        // die();

        $file->move(WRITEPATH . '../public/upload/partenaires', $newFileName);

        $data = [
            'NOMPARTENAIRE' => $partenaireData['NOMPARTENAIRE'],
            'AVISPARTENAIRE' => $partenaireData['AVISPARTENAIRE'],
            'IMGPARTENAIRE' => $newFileName
        ];

        // var_dump($data);
        // die();

        $this->partenaireModel->save($data);

        return redirect('modifPartenaireIndex');

    }

    public function modifIndex()
    {
        $partenaires = $this->partenaireModel->findAll();

        return view('PrimaStem/modifPartenaireIndex', [
            'listePartenaires' => $partenaires
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
