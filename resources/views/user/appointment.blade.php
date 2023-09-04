@extends('user.layouts.master')
@section('content')
     <div class="header">
     <h2>Make An Appointment</h2>
     </div>
    <div class="appointment">
        <div class="info">
                 <p>Our goal is to make scheduling an appointment as easy and convenient for you as possible. To request an appointment you can either:</p><br>
                 <h5>1. Call Now  Ph.091234577</h5><br>
                 <h6>Or</h6><br>
                 <h5>2. Fiil out form below</h5>


                <h2>Client Information</h2><hr>
                <form action="{{route('appointment#create')}}" method="post">
                    @csrf
                    <label for="">Name</label><br>
                    <input type="text" class="form-control" value={{Auth::user()->name}} @disabled(true)><br>
                    <label for="" >Phone</label><br>
                    <input type="text"  class="form-control" value={{Auth::user()->phone}} @disabled(true)><br>
                    <label for="" >Email</label><br>
                    <input type="text"  class="form-control" value={{Auth::user()->email}} @disabled(true)><br>
                    <label for="" >Pet's name</label><br>
                    <input type="text"  class="form-control" name="petName"><br>
                    <label for="" >Type of pet</label><br>
                    <input type="text"  class="form-control" name="petType"><br>
                    <label for="">Doctor's name</label><br>
                    <select  id="" class="form-control" name="doctorName">
                        <option value="" >Select doctor name</option>
                        @foreach ($doctorList as $d)
                        <option value="{{$d->doctor_name}}">{{$d->doctor_name}}</option><br>
                        @endforeach
                    </select>
                    <p>Click here to see our doctors
                        <a href="{{route('user#aboutus')}}">Doctor Information</a>
                    </p>
                    <h3>Appointment Details</h3><br><hr>

                    <label for="" >What is the appointment for?</label><br>
                        <select class="form-control" name="serviceId" >
                        <option value="" >Select One</option>
                         @foreach ($service as $s)
                          <option value="{{$s->service_id}}">{{$s->service_name}}</option>
                         @endforeach
                         </select>
                         <small class="text-danger">If this is an emergency, or your pet is in pain or injured, or you need an appointment today please call our office.</small>
                    <br><br>

                    <label for="" >1<sup>st </sup> appointment date</label><br>
                    <input type="date"  class="form-control" name="oneDate">

                         <input type="radio" name="partOfTheDay1" value="morning"><label for="morning">Morning</label>
                         <input type="radio" name="partOfTheDay1" value="midday"><label for="midday">Midday</label>
                         <input type="radio" name="partOfTheDay1" value="evening"><label for="evening">Evening</label>    <br><br>

                    <label for="" >2<sup>nd</sup> appointment date</label><br>
                    <input type="date"  class="form-control" name="twoDate">
                         <input type="radio" name="partOfTheDay2" value="morning"><label for="morning">Morning</label>
                         <input type="radio" name="partOfTheDay2" value="midday"><label for="midday">Midday</label>
                         <input type="radio" name="partOfTheDay2" value="evening"><label for="evening">Evening</label>
                    <br>
                    <button class="float-end mt-1" type="submit">Submit</button>
        </div>
    <div class="businessInfo">
        <div class="business">
            <h2>Business Hours</h2><hr>
            <div class="row">
                <div class="col"><strong>Day</strong>
                    </div>
                <div class="col"><strong>Hour</strong>
                </div>
            </div><hr>
            <div class="row">
                <div class="col"><p>Monday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
            <div class="row">
                <div class="col"><p>Tuesday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
            <div class="row">
                <div class="col"><p>Wednesday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
            <div class="row">
                <div class="col"><p>Thursday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
            <div class="row">
                <div class="col"><p>Friday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
             <div class="row">
                <div class="col"><p>Saturday</p>
                </div>
                <div class="col"><p>8:00 am - 6:00pm</p>
                </div><hr>
            </div>
            <div class="row">
                <div class="col"><p>Sunday</p>
                </div>
                <div class="col"><p>Closed</p>
                </div><hr>
            </div>
            </div>
            <div class="address">
                <h2>Our address</h2>
             </div>
             <div class="row">
                <div class="col"><p>Address</p>
                </div>
                <div class="col"><p>No.7333.pyan road,Insein Township</p>
                </div><hr>
            </div>
             <div class="row">
                <div class="col"><p>Phone</p>
                </div>
                <div class="col"><p>0912345777</p>
                </div><hr>
            </div>

         </div>

    </div>


@endsection
