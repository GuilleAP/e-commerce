<!DOCTYPE html>

<html lang="ca">
  <head>
    <title>DOSTO - Categories</title>

   <meta charset="uft-8"/>
   <meta name="viewport" content="initial-scale1.0, width=device-width, user-scalable=yes"/>
   <link rel="stylesheet" type="text/css"  href="css/barra_menu.css "/>
   <link rel="stylesheet" type="text/css"  href="css/index.css "/>
  </head>
  <body>

    <header>
      <?php require __DIR__ . '/./Controller/llistar_categories_nv.php'; ?>
      <?php require __DIR__.'/controller/barra_menu.php'; ?>
    </header>

    <div class="container">
        <?php require __DIR__.'/controller/llistar_categories.php'; ?>
    </div>

  </body>
</html>
