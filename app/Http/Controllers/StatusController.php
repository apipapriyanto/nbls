<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    function index () {
        return view('/nbls.time_line');
    }

    function create (Request $request) {
        // dd($request);

        $status = $request->status;

        if($status == null) {
            return "Satatus Gak boleh kosong";
        }

        $status = new \App\Status;
        $status->status = $status;
        $status->save();

        return redirect('/nbls.time_line');
        
 
    }
}
