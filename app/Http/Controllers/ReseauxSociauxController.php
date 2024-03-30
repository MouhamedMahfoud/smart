<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReseauxSociauxController extends Controller
{
    public function index()
    {
        return view('pages.RéseauxSociaux.reseauxSociaux');
    }
}
