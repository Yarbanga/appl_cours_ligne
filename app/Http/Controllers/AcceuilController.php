<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcceuilController extends Controller
{
    
    public function index() {

        return view('acceuil');
    }

    public function inscription() {
        
        return view('inscription');
    }

}
