<?php
	
	require_once("../model/MIntegrante.php");
	$mintegrante=new MIntegrante();
	$resultado=$mintegrante->buscarUsuario();
	//echo "".var_dump($resultado);
	
	if ($resultado==null) {
		header("location:../view/login.php");
	}else {
		session_start();
		$_SESSION["usersesion"]=$resultado;//["tipo"];		
		header("location:../index.php");
	}

?>