<?php 
	include("../Icons/getIcon.php");
	include("../Icons/getImgIcon.php");
	require_once("../php/getTyC.php");
	$row = json_decode(getTerms(),TRUE);
	
	$iconid=0;
	$imgid=0;
?>
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>YO.SMART ACADEMY</title>    
    <meta charset="UTF-8">
    <meta name="title" content="Preinscripciones Yo.Smart">
    <meta name="description" content="Formulario de Preinscripciones para los cursos de Yo.Smart Academ">  
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<!--bootstrap's css-->
    <link href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/styles.css" rel="stylesheet" type="text/css"/>   
	<link rel="stylesheet" href="../Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">	
  </head>  
  <body class="bg-ysblue">
				<div class="row navbar navbar-expand-lg navbar-light bg-light green-bg justify-content-center text-center" >
					<div class="col-11 col-lg-10" >
						<img src="../img/logo-yosmart-120x40.jpg" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded addmargint">
						<div class="mb-3">
						  <label for="txtareatyc" class="form-label"><p class="text-center h1 whitetitle"><b><?php echo $row['titulo'];?></b></p></label>
						</div>
					</div>
				</div>
				<br/>
				<div class="row justify-content-center text-center" >
					<div class="col-11 col-lg-10" >
						  <textarea class="form-control gray-textarea addmargin" name="txtareatyc" id="txtareatyc" rows="15" disabled><?php echo $row['contenido'] ?></textarea>
						</div>
					</div>
				</div>
				<br/>
				<div class="row" >
					<div class="col-12 col-md-6 col-lg-4" >
						
					</div>
					<div class="col-12 col-md-6 col-lg-4" >
						<div class="d-grid gap-2">
						  <button id="btnsend" type="button" onclick="cerrar()" class="btn btn-success btn-lg"><br/>Volver al Formulario<br/><br/></button>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4" >
						
					</div>
				</div>
				
	<br/><br/>
	<br/><br/>
	<br/><br/>
	
	
	
	
	<!--bootstrap's js-->
	<script src="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<!--jquery's js-->
	<script src="../jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
	
	<script language="javascript" type="text/javascript"> 
		function cerrar() { 
		   window.open('','_parent',''); 
		   window.close(); 
		} 
	</script>

	
  </body>  
</html>