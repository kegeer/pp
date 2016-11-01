<?php

namespace App\Http\Controllers\Api\Batch;

use App\Repos\Batches\BatchRepoInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BatchController extends Controller
{
    protected $repo;

    public function __construct(BatchRepoInterface $repo)
    {
        $this->repo = $repo;
    }
}
