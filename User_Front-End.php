<!doctype html>
<html lang="en">

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
    <form class="inputForm">
        <div class="form-row">

            <div class="col-md-4 mb-3">
                <label for="validationServer01">First name</label>
                <input type="text" class="form-control" id="validationServer01" name="validationServer01"
                    placeholder="First name" required>
            </div>


            <div class="col-md-4 mb-3">
                <label for="validationServer02">Last name</label>
                <input type="text" class="form-control" id="validationServer02" name="validationServer02"
                    placeholder="Last name" required>
            </div>

            <div class="col-md-4 mb-8">
                <label for="validationServer06">Age</label>
                <input type="int" class="form-control" id="validationServer06" name="validationServer06"
                    placeholder="Age" required>
            </div>

            <fieldset class="form-group">
                <div class="row my-5">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="male"
                                checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2"
                                value="female">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="col-md-4 mb-5">
                <label for="validationServer07">Mobile_Number</label>
                <input type="int" class="form-control" id="validationServer07" name="validationServer07"
                    placeholder="Number" required>
            </div>

            <div class="col-md-4 mb-5">
                <label for="validationServer08">Email_Address</label>
                <input type="email" class="form-control" id="validationServer08" name="validationServer08"
                    placeholder="Email" required>
            </div>


            



            <div class="form-row">
                <div class="col-md-6 mb-5">
                    <label for="validationServer03">District</label>
                    <input type="text" class="form-control" id="validationServer03" name="validationServer03"
                        placeholder="District" required>
                </div>

                <div class="col-md-3 mb-5">
                    <label for="validationServer05">Pin_Code</label>
                    <input type="text" class="form-control" id="validationServer05" name="validationServer05"
                        placeholder="Pin_Code" required>
                </div>

                <div>
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control" aria-labelledby="passwordHelpBlock">
                </div>

            </div>
            <button class="btn btn-primary mt-5" type="submit">Submit form</button>
    </form>
    </div>
</body>