@extends('admin.layouts.master')
@section('content')
     <div class="container-fluid">

        <div class="row">

            <div class="col-6 offset-4 mt-5">
                <div><a href="{{route('admin#service')}}">
                    <i class="fa-solid fa-arrow-left-long fs-2 mb-2 text-black"></i>
                </a></div>
                <form action="{{route('create#service')}}" method="post" enctype="multipart/form-data">

                    <div class="form">
                    @csrf
                    <h1 class="text-center">Create service</h1>

                        <div class="form-group mb-4">
                            <label>Service Name</label>
                            <input class="form-control mb-3" type="text" name="serviceName" placeholder="Service name">
                        </div>
                        @error('serviceName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group mb-4">
                            <label>Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror


                        <div class="form-group mb-4">
                            <label>Image</label>
                            <input type="file" class="form-control" name="serviceImage">
                        </div>
                       @error('serviceImage')
                           <small class="text-danger">{{$message}}</small>
                       @enderror
                         <div class="createBtn">
                          <span><button type="submit">Create</button></span>
                         </div>



                    </div>
                 </form>
            </div>
        </div>
    </div>



@endsection
