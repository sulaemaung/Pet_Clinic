@extends('admin.layouts.master')
@section('content')
<div class="main-content">
     <div class="container-fluid">
         <div class="addServiceBtn col-2 offset-10">
            <a href="{{route('create#servicePage')}}"><button class="mt-5">+Add service</button></a>
         </div>
         <div class="col-10 offset-1">
            <table class="table">

                <thead>
                    <tr>
                        <th class="col-2">image</th>
                        <th>service id</th>
                        <th>service name</th>
                        <th class="col-5">description</th>
                        <th >Created_at</th>
                        <th></th>
                        <th></th>
                    </tr>

                    <tbody>
                        @foreach ($service as $s)
                        <tr>
                            <td><img src="{{asset('storage/'.$s->image)}}" alt="" width="140px" height="110px"></td>
                            <td>{{$s->service_id}}</td>
                            <td>{{$s->service_name}}</td>
                            <td>{{$s->description}}</td>
                            <td>{{$s->created_at}}</td>
                            <td> <a href="{{route('edit#servicePage',$s->service_id)}}"><i class="fa-solid fa-pen-to-square text-primary fs-4 "></i></a ></td>
                            <td> <a href="{{route('delete#service',$s->service_id)}}"><i class="fa-solid fa-trash-can text-danger fs-4"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>


     </div>
 </div>
@endsection
