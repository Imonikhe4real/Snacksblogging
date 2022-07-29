<?php

namespace App\Http\Controllers;

use App\Pizza;
use DB;
use Illuminate\Http\Request;

class PizzasController extends Controller
{
    public function create(){

         return view('pizza');
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
          Pizza::create($form_data);

          return redirect('pizza')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from pizzas');
         return view('pizza',['rows' =>$rows]);
      }
}
