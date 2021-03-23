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
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#"><h6>Hangman2</h6></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Sign out</a>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">

      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">
              <span data-feather="home"></span>
              Home
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Syllabus</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <li class="nav-item">
            <a class="nav-link" href="/subjects">
              <i class="fas fa-flask"></i>
              Subjects
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/examboards">
              <i class="fas fa-university"></i>
                            Examboards
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/levels">
              <i class="fas fa-layer-group"></i>
                              Levels
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/isclevels">
              <span data-feather="layers"></span>
                ISC Levels
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/courses">
              <i class="fas fa-chalkboard"></i>
                            Courses
            </a>
          </li>







   



      </div>
      
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('content')

    </main>
  </div>
</div>



<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://kit.fontawesome.com/463fa12189.js" crossorigin="anonymous"></script>

<script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{asset('js/feather.min.js')}}" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="{{asset('js/dashboard.js')}}"></script>
<script src="{{asset('js/myscript.js')}}"></script>

<script>
  $( function() {
    $( ".sortable" ).sortable();
    $( ".sortable" ).disableSelection();
  } );
  </script>
  
  </body>
</html>
