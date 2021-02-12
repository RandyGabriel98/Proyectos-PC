!DOCTYPE html>
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

<form method="POST" action="crearproducto.php" class="formulario">
            <center><h2> PRODUCTO </h2></center>
            <div class="contenedor">
               
                <div class="input-contenedor">
                    <span class="icon icon-user"></span>
                    <input type="text" placeholder="Nombre del Producto" name="txtpNombre" value=""/>

                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Codigo" name="txtpCodigo" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Marca" name="txtidMarca" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Provedor" name="txtidProveedor" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder=" Precio1" name="txtpprecio1" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Precio2" name="txtpprecio2" value=""/>
                </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Precio3" name="txtpprecio3" value=""/>
                  </div>
                 <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Iva" name="txtidiva" value=""/>
                </div> 
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Ice" name="txtidice" value=""/>
                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Activo" name="txtidactivo" value=""/>
                    <select name ="CboActivo">
                        <option value = "uno"> uno </option>
                        <option value = "dos"> dos </option>
                    </select>
                </div>
                <div class="input-contenedor">
                    <span class="icon icon-lock" color="black"></span>

                    <input type="text" placeholder="Categoria" name="txtidCategoria" value=""/>
                    <select name ="CboCategoria">
                        <option value = "prim"> prim </option>
                        <option value = "segu"> segu </option>
                        <option value = "ter"> ter </option>
                    </select>
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