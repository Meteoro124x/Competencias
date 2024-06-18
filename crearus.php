<?php
require ('acciones.php');
$pdo = crearConexion();
$nombre = $_POST['nombre'];
$contra = $_POST['contra'];
$confirm = CrearUs($pdo,$nombre,$contra);
header("Location: ZonaAdmin.php"); 
?>