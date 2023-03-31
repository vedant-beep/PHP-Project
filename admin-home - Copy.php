<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">

    <title>Admin Home</title>
</head>

<body>
    <h2 class="text-center"> Add Job category</h2>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "job";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM dsdo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row?>
        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">job_id</th>
                    <th scope="col">job_title</th>
                    <th scope="col">job_description</th>
                    <th scope="col">application_deadline</th>
                    <th scope="col">category</th>
                </tr>
            </thead>

            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                    <tbody>
                        <tr>
                            <td scope="col">
                                <?php echo $row["job_id"]; ?>
                            </td>
                            <td scope="col">
                                <?php echo $row["job_title"]; ?>
                            </td>
                            <td scope="col">
                                <?php echo $row["job_description"]; ?>
                            </td>
                            <td scope="col">
                                <?php echo $row["application_deadline"]; ?>
                            </td>
                            <td scope="col">
                                <?php echo $row["category"]; ?>
                            </td>
                        </tr>
                    </tbody>

                    <?php
            }

            ?>
            </table>
            <?php

    } else {
        echo "0 results";
    }
    $conn->close();
    ?>


        <div class="container-lg">
            <form action="admin-catagoryAdd.php" method="post" class="catagoryAdd">
                <div class="mb-3">
                    <label for="jobId" class="form-label">Job Id</label>
                    <input type="text" name="jobId" class="form-control" id="inputJobId" Required>
                </div>
                <label for="catagory" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Select category</option>
                    <option value="Class 1">Class 1</option>
                    <option value="Class 2">Class 2</option>
                    <option value="class 3">Class 3</option>

                </select>
                <br>
                <button type="submit" class="btn btn-primary" name="submit2">Add catagory</button>

            </form>
        </div>
</body>

</html>