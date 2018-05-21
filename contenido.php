<?php session_start();

	if (isset($_SESSION['usuario'])) {
		$validado = 1;
	} else {
		header('Location: login.php');
	}

	function mostrarCantidad() {
		$usuario = $_SESSION['usuario'];

			try {
				$conexion = new PDO('mysql:host=localhost;dbname=adfie','root','omar');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			//$stmnt = $conexion->prepare("SELECT c.cantidad FROM cantidadaldia c, usuarios u WHERE c.id = u.id AND usuario = '$usuario'");
			$stmnt = $conexion->prepare("SELECT cantidad FROM cantidadaldia c, usuarios u WHERE c.id = u.id AND usuario = '$usuario' AND id_cantidad = (SELECT MAX(id_cantidad) FROM cantidadaldia)");
			$stmnt->execute();
			$resul = $stmnt->fetchAll();

			foreach ($resul as $total) {
				echo '<h1>' . $total['0'] . '</h1>';
				//echo $total['0'];
			}
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$cantidad = $_POST['cantidad'];

		$errores = '';

		if (empty($cantidad)) {
			$errores .= '<li>Por favor llena los campos correctamente</li>';
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=adfie','root','omar');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$usuario = $_SESSION['usuario'];

			$statement = $conexion->prepare("INSERT INTO cantidadaldia (id_cantidad, id, cantidad) VALUES (null, (SELECT id FROM usuarios WHERE usuario = '$usuario'), :cantidad)");
			$statement->execute(array(':cantidad' => $cantidad));
			$res = $statement->fetch();
			
			if ($res == true) {
				foreach ($res as $total) {
					echo '<h1>' . $total['0'] . '</h1>';
					echo $total['0'];
				}
			}
			else {
				echo "nel";
			}
		}
	}

	if ($validado == 1) {
		require 'vista/contenido.view.php';
	}
	
?>