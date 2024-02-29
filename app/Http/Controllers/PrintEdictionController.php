<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrintEdictionController extends Controller
{
    public function index()
    {
        return view('pages.imprimerie.imprimerie'); 
    }
    public function studioCreation(){
        return view('pages.imprimerie.carteVisite');
    }
}
