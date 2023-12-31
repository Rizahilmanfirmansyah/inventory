<?php

namespace App\Exports;

use App\Models\Customers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CustomerExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Customers::all();
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
