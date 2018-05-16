<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/contactanos.view.php';
	} else {
		header('Location: login.php');
	}
	
?>