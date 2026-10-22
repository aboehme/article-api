<?php

namespace Interfaces;
interface ArticleRepositoryInterface
{
    public function getAll();

    public function getOne($id);
}



