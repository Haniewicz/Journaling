<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainViewController extends Controller
{
    public function index()
    {
        return view("Main.index");
    }

    public function contact()
    {
        return view("Main.contact");
    }
}
