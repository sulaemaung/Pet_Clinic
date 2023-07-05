<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //direct admin home page
    public function homePage(){
        return view('admin.home');
    }
}
