<?php include("body/head.php");?>
<?php include("body/menu.php");?>
<br><br><br>
<img src='img/rana.png' style='width:50px;' id='Animal'>
x= <input type='number' id='x'><br>
y= <input type='number'  id='y'>
<?php

?>

<script>
$("#Animal").draggable({
   cursor: 'move'

  
});

$("body").droppable({
      drop: function( event, ui ) {
        var coordenadas = $("#Animal").offset();   
        // console.log("x = " coordenadas.top + ", y = " + coordenadas.left);  
        // $('#x').addClass( "ui-state-highlight" );
        $('#x').val(coordenadas.top);
        $('#y').val(coordenadas.left);
        }
    });

    

</script>
<?php include("body/footer.php");?>
