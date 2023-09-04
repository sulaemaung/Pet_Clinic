@extends('user.layouts.master')
@section('content')
<div class="header">
    <h2>About us</h2>
</div>
<div class="clinicimg mt-1">
    <img src="{{asset('image/petclinic.jpg')}}" alt="" >
    <h2>"The Glory Pet Clinic is to provide the quality medical care to the patients and service to our clients in a professional manner at a reasonable price."</h2>
</div>
  <div>
    <h2 class="text-center ">See our excellent skill doctors</h2>
    <div class="doctor">
       @foreach ($doctorList as $d)
       <a href="" style=text-decoration:none;>
        <div class="card" >
            <img src="{{asset('storage/'.$d->doctor_image)}}"  alt="" >
             <h4><pre>Name-{{$d->doctor_name}}</pre>
                 <pre>Experience-{{$d->doctor_exp}}years</pre>
            </h4>

         </div>
     </a>
       @endforeach
     </div>

  </div>
       {{-- Start footer --}}
       <div class="footer">
        <div class="row">
          <div class="col-7">
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
          <div class="col">
              <div class="support">
                  <h2 class="mb-3">Support</h2>
                  <h4 class=text-muted>FAQ</h4><br>
                  <h4 class=text-muted>Privacy policy</h4><br>
                  <h4 class=text-muted>Help</h4><br>
                  <h4 class=text-muted>Contact</h4><br>
           </div>
          </div>
         <div class="col">
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
