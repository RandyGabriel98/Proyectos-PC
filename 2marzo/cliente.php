<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8">
	<title></title>
 </head>
  <body>

  	
	
	<header>
		<h3>LISTADO DE BOLETAS POR CLIENTE</h3>
	</header>
	<section>

			<?php
	error_reporting(0);
	include('conecta.php');
	include('captura.php');

	?>
	
		<form method="POST" action="cliente.php">
			<table border="1" width="700" cellspacing="1" cellpadding="1">
				<tr>
					<td>INGRESE CODIGO DE CLIENTE</td>
					<td><input type="text" name="txtCodigo" maxlength="5"
						       value="<?php echo getCodigo(); ?>" />
						   </td>
					<td><input type="submit" value="CONSULTAR"/>
					</td>
						
				</tr>
			</table>
		</form>
		<table border="0" width="700" cellspacing="1" cellpadding="1">
		<tr>
			<th>N° BOLETA</th>
			<th>FECHA</th>
			<th>CODIGO DE CLIENTE</th>
			<th>NOMBRE DEL CLIENTE</th>
			<th>SUBTOTAL</th>
		</tr>

		<?php
		$codigo = getCodigo();
		$sql = "SELECT B.NUM_BOLETA,B.FECHA,C.ID_CLIENTE,
		          CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO),
		          SUM(P.PRECIO*D.CANTIDAD)
		         FROM CLIENTE C 
		         INNER JOIN BOLETA B ON C.ID_CLIENTE = B.ID_CLIENTE
		         INNER JOIN DETALLEBOLETA D ON D.NUM_BOLETA = B.NUM_BOLETA
		         INNER JOIN PRODUCTO P ON P.ID_PRODUCTO = D.ID_PRODUCTO
		         GROUP BY B.NUM_BOLETA,B.FECHA,C.ID_CLIENTE,
		                  CONCAT(C.NOMBRES,' ',C.PATERNO,' ',C.MATERNO)
		         HAVING C.ID_CLIENTE='$codigo'";
		$rs=mysqli_query($cn,$sql);
		$n= mysqli_num_rows($rs);

        for($i=0;$i<$n;$i++){
        	//Acumulando los subtotales por cada boleta
        	$acumulado+=mysqli_result($rs, $i,4);
        ?>
        <tr>
        	<td><?php echo mysqli_result($rs, $i,0) ?></td>
        	<td><?php echo mysqli_result($rs, $i,1) ?></td>
        	<td><?php echo mysqli_result($rs, $i,2) ?></td>
        	<td><?php echo mysqli_result($rs, $i,3) ?></td>
        	<td><?php echo '$ '.number_format(mysqli_result($rs, $i,4),2) ?></td>
        </tr>
        <?php }
		?>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<th>COSTO ACUMULADO</th>
			<th><?php echo "$ ".number_format($acumulado,2) ?></th>
		</tr>
	</table>

	</section>
	<footer>
		<h5>Todos los derechos reservados @2020</h5>
	</footer>

  </body>
</html>