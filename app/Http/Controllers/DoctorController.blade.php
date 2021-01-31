<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MytripController extends Controller
{
    function index()
    {
        return view('Doctor');
    }
}
