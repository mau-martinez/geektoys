<!DOCTYPE html>
<html>
  <head>
    <!-- Title here -->
    <title>GeekToysCR</title>
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
    <!-- Shopping cart Modal -->
    <div class="modal fade" id="shoppingcart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Shopping Cart</h4>
          </div>
          <div class="modal-body">
            <!-- Items table -->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Quantity</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="single-item.html">HTC One</a></td>
                  <td>2</td>
                  <td>$250</td>
                </tr>
                <tr>
                  <td><a href="single-item.html">Apple iPhone</a></td>
                  <td>1</td>
                  <td>$502</td>
                </tr>
                <tr>
                  <td><a href="single-item.html">Galaxy Note</a></td>
                  <td>4</td>
                  <td>$1303</td>
                </tr>
                <tr>
                  <th></th>
                  <th>Total</th>
                  <th>$2405</th>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Continue Shopping</button>
            <button type="button" class="btn btn-info">Checkout</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
           
    <!-- Logo & Navigation starts -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-md-2 col-sm-2">
            <!-- Logo -->
            <div class="logo">
             <h1><a href="index.html">GeekToys</a></h1>
            </div>
          </div>
          <div class="col-md-6 col-sm-5">
            <!-- Navigation menu -->
            <div class="navi">
              <div id="ddtopmenubar" class="mattblackmenu">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="#" rel="ddsubmenu1">Account</a>
                    <ul id="ddsubmenu1" class="ddsubmenustyle">
                      <li><a href="account.html">My Account</a></li>
                      <li><a href="viewcart.html">View Cart</a></li>
                      <li><a href="checkout.html">Checkout</a></li>
                      <li><a href="wishlist.html">Wish List</a></li>
                      <li><a href="orderhistory.html">Order History</a></li>
                      <li><a href="editprofile.html">Edit Profile</a></li>
                      <li><a href="confirmation.html">Confirmation</a></li>
                    </ul>
                  </li>
                  <li><a href="#" rel="ddsubmenu1">Pages</a>
                    <ul id="ddsubmenu1" class="ddsubmenustyle">
                      <li><a href="404.html">404</a></li>
                      <li><a href="faq.html">FAQ</a></li>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="careers.html">Careers</a>
                      <li><a href="support.html">Support</a></li>
                      <li><a href="aboutus.html">About</a></li>
                    </ul>
                  </li>
                  <li><a href="#" rel="ddsubmenu1">Computers</a>
                    <ul id="ddsubmenu1" class="ddsubmenustyle">
                      <li><a href="items.html">Desktop</a></li>
                      <li><a href="items.html">Laptop</a></li>
                      <li><a href="items.html">NetBook</a></li>
                      <li><a href="items.html">All-In-One PC</a>
                      <li><a href="items.html">Alienware</a></li>
                    </ul>
                  </li>                       
                  <li><a href="contactus.html">Contact</a></li>
                </ul>
              </div>
            </div>

            <!-- Dropdown NavBar -->
            <div class="navis"></div>                  
          </div>
          <div class="col-md-4 col-sm-5">
            <div class="kart-links">
              <a href="login.html">Login</a> 
              <a href="register.html">Signup</a>
              <a data-toggle="modal" href="#shoppingcart"><i class="icon-shopping-cart"></i> 3 Items - $300</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Logo & Navigation ends -->
      
      <!-- Page title -->
      <div class="page-title">
        <div class="container">
          @yield('header')
          <hr />
        </div>
      </div>
      <!-- Page title -->

    <!-- Page content -->
    <div class="page-content blocky">
      <div class="container">
        @yield('content')
       </div>
    </div>
      
    <!-- Recent posts CarouFredSel Starts -->
    <div class="recent-posts blocky">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Section title -->
            <div class="section-title">
              <h4><i class="icon-desktop color"></i> &nbsp;Nuevos productos</h4>
            </div>    

            <div class="row">
              <div class="col-md-12">
                <div class="my_carousel">

                  <div class="carousel_nav pull-right">
                    <!-- Carousel navigation -->
                    <a class="prev" id="car_prev" href="#"><i class="icon-chevron-left"></i></a>
                    <a class="next" id="car_next" href="#"><i class="icon-chevron-right"></i></a>
                  </div>

                  <ul id="carousel_container">
                    <!-- Carousel item -->
                    <li>
                      <a href="#"><img src="img/items/2.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Duis estsum placerat</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                    <li>
                      <a href="#"><img src="img/items/3.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Maecenas estsum odio</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                    <li>
                      <a href="#"><img src="img/items/4.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Proin estsum accumsan</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                    <li>
                      <a href="#"><img src="img/items/5.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Lorem estsum ipsum</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                    <li>
                      <a href="#"><img src="img/items/6.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Praesent estsum massa</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                    <li>
                      <a href="#"><img src="img/items/7.png" alt="" class="img-responsive"/></a>
                      <div class="carousel_caption">
                        <h5><a href="#">Praesent estsum etium</a></h5>
                        <p>Something about the product goes here. Not More than 2 lines.</p>
                        <a href="#" class="btn btn-info btn-sm"><i class="icon-shopping-cart"></i> Buy for $199</a>
                      </div>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Recent posts Ends -->  
      
    <!-- CTA Starts -->
    <div class="blocky">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="cta">
              <div class="row">
                <div class="col-md-8 col-sm-8">
                  <h5><i class="icon-angle-right"></i> Lorem trist iquest <span class="color">siamet diam</span> ipsum dolor sitamt</h5>
                </div>
                <div class="col-md-4 col-sm-4">
                  <div class="cta-buttons pull-right">
                    <a href="#" class="btn btn-info btn-lg">Download</a> &nbsp; <a href="#" class="btn btn-danger btn-lg">Get It Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>               
        </div>
      </div>
    </div>
    <!-- CTA Ends -->
      
    <!-- Footer starts -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <div class="fwidget">
             
              <h4>GeekToysCR</h4>
              <hr />
              <p>Somos una Tienda Virtual y te ofrecemos: Juguetes, Gadgets, Audífonos, etc. Lo que puedas imaginar de tus personajes favoritos al mejor precio!</p>
              <p>Ademas Promociones mensuales! Te ayudamos a consentir a tu Geek interno! #GeekToysCR</p>
                
              <div class="social">
                <a href="https://www.facebook.com/Geektoyscr" class="facebook" target="_black"><i class="icon-facebook"></i></a>
                <a href="https://twitter.com/GeekToysCR" class="twitter" target="_black"><i class="icon-twitter"></i></a>
                <!-- <a href="#" class="google-plus"><i class="icon-google-plus"></i></a>
                 <a href="#" class="linkedin"><i class="icon-linkedin"></i></a>
                 <a href="#" class="pinterest"><i class="icon-pinterest"></i></a> -->
              </div>
             </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="fwidget">
              <h4>Categorías</h4>
              <hr />
              <ul>
                <li><a href="#">Juguetes</a></li>
                <li><a href="#">Electrónicos</a></li>
                <li><a href="#">Figuras de Colección</a></li>
                <li><a href="#">Juegos de Mesa</a></li>
                <li><a href="#">Pedidos</a></li>
              </ul>
            </div>
          </div>        

          <div class="col-md-4 col-sm-4">
            <div class="fwidget">
              <h4>Contáctanos</h4>
              <hr />
              <div class="address">
                <p><i class="icon-home color contact-icon"></i> San Pedro, San Jose, Costa Rica.</p>
                <p><i class="icon-phone color contact-icon"></i> (+506) 4030-9583</p>
                <p><i class="icon-envelope color contact-icon"></i> <a href="mailto:something@gmail.com">ventas@geektoyscr.com</a></p>
              </div>
            </div>
          </div>
        </div>
        <hr />
        <div class="copy text-center">
           Copyright 2014 &copy; - <a href="http://pixelperfectcr.com" target="_black">Pixel Perfect</a>
        </div>
      </div>
    </footer>
    <!-- Footer ends -->
      
    <!-- Scroll to top -->
    <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

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