@extends('admin.layouts.master')
@section('content')
<div class="main-content">

    <div class="container-fluid">
        <div class="row">
            <div><a href="{{route('admin#home')}}">
                <i class="fa-solid fa-arrow-left-long fs-2 ms-5 mt-4  text-black"></i>
            </a></div>
        </div>
        <form action="{{route('admin#updateAccount')}}" method="post" enctype="multipart/form-data" style="margin-left: 20%">
            @csrf
            <input type="hidden" name="userId" value="{{Auth::user()->id}}">
            <div class="row border shadow-lg p-5" style="margin-right: 18%" >
                <div class="col-4">
                    @if(Auth::user()->image==null)
                            <img src="{{asset('image/user profile.webp')}}" class="img-thumbnail shadow-sm"/>

                              @else
                            <img src="{{asset('storage/'.Auth::user()->image)}}" class="img-thumbnail shadow-sm"/>
                            @endif

                            <div class="mt-3">
                                <input type="file"  class="form-control @error('image') is-invalid @enderror " name="image" >
                            </div>
                            @error('image')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                            <div>
                                <button class="updateBtn mt-3" type="submit">
                                    Update
                                </button>
                            </div>
                        </div>
                    <div class="col-6 ms-3">
                         <div class="form-group">
                            <label  class="mb-1">Name</label>
                            <input  name="name" value="{{old('name',Auth::user()->name)}}" type="text" class="form-control @error('name') is-invalid @enderror " placeholder="Enter new name">
                        </div>
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group">
                            <label  class="mb-1">Email</label>
                            <input  name="email" value="{{old('email',Auth::user()->email)}}" type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter new email">
                        </div>
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group">
                            <label  class="mb-1">Phone</label>
                            <input  name="phone" value="{{old('phone',Auth::user()->phone)}}" type="number" class="form-control @error('phone') is-invalid @enderror " placeholder="Enter new phone">
                        </div>
                        @error('phone')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group">
                            <label  class="mb-1">Gender</label>
                            <select name="gender" id="" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">Choose Gender</option>
                                <option value="male" @if(Auth::user()->gender=='male') selected @endif>Male</option>
                                <option value="female" @if(Auth::user()->gender=='female') selected @endif>Female</option>
                            </select>
                        </div>
                        @error('gender')
                        <small class="text-danger">{{$message}}</small>
                        @enderror

                        <div class="form-group">
                            <label class="mb-2">Address</label>
                            <textarea name="address" id="" cols="30" rows="10" class="form-control @error('address') is-invalid @enderror" placeholder="Enter new address">{{old('address',Auth::user()->address)}}</textarea>
                        </div>
                        @error('address')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                </div>
            </div>
        </form>

    </div>
</div>
@endsection
