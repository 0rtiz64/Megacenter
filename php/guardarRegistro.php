<?php
/**
 * Created by PhpStorm.
 * User: David Ortiz
 * Date: 1/4/2019
 * Time: 8:14 AM
 */
include 'conexion.php';
$nombre = $_POST["phpNombre"];
$empresa= $_POST["phpEmpresa"];
$telefono1 = $_POST["phpTel1"];
$telefono2= $_POST["phpTel2"];
$correo= $_POST["phpCorreo"];
$comentario = $_POST["phpComentarios"];
$registro= $_POST["phpRegistro"];


$query = mysqli_query($enlace,"insert into clientes (nombre,empresa,cel,tel,correo,comentario,registro) values 
	('".$nombre."','".$empresa."','".$telefono1."','".$telefono2."','".$correo."','".$comentario."','".$registro."')");
?>