<?php

function mostrarLlistaComandes($conn) {

    try{
        //$consulta = $conn->prepare("SELECT * FROM `comanda` INNER JOIN `linea_comanda` ON `comanda`.`id` = `linea_comanda`.`comanda_id` AND `comanda`.`usuari_id`= '".$_SESSION['email_usuari']."'");
        $consulta = $conn->prepare("SELECT * FROM `comanda` WHERE `usuari_id`= '".$_SESSION['email_usuari']."'");
        $consulta->execute();
        $comanda = $consulta->fetchAll(PDO::FETCH_ASSOC);

        $i = 0;
        foreach ($comanda as $id_comanda) {
          $consulta = $conn->prepare("SELECT * FROM `linea_comanda` INNER JOIN `producte` ON `linea_comanda`.`producte_id` = `producte`.`id` AND `comanda_id`= ".$id_comanda['id']."");
          $consulta->execute();
          $linea = $consulta->fetchAll(PDO::FETCH_ASSOC);
          array_push($comanda[$i],$linea);
          $i += 1;
        }
      }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
      }
      return $comanda;
}

?>
