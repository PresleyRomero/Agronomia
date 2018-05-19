<?php 

	class MAuxiliar {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();	
			}catch(Exception $e){
				throw $e;				
			}
		}		

		public function listarRegiones(){
			try{
				$sql="select * from lugar where ubigeo like '%0000'";
				$rs=$this->conn->query($sql);
				$lstregiones=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstregiones;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}	
		}

		public function listarProvincias($prefijoreg){
			try{
				$sql="select * from lugar where ubigeo like '".$prefijoreg."%00' and ubigeo not like '".$prefijoreg."0000'";
				$rs=$this->conn->query($sql);
				$lstprovs=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstprovs;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}	
		}		

		public function listarDistritos($prefijoprov){
			try{
				$sql="select * from lugar where ubigeo like '".$prefijoprov."%' and ubigeo not like '".$prefijoprov."00'";
				$rs=$this->conn->query($sql);
				$lstdists=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstdists;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}	
		}

	}

 ?>