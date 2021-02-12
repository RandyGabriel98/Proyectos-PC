<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
      xmlns:h="http://xmlns.jcp.org/jsf/html"
      xmlns:p="http://primefaces.org/ui">
    <h:head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>AGUALITSA S.A</title>

        <link rel="stylesheet" type="text/css" href="view.css" media="all"/>
        <script type="text/javascript" src="view.js"></script>
        <script type="text/javascript" src="calendar.js"></script>
    </h:head>

    <body id="main_body">

        <img id="top" src="top.png" alt="">
            <div id="form_container">


                <h:form id="form_81907" class="appnitro" >
                    <div class="form_description">
                        <center><p><a href="pedido.php"><img src="img/empresa.jpeg" width="250px"/></a></p></center>
                        <h3>Transportista</h3> 
                        <p></p>
                        <p></p>
                    </div>						
                    <ul>

                        <li id="li_5" >
                            <span>
                                <label class="description" for="element_2">  Fecha de Emisión</label>
                            </span>
                            <span>
                                <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"/>
                                <label for="element_2_1">MM</label>
                            </span>
                            <span>
                                <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"/> 
                                <label for="element_2_2">DD</label>
                            </span>
                            <span>
                                <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text"/>
                                <label for="element_2_3">YYYY</label>
                            </span>


                        </li>		<li id="li_7" >
                            <span>
                                <label class="description" for="element_2">Fecha Inicio Traslado</label>
                            </span>
                            <span>
                                <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"/>
                                <label for="element_2_1">MM</label>
                            </span>
                            <span>
                                <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"/> 
                                <label for="element_2_2">DD</label>
                            </span>
                            <span>
                                <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text"/>
                                <label for="element_2_3">YYYY</label>
                            </span>

                        </li>		<li id="li_7" >
                            <span>
                                <label class="description" for="element_2">Fecha Termino de Traslado</label>
                            </span>
                            <span>
                                <input id="element_2_1" name="element_2_1" class="element text" size="2" maxlength="2" value="" type="text"/>
                                <label for="element_2_1">MM</label>
                            </span>
                            <span>
                                <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"/> 
                                <label for="element_2_2">DD</label>
                            </span>
                            <span>
                                <input id="element_2_3" name="element_2_3" class="element text " size="4" maxlength="4" value="" type="text"/>
                                <label for="element_2_3" >YYYY</label>
                            </span>
                        </li>		
                        <table align="center" > <tr> <th> LLEGADA A DESTINO </th> <th> SALIDA A EMPACADORA </th> <th> LLEGADA A EMPACADORA </th> </tr> <tr> <td><li id="li_2" >

                                        <span>

                                            <label class="description" for="element_2">Fecha
                                            </label>
                                        </span>
                                        <span>

                                            <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"/> 
                                            <label for="element_2_1">MM</label>
                                        </span>
                                        <span>

                                            <input id="element_2_2" name="element_2_2" class="element text" size="2" maxlength="2" value="" type="text"/> 
                                            <label for="element_2_2">DD</label>
                                        </span>
                                        <span>
                                            <input id="element_2_3" name="element_2_3" class="element text" size="4" maxlength="4" value="" type="text"/>
                                            <label for="element_2_3">YYYY</label>
                                        </span>

                                        <span id="calendar_2">
                                            <img id="cal_img_2" class="datepicker" src="../img/calendar.gif" alt="Pick a date."/>	
                                        </span>
                                        <script type="text/javascript">
                                            Calendar.setup({
                                                inputField: "element_2_3",
                                                baseField: "element_2",
                                                displayArea: "calendar_2",
                                                button: "cal_img_2",
                                                ifFormat: "%B %e, %Y",
                                                onSelect: selectDate
                                            });
                                        </script>

                                    </li>		<td><input id="element_5" name="element_5" 
                                                      class="element text" type="text" maxlength="255" value=""/></td> </td> <td><input id="element_5" name="element_5" 
                                                                                                                  class="element text" type="text" maxlength="255" value=""/></td> 

                            
                                </tr><tr> <td>
                                       
                                    <span>
                                            <span>
                                                <label class="description" for="element_2">Hora<input id="element_7" name="element_6" class="description " type="text" maxlength="255" value=""/> </label>
                                        
                                               </span> 
                                    </span>           
                                    <td><input id="element_5" name="element_5" 
                                               class="element text" type="text" maxlength="255" value=""/></td> </td> <td><input id="element_5" name="element_5" 
                                                                                                                  class="element text" type="text" maxlength="255" value=""/></td>  </tr> 
                        </table> 
                        <br></br>
                        <li id="li_7" >
                            <label class="description" for="element_6">IDENTIFICACION DESTINATARIO:</label><br></br>
                            <label class="description" for="element_6">Razón Social/Nombres y Apellidos</label>
                            <div>
                                <input id="element_7" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>		
                        <li id="li_7" >
                            <label class="description" for="element_7">RUC/C.I..</label>
                            <div>
                                <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>	
                        <li id="li_1" >
                            <label class="description" for="element_1">Destino/Punto de Llegada </label>  
                            <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 

                        </li>

                        <li id="li_7" >
                            <label class="description" for="element_7">Cambio de Ruta</label>
                            <div>
                                <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>


                        <li id="li_7" >
                            <label class="description" for="element_6">IDENTIFICACION TRANSPORTISTA:</label><br></br>
                            <label class="description" for="element_6">Se transporta vía</label>
                            <div>
                                <input id="element_7" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>	
                        <li id="li_7" >
                            <label class="description" for="element_6">Razón Social/Nombres y Apellidos</label>
                            <div>
                                <input id="element_7" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>

                        <li id="li_7" >
                            <label class="description" for="element_7">RUC/C.I..</label>
                            <div>
                                <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>	
                        <li id="li_1" >
                            <label class="description" for="element_1">Color Vehículo </label>  
                            <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 

                        </li>

                        <li id="li_7" >
                            <label class="description" for="element_7">Nombre Embarcación/Gabarra</label>
                            <div>
                                <input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
                            </div> 
                        </li>



                        <li id="li_3" >
                            <label class="description" for="element_3">MOTIVO DE TRASLADO</label>
                        </li>

                        <li id="li_16" >
                            <label class="description" for="element_16"> </label>
                            <span>
                                <input id="element_16_1" name="element_16" class="element radio" type="radio" value="1" />
                                <label class="choice" for="element_16_1">COMPRA</label>
                                <input id="element_16_2" name="element_16" class="element radio" type="radio" value="2" />
                                <label class="choice" for="element_16_2">TRASLADO MISMA EMPRESA</label>
                                <input id="element_16_3" name="element_16" class="element radio" type="radio" value="3" />
                                <label class="choice" for="element_16_3">DEVOLUCION</label>
                                <input id="element_16_3" name="element_16" class="element radio" type="radio" value="3" />
                                <label class="choice" for="element_16_3">OTROS</label>

                            </span> 
                        </li>

                        <li id="li_12" >
                            <label class="description" for="element_12">DETALLE DE BIENES TRANSPORTADOS </label><br></br>
                            <table align="center" > <tr> <th> MATERIALES </th> <th> DESPACHADOS </th> </tr> <tr> <td>GAVETA CONICAS</td> <td><input id="element_5" name="element_5" 
                                                                                                                                                        class="element text" type="text" maxlength="255" value=""/></td> 

                                    <tr> <td>GAVETAS CALADAS</td> <td><input id="element_5" name="element_5" 
                                                                             class="element text" type="text" maxlength="255" value=""/></td>  </tr> 
                                    <tr> <td>SACOS DE HIELO</td> <td><input id="element_5" name="element_5" 
                                                                            class="element text" type="text" maxlength="255" value=""/></td>  </tr>
                                </tr> <tr> <td>METABISULFITO</td> <td><input id="element_5" name="element_5" 
                                                                             class="element text" type="text" maxlength="255" value=""/></td>  </tr></table> 
                        </li><br></br>		
                        <li id="li_13">
                            <label class="description" for="element_12">OBSERVACIONES DEL PROVEEDOR: </label>
                            <li id="li_14" >
                                <label class="description" for="element_5">BINES <input id="element_5" name="element_5" class="element text " type="text" maxlength="255" value=""/> </label>


                            </li><br></br>
                            <p>ESTIMADO PROVEEDOR:Al recibir y despachar el transporte escriba la fecha y hora,firme y verifique con el
                                conductor los sellos, los mismos que deben ser cerrados personalmente por Usted. Además verifique que esten bien puestos.<br></br>
                            Todo el material que se quede en camaronera y que no sea devuelto será descontado. Si el camino ofrece garantía
                            el proveedor asumirá el riesgo y costo de cualquier eventualidad.</p><br></br>
                            <br></br>
                            <br><br clear="feft">__________________________<br></br>Persona que selló</br></br>
                            <p align="right" >______________________________<br></br>Transportista Recibe en Planta</p>
                            <br><br clear="feft">__________________________<br></br>Recibí Conforme Camaronera</br></br>
                            <p align="right" >______________________________<br></br>Transportista Recibe en Camaronera</p>
                            <br><br align="left" >______________________________<br></br>Despacho en camaronera</br></br>
                            <p align="right" >______________________________<br></br>Recibí Conforme Planta Destino</p>
                            
                        </li>


                        
                        <li class="buttons">
                            <input type="hidden" name="form_id" value="81907" />

                            <input id="saveForm" class="button_text" type="submit" name="submit" value="Realizar Pedido" /> <input type="button" value="Imprimir" onclick="window.print()"></input>
                        </li>
                    </ul>
                </h:form>	
                <div id="footer">
                    <a href=""></a>
                </div>
            </div>
            <img  src="bottom.png" id="bottom" alt=""></img>

        </img>
    </body>
</html>
