<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function cargo()
    {
        return view('job');
    }
    public function subcargo()
    {
        return view('subjob');
    }
}
