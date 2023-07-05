@extends('layouts.master')

@section('login/register')
{{-- Register css link --}}
<link rel="stylesheet" href="{{asset('Login_Register/register.css')}}">
<div class="login-form">
    <div class="row">
        <div class="col-4 offset-4">
            <div class="logo">
                <img src="{{asset('image/Dog.webp')}}" alt="" style="width:140px;height:90px;margin-bottom:20px" >
               </div>
            <form action="{{route('register')}}" method="post">
                @csrf
                @error('terms')
                <small class="text-danger">{{$message}}</small>
                 @enderror
                <div class="form-group">
                    <label>Username</label>
                    <input class="form-control mb-3" type="text" name="name" placeholder="Username">
                </div>
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control mb-3" type="email" name="email" placeholder="Email">
                </div>
                @error('email')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label>Phone</label>
                    <input class="form-control mb-3" type="string" name="phone" placeholder="Phone">
                </div>
                @error('phone')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label>Gender</label>
                   <select name="gender" id="" class="form-control mb-3">
                    <option value="">Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                   </select>
                </div>
                @error('gender')
                <small class="text-danger">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label>Address</label>
                    <input class="form-control mb-3" type="string" name="address" placeholder="Address">
                </div>
                @error('address')
                <small class="text-danger">{{$message}}</small>
                 @enderror

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
                @error('password')
                <small class="text-danger">{{$message}}</small>
                 @enderror

                <div class="form-group">
                    <label>Confirm assword</label>
                    <input class="form-control mb-3" type="password" name="password_confirmation" placeholder="Confirm Password">
                </div>
                @error('password_confirmation')
                <small class="text-danger">{{$message}}</small>
                @enderror

               <div>
                <button class="form-control mb-3 text-dark .login-form button" type="submit">Register</button>
               </div>
            </form>

               <div class="register-link">
                <p>
                    Already have account?
                    <a href="{{route('auth#loginPage')}}">Sign In</a>
                </p>

        </div>
    </div>


</div>

@endsection
