<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnalisationTextileController extends Controller
{
    public function index()
    {
        return view('pages.Personnalisation.Personnalisation');
    }
}
