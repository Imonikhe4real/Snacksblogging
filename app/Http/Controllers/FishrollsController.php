<?php

namespace App\Http\Controllers;

use App\Fishroll;
use DB;
use Illuminate\Http\Request;

class FishrollsController extends Controller
{
    public function create(){

         return view('fishroll');
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
          Fishroll::create($form_data);

          return redirect('fishroll')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from fishrolls');
         return view('fishroll',['rows' =>$rows]);
      }
}
