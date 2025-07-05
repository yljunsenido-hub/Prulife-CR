<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SCICController extends Controller
{
    public function scicUpload(){
        return view('admin.scic_upload');
    }

    public function scicView(){
        return view('admin.scic_view');
    }
}
