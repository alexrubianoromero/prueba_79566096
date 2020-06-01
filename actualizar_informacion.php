<?php
include('config.php');
include('utils.php');
$dbConn =  connect($db);

$input = $_REQUEST;
$postId = $input['id'];
$fields = getParams($input);
$sql = " UPDATE productos SET $fields WHERE id='$postId'";
$statement = $dbConn->prepare($sql);
bindAllValues($statement, $input);
$statement->execute();


?>