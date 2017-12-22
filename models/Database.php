<?php  
require_once("Model.php");

class Database extends Model{

	function getDatabases(){
		return $this->queryDB("SHOW DATABASES");
	}

	function getDatabasesWithTables(){
		$dbtab = array();
		$databases = $this->queryDB("SHOW DATABASES");
		foreach ($databases as $database) {
			$dbname = $database["Database"];
			$tables = $this->queryDB("SHOW TABLES FROM $dbname");
			$dbtab[$dbname] = array();
			foreach ($tables as $table) {
				$dbtab[$dbname][] = $table["Tables_in_$dbname"];
			}
		}
		return $dbtab;
	}

	function getCharsets(){
		return $this->queryDB("SELECT * FROM `CHARACTER_SETS` ORDER BY 1", "information_schema");
	}

	function createDatabase($dbname, $charset){
		return $this->queryDB("CREATE DATABASE $dbname CHARACTER SET $charset");
	}

	function dropDatabase($dbname){
		return $this->queryDB("DROP DATABASE $dbname");
	}

}
?>