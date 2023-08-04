@extends('user.layouts.master')
@section('content')
<div class="header">
    <h2>Services</h2>
    </div>
@foreach ($service as $s)
     <div class="serviceCard">

       <div class="row">

        <div class="col-3" ><img src="{{asset('storage/'.$s->image)}}" width="230px" height="170px" alt=""></div>
        <div class="col-9">
           <div class=""><h3>{{$s->service_name}}</h3></div>
           <div class="">{{$s->description}}</div>
        </div>

    </div>

      </div>
      @endforeach
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
