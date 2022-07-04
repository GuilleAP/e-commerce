<?php
    function detallProductes($id_producte, $conn) {
        try {
            $consulta = $conn->prepare("SELECT * FROM `producte` WHERE id = $id_producte");
            $consulta->execute();
            $productes = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        return $productes;
    }

?>