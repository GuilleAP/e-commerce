<?php
  function consultaProductes($conn){
    try{
      $consulta = $conn->prepare("SELECT * FROM `producte`");
      $consulta->execute();
      $producte = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    return $producte;
  }

  function consultaProductesId($conn, $id) {
    try{
      $consulta = $conn->prepare("SELECT * FROM `producte` WHERE categoria_id = $id");
      $consulta->execute();
      $producte = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    return $producte;
  }
 ?>
