<!DOCTYPE html>
<html>
<head>
	<title>Mail</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<form method="post">
		<input type="text" placeholder="Nombre" name="nombre" required="">
		<input type="email" placeholder="Email" name="email" required="">
		<input type="text" placeholder="Asunto" name="asunto" required="">
		<textarea placeholder="Mensaje" name="msg"></textarea>
		<input type="submit" name="enviar">
	</form>
	<?php 
	include("correo.php");
	 ?>

</body>
</html>