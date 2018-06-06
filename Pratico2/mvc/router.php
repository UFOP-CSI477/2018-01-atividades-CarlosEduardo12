<?php

// Includes - framework

include './model/Database.php';
include './model/Geral.php';
include './model/Procedures.php';
include './model/UserPaciente.php';
include './model/Login.php';
include './controller/GeralController.php';
include './controller/ProceduresController.php';
include './controller/UsersController.php';
include './controller/LoginController.php';
include './controller/AdmController.php';
include './controller/PacienteController.php';


// Tratamento das rotas

use Controller\GeralController;
use Controller\ProceduresController;
use Controller\UsersController;
use Controller\LoginController;
use Controller\AdmController;
use Controller\PacienteController;


session_start();
$op = $_GET['op'];


// Definição das rotas
if ($op == 1  ){
	$geralController = new GeralController;
	$geralController->listar();

} else if ( $op == 2 && $_SESSION['type']==1 ){
	$proceduresController = new ProceduresController;
	$proceduresController -> create();
	

} else if ( $op == 3 && $_SESSION['type']==1){
	$proceduresController = new ProceduresController;
	$proceduresController -> store($_POST);

}else if ( $op == 4){
	$usersPaciente = new PacienteController;
	$usersPaciente -> teste();

}else if ( $op == 5)
{
	$usersController = new UsersController;
	$usersController -> store1($_POST);

}else if ( $op == 6){
	
	$loginController = new LoginController;
	$loginController -> login($_POST);

}else if ( $op == 7){
	
	session_destroy();
	header("Location: http://localhost:8000");

}else if ( $op == 8 && $_SESSION['type']==1){
	
	$AdmController = new AdmController;
	$AdmController -> teste();
	
}else if ( $op == 9 && ($_SESSION['type']==1 || $_SESSION['type']==2 || $_SESSION['type']==3) ){
	
	$proceduresController = new ProceduresController;
	$proceduresController -> atualizar();
}else if ( $op == 10 &&($_SESSION['type']==1 || $_SESSION['type']==2 || $_SESSION['type']==3)){
	
	$proceduresController = new ProceduresController;
	$proceduresController -> update($_POST);

}else if ( $op == 11 && $_SESSION['type']==1 ){
	
	$proceduresController = new ProceduresController;
	$proceduresController -> deletar();

}else if ( $op == 12 && $_SESSION['type']==1){
	
	$proceduresController = new ProceduresController;
	$proceduresController -> delete($_POST);
}else if ( $op == 13 && ($_SESSION['type']==1 || $_SESSION['type']==2 || $_SESSION['type']==3)){
	
	$usersController = new UsersController;
	$usersController -> create();
}
else
echo "<h2>" . "Usuário sem Permissão" . "</h2>";


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
	<div class="col-md-2">

<body>
<a href="javascript:history.back()">
	
<input type="button" name="voltar" value="voltar">
</a>
</div>
</body>
</html>