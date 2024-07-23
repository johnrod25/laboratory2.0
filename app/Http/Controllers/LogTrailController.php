<?php

namespace App\Http\Controllers;
use App\Models\logtrails;
use App\Models\book;
use Illuminate\Http\Request;

class LogTrailController extends Controller
{
    //
    public function index()
    {
        return view('logs.index', [
            'logs' => logtrails::get()
        ]);
    }
}
