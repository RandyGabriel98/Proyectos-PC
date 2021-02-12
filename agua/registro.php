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
                     <p><a href="index.php"><img src="img/empresa.jpeg" width="250px"/></a></p>
                    <p><a href="index.php"></a></p>

                </div>
                <nav>
                    <ul>
                        <li><a href="http://localhost:8080/agua/faces/index.php">inicio</a></li>
                        <li><a href="http://localhost:8080/agua/faces/iniciarsesion.php">iniciar sesión</a></li>
                       
                    </ul>
                </nav>
            </div>
        </header>
        

        <h:form class="formulario">
            <h1>Registro de usuario</h1>
          
            <div class="contenedor">
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" name="txtnombre" placeholder="Ingrese nombres y apellidos"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" name="txtnombrecomercial" placeholder="Ingrese Razon social"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" placeholder="Ingrese ruc"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" placeholder="Ingrese usuario"></input>
                </div>
                 <div class="input-contenedor">
                    <i class="icon icon-lock"></i>
                    <input type="password" placeholder="Contraseña"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" placeholder="Ingrese ciudad"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" placeholder="Ingrese correo electronico"></input>
                </div>
                <div class="input-contenedor">
                    <i class="icon icon-user"></i>
                    <input type="text" placeholder="Ingrese número telefónico"></input>
                </div>
                <input type="submit" value="Registrarse" class="button"></input>
                <p>Al registrarte, aceptas nuestras Condiciones de uso y
                    Politica de privacidad</p>
                <p>¿Ya tienes cuenta?<a class="link" href="iniciosesion.php">Iniciar Sesion</a></p>
            </div>

        </h:form>
    </h:body>
</html>

