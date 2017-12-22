<?php  
require("Controller.php");

class tableController extends Controller
{
	public $dir_view = "table";

	function indexAction(){

		$this->loadModel("Table");
		if (isset($_GET["dbname"])) {
			$dbname = $_GET["dbname"];
			$tables = $this->Table->getTablesByDatabase($dbname);
			$vars = array(
				'dbname' => $dbname,
				'tables' => $tables);
			$this->setData($vars);
			$this->render($this->dir_view, "tables");
		} else {
			$vars = array(
				'infobar' => array(
					'bg' => 'danger',
					'fa' => 'exclamation-triangle',
					'msg' => 'ERROR : Cannot show tables, argument missed'));
			$this->setData($vars);
			$this->render("index", "index");
		}
		
	}

	function showColumnsAction(){

	}

}
?>