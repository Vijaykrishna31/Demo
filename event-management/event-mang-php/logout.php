<?php
	include"_config.php";
	session_start();
	if($_SESSION["id"]);
	header("location:index.php"); 
?>