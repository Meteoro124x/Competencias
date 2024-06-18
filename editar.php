<?php
require ("acciones.php");
$pdo = crearConexion();
$id = $_POST["id"];
try{
  $stmt = $pdo->prepare("Select * from usuarios where Id = :id");
  $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $stmt -> bindParam(":id", $id);
  $stmt -> execute();
  $i=0;
  while($row = $stmt->fetch()){
      $registros[$i] = $row;
      $i++;
  }
}catch(PDOException $e){
  header("Location: ZonaAdmin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Editar</title>
  <link rel="stylesheet" href="lupe.css">
</head>
<body>
  <div class="background"></div>
  <div class="card">
    <a class="navbar-brand" href="ZonaAdmin.php"><img class="logo" src="vologo.jpg"></a>
    <h4>Modificar Datos</h4>
    <form method="post" class="form" action="Modific.php">
    <input readonly type="number" name="id" placeholder="Id" value="<?php foreach($registros as $reg){ echo $reg["Id"]; ?>">
      <input type="text" name="nombre" placeholder="Nombre" value="<?php echo $reg["nombre"]; ?>">
      <input type="email" name="email" placeholder="Correo Electronico" value="<?php echo $reg["correo"]; ?>">
      <input type="text" name="telefono" placeholder="Numero de Telefono" value="<?php echo $reg["telefono"]; ?>">
      <input type="text" name="direccion" placeholder="Direccion" value="<?php echo $reg["direccion"]; ?>">
      <input type="date" name="fecha" placeholder="Fecha" value="<?php echo $reg["fecha"]; } ?>">
      <input type="text" name="deuda" placeholder="Pago">
      <input type="submit" value="Ingresar" name="inicio">
    </form>
    </div>
</body>
</html>