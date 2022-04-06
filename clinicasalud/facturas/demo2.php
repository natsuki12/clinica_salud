<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>INSCCRIPCION DE ALUMNO PDF</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
<center>

<form method="post" action="facturas/facturas.php" style="background:#d0cccc">
    <button type="submit">FICHA DE INSCRIPCION PDF</button>
    
    <h3>Los datos de la inscripcion son los siguientes ...</h3>
    
<table>
 <tr>
    <td>NUMERO DE INSCRIPCION:</td>
    <td><input type="text" name="id_factura" value="1" size="5"></td>
 </tr>
 <tr>
    <td>FECHA DE LA INSCRIPCION</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
 <tr>
    <td>NOMBRE DE LA INSTITUCION </td>
    <td><input type="text" name="nombre_tienda" value="Telesecundaria Abraham diaz size="50"></td>
 </tr>
 <tr>
    <td>DIRECCION DE LA INSTITUCION</td>
    <td><input type="text" name="direccion_tienda" placeholder="C/ demostración nº 1" size="50"></td>
 </tr>
  <tr>
    <td>PROMEDIO EGRESADO DE NIVEL</td>
    <td><input type="text" name="provincia_tienda" value="Madrid" size="25"></td>
 </tr>

 <tr>
    <td>DIRECCION DEL ALUMNO</td>
    <td><input type="text" name="provincia_tienda" value="Madrid" size="25"></td>
 </tr>
 <tr>
    <td>TELEFONO DEL ALUMNO</td>
    <td><input type="text" name="codigo_postal_tienda" value="28080" size="5"></td>
 </tr>
 <tr>
    <td>HORA DE CITA DE LA INSTITUCION</td>
    <td><input type="text" name="telefono_tienda" value="900 00 00 00" size="15"></td>
 </tr>
 <tr>
    <td>CORREO DEL ALUMNO</td>
    <td><input type="text" name="fax_tienda" value="900 00 00 00" size="15"></td>
 </tr>
 <tr>
    <td>NOMBRE COMPLETO DEL ALUMNO</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="11223344N" size="15"></td>
 </tr>

 <tr>
    <td>CEDULA DEL ALUMNO</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="EJEMPLO v26344859" size="15"></td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>

</table>


<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
<input type="submit" name="submite" value="guardar historia" style="width=80 align=center "/>

</form>
<?php
		
			require("registro.php");
		
	?>

<footer>
	
	<p style="background:gray"> TELESECUNDARIA ABRAHAM DIAZ, Copyright &copy; 2019 </p>
	
	</footer>
	</center>
</body>

</html>