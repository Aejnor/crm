<?php
/**
 * Created by PhpStorm.
 * User: Adolfo
 * Date: 10/10/2017
 * Time: 18:07
 */

include_once 'config.php';
include_once 'connectDB.php';

$id = $_GET['ID'];

$sql = "DELETE FROM cliente WHERE ID = :ID";

$result = $pdo->prepare($sql);

$result->execute([
    'ID' => $ID
]);

header('Location: list.php');
?>