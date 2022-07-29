<?php

namespace App\Http\Controllers;

use App\Cake;
use DB;
use Illuminate\Http\Request;

class CakesController extends Controller
{
    public function create(){

         return view('cake');
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
          Cake::create($form_data);

          return redirect('cake')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from cakes');
         return view('cake',['rows' =>$rows]);
      }
}
