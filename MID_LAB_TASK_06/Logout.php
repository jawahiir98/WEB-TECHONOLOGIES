<?php 
	session_start();
	unset($_SESSION['status']);
	header('location: Login_page.php');
?>