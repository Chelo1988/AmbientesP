<html>
  <head>
     <title>Registro Web</title>
     <link rel="stylesheet" type="text/css" href="css/estilo.css">
  </head>
  <meta charset="utf-8">
  <body>
      <h2>Estos son los datos de sesión  </h2>
  
        <p>Tu nombre de usuario es : <?=$_SESSION['username'];?></p>
   

    <h1>Pagina Web de Registro</h1>

    <form action="funciones.php" enctype="multipart/form-data" method="POST" name="form1" id="form1">
    <table>
      <tr>
        <td>Nombre:</td>
        <td><input type="text" name="nombre" /></td>
      </tr>
      <tr>
        <td>Apellidos:</td>
        <td><input type="text" name="apellido1"/>&nbsp<input type="text" name="apellido2" /></td>
      </tr>
      <tr>
        <td>Genero:</td>
        <td>
        <select name="genero">
          <option>Hombre</option>
          <option>Mujer</option>
        </select>
      </td>
      </tr>
      <tr>
        <td>Email:</td>
        <td><input type="text" name="email" /></td>
      </tr>
      <tr>
        <td>Fecha de Nacimiento:</td>
        <td><input type="date" name="fecha" /></td>
      </tr>
      <tr>
        <td>Ciudad de Nacimiento:</td>
        <td>
        <select name="ciudades">
          <option>------</option>
          <option>Ambato</option>
          <option>Azogues</option>
          <option>Babahoyo</option>
          <option>Ciudad Esmeraldas</option>
          <option>Cuenca</option>
          <option>Francisco de Orellana</option>
          <option>Guaranda</option>
          <option>Guayaquil</option>
          <option>Ibarra</option>
          <option>Latacunga</option>
          <option>Loja</option>
          <option>Macas</option>
          <option>Machala</option>
          <option>Nueva Loja</option>
          <option>Portoviejo</option>
          <option>Puerto Baquerizo Moreno</option>
          <option>Puyo</option>
          <option>Quito</option>
          <option>Riobamba</option>
          <option>Santa Elena</option>
          <option>Santo Domingo</option>
          <option>Tena</option>
          <option>Tulcan</option>
          <option>Zamora</option>
        </select>
      </td>
      </tr>
      <tr>
        <td>Intereses:</td>
        <td>
          <input name="intereses[]" type="checkbox" value="Programacion" />Programacion <br>
          <input name="intereses[]" type="checkbox" value="Redes" />Redes <br>
          <input name="intereses[]" type="checkbox" value="Ensamblaje" />Ensamblaje <br>
          <input name="intereses[]" type="checkbox" value="SOA" />SOA <br>
          <input name="intereses[]" type="checkbox" value="BI" />BI <br>
          <input name="intereses[]" type="checkbox" value="Analisis de Texto" />Analisis de Texto <br>
          <input name="intereses[]" type="checkbox" value="Big Data" />Big Data <br>
          <input name="intereses[]" type="checkbox" value="Redes Sociales" />Redes Sociales <br>

        </td>
      </tr>
      <tr>
        <td>Biografia:</td>
        <td>
          <textarea name="biografia" rows="7" cols="40">...Tu Biografia aquí...</textarea>
          
        </td>
      </tr>
    </table>
<table id="a">
  <tr >
        <td  colspan="2">
         <br>
         <input type="submit" value="Enviar " id="enviar"/>&nbsp
         <input type="reset" value="Limpiar " id="limpiar"/><br><br>
        </td>
      </tr>
</table>

    <p align="center"><a href="./php/cerrar_sesion.php">Cerrar sesión</a></p>
</form> 
 </body>
</html>