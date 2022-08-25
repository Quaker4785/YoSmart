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
    <meta name="title" content="Preinscripciones Yo.Smart">
    <meta name="description" content="Formulario de Preinscripciones para los cursos de Yo.Smart Academ">    
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!--bootstrap's css-->
    <link href="../bootstrap-5.1.0-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="../css/styles.css" rel="stylesheet" type="text/css"/>   
	<link rel="stylesheet" href="../Icons/bootstrap-icons-1.5.0/bootstrap-icons.css">	
  </head>  
  <body class="bg-ysblue">    

 <!--
	corregir el jquery para acceder los selects y corroborar que sus valores se validen y capturen correctamente antes de enviarlos como post
	-->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light green-bg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand addmargint" href="../ys-principal/mainpage.php"><img src="../img/logo-yosmart-120x40.jpg" alt="YO.SMART ACADEMY" width="100" height="45" class="img-fluid rounded addmargint"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand" href="/"><button type="button" class="btn btn-outline-dark me-2 addmargint">Inicio</button></a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="#"><button type="button" class="btn btn-outline-dark me-2 addmargint" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Instrucciones</button></a>
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
			<p class="text-center display-1 whitetitle"><b>Formulario de Preinscripciones</b></p>
		</div>
	</div>
	<div class="row" >
		<div class="col-1"></div>
		<div class="col-10 col-md-10">
			<div class="row" >
				<div class="col-1 col-md-1" >
					<button type="button" class="btn btn-primary" id="liveAlertBtn_dmf" value="primary" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <i class="bi bi-info-square"></i> </button>
				</div>
				<div class="col-11 col-md-11" >
					<div class="collapse" id="collapseExample">
						<div class="alert alert-primary  align-self-end" role="alert" id="liveAlert">
						  <?php echo getBootIcon($iconid); ?>
						  <strong>INSTRUCCIONES:</strong><br/>Por favor ingrese la informacion que se requiere a continuación, todos los campos que tengan un * son obligatorios por lo que si se deja alguno en blanco se producira un error al ingresar su solicitud de inscripción.<br/><br/>El ingreso de los encargados no es obligatorio, a menos que el estudiante que desea inscribirse sea menor de edad, en este caso el estudiante debe ingresar al menos un encargado para que el sistema procese su solicitud.<br/><br/>Luego de ingresar los datos solicitados correctamente deberá enviar un mensaje a Yo.Smart Academy adjuntando su comprobante de pago.<br/><br/>Si desea asistencia adicional puede ponerse en contacto con Yo.Smart Academy.
						  
						</div>
					</div>
					<div id="liveAlertPlaceholder">
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
    
    <br/>
	<div id="stakeholderarea">
		<div class="row justify-content-center" >
			<div class="col-11 col-md-10" >
				<form id="form1" name="form1" method="POST" action="procespreinscription.php">

					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Name1" id="Name1" placeholder="FirstName" title="Campo Obligatorio">
							  <label for="Name1">*Primer Nombre</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Name2" id="Name2" placeholder="SecondName">
							  <label for="Name2">Segundo Nombre</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Name3" id="Name3" placeholder="AdditionalName">
							  <label for="Name3">Nombres Adicionales</label>
							</div>
						</div>
					</div>


					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Lastname1" id="Lastname1" placeholder="First_LastName" title="Campo Obligatorio">
							  <label for="Lastname1">*Primer Apellido</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Lastname2" id="Lastname2" placeholder="Second_LastName">
							  <label for="Lastname2">Segundo Apellido</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="Lastname3" id="Lastname3" placeholder="Additional_LastName">
							  <label for="Lastname3">Apellidos Adicionales</label>
							</div>
						</div>
					</div>
					
					
					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="date" class="form-control gray-input" name="fnac" id="fnac" placeholder="" title="Campo Obligatorio. Ingresa tu fecha de nacimiento">
							  <label for="fnac"><b>*Fecha de Nacimiento</b></label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="telf" id="telf" placeholder="name@example.com" title="Campo Obligatorio">
							  <label for="telf">*Teléfono</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-floating mb-3">
							  <input type="email" class="form-control gray-input" name="email" id="email" placeholder="name@example.com" title="Campo Obligatorio">
							  <label for="email">*Correo Electrónico</label>
							</div>
						</div>
					</div>
					<div class="row" >
						<div class="col-12" >
							<div class="form-floating mb-3">
							  <input type="text" class="form-control gray-input" name="direc" id="direc" placeholder="País,Departamento,Ciudad,Dirección" title=" Campo Obligatorio. Puedes usar el siguiente formato: País, Departamento, Ciudad, Dirección. ">
							  <label for="direc">*Lugar de Origen</label>
							</div>
						</div>
					</div>
							
					
					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							<select name="modalidad" id="modalidad" class="form-select form-select-lg mb-3" >
								 
							</select>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<select name="plan" id="plan" class="form-select form-select-lg mb-3" >
								 
							</select>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<select name="curso" id="curso" class="form-select form-select-lg mb-3" >

							</select>
						</div>
					</div>
					
					
					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							<div id="extracur" class="form-floating mb-3" >
							  <input type="text" class="form-control gray-input" name="curext" id="curext" placeholder="" title="Ingresa el nombre del curso que te interesa ">
							  <label for="curext">Curso Específico</label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="form-check">
							  <input id="chkterm" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							  <label class="form-check-label whitetitle" for="flexCheckDefault">
								Acepto los <a href="terminosycondiciones.php" target="_blank" class="btn btn-link text-white">Términos y Condiciones</a> de YO.SMART ACADEMY
							  </label>
							</div>
							<br/>
							<div class="disclaimer whitetitle addpadding">
								<label>Para guardar su proceso de Pre - Inscripción deberá aceptar nuestros <a href="terminosycondiciones.php" target="_blank" class="btn btn-link">Términos y Condiciones</a> los cuales puede leer haciendo <a href="terminosycondiciones.php" target="_blank" class="btn btn-link">click aquí</a></label>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="d-grid gap-2">
							  <button type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar Encargado</button>
							</div>
						</div>
					</div>

					<br/>
					<br/>
					<br/>
					
					<div class="row" >
						<div class="col-12 col-md-6 col-lg-4" >
							
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							<div class="d-grid gap-2">
							  <button id="btnsend" type="button" class="btn btn-success btn-lg"><br/>Enviar<br/><br/></button>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4" >
							
						</div>
					</div>
					<div hidden>
						<label >Información_Encargado(s)</label>
						<input type="text" class="form-control gray-input" name="flatencinfo" id="flatencinfo">
					</div>
					
				</form>
			</div>
		</div>
	</div>
	<br/><br/>
	<br/><br/>
	<br/><br/>
	
	
	
	
	
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-fullscreen text-white bg-dark">
			<div class="modal-content text-white bg-dark">
			  <div class="modal-header text-white bg-dark">
				<h5 class="modal-title" id="exampleModalLabel">AGREGAR ENCARGADO</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				
				<div class="row justify-content-center" >
					<div class="col-11 col-md-10" >
						<form id="form2" name="form2" method="POST" >

							<div class="row" >
								<div class="col-12 col-md-6" >
									<div class="form-floating mb-3">
									  <input type="text" class="form-control gray-input" name="NameEnc" id="NameEnc" placeholder="FirstName" title="Campo Obligatorio">
									  <label for="NameEnc">*Nombres</label>
									</div>
								</div>
								<div class="col-12 col-md-6" >
									<div class="form-floating mb-3">
									  <input type="text" class="form-control gray-input" name="LastnameEnc" id="LastnameEnc" placeholder="First_LastName" title="Campo Obligatorio">
									  <label for="LastnameEnc">*Apellidos</label>
									</div>
								</div>
							</div>

							
							
							<div class="row" >
								<div class="col-12 col-md-6" >
									<div class="form-floating mb-3">
									  <input type="text" class="form-control gray-input" name="telfEnc" id="telfEnc" placeholder="name@example.com" title="Campo Obligatorio">
									  <label for="telfEnc">*Teléfono</label>
									</div>
								</div>
								<div class="col-12 col-md-6" >
									<div class="form-floating mb-3">
									  <input type="email" class="form-control gray-input" name="emailEnc" id="emailEnc" placeholder="name@example.com" title="Campo Obligatorio">
									  <label for="emailEnc">*Correo Electrónico</label>
									</div>
								</div>
							</div>
							<div class="row" >
								<div class="col-12" >
									<div class="form-floating">
									  <textarea class="form-control gray-input" name="comentEnc" id="comentEnc" placeholder="Leave a comment here"></textarea>
									  <label for="comentEnc">Comments</label>
									</div>
								</div>
							</div>
							
							<br/>
							<br/>
							<br/>						
							
						</form>
						
						<div class="row" >
							<div class="col-0 col-md-1" >
								
							</div>
							<div class="col-12 col-md-10">
								<table class="table table-dark table-striped">
								<thead>
									<th>NOMBRE</th>
									<th>APELLIDO</th>
									<th>TELEFONO</th>
									<th>EMAIL</th>
									<th>COMENTARIOS</th>
								</thead>
								<tbody  id="tableEncargado">
								</tbody>
								</table>
							</div>
							<div class="col-0 col-md-1" >
								
							</div>
						</div>
						
							<br/>
							<br/>
							<br/>						
						
					</div>
				</div>
				
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-danger btn-lg" data-bs-dismiss="modal"><i class="bi bi-x-octagon-fill"></i> Salir</button>
				<button id="btnaddenc" type="button" class="btn btn-success btn-lg"><i class="bi bi-person-plus-fill"></i> Agregar</button>
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
		var alertPlaceholder = document.getElementById('liveAlertPlaceholder')
		var alertTrigger = document.getElementById('liveAlertBtn')
		document.getElementById('liveAlertBtn_dmf').click();
		function alert2(message, type) {
		  var wrapper = document.createElement('div')
		  wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert"> <?php echo getBootIcon($iconid); ?> '+ message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';

		  alertPlaceholder.append(wrapper);
		}

		if (alertTrigger) {
		  alertTrigger.addEventListener('click', function () {
			alert2('<strong>INSTRUCCIONES:</strong><br/>Por favor ingrese la informacion que se requiere a continuación, todos los campos son obligatorios por lo que si se deja alguno en blanco se producira un error al ingresar su solicitud de inscripción.<br/><br/>El ingreso de los encargados no es obligatorio, a menos que el estudiante que desea inscribirse sea menor de edad, en este caso el estudiante debe ingresar al menos un encargado para que el sistema procese su solicitud.<br/><br/>Luego de ingresar los datos solicitados correctamente recibirá un mensaje o llamada por parte de la academia para verificar sus datos.<br/><br/>Si desea asistencia adicional puede ponerse en contacto con Yo.Smart Academy.', alertTrigger.value);//'primary'
		  })
		}
		
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
		var Encdict=[]
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
				//VALIDAR QUE SE LLENAN LOS CAMPOS NECESARIOS ANTES DE AGREGAR
				let newRow = '<tr><td>'+$('#NameEnc').val()+'</td><td>'+$('#LastnameEnc').val()+'</td><td>'+$('#telfEnc').val()+'</td><td>'+$('#emailEnc').val()+'</td><td>'+$('#comentEnc').val()+'</td></tr>';
				$("#tableEncargado").append(newRow);
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

		function validateForm(){
			
			var table = document.getElementById('tableEncargado'), 
			rows = table.getElementsByTagName('tr'),
			i, j, cells, customerId;
			let datos = [];
			for (i = 0, j = rows.length; i < j; ++i) {
				cells = rows[i].getElementsByTagName('td');
				console.log(cells[0].innerHTML);
				console.log(cells[1].innerHTML);
				console.log(cells[2].innerHTML);
				console.log(cells[3].innerHTML);
				console.log(cells[4].innerHTML);
				datos.push({"name":cells[0].innerHTML,"lastname":cells[1].innerHTML,"tel":cells[2].innerHTML,"email":cells[3].innerHTML,"obs":cells[4].innerHTML});
			}
			encnewstring="";
			for(i=0 ; i < datos.length;i++){
				if(encnewstring == "" || encnewstring == null )
					encnewstring = '';
				else
					encnewstring+='%%%%%';
				encnewstring += datos[i]["name"]+'/////'+datos[i]["lastname"]+'/////'+datos[i]["tel"]+'/////'+datos[i]["email"]+'/////'+datos[i]["obs"];
				//console.log(datos[i]);
			}
			console.log(encnewstring);
			$('#flatencinfo').val(encnewstring);
			let error_string='Error de ingreso de datos en:\n';
			validForm = true;
			if($('#Name1').val().trim()  == "" || $('#Name1').val() == null){
				error_string += 'El campo Nombre: Debe ingresar al menos su primer nombre\n';
				validForm=false;
			}
			if($('#Lastname1').val().trim() == "" || $('#Lastname1').val() == null){
				error_string += 'El campo Primer Apellido: Debe ingresar al menos su primer apellido\n';
				validForm=false;
			}
			if($('#fnac').val() == "" || $('#fnac').val() == null){
				error_string += 'El campo Fecha de Nacimiento: La fecha de nacimiento es un dato obligatorio, por favor seleccione una fecha válida\n';
				validForm=false;
			} else if (getEdad($('#fnac').val()) < 15 && ($('#flatencinfo').val()=='' || $('#flatencinfo').val()==null)){
				//alert(getEdad($('#fnac').val()));
				error_string += 'Atención: Si el estudiante es menor de edad deberá ingresarse al menos 1 encargado\n';
				validForm=false;
			}
			if($('#telf').val().trim() == "" || $('#telf').val() == null){
				error_string += 'El campo Teléfono: Debe ingresar un numero de teléfono válido\n';
				validForm=false;
			}
			if($('#email').val().trim() == "" || $('#email').val() == null){
				error_string += 'El campo email: Debe ingresar un correo electrónico valido\n';
				validForm=false;
			} 
			if($('#direc').val().trim() == "" || $('#direc').val() == null){
				error_string += 'El campo direccion: No es necesario que ingrese su direccion exacta, \n                    pero debe ingresar al menos su país y la ciudad en la que reside\n';
				validForm=false;
			}
			if($('#modalidad > option:selected').val() == "0"){
				error_string += 'El campo modalidad: Debe seleccionar la modalidad en la cual desea recibir sus clases\n';
				validForm=false;
			}
			if($('#plan > option:selected').val() == "0"){
				error_string += 'El campo plan: Debe seleccionar el plan de pago que desea utilizar\n';
				validForm=false;
			}
			if($('#curso > option:selected').val() == "0"){
				error_string += 'El campo curso: Debe seleccionar el curso que desea recibir\n';
				validForm=false;
			}
			if(!$('#chkterm').is(':checked')){
				error_string += '\nPara formar parte de Yo.Smart Academy deberá estar de acuerdo con nuestros Términos y Condiciones, si desea continuar con su preinscripción por favor acepte nuestros términos y condiciones\n';
				validForm=false;
			}
			
			return [validForm,error_string];
		}
	</script>
	
  </body>  
</html>