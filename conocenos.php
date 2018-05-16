<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/conocenos.view.php';
	} else {
		header('Location: login.php');
	}
	
?>