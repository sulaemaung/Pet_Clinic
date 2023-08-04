<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //direct admin home page
    public function homePage(){
         $appointment=Appointment::orderBy('created_at','desc')->get();
         //dd($appointment->toArray());
         return view('admin.home',compact('appointment'));
    }
    //direct service page
    public function servicePage(){
        $service=Service::get();
        // dd($service->toArray());
        return view('admin.service',compact('service'));
    }





}
