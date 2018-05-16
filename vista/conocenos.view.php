<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADFIE - Conocenos</title>
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
			
			<?php include 'extras/sidebar.php' ?>

			<div class="row">  
				<div align="center" class="dinero_actual col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3 align="center">Salgado Diaz Omar</h3>
					<h5>Programador Web</h5>

					<a href="https://www.facebook.com/omar.salgadodiaz" tabindex="10" target="popup10" class="icono"><span><i class="icon icon-facebook"></i></span></a>
					<br><br>
					<a href="#" tabindex="11" target="popup" class="icono"><span><i class="icon icon-whatsapp"></i></span> 735-106-85-82</a>
				</div>

				<div align="center" class="dinero_abonado col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3 align="center"> Barbosa Ampudia Rosa Angelica</h3>
					<h5>Diseñadora</h5>

					<a href="https://www.facebook.com/angie.barbosaampudia" tabindex="12" target="popup11" class="icono"><span><i class="icon icon-facebook"></i></span></a>
					<br><br>
					<a href="#" tabindex="13" target="popup" class="icono"><span><i class="icon icon-whatsapp"></i></span> 735-228-34-33</a>
				</div>

				<div align="center" class="dinero_abonado col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3 align="center"> Garces Maldonado Manuel Alejandro</h3>
					<h5>Administrador de BD</h5>

					<a href="https://www.facebook.com/garces1maldonado" tabindex="14" target="popup12" class="icono"><span><i class="icon icon-facebook"></i></span></a>
					<br><br>
					<a href="#" tabindex="15" target="popup" class="icono"><span><i class="icon icon-whatsapp"></i></span> 735-264-41-23</a>
				</div>
			</div>
		</div>
	</div>

	<?php include 'extras/footer.php'; ?>

</body>
</html>