<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Employer Registration Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
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
            <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="<?php echo baseUrl; ?>" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <span class="d-none d-lg-block">Employer Registration</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your company details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate id="h" onsubmit="return group()" enctype="multipart/form-data" name="forms" action="<?php echo baseUrl . "Employer/employerRegistration" ?>"
                method="post" >
                    
                    <div class="">
                    <label for="name" class="form-label">Company Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" onkeypress="return allowOnlyLetters(event, this)" required>
                    <p id="nameerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="phno" class="form-label">Company Number <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="phno" name="mobile" required onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                    <p id="pherr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="email" class="form-label">Email-ID </label>
                    <input type="email" class="form-control" id="email" name="email">
                    <p id="mailerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="crpassword" class="form-label">Create Password <span class="text-danger">*</span></label>
                    <div class="input-group has-validation">
                    <input type="password" class="form-control" id="crpassword" name="crpassword" required>
                    <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('crpassword', 'visibilityIcon')">
                        <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                    </button>
                    <p id="crpassworderr" style="color: red;"></p>
                </div>
                </div>
                    <div class="text-secondary" style="font-size:12px;margin-top:0px" id="passwordmessage">Passwords must contain atleast 1 uppercase, 1 lowercase and a minimum of 6 characters.</div>
                <div class="">
                    <label for="cmpassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cmpassword" name="cmpassword" required>
                    <p id="cmpassworderr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">Street Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="addr" name="address" required>
                    <p id="adderr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">Landmark </label>
                    <input type="text" class="form-control" id="landmark" name="landmark">
                    <p id="landerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">City <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" id="city" name="city" required>
                    <p id="cityerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">District <span class="text-danger">*</span></label>
                        <select class="form-control" id="district" name="district" required>
                                <option value="">Select district</option>
                                <option value="Erode">Erode</option>
                                <option value="Karur">Karur</option>
                                <option value="Namakkal">Namakkal</option>
                                <option value="Tirupur">Tirupur</option>
                            </select>
                    <p id="diserr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">State <span class="text-danger">*</span></label>
                    <select class="form-control" id="state" name="state" required>
                                <option value="">Select state</option>
                                <option value="Tamilnadu">Tamil Nadu</option>
                            </select>
                    <p id="stateerr" style="color: red;"></p>
                </div>

                <div class="">
                    <label for="addr" class="form-label">Pincode <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="pincode" name="pincode" required>
                    <p id="pinerr" style="color: red;"></p>
                </div>

                <div class="">
                    <label for="locationUrl" class="form-label">Location URL </label>
                    <input type="text" class="form-control" id="locationUrl" name="locationUrl" pattern="https?://.+" >
                    <!-- <p id="lUrlerr" style="color: red;"></p> -->
                </div>

                <div class="">
                    <label for="logo" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" >
                    <p id="logerr" style="color: red;"></p>
                    <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF Maximum size: 1024KB</p>
                </div>
                <div class="">
                    <label for="cwebsite" class="form-label">Website</label>
                    <input type="text" class="form-control" id="cwebsite" name="cwebsite">
                    <p id="weberr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="cpan" class="form-label">Pan Number</label>
                    <input type="text" class="form-control" id="cpan" name="cpan">
                    <p id="panerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="cgst" class="form-label">GST Number</label>
                    <input type="text" class="form-control" id="cgst" name="cgst">
                    <p id="gsterr" style="color: red;"></p>
                </div>
                <br>
                <div class="">
                    <h4 class="mx-auto">Contact Person Details</h4>
                </div>

                <div class="">
                    <label for="name1" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="name1" name="name1" 
                        onkeypress="return allowOnlyLetters1(event, this)" required>
                    <p id="nameerr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="role" name="role" required>
                    <p id="rolerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="phno1" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="phno1" name="mobile1" required onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                    <p id="pherr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="mail1" class="form-label">Email-ID </label>
                    <input type="email" class="form-control" id="mail1" name="email1">
                    <p id="mailerr1" style="color: red;"></p>
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
                      <p class="small mb-0">Already have an account? <a href="<?php echo baseUrl . "Employer/login" ?>">Login</a></p>
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
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script type="text/javascript">
        function allowOnlyLetters(e, t) {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
                document.getElementById("nameerr").innerHTML = "";
                document.forms.phno.focus();
                return true;
            } else if (((charCode > 48) && (charCode < 57))) {

                document.getElementById("nameerr").innerHTML = "Numbers not allowed Please enter only letters";
                document.forms.name.focus();
                return false;
            }
        }

        function allowOnlyLetters1(e, t) {
            if (window.event) {
                var charCode = window.event.keyCode;
            } else if (e) {
                var charCode = e.which;
            } else {
                return true;
            }

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode == 32)) {
                document.getElementById("nameerr1").innerHTML = "";
                document.forms.phno1.focus();
                return true;
            } else if (((charCode > 48) && (charCode < 57))) {
                document.getElementById("nameerr1").innerHTML = "Numbers not allowed Please enter only letters";
                document.forms.name1.focus();
                return false;
            }
        }

        document.getElementById("crpassword").onfocus = function() {
            document.getElementById("passwordmessage").style.display = "block";
            }

            document.getElementById("crpassword").onblur = function() {
            document.getElementById("passwordmessage").style.display = "none";
            }


        function group() {
            var x = document.forms.name.value;
            var p = document.forms.phno.value;
            var a = document.forms.email.value;
            var y = document.forms.addr.value;
            var y1 = document.forms.landmark.value;
            var y2 = document.forms.city.value;
            var y3 = document.forms.pincode.value;
            var y5 = document.forms.district.value;
            var y4 = document.forms.state.value;
             var lu = document.forms.locationUrl.value;
            var l = document.forms.logo.value;
            var web = document.forms.cwebsite.value;
            var pan = document.forms.cpan.value;
            var gst = document.forms.cgst.value;
            var x1 = document.forms.name1.value;
            var p1 = document.forms.phno1.value;
            var a1 = document.forms.mail1.value;
            var r = document.forms.role.value;

             var crp = document.forms.crpassword.value;
            var cmp = document.forms.cmpassword.value;



            if (x != "") {
                if (x.length < 2) {
                    document.getElementById("nameerr").innerHTML = "Name should be in atleast 2 characters";
                    document.forms.name.focus();
                    return false;
                } else if (x.length > 50) {
                    document.getElementById("nameerr").innerHTML = "Name should not exceed 50 characters";
                    document.forms.name.focus();
                    return false;
                } else {
                    document.getElementById("nameerr").innerHTML = "";
                }
            } else if (x == "") {
                var namesms1 = "Name must be filled out";
                document.getElementById("nameerr").innerHTML = namesms1;
                document.forms.name.focus();
                return false;
            }

            if (p != "") {
                if (p.length < 10) {
                    document.getElementById("pherr").innerHTML = "Mobile number must be in 10 digits";
                    document.forms.phno.focus();
                    return false;
                } else if (p.length > 11) {
                    document.getElementById("pherr").innerHTML = "Mobile number should not exceed 10 digits";
                    document.forms.phno.focus();
                    return false;
                } else {
                    document.getElementById("pherr").innerHTML = "";
                }
            } else if (p == "") {
                var phsms = "Mobile number must be filled out";
                document.getElementById("pherr").innerHTML = phsms;
                document.forms.phno.focus();
                return false;
            }

            if (a != "") {
                // document.getElementById("mailerr").innerHTML="";
                /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a)) {
                    document.getElementById("mailerr").innerHTML = "";
                    // return (true);
                } else {
                    document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
                    document.forms.email.focus();
                    return false;
                }
            }  else {
                    document.getElementById("mailerr").innerHTML = "";
                }


            if (crp == "") {
                var emailsms = "Password must be filled out";
                document.getElementById("crpassworderr").innerHTML = emailsms;
                document.forms.crpassword.focus();
                return false;
            } 
            // else if (crp != "") {
            //     if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(crp)) {
            //         document.getElementById("crpassworderr").innerHTML = "";
            //     } else {
            //         document.getElementById("crpassworderr").innerHTML = "Password does not matches the criteria";
            //         document.forms.crpassword.focus();
            //         return false;
            //     }
            }  else {
                document.getElementById("crpassword").innerHTML = "";
            }


                if (cmp == "") {
                var emailsms = "Password must be filled out";
                document.getElementById("cmpassworderr").innerHTML = emailsms;
                document.forms.cmpassword.focus();
                return false;
            } else if (crp === cmp) {
                 document.getElementById("cmpassworderr").innerHTML = "";
                } else {
                    document.getElementById("cmpassworderr").innerHTML = "Confirm password does not matches the password";
                    document.forms.cmpassword.focus();
                    return false;
                }


            if (y != "") {
                if (y.length < 4) {
                    document.getElementById("adderr").innerHTML = "Address should be in atleast 4 characters";
                    document.forms.addr.focus();
                    return false;
                } else if (y.length > 35) {
                    document.getElementById("adderr").innerHTML = "Address should not exceed 35 characters";
                    document.forms.addr.focus();
                    return false;
                } else {
                    document.getElementById("adderr").innerHTML = "";
                }
            } else {
                var adderr = "Address must be in filled out";
                document.getElementById("adderr").innerHTML = adderr;
                document.forms.addr.focus();
                return false;
            }


            if (y1 != "") {
                if (y1.length < 2) {
                    document.getElementById("landerr").innerHTML = "Landmark should be in atleast 2 characters";
                    document.forms.landmark.focus();
                    return false;
                } else if (y1.length > 50) {
                    document.getElementById("landerr").innerHTML = "Landmark should not exceed 50 characters";
                    document.forms.landmark.focus();
                    return false;
                } else {
                    document.getElementById("landerr").innerHTML = "";
                }
            

            if (y2 != "") {
                if (y2.length < 2) {
                    document.getElementById("errerr").innerHTML = "City should be in atleast 2 characters";
                    document.forms.city.focus();
                    return false;
                } else if (y2.length > 50) {
                    document.getElementById("cityerr").innerHTML = "City should not exceed 50 characters";
                    document.forms.city.focus();
                    return false;
                } else {
                    document.getElementById("cityerr").innerHTML = "";
                }
            } else if (y2 == "") {
                var city = "City must be filled out";
                document.getElementById("cityerr").innerHTML = city;
                document.forms.city.focus();
                return false;
            }

            if (y5 == "") {
                    document.getElementById("diserr").innerHTML = "Please select a district";
                    document.forms.district.focus();
                    return false;
            } else {
                document.getElementById("diserr").innerHTML = "";
            }

            if (y4 == "") {
                var state = "Please select a State";
                document.getElementById("stateerr").innerHTML = state;
                document.forms.state.focus();
                return false;
            } else {
                document.getElementById("stateerr").innerHTML = "";
            }

            if (y3 != "") {
                if (y3.length !== 6) {
                    document.getElementById("pinerr").innerHTML = "Pincode  must be in 6 digits";
                    document.forms.pincode.focus();
                    return false;
                } else {
                    document.getElementById("pinerr").innerHTML = "";

                }
            } else if (y3 == "") {
                var pincode = "Pincode must be filled out";
                document.getElementById("pinerr").innerHTML = pincode;
                document.forms.pincode.focus();
                return false;
            }

             if (lu == "") {
                    document.getElementById("lUrlerr").innerHTML = "Location url must be filled out";
                    document.forms.locationUrl.focus();
                    return false;
            } else {
                    document.getElementById("lUrlerr").innerHTML = "";
            }

            // website pan gst
                if (web.length > 50) {
                    document.getElementById("weberr").innerHTML = "Website should not exceed 50 characters";
                    document.forms.cwebsite.focus();
                    return false;
                } 
                if (pan.length > 11) {
                    document.getElementById("panerr").innerHTML = "Pan number should not exceed 10 characters";
                    document.forms.cpan.focus();
                    return false;
                } 
                if (gst.length > 15) {
                    document.getElementById("gsterr").innerHTML = "GST number should not exceed 15 characters";
                    document.forms.cgst.focus();
                    return false;
                } 


            if (x1 != "") {

                if (x1.length < 3) {
                    document.getElementById("nameerr1").innerHTML = "Name should be in atleast 3 characters";
                    document.forms.name1.focus();
                    return false;
                } else if (x1.length > 50) {
                    document.getElementById("nameerr1").innerHTML = "Name should not exceed 500 characters";
                    document.forms.name1.focus();
                    return false;
                } else {
                    document.getElementById("nameerr1").innerHTML = "";

                }
            }
            
            if (x1 == "") {
                var namesms2 = "Name must be filled out";
                document.getElementById("nameerr1").innerHTML = namesms2;
                document.forms.name1.focus();
                return false;
            }



            if (r != "") {
                if (y.length > 50) {
                    document.getElementById("rolerr").innerHTML = "Address should not exceed 50 characters";
                    document.forms.role.focus();
                    return false;
                } else {
                    document.getElementById("rolerr").innerHTML = "";
                }
            } else {
                var adderr = "Role must be in filled out";
                document.getElementById("rolerr").innerHTML = adderr;
                document.forms.role.focus();
                return false;
            }

            if (p1 != "") {
                if (p1.length !== 10) {
                    document.getElementById("pherr1").innerHTML = "Mobile number must be in 10 digits";
                    document.forms.phno1.focus();
                    return false;
                } else if (p1.length > 11) {
                    document.getElementById("pherr1").innerHTML = "Mobile number should not exceed 10 digits";
                    document.forms.phno1.focus();
                    return false;
                } else {
                    document.getElementById("pherr1").innerHTML = "";
                }
            } else if (p1 == "") {
                var phsms1 = "Mobile number must be filled out";
                document.getElementById("pherr1").innerHTML = phsms1;
                document.forms.phno1.focus();
                return false;
            }


            if (a1 != "") {
                // document.getElementById("mailerr").innerHTML="";
                /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(a1)) {
                    document.getElementById("mailerr1").innerHTML = "";
                    // return (true);
                } else {
                    document.getElementById("mailerr1").innerHTML = "You have entered an invalid email address";
                    document.forms.mail1.focus();
                    return false;
                }
            }
        }

        // View Password
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
<footer id="footer" class="footer mt-auto py-3">
  <div class="contact">
      <p style="padding-left:24%; color:#blue;">Need help? Contact us anytime: <a href="tel:7418334443"><strong>+91 7418334443</strong></a></p>
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