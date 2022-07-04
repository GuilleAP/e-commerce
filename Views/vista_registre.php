
<head>
    <link rel="stylesheet" type="text/css"  href="css/formulari_registre.css"/>
    <link rel="stylesheet" type="text/css"  href="css/barra_menu.css"/>
    <script src="/../js/registre.js"> </script>
</head>

<section class="contingut">
    <form  id="formulari_registre" action="http://localhost/practica_TDIW/MVC/Controller/registre.php" method="POST" class="registre_form">

        <h1>Registra't!</h1>

        <div class="form-control">
            <input id="registre_nom" type="text" name="Nom" value="" placeholder="Usuari" required/>
        </div>
        <br>

        <div class="form-control">
            <input id="registre_email" type="email" name="Correu" value="" placeholder="Correu" minlength="8" required/>
        </div>
        <br>

        <div class="form-control">
            <input id="registre_contrasenya" type="password" name="Contrasenya" value="" placeholder="Contrasenya" required/>
        </div>
        <br>

        <div class="form-control">
            <input id="registre_direccio" type="text" name="Direccio" value="" placeholder="Direcció" maxlength="30" required/>
        </div>
        <br>

        <div class="form-control">
            <input id="registre_poblacio" type="text" name="Poblacio" value="" placeholder="Població" maxlength="30" required/>
        </div>
        <br>

        <div class="form-control">
            <input id="registre_codipostal" type="text" name="CodiPostal" value="" placeholder="Codi Postal" pattern="[0-9]{5}" max="5" required/>
        </div>
        <br>

        <input type="submit" name="submit" value="Registrar-se">

    </form>

    <a href="http://localhost/practica_TDIW/MVC/index.php?accio=iniciar-sessio">Ja tens Compte? Inicia Sessió</a>
</section>
