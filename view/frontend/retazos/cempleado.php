<!--/////////////////////////////////////CABECERA PARA USUARIO TIPO EMPLEADO////////////////////////////////////////////////-->

<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.jsp">OFIHOGAR PLAZA | ${sucursal.getCiudad()}</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">            
        <!-- /.Alertas -->
        <li class="dropdown">
            <a id="notificacion-credito" class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul id="notificacion-credito-ul" class="dropdown-menu dropdown-alerts">                
            </ul>
        </li>
        <!-- /.Usuario -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                ${operador.getNombres()} <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a id="btnconfiguracion"><i class="fa fa-cog fa-fw"></i> Configuración</a></li>
                <li class="divider"></li>
                <li><a href="close_session.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar</a> </li>
            </ul>
        </li>
        <!-- /.Fin-Usuario -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="separador"></li>
                <li> <a href="order_view.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> REGISTRAR VENTA</a> </li>
                <li class="separador"></li>
                <li>
                    <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> CONSULTAR<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="consult-order.php">C. VENTAS</a></li>
                        <li><a href="consult-credit.php">C. CRÉDITOS</a></li>
                        <li><a href="consult-balancediario.php">C. BALANCE DIARIO</a></li>                        
                    </ul>
                </li>
                <li class="separador"></li>
                <li><a href="customer_view.php"><i class="fa fa-address-book" aria-hidden="true"></i> CLIENTES</a></li>                 
            </ul>
        </div>
    </div>    
</nav>            

<!--modal configuración - cambio contraseña-->
<div id="modal-configuracion" class="modal fade" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title center">Cambiar Contraseña</h4>
            </div>
            <div class="moda-body">
                <div class="container-fluid">
                    <br>
                    <div class="row form-group">
                        <label class="col-sm-12">Ingrese Contraseña Actual:</label>
                        <div class="col-sm-12">
                            <input id="txtpassactual" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">    
                        <label class="col-sm-12">Ingrese Nueva Contraseña:</label>
                        <div class="col-sm-12">
                            <input id="txtpassnew" type="password" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">    
                        <label class="col-sm-12">Confirme Nueva Contraseña:</label>
                        <div class="col-sm-12">
                            <input id="txtpassconfirma" type="password" class="form-control" >
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-12">
                            <button id="btncambiarpass" class="form-control btn-primar">Guardar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="mensaje-pass" ></div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
</div> 