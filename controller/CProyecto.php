<?php 

if (isset($_POST['op'])) {
	
	require_once("../model/MProyecto.php");
		
	try {
		$op=$_POST['op'];
		$mproyecto=new MProyecto();

	    switch ($op) {
	    	case 'listarproyectos':
	    		$lstproyectos=$mproyecto->listar(); 
		        if(count($lstproyectos)>0){		        	
		        	echo json_encode($lstproyectos);  
		        }else{
		            echo "vacio";
		        }
	    		break;

	    	case 'registrar':	    		
		    	$datos=$_POST["datos"];	   
		    	$codigo=$mproyecto->obtenerCodigo();  	    	
		   		$mproyecto->insertar($codigo,$datos["nombre"],$datos["idlugar"]);
		    	echo "true";		    	
	    		break;

			case 'editar':	    		
		    	$datos=$_POST["datos"];	     	    	
		   		$mproyecto->modificar($datos["idproyecto"],$datos["nombre"],$datos["ubigeo"]);
		    	echo "true";		    	
	    		break;

	    	case 'cargardatos':	    		
		   		$proyecto=$mproyecto->obtenerProyecto($_POST["idproyecto"]);
		    	if(count($proyecto)>0){		        	
		        	echo json_encode($proyecto);  
		        }else{
		            echo "vacio";
		        }
	    		break;

	    	case 'registrarParticipantes':	    
	    		$idproyecto=$_POST["idproyecto"];		
		    	$lstparticipantes=$_POST["lstparticipantes"];
		   		$mproyecto->insertarParticipantes($idproyecto,$lstparticipantes);
		    	echo "true";		    	
	    		break;

	    	case 'listarParticipantes':	    
	    		$idproyecto=$_POST["idproyecto"];		    	
	    		$lstparticipantes=$mproyecto->listarParticipantes($idproyecto); 
		        if(count($lstparticipantes)>0){		        	
		        	echo json_encode($lstparticipantes);  
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