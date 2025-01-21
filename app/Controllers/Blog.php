<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use function PHPUnit\Framework\fileExists;

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

    public function modifIndex()
    {
        $articles = $this->blogModel->findAll();

        return view('PrimaStem/modifIndex', [
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

        $file = $this->request->getFile('MINIAARTICLE');
        $newFileName = $file->getRandomName();

        $file->move(WRITEPATH . '../public/upload', $newFileName);

        // $newImgName = $this->file->getRandomName();
        // $this->file->move(WRITEPATH . '..\upload');

        // var_dump($articleData);
        // var_dump($file);
        // echo $fileName;
        // die();

        $data = [
            'TITRE' => $articleData['TITRE'],
            'DESCRIPTIONARTICLE' => $articleData['DESCRIPTIONARTICLE'],
            'MINIAARTICLE' => $newFileName
        ];

        // var_dump($data);
        // die();

        $this->blogModel->save($data);

        return redirect('modifArticleIndex');
    }

    public function modif($articleId)
    {
        $articles = $this->blogModel->find($articleId);

        return view('PrimaStem/modifier_article', [
            'articleInfo' => $articles
        ]);
    }

    public function update()
    {
        $articleData = $this->request->getPost();

        $oldFileName = $this->blogModel->getOldFileNameArticle($articleData['IDARTICLE']);

        $file = $this->request->getFile('MINIAARTICLE');

        $fileName = $file->getName();

        // var_dump($articleData);
        // var_dump($oldFileName);
        // var_dump($file->getName());
        // die();

        if (!$fileName == '') {
            if (file_exists('../public/upload/' . $oldFileName['MINIAARTICLE'])) {
                unlink('../public/upload/' . $oldFileName['MINIAARTICLE']);
            }
            $newFileName = $file->getRandomName();
            $file->move(WRITEPATH . '../public/upload', $newFileName);

            $data = [
                'TITRE' => $articleData['TITRE'],
                'DESCRIPTIONARTICLE' => $articleData['DESCRIPTIONARTICLE'],
                'MINIAARTICLE' => $newFileName
            ];

            $this->blogModel->update($articleData['IDARTICLE'], $data);

            return redirect('modifArticleIndex');
        }

        $data = [
            'TITRE' => $articleData['TITRE'],
            'DESCRIPTIONARTICLE' => $articleData['DESCRIPTIONARTICLE'],
            'MINIAARTICLE' => $oldFileName
        ];

        // var_dump($data);
        // die();

        $this->blogModel->update($articleData['IDARTICLE'], $data);

        return redirect('modifArticleIndex');
    }

    public function delete()
    {
        $articleId = $this->request->getPost(); // Récupère l'ID de l'article
        // var_dump($articleId);
        // die();

        $oldFileName = $this->blogModel->getOldFileNameArticle($articleId['IDARTICLE']); // Récupère le nom de l'image
        // var_dump($oldFileName);
        // die();

        $this->blogModel->delete($this->request->getPost('IDARTICLE'));  // Suppression du message avec l'ID via POST

        if (file_exists('../public/upload/' . $oldFileName['MINIAARTICLE'])) { // Si le fichier existe alors la condition est vraie
            unlink('../public/upload/' . $oldFileName['MINIAARTICLE']); // Supprime l'image en local
        }

        return redirect('modifArticleIndex');
    }
}
