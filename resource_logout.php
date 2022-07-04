<!DOCTYPE html>

<html lang="ca">

    <head>
        <title>DOSTO - Registre</title>

        <meta charset="uft-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=yes"/>
        <link rel="stylesheet" type="text/css"  href="css/index.css "/>
        <link rel="stylesheet" type="text/css"  href="css/barra_menu.css "/>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="js/registre.js"></script>

    </head>

    <body>
        <div class="container">
            <?php require __DIR__ .'/Controller/llistar_categories_nv.php'; ?>
            <?php require __DIR__.'/Controller/barra_menu.php'; ?>
            <?php require __DIR__ .'/Controller/logout.php'; ?>
        </div>
    </body>

</html>