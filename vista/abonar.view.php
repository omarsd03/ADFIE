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

	<div id="content">
		<div class="container-fluid">
			<?php include 'extras/sidebar.php'; ?>	
			<div class="row">  
				<div class="dinero_actual col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Registra tu nuevo gasto</h3>

					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" method="POST" name="abonar">
						<div class="form-group" align="center">
							<label for="descripcion">Descripcion: </label>
							<input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Pasaje, Comida, etc.." >
							<br>
							<label for="precio">Precio: </label>
							<input type="text" class="form-control" name="precio" id="precio" placeholder="$0.00">
							<br>
							<button id="botones" type="submit" class="btn btn-primary" name="abonar">Agregar Gasto</button>
						</div>

						<?php if (!empty($errores)): ?>
							<div class="error">
								<ul>
									<?php echo $errores; ?>
								</ul>
							</div>
						<?php endif; ?>
					</form>

					<br>
				</div>
				<div class="dinero_abonado col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Dinero Abonado</h3>
					<form action="" class="form-inline">
						<div class="form-group" align="center">
							<div id="div_resultado">
								<h3>Producto: <?php echo $resul['0']; ?> </h3>
							</div>
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