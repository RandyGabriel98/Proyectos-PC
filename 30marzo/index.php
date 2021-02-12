<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<header>
		<h3>REPORTE</h3>
	</header>
	<section>
		<form method="POST" action="index.php">
			<table border="0" width="550"
			       cellspacing="0" cellpadding="5">
	    <tr>
	    	<td>ID</td>
	    	<td><input type="text" name="txtCodigo" value=" "/></td>
	    </tr>
	    <tr>
	    	<td>NOMBRE</td>
	    	<td><input type="text" name="txtNombre" size="70" value=""/></td>
	    </tr>
	    <tr>
	    	<td>APELLIDO</td>
	    	<td><input type="text" name="txtApellido" value=""/></td>
	    </tr>
	    <tr>
	    	<td>EMAIL</td>
	    	<td><input type="text" name="txtEmail" value=""/></td>
	    </tr>
	     <tr>
	    	<td>PASSWORD</td>
	    	<td><input type="text" name="txtPassword" value=""/></td>
	    </tr>	     
	    	<td>
	    	<input type="submit" name="btnConsultar" value="CONSULTAR"/>
	    	<input type="submit" name="btnRegistrar" value="REGISTRAR"/>
	    	<input type="submit" name="btnActualizar" value="ACTUALIZAR"/>
	    	<input type="submit" name="btnBorrar" value="BORRAR"/>
	    	</td>
	    <tr>
	    	<td colspan="2">
	    		</td>
	    		    </tr>
      </table>
  </form>

<?php 
	   include("conecta.php");

	   $codigo   ="";
	   $nombre   ="";
	   $apellido ="";
	   $email    ="";
	   $password ="";

if(isset($_POST['btnConsultar']))
	   {

	   	 $codigo   = $_POST['txtCodigo'];
	   	 $existe=0;

	   	 if($codigo==" ")
	   	 {
	   	 	echo "El campo esta vacio";
	   	 }
	   	 else
	   	 {
	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$codigo'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         echo  $consulta['id']. "<br>";
         echo  $consulta['email']. "<br>";
         echo  $consulta['password']. "<br>";
         echo  $consulta['nombre']. "<br>";
         echo  $consulta['apellido']. "<br>";
         $existe++;
         }

         if($existe==0){echo "El campo no existe";}

	   	 }
         
	   }

if(isset($_POST['btnRegistrar']))
	   {

        $codigo   = $_POST['txtCodigo'];
        $nombre   = $_POST['txtNombre'];
        $apellido   = $_POST['txtApellido'];
        $email   = $_POST['txtEmail'];
        $password   = $_POST['txtPassword'];

	   	 if($codigo==" ")
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 elseif ($nombre=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($apellido=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($email=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($password=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 else
	   	 {

	   	 	mysqli_query($cn, "INSERT INTO usuario 
            (id,nombre,apellido,email,password) 
            values 
            ('$codigo','$nombre','$apellido','$email','$password')"); 
            echo "SE REGISTRO CORRECTAMENTE";    

	   	 }
	   }

if(isset($_POST['btnActualizar']))
	   {

        $codigo   = $_POST['txtCodigo'];
        $nombre   = $_POST['txtNombre'];
        $apellido   = $_POST['txtApellido'];
        $email   = $_POST['txtEmail'];
        $password   = $_POST['txtPassword'];

	   	 if($codigo==" ")
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 elseif ($nombre=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($apellido=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($email=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($password=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 else
	   	 {

	   	 	$existe = 0;

	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$codigo'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";
         }
         else
         {
         	 $_UPDATE_SQL="UPDATE usuario Set 
             id='$codigo', 
             nombre='$nombre',
             apellido='$apellido',
             email='$email',
             password='$password'

             WHERE id='$codigo'"; 

  			mysqli_query($cn,$_UPDATE_SQL);
  			echo "ACTUALIZACION EXITOSA"; 

         }


	   	 }

	   }

if(isset($_POST['btnBorrar']))
	   {

	   	 $codigo   = $_POST['txtCodigo'];
	   	 $existe=0;

	   	 if($codigo==" ")
	   	 {
	   	 	echo "El campo esta vacio";
	   	 }
	   	 else
	   	 {
	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$codigo'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";}
         else
         {

		  $_DELETE_SQL =  "DELETE FROM usuario WHERE id = '$codigo'";
		  mysqli_query($cn,$_DELETE_SQL);
         }

	   	 }




        
	   }

	   include("cerrar.php");
 ?>
	    		

	
	</section>
	<footer>
		<h5>Todos los derechos reservados@2020</h5>
	</footer>

</body>
</html>