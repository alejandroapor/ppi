
<?php
session_start();
//use PgSql\Connection\Connection;

//include_once('../Model/conexionn.php');
//include_once '../Model/validacion.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</head>


<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="p-5 text-secondary shadow" style="border-radius: 20px; width: 28rem; height:35rem; background: rgba(255, 255, 255, 0.50); margin-right: -10rem;">

        <div class="d-flex justify-content-center">
            <img src="../img/gad.png" alt="login-icon" style="height: 10rem" />
        </div>
        
        <div style="-webkit-text-fill-color: #000;" class="text-center fs-4 fw-bold">GAD</div>
        <div class="text-center fs-5 fw-bold" style="color: #000;">PARROQUIAL PALMALES</div>

        <form action="" method="post">

            <div class="input-group mt-4" style="height: 3rem;">
                <div class="input-group-text bg-light">
                    <span class="material-icons-sharp">person</span>
                </div>
                <input class="form-control bg-light" type="text" placeholder="Usuario" name="usuario" />
            </div>

            <div class="input-group mt-3" style="height: 3rem;">
                <div class="input-group-text bg-light">
                    <span class="material-icons-sharp">lock</span>
                </div>
                <input class="password form-control bg-light" type="password" placeholder="Contraseña" name="contrasena">
                <span class="input-group-text">
                    <button class="btn-show-pass" type="button" onclick="showPassword()">
                        <i class="icon fas fa-eye-slash"></i>
                    </button>
                </span>
            </div>

            <div class="d-flex justify-content-around mt-1">
                <div class="pt-1 ">
                    <a href="#" class="text-decoration-none " style="font-size: 1rem;color: #167bae;padding-left: 50px;">Recordar su contraseña?</a>
                </div>
            </div>

            <button style="border-radius: 10px;background: #167bae;" class="btn text-white w-100 mt-4 fw-semibold shadow-sm" type="submit" name="btningresar" value="Iniciar Sesion">
                Ingresar
            </button>



<script src="../js/contra.js"> </script>
</body>

</html>