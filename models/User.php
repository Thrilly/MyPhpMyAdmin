<?php 
require_once("Model.php"); 

class User extends Model{

	function login($login, $passwd = ""){
		if ($this->connectDB($login, $passwd) != false) {
			$_SESSION["user"] = array('login' =>  $login, 'passwd' =>  $passwd);
			return true;
		}
		return false;
	}

	function logout(){
		unset($_SESSION["user"]);
	}

	static function getLoggedUser(){
		if (isset($_SESSION["user"])) {
			return $_SESSION["user"];
		}
		return false;
	}
}
?>