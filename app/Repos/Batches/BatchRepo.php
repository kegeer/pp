<?php

namespace App\Repos\Batches;

use App\Models\Batch;

class BatchRepo implements BatchRepoInterface
{
    public function all()
    {
        return Batch::all();
    }

    public function paginate($pages)
    {
        return Batch::paginate($pages);
    }

    public function create()
    {

    }

    public function getSamples($id)
    {

    }

    public function addSample($id)
    {

    }
}