<?php

namespace App\Http\Controllers;

use App\Chinchin;
use DB;
use Illuminate\Http\Request;

class ChinchinsController extends Controller
{
    public function create(){

         return view('chinchin');
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
          Chinchin::create($form_data);

          return redirect('chinchin')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from chinchins');
         return view('chinchin',['rows' =>$rows]);
      }
}
