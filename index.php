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

	case"equipe":
		$vueAAfficher = "views/equipe.php";
	break;

	case"projets":
		$vueAAfficher = "views/projets.php";
	break;

	case"contact":
		$vueAAfficher = "views/contact.php";
	break;

	default:
		$vueAAfficher = "views/home.php";
	break;


}




include_once("layouts/layout.php");
