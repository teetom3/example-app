<?php

namespace App\Http\Controllers;

class IndexController extends Controller
{
    public function index()
    {
        $name = 'Thomas';

        return view('welcome', compact('message'));
    }
}
