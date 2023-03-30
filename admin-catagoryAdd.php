<?php



// Connect to the Database 


include("_dbconnect.php");

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