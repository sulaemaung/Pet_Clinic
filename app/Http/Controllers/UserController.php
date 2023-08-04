<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //direct user home page
    public function homePage(){
        return view('user.home');
    }
     //direct user service page
     public function servicePage(){
        $service=Service::get();
        return view('user.services',compact('service'));
    }
     //direct user service page
     public function aboutusPage(){
         return view('user.aboutus');
    }
      //direct user service page
      public function contactPage(){
        return view('user.contact');
   }
     //get contact info
      public function contactInfo(Request $request){
            Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required',
                'message'=>'required'

               ])->validate();

              Contact::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message,
                'updated_at'=>Carbon::now()

               ]);
         return redirect()->route('user#contact');

         }

}

