<?php  
require_once("Controller.php");

class tableController extends Controller
{
	public $dir_view = "table";

	function indexAction(){

		$this->loadModel("Table");
		if (isset($_GET["dbname"])) {
			$tables = $this->Table->getTablesByDatabase($_GET["dbname"]);
			$vars = array(
				'selected_db' => $_GET["dbname"],
				'tables_tab' => $tables);
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
		$this->loadModel("Table");
		if (isset($_GET["dbname"]) && isset($_GET["tabname"])) {
			$tables = $this->Table->getColumnsByTable($_GET["tabname"], $_GET["dbname"]);
			$vars = array(
				'selected_db' => $_GET["dbname"],
				'selected_tab' => $_GET["tabname"],
				'columns' => $culumns);
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

}
?>