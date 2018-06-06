<?php

namespace Controller;

use Model\Geral;
use Model\Login;

class GeralController {
	
	
	public function listar(){
	
		//acesso ao modelo
		$nome = new Geral();

		//Manipular os dados

		$lista = $nome->all();

		//Invocar a View
		include './view/geral/lista.php';

	}

}