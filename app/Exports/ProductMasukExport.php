<?php

namespace App\Exports;

use App\Models\Product_masuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductMasukExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product_masuk::all();
    }

    public function map($row): array
    {
       return [
            $row->id,
            $row->product->nama,
            $row->supplier->nama,
            $row->qty,
            $row->created_at
       ];
    }

    public function headings(): array
    {
        return [
            'id',
            'nama_produk',
            'nama_supplier',
            'jumlah', 
            'created_at'
        ];
    }
}
