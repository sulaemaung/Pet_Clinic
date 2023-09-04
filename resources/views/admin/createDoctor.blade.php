@extends('admin.layouts.master')
@section('content')
     <div class="container-fluid">

        <div class="row">

            <div class="col-6 offset-4 mt-5">
                <div><a href="{{route('admin#doctorPage')}}">
                    <i class="fa-solid fa-arrow-left-long fs-2 mb-2 text-black"></i>
                </a></div>
                <form action="{{route('create#doctor')}}" method="post" enctype="multipart/form-data">

                    <div class="form">
                    @csrf
                    <h1 class="text-center">Create doctor</h1>

                        <div class="form-group mb-4">
                            <label>Doctor Name</label>
                            <input class="form-control mb-3" type="text" name="doctorName" placeholder="Doctor name">
                        </div>
                        @error('doctorName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group mb-4">
                            <label>Experience</label>
                            <input class="form-control mb-3" type="text" name="doctorExp" placeholder="Doctor Experience">
                        </div>
                        @error('doctorExp')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group mb-4">
                            <label>Gender</label>
                            <input class="form-control mb-3" type="text" name="doctorGender" placeholder="">
                        </div>
                        @error('doctorGender')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                         <div class="form-group mb-4">
                            <label>Image</label>
                            <input type="file" class="form-control" name="doctorImage">
                        </div>
                       @error('doctorImage')
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
