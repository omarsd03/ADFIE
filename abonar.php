<?php session_start();

	if (isset($_SESSION['usuario'])) {
		$validado = 1;
	} else {
		header('Location: login.php');
	}

	function sumarValores() {
		$usuario = $_SESSION['usuario'];

			try {
				$conexion = new PDO('mysql:host=localhost;dbname=adfie','root','omar');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$stmnt = $conexion->prepare("SELECT SUM(b.precio) FROM usuarios a LEFT JOIN gastos b ON a.id = b.id WHERE a.usuario = '$usuario'");
			$stmnt->execute();
			$resul = $stmnt->fetchAll();

			foreach ($resul as $total) {
				echo '<h1> $' . $total['0'] . '</h1>';
				//echo $total['0'];
			}
	}

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$descripcion = $_POST['descripcion'];
		$precio = $_POST['precio'];

		$errores = '';

		if (empty($descripcion) or empty($precio)) {
			$errores .= '<li>Por favor llena los campos correctamente</li>';
		} else {
			try {
				$conexion = new PDO('mysql:host=localhost;dbname=adfie','root','omar');
			} catch (PDOException $e) {
				echo "Error: " . $e->getMessage();
			}

			$usuario = $_SESSION['usuario'];

			/*$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = '$usuario'");
			$stmt->execute();
			$resul = $stmt->fetchAll();

			if ($resul != false) {
				echo "yeip";
			}
			else {
				echo "vale verga";
			}*/

			//$statement = $conexion->prepare("INSERT INTO gastos (id_gasto, id, descripcion, precio) VALUES (null, gastos.id='$row_id[0]', :descripcion, :precio) WHERE usuarios.usuario = $usuario");
			$statement = $conexion->prepare("INSERT INTO gastos (id_gasto, id, descripcion, precio) VALUES (null, (SELECT id FROM usuarios WHERE usuario = '$usuario'), :descripcion, :precio)");
			$statement->execute(array(':descripcion' => $descripcion, ':precio' => $precio));
			$res = $statement->fetch();

			$stmnt = $conexion->prepare("SELECT SUM(b.precio) FROM usuarios a LEFT JOIN gastos b ON a.id = b.id WHERE a.usuario = '$usuario'");
			$stmnt->execute();
			$resul = $stmnt->fetch();

			foreach ($resul as $total) {
				//echo $total['0'];
			}

			/*if ($res == false) {
				echo "No se almacenaron los datos";
				echo $_SESSION['usuario'];
			}
			else {
				echo "Datos almacenados";
				echo $_SESSION['usuario'];
			}*/
		}

		/* if ($errores == '') {

			$statement = $conexion->prepare('INSERT INTO gastos (id_gasto, id, descripcion, precio) VALUES (null, '.$_SESSION['id'].' :descripcion, :precio) ');
			$statement->execute(array(':descripcion' => $descripcion, ':precio' => $precio));
			$res = $statement->fetch();

			if ($res == false) {
				echo "No se almacenaron los datos";
			}
			else {
				echo "Datos almacenados";
			}
		} */
	}

	if ($validado == 1) {
		require 'vista/abonar.view.php';
	}

	
?>