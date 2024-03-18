<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="" name="description">
    <meta content="" name="keywords">

    <title>Employer Login Page</title>

    <link href="<?php echo baseUrl; ?>/assets/title logo.png" rel="icon">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo baseUrl; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo baseUrl; ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo baseUrl; ?>/assets/css/style.css" rel="stylesheet">

    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?php echo baseUrl; ?>"
                                    class="logo d-flex align-items-center w-auto">
                                    <!-- <img src="assets/img/logo.png" alt=""> -->
                                    <span class="d-block">Employer Login</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                    <div class="my-2 py-md-4 text-center">                                            
                    <p style=" font-size: 30px;color: #4169E1"><b>WELCOME TO <a href="<?php echo baseUrl; ?>"><span style="color: #7aa12b;">ARRAM JOBS</span></a> !</b></p>
                                    </div>
                                </div>

                                    <form class="row g-3 needs-validation" novalidate
                                        action="<?php echo baseUrl . "Employer/viewDashboard" ?>"
                                        onsubmit="return validateForm()" method="post">

                                        <div class="col-12">
                                            <label for="userID" class="form-label">Mobile Number  </label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="number" name="mobilenumber" class="form-control" id="userID" 
                                                    oninput="validatePhoneNumber(this)" onkeyup="checkMobileNumber()" required 
                                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                                <div class="invalid-feedback">Please enter your registered mobile number.</div>
                                                    </div>
                                                <div id="phoneError" class="text-danger"> </div>
                                        </div>
                                        <div id="imageContainer"></div>
                                        <div class="col-12">
                                            <label for="erpassword" class="form-label">Password  </label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="erpassword" class="form-control" id="erpassword" oninput="validatePassword(this)" required>
                                                <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('erpassword', 'visibilityIcon')">
                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                </button>
                                                <div class="invalid-feedback">Please enter your password.</div> </div>
                                                <div id="passwordError" class="text-danger"></div>                                           
                                        </div>
                                        <div class="col-12">
                                            <br>
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                    <div class="col-12">
                                        <br>
                                        <div class="form-check">
                                            <p>Create an account ? 
                                                <a href="<?php echo baseUrl . "Employer/registration" ?>">Register</a>
                                            </p>
                                        </div>
                                        <p style="color: black; font-size: small;">If you have any doubts, Please contact us : <span style="color: #0F52BA;"><a href="tel:7418334443" 
                                            style="color:#0F52BA ; text-decoration: none; font-size: small;"
                                            onmouseover="this.style.color='#668722'" onmouseout="this.style.color='blue'"><b>+91 7418334443</b></a></span></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 
<script>
// Global variable to store the minimum number of digits for AJAX call
var minDigitsForAjax = 10;

function checkMobileNumber() {
    var mobileNumber = document.getElementById('userID').value;

    // Check if the entered number has reached the minimum required digits
    if (mobileNumber.length >= minDigitsForAjax) {
        // Send AJAX request to check if the mobile number exists in the database
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var response = JSON.parse(xhr.responseText);

                // Display different messages based on the response
                if (response.exists) {
                    document.getElementById('phoneError').innerHTML = '<div class="text-success">Mobile number exists!</div>';
                } else {
                    document.getElementById('phoneError').innerHTML = '<div class="text-danger">Mobile number does not exist!</div>';
                }
            }
        };

        xhr.open('POST', '<?php echo baseUrl . ("Employer/checkMobileNumber"); ?>', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('mobilenumber=' + mobileNumber);
    }
}
</script>

            <script>
                function togglePasswordVisibility(inputId, iconId) {
                    var passwordInput = document.getElementById(inputId);
                    var visibilityIcon = document.getElementById(iconId);

                    if (passwordInput.type === "password") {
                        passwordInput.type = "text";
                        visibilityIcon.classList.remove("bi-eye-slash");
                        visibilityIcon.classList.add("bi-eye");
                    } else {
                        passwordInput.type = "password";
                        visibilityIcon.classList.remove("bi-eye");
                        visibilityIcon.classList.add("bi-eye-slash");
                    }
                }
           
                function validateForm() {
                    var phno = document.getElementById("userID").value;
                    var password = document.getElementById("erpassword").value;

                    if (phno != "") {
                        if (phno.length < 10) {
                            return false;
                        } else if (phno.length > 10) {
                            return false;
                        }
                    }

                    if (password != "") {
                        if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/.test(password)) {
                            return false;
                        }
                    }
                }

                function validatePhoneNumber(input) {
                    const phoneError = document.getElementById("phoneError");
                    if (!/^\d{10}$/.test(input.value)) {
                        phoneError.textContent = "Invalid phone number. Please enter 10 digits.";
                    } else {
                        phoneError.textContent = "";
                    }
                }

                function validatePassword(input) {
                    const phoneError = document.getElementById("passwordError");
                    if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(input.value)) {
                        phoneError.textContent = "Invalid password. Please enter valid password.";
                    } else {
                        phoneError.textContent = "";
                    }
                }
            </script>

        </div>
    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo baseUrl; ?>/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo baseUrl; ?>/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo baseUrl; ?>/assets/js/main.js"></script>

    <!-- Event listener to block right-click -->
<script>
    function blockRightClick(event) {
        event.preventDefault(); 
    }

    document.addEventListener('contextmenu', blockRightClick);
</script>

    <!-- Validation Script -->
    <!-- <script>
    function validateForm() {
      var x = document.login_form.userID.value;

      if (x == "") {
        var namesms1 = "Employer id must be filled out";
        document.getElementById("nameerr").innerHTML = namesms1;
        return false;
      }
      
    }
  </script> -->

</body>

</html>