<?php 

	class MProyecto {

		private $conn;		
		
		public function __construct() {
			try{
				require_once("../conection/Cado.php");
				$this->conn=Cado::obtenerConexion();	
			}catch(Exception $e){
				throw $e;				
			}
		}


		public function insertar($codigo,$nomb,$idlugar) {
			try{
				$sql="insert into proyecto(codigo,nombre,idlugar) values(?,?,?)";	
				$this->conn->beginTransaction(); //crea una transacción
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($codigo,$nomb,$idlugar));
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

		public function modificar($id,$nomb,$idlugar) {
			try{
				$sql="update proyecto set nombre=?,idlugar=? where idproyecto=?";			
				$this->conn->beginTransaction(); //crea una transacción
				$pstm=$this->conn->prepare($sql);
				$pstm->execute(array($nomb,$idlugar,$id));
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

		public function obtenerProyecto($idproyecto){
			try{
				$sql="select idproyecto,codigo,nombre,idlugar,fecharegitro FROM proyecto where idproyecto=".$idproyecto;
				$rs=$this->conn->query($sql);
				$proyecto=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $proyecto;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}			

		}

		public function listar(){
			//$lstproyectos=null;
			try{
				$sql="select idproyecto,codigo,nombre,idlugar,fecharegitro FROM proyecto";
				$rs=$this->conn->query($sql);
				$lstproyectos=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstproyectos;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}			

		}

		public function obtenerCodigo() {        
	        $codigo="";
	        $hoy=getdate();
	        try{
	            $sql = "SELECT COUNT(*) FROM proyecto WHERE year(fecharegitro)=year(now())";
	            $rs=$this->conn->query($sql);
	            if ($fila=$rs->fetch()){ 
	                $valor = ((int)$fila[0])+1;
	                $codigo = "P".str_pad($valor,2,"0",STR_PAD_LEFT) . "-" . str_pad($hoy["mon"],2,"0",STR_PAD_LEFT) . substr($hoy["year"],-2);	             
	            }
	            return $codigo; 
	        }catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
			}			
		}		


///!==================================================================================================================================================////

		public function insertarParticipantes($idproyecto,$lstparticipantes){
			try{
				
				$sql="insert into proy_integ(idproyecto,idintegrante,cargo) values(?,?,?)";	
				$this->conn->beginTransaction(); //crea una transacción
				for ($i=0; $i < count($lstparticipantes); $i++) { 
					$pstm=$this->conn->prepare($sql);
					$pstm->execute(array($idproyecto,$lstparticipantes[$i]["0"],$lstparticipantes[$i]["1"]));
				}
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

		public function listarParticipantes($idproyecto){			
			try{
				$sql="select pi.idintegrante,concat(i.nombres,' ',i.apellidopat,' ',i.apellidomat) nombre, pi.cargo FROM proy_integ pi inner join integrante i on i.idintegrante=pi.idintegrante where idproyecto=".$idproyecto;
				$rs=$this->conn->query($sql);
				$lstparticipantes=$rs->fetchAll(PDO::FETCH_ASSOC);
				return $lstparticipantes;				
			}catch(Exception $e){
				throw $e;
			}finally{
				$rs=null;
				$this->conn=null;
			}
		}		

			

	}

 ?>