<!DOCTYPE html>
<html>
<head>
  <title>Comic book</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/bootstrap/css/bootstrap.min.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('frontend_asset/bootstrap/css/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend_asset/fontawesome/css/all.min.css')}}">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

  <div id="photo">
  <img src="{{asset('frontend_asset/bootstrap/images/10.jpg')}}" class="img-fluid">
  </div>

  {{-- navbar --}}

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Comic book</a>

    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 tab-links nav-flex-icons ">

      <li class="nav-item">
        <a class="nav-link {{Request::is('/*') ? 'active' : '' }}" href="{{route("index")}}">Home </a>
      </li>
      <li class="nav-item  " >
        <a class="nav-link {{Request::is('comiclist*') ? 'active' : '' }}" href="{{route('comiclist')}}">Comic List</a>
      </li>
      <li class="nav-item " >
        <a class="nav-link {{Request::is('comicnew*') ? 'active' : '' }}" href="{{route('new')}}">News</a>
      </li>
     {{--   <li class="nav-item ">
        <a class="nav-link {{Request::is('category*') ? 'active' : '' }}" href="#">About</a>
      </li>
       <li class="nav-item ">
        <a class="nav-link {{Request::is('category*') ? 'active' : '' }}" href="#">Contact</a>
      </li> --}}
      @auth

      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          {{ Auth::user()->name }}
        </a>


        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>


      @else
      <li class="nav-item">
        <a class="nav-link" href="{{route('signin')}}">Signin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('signup')}}">Signup</a>
      </li>

      @endauth

      <li class="nav-item ">
        <a class="nav-link" href="{{route('cart')}}"><i class="fas fa-shopping-cart fa-lg"><span id="cart" class="badge badge-pill badge-success badge-notify cartNotistyle cartNoti"></span></i></a>
      </li>

       <li class="nav-item ">
        <a class="nav-link" href="{{route('cart')}}"><span id="cart_ks"></span>Ks</a>
      </li>
      
    </ul>
   
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


@yield('content')


{{-- footer --}}
{{-- <div class="container-fluid">
   <div class="row mt-5">
    <div class="col bg-dark py-5">
      <div class="text-center ">
        Comic Book
      </div> 
    </div>
     
   </div>
</div --}}
<div class="container-fluid bg-dark">
<div class="center box" >
              <h3 style="color: green"> Address </h3>
              <div class="cont">
                <div class="place">
                  <span class="fas fa-map-marker-alt"></span>
                  <span class="text" style="color: green"> Myanmar Plaza, Kabar Aye Road, Yangon </span>
                </div>
                <div class="phone">
                  <span class="fas fa-phone-alt"></span>
                  <span class="text" style="color: green"> +959 5343243 </span>
                </div>
                <div class="email">
                  <span class="fas fa-envelope"></span>
                  <span class="text" style="color: green"> movieshop@gmail,com </span>
                </div>
                <div class="social">
                  <a href="https://www.facebook.com/" target="_blanks"><span class="fab fa-facebook-f"></span></a>&nbsp;&nbsp;&nbsp;
                  <a href="https://twitter.com/" target="_blanks"><span class="fab fa-twitter"></span></a>&nbsp;&nbsp;&nbsp;
                  <a href="https://www.instagram.com/" target="_blanks"><span class="fab fa-instagram"></span></a>&nbsp;&nbsp;&nbsp;
                  <a href="https://www.youtube.com/" target="_blanks"><span class="fab fa-youtube"></span></a>
                </div>
              </div>
            </div>
</div>

  <script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('frontend_asset/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   @yield('script')

{{-- <script type="text/javascript">
  $(document).ready(function(){
    // alert('ok');
    $('ul.tab-links li').on('click', function(){
      // alert("ok");
      $('li.active').removeClass('active'); 
      $(this).addClass('active'); 
    })
})

</script> --}}
</body>
</html>