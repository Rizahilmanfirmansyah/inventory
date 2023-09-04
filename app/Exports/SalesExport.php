<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App\Models\Sales;

class SalesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Sales::all();
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
