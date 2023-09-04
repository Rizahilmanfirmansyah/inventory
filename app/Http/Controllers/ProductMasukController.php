<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductMasukExport;


class ProductMasukController extends Controller
{
    public function ProductMasukExport()
    {
        return Excel::download(new ProductMasukExport, 'data_product_masuk.xlsx');
    }
}
