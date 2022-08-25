<?php
	function getTerms(){
		include("conection.php");
		$conn = new Conection();
		$con = $conn->getConection();
		$sql='SELECT * FROM terminosycondiciones where tipo = 0 and estado = 1';
		$stmt = $con->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();
		$row = $stmt->fetch();
		return json_encode($row);
	}
	
?>
