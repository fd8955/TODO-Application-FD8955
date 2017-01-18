<?php


# Global settings
	$dbHost = 'localhost';
	$dbName = 'todo';
	$dbUsername = 'root';
	$dbPassword = '';

session_start();

$_SESSION['user_id'] = 1;

	$db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . '', $dbUsername, $dbPassword);
	

if(!isset($_SESSION['user_id'])) 
{
	die("You are not signed in.");	
	
}


?>