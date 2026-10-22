<?php

require_once __DIR__ . "/../Interfaces/ArticleRepositoryInterface.php";
require_once __DIR__ . '/../Database/Connection.php';

use Interfaces\ArticleRepositoryInterface;
class ArticleRepository implements ArticleRepositoryInterface {

    public function getAll() {

        $connection = new Connection();
        $pdo = $connection->connect();

        $stmt = $pdo->query('select * from articles');
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $articles;
    }

    public function getOne($id) {

        $connection = new Connection();
        $pdo = $connection->connect();

        $stmt = $pdo->prepare("select * from articles where id =?");
        $stmt->execute([$id]);
        $article = $stmt->fetch(PDO::FETCH_ASSOC);
        return $article;
    }

}
