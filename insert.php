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
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $First_Name = $_POST["First_Name"];
    $Last_Name = $_POST["Last_Name"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $Mobile_Number = $_POST["Mobile_Number"];
    $Email_Address = $_POST["Email_Address"];
    $Distict = $_POST["Distict"];
    $Pin_Code = $_POST["Pin_Code"];
    $Password1 = $_POST["Password1"];


     //sql query to be executed
     $sql = "INSERT INTO users (First_Name, Last_Name, Age, Gender, Mobile_Number, Email_Address, Distict, Pin_Code, Password) VALUES ('$First_Name','$Last_Name','$Age','$Gender','$Mobile_Number','$Email_Address','$Distict','$Pin_Code','$Password1')";
     $result = mysqli_query($conn, $sql);

     if ($result) {
         echo "The record has been inserted successfully<br>";
        $insert = true;

     }
     else {
        echo"The record was not inserted successfully because -->".mysqli_error($conn);
     }
    }

?>