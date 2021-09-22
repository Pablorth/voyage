<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index()
    {
        return view('about.index');
    }
    public function trips()
    {
        return view('about.trips');
    }

    public function trip($id)
    {
        return view('about.trip');
    }
}
