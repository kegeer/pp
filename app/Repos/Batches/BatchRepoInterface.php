<?php

namespace App\Repos\Batches;

interface BatchRepoInterface
{
    public function all();
    public function create();
    public function getSamples($id);
    public function addSample($id);
    public function paginate($pages);

}