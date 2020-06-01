<?php
include('config.php');
include('utils.php');

$dbConn =  connect($db); 
/**
 * Insercion de producto 
 */ 
try {
    $input = $_REQUEST;
    $sql = "INSERT INTO productos(codigo, descripcion, precio) VALUES ('" . $input['codigo'] . "','" . $input['descripcion'] . "','" . $input['precio'] . "')";
    $statement = $dbConn->prepare($sql);
    bindAllValues($statement, $input);
    $statement->execute();
    $postId = $dbConn->lastInsertId();
} catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

echo '<p>La informacion Se ha ingresado</p>';
