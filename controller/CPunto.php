<?php

if (isset($_POST['op'])) {
		
	require_once("../model/MPunto.php");
		
	try {
		$op=$_POST['op'];
		$mpunto=new MPunto();

	    switch ($op) {
	    	// case 'listarpuntos':
	    	// 	$lstpuntos=$mpunto->listar(); 
		    //     if(count($lstpuntos)>0){		        	
		    //     	echo json_encode($lstpuntos);  
		    //     }else{
		    //         echo "vacio";
		    //     }
	    	// 	break;

	    	case 'registrar':	    		
		    	$datos=$_POST["datos"];	     	    	
		   		$mpunto->insertar($datos["coordx"],$datos["coordy"],$datos["altitud"],$datos["fecha"],$datos["hora"],$datos["localidad"],$datos["idintegrante"]);
		    	echo "true";		    	
	    		break;

			// case 'editar':	    		
		 //    	$datos=$_POST["datos"];	     	    	
		 //   		$mpunto->modificar($datos["id"],$datos["dni"],$datos["nombres"],$datos["apellidopat"],$datos["apellidomat"],$datos["tipo"]);
		 //    	echo "true";		    	
	  //   		break;

	  //   	case 'cargardatos':	    		
		 //   		$punto=$mpunto->obtenerPunto($_POST["idpunto"]);
		 //    	if(count($punto)>0){		        	
		 //        	echo json_encode($punto);  
		 //        }else{
		 //            echo "vacio";
		 //        }
	  //   		break;

	    	default:	
	    		echo "maldita primaveraaaaaaa";
	    		break;
	    }  

	} catch (Throwable $ee) {
		echo "CAPTURADO!!: ".$ee->getMessage().". Archivo: ".$ee->getFile().". Linea: ".$ee->getLine();
	}
}

?>