<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{-- css link --}}
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
     {{-- fontawesome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>
      <div class="sidebar">
          <div class="sidebar-logo">
            <span></span>
             <h1><span><img src="{{asset('image/Dog1.png')}}" width="100px" height="90px" alt="">Pet Clinic</span></h1>
          </div>
          <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{route('admin#home')}}"><span><i class="fa-solid fa-clipboard-list me-3"></i></i>Appointment</span></a>
                </li>
                <li>
                    <a href="{{route('admin#clientPage')}}"> <span><i class="fa-solid fa-user-group me-3"></i>Clients</span></a>
                </li>
                <li>
                    <a href="{{route('admin#doctorPage')}}"><span><i class="fa-solid fa-user-doctor me-3"></i>Doctors</span></a>
                </li>
                <li>
                    <a href="{{route('admin#service')}}"><span><i class="fa-solid fa-book me-3"></i>Services</span></a>
                </li>
                <li>
                    <a href="{{route('admin#contactPage')}}"><span><i class="fa-solid fa-envelope me-3"></i>Contact</span></a>
                </li>
            </ul>
          </div>

      </div>


    <div class="main-content">
            <header>
                <h1>
                    <label for=""><span><i class="fa-solid fa-bars"></i></span></label>
                     Dashboard
                </h1>
                    </form>

                <div class="userAccount">
                     <span><img src="{{asset('storage/'.Auth::user()->image)}}" alt="" width="40px" height="40px"><span class="fs-3">{{Auth::user()->name}}</span></span>
                </div>
            </header>

            <div class="adminInfo">
                <div class="row ">
                    <div class="col-8 offset-7">
                        <a href="{{route('admin#updateAccountPage')}}"><h4 class=""><span><i class="fa-solid fa-user me-3"></i></span>Account</h4></a>
                        <a href="{{route('admin#changePassword')}}"><h4 class=""><span><i class="fa-solid fa-key me-3"></i></span>Change password</h4></a>
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <div class="logoutBtn d-flex justify-content-center ">
                               <button class="btn btn-danger text-white col-10 mt-3 me-5"><i class="fa-solid fa-right-from-bracket me-2"></i>Logout</button>
                            </div>
                           </form>
                    </div>
                </div>

            </div>
    </div>

    <div>

        @yield('content')



    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('.userAccount').click(function(){
         $('.adminInfo').toggleClass('open');
    })
 })

</script>
</html>
