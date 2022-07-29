<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SnacksController extends Controller
{
    public function buns()
    {
       return view('buns');
    }
    public function burger()
    {
       return view('burger');
    }
    public function cake()
    {
       return view('cake');
    }
    public function chinchin()
    {
       return view('chinchin');
    }
    public function springroll()
    {
       return view('springroll');
    }
    public function donut()
    {
       return view('donought');
    }
    public function fishroll()
    {
       return view('fishroll');
    }
    public function hotdog()
    {
       return view('hotdog');
    }
    public function meatpie()
    {
       return view('meatpie');
    }
    public function pizza()
    {
       return view('pizza');
    }
    public function puff()
    {
       return view('puffpuff');
    }
    public function samosa()
    {
       return view('samosa');
    }
    
}
