@extends('layouts.app')

@section('content')
<p class="h1">Lista de Atrasos</p>

  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
  <div class="container">
      <div class="alert alert-success">
        {{\Session::get('success')}}
      </div>
  </div>
  @endif

<!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($listaRegistros as $registro)
	<h3>{{$registro->data}}</h3>
	<p>{{\Carbon\Carbon::parse($registro->motivo)}}</p>
	<p>{{$registro->materia}}</p>
	<br>
@endforeach
<br>

@auth
  <p><a href="/registros/create">Criar novo registro</a></p>
@endauth



@endsection
