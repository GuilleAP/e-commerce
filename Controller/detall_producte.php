<?php
  include_once __DIR__."/../Model/connectaBD.php";
  include_once __DIR__."/../Model/DetallProducte.php";

  if(isset($_GET['q'])) {
    $connexio = connectaBD::getInstance();
    $conn = $connexio->conn();
    
    $producte = $_GET['q'];
    $productes = detallProductes($producte, $conn);
    include_once __DIR__."/../Views/detall_producte.php";
    $connexio = null;
  }

  ?>