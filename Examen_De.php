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


    $sql = "SELECT * FROM LV_productos where id =". $_POST['Id'] .";";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        ///echo "Id: ". $row["id"] ." - Name: " . $row["Name"] ."<br>";
        ?>
        <br>
        <label>------------------------------------------------------------------------------------- </label>
        <br>

        
        <h2>Detalles </h2>
        <form action="Examen_Acci.php" method="post">
        Nombre: <input pattern="[A-Za-zÄÖÜäöüß -9-ñÑÁáoÓúÚéÉíÍ]{2,}" type="text" minlength="2" name="Name" value = "<?= $row["Name"] ?> " required><br>
        Cantidad: <input minlength="2" type="Number" name="Stock" value="<?= $row["Stock"] ?>" required><br>
        Precio: <input type="Number" minlength="2" name="Price" value = "<?= $row["Price"] ?>"  required ><br>
        <input type="hidden" name="id" value = "<?= $row["id"] ?>" ><br>
        <input type="hidden" name="Type" value = "Update"><br>
        <input type="submit" value = "Actualizar">
        </form>

        <form action="Examen_Acci.php" method="post">
        <input type="hidden" name="id" value = "<?= $row["id"] ?>"><br>
        <input type="hidden" name="Type" value = "Delete"><br>
        <input type="submit" value = "Borrar">
        </form>

        



        <?php
    }
    
}
$conn->close();
?>