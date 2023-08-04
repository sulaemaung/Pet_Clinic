<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
     //direct create service page
     public function createServicePage(){
        return view('admin.createService');
    }
    //create service
    public function createService(Request $request){
         $data=$this->requestServiceData($request);

         $fileName=uniqid().$request->file('serviceImage')->getClientOriginalName();
         $request->file('serviceImage')->storeAs('public',$fileName);
         $data['image']=$fileName;

         Service::create($data);
         return redirect()->route('admin#service');
    }
     //delete service
      public function deleteService($id){
        Service::where('service_id',$id)->delete();
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
    public function requestServiceData($request){
        return[

             'service_name'=>$request->serviceName,
             'description'=>$request->description,
             'image'=>$request->serviceImage,
        ];
    }



}
