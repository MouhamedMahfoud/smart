<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view('home');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());
        return redirect()->back()->with(['success' => 'Merci de nous contacter.']);
    }
}
