<?php
include_once __DIR__.'/../Model/connectaBD.php';
include_once __DIR__.'/../Model/perfilUsuari.php';

$connexio = connectaBD::getInstance();
$conn = $connexio->conn();

$correu = $_SESSION['email_usuari'];
$dades = dadesUsuari($conn, $correu);

$imatgesAbsolutePath = 'C:/xampp/htdocs/practica_TDIW/MVC/imatges_usuaris/';


if (isset($_FILES['profile_image']) && !empty($_FILES['profile_image'])) {
    $tarjet_file = $imatgesAbsolutePath.basename($_FILES['profile_image']['name']);
    print_r($_FILES['profile_image']['tmp_name']);
    move_uploaded_file($_FILES['profile_image']['tmp_name'], $tarjet_file);
}


if(isset($_POST["submit"])) {
    if(!empty($_POST["Nom"])) {
        $nou_nom = $_POST["Nom"];
    } else {
        $nou_nom = $dades[1];
    }
    if(!empty($_POST["Correu"])) {
        $nou_correu = $_POST["Correu"];
    } else {
        $nou_correu = $dades[2];
    }

    if(!empty($_POST["Contrasenya"])) {
        $nou_pass = md5($_POST["Contrassenya"]);
    } else {
        $nou_pass = $dades[3];
    }

    if(!empty($_POST["Direccio"])) {
        $nou_direccio = $_POST["Direccio"];
    } else {
        $nou_direccio = $dades[4];
    }

    if(!empty($_POST["Poblacio"])) {
        $nou_poblacio = $_POST["Poblacio"];
    } else {
        $nou_poblacio = $dades[5];
    }

    if(!empty($_POST["CodiPostal"])) {
        $nou_codipostal = $_POST["CodiPostal"];
    } else {
        $nou_codipostal = $dades[6];
    }


    $dades_noves = array("1" => $nou_nom, "2" => $nou_correu, "3" => $nou_pass, "4" => $nou_direccio, "5" => $nou_poblacio, "6" => $nou_codipostal);

    $resposta = replaceUsuari($conn, $dades_noves);

    if($resposta) {
        echo'<script type="text/javascript">
            alert("Has canviat les dades correctament.");
            window.location.href="http://localhost/practica_TDIW/MVC/index.php?accio=perfil-usuari";
            </script>';
    } else {
        echo'<script type="text/javascript">
        alert("ERROR");
        window.location.href="http://localhost/practica_TDIW/MVC/index.php?accio=perfil-usuari";
        </script>';

    }

}

include __DIR__."/../Views/vista_perfil.php";

?>
