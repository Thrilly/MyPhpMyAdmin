<?php
include("config.php");
session_start();

if ((isset($_GET['controller']) && isset($_GET['action']))) {
	$controller = $_GET["controller"];  
	$action = $_GET["action"];  
} 
// elseif(isset($_GET['url'])) {
// 	$datas = explode("/", $_GET['url']);
// 	$controller = $datas[1];
// 	$action = $datas[2];
// } 
else {
	$controller = "index";
	$action = "index";
}
$controller .= "Controller";
$action .= "Action";

if (file_exists("controllers/$controller.php")){
	require_once("controllers/$controller.php");
	if (class_exists($controller) && method_exists($controller, $action)){
		$c = new $controller();
		$c->$action();
	}else{
		require_once("controllers/indexController.php");
		$c = new indexController();
		$c->httpErrorAction();
	}
}else{
	require_once("controllers/indexController.php");
	$c = new indexController();
	$c->httpErrorAction();
}


?>