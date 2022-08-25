<?php
	function getCursoToSelect(){
		require_once("conection.php");
		$conn = new Conection();
		$con = $conn->getConection();
		$sql='SELECT * FROM curso where estado = 1 ORDER BY Nombre ASC';
		$stmt = $con->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$listas = '<option value="0" disabled selected>Selecciona el curso que te interesa</option>';
		while($row = $stmt->fetch()){
			$listas .= "<option value='$row[ID]'>$row[Nombre]</option>";
		}
		$listas .= '<option value="-1">Otro</option>';
		return $listas;
	}
	echo getCursoToSelect();
?>
