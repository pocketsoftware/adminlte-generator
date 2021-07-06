<?php

namespace App\Imports;

use App\Models\TrackerDetail;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class TrackerImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return TrackerDetail |null
     */
    public function model(array $row)
    {
        return new TrackerDetail([
           'qc'     => $row[0],
           'fullname'    => $row[1],
           'deladdr' =>  $row[2],
           'csz' => $row[3],
           'intelligentmailbarcode' => $row[4],
           'cardnumberwcheck' => $row[5],
           'type' => $row[6],
           'serialnumber' => $row[7],
           'imbalpha' => $row[8],
        ]);
    }
}