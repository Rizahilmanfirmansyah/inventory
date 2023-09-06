<?php

namespace App\Exports;

use App\Models\Retur;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ReturExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Retur::all();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->product,
            $row->customer,
            $row->ekspedisi,
            $row->qty,
            $row->tanggal
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'Nama Produk',
            'Customer',
            'Ekspedisi',
            'Jumlah',
            'Tanggal'
        ];
    }
}
