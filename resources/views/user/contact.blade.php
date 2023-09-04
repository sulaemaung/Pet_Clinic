@extends('user.layouts.master')
@section('content')
<div class="header">
    <h2>Contact us</h2>
</div>
    <div class="mainContact">
        <div class="row">
            <div class="col-8 offset-2">
               <form action="{{route('user#contactInfo')}}" method="post" >

                   @csrf
                   <div class="form-group mb-4 mt-3"><input type="text" name="name" class="form-control" placeholder="Name"></div>
                   @error('name')
                   <small class="text-danger">{{$message}}</small>
                   @enderror

                   <div class="form-group mb-4"> <input type="email" name="email" class="form-control" placeholder="Email"></div>
                   @error('email')
                   <small class="text-danger">{{$message}}</small>
                   @enderror

                   <div class="form-group mb-4"> <textarea  id="" class="form-control" name="message" cols="30" rows="10" placeholder="Your Message"></textarea></div>
                   @error('message')
                   <small class="text-danger">{{$message}}</small>
                   @enderror
                   <button class="text-center float-end"  style="background-color:rgb(176, 184, 255);color:rgb(0, 0, 0);padding:10px;border-radius:6px" type="submit">Send Message</button>

               </form>
            </div>
          </div>
    </div>
   {{-- Start footer --}}
   <div class="footer">
    <div class="row">
      <div class="col-6">
          <div class="aboutus ms-4">
              <h2 class="mb-3">About us</h2>
             <h5 class=text-muted>Lorem ipsum dolor sit, amet consectetur
                adipisicing elit. Totam beatae ipsa eveniet explicabo
                 similique ipsam perspiciatis inci vel quam.
             </h5>
           <div class="icon ">
              <h3><i class="fa-brands fa-twitter bg-white text-primary p-2 rounded "></i></h3>
              <h3><i class="fa-brands fa-facebook bg-primary text-white p-2 rounded"></i></h3>
              <h3><i class="fa-brands fa-instagram bg-warning text-white p-2 rounded"></i></h3>
              <h3><i class="fa-brands fa-youtube bg-danger text-white p-2 rounded"></i></h3>
           </div>
      </div>
      </div>
      <div class="col-2">
          <div class="support">
              <h2 class="mb-3">Support</h2>
              <h4 class=text-muted>FAQ</h4><br>
              <h4 class=text-muted>Privacy policy</h4><br>
              <h4 class=text-muted>Help</h4><br>
              <h4 class=text-muted>Contact</h4><br>
       </div>
      </div>
     <div class="col-5">
      <div class="contactinfo">
          <h2 class="mb-3">Contact us</h2>
          <h5><i class="fa-solid fa-phone"></i> 0912345677</h5>
          <h5><i class="fa-solid fa-envelope"></i> clinic@gmail.com</h5>
      </div>
    </div>
  </div><hr>
  <h4 class="text-muted text-center">Copyright 2023 Glory Pet Clinic All Righhts Reserved</h4>
</div>

{{-- End footer --}}

@endsection
