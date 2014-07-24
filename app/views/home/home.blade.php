@section('title', 'Home')

@section('content')
<div class="hero">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- Catchy title -->
      <h3>Bienvenid@s a <span class="color">GeekToys</span></h3>
      <p>Somos una Tienda Virtual y te ofrecemos: Juguetes, Gadgets, Audífonos, etc. Lo que puedas imaginar de tus personajes favoritos al mejor precio! <br>
       Ademas promociones mensuales! Te ayudamos a consentir a tu Geek interno! #GeekToysCR</p>
     </div>
   </div>
   <div class="sep-bor"></div>
 </div>
</div>

<!-- Recent posts CarouFredSel Starts -->
<div class="recent-posts blocky">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Section title -->
        <div class="section-title">
          <h4><i class="fa fa-desktop color"></i> &nbsp;Nuevos productos</h4>
        </div>    

        <div class="row">
          <div class="col-md-12">
            <div class="my_carousel">

              <div class="carousel_nav pull-right">
                <!-- Carousel navigation -->
                <a class="prev" id="car_prev" href="#"><i class="fa fa-chevron-left"></i></a>
                <a class="next" id="car_next" href="#"><i class="fa fa-chevron-right"></i></a>
              </div>

              <ul id="carousel_container">
                <!-- Carousel item -->
                <li>
                  <a href="#"><img src="img/items/2.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Duis estsum placerat</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
                  </div>
                </li>
                <li>
                  <a href="#"><img src="img/items/3.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Maecenas estsum odio</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
                  </div>
                </li>
                <li>
                  <a href="#"><img src="img/items/4.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Proin estsum accumsan</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
                  </div>
                </li>
                <li>
                  <a href="#"><img src="img/items/5.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Lorem estsum ipsum</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
                  </div>
                </li>
                <li>
                  <a href="#"><img src="img/items/6.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Praesent estsum massa</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
                  </div>
                </li>
                <li>
                  <a href="#"><img src="img/items/7.png" alt="" class="img-responsive"/></a>
                  <div class="carousel_caption">
                    <h5><a href="#">Praesent estsum etium</a></h5>
                    <p>Something about the product goes here. Not More than 2 lines.</p>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-shopping-cart"></i> Buy for $199</a>
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
@stop