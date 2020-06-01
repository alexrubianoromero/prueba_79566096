/**
 * Captura el evento del boton grabar para realizar el registro del producto 
 */
 $("#btn_grabar").click(function(){
    var data =  'codigo=' + $("#codigo").val();
    data += '&descripcion=' + $("#descripcion").val();
    data += '&precio=' + $("#precio").val();
    $.post('almacenar_informacion.php',data,function(a){
    $("#div_formu_ingreso").html(a);
    });	
    $("#page-top").load('./index.php');
 });

$(".editar").click(function(){
   var data =  'id=' + $(this).val();
   $.post('./editar_productos.php',data,function(a){
      $("#div_mostrar_productos").html(a);
      });
 });

 $("#btn_actualizar").click(function(){
   //  alert('sdffsdd');
   var data =  'codigo=' + $("#codigo").val();
   data += '&descripcion=' + $("#descripcion").val();
   data += '&precio=' + $("#precio").val();
   data += '&id=' + $("#id").val();
   $.post('./actualizar_informacion.php',data,function(a){
   $("#div_mostrar_productos").html(a);
   });	
   $.post('./mostrar_registros.php',data,function(a){
      $("#div_mostrar_productos").html(a);
      });
});
$(".eliminar").click(function(){
   var data =  'id=' + $(this).val();
   $.post('./eliminar_producto.php',data,function(a){
      $("#div_mostrar_productos").html(a);
      });
      $.post('./mostrar_registros.php',data,function(a){
         $("#div_mostrar_productos").html(a);
         });
 });




