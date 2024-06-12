<?php 

//Va a saber que trabajamos con sesiones
session_start();

/*Conectar a la base de datos*/
include '../php/C_bckend.php';//CONEXION CON LA BASE DE DATOS
ob_start();//INICIO DE LAS FUNCIONES DE PDF
require('fpdf.php');//SE REQUIERE UN ARCHIVO ADICIONAL LLAMADO fpdf.php

// Obtener los datos de la base de datos
$query = "SELECT * FROM hardware";//SELECCIONAR TODOS LOS DATOS DEL USUARIO
$resultado = mysqli_query($conexion, $query);//REALIZAR CONSULTA
mysqli_num_rows($resultado);//LECTURA DE DATOS PARA VERIFICAR SI ES CORRECTO

// Crear un nuevo archivo PDF
$pdf = new FPDF();//Nuevo PDF
$pdf->AddPage();//AÑADIR PAGINA

// Definir el encabezado de la tabla
$pdf->SetFont('Arial', 'B', 12);//Tipo de letra, Negrilla, tamaño
$pdf->Cell(6, 10, 'id', 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
$pdf->Cell(150, 10, 'nombre', 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
$pdf->Cell(15, 10, 'precio', 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
$pdf->Cell(20, 10, 'cantidad', 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES

// Recorrer los resultados de la consulta y agregar los datos a la tabla
$pdf->SetFont('Arial', '', 12);
while ($fila = mysqli_fetch_assoc($resultado)) {
    $pdf->Ln();//Enter cada vez que pasa por el while
    $pdf->Cell(6, 10, $fila['id'], 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
    $pdf->Cell(150, 10, $fila['nombre'], 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
    $pdf->Cell(15, 10, $fila['precio'], 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
    $pdf->Cell(20, 10, $fila['cantidad'], 1);//SANGRIA EN HORIZONTAL, vertical, dato, 1 DIBUJA BORDES
}

// Generar el archivo PDF
$pdf->Output('BD_hard.pdf', 'D');//El documento se llamara archivo.pdf, ubicado posiblemente en D o en Descargas
ob_end_flush(); //FIN DE LAS FUNCIONES DE PDF
exit;
?>