<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

    {{-- fontawesome link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
      <div class="sidebar">
          <div class="sidebar-logo">
             <h1><span>Pet Clinic</span></h1>
          </div>
          <div class="sidebar-menu">
            <ul>
                <li>
                    <a href=""><span>Dashboard</span></a>
                </li>
                <li>
                    <a href=""><span>Clients</span></a>
                </li>
                <li>
                    <a href=""><span>Doctors</span></a>
                </li>
                <li>
                    <a href=""><span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span>Income</span></a>
                </li>
            </ul>
          </div>
      </div>

      <div class="main-content">
          <header>
            <h1>
                <label for=""><span></span></label>
                Dashboard
            </h1>
            <div class="searchBtn">
                  <span class=""></span>
                  <input type="text" placeholder="Search here">Search
            </div>
            <div class="userAccount"></div>
                <img src="{{asset('image/user profile.webp')}}" alt="" width="50px" height="50px">
                <div>
                    <h4>John</h4>
                    <small>Admin</small>
                </div>
          </header>
          <main>
            <div class="cards">
                <div class="card">
                   <div>
                    <h1>18</h1>
                    <span>Client</span>
                   </div>
                   <div>
                      <span><i class="fa-solid fa-user-group"></i></span>
                   </div>
                </div>
                <div class="card">
                    <div>
                     <h1>10</h1>
                     <span>Doctor</span>
                    </div>
                    <div>
                     <span><i class="fa-solid fa-user-doctor"></i></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                     <h1>50</h1>
                     <span>Orders</span>
                    </div>
                    <div>
                     <span><i class="fa-solid fa-book"></i></span>
                    </div>
                </div>
                <div class="card">
                    <div>
                     <h1>50000 MMK</h1>
                     <span>Income</span>
                    </div>
                    <div>
                     <span><i class="fa-solid fa-sack-dollar"></i></span>
                    </div>
                </div>
            </div>
          </main>
      </div>
      @yield('home')
</body>
</html>
