<?php
    include_once __DIR__."/../Model/connectaBD.php";
    include_once __DIR__."/../Model/Cabas.php";

      if(!isset($_SESSION['nom_usuari'])) {
        session_start();
      }

    $connexio = connectaBD::getInstance();
    $conn = $connexio->conn();
    if(isset($_GET["id"]) && isset($_GET["quantitat"]) && isset($_SESSION["email_usuari"]) && isset($_GET["preu_producte"])){

        $producte = $_GET["id"];
        $quantitat = $_GET["quantitat"];
        $usuari = $_SESSION["email_usuari"];
        $preu_producte = $_GET["preu_producte"];
        actualitzarCabas($conn, $producte, $quantitat, $usuari, $preu_producte);
        header("Location: http://localhost/practica_TDIW/MVC");

    } elseif (isset($_GET["borrar"]) && isset($_SESSION["email_usuari"])) {
        $usuari = $_SESSION["email_usuari"];
        borrarCabas();
        header("Location: http://localhost/practica_TDIW/MVC");
    } elseif (isset($_GET["comprar"]) && isset($_SESSION["email_usuari"])) {
      $usuari = $_SESSION["email_usuari"];
      comprarCabas($conn, $usuari);
      include_once __DIR__."/../Views/confirmar_compra.php";
      //header("Location: http://localhost/practica_TDIW/MVC");
    } else {
      $cabas = consultaCabas($conn, $_SESSION["email_usuari"]);
      include_once __DIR__."/../Views/llistar_cabas.php";


    }
    $connexio = null;

?>
