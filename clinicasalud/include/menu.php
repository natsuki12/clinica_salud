<!DOCTYPE html>

<div class="navbar" >
  <div class="navbar-inner" style="background:#848484;">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class="" ><a style="color:white;" href="index2.php">Principal</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:10px;">
		
		</form >
		<ul class="nav pull-right">
				<li><a style="color:white;" href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			 <li><a style="color:white;" href="carrito/carro.php"> Carrito</a></li>
			 <li><a style="color:white;" href="about.html"> conocenos</a></li>
			 <li><a  style="color:white;"href="desconectar.php"> Cerrar Cesion </a></li>
              			  
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</html>