<?php
$mysqli = new mysqli("localhost","root", "","inventarios");
if ($mysqli->connect_errno) {
	echo "Fallo al conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>