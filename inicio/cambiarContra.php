<?php
//se manda llamar la conexion
include("../conexion/conexion.php");

$contra  = $_POST["contra"];
$contraMD5=md5($contra);
$ide     = $_POST["ide"];

$usuario = trim($usuario);
// $contra  = trim($contra);
$pVez=0;

$fecha   = date("Y-m-d"); 
$hora    = date ("H: i: s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE usuarios SET
							contra='$contraMD5',
							pvez='$pVez',
							fecha_registro='$fecha',
							hora_registro='$hora',
							id_registro='1',
							pvez='0'
						WHERE id_usuario='$ide'
							 ",$conexion)or die(mysql_error());

?>