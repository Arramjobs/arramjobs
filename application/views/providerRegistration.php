<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/bootstrap.min.css">
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
        nav ul li a:hover {
            color: #F8802A !important;
        }

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

    <nav class="navbar navbar-expand-lg" style="background-color: navy; padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <!-- <img src="logo 1.jpeg" alt="Arram Jobs" width="120" height="50"> -->
            <h4 style="color: white">அறம் வேலைவாய்ப்பு</h4>
            <!-- <a href="" style="color: white">ArramJobs</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white; padding-right: 40px;">Home</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white; padding-right: 40px;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#provider" style="color: white; padding-right: 40px;">Provider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seeker" style="color: white; padding-right: 40px;">Seeker</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white; padding-right: 40px;">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white; padding-right: 40px;">Contact</a>
                    </li>
                </ul>
                <div>
                    <!-- <form class="d-flex" role="search">
                        <button class="btn btn-danger btn-lg">LogIn</button>
                    </form> -->
                    <div class="dropdown" style="margin-left: 15px;">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            LogIn
                        </button>
                    </div>
                </div>
    </nav>


    <div class="containers formcss container-lg mt-5 mx-auto">
        <div class="">

            <!-- <h4 class="grid-text-center d-flex justify-content-start text-dark bg-secondary bg-opacity-5 rounded-3 ms-5 me-5 mt-3"><center>Company Details</center></h4> -->
            <div class="" style="font-size: x-large">
                <h3>Provider Registration Form<h3>
            </div>
            <div class="">
                <h4>Company Details</h4>
            </div>
            <!-- <form  name="forms" action="Registrationcontroller.php" method="post"> -->
            <!-- <form id="h" name="forms" action="http://localhost/arramjobs/providerController/providerRegistration" method="post"> -->
            <form id="h" name="forms" action="<?php echo baseUrl . "providerController/providerRegistration" ?>"
                method="post">

                <div class=" ">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="enter name"
                        onkeypress="return allowOnlyLetters(event, this)">
                    <p id="nameerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="phno" class="form-label">Number:</label>
                    <input type="number" class="form-control" id="phno" name="mobile">
                    <p id="pherr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="email" class="form-label">Email-ID:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="enter email">
                    <p id="mailerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">Street address:</label>
                    <input type="text" class="form-control" id="addr" name="address" placeholder="enter address">
                    <p id="adderr" style="color: red;"></p>
                </div>
                <div class=">
                <label for=" addr" class="form-label">Landmark:</label>
                    <input type="text" class="form-control" id="landmark" name="landmark" placeholder="enter address">
                    <p id="landerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">City:</label>
                    <input type="text" class="form-control" id="city" name="city" placeholder="enter city">
                    <p id="cityerr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">District:</label>
                    <input type="text" class="form-control" id="district" name="district" placeholder="enter district">
                    <p id="diserr" style="color: red;"></p>
                </div>
                <div class=" ">
                    <label for="addr" class="form-label">State:</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="enter state">
                    <p id="stateerr" style="color: red;"></p>
                </div>

                <div class=" ">
                    <label for="addr" class="form-label">Pincode:</label>
                    <input type="number" class="form-control" id="pincode" name="pincode">
                    <p id="pinerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="file" class="form-label">Logo:</label>
                    <input type="file" class="form-control" id="file" name="logo">
                    <p id="logerr" style="color: red;"></p>
                </div>
                <br>
                <!-- <h3 class=" grid-text-center d-flex justify-content-start text-dark bg-light bg-opacity-50 rounded-3 ms-5 me-5 mt-3"><center>Contact person details</center></h3> -->
                <!-- <div class="grid-text-center p-2 border bg-light  rounded-1 ms-5 me-5">Contact person details</div> -->
                <div class="">
                    <h4>Contact person details</h4>
                </div>

                <div class=" ">
                    <label for="name1" class="form-label">Name:</label>
                    <input type="text" class="form-control" id="name1" name="name1" placeholder="enter name"
                        onkeypress="return allowOnlyLetters1(event, this)">
                    <p id="nameerr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="role" class="form-label">Role:</label>
                    <input type="text" class="form-control" id="role" name="role" placeholder="enter role">
                    <p id="rolerr" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="phno1" class="form-label">Mobile Number:</label>
                    <input type="number" class="form-control" id="phno1" name="mobile1">
                    <p id="pherr1" style="color: red;"></p>
                </div>
                <div class="">
                    <label for="mail1" class="form-label">Email-ID:</label>
                    <input type="email" class="form-control" id="mail1" name="email1" placeholder="enter email">
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
                <p>Already have an account ? <a id="regis" href="<?php echo baseUrl . "provider/login" ?>">login</a></p>
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
            var x1 = document.forms.name1.value;
            var p1 = document.forms.phno1.value;
            var a1 = document.forms.mail1.value;
            var r = document.forms.role.value;

            if (x != "") {
                if (x.length < 2) {
                    document.getElementById("nameerr").innerHTML = "* Name should be in atleast 2 characters";
                    return false;
                } else if (x.length > 50) {
                    document.getElementById("nameerr").innerHTML = "* Name should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("nameerr").innerHTML = "";

                }
            } else if (x == "") {
                var namesms1 = "* Name must be filled out";
                document.getElementById("nameerr").innerHTML = namesms1;
                document.forms.name.focus();
                return false;
            }

            if (p != "") {
                if (p.length !== 10) {
                    document.getElementById("pherr").innerHTML = "Phone number  must be in 10 digits";
                    return false;
                } else if (p.length > 11) {
                    document.getElementById("pherr1").innerHTML = "phone number should not exceed 10 digits";
                    return false;
                } else {
                    document.getElementById("pherr").innerHTML = "";

                }
            } else if (p == "") {
                var phsms = "phone number must be filled out";
                document.getElementById("pherr").innerHTML = phsms;
                document.forms.phno.focus();
                return false;

            }

            if (a == "") {
                var emailsms = "email must be filled out";
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
                    document.getElementById("mailerr").innerHTML = "you have entered an invalid email address";
                    return false;
                }
            }

            if (y != "") {
                if (y.length < 4) {
                    document.getElementById("adderr").innerHTML = "* Address should be in atleast 4 characters";
                    return false;
                } else if (y.length > 35) {
                    document.getElementById("adderr").innerHTML = "* Address should not exceed 35 characters";
                    return false;
                } else {
                    document.getElementById("adderr").innerHTML = "";
                }
            } else {
                var adderr = "* Address must be in filled out";
                document.getElementById("adderr").innerHTML = adderr;
                document.forms.addr.focus();
                return false;
            }


            if (y1 != "") {
                if (y1.length < 2) {
                    document.getElementById("landerr").innerHTML = "* landmark should be in atleast 2 characters";
                    return false;
                } else if (y1.length > 50) {
                    document.getElementById("landerr").innerHTML = "* landmark should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("landerr").innerHTML = "";

                }
            } else if (y1 == "") {
                var landmark = "* landmark must be filled out";
                document.getElementById("landerr").innerHTML = landmark;
                document.forms.landmark.focus();
                return false;
            }

            if (y2 != "") {
                if (y2.length < 2) {
                    document.getElementById("errerr").innerHTML = "* city should be in atleast 2 characters";
                    return false;
                } else if (y2.length > 50) {
                    document.getElementById("cityerr").innerHTML = "*city should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("cityerr").innerHTML = "";

                }
            } else if (y2 == "") {
                var city = "*city must be filled out";
                document.getElementById("cityerr").innerHTML = city;
                document.forms.city.focus();
                return false;
            }





            if (y5 != "") {
                if (y5.length < 2) {
                    document.getElementById("diserr").innerHTML = "* state should be in atleast 2 characters";
                    return false;
                } else if (y5.length > 50) {
                    document.getElementById("diserr").innerHTML = "*state should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("diserr").innerHTML = "";

                }
            } else if (y5 == "") {
                var district = "*state must be filled out";
                document.getElementById("diserr").innerHTML = district;
                document.forms.district.focus();
                return false;
            }

            if (y4 != "") {
                if (y4.length < 2) {
                    document.getElementById("stateerr").innerHTML = "* state should be in atleast 2 characters";
                    return false;
                } else if (y4.length > 50) {
                    document.getElementById("stateerr").innerHTML = "*state should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("stateerr").innerHTML = "";

                }
            } else if (y4 == "") {
                var state = "*state must be filled out";
                document.getElementById("stateerr").innerHTML = state;
                document.forms.state.focus();
                return false;
            }

            if (y3 != "") {
                if (y3.length !== 6) {
                    document.getElementById("pinerr").innerHTML = "pincode  must be in 6 digits";
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
                var pincode = "pincode must be filled out";
                document.getElementById("pinerr").innerHTML = pincode;
                document.forms.pincode.focus();
                return false;

            }






            if (x1 != "") {
                if (x1.length < 4) {
                    document.getElementById("nameerr1").innerHTML = "* Name should be in atleast 4 characters";
                    return false;
                } else if (x1.length > 50) {
                    document.getElementById("nameerr1").innerHTML = "* Name should not exceed 500 characters";
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
                var namesms2 = "* Name must be filled out";
                document.getElementById("nameerr1").innerHTML = namesms2;
                document.forms.name1.focus();
                return false;
            }



            if (r != "") {
                if (y.length > 50) {
                    document.getElementById("rolerr").innerHTML = "* Address should not exceed 50 characters";
                    return false;
                } else {
                    document.getElementById("rolerr").innerHTML = "";
                }
            } else {
                var adderr = "* role must be in filled out";
                document.getElementById("rolerr").innerHTML = adderr;
                document.forms.role.focus();
                return false;
            }

            if (p1 != "") {
                if (p1.length !== 10) {
                    document.getElementById("pherr1").innerHTML = "Phone number  must be in 10 digits";
                    return false;
                } else if (p1.length > 11) {
                    document.getElementById("pherr1").innerHTML = "phone number should not exceed 10 digits";
                    return false;
                } else {
                    document.getElementById("pherr1").innerHTML = "";

                }
            } else if (p1 == "") {
                var phsms1 = "phone number must be filled out";
                document.getElementById("pherr1").innerHTML = phsms1;
                document.forms.phno1.focus();
                return false;

            }


            if (a1 == "") {
                var emailsms1 = "email must be filled out";
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
                    document.getElementById("mailerr1").innerHTML = "you have entered an invalid email address";
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