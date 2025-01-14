<?php

namespace App\Controllers;

class PlayStem extends BaseController
{
    public function index(): string
    {
        return view('PrimaStem/index');
    }

    public function exercices(): string
    {
        return view('PrimaStem/accueil');
    }
    public function exercice(): string
    {
        return view('PrimaStem/accueil');
    }
    public function leçons(): string
    {
        return view('PrimaStem/accueil');
    }
    public function leçon(): string
    {
        return view('PrimaStem/accueil');
    }
}