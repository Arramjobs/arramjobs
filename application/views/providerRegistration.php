<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="path/to/bootstrap.min.css"> -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Google Fonts -->
    <style>
        .btn-primary {
            background-color: #f39c12 !important;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            width: 100%;
        }

        #providerregistraton {
            background-color: #F8802A;
            color: white;
            font-size: large;
        }

        /* Navbar */
        .navcss {
            color: white;
            font-weight: bold;
        }

        .navbar-nav li a {
            color: white;
            text-decoration: none;
        }

        .navbar-nav li a:hover {
            color: #F8802A;
            text-decoration: none;
        }

        .tamilcss {
            padding-right: 15%;
        }

        @media screen and (max-width:576px) {
            .tamilcss {
                padding-right: 8%;
            }
        }

        /* nav ul li a:hover {
            color: #F8802A !important;
        } */

        /* Form */
        .formcss {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        @media screen and (max-width:576px) {
            .formcss {
                width: 280px;
            }
        }

        .formcss h3 {
            text-align: center;
            margin-bottom: 30px;
            color: navy;
        }

        .formcss h4 {
            margin-bottom: 20px;
            color: #F8802A;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .error {
            color: red;
            margin-top: 5px;
        }


        .form-control {
            border-radius: 3px;

            padding: 10px;
        }


        .btn-primary {
            background-color: #4285f4;
            border: none;
        }

        .btn-primary:hover {
            background-color: #2d76d9;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            font-weight: bold;
        }

        /* to hide arrows in number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>


</head>

<body>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

    <!-- <div id="google_translate_element"></div>
    <script src="https://translate.Google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element'); 
        }
    </script> -->

    <nav class="navcss navbar navbar-expand-lg sticky-top"
        style="background-color: navy; padding-top: 40px; padding-bottom: 40px;">
        <div class="container-fluid">
            <h5 class="tamilcss mx-sm-4" style="color:white;">அறம் வேலைவாய்ப்பு</h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-symbols-outlined text-light px-sm-4">menu</span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link mx-4" href="#about-us">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#how-it-works">How It Works</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#job-providers">Employer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#job-seekers">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="#blog">Blog</a>
                    </li>
                </ul>
            </div>
    </nav>


    <div class="containers formcss container-lg mt-5 mx-auto">
        <div class="">

            <!-- <h4 class="grid-text-center d-flex justify-content-start text-dark bg-secondary bg-opacity-5 rounded-3 ms-5 me-5 mt-3"><center>Company Details</center></h4> -->
            <div class="" style="font-size: x-large">
                <h3>Employer Registration Form<h3>
            </div>
            <div class="">
                <h4 class="mx-auto">Company Details</h4>
            </div>
            <!-- <form  name="forms" action="Registrationcontroller.php" method="post"> -->
            <!-- <form id="h" name="forms" action="http://localhost/arramjobs/providerController/providerRegistration" method="post"> -->
            <form id="h" name="forms" action="<?php echo baseUrl . "providerController/providerRegistration" ?>"
                method="post">

                <div class=" ">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter company name"
                        onkeypress="return allowOnlyLetters(event, this)">
                    <p id="nameerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="phno" class="form-label">Number:</label>
                    <input type="number" class="form-control" id="phno" name="mobile"
                        placeholder="Enter company mobile number">
                    <p id="pherr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="email" class="form-label">Email-ID:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter company Email">
                    <p id="mailerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">Street Address:</label>
                    <input type="text" class="form-control" id="addr" name="address"
                        placeholder="Enter company address">
                    <p id="adderr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="addr" class="form-label">Landmark:</label>
                    <input type="text" class="form-control" id="landmark" name="landmark"
                        placeholder="Enter company landmark">
                    <p id="landerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">City:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="Enter company city">
                    <p id="cityerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">District:</label>
                    <input type="text" class="form-control" id="district" name="district"
                        placeholder="Enter company district">
                    <p id="diserr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">State:</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="Enter company state">
                    <p id="stateerr" style="color: red;"></p>
                </div>

                <div class=" ">
                    <label for="addr" class="form-label">Pincode:</label>
                    <input type="number" class="form-control" id="pincode" name="pincode"
                        placeholder="Enter company pincode">
                    <p id="pinerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="file" class="form-label">Logo:</label>
                    <input type="file" class="form-control" id="file" name="logo" >
                    <p id="logerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="cwebsite" class="form-label">Website:</label>
                    <input type="text" class="form-control" id="cwebsite" name="cwebsite" placeholder="Enter company website">
                    <p id="weberr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="cpan" class="form-label">Pan Number:</label>
                    <input type="text" class="form-control" id="cpan" name="cpan" placeholder="Enter company pan number">
                    <p id="panerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="cgst" class="form-label">GST Number:</label>
                    <input type="text" class="form-control" id="cgst" name="cgst" placeholder="Enter company GST number">
                    <p id="gsterr" style="color: red;"></p>
                </div>
                <br>
                <!-- <h3 class=" grid-text-center d-flex justify-content-start text-dark bg-light bg-opacity-50 rounded-3 ms-5 me-5 mt-3"><center>Contact person details</center></h3> -->
                <!-- <div class="grid-text-center p-2 border bg-light  rounded-1 ms-5 me-5">Contact person details</div> -->
                <div class="">
                    <h4 class="mx-auto">Contact Person Details</h4>
                </div>

                <div class=" ">
                    <label for="name1" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name1" name="name1"
                        placeholder="Enter contact person name" onkeypress="return allowOnlyLetters1(event, this)">
                    <p id="nameerr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="role" class="form-label">Role:</label>
                    <input type="text" class="form-control" id="role" name="role"
                        placeholder="Enter contact person role">
                    <p id="rolerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="phno1" class="form-label">Mobile Number:</label>
                    <input type="tel" class="form-control" id="phno1" name="mobile1"
                        placeholder="Enter contact person number">
                    <p id="pherr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="mail1" class="form-label">Email-ID:</label>
                    <input type="email" class="form-control" id="mail1" name="email1"
                        placeholder="Enter contact person Email">
                    <p id="mailerr1" style="color: red;"></p>
                </div>

                <div>
                    <!-- <button value="save" type="submit" name="save" id="providerregistraton" class="" onclick="return group()" ><center>Register</center></button>  -->
                    <button value="save" type="Submit" name="save" onclick="return group()" id="providerregistraton"
                        class="btn btn-primary">Register</button>

                </div>
            </form>
            <br>
            <div id="sign" class="">
                <!-- <p>Already have an account ? <a id="regis" href="http://localhost/arramjobs/provider/login">login</a></p> -->
                <p>Already have an account ? <a id="regis" href="<?php echo baseUrl . "provider/login" ?>">Login</a></p>
            </div>


        </div>
    </div>
    </div>



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
            var l = document.forms.file.value;
            var web = document.forms.cwebsite.value;
            var pan = document.forms.cpan.value;
            var gst = document.forms.cgst.value;
            var x1 = document.forms.name1.value;
            var p1 = document.forms.phno1.value;
            var a1 = document.forms.mail1.value;
            var r = document.forms.role.value;


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

            if (a == "") {

                var emailsms = "Email must be filled out";

                document.getElementById("mailerr").innerHTML = emailsms;
                document.forms.email.focus();
                return false;
            } else if (a != "") {
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
            } else if (y1 == "") {

                var landmark = "Landmark must be filled out";

                document.getElementById("landerr").innerHTML = landmark;
                document.forms.landmark.focus();
                return false;
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



            if (y5 != "") {
                if (y5.length < 2) {

                    document.getElementById("diserr").innerHTML = "District should be in atleast 2 characters";
                    document.forms.district.focus();
                    return false;
                } else if (y5.length > 50) {
                    document.getElementById("diserr").innerHTML = "District should not exceed 50 characters";
                    document.forms.district.focus();

                    return false;
                } else {
                    document.getElementById("diserr").innerHTML = "";

                }
            } else if (y5 == "") {

                var district = "District must be filled out";

                document.getElementById("diserr").innerHTML = district;
                document.forms.district.focus();
                return false;
            }

            if (y4 != "") {
                if (y4.length < 2) {

                    document.getElementById("stateerr").innerHTML = "State should be in atleast 2 characters";
                    document.forms.state.focus();
                    return false;
                } else if (y4.length > 50) {
                    document.getElementById("stateerr").innerHTML = "State should not exceed 50 characters";
                    document.forms.state.focus();

                    return false;
                } else {
                    document.getElementById("stateerr").innerHTML = "";

                }
            } else if (y4 == "") {

                var state = "State must be filled out";

                document.getElementById("stateerr").innerHTML = state;
                document.forms.state.focus();
                return false;
            }

            if (y3 != "") {
                if (y3.length !== 6) {

                    document.getElementById("pinerr").innerHTML = "Pincode  must be in 6 digits";
                    document.forms.pincode.focus();

                    return false;
                }
                // else if(y3.length>11)
                // {
                //  document.getElementById("pinerr").innerHTML="pincode should not exceed 6 digits";
                //  return false;
                // }
                else {
                    document.getElementById("pinerr").innerHTML = "";

                }
            } else if (y3 == "") {

                var pincode = "Pincode must be filled out";

                document.getElementById("pinerr").innerHTML = pincode;
                document.forms.pincode.focus();
                return false;
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
            // if(l=="")
            // {
            //     var logsms="*Please upload your file";
            //     document.getElementById("logerr").innerHTML=logsms;
            //     document.forms.file.focus();
            //     return false;
            // }
            // else{
            //     document.getElementById("logerr").innerHTML="";

            // }
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


            if (a1 == "") {

                var emailsms1 = "mail must be filled out";

                document.getElementById("mailerr1").innerHTML = emailsms1;
                document.forms.mail1.focus();
                return false;
            } else if (a1 != "") {
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
    </script>

    <!-- <script src="regvalid.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>