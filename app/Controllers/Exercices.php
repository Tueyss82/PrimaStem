<?php

namespace App\Controllers;

class Exercices extends BaseController
{
    
    
    public function exercices(): string
    {
        return view('PlayStem/Exercices');
    }
    public function exercice(): string
    {
        return view('PlayStem/Exercice');
    }
    
    public function ajoutExercices(): string
    {
        return view('PrimaStem/accueil');
    }
    public function createExercices()
    {
        return view('PrimaStem/accueil');
    }
    public function modifExercices(): string
    {
        return view('PrimaStem/accueil');
    }

    public function updateExercices()
    {
        return view('PrimaStem/accueil');
    }
    
    public function deleteExercices()
    {
        return view('PrimaStem/accueil');
    }
}