@extends('layouts.app')

<center><img src="http://moodle.ibiruba.ifrs.edu.br/pluginfile.php/1/theme_ifrs_academi/logo/1503493340/Ibiruba.jpg" class="img-fluid" alt="Responsive image" width="500" height="100"></center>

@section('content')
<center><p class="h1">Lista de Atrasos</p>

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


<table class="table">
<thead>
<tr><th>Data</th><th>Matéria</th><th>Motivo</th><th>Aluno</th></tr>
</thead>
<tbody>
@foreach($listaRegistros as $registro)
	<tr>
	  <td>{{\Carbon\Carbon::parse($registro->datahoraatraso)->format('d/m/Y h:m')}}</td>
	  <td>{{$registro->materia}}</td>
    <td>{{$registro->motivo}}</td>
    <td></td>
	</tr> 
@endforeach
</tbody>
</table>


<br>

@auth
  <h4><a href="/registros/create">Criar novo registro</a></h4>
@endauth
</center>


@endsection
