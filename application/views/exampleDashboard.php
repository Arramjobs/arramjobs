<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Page</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* #education{
        color:
         } */
        #candidateResume {
            color: white;
            background-color: #F8802A;
            font-weight: bold;
        }

        /* .bg-warning{
        background-color: #F8802A;
        } */
        #educationTable {
            width: 100%;
        }

        .btn-warning:hover {
            background-color: #2d76d9;
        }

        .bg-secondary {
            background-color: navy !important;
        }

        #updatesubmit {
            background-color: #F8802A !important;
            color: white;
            font-size: large;
        }

        #search {

            margin-left: 950px;
        }

        #categorys {
            margin-left: 300px;
            width: 40%;
        }

        #subcategorys {
            width: 50%;
        }

        /* label{
            margin-left: 330px;
        } */
        #lab {
            margin-left: 10px;
        }

        #lab {
            margin-left: 10px;
        }

        .full {
            align-items: center;


            background-color: #f1f1f1;

        }

        .bg-primary {
            background-color: navy !important;
        }

        .bg-dark {
            background-color: rgb(243, 139, 12) !important;
        }


        /* Adjust sidebar height to match content height */
        .sidebar {
            height: 200vh;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            /* margin-left:-200px;
            margin-right:290px; */
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 50px auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            margin-left: -30px;
            color: navy;
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
            border: 1px solid #ccc;
            /* padding: 10px; */
        }

        .form-control-file {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .btn-primary {
            background-color: #f39c12 !important;
        }

        .btn-primary {
            /* background-color: #4285f4; */
            border: none;
            background-color: #F8802A;
        }


        .form-control[type="file"] {
            border: none;
            background-color: transparent;
            color: #4285f4;
            cursor: pointer;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            font-weight: bold;
        }

        .next-button {
            float: right;
        }

        #con {
            width: 50%;
        }

        #addnew {
            width: 50%;
        }

        #updateaddnew {
            width: 50%;
        }

        /* Update header background color to a darker navy */
        /* Header styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px;
            z-index: 1000;
            background-color: navy;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h2 {
            color: white;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);

        }

        header nav ul li {
            display: inline-block;
            margin-left: 50px;
        }

        header nav ul li a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            /* background-color: #f39c12 ;  */
        }

        header nav ul li a:hover {
            /* background-color: #007bff;
            .btn-primary{ */
            /* background-color: #f39c12 ; */
            color: #F8802A;
            text-decoration: none;
            /* } */
        }

        .logo {
            margin-top: 50px;
        }

        .sidebar {
            position: fixed;
            width: 18%;
            top: 110px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #F8802A;
        }

        .nav-link {
            display: block;
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
            padding: 20px 20px;
        }

        /* .nav-link:hover {
            background-color: #007bff;
        }
        .nav-item.active .nav-link {
            background-color: #FF4500;
        } */

        .nav-item h3 {
            margin: 0;
            padding: 10px 20px;
            color: white;
        }

        #view {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid #f39c12;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #view:hover {
            background-color: transparent;
            color: #f39c12;
        }

        #updates {
            display: inline-block;
            margin-left: 5px;
            padding: 8px 16px;
            border: 2px solid navy;
            background-color: navy;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #updates:hover {
            background-color: transparent;
            color: navy;
        }

        #deletes {
            display: inline-block;
            margin-left: 5px;
            padding: 8px 16px;
            border: 2px solid red;
            background-color: red;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #deletes:hover {
            background-color: transparent;
            color: red;
        }

        #regis {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid navy;
            background-color: navy;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #regis:hover {
            background-color: transparent;
            color: navy;
        }

        #tamil {
            color: white;
            margin-left: 20px;
        }

        /* to hide arrows in number */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* To print candidate deatils */
        @media print {
            body {
                visibility: hidden;
            }

            #educationTable {
                margin-left: -100px;
                margin-top: -120px;
                visibility: visible;
                /* position: absolute;
            left: 0;
            top: 0; */
            }

            .printdiv,
            .printhide {
                visibility: hidden;
            }
        }

        
/* display uploaded file */
    #logo1{
            display: none;
        }

        .uploadedfile{
            display: flex;
        }
        #file-input-label{
            font-weight: 200;
            border: 1px solid #ccc;
            border-radius: 2px;
            padding: 6px 12px;
            margin-right: 10px;
        }
    </style>

</head>
<header>
    <div class="logo">
        <h5 id="tamil"> அறம் வேலைவாய்ப்பு</h5>
    </div>

    <nav>
        <ul>
            <!-- <li><a href="<?php echo baseUrl; ?>">Home</a></li> -->
            <li><a href="<?php echo baseUrl . "#about" ?>">About Us</a></li>
            <!-- <li><a href="#how-it-works">How It Works</a></li> -->
            <li><a href="<?php echo baseUrl . "#provider" ?>">Employer</a></li>
            <li><a href="<?php echo baseUrl . "#seeker" ?>">Employee</a></li>
            <li><a  href="<?php echo baseUrl . "#contact" ?>">Contact</a></li>
            <!-- <li><a href="https://arramjobs.in/blog">Blog</a></li> -->
            <li> <a style="background-color:white;color:grey;padding: 0 10px;border-radius:2px" onclick="return confirm('Are you sure to logout?')" href="<?php echo baseUrl . "providerController/logout" ?>">LogOut</a> </li>
            <!-- <li><a href="#login">Login</a></li> -->
        </ul>
    </nav>
</header>
<br><br><br><br><br>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- To export as pdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

    <!-- <div id="google_translate_element"></div>
  <script src="https://translate.Google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
  <script>
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
    }
    </script> -->

    <!-- <div class="container-fluid"> -->


    <div class="row">

        <nav class=" sidebar col-md-3 col-lg-2 d-md-block">
            <div class="position-sticky">

                <ul class="nav flex-column">
                    <br>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?php echo baseUrl . "providerController/dashboard" ?>">
                            Employer Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo baseUrl . "providerController/providerUpdateRegistration" ?>">
                            Employer Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo baseUrl . "providerController/jobViewTable" ?>">
                            Employer Jobs
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="<?php echo baseUrl . "providerController/matchedCandidate" ?>">
                            Canditates List
                        </a>
                    </li> -->
                    <!-- <li class="nav-item">
                            <a class="nav-link" href="http://localhost/arramjobs/providerController/jobWishlistCandidates">
                            Candidate Wishlists
                            </a>
                         </li> -->
                </ul>
            </div>
        </nav>
    </div>

    <!-- Main content -->
    <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <?php
        if ($this->data['method'] == "dashboard") {
        ?>
            <h1 class="mt-3">
                <center>Welcome To Job Employer Dashboard</center>
            </h1>


        <?php
        } else if ($this->data['method'] == "updateJob") {
        ?>

            <!-- 1 Edit profile ***************************************************************************************************************************** -->

            <div class="container" id="con">
                <h3>
                    <center>Edit Profile</center>
                </h3>

                <div>
                    <?php
                    foreach ($this->data['providerDetail'] as $key => $value) {
                        $file_path = $value['company_logo'];
                    ?>
                        <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 me-5 text-white fs-5">Company Details</div>

                        <form name="forms" enctype="multipart/form-data" onsubmit="return validateprofile()" action="<?php echo baseUrl . "providerController/update_record" ?>" method="post">
                            <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                            <div class=" mb-3 mt-4  ms-5 me-5 w-55  ">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" value='<?php echo $value['company_name']; ?>' id="name" name="name" placeholder="Enter name" onkeypress="return allowOnlyLetters(event, this)">
                                <p id="nameerr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="phno" class="form-label">Number:</label>
                                <input type="number" class="form-control" value='<?php echo $value['company_mobile_number']; ?>' id="phno" name="phno">
                                <p id="pherr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="email" class="form-label">Email-ID:</label>
                                <input type="email" class="form-control" value='<?php echo $value['company_email']; ?>' id="email" name="email" placeholder="Enter email">
                                <p id="mailerr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="addr" class="form-label">Street Address:</label>
                                <input type="address" class="form-control" value='<?php echo $value['street_address']; ?>' id="addr" name="addr" placeholder="Enter address">
                                <p id="adderr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="landmark1" class="form-label">Landmark:</label>
                                <input type="address" class="form-control" value='<?php echo $value['Landmark']; ?>' id="landmark1" name="landmark1" placeholder="Enter landmark">
                                <p id="landerr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="city1" class="form-label">City:</label>
                                <input type="address" class="form-control" value='<?php echo $value['City']; ?>' id="city1" name="city1" placeholder="Enter city">
                                <p id="cityerr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="state1" class="form-label">State:</label>
                                <input type="address" class="form-control" value='<?php echo $value['state']; ?>' id="state1" name="state1" placeholder="Enter state">
                                <p id="stateerr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="district1" class="form-label">District:</label>
                                <input type="address" class="form-control" value='<?php echo $value['district']; ?>' id="district1" name="district1" placeholder="Enter district">
                                <p id="diserr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="pincode1" class="form-label">Pincode:</label>
                                <input type="number" class="form-control" value='<?php echo $value['pincode']; ?>' id="pincode1" name="pincode1" placeholder="Enter pincode">
                                <p id="pinerr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="logo1" class="form-label">Logo:</label>
                                <!-- <input type="file" class="form-control" id="logo1" name="logo1" > -->
                                <div class="uploadedfile">
                                <input type="file" class="form-control" id="logo1" name="logo1" value="<?php echo $value['company_logo']; ?>" onchange="Filevalidation()" />
                                <label id="file-input-label" for="logo1">Change File</label>  
                                <a href="<?php echo $value['company_logourl']; ?>" target="_blank" id="existfile" style="margin-top:10px"><?php echo $value['company_logo']; ?></a>
                                </div>
                                <input type="text" class="form-control" value='<?php echo $value['company_logo']; ?>' name="oldimgname" hidden>
                                <p id="logerr" style="color: red;"></p>
                                <p style="color:grey;textalign:center;font-size:small;">PNG, JPG, JPEG, PDF Maximum size: 1024KB</p>

                            </div>

                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="cwebsite" class="form-label">Website:</label>
                                <input type="text" class="form-control" value='<?php echo $value['companywebsite']; ?>' id="cwebsite1" name="cwebsite1" placeholder="Enter company website">
                                <p id="weberr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55">
                                <label for="cpan" class="form-label">Pan Number:</label>
                                <input type="text" class="form-control" value='<?php echo $value['companypan']; ?>' id="cpan1" name="cpan1" placeholder="Enter company pan number">
                                <p id="weberr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55">
                                <label for="cgst" class="form-label">GST Number:</label>
                                <input type="text" class="form-control" value='<?php echo $value['companygst']; ?>' id="cgst1" name="cgst1" placeholder="Enter company gst number">
                                <p id="weberr" style="color: red;"></p>
                            </div>
                            <br>

                            <div class="text-center p-2 border bg-secondary rounded-3  bg-opacity-75 ms-5 fs-5 me-5 text-light">Contact Person Details</div>

                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="name1" class="form-label">Name:</label>
                                <input type="text" class="form-control" value='<?php echo $value['name']; ?>' id="name1" name="name1" placeholder="Enter name" onkeypress="return allowOnlyLetters1(event, this)">
                                <p id="nameerr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="role" class="form-label">Role:</label>
                                <input type="text" class="form-control" value='<?php echo $value['role']; ?>' id="role" name="role" placeholder="Enter role">
                                <p id="rolerr" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="phno1" class="form-label">Mobile Number:</label>
                                <input type="number" class="form-control" value='<?php echo $value['mobile_number']; ?>' id="phno1" name="phno1" placeholder="Enter mobile number">
                                <p id="pherr1" style="color: red;"></p>
                            </div>
                            <div class="mb-3 mt-4  ms-5 me-5 w-55 ">
                                <label for="mail1" class="form-label">Email-ID:</label>
                                <input type="email" class="form-control" value='<?php echo $value['email']; ?>' id="mail1" name="mail1" placeholder="Enter email">
                                <p id="mailerr1" style="color: red;"></p>
                            </div>

                            <div>
                                <button class="btn  ms-5 mt-3 mb-5  text-white w-100" id="updatesubmit" onclick="return group()">
                                    <center>Update</center>
                                </button>

                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <!-- Display uploaded file -->
            <script>
                document.getElementById("file-input-label").addEventListener("click", function() {
                    document.getElementById("existfile").style.display = "none";
                });

            const fileInput = document.getElementById("logo1");
            const fileInputLabel = document.getElementById("file-input-label");

            fileInput.addEventListener("change", function () {
                if (fileInput.files.length > 0) {
                fileInputLabel.textContent = fileInput.files[0].name;
                } else {
                fileInputLabel.textContent = "Select a File";
                }
            });


            Filevalidation = () => {
            const fi = document.getElementById('logo1');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {
         
                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    if (file >= 1024) {
                        alert(
                          "File too Big, please select a file less than 1mb");
                          return false;
                    } 
                    
                }
            }
        }
            </script>

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
                        alert("Numbers not allowed Please enter only letters");

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
                        alert("Numbers not allowed Please enter only letters");
                        document.getElementById("nameerr1").innerHTML = "Numbers not allowed Please enter only letters";
                        document.forms.name1.focus();
                        return false;

                    }
                }


                function validateprofile(){
                    var namep = document.forms.name.value;
                    var phop = document.forms.phno.value;
                    var mailp = document.forms.email.value;
                    var addp =  document.forms.addr.value;
                    var landp = document.forms.landmark1.value;
                    var cityp = document.forms.city1.value;
                    var distp = document.forms.district1.value;
                    var statep = document.forms.state1.value;
                    var pincodep = document.forms.pincode1.value;
                    var logop = document.forms.logo1.value;
                    var cpname = document.forms.name1.value;
                    var cprole = document.forms.role.value;
                    var cppho = document.forms.phno1.value;
                    var cpmail = document.forms.mail1.value;


                    if(namep == ''){
                        var namesms1 = "Company name must be filled out";
                        document.getElementById("nameerr").innerHTML = namesms1;
                        return false;
                    }

                    if (phop != "") {
                        if (phop.length < 10) {
                            document.getElementById("pherr").innerHTML = "Phone number must be in 10 digits";
                            document.forms.phno.focus();
                            return false;
                        } else if (phop.length > 10) {
                            document.getElementById("pherr").innerHTML = "Phone number should not exceed 10 digits";
                            document.forms.phno.focus();
                            return false;
                        } else {
                            document.getElementById("pherr").innerHTML = "";

                        }
                    } else if (phop == "") {
                        var phsms = "Phone number must be filled out";
                        document.getElementById("pherr").innerHTML = phsms;
                        document.forms.phno.focus();
                        return false;
                    }

                    if (mailp == "") {
                        var emailsms = "Email must be filled out";
                        document.getElementById("mailerr").innerHTML = emailsms;
                        document.forms.email.focus();
                        return false;
                    } else if (mailp != "") {
                        document.getElementById("mailerr").innerHTML = "";
                        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailp)) {
                            document.getElementById("mailerr").innerHTML = "";
                        } else {
                            document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
                            document.forms.email.focus();
                            return false;
                        }
                    }

                    if(addp == '')
                    {
                        var adderr = "Street address must be in filled out";
                        document.getElementById("adderr").innerHTML = adderr;
                        document.forms.addr.focus();
                        return false;
                    }

                    if (landp == ''){
                        var landmark = "Landmark must be in filled out";
                        document.getElementById("landerr1").innerHTML = landmark;
                        document.forms.landmark1.focus();
                        return false;
                    }

                    if(cityp =='')
                    {
                        var city = "City must be in filled out";
                        document.getElementById("cityerr1").innerHTML = city;
                        document.forms.city1.focus();
                        return false;
                    }

                    if(distp =='')
                    {
                        var dist = "District must be in filled out";
                        document.getElementById("diserr1").innerHTML = dist;
                        document.forms.district1.focus();
                        return false;
                    }

                    if(statep == ''){
                        var state = "State must be in filled out";
                        document.getElementById("stateerr1").innerHTML = state;
                        document.forms.state1.focus();
                        return false;
                    }

                    if (pincodep != "") {
                        if (pincodep.length < 6) {
                        document.getElementById("pinerr1").innerHTML = "Pincode  must be in 6 digits";
                        document.forms.pincode1.focus();
                        return false;
                        } else if (pincodep.length > 6) {
                        document.getElementById("pinerr1").innerHTML = "Pincode should not exceed 6 digits";
                        document.forms.pincode1.focus();
                        return false;
                        } else {
                        document.getElementById("pinerr1").innerHTML = "";
                        }
                    } else if (pincodep == "") {
                        var pincode = "Pincode must be filled out";
                        document.getElementById("pinerr1").innerHTML = pincode;
                        document.forms.pincode1.focus();
                        return false;
                    }

                    //  if(logop == '' && document.getElementById('existfile').style.display == "none"){
                    //     var logo = "Logo must be uploaded";
                    //     document.getElementById("logoerr").innerHTML = logo;
                    //     document.forms.logo1.focus();
                    //     return false;
                    // }

                    if(cpname == '')
                    {
                        var namesms2 = "Name must be filled out";
                        document.getElementById("nameerr1").innerHTML = namesms2;
                        document.forms.name1.focus();
                        return false;
                    }

                    if(cprole == ''){
                        var role = "Role must be in filled out";
                        document.getElementById("rolerr").innerHTML = role;
                        document.forms.role.focus();
                        return false;
                    }

                    if (cppho != "") {
                        if (cppho.length < 10) {
                            document.getElementById("pherr1").innerHTML = "Phone number must be in 10 digits";
                            document.forms.phno1.focus();
                            return false;
                        } else if (cppho.length > 10) {
                            document.getElementById("pherr1").innerHTML = "Phone number should not exceed 10 digits";
                            document.forms.phno1.focus();
                            return false;
                        } else {
                            document.getElementById("pherr1").innerHTML = "";

                        }
                    } else if (cppho == "") {
                        var phsms1 = "Mobile number must be filled out";
                        document.getElementById("pherr1").innerHTML = phsms1;
                        document.forms.phno1.focus();
                        return false;
                    }

                    if (cpmail == "") {
                        var emailsms1 = "Email must be filled out";
                        document.getElementById("mailerr1").innerHTML = emailsms1;
                        document.forms.mail1.focus();
                        return false;
                    } else if (cpmail != "") {
                        document.getElementById("mailerr1").innerHTML = "";
                        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(cpmail)) {
                            document.getElementById("mailerr1").innerHTML = "";
                        } else {
                            document.getElementById("mailerr1").innerHTML = "You have entered an invalid email address";
                            document.forms.mail1.focus();
                            return false;
                        }
                    }

                }

            </script>


        <?php
        } else if ($this->data['method'] == "jobview") {
        ?>

            <!-- 2 Job table **************************************************************************************** -->

            <div class="container mt-5">
                <h3 class="text-center">Jobs</h3>
                <!-- <input type="button" class="btn btn-primary float-end" value="+ Add" onclick="registration/provider_addjob"> -->
                <!-- <a id="regis" href="provider_addjob">+ Add</a></p>> -->

                <a id="regis" href="<?php echo baseUrl . "providerController/providerAddJob" ?>">+ Add Job Requirements</a>
                <div style="float:right">
                    <a id="regis" href="<?php echo baseUrl . "providerController/providerUpdateRegistration" ?>">Previous</a>
                    <!-- <a id="regis" href="<?php echo baseUrl . "providerController/matchedCandidate" ?>">Next</a> -->

                </div>

                <div class="clearfix"></div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Company Name</th>
                                <th>Job Title</th>
                                <th>Location</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Experience</th>
                                <th>Number of Openings</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            foreach ($this->data['providerJobs'] as $key => $value) {
                            ?>

                                <?php  $dateap =  $value['date'] ;
                                $twelveHourTime = date(" F j, Y h:i A", strtotime($dateap));
                                ?>

                                <tr>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><?php echo $value['company_name'] ?></td>
                                    <td><?php echo $value['jobSubCategory'] ?> <?php echo $value['jobCategory'] ?></td>
                                    <td><?php echo $value['location'] ?></td>
                                    <td><?php echo $value['job_type'] ?></td>
                                    <td><?php echo $value['salary'] ?></td>
                                    <td><?php echo $value['experience'] ?></td>
                                    <td><?php echo $value['number_of_openings'] ?></td>
                                    <!-- <td><?php echo $value['date'] ?></td> -->
                                    <td><?php echo $twelveHourTime ?></td>

                                    <td>
                                        <div class="btn-group" role="group">
                                            <!-- <button class="btn btn-primary">View</button> -->
                                            <a id="view" href="<?php echo baseUrl . "providerController/jobMatchedTable" ?>/<?php echo $value['jobCategory'] ?>">List</a>
                                            <a id="updates" href="<?php echo baseUrl . "providerController/updateAddNew" ?>/<?php echo $value['id'] ?>">Edit</a>
                                            <!-- <a id="view" onclick="confirm('Are you sure , you want to delete..?')" href="deleteAddJob">delete</a> -->
                                            <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "providerController/deleteAddJob" ?>/<?php echo $value['id'] ?>">Delete</a>

                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>


        <?php
        } else if ($this->data['method'] == "addnew") {
        ?>

            <!-- 2 1 Add new jobs *************************************************************************************************************** -->

            <div class="container" id="addnew">
                <h3>Add New Job Requirement</h3>
                <form name="experienceform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "providerController/insertJob" ?>">

                    <div class="form-group">
                        <label for="company_name">Company Name:</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $_SESSION['jobProviderUsername'] ?>" readonly>
                        <div id="company_name_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" id="category" name="category" >
                            <option value="">Select a category</option>
                            <option value="architech">Architech</option>
                            <option value="developer">Developer</option>
                            <option value="tester">Tester</option>
                            <option value="uiux">UI/UX Design</option>
                            <option value="datascience">Data Scientist</option>
                            <option value="databaseadmin">Database Admin</option>
                            <option value="teacher">Teacher</option>
                            <option value="professor">Professor</option>
                        </select>
                        <div id="category_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="subcategory">Subcategory</label>
                        <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory">
                        <div id="subcategory_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="experience">Experience:</label>
                        <select class="form-control" id="experience" name="experience">
                            <option value="">Select experience</option>
                            <option value="fresher">Fresher</option>
                            <option value="0-2">0-2</option>
                            <option value="3-5">3-5</option>
                            <option value="5-10">5-10</option>
                            <option value="10-15">10-15</option>
                            <option value="15-20">15-20</option>
                            <option value="above 20 years">above 20 years</option>
                        </select>
                        <div id="experience_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="preferred_location">Location:</label>
                        <input type="text" class="form-control" id="preferred_location" name="preferred_location" placeholder="Enter location">
                        <div id="preferred_location_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="jobtype">Job Type :</label>
                        <select class="form-control" id="jobtype" name="jobtype">
                            <option value="">Select jobtype</option>
                            <option value="Fulltime">Full Time</option>
                            <option value="Parttime">Part Time</option>
                        </select>
                        <div id="jobtype_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="expected_salary">Salary:</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" placeholder="Enter salary">
                        <div id="expected_salary_error" class="error"></div>
                    </div>

                    <div class="form-group">
                        <label for="no_of_openings">No of Openings :</label>
                        <input type="number" class="form-control" id="no_of_openings" name="no_of_openings" placeholder="Enter no of openings" style="opacity:1">
                        <div id="no_of_openings_error" class="error"></div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description">
                        <div id="description_error" class="error"></div>
                    </div>
                    <button type="submit" class="btn-primary">Submit</button>
                </form>
            </div>
            <script>
                
                function validateForm() {

                    var company_name = document.getElementById("company_name");
                    var company_nameError = document.getElementById('company_name_error');

                    var category = document.getElementById("category");
                    var categoryError = document.getElementById('category_error');

                    var subcategory = document.getElementById("subcategory");
                    var subcategoryError = document.getElementById('subcategory_error');

                    var experience = document.getElementById("experience");
                    var experienceError = document.getElementById('experience_error');

                    var jobtype = document.getElementById("jobtype");
                    var jobtypeError = document.getElementById('jobtype_error')

                    var preferred_location = document.getElementById("preferred_location");
                    var preferred_locationError = document.getElementById("preferred_location_error");

                    var expected_salary = document.getElementById("expected_salary");
                    var expected_salaryError = document.getElementById('expected_salary_error');


                    var no_of_openings = document.getElementById("no_of_openings");
                    var no_of_openingsError = document.getElementById('no_of_openings_error');

                    var description = document.getElementById("description");
                    var descriptionError = document.getElementById('description_error');


                    if (company_name.value === '') {
                        // alert("Please enter a Company Name");
                        displayError('Company name must be filled out', 'company_name_error');
                        // document.experienceform.company_name.focus();
                        return false;
                        } else if (company_name.value !== '') {
                        company_nameError.innerHTML = '';

                        if (category.value === '') {
                            // alert("Please Select a Category");
                            displayError('Please select a Category', 'category_error');
                            //  document.experienceform.category.focus();
                            return false;
                        } else if (category.value !== '') {
                            categoryError.innerHTML = '';
                        }

                        if (subcategory.value === "") {
                            // alert("Please Select a subcategory");
                            displayError('Please select a subcategory', 'subcategory_error');
                            // document.experienceform.subcategorycategory.focus();
                            return false;
                        } else if (subcategory.value !== '') {
                            subcategoryError.innerHTML = '';
                        }

                        if (experience.value.trim() === "") {
                            // alert("Please enter a experience")
                            displayError('Experience must be filled out', 'experience_error');
                            // document.experienceform.experience.focus();
                            return false;
                        } else if (experience.value !== '') {
                            experienceError.innerHTML = '';
                        }

                        if (preferred_location.value.trim() === "") {
                            // alert("Please enter a preferred location")
                            displayError('location must be filled out', 'preferred_location_error');
                            // document.experienceform.preferred_location.focus();
                            return false;
                        } else if (preferred_location.value !== '') {
                            preferred_locationError.innerHTML = '';
                        }

                        if (jobtype.value.trim() === "") {
                            // alert("Please enter a job type")
                            displayError('Please select a jobtype', 'jobtype_error');
                            // document.experienceform.jobtype.focus();
                            return false;
                        } else if (jobtype.value !== '') {
                            jobtype_error.innerHTML = '';
                        }

                        if (expected_salary.value.trim() === "") {
                            // alert("Please enter a expected salary");
                            displayError('Salary must be filled out', 'expected_salary_error');
                            // document.experienceform.expected_salary.focus();
                            return false;
                        } else if (expected_salary.value !== '') {
                            expected_salary_error.innerHTML = '';
                        }

                        if (no_of_openings.value.trim() === "") {
                            // alert("Please enter a No O Openings")
                            displayError('No of openings must be filled out', 'no_of_openings_error');
                            // document.experienceform.no_of_openings.focus();
                            return false;
                        } else if (no_of_openings.value !== '') {
                            no_of_openings_error.innerHTML = '';
                        }

                        if (description.value.trim() === "") {
                            // alert("Please enter a description")
                            displayError('Description must be filled out', 'description_error');
                            // document.experienceform.description.focus();
                            return false;
                        } else if (description.value !== '') {
                            description_error.innerHTML = '';
                        }

                        return true;
                    }

                    function displayError(message, elementId) {
                        var errorElement = document.getElementById(elementId);
                        errorElement.innerHTML = message;
                        errorElement.style.color = 'red';
                    }

                }
            </script>
        <?php
        } else if ($this->data['method'] == "updateaddnew") {
        ?>

            <!-- 2 2 Edit jobs ******************************************************************************************** -->

            <div class="container" id="updateaddnew">
                <h3>Update Jobs Requirement</h3>
                <form name="experienceform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "providerController/updateInsert" ?>">
                    <?php
                    foreach ($this->data['updateAddNew'] as $key => $value) {
                    ?>

                        <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                        <div class="form-group">
                            <label for="company_name">Company Name:</label>
                            <input type="text" class="form-control" id="company_name" value="<?php echo $value['company_name']; ?>" name="company_name" readonly>
                            <div id="company_name_error" class="error"></div>
                        </div>

                        <div class="form-group">
                            <label for="category">Category:</label>
                            <select class="form-control" id="category" value="<?php echo $value['jobCategory']; ?>" name="category">
                                <option value="">Select a category</option>
                                <option value="architech" <?php if ($value['jobCategory'] === 'architech')
                                                                echo ' selected'; ?>>Architech</option>
                                <option value="developer" <?php if ($value['jobCategory'] === 'developer')
                                                                echo ' selected'; ?>>Developer</option>
                                <option value="tester" <?php if ($value['jobCategory'] === 'tester')
                                                            echo ' selected'; ?>>Tester</option>
                                <option value="uiux" <?php if ($value['jobCategory'] === 'uiux')
                                                            echo ' selected'; ?>>UI/UX Design</option>
                                <option value="datascience" <?php if ($value['jobCategory'] === 'datascience')
                                                                echo ' selected'; ?>>Data Scientist</option>
                                <option value="databaseadmin" <?php if ($value['jobCategory'] === 'databaseadmin')
                                                                    echo ' selected'; ?>>Database Admin</option>
                                <option value="teacher" <?php if ($value['jobCategory'] === 'teacher')
                                                            echo ' selected'; ?>>Teacher</option>
                                <option value="professor" <?php if ($value['jobCategory'] === 'professor')
                                                                echo ' selected'; ?>>Professor</option>
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>
                        <div class="form-group">
                              <label for="subcategory">Subcategory</label>
                              <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['jobSubCategory']; ?>" placeholder="Enter subcategory">
                              <div id="subcategory_error" class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="experience">Experience:</label>
                            <select class="form-control" id="experience" value="<?php echo $value['experience']; ?>" name="experience">
                                <option value="">Select experience</option>
                                <option value="fresher" <?php if ($value['experience'] === 'fresher')
                                                            echo ' selected'; ?>>Fresher</option>
                                <option value="0-2" <?php if ($value['experience'] === '0-2')
                                                        echo ' selected'; ?>>0-2</option>
                                <option value="3-5" <?php if ($value['experience'] === '3-5')
                                                        echo ' selected'; ?>>3-5</option>
                                <option value="5-10" <?php if ($value['experience'] === '5-10')
                                                            echo ' selected'; ?>>5-10</option>
                                <option value="10-15" <?php if ($value['experience'] === '10-15')
                                                            echo ' selected'; ?>>10-15</option>
                                <option value="15-20" <?php if ($value['experience'] === '15-20')
                                                            echo ' selected'; ?>>15-20</option>
                                <option value="above 20 years" <?php if ($value['experience'] === 'above 20 years')
                                                                    echo ' selected'; ?>>above 20 years</option>
                            </select>
                            <div id="experience_error" class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="preferred_location">Preferred Location:</label>
                            <input type="text" class="form-control" id="preferred_location" value="<?php echo $value['location']; ?>" name="preferred_location">
                            <div id="preferred_location_error" class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="jobtype">Job Type:</label>
                            <select class="form-control" id="jobtype" value="<?php echo $value['job_type']; ?>" name="jobtype">
                                <!-- <option value="">Select jobtype</option> -->
                                <option value="FullTime" <?php if ($value['job_type'] === 'Fulltime')
                                                                echo ' selected'; ?>>Full Time</option>
                                <option value="PartTime" <?php if ($value['job_type'] === 'Parttime')
                                                                echo ' selected'; ?>>Part Time</option>
                            </select>
                            <div id="jobtype_error" class="error"></div>
                        </div>

                        <div class="form-group">
                            <label for="expected_salary">Salary:</label>
                            <input type="number" class="form-control" id="expected_salary" value="<?php echo $value['salary']; ?>" name="expected_salary">
                            <div id="expected_salary_error" class="error"></div>
                        </div>

                        <div class="form-group">
                            <label for="no_of_openings">No of Openings:</label>
                            <input type="number" class="form-control" id="no_of_openings" value="<?php echo $value['number_of_openings']; ?>" name="no_of_openings">
                            <div id="no_of_openings_error" class="error"></div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" class="form-control" id="description" value="<?php echo $value['description']; ?>" name="description">
                            <div id="description_error" class="error"></div>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                </form>
            <?php
                    }
            ?>
            </div>
            <script>
               
                function validateForm() {

                    var company_name = document.getElementById("company_name");
                    var company_nameError = document.getElementById('company_name_error');

                    var category = document.getElementById("category");
                    var categoryError = document.getElementById('category_error');

                    var subcategory = document.getElementById("subcategory");
                    var subcategoryError = document.getElementById('subcategory_error');

                    var experience = document.getElementById("experience");
                    var experienceError = document.getElementById('experience_error');

                    var jobtype = document.getElementById("jobtype");
                    var jobtypeError = document.getElementById('jobtype_error')

                    var preferred_location = document.getElementById("preferred_location");
                    var preferred_locationError = document.getElementById("preferred_location_error");

                    var expected_salary = document.getElementById("expected_salary");
                    var expected_salaryError = document.getElementById('expected_salary_error');


                    var no_of_openings = document.getElementById("no_of_openings");
                    var no_of_openingsError = document.getElementById('no_of_openings_error');

                    var description = document.getElementById("description");
                    var descriptionError = document.getElementById('description_error');


                    if (company_name.value === '') {
                        // alert("Please Enter a Company Name");
                        displayError('Company name must be filled out', 'company_name_error');
                        return false;
                    } else if (company_name.value !== '') {
                        company_nameError.innerHTML = '';


                        if (category.value === '') {
                            // alert("Please select a category");
                            displayError('Please select a category', 'category_error');
                            return false;
                        } else if (category.value !== '') {
                            categoryError.innerHTML = '';
                        }


                        if (subcategory.value === "") {
                            // alert("Please select a subcategory")
                            displayError('Please select a subcategory', 'subcategory_error');
                            return false;
                        } else if (subcategory.value !== '') {
                            subcategoryError.innerHTML = '';
                        }


                        if (experience.value.trim() === "") {
                            // alert("Please enter a experience");
                            displayError('Experience must be filled out', 'experience_error');
                            return false;
                        } else if (experience.value !== '') {
                            experienceError.innerHTML = '';
                        }



                        if (preferred_location.value.trim() === "") {
                            // alert("Please enter a preferred location");
                            displayError('Location must be filled out', 'preferred_location_error');
                            return false;
                        } else if (preferred_location.value !== '') {
                            preferred_locationError.innerHTML = '';
                        }



                        if (jobtype.value.trim() === "") {
                            // alert("Please enter a job type");
                            displayError('Please select a jobtype', 'jobtype_error');
                            return false;
                        } else if (jobtype.value !== '') {
                            jobtype_error.innerHTML = '';
                        }



                        if (expected_salary.value.trim() === "") {
                            // alert("Please enter a expected salary");
                            displayError('Salary must be filled out', 'expected_salary_error');
                            return false;
                        } else if (expected_salary.value !== '') {
                            expected_salary_error.innerHTML = '';
                        }

                        if (no_of_openings.value.trim() === "") {
                            // alert("Please enter a No Of Openings");
                            displayError('No of openings must be filled out', 'no_of_openings_error');
                            return false;
                        } else if (no_of_openings.value !== '') {
                            no_of_openings_error.innerHTML = '';
                        }



                        if (description.value.trim() === "") {
                            // alert("Please enter a description");
                            displayError('Description must be filled out', 'description_error');
                            return false;
                        } else if (description.value !== '') {
                            description_error.innerHTML = '';
                        }

                        return true;
                    }

                    function displayError(message, elementId) {
                        var errorElement = document.getElementById(elementId);
                        errorElement.innerHTML = message;
                        errorElement.style.color = 'red';
                    }

                }
            </script>
        <?php
        } else if ($this->data['method'] == "match") {
        ?>

            <!-- 2  Matched canditate ********************************************************************************************************* -->

            <div>
                <div class="container mt-5">
                    <h3 class="text-center">Job Matched Candidates</h3>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped " id="matchtable" >
                            <thead>
                                <tr>
                                <th>S.No</th>
                                    <th>Name</th>
                                    <!-- <th>Degree</th> -->
                                    <th>Sub Category</th>
                                    <!-- <th>Percentage</th> -->
                                    <th>Experience</th>
                                    <th>Skill Name</th>
                                    <!-- <th>Skills</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $count = 1;
                                foreach ($this->data['response'] as $key => $value) {
                                ?>
                                    <tr>
                                        <td><?php echo $count++; ?>.</td>
                                        <td><?php echo $value['name'] ?></td>
                                        <td><?php echo $value['oisc'] ?></td>
                                        <td><?php echo $value['exps'] ?></td>
                                        <td><?php echo $value['skills'] ?></td>
                                        <!-- <td><?php echo $value['skill'] ?></td> -->
                                        <td>
                                            <div class="btn-group" role="group">
                                                <!-- <button class="btn btn-primary">View</button> -->
                                                <a id="view" href="<?php echo baseUrl . "providerController/resumeCard" ?>/<?php echo $value['seekerId'] ?>">Candidate Resume</a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                <?php
                                }
                                ?>
                            </tbody>
                            <div style="display:flex;justify-content:space-between;padding:20px">
                            <p>Registered id : <?php echo $employerid = $_SESSION['employerid']; ?></p>
                            <p>Category : <?php echo $this->data['category'] ?></p>
                            <p >Count :<?php echo $count-1; ?></p>
                            </div>
                        </table>
                        <h2 id="nomatches" style="display:none;text-align:center">No Matches Available.</h2>
                        <?php
                        if($count == "1"){
                            ?>
                            <script>
                            document.getElementById("nomatches").style.display = "block";
                            document.getElementById("matchtable").style.display = "none";
                            </script>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

            <script>
                    function updateSubcategories() {
                    var categorySelect = document.getElementById("category");
                    var subcategorySelect = document.getElementById("subcategory");
                    var selectedCategory = categorySelect.value;


                    subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                    if (selectedCategory === "architech") {
                        addSubcategoryOption("Architect");
                        addSubcategoryOption("Senior ");
                        addSubcategoryOption("Design ");
                        addSubcategoryOption("Project ");
                        addSubcategoryOption("Principal ");
                        addSubcategoryOption("Landscape");
                        addSubcategoryOption("Urban Planner");
                        addSubcategoryOption("Interior Designer");
                        addSubcategoryOption("Architectural Technologist");
                        addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                        addSubcategoryOption("Sustainable Design Consultant");
                        addSubcategoryOption("Architectural Drafter");
                        addSubcategoryOption("Architectural Visualization Artist");
                        addSubcategoryOption("Urban Designer");
                        addSubcategoryOption("Historic Preservation");
                        addSubcategoryOption("Residential Architect");
                        addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                        addSubcategoryOption("Architectural Educator");
                        addSubcategoryOption("Construction Project Manage");
                        addSubcategoryOption("Industrial Designer");
                        addSubcategoryOption("Healthcare Facility Planner");
                        addSubcategoryOption("Retail Space Designer");

                        addSubcategoryOption()
                    } else if (selectedCategory === "developer") {
                        addSubcategoryOption("Python Software Engineer");
                        addSubcategoryOption("Python");
                        addSubcategoryOption("Python Data Scientist");
                        addSubcategoryOption("Python Machine Learning Engineer");
                        addSubcategoryOption("Python Automation");
                        addSubcategoryOption("Java Software ");
                        addSubcategoryOption("Java");
                        addSubcategoryOption("Java Full Stack ");
                        addSubcategoryOption("Java Android ");
                        addSubcategoryOption("Java Spring ");
                        addSubcategoryOption("Java Microservices ");
                        addSubcategoryOption("JavaScript ");
                        addSubcategoryOption("Front-end ");
                        addSubcategoryOption("Node.js ");
                        addSubcategoryOption("React ");
                        addSubcategoryOption("Angular ");
                        addSubcategoryOption("Vue.js ");
                        addSubcategoryOption("Full Stack JavaScript ");
                        addSubcategoryOption("C#  ");
                        addSubcategoryOption(".NET ");
                        addSubcategoryOption("ASP.NET ");
                        addSubcategoryOption("Unity ");
                        addSubcategoryOption("Xamarin ");
                        addSubcategoryOption("C++  ");
                        addSubcategoryOption("Game(using C++)");
                        addSubcategoryOption("C++ Systems ");
                        addSubcategoryOption("PHP");
                        addSubcategoryOption("WordPress");
                        addSubcategoryOption("Laravel ");
                        addSubcategoryOption("Symfony ");
                        addSubcategoryOption("Ruby ");
                        addSubcategoryOption("Ruby on Rails ");
                        addSubcategoryOption("Swift ");
                        addSubcategoryOption("iOS (using Swift)");
                        addSubcategoryOption("macOS (using Swift)");
                        addSubcategoryOption("Kotlin ");
                        addSubcategoryOption("Android  (using Kotlin)");
                        addSubcategoryOption("Go  ");
                        addSubcategoryOption("Rust  ");
                        addSubcategoryOption("Systems  (using Rust");
                        addSubcategoryOption("TypeScript  ");
                        addSubcategoryOption("Front-end  (using TypeScript)");
                        addSubcategoryOption("SQL ");
                        addSubcategoryOption("Database ");
                        addSubcategoryOption("Scala  ");
                        addSubcategoryOption("Haskell  ");
                        addSubcategoryOption("Perl   ");
                        addSubcategoryOption("Lua   ");
                        addSubcategoryOption("Game  (using Lua) ");
                        addSubcategoryOption("MATLAB   ");
                        addSubcategoryOption("Data Analyst (using MATLAB) ");
                    } else if (selectedCategory === "tester") {
                        addSubcategoryOption("Software ");
                        addSubcategoryOption("Test Engineer");
                        addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                        addSubcategoryOption("Test Automation Engineer");
                        addSubcategoryOption("Manual ");
                        addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                        addSubcategoryOption("Test Manager");
                        addSubcategoryOption("Performance ");
                        addSubcategoryOption("Usability ");
                        addSubcategoryOption("Regression ");
                        addSubcategoryOption("User Acceptance ");
                        addSubcategoryOption("Security ");
                        addSubcategoryOption("Mobile App ");
                        addSubcategoryOption("Game ");
                        addSubcategoryOption("Functional ");
                        addSubcategoryOption("Test Architect");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Continuous Integration ");
                        addSubcategoryOption("Load ");
                        addSubcategoryOption("Test Designer");
                        addSubcategoryOption("Test Technician");
                        addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Compliance ");
                    } else if (selectedCategory === "uiux") {
                        addSubcategoryOption("UI/UX Designer");
                        addSubcategoryOption("User Experience Designer");
                        addSubcategoryOption("User Interface Designer");
                        addSubcategoryOption("Interaction Designer");
                        addSubcategoryOption("Visual Designer");
                        addSubcategoryOption("UX Researcher");
                        addSubcategoryOption("UI/UX Architect");
                        addSubcategoryOption("Information Architect");
                        addSubcategoryOption("UX Strategist");
                        addSubcategoryOption("Product Designer");
                        addSubcategoryOption("User-Centered Design Specialist");
                        addSubcategoryOption("Usability Analyst");
                        addSubcategoryOption("UI/UX Developer");
                        addSubcategoryOption("Mobile App Designer");
                        addSubcategoryOption("Web Designer");
                        addSubcategoryOption("Visual Experience Designer");
                        addSubcategoryOption("UX Content Strategist");
                        addSubcategoryOption("Interaction Architect");
                        addSubcategoryOption("UX/UI Illustrator");
                        addSubcategoryOption("User Interface Animator");
                        addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                        addSubcategoryOption("Accessibility Designer ");
                        addSubcategoryOption("Prototype Designer ");
                        addSubcategoryOption("UI/UX Lead ");
                        addSubcategoryOption("Design Systems Manager ");

                    } else if (selectedCategory === "datascience") {
                        addSubcategoryOption("Data Scientist");
                        addSubcategoryOption("Senior");
                        addSubcategoryOption("Machine Learning Engineer");
                        addSubcategoryOption("Data Analyst");
                        addSubcategoryOption("Senior Data Analyst");
                        addSubcategoryOption("Statistician");
                        addSubcategoryOption("Business Intelligence Analyst");
                        addSubcategoryOption("Quantitative Analyst (Quant)");
                        addSubcategoryOption("Data Engineer");
                        addSubcategoryOption("Data Architect");
                        addSubcategoryOption("AI Research Scientist");
                        addSubcategoryOption("Predictive Modeler");
                        addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                        addSubcategoryOption("Computer Vision Engineer");
                        addSubcategoryOption("Big Data Engineer");
                        addSubcategoryOption("Analytics Manager");
                        addSubcategoryOption("Data Science Manager");
                        addSubcategoryOption("Chief Data Officer (CDO)");
                        addSubcategoryOption("Research Scientist (AI/ML)");
                        addSubcategoryOption("Decision Scientist");
                        addSubcategoryOption("Marketing Analyst");
                        addSubcategoryOption("Operations Research Analyst");
                        addSubcategoryOption("Data Visualization Specialist");
                        addSubcategoryOption("Customer Insights Analyst");
                        addSubcategoryOption("Fraud Analyst");

                    } else if (selectedCategory === "databaseadmin") {
                        addSubcategoryOption("Database  (DBA)");
                        addSubcategoryOption("Senior  Administrator");
                        addSubcategoryOption("Database Engineer");
                        addSubcategoryOption("Database Architect");
                        addSubcategoryOption("Database Analyst");
                        addSubcategoryOption("Data Warehouse ");
                        addSubcategoryOption("SQL Server");
                        addSubcategoryOption("Oracle Database Administrator");
                        addSubcategoryOption("MySQL Database Administrator");
                        addSubcategoryOption("PostgreSQL Database Administrator");
                        addSubcategoryOption("MongoDB Administrator");
                        addSubcategoryOption("NoSQL Database Administrator");
                        addSubcategoryOption("DBMS Administrator (Database Management System)");
                        addSubcategoryOption("Database Operations Manager");
                        addSubcategoryOption("Database Performance Tuning Specialist");
                        addSubcategoryOption("Data Migration Specialist");
                        addSubcategoryOption("Database Security Administrator");
                        addSubcategoryOption("Database Backup and Recovery Specialist");
                        addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                        addSubcategoryOption("Database Compliance Officer");
                        addSubcategoryOption("Database DevOps Engineer");
                        addSubcategoryOption("Database Automation Engineer");
                        addSubcategoryOption("Database Replication Specialist");
                        addSubcategoryOption("Data Governance Manager");
                        addSubcategoryOption("Data Steward");
                    } else if (selectedCategory === "teacher") {
                        addSubcategoryOption("Tamil");
                        addSubcategoryOption("Mathematics ");
                        addSubcategoryOption("Math Instructor");
                        addSubcategoryOption("Algebra ");
                        addSubcategoryOption("Geometry ");
                        addSubcategoryOption("Calculus ");
                        addSubcategoryOption("Statistics ");
                        addSubcategoryOption("Math Tutor");
                        addSubcategoryOption("Math Coach");
                        addSubcategoryOption("Math Curriculum Specialist");
                        addSubcategoryOption("Math Department Chair");
                        addSubcategoryOption("English ");
                        addSubcategoryOption("Language Arts ");
                        addSubcategoryOption("Literature ");
                        addSubcategoryOption("Writing Instructor");
                        addSubcategoryOption("Creative Writing ");
                        addSubcategoryOption("English as a Second Language (ESL) ");
                        addSubcategoryOption("Reading Specialist");
                        addSubcategoryOption("English Tutor");
                        addSubcategoryOption("English Department Chair");
                        addSubcategoryOption("Science ");
                        addSubcategoryOption("Biology ");
                        addSubcategoryOption("Chemistry ");
                        addSubcategoryOption("Physics ");
                        addSubcategoryOption("Environmental Science ");
                        addSubcategoryOption("Earth Science ");
                        addSubcategoryOption("Anatomy and Physiology ");
                        addSubcategoryOption("Science Lab Instructor");
                        addSubcategoryOption("Science Curriculum Specialist");
                        addSubcategoryOption("Social Studies ");
                        addSubcategoryOption("History ");
                        addSubcategoryOption("Geography ");
                        addSubcategoryOption("Civics ");
                        addSubcategoryOption("Government ");
                        addSubcategoryOption("Economics ");
                        addSubcategoryOption("World History ");
                        addSubcategoryOption("Social Studies Department Chair");
                        addSubcategoryOption("Foreign Language ");
                        addSubcategoryOption("Language Instructor");
                        addSubcategoryOption("Spanish ");
                        addSubcategoryOption("French ");
                        addSubcategoryOption("German ");
                        addSubcategoryOption("Chinese ");
                        addSubcategoryOption("Language Lab Coordinator");
                        addSubcategoryOption("Physical Education ");
                        addSubcategoryOption("PE Instructor");
                        addSubcategoryOption("Fitness Coach");
                        addSubcategoryOption("Health Education ");
                        addSubcategoryOption("Sports Coach");
                        addSubcategoryOption("Physical Education Department Chair");
                        addSubcategoryOption("Art ");
                        addSubcategoryOption("Music ");
                        addSubcategoryOption("Drama ");
                        addSubcategoryOption("Visual Arts ");
                        addSubcategoryOption("Choir Director");
                        addSubcategoryOption("Band ");
                        addSubcategoryOption("Art History ");
                        addSubcategoryOption("Special Education ");
                        addSubcategoryOption("Learning Support ");
                        addSubcategoryOption("Resource ");
                        addSubcategoryOption("Inclusion ");
                        addSubcategoryOption("Autism Specialist");
                        addSubcategoryOption("Behavioral Interventionist");
                        addSubcategoryOption("Vocational Teacher");
                        addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                        addSubcategoryOption("Culinary Arts Instructor");
                        addSubcategoryOption("Automotive Technology ");
                        addSubcategoryOption("Computer Science ");
                        addSubcategoryOption("Digital Media Instructor");
                    } else if (selectedCategory === "professor") {
                        addSubcategoryOption("University ");
                        addSubcategoryOption("Assistant ");
                        addSubcategoryOption("Associate ");
                        addSubcategoryOption("Full ");
                        addSubcategoryOption("Distinguished ");
                        addSubcategoryOption("Adjunct ");
                        addSubcategoryOption("Visiting ");
                        addSubcategoryOption("Research ");
                        addSubcategoryOption("Clinical ");
                        addSubcategoryOption("Philosophy");
                        addSubcategoryOption("Professor of History");
                        addSubcategoryOption("English");
                        addSubcategoryOption("Psychology");
                        addSubcategoryOption("Sociology");
                        addSubcategoryOption("Political Science");
                        addSubcategoryOption("Anthropology");
                        addSubcategoryOption("Linguistics");
                        addSubcategoryOption("Biology");
                        addSubcategoryOption("Chemistry");
                        addSubcategoryOption("Physics");
                        addSubcategoryOption("Mathematics");
                        addSubcategoryOption("Geology");
                        addSubcategoryOption("Astronomy");
                        addSubcategoryOption(" Environmental Science");
                        addSubcategoryOption("Computer Science");
                        addSubcategoryOption("Electrical Engineering");
                        addSubcategoryOption("Mechanical Engineering");
                        addSubcategoryOption("Civil Engineering");
                        addSubcategoryOption("Chemical Engineering");
                        addSubcategoryOption("Information Technology");
                        addSubcategoryOption("Business Administration");
                        addSubcategoryOption("Economics");
                        addSubcategoryOption("Finance");
                        addSubcategoryOption("Marketing");
                        addSubcategoryOption("Management");
                        addSubcategoryOption("Accounting");
                        addSubcategoryOption("Fine Arts");
                        addSubcategoryOption("Music");
                        addSubcategoryOption("Visual Arts");
                        addSubcategoryOption("Theater");
                        addSubcategoryOption("Dance");
                        addSubcategoryOption("Film Studies");
                        addSubcategoryOption("Educational Psychology");
                        addSubcategoryOption("Medicine");
                        addSubcategoryOption("Nursing");
                        addSubcategoryOption("Public Health");
                        addSubcategoryOption("Pharmacy");
                        addSubcategoryOption("Dentistry");
                        addSubcategoryOption("Law");
                        addSubcategoryOption("Constitutional Law");
                        addSubcategoryOption("Criminal Law");
                        addSubcategoryOption("International Law");
                        addSubcategoryOption("Environmental Law");
                        addSubcategoryOption("Social Work");
                        addSubcategoryOption("Social Welfare");
                        addSubcategoryOption("Clinical Social Work");
                        addSubcategoryOption("Library Science");
                        addSubcategoryOption("Information Studies");
                    }

                    subcategorySelect.disabled = false;
                }

                function addSubcategoryOption(subcategory) {
                    var subcategorySelect = document.getElementById("subcategory");
                    var option = document.createElement("option");
                    option.value = subcategory;
                    option.text = subcategory;
                    subcategorySelect.appendChild(option);
                }

                function validateForm() {

                    var category = document.getElementById("category");
                    var categoryError = document.getElementById('category_error');

                    var subcategory = document.getElementById("subcategory");
                    var subcategoryError = document.getElementById('subcategory_error');

                    if (category.value === '') {
                        alert("Please select a category");
                        displayError('Category is required.', 'category_error');
                        return false;
                    } else if (category.value !== '') {
                        categoryError.innerHTML = '';
                    }


                    if (subcategory.value === "") {
                        alert("Please select a subcategory");
                        displayError('Please select a subcategory.', 'subcategory_error');
                        return false;
                    } else if (subcategory.value !== '') {
                        subcategoryError.innerHTML = '';
                    }
                }
            </script>


        <?php
        } else if ($this->data['method'] == "allCandidate") {
        ?>

            <!-- No need -->
            <!-- 3 List of Canditates *************************************************************************************************************** -->

            <div class="container mt-5">
                <h3 class="text-center">All Candidates</h3>
                <!-- <div>
<div class="input-group">
</div>
</div> -->
                <a id="regis" href="<?php echo baseUrl . "providerController/jobViewTable" ?>">Previous</a>
                <br>

                <tbody>
                    <br>
                    <form action="<?php echo baseUrl . "providerController/filterAllCandidate" ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category" id="lab1">Category:</label>
                                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()" required>
                                        <option value="">Select a category</option>
                                        <option value="architech">Architech</option>
                                        <option value="developer">Developer</option>
                                        <option value="tester">Tester</option>
                                        <option value="uiux">UI/UX Design</option>
                                        <option value="datascience">Data Scientist</option>
                                        <option value="databaseadmin">Database Admin</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="professor">Professor</option>
                                    </select>
                                    <div id="category_error" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subcategory" id="lab">Subcategory:</label>
                                    <select class="form-control" id="subcategory" name="subcategory" disabled required>
                                        <option value="">Select a subcategory</option>
                                    </select>
                                    <div id="subcategory_error" class="error"></div>
                                </div>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="submit" id="search" onclick="">Search</button>
                            </div>
                    </form>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>District</th>
                            <!-- <th>Skills</th> -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $count = 1;

                        foreach ($this->data['candidateView'] as $key => $value) {

                        ?>
                            <tr>
                                <td><?php echo $count++; ?></td>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['dob'] ?></td>
                                <td><?php echo $value['gender'] ?></td>
                                <td><?php echo $value['dist'] ?></td>
                                <!-- <td><?php echo $value['skill'] ?></td> -->
                                <td>
                                    <div class="btn-group" role="group">
                                        <a id="view" href="<?php echo baseUrl . "providerController/resumeCard" ?>/<?php echo $value['seekerId'] ?>">View</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- </div> -->
            <script>
                function updateSubcategories() {
                    var categorySelect = document.getElementById("category");
                    var subcategorySelect = document.getElementById("subcategory");
                    var selectedCategory = categorySelect.value;

                    // Reset subcategory options
                    subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                    if (selectedCategory === "architech") {
                        addSubcategoryOption("Architect");
                        addSubcategoryOption("Senior ");
                        addSubcategoryOption("Design ");
                        addSubcategoryOption("Project ");
                        addSubcategoryOption("Principal ");
                        addSubcategoryOption("Landscape");
                        addSubcategoryOption("Urban Planner");
                        addSubcategoryOption("Interior Designer");
                        addSubcategoryOption("Architectural Technologist");
                        addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                        addSubcategoryOption("Sustainable Design Consultant");
                        addSubcategoryOption("Architectural Drafter");
                        addSubcategoryOption("Architectural Visualization Artist");
                        addSubcategoryOption("Urban Designer");
                        addSubcategoryOption("Historic Preservation");
                        addSubcategoryOption("Residential Architect");
                        addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                        addSubcategoryOption("Architectural Educator");
                        addSubcategoryOption("Construction Project Manage");
                        addSubcategoryOption("Industrial Designer");
                        addSubcategoryOption("Healthcare Facility Planner");
                        addSubcategoryOption("Retail Space Designer");

                        addSubcategoryOption()
                    } else if (selectedCategory === "developer") {
                        addSubcategoryOption("Python Software Engineer");
                        addSubcategoryOption("Python");
                        addSubcategoryOption("Python Data Scientist");
                        addSubcategoryOption("Python Machine Learning Engineer");
                        addSubcategoryOption("Python Automation");
                        addSubcategoryOption("Java Software ");
                        addSubcategoryOption("Java");
                        addSubcategoryOption("Java Full Stack ");
                        addSubcategoryOption("Java Android ");
                        addSubcategoryOption("Java Spring ");
                        addSubcategoryOption("Java Microservices ");
                        addSubcategoryOption("JavaScript ");
                        addSubcategoryOption("Front-end ");
                        addSubcategoryOption("Node.js ");
                        addSubcategoryOption("React ");
                        addSubcategoryOption("Angular ");
                        addSubcategoryOption("Vue.js ");
                        addSubcategoryOption("Full Stack JavaScript ");
                        addSubcategoryOption("C#  ");
                        addSubcategoryOption(".NET ");
                        addSubcategoryOption("ASP.NET ");
                        addSubcategoryOption("Unity ");
                        addSubcategoryOption("Xamarin ");
                        addSubcategoryOption("C++  ");
                        addSubcategoryOption("Game(using C++)");
                        addSubcategoryOption("C++ Systems ");
                        addSubcategoryOption("PHP");
                        addSubcategoryOption("WordPress");
                        addSubcategoryOption("Laravel ");
                        addSubcategoryOption("Symfony ");
                        addSubcategoryOption("Ruby ");
                        addSubcategoryOption("Ruby on Rails ");
                        addSubcategoryOption("Swift ");
                        addSubcategoryOption("iOS (using Swift)");
                        addSubcategoryOption("macOS (using Swift)");
                        addSubcategoryOption("Kotlin ");
                        addSubcategoryOption("Android  (using Kotlin)");
                        addSubcategoryOption("Go  ");
                        addSubcategoryOption("Rust  ");
                        addSubcategoryOption("Systems  (using Rust");
                        addSubcategoryOption("TypeScript  ");
                        addSubcategoryOption("Front-end  (using TypeScript)");
                        addSubcategoryOption("SQL ");
                        addSubcategoryOption("Database ");
                        addSubcategoryOption("Scala  ");
                        addSubcategoryOption("Haskell  ");
                        addSubcategoryOption("Perl   ");
                        addSubcategoryOption("Lua   ");
                        addSubcategoryOption("Game  (using Lua) ");
                        addSubcategoryOption("MATLAB   ");
                        addSubcategoryOption("Data Analyst (using MATLAB) ");
                    } else if (selectedCategory === "tester") {
                        addSubcategoryOption("Software ");
                        addSubcategoryOption("Test Engineer");
                        addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                        addSubcategoryOption("Test Automation Engineer");
                        addSubcategoryOption("Manual ");
                        addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                        addSubcategoryOption("Test Manager");
                        addSubcategoryOption("Performance ");
                        addSubcategoryOption("Usability ");
                        addSubcategoryOption("Regression ");
                        addSubcategoryOption("User Acceptance ");
                        addSubcategoryOption("Security ");
                        addSubcategoryOption("Mobile App ");
                        addSubcategoryOption("Game ");
                        addSubcategoryOption("Functional ");
                        addSubcategoryOption("Test Architect");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Continuous Integration ");
                        addSubcategoryOption("Load ");
                        addSubcategoryOption("Test Designer");
                        addSubcategoryOption("Test Technician");
                        addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                        // addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Compliance ");
                    } else if (selectedCategory === "uiux") {
                        addSubcategoryOption("UI/UX Designer");
                        addSubcategoryOption("User Experience Designer");
                        addSubcategoryOption("User Interface Designer");
                        addSubcategoryOption("Interaction Designer");
                        addSubcategoryOption("Visual Designer");
                        addSubcategoryOption("UX Researcher");
                        addSubcategoryOption("UI/UX Architect");
                        addSubcategoryOption("Information Architect");
                        addSubcategoryOption("UX Strategist");
                        addSubcategoryOption("Product Designer");
                        addSubcategoryOption("User-Centered Design Specialist");
                        addSubcategoryOption("Usability Analyst");
                        addSubcategoryOption("UI/UX Developer");
                        addSubcategoryOption("Mobile App Designer");
                        addSubcategoryOption("Web Designer");
                        addSubcategoryOption("Visual Experience Designer");
                        addSubcategoryOption("UX Content Strategist");
                        addSubcategoryOption("Interaction Architect");
                        addSubcategoryOption("UX/UI Illustrator");
                        addSubcategoryOption("User Interface Animator");
                        addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                        addSubcategoryOption("Accessibility Designer ");
                        addSubcategoryOption("Prototype Designer ");
                        addSubcategoryOption("UI/UX Lead ");
                        addSubcategoryOption("Design Systems Manager ");

                    } else if (selectedCategory === "datascience") {
                        addSubcategoryOption("Data Scientist");
                        addSubcategoryOption("Senior");
                        addSubcategoryOption("Machine Learning Engineer");
                        addSubcategoryOption("Data Analyst");
                        addSubcategoryOption("Senior Data Analyst");
                        addSubcategoryOption("Statistician");
                        addSubcategoryOption("Business Intelligence Analyst");
                        addSubcategoryOption("Quantitative Analyst (Quant)");
                        addSubcategoryOption("Data Engineer");
                        addSubcategoryOption("Data Architect");
                        addSubcategoryOption("AI Research Scientist");
                        addSubcategoryOption("Predictive Modeler");
                        addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                        addSubcategoryOption("Computer Vision Engineer");
                        addSubcategoryOption("Big Data Engineer");
                        addSubcategoryOption("Analytics Manager");
                        addSubcategoryOption("Data Science Manager");
                        addSubcategoryOption("Chief Data Officer (CDO)");
                        addSubcategoryOption("Research Scientist (AI/ML)");
                        addSubcategoryOption("Decision Scientist");
                        addSubcategoryOption("Marketing Analyst");
                        addSubcategoryOption("Operations Research Analyst");
                        addSubcategoryOption("Data Visualization Specialist");
                        addSubcategoryOption("Customer Insights Analyst");
                        addSubcategoryOption("Fraud Analyst");

                    } else if (selectedCategory === "databaseadmin") {
                        addSubcategoryOption("Database  (DBA)");
                        addSubcategoryOption("Senior  Administrator");
                        addSubcategoryOption("Database Engineer");
                        addSubcategoryOption("Database Architect");
                        addSubcategoryOption("Database Analyst");
                        addSubcategoryOption("Data Warehouse ");
                        addSubcategoryOption("SQL Server");
                        addSubcategoryOption("Oracle Database Administrator");
                        addSubcategoryOption("MySQL Database Administrator");
                        addSubcategoryOption("PostgreSQL Database Administrator");
                        addSubcategoryOption("MongoDB Administrator");
                        addSubcategoryOption("NoSQL Database Administrator");
                        addSubcategoryOption("DBMS Administrator (Database Management System)");
                        addSubcategoryOption("Database Operations Manager");
                        addSubcategoryOption("Database Performance Tuning Specialist");
                        addSubcategoryOption("Data Migration Specialist");
                        addSubcategoryOption("Database Security Administrator");
                        addSubcategoryOption("Database Backup and Recovery Specialist");
                        addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                        addSubcategoryOption("Database Compliance Officer");
                        addSubcategoryOption("Database DevOps Engineer");
                        addSubcategoryOption("Database Automation Engineer");
                        addSubcategoryOption("Database Replication Specialist");
                        addSubcategoryOption("Data Governance Manager");
                        addSubcategoryOption("Data Steward");
                    } else if (selectedCategory === "teacher") {
                        addSubcategoryOption("Tamil");
                        addSubcategoryOption("Mathematics ");
                        addSubcategoryOption("Math Instructor");
                        addSubcategoryOption("Algebra ");
                        addSubcategoryOption("Geometry ");
                        addSubcategoryOption("Calculus ");
                        addSubcategoryOption("Statistics ");
                        addSubcategoryOption("Math Tutor");
                        addSubcategoryOption("Math Coach");
                        addSubcategoryOption("Math Curriculum Specialist");
                        addSubcategoryOption("Math Department Chair");
                        addSubcategoryOption("English ");
                        addSubcategoryOption("Language Arts ");
                        addSubcategoryOption("Literature ");
                        addSubcategoryOption("Writing Instructor");
                        addSubcategoryOption("Creative Writing ");
                        addSubcategoryOption("English as a Second Language (ESL) ");
                        addSubcategoryOption("Reading Specialist");
                        addSubcategoryOption("English Tutor");
                        addSubcategoryOption("English Department Chair");
                        addSubcategoryOption("Science ");
                        addSubcategoryOption("Biology ");
                        addSubcategoryOption("Chemistry ");
                        addSubcategoryOption("Physics ");
                        addSubcategoryOption("Environmental Science ");
                        addSubcategoryOption("Earth Science ");
                        addSubcategoryOption("Anatomy and Physiology ");
                        addSubcategoryOption("Science Lab Instructor");
                        addSubcategoryOption("Science Curriculum Specialist");
                        addSubcategoryOption("Social Studies ");
                        addSubcategoryOption("History ");
                        addSubcategoryOption("Geography ");
                        addSubcategoryOption("Civics ");
                        addSubcategoryOption("Government ");
                        addSubcategoryOption("Economics ");
                        addSubcategoryOption("World History ");
                        addSubcategoryOption("Social Studies Department Chair");
                        addSubcategoryOption("Foreign Language ");
                        addSubcategoryOption("Language Instructor");
                        addSubcategoryOption("Spanish ");
                        addSubcategoryOption("French ");
                        addSubcategoryOption("German ");
                        addSubcategoryOption("Chinese ");
                        addSubcategoryOption("Language Lab Coordinator");
                        addSubcategoryOption("Physical Education ");
                        addSubcategoryOption("PE Instructor");
                        addSubcategoryOption("Fitness Coach");
                        addSubcategoryOption("Health Education ");
                        addSubcategoryOption("Sports Coach");
                        addSubcategoryOption("Physical Education Department Chair");
                        addSubcategoryOption("Art ");
                        addSubcategoryOption("Music ");
                        addSubcategoryOption("Drama ");
                        addSubcategoryOption("Visual Arts ");
                        addSubcategoryOption("Choir Director");
                        addSubcategoryOption("Band ");
                        addSubcategoryOption("Art History ");
                        addSubcategoryOption("Special Education ");
                        addSubcategoryOption("Learning Support ");
                        addSubcategoryOption("Resource ");
                        addSubcategoryOption("Inclusion ");
                        addSubcategoryOption("Autism Specialist");
                        addSubcategoryOption("Behavioral Interventionist");
                        addSubcategoryOption("Vocational Teacher");
                        addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                        addSubcategoryOption("Culinary Arts Instructor");
                        addSubcategoryOption("Automotive Technology ");
                        addSubcategoryOption("Computer Science ");
                        addSubcategoryOption("Digital Media Instructor");
                    } else if (selectedCategory === "professor") {
                        addSubcategoryOption("University ");
                        addSubcategoryOption("Assistant ");
                        addSubcategoryOption("Associate ");
                        addSubcategoryOption("Full ");
                        addSubcategoryOption("Distinguished ");
                        addSubcategoryOption("Adjunct ");
                        addSubcategoryOption("Visiting ");
                        addSubcategoryOption("Research ");
                        addSubcategoryOption("Clinical ");
                        addSubcategoryOption("Philosophy");
                        addSubcategoryOption("Professor of History");
                        addSubcategoryOption("English");
                        addSubcategoryOption("Psychology");
                        addSubcategoryOption("Sociology");
                        addSubcategoryOption("Political Science");
                        addSubcategoryOption("Anthropology");
                        addSubcategoryOption("Linguistics");
                        addSubcategoryOption("Biology");
                        addSubcategoryOption("Chemistry");
                        addSubcategoryOption("Physics");
                        addSubcategoryOption("Mathematics");
                        addSubcategoryOption("Geology");
                        addSubcategoryOption("Astronomy");
                        addSubcategoryOption(" Environmental Science");
                        addSubcategoryOption("Computer Science");
                        addSubcategoryOption("Electrical Engineering");
                        addSubcategoryOption("Mechanical Engineering");
                        addSubcategoryOption("Civil Engineering");
                        addSubcategoryOption("Chemical Engineering");
                        addSubcategoryOption("Information Technology");
                        addSubcategoryOption("Business Administration");
                        addSubcategoryOption("Economics");
                        addSubcategoryOption("Finance");
                        addSubcategoryOption("Marketing");
                        addSubcategoryOption("Management");
                        addSubcategoryOption("Accounting");
                        addSubcategoryOption("Fine Arts");
                        addSubcategoryOption("Music");
                        addSubcategoryOption("Visual Arts");
                        addSubcategoryOption("Theater");
                        addSubcategoryOption("Dance");
                        addSubcategoryOption("Film Studies");
                        addSubcategoryOption("Educational Psychology");
                        addSubcategoryOption("Medicine");
                        addSubcategoryOption("Nursing");
                        addSubcategoryOption("Public Health");
                        addSubcategoryOption("Pharmacy");
                        addSubcategoryOption("Dentistry");
                        addSubcategoryOption("Law");
                        addSubcategoryOption("Constitutional Law");
                        addSubcategoryOption("Criminal Law");
                        addSubcategoryOption("International Law");
                        addSubcategoryOption("Environmental Law");
                        addSubcategoryOption("Social Work");
                        addSubcategoryOption("Social Welfare");
                        addSubcategoryOption("Clinical Social Work");
                        addSubcategoryOption("Library Science");
                        addSubcategoryOption("Information Studies");
                    }
                    subcategorySelect.disabled = false;
                }

                function addSubcategoryOption(subcategory) {
                    var subcategorySelect = document.getElementById("subcategory");
                    var option = document.createElement("option");
                    option.value = subcategory;
                    option.text = subcategory;
                    subcategorySelect.appendChild(option);
                }

                function validateForm() {

                    var category = document.getElementById("category");
                    var categoryError = document.getElementById('category_error');

                    var subcategory = document.getElementById("subcategory");
                    var subcategoryError = document.getElementById('subcategory_error');

                    if (category.value === "") {
                        displayError('Category is required.', 'category_error');
                        return false;
                    } else if (category.value !== '') {
                        categoryError.innerHTML = '';
                    }


                    if (subcategory.value === "") {
                        alert("Please select a subcategory");
                        displayError('Please select a subcategory.', 'subcategory_error');
                        return false;
                    } else if (subcategory.value !== '') {
                        subcategoryError.innerHTML = '';
                    }

                }
            </script>

        <?php
        } else if ($this->data['method'] == "filltercandidate") {
        ?>
            <!-- No need -->
            <!-- 3 1 All candidate search ************************************************************************************* -->

            <div class="container mt-5">
                <h3 class="text-center">Job Matched Candidates</h3>
                <div>

                    <div class="input-group">
                    </div>
                </div>
                <tbody>
                    <br>
                    <form action="<?php echo baseUrl . "providerController/filterAllCandidate" ?>" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category" id="lab1">Category:</label>
                                    <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                                        <option value="">Select a Category</option>
                                        <option value="architech">Architech</option>
                                        <option value="developer">Developer</option>
                                        <option value="tester">Tester</option>
                                        <option value="uiux">UI/UX Design</option>
                                        <option value="datascience">Data Scientist</option>
                                        <option value="databaseadmin">Database Admin</option>
                                        <option value="teacher">Teacher</option>
                                        <option value="professor">Professor</option>
                                    </select>
                                    <div id="category_error" class="error"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subcategory" id="lab">Subcategory:</label>
                                    <select class="form-control" id="subcategory" name="subcategory" disabled>
                                        <option value="">Select a Subcategory</option>
                                    </select>
                                    <div id="subcategory_error" class="error"></div>
                                </div>
                            </div>
                            <div class="input-group">
                                <button class="btn btn-outline-secondary" type="submit" id="search" onclick="">Search</button>
                            </div>
                    </form>
            </div>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Percentage</th>
                            <th>Fresher/Experience</th>
                            <th>Skills</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        foreach ($this->data['filtercandidate'] as $key => $value) {
                        ?>
                            <tr>
                                <td><?php echo $value['name'] ?></td>
                                <td><?php echo $value['eq'] ?></td>
                                <td><?php echo $value['per'] ?></td>
                                <td><?php echo $value['exp'] ?></td>
                                <td><?php echo $value['skill'] ?></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <!-- <button class="btn btn-primary">View</button> -->
                                        <a id="view" href="<?php echo baseUrl . "providerController/resumeCard" ?>/<?php echo $value['seekerId'] ?>">View</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
            <script>
                function updateSubcategories() {
                    var categorySelect = document.getElementById("category");
                    var subcategorySelect = document.getElementById("subcategory");
                    var selectedCategory = categorySelect.value;

                    // Reset subcategory options
                    subcategorySelect.innerHTML = '<option value="">Select a Subcategory</option>';

                    if (selectedCategory === "architech") {
                        addSubcategoryOption("Architect");
                        addSubcategoryOption("Senior ");
                        addSubcategoryOption("Design ");
                        addSubcategoryOption("Project ");
                        addSubcategoryOption("Principal ");
                        addSubcategoryOption("Landscape");
                        addSubcategoryOption("Urban Planner");
                        addSubcategoryOption("Interior Designer");
                        addSubcategoryOption("Architectural Technologist");
                        addSubcategoryOption("BIM (Building Information Modeling) Specialist");
                        addSubcategoryOption("Sustainable Design Consultant");
                        addSubcategoryOption("Architectural Drafter");
                        addSubcategoryOption("Architectural Visualization Artist");
                        addSubcategoryOption("Urban Designer");
                        addSubcategoryOption("Historic Preservation");
                        addSubcategoryOption("Residential Architect");
                        addSubcategoryOption("CAD (Computer-Aided Design) Technician");
                        addSubcategoryOption("Architectural Educator");
                        addSubcategoryOption("Construction Project Manage");
                        addSubcategoryOption("Industrial Designer");
                        addSubcategoryOption("Healthcare Facility Planner");
                        addSubcategoryOption("Retail Space Designer");

                        addSubcategoryOption()
                    } else if (selectedCategory === "developer") {
                        addSubcategoryOption("Python Software Engineer");
                        addSubcategoryOption("Python");
                        addSubcategoryOption("Python Data Scientist");
                        addSubcategoryOption("Python Machine Learning Engineer");
                        addSubcategoryOption("Python Automation");
                        addSubcategoryOption("Java Software ");
                        addSubcategoryOption("Java");
                        addSubcategoryOption("Java Full Stack ");
                        addSubcategoryOption("Java Android ");
                        addSubcategoryOption("Java Spring ");
                        addSubcategoryOption("Java Microservices ");
                        addSubcategoryOption("JavaScript ");
                        addSubcategoryOption("Front-end ");
                        addSubcategoryOption("Node.js ");
                        addSubcategoryOption("React ");
                        addSubcategoryOption("Angular ");
                        addSubcategoryOption("Vue.js ");
                        addSubcategoryOption("Full Stack JavaScript ");
                        addSubcategoryOption("C#  ");
                        addSubcategoryOption(".NET ");
                        addSubcategoryOption("ASP.NET ");
                        addSubcategoryOption("Unity ");
                        addSubcategoryOption("Xamarin ");
                        addSubcategoryOption("C++  ");
                        addSubcategoryOption("Game(using C++)");
                        addSubcategoryOption("C++ Systems ");
                        addSubcategoryOption("PHP");
                        addSubcategoryOption("WordPress");
                        addSubcategoryOption("Laravel ");
                        addSubcategoryOption("Symfony ");
                        addSubcategoryOption("Ruby ");
                        addSubcategoryOption("Ruby on Rails ");
                        addSubcategoryOption("Swift ");
                        addSubcategoryOption("iOS (using Swift)");
                        addSubcategoryOption("macOS (using Swift)");
                        addSubcategoryOption("Kotlin ");
                        addSubcategoryOption("Android  (using Kotlin)");
                        addSubcategoryOption("Go  ");
                        addSubcategoryOption("Rust  ");
                        addSubcategoryOption("Systems  (using Rust");
                        addSubcategoryOption("TypeScript  ");
                        addSubcategoryOption("Front-end  (using TypeScript)");
                        addSubcategoryOption("SQL ");
                        addSubcategoryOption("Database ");
                        addSubcategoryOption("Scala  ");
                        addSubcategoryOption("Haskell  ");
                        addSubcategoryOption("Perl   ");
                        addSubcategoryOption("Lua   ");
                        addSubcategoryOption("Game  (using Lua) ");
                        addSubcategoryOption("MATLAB   ");
                        addSubcategoryOption("Data Analyst (using MATLAB) ");
                    } else if (selectedCategory === "tester") {
                        addSubcategoryOption("Software ");
                        addSubcategoryOption("Test Engineer");
                        addSubcategoryOption("QA Analyst (Quality Assurance Analyst)");
                        addSubcategoryOption("Test Automation Engineer");
                        addSubcategoryOption("Manual ");
                        addSubcategoryOption("QA Lead (Quality Assurance Lead)");
                        addSubcategoryOption("Test Manager");
                        addSubcategoryOption("Performance ");
                        addSubcategoryOption("Usability ");
                        addSubcategoryOption("Regression ");
                        addSubcategoryOption("User Acceptance ");
                        addSubcategoryOption("Security ");
                        addSubcategoryOption("Mobile App ");
                        addSubcategoryOption("Game ");
                        addSubcategoryOption("Functional ");
                        addSubcategoryOption("Test Architect");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Continuous Integration ");
                        addSubcategoryOption("Load ");
                        addSubcategoryOption("Test Designer");
                        addSubcategoryOption("Test Technician");
                        addSubcategoryOption("QA Inspector (Quality Assurance Inspector)");
                        addSubcategoryOption("Test Coordinator");
                        addSubcategoryOption("Compliance ");
                    } else if (selectedCategory === "uiux") {
                        addSubcategoryOption("UI/UX Designer");
                        addSubcategoryOption("User Experience Designer");
                        addSubcategoryOption("User Interface Designer");
                        addSubcategoryOption("Interaction Designer");
                        addSubcategoryOption("Visual Designer");
                        addSubcategoryOption("UX Researcher");
                        addSubcategoryOption("UI/UX Architect");
                        addSubcategoryOption("Information Architect");
                        addSubcategoryOption("UX Strategist");
                        addSubcategoryOption("Product Designer");
                        addSubcategoryOption("User-Centered Design Specialist");
                        addSubcategoryOption("Usability Analyst");
                        addSubcategoryOption("UI/UX Developer");
                        addSubcategoryOption("Mobile App Designer");
                        addSubcategoryOption("Web Designer");
                        addSubcategoryOption("Visual Experience Designer");
                        addSubcategoryOption("UX Content Strategist");
                        addSubcategoryOption("Interaction Architect");
                        addSubcategoryOption("UX/UI Illustrator");
                        addSubcategoryOption("User Interface Animator");
                        addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist");
                        addSubcategoryOption("Accessibility Designer ");
                        addSubcategoryOption("Prototype Designer ");
                        addSubcategoryOption("UI/UX Lead ");
                        addSubcategoryOption("Design Systems Manager ");

                    } else if (selectedCategory === "datascience") {
                        addSubcategoryOption("Data Scientist");
                        addSubcategoryOption("Senior");
                        addSubcategoryOption("Machine Learning Engineer");
                        addSubcategoryOption("Data Analyst");
                        addSubcategoryOption("Senior Data Analyst");
                        addSubcategoryOption("Statistician");
                        addSubcategoryOption("Business Intelligence Analyst");
                        addSubcategoryOption("Quantitative Analyst (Quant)");
                        addSubcategoryOption("Data Engineer");
                        addSubcategoryOption("Data Architect");
                        addSubcategoryOption("AI Research Scientist");
                        addSubcategoryOption("Predictive Modeler");
                        addSubcategoryOption("Natural Language Processing (NLP) Engineer");
                        addSubcategoryOption("Computer Vision Engineer");
                        addSubcategoryOption("Big Data Engineer");
                        addSubcategoryOption("Analytics Manager");
                        addSubcategoryOption("Data Science Manager");
                        addSubcategoryOption("Chief Data Officer (CDO)");
                        addSubcategoryOption("Research Scientist (AI/ML)");
                        addSubcategoryOption("Decision Scientist");
                        addSubcategoryOption("Marketing Analyst");
                        addSubcategoryOption("Operations Research Analyst");
                        addSubcategoryOption("Data Visualization Specialist");
                        addSubcategoryOption("Customer Insights Analyst");
                        addSubcategoryOption("Fraud Analyst");

                    } else if (selectedCategory === "databaseadmin") {
                        addSubcategoryOption("Database  (DBA)");
                        addSubcategoryOption("Senior  Administrator");
                        addSubcategoryOption("Database Engineer");
                        addSubcategoryOption("Database Architect");
                        addSubcategoryOption("Database Analyst");
                        addSubcategoryOption("Data Warehouse ");
                        addSubcategoryOption("SQL Server");
                        addSubcategoryOption("Oracle Database Administrator");
                        addSubcategoryOption("MySQL Database Administrator");
                        addSubcategoryOption("PostgreSQL Database Administrator");
                        addSubcategoryOption("MongoDB Administrator");
                        addSubcategoryOption("NoSQL Database Administrator");
                        addSubcategoryOption("DBMS Administrator (Database Management System)");
                        addSubcategoryOption("Database Operations Manager");
                        addSubcategoryOption("Database Performance Tuning Specialist");
                        addSubcategoryOption("Data Migration Specialist");
                        addSubcategoryOption("Database Security Administrator");
                        addSubcategoryOption("Database Backup and Recovery Specialist");
                        addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)");
                        addSubcategoryOption("Database Compliance Officer");
                        addSubcategoryOption("Database DevOps Engineer");
                        addSubcategoryOption("Database Automation Engineer");
                        addSubcategoryOption("Database Replication Specialist");
                        addSubcategoryOption("Data Governance Manager");
                        addSubcategoryOption("Data Steward");
                    } else if (selectedCategory === "teacher") {
                        addSubcategoryOption("Tamil");
                        addSubcategoryOption("Mathematics ");
                        addSubcategoryOption("Math Instructor");
                        addSubcategoryOption("Algebra ");
                        addSubcategoryOption("Geometry ");
                        addSubcategoryOption("Calculus ");
                        addSubcategoryOption("Statistics ");
                        addSubcategoryOption("Math Tutor");
                        addSubcategoryOption("Math Coach");
                        addSubcategoryOption("Math Curriculum Specialist");
                        addSubcategoryOption("Math Department Chair");
                        addSubcategoryOption("English ");
                        addSubcategoryOption("Language Arts ");
                        addSubcategoryOption("Literature ");
                        addSubcategoryOption("Writing Instructor");
                        addSubcategoryOption("Creative Writing ");
                        addSubcategoryOption("English as a Second Language (ESL) ");
                        addSubcategoryOption("Reading Specialist");
                        addSubcategoryOption("English Tutor");
                        addSubcategoryOption("English Department Chair");
                        addSubcategoryOption("Science ");
                        addSubcategoryOption("Biology ");
                        addSubcategoryOption("Chemistry ");
                        addSubcategoryOption("Physics ");
                        addSubcategoryOption("Environmental Science ");
                        addSubcategoryOption("Earth Science ");
                        addSubcategoryOption("Anatomy and Physiology ");
                        addSubcategoryOption("Science Lab Instructor");
                        addSubcategoryOption("Science Curriculum Specialist");
                        addSubcategoryOption("Social Studies ");
                        addSubcategoryOption("History ");
                        addSubcategoryOption("Geography ");
                        addSubcategoryOption("Civics ");
                        addSubcategoryOption("Government ");
                        addSubcategoryOption("Economics ");
                        addSubcategoryOption("World History ");
                        addSubcategoryOption("Social Studies Department Chair");
                        addSubcategoryOption("Foreign Language ");
                        addSubcategoryOption("Language Instructor");
                        addSubcategoryOption("Spanish ");
                        addSubcategoryOption("French ");
                        addSubcategoryOption("German ");
                        addSubcategoryOption("Chinese ");
                        addSubcategoryOption("Language Lab Coordinator");
                        addSubcategoryOption("Physical Education ");
                        addSubcategoryOption("PE Instructor");
                        addSubcategoryOption("Fitness Coach");
                        addSubcategoryOption("Health Education ");
                        addSubcategoryOption("Sports Coach");
                        addSubcategoryOption("Physical Education Department Chair");
                        addSubcategoryOption("Art ");
                        addSubcategoryOption("Music ");
                        addSubcategoryOption("Drama ");
                        addSubcategoryOption("Visual Arts ");
                        addSubcategoryOption("Choir Director");
                        addSubcategoryOption("Band ");
                        addSubcategoryOption("Art History ");
                        addSubcategoryOption("Special Education ");
                        addSubcategoryOption("Learning Support ");
                        addSubcategoryOption("Resource ");
                        addSubcategoryOption("Inclusion ");
                        addSubcategoryOption("Autism Specialist");
                        addSubcategoryOption("Behavioral Interventionist");
                        addSubcategoryOption("Vocational Teacher");
                        addSubcategoryOption("Career and Technical Education (CTE) Instructor");
                        addSubcategoryOption("Culinary Arts Instructor");
                        addSubcategoryOption("Automotive Technology ");
                        addSubcategoryOption("Computer Science ");
                        addSubcategoryOption("Digital Media Instructor");
                    } else if (selectedCategory === "professor") {
                        addSubcategoryOption("University ");
                        addSubcategoryOption("Assistant ");
                        addSubcategoryOption("Associate ");
                        addSubcategoryOption("Full ");
                        addSubcategoryOption("Distinguished ");
                        addSubcategoryOption("Adjunct ");
                        addSubcategoryOption("Visiting ");
                        addSubcategoryOption("Research ");
                        addSubcategoryOption("Clinical ");
                        addSubcategoryOption("Philosophy");
                        addSubcategoryOption("Professor of History");
                        addSubcategoryOption("English");
                        addSubcategoryOption("Psychology");
                        addSubcategoryOption("Sociology");
                        addSubcategoryOption("Political Science");
                        addSubcategoryOption("Anthropology");
                        addSubcategoryOption("Linguistics");
                        addSubcategoryOption("Biology");
                        addSubcategoryOption("Chemistry");
                        addSubcategoryOption("Physics");
                        addSubcategoryOption("Mathematics");
                        addSubcategoryOption("Geology");
                        addSubcategoryOption("Astronomy");
                        addSubcategoryOption(" Environmental Science");
                        addSubcategoryOption("Computer Science");
                        addSubcategoryOption("Electrical Engineering");
                        addSubcategoryOption("Mechanical Engineering");
                        addSubcategoryOption("Civil Engineering");
                        addSubcategoryOption("Chemical Engineering");
                        addSubcategoryOption("Information Technology");
                        addSubcategoryOption("Business Administration");
                        addSubcategoryOption("Economics");
                        addSubcategoryOption("Finance");
                        addSubcategoryOption("Marketing");
                        addSubcategoryOption("Management");
                        addSubcategoryOption("Accounting");
                        addSubcategoryOption("Fine Arts");
                        addSubcategoryOption("Music");
                        addSubcategoryOption("Visual Arts");
                        addSubcategoryOption("Theater");
                        addSubcategoryOption("Dance");
                        addSubcategoryOption("Film Studies");
                        addSubcategoryOption("Educational Psychology");
                        addSubcategoryOption("Medicine");
                        addSubcategoryOption("Nursing");
                        addSubcategoryOption("Public Health");
                        addSubcategoryOption("Pharmacy");
                        addSubcategoryOption("Dentistry");
                        addSubcategoryOption("Law");
                        addSubcategoryOption("Constitutional Law");
                        addSubcategoryOption("Criminal Law");
                        addSubcategoryOption("International Law");
                        addSubcategoryOption("Environmental Law");
                        addSubcategoryOption("Social Work");
                        addSubcategoryOption("Social Welfare");
                        addSubcategoryOption("Clinical Social Work");
                        addSubcategoryOption("Library Science");
                        addSubcategoryOption("Information Studies");
                    }
                    subcategorySelect.disabled = false;
                }

                function addSubcategoryOption(subcategory) {
                    var subcategorySelect = document.getElementById("subcategory");
                    var option = document.createElement("option");
                    option.value = subcategory;
                    option.text = subcategory;
                    subcategorySelect.appendChild(option);
                }

                function validateForm() {

                    var category = document.getElementById("category");
                    var categoryError = document.getElementById('category_error');

                    var subcategory = document.getElementById("subcategory");
                    var subcategoryError = document.getElementById('subcategory_error');

                    if (category.value === '') {
                        alert("Please select a Category");
                        displayError('Category is required.', 'category_error');
                        return false;
                    } else if (category.value !== '') {
                        categoryError.innerHTML = '';
                    }


                    if (subcategory.value === "") {
                        alert("Please select a subcategory");
                        displayError('Please select a subcategory.', 'subcategory_error');
                        return false;
                    } else if (subcategory.value !== '') {
                        subcategoryError.innerHTML = '';
                    }

                }
            </script>

        <?php
        } else if ($this->data['method'] == "resume") {
        ?>

            <div class="full" id="educationTable">

                <!-- Candidate resume all details view download ************************************************************************************************************************* -->

                <br>
                <h2 class=" bg-black p-5 mb-0" id="candidateResume">
                    <center>Candidate Resume</center>
                </h2>
                <br>
                <!-- <a id="regis" class="printhide" href="<?php echo baseUrl . "providerController/matchedCandidate" ?>">Back</a> -->
                <?php
                                foreach ($this->data['basicDetails'] as $nkey => $nvalue) {
                                ?>
                <p style="float:right">Employee ID : <?php echo $nvalue['eeid'] ?></p>
                <?php
                                }
                                ?>
                <ul>
                    <br>
                    <br>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Candidate Name</th>
                                    <th>Photo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->data['basicDetails'] as $nkey => $nvalue) {
                                ?>
                                    <!-- <form method="POST"> -->
                                    <tr>
                                        <td><?php echo $nvalue['name'] ?></td>
                                        <!-- <td><img src="<?php echo base_url('uploads' . $nvalue['photo']) ?>" width="200" height="160"></td> -->
                                        <td><img src="<?php echo $nvalue['photo'] ?>" alt="Profile Photo" width="160" height="160"></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <!-- </form> -->
                            </tbody>
                        </table>
                    </div>
                </ul>
                <!-- <br>
                                            <h4 class="">Candidate Name : <?php echo $nvalue['name'] ?></h4>
                                                <img src="<?php base_url() . '/uploads/' . $data['photo'] ?>" width="200" height="160">
                                            <br> -->


                <h3 class="mb-5" id="education">Educational Qualification</h3>
                <ul>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>S.No</th>
                                    <th>Educational Qualification</th>
                                    <th>Department</th>
                                    <th>Institution Name</th>
                                    <th>Percentage</th>
                                    <th>Year of Passed Out</th>
                                    <th>Certificates</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $countedu=1;
                                foreach ($this->data['education'] as $key => $value) {
                                ?>
                                    <tr>
                                    <td><?php echo $countedu++; ?>.</td>
                                        <td><?php echo $value['educational_qualification'] ?></td>
                                        <td><?php echo $value['department'] ?></td>
                                        <td><?php echo $value['school_college_name'] ?></td>
                                        <td><?php echo $value['percentage'] ?></td>
                                        <td><?php echo $value['yearOfPassing'] ?></td>
                                        <?php
                    if ( $value['educational_qualification'] == 'sslc' ) {
                      ?>
                                  <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                  <?php
                    }
                    else if ( $value['educational_qualification'] == 'hsc' ) {
                    ?>
                     <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                     <?php
                    }
                    else if ( $value['educational_qualification'] == 'bachelors' ) {
                    ?>
                    <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                    <?php
                   }
                  else if ( $value['educational_qualification'] == 'masters' ) {
                   ?>
                   <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                   <?php
                    }
                    else if ( $value['educational_qualification'] == 'doctorate' ) {
                    ?>
                    <td><a href="<?php echo $value['doccer_url'] ?>" target="blank"><?php echo $value['doc_cer'] ?></a></td>
                     <?php
                    }
                    else {
                    ?>
                    <td>NA</a></td>
                    <?php
                   }
                   ?>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </ul>


                <h3 class="mb-5">Area of Interest</h3>
                <ul>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>S.No </th>
                                    <th>Job Category </th>
                                    <th>Job Sub Category</th>
                                    <th>Prefered Location</th>
                                    <th>Experience</th>
                                    <th>Job Type</th>
                                    <th>Description</th>
                                    <th>Expected Salary</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $countarea=1;
                                foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                ?>
                                    <tr>
                                    <td><?php echo $countarea++; ?>. </td>
                                        <td><?php echo $avalue['other_interst_category'] ?> </td>
                                        <td><?php echo $avalue['other_sub_interst_category'] ?></td>
                                        <td> <?php echo $avalue['prefered_location'] ?></td>
                                        <td> <?php echo $avalue['experience'] ?></td>
                                        <td> <?php echo $avalue['job_type'] ?></td>
                                        <td> <?php echo $avalue['description'] ?></td>
                                        <td> <?php echo $avalue['expected_salary'] ?></td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </ul>

                <h3 class="mb-5">Skills</h3>
                <ul>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>S.No</th>
                                    <th>Skill Name</th>
                                    <th>Skill Experience</th>
                                    <th>Skill Level</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $countskill = 1;
                                foreach ($this->data['areaOfInterest'] as $skey => $svalue) {
                                ?>
                                    <tr>
                                    <td><?php echo $countskill++; ?>. </td>
                                        <td><?php echo $svalue['skillname'] ?> </td>
                                        <td><?php echo $svalue['skillexperience'] ?></td>
                                        <td> <?php echo $svalue['skilllevel'] ?></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </ul>

                <h3 class="mb-5">Experience Details</h3>
                <ul>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                <th>S.No</th>
                                    <th>Job Category </th>
                                    <th>Job Sub Category</th>
                                    <th>Company Name</th>
                                    <th>Job Role</th>
                                    <th>Previous Employer Name</th>
                                    <!-- <th>Previous Employer Mobile</th> -->
                                    <!-- <th>Previous Employer Email</th> -->
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $countexp=1;
                                foreach ($this->data['experienceDetails'] as $ikey => $ivalue) {
                                ?>
                                    <tr>
                                        <td><?php echo $countexp++; ?>. </td>
                                        <td><?php echo $ivalue['other_category'] ?> </td>
                                        <td><?php echo $ivalue['other_sub_category'] ?></td>
                                        <td> <?php echo $ivalue['company_name'] ?></td>
                                        <td> <?php echo $ivalue['job_role'] ?></td>
                                        <td> <?php echo $ivalue['previous_employer_name'] ?></td>
                                        <!-- <td> <?php echo $ivalue['previous_employer_mobile'] ?></td> -->
                                        <!-- <td> <?php echo $ivalue['previous_employer_email'] ?></td> -->
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </ul>

                <!-- </div> -->

                <!-- To print the page -->
                <div style="float:right;margin-bottom:25px" id="printdiv">
                    <button id="view" class="printhide">Request to Admin</button>
                    <button onClick="window.print()" id="view" class="printhide">Print</button>
                    <button type="button" onclick="generatePDF()" id="view" class="printhide">Export to PDF</button>

                </div>
            </div>

            <!-- To download pdf -->
            <script type="text/javascript">
                function generatePDF() {

                    var element = document.getElementById('educationTable');
                    var opt = {
                        margin: 0.5,
                        filename: 'candidateprofile.pdf',
                        image: {
                            type: 'jpeg',
                            quality: 1
                        },
                        html2canvas: {
                            scale: 1
                        },
                        jsPDF: {
                            unit: 'in',
                            format: 'letter',
                            orientation: 'portrait',
                            precision: '12'
                        }
                    };

                    html2pdf().set(opt).from(element).save();
                }
            </script>

        <?php
        } else if ($this->data['method'] == "wishlist") {
        ?>
            <div class="container mt-5">
                <h2 class="text-center">Wishlist Candidate</h2>
                <!-- <input type="button" class="btn btn-primary float-end" value="+ Add"> -->
                <div class="clearfix"></div>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Degree</th>
                                <th>Percentage</th>
                                <th>Fresher/Experience</th>
                                <th>Skills</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Data 1</td>
                                <td>Data 2</td>
                                <td>Data 3</td>
                                <td>Data 4</td>
                                <td>Data 5</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <!-- <button class="btn btn-primary">View</button> -->
                                        <a id="view" href="<?php echo baseUrl . "providerController/resumeCard" ?>">View</a>
                                        <!-- <button class="btn btn-warning">Update</button>
                                <button class="btn btn-danger">Delete</button> -->
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        <?php
        } ?>

    </main>

</body>

</html>