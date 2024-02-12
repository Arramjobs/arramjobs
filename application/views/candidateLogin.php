<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Candidate Login Page</title>
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

    <style>
        /* To hide arrows in number field */
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

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="<?php echo baseUrl; ?>/#candidate"
                                    class="logo d-flex align-items-center w-auto">
                                    <!-- <img src="assets/img/logo.png" alt=""> -->
                                    <span class="d-block">Arramjobs Candidate</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                        <p class="text-center small">Enter your mobile number to login</p>
                                    </div>

                                    <form class="row g-3 needs-validation" novalidate
                                        action="<?php echo baseUrl . "Candidate/candidateLogin" ?>" method="post"
                                        onsubmit="return validateform()">

                                        <!-- <div class="col-12">
                                            <label for="username" class="form-label">Registerd ID</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your registered id" required>
                                                <div class="invalid-feedback">Please enter your registered id.</div>
                                            </div>
                                        </div> -->

                                        <div class="col-12">
                                            <label for="phonenumber" class="form-label">Mobile Number <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                <input type="number" name="phonenumber" class="form-control"
                                                    id="phonenumber" placeholder="9876543210"
                                                    oninput="validatePhoneNumber(this)" required>
                                                <div class="invalid-feedback">Please enter your mobile number.</div>
                                            </div>
                                            <div id="phoneError" class="text-danger"> </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="erpassword" class="form-label">Password <span
                                                    class="text-danger">*</span></label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="cdpassword" placeholder="01051996"
                                                    class="form-control" id="cdpassword"
                                                    oninput="validatePassword(this)" required />
                                                <button type="button" class="btn btn-outline-secondary"
                                                    onclick="togglePasswordVisibility('cdpassword', 'visibilityIcon')">
                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                </button>
                                                <div class="invalid-feedback">Please enter your password.</div>
                                                <div id="passwordError" class="text-danger"></div>
                                            </div>
                                        </div>

                                        <!-- <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Remember me</label>
                                            </div>
                                        </div> -->
                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>
                                    <div class="col-12">
                                        <br>
                                        <div class="form-check">
                                            <p>Create an account ? <a
                                                    href="<?php echo baseUrl . "Candidate/registration" ?>">Register</a>
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

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

        function validateform() {
            var phno = document.getElementById("phonenumber").value;
            var password = document.getElementById("cdpassword").value;

            if (phno != "") {
                if (phno.length < 10) {
                    return false;
                } else if (phno.length > 10) {
                    return false;
                }
            }

            if (password != "") {
                if (!/^(0[1-9]|[12]\d|3[01])(0[1-9]|1[0-2])\d{4}$/.test(password)) {
                    return false;
                }
            }
        }

    </script>


    <script>
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
            if (!/^(0[1-9]|[12]\d|3[01])(0[1-9]|1[0-2])\d{4}$/.test(input.value)) {
                phoneError.textContent = "Invalid password. Please enter password in DDMMYYYY.";
            } else {
                phoneError.textContent = "";
            }
        }
    </script>

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

</body>

</html>