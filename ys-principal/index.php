<?php 
	include("../Icons/getIcon.php");
	include("../Icons/getImgIcon.php");
	$iconid=0;
	$imgid=0;
?>
<!DOCTYPE html>
<html lang="es">  
  <head>    
    <title>YO.SMART ACADEMY</title>    
    <meta charset="UTF-8">
    <meta name="title" content="YO.SMART ACADEMY">
    <meta name="description" content="Información e imagenes de Yo.Smart Academy">    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--bootstrap's css-->
    <link href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/styles.css" rel="stylesheet" type="text/css"/>   
	<link rel="stylesheet" href="../Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">	
  </head>  
  <body class="bg-ysblue">    

   
<nav class="navbar navbar-expand-lg navbar-light bg-light green-bg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand addmargint" href="index.php"><img src="<?php echo getImgIcon($imgid); ?>" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded addmargint"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="index.php"><button type="button" class="btn btn-outline-dark me-2 addmargint">INICIO</button></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint">¿QUIENES SOMOS?</button></a>
        </li>
		<li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint">SERVICIOS</button></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint" data-bs-toggle="modal" data-bs-target="#exampleModal">CONTACTO</button></a>
        </li>
		<li class="nav-item">
          <a class="navbar-brand" href="../preinscripciones/"><button type="button" class="btn btn-outline-dark me-2 addmargint">PRE-INSCRIPCIONES</button></a>
        </li>
		<li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint">INICIAR SESIÓN</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

       
    <br/>
	<div id="stakeholderarea">
		<div class="row justify-content-center" >
			<div class="col-11 col-md-10" >
				<img src="../img/ysbanner.gif" class="img-fluid" alt="Banner">
			</div>
		</div>
		<br/>
		<div class="row justify-content-center" >
		<div class="col-10 col-md-8" >
			<div class="card border-dark mb-3 text-white bg-ysblue">
				<div class="card-header text-center">
					<h5 class="card-title h1"><b>"La inteligencia es la capacidad<br/>de adaptarse al cambio"</b></h5>
					<p class="card-text"><small class="text-muted h3">-Stephen Hawking.</small></p>
				</div>
				<div class="card-body">
					<br/>
					<div class="row justify-content-center" >
						<div class="col-12 col-md-10" >
							<img src="../img/ysbanner2.gif" class="img-fluid" alt="YoSmart-Images">
						</div>
					</div>
					<br/>
				</div>
			</div>
		</div>	
		</div>
		
		<br/>
		<div class="row justify-content-center" >
		<div class="col-10 col-md-8" >
			<div class="card border-dark mb-3 text-dark bg-lgreen2">
				<div class="card-body">
					<br/>
					<p class="card-text h2 doubleline"><b class="text-ysgreen">Yo.Smart Academy</b> surge como una idea del Concejo Directivo de <b><a class="" style="text-decoration: none;" href="https://actionlhf.org/" target="_blank" rel="noopener">Fundación Herencia Viva</a>,</b> en octubre de 2,019 con la intención de crear un programa de autosostenibilidad para ésta institución y que todos los fondos recaudados sean en pro de la niñez y juventud guatemalteca de escasos recursos, principalmente de la población que vive en áreas rurales y marginales de nuestra Guatemala.</p>
					<br/>
					<p class="card-text h2 doubleline"><b class="text-lyellow">Yo.Smart Academy</b> es un programa que se proyecta a  nuestra población y  otras regiones del mundo, brindando programas accesibles de educación a través de plataformas y clases presenciales.</p>
					<br/>
					<p class="card-text h2 doubleline"><b class="text-ysblue">Yo.Smart Academy</b> cree en la <b>educación</b>, porque es el peldaño para dar el salto hacia nuevas oportunidades y emprender con una actitud distinta ante la vida, sabiendo que es el camino hacia las metas fijadas y que los conocimientos son transferidos y asimilados de generación en generación.  <b>La educación</b> nos dará la oportunidad de marcar una diferencia en nuestras vidas y así poder cambiar el futuro de nuestros estudiantes.</p>
					<br/>
					<br/>
						<div class="row justify-content-center" >
							<div class="col-6 col-md-4" >
								<img src="../img/fhv-2048x1086.png" class="img-fluid" alt="YoSmart-Images">
							</div>
						</div>
					<br/>
					<br/>
				</div>
			</div>
		</div>	
		</div>
		
		<br/>
		<br/>
		
		<br/>
		<div class="row justify-content-center" >
		<div class="col-11 col-md-10" >
			<div class="card border-dark mb-3 text-dark bg-ysyellow">
				<div class="card-header text-center">
					<br/>
					<h5 class="card-title h1 text-ysgreen"><b>¡NOS ENCANTA ESTAR EN CONTACTO CONTIGO!</b></h5>
					<br/>
				</div>
				<div class="card-body text-center">
					<br/>
						<p class="card-text h4 text-ysblue">Contactanos por medio de nuestro correo electrónico o Whatsapp</p>
						<p class="card-text h4 text-ysblue">Disfruta de nuestro contenido en Facebook e Instagram</p>
					<br/>
					<div class="row align-items-center text-center" >
						<div class="col-3" ></div>
						<div class="col-6 " >
							<a type="button" href="mailto:info@yo-smart.org" class="btn btn-info btn-lg bigbutton"><i class="bi bi-envelope"></i></a>
							<a type="button" href="https://www.facebook.com/yosmart.org/" target="_blank" class="btn btn-primary btn-lg bigbutton"> <i class="bi bi-facebook h1"></i> </a>
							<a type="button" href="https://www.instagram.com/yo.smart_gt/" target="_blank" class="btn btn-danger btn-lg bigbutton"> <i class="bi bi-instagram h1"></i> </a>
							<a type="button" href="https://api.whatsapp.com/send?phone=+50242474440" target="_blank" class="btn btn-success btn-lg bigbutton"> <i class="bi bi-whatsapp h1"></i> </a>
						</div>
						<div class="col-3" ></div>
					</div>
					<br/>
				</div>
			</div>
		</div>	
		</div>
		
		
	</div>
	
	<br/><br/>
	<br/><br/>
	
	
	
	
	
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-fullscreen text-white bg-dark">
			<div class="modal-content text-white bg-dark">
			  <div class="modal-header text-white bg-dark">
				<h5 class="modal-title" id="exampleModalLabel">CONTACTO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				
				<div class="row justify-content-center" >
					<div class="col-11 col-md-10" >
						<form id="form2" name="form2" method="POST" >

							<div class="row" >
								<div class="col-12 col-md-11" >
									  <label for="name">Nombre</label>
								</div>
							</div>
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <input type="text" class="form-control gray-input" name="name" id="name" placeholder="Nombre Completo" title="Campo Obligatorio">
								</div>
							</div>
							
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <label for="mail">CORREO ELECTRÓNICO</label>
								</div>
							</div>
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <input type="text" class="form-control gray-input" name="mail" id="mail" placeholder="email@ejemplo.com" title="Campo Obligatorio">
								</div>
							</div>
							
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <label for="subject">ASUNTO</label>
								</div>
							</div>
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <input type="text" class="form-control gray-input" name="subject" id="subject" placeholder="Asunto" title="Campo Obligatorio">
								</div>
							</div>
							
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <label for="message">MENSAJE</label>
								</div>
							</div>
							
							<div class="row" >
								<div class="col-12 col-md-11" >
									  <textarea class="form-control gray-input" rows="5" name="message" id="message" placeholder="Cuerpo de Mensaje"></textarea>
								</div>
							</div>
							
							<br/>
							<br/>
							<button id="btnaddenc" type="button" class="btn btn-success btn-lg"><i class="bi bi-cursor-fill"></i> ENVIAR</button>
							<button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal"><i class="bi bi-x-octagon-fill"></i> CANCELAR</button>
							<br/>						
							
						</form>
					</div>
				</div>
				
			  </div>
			</div>
		  </div>
		</div>
		<!-- Modal -->

	
	
	
	
	
	
	
	
	
	
	
	
	
    <footer>
      
    </footer>
	
	
	
	
	<!--bootstrap's js-->
	<script src="../bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
	<!--jquery's js-->
	<script src="../jquery/jquery-3.6.0.min.js" type="text/javascript"></script>
	
	
	<script type="text/javascript">
				
		function getEdad(ds) {
		  let hoy = new Date()
		  let fnac = new Date(ds)
		  let edad = hoy.getFullYear() - fnac.getFullYear()
		  let diferenciaMeses = hoy.getMonth() - fnac.getMonth()
		  if (
			diferenciaMeses < 0 ||
			(diferenciaMeses === 0 && hoy.getDate() < fnac.getDate())
		  ) {
			edad--
		  }
		  return edad
		}
	</script>
	
	<script type="text/javascript">
		$(document).ready(function(){
			$('#extracur').hide();
			__ajax_BP('../php/cargaplan.php','','#plan');
			__ajax_BP('../php/cargacurso.php','','#curso');
			__ajax_BP('../php/cargamodalidad.php','','#modalidad');
			$('input:checkbox[id=chkterm]').on('click',function(){
				//alert('se cambio el estado del check '+$('#chkterm').is(':checked'));
			});
			$('#btnaddenc').click(function(){
				let encnewstring='';
				if($('#flatencinfo').val()=="" || $('#flatencinfo').val()== null )
					$('#flatencinfo').val('');
				else
					encnewstring='%%%%%';
				encnewstring += $('#NameEnc').val()+'/////'+$('#LastnameEnc').val()+'/////'+$('#telfEnc').val()+'/////'+$('#emailEnc').val()+'/////'+$('#comentEnc').val();
				$('#flatencinfo').val($('#flatencinfo').val()+encnewstring);
				$('#form2')[0].reset();
				//    
			});
			
			$('#btnsend').click(function(){
				let resp = validateForm();
				if(resp[0]){
					$('#form1').submit();//form#form1
				}else{
					alert('Por Favor Corrija los Errores de Ingreso para \nPoder Realizar el Envío del Formulario\n\n'+resp[1]);
				}
			});
			$('select[id=curso]').on('change',function(){
				if($('select[id=curso]').val()=="-1"){
					$('#extracur').show('slow');
				}
				else{
					$('div[id=extracur]').hide('slow');
				}
			});
		});
		function __ajax_BP(_url,_data,_loadarea){
				$.ajax({
					type: 'POST',
					url: _url,
					data: _data
				})
				.done(function(response) {
					//alert('cargando respuesta \n'+response);
					$(_loadarea).html(response);
				})
				.fail(function() {
					alert('js-error: hubo un error al intentar cargar los datos');
				});
		}

	</script>
	
  </body>  
</html>