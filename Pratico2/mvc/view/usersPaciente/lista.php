<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Pacientes</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			

		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['name']?></td>
			<td> <?= $linha['email']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>