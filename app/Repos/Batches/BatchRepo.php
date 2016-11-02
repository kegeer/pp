<?php

namespace App\Repos\Batches;

use App\Models\Batch;
use App\Models\Sample;
use Carbon\Carbon;

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

    public function create($data)
    {
        $batch = new Batch();
        $batch->fill(array_except($data, ['arrive_time', 'send_time']));
        $batch['arrive_time'] = Carbon::parse($data['arrive_time']);
        $batch['send_time'] = Carbon::parse($data['send_time']);
        return $batch->save();
    }

}