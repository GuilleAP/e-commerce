<header id="logo_menu">
  <img id="logo" src="Images\DOSTO.png" width="20%" height="auto">
</header>

<div>
    <?php
    if (!isset($_SESSION["started"])){
        session_start();
        $_SESSION["started"] = true;
    } ?>
</div>

<?php if(!isset($_SESSION['nom_usuari'])) {?>

  <section>
        <ul>
          <li><a class="active" href="http://localhost/practica_TDIW/MVC/index.php?accio=default">Inici</a></li>

          <li class="dropdown">
            <a href="http://localhost/practica_TDIW/MVC/index.php?accio=llistar-categories" class="dropbtn">Categories</a>
            <div class="dropdown-content">
              <?php foreach ($categories as $categoria) { ?>
                  <a onclick="mostrarProductesCategoria(<?php echo $categoria['id'] ?>)"><?php  echo htmlspecialchars($categoria['nom_categoria']) ?></a>
              <?php } ?>
            </div>
          </li>

          <li><a class="active" href="http://localhost/practica_TDIW/MVC/index.php?accio=llistar-productes"> Productes</a> </li>

          <li class="dropdown">
            <a >Usuaris</a>
            <div class="dropdown-content">
              <a href="http://localhost/practica_TDIW/MVC/index.php?accio=registre">Registrar-se - Iniciar Sessió</a>
          </li>


        </ul>
  </section>
<?php } else { ?>
  <section>
        <ul>
          <li><a class="active" href="http://localhost/practica_TDIW/MVC/index.php?accio=default">Inici</a></li>

          <li class="dropdown">
            <a href="http://localhost/practica_TDIW/MVC/index.php?accio=llistar-categories" class="dropbtn">Categories</a>
            <div class="dropdown-content">
              <?php foreach ($categories as $categoria) { ?>
                  <a onclick="mostrarProductesCategoria(<?php echo $categoria['id'] ?>)"><?php  echo htmlspecialchars($categoria['nom_categoria']) ?></a>
              <?php } ?>
            </div>
          </li>

          <li><a class="active" href="http://localhost/practica_TDIW/MVC/index.php?accio=llistar-prductes"> Productes</a> </li>

          <ul class="jquery">
            <li>
            <a><?php echo $_SESSION['nom_usuari']; ?></a>
            <ul class="sub">
              <li><a href="http://localhost/practica_TDIW/MVC/index.php?accio=perfil-usuari">El meu compte</a></li>
              <li><div onclick="verLListaComandes()">Les meves compres</div></li>
              <li><a href="http://localhost/practica_TDIW/MVC/index.php?accio=logout">Tancar sessio</a></li>
            </ul>
            </li>
          </ul>

          <div class="carro-compra">
            <a href="http://localhost/practica_TDIW/MVC/index.php?accio=carro-actual"> <img src="Images/carro_compra.png"></a>
          </div>

        </ul>
  </section>
<?php } ?>
