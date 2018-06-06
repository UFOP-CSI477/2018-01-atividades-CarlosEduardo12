<?php

namespace Controller;

use Model\Geral;
use Model\Procedures;

class ProceduresController{

	public function listar(){
		//acesso ao modelo
		$procedures = new Procedures();

		//Manipular os dados

		$procedures = $procedures->all();
		include './view/procedures/lista.php';
		//Invocar a View
		

	}

	
//carregar os dados dos estados
	public function create(){
		//exibir a view
	 $procedures = new Procedures;
	 $lista = $procedures->all();
		include './view/procedures/create.php';

	}

	public function deletar(){
		//exibir a view
	 $procedures = new Procedures;
	 $lista = $procedures->all();
		include './view/procedures/delete.php';

	}

	public function atualizar(){
		//exibir a view
	 $procedures = new Procedures;
	 $lista = $procedures->all();
		include './view/procedures/update.php';

	}
	 public function store($request){
	 	$name = $request ['name'];
	 	$price = $request['price'];
	 	$user_id = $request['user_id'];

	 	$procedures = new Procedures($name, $price, $user_id);
	 	
	 	$procedures->setName($name);
	 	$procedures->setPrice($price);
	 	$procedures->setUserId($user_id);
	 	 
	 	$procedures->save();
	 	//redirect

	 	session_start();
	 	$_SESSION['mensagem'] = "Procedimento inserida com sucesso!";

	 	//$this->listar();
	 	$this->redir();

	 }

	 public function update($request){
	 	
	 	$name = $request['name'];
	 	$price = $request['price'];

	 	$up = new Procedures($name, $price);

	 	$up->setName($name);
	 	$up->setPrice($price);

	 	$up->update();
		include './view/procedures/update.php';
		
	 		//redirect

	 	$_SESSION['mensagem'] = "Procedimento Atualizado com sucesso!";

	 	//$this->listar();
	 	$this->redir();
	 }

	  public function delete($request){
	 	$name = $request['name'];

	 	$del = new Procedures($name, $price);

	 	$del->setName($name);
	 	
	 	$del->update();

	 		//redirect

	 	session_start();
	 	$_SESSION['mensagem'] = "Procedimento deletado com sucesso!";

	 	//$this->listar();
	 	$this->redir();
	 }


	 private function redir(){
	 	header("Location: http://localhost:8000");
	 	exit();
	 }



	}