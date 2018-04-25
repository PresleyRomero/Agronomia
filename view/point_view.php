
<!DOCTYPE html>
<html>
    <head>
        <title>POINTS</title>    
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
                <h4>NUEVO PUNTO</h4>
                <form id="form-punto" action="#" >
                    <div class="row">
                        <div class="input-field col s4">                                
                            <input type="text" id="txtcoordx" value="">                            
                            <label for="txtcoordx">COORDENADA X (*)</label>
                        </div>                        
                    
                        <div class="input-field col s4">
                            <input type="text" id="txtcoordy" value="">
                            <label for="txtcoordy">COORDENADA Y (*)</label>
                        </div>   
                        <div class="input-field col s4">
                            <input type="text" id="txtaltitud" value="">                          
                            <label for="txtaltitud">ALTITUD (*)</label>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input type="date" id="txtfecha" value="">                            
                            <label for="txtfecha">FECHA (*)</label>
                        </div>                    
                        <div class="input-field col s4">
                            <input type="text" id="txthora" class="timepicker" value="">                            
                            <label for="txthora">HORA</label>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="txtlocalidad" value="">                            
                            <label for="txtlocalidad">LOCALIDAD</label>
                        </div>                        
                    </div>
                   <div class="row">
                        <!-- <div class="input-field col s12"> -->
                            <select id="cbparticipantes">                                            
                            </select>   
                        <!-- </div> -->
                    </div>
                                
                    <div class="row">
                        <div class="col s4 ">
                            <button type="button" id="btnregistrar">REGISTRAR</button>
                                <!--i class="fa fa-floppy-o" aria-hidden="true"></i> REGISTRAR-->
                            
                            <!-- <a href="" class="btn">REGISTRAR</a> -->
                        </div>                        
                        <div class="col s4 ">
                            <button type="button" id="btncancelar">CANCELAR
                                <!--i class="fa fa-times" aria-hidden="true"></i> CANCELAR>-->
                            </button>
                            <!-- <a href="" class="btn red">CANCELAR</a> -->
                        </div>
                    </div>   
                </form> 
                    

                    <a class="btn modal-trigger" href="#modal1">NUEVO</a>
                    <button class="btn modal-trigger" data-target="modal-nuevopunto" >NUEVO</button>
                <!-- </div>                  -->
            </div>
        </div>

        

        <!--Modal Nuevo punto-->                  
        <div class="modal" id="modal-nuevopunto">
            <div class="modal-content">            
                               
            </div>
        </div>
        
        <!--Modal Editar punto-->                  
        <div class="modal" id="modal-editarpunto">
            <div class="modal-content">            
                <h4>EDITAR INTEGRANTE</h4>
                <form id="form-punto2" action="#" >
                    <input type="text" id="txtidpunto2" hidden="">   
                    <div class="row">
                        <div class="input-field col s12">                                
                            <input type="text" id="txtdni2" value="">                            
                            <label for="txtdni2">DNI(*)</label>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input type="text" id="txtnombres2" value="">
                            <label for="txtnombres2">NOMBRES(*)</label>
                        </div>   
                        <div class="input-field col s4">
                            <input type="text" id="txtapellidopat2" value="">                          
                            <label for="txtapellidopat2">PRIMER APELLIDO(*)</label>
                        </div> 
                        <div class="input-field col s4">
                            <input type="text" id="txtapellidomat2" value="">                            
                            <label for="txtapellidomat2">SEGUNDO APELLIDO(*)</label>
                        </div>                        
                    </div>                    
                    <div class="row">
                        <div class="input-field col s12">
                            <select id="cbtipo2">
                                <option value="" disabled selected>Elige tipo</option>
                                <option value="1">ADMIN</option>
                                <option value="2">INVITADO</option>                            
                            </select>   
                        </div>
                    </div>
                                
                    <div class="row">
                        <div class="col s4 ">
                            <button type="button" id="btnguardarcambios">GUARDAR CAMBIOS</button>
                                <!--i class="fa fa-floppy-o" aria-hidden="true"></i> REGISTRAR-->
                            
                            <!-- <a href="" class="btn">REGISTRAR</a> -->
                        </div>                        
                        <div class="col s4 ">
                            <button type="button" id="btncancelar2">CANCELAR
                                <!--i class="fa fa-times" aria-hidden="true"></i> CANCELAR>-->
                            </button>
                            <!-- <a href="" class="btn red">CANCELAR</a> -->
                        </div>
                    </div>   
                </form>                
            </div>
        </div>

        <script  src="frontend/js/jquery.min.js"></script>
        <!-- <script  src="frontend/js/jquery.dataTables.min.js"></script> -->
        <script  src="frontend/js/materialize.min.js"></script>        
        <script src="frontend/ajax/puntox.js"></script>        
        
        <script> 
            $(document).ready(function(){                
                // $('select').formSelect();      
                $('.modal').modal();    
                $('.timepicker').timepicker();
                cargarParticipantes();

            });
        </script>


    </body>
</html>