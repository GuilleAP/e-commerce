<!DOCTYPE html>


<html lang="ca">

<head>
    <header>
       <title>DOSTO - supermercat</title>

        <meta charset="uft-8"/>
        <meta name="viewport" content="initial-scale1.0, width=device-width, user-scalable=yes"/>
        <link rel="stylesheet" type="text/css"  href="css/barra_menu.css "/>
        <link rel="stylesheet" type="text/css"  href="css/index.css "/>
        <link rel="stylesheet" type="text/css"  href="css/barra_inici.css "/>
        <script type="text/javascript" src="index.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="javascript/menu.js"></script>
    </header>
</head>

<body>
    <div class="container">
        <?php require __DIR__ . '/./Controller/llistar_categories_nv.php'; ?>
        <?php require __DIR__.'/./Controller/barra_menu.php'; ?>
        <?php require __DIR__.'/./Controller/portada.php'; ?>
        <?php //require __DIR__.'/Controller/peu_pagina.php'; ?>
    </div>
</body>
</html>
