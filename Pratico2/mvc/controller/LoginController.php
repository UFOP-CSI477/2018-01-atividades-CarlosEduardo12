<?php

namespace Controller;

use Model\Login;
use Model\Database;

class LoginController  {
	

  	public function login($request) {
  		$nome=$request['usuario'];
		$senha=$request['senha'];

		$login = new Login();
		$sql = $login->select($nome,$senha);

        foreach($sql as $geral){
        	if ($geral['type'] == 1) {
            
            session_start();
            $_SESSION['type'] = $geral['type'];
            $_SESSION['mensagem'] = "Logado como Administrador";
            $this->redir();  
          	}

          	elseif ($geral['type'] == 2) {
           	session_start();
           	$_SESSION['type'] = $geral['type'];
	 		$_SESSION['mensagem'] = "Logado como Operador!";
          	$this->redir();
          	}
          
          	else if($geral['type'] == 3){
            session_start();
           	$_SESSION['type'] = $geral['type'];
	 		$_SESSION['mensagem'] = "Logado como paciente!";
           	$this->redir();


          	}

        }
        
        echo "<h2>" . "Informe um Usuário" . "</h2>";

              
  }




     private function redir(){
	 	header("Location: http://localhost:8000");
	 	exit();
	 }

}
?>
