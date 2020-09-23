<?php

namespace App\Http\Controllers;

use App\Mail\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Test extends Controller
{
    public function index (Request $request) {
        return view('test')->with('data', $request);
    }

    public function send (Request $request){
        Mail::to('jamielove891@hanmail.net')->send(new PDF($request));
        return view('test')->with('data','success');
    }
}
