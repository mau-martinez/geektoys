@extends('layouts.master')

@section('title', 'Desarrollo')

@section('page-title')
<h2><i class="fa fa-rocket color"></i> Desarrollo</h2>
@stop

@section('content')
<div class="section-title">
  <h4><i class="fa fa-linux color"></i> Server</h4>
</div>
<table class="table table-striped table-hover">
  <tr>
    <th class="col-xs-3">Propiedad</th>
    <th class="col-xs-9">Valor</th>
  </tr>
  <tr>
    <td><b>Nombre del servidor:</b></td>
    <td>{{ gethostname() }}</td>
  </tr>
</table>

<div class="section-title">
  <h4><i class="fa fa-gear color"></i> PHP</h4>
</div>
<table class="table table-striped table-hover">
  <tr>
    <th class="col-xs-3">Propiedad</th>
    <th class="col-xs-9">Valor</th>
  </tr>
  <tr>
    <td><b>Versión PHP:</b></td>
    <td>{{ phpversion() }}</td>
  </tr>
  <tr>
    <td><b>Archivo php.ini:</b></td>
    <td>{{ php_ini_loaded_file() }}</td>
  </tr>
</table>

<div class="section-title">
  <h4><i class="fa fa-wrench color"></i> Laravel</h4>
</div>
<table class="table table-striped table-hover">
  <tr>
    <th class="col-xs-3">Propiedad</th>
    <th class="col-xs-9">Valor</th>
  </tr>
  <tr>
    <td><b>Ambiente:</b></td>
    <td>{{ App::environment(); }} (production|local)</td>
  </tr>
</table>
@stop