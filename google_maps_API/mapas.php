<!DOCTYPE html>
<html>
<head>
	<title>API DE GOOGLE MAPS</title>
</head>
<body>

	<form class="" action="" method="get">
		<label for="direccion"></label>
		<input type="text" name="direccion" value="">
		<button type="submit" name="button">Enviar</button>

</body>
</html>

<?php
if (isset($_GET['direccion']))
{
	$direccion = $_GET['direccion'];
	//echo "La direccion es: " .$direccion;
	$url = "https://maps.googleapis.com/maps/api/geocode/json?address=".$direccion ."&key=AIzaSyA2foSh3ct_AeOVm5e9UVYKp9iyBJEU2p0";

	$json= file_get_contents($url);
	$datos= json_decode($json,true);
	$lat= $datos["results"][0]["geometry"]["location"]["lat"];
	$lng= $datos["results"][0]["geometry"]["location"]["lng"];

	echo "<br>";
	echo "La longitud es : " .$lng;
	echo "<br>";
	echo "La latitud es : " .$lat;

}

?>