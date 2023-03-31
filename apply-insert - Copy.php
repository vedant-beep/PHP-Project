<?php
$insert = false;

include('./_dbconnect.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $job_id = $_POST["job_id"];
    if(isset($_GET['id'])){
        $id=$_GET['id'];
    }


     //sql query to be executed
     $sql = "INSERT INTO apply (user_id, job_id, status) VALUES ('$id','$job_id', 'pending')";
     $result = mysqli_query($conn, $sql);

     if ($result) {
        header('location: home.php?info=successfully_applied');
        $insert = true;
        

     }
     else {
        echo"The record was not inserted successfully because -->".mysqli_error($conn);
     }
    }

?>