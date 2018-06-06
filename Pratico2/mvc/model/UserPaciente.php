<?php

namespace Model;

use Model\Database;

class UserPaciente{

	protected $db = null;

	private $name;
	private $email;
	private $password;
	private $type;
	
	public function __construct(){
		$this->db = Database::getInstance()->getDB();
		$this->id = 0;
	}

	public function __construct2($id, $name, $email, $password, $type){
		$this-> id = $id;
		$this-> name = $name;
		$this-> email = $email;
		$this-> password= $password;
		$this-> type= 3;
	}

	public function __construct3($name, $email, $password, $type){
		$this-> id = 0;
		$this-> name = $name;
		$this-> email = $email;
		$this-> password = $password;
		$this-> type= 3;
	}
	public function __construct4($name, $email, $password){
		$this-> id = 0;
		$this-> name = $name;
		$this-> email = $email;
		$this-> password = $password;
		$this-> type= 3;
	}


	public function setName($name){
		$this->name = $name;
	}
	public function setEmail($email){
		$this->email = $email;
	}

	public function setPassword($password){
		$this->password = $password;
	}

	public function setType($type){
		$this->type = 3;
	}

	public function all(){
		$sql = "SELECT * FROM users ORDER BY id";
		return $this->db->query($sql);

	}


	
	public function save(){
		if ( $this->id == 0){
			$this->insert();
		}else {
			$this->update();
		}
	}

	public function insert(){
		$sql = "INSERT INTO users (name, email, password, type) VALUES ('" .  $this->name . "', '" . $this->email . "', '" . $this->password . "' , " . $this->type . ")";

		$this->db->query($sql);
	
		}	

	public function update(){
		die('update');

	}

	public function delete(){

	}




}