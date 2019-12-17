<?php include("body/head.php");?>
<?php include("body/menu.php");?>

<h3 style='color:gray; font-family:Light;   '>Registro del usuario:</h3>
<section style='width:100%;' id='LoginRegistrate'>
<div><label for='CorreoUser1'>Tú Correo Electronico:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/mail.png' style='width:40px; height:40px;'></td>
    <td><input type='text' name='CorreoUser1' id='CorreoUser1'></td>
</tr>
</table>
</div>

<div><label for='CorreoUser2'>Confirma Tú Correo Electronico:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/mail2.png' style='width:40px; height:40px;'></td>    
    <td><input type='text' name='CorreoUser2' id='CorreoUser2'></td></tr></table>
</div>


<div><label for='Password1'>Contraseña (8char minimo):</label>
<table>
    <tr><td style='width:40px;'><img src='icon/password.png' style='width:40px; height:40px;'></td>    
    <td><input type='password' name='Password1' id='Password1'></td></tr></table>
</div>

<div><label for='Password2'>Repite tu Contraseña:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/password.png' style='width:40px; height:40px;'></td>    
    <td><input type='password' name='Password2' id='Password2'></td></tr></table>
</div>

<div  ><label>Nombre Completo:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/nombre.png' style='width:40px; height:40px;'></td>
    <td><input  style='width:100%' type='text' name='UserNombre' id='UserNombre'>
</td></tr></table>
</div>

<div><label>Fecha de Nacimiento:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/cumple.png' style='width:40px; height:40px;'></td>
    <td><input type='date' name='FNacimiento' id='FNacimiento' title='Te servira para promociones exclusivas el dia de tu cumpleaños'>
</td></tr></table>
</div>


<div  ><label>Telefono Movil:</label>
<table>
    <tr><td style='width:40px;'><img src='icon/movil.png' style='width:40px; height:40px;'></td>
    <td>
    <input   style='width:100%'  type='text' name='Telefonos' title=''>
</td></tr></table>
</div>

<div>
    <button name='BtnGuardar'  id='BtnGuardar' class='btn btn-Primary' style='width:100%; height:69px; font-size:16pt;'> Registrarse </button>
</div>
</section>
<script>
$("#BtnGuardar" ).click(function() {
  if (ChecarCorreo() == true & ChecarPassword()==true & ChecarNombre() ==true & ChecarNacimiento()==true){
    $.toast(":)");
  } else {
    $.toast("No pasa");
  }

});

function ChecarCorreo(){
    if ( $('#CorreoUser1').val() == $('#CorreoUser2').val() & $("#CorreoUser1").val().length > 5) {
        
            $('#CorreoUser1').css("background-color","white");
            $('#CorreoUser2').css("background-color","white");
            return true;
        
    } else {
        $.toast({
                heading: 'Error',
                text: 'El correo de confirmacion no es el mismo',
                showHideTransition: 'slide',
                icon: 'error'
            });
        $('#CorreoUser1').css("background-color","orange");
        $('#CorreoUser2').css("background-color","orange");
        return false;
    }
    
}


function ChecarPassword(){
    if ( $('#Password1').val() == $('#Password2').val() & $('#Password1').val().length>=8) {
        $('#Password1').css("background-color","white");
        $('#Password2').css("background-color","white");
        return true;
    } else {
        $.toast({
                heading: 'Error',
                text: 'La Contraseña de confirmacion no es la misma',
                showHideTransition: 'slide',
                icon: 'error'
            });
        $('#Password1').css("background-color","orange");
        $('#Password2').css("background-color","orange");
        return false;
    }
    
}



function ChecarNombre(){
    if ( $('#UserNombre').val().length > 0) {
        $('#UserNombre').css("background-color","white");        
        return true;
    } else {
        $.toast({
                heading: 'Error',
                text: 'Escriba su nombre',
                showHideTransition: 'slide',
                icon: 'error'
            });
        $('#UserNombre').css("background-color","orange");      
        return false;
    }
    
}



function ChecarNacimiento(){
    if ( $('#FNacimiento').val().length > 0) {
        $('#FNacimiento').css("background-color","white");        
        return true;
    } else {
        $.toast({
                heading: 'Error',
                text: 'Escriba su Fecha de nacimiento, Es importante para darle un mejor servicio',
                showHideTransition: 'slide',
                icon: 'error'
            });
        $('#FNacimiento').css("background-color","orange");      
        return false;
    }
    
}

</script>


<?php include("body/footer.php");?>
