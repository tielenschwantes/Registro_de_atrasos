<h1>Formulário de Registro de Atraso</h1>
<hr>

<form action="/registro" method="post">
{{csrf_field()}}
Matrícula: <input type="integer" name="matricula"> <br>
Motivo do atraso: <input type="text" name="motivo"> <br>
Matéria: <input type="text" name="materia"> <br>
<input type="submit" value="Salvar e imprimir">
</form>