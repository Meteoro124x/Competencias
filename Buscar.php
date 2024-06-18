<?php
require ("acciones.php");
session_start();
$pdo = crearConexion();
$nombre = $_POST["nombre"];
try{
    $stmt = $pdo->prepare("Select * from usuarios where nombre = :nom");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt -> bindParam(':nom', $nombre);
    $stmt -> execute();
    $i=0;
    while($row = $stmt->fetch()){
        $registros[$i] = $row;
        $i++;
    }
    if($registros && $_SESSION["usuario"]=="Admin"){
        $_SESSION["nombre"] = $registros;
        header("Location: ZonaAdmin.php");
        }elseif(empty($registros)&& $_SESSION["usuario"]=="Admin"){
            header("Location: ZonaAdmin.php");  
        }
        elseif($registros && $_SESSION["usuario"] != "Admin"){
        $_SESSION["nombre"] = $registros;
        header("Location: principal.php");
        }else{
            header("Location: principal.php");
        }
}catch(PDOException $e){
    die('Error'. $e->getMessage());
    //header("Location: principal.php");
}
?>