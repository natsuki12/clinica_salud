<?php  
	if(isset($_GET["error"])){
		echo "<script type='text/javascript'>alert('Correo utilizado por usuario')</script>";
	}
?>
<html Lang="en">
	<head>
		<title>R&R Shop | Registro</title>
			<link rel="shortcut icon" href="img/NEW.png">
			<meta chaset="UTF-8">
			<link rel="stylesheet" href="css/estilo.css">
			<script src="htt://code.jquery.com/jquery-lastest.js"></script>
			<script src="header.js"></script>
			<script src="validar.js"></script>
	</head>
	
	<body>
		<header class="">
			<div class="wrapper">
			<div class="logo">R&R Shop</div>
			<nav>
				<a href="index.php">Inicio</a>
				<a href="tienda.html">Tienda</a>
				<a href="conocenos.html">Conocenos</a>
				<a href="novedades.html">Novedades</a>
				<a href="registro.php">Login</a>
				<a href="registro.php">Ayuda</a>
				</nav>
			</div>
		</header>
			<main>
			<section id="conocenos">
			    <h2>REGISTRO</h2>
				</section>
			<section id="reg">
				<div class="contenedor">
				<article>
				<form action="registrar.php" method="post"
				class="form-register" onsubmit="return validar();">
					<h2 class="form__titulo">CREA UNA CUENTA</h2>
						<div class="contenedor-inputs">
							<input type="text" id="nombre" name="nombre"
							placeholder="Nombre" class="input-48" required>
							<input type="text" id="apellidos" name="apellidos"
							placeholder="Apellidos" class="input-48"required>
							<input type="email" id="correo" name="correo"
							placeholder="Correo" class="input-100"required>
							<input type="text" id="usuario" name="usuario"
							placeholder="Usuario" class="input-48"required>
							<input type="password" id="clave" name="clave"
							placeholder="Contrasena" class="input-48"required>
							<input type="" id="telefono" name="telefono"
							placeholder="Telefono"class="input-100"required>
							<input type="submit" value="Registrar" class="btn-enviar">
							<p class="form__link">¿Ya tiene una cuenta?<a href="login.html"> Ingresa aqui</a></p>
						</div>
					</form>
				</article>
				</div>
			</section>

			</main>
			<footer>
				<div class="contenedor">
					<p class="copy"> R&R Shop &copy; 2018</p>
					<div class="sociales">
						<img src="img/facebook.png" alt="img/facebook.png">
						<img src="img/twitter.png" alt="img/twitter.png">
						<img src="img/instagram.png" alt="img/instagram.png">
						<img src="img/google-plus.png" alt="img/google-plus.png">
					</div>
				</div>
			</footer>
	</body>
</html>