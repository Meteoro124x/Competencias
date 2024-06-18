<?php
require ("acciones.php");
$pdo = crearConexion();
$id = $_POST["id"];
if(isset($_POST["si"])){
    Borrar($pdo,$id);
    header("Location: ZonaAdmin.php");
    }
    elseif(isset($_POST["no"])){
        header("Location: ZonaAdmin.php");
    }
?>