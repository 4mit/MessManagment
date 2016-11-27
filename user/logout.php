<?php
session_start();

if(isset($_SESSION['username']) && isset($_SESSION['username'])){
	
	session_destroy(); 
	
	header('location:../index.php');
}


?>