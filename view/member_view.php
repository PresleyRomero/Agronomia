
<!DOCTYPE html>
<html>
    <head>
    	<title>INTEGRANTES</title>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="frontend/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="frontend/css/jquery.dataTables.min.css">
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper green lighten-1">
                    <a href="#" class="brand-logo">AGRO-DATOS</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="">Login</a></li>
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
                    <h4>LISTA DE INTEGRANTES</h4>
                    <table id="tblintegrante" width="100%" class="display">
                        <thead>
                            <tr>
                                <th class="center">DNI</th>
                                <th class="center">NOMBRES</th>
                                <th class="center">APELLIDOS</th>   
                                <th class="center">USUARIO</th>
                                <th class="center">TIPO</th>
                                <th class="center">ACCIONES</th>
                            </tr>
                        </thead>
                        <!-- <tbody id="tbody-integrantes">LLENADO EN AJAX> </tbody> -->
                    </table>

                    <a class="btn modal-trigger" href="#modal1">NUEVO</a>
                    <button class="btn modal-trigger" data-target="modal-nuevointegrante" >NUEVO</button>
                <!-- </div>                  -->
            </div>
        </div>

        

        <!--Modal nuevo integrante-->                  
        <div class="modal" id="modal-nuevointegrante">
            <div class="modal-content">            
                <h4>NUEVO INTEGRANTE</h4>
                <form id="form-integrante" action="#" >
                    <div class="row">
                        <div class="input-field col s12">                                
                            <input type="text" id="txtdni" value="">                            
                            <label for="txtdni">DNI(*)</label>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s4">
                            <input type="text" id="txtnombres" value="">
                            <label for="txtnombres">NOMBRES(*)</label>
                        </div>   
                        <div class="input-field col s4">
                            <input type="text" id="txtapellidopat" value="">                          
                            <label for="txtapellidopat">PRIMER APELLIDO(*)</label>
                        </div> 
                        <div class="input-field col s4">
                            <input type="text" id="txtapellidomat" value="">                            
                            <label for="txtapellidomat">SEGUNDO APELLIDO(*)</label>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="txtusuario" value="">                            
                            <label for="txtusuario">USUARIO</label>
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" id="txtcontrasenia" value="">                            
                            <label for="txtcontrasenia">CONTRASEÑA</label>
                        </div>                        
                    </div>
                   <div class="row">
                        <div class="input-field col s12">
                            <select id="cbtipo">
                                <option value="" disabled selected>Elige tipo</option>
                                <option value="1">ADMIN</option>
                                <option value="2">INVITADO</option>                            
                            </select>   
                        </div>
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
            </div>
        </div>
        
        <script  src="frontend/js/jquery.min.js"></script>
        <script  src="frontend/js/jquery.dataTables.min.js"></script>
        <script  src="frontend/js/materialize.min.js"></script>        
        <script src="frontend/ajax/integrantex.js"></script>        
        <script> 
            $(document).ready(function(){
                $('select').formSelect();      
                $('.modal').modal();    
            });
        </script>

    </body>
</html>