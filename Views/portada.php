<body>
    <section class="contingut">
        <?php foreach($categories as $categoria){ ?>
            <h2 id="categoria_portada"> <?php echo htmlspecialchars($categoria['nom_categoria']) ?> </h2>
            <hr>
              <section id="layout_productes" style="grid-area: producte">
              <?php foreach($productes as $producte){ ?>
                <?php if($producte['categoria_id']==$categoria['id']) { ?>
                    <div class="producte" onclick="mostrarProducteDetall(<?php echo $producte['id'] ?>)">
                      <img src="Images/<?php echo $producte['imatge_producte'] ?>", width ="400", height="300">
                      <h3><?php echo $producte['nom_producte']; ?></h3>
                      <h4><?php echo $producte['preu_producte']; ?>€</h4>

                  </div>
                <?php } ?>
              <?php }; ?>
              </section>
        <?php }; ?>
    </section>
</body>
