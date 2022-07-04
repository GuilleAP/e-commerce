<head>
    <link rel="stylesheet" type="text/css"  href="css/formulari_registre.css"/>
    <link rel="stylesheet" type="text/css"  href="css/barra_menu.css"/>
    <script src="/../js/registre.js"> </script>
</head>

<form id="formulari_sessio" action="http://localhost/practica_TDIW/MVC/Controller/inici_sessio.php" method="POST" class="registre_form">

    <h1>Iniciar Sessió</h1>

    <div class="form-control">
        <input id="registre_email" type="mail" name="Correu" value="" placeholder="Correu" required/>
    </div>
    <br>

    <div class="form-control">
        <input id="registre_contrasenya" type="password" name="Contrasenya" value="" placeholder="Contrasenya" required/>
    </div>
     <br>

     <input type="submit" name="inici_sessio" value="Iniciar Sessió">

</form>