<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/registrar_gastos.view.php';
	} else {
		header('Location: login.php');
	}
	
?>