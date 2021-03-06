<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADFIE - Abonar</title>
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
					<h3>Cantidad a Agregar</h3>
					<form action="" class="form-inline">
						<div class="form-group" align="center">
							<label for="cantidad"> Cantidad: </label>
							<input type="text" class="form-control" id="cantidad" placeholder="$0.00">
							<button type="submit" class="btn btn-primary" onclick="crear(this)">Enviar</button>
						</div>
					</form>
					<br>
				</div>
				<div class="dinero_abonado col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Dinero Abonado</h3>
					<form action="" class="form-inline">
						<div class="form-group" align="center">
							<div id="div_resultado">Sin resultado</div>
						</div>
					</form>
					<br>
				</div>
			</div>
		</div>
	</div>

	<?php include 'extras/footer.php'; ?>

</body>
</html>