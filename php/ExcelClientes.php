<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 1/4/2019
 * Time: 2:35 PM
 */




require_once 'EXCELfunciones.php';
include 'conexion.php';



activeErrorReporting();

noCli();

require_once  '../phpExcel/Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("DAVID ORTIZ")
    ->setLastModifiedBy("DAVID ORTIZ")
    ->setTitle("Office 2007 XLSX Test Document")
    ->setSubject("Office 2007 XLSX Test Document")
    ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
    ->setKeywords("office 2007 openxml php")
    ->setCategory("Test result file");




$objPHPExcel->setActiveSheetIndex(0)
    ->setCellValue('A1', '')
    ->setCellValue('B1', 'LISTADO DE CLIENTES ')
    ->setCellValue('C1', '');




//DATOS






$objPHPExcel->setActiveSheetIndex(0)

    ->setCellValue('A3', '#')
    ->setCellValue('B3', 'NOMBRE')
    ->setCellValue('C3', 'EMPRESA')
    ->setCellValue('D3', 'TELEFONO 1')
    ->setCellValue('E3', 'TELEFONO 2')
    ->setCellValue('F3', 'CORREO')
    ->setCellValue('G3', 'REGISTRO')
    ->setCellValue('H3', 'COMENTARIOS');

$query = mysqli_query($enlace,"SELECT * from clientes ");



$contador=4;
$contador2=1;
while ($datosFinal= mysqli_fetch_array($query,MYSQLI_ASSOC)){





    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue("A$contador", $contador2)
        ->setCellValue("B$contador", utf8_encode($datosFinal["nombre"]))
        ->setCellValue("C$contador", utf8_encode($datosFinal["empresa"]))
        ->setCellValue("D$contador",$datosFinal["cel"])
        ->setCellValue("E$contador",$datosFinal["tel"] )
        ->setCellValue("F$contador",$datosFinal["correo"] )
        ->setCellValue("G$contador",$datosFinal["registro"] )
        ->setCellValue("H$contador",$datosFinal["comentario"] );
    $contador++;
    $contador2++;
}








//FIN DATOS


$objPHPExcel->getActiveSheet()->setTitle('LISTADO DE CLIENTES');
$objPHPExcel->setActiveSheetIndex(0);

getHeders();
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
exit;
?>