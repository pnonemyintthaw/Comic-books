<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Blank Page - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend_asset/css/main.css')}}">
    <!-- Font-icon css-->
     <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="{{asset('backend_asset/fontawesome/css/all.min.css')}}">

  </head>
  <body class="app sidebar-mini">

    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html">Vali</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}>
          <i class="fa fa-sign-out fa-lg"></i> </a></li>
           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
          </ul>
        </li>
      </ul>
    </header>

    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">{{-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"> --}}
        <div>
          <p class="app-sidebar__user-name">{{ Auth::user()->name }}</p>
          <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item {{Request::is('category*') ? 'active' : '' }}" href="{{route('category.index')}}"><i class="app-menu__icon fa fa-book-open"></i><span class="app-menu__label">Categories</span></a></li>
        
        <li><a class="app-menu__item {{Request::is('author*') ? 'active' : '' }}" href="{{route('author.index')}}"><i class="app-menu__icon fas fa-user-edit"></i><span class="app-menu__label">Authors</span></a></li>
        
        <li><a class="app-menu__item {{Request::is('book*') ? 'active' : '' }}" href="{{route('book.index')}}"><i class="app-menu__icon fas fa-book"></i><span class="app-menu__label">Books</span></a></li>


        <li><a class="app-menu__item {{Request::is('story*') ? 'active' : '' }}" href="{{route('story.index')}}"><i class="app-menu__icon fas fa-file"></i><span class="app-menu__label">Comic new</span></a></li>

        <li><a class="app-menu__item {{Request::is('order*') ? 'active' : '' }}" href="{{route('order.index')}}"><i class="app-menu__icon fas fa-file"></i><span class="app-menu__label">Orders</span></a></li>

      </ul>
    </aside>
    @yield('content')


    <!-- Essential javascripts for application to work-->
    <script src="{{asset('backend_asset/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('backend_asset/js/popper.min.js')}}"></script>
    <script src="{{asset('backend_asset/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('backend_asset/js/main.js')}}"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{asset('backend_asset/js/plugins/pace.min.js')}}"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>