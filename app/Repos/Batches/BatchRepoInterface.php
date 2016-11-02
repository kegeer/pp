<?php

namespace App\Repos\Batches;

interface BatchRepoInterface
{
    public function all();
    public function create($data);
    public function paginate($pages);

}