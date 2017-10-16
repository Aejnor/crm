<?php

    include_once 'connectDB.php';
    include_once 'config.php';

    if ( !empty($_POST) ) {

        // Recibo los 3 datos del formulario

        $email = $_POST['email'];
        $password =$_POST['password'];
        $password_conf = $_POST['password_conf'];

        if ("password" === "password_conf") {


            $sql = "INSERT INTO clientes (email, password) VALUES (:email, :password)";

            $result = $pdo->prepare($sql);

            $result->execute([
                'email' => $email,
                'password' => $password,
            ]);
            header('Location: index.php');
        }else{
            echo '<script language="javascript">';
            echo 'alert("")';
            echo '</script>';
        }
    }
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
            <input class="form-control" type="email" id="correo" name="email" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_conf">Re-Type Password</label>
            <input class="form-control" type="password" id="password_conf" name="password_conf" required>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Guardar">
        </div>

    </form>

</div>
</body>
</html>
