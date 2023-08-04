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
                    <a href=""> <span><i class="fa-solid fa-user-group me-3"></i>Clients</span></a>
                </li>
                <li>
                    <a href=""><span><i class="fa-solid fa-user-doctor me-3"></i>Doctors</span></a>
                </li>
                <li>
                    <a href="{{route('admin#service')}}"><span><i class="fa-solid fa-book me-3"></i>Services</span></a>
                </li>
                <li>
                    <a href=""><span><i class="fa-solid fa-envelope me-3"></i>Contact</span></a>
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
                <div class="searchBtn">
                      <input type="text" placeholder="Search here">
                      <span><i class="fa-solid fa-magnifying-glass "></i></span>
                </div>
                <div class="userAccount">
                    <a href="">
                        <img src="{{asset('image/user profile.webp')}}" alt="" width="40px" height="40px">
                        <span><h4>{{Auth::user()->name}}</h4></span></a>
                </div>


            </header>


        </div>
    <div>
        @yield('content')

    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit">logout</button>
    </form>

    </div>

</body>
<script>





</script>
</html>
