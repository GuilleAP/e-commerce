<!DOCTYPE html>

<html lang="ca">

<head>
    <title>Llistat de productes-TDIW</title>

    <meta charset="uft-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=yes"/>
    <link rel="stylesheet" type="text/css"  href="css/index.css "/>
    <link rel="stylesheet" type="text/css"  href="css/barra_menu.css "/>

</head>

<body>


<div class="container">
    <?php require __DIR__ . '/./Controller/llistar_categories_nv.php'; ?>
    <?php require __DIR__.'/./Controller/barra_menu.php'; ?>
    <?php require __DIR__ . '/./Controller/llistar_productes.php'; ?>
</div>

</body>
</html>
