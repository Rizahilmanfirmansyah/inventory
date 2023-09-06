<?php

namespace App\Imports;

use App\Models\Retur;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\ToCollection;


class ReturImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[4] === null) {
            return null;
        }

        return new Retur([
            'product' => $row[0],
            'customer' => $row[1],
            'ekspedisi' => $row[2],
            'qty' => $row[3],
            'tanggal' => $row[4]
        ]);
    }
}
