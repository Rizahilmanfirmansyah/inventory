<?php

namespace App\Exports;

use App\Models\Suppliers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
// use Maatwebsite\Excel\Concerns\WithMapping;

class SupplierExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Suppliers::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'nama',
            'alamat',
            'email',
            'telepon',
            'created_at',
            'updated_at,'
        ];
    }
}
