<?php
    include_once __DIR__.'/../Model/connectaBD.php';
    include_once __DIR__.'/../Model/iniciUsuari.php';

    if (isset($_POST) && isset($_POST['Correu']) && isset($_POST['Contrasenya'])) {

        $dades = array("1" => $_POST["Correu"],"2" => $_POST["Contrasenya"]);

        $connexio = connectaBD::getInstance();
        $conn = $connexio->conn();

        if($conn) {
            $inici = iniciarSesio($conn, $dades);
        }

        if($inici != null) {
            session_start();
            $_SESSION['nom_usuari'] = $inici[1];
            $_SESSION['email_usuari'] = $inici[2];
            $_SESSION['productes'] = array();

            echo'<script type="text/javascript">
            alert("Login Correcte");
            window.location.href="http://localhost/practica_TDIW/MVC/resource_portada.php";
            </script>';
        } else {
            include __DIR__."/../Views/vista_inici_sessio.php";
        }

    }
    else include __DIR__."/../Views/vista_inici_sessio.php";

?>
