<?php
    include "_dbconnect.php";
    if(isset($_POST['approve'])){
        $id = $_POST['app_id'];
        $sql = "UPDATE apply SET status='approved' WHERE application_id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location: display_details.php?info=Approved_the_status');
        }
        else{
            header('location: display_details.php?info=Something_went_wrong');
        }
    }
    if(isset($_POST['reject'])){
        $id = $_POST['app_id'];
        $sql = "UPDATE apply SET status='rejected' WHERE application_id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header('location: display_details.php?info=Rejected_the_status');
        }
        else{
            header('location: display_details.php?info=Something_went_wrong');
        }
    }
?>