@extends('admin.layouts.master')
@section('content')
 <!-- MAIN CONTENT-->
 <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="col-md-12">

             <!-- DATA TABLE -->

                  <div class="p-5">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>User_id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Address</th>
                                <th>Created_At</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($clientList as $c)
                           <tr class="tr-shadow">
                             <td>{{$c->id}}</td>
                             <td>{{$c->name}}</td>
                             <td>{{$c->email}}</td>
                             <td>{{$c->phone}}</td>
                             <td>{{$c->gender}}</td>
                             <td>{{$c->address}}</td>
                             <td>{{$c->created_at}}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
@endsection
