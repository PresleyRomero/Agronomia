<?php

if (isset($_POST['op'])) {
		
	require_once("../model/MIntegrante.php");
		
	try {
		$op=$_POST['op'];
		$mintegrante=new MIntegrante();

	    switch ($op) {
	    	case 'listarintegrantes':
	    		$lstintegrantes=$mintegrante->listar(); 
		        if(count($lstintegrantes)>0){		        	
		        	echo json_encode($lstintegrantes);  
		        }else{
		            echo "vacio";
		        }
	    		break;

	    	case 'registrar':	    		
		    	$datos=$_POST["datos"];	     	    	
		   		$mintegrante->insertar($datos["dni"],$datos["nombres"],$datos["apellidopat"],$datos["apellidomat"],$datos["usuario"],$datos["contrasenia"],$datos["tipo"]);
		    	echo "true";		    	
	    		break;

			case 'editar':	    		
		    	$datos=$_POST["datos"];	     	    	
		   		$mintegrante->modificar($datos["id"],$datos["dni"],$datos["nombres"],$datos["apellidopat"],$datos["apellidomat"],$datos["tipo"]);
		    	echo "true";		    	
	    		break;

	    	case 'cargardatos':	    		
		   		$integrante=$mintegrante->obtenerIntegrante($_POST["idintegrante"]);
		    	if(count($integrante)>0){		        	
		        	echo json_encode($integrante);  
		        }else{
		            echo "vacio";
		        }
	    		break;

	    	default:	
	    		echo "maldita primaveraaaaaaa";
	    		break;
	    }  

	} catch (Throwable $ee) {
		echo "CAPTURADO!!: ".$ee->getMessage().". Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
	}
}

?>