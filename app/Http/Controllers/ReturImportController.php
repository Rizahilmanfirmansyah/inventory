<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ReturExport;
use App\Imports\ReturImport;
use Maatwebsite\Excel\Facades\Excel;

class ReturImportController extends Controller
{
    public function ReturImport(Request $request)
    {
        $this->validate($request, [
            'file' => 'required'
        ]);

        $file = $request->file('file');

        $import = Excel::import(new ReturImport, $request->file('file'));

        if ($import) {
            return redirect()->route('retur.all')->with('notif', 'import data retur berhasil');
        }else{
            return redirect()->route('retur.all')->with('notif', 'import data retur Gagal');

        }
    }

    public function ReturExport()
    {
        return Excel::download(new ReturExport, 'data_retur.xlsx');
    }
}
