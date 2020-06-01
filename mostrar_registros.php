
<?php
include('config.php');
include('utils.php');
$dbConn =  connect($db);

$sql = $dbConn->prepare("SELECT * FROM productos");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
// header("HTTP/1.1 200 OK");
$result = $sql->fetchAll()  ;

echo '<table  border="0" class="table table-striped">';
echo '<thead>';
echo '<tr>';
echo '<th>Codigo</th>';
echo '<th>Descripcion</th>';
echo '<th>Precio</th>';
echo '<th>Editar</th>';
echo '<th>Eliminar</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($result as $valor){
    echo '<tr>';
    echo '<td>'.$valor['codigo'].'</td>';
    echo '<td>'.$valor['descripcion'].'</td>';
    echo '<td>'.$valor['precio'].'</td>';
    echo '<td><button class="editar btn btn-secondary" id="editar" value="'.$valor['id'].'">Editar</button></td>';
    echo '<td><button class="eliminar btn btn-secondary" id="eliminar" value="'.$valor['id'].'">Eliminar</button></td>';
    echo '</tr>';
}
echo '<tbody>';
echo '</table>';

?>
 <script src="js/scripts.js"></script>
 <script src="js/app.js"></script>