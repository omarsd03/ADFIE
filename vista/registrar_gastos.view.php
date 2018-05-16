<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADFIE - Registrar Gastos</title>
	<link href='img/logo.png' rel='shortcut icon' type='image/png'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="icomoon/style.css">
	<link rel="stylesheet" href="css/menu_estilos.css">
</head>
<body>
	
	<?php include 'extras/header.php'; ?>

	<div class="cerrar_sesion">
		<a href="cerrar.php" class="btn btn-warning"><span class="cerrar_sesion"><i class="icon icon-switch"></i></span> Cerrar Sesion</a>
	</div>

	<div id="content">
		<div class="container-fluid">
				
			<?php include 'extras/sidebar.php'; ?>

			<div class="row">  
				<div class="dinero_actual col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Lista de Gastos:</h3>
					
				</div>

				<div class="dinero_abonado col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Agregar gasto</h3>
					<form action="" class="form-inline">
						<div class="form-group" align="center">
							<label>Descripcion</label>
							<input class="form-control" type="text" placeholder="Pasajes, Comida, etc..">
						</div>
						<br><br>
						<div class="form-group" align="center">
							<label for="cantidad">Cantidad</label>
							<input class="form-control" id="cantidad" type="text" placeholder="100.00">
						</div>
						<br><br>
						<div class="form-group" align="center">
							<button class="btn btn-primary">Agregar</button>
						</div>
						<br><br>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include 'extras/footer.php'; ?>

</body>
</html>