<?php  

	class Controller {

		public $vars = array();

		function __construct(){
			$this->loadModel("Database");
			$dbswt = $this->Database->getDatabasesWithTables();
			$vars = array('databasesWithTables' => $dbswt);
			$this->setData($vars);
		}

		public function setData($datas){
			$this->vars = array_merge($this->vars, $datas);
		}

		public function render($dir, $view){
			$this->loadModel("User");
			$user = User::getLoggedUser();
			$vars = array('loggedUser' => $user);
			$this->setData($vars);
			extract($this->vars);
			require(ROOT_DIR."/views/inc/_header.php");
			if ($user) {
				require(ROOT_DIR."/views/inc/_navsidebar.php");
				require(ROOT_DIR."/views/$dir/$view.php");
				require(ROOT_DIR."/views/inc/_footer.php");
			}else{
				require(ROOT_DIR."/views/index/login.php");
			}
			require(ROOT_DIR."/views/inc/_scripts.php");
		}

		public function loadModel($name){
			require_once(ROOT_DIR."/models/$name.php");
			$this->$name = new $name();
		}
	}
?>