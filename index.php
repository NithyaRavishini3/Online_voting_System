<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($conn);

?>

