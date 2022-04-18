<?php

require_once 'conect.php';

$id = $_GET['id'];

$smt = $pdo -> prepare("DELETE FROM services WHERE id = ? ");
$smt -> bindParam(1, $id);
$smt -> execute();

header('location: home.php');

?>