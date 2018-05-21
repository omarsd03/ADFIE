<?php session_start();

	if (isset($_SESSION['usuario'])) {
		require 'vista/abonar.view.php';
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

			$stmt = $conexion->prepare("SELECT id FROM usuarios WHERE usuario = '$usuario'");
			$stmt->execute();
			$resul = $stmt->fetchAll();

			if ($resul != false) {
				echo "yeip";
			}
			else {
				echo "vale verga";
			}

			foreach ($resul as $id) {
				echo $id['0'];
				//$a=(string)$id[0]['NAME'];
				$a = implode(',', $id);
				echo $a;
			}

			$statement = $conexion->prepare("INSERT INTO gastos (id_gasto, id, descripcion, precio) VALUES (null, '1', :descripcion, :precio) ");
			$statement->execute(array(':descripcion' => $descripcion, ':precio' => $precio));
			$res = $statement->fetch();

			if ($res == false) {
				echo "No se almacenaron los datos";
				echo $_SESSION['usuario'];
			}
			else {
				echo "Datos almacenados";
				echo $_SESSION['usuario'];
			}
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

	
?>