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

        $allPartenaires = $this->partenaireModel->findAll();

        $partenaires = $this->partenaireModel->findAllExceptFirstResult($firstPartenaire[0]['IDPARTENAIRE']);

        return view('PrimaStem/partenaires', [
            'listePartenaires' => $partenaires,
            'firstPartenaire' => $firstPartenaire,
            'allPartenaires' => $allPartenaires
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

    public function modif($partenaireId)
    {
        $partenaire = $this->partenaireModel->find($partenaireId);

        return view('PrimaStem/modifPartenaire', [
            'partenaireData' => $partenaire
        ]);
    }

    public function update()
    {
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
            if (file_exists('../public/upload/partenaires/' . $oldFileName['IMGPARTENAIRE'])) {
                unlink('../public/upload/partenaires/' . $oldFileName['IMGPARTENAIRE']);
            }
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . '../public/upload/partenaires/', $newFileName);

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
        $partenaires = $this->partenaireModel->findAll();

        return view('PrimaStem/supprPartenaireIndex', [
            'listePartenaires' => $partenaires
        ]);
    }

    public function delete()
    {
        $partenaireId = $this->request->getPost(); // Récupère l'ID de l'article
        // var_dump($partenaireId);
        // die();

        $oldFileName = $this->partenaireModel->getOldFileNamePartenaire($partenaireId['IDPARTENAIRE']); // Récupère le nom de l'image
        // var_dump($oldFileName);
        // die();

        $this->partenaireModel->delete($this->request->getPost('IDPARTENAIRE'));  // Suppression du message avec l'ID via POST

        if (file_exists('../public/upload/partenaires/' . $oldFileName['IMGPARTENAIRE'])) { // Si le fichier existe alors la condition est vraie
            unlink('../public/upload/partenaires/' . $oldFileName['IMGPARTENAIRE']); // Supprime l'image en local
        }

        return redirect('supprPartenaireIndex');
    }
}
