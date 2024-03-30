<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodiesController extends Controller
{
    public function index()
    {
        return view('pages.Goodies.goodies');
    }
}
