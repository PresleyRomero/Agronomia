<?php
	
	class MPunto {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();	
			}catch(Exception $e){
				throw $e;				
			}
		}


		public function insertar($coordx,$coordy,$altitud,$fecha,$hora,$localidad,$idintegrante) {
			try{
				$sql="insert into punto(coordenadax,coordenaday,altitud,fecha,hora,localidad,idintegrante) values(?,?,?,?,?,?,?)";			
				$this->conn->beginTransaction(); //crea una transacción
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($coordx,$coordy,$altitud,$fecha,$hora,$localidad,$idintegrante));
				$this->conn->commit(); //confirma transacción y actualiza en BD.
				return true;
			}
			catch(Throwable $t){ //captura "Excepciones" y "Errores"
				$this->conn->rollback();//revierte cambios realizados en transacción
				throw $t;
			}finally{
				$pstm=null;
				$this->conn=null;
			}
		}

		public function modificar($idpunto,$coordx,$coordy,$altitud,$fecha,$hora,$localidad,$idintegrante) {
			try{
				$sql="update punto set coordenadax=?,coordenaday=?,altitud=?,fecha=?,hora=?,localidad=?,idintegrante=? where idpunto=?";	
				$this->conn->beginTransaction(); //crea una transacción
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($coordx,$coordy,$altitud,$fecha,$hora,$localidad,$idintegrante,$idpunto));
				$this->conn->commit(); //confirma transacción y actualiza en BD.
				return true;
			}
			catch(Throwable $t){ //captura "Excepciones" y "Errores"
				$this->conn->rollback();//revierte cambios realizados en transacción
				throw $t;
			}finally{
				$pstm=null;
				$this->conn=null;
			}
		}

		// public function obtenerPunto($idpunto){
		// 	try{
		// 		$sql="select idpunto,coordenadax,coordenaday,altitud,fecha,hora,localidad,idintegrante from punto where idpunto=".$idpunto;
		// 		$rs=$this->conn->query($sql);
		// 		$punto=$rs->fetchAll(PDO::FETCH_ASSOC);
		// 		return $punto;				
		// 	}catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$rs=null;
		// 		$this->conn=null;
		// 	}			
		// }

		// public function listar(){
		// 	//$lstpuntos=null;
		// 	try{
		// 		$sql="select idpunto,coordenadax,coordenaday,altitud,fecha,hora,localidad,idintegrante from punto";
		// 		$rs=$this->conn->query($sql);
		// 		$lstpuntos=$rs->fetchAll(PDO::FETCH_ASSOC);
		// 		return $lstpuntos;				
		// 	}catch(Exception $e){
		// 		throw $e;
		// 	}finally{
		// 		$rs=null;
		// 		$this->conn=null;
		// 	}			
		// }

	}

?>
