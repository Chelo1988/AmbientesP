<?php
include('p_index.php');
?>
 
<html>
   <head>
    <title>Crear una sesión en PHP</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
   </head>
   <meta charset="utf-8">
   <body>
     <h1>Creación de una sesión</h1>
     <form action="./index.php" method="POST">
       <table>
          <tr>
            <td><label>Nombre de usuario:</label></td>
            <td><input type="text" name="username" /></td>
          </tr>
       <tr>
         <td><label>Contraseña:</label></td>
         <td><input type="password" name="password" /></td>
       </tr>
       <table id="a">
        <tr >
        <td  colspan="2">
         <br>
         <input type="submit" value="Crear Sesion " /><br><br>
        </td>
      </tr>
       </table>
        </table>
     </form>
   </body>
</html>