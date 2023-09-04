<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SupplierImport;
use App\Exports\SupplierExport;
use Maatwebsite\Excel\Facades\Excel;


class SupplierImportController extends Controller
{
    public function SupplierImport(Request $request)
    {
        $this->validate($request, [
            'file' => 'required'
        ]);

        $file = $request->file('file');

        $import = Excel::import(new SupplierImport(), $request->file('file'));

        if ($import) {
            # code...
            return redirect()->route('suppliers.all')->with('notif', 'Import Data Berhasil');
        } else {
            session()->flash('notif', 'import gagal di tambahkan');

        }
    }

    public function SupplierExport()
    {
        return Excel::download(new SupplierExport(), 'data_suplier.xlsx');
        session()->flash('notif', 'Data Supplier Berhasil Di Download');
    }
}
