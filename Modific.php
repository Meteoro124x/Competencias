<?php
require ('acciones.php');
$pdo = crearConexion();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$deuda = $_POST['deuda'];
$confirm = Editar($pdo,$id,$nombre,$email,$telefono,$direccion,$fecha,$deuda);
header("Location: ZonaAdmin.php"); 
?>