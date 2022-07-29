<?php

namespace App\Http\Controllers;

use App\Bun;
use DB;
use Illuminate\Http\Request;

class BunsController extends Controller
{
    public function create(){

         return view('buns');
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
          Bun::create($form_data);

          return redirect('buns')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from buns');
         return view('buns',['rows' =>$rows]);
      }
}
