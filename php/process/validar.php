<?php
session_start();
include('../conexion.php');

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
//$contraseña = hash('sha512',$contraseña); para encriptar la contraseña

$query = "SELECT * FROM usuarios WHERE usuario='$usuario' and password='$contraseña'";
$resultado = mysqli_query($pdo,$query);


$filas= mysqli_num_rows($resultado);

if($filas){
    $_SESSION['usuario']=$usuario;
    header("location: ../home.php");
    exit;
}else{
    echo '
        <script>
            alert("DATOS INCORRECTOS");
            window.location = "../../index.php";
        </script>
        ';
    ?>
    <!--<h1 class="bad">ERROR EN LA AUTENTICACIÓN</h1>-->
    <?php

}

mysqli_free_result($resultado);
mysqli_close($pdo);




