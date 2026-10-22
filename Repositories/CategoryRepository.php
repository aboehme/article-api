<?php

require_once __DIR__ . "/../Interfaces/CategoryRepositoryInterface.php";

use Interfaces\CategoryRepositoryInterface;
class CategoryRepository implements CategoryRepositoryInterface {

    public function getAll() {

       $categories =  [
           ['id' => 1, 'name' => 'News'],
           ['id' => 2, 'name' => 'Sports']
       ];
       return $categories;
    }
}
