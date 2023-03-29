<!DOCTYPE html>
<html>
<head>
	<title>Add Job</title>
	<link rel="stylesheet" type="text/css" href="./dsdo.css">
</head>
<body>
	<div class="container">
		<?php 
			if(isset($_GET['success'])){
				echo '<div class="success">Successfully added job</div>';
			}
		?>
		
		<h1>Add Job</h1>
		<form action="add_job.php" method="post">
			<label for="job_title">Job Title:</label>
			<input type="text" id="job_title" name="job_title" required>

			<label for="job_description">Job Description:</label>
			<textarea id="job_description" name="job_description" required></textarea>

			<label for="application_deadline">Application Deadline:</label>
			<input type="date" id="application_deadline" name="application_deadline" required>

			<input type="submit" value="Add Job" name="submit">
		</form>
	</div>
</body>
</html>