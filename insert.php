<?php
$insert = false;

include('./_dbconnect.php');


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
        session_start();
        $_SESSION['First_Name'] = $First_Name;
        $_SESSION['Last_Name'] = $Last_Name;
        $_SESSION['Age'] = $Age;
        $_SESSION['Gender'] = $Gender;
        $_SESSION['Mobile_Number'] = $Mobile_Number;
        $_SESSION['Email_Address'] = $Email_Address;
        $_SESSION['Distict'] = $Distict;
        $_SESSION['Pin_Code'] = $Pin_Code;
        header('location: home.php?info=successfully_registered');
        $insert = true;
        

     }
     else {
        echo"The record was not inserted successfully because -->".mysqli_error($conn);
     }
    }

?>