<?php
session_start();
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Formulario</title>
 </head>
 <body>
  <table width="50%" align="center" border="0" cellspacing="0" cellpadding="0">
	<tr>
        <td>
        <fieldset>
	<legend><h1>INGRESA TU USUARIO Y CONTRASEŅA</h1></legend>
 
   <form action="datos.php" method="post">
    USUARIO<br/> 
    <input type="text" name="codigo"><p/>
    CONTRASEŅA<br/>
    <input type="password" name="contraseņa"><p/>
    <input type="submit" value="Enviar"/><br/>
   </form>
 </body>
</html>
