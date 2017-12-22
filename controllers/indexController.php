<?php  
require ("Controller.php");

class indexController extends Controller
{
	public $dir_view = "index";
	
	function indexAction(){	
		$this->render($this->dir_view, "index");
	}

	function httpErrorAction(){	
		$this->render($this->dir_view, "httperror");
	}

	function loginAction(){
		$this->render($this->dir_view, "login");
	}

	function addDatabaseFormAction(){
		$this->loadModel("Database");
		$charsets = $this->Database->getCharsets();
		$vars = array(
				'charsets' => $charsets);
		$this->setData($vars);
		$this->render("databases");
	}

	function loginProcessAction(){
		$this->loadModel("User");
		$l = $_POST["login"];

		if (isset($_POST["passwd"])) {
			$p = $_POST["passwd"];
		}else{
			$p = "";
		}
		if ($this->User->login($l, $p)) {
			$this->__construct();
			$vars = array(
				'infobar' => array(
					'bg' => 'success', 
					'fa' => 'check',
					'msg' => "You are logged with <i>$l</i> account"));
			$this->setData($vars);
			$this->indexAction();
		}else{
			$vars = array(
				'infobar' => array(
					'bg' => 'danger', 
					'fa' => 'exclamation-triangle',
					'msg' => 'Wrong login or password'));
			$this->setData($vars);
			$this->loginAction();
		}
	}

	function logoutProcessAction(){
		$this->loadModel("User");
		$this->User->logout();
		$vars = array(
			'infobar' => array(
				'bg' => 'primary', 
				'fa' => 'exclamation-circle',
				'msg' => 'You have been logged out'));
		$this->setData($vars);
		$this->loginAction();
	}
}
?>