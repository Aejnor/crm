<?php

    include_once 'connectDB.php';
    include_once 'config.php';

    $queryResult = $pdo->query("SELECT * from clientes");

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

        <li><a class="btn btn-primary" href="index.php">Inicio </a></li>

        <h1>Listado de cliente</h1>

        <table class="table">

            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>

            </tr>
            <?php
            while($row = $queryResult->fetch(PDO::FETCH_ASSOC) ):?>
                <tr>
                    <td><?=$row['ID']?></td>
                    <td><?=$row['email']?></td>
                    <td><?php echo $row['password']?></td>
                    <td><a href="delete.php?id=<?=row['ID']?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
            <?php  endwhile; ?>
        </table>
    </div>
</body>
</html>
