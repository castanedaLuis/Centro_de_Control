<?php
    include('../conexion.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
    $query = "INSERT INTO category (name,description,products,image)VALUES ('$name','$description',0,'$image')";
    $resultado = $pdo->query($query);
    //INSERT INTO categoty (name,description,products,image)VALUES ('hola','castañeda',0,'dadasdas');
    if($resultado){
        header("Location: ../screens/loading_category.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>