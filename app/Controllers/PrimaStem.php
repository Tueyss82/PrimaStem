<?php

namespace App\Controllers;

class PrimaStem extends BaseController
{
    public function index(): string
    {
        return view('PrimaStem/index');
    }

    public function adminIndex(): string
    {
        return view('PrimaStem/adminIndex');
    }


}