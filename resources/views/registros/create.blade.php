<h1>Formulário de Registro de Atraso</h1>
<hr>

@if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/registro" method="post">
{{csrf_field()}}
Motivo do atraso: <input type="text" name="motivo"> <br>
Matéria: <input type="text" name="materia"> <br>
<input type="submit" value="Salvar e imprimir">
</form>