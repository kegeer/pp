<?php

namespace App\Http\Controllers;

use App\Repos\Batches\BatchRepoInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Batch;

class BatchController extends Controller
{

    protected $repo;

    public function __construct(BatchRepoInterface $repo)
    {
        $this->repo = $repo;
    }

    public function index ()
    {
        $batches = $this->repo->paginate(8);
    	return view('batches.index', compact('batches'));
    }

    public function create(Batch $batch)
    {
//        $batch = [];
        return view('batches.create', compact('batch'));
    }

    public function store()
    {

    }

    public function update()
    {

    }

}
