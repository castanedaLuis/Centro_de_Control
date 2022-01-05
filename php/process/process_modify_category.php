<?php
    include('../conexion.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $products = $_POST['products'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


    $id = $_REQUEST['id'];
    $query = "UPDATE category SET name='$name',description='$description',products='$products',image='$image' WHERE id ='$id'";
    $resultado = $pdo->query($query);
   
    if($resultado){
        //echo 'exito al modificar';
        header("Location: ../screens/loading_category.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>