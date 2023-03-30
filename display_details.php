<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
    integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- pagination -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

    <title>Aplication. </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color : #00ff5573;">
        Applications
    </nav>

    <div class="container">
        <a href="registration.php" class = "btn btn-dark mb-3">SingUp</a>
    </div>

    <table id="datatableid" class="table table-hover text-center mb-3">
        <thead class="table-dark">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Mobile Number</th>
            <th scope="col">Email</th>
            <th scope="col">District</th>
            <th scope="col">PIN Code</th>
            <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "_dbconnect.php";
            $sql = "SELECT * FROM `users`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo $row['Id']?></td>
                    <td><?php echo $row['First_Name']?></td>
                    <td><?php echo $row['Last_Name']?></td>
                    <td><?php echo $row['Age']?></td>
                    <td><?php echo $row['Gender']?></td>
                    <td><?php echo $row['Mobile_Number']?></td>
                    <td><?php echo $row['Email_Address']?></td>
                    <td><?php echo $row['Distict']?></td>
                    <td><?php echo $row['Pin_Code']?></td>
                    <td>
                        <div class="container">
                            <button class = "btn btn-dark mb-3">Approve</button>
                            <button class = "btn btn-dark mb-3">Reject</button>
                        </div>
                    </td>
                </tr>
                <?php
            }
            ?>
            
        </tbody>
    </table>
        <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatableid').DataTable();
        });
    </script>
</body>
</html>