<!DOCTYPE html>
<html>
<head>
	<title>Colegio Montellano</title>
	<meta charset="utf-8">
	<meta name="description" content="Colegio Montellano"/>
	<meta name="keywords" content="HTML5,CSS3,Javascript"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!--Esta instrucción se usa para 
																													que el menú se adapte a los dispositivos moviles-->
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuEscritorio.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/style.css">	
	<link rel="stylesheet" type="text/css" href="../../CSS/MenuCel.css">
		<link rel="stylesheet" type="text/css" href="../../CSS/Admi.css">

	<script src="http://code.jquery.com/jquery-latest.js"></script> <!--Se manda a llamar una biblioteca de JavaScript para que 
																		las animaciones del menu celular se puedan realizar-->
	<script src="../../Java/MenuA.js"></script>
</head>
<body>
	<header>
		<div class="menu-bar">
			<a href="#" class="bt-menu"><span class="icon icon-menu"></span></a>
		</div>
		<nav class="menu">
			<ul>
				<li><a href="../Pagina Principal.php"><span class="uno"><i class="icon icon-exit"></i></span>Cerrar Sesión</a></li>

				<li class="submenu"><a href="#"><span class="dos"><i class="icon icon-clipboard"></i></span>Listar<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="ListarA.php">Listar Alumnos</a></li>
						<li><a href="ListarP.php">Listar Profesores</a></li>
						<li><a href="ListarF.php">Listar Faltas de Asistencia</a></li>

					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="cuatro"><i class="icon icon-profile"></i></span>Poner<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="PonerC.php">Poner Calificaciones</a></li>
						<li><a href="PonerF.php">Poner Faltas de Asistencia</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="cinco"><i class="icon icon-wrench"></i></span>Modificar<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="ModCal.php">Modificar Calificaciones</a></li>
						<li><a href="ModFal.php">Modificar Faltas de Asistencia</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>
	<section class="body">
		<div class="cargar">
			<span>Modificar Calificaciones<br>

			</span>
		</div>
	</section>
	<footer>
		
	</footer>
</body>
</html>