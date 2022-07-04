<?php
    function registreUsuari($conexio, $dades, $pass) {

        $nom = "$dades[1]";
        $email = "$dades[2]";
        $direccio = "$dades[4]";
        $poblacio = "$dades[5]";
        $codiPostal = "$dades[6]";

        $consulta = $conexio->prepare("SELECT * FROM `usuaris` WHERE email = '$email'");
        $consulta->execute();
        
        if($consulta->rowCount() > 0) {
            return false;
        } else {
            $resultat = $conexio->prepare("INSERT INTO `usuaris` (nom, email, contrasenya, direccio, poblacio, codipostal) VALUES ( :nom, :email, :pass, :direccio, :poblacio, :codiPostal)");
            $resultat->execute([":nom" => $nom, ":email" => $email, ":pass" => $pass, ":direccio" => $direccio, ":poblacio" => $poblacio, ":codiPostal" => $codiPostal]);
        
            return true;
        }
        
    }

?>