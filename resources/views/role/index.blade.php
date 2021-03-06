@extends('layout.master')
@section('title', 'ROLES')
@section('content')
<div class="panel shadow">
  <div class="inside">

     @include('coustom.message')
 
<table class="table table-hover">
   
  <thead class="bg-info">
    <td colspan="7"><center><label>LISTA DE ROLES </div></label></center></td>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">acceso total</th>
      <CENTER><th colspan="3">ACCION</th></CENTER>
    
  </thead>
  <tbody class="body1">
    <tr>
       @foreach ($roles as $role)
       </tr>
        <th scope="row">{{ $role->id }}</th>
        <td>{{ $role->name }}</td>
        <td>{{ $role->description }}</td>
        <td>{{ $role['full-access'] }}</td>

        
        <td>
         
          <a class="btn btn-success" href="{{ route('role.show',$role->id)}}">Ver</a>
         
        </td>

        <td>
          
          <a class="btn btn-warning" href="{{ route('role.edit',$role->id)}}">Editar</a>
         
        </td>
        
        <td>
          
          <form action="{{ route('role.destroy',$role->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Eliminar</button>
          </form>
        
         </tr>
      @endforeach
   
   
  </tbody>
</table>

    {{ $roles->links() }}
<div class="boton">
  @can('haveaccess','role.create')
<center><a href="{{ route('role.create') }}" role="button" class="btn btn-large btn-info" data-toggle="modal">Crear</a></center>
@endcan
</div>

</div>
  </div>

    
@endsection