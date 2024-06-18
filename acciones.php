<?php
function crearConexion(){
    $conexion=null;
    $servidor='localhost';
    $bd='optica';
    $user='root';
    $pass='';
    try{
        $conexion= new PDO('mysql:host='.$servidor.';dbname='.$bd,$user,$pass);
    }catch(PDOException $e){
            echo"Error de conexion";
            exit;
        }
    return $conexion;
    }
function mostrar($pdo){
    try{
        $stmt = $pdo->query("Select * from usuarios");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $i=0;
        while($row = $stmt->fetch()){
            $registros[$i] = $row;
            $i++;
        }
        return $registros;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function mostrarUs($pdo,$usuario){
    try{
        $stmt = $pdo->prepare("Select * from usuarios where usuario=:usu");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->bindParam(":usu",$usuario);
        $stmt->execute();
        $i=0;
        while($row = $stmt->fetch()){
            $registros[$i] = $row;
            $i++;
        }
        return $registros;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function Crear($pdo,$nombre,$usuario,$correo,$telefono,$direccion,$fecha,$pago,$pagos,$producto){
    try{
        $stmt = $pdo->prepare("Insert into usuarios(nombre,usuario,correo,telefono,direccion,fecha,deuda,pago,tipo_pago,producto) values (:nom,:usu,:correo,:tel,:direc,:fecha,:pago,:pago,:tip_pago,:produc)");
        $stmt->bindParam(":nom",$nombre);
        $stmt->bindParam(":usu",$usuario);
        $stmt->bindParam(":correo",$correo);
        $stmt->bindParam(":tel",$telefono);
        $stmt->bindParam(":direc",$direccion);
        $stmt->bindParam(":fecha",$fecha);
        $stmt->bindParam(":pago",$pago);
        $stmt->bindParam(":tip_pago",$pagos);
        $stmt->bindParam(":produc",$producto);
        $confirm = $stmt->execute();
        return $confirm;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function Borrar($pdo,$id){
    try{
    $stmt = $pdo->prepare("Delete from usuarios where id=:id");
    $stmt->bindParam(":id",$id);
    $confirm = $stmt->execute();
        return $confirm;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function Editar($pdo,$id,$nombre,$correo,$telefono,$direccion,$fecha,$deuda){
    try{
    $stmt = $pdo->prepare("Update usuarios set nombre=:nom,correo=:correo,telefono=:tel,direccion=:direc,fecha=:fecha,deuda=deuda-:deuda where id=:id");
    $stmt->bindParam(":nom",$nombre);
        $stmt->bindParam(":correo",$correo);
        $stmt->bindParam(":tel",$telefono);
        $stmt->bindParam(":direc",$direccion);
        $stmt->bindParam(":fecha",$fecha);
        $stmt->bindParam(":deuda",$deuda);
    $stmt->bindParam(":id",$id);
    $confirm = $stmt->execute();
        return $confirm;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function CrearUs($pdo,$nombre,$contra){
    try{
        $stmt = $pdo->prepare("Insert into login(Usuario,Password) values (:nom,:contra)");
        $stmt->bindParam(":nom",$nombre);
        $stmt->bindParam(":contra",$contra);
        $confirm = $stmt->execute();
        return $confirm;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
function mostrarlog($pdo){
    try{
        $stmt = $pdo->query("Select * from login");
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $i=0;
        while($row = $stmt->fetch()){
            $registros[$i] = $row;
            $i++;
        }
        return $registros;
    }catch(PDOException $e){
        die('Error'. $e->getMessage());
    }
}
?>