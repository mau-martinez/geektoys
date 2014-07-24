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
         <h1><a href="{{ URL::route('home') }}">GeekToys</a></h1>
        </div>
      </div>
      <div class="col-md-6 col-sm-5">
        <!-- Navigation menu -->
        <div class="navi">
          <div id="ddtopmenubar" class="mattblackmenu">
            <ul>
              <li><a href="{{ URL::route('home') }}">Inicio</a></li>
              <!--
              <li><a href="#" rel="ddsubmenu1">Cuenta</a>
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
              <li><a href="#" rel="ddsubmenu1">Páginas</a>
                <ul id="ddsubmenu1" class="ddsubmenustyle">
                  <li><a href="404.html">404</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="careers.html">Careers</a>
                  <li><a href="support.html">Support</a></li>
                  <li><a href="aboutus.html">About</a></li>
                </ul>
              </li>
              -->
              <li><a href="#" rel="ddsubmenu1">Categorías</a>
                <ul id="ddsubmenu1" class="ddsubmenustyle">
                  <li><a href="items.html">Juguetes</a></li>
                  <li><a href="items.html">Electrónicos</a></li>
                  <li><a href="items.html">Figuras</a></li>
                  <li><a href="items.html">Juegos de mesa</a>
                  <li><a href="items.html">Pedidos</a></li>
                </ul>
              </li>                       
              <li><a href="{{ URL::route('contact') }}">Contáctenos</a></li>
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
          <a data-toggle="modal" href="#shoppingcart"><i class="fa fa-shopping-cart"></i> 3 Items - $300</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Logo & Navigation ends -->