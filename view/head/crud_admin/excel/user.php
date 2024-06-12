<?php
/*

NOTA IMPORTANTE, LOS DOCUMENTOS GENERADOS DEL EXCEL, SIEMPRE SE MOSTRARAN EN DONDE SE ENCUENTRA ESTE ARCHIVO PHP, DEBIDO A QUE LOS OTROS GENERADOS POR MEDIO DE DESCARGA...
ESTAN CORRUPTAS

*/

require 'vendor/autoload.php'; // DEPENDENCIA PARA FUNCIONAR EXCEL
include '../../../../config/C_bckend.php'; // CONEXION CON LA BASE DE DATOS

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

$spreadsheet = new Spreadsheet(); // NUEVO EXCEL
$sheet = $spreadsheet->getActiveSheet(); // ENTRAR AL EXCEL

// Establecer el ancho predeterminado de las columnas
$sheet->getDefaultColumnDimension()->setWidth(15); // ESPACIADO EN HORIZONTAL

$sheet->setCellValue('A1', 'id');
$sheet->setCellValue('B1', 'Nombre');
$sheet->setCellValue('C1', 'Correo');
$sheet->setCellValue('D1', 'Rol'); // Nueva columna agregada
$sheet->setCellValue('E1', 'password');

$cellRange = 'A1:E1'; // SELECCIONE DESDE LA COLUMA A-E DE LA FILA 1
$sheet->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN); // Bordes de cada celda
$sheet->getStyle($cellRange)->getFont()->setBold(true); // NEGRILLA

$sheet->getStyle($cellRange)->applyFromArray([
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'startColor' => [
            'rgb' => 'FF0000' // Color rojo
        ]
    ]
]);

$query = "SELECT * FROM usuarios";
$query2 = "SELECT * FROM administradores";
$resultado = mysqli_query($conexion, $query);
$resultado2 = mysqli_query($conexion, $query2);

$row = 2;
while ($fila = mysqli_fetch_assoc($resultado)) {
    $sheet->setCellValue('A' . $row, $fila['id']);
    $sheet->setCellValue('B' . $row, $fila['nombre']);
    $sheet->setCellValue('C' . $row, $fila['correo']);
    $sheet->setCellValue('D' . $row, 'usuarios'); // Vacío por ahora, puedes establecer un valor fijo si es necesario
    $sheet->setCellValue('E' . $row, $fila['password']);

    $cellRange = 'A' . $row . ':E' . $row;
    $sheet->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setWrapText(true);

    $row++;
}

while ($fila = mysqli_fetch_assoc($resultado2)) {
    $sheet->setCellValue('A' . $row, $fila['id']);
    $sheet->setCellValue('B' . $row, $fila['nombre']);
    $sheet->setCellValue('C' . $row, $fila['correo']);
    $sheet->setCellValue('D' . $row, 'administradores'); // Vacío por ahora, puedes establecer un valor fijo si es necesario
    $sheet->setCellValue('E' . $row, $fila['password']);

    $cellRange = 'A' . $row . ':E' . $row;
    $sheet->getStyle($cellRange)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);

    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
    $sheet->getStyle('A' . $row . ':E' . $row)->getAlignment()->setWrapText(true);

    $row++;
}

$sheet->getStyle('A1:E' . $row)->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);

$filename = "BD_user.xlsx";
$filepath = $_SERVER['DOCUMENT_ROOT'] . '/Descargas/' . $filename;

$writer = new Xlsx($spreadsheet);
$writer->save($filename);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="' . $filename . '"');
header('Pragma: no-cache');
header('Content-Length: ' . filesize($filepath));
readfile($filename);

exit();
?>