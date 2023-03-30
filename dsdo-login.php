<?php



// Connect to the Database 

include("_dbconnect.php");


if (isset($_POST['dsdoLogin'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM dsdologin where email='$email' and password ='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:dsdo.php");
            exit();


    } else {
        echo "The record was not found successfully because -->" . mysqli_error($conn);
    }




}
?>