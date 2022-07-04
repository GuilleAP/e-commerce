<body>
    <section>

        <?php foreach($comandes as $comanda){ ?>
            <h1>Comanda: </a><a><?php echo $comanda['data'] ?><br/></h1>
              <hr>
            <?php foreach($comanda[0] as $article){ ?>
                <a>Producte: </a><a><?php echo $article['nom_producte'] ?><br/></a>
                <a>Preu unitari: </a><a><?php echo $article['preu'] ?> 	&euro; <br/></a>
                <a>Quantitat: </a><a><?php echo  $article['contingut'] ?><br/></a>
              <hr>
            <?php }; ?>
            <h3>Import total: </a><a><?php echo  $comanda['preu_total'] ?> 	&euro; <br/></h3>
              <br/>
              <br/>
    <?php }; ?>
    </section>
</body>
