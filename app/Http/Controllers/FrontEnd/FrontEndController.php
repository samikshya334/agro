<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
        return view('frontend.welcome');
    }
}
