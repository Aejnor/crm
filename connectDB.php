<?php
/**
 * Created by PhpStorm.
 * User: Adolfo
 * Date: 09/10/2017
 * Time: 16:50
 */

    include_once 'config.php';

    try{
        $pdo = new PDO("mysql:host=$server;dbname=$database", $user, $password);
    }catch (PDOException $e){
        die("No se pudo conectar a la base de datos");
    }

?>