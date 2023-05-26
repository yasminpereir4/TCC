<?php
	session_start();
	$_SESSION['userLogin'] = $_SESSION['username'];
	include_once("dbconnect.php");
	include_once("functions.php");
?>