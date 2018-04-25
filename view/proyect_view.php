<!DOCTYPE html>
<html>
	<head>
		<title>PROYECTOS</title>
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
                    <h4>LISTA DE PROYECTOS</h4>        
                    <ul>
                    	<li><a href="proyect_space.php?idproy=1">Proyecto 1</a></li>
                    	<li><a href="proyect_space.php?idproy=1">Proyecto 2</a></li>
                    	<li>Proyecto 3</li>
                    	<li>Proyecto 4</li>
                    	<li>Proyecto 5</li>
                    </ul>           

                    
                    <button class="btn modal-trigger" data-target="modal-nuevoproyecto" >NUEVO</button>
                <!-- </div>                  -->
            </div>
        </div>

        

        <!--Modal Nuevo proyecto-->                  
        <div class="modal" id="modal-nuevoproyecto">
            <div class="modal-content">            
                <h4>NUEVO PROYECTO</h4>
                <form id="form-proyecto" action="#" >                    
                   	<div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="txtnombre" value="">
                            <label for="txtnombre">NOMBRE(*)</label>
                        </div>            
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="txtubigeo" value="">                            
                            <label for="txtubigeo">UBIGEO</label>
                        </div>                        
                    </div>     
                    <div class="row">
                        <div class="col s4 ">
                            <button type="button" id="btnregistrar">REGISTRAR</button>      
                        </div>                        
                        <div class="col s4 ">
                            <button type="button" id="btncancelar">CANCELAR</button>                            
                        </div>
                    </div>   
                </form>                
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