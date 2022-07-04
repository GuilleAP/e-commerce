<head>
    <link rel="stylesheet" type="text/css"  href="css/formulari_registre.css"/>
    <link rel="stylesheet" type="text/css"  href="css/barra_menu.css"/>
    <script src="/../js/registre.js"> </script>
</head>


<section class="contingut">
    <div class="container">

        <form action="http://localhost/practica_TDIW/MVC/Controller/perfil.php" method="POST" class="register_form" enctype="multipart/form-data">
            <h1>Dades de l'usuari</h1>

            <div class="form-control">
                <input id="registre_nom" type="text" name="Nom" value="" placeholder="<?php echo $dades[1]?>"/>
            </div>
            <br>

            <div class="form-control">
                <input id="registre_email" type="mail" name="Correu" value="" placeholder="<?php echo $dades[2]?>"/>
            </div>
            <br>

            <div class="form-control">
                <input id="registre_contrasenya" type="password" name="Contrasenya" value="" placeholder="*********"/>
            </div>
            <br>

            <div class="form-control">
                <input id="registre_direccio" type="text" name="Direccio" value="" placeholder="<?php echo $dades[4]?>"/>
            </div>
            <br>

            <div class="form-control">
                <input id="registre_poblacio" type="text" name="Poblacio" value="" placeholder="<?php echo $dades[5]?>" />
            </div>
            <br>

            <div class="form-control">
                <input id="registre_codipostal" type="text" name="CodiPostal" value="" placeholder="<?php echo $dades[6]?>" />
            </div>
            <br>

            <div class="form-control">
                <input type="file" name="profile_image" placeholder="Imatge"/>
            </div>
            <br>

            <input type="submit" name="submit" value="Actualitzar perfil">

        </form>
</section>
