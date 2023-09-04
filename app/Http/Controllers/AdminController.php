<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //direct admin home page
    public function homePage(){
         $appointment=Appointment::orderBy('created_at','desc')->paginate(10);
         $service=Service::get();
         $doctorList=Doctor::get();
         $clientList=User::get();
         return view('admin.home',compact('appointment','service','doctorList','clientList'));
    }
    //direct service page
    public function servicePage(){
        $service=Service::get();
        // dd($service->toArray());
        return view('admin.service',compact('service'));
    }
    //direct client page
    public function clientPage(){
        $clientList=User::get();
       // dd($clientList->toArray());
        return view('admin.client',compact('clientList'));
    }
    //change password
    public function changePassword(){
        return view('admin.account.changePassword');
    }
    //update account Page
    public function updateAccountPage(){
        return view('admin.account.updateAccount');
    }
    //update account
    public function updateAccount(Request $request){
       // dd($request->toArray());
         $this->accountValidation($request);
         $userData=$this->getUserData($request);

         if($request->hasFile('image')){
            $dbImage=User::where('id',$request->userId)->first();
            $oldImage=$dbImage->image;
            if($oldImage!=null){
                Storage::delete('public/'.$oldImage);
            }
           $filename=uniqid().$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public',$filename);
            $userData['image']=$filename;


         }

         User::where('id',$request->userId)->update($userData);
         return redirect()->route('admin#home');
    }
    //request user data
    private function getUserData($request){
        return [
           'id'=>$request->userId,
           'name'=>$request->name,
           'email'=>$request->email,
           'phone'=>$request->phone,
           'gender'=>$request->gender,
           'address'=>$request->address
        ];
    }
    //user account validation
    public function accountValidation($request){
        Validator::make($request->all(),[
           'name'=>'required',
           'email'=>'required',
           'phone'=>'required',
           'gender'=>'required',
           'address'=>'required'
         ])->validate();
    }
    //update password
    public function updatePassword(Request $request){
         $this->passwordValidation($request);

         $user=User::select('password')->where('id',Auth::user()->id)->first();
         $dbHash=$user->password;

             if(Hash::check($request->oldPassword,$dbHash)){
               $data=[
                 'password'=>Hash::make($request->newPassword)
               ];
               User::where('id',Auth::user()->id)->update($data);
               Auth::logout();
               return redirect()->route('auth#loginPage');
        }
         return back()->with(['notmatch'=>'The old password is not match.Try again!']);
    }
    //password validation
    private function passwordValidation($request){
         Validator::make($request->all(),[
            'oldPassword'=>'required|min:6',
            'newPassword'=>'required|min:6',
            'comfirmPassword'=>'required|min:6|same:newPassword',
         ])->validate();
    }




}
