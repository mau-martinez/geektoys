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

    @include('includes.styles')

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
  </head>
  <body>
    @include('includes.header')

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
    <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

    @include('includes.scripts')
  </body> 
</html>