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
            <a href="https://www.facebook.com/Geektoyscr" class="facebook" target="_black"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/GeekToysCR" class="twitter" target="_black"><i class="fa fa-twitter"></i></a>
            <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
             <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
             <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a> -->
          </div>
         </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="fwidget">
          <h4>Categorías</h4>
          <hr />
          <ul>
            @foreach ($categories as $category)
            <li><a href="{{ route('products', array($category['slug'])) }}"> {{ $category['label'] }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>        

      <div class="col-md-4 col-sm-4">
        <div class="fwidget">
          <h4>Contáctanos</h4>
          <hr />
          <div class="address">
            <p><i class="fa fa-home color contact-icon"></i> San Pedro, San Jose, Costa Rica.</p>
            <p><i class="fa fa-phone color contact-icon"></i> (+506) 4030-9583</p>
            <p><i class="fa fa-envelope color contact-icon"></i> <a href="mailto:something@gmail.com">ventas@geektoyscr.com</a></p>
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