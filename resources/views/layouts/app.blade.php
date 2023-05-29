<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

      body{
         font-family: cairo;
         color:azure
         

      }

      .fontcolor{
         color:white;
      }

    </style>
</head>
<body>
   <header>
   <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>
 
     <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#navbarExample01"
        aria-controls="navbarExample01"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class="p-5 text-center bg-light">
    <h1 style= "color:black;" class="mb-3">Welcome to the Electronics Store</h1>
    <h4 style= "color:black;" class="mb-3">Mobiles Section</h4>
    <a class="btn btn-primary" href="/" role="button">Browse the Store</a>
  </div>
  <!-- Jumbotron -->
   </header>

    
        <main class="py-4">
            @yield('content')
        </main>


   <!-- Footer -->
<footer class="text-center text-lg-start bg-white text-muted">
   <!-- Section: Social media -->
   <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
     <!-- Left -->
     <div class="me-5 d-none d-lg-block">
       <span>Get connected with us on social networks:</span>
     </div>
     <!-- Left -->
 
     <!-- Right -->
     <div>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-facebook-f"></i>
       </a>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-twitter"></i>
       </a>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-google"></i>
       </a>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-instagram"></i>
       </a>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-linkedin"></i>
       </a>
       <a href="" class="me-4 link-secondary">
         <i class="fab fa-github"></i>
       </a>
     </div>
     <!-- Right -->
   </section>
   <!-- Section: Social media -->
 
   <!-- Section: Links  -->
   <section class="">
     <div class="container text-center text-md-start mt-5">
       <!-- Grid row -->
       <div class="row mt-3">
         <!-- Grid column -->
         <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
           <!-- Content -->
           <h6 class="text-uppercase fw-bold mb-4">
             <i class="fas fa-gem me-3 text-secondary"></i>Company name
           </h6>
           <p>
             Here you can use rows and columns to organize your footer content. Lorem ipsum
             dolor sit amet, consectetur adipisicing elit.
           </p>
         </div>
         <!-- Grid column -->
 
         <!-- Grid column -->
         <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
           <!-- Links -->
           <h6 class="text-uppercase fw-bold mb-4">
             Products
           </h6>
           <p>
             <a href="#!" class="text-reset">Angular</a>
           </p>
           <p>
             <a href="#!" class="text-reset">React</a>
           </p>
           <p>
             <a href="#!" class="text-reset">Vue</a>
           </p>
           <p>
           <a href="#!" class="text-reset">Laravel</a>
           </p>
         </div>
         <!-- Grid column -->
 
         <!-- Grid column -->
         <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
           <!-- Links -->
           <h6 class="text-uppercase fw-bold mb-4">
             Useful links
           </h6>
           <p>
             <a href="#!" class="text-reset">Pricing</a>
           </p>
           <p>
             <a href="#!" class="text-reset">Settings</a>
           </p>
           <p>
             <a href="#!" class="text-reset">Orders</a>
           </p>
           <p>
             <a href="#!" class="text-reset">Help</a>
           </p>
         </div>
         <!-- Grid column -->
 
         <!-- Grid column -->
         <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
           <!-- Links -->
           <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
           <p><i class="fas fa-home me-3 text-secondary"></i> New York, NY 10012, US</p>
           <p>
             <i class="fas fa-envelope me-3 text-secondary"></i>
             info@example.com
           </p>
           <p><i class="fas fa-phone me-3 text-secondary"></i> + 01 234 567 88</p>
           <p><i class="fas fa-print me-3 text-secondary"></i> + 01 234 567 89</p>
         </div>
         <!-- Grid column -->
       </div>
       <!-- Grid row -->
     </div>
   </section>
   <!-- Section: Links  -->
 
   <!-- Copyright -->
   <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
     © 2021 Copyright:
     <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
   </div>
   <!-- Copyright -->
 </footer>
 <!-- Footer -->
</body>
</html>