<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/buyer.css?1.0">
    <title>Document</title>
</head>

<body class="m-5 mt-0">


    <section>
        <div class="row mt-3">

            <nav class="navbar navbar-light bg-primary d-none d-lg-block">
                <div class="container-fluid justify-content-center">
                    <a class="navbar-brand text-light lead " href="../home.php">
                        <img src="../../img/logo_1.0.png" alt="" width="50" height="50" class="img-fluid d-inline-block align-text-center">
                        Centro Administrativo de ArteLoca.com.mx
                    </a>
                    <a class="fs-6 fst-italic text-light" href="../process/die_sesion.php">CERRAR SESION</a>
                </div>
            </nav>
        </div>

        <div class="row">

            <div class="col menu  mt-5">
                <ul class="list-group list-group-horizontal position-absolute top-30 start-50 translate-middle">
                    <li> <a class="modifi1" href="loading_category.php">
                            <ion-icon name="copy-outline"></ion-icon>Ver Categorias
                        </a></li>
                    <li> <a class="modifi2" href="loading_product.php">
                            <ion-icon name="pricetag-outline"></ion-icon>Ver Productos
                        </a></li>
                    <li> <a class="modifi3" href="add_category.php">
                            <ion-icon name="add-outline"></ion-icon>Agregar Categoria
                        </a></li>
                    <li> <a class="modifi4" href="add_products.php">
                            <ion-icon name="add-outline"></ion-icon>Agregar Producto
                        </a></li>
                    <li> <a class="modifi1" href="buyer.php">
                            <ion-icon name="add-outline"></ion-icon>Posibles ventas
                        </a></li>
                </ul>
            </div>
        </div>

    </section>

    <div class="row row-cols-1 row-cols-md-2 g-4 mt-5">
        <?php
        include('../conexion.php');
        $cero = 0;
        $query = "SELECT * FROM buy_products WHERE contact_it = '$cero'";
        $resultado = $pdo->query($query);
        while ($row = $resultado->fetch_assoc()) {
        ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Fecha</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Mensaje</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        <th scope="col">¿Lo has contactatdo?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $row['date']; ?></th>
                        <td><?php echo $row['name_buyer'];?></td>
                        <td><?php echo $row['phone_buyer'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><?php echo $row['message_buyer'];?></td>
                        <td><?php echo $row['name_product'];?></td>
                        <td><?php echo '$'.$row['price_product'];?></td>
                        <td> <a href="../process/process_contactado.php?id=<?php echo $row['id'];?>" class="btn btn-danger">Si, Contactado</a></td>
                        
                    </tr>
                </tbody>
            </table>
        <?php
        }
        ?>
    </div>



    <!-- JAVASCRITP 1b1b1b-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <!-- icon font-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>