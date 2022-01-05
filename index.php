<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css?1.0">
    <title>Login.com</title>

</head>
<body>

    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 m-1">
            <div class="col-md-6 col-sm-8 col-xl-4 col-lg-4 formulario">
                <form action="php/process/validar.php" method="POST">
                    <div class="form-group text-center pt-3">
                        <h1 class="text-light">Sistema de login</h1>
                    </div>
                    <div class="form-group mx-sm-4 pt-3">
                    <p> <input type="text" class="form-control" placeholder="Ingrese su usuario" name="usuario" pattern="[A-Za-z0-9_-]{1-15}" required></p>
                    </div>
                    <div class="form-group mx-sm-4 pb-5">
                    <p> <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contraseña" pattern="[A-Za-z0-9_-]{1-15}" required ></p>
                    </div>
                    <div class="d-grid gap-2 mx-sm-4 pb-5">
                        <input type="submit" class="btn btn-block btn-lg ing" value="INGRESAR">
                    </div>
                    <div class="form-group mx-sm-4 text-end">
                        <span><a class="olvide" href="#">Olvide mi Contraseña</a></span>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>