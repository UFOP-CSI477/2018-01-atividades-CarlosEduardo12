<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inserir Procedimento</title>
</head>
<body>


<form method="post" action="router.php?op=3">

<select name="name">
	<option value="">Selecione</option>
	<!--Estados//-->
	<?php foreach ($lista as $e):?> 
		<option value="<?= $e['id'] ?>"> <?= $e['name'] ?> </option>
	<?php endforeach ?>
	
	
</select>

<label for="price">Preço:</label>
<input type="text" name="price">

<label for="user_id">ID Usuario:</label>
<input type="text" name="user_id">
		
	

<input type="submit" value="Cadstrar">
<input type="reset" value="Limpar">
	
</form>


</body>
</html>