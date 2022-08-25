<?php 
	include("Icons/getIcon.php");
	include("Icons/getImgIcon.php");
	require_once("php/alumno.php");
	require_once("php/encargado.php");
	require_once('php/getIp.php');
	$iconid=0;
	$imgid=0;
	$studresp='';
	try{
		$myip = str_replace ( ".", '', getRealIP());
		$dtz = new DateTimeZone("America/Guatemala");
		$dt = new DateTime("now", $dtz);
		$autogenerateID = "{$myip}{$dt->format('YmdHis')}";
		//echo $autogenerateID;
		$newStud = new Alumno($autogenerateID,$_POST['Name1'],$_POST['Name2'],$_POST['Name3'],$_POST['Lastname1'],$_POST['Lastname2'],$_POST['Lastname3'],$_POST['fnac'],$_POST['telf'],$_POST['email'],$_POST['direc'],$_POST['modalidad'],$_POST['plan'],$_POST['curso'],$_POST['curext']);
		
		$studresp .= $newStud->SaveClass();
		
	}catch(Exception $e){
		echo 'Ha ocurrido un ERROR: '.$e->getMessage()."\n";
	}	
	if(isset($_POST['flatencinfo'])){
		$primitive_delimiter = '%%%%%';
		$delimiter = '/////';
		$auxinnerarray = $_POST['flatencinfo'];
		foreach (explode($primitive_delimiter,$auxinnerarray) as $row) {
			 $datarray[] = explode($delimiter,$row);
		}
		
		//print_r($datarray);
		foreach($datarray as $obj){
			if(strlen(trim($obj[0])) > 0 && strlen(trim($obj[1])) > 0 && strlen(trim($obj[2])) > 0 && strlen(trim($obj[3])) > 0){
				$resp = new Encargado($newStud->__get("Id"),$obj[0],$obj[1],$obj[2],$obj[3],$obj[4]);
				$newresponsable[] = $resp;
			}
			/*echo "<p class=\"text-white\">Nombre:      {$obj[0]} </p>";
			echo "<p class=\"text-white\">Apellid:     {$obj[1]} </p>";
			echo "<p class=\"text-white\">Telefono:    {$obj[2]} </p>";
			echo "<p class=\"text-white\">Email:       {$obj[3]} </p>";
			echo "<p class=\"text-white\">Comentarios: {$obj[4]} </p>";*/
		}
		$resresp='';
		foreach($newresponsable as $obj){
			$resresp.=$obj->SaveClass();
			/*echo "<p class=\"text-white\">Id:          {$obj->__get("HijoId")} </p>";
			echo "<p class=\"text-white\">Nombre:      {$obj->__get("Nombre")} </p>";
			echo "<p class=\"text-white\">Apellid:     {$obj->__get("Apellido")} </p>";
			echo "<p class=\"text-white\">Telefono:    {$obj->__get("Telefono")} </p>";
			echo "<p class=\"text-white\">Email:       {$obj->__get("Email")} </p>";
			echo "<p class=\"text-white\">Comentarios: {$obj->__get("Comentario")} </p>";*/
		}
	}
?>
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>YO.SMART ACADEMY</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Preinscripciones Yo.Smart">
    <meta name="description" content="Formulario de Preinscripciones para los cursos de Yo.Smart Academ">    
	<!--bootstrap's css-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/styles.css" rel="stylesheet" type="text/css"/>   
	<link rel="stylesheet" href="Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">	
  </head>  
  <body class="bg-ysblue">    

<nav class="navbar navbar-expand-lg navbar-light bg-light green-bg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand addmargint" href="../ys-principal/mainpage.php"><img src="<?php echo getImgIcon($imgid); ?>" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded addmargint"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="../ys-principal/mainpage.php"><button type="button" class="btn btn-outline-dark me-2 addmargint">Inicio</button></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint">Iniciar Sesión</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="row" >
		<div class="col-11" >
			<p class="text-center display-1 whitetitle"><b><?php if(!str_contains($studresp,'error')){ ?>
						TUS DATOS SE HAN GUARDADO CORRECTAMENTE!!!<br/> BIENVENIDO A YO.SMART ACADMY
					<?php }else{ ?>
						HA OCURRIDO UN ERROR INESPERADO AL INTENTAR GUARDAR TUS DATOS <br/> POR FAVOR INTENTALO MAS TARDE <br/> SI EL ERROR PENSISTE CONTACTA A YO.SMART ACADMY
				<?php } ?>
			</b></p>
		</div>
	</div>
	
    <br/>
	
	
	
    <footer>
      
    </footer>
	
	
	
	
	<!--bootstrap's js-->
	<script src="bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<!--jquery's js-->
	<script src="jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
	
  </body>  
</html>
