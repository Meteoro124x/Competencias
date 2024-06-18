<?php
require ('acciones.php');
$conexion = crearConexion();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(!empty($_POST["usuario"]) && !empty($_POST["pass"])){
        session_start();
        $usuario=$_POST["usuario"];
        $pass=$_POST["pass"];
        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query=$conexion->prepare("SELECT * FROM login where Usuario =:u AND Password=:p");
        $query->bindParam(":u",$usuario);
        $query->bindParam(":p",$pass);
        $query->execute();
        $res=$query->fetch(PDO::FETCH_ASSOC);
        if($res){
            if($res["Usuario"]=="Admin"){
                $_SESSION["usuario"] = $res["Usuario"];
                header('location:ZonaAdmin.php');
            }else{
            $_SESSION["usuario"] = $res["Usuario"];
            header('location:principal.php');
            }
        }else{
            echo"Usuario o password incorrecto";
            echo"<a href=\"login.php\">Regresar</a>";
        }
    }
}
?>