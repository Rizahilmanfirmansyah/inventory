<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CustomerImport;
use App\Exports\CustomerExport;
use App\Models\Customers;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class CustomerImportController extends Controller
{
    public function CustomerImport(Request $request)
    {
        $this->validate($request,[
            'file' => 'required'
        ]);

        $file = $request->file('file');

        // $file_name = $file->hashName();

        // $path = $file->storeAs('public/excel/', $file_name);

        $import = Excel::import(new CustomerImport(), $request->file('file'));

        // Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('customer.all')->with(['notif' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('customer.all')->with(['notif' => 'Data Gagal Diimport!']);
        }
    }

    public function CustomerExport()
    {
        return Excel::download(new CustomerExport(), 'Customer.xlsx');
    }
}
