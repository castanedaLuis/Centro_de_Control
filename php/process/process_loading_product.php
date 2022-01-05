<?php
    include('../conexion.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $made = $_POST['made'];
    $mail = $_POST['mail'];
    $price = $_POST['price'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
    $query = "INSERT INTO products (name,id_category,made_in,description,contact,price,image ) VALUES ('$name','$category','$made','$description','$mail','$price','$image')";
    $resultado = $pdo->query($query);
    //INSERT INTO categoty (name,description,products,image)VALUES ('hola','castañeda',0,'dadasdas');
    if($resultado){
        header("Location: ../screens/loading_product.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>