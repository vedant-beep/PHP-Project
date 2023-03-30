<?php

$insert = false;

// Connect to the Database 


include("_dbconnect.php");

if (isset($_POST['submit1'])) {
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM admin where email='$email' and password ='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Admin Login successful";
        $insert = true;

    } else {
        echo "The record was not found successfully because -->" . mysqli_error($conn);
    }




}
?>