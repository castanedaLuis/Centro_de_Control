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
    <link rel="stylesheet" href="../../css/update.css?1.0">
    <title>Document</title>
</head>
<body>
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
                                <li> <a class="modifi1" href="loading_category.php"><ion-icon name="copy-outline"></ion-icon>Ver Categorias</a></li>
                                <li> <a class="modifi2" href="loading_product.php"><ion-icon name="pricetag-outline"></ion-icon>Ver Productos</a></li>
                                <li> <a class="modifi3" href="add_category.php"><ion-icon name="add-outline"></ion-icon>Agregar Categoria</a></li>
                                <li> <a class="modifi4" href="add_products.php"><ion-icon name="add-outline"></ion-icon>Agregar Producto</a></li>
                                <li> <a class="modifi1" href="buyer.php"><ion-icon name="add-outline"></ion-icon>Posibles ventas</a></li>
                            </ul>
                        </div>
                    </div>

                </section>
                    <?php
                        include('../conexion.php');
                        $id = $_REQUEST['id'];
                        $query = "SELECT * FROM products WHERE id ='$id' ";
                        $resultado = $pdo->query($query);
                        $row = $resultado ->fetch_assoc();
                    ?>
                <div class="container">
                        <div class="row justify-content-center pt-5 mt-5 m-1">
                            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-4 formulario">
                                <form action="../process/process_modify.php?id=<?php echo $row['id']; ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group text-center pt-3">
                                        <h1 class="text-dark">Actualiza el Producto</h1>
                                    </div>
                                    <div class="form-group mx-sm-4 pt-3">
                                    <input  type="text"  class="form-control" name="name" placeholder="Ingresa el nombre" value="<?php echo $row['name'];  ?>" required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input type="text" siz class="form-control" name="description" placeholder="Ingresa la description" value="<?php echo $row['description'];?>"required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input  type="number" class="form-control" name="category" placeholder="Id de categoria" value="<?php echo $row['id_category'];?>"required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input type="text" class="form-control" name="made" placeholder="Ingresa la region" value="<?php  echo $row['made_in']; ?>" required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input  type="email" class="form-control" name="mail" placeholder="Ingresa el mail de contacto" value="<?php echo $row['contact'];  ?>"required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input type="number" class="form-control" name="price" placeholder="Ingresa el precio" value="<?php echo $row['price'];?>" required>
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <img height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row['image']);?>">
                                    </div>
                                    <div class="form-group mx-sm-4 pb-5">
                                    <input  type="file" name="image" class="text-dark" required>
                                    </div>
                                    <div class="d-grid gap-2 mx-sm-4 pb-5">
                                        <input type="submit" class="btn btn-block btn-lg ing" value="Guardar cambios">
                                    </div>
                                    <div class="form-group mx-sm-4 text-end">
                                        <span><a class="olvide" href="#">Los Cambios se actualizaran</a></span>
                                    </div>
                                </form>
                            </div>
                        </div>
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