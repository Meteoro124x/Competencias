<?php
require ('acciones.php');
$pdo = crearConexion();
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$fecha = $_POST['fecha'];
$pago = $_POST['deuda'];
$tip_pago = $_POST['pagos'];
$producto = $_POST['producto'];
$confirm = Crear($pdo,$nombre,$usuario,$email,$telefono,$direccion,$fecha,$pago,$tip_pago,$producto);
header("Location: ZonaAdmin.php"); 
?>