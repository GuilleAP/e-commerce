<?php   
    
    if(isset($_SESSION['nom_usuari'])) {
        unset($_SESSION['nom_usuari']);
    }
  header('Location: index.php?accio=inici_sessio');
  exit;
?> 