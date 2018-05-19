<!DOCTYPE html>
<html>
	<head>
		<title>PROYECTOS</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="frontend/css/style.css">
        <!-- <link rel="stylesheet" type="text/css" href="frontend/css/jquery.dataTables.min.css"> -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	</head>
	<body>
		
        <?php include ("frontend/retazos/cadmin.php"); ?>

        <!--div class="row">
            <div class="col s12 m4 l3">

                <ul id="slide-out" class=" nav-movile sidenav sidenav-fixed  grey lighten-5">
                  <li>
                    <div class="user-view">
                      <div class="background ">
                        <img class="responsive-img" src="frontend/img/logo.png">
                      </div>
                      <a href="#user"><img class="circle" src="frontend/img/perfil.jpg"></a>
                      <a href="#name"><span class="white-text name">Angie Clariza</span></a>
                      <a href="#email"><span class="white-text email">correa.unprg@gmail.com</span></a>
                    </div>
                  </li>
                  <li><a href="#!"  id="proyectos" class="proyectos"><i class="material-icons">folder_special</i>Proyectos</a></li>
                  <li><a href="#!"  id="integrantes"><i class="material-icons">supervisor_account</i>Integrantes</a></li>
                </ul>
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>


            </div>

            <div class="col s12 m8 l9 right"> -->
        <main class="grey lighten-4">
            <div class="container">            
                <h4>Lista de Proyectos</h4>        
                <!-- <ul>
                	<li><a href="proyect_space.php?idproy=1">Proyecto 1</a></li>
                	<li><a href="proyect_space.php?idproy=1">Proyecto 2</a></li>
                	<li>Proyecto 3</li>
                	<li>Proyecto 4</li>
                	<li>Proyecto 5</li>
                </ul>  -->
                <button class="btn modal-trigger" data-target="modal-nuevoproyecto" >NUEVO</button>

                <div class="row">
                    <div class="col s12 m6 l4">
                      <div class="card red darken-1">
                        <div class="card-content white-text">
                          <span class="card-title">PROYECTO P01-0418</span>
                          <p class="center">ESTUDIO DEL SUELO CON FINES AGRICOLAS Y FORESTALES</p>
                        </div>
                        <div class="card-action">
                          <a href="proyect_space.php?idproy=1" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">add</i></a>
                        </div>
                      </div>
                    </div>
                    <div class="col s12 m6 l4">
                      <div class="card red darken-1">
                        <div class="card-content white-text">
                          <span class="card-title">PROYECTO P01-0418</span>
                          <p class="center">ESTUDIO DEL SUELO CON FINES AGRICOLAS Y FORESTALES</p>
                        </div>
                        <div class="card-action">
                          <a href="proyect_space.php?idproy=1" class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons">add</i></a>
                        </div>
                      </div>
                    </div>
                </div>               
            </div>                 
          <!--   </div>
        </div> -->
        </main>

        

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
                        <div class="input-field col s4">
                            <select id="cbregion"> <option value="" disabled selected>REGIÓN</option> </select>                              
                        </div>
                        <div class="input-field col s4">
                            <select id="cbprovincia"> <option value="" disabled selected>PROVINCIA</option> </select>                               
                        </div>     
                        <div class="input-field col s4">
                            <select id="cbdistrito"> <option value="" disabled selected>DISTRITO</option> </select>                               
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
                $('.sidenav').sidenav();
            });
        </script>

	</body>
</html>