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


if (isset($_POST["Type"])){

    echo "Existe <br>";

    if ($_POST["Type"] == "Start" ){

        $sql = "CALL LV_ExValidar('". $_POST["Name"] ."' , '". $_POST["Password"] ."', '".$_POST["Key"] ."');";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            header("Location: Examen_Ge.php");
          $conn->close();

        }else{
            header("Location: Examen_Login.php");
        }

    }else if ($_POST["Type"] == "InsertUser" ){


        echo "Insertar";


        $sql = "call develop7_ulsa.LV_ExCrearUs('". $_POST["Name"] ."', '". $_POST["Password"] ."', '". $_POST["Key"] ."');";
        
    
        if (mysqli_query($conn, $sql)) {
          echo "Record created successfully";
        } else {
          echo "Error creating record: " . mysqli_error($conn);
        }
        
        mysqli_close($conn);
        header("Location: Examen_Ge.php");


    }else if ($_POST["Type"] == "Delete"){
        $sql = "call develop7_ulsa.LV_ExBorrar( ". $_POST["id"] .");";

        if (mysqli_query($conn, $sql)) {
          echo "Record deleted successfully";
        } else {
          echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
        header("Location: Examen_Ge.php");




    }else if ($_POST["Type"] == "Update"){

        $sql = "call develop7_ulsa.LV_ExActualizar( ". $_POST["id"] .", '". $_POST["Name"] ."', ". $_POST["Price"] .", ". $_POST["Stock"] .");";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    header("Location: Examen_Ge.php");

    }
    else if ($_POST["Type"] == "InsertPro"){

        $sql = "call develop7_ulsa.LV_ExCrearPro('". $_POST["Name"] ."', ". $_POST["Price"] .", ". $_POST["Stock"] .");";

    if (mysqli_query($conn, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
    header("Location: Examen_Ge.php");


    }

}


?>