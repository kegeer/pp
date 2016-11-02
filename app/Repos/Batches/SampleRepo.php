<?php

namespace App\Repos\Batches;

use App\Models\Sample;

class SampleRepo implements SampleRepoInterface
{
    public function all($batch)
    {
    	return Sample::where('batch_id', $batch)->paginate(10);
    }
}