@extends('layouts.base')

@section('title', 'La página solicitada no existe')

@section('content')
<div class="error-block blocky text-center">
  <div class="container">
    <h2>404<span class="color">!</span></h2>
    <p class="error-para">La página solicitada no existe.</p>
    <div class="sep-bor"></div>
    <form class="form-inline" role="form">
      <div class="form-group">
        <input type="email" class="form-control" id="search" placeholder="Buscar...">
      </div>
      <button type="submit" class="btn btn-info">Buscar</button>
    </form>

    <div class="link-list">
      <h5>Take a look around our site</h5>
      <a href="#">Home</a> <a href="#">About us</a> <a href="#">Support</a> <a href="#">Contact Us</a> <a href="#">Disclaimer</a>
    </div>

    <div class="sep-bor"></div>
  </div>
</div>
@stop