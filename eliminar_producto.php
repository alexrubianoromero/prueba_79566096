<?php
include('config.php');
include('utils.php');
$dbConn =  connect($db);

$id = $_REQUEST['id'];
$statement = $dbConn->prepare("DELETE FROM productos where id='".$_REQUEST['id']."' ");
//$statement->bindValue(':id', $id);
$statement->execute();


?>
 <script src="js/scripts.js"></script>
 <script src="js/app.js"></script>