<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $packages = \App\Models\Package::all();
        return view('layouts.index', compact('packages'));
    }
}
