<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JanjiController extends Controller
{
    public function index()
    {
        return view('janji');
    }
}
