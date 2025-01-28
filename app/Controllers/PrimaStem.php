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
        $user = auth()->user();
        if (!$user->inGroup('admin')) {
            return view('PrimaStem/index');
        }
        return view('PrimaStem/adminIndex');
    }
}
