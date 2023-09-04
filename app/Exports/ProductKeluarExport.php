<?php

namespace App\Exports;

use App\Models\Product_keluar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
 

class ProductKeluarExport implements FromCollection, WithHeadings , WithMapping
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product_keluar::all();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->product->nama,
            $row->customer->nama,
            $row->qty,
            $row->created_at
        ];
    }

    public function headings(): array
    {
        return [
            'id',
            'nama_produk',
            'nama_customer',
            'jumlah',
            'created_at'
        ];
    }
}
