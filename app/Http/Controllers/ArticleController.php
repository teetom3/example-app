<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        Article::create(['title' => "L'IA soigne mieux",  'description' => "L'intelligence artificielle aide les médecins à diagnostiquer plus vite."]);
        Article::create(['title' => 'Villes vertes',       'description' => 'Les métropoles deviennent plus écologiques et durables.']);
        Article::create(['title' => 'Télétravail',         'description' => 'Plus de liberté, mais aussi plus de solitude.']);

        return 'Les trois articles ont été créés.';
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);
        $article->update([
            'title'       => 'Titre modifié',
            'description' => 'Description modifiée de manière statique.',
        ]);

        return "L'article $id a été modifié.";
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return "L'article $id a été supprimé.";
    }
}
