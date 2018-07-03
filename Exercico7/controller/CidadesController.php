<?php

namespace Controller;

use Model\Cidade;
use Model\Estado;

class CidadesController{

	public function listar(){
		//acesso ao modelo
		$cidade = new Cidade();

		//Manipular os dados

		$cidade = $cidade->all();
		include './view/cidades/lista.php';
		//Invocar a View
		

	}

	
//carregar os dados dos estados
	public function create(){
		//exibir a view
	 $estado = new Estado;
	 $lista = $estado->all();
		include './view/cidades/create.php';

	}
	 public function store($request){
	 	$nome = $request ['nome'];
	 	$estado_id = $request['estado_id'];

	 	$cidade = new Cidade(); 
	 	$cidade->setNome($nome);
	 	$cidade->setEstadoId($estado_id);
	 	$cidade->save();
	 	//redirect

	 	session_start();
	 	$_SESSION['mensagem'] = "Cidade inserida com suceesso!";

	 	//$this->listar();
	 	$this->redir();

	 }
	 private function redir(){
	 	header("Location: http://localhost:8000");
	 	exit();
	 }



	}