<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>YO.SMART ACADEMY</title>    
    <meta charset="UTF-8">
    <meta name="title" content="YO.SMART ACADEMY">
    <meta name="description" content="Información e imagenes de Yo.Smart Academy">    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--bootstrap's css-->
    <link href="YS-pages/bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="YS-pages/css/styles.css" rel="stylesheet" type="text/css"/>   
	<link rel="stylesheet" href="YS-pages/Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">	
  </head>  
  <body class="bg-ysblue">    


<nav class="navbar navbar-expand-lg navbar-light bg-light green-bg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse addmargint addmarginb" id="navbarTogglerDemo01">
      <a class="navbar-brand addmargint" href="index.php"><img src="<?php echo getImgIcon($imgid); ?>" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <div class="navbar-brand" ><button id="home" type="button" class="btn btn-outline-dark me-2 addmargint">INICIO</button></div>
        </li>
        <li class="nav-item">
          <div class="navbar-brand" ><button id="about" type="button" class="btn btn-outline-dark me-2 addmargint">¿QUIENES SOMOS?</button></a>
        </li>
		<li class="nav-item">
          <div class="navbar-brand" ><button id="services" type="button" class="btn btn-outline-dark me-2 addmargint">SERVICIOS</button></div>
        </li>
        <li class="nav-item">
          <div class="navbar-brand" ><button type="button" class="btn btn-outline-dark me-2 addmargint" data-bs-toggle="modal" data-bs-target="#exampleModal">CONTACTO</button></div>
        </li>
		<li class="nav-item">
          <div class="navbar-brand" ><a type="button" class="btn btn-outline-dark me-2 addmargint" href="YS-pages/preinscripciones/">PRE-INSCRIPCIONES</a></div>
        </li>
		<li class="nav-item">
          <div class="navbar-brand"><a type="button" class="btn btn-outline-dark me-2 addmargint" href="#">INICIAR SESIÓN</a></div>
        </li>
      </ul>
	  
    </div>
  </div>
</nav>
