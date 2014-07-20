@extends('layouts.base')

@section('title', 'Contáctenos')

@section('page-title')
<!-- Page title -->
<h2><i class="fa fa-envelope-o color"></i> Contáctenos</h2>
<!-- Page title -->
@stop

@section('content')
<div class="contactus ">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-7">
        <div class="cwell">
          <!-- Contact form -->
          <h5>Formulario de contacto</h5>

          <form role="form">
            <div class="form-group">
            <label for="name">Nombre</label>
              <input type="text" class="form-control" id="name" placeholder="Nombre">
            </div>                                    
            <div class="form-group">
              <label for="exampleInputEmail1">Correo electrónico</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Mensaje</label>
              <textarea class="form-control" rows="3" placeholder="Mensaje"></textarea>
            </div>                                      
            <div class="checkbox">
              <label>
                <input type="checkbox"> Importante?
              </label>
            </div>
            <button type="submit" class="btn btn-info">Enviar</button>
            <button type="reset" class="btn btn-default">Restaurar</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-sm-5">
        <div class="cwell">
          <!-- Address section -->
          <h5>Dirección</h5>
          <div class="address">
            <address>
              <!-- Company name -->
              <h6>GeekToysCR.</h6>
              <!-- Address -->
              San Pedro, San Jose, Costa Rica<br>
              <!-- Phone number -->
              <abbr title="Phone">Tel:</abbr> (506) 4030-9583.
            </address>
            <address>
              <!-- Name -->
              <h6>Correo Electrónico</h6>
              <!-- Email -->
              <a href="mailto:#">ventas@geektoyscr.com</a>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop