<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADFIE - Inicio</title>
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
					<h3>Lo que tienes programado para gastar</h3>
					<h1> <?php mostrarCantidad() ?> </h1>
					<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="form" method="POST" name="agregar">
						<div class="form-group" align="center">

							<label for="cantidad">Cantidad: </label>
							<input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="$0.00">
							<br>
							<button id="botones" type="submit" class="btn btn-primary" name="agregar">Agregar Cantidad</button>

						</div>
					</form>
				</div>
				<div class="dinero_abonado col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<h3>Dinero Abonado</h3>
					<p>
						Al principio abonaste:
					</p>
					<fieldset>
						<div id="div_resultado">Aqui va tu cantidad</div>
					</fieldset>
				</div>
			</div>
		</div>
	</div>

	<?php include 'extras/footer.php'; ?>
	
</body>
</html>