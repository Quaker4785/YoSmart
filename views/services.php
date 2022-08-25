<head>

<style>
body { margin: 0; } 
div#slider { overflow: hidden; } /* las imágenes no van a salir del márgen de la pantalla*/
div#slider figure img {  width: 10%;  float: left;  border-radius: 15px; } /* configurar las imagenes*/

div#slider figure { 
  position: relative;
  width: 1000%;
  margin: 0;
 
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 15s slidy infinite; /*el movimiento se va a mantener de forma indefinida -infinito-*/
}


/*esta parte del código define el movimiento de las imágenes a la izquierda*/
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
</style>
<style>
body { margin: 0; } 
div#slider_ { overflow: hidden; } /* las imágenes no van a salir del márgen de la pantalla*/
div#slider_ figure_ img {   float: left;  border-radius: 15px; } /* configurar las imagenes*/

div#slider_ figure_ { 
  position: relative;
  width: 800%;
  margin: 0;
 
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 15s slidy infinite; /*el movimiento se va a mantener de forma indefinida -infinito-*/
}


/*esta parte del código define el movimiento de las imágenes a la izquierda*/
@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}
</style>
 <head/>

<br/><br/>
<div class="row justify-content-center">
	<div class="col-12 col-sm-6 col-md-5 ">
		
		<div class="card border-dark mb-3 text-dark bg-lgreen2" height="500px">
		  <div class="card-header text-center">
			<h5 class="card-title display-3"><i class="bi bi-bookmark-check-fill"></i> NUESTROS SERVICIOS</h5>
		  </div>
		  <div class="card-body justify-content-center text-center">
			
			<a type="button" class="btn btn-outline-dark addmargint fullwidth-btn" href="#sec1"><p class="card-text h4">REFUERZOS ESCOLARES</p></a>
			<br/>
			<a type="button" class="btn btn-outline-dark addmargint fullwidth-btn" href="#sec2"><p class="card-text h4">CURSOS LIBRES</p></a>
			<br/>
			<a type="button" class="btn btn-outline-dark addmargint fullwidth-btn" href="#sec3"><p class="card-text h4">TALLERES Y CURSOS INTEGRALES</p></a>
			<br/>
		  </div>
		</div>
		
		
		
	</div>   
	
	<!--<div class="col-12 col-sm-6 col-md-5 ">
	
	
	<div id="carouselExampleIndicators" class="carousel-item" data-bs-ride="carousel">
	   <div class="carousel-caption d-none d-md-block">
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"  aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
	   </div>
	  <div class="carousel-inner">
		<div class="carousel-item active">
		  <img src="YS-pages/img/1-1.png" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/3-1.png" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/1-2.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/2-2.png" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/3-19.PNG" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/3-13.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/5-2.jpg" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/3-14.PNG" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
		<div class="carousel-item">
		  <img src="YS-pages/img/5-1.png" class="d-block w-100" alt="..." width="300px" height="400px">
		</div>
	  </div>
	  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	  </button>
	  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	  </button>
	</div>
	
	</div> !-->
<!--    !-->
<div class="col-9 col-sm-6 col-md-5">
    <div id="slider">
	<figure>
	<img src="YS-pages/img/1-1.png" class="d-block w-94" alt="..." width="800px" height="400px">
	<img src="YS-pages/img/3-1.jpg" class="d-block w-94" alt="..." width="800px" height="400px">
	<img src="YS-pages/img/1-2.jpg" class="d-block w-94" alt="..." width="800px" height="400px">
	<img src="YS-pages/img/2-2.png" class="d-block w-94" alt="..." width="800px" height="400px">
    <img src="YS-pages/img/3-19.PNG" class="d-block w-94" alt="..." width="800px" height="400px"> 
	<img src="YS-pages/img/3-13.jpg" class="d-block w-94" alt="..." width="800px" height="400px"> 
	<img src="YS-pages/img/5-2.jpg" class="d-block w-94" alt="..." width="800px" height="400px"> 
	<img src="YS-pages/img/3-14.PNG" class="d-block w-94" alt="..." width="800px" height="400px"> 
	</figure>
	</div>
	 </div>
 </div>

<br/><br/>

		<div class="row justify-content-center">
			<div class="col-12 col-sm-11 col-md-10">
				
				<div class="card border-dark mb-3 text-dark bg-ysyellow">
				  <div class="card-header text-center">
					<h5 class="card-title display-5 compres-text"><i class="bi bi-bank2"></i> TODOS NUESTROS SERVICIOS SON PRESTADOS POR PROFESIONALES EN LA MATERIA <i class="bi bi-building"></i> </h5>
				  </div>
				  <div class="card-body h5 text-center">
					<i class="bi bi-bank"></i>
					<p class="card-text compres-text">
					TODAS NUESTRAS CLASES Y TALLERES SE IMPARTEN DE UNA FORMA DINÁMICA Y ENFOCADA EN LAS DISTINTAS MANERAS DE APRENDIZAJE DE LOS ALUMNOS, BUSCANDO CON ELLO LA EXCELENCIA ACADÉMICA Y QUE PUEDAN FORMARSE EN EL CAMPO DE SU INTERÉS DE UNA FORMA DIFERENTE!!!.
					</p>
					<div class="row justify-content-center text-center">
						<div class="col-4">
							
					    </div>
						<div class="col-4">
							<img src="YS-pages/img/ysl-6.jpg" class="img-thumbnail" alt="Fundación Herencia Viva" width="150" height="130">
					    </div>
						<div class="col-4">
							
					    </div>
					</div>
				  </div>
				</div>
				
				
				
			</div>
		</div>

<br/><br/>

<div class="row justify-content-center text-center">
	<div class="col-11 col-md-10 ">
		
		<div class="row">
			<div class="col-12 col-md-6 green-bg">
				<br/><br/><br/><br/><br/><br/><br/><br/>
				<p id="sec1" class="h2">REFUERZOS ESCOLARES</p>
				<hr/>
				<p class="h5">Matemáticas, Física Fundamental,<br/>Inglés, Tecnología y más…</p>
				<br/><br/><br/><br/>
			</div>
			<div class="col-12 col-md-6 green-bg">
				<br/><br/><img src="YS-pages/img/8-1.png" class="img-fluid" alt="YoSmart-Images" width="470px" height="470px"><br/><br/>
			</div>
		</div>
		<br/><br/>
		<div class="row">
		
			<div class="col-12 col-md-6 bg-ystrueyellow">
				<br/><br/>
				 <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">*/
				  <div class="carousel-inner">
					<div class="carousel-item active">
					  <img src="YS-pages/img/2-1.png" class="d-block w-100" alt="YoSmart-Images" width="470px" height="470px">
					</div>
					<div class="carousel-item">
					  <img src="YS-pages/img/6-1.png" class="d-block w-100" alt="YoSmart-Images" width="470px" height="470px">
					</div>
					<div class="carousel-item">
					  <img src="YS-pages/img/4-2.jpg" class="d-block w-100" alt="YoSmart-Images" width="470px" height="470px">
					</div>
				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				  </button>
				</div>
					</div>
				<!--	<div class="col-9 col-sm-6 col-md-5"> !--->
				<!--	<div class="col-9 col-sm-6 col-md-5">
				<div id="slider_">
					<figure_ >
					<img src="YS-pages/img/2-1.png" class="d-block w-100" alt="..." width="1000px" height="400px">
					<img src="YS-pages/img/6-1.png" class="d-block w-100" alt="..." width="1000px" height="400px">
					<img src="YS-pages/img/4-2.jpg" class="d-block w-100" alt="..." width="1000px" height="400px">
					
					</figure_>
					</div>
				</div>--->
		
			<div class="col-12 col-md-6 bg-ystrueyellow">
				<br/><br/><br/><br/><br/><br/><br/><br/>
				<p id="sec2" class="h2">CURSOS LIBRES</p>
				<hr/>
				<p class="h5">Matemáticas, Física Fundamental, inglés y tecnología entre otros. (Todos los cursos son impartidos en todos los niveles: principiantes, intermedios y avanzados), para niños, jóvenes y adultos.</p>
				<br/><br/><br/><br/>
			</div>
		</div>
		<br/><br/>
		<div class="row">
			<div class="col-12 col-md-6 text-white bg-fhvblue">
				<br/><br/><br/><br/><br/><br/><br/><br/>
				<p id="sec3" class="h2">TALLERES Y CURSOS INTEGRALES</p>
				<hr/>
				<p class="h5">En distintos campos para todas las edades.</p>
				<br/><br/><br/><br/>
			</div>
			<div class="col-12 col-md-6 text-white bg-fhvblue">
				<br/><br/><img src="YS-pages/img/9-1.png" class="img-fluid" alt="YoSmart-Images" width="470px" height="470px"><br/><br/>
			</div>
		</div>
	
	</div>
</div>
 
<script type="text/javascript">
		function focussection(section_id){
			document.getElementById(section_id).focus();
		}
		
</script>




<br/><br/>