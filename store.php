<?php
    include("conexion.php");

    $code = $_POST['codigo'];
    $name = $_POST['nombre'];
    $email = $_POST['correo'];
    $password = $_POST['contraseña'];
    $gender = $_POST['genero'];


    $insert = "INSERT INTO registros (codigo, nombre, correo_electronico, contraseña, genero) VALUES ('$code', '$name', '$email', '$password', '$gender')";

    $result = mysqli_query($conn, $insert);
    if($result){
        header('Location: index.php');
    }
?>