<!DOCTYPE html>
<html>
<head>
 	
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Inicio - Gestion de Visitantes</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'/css/main-css.css'?>">
</head>
<body>

<!-- Header navbar -->
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a href="#" class="navbar-brand">Gestion de Visitantes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="<?php echo base_url().''?>" class="nav-link active">Inicio</a>
      </li>
      <li>
      <a href="<?php echo base_url().'/index.php/visitors'?>" class="nav-link">Visitantes</a>
      </li>  
    </ul>
  </div>  
</nav>

<!-- Logo and page title: -->
<div class="container" >
<h2>Sistema de Gestion de Visitantes</h2>
<img src="<?php echo base_url().'/images/logo.png'?>" class="img-logo" alt="Responsive image">
</div>

<!-- Reloj: -->
	<div class="reloj-holder">
			<div class="widget">
				<div class="fecha">
					<p id="diaSemana" class="diaSemana">Martes</p>
					<p id="dia" class="dia">27</p>
					<p>de </p>
					<p id="mes" class="mes">Octubre</p>
					<p>del </p>
					<p id="year" class="year">2015</p>
				</div>
		
				<div class="reloj">
					<p id="horas" class="horas">11</p>
					<p>:</p>
					<p id="minutos" class="minutos">48</p>
					<p>:</p>
					<div class="caja-segundos">
						<p id="ampm" class="ampm">AM</p>
						<p id="segundos" class="segundos">12</p>
					</div>
				</div>
			</div>
		</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url().'/js/reloj.js'?>"></script>

</body>
</html>