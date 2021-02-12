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
               
            </div>
        </header>
<br><br><br>

<form method="POST" action="crearproveedores.php" class="formulario">
            <center><h2> PROVEEDORES</h2></center>
            <div class="contenedor">
               
                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Nombre del Producto" name="txtpNombre" value=""/>

                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Nombre del proveedor" name="txtpr_nombre" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Nombre comercial" name="txtpr_nombrecomercial" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="RUC" name="txtruc" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder=" Direccion" name="txtdireecion" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Telefono" name="txttelefono" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Correo" name="txtcorreo" value=""/>
                  </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Provincia" name="txtidprovincia" value=""/>
                </div> 
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Ciudad" name="txtciudad" value=""/>
                </div>
               
                <input type="submit" value="GUARDAR" class="button" name="btnGuardar"></input>
                
                
                
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