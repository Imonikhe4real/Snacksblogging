<?php

namespace App\Http\Controllers;

use App\Meatpie;
use DB;
use Illuminate\Http\Request;

class MeatpiesController extends Controller
{
    public function create(){

         return view('meatpie');
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
          Meatpie::create($form_data);

          return redirect('meatpie')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from meatpies');
         return view('meatpie',['rows' =>$rows]);
      }
}
