<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>@yield('title')</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&display=swap" rel="stylesheet">  

    <!-- Bootstrap core CSS -->
<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/mystyle.css')}}" rel="stylesheet">

    <style>
   
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="/admin"><h6>Hangman Admin</h6></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!--<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">-->
  <ul class="navbar-nav">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="/">User Home</a>
    </li>
  </ul>
  <ul class="navbar-nav px-3">
           <li style="background-color: purple" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <span class="text-white"> {{ Auth::user()->username }} </span><span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/admin">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Menu</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
            </a>
          </h6>
  
          <li class="nav-item">
            <a class="nav-link" href="/admin/challenges">
                <i class="fas fa-keyboard"></i>
                            Challenges
            </a>
          </li>
  
  
      </div>
      
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('content')

    </main>
  </div>
</div>


<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://kit.fontawesome.com/463fa12189.js" crossorigin="anonymous"></script>
<script src="{{asset('js/feather.min.js')}}" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>


  
  </body>
</html>
