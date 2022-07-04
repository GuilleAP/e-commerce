<body>
  <section class="contingut">
  <?php
  //print_r($_SESSION['productes']);
  //print_r($cabas);
    $total = 0.0;
    foreach($cabas as $article){ ?>
        <div>
          <?php $suma = $article['preu_producte'] * $article['quantitat'];
                $total += $suma;?>
          <h3><?php echo $article['nom_producte']; ?> | Quantitat: <?php echo $article['quantitat']; ?> | Preu: <?php echo $article['preu_producte']; ?> | Suma: <?php echo $suma; ?></h3>
      </div>
    <?php }; ?>
    <h3>Preu total: <?php echo $total; ?></h3>
    <input type="submit" onclick=borrarCabas() value="Borrar al cabàs">
    <input type="submit" onclick=comprarCabas() value="Comprar">
  </section>
</body>
