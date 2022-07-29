<?php

namespace App\Http\Controllers;

use App\Donought;
use DB;
use Illuminate\Http\Request;

class DonoughtsController extends Controller
{
    public function create(){

         return view('donought');
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
          Donought::create($form_data);

          return redirect('donought')->with('success','Comment Posted Successfully'); 
         }
      public function index(){
         $rows = DB::select('select * from donoughts');
         return view('donought',['rows' =>$rows]);
      }
}
