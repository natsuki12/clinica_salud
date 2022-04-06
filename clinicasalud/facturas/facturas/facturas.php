<?php
if ($_POST["generar_factura"] == "true")
{

//Recibir detalles de factura
$id_factura = $_POST["id_factura"];
$fecha_factura = $_POST["fecha_factura"];

//Recibir los datos de la empresa
$nombre_tienda = $_POST["nombre_tienda"];
$direccion_tienda = $_POST["direccion_tienda"];
$poblacion_tienda = $_POST["poblacion_tienda"];
$country=$_POST["country"];
$provincia_tienda = $_POST["provincia_tienda"];
$codigo_postal_tienda = $_POST["codigo_postal_tienda"];
$telefono_tienda = $_POST["telefono_tienda"];
$fax_tienda = $_POST["fax_tienda"];
$identificacion_fiscal_tienda = $_POST["identificacion_fiscal_tienda"];

//Recibir los datos del cliente
$nombre_cliente = $_POST["nombre_cliente"];
$apellidos_cliente = $_POST["apellidos_cliente"];
$direccion_cliente = $_POST["direccion_cliente"];
$poblacion_cliente = $_POST["poblacion_cliente"];
$provincia_cliente = $_POST["provincia_cliente"];
$codigo_postal_cliente = $_POST["codigo_postal_cliente"];
$identificacion_fiscal_cliente = $_POST["identificacion_fiscal_cliente"];



//variable que guarda el nombre del archivo PDF
$archivo="factura-$id_factura.pdf";

//Llamada al script fpdf
require('fpdf.php');


$archivo_de_salida=$archivo;

$pdf=new FPDF();  //crea el objeto
$pdf->AddPage();  //añadimos una página. Origen coordenadas, esquina superior izquierda, posición por defeto a 1 cm de los bordes.


//logo de la tienda
$pdf->Image('../empresa4.png' , 60 ,90, 90 , 50,'PNG', 'http://php-estudios.blogspot.com');
$pdf->Image('../empresa2.png' , 0 ,0, 70 , 40,'PNG', 'http://php-estudios.blogspot.com');

// Encabezado de la factura
$pdf->SetFont('Arial','B',14);
$pdf->Cell(190, 10, "historia", 0, 2, "C");
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5, "NUMERO DE HISTORIA: $id_factura"."\n"."Fecha: $fecha_factura", 0, "C", false);
$pdf->Ln(2);

// Datos de la tienda
$pdf->SetFont('Arial','B',12);
$top_datos=45;
$pdf->SetXY(40, $top_datos);
$pdf->Cell(190, 10, "Datos de la clinica:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190, //posición X
5, //posición Y
$nombre_tienda."\n".
"Dirección: ".$direccion_tienda."\n".
"Población: ".$poblacion_tienda."\n".
"ciudad:".$country."\n".
"Provincia: ".$provincia_tienda."\n".
"Código Postal: ".$codigo_postal_tienda."\n".
"Teléfono: ".$telefono_tienda."\n".
"correo: ".$fax_tienda."\n".
"Indentificación Fiscal: ".$identificacion_fiscal_tienda,
 0, // bordes 0 = no | 1 = si
 "J", // texto justificado 
 false);


// Datos del cliente
$pdf->SetFont('Arial','B',12);
$pdf->SetXY(125, $top_datos);
$pdf->Cell(190, 10, "Datos del paciente:", 0, 2, "J");
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(
190, //posición X
5, //posicion Y
"Nombre: ".$nombre_cliente."\n".
"Apellidos: ".$apellidos_cliente."\n".
"Dirección: ".$direccion_cliente."\n".
"Población: ".$poblacion_cliente."\n".
"Provincia: ".$provincia_cliente."\n".
"edad: ".$codigo_postal_cliente."\n".
"cedula: ".$identificacion_fiscal_cliente, 
0, // bordes 0 = no | 1 = si
"J", // texto justificado
false);

//Salto de línea
$pdf->Ln(2);





$pdf->Output($archivo_de_salida);//cierra el objeto pdf

//Creacion de las cabeceras que generarán el archivo pdf
header ("Content-Type: application/download");
header ("Content-Disposition: attachment; filename=$archivo");
header("Content-Length: " . filesize("$archivo"));
$fp = fopen($archivo, "r");
fpassthru($fp);
fclose($fp);

//Eliminación del archivo en el servidor
unlink($archivo);
}