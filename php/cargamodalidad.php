<?php
	function getModToSelect(){
		require_once("conection.php");
		$conn = new Conection();
		$con = $conn->getConection();
		$sql='SELECT * FROM modalidad where estado = 1';
		$stmt = $con->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$listas = '<option value="0" disabled selected>Selecciona la modalidad que prefieras</option>';
		while($row = $stmt->fetch()){
			$listas .= "<option value='$row[ID]'>$row[Nombre]</option>";
		}
		return $listas;
	}
	echo getModToSelect();
?>
