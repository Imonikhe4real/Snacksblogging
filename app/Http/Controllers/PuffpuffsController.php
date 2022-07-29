<?php

namespace App\Http\Controllers;

use App\Puffpuff;
use DB;
use Illuminate\Http\Request;

class PuffpuffsController extends Controller
{
   public function create(){

         return view('puffpuff');
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
          Puffpuff::create($form_data);

          return redirect('puffpuff')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from puffpuffs');
         return view('puffpuff',['rows' =>$rows]);
      } 
}
