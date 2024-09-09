<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    public function blog(Request $request)
    {
        return view('blog');
    }
}
