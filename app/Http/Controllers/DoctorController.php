<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

      //direct doctor page
      public function doctorPage(){
        $doctorList=Doctor::get();
      // dd($doctorList->toArray());
        return view('admin.doctor',compact('doctorList'));
    }
     //create doctor page
     public function createDoctorPage(){
        return view('admin.createDoctor');
   }
   //createdoctor
   public function createDoctor(Request $request){
    $data=$this->requestDoctorData($request);

    $fileName=uniqid().$request->file('doctorImage')->getClientOriginalName();
    $request->file('doctorImage')->storeAs('public',$fileName);
    $data['doctor_image']=$fileName;

    Doctor::create($data);

    return redirect()->route('admin#doctorPage');
   }
    //delete doctor
     public function deleteDoctor($id){
       Doctor::where('id',$id)->delete();
       return back();
    }
    //edit service page
     public function editServicePage($id){
       $service=Service::where('service_id',$id)->first();
       return view('admin.editService',compact('service'));
    }
    //update service
    public function updateService(Request $request){
       $data=$this->requestServiceData($request);
       if($request->hasFile('serviceImage')){
           $oldImage=Service::where('service_id',$request->serviceId)->first();
           $oldImage=$oldImage->serviceImage;


           $fileName=uniqid().$request->file('serviceImage')->getClientOriginalName();
           $request->file('serviceImage')->storeAs('public',$fileName);
           $data['image']=$fileName;

         };

       Service::where('service_id',$request->serviceId)->update($data);
       return redirect()->route('admin#service');
   }
   //request service data
   public function requestDoctorData($request){
       return[

            'doctor_name'=>$request->doctorName,
            'doctor_exp'=>$request->doctorExp,
            'gender'=>$request->doctorGender,
       ];
   }

}
