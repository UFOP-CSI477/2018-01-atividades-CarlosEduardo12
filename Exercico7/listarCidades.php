<?php

//Conexão - configuração
$mysql = 'mysql:localhost;dbname=academico';
$sqlite = 'sqlite:academico.sqlite';

$dbusername = 'sistemaweb';
$dbpassaword = '123456';
//$db = new PDO($mysql, $dbusername, $dbpassaword);
$db = new PDO($sqlite);



var_dump($db);

//modelo

$cidades = $db->query("SELECT * FROM cidades ORDER by nome");

//var_dump($alunos);

//while ( $linha = $alunos->fetch()){
//	var_dump($linha);
//	echo "<br>";
//	echo $linha["id"];

//}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Cidades</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>codigo</th>
			<th>Cidade</th>
			<th>Estado</th>
		</tr>


		<?php foreach($cidade as $cidade): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['nome']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>