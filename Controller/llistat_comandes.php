<?php
    session_start();
    include_once __DIR__.'/../Model/connectaBD.php';
    include_once __DIR__.'/../Model/llistaComandes.php';

    $connexio = connectaBD::getInstance();
    $conn = $connexio->conn();

    print_r($_GET['comandes']);
    if(isset($_GET['comandes']) && isset($_SESSION['email_usuari'])) {
      $comandes = mostrarLlistaComandes($conn);
      include __DIR__."/../Views/vista_llista_comandes.php";
    }
?>
