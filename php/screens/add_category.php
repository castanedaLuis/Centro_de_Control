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
    <link rel="stylesheet" href="../../css/add.css?1.0">
    <title>Document</title>
</head>
<body class="m-5 mt-0 row justify-content-center">

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

        <div class="col menu m-5">
            <ul class="list-group list-group-horizontal position-absolute top-30 start-50 translate-middle">
                <li> <a class="modifi1" href="loading_category.php"><ion-icon name="copy-outline"></ion-icon>Ver Categorias</a></li>
                <li> <a class="modifi2" href="loading_product.php"><ion-icon name="pricetag-outline"></ion-icon>Ver Productos</a></li>
                <li> <a class="modifi3" href="add_category.php"><ion-icon name="add-outline"></ion-icon>Agregar Categoria</a></li>
                <li> <a class="modifi4" href="add_products.php"><ion-icon name="add-outline"></ion-icon>Agregar Producto</a></li>
                <li> <a class="modifi1" href="buyer.php"><ion-icon name="add-outline"></ion-icon>Posibles ventas</a></li>
            </ul>
        </div>
    </div>
    <section class="d-flex justify-content-center">
        <div class="card col-sm-4 p-3 text-dark bg-light">
            <div class="mb-3">
                <h2 class="fw-bold">Añadir Categoría</h2>
            </div>
            <div class="mb-2">
                <form  action="../process/process_loading.php" method="post" enctype="multipart/form-data">
                    <div class="mb-2">
                        <label for="Nombre"></label>
                        <input class="form-control rounded-start border border-success" required type="text" name="name" placeholder="Nombre de la categoría" value="">
                    </div>
                    <div class="mb-2">
                        <label for="Description"></label>
                        <textarea class="form-control rounded-start border border-success" required name="description" placeholder="Descripción de la Categoría" value="" id="" cols="60" rows="5"></textarea>
                    </div>
                    <div class="mb-2">
                        <label for="Imagen"></label>
                        <input class="form-control rounded-start border border-white" required type="file" name="image" class="text-dark">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button type="submit" class="rounded-pill btn btn-outline-success mt-3 mb-3 px-5">Registrar</button>
                    </div>
                </form>
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