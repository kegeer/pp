<?php

namespace App\Http\Controllers\Api\Report;

use App\Repos\Reports\ReportRepoInterface;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    protected $report;

    public function __construct(ReportRepoInterface $report)
    {
        $this->report = $report;
    }

    public function index()
    {
        return $this->report->all();
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $keys = $this->report->attributes();
        $fill = [];
        foreach ($keys as $key => $attr) {
            if (is_array($data[$attr])) {
                $fill[$attr] = json_encode($data[$attr]);
            } else {

                $fill[$attr] = $data[$attr];
            }
        }
        $this->report->save($fill);

        return response()->json([
            "message" => "success"
        ]);
    }

    public function find($sample_id)
    {
        return $this->report->find($sample_id);
    }

    public function storeMeta(Request $request)
    {
       return $this->storeData($request, 'report_metabolism');
    }

    public function storeDisease(Request $request)
    {
        return $this->storeData($request, 'report_disease');
    }

    public function storePatho(Request $request)
    {
        return $this->storeData($request, 'report_pathogen');
    }

    public function storeGenus(Request $request)
    {
        return $this->storeData($request, 'report_genus');
    }

    public function storeOther(Request $request)
    {
        return $this->storeData($request, 'report_other');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeData(Request $request, $table)
    {
        $fills = $request->all();
        for ($i = 1; $i <= count($fills); ++$i) {
            $fill = [];
            foreach ($fills[$i] as $key => $value) {
                $fill[$key] = $value;
            }
            $this->report->insertDb($table, $fill);
        }
//        dd($request->all());
        return response()->json([
            'success' => 'data saved'
        ]);
    }

}
