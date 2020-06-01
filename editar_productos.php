<?php
include('config.php');
include('utils.php');
$dbConn =  connect($db);

$sql = $dbConn->prepare("SELECT * FROM productos WHERE id = '".$_REQUEST['id']."' ");
$sql->execute();
$sql->setFetchMode(PDO::FETCH_ASSOC);
// header("HTTP/1.1 200 OK");
$result = $sql->fetchAll()  ;

?>

                         <input type="hidden" id="id" value="<?php echo $result[0]['id'] ?>">
                        <label for="codigo" >Codigo</label>
                        <input type="text" id="codigo" name="codigo" class="form-control" 
                        value="<?php echo $result[0]['codigo'] ?>">
                       
                        
                        <label for="descripcion" >Descripcion</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control"
                        value="<?php echo $result[0]['descripcion'] ?>">
                        
                        <label for="precio">Precio</label>
                        <input type="text" id="precio" name="precio" class="form-control"
                        value="<?php echo $result[0]['precio'] ?>">
                        <br>
                        <input type="submit" id="btn_actualizar" value="Actualizar" class="btn btn-secondary btn-block">
<script src="js/scripts.js"></script>
 <script src="js/app.js"></script>