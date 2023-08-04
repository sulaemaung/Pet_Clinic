<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
     //direcrt appointment page
    public function appointmentPage(){
        $service=Service::get();
        return view('user.appointment',compact('service'));
    }
     //create appointment data
     public function createAppointment(Request $request){
         $data=$this->requestAppointData($request);
          Appointment::create($data);
         return redirect()->route('user#home');
    }
     //request appointment data
     public function requestAppointData($request){
        return[
             'user_id'=>Auth::user()->id,
             'user_name'=>Auth::user()->name,
             'user_phone'=>Auth::user()->phone,
             'user_email'=>Auth::user()->email,
             'pet_name'=>$request->petName,
             'pet_type'=>$request->petType,
             'doctor_name'=>$request->doctorName,
             'service_id'=>$request->serviceId,
             'first_date'=>$request->oneDate,
             'part_of_the_Day1'=>$request->partOfTheDay1,
             'second_date'=>$request->twoDate,
             'part_of_the_Day2'=>$request->partOfTheDay2,
        ];
    }
}
