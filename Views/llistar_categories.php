
<body>
  <section class="contingut" id="layout_categories" style="grid-area: categories">
          <?php foreach ($categories as $categoria){ ?>
            <div class="categoria" onclick="mostrarCategoriaId(<?php echo $categoria['id'] ?>)">
              <img src="http://localhost/practica_TDIW/MVC/Images/<?php echo htmlspecialchars($categoria['imatge_categoria']); ?>", width="400", height="300">
              <h3><?php echo   htmlspecialchars($categoria['nom_categoria']) ?></h3>
          </div>
        <?php }; ?>
  </section>
</body>
