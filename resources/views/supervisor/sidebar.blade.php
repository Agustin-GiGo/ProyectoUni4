<div class="{{--sidebar--}} shadow bg-success">
	<div class="section-top bg-success">
		<div class="logo bg-success">
			 <img src="{{ asset('storage').'/'.Auth::user()->imagen}}" alt="" width="100">
		</div>
		<div class="card bg-success">
			<span class="subttitle bg-success">Info:</span>
			<div class="name bg-success">
				{{ Auth::user()->name }} {{ Auth::user()->apellido }} 
				<a href="{{ url('/logout') }}" data-toggle="tooltip 	" data-placement="top" title="Salir"><i class="fas fa-sign-out-alt"></i></a>
			</div>
			<div class="email ">{{ Auth::user()->email }}</div>
			
		</div>

	</div>
	<div class="main bg-success">
		<ul class="{{--list-group-item list-group-item-dark"--}}> {{--COLOR VERDE BOTON BUSCAR--}}
			<form action="buscar" method="POST">
			@csrf
				<input type="text" name="cadena" class="form-control"  placeholder="Nombre del articulo">
			<center><input type="submit" class="btn btn-success" value="buscar"></center>
			</form>
		</ul>	
		<ul>
			@can('haveaccess','tablero.view')   {{--ADMINLTE | Iconos de la lista--}}
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/tablero')}}"><i class="{{--fas fa-th-list--}}"></i>Tablero</a></li>
			@endcan

			<li class="list-group-item list-group-item-primary"><a class="" href="{{ url('/') }}"><i class="{{--fas fa-th-list--}}"></i>Lista de Categoria</a></li>
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/listaProdu') }}"><i class="{{--fas fa-th-list--}}"></i>Lista de Productos</a></li>
			
				@can('haveaccess','categoria.index')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/categoria')}}"><i class=""></i>Agregar Categoria</a></i>
				@endcan
				@can('haveaccess','producto.index')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/producto')}}"><i class=""></i>Productos Registrado</a></i>
				@endcan
					@can('haveaccess','revisar.index')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/Revisiones') }}"><i class=""></i>Productos por Revisar</a></li>
			@endcan

			@can('haveaccess','aceptados.index')
				<li class="list-group-item list-group-item-primary"><a href="{{ url('/aceptados') }}"><i class=""></i>Productos por Concesionar</a></li>
				@endcan

				@can('haveaccess','comentario.index')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/comentario') }}"><i class=""></i>Moderaciones</a></li>
				@endcan

				@can('haveaccess','pregunta.create')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/pregunta') }}"><i class=""></i>Preguntas Realizadas</a></li>
				@endcan



				@can('haveaccess','user.index')
			<li class="list-group-item list-group-item-primary"><a href="{{ route('user.index')}}"><i class=""></i>Usuarios Registrado</a></i>
				@endcan
			 @can('haveaccess','roles.view')
			<li class="list-group-item list-group-item-primary"><a href="{{ route('role.index')}}"><i class=""></i>Lista de Roles</a></i>
				@endcan
			 @can('haveaccess','historial.view')
			<li class="list-group-item list-group-item-primary"><a href="{{ url('/usuarios')}}"><i class=""></i>historial del vendedor</a></i>
				@endcan

			<li class="list-group-item list-group-item-primary"><a href="{{ url('/Productos')}}"><i class=""></i>kardex de un producto</a></i>
		</ul>
	</div>
	
</div>