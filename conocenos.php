<?php session_start();

	if (isset($_SESSION['usuario'])) {
		$validado = 1;
	} else {
		header('Location: login.php');
	}

	

	if ($validado == 1) {
		require 'vista/conocenos.view.php';
	}
	
?>