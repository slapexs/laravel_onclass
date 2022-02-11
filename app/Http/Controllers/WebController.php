<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    // public function addprofile()
    // {
    //     return view("addprofile");
    // }

    public function addprofile()
    {
        $name = "Tinngrit";
        $surname = "Singkaew";
        return view("addprofile", [
            'name' => $name,
            'surname' => $surname
        ]);
    }
}
