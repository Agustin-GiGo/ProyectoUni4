@extends('layout.master')
@section('title', 'Proyecto')
@section('content')

<div>
  <ul class="nav navbar-nav navbar-right">
    <a href="{{ url('/register') }}"><button class="btn-info btn-lg active">Registro</button></a>
    </ul>

<ul class="nav navbar-nav navbar-right">
    <a href="{{ url('/login') }}"><button class="btn-success btn-lg active">Iniciar Sesion</button></a>
    </ul>
</ul>
</div>

<center><h1 class="text-warning">Lo que tu has seleccionado anteriormente:</h1></center>
    
    <div >
            <ul class="nav ">
                @forelse($categorias as $categoria)
                 @if($categoria->subcategoria=='no') 
 <div class="p-4 ">
                <div class="bg-dark card mtop16" style="width: 35rem;">
                  <img class=" card-img-top" src="{{ asset('storage').'/'.$categoria->imagen}}" {{--alt="Card image cap" width="700"--}}>
                 <div class="card-body">
                <h5 class="card-title">{{ $categoria->nombre }}</h5>
    <p class="card-text">{{ $categoria->descripcion }}</p>
   
    <center><a href="{{ url('/subcat/'.$categoria->id.'/subcat') }}" class="btn btn-warning text-dark">Ver Subcategorias</a></center>

  </div>
   @endif
  </div>
</div>   
     @empty  
     <br>
      <center><h3 class="text-danger bg-white">No existen Caregorias</h3></center>          
                @endforelse

      </center>   
      </ul>
            @if(Auth::check()<=0)
            <div class="wrapper bg-light text-white"> {{--pagina en blanco y negro--}}
                <nav class="shadow">
                  <div class="collapse navbar-collapse">
                       <center><ul class="nav navbar-nav navbar-left">
                       <br>
                        <a href="{{ url('/')}}"><h4>Lista de Categoria</h4></a>
                         <a href="{{ url('/listaProdu')}}"><h4>Lista de Productos</h4></a>
                       </ul></center>
            
                        
                </div>
              </nav>
              @endif
              
@endsection