@extends('user.layouts.master')
@section('content')
 {{--Start main-content --}}
     <div class="main-content">
       <div class="home">
        <img src="{{asset('image/mainpet.jpg')}}"  alt="">
       <div>
        <h2>We Treat Your Pets Like Family <br><br>

            Here at Glory Pet Clinic, we believe in the bond between humans and their pets. We work hard to make sure our patients live long and healthy lives. We look forward to meeting your furry friend!<br><br>

            If you would like to schedule your first examination for your pets or have any questions about our practice or staff, don’t hesitate to call us today at Ph.091263553.</h2>
       </div>
       </div>
       <div class="service">
         <a href="{{route('user#service')}}" style=text-decoration:none;>
            <div class="card">
                <img src="{{asset('image/dog-care.jpg')}}"  alt="">
                <h3>Our Services</h3>
             </div>
         </a>
         <a href="{{route('user#appointment')}}" style=text-decoration:none;>
            <div class="card">
                <img src="{{asset('image/dog-care1.png')}}"  alt="">
                <h3>Appointment</h3>
             </div>
         </a>
         <a href="" style=text-decoration:none;>
            <div class="card" >
                <img src="{{asset('image/dog-care3.jpg')}}"  alt="">
                <h3>Contact us</h3>
             </div>
         </a>
    </div>


 {{--End main-content --}}
     {{-- Start footer --}}
       <div class="footer">
          <div class="row">
            <div class="col-5">
                <div class="aboutus ms-4">
                    <h2 class="mb-5">About us</h2>
                   <h5 class=text-muted>Lorem ipsum dolor sit, amet consectetur
                      adipisicing elit. Totam beatae ipsa eveniet explicabo
                       similique ipsam perspiciatis incidunt laboriosam ducimus dolorem, facere quod optio recusandae magni tempore, sint consectetur vel quam.
                   </h5>
                 <div class="icon ">
                    <h3><i class="fa-brands fa-twitter bg-dark text-white p-2"></i></h3>
                    <h3><i class="fa-brands fa-facebook bg-dark text-white p-2"></i></h3>
                    <h3><i class="fa-brands fa-instagram bg-dark text-white p-2"></i></h3>
                    <h3><i class="fa-brands fa-youtube bg-dark text-white p-2"></i></h3>
                 </div>
            </div>
            </div>
            <div class="col">
                <div class="support">
                    <h2 class="mb-5">Support</h2>
                    <h4 class=text-muted>FAQ</h4><br>
                    <h4 class=text-muted>Privacy policy</h4><br>
                    <h4 class=text-muted>Help</h4><br>
                    <h4 class=text-muted>Contact</h4><br>
             </div>
            </div>
           <div class="col">
            <div class="contactinfo">
                <h2 class="mb-5">Contact us</h2>
                <h5><i class="fa-solid fa-phone"></i> 0912345677</h5>
                <h5><i class="fa-solid fa-envelope"></i> clinic@gmail.com</h5>
            </div>
          </div>
        </div><hr>
        <h4 class="text-muted text-center">Copyright 2023 Glory Pet Clinic All Righhts Reserved</h4>
  </div>

     {{-- End footer --}}


@endsection
