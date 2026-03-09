<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $name = 'Thomas';

        return view('welcome', compact('name'));
    }

    public function show($id = 1)
    {
        return "Article portant l'identifiant $id";
    }
}
