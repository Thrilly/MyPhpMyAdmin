<?php  
require ("Controller.php");

class databaseController extends Controller
{
	public $dir_view = "database";
	function __construct(){
		parent::__construct();
		$chs = $this->Database->getCharsets();
		$vars = array('charsets' => $chs);
		$this->setData($vars);
	}

	function indexAction()
	{	
		$this->render("index", "index");
	}

	function createDatabaseFormAction()
	{
		$this->render($this->dir_view, "databases");
	}

	function createDatabaseAction()
	{
		if (isset($_POST["dbname"])) {
			$this->loadModel("Database");
			if ($this->Database->createDatabase($_POST["dbname"], $_POST["charset"])){
				$vars = array(
				'infobar' => array(
					'bg' => 'success',
					'fa' => 'check',
					'msg' => "Database ".$_POST['dbname']." was add sucessfully"));
				$this->setData($vars);
				$this->__construct();
				$this->indexAction();
			}else{
				$vars = array(
				'infobar' => array(
					'bg' => 'danger',
					'fa' => 'exclamation-triangle',
					'msg' => "ERROR : Database cannot be added (check if database's name already exist)"));
				$this->setData($vars);
				$this->__construct();
				$this->createDatabaseFormAction();
			}
		}else{
			$vars = array(
			'infobar' => array(
				'bg' => 'danger',
				'fa' => 'exclamation-triangle',
				'msg' => "ERROR : No datas posted"));
			$this->setData($vars);
			$this->createDatabaseFormAction();
		}
		
	}

	function dropDatabaseProcessAction()
	{
		if (isset($_GET["dbname"])) {
			$this->loadModel("Database");
			if ($this->Database->dropDatabase($_GET["dbname"])){
				$vars = array(
				'infobar' => array(
					'bg' => 'success',
					'fa' => 'check',
					'msg' => "Database was deleted sucessfully"));
				$this->setData($vars);
				$this->__construct();
				$this->indexAction();
			}else{
				$vars = array(
				'infobar' => array(
					'bg' => 'danger',
					'fa' => 'exclamation-triangle',
					'msg' => "ERROR : Database cannot be deleted (probably already deleted)"));
				$this->setData($vars);
				$this->__construct();
				$this->indexAction();
			}
		}else{
			$vars = array(
			'infobar' => array(
				'bg' => 'danger',
				'fa' => 'exclamation-triangle',
				'msg' => "ERROR : Cannot get datas, database name is expected"));
			$this->setData($vars);
			$this->indexAction();
		}
	}
}
?>