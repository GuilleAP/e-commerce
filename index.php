<!DOCTYPE html>

<header>
       <title>DOSTO - supermercat</title>

        <meta charset="uft-8"/>
        <meta name="viewport" content="initial-scale1.0, width=device-width, user-scalable=yes"/>
        <link rel="stylesheet" type="text/css"  href="/css/barra_menu.css"/>
        <link rel="stylesheet" type="text/css"  href="/css/index.css"/>
        <link rel="stylesheet" type="text/css"  href="/css/formulari_registre.css"/>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript" src="js/funcions.js"></script>
</header>

<?php

if(isset($_GET['accio'])){
  $accio = $_GET['accio'];
} else {
    $accio = "";
}


switch($accio) {
    case 'llistar-categories':
        include __DIR__.'/resource_llistar_categories.php';
        break;

    case 'llistar-productes':
        include __DIR__.'/resource_llistar_productes.php';
        break;

    case 'detall-producte':
        include __DIR__.'/resource_detall_producte.php';
        break;

    case 'registre':
        include __DIR__.'/resource_registre.php';
        break;

    case 'iniciar-sessio':
        include __DIR__.'/resource_inici_sessio.php';
        break;

    case 'logout':
        include __DIR__.'/resource_logout.php';
        break;

    case 'registre-completat':
        include __DIR__.'/resource_usuari_registrat.php';
        break;

    case 'detall-cesta':
        include __DIR__.'/resource_detall_cesta.php';
        break;

    case 'carro-actual':
        include __DIR__.'/resource_carro.php';
        break;

    case 'perfil-usuari':
        include __DIR__.'/resource_perfil.php';
        break;

    case 'llistat-comandes':
        include __DIR__.'/resource_llistat_comandes.php';
        break;

    case 'validation':
        include __DIR__.'/resource_llistat_comandes.php';
        break;

    default:
        include __DIR__.'/resource_portada.php';
        break;
}
?>
