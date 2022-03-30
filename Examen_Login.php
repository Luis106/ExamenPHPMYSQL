<html lang="es">
  <head>

  
  </head>
<body>

  <form action="Examen_Acci.php" method="post">
  <h3></h3>
  Nombre: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text"  minlength="2" name="Name" value = "" required ><br>
  Contraseña: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength="2" name="Password" value = ""  required  ><br>
  Semilla: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength="2" name="Key" value = "" required   ><br>
  <input type="hidden" name="Type" value = "Start" >
  <input type="submit" value = "Entrar">


  </form>

  
</body>
</html>
