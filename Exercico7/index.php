<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestão de Pacientes</title>
    <link rel="stylesheet" type="text/css" href="./css/BootStrap.css">
  </head>
  <body>
  
 <?php
      session_start();
      if ( isset($_SESSION['mensagem']) ) {
        echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
        unset($_SESSION['mensagem']);
      }
    ?>   

<div class="row">
	
	
	<div class="col-md-2">
		  
		<p>Menu</p>
		
		<a href="router.php?op=1">
		<button type="button" class="btn">Listar aluno</button>
		</a>
		 <a href="router.php?op=2">
 		<button type="button" class="btn btn-primary">Inserir cidade</button>
 		</a>
 		<a href="router.php?op=4">
		<button type="button" class="btn btn-primary">Listar cidade</button>
		</a>
	</div>
	

</div>  
 
   </body>
</html>
