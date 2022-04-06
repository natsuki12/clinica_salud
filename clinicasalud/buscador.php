<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>

</head>

<body>
<?
//Archivo: busqueda.php
$bd_servidor = "localhost";

$bd_usuario = "root";

$bd_contrasenya = "";

$bd_bdname = "clinicasalud";

$bd_tabla = "paciente"; // Tabla donde se harán las búsquedas

// Conexión y selección de la base de datos
$link = mysqli_connect($bd_servidor,$bd_usuario,$bd_contrasenya);
mysql_select_db($bd_bdname,$link);
////////////////////////////
// Formulario
///////////////////////////
?>
<center>
<p>
<p><img src="seccionenconstruccion.gif" width="300" height="18" />
<h2>&nbsp;</h2>
<h2>Introduzca la palabra a buscar</h2>
<p>&nbsp;</p>
<p><form name="buscador" method="post" action="busqueda.php">
<p><br>
Elija Campo en:
<select name="campo">
<?php
//Con este query obtendremos los campos por los cuales el usuario puede buscar
$result = mysql_query("SHOW FIELDS FROM `$bd_tabla`",$link);
while($row = mysql_fetch_row($result)) {

// en $row[0] tenemos el nombre del campo
// de esta manera no necesitamos conocer el nombre de los campos
// por lo que cualquier tabla nos valdrá
?>
<option value="<?php echo $row[0]; ?>"><?php echo $row[0]; ?></option>
<?php
}
?>
</select>
Palabra Ingresada: 
<input type="text" name="palabra">
</p>
<p><br>
<input type="submit" value="Buscar" name="buscar">
</p>
</form></p>
</center>
<?

if(isset($_POST['buscar'])) {
// Solo se ejecuta si se ha enviado el formulario
$query = "SELECT * from $bd_tabla WHERE `{$_POST['campo']}` LIKE '%{$_POST['palabra']}%'";
$result = mysql_query($query,$link);

$found = false; // Si el query ha devuelto algo pondrá a true esta variable
while ($row = mysql_fetch_array($result)) {
$found = true;
echo "<p>";
foreach($row as $nombre_campo => $valor_campo) {
// Tenemos que mostrar todos los campos de las filas donde se haya
// encontrado la búsqueda.

if(is_int($nombre_campo)) {
continue; //Cuando hacemos mysql_fetch_array, php genera un array
// con todos los valores guardados dos veces, uno con
// índice numérico y otro con índice el nombre del campo.
// Solo nos interesa el del nombre del campo.
}
echo "<b>".$nombre_campo."</b>: ".$valor_campo."<br>";
}
echo "</p>";
}
if(!$found) {
echo "No se encontró la palabra introducida";
}
}
?>
</body>
</html>