<?php
// connect to database
include('./_dbconnect.php');

// get job details from form
if(isset($_POST['submit'])){
	$job_title = $_POST["job_title"];
$job_description = $_POST["job_description"];
$application_deadline = $_POST["application_deadline"];

// insert job details into database
$sql = "INSERT INTO dsdo (job_title, job_description, application_deadline) VALUES ('$job_title', '$job_description', '$application_deadline')";
if (mysqli_query($conn, $sql)) {
	header('location: ./dsdo.php?success=added_job');
} else {
	header('location: ./dsdo.php?erro=not_added_job');
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}

?>