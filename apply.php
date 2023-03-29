<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Apply</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./apply.css">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <h1 class="text-center mx-5">Application Form</h1>
    <div class="signupForm">
    <form action="SEND ADDRESS" id="ft-form" method="POST" accept-charset="UTF-8" enctype="multipart/form-data" class="">
        <fieldset>
            <legend>Job</legend>
            <label>
                Application for *
                <select name="Application for" required>
                    <option>Job A</option>
                    <option>Job B</option>
                </select>
            </label>
        </fieldset>
        <fieldset>
            <legend>Personal data</legend>
            <div class="two-cols">
                <label>
                    First name *
                    <input type="text" name="fname" value="<?php echo $_SESSION['First_Name'];?>" required>
                </label>
                <label>
                    Last name *
                    <input type="text" name="lname" value="<?php echo $_SESSION['Last_Name'];?>" required>
                </label>
            </div>
            <div class="two-cols">
                <label>
                    ZIP Code
                    <input type="text" name="ZIP" value="<?php echo $_SESSION['Pin_Code'];?>">
                </label>
                <label>
                    City
                    <input type="text" name="City" value="<?php echo $_SESSION['Distict'];?>">
                </label>
            </div>
            <div class="two-cols">
                <label>
                    Phone *
                    <input type="tel" name="Phone" value="<?php echo $_SESSION['Mobile_Number'];?>" required>
                </label>
                <label>
                    Email address *
                    <input type="email" name="Email" value="<?php echo $_SESSION['Email_Address'];?>" required>
                </label>
            </div>
            <div class="two-cols">
                <label>
                    Password *
                <input type="text" name="password" required>
                </label>
            </div>
        </fieldset>
        <div class="btns">
            <input type="text" name="_gotcha" value="" style="display:none;">
            <input type="submit" value="Submit application">
        </div>
    </form>
    </div>
</body>

</html>