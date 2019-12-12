<?php include("body/head.php");?>
<?php include("body/menu.php");?>

<h1>Registro</h1>
<form style='width:100%;' id='LoginRegistrate'>
<div><label>Tú Correo Electronico:</label>
<table>
<tr><td><img src='icon/mail.png' style='width:40px; height:40px;'></td>
<td><input type='text' name='CorreoUser1'></td>
</tr>
</table>
</div>

<div><label>Confirma Tú Correo Electronico:</label>
<table>
<tr><td><img src='icon/mail2.png' style='width:40px; height:40px;'></td>
    
<td><input type='text' name='CorreoUser2'></td></tr></table></div>

<div  ><label>Nombre Completo:</label>
<table>
<tr><td><img src='icon/nombre.png' style='width:40px; height:40px;'></td>
<td><input  style='width:100%' type='text' name='UserNombre'>
</td></tr></table>
</div>

<div><label>Fecha de Nacimiento:</label>
<table>
<tr><td><img src='icon/cumple.png' style='width:40px; height:40px;'></td>
<td><input type='date' name='FNacimiento' title='Te servira para promociones exclusivas el dia de tu cumpleaños'>
</td></tr></table>
</div>

<div  ><label>Telefono(s):</label>
<table>
<tr><td><img src='icon/telefono.png' style='width:40px; height:40px;'></td>
<td>
<input   style='width:100%'  type='text' name='Telefonos' title=''>
</td></tr></table></div>

<div  ><label>Telefono Movil:</label>
<table>
<tr><td><img src='icon/movil.png' style='width:40px; height:40px;'></td>
<td>
<input   style='width:100%'  type='text' name='Telefonos' title=''>
</td></tr></table>
</div>

</form>

<?php include("body/footer.php");?>
