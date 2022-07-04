<?php
//session_start();
require_once __DIR__ . '/../../models/connectaBD.php';
require_once __DIR__.'/../../models/productes.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

$id_categoria = isset($_GET['id_categoria']) ? $_GET['id_categoria'] : '';
$id_producte = isset($_GET['id_producte']) ? $_GET['id_producte'] : '';

$productesDB = new Productes();

$resposta = '';

switch ($action) {

    case 'getProductesFromCategoria':
        if(!empty($id_categoria)){
            $resposta = $productesDB->getProductesFromCategoria($id_categoria);
        }
        echo json_encode($resposta);
        break;
}
