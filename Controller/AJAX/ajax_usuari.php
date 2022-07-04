<?php
    session_start();
    require_once __DIR__ . '/../../Model/connectaBD.php';
    require_once __DIR__.'/../../Model/usuaris.php';

    $action = isset($_POST['action']) ? $_POST['action'] : '';

    $dades_usuari = isset($_POST['dades_usuari']) ? $_POST['dades_usuari'] : '';

    $usuarisDB = new Usuaris();

    $resposta = '';

    if(!empty($dades_usuari['nom']) || !empty($dades_usuari['email']) || !empty($dades_usuari['contrasenya'])
    || !empty($dades_usuari['direccio']) || !empty($dades_usuari['poblacio']) || !empty($dades_usuari['codipostal'])) {
                
        $resposta = $usuarisDB->registrarUsuari($dades_usuari);

    }

    echo json_encode($resposta);

?>
