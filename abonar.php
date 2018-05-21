<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/abonar.view.php';
	} else {
		header('Location: login.php');
	}

	
	
?>