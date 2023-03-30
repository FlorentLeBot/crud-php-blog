<?php
namespace App\Controllers;

use App\Models\Article;

class ArticleController
{
    // Afficher la liste des articles
    public function index($page = 1)
    {
        $limit = 10;
        $offset = ($page - 1) * $limit;

        $articles = Article::getAll($limit, $offset);

        require __DIR__.'/../views/articles/index.php';
    }

    // Afficher un article
    public function show($id)
    {
        $article = Article::getById($id);

        if (!$article) {
            header("HTTP/1.0 404 Not Found");
            die('Article not found');
        }

        require __DIR__.'/../views/articles/show.php';
    }
}
