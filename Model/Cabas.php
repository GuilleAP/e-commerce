<?php
  function actualitzarCabas($conn, $producte, $quantitat, $usuari, $preu_producte){
    $productes = array();
    array_push($productes,$producte);
    array_push($productes,$quantitat);
    array_push($_SESSION['productes'],$productes);

    /*try{
      $consulta = $conn->prepare("INSERT INTO `carro_compra` (`email_usuari`,`id_producte`,`quantitat`, `preu`) VALUES (:email_usuari, :id_producte, :quantitat, :preu)");
      $consulta->execute([":email_usuari" => $usuari, ":id_producte" => $producte, ":quantitat" => $quantitat, ":preu" => $preu_producte]);
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }*/
  }

  function consultaCabas($conn, $usuari){
    $ids = "-1";
    foreach ($_SESSION['productes'] as $producte) {
      $ids = $ids.",".$producte[0];
    }



    try{
      //$consulta = $conn->prepare("SELECT * FROM `carro_compra` INNER JOIN `producte` ON carro_compra.id_producte = producte.id WHERE carro_compra.email_usuari = '$usuari'");
      $consulta = $conn->prepare("SELECT * FROM `producte` WHERE `id` in ($ids)");
      $consulta->execute();
      $items = $consulta->fetchAll(PDO::FETCH_ASSOC);

      /*echo '<script>';
      echo 'console.log("'.$items.'")';
      echo '</script>';*/
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    $resultats = array();
    foreach ($items as $item) {
      foreach ($_SESSION['productes'] as $producte) {
        if($producte[0]==$item['id']){
          $item['quantitat']=$producte[1];
          array_push($resultats, $item);
        }
      }
    }
    return $resultats;
  }

  function borrarCabas(){
    $_SESSION['productes'] = array();

    /*try{
      $consulta = $conn->prepare("DELETE FROM `carro_compra` WHERE `email_usuari` = '$usuari'");
      $consulta->execute();
      $items = $consulta->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
    return $items;*/
  }

  function comprarCabas($conn, $usuari) {
    try{
      $preu_total = 0;
      $cabas = consultaCabas($conn, $usuari);
      $data = date('Y-m-d H:i:s');

      $last_ids= array();

      $consulta = $conn->prepare("INSERT INTO `comanda` (`data`,`usuari_id`)  VALUES (:data, :usuari_id)");
      $consulta->execute([":data" => $data , ":usuari_id" => $usuari]);

      $id_comanda = $conn->lastInsertId();

      foreach ($_SESSION['productes'] as $article) {
        $consulta = $conn->prepare("SELECT `preu_producte` FROM `producte` WHERE `id` = $article[0]");
        $consulta->execute();
        $preu = $consulta->fetchAll(PDO::FETCH_ASSOC);



        $preu_total += $preu[0]['preu_producte'] * $article[1];


        $consulta = $conn->prepare("INSERT INTO `linea_comanda` (`producte_id`,`contingut`, `preu`, `comanda_id`)  VALUES (:producte_id, :contingut, :preu, :comanda_id)");
        $consulta->execute([":producte_id" => $article[0] , ":contingut" => $article[1], ":preu" => $preu[0]['preu_producte'], ":comanda_id" => $id_comanda]);

        array_push($last_ids, $conn->lastInsertId());

      }

      $consulta = $conn->prepare("UPDATE `comanda` SET `preu_total` = $preu_total WHERE `id` = $id_comanda");
      $consulta->execute();

      //$comanda_id = null;
      /*foreach ($last_ids as $last_id) {
        //if($comanda_id==null){
          $consulta = $conn->prepare("INSERT INTO `comanda` (`preu_total`,`data`,`usuari_id`, `id_linea`)  VALUES (:preu_total, :data, :usuari_id, :id_linea)");
          $consulta->execute([":preu_total" => $preu_total, ":data" => $data , ":usuari_id" => $usuari, ":id_linea" => $last_id]);
        //} else {
          //$consulta = $conn->prepare("INSERT INTO `comanda` (`id`, `preu_total`,`data`,`usuari_id`, `id_linea`)  VALUES (:id, :preu_total, :data, :usuari_id, :id_linea)");
          //$consulta->execute([":id" => $comanda_id, ":preu_total" => $preu_total, ":data" => $data , ":usuari_id" => $usuari, ":id_linea" => $last_id]);
        //}

        //$comanda_id = $conn->lastInsertId();



      }*/

      borrarCabas();
    }catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
  }
 ?>
