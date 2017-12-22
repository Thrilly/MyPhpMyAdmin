<?php  
require_once("Model.php");

class Table extends Model{

	function getTablesByDatabase($dbname){
		return $this->queryDB("SHOW TABLES", $dbname);
	}

	function getColumnsByTable($tname, $dbname){
		return $this->queryDB("DECRIBE ".$tname, $dbname);
	}

	// function getCharsets(){
	// 	return $this->queryDB("SELECT * FROM `CHARACTER_SETS` ORDER BY 1", "information_schema");
	// }

	// function createTable($tablename, $columns, $dbname){
	// 	return $this->queryDB("CREATE DATABASE $dbname CHARACTER SET $charset");
	// }

	function dropTable($tname, $dbname){
		return $this->queryDB("DROP TABLE ".$tname, $dbname);
	}

}
?>