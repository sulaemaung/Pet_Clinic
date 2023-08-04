@extends('admin.layouts.master')
@section('content')
     <div class="container-fluid">

        <div class="row">

            <div class="col-6 offset-4 mt-5">
                <div><a href="{{route('admin#service')}}">
                    <i class="fa-solid fa-arrow-left-long fs-2 mb-2 text-black"></i>
                </a></div>
                <form action="{{route('update#service')}}" method="post" enctype="multipart/form-data">

                    <div class="form">
                    @csrf
                    <h1 class="text-center">Edit your service</h1>
                        <input type="hidden" name="serviceId" value={{$service->service_id}}>
                        <div class="form-group mb-4">
                            <label>Service Name</label>
                            <input class="form-control mb-3" value="{{old('serviceName',$service->service_name)}}" type="text" name="serviceName" >
                        </div>
                        @error('serviceName')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group mb-4">
                            <label>Description</label>
                            <textarea name="description"  class="form-control" id="" cols="30" rows="10">{{old('description',$service->description)}}</textarea>
                        </div>
                        @error('description')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <img src="{{asset('storage/'.$service->serviceImage)}}" alt="" srcset="">
                        <div class="form-group mb-4">
                            <label>Image</label>
                            <input type="file" class="form-control" name="serviceImage">
                        </div>
                       @error('serviceImage')
                           <small class="text-danger">{{$message}}</small>
                       @enderror
                         <div class="createBtn">
                          <span><button type="submit">Update</button></span>
                         </div>



                    </div>
                 </form>
            </div>
        </div>
    </div>



@endsection
