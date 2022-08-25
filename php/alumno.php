<?php 
	class Alumno{
		private $Id;
		private $Nombre1;
		private $Nombre2 ="";
		private $Nombre3 ="";
		private $Apellido1;
		private $Apellido2 ="";
		private $Apellido3 ="";
		private $Fechanac;
		private $Telefono;
		private $Email;
		private $Direccion;
		private $Modalidad;
		private $Plan;
		private $Curso;
		private $Curso_Específico ="";
		
		function __construct($nid,$n1,$n2,$n3,$a1,$a2,$a3,$fn,$te,$em,$di,$mod,$pl,$cur,$cures){
			/*require_once('getIp.php');
			$myip = str_replace ( ".", '', getRealIP());
			$dtz = new DateTimeZone("America/Guatemala");
			$dt = new DateTime("now", $dtz);*/
			$this->Id = $nid;//"{$myip}{$dt->format('YmdHis')}";
			$this->Nombre1=$n1;
			$this->Nombre2 = (isset($n2)?(empty($n2)?"N/A":$n2):"N/A");
			$this->Nombre3 = (isset($n3)?(empty($n3)?"N/A":$n3):"N/A");
			$this->Apellido1 = $a1;
			$this->Apellido2 = (isset($a2)?(empty($a2)?"N/A":$a2):"N/A");
			$this->Apellido3 = (isset($a3)?(empty($a3)?"N/A":$a3):"N/A");;
			$this->Fechanac = date('Y/m/d', strtotime($fn));
			$this->Telefono = $te;
			$this->Email = $em;
			$this->Direccion = $di;
			$this->Modalidad = $mod;
			$this->Plan = $pl;
			$this->Curso = $cur;
			$this->Curso_Específico = (isset($cures)?(empty($cures)?"N/A":$cures):"N/A");;
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
			$sql="INSERT INTO `alumno_preinscrito`(`ID`, `NOMBRE1`, `NOMBRE2`, `NOMBRE3`, `APELLIDO1`, `APELLIDO2`, `APELLIDO3`, `FECHA_NACIMIENTO`, `TELEFONO`, `EMAIL`, `LUGAR_DE_ORIGEN`, `Modalidad`, `Plan`, `Curso`, `Curso_Específico`) VALUES (:id,:nombre1,:nombre2,:nombre3,:apellido1,:apellido2,:apellido3,:fechanac,:telefono,:email,:direccion,:modalidad,:plan,:curso,:curso_especifico)";
			//PREPARE SQL STATEMENT
			$stmt = $con->prepare($sql);
			//LINK PARAMETERS
			$stmt->bindParam(':id', $this->Id,PDO::PARAM_STR);
			$stmt->bindParam(':nombre1', $this->Nombre1,PDO::PARAM_STR);
			$stmt->bindParam(':nombre2', $this->Nombre2,PDO::PARAM_STR);
			$stmt->bindParam(':nombre3', $this->Nombre3,PDO::PARAM_STR);
			$stmt->bindParam(':apellido1', $this->Apellido1,PDO::PARAM_STR);
			$stmt->bindParam(':apellido2', $this->Apellido2,PDO::PARAM_STR);
			$stmt->bindParam(':apellido3', $this->Apellido3,PDO::PARAM_STR);
			$stmt->bindParam(':fechanac', $this->Fechanac,PDO::PARAM_STR);
			$stmt->bindParam(':telefono', $this->Telefono,PDO::PARAM_STR);
			$stmt->bindParam(':email', $this->Email,PDO::PARAM_STR);
			$stmt->bindParam(':direccion', $this->Direccion,PDO::PARAM_STR);
			$stmt->bindParam(':modalidad', $this->Modalidad,PDO::PARAM_INT);
			$stmt->bindParam(':plan', $this->Plan,PDO::PARAM_INT);
			$stmt->bindParam(':curso', $this->Curso,PDO::PARAM_INT);
			$stmt->bindParam(':curso_especifico', $this->Curso_Específico,PDO::PARAM_STR);
			// Excecute
			if($stmt->execute()){
				return "Sus datos se han enviado correctamente!";
			}
			return "Se ha producido un error al intentar guardar sus datos!";
			
		}
		//


	}
?>