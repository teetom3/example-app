<?php

namespace App\Http\Controllers;

use App\Models\Article;

class IndexController extends Controller
{
    public function index()
    {
        $name     = 'Thomas';
        $articles = Article::all();

        return view('welcome', compact('name', 'articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', compact('article'));
    }
}
