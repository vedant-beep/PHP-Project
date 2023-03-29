<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="signupForm">
    <form class="inputForm" action="/akshay/PHP-PROJECT/insert.php" method="post" >
        <div class="form-row">

            <div class="col-md-4 mb-3">
                <label for="First_Name">First name</label>
                <input type="text" class="form-control is-valid" id="First_Name" name="First_Name"
                    placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>


            <div class="col-md-4 mb-3">
                <label for="Last_Name">Last name</label>
                <input type="text" class="form-control is-valid" id="Last_Name" name="Last_Name"
                    placeholder="Last name" value="Otto" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 mb-8">
                <label for="Age">Age</label>
                <input type="int" class="form-control is-valid" id="Age" name="Age"
                    placeholder="Age" required>
                    <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <fieldset class="form-group">
                <div class="row">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="gridRadios1" value="male"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="gridRadios2"
                                value="female">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="col-md-4 mb-8">
                <label for="Mobile_Number">Mobile_Number</label>
                <input type="int" class="form-control is-valid" id="Mobile_Number" name="Mobile_Number"
                    placeholder="Number" required>
                    <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-4 mb-8">
                <label for="Email_Address">Email_Address</label>
                <input type="email" class="form-control is-valid" id="Email_Address" name="Email_Address"
                    placeholder="Email" required>
                    <div class="valid-feedback">
                    Looks good!
                </div>
            </div>


            



            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="Distict">District</label>
                    <input type="text" class="form-control is-invalid" id="Distict" name="Distict"
                        placeholder="District" required>
                    <div class="invalid-feedback">
                        Please provide a valid city.
                    </div>
                </div>

                <div class="col-md-3 mb-3">
                    <label for="Pin_Code">Pin_Code</label>
                    <input type="text" class="form-control is-invalid" id="Pin_Code" name="Pin_Code"
                        placeholder="Pin_Code" required>
                    <div class="invalid-feedback">
                        Please provide a valid zip.
                    </div>
                </div>

                <div>
                    <label for="Password1" class="form-label">Password</label>
                    <input type="password" id="Password1" class="form-control" aria-labelledby="passwordHelpBlock" name="Password1">
                </div>

            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" required>
                    <label class="form-check-label" for="invalidCheck3">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    </div>
</body>

</html>