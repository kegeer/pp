<?php

namespace App\Repos\Reports;
use App\Models\Report;
use Illuminate\Support\Facades\DB;


class ReportRepo implements ReportRepoInterface
{
    public function all()
    {
        return Report::all();
    }

    public function find($sample_id)
    {
        return Report::where('sample_id', $sample_id)->first();
    }

    public function create($data)
    {
        Report::create($data);
    }

    public function attributes()
    {
        $report = new Report();
        return $report->getFillable();
    }


    public function save($data)
    {
        return Report::create($data);
    }

    public function insertDb($table, $data)
    {
        return Db::table($table)->insert($data);
    }

}