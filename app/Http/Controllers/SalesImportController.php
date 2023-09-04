<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SalesImport;
use App\Export\SalesExport;
use Maatwebsite\Excel\Facades\Excel;

class SalesImportController extends Controller
{
    public function SalesImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        $import = Excel::import(new SalesImport(), $request->file('file'));

        if ($import) {
            return redirect()->route('sales.all')->with('notif', 'Data Sales Berhasil Di import');
        } else {
            return redirect()->route('sales.all')->with('notif', 'Data Sales Gagal Di import');
        }
    }

    public function SalesExport()
    {
        return Excel::download(new SalesExport, 'data_sales_inventory');
    }
}
