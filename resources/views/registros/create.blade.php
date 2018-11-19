<center><img src="http://moodle.ibiruba.ifrs.edu.br/pluginfile.php/1/theme_ifrs_academi/logo/1503493340/Ibiruba.jpg" class="img-fluid" alt="Responsive image" width="500" height="140"></center>

<center><h1>Formulário de Registro de Atraso</h1>
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

<h3><form action="/registros" method="post">
{{csrf_field()}}
Motivo do atraso: <input type="text" name="motivo"> <br><br>
Matéria: <input type="text" name="materia"> <br><br>
<input type="submit" value="Salvar e imprimir">
</form
</center></h3>