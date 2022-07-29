<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
 public function create()
   {
      return view('contact');
   }
   public function store(Request $request){
       $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required',
                'message' => 'required',
          ]);
          
          $form_data = array(
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'email' => $request->email,
                'message' => $request->message,
          );
          
          Contact::create($form_data);

          return redirect('contact')->with('success','Thank you for your message,you will be contacted by one of our staff in 3 working days time from today'); 
         }
}
