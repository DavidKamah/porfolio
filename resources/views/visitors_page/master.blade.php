<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Custom  CSS -->
     <link href="{{ URL::asset('css/my_custom_style.css')}}" rel="stylesheet">
     
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" 
     integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" 
     crossorigin="anonymous">
     
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
         integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" 
      crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/75c7cbc9da.js" crossorigin="anonymous"></script>
   
    <title>My blog site</title>
  </head>
  <body class = "bg-light">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="navbar-brand" href="{{url('home')}}"><i class="fas fa-home"></i>Home<span class="sr-only">(current)</span></a>
          </li>
            
          <li class="nav-item">
            <a class="navbar-brand" href="{{url('blogs')}}"><i class="fas fa-comments"></i> Blog-section</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="{{url('contact')}}"><i class="fas fa-envelope"></i>  Contact</a>
          </li>
          <li class="nav-item">
            <a class="navbar-brand" href="{{url('about')}}"><i class="fas fa-info-circle"></i>More about me</a>
          </li>
         
        </ul>
      </div>
    </nav>

   
    @yield('content')
  </body>
    <footer class="footer">
      <p class="footer__title">David</p>
      <div class="footer__social">
          <a href="#" class="footer__icon"><i class="fab fa-instagram"></i></a>
          <a href="#" class="footer__icon"><i class="fab fa-github"></i></a>
          <a href="#" class="footer__icon"><i class="fab fa-facebook"></i></a>
      </div>
      <p>&#169; 2020 copyright all right reserved</p>
  </footer>
  
  <!--1810C67F-8CD0-4288-8F52-FA03CA16323E-->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>