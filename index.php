<?php
require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/app/config/config.php';

use App\Controllers\ArticleController;

$controller = new ArticleController();

// Récupérer la page courante
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Afficher la liste des articles
$controller->index($page);
