<?php

namespace Controller;

use Model\UserPaciente;
use Model\Geral;
use Model\Procedures;


class UsersController{

	public function listar(){
		//acesso ao modelo
		$users = new UserPaciente();

		//Manipular os dados

		$users = $users->all();
		include './view/usersPaciente/lista.php';
		//Invocar a View
		

	}
		//carregar os dados dos estados
	public function create(){
		//exibir a view
	 $users = new UserPaciente;
	 $lista = $users->all();
		include './view/usersPaciente/create.php';

	}
	 public function store1($request){

	 	
	 	$name = $request['name'];
	 	$email = $request['email'];
	 	$password = $request['password'];
	 	

	 	$userPaciente = new UserPaciente($name, $email, $password);
	 	
	 	$userPaciente->setName($name);
	 	$userPaciente->setEmail($email);
	 	$userPaciente->setPassword($password);
	 	
	 	 
	 	$userPaciente->save();
	 	//redirect

	 	session_start();
	 	$_SESSION['mensagem'] = "Paciente inserida com suceesso!";

	 	//$this->listar();
	 	$this->redir();

	 }
	 private function redir(){
	 	header("Location: http://localhost:8000");
	 	exit();
	 }



	}