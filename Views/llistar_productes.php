<body>
  <section class="contingut" id="layout_productes" style="grid-area: producte">
  <?php foreach($productes as $producte){ ?>
        <div class="producte" onclick="mostrarProducteDetall(<?php echo $producte['id'] ?>)">
          <img src="http://localhost/practica_TDIW/MVC/Images/<?php echo $producte['imatge_producte']; ?>", width ="400", height="300">
          <h3><?php echo $producte['nom_producte']; ?></h3>
          <h4><?php echo $producte['preu_producte']; ?>€</h4>
      </div>
    <?php }; ?>
  </section>
</body>


