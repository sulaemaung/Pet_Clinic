@extends('admin.layouts.master')
@section('content')
 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="container-fluid">
        <div class="addServiceBtn col-4 offset-10">
           <a href="{{route('create#doctorPage')}}"><button class="mt-5 mb-4">+Add doctor</button></a>
        </div>
        <div class="col-10 offset-1">
           <table class="table">

               <thead>
                   <tr>
                    <th>Doctor image</th>
                    <th>id</th>
                    <th>Doctor name</th>
                    <th>Experience</th>
                    <th>Gender</th>
                    <th></th>

                   </tr>

                   <tbody>
                       @foreach ($doctorList as $d)
                       <tr>
                        <td><img src="{{asset('storage/'.$d->doctor_image)}}" alt="" width="140px" height="110px"></td>
                        <td>{{$d->id}}</td>
                        <td>{{$d->doctor_name}}</td>
                        <td>{{$d->doctor_exp}} years</td>
                        <td>{{$d->gender}} </td>


                          <td> <a href="{{route('delete#doctor',$d->id)}}"><i class="fa-solid fa-trash-can text-danger fs-4"></i></a></td>
                       </tr>
                       @endforeach
                   </tbody>
               </thead>


    </div>
</div>

@endsection
