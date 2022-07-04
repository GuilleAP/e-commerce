<?php

class Usuaris {
    function registreUsuari($dataUsuari) {
        $connectaBD = new connectaBD();
        $conn = $connectaBD->getConn();

        $resposta = false;

        $nom = $dataUsuari['nom'];
        $email = $dataUsuari['email'];
        $contrasenya = $dataUsuari['contrasenya'];
        $adreca = $dataUsuari['direccio'];
        $poblacio = $dataUsuari['poblacio'];
        $codipostal = $dataUsuari['codipostal'];

        $pass=password_hash($contrasenya, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO usuaris (nom, correu, contrasenya, adreca, poblacio, codipostal) VALUES (:nom, :correu, :contrasenya, :adreca, :poblacio, :codipostal)";
        
        $params = [
            'nom'=> $nom,
            'correu'=> $email,
            'contrasenya'=> $pass,
            'adreca'=> $adreca,
            'poblacio'=> $poblacio,
            'codipostal'=> $codipostal,

        ];

        $stmt->execute($params);

        if(!empty($stmt)){
            $resposta = 'registrat';
        }

        return $resposta;
    }
}
?>