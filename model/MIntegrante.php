<?php
	
	class MIntegrante {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();		
			}catch(Exception $e){
				throw $e;				
			}
		}


		public function insertar($dni,$nomb,$apepat,$apemat,$user,$pass,$tipo) {
			try{
				$sql="insert into integrante(dni,nombres,apellidopat,apellidomat,usuario,contrasenia,tipo) values(?,?,?,?,?,?,?)";			
				$this->conn->beginTransaction(); //crea una transacción
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($dni,$nomb,$apepat,$apemat,$user,$pass,$tipo));
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

		public function listar(){
			//$lstintegrantes=null;
			try{
				$rs=$this->conn->query("select idintegrante,dni,nombres,concat(apellidopat,' ',apellidomat) apellidos,usuario,if(tipo=1,'Admin','Invitado') tipo FROM integrante");
				$lstintegrantes=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstintegrantes;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}			

		}

/*

		public function incrementarId() {        
	        $codigo=0;
	        $rs=null;
	        try{
	            $sql = "select max(idintegrante) from integrante";
	            $rs=$this->conn->query($sql);
	            //rs.beforeFirst();
	            if ($fila=$rs->fetch()){ 
	            // if ($fila=$rs->fetch(PDO::FETCH_ASSOCARRAY)){ 
	                $codigo = $fila[0];
	            }
	            return $codigo+1; 
	        }catch(Exception $e){
	        	die('Error man: '.$e->getMessage());
	            //throw e;   
	        }
	        /*finally{
	            try{
	                if (rs!=null) rs.close();
	                if (conn!=null) conn.close();
	            }catch(Exception e){}            
	        }   
	    }    */   
	}

?>
