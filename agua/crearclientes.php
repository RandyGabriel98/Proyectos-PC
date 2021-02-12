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

<form method="POST" action="crearclientes.php" class="formulario">
            <center><h2>Nuevo Cliente</h2></center>
            <div class="contenedor">
               
                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Nombres" name="txtNombre" value=""/>

                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Cedula" name="txtCedula" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Direccion" name="txtDireccion" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Telefono" name="txtTelefono" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Correo" name="txtCorreo" value=""/>
                </div>
                 <div class="input-contenedor">
                    <select name="Provincias">
                        <option value="1">1</option>
                        <option value="2">2</option>

                    </select>
                </div>
                 <div class="input-contenedor">
                    <select name="Ciudades">
                        <option value="1">1</option>
                        <option value="2">2</option>

                    </select>
                </div>
              

                <input type="submit" value="Registrar" class="button" name="btnRegistrar"></input>
                <br>
                <br>

                <?php 
                
                include('conecta.php');
                
                $nombre         ="";
                $cedula         ="";
                $direccion      ="";
                $telefono       ="";
                $correo         ="";
                $provincia      ="";
                $ciudad         ="";
                

                if(isset($_POST['btnRegistrar']))
       {
                

        $nombre     = $_POST['txtNombre'];
        $cedula     = $_POST['txtCedula'];
        $direccion  = $_POST['txtDireccion'];
        $telefono   = $_POST['txtTelefono'];
        $correo     = $_POST['txtCorreo'];
        $provincia  = $_POST['Provincias'];
        $ciudad     = $_POST['Ciudades'];

      

        
         if ($nombre=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
          elseif ($cedula=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
         elseif ($direccion=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
         elseif ($telefono=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
         elseif ($correo=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
          elseif ($provincia=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
          elseif ($ciudad=="") 
         {
            echo "Los campos son OBLIGATORIOS";
         }
         else
         {

                                  $sqlTabla1 = "INSERT INTO clientes 
            (nombres,cedula,direccion,telefono,correo,idprovincia,idciudad) 
             
            ('$nombre','$cedula','$direccion','$telefono','$correo','$provincia','$ciudad')"; 
            $ejecutado = mysqli_query($cn,$sqlTabla1);
            echo "SE REGISTRO CORRECTAMENTE";
                                
                            

               
                    
                



            

         }

       }


      // mysqli_query($cn, "INSERT INTO provincias 
        //    (provincianombre) 
          //  values 
           // ('$provincia')"); 
            //echo "SE REGISTRO CORRECTAMENTE"; 

 



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
