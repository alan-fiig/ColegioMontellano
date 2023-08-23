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
	<link rel="stylesheet" type="text/css" href="../../CSS/Altas.css">

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

				<li class="submenu"><a href="#"><span class="dos"><i class="icon icon-user-plus"></i></span>Altas<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="AltaUsuario.php">Alta de Alumno</a></li>
						<li><a href="AltaProfes.php">Alta de Profesores</a></li>
						<li><a href="AltaAsignatura.php">Alta de Asignatura</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="MatricularA.php"><span class="tres"><i class="icon icon-profile"></i></span>Matricular Alumno</a></li>
				<li class="submenu"><a href="#"><span class="cuatro"><i class="icon icon-user-minus"></i></span>Bajas<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="BajaUsuario.php">Baja de Alumno</a></li>
						<li><a href="BajaProfe.php">Baja de Profesor</a></li>
						<li><a href="BajaAsignatura.php">Baja de Asignatura</a></li>
					</ul>
				</li>
				<li class="submenu"><a href="#"><span class="cinco"><i class="icon icon-wrench"></i></span>Modificar<span class="flecha"><i class="icon icon-circle-down"></i></span></a>
					<ul class="subs">
						<li><a href="ModUsuario.php">Modificar Datos de Usuario</a></li>
						<li><a href="ModAsignaturas.php">Modificar Datos de Asignatura</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header>  
	<section class="contenedor">
			<div class="titulo">
				<h2>Alta <span>Alumno</span></h2>
			</div>		
			<form class="formulario" action="../../PHP/AltaAlumnos.php" method="post">
				<input class="input" type="number" name="login" placeholder="Login Solo números" required autofocus>
	            <input class="input" type="number" name="clave" placeholder="Clave 'Solo números'" required>
	            <input class="input" type="text" name="nombre" placeholder="Nombre" required>
	            <input class="input" type="text" name="apellidos" placeholder="Apellidos" required>
	            <input class="input" type="number" name="nivel" placeholder="Nivel del Usuario 1,2,3..." required>
	            <div class="btn_form">
	            	<input class="btn" type="submit" value="DAR DE ALTA">   	
	            </div>
			</form>
	</section>
	<footer>
		
	</footer>
</body>
</html>