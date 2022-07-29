<?php

namespace App\Http\Controllers;

use App\Samosa;
use DB;
use Illuminate\Http\Request;

class SamosasController extends Controller
{
    public function create(){

         return view('samosa');
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
          Samosa::create($form_data);

          return redirect('samosa')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from samosas');
         return view('samosa',['rows' =>$rows]);
      } 
}
