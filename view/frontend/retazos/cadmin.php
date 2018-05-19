<!--/////////////////////////////////////CABECERA PARA USUARIO TIPO ADMIN ////////////////////////////////////////////////-->

<!--nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
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
    <!--ul class="nav navbar-top-links navbar-right">
        <!-- /.Alertas -->
        <!--li class="dropdown">
            <a id="notificacion-letra" class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul id="notificacion-letra-ul" class="dropdown-menu dropdown-alerts">            
            </ul>
        </li>
        <!-- /.Fin-Alertas -->
        <!-- /.Alertas -->
        <!--li class="dropdown">
            <a id="notificacion-credito" class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul id="notificacion-credito-ul" class="dropdown-menu dropdown-alerts">
                
            </ul>
        </li>
        <!-- /.Usuario -->
        <!--li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                ${operador.getNombres()} <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a id="btnconfiguracion"><i class="fa fa-cog fa-fw"></i> Configuración</a></li>
                <li class="divider"></li>
                <div id="div-sucursal"> </div>
                <li class="divider"></li>
                <li><a href="close_session.php"><i class="fa fa-sign-out fa-fw"></i> Cerrar</a></li>
            </ul>
        </li>
        <!-- /.Fin-Usuario -->
    <!--/ul>
    <!-- /.navbar-top-links -->

    <!--div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="separador"></li>
                <li><a href="home.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> ESTADÍSTICAS</a></li>
                <li class="separador"></li>
                <li><a href="order_view.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> REGISTRAR VENTA</a></li>
                <li><a href="buy_view.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i> REGISTRAR COMPRA</a></li>
                <li><a href="guide_view.php"><i class="fa fa-list-alt" aria-hidden="true"></i> R. GUIA DE REMISIÓN</a></li>
                <li class="separador"></li>
                <li>
                    <a href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> CONSULTAR<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="consult-order.php">C. VENTAS</a></li>
                        <li><a href="consult-credit.php">C. CRÉDITOS</a></li>
                        <li><a href="consult-buy.php">C. COMPRAS</a></li>                        
                        <li><a href="consult-guide.php">C. GUIAS REMISIÓN</a></li>
                    </ul>
                </li>                
                <li class="separador"></li>
                <li><a href="product_view.php"><i class="fa fa-table fa-fw"></i> PRODUCTOS</a></li>
                <li><a href="customer_view.php"><i class="fa fa-address-book" aria-hidden="true"></i> CLIENTES</a></li>                
                <li><a href="supplier_view.php"><i class="fa fa-university" aria-hidden="true"></i> PROVEEDORES</a></li>
                <li><a href="transport_view.php"><i class="fa fa-truck" aria-hidden="true"></i> TRANSPORTISTA</a></li>
                <li><a href="user_view.php"><i class="fa fa-users" aria-hidden="true"></i> USUARIOS</a></li>
                <li class="separador"></li>
                <li><a href="permiso.jsp"><i class="fa fa-hand-o-right" aria-hidden="true"></i> PERMISOS</a></li>
            </ul>
        </div>
    </div>
</nav>
            


<!--modal configuración - cambio contraseña-->
<!--div id="modal-configuracion" class="modal fade" role="dialog">
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
            

--> 

<!---------------------------------------------------------------------------------------------------------------->

<header id="header" class="">
    <div class="navbar-fixed">
      <nav class="navegation light-green accent-5  "  style="padding: 0 2em">
        <div class="nav-wrapper">
         <!--  <div class="logo">
            <a href="#" class="brand-logo">AGRO-DATOS</a>
          </div> -->

          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li ><a href="login.php" class="">Login</a> </li>              
            <li class="alerta">
              <a href="#" class="link" ><i class="material-icons" >notifications_none</i><span class="new badge">4</span></a> 
            </li>
            <li>
              <a class='dropdown-trigger  ' href='#!' data-target='dropdown1' >
                <span class="avatar-status ">
                  <img src="frontend/img/perfil.jpg" alt="perfil">
                </span>
              </a>
              <ul id='dropdown1' class='dropdown-content'>
                <li><a href="#!"><i class="material-icons">face</i>Profile</a></li>
                <li><a href="#!"><i class="material-icons">settings</i>Setting</a></li>
                <li><a href="#!"><i class="material-icons">help</i>Help</a></li>
                <li class="divider" tabindex="-1"></li>
                <li><a href="#!"><i class="material-icons">lock</i>Lock</a></li>
                <li><a href="#!"><i class="material-icons">keyboard_tab</i>Lagout</a></li>
              </ul>
            </li>
          </ul>
        </div>

      </nav>

    </div>

    <ul id="slide-out" class=" nav-movile sidenav sidenav-fixed  grey lighten-5">
      <li>
        <div class="user-view">
          <div class="background ">
            <img class="responsive-img" src="frontend/img/logo.png">
          </div>
          <a href="#user"><img class="circle" src="frontend/img/risameme.jpg"></a>
          <a href="#name"><span class="white-text name">Angie Clariza</span></a>
          <a href="#email"><span class="white-text email">correa.unprg@gmail.com</span></a>
        </div>
      </li>
      <li><a href="#!"  id="proyectos" class="proyectos"><i class="material-icons">folder_special</i>Proyectos</a></li>
      <li><a href="#!"  id="integrantes"><i class="material-icons">supervisor_account</i>Integrantes</a></li>
    </ul>
    <div class="grey lighten-4"><a href="#" data-target="slide-out" class="sidenav-trigger "><i class="material-icons">menu</i></a></div>

    
</header>



