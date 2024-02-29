<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaletiqueController extends Controller
{
    public function index()
    {
        return view('pages.signaletique.signaletique');
    }
    public function studioCreation(){
        return view('pages.imprimerie.carteVisite');
    }
}
