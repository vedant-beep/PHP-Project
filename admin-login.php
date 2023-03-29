<?php

$insert = false;

// Connect to the Database 


$servername = "localhost";
$username = "root";
$password = "";
$database = "job";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn) {
    die("Sorry we failed to connect: " . mysqli_connect_error());
}

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