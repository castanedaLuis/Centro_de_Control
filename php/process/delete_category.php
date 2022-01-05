<?php
    include('../conexion.php');

    $id = $_REQUEST['id'];
    $query = "DELETE FROM category WHERE id ='$id'";
    $resultado = $pdo->query($query);
   
    if($resultado){
        echo 'exito al eliminar';
        header("Location: ../screens/loading_category.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>