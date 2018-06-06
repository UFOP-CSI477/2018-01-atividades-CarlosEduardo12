<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Atualizar Procedimento</title>
</head>
<body>


<form method="post" action="router.php?op=10">

<select name="name">
	<option value="">Nome do Exame:</option>
	<!--Estados//-->
	<?php foreach ($lista as $e):?> 
		<option value="<?= $e['id'] ?>"> <?= $e['name'] ?> </option>
	<?php endforeach ?>
	
	
</select>

<label for="price">Preço:</label>
<input type="text" name="price">
	

<input type="submit" value="Cadstrar">
<input type="reset" value="Limpar">
	
</form>


</body>
</html>