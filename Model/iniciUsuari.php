<?php

function iniciarSesio($conexio, $dades) {
    $email = "$dades[1]";


    $consulta = $conexio->prepare("SELECT * FROM `usuaris` WHERE email = '$email'");
    $consulta->execute();

    if($consulta->rowCount() > 0) {
        $pass = md5($dades[2]);
        $consulta = $consulta->fetchAll(PDO::FETCH_ASSOC);

        if($pass == $consulta[0]['contrasenya']) {
            return array("1" => $consulta[0]['nom'], "2" => $consulta[0]['email'], "3" => $consulta[0]['direccio'], "4" => $consulta[0]['poblacio'], "5" => $consulta[0]['codipostal']);
        } else {
            return null;
        }
    } else {
        return null;
    }
}

?>
