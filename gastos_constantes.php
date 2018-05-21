<?php session_start();

	if (isset($_SESSION['usuario'])) {
		$validado = 1;
	} else {
		header('Location: login.php');
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

			$statement = $conexion->prepare("INSERT INTO gastosconstantes (id_constante, id, descripcion, precio) VALUES (null, (SELECT id FROM usuarios WHERE usuario = '$usuario'), :descripcion, :precio)");
			$statement->execute(array(':descripcion' => $descripcion, ':precio' => $precio));
			$res = $statement->fetch();

			/*$stmnt = $conexion->prepare("SELECT SUM(b.precio) FROM usuarios a LEFT JOIN gastos b ON a.id = b.id WHERE a.usuario = '$usuario'");
			$stmnt->execute();
			$resul = $stmnt->fetch();

			foreach ($resul as $total) {
				echo $total['0'];
			}*/
		}
	}

	if ($validado == 1) {
		require 'vista/gastos_constantes.view.php';
	}
	
?>