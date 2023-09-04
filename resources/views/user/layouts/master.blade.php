<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     {{-- css link --}}
     <link rel="stylesheet" href="{{asset('user/style.css')}}">
     {{-- bootstrap --}}
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     {{-- fontawesome link --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     {{-- jquery link --}}
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>

    {{-- Start navbar --}}
    <div class="navBar">
        <div class="logo">
            <div id="menu" class="bx-menu"><i class="fa-solid fa-bars"></i></div>
            <h1><span class="fs-2"><img src="{{asset('image/Dog1.png')}}" alt="">Glory Pet Clinic</span></h1>
            <div class="reqBtn">
               <a href="{{route('user#appointment')}}"> <button>REQUEST APPOINTMENT</button></a>
            </div>
            <div class="logoutBtn">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit" id="logoutBtn">Logout<i class="fa-solid fa-arrow-right-from-bracket ms-2"></i></button>
                </form>
            </div>


        </div>

       <div class="nav-menu">
        <ul>

            <li><a href="{{route('user#home')}}">Home</a></li>
            <li><a href="{{route('user#service')}}">Services</a></li>
            <li><a href="{{route('user#aboutus')}}">About us</a></li>
            <li><a href="{{route('user#contact')}}">Contact</a></li>

        </ul>
       </div>
    </div>
    {{-- End navbar --}}
    @yield('content')


</body>
<script>
    $(document).ready(function(){
      $('#menu').click(function(){
        $(this).toggleClass('.bx-menu');
         $('.navBar .nav-menu').toggleClass('active');
    });
    });

</script>
</html>
