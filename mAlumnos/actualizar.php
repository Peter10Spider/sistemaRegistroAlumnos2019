<?php
//se manda llamar la conexion
include("../conexion/conexion.php");

$Ncontrol   = $_POST["Ncontrol"];
$idCarrera  = $_POST["idCarrera"];


$Ncontrol   = trim($Ncontrol);
$idCarrera  = trim($idCarrera);


$fecha=date("Y-m-d"); 
$hora=date ("H:i:s");

mysql_query("SET NAMES utf8");
 $insertar = mysql_query("UPDATE alumnos SET
							no_control='$Ncontrol',
							id_carrera='$idCarrera',
							fecha_registro='$fecha',
							hora_registro='$hora',
							id_registro='1'
						WHERE id_alumno='$ide'
							 ",$conexion)or die(mysql_error());

?>