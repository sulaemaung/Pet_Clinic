@extends('admin.layouts.master')
@section('content')
   <!-- MAIN CONTENT-->
  <main>
    <div class="cards">
        <div class="card">
            <div>
             <h1>3</h1>
             <span ><i class="fa-solid fa-clipboard-list me-3"></i></span>
            </div>
            <div>
                <span class="fs-4 text-secondary">Appointment</span>
            </div>
        </div>
        <div class="card">
            <div>
             <h1 class="fs-1">34</h1>
             <i class="fa-solid fa-user-group"></i>
            </div>
            <div><span class="fs-4 text-secondary">Clients</span></div>
        </div>
        <div class="card">
            <div>
             <h1>10</h1>
             <i class="fa-solid fa-user-doctor"></i>
             </div>
            <div>
                <span class="fs-4 text-secondary">Doctors</span>
            </div>
        </div>
        <div class="card">
            <div>
             <h1>50</h1>
             <span ><i class="fa-solid fa-book"></i></span>
            </div>
            <div>
                <span class="fs-4 text-secondary">Services</span>
            </div>
        </div>

    </div>
</main>
 <div class="main-content">
   <div class="container-fluid">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>User id</th>
                        {{-- <th>User name</th> --}}
                        <th>Pet name</th>
                        <th>Pet type</th>
                        <th>Doctor name</th>
                        <th>Service name</th>
                        <th>1 <sup>st</sup> Appointment date</th>
                        <th>POD1</th>
                        <th>2 <sup>nd</sup> Appointment date</th>
                        <th>POD2</th>
                        <th>Created_at</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($appointment as $a)
                    <tr class="tr-shadow">
                        <td>{{$a->id}}</td>
                        <td>{{$a->user_id}}</td>
                        {{-- <td>{{}}</td> --}}
                        <td>{{$a->pet_name}}</td>
                        <td>{{$a->pet_type}}</td>
                        <td>{{$a->doctor_name}}</td>
                        <td>{{$a->service_name}}</td>
                        <td>{{$a->first_date}}</td>
                        <td>{{$a->part_of_the_Day1}}</td>
                        <td>{{$a->second_date}}</td>
                        <td>{{$a->part_of_the_Day2}}</td>
                        <td>{{$a->created_at}}</td>
                    </tr>
                    @endforeach
                </tbody>


            </table>
    </div>
</div>

        {{-- Pagination --}}
               {{-- <div class="mt-3">
                   {{$categories->appends(request()->query())->links()}}
               </div> --}}
        {{--End Pagination --}}

                {{-- </div>
                @else
                  <h3 class="text-secondary text-center mt-5">There is no Category here!</h3>
                @endif --}}


                <!-- END DATA TABLE -->


<!-- END MAIN CONTENT-->




@endsection
