@extends('admin.layouts.master')
@section('content')
<div class="main-content">

        <div class="container-fluid">
            <div class="row">
                <div><a href="{{route('admin#home')}}">
                    <i class="fa-solid fa-arrow-left-long fs-2 ms-5 mt-4  text-black"></i>
                </a></div>
            </div>


           <div class="row">
             <div class="card-title mt-4 mb-3">
                <h3 class="text-center title-2">Change Password</h3>
             </div>
             <div class="col-6 offset-3  border shadow p-4">

                <form action="{{route('admin#updatePassword')}}" method="post" novalidate="novalidate">
                    @csrf
                    @if(session('notmatch'))
                    <div class="col-12">
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i>{{session('notmatch')}}</i>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    </div>
                    @endif
                    <div class="form-group">
                        <label class="mb-1">Old Password</label>
                        <input  name="oldPassword" type="password" class="form-control mb-3  @error('oldpassword') is-invalid @enderror" placeholder="Enter old password">
                    </div>
                    @error('oldPassword')
                    <small class="text-danger">{{$message}}</small>
                @enderror

                <div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">New Password</label>
                        <input id="cc-pament" name="newPassword"  type="password" class="form-control mb-3 @error('newPassword') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter new password">
                    </div>
                    @error('newPassword')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                <div>
                    <div class="form-group">
                        <label for="cc-payment" class="control-label mb-1">Comfirm Password</label>
                        <input id="cc-pament" name="comfirmPassword" type="password" class="form-control mb-3 @error('comfirmPassword') is-invalid @enderror" aria-required="true" aria-invalid="false" placeholder="Enter comfirm password">
                    </div>
                    @error('comfirmPassword')
                    <small class="text-danger">{{$message}}</small>
                @enderror
                 <div>
                    <button class="changeBtn">Change Password</button>
                 </div>
                </form>
             </div>




                    </div>
                </div>
            </div>
           </div>
        </div>

@endsection
