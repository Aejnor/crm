<?php

include_once 'connectDB.php';
include_once 'config.php';

$email = $_POST['email'];
$password = $_POST['password'];

$queryAdd = $pdo->query("Insert $email ")

?>


<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Listado de clientes</title>
</head>
<body>
<div class="container">


    <h1>Añadir cliente</h1>

    <ul>
        <li><a class="btn btn-primary" href="index.php">Inicio </a></li>
    </ul>
    <hr>

    <form action="add.php" method="post">
        <div class="form-group">
            <label for="correo">Email</label>
            <input class="form-control" type="email" id="correo" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>

    </form>

</div>
</body>
</html>
