<?php 

session_start();

include "_dbconnect.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $email = validate($_POST['email']);

    $password = validate($_POST['password']);

    if (empty($email)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($password)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM `users` WHERE Email_Address='$email' AND Password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['Email_Address'] === $email && $row['Password'] === $password) {
            
                session_start();
                $_SESSION['Email_Address'] = $row['Email_Address'];

                $_SESSION['First_Name'] = $row['First_Name'];
                $_SESSION['Last_Name'] = $row['Last_Name'];
                $_SESSION['Pin_Code'] = $row['Pin_Code'];
                $_SESSION['Distict'] = $row['Distict'];
                $_SESSION['Mobile_Number'] = $row['Mobile_Number'];

                $_SESSION['id'] = $row['Id'];

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: home.php");

}
?>