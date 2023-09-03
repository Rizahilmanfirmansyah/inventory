<?php

namespace App\Imports;

use App\Models\Suppliers;
use Maatwebsite\Excel\Concerns\ToModel;

class SupplierImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Suppliers([
            'nama' => $row[0],
            'alamat' => $row[1],
            'email' => $row[2],
            'telepon' => $row[3],
        ]);
    }
}
