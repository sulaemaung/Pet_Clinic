@extends('layouts.master')
@section('login/register')
{{-- Login css --}}
<link rel="stylesheet" href="{{asset('Login_Register/login.css')}}">

<div class="login-form " >
    <div class="row">
        <div class="col-4 offset-4">
           <div class="logo">
            <img src="{{asset('image/Dog.webp')}}" alt="" style="width:140px;height:90px;margin-bottom:20px" >
           </div>
            <form action="{{route('login')}}" method="post">

                @csrf
                <div class="form-group">
                    <label>Email Address</label>
                    <input class="form-control mb-3" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control mb-3" type="password" name="password" placeholder="Password">
                </div>

                <button class="form-control mb-3 text-dark" type="submit">Sign in</button>

            </form>
            <div class="register-link">
                <p>
                    Don't you have account?
                    <a href="{{route('auth#registerPage')}}">Sign Up Here</a>
                </p>
            </div>

        </div>
    </div>
</div>
@endsection
