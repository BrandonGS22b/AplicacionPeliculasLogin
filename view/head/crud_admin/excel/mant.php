<?php
/*


NOTA IMPORTANTE, LOS DOCUMENTOS GENERADOS DEL EXCEL, SIEMPRE SE MOSTRARAN EN DONDE SE ENCUENTRA ESTE ARCHIVO PHP, DEBIDO A QUE LOS OTROS GENERADOS POR MEDIO DE DESCARGA...
ESTAN CORRUPTAS



*/


require 'vendor/autoload.php';//DEPENDENCIA PARA FUNCIONAR EXCEL
include '../php/C_bckend.php';//CONEXION CON LA BASE DE DATOS

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$spreadsheet = new Spreadsheet();//NUEVO EXCEL
$sheet = $spreadsheet->getActiveSheet();//ENTRAR AL EXCEL

// Establecer el ancho predeterminado de las columnas
$sheet->getDefaultColumnDimension()->setWidth(15);//ESPACIADO EN HORIZONTAL

/*
    A        B        C       D       E
1   ID    Nombre   Correo   Fecha   Hora
2
3
4
5

RESUMEN DE LO QUE HACE EL CODIGO DE ABAJO
*/

$sheet->setCellValue('A1', 'ID');
$sheet->setCellValue('B1', 'Nombre');
$sheet->setCellValue('C1', 'Correo');
$sheet->setCellValue('D1', 'Fecha');
$sheet->setCellValue('E1', 'Hora');

// Agregar bordes a las celdas de la columna A1 a E1
$cellRange = 'A1:E1';//SELECCIONE DESDE LA COLUMA A-E DE LA FILA 1
$sheet->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);//Bordes de cada celda
$sheet->getStyle($cellRange)->getFont()->setBold(true);//NEGRILLA


// Aplicar color de fondo a las celdas del rango A1:E1
$sheet->getStyle($cellRange)->applyFromArray([
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'rgb' => 'FFFF00' // Color amarillo
        ]
    ]
]);

//SELECCION DE TODOS LOS DATOS CONTENIDOS EN usuarios
$query = "SELECT * FROM mantenimiento";
$resultado = mysqli_query($conexion, $query);//EJECUTAR EL CODIGO EN LA BASE DE DATOS

$row = 2;//A2:E2 EN CADA $ROW, me pondra el numero actual

/*


ESTE CODIGO SE MODIFICA SEGUN COMO SE ENCUENTRE EN LA BASE DE DATOS (LN 74-78)


*/

while ($fila = mysqli_fetch_assoc($resultado)) {
    $sheet->setCellValue('A' . $row, $fila['id']); //A$row(2) (la id que almacena la base de datos)
    $sheet->setCellValue('B' . $row, $fila['nombre']);//A$row(2) (el nombre que almacena la base de datos)
    $sheet->setCellValue('C' . $row, $fila['correo']);//A$row(2) (el correo que almacena la base de datos)
    $sheet->setCellValue('D' . $row, $fila['fecha']);//A$row(2) (el usuario que almacena la base de datos)
    $sheet->setCellValue('E' . $row, $fila['hora']);//A$row(2) (la contraseña que almacena la base de datos)

    // Agregar bordes a cada celda (actualmente ubicada en A2:E2)
    $cellRange = 'A' . $row . ':E' . $row;
    $sheet->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);
    
    // Aplicar formato a las celdas
    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);//CENTRAR LAS PALABRAS SENTIDO VERTICAL
    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setWrapText(true);//AUTOAJUSTE A LA CELDA
    
    $row++;//A$row:E$row
}

$sheet->getStyle('A1:E' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);//CENTRAR LAS PALABRAS SENTIDO HORIZONTAL

$filename = "BD_mantenimiento.xlsx";//Nombre del archivo
$filepath = $_SERVER['DOCUMENT_ROOT'] . '/Descargas/' . $filename; //Ruta completa de la carpeta Descargas

$writer = new Xlsx($spreadsheet);
$writer->save($filename);

// Descargar el archivo XLSX
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Content-Length: ' . filesize($filepath));
readfile($filename);


//FINALIZAR
exit();
?>
