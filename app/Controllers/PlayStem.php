<?php

namespace App\Controllers;

class PlayStem extends BaseController
{
    public function index(): string
    {
        return view('PrimaStem/accueil');
    }
}