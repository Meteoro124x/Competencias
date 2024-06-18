<?php
session_start();
if(empty($_SESSION["usuario"])){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="no_se.css">
</head>
<body>
  <div class="background"></div>
  <div class="card">
    <a class="navbar-brand" href="promov.html"><img class="logo" src="vologo.jpg"></a>
    <h4>Login</h4>
    <form action="login1.php" method="post" class="form">
      <input type="text" name="usuario" placeholder="Usuario">
      <input type="password" name="pass" placeholder="Contrasena">
      <input type="submit" value="Ingresar" name="inicio">
    </form>
    </div>
</body>
</html>
<?php
}
elseif($_SESSION["usuario"]=="Admin"){
  header('location: ZonaAdmin.php');
}else{
  header('location: principal.php');
}
?>