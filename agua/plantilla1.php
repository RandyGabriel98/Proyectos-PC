<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/ccs1.css"/>
</head>
<body>
	<header>
		<h3>Ingreso de cliente</h3>
	</header>
	
		<form method="POST" action="plantilla1.php">
			
	    <tr>
	    	<td>ID</td><br>
	    	<br><input type="text" class="field" name="txtId" value=" "/><br>
	    </tr>
	    <tr>
	    	<br>
	    	<td>NOMBRES</td><br>
	    	<br><input type="text" class="field" name="txtNombre" value=""/><br>
	    </tr>
	    <tr>
	    	<br>
	    	<td>CONTRASEÑA</td><br>
	    	<br><input type="text" class="field" name="txtPassword" value=""/><br>
	    </tr>
	    <tr>
	    	<br>
	    	<td>FECHA DE CREACION</td><br>
	    	<br><input type="text" class="field" name="txtFecha" value=""/><br>
	    </tr>
	     
	    <td>
	    	<br> <p class="center">
	    	<br><input type="submit" class="field1" name="btnConsultar" value="CONSULTAR"/><br>
	    	<br><input type="submit" class="field1" name="btnRegistrar" value="REGISTRAR"/><br>
	    	<br><input type="submit" class="field1" name="btnActualizar" value="ACTUALIZAR"/><br>
	    	<br><input type="submit" class="field1" name="btnBorrar" value="BORRAR"/>

	       <tr>
	    	<td colspan="2">
	    		</td>
	    		    </tr>
      
  </form>

  <?php 
  include("conecta.php");
       
       $id               ="";
	   $nombre           ="";
	   $password       ="";
	   $fechacreacion    ="";

if(isset($_POST['btnConsultar']))
	   {

	   	 $id   = $_POST['txtId'];
	   	 $existe=0;

	   	 if($id==" ")
	   	 {
	   	 	echo "El campo esta vacio";
	   	 }
	   	 else
	   	 {
	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$id'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         echo  $consulta['id']. "<br>";
         echo  $consulta['nombres']. "<br>";
         echo  $consulta['password']. "<br>";
         echo  $consulta['fechacreacion']. "<br>";
         $existe++;
         }

         if($existe==0){echo "El campo no existe";}

	   	 }
         
	   }
	   
if(isset($_POST['btnRegistrar']))
	   {

        $id   = $_POST['txtId'];
        $nombre   = $_POST['txtNombre'];
        $password   = $_POST['txtPassword'];
        $fechacreacion   = $_POST['txtFecha'];
      

	   	 if($id==" ")
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 elseif ($nombre=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($password=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($fechacreacion=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 else
	   	 {

	   	 	mysqli_query($cn, "INSERT INTO usuario 
            (id,nombres,password,fechacreacion) 
            values 
            ('$id','$nombre','$password','$fechacreacion')"); 
            echo "SE REGISTRO CORRECTAMENTE";    

	   	 }
	   }

if(isset($_POST['btnActualizar']))
	   {

        $id   = $_POST['txtId'];
        $nombre   = $_POST['txtNombre'];
        $password   = $_POST['txtPassword'];
        $fechacreacion   = $_POST['txtFecha'];

	   	 if($id==" ")
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 elseif ($nombre=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($password=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	  elseif ($fechacreacion=="") 
	   	 {
	   	 	echo "Los campos son OBLIGATORIOS";
	   	 }
	   	 else
	   	 {

	   	 	$existe = 0;

	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$id'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";
         }
         else
         {
         	 $_UPDATE_SQL="UPDATE usuario Set 
             id='$id', 
             nombres='$nombre',
             password='$password',
             fechacreacion='$fechacreacion'
             
             WHERE id='$id'"; 

  			mysqli_query($cn,$_UPDATE_SQL);
  			echo "ACTUALIZACION EXITOSA"; 

         }


	   	 }

	   }

if(isset($_POST['btnBorrar']))
	   {

	   	 $id   = $_POST['txtId'];
	   	 $existe=0;

	   	 if($id==" ")
	   	 {
	   	 	echo "El campo esta vacio";
	   	 }
	   	 else
	   	 {
	   	 	$resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE id = '$id'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";}
         else
         {

		  $_DELETE_SQL =  "DELETE FROM usuario WHERE id = '$id'";
		  mysqli_query($cn,$_DELETE_SQL);
		  echo "SE HA BORRADO"; 
         }

	   	 }
}
 include("cerrar.php");
   ?>
  
  </body>
</html>