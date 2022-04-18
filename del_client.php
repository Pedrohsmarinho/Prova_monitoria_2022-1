<?php

require_once 'conect.php';

$id = $_GET['id'];

try {
  
    $smt = $pdo -> prepare("DELETE FROM clients WHERE id = ? ");
    $smt -> bindParam(1, $id);
    $smt -> execute();
  
   
    header('location: home.php');

  } catch(PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }

?>