<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//log
use App\Models\Systemlog;

class SystemlogController extends Controller
{
    //
    public function index()
    {
        # code...
        $systemlogs = Systemlog::all();
        return view('systemlog', compact('systemlogs'));
    }
}
