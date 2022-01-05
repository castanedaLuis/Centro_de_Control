<?php
    include('../conexion.php');

    $id = $_REQUEST['id'];
    $uno = 1;
    $query = "UPDATE buy_products SET contact_it ='$uno' WHERE id ='$id'";
    $resultado = $pdo->query($query);
   
    if($resultado){
        //echo 'exito al UPDATE';
        header("Location: ../screens/buyer.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>