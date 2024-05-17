<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Candidate Registration Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="<?php echo baseUrl; ?>/assets/title logo.png" rel="icon">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        /* to hide arrows in number */
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
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?php echo baseUrl; ?>" class="logo d-flex align-items-center w-auto">
                                    <span class="d-none d-lg-block">Candidate Registration</span>
                                </a>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                                        <p class="text-center small">Enter your details to create account</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate onsubmit="return validateForm()"
                                        action="<?php echo baseUrl . "Candidate/candidateRegistration" ?>"
                                        name="registration_form" method="post">

                                        <div class="">
                                            <label for="username" class="form-label">Name <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                oninput="validateName(this)" required>
                                            <div id="username_error" style="color: red;" class="error"></div>
                                        </div>
                                        <div class="">
                                            <label for="email" class="form-label">Email ID</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            <div id="email_error" style="color: red;" class="error"></div>
                                        </div>
                                        <div class="">
                                            <label for="phonenumber" class="form-label">Mobile number <span
                                                    class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="phonenumber"
                                                name="phonenumber" pattern="[0-9]{1,15}" maxlength="15"
                                                oninput="validatePhoneNumber(this)" required
                                                onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                            <div id="phone_error" style="color: red;" class="error"></div>
                                        </div>
                                        <div class="">
                                            <label for="crpassword" class="form-label">Create Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="password" class="form-control" id="crpassword" name="crpassword" required>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    onclick="togglePasswordVisibility('crpassword', 'visibilityIcon')">
                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                </button>
                                            </div>
                                            <div class="text-secondary" style="font-size:15px; margin:0px;display:none;"
                                            id="passwordmessage">Enter the date of birth in DDMMYYYY (01051996).</div>
                                                <div id="crpassworderr" style="color: red;" class="error"></div>
                                        </div>                                     
                                        <div class="">
                                            <label for="cmpassword" class="form-label">Confirm Password <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="cmpassword" name="cmpassword"
                                                required>
                                            <p id="cmpassworderr" style="color: red;" class="error"></p>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                            </div> -->

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                        </div>
                                        <div class="col-12">
                                            <p class="small mb-0">Already have an account? <a
                                                    href="<?php echo baseUrl . "Candidate" ?>">Login</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="credits">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- NAME CHARACTERS VALIDATION -->
    <script>
        function validateName(input) {
            input.value = input.value.replace(/[0-9]/g, '');
        }
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
    </script>

    <script>
        document.getElementById("crpassword").onfocus = function () {
          document.getElementById("passwordmessage").style.display = "block";
        }

        document.getElementById("crpassword").onblur = function () {
          document.getElementById("passwordmessage").style.display = "none";
        }

        function validateForm() {
            var username = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phonenumber').value;
            var crpassword = document.getElementById('crpassword').value;
            var cmpassword = document.getElementById('cmpassword').value;
            clearErrors();
            if (!username.trim()) {
                displayError('Name must be filled out', 'username_error');
                return false;
            }

            // if (!validateEmail(email)) {
            //     displayError('Please enter a valid email address', 'email_error');
            //     return false;
            // }

            if (!phone.trim()) {
                displayError('Mobile number must be filled out', 'phone_error');
                return false;
            } else if (!validatePhone(phone)) {
                displayError('Please enter a valid mobile number', 'phone_error');

                return false;
            }

            if (!crpassword.trim()) {
                displayError('Password must be filled out', 'crpassworderr');
                return false;
            } else if (!validatePassword(crpassword)) {
                displayError('Please enter a password in DDMMYYYY', 'crpassworderr');
                return false;
            }

            if (!cmpassword.trim()) {
                displayError('Confirm password must be filled out', 'cmpassworderr');
                return false;
            } else if (!(crpassword == cmpassword)) {
                displayError('Confirm password does not matches the password', 'cmpassworderr');
                return false;
            }

            return true;
        }

        function validateEmail(email) {
            var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return regex.test(email);
        }

        function validatePhone(phone) {
            var regex = /^\d{10}$/;
            return regex.test(phone);
        }

        function validatePassword(crpassword) {
            var regex = /^(0[1-9]|[12]\d|3[01])(0[1-9]|1[0-2])\d{4}$/;
            return regex.test(crpassword);
        }

        function displayError(errorMessage, errorElementId) {
            var errorElement = document.getElementById(errorElementId);
            errorElement.textContent = errorMessage;
        }

        function clearErrors() {
            var errorElements = document.getElementsByClassName('error');
            for (var i = 0; i < errorElements.length; i++) {
                errorElements[i].textContent = '';
            }
        }
    </script>

    <footer id="footer" class="footer mt-auto py-3">
        <div class="contact">
            <p style="padding-left:24%; color:#blue;">Need help? Contact us anytime: <a
                    href="tel:7418334443"><strong>+91 7418334443</strong></a></p>
        </div>
        <div class="copyright" style="padding-right:25%;">
            &copy; Copyright <strong><span>ArramJobs</span></strong>. All Rights Reserved
        </div>
    </footer>

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

</body>

</html>