<?php

namespace App\Controllers;

class PrimaStem extends BaseController
{
    public function index(): string
    {
        return view('PrimaStem/index');
    }

    public function contact(): string
    {
        return view('PrimaStem/contact');
    }

    public function partenaires(): string
    {
        return view('PrimaStem/partenaires');
    }

    public function blog(): string
    {
        return view('PrimaStem/blog');
    }
}