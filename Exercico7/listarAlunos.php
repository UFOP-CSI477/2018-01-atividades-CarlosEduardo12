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

$alunos = $db->query("SELECT * FROM alunos ORDER by nome");

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
	<title>Lista de Alunos</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Matricula</th>
			<th>Nome</th>
		</tr>


		<?php foreach($alunos as $linha): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['nome']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>