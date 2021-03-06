<!DOCTYPE HTML>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>FACTURAS PDF</title>
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
    <button type="submit">FACTURA PDF</button>
    
    <h3>Los datos de la factura son los siguientes ...</h3>
    
<table>
 <tr>
    <td>ID de factura:</td>
    <td><input type="text" name="id_factura" value="1" size="5"></td>
 </tr>
 <tr>
    <td>fecha emisi?n de factura:</td>
    <td><input type="text" name="fecha_factura" value="<?php echo date("d-m-Y"); ?>" size="15"></td>
 </tr>
 <tr>
    <td>Nombre de la tienda:</td>
    <td><input type="text" name="nombre_tienda" value="Margarita Shop" size="50"></td>
 </tr>
 <tr>
    <td>Direcci?n de la tienda:</td>
    <td><input type="text" name="direccion_tienda" placeholder="C/ demostraci?n n? 1" size="50"></td>
 </tr>
 <tr>
    <td>Poblaci?n de la tienda:</td>
	
    <td><input type="text" name="poblacion_tienda" value="Madrid" size="25"></td>
 </tr>
 <tr>
 <td>
                  <label for="country">Municipio</label></td>
				  
                 <td> <select class="custom-select d-block w-100" name="country" required>
                    <option value="">Seleccione... </option>
                    <option>Garcia</option>
					<option>Mari?o</option>
					<option>Antolin del Campo</option>
					<option>Arismendi</option>
                  </select>
				  </td>
 </tr>
 <tr>
    <td>Provincia de la tienda:</td>
    <td><input type="text" name="provincia_tienda" value="Madrid" size="25"></td>
 </tr>
 <tr>
    <td>C?digo Postal de la tienda:</td>
    <td><input type="text" name="codigo_postal_tienda" value="28080" size="5"></td>
 </tr>
 <tr>
    <td>Tel?fono de la tienda:</td>
    <td><input type="text" name="telefono_tienda" value="900 00 00 00" size="15"></td>
 </tr>
 <tr>
    <td>Fax de la tienda:</td>
    <td><input type="text" name="fax_tienda" value="900 00 00 00" size="15"></td>
 </tr>
 <tr>
    <td>Identificacion Fiscal de la tienda:</td>
    <td><input type="text" name="identificacion_fiscal_tienda" value="11223344N" size="15"></td>
 </tr>
 <tr>
    <td><hr></td>
    <td><hr></td>
 </tr>
 <tr>
    <td>Nombre del cliente:</td>
    <td><input type="text" name="nombre_cliente" value="Fernando" size="15"></td>
 </tr>
 <tr>
    <td>Apellidos del cliente:</td>
    <td><input type="text" name="apellidos_cliente" value="Garc?a Garc?a" size="15"></td>
 </tr>
 <tr>
    <td>Direcci?n del cliente:</td>
    <td><input type="text" name="direccion_cliente" value="C/ cualquiera n? 1" size="50"></td>
 </tr>
 <tr>
    <td>Poblaci?n del cliente:</td>
    <td><input type="text" name="poblacion_cliente" value="Sevilla" size="25"></td>
 </tr>
 <tr>
    <td>Provincia del cliente:</td>
    <td><input type="text" name="provincia_cliente" value="Sevilla" size="25"></td>
 </tr>
 <tr>
    <td>C?digo Postal del cliente:</td>
    <td><input type="text" name="codigo_postal_cliente" value="41070" size="5"></td>
 </tr>
 <tr>
    <td>Identificacion Fiscal del cliente:</td>
    <td><input type="text" name="identificacion_fiscal_cliente" value="44332211N" size="15"></td>
 </tr>
</table>

<h3>PRODUCTOS</h3>

<table cellpadding="5" border="1">
 <tr>
    <td>Impuestos:</td>
    <td><input type="text" name="iva" value="21" size="5"> %</td>
 </tr>
 <tr>
    <td>Gastos de env?o</td>
    <td><input type="text" name="gastos_de_envio" value="5.95" size="5"> ?</td>
 </tr>
</table>

<p><mark>?Ver c?digo fuente para ver simulaci?n de extracci?n de los datos de productos de una base de datos!</mark></p>

<table cellpadding="5" border="1">
    <tr><th>Unidades</th><th>Productos</th><th>Precio unidad</th></tr>
<?php
//Demo de Array de productos simulando extracci?n de datos de una base de datos.
$array_productos = array
(
"unidades" => array(1, 4, 3), 
"productos" => array("Zapatos", "Camisetas", "Pantalones"),
"precio_unidad" => array(20.30, 15, 50)
);
$x = 0;
while($x <= count($array_productos["unidades"]) - 1)
{
echo 
"
<tr>
<td>".$array_productos["unidades"][$x]."</td>
<td>".$array_productos["productos"][$x]."</td>
<td>".$array_productos["precio_unidad"][$x]." ?</td>
</tr>
";
$x++;
}
// A continuaci?n se guardan en variables los datos de los productos, separados por comas
// que luego ser?n extra?dos a trav?s de la funci?n explode a la hora de generar la factura
$unidades = implode(",", $array_productos["unidades"]);
$productos = implode(",", $array_productos["productos"]);
$precio_unidad = implode(",", $array_productos["precio_unidad"]);
// A continuaci?n se guardar?n los datos de los productos a trav?s de campos ocultos
?>
</table>

<input type="hidden" name="unidades" value="<?php echo $unidades; ?>">
<input type="hidden" name="productos" value="<?php echo $productos; ?>">
<input type="hidden" name="precio_unidad" value="<?php echo $precio_unidad; ?>">
<!-- Campo que hace la llamada al script que genera la factura -->
<input type="hidden" name="generar_factura" value="true">
</form>


<footer>
	
	<p style="background:gray"> Margarita Shop, Copyright &copy; 2018 </p>
	
	</footer>
	</center>
</body>

</html>