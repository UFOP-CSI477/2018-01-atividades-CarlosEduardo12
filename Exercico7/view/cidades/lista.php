<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Cidades</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Codigo</th>
			<th>Cidade</th>
			<th>Estado</th>
		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['estado_id']?></td>
			<td> <?= $linha['nome']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>