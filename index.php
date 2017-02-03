<?php


include_once('library/PDOFactory.php');


$pdo = PDOFactory::getMysqlConnection();


if (isset($_REQUEST['action'])) {
	$action = $_REQUEST['action'];
} else {
	$action = null;
}


switch($action){

	case"home":
		$vueAAfficher = "views/home.php";
	break;

	default:
		$vueAAfficher = "views/home.php";
	break;


}




include_once("layouts/layout.php");
