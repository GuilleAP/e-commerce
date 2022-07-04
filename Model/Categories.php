<?php
  function consultaCategories($conn){
    try{
      $consulta = $conn->prepare("SELECT * FROM `categoria`");
      $consulta->execute();
      $categories = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    return $categories;
  }

  function consultaCategoriaId($id_categoria, $conn){
    try{
      $consulta = $conn->prepare("SELECT * FROM `producte` WHERE categoria_id = $id_categoria");
      $consulta->execute();
      $producte = $consulta->fetchAll(PDO::FETCH_ASSOC);

    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    return $producte;
  }
 ?>
 
