<!DOCTYPE html>
<html>
	<head>
		<title>PROYECTO SPACE</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="frontend/css/jquery.dataTables.min.css"> -->
	</head>
	<body>
		
		<div class="navbar-fixed">
	            <nav>
                <div class="nav-wrapper green lighten-1">
                    <a href="#" class="brand-logo">AGRO-DATOS</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="">Nosotros</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col s12 m4 l3">
                
            </div>
            <div class="col s12 m8 l9">
                <!-- <div class="container"> -->
                	<div class="row">
                    	<h4>CARTILLA DE DATOS DE CAMPO</h4>                   

                    
                    </div>
                  	<div class="row divider"></div>
                  	<div class="row">
                  		<ul id="ul-participantes">
                  			
                  		</ul>
                  	</div>
                  	<div class="row">
            			<button class="btn modal-trigger" data-target="modal-integrantes" >REGISTRAR PARTICIPANTES</button>  
            		</div>
                <!-- </div>                  -->
            </div>
        </div>

        
        <!--Modal Agregar participantes-->                  
        <div class="modal" id="modal-integrantes">
            <div class="modal-content">            
                <h4>AGREGAR PARTICIPANTES</h4>
                <!-- <form id="form-participantes" action="#" >                     -->
                   	<div class="row">
                   		<input type="text" id="txtidproyecto" name="" >
                   		<table id="tblintegrantes" class="striped">                   		
                   			<tbody id="tbody-integrantes">
                   				<!--tr>
                   					<td>
                   						<label>
								        	<input type="checkbox" class="filled-in" id="chitem-1" />
								        	<span>Karen Yomira Romero De LA Cruz</span>
								        </label>                   						
                   					</td>
                   					<td>
                   						<select class="cargo">
									      	<option value="" disabled selected>Elige su cargo</option>
									      	<option value="Coordinador General">Coordinador General</option>
									      	<option value="Coordinador de Campo">Coordinador de Campo</option>
									      	<option value="Coordinador de Laboratorio">Coordinador de Laboratorio</option>
									      	<option value="Coordinador de Logística">Coordinador de Logística</option>
									      	<option value="Coordinador de BBDD">Coordinador de BBDD</option>
									      	<option value="Editor de Informe">Editor de Informe</option>
									      	<option value="Especialista SIG">Especialista SIG</option>
									      	<option value="Asistente de Investigación">Asistente de Investigación</option>
									      	<option value="Otro">Otro</option>
									    </select>	
                   					</td>
                   				</tr>
                   				<tr>
                   					<td>
                   						<label>
								        	<input type="checkbox" class="filled-in" id="chitem-2"/>
								        	<span>Zeyla Liseth Romero De LA Cruz</span>
								      	</label>
                   					</td>
                   					<td class="">
                   						<select class="cargo">
									      	<option value="" disabled selected>Elige su cargo</option>
									      	<option value="Coordinador General">Coordinador General</option>
									      	<option value="Coordinador de Campo">Coordinador de Campo</option>
									      	<option value="Coordinador de Laboratorio">Coordinador de Laboratorio</option>
									      	<option value="Coordinador de Logística">Coordinador de Logística</option>
									      	<option value="Coordinador de BBDD">Coordinador de BBDD</option>
									      	<option value="Editor de Informe">Editor de Informe</option>
									      	<option value="Especialista SIG">Especialista SIG</option>
									      	<option value="Asistente de Investigación">Asistente de Investigación</option>
									      	<option value="Otro">Otro</option>
									    </select>	
                   					</td>
                   				</tr>
                   				<tr>
                   					<td>
                   						<label>
								        	<input type="checkbox" class="filled-in" id="chitem-3"/>
								        	<span>James Paul Romero De LA Cruz</span>
								        </label>
                   					</td>
                   					<td class="">
                   						<select class="cargo">
									      	<option value="" disabled selected>Elige su cargo</option>
									      	<option value="Coordinador General">Coordinador General</option>
									      	<option value="Coordinador de Campo">Coordinador de Campo</option>
									      	<option value="Coordinador de Laboratorio">Coordinador de Laboratorio</option>
									      	<option value="Coordinador de Logística">Coordinador de Logística</option>
									      	<option value="Coordinador de BBDD">Coordinador de BBDD</option>
									      	<option value="Editor de Informe">Editor de Informe</option>
									      	<option value="Especialista SIG">Especialista SIG</option>
									      	<option value="Asistente de Investigación">Asistente de Investigación</option>
									      	<option value="Otro">Otro</option>
									    </select>		
                   					</td>
                   				</tr-->
							</tbody>  
						</table>                        
                    </div> 
                    <div class="row">
                        <div class="col s4 ">
                            <button type="button" id="btnregistrar2">REGISTRAR</button>      
                        </div>                        
                        <div class="col s4 ">
                            <button type="button" id="btncancelar2">CANCELAR</button>                            
                        </div>
                    </div>                      
                <!-- </form>                 -->
            </div>
        </div>



        <script  src="frontend/js/jquery.min.js"></script>
        <!-- <script  src="frontend/js/jquery.dataTables.min.js"></script> -->
        <script  src="frontend/js/materialize.min.js"></script>        
        <script src="frontend/ajax/proyectox.js"></script>        
        <script> 
            $(document).ready(function(){
                $('select').formSelect();      
                $('.modal').modal();    
            });
        </script>

	</body>
</html>