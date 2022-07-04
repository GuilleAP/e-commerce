<?php
  include_once __DIR__."/../Model/connectaBD.php";
  include_once __DIR__."/../Model/Productes.php";
  $connexio = connectaBD::getInstance();
  $conn = $connexio->conn();

  if(isset($_GET['q'])) {
    $id = $_GET['q'];
    $productes = consultaProductesId($conn, $id);
  } else {
    $productes = consultaProductes($conn);
  }
  $connexio = null;
  include_once __DIR__."/../Views/llistar_productes.php";
?>
