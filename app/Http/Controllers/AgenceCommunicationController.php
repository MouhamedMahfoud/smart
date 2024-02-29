<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgenceCommunicationController extends Controller
{
    public function index()
    {
        return view('pages.agenceCommunication.notreStrategie'); 
    }
    public function studioCreation(){
        return view('pages.agenceCommunication.studioCreation');
    }

    public function creationLogo(){
        return view('pages.agenceCommunication.creationlogo');
    }
    public function carteGraphie(){
        return view('pages.agenceCommunication.carteGraphie');
    }
}
