<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SupplierImport;
use App\Exports\SupplierExport;
use Maatwebsite\Excel\Facades\Excel;


class SupplierImportController extends Controller
{
    public function Import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required'
        ]);

        $file = $this->file('file');

        return Excel::import(new SupplierImport(), $request->file('file'));

        if ($import) {
            # code...
            session()->flash('notif', 'import berhasil di tambahkan');
        } else {
            session()->flash('notif', 'import gagal di tambahkan');

        }
    }

    public function export()
    {
        return Excel::download(new SupplierExport(), 'data_suplier.xlsx');
        session()->flash('notif', 'Data Supplier Berhasil Di Download');
    }
}
