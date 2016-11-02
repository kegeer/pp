<?php

namespace App\Repos\Batches;

interface BatchRepoInterface
{
    public function all();
    public function create($data);
    public function getSamples($id);
    public function addSample($id);
    public function paginate($pages);

}