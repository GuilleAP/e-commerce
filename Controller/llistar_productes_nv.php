<?php
  include_once __DIR__."/../Model/connectaBD.php";
  include_once __DIR__."/../Model/Productes.php";
  $connexio = connectaBD::getInstance();
  $conn = $connexio->conn();
  $productes = consultaProductes($conn);
  $connexio = null;
  ?>
