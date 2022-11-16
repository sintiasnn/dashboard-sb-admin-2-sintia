<?php

namespace App\Imports;

use App\Models\Data;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportData implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data([
            'instansi' => $row[0],
            'ikp_a1' => $row[1],
            'ikp_a2' => $row[2],
            'ikp_a3' => $row[3],
            'ikp_a4' => $row[4],
            'ikp_b1' => $row[5],
            'ikp_b2' => $row[6],
            'ikp_b3' => $row[7],
        ]);
    }
}
