<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //direct contact page
    public function contactPage(){
        $contactList=Contact::orderBy('created_at','desc')->paginate(7);
        return view('admin.contact',compact('contactList'));
    }

}
