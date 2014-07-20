<!DOCTYPE html>
<html>
  <head>
    <!-- Title here -->
    <title>GeekToys: @yield('title')</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="GeekToysCR">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600italic,600' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/animate.min.css') }}
    {{ HTML::style('css/ddlevelsmenu-base.css') }}
    {{ HTML::style('css/ddlevelsmenu-topbar.css') }}
    {{ HTML::style('css/jquery.countdown.css') }}
    {{ HTML::style('css/font-awesome.min.css') }}
    {{ HTML::style('css/style.css') }}

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
  </head>
  <body>
    @include('includes.header')
      
    <!-- Page title -->
    <div class="page-title">
      <div class="container">
        @yield('page-title')
        <hr />
      </div>
    </div>
    <!-- Page title -->
    
    <!-- Page content -->
    <div class="page-content">
      <div class="container">
        <div class="row">
        @yield('content')
        </div>
      </div>
    </div>
    <!-- Page content -->

    @include('includes.footer')
      
    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
    {{ HTML::script('js/ddlevelsmenu.js') }}
    {{ HTML::script('js/jquery.carouFredSel-6.2.1-packed.js') }}
    {{ HTML::script('js/jquery.countdown.min.js') }}
    {{ HTML::script('js/jquery.navgoco.min.js') }}
    {{ HTML::script('js/filter.js') }}
    {{ HTML::script('js/respond.min.js') }}
    {{ HTML::script('js/html5shiv.js') }}
    {{ HTML::script('js/custom.js') }}
    {{ HTML::script('js/bootstrap.min.js') }}
  </body> 
</html>