<body>
    <section id="layout_detall" style="grid-area: detall">
        <img src="http://localhost/practica_TDIW/MVC/Images/<?php echo $productes[0]['imatge_producte']; ?>", width ="400", height="300">
        <h3><?php echo $productes[0]['nom_producte']; ?></h3>
        <h4><?php echo $productes[0]['preu_producte']; ?>€</h4>
        <input type="number" name="Quantitat" id="quantitat" value="1" placeholder="Quantitat" min="1">
        <input type="submit" onclick=afegirCabas(<?php echo $productes[0]['id'] . "," . $productes[0]['preu_producte'] ?>) value="Afegir al cabàs">
    </section>
</body>