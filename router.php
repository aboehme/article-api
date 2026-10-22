<?php

require_once 'Controllers/ArticleController.php';
require_once 'Repositories/ArticleRepository.php';
require_once('Repositories/CategoryRepository.php');
Require_once('Controllers/CategoryController.php');

$repo = new ArticleRepository();
$catRepo = new CategoryRepository();

$controller = new ArticleController($repo);
$catController = new CategoryController($catRepo);

if($incoming == '/articles' && $type == 'GET') {

	echo json_encode($controller->getArticles());
}

if ($type == 'GET' && preg_match('#^/articles/([0-9]+)$#', $incoming, $matches)) {
    echo json_encode($controller->getArticle($matches[1]));
}

if ($incoming == '/categories' && $type == 'GET') {

    echo json_encode($catController->getCategories());
}
?>