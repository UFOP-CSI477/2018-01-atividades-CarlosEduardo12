 <?php

 namespace view;

use Model\Database;
use Model\Login;


         foreach($lista as $geral){
           if ($geral['type'] == 1) {
            
            session_start();
            $_SESSION['type'] = $geral['type'];
            header("Location: http://localhost:8000");  
          }

          elseif ($geral['type'] == 2) {
           session_start();
           $_SESSION['type'] = $geral['type'];
          header("Location: http://localhost:8000"); 
          }
          
          else if($geral['type'] == 3){
            session_start();
           $_SESSION['type'] = $geral['type'];
           header("Location: http://localhost:8000");
          }

          

         }
          $tag;
          $tag="Não foi possível fazer o loguin senha ou usuário inválidos.\n";
          echo nl2br($tag);
          
          $tag ="Favor tentar logar novamente.\n";
          echo nl2br($tag);
           


        ?>