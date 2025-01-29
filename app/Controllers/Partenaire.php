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
        $firstPartenaire = $this->partenaireModel->getOnlyFirstPartenaire();

        // var_dump($firstPartenaire);
        // die();

        $allPartenaires = $this->partenaireModel->findAll();

        if(!empty($firstPartenaire)) {
            $partenaires = $this->partenaireModel->findAllExceptFirstResult($firstPartenaire[0]['IDPARTENAIRE']);

            return view('PrimaStem/partenaires', [
                'listePartenaires' => $partenaires,
                'firstPartenaire' => $firstPartenaire,
                'allPartenaires' => $allPartenaires
            ]);
        }

        return view('PrimaStem/partenaires', [
            'firstPartenaire' => $firstPartenaire,
            'listePartenaires' => $allPartenaires
        ]);
    }

    public function ajout()
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        return view('PrimaStem/ajoutPartenaire');
    }

    public function create()
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaireData = $this->request->getPost();

        $file = $this->request->getFile('IMGPARTENAIRE');
        $newFileName = $file->getRandomName();

        // var_dump($partenaireData);
        // var_dump($file);
        // die();

        $file->move(WRITEPATH . 'upload/', $newFileName);

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
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaires = $this->partenaireModel->findAll();

        return view('PrimaStem/modifPartenaireIndex', [
            'listePartenaires' => $partenaires
        ]);
    }

    public function modif($partenaireId)
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaire = $this->partenaireModel->find($partenaireId);

        return view('PrimaStem/modifPartenaire', [
            'partenaireData' => $partenaire
        ]);
    }

    public function update()
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaireData = $this->request->getPost();

        $oldFileName = $this->partenaireModel->getOldFileNamePartenaire($partenaireData['IDARTICLE']);

        $file = $this->request->getFile('IMGPARTENAIRE');

        $fileName = $file->getName();

        // var_dump($partenaireData);
        // var_dump($oldFileName);
        // var_dump($file);
        // var_dump($file->getName());
        // die();

        if (!$fileName == '') {
            if (file_exists(WRITEPATH . 'upload/' . $oldFileName['IMGPARTENAIRE'])) {
                unlink(WRITEPATH . 'upload/' . $oldFileName['IMGPARTENAIRE']);
            }   
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . 'upload/', $newFileName);

            $data = [
                'NOMPARTENAIRE' => $partenaireData['NOMPARTENAIRE'],
                'AVISPARTENAIRE' => $partenaireData['AVISPARTENAIRE'],
                'IMGPARTENAIRE' => $newFileName
            ];

            $this->partenaireModel->update($partenaireData['IDARTICLE'], $data);

            return redirect('modifPartenaireIndex');
        }

        $data = [
            'NOMPARTENAIRE' => $partenaireData['NOMPARTENAIRE'],
            'AVISPARTENAIRE' => $partenaireData['AVISPARTENAIRE'],
            'IMGPARTENAIRE' => $oldFileName
        ];

        // var_dump($data);
        // die();

        $this->partenaireModel->update($partenaireData['IDARTICLE'], $data);

        return redirect('modifPartenaireIndex');
    }

    public function deleteIndex()
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaires = $this->partenaireModel->findAll();

        return view('PrimaStem/supprPartenaireIndex', [
            'listePartenaires' => $partenaires
        ]);
    }

    public function delete()
    {
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        $partenaireId = $this->request->getPost(); // Récupère l'ID de l'article
        // var_dump($partenaireId);
        // die();

        $oldFileName = $this->partenaireModel->getOldFileNamePartenaire($partenaireId['IDPARTENAIRE']); // Récupère le nom de l'image
        // var_dump($oldFileName);
        // die();

        $this->partenaireModel->delete($this->request->getPost('IDPARTENAIRE'));  // Suppression du message avec l'ID via POST

        if (file_exists(WRITEPATH . 'upload/' . $oldFileName['IMGPARTENAIRE'])) { // Si le fichier existe alors la condition est vraie
            unlink(WRITEPATH . 'upload/' . $oldFileName['IMGPARTENAIRE']); // Supprime l'image en local
        }

        return redirect('supprPartenaireIndex');
    }
}
