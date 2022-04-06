<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">

		<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Clinica Salud</title>
	<script> 	</script>
</head>
<body style="background-color:#c7c7c7" style="font:dosis" style="background-">
	<br>
<br><br>
<br>
	<center><div class="tit"><h2 style="color:black;">Inicio de sesion</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">
<br>
		<tr><td><label style="font-size: 14pt; color: black;"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt; color: black"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center ><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<td>
<td>
<td>
<!-- formulario registro -->

<form method="post" action="" onsubmit="return validar();">
  
    <td width=80><legend  style="font-size: 18pt; color: black"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: black"><b>Ingresa tu nombre</b></label>
	 
     <input type="text" name="realname" style="border-radius:15px;" class="form-control" placeholder="Ingresa tu nombre" required=""
      oninvalid="setCustomValidity('el campo nombre  es obligatorio')"
      oninput="setCustomValidity('')"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: black;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control" style="border-radius:15px;" required placeholder="Ingresa mail"required=""
	  oninvalid="setCustomValidity('el campo email con su @  es obligatorio')"
      oninput="setCustomValidity('')"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: black;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control" style="border-radius:15px;" placeholder="Ingresa contraseña" required=""
	  oninvalid="setCustomValidity('el campo contraseña  es obligatorio')"
      oninput="setCustomValidity('')"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: black"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" style="border-radius:15px;" required placeholder="repite contraseña"required=""
	  oninvalid="setCustomValidity('el campo repetir contraseña  es obligatorio')"
      oninput="setCustomValidity('')"/>
    </div>
	
	<div class="form-group">
      <label style="font-size: 14pt; color: black"><b>Ingresa tu Cedula</b></label>
      <input type="text" name="cedula" pattern="^([VEJPG]{1})([0-9]{7,9})$"required placeholder="EJ: V00000000"  
	  oninvalid="setCustomValidity('el campo cedula  es obligatorio, debe poner antes la inicial EJ= V26344866')"
      oninput="setCustomValidity('')" style="border-radius:15px;"/>
    </div>
      
    </div>
   
    <input   class="btn btn-danger"  type="submit" name="submit" value="Registrarse" style="width=80 align=center "/>

  </fieldset>
</form>
</div>


		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>