<?php

use Interfaces\CategoryRepositoryInterface;

Class CategoryController {

    public $repo;

    public function __construct(CategoryRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    Public function getCategories(){

        $categories = $this->repo->getAll();

        return $categories;

    }

}
