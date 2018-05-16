<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/gastos_constantes.view.php';
	} else {
		header('Location: login.php');
	}
	
?>