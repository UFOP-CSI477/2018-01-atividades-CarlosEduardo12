<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Gestão de Pacientes</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

  </head>
  <body>
  
    <?php

          session_start();
          if ( isset($_SESSION['mensagem']) ) {
             echo "<h2>" . $_SESSION['mensagem'] . "</h2>";
            
          }

    ?>  
         
    <div class="row">
      
      <div class="col-md-2">
            
        <h2>Menu</h2>

          <style>
            .mesmo-tamanho {
            width: 70%;
            white-space: normal;
            }
          </style>



          <a href="router.php?op=1">
            <button type="button" class="btn mesmo-tamanho">Area Geral</button>
          </a>    

          <a href="router.php?op=8">
            <button type="button" class="btn btn mesmo-tamanho">Administradores</button>
          </a>

          <a href="router.php?op=4">
            <button type="button" class="btn btn mesmo-tamanho">Paciente</button>
          </a>
        

      </div>

      <div class="col-md-8 jumbotron">
        <h1 class="text-center"> Central do paciente</h1>
       
      </div>

      <div class="col-md-2">
        <h3>Login:</h3>

        <form method="post" action="router.php?op=6">
          
            <div>
              <h4>Faça login no sistema</h4>
            </div>
            <div>
              <input type="text" placeholder="Nome de usuário" name="usuario">
              <br />
              <input type="password" placeholder="Senha" name="senha">
                            
              <input type="submit"  value="Login">
            <a href="router.php?op=7">
            <input type="button" value="deslogar">
          </a>

            </div>
        </form>
      
         
      </div>
        

    </div>  
 
  </body>
</html>
  