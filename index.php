
<!DOCTYPE html>
<html>
<head>
	<title>AGRO-DATOS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!--Para optimizar en mobile browser-->
	<link rel="stylesheet" type="text/css" href="view/frontend/css/materialize.min.css">
</head>
<body>
	<nav>
	    <div class="nav-wrapper green lighten-1">
	      	<a href="#" class="brand-logo">HOLA MUNDO!!!</a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="">Sass</a></li>
		        <li><a href="">Components</a></li>
		        <li><a href="">JavaScript</a></li>
	      	</ul>
    	</div>
  	</nav>

  	<div class="container">
  		<div class="row">
  			<div class="col s4 ">
  				<img src="view/frontend/img/virus.png" class="responsive-img z-depth-1">
  			</div>

  			<div class="col s4">
  				<img src="view/frontend/img/rene.jpg" class="responsive-img circle z-depth-3">
  				
  			</div>
  			<div class="col s4">
  				<div class="video-container z-depth-5">
  				<!--img src="view/frontend/img/risameme.jpg" class="responsive-img"-->	
  					<!-- <iframe width="854" height="480" src="https://www.youtube.com/embed/gYvOrykiU2c" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>	 -->	
  				
  				</div>
  			</div>

  			
  		</div>	
  	</div>

  	<div class="container">
  		<div class="row">
	  		<div class="col s12">
		  		<table id="tblintegrante" class=" hoverable centered responsive-table">
		            <thead>
		                <tr>
		                    <th class="">DNI</th>
		                    <th class="center">NOMBRES</th>
		                    <th class="center">APELLIDOS</th>   
		                    <th class="center">USUARIO</th>
		                    <th class="center">TIPO</th>
		                </tr>
		            </thead>
		            <tbody id="tbody-integrantes" ><!--LLENADO EN AJAX--> 
		            	<tr>
		            		<td>77076071 <span class=" new badge">Good</span></td>
		            		<td>JAMES PAUL</td>
		            		<td>ROMERO DE LA CRUZ</td>
		            		<td>JAMESROMERO</td>
		            		<td>ADMIN</td>
		            	</tr>
		            	<tr>
		            		<td>77076071</td>
		            		<td>ZEYLA LIZETH</td>
		            		<td>ROMERO DE LA CRUZ</td>
		            		<td>JAMESROMERO</td>
		            		<td>ADMIN</td>
		            	</tr>
		            	<tr>
		            		<td>77076071</td>
		            		<td>KAREN YOMIRA</td>
		            		<td>ROMERO DE LA CRUZ</td>
		            		<td>JAMESROMERO</td>
		            		<td>ADMIN</td>
		            	</tr>
		            </tbody>
		        </table>
		    </div>
		</div>
    </div>

    <div class="container">
  		<div class="row">
  			<div class="col s4 ">
  				<a href="" class="btn btn-large">Boton</a>
  			</div>

  			<div class="col s4">
  				<a href="" class="btn-flat btn-large">Boton</a>
  			</div>
  			<div class="col s4">
  				<a href="" class="btn-floating yellow btn-large">Boton</a>
  			</div>

  			
  		</div>	
  	</div>

  	<div class="container">
  		<div class="row">
  			<div class="col s6">
  				<div class="card">
  					<div class="card-image">
  						<img src="view/frontend/img/rene.jpg" class="responsive-img">
  					</div>
  					<div class="card-content">
  						<h1 class="card-title">SISTEMA DE GRILLAS</h1>
  						*class=container: toma 70% ancho pantalla y centra el contenido.
  						*class=row: determina una fila
  						*class=col s12: determina el tamaño de cada columna(1-12)
  					</div>
  					<div class="card-action">
  						<a href="" class="btn">Boton</a>
  						<a href="" class="btn-floating yellow">Boton</a>
  					</div>
  				</div>  				
  			</div>
  			<div class="col s6">
  				<div class="card">
  					<div class="card-image">
  						<img src="view/frontend/img/rene.jpg" class="responsive-img">
  					</div>
  					<div class="card-content">
  						<h1 class="card-title activator">SISTEMA DE GRILLAS</h1>  
  					</div>
  					<div class="card-reveal">
  						<h1 class="card-title activator">SISTEMA DE GRILLAS</h1>
  						*class=container: toma 70% ancho pantalla y centra el contenido.
  						*class=row: determina una fila
  						*class=col s12: determina el tamaño de cada columna(1-12)
  					</div>
  					<div class="card-action">
  						<a href="" class="btn">Boton</a>
  						<a href="" class="btn-floating yellow">Boton</a>
  					</div>
  				</div>  
  				
  			</div>  			
  		</div>
  	</div>

  	<div class="container">
  		<div class="row">
  			<div class="col s12">
  				<h1>FORMULARIOS</h1>
  				<form action="#">
  					<div class="row">
			  			<div class="col s4">
			  				<div class="input-field">
			  					<input type="text" id="txtdni">
			  					<label for="txtdni">DNI</label>
			  				</div>  				
			  			</div>
			  			<div class="col s4">
			  				<div class="input-field">
			  					<input type="text" id="txtnombres">
			  					<label for="txtnombres">NOMBRES</label>
			  				</div>  				
			  			</div>
			  			<div class="col s4">
			  				<div class="input-field">
			  					<input type="text" id="txtapellidos">
			  					<label for="txtapellidos">APELLIDOS</label>
			  				</div>  				
			  			</div>
			  		</div>
			  		<div class="row">  	
			  			<div class="col s4">
			  				<div class="input-field">
			  					<textarea id="txtarea" class="materialize-textarea"></textarea>
			  					<label for="textarea">DESCRIPCIÓN</label>  					
			  				</div>  				
			  			</div>  
			  			<div class="col s4">
			  				<div class="input-field">
				  				<select id="cbtipo">
				  					<option value="" disabled selected>Elige tipo</option>
				  					<option value="1">ADMIN</option>
				  					<option value="2">INVITADO</option>
				  					<option value="3">OTROS</option>
				  				</select>	
				  			</div>			
			  			</div>  
			  			<div class="col s4">
			  				<div class="range-field">
			  					<input type="range" min="0" max="100" name="">
			  				</div>				
			  			</div>  
			  		</div>
			  		<div class="row">  	
			  			<div class="col s4">
			  				<label for="txtfecha">Fecha type TEXT</label>
			  				<input type="text" class="datepicker" id="txtfecha">	
			  			</div>  			  			
			  			<div class="col s4">
			  				<p>
						      <label>
						        <input name="group1" type="radio" checked />
						        <span>Red</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input name="group1" type="radio" />
						        <span>Yellow</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input class="with-gap" name="group1" type="radio"  />
						        <span>Green</span>
						      </label>
						    </p>    	
			  			</div>  
			  			<div class="col s4">
			  				<p>
						      <label>
						        <input type="checkbox" />
						        <span>Red</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input type="checkbox" checked="checked" />
						        <span>Yellow</span>
						      </label>
						    </p>
						    <p>
						      <label>
						        <input type="checkbox" class="filled-in" checked="checked" />
						        <span>Filled in</span>
						      </label>
						    </p>
			  			</div> 
			  		</div>
		  		</form>
	  		</div>
  		</div>
  	</div>


	<script  src="view/frontend/js/jquery.min.js"></script>
	<script  src="view/frontend/js/materialize.min.js"></script>
	<script> 
		$(document).ready(function(){
			$('select').formSelect();
			$('.datepicker').datepicker();
		});
	</script>
</body>
</html>