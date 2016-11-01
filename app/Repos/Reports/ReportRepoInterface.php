<?php

namespace App\Repos\Reports;

interface ReportRepoInterface {
    public function all();

    public function find($id);

    public function create($data);

    public function attributes();


    public function save($data);

    public function insertDb($table, $data);
}