

@extends('master')
<div class="container">
<div class="row">
<h1 class="col-md-12">Crear Nuevo Cliente</h1>
<div class="col-md-12">
<form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Nombres">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Apellidos">
    </div>
  </div>
</form>

  <form>
  <div class="form-group">
    <input required type="text" class="form-control" placeholder="Telefono del cliente" minlenght=9 maxlength=9>

  </div>
  </form>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
</div>
</div>
</div>

@section('Lista')
<div class="links">
    <a href="http://localhost/proyectos%20capa/lolocash/lolocash/server.php/lista">Ver Lista de Clientes</a>
</div>
@endsection