<?php
    include_once __DIR__.'/../Model/connectaBD.php';
    include_once __DIR__.'/../Model/registre.php';

    if (isset($_POST) && isset($_POST['Nom']) && isset($_POST['Correu']) && isset($_POST['Contrasenya']) && isset($_POST['Direccio']) && isset($_POST['Poblacio']) && isset($_POST['CodiPostal'])) {

        $dades = array("1" => $_POST["Nom"],"2" => $_POST["Correu"],"3" => $_POST["Contrasenya"],"4" => $_POST["Direccio"],"5" => $_POST["Poblacio"],"6" => $_POST["CodiPostal"]);

        $connexio = connectaBD::getInstance();
        $conn = $connexio->conn();

        $email = $_POST['Correu'];
        $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

        $integer = $_POST['CodiPostal'];

        $isInteger = filter_var($integer, FILTER_VALIDATE_INT) !== false;

        if ($isEmail && !$isInteger){

          if($conn) {
              $pass = md5($_POST['Contrasenya']);
              $registre = registreUsuari($conn, $dades, $pass);
          }

          if($registre) {
              echo'<script type="text/javascript">
              alert("Usuari registrat correctament.");
              window.location.href="http://localhost/practica_TDIW/MVC/index.php?accio=registre";
              </script>';
          } else {
              echo'<script type="text/javascript">
              alert("Aquest USUARI ja existeix.");
              window.location.href="http://localhost/practica_TDIW/MVC/index.php?accio=registre";
              </script>';

          }
        } else {
            echo'<script type="text/javascript">
            alert("Email y/o contraseña no válido.");
            window.location.href="http://localhost/practica_TDIW/MVC/index.php?accio=registre";
            </script>';
        }
    }
    else include __DIR__."/../Views/vista_registre.php";

?>
