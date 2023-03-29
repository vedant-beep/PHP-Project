<?php



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

if (isset($_POST['submit2'])) {
    $jobId = $_POST["jobId"];
    $category = $_POST["category"];

    $sql = "UPDATE dsdo SET category='$category' where job_id='$jobId'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location:admin-home.php");
        exit();
        

    } else {
        echo "The record was not update successfully because -->" . mysqli_error($conn);
    }




}
?>