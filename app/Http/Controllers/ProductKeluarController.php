<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductKeluarExport;

class ProductKeluarController extends Controller
{

    public function ProductKeluarExport()
    {
        return Excel::download(new ProductKeluarExport(), 'data_product_keluar.xlsx');
    }
   
}
