<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon -->
    <link rel="icon" href="{{asset('images/media/netkid.jpg')}}">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    
    <!-- Custom CSS -->
     <link rel="stylesheet" href="{{asset('css/style.css')}}">

     <!--Font Awesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <!--Font Awesome Local-->
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('fontawesome-web/css/all.css')}}"> --}}

        <title>IceTunezGh</title>

    </head>

<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<nav class="navbar navbar-expand-lg navbar-dark bg-own mb-5">
      <div class="container">
        <a class="navbar-brand mr-auto" href="#"><img class="rounded-circle"
        src="#>images/media/netkid.jpg" width="40" height="40" alt=""></a>
      <span class="navbar-brand mr-5"><a class="h1 name" href="#">IceTunezGh</a></span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <li class="nav-item">
        <a class="nav-link" href="{{route ('index') }}">Categories</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about">Users</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="users/logout">Log Out</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{route ('createPost') }}">Post</a>
          <a class="dropdown-item" href="{{route ('create') }}">Category</a>
          <a class="dropdown-item" href="{{route ('register') }}">User</a>
        </div>
        </li>
        </ul>
      
      <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('news')}}">News</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Music</a>
        
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="{{route('uncategorized')}}">Uncategorized</a>
          <a class="dropdown-item" href="{{route('instrumentals')}}">Instrumentals</a>
          <a class="dropdown-item" href="{{route('mixes')}}">DJ Mixes</a>
          <a class="dropdown-item" href="{{route('albums')}}">Albums</a>
        </div>
     
        </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('videos')}}">Videos</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="{{route('about')}}">About</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<main class="main">
    <div class="container">
        <h2 class="title text-white text-center h2 mb-4">Category Name</h2>
        <div class="row">
            <div class="col-12 col-sm-8">
    
                @yield('content')
    
            </div>
    
            <div class="col-12 col-sm-4">
                <div class="content-section article-title">        
                  <h3>Latest Posts</h3>
                    <ul class="list-group none">
                  
                    <li class="list-group-item">No Post for news</li>
                      <li class="list-group-item none">
                      <a href="#">Hello world </a>
                      </a></li>    
                    </ul>
                    <h3>Categories</h3>
                    <ul class="list-group none">  
                      <li class="list-group-item"><a href="'/categories/posts/1'">News</a></li>
                      <li class="list-group-item"><a href="'/categories/posts/2'">Uncategorized</a></li>
                      <li class="list-group-item"><a href="'/categories/posts/3'">Instrumentals</a></li>
                      <li class="list-group-item"><a href="'/categories/posts/4'">DJ Mixes</a></li>
                      <li class="list-group-item"><a href="'/categories/posts/5'">Albums</a></li>
                    </ul>
                </div>
            </div>    
        </div>
    </div>

</main>



<footer class="bg-dark p-2">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-sm"></div>
      <div class="col-sm">
        <p class="foot">&copy; 2019-<?php echo date("Y");?> NetKid Gh.</br>All rights reserved.</p>
      </div>
      <div class="col-sm foot1">
        <p class="ml-5"><span><a href="https://facebook.com/NetKidDj"><i class="fab fa-facebook-square fa-fw"></i></a></span> 
        <span><a href="https://twitter.com/net_kiddj"><i class="fab fa-twitter-square fa-fw"></i></a></span>
        <span><a href="https://instagram.com/netkiddj"><i class="fab fa-instagram fa-fw"></i></a></span>
        <span><a href="https://linkedin.com/in/netkiddj"><i class="fab fa-linkedin fa-fw"></i></a></span></p>
      </div>
    </div>
    </div>     
</footer>

				
<!--Text Editor Script-->
<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
	CKEDITOR.replace( 'editor1' );
</script>
 <!-- Optional JavaScript -->

  <div class="icon-bar" id="">
        <p class="fb"><a href="https://facebook.com/NetKidDj"><i class="fab fa-facebook-square fa-fw"></i></a></p>
        <p class="tw"><a href="https://twitter.com/net_kiddj"><i class="fab fa-twitter-square fa-fw"></i></a></p>
        <p class="ig"><a href="https://instagram.com/netkiddj"><i class="fab fa-instagram fa-fw"></i></a></p>
        <p class="li"><a href="https://linkedin.com/in/netkiddj"><i class="fab fa-linkedin fa-fw"></i></a></p>
  </div>
          
  
    <script type="text/javascript" src="{{asset('/js/app.js')}}"></script>
    
     <!-- Optional JavaScript -->
     <script type="text/javascript" src="{{asset('/js/top.js')}}"></script> 
    
</body>
</html>