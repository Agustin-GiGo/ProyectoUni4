@extends('layout.master')
@section('title', 'Crear')
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
  <div class="inside">
    <div class="card-body">
  
    <form action="{{ url('/categoria') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <center><h3 class="text-success">Nueva Categoria</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="nombre">
  </div>
  <div class="form-group">
    <center><label  class="text-success "for="exampleFormControlInput1">Descripcion</label></center> 
    <input type="text" name="descripcion" class="form-control" id="descripcion">
  </div>
  <div class="form-group">
    <center><label class="text-success" for="exampleFormControlInput1">Imagen</label></center>
   <center> <input type="file" name="imagen" class="form-control" id="imagen"></center>
  </div>

  
  <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
  
</form>
<a href="{{ url('/categoria') }}"><button class="btn btn-info">Regresar</button></a>
</div>
  

@endsection