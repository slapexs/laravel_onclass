<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }
}
