<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Alunos</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Matricula</th>
			<th>Nome</th>
		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['nome']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>