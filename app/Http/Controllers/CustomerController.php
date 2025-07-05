<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function importExcelData(Request $request){
        $request->validate([
            'import_file' => [
                'required',
                'file'
            ]
        ]);

        Excel::import(new CustomerImport, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Successfully');
    }
}
