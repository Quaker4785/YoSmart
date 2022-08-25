<?php
	class Conection{
		private $host = "yo-smart.org";
		private $dbname = "yosmabqz_public_preIns_YS_DB";
		private $user = "yosmabqz_public_user";
		private $password = "Publicuserp@ssw0rd";//y0sm@rt#@c@d3m1
		private $conexion = null;
		private $pdodbtype = "mysql";
		
		function __construct($_user="yosmabqz_public_user",$_password="Publicuserp@ssw0rd",$_host="yo-smart.org",$_dbname="yosmabqz_public_preIns_YS_DB",$_pdodbtype="mysql") {
			$this->host = $_host;
			$this->dbname = $_dbname;
			$this->user = $_user;
			$this->password = $_password;
			$this->conexion = null;
			$this->pdodbtype = $_pdodbtype;
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
		
		public function getConection(){
			try {
				$dsn = "$this->pdodbtype:host=$this->host;dbname=$this->dbname";
				$options = array(
				  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
				);
				$dbh = new PDO($dsn, $this->user, $this->password);
				return $dbh;
			} catch (PDOException $e){
				echo $e->getMessage();
			}
		}
		function __destruct() {
			//print "Destruyendo " . __CLASS__ . "\n";
		}
	}
	// para cerrar la conexion es necesario igualar la conexion a null 
	//en el lugar en el que se cree la instancia del objeto luego de
	//utilizarlo para destruir el objeto.
	//<?php
	//$mbd = new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
	// Utilizar la conexión aquí
	//$sth = $mbd->query('SELECT * FROM foo');
	// Ya se ha terminado; se cierra
	//$sth = null;
	//$mbd = null;
	//
	/*
		$conn = new Conection();
		$con = $conn->getConection();
		
		$sql='SELECT * FROM terminosycondiciones';
		$stmt = $con->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		echo "<br/>";
		while ($row = $stmt->fetch()) {
		  print_r($row);
		  print "<p><b>{$row['titulo']}</b></p><textarea>{$row['contenido']}</textarea>";
		}
	*/
	
?>