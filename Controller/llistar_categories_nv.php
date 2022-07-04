<?php
  include_once __DIR__."/../Model/connectaBD.php";
  include_once __DIR__."/../Model/Categories.php";
  $connexio = connectaBD::getInstance();
  $conn = $connexio->conn();
  $categories = consultaCategories($conn);
  $connexio = null;
?>
