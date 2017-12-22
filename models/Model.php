<?php 
class Model
{
	
	function connectDB($login, $passwd, $dbname = NULL)
	{
		if (!is_null($dbname)) {
			return @mysqli_connect('p:'.DB_HOST, $login, $passwd, $dbname);
		}
		return @mysqli_connect('p:'.DB_HOST, $login, $passwd);
	}

	function queryDB($query, $dbname = NULL)
	{
		if (isset($_SESSION["user"])) {
			return @mysqli_query($this->connectDB($_SESSION["user"]["login"], $_SESSION["user"]["passwd"], $dbname), $query);
		}
		return false;
	}
}
?>