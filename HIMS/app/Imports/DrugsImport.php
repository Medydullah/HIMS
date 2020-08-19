<?php

namespace App\Imports;

use App\Drug;
use Maatwebsite\Excel\Concerns\ToModel;

class DrugsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Drug([
                'employment_id' =>$row[0],
                'employement_name' =>$row[1],
                'stock_no' =>$row[2],

                'stock_date' =>$row[3],

                'packet_no' =>$row[4],
                'tablets_no' =>$row[5],
                'box_no' =>$row[6],
                'expire_date' =>$row[7],
                'drug_id' =>$row[8],
                'drug_name' =>$row[9],

                'price' => $row[10],

            ]);

    }
}
