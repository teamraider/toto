<?php
session_start();//permet de gérer les sessions utilisateurs.
include_once ('class/class_annonce.php');
include_once ('database/data.php');
include_once ('fonction.php');

	//print_r($_GET);
	//print_r($_POST);

	
	//Menu en ajax JQuery
	
	switch($_POST['action']) {
			case 'home':
			include ('views/corpsHome.php');
			break;

			case 'contact':
			include ('views/corpsContact.php');
			break;
	};		

	
?>
