<?php

namespace App\Http\Controllers;

use App\Hotdog;
use DB;
use Illuminate\Http\Request;

class HotdogsController extends Controller
{
    public function create(){

         return view('hotdog');
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
          Hotdog::create($form_data);

          return redirect('hotdog')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from hotdogs');
         return view('hotdog',['rows' =>$rows]);
      }
}
