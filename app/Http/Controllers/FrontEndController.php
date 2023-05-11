<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function seeds()
    {
        return view('frontend.blogs.seeds');
    }
}
