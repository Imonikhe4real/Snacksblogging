<?php

namespace App\Http\Controllers;

use App\Springroll;
use DB;
use Illuminate\Http\Request;

class SpringrollsController extends Controller
{
    public function create(){

         return view('springroll');
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
          Springroll::create($form_data);

          return redirect('springroll')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from springrolls');
         return view('springroll',['rows' =>$rows]);
      }  
}
