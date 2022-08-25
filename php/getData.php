<?php
	require_once('conection.php');
	//create connection object
	$dbcon = new Conection();
	//create a pdo connection object
	$con = $conn->getConection();	
	$sql='SELECT * FROM terminosycondiciones';
	if(isset($_POST['query'])){
		$sql=$_POST['query'];
	}
	$stmt = $con->prepare($sql);
	if(isset($_POST['parameters'])){
		// Bind y execute:
		if (array_key_exists('parameters', $_POST)) {
			$story_pieces = explode('|' $_POST['parameters']);
			foreach($story_pieces as $piece) {
			if ($conditional_count == 0) {
				$where_clause .= 'story LIKE ? ';
				$conditional_count++;
		   } else {
				$where_clause .= 'AND story LIKE ? ';
				$conditional_count++;
		   }
       }
}

// then after you've prepared

if (isset($story_pieces)) {
    foreach($story_pieces as $key => &$piece) {
        $piece = "%" . $piece . "%";
        $sth->bindParam($key + 1, $piece, PDO::PARAM_STR);
    }
}
	}
	if(isset()){
		
	}
	

	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$stmt->execute();
	echo "<br/>";
	while ($row = $stmt->fetch()) {
	  print_r($row);
	  print "<p><b>{$row['titulo']}</b></p><textarea>{$row['contenido']}</textarea>";
	}
	/*
	echo $dbcon->__get('pdodbtype');
	echo "</br>";
	echo $dbcon->__get('host');
	echo "</br>";
	echo $dbcon->__get('dbname');
	echo "</br>";
	echo $dbcon->__get('user');
	echo "</br>";
	echo $dbcon->__get('password');
	echo "</br>";
	$dbcon = null;
	*/
?>