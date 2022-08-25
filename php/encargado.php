<?php 
	class Encargado{
		private $HijoId;
		private $Nombre;
		private $Apellido;
		private $Telefono;
		private $Email;
		private $Comentario;
		
		function __construct($hijoid,$nombre,$apellido,$telefono,$email,$comentario){
			$this->HijoId=$hijoid;
			$this->Nombre=$nombre;
			$this->Apellido = $apellido;
			$this->Telefono = $telefono;
			$this->Email = $email;
			$this->Comentario = $comentario;
		}
		
		function construct_from_delimitedline($data,$delimiter){
			$datarray = explode($delimiter, $data);
			$this->HijoId=$datarray[0];
			$this->Nombre=$datarray[1];
			$this->Apellido = $datarray[2];
			$this->Telefono = $datarray[3];
			$this->Email = $datarray[4];
			$this->Comentario = $datarray[5];
		}
	
		public function __get($property) {
			if (property_exists($this, $property)) {
			  return $this->$property;
			}
		}

		public function __set($property, $value) {
			if (property_exists($this, $property)) {
			  $this->$property = $value;
			}
			return $this;
		}
		
		public function SaveClass(){
			require_once("conection.php");
			$conn = new Conection();
			$con = $conn->getConection();
			$sql="INSERT INTO `encargado_preinscrito`(`CODIGO`,`ID_HIJO`, `NOMBRE`, `APELLIDO`, `TELEFONO`, `EMAIL`, `OBSERVACIONES`) VALUES (NULL, :idhijo, :nombre, :apellido, :telefono, :email, :observa)";
			//PREPARE SQL STATEMENT
			$stmt = $con->prepare($sql);
			//LINK PARAMETERS
			$stmt->bindParam(':idhijo', $this->HijoId,PDO::PARAM_STR);
			$stmt->bindParam(':nombre', $this->Nombre,PDO::PARAM_STR);
			$stmt->bindParam(':apellido', $this->Apellido,PDO::PARAM_STR);
			$stmt->bindParam(':telefono', $this->Telefono,PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->Email,PDO::PARAM_STR);
			$stmt->bindParam(':observa', $this->Comentario,PDO::PARAM_STR);
			// Excecute
			if($stmt->execute()){
				return "Sus datos se han enviado correctamente!";
			}
			return "Se ha producido un error al intentar guardar sus datos!";
			
		}
		//


	}
?>