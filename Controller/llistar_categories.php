<?php
  include_once __DIR__."/../Model/connectaBD.php";
  include_once __DIR__."/../Model/Categories.php";

  $connexio = connectaBD::getInstance();
  $conn = $connexio->conn();



  if(isset($_GET['q'])) {
    $id = $_GET['q'];
    $productes = consultaCategoriaId($id, $conn);
    include_once __DIR__."/../Views/llistar_productes.php";
  } else {
    $categories = consultaCategories($conn);
    include_once __DIR__."/../Views/llistar_categories.php";
  }

  $connexio = null;
  ?>
