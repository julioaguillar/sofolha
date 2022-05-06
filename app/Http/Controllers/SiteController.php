<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function download()
    {
        return view('download');
    }

    public function sobre()
    {
        return view('sobre');
    }
    
}
