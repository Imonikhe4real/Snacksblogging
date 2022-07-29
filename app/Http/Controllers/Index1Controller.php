<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Index1Controller extends Controller
{
    public function page2()
    {
          return view('page2');
    }
    public function page2_2()
    {
         return view('page2_2');
    }
}
