<?php
    include('../conexion.php');

    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $made = $_POST['made'];
    $mail = $_POST['mail'];
    $price = $_POST['price'];
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


    $id = $_REQUEST['id'];
    $query = "UPDATE products SET name='$name',id_category='$category',made_in='$made',description='$description',contact='$mail',price='$price',image='$image' WHERE id ='$id'";
    $resultado = $pdo->query($query);
   
    if($resultado){
        //echo 'exito al modificar';
        header("Location: ../screens/loading_product.php");
    }else{
        echo 'Fallo';
        echo $pdo->error;
    }

?>