<?php
require ("acciones.php");
$pdo = crearConexion();
$id = $_POST["ide"];
if(!empty($id)){
?>
<!DOCTYPE html>
<html>
<head>
  <title>Borrar</title>
  <link rel="stylesheet" href="lupe.css">
</head>
<body>
  <div class="background"></div>
  <div class="card">
    <a class="navbar-brand" href="ZonaAdmin.php"><img class="logo" src="vologo.jpg"></a>
    <h3>Esta seguro de borrar este registro?</h3>
    <form method="post" class="form" action="borrar2.php">
    <input readonly type="number" name="id" placeholder="Id" value="<?php echo $id; ?>">
      <button type="submit" name="si">SI</button>
      <button type="submit" name="no">NO</button>
    </form>
    </div>
</body>
</html>
<?php
}else{
    header("Location: ZonaAdmin.php");
}
?>