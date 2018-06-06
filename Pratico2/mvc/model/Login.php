<?php

namespace Model;

use Model\Database;


class Login {
  
  protected $db = null;
  
  private $name;
  private $password;

public function __construct() {
    $this->db = Database::getInstance()->getDB();

}

  public function __construct2($name,$password) {
    $this->name = $name;
    $this->password = $password;
  }

  public function setName($name){
		$this->name = $name;
	}
	public function setSenha($senha){
		$this->password = $senha;
	}

	public function select($nome, $senha){
		$sql = "SELECT type FROM users WHERE name = '$nome' AND password = '$senha'";
    	return $this->db->query($sql);
	}

}

