<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductExportController extends Controller
{
    public function ProductExport()
    {
        return Excel::download(new ProductExport, 'Data_Product.xlsx');
    }
}
