<?php
//include ('conexion.php');
require ('acciones.php');
$pdo = crearConexion();
$registros = mostrarlog($pdo);
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visión Óptica</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--PARA el buscador-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="barra.css">
  <link rel="stylesheet" href="Tabla.css">
    <font size="5">
    <nav class="barra">
        <ul class="edit">
            <li>
                <a href="promov.html" class="logo"><img src="vologo.jpg" style="width:120px;"></a>
            </li>
            <li><a href="ninos.html" class="link">Niños</a></li>
            <li><a href="hombre.html" class="link">Hombres</a></li>
            <li><a href="mujer.html" class="link">Mujeres</a></li>
            <li><a href="promov.html" class="link">Promociones</a></li>
            <li><a href="logout.php" class="link">Cerrar sesión</a></li>
            <li>Modo Admin</li>
            <li><a href="ZonaAdmin.php" class="link">Registros</a></li>
        </ul>
    </font>
    </nav>
</head>
<body>
    <main class="w3-content" style="max-width:1200px;">
        
            <CENTER><div class="bubble-text text">¡Tabla de Cuentas!</div></CENTER><br>
            <script src="no.js"></script>
            <center> 
            <?php
            /*
            if(isset($_SESSION["nombre"])){
                echo "<table>";
                foreach($_SESSION["nombre"] as $reg){
                    echo '<tr>';
                    echo '<td>'. $reg['Id'].'</td>';
                    echo '<td>'. $reg['nombre'].'</td>';
                    echo '<td>'. $reg['correo'].'</td>';
                    echo '<td>'. $reg['telefono'].'</td>';
                    echo '<td>'. $reg['direccion'].'</td>';
                    echo '<td>'. $reg['fecha'] .'</td>';
                    echo '<td>'. $reg['deuda'].'</td>';
                    echo '<td>'.$reg['pago'] .'</td>';
                    echo '<td>'.$reg['tipo_pago'] .'</td>';
                    echo '<td>'.$reg['producto'] .'</td>';
                    echo '</tr>';
                }
                echo "</table>";
            }
                */
              ?>

        <div class="w3-container w3-center w3-padding-32">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($registros as $reg){
                    echo '<tr>';
                    echo '<td>'. $reg['Id'].'</td>';
                    echo '<td>'. $reg['Usuario'].'</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </main>
    <br>
    <nav class="navbar navbar-expand-sm bg-white navbar-white navbar-custom">
    </nav>
    <br><br>
<br><br><br><br><br><br><br><br>
      
      <div class="main"></div>
      <div class="footer"><div class="bubbles">
        <!-- Genera 128 burbujas con estilos aleatorios -->
        <script>
            for (var i = 0; i < 100; i++) {
                var bubble = document.createElement("div");
                bubble.className = "bubble";
                bubble.style = `--size:${2 + Math.random() * 4}rem; --distance:${6 + Math.random() * 4}rem; --position:${-5 + Math.random() * 110}%; --time:${2 + Math.random() * 2}s; --delay:${-1 * (2 + Math.random() * 2)}s;`;
                document.querySelector(".bubbles").appendChild(bubble);
            }
        </script>
    </div>
    <div class="content">
        <div>
            <div><br>
                <div class="footer-column">
                    <b>Sitio</b>
                    <ul>
                        <li><a href="niños.html">Niños</a></li>
                        <li><a href="hombre.html">Hombres</a></li>
                        <li><a href="mujer.html">Mujeres</a></li>
                        <li><a href="promov.html">Promociones</a></li>
                    </div>
                </ul>
            </div>
            <div>
                <br>
                <div class="footer-column">
                    <b>Contacto</b>
                    <ul>
                        <li><a href="tel: +5216331309882">Numero de telefono</a></li>
                        <li><a href="mailto: email@gmail.com">Correo electronico</a></li>
                    </div>
                    <li>1920 Calle 7, 84269 Agua Prieta, Sonora</li>
                </ul>
            </div>
            <br>
            
        </div>
        <div>
            
            <p><cite>©2024 Optica Vission</cite></p>
        </div>
    </div>
</div>
<svg style="position:fixed; top:100vh">
    <defs>
        <filter id="blob">
            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="blob"></feColorMatrix>
            <!-- Después de revisar esto después de años, no puedo recordar por qué agregué esto, pero no es necesario para el efecto blob -->
            <!-- <feComposite in="SourceGraphic" in2="blob" operator="atop"></feComposite> -->
        </filter>
    </defs>
</svg>

</body>
</html>