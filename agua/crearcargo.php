<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:h="http://xmlns.jcp.org/jsf/html">

    <h:head>
        <meta charset="UTF-8"></meta>
        <title>AGUALITSA S.A</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"/>
        <link rel="stylesheet" href="fonts/icomoon/style.css"/>
        <link rel="stylesheet" href="estilos.css"></link>
        <link rel="stylesheet" href="estilouno.css"></link>

    </h:head>
    <h:body>

        <header>
            <div class="ancho">
                <div class="logo">
                    <p><a href="index.php"><img src="img/empresa.jpeg" width="540" height="200"/></a></p>
                    <p><a href="index.php"></a></p>

                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">inicio</a></li> 
                        <li><a href="http://127.0.0.1/agua/iniciosesion.php">iniciar sesión</a></li>
                        <li><a href="http://localhost:8080/agua/registro.php">registrarse</a></li>
                        
                    </ul>
                </nav>
            </div>
        </header>
<br><br><br>

<form method="POST" action="crearcargo.php" class="formulario">
            <center><h2>Nuevo Cargo</h2></center>
            <div class="contenedor">

                 <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Id" name="txtId" value=""/>

                </div>
               
                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Nombre" name="txtNombre" value=""/>

                </div>

                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Sueldo minimo" name="txtSueldomi" value=""/>

                </div>

                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Sueldo maximo" name="txtSueldoma" value=""/>

                </div>
                <input type="submit" value="Registrar" class="button" name="btnRegistrar"></input>
                <br>
                <br>
                <input type="submit" value="Actualizar" class="button" name="btnActualizar"></input>
                <br>
                <br>
                <input type="submit" value="Borrar" class="button" name="btnBorrar"></input>
                <br>
                <br>


                <?php 
                include("conecta.php");
                
                $id ="";
                $nombre="";
                $sueldomi="";
                $sueldoma="";
                
                

if(isset($_POST['btnRegistrar']))
       {

        $id       = $_POST['txtId'];
        $nombre   = $_POST['txtNombre'];
        $sueldomi = $_POST['txtSueldomi'];
        $sueldoma = $_POST['txtSueldoma'];
        
      

        
         if ($id=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         } 
         elseif ($nombre=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         } 
         elseif ($sueldomi=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         } 
         elseif ($sueldoma=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         } 
         else
         {

            mysqli_query($cn, "INSERT INTO cargo 
            (idcargo,nombre,sueldo_min,sueldo_max) 
            values 
            ('$id','$nombre','$sueldomi','$sueldoma')"); 
            echo "SE REGISTRO CORRECTAMENTE";    

         }
       }

if(isset($_POST['btnActualizar']))
       {
        $id     = $_POST['txtId'];
        $nombre = $_POST['txtNombre'];
        $sueldomi = $_POST['txtSueldomi'];
        $sueldoma = $_POST['txtSueldoma'];


           if ($id=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         } else
         {

            $existe = 0;

            $resultados = mysqli_query($cn,"SELECT * FROM cargo WHERE idcargo = '$id'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";
         }
         else
         {
             $_UPDATE_SQL="UPDATE cargo Set 
             idcargo='$id', 
             nombre='$nombre',
             sueldo_min='$sueldomi',
             sueldo_max='$sueldoma'
             
             
             WHERE idcargo='$id'"; 

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
            $resultados = mysqli_query($cn,"SELECT * FROM cargo WHERE idcargo = '$id'");
         while($consulta = mysqli_fetch_array($resultados))
         {
         $existe++;
         }

         if($existe==0){echo "El campo no existe";}
         else
         {

          $_DELETE_SQL =  "DELETE FROM cargo WHERE idcargo = '$id'";
          mysqli_query($cn,$_DELETE_SQL);
          echo "SE HA BORRADO"; 
         }

         }
}

 include("cerrar.php");



                ?>



                <p>Al registrarte, aceptas nuestras Condiciones de uso y
                    Politica de privacidad</p>
                
                
            </div>

           
        </form>
    
        
        <br/>
        <br/>
        <br/>
        <br/>
        
    <footer class ="container page-footer center-on-small-only">
       
        <div class="footer-copyright">
            <div class="container-fluid">
                
                <h6>  2019 AGUAS DEL LITORAL S.A. <br>
                        Km 4.5 Duran Tambo frente Coop. Montanavi</br></h6>
            </div>
        </div>
    </footer>
    </h:body>
</html>
