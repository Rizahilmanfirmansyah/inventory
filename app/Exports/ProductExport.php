<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class ProductExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }

    public function map($row): array
    {
        return [
            $row->id,
            $row->nama,
            $row->qty,
            $row->harga,
            $row->category->name,
            $row->created_at
        ];

    }

    public function headings(): array
    {
        return [
            'Id Produk',
            'Nama',
            'Quantity',
            'Harga',
            'Katagori Produk',
            'Created_at'
        ];
    }
}
