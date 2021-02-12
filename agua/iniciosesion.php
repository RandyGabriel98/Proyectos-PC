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

        
            <form method="POST" action="iniciosesion.php" class="formulario">
            <center><h2>Sistema de pedidos en linea</h2></center>

            <div class="contenedor">
               
                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Usuario" name="txtNombre" value=""/>

                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="password" placeholder="Contraseña" name="txtPassword" value=""/>
                </div>
                <input type="submit" value="Ingresar" class="button" name="btnIngresar"></input>
                <br>
                <br>
                <input type="submit" value="Limpiar" class="button" name="btnLimpiar"></input>

                 <?php 
                     include("conecta.php");

                     $nombre     ="";
                     $password   ="";

                     if(isset($_POST['btnIngresar']))
                     {

                        $nombre   = $_POST['txtNombre'];
                        $password = $_POST['txtPassword'];

                        $resultados = mysqli_query($cn,"SELECT * FROM usuario WHERE usuarionombre = '".$nombre."' and usuariocontrasena='".$password."'");
                        $nr = mysqli_num_rows($resultados);

                        if ($nr == 1) {
                            header("Location:crearclientes.php");
                        }
                        else if($nr == 0){
                            echo "<br>Usuario no existe";
                        }
                     }

 



                     include("cerrar.php");
                     ?>


                <p>Al registrarte, aceptas nuestras Condiciones de uso y
                    Politica de privacidad</p>
                <p>¿No tienes cuenta?<a class="link" href="crearusuario.php">Crear una Cuenta</a></p>
                
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



