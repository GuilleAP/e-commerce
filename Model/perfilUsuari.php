<?php
if(!isset($_SESSION['nom_usuari'])) {
    session_start();
}
function dadesUsuari($conexio) {
    $correu = $_SESSION['email_usuari'];
    $consulta = $conexio->prepare("SELECT * FROM `usuaris` WHERE email = '$correu'");
    $consulta->execute();
    $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);

    return array("1" => $consulta[0]['nom'], "2" => $consulta[0]['email'], "3" => $consulta[0]['contrasenya'], "4" => $consulta[0]['direccio'], "5" => $consulta[0]['poblacio'], "6" => $consulta[0]['codipostal']);
}

function replaceUsuari($conexio, $dades) {
    $nom = "$dades[1]";
    $email = "$dades[2]";
    $pass = "$dades[3]";
    $direccio = "$dades[4]";
    $poblacio = "$dades[5]";
    $codiPostal = "$dades[6]";

    print_r($dades);

    $resultat = $conexio->prepare("UPDATE `usuaris` SET nom = '$nom', contrasenya = '$pass', direccio = '$direccio', poblacio = '$poblacio', codipostal = '$codiPostal' WHERE email = '$email'");
    $resultat->execute();
    return true;
}


?>