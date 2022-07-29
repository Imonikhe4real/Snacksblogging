<?php

namespace App\Http\Controllers;
use App\Burger;
use DB;
use Illuminate\Http\Request;

class BurgersController extends Controller
{
    public function create(){

         return view('burger');
    }
    public function store(Request $request){
       $request->validate([
                'fullnames' => 'required',
                'email' => 'required',
                'snacks' => 'required',
                'phone' => 'required',
                'comment' => 'required',
          ]);
          
          $form_data = array(
                'fullnames' => $request->fullnames,
                'email' => $request->email,
                'snacks' => $request->snacks,
                'phone' => $request->phone,
                'comment'=> $request->comment
          );
          Burger::create($form_data);

          return redirect('burger')->with('success','Comment Posted Successfully'); 
         }

      public function index(){

         $rows = DB::select('select * from burgers');
         return view('burger',['rows' =>$rows]);
      }
}
