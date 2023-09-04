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
                                <th>Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($contactList as $c)
                           <tr class="tr-shadow">
                             <td>{{$c->name}}</td>
                             <td>{{$c->email}}</td>
                             <td>{{$c->message}}</td>
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
