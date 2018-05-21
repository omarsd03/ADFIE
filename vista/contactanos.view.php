<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ADFIE - Contactanos</title>
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
				<style>
			       #map {
			        height: 400px;
			        width: 100%;
			       }
			    </style>
				<div id="map"></div>
			    <script>
			      function initMap() {
			        var uluru = {lat: 18.7265767, lng: -98.9571939};
			        var map = new google.maps.Map(document.getElementById('map'), {
			          zoom: 17,
			          center: uluru
			        });
			        var marker = new google.maps.Marker({
			          position: uluru,
			          map: map
			        });
			      }
			    </script>
			    <script async defer
			    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAHUEZq8ZPUjQvX-QJBL8H5dyY3Q_ZyZA&callback=initMap">
			    </script>
			</div>
		</div>
	</div>

	<?php include 'extras/footer.php'; ?>

</body>
</html>