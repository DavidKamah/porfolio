<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
     <!-- Custom  CSS -->
     <link href="{{ URL::asset('css/my_custom_style.css')}}" rel="stylesheet">

     
    <script src="https://kit.fontawesome.com/75c7cbc9da.js" crossorigin="anonymous"></script>
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
         integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
      crossorigin="anonymous">
      
   
    <title>My blog site</title>
  </head>
  <body class = "bg-light">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a class="navbar-brand" href="#">Welcome, Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                  <a class="navbar-brand" href="{{url('dashboard')}}">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="{{url('posts')}}">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="{{url('posts/create')}}">Create Blog</a>
            </li>
            <li class="nav-item">
              <a class="navbar-brand" href="{{url('logout')}}">logout</a>
            </li>
            
          </ul>
        </div>
      </nav>
    </header>
    <main>
    @yield('content')
    </main>
    <footer class="footer">
      <p class="footer__title">Kama-leh</p>
      <div class="footer__social">
          <a href="#" class="footer__icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer__icon"><i class="fab fa-github"></i></a>
          <a href="#" class="footer__icon"><i class="fab fa-facebook"></i></a>
      </div>
      <p>&#169; 2020 copyright all right reserved</p>
  </footer>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   <!--===== SCROLL REVEAL =====-->
   <script src="https://unpkg.com/scrollreveal"></script>
</html>