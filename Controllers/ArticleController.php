<?php

use Interfaces\ArticleRepositoryInterface;
class ArticleController {

public $repo;

    public function __construct(ArticleRepositoryinterface $repo)
    {
        $this->repo = $repo;
    }

    public function getArticles() {

		return $this->repo->getAll();
	}

    public function getArticle($id) {

        $article = $this->repo->getOne($id);
        if ($article === false) {
            http_response_code(404);
            return ['error' => 'Article not found'];
        }
        return $article;
    }

}

?>