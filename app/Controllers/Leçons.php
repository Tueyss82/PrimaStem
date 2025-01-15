<?php

namespace App\Controllers;

class Leçons extends BaseController
{
    public function leçons(): string
    {
        return view('PlayStem/Lecons');
    }
    public function leçon(): string
    {
        return view('PlayStem/Lecon');
    }

    
    public function ajoutLeçon(): string
    {
        return view('PrimaStem/accueil');
    }
    public function createLeçon()
    {
        return view('PrimaStem/accueil');
    }
    public function modifLeçon(): string
    {
        return view('PrimaStem/accueil');
    }

    public function updateLeçon()
    {
        return view('PrimaStem/accueil');
    }
    
    public function deleteLeçon()
    {
        return view('PrimaStem/accueil');
    }
}