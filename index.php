<?php
    include("conexion.php");
    $registros = "SELECT * FROM registros";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Siiau Escolar</title>
        <link rel="stylesheet" href="estilos.css">
        <link rel="shortcut icon" type="image/x-icon" href="http://siiauescolar.siiau.udg.mx/favicon.ico" />
    </head>
    <body>

        <header>

            <div class="nav">
                <ul>
                    <li><a href="index.php">index</a></li>
                    <li><a href="formulario.php">formulario</a></li>
                </ul>
            </div>

        </header>
        
        <main>
            <div class="table">

                <table>

                    <tr>
                        <th>ID</th>
                        <th>CODIGO</th>
                        <th>NOMBRE COMPLETO</th>
                        <th>CORREO ELECTRONICO</th>
                        <th>CONTRASEÑA</th>
                        <th>GENERO</th>
                    </tr>

                    <?php $resultado = mysqli_query($conn, $registros);
                    while($row=mysqli_fetch_assoc($resultado)) { ?>
                    <tr><td><?php echo $row["id"]?></td>
                    <td><?php echo $row["codigo"]?></td>
                    <td><?php echo $row["nombre"]?></td>
                    <td><?php echo $row["correo_electronico"]?></td>
                    <td><?php echo $row["contraseña"]?></td>
                    <td><?php echo $row["genero"]?></td></tr>
                    <?php } mysqli_free_result($resultado); ?>

                </table>

            </div>
        </main>
        
    </body>
</html>