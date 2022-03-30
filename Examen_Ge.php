<?php

$servername = "developeros.com.mx";
$username = "develop7_ulsa_a";
$password = "r00tUls@";
$dbname = "develop7_ulsa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


    $sql = "SELECT * FROM LV_productos where user = 0;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

    ?> <h2>Usuarios Registrados </h2><?php
    while($row = $result->fetch_assoc()) {
        ///echo "Id: ". $row["id"] ." - Name: " . $row["Name"] ."<br>";
        ?>
        <br>
        <label>------------------------------------------------------------------------------------- </label>
        <br>

        <form action="Examen_De.php" method="post">

        <h4>Id: <?= $row["id"] ?></h4>
        <h4>Nombre: <?= $row["Name"] ?></h4>

        <input type="hidden" name="Id"  value = <?= $row["id"] ?> >
        <input type="submit" value = "Detalles">

        </form>

        



        <?php
    }
    
}
$conn->close();
?>

<h2>Crear Producto </h2>
<form action="Examen_Acci.php" method="post">
Nombre: <input  pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength="2" name="Name" required><br>
Precio: <input minlength="2" type="Number" name="Price" required><br>
Cantidad: <input type="Number" minlength="2" name="Stock" value = ""  required ><br>
<input type="hidden" name="Type" value = "InsertPro"><br>
<input type="submit">
</form>


<h2>Crear Usuario </h2>
<form action="Examen_Acci.php" method="post">
Nombre: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength = "2" name="Name" required><br>
Contraseña: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" minlength = "2" type="text" name="Password" required><br>
Semilla: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength = "2" name="Key" value = ""   required ><br>
<input type="hidden" name="Type" value = "InsertUser"><br>
<input type="submit">
</form>




<?php


    ?>