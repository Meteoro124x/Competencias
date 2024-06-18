<?php
session_start();
if(!isset($_SESSION["usuario"])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pagina segura</title>
</head>
<body>
    <h2>Bienvenido <?php echo $_SESSION["usuario"]; ?></h2>
    <a href="logout.php">Cerrar sesion</a>
</body>
</html>