<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia Sesion");
                window.location = "login.php";
            </script>
            ';
            session_destroy();
            die();
    }
    
?>

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
    <link rel="stylesheet" href="../css/style.css?1.0">
    <title>www.admin.arte.local.com.mx</title>
</head>
<body class="m-5 mt-0 row justify-content-center">
    <section>
    <div class="row mt-3">
        
        <nav class="navbar navbar-light bg-primary d-none d-lg-block">
            <div class="col-10 container-fluid justify-content-center">
                <a class="navbar-brand text-light lead " href="home.php">
                <img src="../img/logo_1.0.png" alt="" width="50" height="50" class="img-fluid d-inline-block align-text-center">
                Centro Administrativo de ArteLoca.com.mx
                </a>
                <a class="fs-6 fst-italic text-light" href="process/die_sesion.php">CERRAR SESION</a>
            </div>
        </nav>
    </div>

    <div class="row">

        <div class="col menu  mt-5">
            <ul class="list-group list-group-horizontal position-absolute top-30 start-50 translate-middle">
                <li> <a class="modifi1" href="screens/loading_category.php"><ion-icon name="copy-outline"></ion-icon>Ver Categorias</a></li>
                <li> <a class="modifi2" href="screens/loading_product.php"><ion-icon name="pricetag-outline"></ion-icon>Ver Productos</a></li>
                <li> <a class="modifi3" href="screens/add_category.php"><ion-icon name="add-outline"></ion-icon>Agregar Categoria</a></li>
                <li> <a class="modifi4" href="screens/add_products.php"><ion-icon name="add-outline"></ion-icon>Agregar Producto</a></li>
                <li> <a class="modifi1" href="screens/buyer.php"><ion-icon name="add-outline"></ion-icon>Posibles ventas</a></li>
            </ul>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-5 tarjeta">
            <div class="card ml-5" style="width: 18rem;">
                <img src="../img/category.jpg" class="card-img-top p-2" alt="...">
                <div class="card-body">
                        <?php
                        include('conexion.php');
                        $query = "SELECT count(*) as 'total' FROM category";
                        $resultado = $pdo->query($query);
                        $row = $resultado->fetch_assoc();
                        $count = $row['total'];
                        ?>
                    <h5 class="card-title text-dark">Cantidad de Categorias</h5>
                    <p class="card-text text-dark">Existen un total de <?php echo $count; ?> Categorias registradas</p>
                    <a href="screens/loading_category.php" class="btn btn-outline-primary btn-block">Ir a Categorias</a>
          
                </div>
            </div>

            <div class="card mx-5" style="width: 18rem;">
                    <img src="../img/product.png" class="card-img-top p-2" alt="...">
                    <div class="card-body">
                        <?php
                        include('conexion.php');
                        $query = "SELECT count(*) as 'total' FROM products";
                        $resultado = $pdo->query($query);
                        $row = $resultado->fetch_assoc();
                        $count = $row['total'];
                        ?>
                        <h5 class="card-title text-dark">Cantidad de Productos</h5>
                        <p class="card-text text-dark">Existen un total de <?php echo $count; ?> Productos dados de alta</p>
                        <a href="screens/loading_product.php" class="btn btn-outline-primary btn-block">Ir a Productos</a>
                    </div>
            </div>
    </div>


    </section>




    <!-- JAVASCRITP 1b1b1b-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>    
    <!-- icon font-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>