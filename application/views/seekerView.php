<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    #skillForm {
      margin-bottom: -30px;
    }

    #uploadresume {
      background-color: #F8802A;
      color: white;
    }

    #addSkillBtn {
      background-color: navy;
      color: white;
    }

    #addskillsubmit {
      background-color: #F8802A;
      color: white;
    }

    #educationadd {
      background-color: navy;
      color: white;
    }

    #educationsubmit {
      background-color: #F8802A;
      color: white;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 40%;
      margin: 150px auto;
      margin-left: 300px;

    }

    h3 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -20px;
      color: navy;
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
      padding: 10px;
      width: 100%;
      margin-right: 10px;

    }

    .btn-primary {
      background-color: #4285f4;
      border: none;
    }

    .btn-primary {
      background-color: #F8802A;
      ;
    }

    /* 
.btn-primary:hover {
  background-color: #2d76d9;
} */


    .btn-primary:hover {
      background-color: #2d76d9;
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

    .sidebar {
      position: fixed;
      width: 18%;
      top: 110px;
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 20px 0;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #635b34;
    }

    .nav-link {
      display: block;
      color: #ffffff;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 20px;
    }


    .nav.flex-column {
      list-style: none;
      padding: 0;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 120px;
      z-index: 1000;
      background-color: #0d1d46;
      /* background-image: linear-gradient(to top, #30cfd0 -18%, #330867 50%); */
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

    nav ul li a:hover {
      /* background-color: #007bff;
    .btn-primary{ */
      /* background-color: #f39c12 ; */
      color: navy;
      text-decoration: none;
      /* } */
    }



    .logo {
      margin-top: 50px;
    }

    .sidebar {
      position: fixed;
      width: 18%;
      /* Slightly increased width for more content space */
      top: 110px;
      /* Adjusted top spacing */
      bottom: 0;
      left: 0;
      z-index: 100;
      padding: 20px 0;
      /* Reduced padding for a cleaner look */
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      /* background-color: #635b34; */
      background-image: linear-gradient(62deg, #ff681d 0%, #ffad57 100%);

    }

    .nav-link {
      display: block;
      color: #0d1d46;
      font-weight: bold;
      text-decoration: none;
      padding: 0px 20px;
      /* Added padding for better touch interaction */
    }

    .main {
      margin-top: 70px;
      padding: 20px;
    }

    .nav-item h4 {
      margin: 0;
      padding: 10px 10px;
      color: #7b3503;
      font-weight: 700;

    }

    #tamil {
      color: white;
      margin-left: 20px;
    }

    #w {
      margin-bottom: -100px;
      margin-top: 160px;

    }

    #regis {
      display: inline-block;
      padding: 8px 16px;
      border: 2px solid navy;
      /* Border color (adjust as needed) */
      background-color: navy;
      /* Background color (adjust as needed) */
      color: #fff;
      /* Text color */
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s, border-color 0.3s;
    }

    #regis:hover {
      background-color: transparent;
      /* Change background on hover */
      color: navy;
      /* Change text color on hover */
    }

    #deletes {
      display: inline-block;
      padding: 8px 16px;
      border: 2px solid red;
      /* Border color (adjust as needed) */
      background-color: red;
      /* Background color (adjust as needed) */
      color: #fff;
      /* Text color */
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s, border-color 0.3s;
    }

    #deletes:hover {
      background-color: transparent;
      /* Change background on hover */
      color: red;
      /* Change text color on hover */
    }

    #resumeButton {
      background-color: #F8802A;
      color: white;
      border: #F8802A;
    }
  </style>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <header>
    <div class="logo">
      <h5 id="tamil"> அறம் வேலைவாய்ப்பு</h5>
    </div>


    <nav>
      <ul>

        <li><a href="http://localhost/arramjobs/wordpress">Home</a></li>
        <li><a href="#about-us">About Us</a></li>
        <li><a href="#how-it-works">How It Works</a></li>
        <li><a href="#job-seekers">Employee</a></li>
        <li><a href="#job-providers">Employer</a></li>
        <li><a href="#blog">Blog</a></li>


      </ul>
    </nav>
  </header>




  <div class="container-fluid">
    <div class="row">
      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky">

          <ul class="nav flex-column">
            <br>

            <li class="nav-item">
              <h4>Create Profile</h4>
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/basicDetails" ?>">
                Basic Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/educationalDetails"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/educationTable" ?>">
                Education Details
              </a>
            </li><br>
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/experienceDetails"> -->
              <!-- <a class="nav-link" href="<?php echo baseUrl . "seekerController/experienceDetails" ?>"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/experienceTable" ?>">
                Experience Details
              </a>
            </li><br>
            <!-- <li class="nav-item"> -->
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/projectDetails"> -->

              <!-- <a class="nav-link" href="<?php echo baseUrl . "seekerController/projectTable"?>"> -->
                <!-- project Details
              </a> -->
            <!-- </li><br> -->
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/areaOfInterest"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/areaOfIntrestTable"?>">
                Area Of Job Interest

              </a>
            </li><br>
            <!-- <li class="nav-item"> -->
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/skills"> -->

              <!-- <a class="nav-link" href="<?php echo baseUrl . "seekerController/skillTable"?>">

                Skills
              </a> -->
            <!-- </li><br> -->
            <li class="nav-item">
              <!-- <a class="nav-link" href="http://localhost/arramjobs/seekerController/resume"> -->
              <a class="nav-link" href="<?php echo baseUrl . "seekerController/resume" ?>">
                Upload Resume
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

        <?php
        if ($method == "dash") {
        ?>

          <h1 class="" id="w"><center>Welcome To Job Employee Dashboard </center></h1>


        <?php
        } else if ($method == 'basicdetails') {
        ?>

          <div class="container" id="page1">
            <h3>Personal Details</h3>

           
            <form name="applicationform"  enctype="multipart/form-data" method="post" onsubmit="return group()" action='<?php echo baseUrl . "seekerController/updateBasicDetails"?>'>

              <?php
              foreach ($basicDetails as $key => $value) {
              ?>
                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                 <div class="form-group">
                <label for="Name">Name *</label>
                <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name" >
                <div id="Name_error" class="error"></div>

        </div>
                <!-- <div class="form-group">
                  <label for="Name">Name *</label>
                  <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name" >
                  <div id="Name_error" class="error"></div>

                </div> -->
                <div class="form-group">
                  <label for="emailid">Email *</label><br>
                  <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email" placeholder="Enter your email" >
                  <div id="emailid_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="phonenumber">Phone Number *</label>
                  <input type="tel" class="form-control" id="phonenumber" value=<?php echo $value['phonenumber']; ?> name="phonenumber" placeholder="Enter your phonenumber" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>" >
                  <div id="phonenumber_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="dob">Date of Birth *</label>
                  <input type="date" class="form-control" id="dateofbirth" value=<?php echo $value['dateofbirth']; ?> name="dateofbirth" >
                  <div id="dob_error" class="error"></div>
                </div>
              <div class="form-group">
              <label for="gender">Gender *</label>
              <select class="form-control" id="gender" name="gender" >
                <option value="">Select your Gender</option>
                <option value="male" <?php if (isset($value['gender']) && $value['gender'] === 'male') echo 'selected'; ?>>Male</option>
                <option value="female" <?php if (isset($value['gender']) && $value['gender'] === 'female') echo 'selected'; ?>>Female</option>
                <option value="others" <?php if (isset($value['gender']) && $value['gender'] === 'others') echo 'selected'; ?>>Others</option>
              </select>
              <div id="gender_error" class="error"></div>
            </div>


                <h4> Address : </h4>
                <div class="form-group">
                  <label for="Door no">Door no/building name </label>
                  <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno" >
                  <div id="doorno_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="street address">street address </label>
                  <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress" >
                  <div id="streetaddress_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="landmark">Landmark </label>
                  <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark" >
                  <div id="landmark_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="pincode">Pin Code</label>
                  <input type="text" class="form-control" id="pincode" value="<?php echo isset($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode" >
                  <div id="pincode_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="district">District *</label>
                  <input type="text" class="form-control" id="district" name="district" value="Erode" disabled>
                  <div id="district_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="maritalstatus">Marital Status*</label>

              
                  <select class="form-control" id="maritalstatus" value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>" name="maritalstatus" >

                    <option value="">Select your marital status</option>

                    <option value="single" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'single') echo 'selected'; ?>>Single</option>
                    <option value="married" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'married') echo 'selected'; ?>>Married</option>
                  </select>
                  <div id="maritalstatus_error" class="error"></div>
                </div>
                <h4>Identification Details :</h4>
                <div class="form-group">
                  <label for="aadharfrontphoto">Aadhar front photo </label>
                  <input type="file" class="form-control" id="aadharfrontphoto" value="<?php echo isset($value['aadhar_front']) ? $value['aadhar_front'] : ''; ?>" name="aadharfrontphoto" >
                  <div id="aadharfrontphoto_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="aadharbackphoto">Aadhar back Photo</label>
                  <input type="file" class="form-control" id="aadharbackphoto" value="<?php echo isset($value['aadhar_back']) ? $value['aadhar_back'] : ''; ?>" name="aadharbackphoto" >
                  <div id="aadharbackphoto_error" class="error"></div>
                </div>
                <div class="form-group">
                  <label for="photo">Photo</label>
                  <input type="file" class="form-control" id="photo" value="<?php echo isset($value['photo']) ? $value['photo'] : ''; ?>" name="photo" >
                  <div id="photo_error" class="error"></div>
                </div>
                <button type="submit" name="submitBtn" class="btn btn-primary">Next-></button>
            </form>

          <?php
              }
          ?>
          </div>
              <script>
                
     function group() {
        var x = document.applicationform.name.value;
        var y = document.applicationform.email.value;
        var p = document.applicationform.phonenumber.value;
        var d = document.applicationform.dateofbirth.value;
        var g = document.applicationform.gender.value;
        var b = document.applicationform.doorno.value;
        var s = document.applicationform.streetaddress.value;
        var l = document.applicationform.landmark.value;
        var pin = document.applicationform.pincode.value;
        var m = document.applicationform.maritalstatus.value;
        var aa = document.applicationform.aadharfrontphoto.value;
        var ab = document.applicationform.aadharbackphoto.value;
        var photo = document.applicationform.photo.value;




        if (x != "") {
            if (x.length < 2) {

                document.getElementById("Name_error").innerHTML = "* Name should be in atleast 4 characters";
                alert("* Name should be in atleast 4 characters");
                return false;
            } else if (x.length > 50) {
                document.getElementById("Name_error").innerHTML = "* Name should not exceed 50 characters";
                alert("Name should not exceed 50 characters");
                return false;
            } else {
                document.getElementById("Name_error").innerHTML = "";

            }
        } else if (x == "") {
            var namesms1 = "* Name must be filled out";
            // alert("* Name must be filled out");
            document.getElementById("Name_error").innerHTML = namesms1;
            document.applicationform.name.focus();
            return false;
        }

        if (y == "") {
                    var emailsms = "email must be filled out";
                    // alert("email must be filled out");
                    document.getElementById("emailid_error").innerHTML = emailsms;
                    document.applicationform.email.focus();
                    return false;
                } else if (y != "") {
                    document.getElementById("emailid_error").innerHTML="";
                    /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y)) {
                        document.getElementById("emailid_error").innerHTML = "";
                        // return (true);
                    } else {
                        document.getElementById("emailid_error").innerHTML = "you have entered an invalid email address";
                        // alert("you have entered an invalid email address");
                        return false;
                    }
                }
                if (p != "") {
                    if (p.length !== 10) {
                        document.getElementById("phonenumber_error").innerHTML = "Phone number  must be in 10 digits";
                        alert("Phone number  must be in 10 digits")
                        return false;
                    } else if (p.length > 11) {
                        document.getElementById("phonenumber_error").innerHTML = "phone number should not exceed 10 digits";
                        alert("phone number should not exceed 10 digits");
                        return false;
                    } else {
                        document.getElementById("phonenumber_error").innerHTML = "";

                    }
                } else if (p == "") {
                    var phsms = "phone number must be filled out";
                    document.getElementById("phonenumber_error").innerHTML = phsms;
                    document.applicationform.phonenumber.focus();
                    return false;
                  }

                  if (d == "") {
                    var namesms2 = "* Date of birth must be filled out";
                    document.getElementById("dob_error").innerHTML = namesms2;
                    document.applicationform.dateofbirth.focus();
                    return false; 
                }else {
                        document.getElementById("dob_error").innerHTML = "";

                    }

                if (g == "") {
                    var namesms2 = "* Gender must be filled out";
                    document.getElementById("gender_error").innerHTML = namesms2;
                    document.applicationform.gender.focus();
                    return false; 
                }
                else {
                        document.getElementById("gender_error").innerHTML = "";

                    }

                if (b == "") {
                    var namesms2 = "* Door no & building name must be filled out";
                    document.getElementById("doorno_error").innerHTML = namesms2;
                    document.applicationform.gender.focus();
                    return false; 
                }else {
                        document.getElementById("doorno_error").innerHTML = "";

                    }

                if (s == "") {
                    var namesms2 = "* Street Address must be filled out";
                    document.getElementById("streetaddress_error").innerHTML = namesms2;
                    document.applicationform.streetaddress.focus();
                    return false; 
                }else {
                        document.getElementById("streetaddress_error").innerHTML = "";

                    }


                if (l == "") {
                    var namesms2 = "* Landmark must be filled out";
                    document.getElementById("landmark_error").innerHTML = namesms2;
                    document.applicationform.landmark.focus();
                    return false; 
                }else {
                        document.getElementById("landmark_error").innerHTML = "";

                    }


                if (pin != "") {
                    if (pin.length !== 6) {
                        document.getElementById("pincode_error").innerHTML = "pincode  must be in 6 digits";
                        return false;
                    } else if (pin.length > 6) {
                        document.getElementById("pincode_error").innerHTML = "pincode should not exceed 6 digits";
                        return false;
                    } else {
                        document.getElementById("pincode_error").innerHTML = "";

                    }
                } else if (pin == "") {
                    var pincode = "pincode must be filled out";
                    document.getElementById("pincode_error").innerHTML = pincode;
                    document.applicationform.pincode.focus();
                    return false;

                }


                if (m == "") {
                    var namesms2 = "* maritalstatus must be filled out";
                    document.getElementById("maritalstatus_error").innerHTML = namesms2;
                    document.applicationform.maritalstatus.focus();
                    return false; 
                }else {
                        document.getElementById("maritalstatus_error").innerHTML = "";

                    }

                if (aa == "") {
                    var namesms2 = "* Aadhar Front Photo must be filled out";
                    document.getElementById("aadharfrontphoto_error").innerHTML = namesms2;
                    document.applicationform.aadharfrontphoto.focus();
                    return false; 
                }else {
                        document.getElementById("aadharfrontphoto_error").innerHTML = "";

                    }

                if (ab == "") {
                    var namesms2 = "* Aadhar Back Photo must be filled out";
                    document.getElementById("aadharbackphoto_error").innerHTML = namesms2;
                    document.applicationform.aadharbackphoto.focus();
                    return false; 
                }else {
                        document.getElementById("aadharbackphoto_error").innerHTML = "";

                    }

                if (photo == "") {
                    var namesms2 = "* Aadhar Back Photo must be filled out";
                    document.getElementById("photo_error").innerHTML = namesms2;
                    document.applicationform.photo.focus();
                    return false; 
                }else {
                        document.getElementById("photo_error").innerHTML = "";

                    }



    }
  
  
              </script>
          <!-- <script>
            function validateFormPage() {

              var Name = document.getElementById('name').value;
              var email = document.getElementById('email').value;
              var phoneNumber = document.getElementById('phonenumber').value;
              var dob = document.getElementById('dob').value;
              var gender = document.getElementById('gender').value;
              var doorno = document.getElementById('doorno').value;
              var streetaddress = document.getElementById('streetaddress').value;
              var landmark = document.getElementById('landmark').value;
              var pincode = document.getElementById('pincode').value;
              var maritalstatus = document.getElementById('maritalstatus').value;
              var aadharFrontPhoto = document.getElementById('aadharfrontphoto').value;
              var aadharBackPhoto = document.getElementById('aadharbackphoto').value;
              var photo = document.getElementById('photo').value;
              var nameRegex = /^[A-Za-z\s]/;
              clearErrorMessages();

              if (Name.trim() === '') {
                alert('Name is required.');
                return false;
              } else if (!nameRegex.test(Name)) {
                alert("Please enter a valid name");
                return false;
              }


              if (email.trim() === '') {
                alert("Please enter a email id");
                displayError('Email is required.', 'emailid_error');
                return false;
              } else if (!validateEmail(email)) {
                alert("Please enter a valid email address");
                displayError('Please enter a valid email address.', 'emailid_error');
                return false;
              }

              if (phoneNumber.trim() === '') {
                alert("Please enter a phone number");
                displayError('Phone Number is required.', 'phonenumber_error');
                return false;
              } else if (!validatePhoneNumber(phoneNumber)) {
                alert("Please enter a valid phone number");
                displayError('Please enter a valid phone number.', 'phonenumber_error');
                return false;
              }

              if (dob.trim() === '') {
                alert("Please select your date of birth")
                displayError('Date of Birth is required.', 'dob_error');
                return false;
              }
              if (gender.trim() === '') {
                alert("Please select your gender");
                displayError('Gender is required.', 'gender_error');
                return false;
              }

              if (doorno.trim() === '') {
                
                alert("Please enter a door no or building name");
                displayError('door no or building name is required.', 'firstline_error');
                return false;
              }

              if (streetaddress.trim() === '') {
                alert("Please enter your address");
                displayError('Street address is required.', 'streetaddress_error');
                return false;
              }

              if (landmark.trim() === '') {
                alert("Please enter your city");
                displayError('City is required.', 'city_error');
                return false;
              }

              if (pincode.trim() === '') {
                alert("Please enter your pincode");
                displayError('Pin Code is required.', 'pincode_error');
                return false;
              }
              if (maritalstatus.trim() === '') {
                alert("Please select your marital status");
                displayError('marital status is required.', 'maritalstatus_error');
                return false;
              }
              if (aadharFrontPhoto.trim() === '') {
                alert("Please upload your Aadhar front photo");
                displayError('Aadhar front photo is required.', 'aadharfrontphoto_error');
                return false;
              }

              if (aadharBackPhoto.trim() === '') {
                alert("Please upload your Aadhar back photo");
                displayError('Aadhar back photo is required.', 'aadharbackphoto_error');
                return false;
              }

              if (photo.trim() === '') {
                alert("Please upload your photo");
                displayError('Photo is required.', 'photo_error');
                return false;
              }
              return true;
            }

            function isValidDate(dateString) {
              var currentDate = new Date();
              var inputDate = new Date(dateString);
              return inputDate <= currentDate;
            }

            function validateEmail(email) {
              var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              return regex.test(email);
            }

            function validatePhoneNumber(phoneNumber) {
              var regex = /^\d{10}$/;
              return regex.test(phoneNumber);
            }


            function clearErrorMessages() {
              var errorElements = document.querySelectorAll('.error');
              errorElements.forEach(function(errorElement) {
                errorElement.textContent = '';
              });
            }

            function displayError(errorMessage, errorElementId) {
              var errorElement = document.getElementById(errorElementId);
              errorElement.textContent = errorMessage;
            }

            function resetForm() {
              document.getElementById('application_form').reset();
              clearErrorMessages();
              document.getElementById('successMessage').textContent = '';
              document.getElementById('submitBtn').disabled = false;
            }
          </script> -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        <?php
        } elseif ($method == 'educationalDetails') {
        ?>
          <div class="container" id="education">
            <h3>Education Form</h3>

            <div id="educationFormsContainer">
              <div class="education-form-container">

                <form name="educationform" action="<?php echo baseUrl . "seekerController/updateEducationDetails" ?>" method="post" onsubmit="return validateForm()">
                  <?php

              // foreach($educationDetails as $key => $value) {
                 
                if (isset($educationalDetails[0]['id'])) {
                  foreach ($educationalDetails as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
              
              ?>
                   <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" value="<?php echo $value['seekerId']; ?>" name="id" placeholder="Enter your name">
                  <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification" value="<?php echo $value['educational_qualification']; ?>" onchange="toggleFields()">
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                  <div class="form-group" id="department-group" style="display: none;">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department" value="<?php echo $value['department']; ?>">
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                    <div id="school_error" class="error"></div>
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school"  value="<?php echo $value['percentage']; ?>" name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>" name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <div class="form-group" id="tencertificate-group" style="display: none;">
                    <label for="tencertificate">10 th certificate</label>
                    <input type="file" class="form-control" id="tencertificate" value="<?php echo $value['tencertificate']; ?>" name="tencertificate">
                    <div id="tencertificate_error" class="error"></div>
                  </div>
                  <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->

              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
            <?php
                  }
                  } else {
                    $seekerId = $_SESSION['seekerId'];

                      ?>
                       <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                       <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification"  onchange="toggleFields()">
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                  <div class="form-group" id="department-group" style="display: none;">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department" >
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school"  name="school">
                    <div id="school_error" class="error"></div>
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="number" class="form-control" id="percentage" id="school"  name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed"   name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <div class="form-group" id="tencertificate-group" style="display: none;">
                    <label for="tencertificate">10 th certificate</label>
                    <input type="file" class="form-control" id="tencertificate" name="tencertificate">
                    <div id="tencertificate_error" class="error"></div>
                  </div>
                  <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
              </form>
              <?php
                  }
              ?>

            </div>
                </div>
          <script>
            var educationFormCount = 1;

            function addEducationForm(button) {
              educationFormCount++;
              var newEducationFormContainer = document.createElement('div');
              newEducationFormContainer.className = 'education-form-container';

              // Clone the original form
              var originalForm = document.querySelector('.education-form-container');
              var newForm = originalForm.cloneNode(true);
              newForm.id = 'educationform_' + educationFormCount;

              // Clear the values in the new form
              clearFormFields(newForm);

              // Append the new form to the container
              newEducationFormContainer.appendChild(newForm);
              document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

              // Move the "Submit" button to the new form
              var submitButton = document.querySelector('button[type="submit"]');
              newForm.appendChild(submitButton);

              // Hide the "Add" button in the previous form
              button.style.display = "none";
            }
            // Function to clear the form fields in a given education form
            function clearFormFields(educationForm) {
              var fieldsToClear = educationForm.querySelectorAll('input, select');
              for (var i = 0; i < fieldsToClear.length; i++) {
                fieldsToClear[i].value = '';
              }
            }

            function validateForm() {
              var qualification = document.getElementById('qualification').value;
              var department = document.getElementById('department').value;
              var school = document.getElementById('school').value;
              var percentage = document.getElementById('percentage').value;
              var yearPassed = document.getElementById('year_passed').value;


              // Basic qualification validation
              if (!qualification) {
                displayError('Please select a qualification', 'qualification_error');
                return false;
              }


              // Additional validation for "Bachelors," "Masters," and "Doctorate"
              if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                var department = document.getElementById('department').value;
                var school = document.getElementById('school').value;
                var percentage = document.getElementById('percentage').value;
                var yearPassed = document.getElementById('year_passed').value;
                var tencertificate = document.getElementById('tencertificate').value;

                // Validate department
                if (!department) {
                  displayError('Department is required for selected qualification', 'department_error');
                  return false;
                }



                // Additional validation for "Bachelors," "Masters," and "Doctorate"
                if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                  var department = document.getElementById('department').value;
                  var school = document.getElementById('school').value;
                  var percentage = document.getElementById('percentage').value;
                  var yearPassed = document.getElementById('year_passed').value;
                  var tencertificate = document.getElementById('tencertificate').value;

                  // Validate department
                  if (!department) {
                    alert("Department is required for selected qualification");
                    displayError('Department is required for selected qualification', 'department_error');
                    return false;
                  }

                  // Validate school/collegename
                  if (!school) {
                    alert("School/collegename is required");
                    displayError('School/collegename is required', 'school_error');
                    return false;
                  }

                  // Validate percentage
                  if (!percentage) {
                    alert("Percentage is required");
                    displayError('Percentage is required', 'percentage_error');
                    return false;
                  }

                  // Validate year of passed out
                  if (!yearPassed) {
                    alert("Year of Passed Out is required");
                    displayError('Year of Passed Out is required', 'year_error');
                    return false;
                  }

                  if(!tencertificate){
                    alert("10 th certificate is required");
                    displayError('10 th certificate is required', 'tencertificate_error');
                    return false;
                  }

                }

                // Validate percentage
                if (!percentage) {
                  displayError('Percentage is required', 'percentage_error');
                  return false;
                }

                // Validate year of passed out
                if (!yearPassed) {
                  displayError('Year of Passed Out is required', 'year_error');
                  return false;
                }
              }
            }


            //   function toggleFields() {
            //     var selectedQualification = document.getElementById('qualification').value;
            //     var departmentGroup = document.getElementById('department-group');
            //     var schoolGroup = document.getElementById('school-group');
            //     var percentageGroup = document.getElementById('percentage-group');
            //     var yearGroup = document.getElementById('year-group');
            //     var addButton = document.getElementById('addButton');
            //     var tencertificateGroup = document.getElementById('tencertificate-group').value;


            //   // Form is valid
            //   return true;
            // }

            function toggleFields() {
              var selectedQualification = document.getElementById('qualification').value;
              var departmentGroup = document.getElementById('department-group');
              var schoolGroup = document.getElementById('school-group');
              var percentageGroup = document.getElementById('percentage-group');
              var yearGroup = document.getElementById('year-group');
              var addButton = document.getElementById('addButton');

              // Show/hide the additional fields based on the selected qualification
              if (selectedQualification === 'below_8th') {
                departmentGroup.style.display = 'none';
                schoolGroup.style.display = 'none';
                percentageGroup.style.display = 'none';
                yearGroup.style.display = 'none';
                addButton.style.display = 'none';
              } else {
                // Show the school, percentage, and year fields by default
                schoolGroup.style.display = 'block';
                percentageGroup.style.display = 'block';
                yearGroup.style.display = 'block';

                // Hide the department field for SSLC and HSC
                if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                  departmentGroup.style.display = 'none';
                  addButton.style.display = 'none';
                  tencertificateGroup.style.display = 'none';

                } else {

                  // Show the school, percentage, and year fields by default
                  schoolGroup.style.display = 'block';
                  percentageGroup.style.display = 'block';
                  yearGroup.style.display = 'block';
                  tencertificateGroup.style.display = 'block';

                  // Hide the department field for SSLC and HSC
                  if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                    departmentGroup.style.display = 'none';
                    addButton.style.display = 'none';
                  } else {
                    // Show the department field for other qualifications
                    departmentGroup.style.display = 'block';
                    addButton.style.display = 'block';
                    tencertificateGroup.style.display = 'block';

                  }

                }
              }
            }
          </script>
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <?php
        } elseif ($method == '') {
        ?>

          <div class="container">
            <h3>Experience Details Form</h3>



          <?php
        } elseif ($method == 'updateProject') {
          ?>

            <div class="container">
              <h3 id="projectdeailsform">Project Details Form</h3>
              <form name="projectform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/updateInsertProject" ?>">
                <?php
                if (isset($updateProject[0]['id'])) {
                  foreach ($updateProject as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                    <div id="project-sections">
                      <div class="project-section">
                        <div class="form-group">
                          <label for="projectname">Project Name</label>
                          <input type="text" class="form-control" id="projectname" name="projectname" value="<?php echo $value['projectName']; ?>">
                          <div id="projectname_error" class="error"></div>
                          <div class="form-group">
                            <label for="Duration of project">Duration of Project</label>
                            <input type="text" class="form-control" id="durationofproject" name="durationofproject" value="<?php echo $value['projectDuration']; ?>">
                            <div id="durationofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="role in the project">Role in the Project</label>
                            <input type="text" class="form-control" id="roleofproject" name="roleofproject" value="<?php echo $value['roleInProject']; ?>">
                            <div id="roleofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="">start date of project*</label>
                            <input type="date" class="form-control" id="startdate" name="startdate" value="<?php echo $value['startingDate']; ?>">
                            <div id="startdate_error" class="error"></div>
                            <label for="">End date of the project*</label>
                            <input type="date" class="form-control" id="enddate" name="enddate" value="<?php echo $value['endingDate']; ?>">
                            <div id="enddate_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Responsibity">My responsibility in project*</label>
                            <input type="text" class="form-control" rows="3" class="form-control" id="responsibility" value="<?php echo $value['responsibilityInProject']; ?>" name="responsibility">
                            <div id="responsibility_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Skills used in project">Skills used in project*</label>
                            <input type="text" class="form-control" id="skillsused" name="skillsused" value="<?php echo $value['skillsUsedInProject']; ?>">
                            <div id="skills_error" class="error"></div>
                          </div>
                          <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                        </div>
                        <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
                      <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <div id="project-sections">
                        <div class="project-section">
                          <div class="form-group">
                            <label for="projectname">Project Name</label>
                            <input type="text" class="form-control" id="projectname" name="projectname[]">
                            <div id="projectname_error" class="error"></div>
                            <div class="form-group">
                              <label for="Duration of project">Duration of Project</label>
                              <input type="text" class="form-control" id="durationofproject" name="durationofproject[]">
                              <div id="durationofproject_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="role in the project">Role in the Project</label>
                              <input type="text" class="form-control" id="roleofproject" name="roleofproject[]">
                              <div id="roleofproject_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="">start date of project*</label>
                              <input type="date" class="form-control" id="startdate" name="startdate[]">
                              <div id="startdate_error" class="error"></div>
                              <label for="">End date of the project*</label>
                              <input type="date" class="form-control" id="enddate" name="enddate[]">
                              <div id="enddate_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Responsibity">My responsibility in project*</label>
                              <textarea class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility[]"></textarea>
                              <div id="responsibility_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Skills used in project">Skills used in project*</label>
                              <input type="text" class="form-control" id="skillsused" name="skillsused[]">
                              <div id="skills_error" class="error"></div>
                            </div>
                            <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                          </div>
                          <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
                        <?php
                      }
                        ?>
              </form>

              <script>
                var projectFormCount = 1;

                function validateForm() {
                  var projectname = document.getElementById("projectname");
                  var durationofproject = document.getElementById("durationofproject");
                  var startdate = document.getElementById("startdate");
                  var enddate = document.getElementById("enddate");
                  var responsibility = document.getElementById("responsibility");
                  var skillsused = document.getElementById("skillsused");
                  if (projectname.value === '') {
                    displayError('please enter a project name', 'projectname_error');
                    return false;
                  }
                  if (durationofproject.value === '') {
                    alert("please enter a project duration");
                    displayError('please enter a project duration', 'durationofproject_error');
                    return false;
                  }
                  if (roleofproject.value === '') {
                    alert("Please enter a role of projec");
                    displayError('please enter a role of project', 'roleofproject_error');
                  }
                  if (startdate.value === '') {
                    alert("please select a start date");
                    displayError('please select a start date', 'startdate_error');
                    return false;
                  }
                  if (enddate.value === '') {
                    alert("please select a end date'");
                    displayError('please select a end date', 'enddate_error');
                    return false;
                  }
                  if (responsibilty.value === '') {
                    alert("This Field is required!");
                    displayError('This Field is required!', 'responsibility_error');
                    return false;
                  }
                  if (skillsused.value === '') {
                    alert("please enter a Skills used in the project");
                    displayError('please enter a Skills used in the project', 'skillsused_error');
                    return false;
                  }
                  return true;
                }


                function addProjectSection() {
                  projectFormCount++;
                  var newProjectSection = document.createElement('div');
                  newProjectSection.className = 'project-section';

                  // Clone the original project section
                  var originalSection = document.querySelector('.project-section');
                  var clone = originalSection.cloneNode(true);

                  // Clear input values in the cloned section
                  var inputs = clone.querySelectorAll('input[type="text"], input[type="date"], textarea');
                  inputs.forEach(function(input) {
                    input.value = '';
                  });

                  // Append the cloned section to the project sections container
                  newProjectSection.appendChild(clone);
                  document.getElementById('project-sections').appendChild(newProjectSection);

                  // Move the "Submit" button to the end of the last added project section
                  var submitButton = document.getElementById('finalsubmit');
                  newProjectSection.appendChild(submitButton);

                  // Hide the "Add Project" button in the previous section
                  var addButton = document.querySelector('button[type="button"]');
                  addButton.style.display = 'none';
                }


                function clearErrorMessages() {
                  var errorElements = document.querySelectorAll('.error');
                  errorElements.forEach(function(errorElement) {
                    errorElement.textContent = '';
                  });
                }

                function displayError(message, elementId) {
                  var errorElement = document.getElementById(elementId);
                  errorElement.innerHTML = message;
                  errorElement.style.color = 'red';
                }
              </script>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            <?php
          } elseif ($method == 'updateAreaOfIntrest') {
            ?>


              <div class="container">

                <h3>Update Area of Job Interest</h3>
                <form method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/updateInsertAreaOfIntrest"?>">


                  <?php
                  if (isset($updateAreaOfIntrest[0]['id'])) {
                    foreach ($updateAreaOfIntrest as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                  ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                      <div id="educationFormsContainer">
                        <div class="education-form-container">
                          <div class="form-group">
                            <label for="category">Category *</label>
                            <select class="form-control" id="category" name="category" value="<?php echo $value['other_interst_category']; ?>" onchange="toggleCategoryFields()">
                              <option value="">Select a category</option>

                              <option value="architech" <?php if ($value['other_interst_category'] === 'architech') echo ' selected'; ?>>Architech</option>
                              <option value="developer">Developer</option>
                              <option value="tester" <?php if ($value['other_interst_category'] === 'tester') echo ' selected'; ?>>Tester</option>
                              <option value="uiux" <?php if ($value['other_interst_category'] === 'uiux') echo ' selected'; ?>>UI/UX Design</option>
                              <option value="datascience" <?php if ($value['other_interst_category'] === 'datascience') echo ' selected'; ?>>Data Scientist</option>
                              <option value="databaseadmin" <?php if ($value['other_interst_category'] === 'databaseadmin') echo ' selected'; ?>>Database Admin</option>
                              <option value="teacher" <?php if ($value['other_interst_category'] === 'teacher') echo ' selected'; ?>>Teacher</option>
                              <option value="professor" <?php if ($value['other_interst_category'] === 'professor') echo ' selected'; ?>>Professor</option>
                              <option value="others" <?php if ($value['other_interst_category'] === 'others') echo ' selected'; ?>>Others</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="subcategory">Subcategory *</label>
                            <select class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_interst_category']; ?>">
                              <option value="">Select a sub category </option>
                            </select>
                          </div>
                          <div class="form-group" id="otherCategoryFields" style="display: none;">
                            <label for="customCategoryInput">Custom Category</label>
                            <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                            <label for="customSubcategoryInput">Custom Subcategory</label>
                            <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                          </div>
                          <div class="form-group" id="customCategory" style="display: none;">
                            <label for="customCategoryInput">Category Name</label>
                            <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                          </div>

                          <div class="form-group" id="customSubcategory" style="display: none;">
                            <label for="customSubcategoryInput"> Subcategory Name</label>
                            <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
                          </div>

                          <div class="form-group">
                            <label for="preferred-location">Preferred Location to work</label>
                            <input type="text" class="form-control" id="preferred-location" name="preferred-location" value="<?php echo $value['prefered_location']; ?>">

                            <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                          </div>
                          <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>">
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <input class="form-control" id="description" name="description" value="<?php echo $value['description']; ?>" rows="3">
                          </div>
                          <div class="form-group">
                            <label for="jobtype">Job Type</label>
                            <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>">
                              <option value="">Select a job type</option>
                              <option value="parttime" <?php if ($value['job_type'] === 'parttime') echo ' selected'; ?>>Part Time</option>
                              <option value="fulltime" <?php if ($value['job_type'] === 'fulltime') echo ' selected'; ?>>Full Time</option>
                              <option value="both">Both</option>
                            </select>
                          </div>


                      <div class="form-group">
                        <label for="expected-salary">Expected Salary</label>
                        <input type="text" class="form-control" id="expected-salary" name="expected-salary" value="<?php echo $value['expected_salary']; ?>">
                      </div>
                      
                      <div class="form-group">
                        <h4>Your Strength :</h4>
                      </div>

                      <div class="form-group">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" value="<?php echo $value['skill']; ?>" id="skillname" name="skillname" >
                      </div>
                      <div class="form-group">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="skillExperience" value="<?php echo $value['skillExperience']; ?>" id="experience" ><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel" value="<?php echo $value['skillLevel']; ?>" id="skilllevel" >
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                      <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php

                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                      <div id="educationFormsContainer">
                        <div class="education-form-container">
                          <div class="form-group">
                            <label for="category">Category *</label>
                            <select class="form-control" id="category" name="category" onchange="toggleCategoryFields()">
                              <option value="">Select a category</option>
                              <option value="architech">Architech</option>
                              <option value="developer">Developer</option>
                              <option value="tester">Tester</option>
                              <option value="uiux">UI/UX Design</option>
                              <option value="datascience">Data Scientist</option>
                              <option value="databaseadmin">Database Admin</option>
                              <option value="teacher">Teacher</option>
                              <option value="professor">Professor</option>
                              <!-- <option value="others">Others</option> -->
                            </select>
                          </div>
                          <div class="form-group">
                            <label for=" subcategory">Subcategory *</label>
                            <select class="form-control" id="subcategory" name="subcategory">
                              <option value="">Select a sub category </option>
                            </select>
                          </div>
                          <div class="form-group" id="otherCategoryFields" style="display: none;">
                            <label for="customCategoryInput">Custom Category</label>
                            <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                            <label for="customSubcategoryInput">Custom Subcategory</label>
                            <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                          </div>
                          <div class="form-group" id="customCategory" style="display: none;">
                            <label for="customCategoryInput">Category Name</label>
                            <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                          </div>

                          <div class="form-group" id="customSubcategory" style="display: none;">
                            <label for="customSubcategoryInput"> Subcategory Name</label>
                            <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
                          </div>

                          <div class="form-group">
                            <label for="preferred-location">Preferred Location to work</label>
                            <input type="text" class="form-control" id="preferred-location" " name=" preferred-location">

                            <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                          </div>
                          <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" name="experience">
                          </div>
                          <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="jobtype">Job Type</label>
                            <select class="form-control" id="jobtype" name="jobtype">
                              <option value="">Select a job type</option>
                              <option value="parttime">Part Time</option>
                              <option value="fulltime">Full Time</option>
                              <option value="both">Both</option>
                            </select>
                          </div>


                      <div class="form-group">
                        <label for="expected-salary">Expected Salary</label>
                        <input type="text" class="form-control" id="expected-salary" name="expected-salary">
                      </div>
                      
                     
                        <h4>Your Strength :</h4>
                      

                      <div class="form-group">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" name="skillname" >
                      </div>
                      <div class="form-group">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="skillExperience"  id="experience" ><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel"  id="skilllevel" >
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                      <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <?php
                  }
                  ?>

                </form>
              </div>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
              <script>
                var educationFormCount = 1;



                function addEducationForm(button) {
                  educationFormCount++;
                  var newEducationFormContainer = document.createElement('div');
                  newEducationFormContainer.className = 'education-form-container';

                  // Clone the original form
                  var originalForm = document.querySelector('.education-form-container');
                  var newForm = originalForm.cloneNode(true);
                  newForm.id = 'educationform_' + educationFormCount;

                  // Clear the values in the new form
                  clearFormFields(newForm);

                  // Append the new form to the container
                  newEducationFormContainer.appendChild(newForm);
                  document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                  // Move the "Submit" button to the new form
                  var submitButton = document.querySelector('button[type="submit"]');
                  newForm.appendChild(submitButton);

                  // Hide the "Add" button in the previous form
                  button.style.display = "none";
                }

                function clearFormFields(form) {
                  var fieldsToClear = form.querySelectorAll('input, select');
                  for (var i = 0; i < fieldsToClear.length; i++) {
                    fieldsToClear[i].value = '';

                  }
                }

                function toggleCategoryFields() {
                  var category = document.getElementById("category").value;
                  var subcategorySelect = document.getElementById("subcategory");
                  var otherCategoryFields = document.getElementById("otherCategoryFields");

                  // Clear existing options and hide the otherCategoryFields
                  subcategorySelect.innerHTML = "";
                  otherCategoryFields.style.display = "none";

                  if (category === "architech") {
                    addSubcategoryOption("Architect", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Design", subcategorySelect);
                    addSubcategoryOption("Project", subcategorySelect);
                    addSubcategoryOption("Principal", subcategorySelect);
                    addSubcategoryOption("Landscape", subcategorySelect);
                    addSubcategoryOption("Urban Planner", subcategorySelect);
                    addSubcategoryOption("Interior Designer", subcategorySelect);
                    addSubcategoryOption("Architectural Technologist", subcategorySelect);
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist", subcategorySelect);
                    addSubcategoryOption("Sustainable Design Consultant", subcategorySelect);
                    addSubcategoryOption("Architectural Drafter", subcategorySelect);
                    addSubcategoryOption("Architectural Visualization Artist", subcategorySelect);
                    addSubcategoryOption("Urban Designer", subcategorySelect);
                    addSubcategoryOption("Historic Preservation", subcategorySelect);
                    addSubcategoryOption("Residential Architect", subcategorySelect);
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician", subcategorySelect);
                    addSubcategoryOption("Architectural Educator", subcategorySelect);
                    addSubcategoryOption("Construction Project Manage", subcategorySelect);
                    addSubcategoryOption("Industrial Designer", subcategorySelect);
                    addSubcategoryOption("Healthcare Facility Planner", subcategorySelect);
                    addSubcategoryOption("Retail Space Designer", subcategorySelect);
                  } else if (category === "developer") {
                    addSubcategoryOption("Python Software Engineer", subcategorySelect);
                    addSubcategoryOption("Python", subcategorySelect);
                    addSubcategoryOption("Python Data Scientist", subcategorySelect);
                    addSubcategoryOption("Python Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Python Automation", subcategorySelect);
                    addSubcategoryOption("Java Software ", subcategorySelect);
                    addSubcategoryOption("Java", subcategorySelect);
                    addSubcategoryOption("Java Full Stack ", subcategorySelect);
                    addSubcategoryOption("Java Android ", subcategorySelect);
                    addSubcategoryOption("Java Spring ", subcategorySelect);
                    addSubcategoryOption("Java Microservices ", subcategorySelect);
                    addSubcategoryOption("JavaScript", subcategorySelect);
                    addSubcategoryOption("Front-end ", subcategorySelect);
                    addSubcategoryOption("Node.js ", subcategorySelect);
                    addSubcategoryOption("React ", subcategorySelect);
                    addSubcategoryOption("Angular", subcategorySelect);
                    addSubcategoryOption("Vue.js ", subcategorySelect);
                    addSubcategoryOption("Full Stack JavaScript ", subcategorySelect);
                    addSubcategoryOption("C#  ", subcategorySelect);
                    addSubcategoryOption(".NET ", subcategorySelect);
                    addSubcategoryOption("ASP.NET ", subcategorySelect);
                    addSubcategoryOption("Unity ", subcategorySelect);
                    addSubcategoryOption("Xamarin ", subcategorySelect);
                    addSubcategoryOption("C++  ", subcategorySelect);
                    addSubcategoryOption("Game(using C++)", subcategorySelect);
                    addSubcategoryOption("C++ Systems ", subcategorySelect);
                    addSubcategoryOption("PHP", subcategorySelect);
                    addSubcategoryOption("WordPress", subcategorySelect);
                    addSubcategoryOption("Laravel ", subcategorySelect);
                    addSubcategoryOption("Symfony ", subcategorySelect);
                    addSubcategoryOption("Ruby ", subcategorySelect);
                    addSubcategoryOption("Ruby on Rails ", subcategorySelect);
                    addSubcategoryOption("Swift ", subcategorySelect);
                    addSubcategoryOption("iOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("macOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("Kotlin ", subcategorySelect);
                    addSubcategoryOption("Android  (using Kotlin)", subcategorySelect);
                    addSubcategoryOption("Go  ", subcategorySelect);
                    addSubcategoryOption("Rust  ", subcategorySelect);
                    addSubcategoryOption("Systems  (using Rust", subcategorySelect);
                     addSubcategoryOption("TypeScript  ", subcategorySelect);
                     addSubcategoryOption("Front-end  (using TypeScript)", subcategorySelect);
                     addSubcategoryOption("SQL ", subcategorySelect);
                     addSubcategoryOption("Database ", subcategorySelect);
                     addSubcategoryOption("Scala  ", subcategorySelect);
                     addSubcategoryOption("Haskell  ", subcategorySelect);
                     addSubcategoryOption("Perl   ", subcategorySelect);
                     addSubcategoryOption("Lua   ", subcategorySelect);
                     addSubcategoryOption("Game  (using Lua) ", subcategorySelect);
                     addSubcategoryOption("MATLAB   ", subcategorySelect);
                     addSubcategoryOption("Data Analyst (using MATLAB) ", subcategorySelect);
                     
                  } else if (category === "tester") {
                    addSubcategoryOption("Software ", subcategorySelect);
                    addSubcategoryOption("Test Engineer", subcategorySelect);
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)", subcategorySelect);
                    addSubcategoryOption("Test Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Manual ", subcategorySelect);
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)", subcategorySelect);
                    addSubcategoryOption("Test Manager", subcategorySelect);
                    addSubcategoryOption("Performance ", subcategorySelect);
                    addSubcategoryOption("Usability ", subcategorySelect);
                    addSubcategoryOption("Regression ", subcategorySelect);
                    addSubcategoryOption("User Acceptance ", subcategorySelect);
                    addSubcategoryOption("Security ", subcategorySelect);
                    addSubcategoryOption("Mobile App ", subcategorySelect);
                    addSubcategoryOption("Game ", subcategorySelect);
                    addSubcategoryOption("Functional ", subcategorySelect);
                    addSubcategoryOption("Test Architect", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Continuous Integration", subcategorySelect);
                    addSubcategoryOption("Load ", subcategorySelect);
                    addSubcategoryOption("Test Designer", subcategorySelect);
                    addSubcategoryOption("Test Technician", subcategorySelect);
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Compliance ", subcategorySelect);
                    // addSubcategoryOption("Load", subcategorySelect);
                    // otherCategoryFields.style.display = "block";
                  } 
                  else if (category === "uiux") {
                    addSubcategoryOption("UI/UX Designer", subcategorySelect);
                    addSubcategoryOption("User Experience Designer", subcategorySelect);
                    addSubcategoryOption("User Interface Designer", subcategorySelect);
                    addSubcategoryOption("Interaction Designer", subcategorySelect);
                    addSubcategoryOption("Visual Designer", subcategorySelect);
                    addSubcategoryOption("UX Researcher", subcategorySelect);
                    addSubcategoryOption("UI/UX Architect", subcategorySelect);
                    addSubcategoryOption("Information Architect", subcategorySelect);
                    addSubcategoryOption("UX Strategist", subcategorySelect);
                    addSubcategoryOption("Product Designer", subcategorySelect);
                    addSubcategoryOption("User-Centered Design Specialist", subcategorySelect);
                    addSubcategoryOption("Usability Analyst", subcategorySelect);
                    addSubcategoryOption("UI/UX Developer", subcategorySelect);
                    addSubcategoryOption("Mobile App Designer", subcategorySelect);
                    addSubcategoryOption("Web Designer", subcategorySelect);
                    addSubcategoryOption("Visual Experience Designer", subcategorySelect);
                    addSubcategoryOption("UX Content Strategist", subcategorySelect);
                    addSubcategoryOption("Interaction Architect", subcategorySelect);
                    addSubcategoryOption("UX/UI Illustrator", subcategorySelect);
                    addSubcategoryOption("User Interface Animator", subcategorySelect);
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist", subcategorySelect);
                    addSubcategoryOption("Accessibility Designer ", subcategorySelect);
                    addSubcategoryOption("Prototype Designer ", subcategorySelect);
                    addSubcategoryOption("UI/UX Lead ", subcategorySelect);
                    addSubcategoryOption("Design Systems Manager ", subcategorySelect);
                    // addSubcategoryOption("Software", subcategorySelect);
                    
                  } else if (category === "datascience") {
                    addSubcategoryOption("Data Scientist", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Data Analyst", subcategorySelect);
                    addSubcategoryOption("Senior Data Analyst", subcategorySelect);
                    addSubcategoryOption("Statistician", subcategorySelect);
                    addSubcategoryOption("Business Intelligence Analyst", subcategorySelect);
                    addSubcategoryOption("Quantitative Analyst (Quant)", subcategorySelect);
                    addSubcategoryOption("Data Engineer", subcategorySelect);
                    addSubcategoryOption("Data Architect", subcategorySelect);
                    addSubcategoryOption("AI Research Scientist", subcategorySelect);
                    addSubcategoryOption("Predictive Modeler", subcategorySelect);
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer", subcategorySelect);
                    addSubcategoryOption("Computer Vision Engineer", subcategorySelect);
                    addSubcategoryOption("Big Data Engineer", subcategorySelect);
                    addSubcategoryOption("Analytics Manager", subcategorySelect);
                    addSubcategoryOption("Data Science Manager", subcategorySelect);
                    addSubcategoryOption("Chief Data Officer (CDO)", subcategorySelect);
                    addSubcategoryOption("Research Scientist (AI/ML)", subcategorySelect);
                    addSubcategoryOption("Decision Scientist", subcategorySelect);
                    addSubcategoryOption("Marketing Analyst", subcategorySelect);
                    addSubcategoryOption("Operations Research Analyst", subcategorySelect);
                    addSubcategoryOption("Data Visualization Specialist", subcategorySelect);
                    addSubcategoryOption("Customer Insights Analyst", subcategorySelect);
                    addSubcategoryOption("Fraud Analyst", subcategorySelect);
                  
                  }else if (category === "databaseadmin") {
                    addSubcategoryOption("Database  (DBA)", subcategorySelect);
                    addSubcategoryOption("Senior  Administrator", subcategorySelect);
                    addSubcategoryOption("Database Engineer", subcategorySelect);
                    addSubcategoryOption("Database Architect", subcategorySelect);
                    addSubcategoryOption("Database Analyst", subcategorySelect);
                    addSubcategoryOption("Data Warehouse ", subcategorySelect);
                    addSubcategoryOption("SQL Server", subcategorySelect);
                    addSubcategoryOption("Oracle Database Administrator", subcategorySelect);
                    addSubcategoryOption("MySQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("PostgreSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("MongoDB Administrator", subcategorySelect);
                    addSubcategoryOption("NoSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("DBMS Administrator (Database Management System)", subcategorySelect);
                    addSubcategoryOption("Database Operations Manager", subcategorySelect);
                    addSubcategoryOption("Database Performance Tuning Specialist", subcategorySelect);
                    addSubcategoryOption("Data Migration Specialist", subcategorySelect);
                    addSubcategoryOption("Database Security Administrator", subcategorySelect);
                    addSubcategoryOption("Database Backup and Recovery Specialist", subcategorySelect);
                    addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)", subcategorySelect);
                    addSubcategoryOption("Database Compliance Officer", subcategorySelect);
                    addSubcategoryOption("Database DevOps Engineer", subcategorySelect);
                    addSubcategoryOption("Database Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Database Replication Specialist", subcategorySelect);
                    addSubcategoryOption("Data Governance Manager", subcategorySelect);
                    addSubcategoryOption("Data Steward", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                  }
                  else if (category === "teacher") {
                    addSubcategoryOption("Tamil", subcategorySelect);
                    addSubcategoryOption("Mathematics ", subcategorySelect);
                    addSubcategoryOption("Math Instructor", subcategorySelect);
                    addSubcategoryOption("Algebra ", subcategorySelect);
                    addSubcategoryOption("Geometry ", subcategorySelect);
                    addSubcategoryOption("Calculus ", subcategorySelect);
                    addSubcategoryOption("Statistics ", subcategorySelect);
                    addSubcategoryOption("Math Tutor", subcategorySelect);
                    addSubcategoryOption("Math Coach", subcategorySelect);
                    addSubcategoryOption("Math Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Math Department Chair", subcategorySelect);
                    addSubcategoryOption("English ", subcategorySelect);
                    addSubcategoryOption("Language Arts ", subcategorySelect);
                    addSubcategoryOption("Literature ", subcategorySelect);
                    addSubcategoryOption("Writing Instructor", subcategorySelect);
                    addSubcategoryOption("Creative Writing ", subcategorySelect);
                    addSubcategoryOption("English as a Second Language (ESL) ", subcategorySelect);
                    addSubcategoryOption("Reading Specialist", subcategorySelect);
                    addSubcategoryOption("English Tutor", subcategorySelect);
                    addSubcategoryOption("English Department Chair", subcategorySelect);
                    addSubcategoryOption("Science ", subcategorySelect);
                    addSubcategoryOption("Biology ", subcategorySelect);
                    addSubcategoryOption("Chemistry ", subcategorySelect);
                    addSubcategoryOption("Physics ", subcategorySelect);
                    addSubcategoryOption("Environmental Science ", subcategorySelect);
                    addSubcategoryOption("Earth Science ", subcategorySelect);
                    addSubcategoryOption("Anatomy and Physiology ", subcategorySelect);
                    addSubcategoryOption("Science Lab Instructor", subcategorySelect);
                    addSubcategoryOption("Science Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Social Studies ", subcategorySelect);
                    addSubcategoryOption("History ", subcategorySelect);
                    addSubcategoryOption("Geography ", subcategorySelect);
                    addSubcategoryOption("Civics ", subcategorySelect);
                    addSubcategoryOption("Government ", subcategorySelect);
                    addSubcategoryOption("Economics ", subcategorySelect);
                    addSubcategoryOption("World History ", subcategorySelect);
                    addSubcategoryOption("Social Studies Department Chair", subcategorySelect);
                    addSubcategoryOption("Foreign Language ", subcategorySelect);
                    addSubcategoryOption("Language Instructor", subcategorySelect);
                    addSubcategoryOption("Spanish ", subcategorySelect);
                    addSubcategoryOption("French ", subcategorySelect);
                    addSubcategoryOption("German ", subcategorySelect);
                    addSubcategoryOption("Chinese ", subcategorySelect);
                    addSubcategoryOption("Language Lab Coordinator", subcategorySelect);
                    addSubcategoryOption("Physical Education ", subcategorySelect);
                    addSubcategoryOption("PE Instructor", subcategorySelect);
                    addSubcategoryOption("Fitness Coach", subcategorySelect);
                    addSubcategoryOption("Health Education ", subcategorySelect);
                    addSubcategoryOption("Sports Coach", subcategorySelect);
                    addSubcategoryOption("Physical Education Department Chair", subcategorySelect);
                    addSubcategoryOption("Art ", subcategorySelect);
                    addSubcategoryOption("Music ", subcategorySelect);
                    addSubcategoryOption("Drama ", subcategorySelect);
                    addSubcategoryOption("Visual Arts ", subcategorySelect);
                    addSubcategoryOption("Choir Director", subcategorySelect);
                    addSubcategoryOption("Band ", subcategorySelect);
                    addSubcategoryOption("Art History ", subcategorySelect);
                    addSubcategoryOption("Special Education ", subcategorySelect);
                    addSubcategoryOption("Learning Support ", subcategorySelect);
                    addSubcategoryOption("Resource ", subcategorySelect);
                    addSubcategoryOption("Inclusion ", subcategorySelect);
                    addSubcategoryOption("Autism Specialist", subcategorySelect);
                    addSubcategoryOption("Behavioral Interventionist", subcategorySelect);
                    addSubcategoryOption("Vocational Teacher", subcategorySelect);
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor", subcategorySelect);
                    addSubcategoryOption("Culinary Arts Instructor", subcategorySelect);
                    addSubcategoryOption("Automotive Technology ", subcategorySelect);
                    addSubcategoryOption("Computer Science ", subcategorySelect);
                    addSubcategoryOption("Digital Media Instructor", subcategorySelect);
            
                  }
                  else if (category === "professor") {
                    addSubcategoryOption("University ", subcategorySelect);
                    addSubcategoryOption("Assistant ", subcategorySelect);
                    addSubcategoryOption("Associate ", subcategorySelect);
                    addSubcategoryOption("Full ",subcategorySelect);
                    addSubcategoryOption("Distinguished ", subcategorySelect);
                    addSubcategoryOption("Adjunct ", subcategorySelect);
                    addSubcategoryOption("Visiting ", subcategorySelect);
                    addSubcategoryOption("Research ", subcategorySelect);
                    addSubcategoryOption("Clinical ", subcategorySelect);
                    addSubcategoryOption("Philosophy", subcategorySelect);
                    addSubcategoryOption("Professor of History", subcategorySelect);
                    addSubcategoryOption("English", subcategorySelect);
                    addSubcategoryOption("Psychology", subcategorySelect);
                    addSubcategoryOption("Sociology", subcategorySelect);
                    addSubcategoryOption("Political Science", subcategorySelect);
                    addSubcategoryOption("Anthropology", subcategorySelect);
                    addSubcategoryOption("Linguistics", subcategorySelect);
                    addSubcategoryOption("Biology", subcategorySelect);
                    addSubcategoryOption("Chemistry", subcategorySelect);
                    addSubcategoryOption("Physics", subcategorySelect);
                    addSubcategoryOption("Mathematics", subcategorySelect);
                    addSubcategoryOption("Geology", subcategorySelect);
                    addSubcategoryOption("Astronomy", subcategorySelect);
                    addSubcategoryOption(" Environmental Science", subcategorySelect);
                    addSubcategoryOption("Computer Science", subcategorySelect);
                    addSubcategoryOption("Electrical Engineering", subcategorySelect);
                    addSubcategoryOption("Mechanical Engineering", subcategorySelect);
                    addSubcategoryOption("Civil Engineering", subcategorySelect);
                    addSubcategoryOption("Chemical Engineering", subcategorySelect);
                    addSubcategoryOption("Information Technology", subcategorySelect);
                    addSubcategoryOption("Business Administration", subcategorySelect);
                    addSubcategoryOption("Economics", subcategorySelect);
                    addSubcategoryOption("Finance", subcategorySelect);
                    addSubcategoryOption("Marketing", subcategorySelect);
                    addSubcategoryOption("Management", subcategorySelect);
                    addSubcategoryOption("Accounting", subcategorySelect);
                    addSubcategoryOption("Fine Arts", subcategorySelect);
                    addSubcategoryOption("Music", subcategorySelect);
                    addSubcategoryOption("Visual Arts", subcategorySelect);
                    addSubcategoryOption("Theater", subcategorySelect);
                    addSubcategoryOption("Dance", subcategorySelect);
                    addSubcategoryOption("Film Studies", subcategorySelect);
                    addSubcategoryOption("Educational Psychology", subcategorySelect);
                    addSubcategoryOption("Medicine", subcategorySelect);
                    addSubcategoryOption("Nursing", subcategorySelect);
                    addSubcategoryOption("Public Health", subcategorySelect);
                    addSubcategoryOption("Pharmacy", subcategorySelect);
                    addSubcategoryOption("Dentistry", subcategorySelect);
                    addSubcategoryOption("Law", subcategorySelect);
                     addSubcategoryOption("Constitutional Law", subcategorySelect);
                     addSubcategoryOption("Criminal Law",subcategorySelect);
                     addSubcategoryOption("International Law", subcategorySelect);
                     addSubcategoryOption("Environmental Law", subcategorySelect);
                     addSubcategoryOption("Social Work", subcategorySelect);
                     addSubcategoryOption("Social Welfare", subcategorySelect);
                     addSubcategoryOption("Clinical Social Work", subcategorySelect);
                     addSubcategoryOption("Library Science", subcategorySelect);
                     addSubcategoryOption("Information Studies", subcategorySelect);
                     
                  }
                  else {
                    // Handle other categories here
                    addSubcategoryOption("Other Subcategory", subcategorySelect);
                  }
                }


                function validateForm() {
                  var category = document.getElementById("category").value;
                  var subcategory = document.getElementById("subcategory").value;
                  var preferredLocation = document.getElementById("preferred-location").value;
                  var jobtype = document.getElementById("jobtype").value;
                  var experience = document.getElementById("experience").value;
                  var description = document.getElementById("description").value;
                  var expectedSalary = document.getElementById("expected-salary").value;
                  // var skillExperience = document.getElementById("skillExperience").value;
                  // var skillName = docment.getElementById("skillname").value;
                  // var skillLevel = document.getElementById("skilllevel").value; 

                  if (category === "") {
                    alert("Please select a category.");
                    return false;
                  }

                  if (subcategory === "" && category !== "") {
                    alert("Please select a subcategory.");
                    return false;
                  }
                  if (preferredLocation.trim() === "") {
                    alert("Please provide a preferred location.");
                    return false;
                  }

                  if (experience.trim() === "") {
                    alert("Please provide your experience.");
                    return false;
                  }
                  if (description.trim() === "") {
                    alert("Please provide a description.");
                    return false;
                  }

                  if (jobtype.trim() === "") {
                    alert("Please select your job type.");
                    return false;
                  }
                  if (expectedSalary.trim() === "") {
                    alert("Please select your expected-salary.");
                    return false;
                  }
                  // if (skillExperience.trim() === "") {
                  //   alert("Please provide a skillExperience.");
                  //   return false;
                  // }
                  // if (skillName.trim() === "") {
                  //   alert("Please provide a skillExperience.");
                  //   return false;
                  // }


                 

                  return true;
                }
                // Function to update the subcategories based on the selected category

                // Helper function to add a subcategory option to the select element
                function addSubcategoryOption(value, selectElement) {
                  var option = document.createElement("option");
                  option.value = value.toLowerCase();
                  option.text = value;
                  selectElement.appendChild(option);
                }
              </script>

            <?php
          } elseif ($method == 'updateSkill') {
            ?>
              <div class="container">

                <h3>Skill Form</h3>
                <form id="skillForm" method="post" action="<?php echo baseUrl . "seekerController/updateInsertSkill"?>">
                <?php
                if (isset($updateSkill[0]['id'])) {
                  foreach ($updateSkill as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                 <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                 <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                  <div class="skill-entry">
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" value="<?php echo $value['skill']; ?>" name="skillname" required>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="experience" value="<?php echo $value['experience']; ?>" id="experience" required><br>
                          <option value="fresher" <?php if ($value['experience'] === 'fresher') echo ' selected'; ?>>Fresher</option>
                          <option value="0-2"<?php if ($value['experience'] === '0-2') echo ' selected'; ?>>0-2 years</option>
                          <option value="2-5"<?php if ($value['experience'] === '2-5') echo ' selected'; ?>>2-5 years</option>
                          <option value="5-10"<?php if ($value['experience'] === '5-10') echo ' selected'; ?>>5-10 years</option>
                          <option value="10-20"<?php if ($value['experience'] === '10-20') echo ' selected'; ?>>10-20 years</option>
                          <option value="20-above"<?php if ($value['experience'] === '20-above') echo ' selected'; ?>>20 years above</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel" value="<?php echo $value['skill_level']; ?>" id="skilllevel" required>
                          <option value="beginner" <?php if ($value['skill_level'] === 'beginner') echo ' selected'; ?>>Beginner</option>
                          <option value="intermediate" <?php if ($value['skill_level'] === 'intermediate') echo ' selected'; ?>>Intermediate</option>
                          <option value="advanced" <?php if ($value['skill_level'] === 'advanced') echo ' selected'; ?>>Advanced</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                  <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                  <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                       <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                               <div class="skill-entry">
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" name="skillname[]" required>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="experience[]" id="experience" required><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="col-md-4 mb-3">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel[]" id="skilllevel" required>
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                  <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                  <?php
                  }
                  ?>
                </form>

                <ul id="addedSkills"></ul>
              </div>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

              <script>
                $(document).ready(function() {
                  $("#addSkillBtn").click(function() {
                    const clonedField = $(".skill-entry").first().clone();
                    $("#skillForm").append(clonedField);
                  });

                  $("#skillForm").submit(function() {
                    const skillDetails = [];


                    addSubcategoryOption()
                  } else if (category === "developer") {
                    addSubcategoryOption("Python Software Engineer", subcategorySelect);
                    addSubcategoryOption("Python", subcategorySelect);
                    addSubcategoryOption("Python Data Scientist", subcategorySelect);
                    addSubcategoryOption("Python Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Python Automation", subcategorySelect);
                    addSubcategoryOption("Java Software ", subcategorySelect);
                    addSubcategoryOption("Java", subcategorySelect);
                    addSubcategoryOption("Java Full Stack ", subcategorySelect);
                    addSubcategoryOption("Java Android ", subcategorySelect);
                    addSubcategoryOption("Java Spring ", subcategorySelect);
                    addSubcategoryOption("Java Microservices ", subcategorySelect);
                    addSubcategoryOption("JavaScript ", subcategorySelect);
                    addSubcategoryOption("Front-end ", subcategorySelect);
                    addSubcategoryOption("Node.js ", subcategorySelect);
                    addSubcategoryOption("React ", subcategorySelect);
                    addSubcategoryOption("Angular ", subcategorySelect);
                    addSubcategoryOption("Vue.js ", subcategorySelect);
                    addSubcategoryOption("Full Stack JavaScript ", subcategorySelect);
                    addSubcategoryOption("C#  ", subcategorySelect);
                    addSubcategoryOption(".NET ", subcategorySelect);
                    addSubcategoryOption("ASP.NET ", subcategorySelect);
                    addSubcategoryOption("Unity ", subcategorySelect);
                    addSubcategoryOption("Xamarin ", subcategorySelect);
                    addSubcategoryOption("C++  ", subcategorySelect);
                    addSubcategoryOption("Game(using C++)", subcategorySelect);
                    addSubcategoryOption("C++ Systems ", subcategorySelect);
                    addSubcategoryOption("PHP", subcategorySelect);
                    addSubcategoryOption("WordPress", subcategorySelect);
                    addSubcategoryOption("Laravel ", subcategorySelect);
                    addSubcategoryOption("Symfony ", subcategorySelect);
                    addSubcategoryOption("Ruby ", subcategorySelect);
                    addSubcategoryOption("Ruby on Rails ", subcategorySelect);
                    addSubcategoryOption("Swift ", subcategorySelect);
                    addSubcategoryOption("iOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("macOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("Kotlin ", subcategorySelect);
                    addSubcategoryOption("Android  (using Kotlin)", subcategorySelect);
                    addSubcategoryOption("Go  ", subcategorySelect);
                    addSubcategoryOption("Rust  ", subcategorySelect);
                    addSubcategoryOption("Systems  (using Rust", subcategorySelect);
                    addSubcategoryOption("TypeScript  ", subcategorySelect);
                    addSubcategoryOption("Front-end  (using TypeScript)", subcategorySelect);
                    addSubcategoryOption("SQL ", subcategorySelect);
                    addSubcategoryOption("Database ", subcategorySelect);
                    addSubcategoryOption("Scala  ", subcategorySelect);
                    addSubcategoryOption("Haskell  ", subcategorySelect);
                    addSubcategoryOption("Perl   ", subcategorySelect);
                    addSubcategoryOption("Lua   ", subcategorySelect);
                    addSubcategoryOption("Game  (using Lua) ", subcategorySelect);
                    addSubcategoryOption("MATLAB   ", subcategorySelect);
                    addSubcategoryOption("Data Analyst (using MATLAB) ", subcategorySelect);
                  } else if (category === "tester") {
                    addSubcategoryOption("Software ", subcategorySelect);
                    addSubcategoryOption("Test Engineer", subcategorySelect);
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)", subcategorySelect);
                    addSubcategoryOption("Test Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Manual ", subcategorySelect);
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)", subcategorySelect);
                    addSubcategoryOption("Test Manager", subcategorySelect);
                    addSubcategoryOption("Performance ", subcategorySelect);
                    addSubcategoryOption("Usability ", subcategorySelect);
                    addSubcategoryOption("Regression ", subcategorySelect);
                    addSubcategoryOption("User Acceptance ", subcategorySelect);
                    addSubcategoryOption("Security ", subcategorySelect);
                    addSubcategoryOption("Mobile App ", subcategorySelect);
                    addSubcategoryOption("Game ", subcategorySelect);
                    addSubcategoryOption("Functional ", subcategorySelect);
                    addSubcategoryOption("Test Architect", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Continuous Integration ", subcategorySelect);
                    addSubcategoryOption("Load ", subcategorySelect);
                    addSubcategoryOption("Test Designer", subcategorySelect);
                    addSubcategoryOption("Test Technician", subcategorySelect);
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Compliance ", subcategorySelect);
                  } else if (selectedCategory === "uiux") {
                    addSubcategoryOption("UI/UX Designer", subcategorySelect);
                    addSubcategoryOption("User Experience Designer", subcategorySelect);
                    addSubcategoryOption("User Interface Designer", subcategorySelect);
                    addSubcategoryOption("Interaction Designer", subcategorySelect);
                    addSubcategoryOption("Visual Designer", subcategorySelect);
                    addSubcategoryOption("UX Researcher", subcategorySelect);
                    addSubcategoryOption("UI/UX Architect", subcategorySelect);
                    addSubcategoryOption("Information Architect", subcategorySelect);
                    addSubcategoryOption("UX Strategist", subcategorySelect);
                    addSubcategoryOption("Product Designer", subcategorySelect);
                    addSubcategoryOption("User-Centered Design Specialist", subcategorySelect);
                    addSubcategoryOption("Usability Analyst", subcategorySelect);
                    addSubcategoryOption("UI/UX Developer", subcategorySelect);
                    addSubcategoryOption("Mobile App Designer", subcategorySelect);
                    addSubcategoryOption("Web Designer", subcategorySelect);
                    addSubcategoryOption("Visual Experience Designer", subcategorySelect);
                    addSubcategoryOption("UX Content Strategist", subcategorySelect);
                    addSubcategoryOption("Interaction Architect", subcategorySelect);
                    addSubcategoryOption("UX/UI Illustrator", subcategorySelect);
                    addSubcategoryOption("User Interface Animator", subcategorySelect);
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist", subcategorySelect);
                    addSubcategoryOption("Accessibility Designer ", subcategorySelect);
                    addSubcategoryOption("Prototype Designer ", subcategorySelect);
                    addSubcategoryOption("UI/UX Lead ", subcategorySelect);
                    addSubcategoryOption("Design Systems Manager ", subcategorySelect);

                  } else if (category === "datascience") {
                    addSubcategoryOption("Data Scientist", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Data Analyst", subcategorySelect);
                    addSubcategoryOption("Senior Data Analyst", subcategorySelect);
                    addSubcategoryOption("Statistician", subcategorySelect);
                    addSubcategoryOption("Business Intelligence Analyst", subcategorySelect);
                    addSubcategoryOption("Quantitative Analyst (Quant)", subcategorySelect);
                    addSubcategoryOption("Data Engineer", subcategorySelect);
                    addSubcategoryOption("Data Architect", subcategorySelect);
                    addSubcategoryOption("AI Research Scientist", subcategorySelect);
                    addSubcategoryOption("Predictive Modeler", subcategorySelect);
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer", subcategorySelect);
                    addSubcategoryOption("Computer Vision Engineer", subcategorySelect);
                    addSubcategoryOption("Big Data Engineer", subcategorySelect);
                    addSubcategoryOption("Analytics Manager", subcategorySelect);
                    addSubcategoryOption("Data Science Manager", subcategorySelect);
                    addSubcategoryOption("Chief Data Officer (CDO)", subcategorySelect);
                    addSubcategoryOption("Research Scientist (AI/ML)", subcategorySelect);
                    addSubcategoryOption("Decision Scientist", subcategorySelect);
                    addSubcategoryOption("Marketing Analyst", subcategorySelect);
                    addSubcategoryOption("Operations Research Analyst", subcategorySelect);
                    addSubcategoryOption("Data Visualization Specialist", subcategorySelect);
                    addSubcategoryOption("Customer Insights Analyst", subcategorySelect);
                    addSubcategoryOption("Fraud Analyst", subcategorySelect);

                  } else if (category === "databaseadmin") {
                    addSubcategoryOption("Database  (DBA)", subcategorySelect);
                    addSubcategoryOption("Senior  Administrator", subcategorySelect);
                    addSubcategoryOption("Database Engineer", subcategorySelect);
                    addSubcategoryOption("Database Architect", subcategorySelect);
                    addSubcategoryOption("Database Analyst", subcategorySelect);
                    addSubcategoryOption("Data Warehouse ", subcategorySelect);
                    addSubcategoryOption("SQL Server", subcategorySelect);
                    addSubcategoryOption("Oracle Database Administrator", subcategorySelect);
                    addSubcategoryOption("MySQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("PostgreSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("MongoDB Administrator", subcategorySelect);
                    addSubcategoryOption("NoSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("DBMS Administrator (Database Management System)", subcategorySelect);
                    addSubcategoryOption("Database Operations Manager", subcategorySelect);
                    addSubcategoryOption("Database Performance Tuning Specialist", subcategorySelect);
                    addSubcategoryOption("Data Migration Specialist", subcategorySelect);
                    addSubcategoryOption("Database Security Administrator", subcategorySelect);
                    addSubcategoryOption("Database Backup and Recovery Specialist", subcategorySelect);
                    addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)", subcategorySelect);
                    addSubcategoryOption("Database Compliance Officer", subcategorySelect);
                    addSubcategoryOption("Database DevOps Engineer", subcategorySelect);
                    addSubcategoryOption("Database Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Database Replication Specialist", subcategorySelect);
                    addSubcategoryOption("Data Governance Manager", subcategorySelect);
                    addSubcategoryOption("Data Steward", subcategorySelect);
                  } else if (category === "teacher") {
                    addSubcategoryOption("Tamil", subcategorySelect);
                    addSubcategoryOption("Mathematics ", subcategorySelect);
                    addSubcategoryOption("Math Instructor", subcategorySelect);
                    addSubcategoryOption("Algebra ", subcategorySelect);
                    addSubcategoryOption("Geometry ", subcategorySelect);
                    addSubcategoryOption("Calculus ", subcategorySelect);
                    addSubcategoryOption("Statistics ", subcategorySelect);
                    addSubcategoryOption("Math Tutor", subcategorySelect);
                    addSubcategoryOption("Math Coach", subcategorySelect);
                    addSubcategoryOption("Math Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Math Department Chair", subcategorySelect);
                    addSubcategoryOption("English ", subcategorySelect);
                    addSubcategoryOption("Language Arts ", subcategorySelect);
                    addSubcategoryOption("Literature ", subcategorySelect);
                    addSubcategoryOption("Writing Instructor", subcategorySelect);
                    addSubcategoryOption("Creative Writing ", subcategorySelect);
                    addSubcategoryOption("English as a Second Language (ESL) ", subcategorySelect);
                    addSubcategoryOption("Reading Specialist", subcategorySelect);
                    addSubcategoryOption("English Tutor", subcategorySelect);
                    addSubcategoryOption("English Department Chair", subcategorySelect);
                    addSubcategoryOption("Science ", subcategorySelect);
                    addSubcategoryOption("Biology ", subcategorySelect);
                    addSubcategoryOption("Chemistry ", subcategorySelect);
                    addSubcategoryOption("Physics ", subcategorySelect);
                    addSubcategoryOption("Environmental Science ", subcategorySelect);
                    addSubcategoryOption("Earth Science ", subcategorySelect);
                    addSubcategoryOption("Anatomy and Physiology ", subcategorySelect);
                    addSubcategoryOption("Science Lab Instructor", subcategorySelect);
                    addSubcategoryOption("Science Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Social Studies ", subcategorySelect);
                    addSubcategoryOption("History ", subcategorySelect);
                    addSubcategoryOption("Geography ", subcategorySelect);
                    addSubcategoryOption("Civics ", subcategorySelect);
                    addSubcategoryOption("Government ", subcategorySelect);
                    addSubcategoryOption("Economics ", subcategorySelect);
                    addSubcategoryOption("World History ", subcategorySelect);
                    addSubcategoryOption("Social Studies Department Chair", subcategorySelect);
                    addSubcategoryOption("Foreign Language ", subcategorySelect);
                    addSubcategoryOption("Language Instructor", subcategorySelect);
                    addSubcategoryOption("Spanish ", subcategorySelect);
                    addSubcategoryOption("French ", subcategorySelect);
                    addSubcategoryOption("German ", subcategorySelect);
                    addSubcategoryOption("Chinese ", subcategorySelect);
                    addSubcategoryOption("Language Lab Coordinator", subcategorySelect);
                    addSubcategoryOption("Physical Education ", subcategorySelect);
                    addSubcategoryOption("PE Instructor", subcategorySelect);
                    addSubcategoryOption("Fitness Coach", subcategorySelect);
                    addSubcategoryOption("Health Education ", subcategorySelect);
                    addSubcategoryOption("Sports Coach", subcategorySelect);
                    addSubcategoryOption("Physical Education Department Chair", subcategorySelect);
                    addSubcategoryOption("Art ", subcategorySelect);
                    addSubcategoryOption("Music ", subcategorySelect);
                    addSubcategoryOption("Drama ", subcategorySelect);
                    addSubcategoryOption("Visual Arts ", subcategorySelect);
                    addSubcategoryOption("Choir Director", subcategorySelect);
                    addSubcategoryOption("Band ", subcategorySelect);
                    addSubcategoryOption("Art History ", subcategorySelect);
                    addSubcategoryOption("Special Education ", subcategorySelect);
                    addSubcategoryOption("Learning Support ", subcategorySelect);
                    addSubcategoryOption("Resource ", subcategorySelect);
                    addSubcategoryOption("Inclusion ", subcategorySelect);
                    addSubcategoryOption("Autism Specialist", subcategorySelect);
                    addSubcategoryOption("Behavioral Interventionist", subcategorySelect);
                    addSubcategoryOption("Vocational Teacher", subcategorySelect);
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor", subcategorySelect);
                    addSubcategoryOption("Culinary Arts Instructor", subcategorySelect);
                    addSubcategoryOption("Automotive Technology ", subcategorySelect);
                    addSubcategoryOption("Computer Science ", subcategorySelect);
                    addSubcategoryOption("Digital Media Instructor", subcategorySelect);
                  } else if (category === "professor") {
                    addSubcategoryOption("University ", subcategorySelect);
                    addSubcategoryOption("Assistant ", subcategorySelect);
                    addSubcategoryOption("Associate ", subcategorySelect);
                    addSubcategoryOption("Full ", subcategorySelect);
                    addSubcategoryOption("Distinguished ", subcategorySelect);
                    addSubcategoryOption("Adjunct ", subcategorySelect);
                    addSubcategoryOption("Visiting ", subcategorySelect);
                    addSubcategoryOption("Research ", subcategorySelect);
                    addSubcategoryOption("Clinical ", subcategorySelect);
                    addSubcategoryOption("Philosophy", subcategorySelect);
                    addSubcategoryOption("Professor of History", subcategorySelect);
                    addSubcategoryOption("English", subcategorySelect);
                    addSubcategoryOption("Psychology", subcategorySelect);
                    addSubcategoryOption("Sociology", subcategorySelect);
                    addSubcategoryOption("Political Science", subcategorySelect);
                    addSubcategoryOption("Anthropology", subcategorySelect);
                    addSubcategoryOption("Linguistics", subcategorySelect);
                    addSubcategoryOption("Biology", subcategorySelect);
                    addSubcategoryOption("Chemistry", subcategorySelect);
                    addSubcategoryOption("Physics", subcategorySelect);
                    addSubcategoryOption("Mathematics", subcategorySelect);
                    addSubcategoryOption("Geology", subcategorySelect);
                    addSubcategoryOption("Astronomy", subcategorySelect);
                    addSubcategoryOption(" Environmental Science", subcategorySelect);
                    addSubcategoryOption("Computer Science", subcategorySelect);
                    addSubcategoryOption("Electrical Engineering", subcategorySelect);
                    addSubcategoryOption("Mechanical Engineering", subcategorySelect);
                    addSubcategoryOption("Civil Engineering", subcategorySelect);
                    addSubcategoryOption("Chemical Engineering", subcategorySelect);
                    addSubcategoryOption("Information Technology", subcategorySelect);
                    addSubcategoryOption("Business Administration", subcategorySelect);
                    addSubcategoryOption("Economics", subcategorySelect);
                    addSubcategoryOption("Finance", subcategorySelect);
                    addSubcategoryOption("Marketing", subcategorySelect);
                    addSubcategoryOption("Management", subcategorySelect);
                    addSubcategoryOption("Accounting", subcategorySelect);
                    addSubcategoryOption("Fine Arts", subcategorySelect);
                    addSubcategoryOption("Music", subcategorySelect);
                    addSubcategoryOption("Visual Arts", subcategorySelect);
                    addSubcategoryOption("Theater", subcategorySelect);
                    addSubcategoryOption("Dance", subcategorySelect);
                    addSubcategoryOption("Film Studies", subcategorySelect);
                    addSubcategoryOption("Educational Psychology", subcategorySelect);
                    addSubcategoryOption("Medicine", subcategorySelect);
                    addSubcategoryOption("Nursing", subcategorySelect);
                    addSubcategoryOption("Public Health", subcategorySelect);
                    addSubcategoryOption("Pharmacy", subcategorySelect);
                    addSubcategoryOption("Dentistry", subcategorySelect);
                    addSubcategoryOption("Law", subcategorySelect);
                    addSubcategoryOption("Constitutional Law", subcategorySelect);
                    addSubcategoryOption("Criminal Law", subcategorySelect);
                    addSubcategoryOption("International Law", subcategorySelect);
                    addSubcategoryOption("Environmental Law", subcategorySelect);
                    addSubcategoryOption("Social Work", subcategorySelect);
                    addSubcategoryOption("Social Welfare", subcategorySelect);
                    addSubcategoryOption("Clinical Social Work", subcategorySelect);
                    addSubcategoryOption("Library Science", subcategorySelect);
                    addSubcategoryOption("Information Studies", subcategorySelect);
                  } else {
                    // Handle other categories here
                    addSubcategoryOption("Other Subcategory", subcategorySelect);
                  }
                }


                function validateForm() {
                  var category = document.getElementById("category").value;
                  var subcategory = document.getElementById("subcategory").value;
                  var preferredLocation = document.getElementById("preferred-location").value;
                  var jobtype = document.getElementById("jobtype").value;
                  var experience = document.getElementById("experience").value;
                  var description = document.getElementById("description").value;

                  if (category === "") {
                    alert("Please select a category.");
                    return false;
                  }

                  if (subcategory === "" && category !== "") {
                    alert("Please select a subcategory.");
                    return false;
                  }
                  if (preferredLocation.trim() === "") {
                    alert("Please provide a preferred location.");
                    return false;
                  }

                  if (experience.trim() === "") {
                    alert("Please provide your experience.");
                    return false;
                  }

                  if (jobtype.trim() === "") {
                    alert("Please select your job type.");
                    return false;
                  }


                  if (description.trim() === "") {
                    alert("Please provide a description.");
                    return false;
                  }

                  return true;
                }
                // Function to update the subcategories based on the selected category

                // Helper function to add a subcategory option to the select element
                function addSubcategoryOption(value, selectElement) {
                  var option = document.createElement("option");
                  option.value = value.toLowerCase();
                  option.text = value;
                  selectElement.appendChild(option);
                }
              </script>

            <?php
          } elseif ($method == 'updateSkill') {
            ?>
              <div class="container">

                <h3>Skill Form</h3>
                <form id="skillForm" method="post" action="<?php echo baseUrl . "seekerController/updateInsertSkill" ?>">
                  <?php
                  if (isset($updateSkill[0]['id'])) {
                    foreach ($updateSkill as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                  ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                      <div class="skill-entry">
                        <div class="form-row">
                          <div class="col-md-4 mb-3">
                            <br><label for="skillName">Skill Name</label>
                            <input type="text" class="form-control" id="skillname" value="<?php echo $value['skill']; ?>" name="skillname" required>
                          </div>
                          <div class="col-md-4 mb-3">
                            <br><label for="experience">Experience</label>
                            <select class="form-control" name="experience" value="<?php echo $value['experience']; ?>" id="experience" required><br>
                              <option value="fresher" <?php if ($value['experience'] === 'fresher') echo ' selected'; ?>>Fresher</option>
                              <option value="0-2" <?php if ($value['experience'] === '0-2') echo ' selected'; ?>>0-2 years</option>
                              <option value="2-5" <?php if ($value['experience'] === '2-5') echo ' selected'; ?>>2-5 years</option>
                              <option value="5-10" <?php if ($value['experience'] === '5-10') echo ' selected'; ?>>5-10 years</option>
                              <option value="10-20" <?php if ($value['experience'] === '10-20') echo ' selected'; ?>>10-20 years</option>
                              <option value="20-above" <?php if ($value['experience'] === '20-above') echo ' selected'; ?>>20 years above</option>
                            </select>
                          </div>
                          <div class="col-md-4 mb-3">
                            <br><label for="skillLevel">Skill Level</label>
                            <select class="form-control" name="skilllevel" value="<?php echo $value['skill_level']; ?>" id="skilllevel" required>
                              <option value="beginner" <?php if ($value['skill_level'] === 'beginner') echo ' selected'; ?>>Beginner</option>
                              <option value="intermediate" <?php if ($value['skill_level'] === 'intermediate') echo ' selected'; ?>>Intermediate</option>
                              <option value="advanced" <?php if ($value['skill_level'] === 'advanced') echo ' selected'; ?>>Advanced</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                      <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                    <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                    ?>
                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                    <div class="skill-entry">
                      <div class="form-row">
                        <div class="col-md-4 mb-3">
                          <br><label for="skillName">Skill Name</label>
                          <input type="text" class="form-control" id="skillname" name="skillname[]" required>
                        </div>
                        <div class="col-md-4 mb-3">
                          <br><label for="experience">Experience</label>
                          <select class="form-control" name="experience[]" id="experience" required><br>
                            <option value="fresher">Fresher</option>
                            <option value="0-2">0-2 years</option>
                            <option value="2-5">2-5 years</option>
                            <option value="5-10">5-10 years</option>
                            <option value="10-20">10-20 years</option>
                            <option value="20-above">20 years above</option>
                          </select>
                        </div>
                        <div class="col-md-4 mb-3">
                          <br><label for="skillLevel">Skill Level</label>
                          <select class="form-control" name="skilllevel[]" id="skilllevel" required>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="advanced">Advanced</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                    <button class="btn" id="addskillsubmit" type="submit">Submit</button>
                  <?php
                  }
                  ?>
                </form>

                <ul id="addedSkills"></ul>
              </div>

              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

              <script>
                $(document).ready(function() {
                  $("#addSkillBtn").click(function() {
                    const clonedField = $(".skill-entry").first().clone();
                    $("#skillForm").append(clonedField);
                  });

                  $("#skillForm").submit(function() {
                    const skillDetails = [];

                    // $(".skill-entry").each(function() {
                    //   const skillName = $(this).find('input[name="skillname[]"]').val();
                    //   const experience = $(this).find('select[name="experience[]"]').val();
                    //   const skillLevel = $(this).find('select[name="skilllevel[]"]').val();
                    //   skillDetails.push(`${skillName} - Experience: ${experience}, Skill Level: ${skillLevel}`);
                    // });

                    $("#addedSkills").empty();
                    skillDetails.forEach(skill => {
                      $("#addedSkills").append(`<li>${skill}</li>`);
                    });
                  });
                });
              </script>

            <?php
          } else if ($method == 'resume') {
            ?>
              <div class="container">
                <h3>Upload resume</h3>
                <form id="resumeForm" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/resume" ?>">

                  <div class="form-group">
                    <label for="file">Upload Resume</label>
                    <input type="file" name="file" placeholder="upload file....">
                  </div>

                  <input id="resumeButton" type="submit" value="submit">

              </div>
              <table>

                <!-- <tr>
                  <th>File Name</th>
                  <th>Type</th>
                  <th>Size</th>
                  <th>path</th>
                  <tr> -->
                <?php
                if (isset($resume[0]['id'])) {
                  foreach ($resume as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                    <tr>
                      <th><?= $data['file_name'] ?></th>
                      <th><?= $data['file_type'] ?></th>
                      <th><?= $data['file_size'] ?></th>
                      <th><?= $data['file_path'] ?></th>
                    <tr>
                    <?php
                  }
                    ?>
                  <?php
                }
                  ?>
              </table>
              <script>
                reusme = document.getElementById('resumeFile');

                function validateForm() {
                  if (resume.value === '') {
                    alert('please choose a resume!');
                  }
                }
              </script>
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <?php
          } elseif ($method == 'experienceTable') {
            ?>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <div class="">
                <h2 class="text-center">Experience Details</h2>
                <a id="regis" href="<?php echo baseUrl . "seekerController/addExperirenceForm" ?>">+ Add Experience Details</a>

                <div class="clearfix"></div>
                <br>

                <div class="table-responsive">

                  <thead>
                    <table class="table table-bordered table-striped">

                      <tr>
                        <th>ID</th>
                        <th>Job Category</th>
                        <th>Job Subcategory</th>
                        <th>Experience</th>
                        <th>Companyname</th>
                        <th>Role</th>
                        <th>Name Of Employer</th>
                        <th>Mobile Number Of Employer</th>
                        <th>Email Id</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php
                    if (isset($experienceTable[0]['id'])) {
                      foreach ($experienceTable as $key => $value) {
                        $seekerId = $_SESSION['seekerId'];
                    ?>
                        <tr>

                          <td><?php echo $value['id'] ?></td>

                          <td><?php echo $value['other_category'] ?></td>
                          <td><?php echo $value['other_sub_category'] ?></td>
                          <td><?php echo $value['experience'] ?></td>
                          <td><?php echo $value['company_name'] ?></td>
                          <td><?php echo $value['job_role'] ?></td>
                          <td><?php echo $value['previous_employer_name'] ?></td>
                          <td><?php echo $value['previous_employer_mobile'] ?></td>
                          <td><?php echo $value['previous_employer_email'] ?></td>
                          <td>
                            <div class="btn-group" role="group">
                              <!-- <button class="btn btn-primary">View</button> -->
                              <!-- <button class="btn btn-warning">Update</button> -->
                              <!-- <button class="btn btn-danger">Delete</button> -->
                              <a id="regis" id="updates" href="<?php echo baseUrl . "seekerController/updateExperience" ?>/<?php echo $value['id'] ?>">Update</a>
                              <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteExperience" ?>/<?php echo $value['id'] ?>">delete</a>
                            </div>
                          </td>
                        </tr>

                    <?php }
                    } ?>
                  </tbody>
                  </table>
                </div>
              </div>




            <?php
          }
          if ($method == 'addExperirenceForm') {
            ?>

              <div class="container">
                <h3>Experience Details Form</h3>

                <form name="experienceform" method="post" onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "seekerController/insertExperienceForm" ?>">


                  <div class="form-group">
                    <label for="category">Category:</label>
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
                      <option value="others">Others</option>
                    </select>
                    <div id="category_error" class="error"></div>
                  </div>
                  <div class="form-group">
                    <label for="subcategory">Subcategory:</label>
                    <select class="form-control" id="subcategory" name="subcategory" disabled>
                      <option value="">Select a Subcategory</option>
                    </select>
                    <div id="subcategory_error" class="error"></div>
                  </div>


                  <div class="form-group">
                    <label for="experience">Experience</label>
                    <select class="form-control" id="experience" name="experience">
                      <option value="">Select your experience</option>
                      <option value="fresher">Fresher</option>
                      <option value="0-2">0-2</option>
                      <option value="3-5">3-5</option>
                      <option value="5-10">5-10</option>
                      <option value="10-15">10-15</option>
                      <option value="15-20">15-20</option>
                      <option value="above 20 years">Above 20 years</option>
                    </select>
                    <div id="experience_error" class="error"></div>
                  </div>
                  <div class="form-group" id="otherCategoryField" style="display: none;">
                    <label for="othercategory">Other Category:</label>
                    <select class="form-control" id="experience" name="experience">
                      <input type="text" class="form-control" id="othercategory" name="othercategory">
                  </div>

                  <div class="form-group" id="otherSubcategoryField" style="display: none;">
                    <label for="othersubcategory">Other Subcategory:</label>
                    <select class="form-control" id="experience" name="experience">
                      <input type="text" class="form-control" id="othersubcategory" name="othersubcategory">
                  </div>





                  <div class="form-group">
                    <label for="company name">Company Name</label>
                    <input type="text" class="form-control" id="companyname" name="companyname">
                    <div id="companyname_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="role">Role in the company</label>
                    <input type="text" class="form-control" id="role" name="role">
                    <div id="role_error" class="error"></div>
                  </div>

                  <h4>Previous Employer details</h4>

                  <div class="form-group">
                    <label for="Name">Name of employer*</label>
                    <input type="text" class="form-control" id="nameofemployer" name="nameofemployer">
                    <div id="name_error" class="error"></div>
                  </div>

                  <div class="form-group">
                    <label for="phone number">Phone Number</label>
                    <input type="text" class="form-control" id="number" name="number">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="emailid" name="emailid">
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>


                </form>
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
                    addSubcategoryOption("Landscape ");
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
                  } else {
                    hideOtherCategoryFields();
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

                function showOtherCategoryFields() {
                  document.getElementById("otherCategoryField").style.display = "block";
                  document.getElementById("otherSubcategoryField").style.display = "block";
                }

                function hideOtherCategoryFields() {
                  document.getElementById("otherCategoryField").style.display = "none";
                  document.getElementById("otherSubcategoryField").style.display = "none";
                }

                function validateexpForm() {
                  var category = document.getElementById("category");
                  var subcategory = document.getElementById("subcategory");
                  var experience = document.getElementById("experience");
                  var companyname = document.getElementById("companyname");
                  var role = document.getElementById("role");
                  var name = document.getElementById("nameofemployer");
                  var phonenumber = document.getElementById("phonenumber");
                  var email = document.getElementById("email");

                  if (category.value === '') {
                    displayError('Category is required.', 'category_error');
                    return false;
                  }


              function validateexpForm() {
                var category = document.getElementById("category");
                var subcategory = document.getElementById("subcategory");
                var experience = document.getElementById("experience");
                var companyname = document.getElementById("companyname");
                var role = document.getElementById("role");
                var name = document.getElementById("nameofemployer");
                var phonenumber = document.getElementById("phonenumber");
                var email = document.getElementById("email");

                if (category.value === '') {
                  alert("Category is required");
                  displayError('Category is required.', 'category_error');
                  return false;
                }

                if (subcategory.value === '') {
                  alert("Please select a subcategory");
                  displayError('Please select a subcategory.', 'subcategory_error');
                  return false;
                }
                if (experience.value === 'fresher') {
                  hideFields();
              } else if (experience.value === '') {
                alert("Please select an experience.");
                  displayError('Please select an experience.', 'experience_error');
                  return false;
              }
                if (companyname.value === '') {
                  alert("'Please enter a company name");
                  displayError('Please enter a company name.', 'companyname_error');
                  return false;
                }

                if (role.value === '') {
                  alert("Please enter a role.");
                  displayError('Please enter a role.', 'role_error');
                  return false;
                }

                if (companyname.value === '') {
                  alert("please enter a company name");
                  displayError('please enter a company name', 'companyname_error');
                  return false;
                }
                if (role.value === '') {
                  alert("please enter a role");
                  displayError('please enter a role', 'role_error');
                  return false;
                }
                if (name.value === '') {
                  alert("please enter a employer name");
                  displayError('please enter a employer name', 'name_error');
                  return false;

                }
              </script>

            <?php
          }
          if ($method == 'updateExperience') {
            ?>

              <div class="container">
                <h3>Experience Details Form</h3>

                <form name="experienceform" method="post" onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "seekerController/updateInsertExperience" ?>">
                  <?php
                  if (isset($updateExperience[0]['id'])) {
                    foreach ($updateExperience as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                  ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">


                      <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" id="category" name="category" onchange="updateSubcategories()">
                          <option value="">Select a Category</option>
                          <option value="architech" <?php if ($value['other_category'] === 'architech') echo ' selected'; ?>>Architect</option>
                          <option value="developer" <?php if ($value['other_category'] === 'Developer') echo ' selected'; ?>>Developer</option>
                          <option value="tester" <?php if ($value['other_category'] === 'tester') echo ' selected'; ?>>Tester</option>
                          <option value="uiux" <?php if ($value['other_category'] === 'uiux') echo ' selected'; ?>>UI/UX Design</option>
                          <option value="datascience" <?php if ($value['other_category'] === 'datascience') echo ' selected'; ?>>Data Scientist</option>
                          <option value="databaseadmin" <?php if ($value['other_category'] === 'databaseadmin') echo ' selected'; ?>>Database Admin</option>
                          <option value="teacher" <?php if ($value['other_category'] === 'teacher') echo ' selected'; ?>>Teacher</option>
                          <option value="professor" <?php if ($value['other_category'] === 'professor') echo ' selected'; ?>>Professor</option>
                          <option value="others" <?php if ($value['other_category'] === 'others') echo ' selected'; ?>>Others</option>
                        </select>
                        <div id="category_error" class="error"></div>
                      </div>

                      <div class="form-group">
                        <label for="subcategory">Subcategory:</label>
                        <select class="form-control" id="subcategory" value="<?php echo $value['other_sub_category']; ?>" name="subcategory" disabled>
                          <option value="">Select a Subcategory</option>
                        </select>
                        <div id="subcategory_error" class="error"></div>
                      </div>


                      <div class="form-group">
                        <label for="experience">Experience</label>
                        <select class="form-control" id="experience" name="experience">
                          <option value="">Select your experience</option>
                          <option value="fresher" <?php if ($value['experience'] === 'fresher') echo ' selected'; ?>>Fresher</option>
                          <option value="0-2" <?php if ($value['experience'] === '0-2') echo ' selected'; ?>>0-2</option>
                          <option value="3-5" <?php if ($value['experience'] === '3-5') echo ' selected'; ?>>3-5</option>
                          <option value="5-10" <?php if ($value['experience'] === '5-10') echo ' selected'; ?>>5-10</option>
                          <option value="10-15" <?php if ($value['experience'] === '10-15') echo ' selected'; ?>>10-15</option>
                          <option value="15-20" <?php if ($value['experience'] === '15-20') echo ' selected'; ?>>15-20</option>
                          <option value="above 20 years" <?php if ($value['experience'] === 'above 20 years') echo ' selected'; ?>>Above 20 years</option>
                        </select>
                        <div id="experience_error" class="error"></div>
                      </div>



                      <div class="form-group">
                        <label for="company name">Company Name</label>
                        <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname" name="companyname">
                        <div id="companyname_error" class="error"></div>
                      </div>

                      <div class="form-group">
                        <label for="role">Role in the company</label>
                        <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role">
                        <div id="role_error" class="error"></div>
                      </div>

                      <h1>Previous Employer details</h1>

                      <div class="form-group">
                        <label for="Name">Name of employer*</label>
                        <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>" id="nameofemployer" name="nameofemployer">
                        <div id="name_error" class="error"></div>
                      </div>

                      <div class="form-group">
                        <label for="phone number">Phone Number</label>
                        <input type="text" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>" id="number" name="number">
                      </div>

                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>" id="emailid" name="emailid">
                      </div>

                      <button type="submit" class="btn btn-primary">Submit</button>
                    <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                    ?>
                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">

                    <div class="form-group">
                      <label for="category">Category:</label>
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
                        <option value="others">Others</option>
                      </select>
                      <div id="category_error" class="error"></div>
                    </div>
                    <div class="form-group">
                      <label for="subcategory">Subcategory:</label>
                      <select class="form-control" id="subcategory" name="subcategory" disabled>
                        <option value="">Select a Subcategory</option>
                      </select>
                      <div id="subcategory_error" class="error"></div>
                    </div>


                    <div class="form-group">
                      <label for="experience">Experience</label>
                      <select class="form-control" id="experience" name="experience">
                        <option value="">Select your experience</option>
                        <option value="fresher">Fresher</option>
                        <option value="0-2">0-2</option>
                        <option value="3-5">3-5</option>
                        <option value="5-10">5-10</option>
                        <option value="10-15">10-15</option>
                        <option value="15-20">15-20</option>
                        <option value="above 20 years">Above 20 years</option>
                      </select>
                      <div id="experience_error" class="error"></div>
                    </div>
                    <div class="form-group" id="otherCategoryField" style="display: none;">
                      <label for="othercategory">Other Category:</label>
                      <select class="form-control" id="experience" name="experience">
                        <input type="text" class="form-control" id="othercategory" name="othercategory">
                    </div>

                    <div class="form-group" id="otherSubcategoryField" style="display: none;">
                      <label for="othersubcategory">Other Subcategory:</label>
                      <select class="form-control" id="experience" name="experience">
                        <input type="text" class="form-control" id="othersubcategory" name="othersubcategory">
                    </div>

                    <div class="form-group">
                      <label for="company name">Company Name</label>
                      <input type="text" class="form-control" id="companyname" name="companyname">
                      <div id="companyname_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="role">Role in the company</label>
                      <input type="text" class="form-control" id="role" name="role">
                      <div id="role_error" class="error"></div>
                    </div>

                    <h1>Previous Employer details</h1>

                    <div class="form-group">
                      <label for="Name">Name of employer*</label>
                      <input type="text" class="form-control" id="nameofemployer" name="nameofemployer">
                      <div id="name_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="phone number">Phone Number</label>
                      <input type="text" class="form-control" id="number" name="number">
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control" id="emailid" name="emailid">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  <?php } ?>

                </form>
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
                    addSubcategoryOption("Landscape ");
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

                } else {
                  hideOtherCategoryFields();
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

              function showOtherCategoryFields() {
                document.getElementById("otherCategoryField").style.display = "block";
                document.getElementById("otherSubcategoryField").style.display = "block";
              }

              function hideOtherCategoryFields() {
                document.getElementById("otherCategoryField").style.display = "none";
                document.getElementById("otherSubcategoryField").style.display = "none";
              }

              function validateexpForm() {
                var category = document.getElementById("category");
                var subcategory = document.getElementById("subcategory");
                var experience = document.getElementById("experience");
                var companyname = document.getElementById("companyname");
                var role = document.getElementById("role");
                var name = document.getElementById("nameofemployer");
                var phonenumber = document.getElementById("phonenumber");
                var email = document.getElementById("email");

                if (category.value === '') {
                  alert("Category is required");
                  displayError('Category is required.', 'category_error');
                  return true;
                }

                if (subcategory.value === '') {
                  alert("Please select a subcategory");
                  displayError('Please select a subcategory.', 'subcategory_error');
                  return false;
                }
                if (experience.value === 'fresher') {
                  hideFields();
              } else if (experience.value === '') {
                alert("Please select an experience");
                  displayError('Please select an experience.', 'experience_error');
                  return false;
              }
                if (companyname.value === '') {
                  alert("Please enter a company name.");
                  displayError('Please enter a company name.', 'companyname_error');
                  return false;
                }

                if (role.value === '') {
                  alert("Please enter a role.");
                  displayError('Please enter a role.', 'role_error');
                  return false;
                }

                if (companyname.value === '') {
                  alert("please enter a company name");
                  displayError('please enter a company name', 'companyname_error');
                  return false;
                }
                if (role.value === '') {
                  alert("please enter a role");
                  displayError('please enter a role', 'role_error');
                  return false;
                }
                if (name.value === '') {
                  alert("please enter a employer name");
                  displayError('please enter a employer name', 'name_error');
                  return false;
                }



                return true;
              }

              function clearErrorMessages() {
                var errorElements = document.querySelectorAll('.error');
                errorElements.forEach(function(errorElement) {
                  errorElement.textContent = '';
                });
              }

              function displayError(message, elementId) {
                var errorElement = document.getElementById(elementId);
                errorElement.innerHTML = message;
                errorElement.style.color = 'red';
              }
            </script>

<?php
        } elseif ($method == 'insertEducationDetails') {
        ?>
          <div class="container" id="education">
            <h3>Education Form</h3>

            <div id="educationFormsContainer">
              <div class="education-form-container">
            
                <form name="educationform" action="<?php echo baseUrl . "seekerController/insertEducation"?>" method="post" onsubmit="return validateForm()" >
                  <?php
              // foreach($educationDetails as $key => $value) {
                 
                if (isset($educationalDetails[0]['id'])) {
                  foreach ($educationalDetails as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
              
              ?>
                   <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter your name">
                  <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification" onchange="toggleFields()">
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                  <div class="form-group" id="department-group" style="display: none;">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department">
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school"  name="school">
                    <div id="school_error" class="error"></div>
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school"   name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed"  name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <div class="form-group" id="tencertificate-group" style="display: none;">
                    <label for="tencertificate">10 th certificate</label>
                    <input type="file" class="form-control" id="tencertificate" name="tencertificate">
                    <div id="tencertificate_error" class="error"></div>
                  </div>
                  
                  <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
            
              </form>
              <?php
                  } }
              ?>
            </div>
            <script>
              var educationFormCount = 1;

              function addEducationForm(button) {
                educationFormCount++;
                var newEducationFormContainer = document.createElement('div');
                newEducationFormContainer.className = 'education-form-container';

                // Clone the original form
                var originalForm = document.querySelector('.education-form-container');
                var newForm = originalForm.cloneNode(true);
                newForm.id = 'educationform_' + educationFormCount;

                // Clear the values in the new form
                clearFormFields(newForm);

                // Append the new form to the container
                newEducationFormContainer.appendChild(newForm);
                document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                // Move the "Submit" button to the new form
                var submitButton = document.querySelector('button[type="submit"]');
                newForm.appendChild(submitButton);

                // Hide the "Add" button in the previous form
                button.style.display = "none";
              }
              // Function to clear the form fields in a given education form
              function clearFormFields(educationForm) {
                var fieldsToClear = educationForm.querySelectorAll('input, select');
                for (var i = 0; i < fieldsToClear.length; i++) {
                  fieldsToClear[i].value = '';
                }
              }

              function validateForm() {
                var qualification = document.getElementById('qualification').value;
                var department = document.getElementById('department').value;
                var school = document.getElementById('school').value;
                var percentage = document.getElementById('percentage').value;
                var yearPassed = document.getElementById('year_passed').value;
                var tencertificate = document.getElementById('tencertificate').value;


                // Basic qualification validation
                if (!qualification) {
                  displayError('Please select a qualification', 'qualification_error');
                  return false;
                }


                // Additional validation for "Bachelors," "Masters," and "Doctorate"
                if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                  var department = document.getElementById('department').value;
                  var school = document.getElementById('school').value;
                  var percentage = document.getElementById('percentage').value;
                  var yearPassed = document.getElementById('year_passed').value;
                  var tencertificate = document.getElementById('tencertificate').value;

                  // Validate department
                  if (!department) {
                    alert("Department is required for selected qualification");
                    displayError('Department is required for selected qualification');
                    return false;
                  }

                  // Validate school/collegename
                  if (!school) {
                    alert("School/collegename is required");
                    displayError('School/collegename is required', 'school_error');
                    return false;
                  }

                  // Validate percentage
                  if (!percentage) {
                    alert("Percentage is required");
                    displayError('Percentage is required', 'percentage_error');
                    return false;
                  }

                  // Validate year of passed out
                  if (!yearPassed) {
                    alert("Year of Passed Out is required");
                    displayError('Year of Passed Out is required', 'year_error');
                    return false;
                  }
                }


                // Form is valid
                return true;
              }

              function toggleFields() {
                var selectedQualification = document.getElementById('qualification').value;
                var departmentGroup = document.getElementById('department-group');
                var schoolGroup = document.getElementById('school-group');
                var percentageGroup = document.getElementById('percentage-group');
                var yearGroup = document.getElementById('year-group');
                var addButton = document.getElementById('addButton');

                // Show/hide the additional fields based on the selected qualification
                if (selectedQualification === 'below_8th') {
                  departmentGroup.style.display = 'none';
                  schoolGroup.style.display = 'none';
                  percentageGroup.style.display = 'none';
                  yearGroup.style.display = 'none';
                  addButton.style.display = 'none';
                } else {
                  // Show the school, percentage, and year fields by default
                  schoolGroup.style.display = 'block';
                  percentageGroup.style.display = 'block';
                  yearGroup.style.display = 'block';

                  // Hide the department field for SSLC and HSC
                  if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                    departmentGroup.style.display = 'none';
                    addButton.style.display = 'none';
                  } else {
                    // Show the department field for other qualifications
                    departmentGroup.style.display = 'block';
                    addButton.style.display = 'block';
                  }
                }
              }
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



            <?php
          }  elseif ($method == 'educationTable') {
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
             <div class="">
        <h2 class="text-center">Educational Details</h2>
        <a id="regis" href="<?php echo baseUrl . "seekerController/addEducationForm"?>">+ Add Educational Details</a>
       
        <div class="clearfix"></div>
        <br>
        
        <div class="table-responsive">
           
                <thead>
                <table class="table table-bordered table-striped">
            
                    <tr>
                        <th>ID</th>
                        <th>Educational Qualification</th>
                        <th>Department</th>
                        <th>School (OR) College Name</th>
                        <th>Percentage</th>
                        <th>YearOfPassing</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                if (isset($educationTable[0]['id'])) {
                  foreach ($educationTable as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                  
                    <tr>
                 
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['educational_qualification']?></td>
                        <td><?php echo $value['department'] ?></td>
                        <td><?php echo $value['school_college_name']?></td>
                        <td><?php echo $value['percentage'] ?></td>
                        <td><?php echo $value['yearOfPassing']?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateEducation"?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteEducation"?>/<?php echo $value['id'] ?>">delete</a>
                            </div>
                        </td>
                    </tr>




                    
                    <?php 
                  }
                }
        } elseif ($method == 'addEducationForm') {
        ?>
          <div class="container" id="education">
            <h3>Add Education</h3>

            <div id="educationFormsContainer">
              <div class="education-form-container">
            
                <form name="educationform" action="<?php echo baseUrl . "seekerController/insertEducationForm"?>" method="post" onsubmit="return validateForm()" >

                  <div class="form-group">
                    <label for="qualification">Educational Qualification*</label>
                    <select class="form-control" id="qualification"  name="qualification"  onchange="toggleFields()" >
                      <option value="">Select Qualification</option>
                      <option value="below_8th">Below 8th</option>
                      <option value="sslc">SSLC</option>
                      <option value="hsc">HSC</option>
                      <option value="bachelors">Bachelors</option>
                      <option value="masters">Masters</option>
                      <option value="doctorate">Doctorate</option>
                    </select>
                    <div id="qualification_error" class="error"></div>
                  </div>
                
                  <div class="form-group" id="department-group">
                    <label for="department">Department</label>
                    <select class="form-control" id="department" name="department" >
                      <option value="">Select Department</option>
                      <option value="Tamil">Tamil</option>
                      <option value="english">English</option>
                      <option value="maths">Maths</option>
                      <option value="physics">Physics</option>
                      <option value="chemistry">Chemistry</option>
                      <option value="computer_science">Computer Science</option>
                      <option value="Engineering">Engineering</option>
                    </select>
                    <div id="department_error" class="error"></div>
                  </div>
                  <div class="form-group" id="school-group" >
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school"  name="school" >
                    <div id="school_error" class="error"></div>
                  </div>
                  <div class="form-group" id="percentage-group" >
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school"  name="percentage" >
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" >
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed"  name="year_passed" >
                    <div id="year_error" class="error"></div>
                  </div>
                  <div class="form-group" id="certificate_10th-group" style="display: none;">
                    <label for="certificate_10th">10th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_10th" name="certificate_10th" >
                    <div id="certificate_10th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_12th-group" style="display: none;">
                    <label for="certificate_12th">12th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_12th" name="certificate_12th" >
                    <div id="certificate_12th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_ug-group" style="display: none;">
                <label for="certificate_ug">UG Degree Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug" >
                <div id="certificate_ug_error" class="error"></div>
            </div>

            <div class="form-group" id="certificate_pg-group" style="display: none;">
                <label for="certificate_pg">PG Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg" >
                <div id="certificate_pg_error" class="error"></div>
            </div>
            <div class="form-group" id="certificate_doctorate-group" style="display: none;">
            <label for="certificate_doctorate">Doctorate Certificate Upload*</label>
            <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate" >
            <div id="certificate_doctorate_error" class="error"></div>
            </div>

            </div>
            

                

                  
                  
              
              <button type="submit" id="educationsubmit" class="btn" onclick="return validateForm()">Submit</button>
            
              </form>
             
            </div>
            <script>
              // var educationFormCount = 1;

              // function addEducationForm(button) {
              //   educationFormCount++;
              //   var newEducationFormContainer = document.createElement('div');
              //   newEducationFormContainer.className = 'education-form-container';

              //   // Clone the original form
              //   var originalForm = document.querySelector('.education-form-container');
              //   var newForm = originalForm.cloneNode(true);
              //   newForm.id = 'educationform_' + educationFormCount;

              //   // Clear the values in the new form
              //   clearFormFields(newForm);

              //   // Append the new form to the container
              //   newEducationFormContainer.appendChild(newForm);
              //   document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

              //   // Move the "Submit" button to the new form
              //   var submitButton = document.querySelector('button[type="submit"]');
              //   newForm.appendChild(submitButton);

              //   // Hide the "Add" button in the previous form
              //   button.style.display = "none";
              // }
              // // Function to clear the form fields in a given education form
              // function clearFormFields(educationForm) {
              //   var fieldsToClear = educationForm.querySelectorAll('input, select');
              //   for (var i = 0; i < fieldsToClear.length; i++) {
              //     fieldsToClear[i].value = '';
              //   }
              // }

              function validateForm() {
                var q = document.educationform.qualification.value;
                var dep = document.educationform.department.value;
                var scl = document.educationform.school.value;
                var per = document.educationform.percentage.value;
                var yop = document.educationform.year_passed.value;
                var tenth = document.educationform.certificate_10th.value;
                var tweleth = document.educationform.certificate_12th.value;
                var ug = document.educationform.certificate_ug.value;
                var pg = document.educationform.certificate_pg.value;
                var dc = document.educationform.certificate_doctorate.value;



                if (q == "") {
                    var namesms2 = "* Qualification must be filled out";
                    document.getElementById("qualification_error").innerHTML = namesms2;
                    document.educationform.qualification.focus();
                    return false;
                }else {
                        document.getElementById("qualification_error").innerHTML = "";
                      }

                
                if (dep == "") {
                    var namesms2 = "* Department must be filled out";
                    document.getElementById("department_error").innerHTML = namesms2;
                    document.educationform.department.focus();
                    return false;
                }else {
                        document.getElementById("department_error").innerHTML = "";
                       }


                if (scl == "") {
                    var namesms2 = "* school or college must be filled out";
                    document.getElementById("school_error").innerHTML = namesms2;
                    document.educationform.school.focus();
                    return false;
                }else {
                        document.getElementById("school_error").innerHTML = "";
                       }


                if (per == "") {
                    var namesms2 = "* Percentage must be filled out";
                    document.getElementById("percentage_error").innerHTML = namesms2;
                    document.educationform.percentage.focus();
                    return false;
                }else {
                        document.getElementById("percentage_error").innerHTML = "";
                       }


                if (yop == "") {
                    var namesms2 = "* Year of passed out must be filled out";
                    document.getElementById("year_error").innerHTML = namesms2;
                    document.educationform.year_passed.focus();
                    return false;
                }else {
                        document.getElementById("year_error").innerHTML = "";
                       }


               if (tenth == "") {
                    var namesms2 = "* 10 th certificate must be filled out";
                    document.getElementById("certificate_10th_error").innerHTML = namesms2;
                    document.educationform.certificate_10th.focus();
                    return false;
                }else {
                        document.getElementById("certificate_10th_error").innerHTML = "";
                       }

               if (tweleth == "") {
                    var namesms2 = "* 12 th certificate must be filled out";
                    document.getElementById("certificate_12th_error").innerHTML = namesms2;
                    document.educationform.certificate_12th.focus();
                    return false;
                }else {
                        document.getElementById("certificate_12th_error").innerHTML = "";
                       }


               if (ug == "") {
                    var namesms2 = "* UG certificate must be filled out";
                    document.getElementById("certificate_ug_error").innerHTML = namesms2;
                    document.educationform.certificate_ug.focus();
                    return false;
                }else {
                        document.getElementById("certificate_ug_error").innerHTML = "";
                       }


                
               if (pg == "") {
                    var namesms2 = "* PG certificate must be filled out";
                    document.getElementById("certificate_pg_error").innerHTML = namesms2;
                    document.educationform.certificate_pg.focus();
                    return false;
                }else {
                        document.getElementById("certificate_pg_error").innerHTML = "";
                       }


              if (dc == "") {
                    var namesms2 = "* PG certificate must be filled out";
                    document.getElementById("certificate_doctorate_error").innerHTML = namesms2;
                    document.educationform.certificate_doctorate.focus();
                    return false;
                }else {
                        document.getElementById("certificate_doctorate_error").innerHTML = "";
                       }









     //             var qualification = document.getElementById('qualification').value;
    //             var department = document.getElementById('department').value;
    //             var school = document.getElementById('school').value;
    //             var percentage = document.getElementById('percentage').value;
    //             var yearPassed = document.getElementById('year_passed').value;
    //             var certificate10th = document.getElementById('certificate_10th').value;
    //             var certificate12th = document.getElementById('certificate_12th').value;
    //             var certificateUg = document.getElementById('certificate_ug').value;
    //             var certificatePg = document.getElementById('certificate_pg').value;
    //             var certificate_doctorate = document.getElementById('certificate_doctorate').value;
               

    //             // Basic qualification validation
    //             if (!qualification) {
    //               alert("Please select a qualification");
    //               displayError('Please select a qualification', 'qualification_error');
    //               return false;
    //             }


    //             // Additional validation for "Bachelors," "Masters," and "Doctorate"
    //             if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
    //               var department = document.getElementById('department').value;
    //               var school = document.getElementById('school').value;
    //               var percentage = document.getElementById('percentage').value;
    //               var yearPassed = document.getElementById('year_passed').value;
                 

    //               // Validate department
    //               if (!department) {
    //                 alert("Department is required for selected qualification");
    //                 displayError('Department is required for selected qualification', 'department_error');
    //                 return false;
    //               }

    //               // Validate school/collegename
    //               if (!school) {
    //                 alert("School/collegename is required");
    //                 displayError('School/collegename is required', 'school_error');
    //                 return false;
    //               }

    //               // Validate percentage
    //               if (!percentage) {
    //                 alert("Percentage is required");
    //                 displayError('Percentage is required', 'percentage_error');
    //                 return false;
    //               }

    //               // Validate year of passed out
    //               if (!yearPassed) {
    //                 alert("Year of Passed Out is required");
    //                 displayError('Year of Passed Out is required', 'year_error');
    //                 return false;
    //               }

    //                 // Validate 10th Certificate Upload
    //             if (!certificate10th) {
    //                 alert("Please upload your 10th certificate");
    //                 displayError('Please upload your 10th certificate', 'certificate_10th_error');
    //                 return false;
    //             }

    //             // Validate 12th Certificate Upload
    //             if (!certificate12th) {
    //                 alert("Please upload your 12th certificate");
    //                 displayError('Please upload your 12th certificate', 'certificate_12th_error');
    //                 return false;
    //     }
    //     // Validate UG Degree Certificate Upload
    //     if (!certificateUg) {
    //         alert("Please upload your UG degree certificate");
    //         displayError('Please upload your UG degree certificate', 'certificate_ug_error');
    //         return false;
    //     }

    //     // Validate PG Certificate Upload
    //     if (!certificatePg) {
    //         alert("Please upload your PG certificate");
    //         displayError('Please upload your PG certificate', 'certificate_pg_error');
    //         return false;
    //     }
    //     if (!certificateDoctorate) {
    //     alert("Please upload your Doctorate certificate");
    //     displayError('Please upload your Doctorate certificate', 'certificate_doctorate_error');
    //     return false;
    // }

                
    //             }


    //             // Form is valid
                return true;
              }

              function toggleFields() {
                var selectedQualification = document.getElementById('qualification').value;
                var departmentGroup = document.getElementById('department-group');
                var schoolGroup = document.getElementById('school-group');
                var percentageGroup = document.getElementById('percentage-group');
                var yearGroup = document.getElementById('year-group');
                var certificate10thGroup = document.getElementById('certificate_10th-group');
                 var certificate12thGroup = document.getElementById('certificate_12th-group');
                 var certificateUgGroup = document.getElementById('certificate_ug-group');
                  var certificatePgGroup = document.getElementById('certificate_pg-group');
                  var certificatedcGroup = document.getElementById('certificate_doctorate-group');
                var addButton = document.getElementById('addButton');
               

                // Show/hide the additional fields based on the selected qualification
                if (selectedQualification === 'below_8th') {
                  departmentGroup.style.display = 'none';
                  schoolGroup.style.display = 'none';
                  percentageGroup.style.display = 'none';
                  yearGroup.style.display = 'none';
                  certificate10thGroup.style.display = 'none';
                  certificate12thGroup.style.display = 'none';
                  certificateUgGroup.style.display = 'none';
                  certificatePgGroup.style.display = 'none';
                  certificatedcGroup.style.display = 'none';
                  addButton.style.display = 'none';
                 
                } else {
                  // Show the school, percentage, and year fields by default
                  schoolGroup.style.display = 'block';
                  percentageGroup.style.display = 'block';
                  certificate10thGroup.style.display = 'block';
                  certificate12thGroup.style.display = 'block';
                  certificateUgGroup.style.display = 'block';
                  certificatePgGroup.style.display = 'block';
                  certificatedcGroup.style.display = 'block';
                  yearGroup.style.display = 'block';
                 
                }
                  // Hide the department field for SSLC and HSC
                  if (selectedQualification === 'sslc') {
                    departmentGroup.style.display = 'none';
                    certificate12thGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                    
                  // } else {
                    // Show the department field for other qualifications
                    // departmentGroup.style.display = 'block';
                   
                  
                    // addButton.style.display = 'block';
                  }
                  else if (selectedQualification === 'hsc') {
                    departmentGroup.style.display = 'none';
                    certificate10thGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                    
                  } 
                  else if(selectedQualification === 'bachelors')
                  {
                    departmentGroup.style.display = 'block';
                    certificate10thGroup.style.display = 'none';
                    certificate12thGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                  }
                  else if(selectedQualification === 'masters'){
                    certificate10thGroup.style.display = 'none';
                    certificate12thGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';

                  }
                  else if(selectedQualification === 'doctorate'){
                    certificate10thGroup.style.display = 'none';
                    certificate12thGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                   

                  }


                
              }
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


            <?php 
                
                   
        } elseif ($method == 'updateEducation') {
        ?>
          <div class="container" id="education">
            <h3>Education Form</h3>

            <div id="educationFormsContainer">
              <div class="education-form-container">
            
                <form name="educationform" action="<?php echo baseUrl . "seekerController/updateInsertEducation"?>" method="post" onsubmit="return validateForm()" >
                <?php
                if (isset($updateEducation[0]['id'])) {
                  foreach ($updateEducation as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                   <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                <div class="form-group">
                <label for="qualification">Educational Qualification*</label>
                <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>" name="qualification"  onchange="toggleFields()">
                    <option value="">Select Qualification</option>
                    <option value="below_8th"<?php if ($value['educational_qualification'] === 'below_8th') echo ' selected'; ?>>Below 8th</option>
                    <option value="sslc"<?php if ($value['educational_qualification'] === 'sslc') echo ' selected'; ?>>SSLC</option>
                    <option value="hsc"<?php if ($value['educational_qualification'] === 'hsc') echo ' selected'; ?>>HSC</option>
                    <option value="bachelors"<?php if ($value['educational_qualification'] === 'bachelors') echo ' selected'; ?>>Bachelors</option>
                    <option value="masters"<?php if ($value['educational_qualification'] === 'masters') echo ' selected'; ?>>Masters</option>
                    <option value="doctorate"<?php if ($value['educational_qualification'] === 'doctorate') echo ' selected'; ?>>Doctorate</option>
                </select>
                <div id="qualification_error" class="error"></div>
                        </div>

                              <div class="form-group" id="department-group" ">
                <label for="department">Department</label>
                <select class="form-control" id="department" value="<?php echo $value['department']; ?>" name="department">
                    <option value="">Select Department</option>
                    <option value="Tamil"<?php if ($value['department'] === 'Tamil') echo ' selected'; ?>>Tamil</option>
                    <option value="english"<?php if ($value['department'] === 'english') echo ' selected'; ?>>English</option>
                    <option value="maths"<?php if ($value['department'] === 'maths') echo ' selected'; ?>>Maths</option>
                    <option value="physics"<?php if ($value['department'] === 'physics') echo ' selected'; ?>>Physics</option>
                    <option value="chemistry"<?php if ($value['department'] === 'chemistry') echo ' selected'; ?>>Chemistry</option>
                    <option value="computer_science"<?php if ($value['department'] === 'computer_science') echo ' selected'; ?>>Computer Science</option>
                </select>
                <div id="department_error" class="error"></div>
            </div>

                    <div class="form-group" id="school-group" >
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>"  name="school">
                    <div id="school_error" class="error"></div>
                  </div>
                  <div class="form-group" id="percentage-group">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school" value="<?php echo $value['percentage']; ?>" name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" >
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>"  name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  </div>
                  <div class="form-group" id="certificate_10th-group" style="display: none;">
                    <label for="certificate_10th">10th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_10th" name="certificate_10th" >
                    <div id="certificate_10th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_12th-group" style="display: none;">
                    <label for="certificate_12th">12th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_12th" name="certificate_12th" >
                    <div id="certificate_12th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_ug-group" style="display: none;">
                <label for="certificate_ug">UG Degree Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug">
                <div id="certificate_ug_error" class="error"></div>
            </div>

            <div class="form-group" id="certificate_pg-group" style="display: none;">
                <label for="certificate_pg">PG Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg">
                <div id="certificate_pg_error" class="error"></div>
            </div>
            <div class="form-group" id="certificate_doctorate-group" style="display: none;">
            <label for="certificate_doctorate">Doctorate Certificate Upload*</label>
            <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate">
            <div id="certificate_doctorate_error" class="error"></div>
            </div>
                  
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
            
              </form>
              <?php
                    }
                  } else {
                    $seekerId = $_SESSION['seekerId'];
                      ?>
                  <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                              <div class="form-group">
                <label for="qualification">Educational Qualification*</label>
                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                    <option value="">Select Qualification</option>
                    <option value="below_8th">Below 8th</option>
                    <option value="sslc">SSLC</option>
                    <option value="hsc">HSC</option>
                    <option value="bachelors">Bachelors</option>
                    <option value="masters">Masters</option>
                    <option value="doctorate">Doctorate</option>
                </select>
                <div id="qualification_error" class="error"></div>
                                  <div class="form-group" id="department-group" style="display: none;">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department">
                    <option value="">Select Department</option>
                    <option value="Tamil">Tamil</option>
                    <option value="english">English</option>
                    <option value="maths">Maths</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="computer_science">Computer Science</option>
                </select>
                <div id="department_error" class="error"></div>
                  <div class="form-group" id="school-group" style="display: none;">
                    <label for="school">School Name/collegename</label>
                    <input type="text" class="form-control" id="school"  name="school">
                  </div>
                  <div class="form-group" id="percentage-group" style="display: none;">
                    <label for="percentage">Percentage</label>
                    <input type="text" class="form-control" id="percentage" id="school"  name="percentage">
                    <div id="percentage_error" class="error"></div>
                  </div>
                  <div class="form-group" id="year-group" style="display: none;">
                    <label for="year_passed">Year of Passed Out</label>
                    <input type="number" class="form-control" id="year_passed"  name="year_passed">
                    <div id="year_error" class="error"></div>
                  </div>
                  <div class="form-group" id="certificate_10th-group" style="display: none;">
                    <label for="certificate_10th">10th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_10th" name="certificate_10th" >
                    <div id="certificate_10th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_12th-group" style="display: none;">
                    <label for="certificate_12th">12th Certificate Upload*</label>
                    <input type="file" class="form-control" id="certificate_12th" name="certificate_12th" >
                    <div id="certificate_12th_error" class="error"></div>
                </div>

                <div class="form-group" id="certificate_ug-group" style="display: none;">
                <label for="certificate_ug">UG Degree Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug">
                <div id="certificate_ug_error" class="error"></div>
            </div>

            <div class="form-group" id="certificate_pg-group" style="display: none;">
                <label for="certificate_pg">PG Certificate Upload*</label>
                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg">
                <div id="certificate_pg_error" class="error"></div>
            </div>
            <div class="form-group" id="certificate_doctorate-group" style="display: none;">
            <label for="certificate_doctorate">Doctorate Certificate Upload*</label>
            <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate">
            <div id="certificate_doctorate_error" class="error"></div>
            </div>

            
                  
              </div>
              <button type="submit" id="educationsubmit" class="btn">Submit</button>
              <?php } ?>
            </div>
            <script>
              var educationFormCount = 1;

              function addEducationForm(button) {
                educationFormCount++;
                var newEducationFormContainer = document.createElement('div');
                newEducationFormContainer.className = 'education-form-container';

                // Clone the original form
                var originalForm = document.querySelector('.education-form-container');
                var newForm = originalForm.cloneNode(true);
                newForm.id = 'educationform_' + educationFormCount;

                // Clear the values in the new form
                clearFormFields(newForm);

                // Append the new form to the container
                newEducationFormContainer.appendChild(newForm);
                document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                // Move the "Submit" button to the new form
                var submitButton = document.querySelector('button[type="submit"]');
                newForm.appendChild(submitButton);

                // Hide the "Add" button in the previous form
                button.style.display = "none";
              }
              // Function to clear the form fields in a given education form
              function clearFormFields(educationForm) {
                var fieldsToClear = educationForm.querySelectorAll('input, select');
                for (var i = 0; i < fieldsToClear.length; i++) {
                  fieldsToClear[i].value = '';
                }
              }

              function validateForm() {

                var q = document.educationform.qualification.value;
                var dep = document.educationform.department.value;
                var scl = document.educationform.school.value;
                var per = document.educationform.percentage.value;
                var yop = document.educationform.year_passed.value;
                var tenth = document.educationform.certificate_10th.value;
                var tweleth = document.educationform.certificate_12th.value;
                var ug = document.educationform.certificate_ug.value;
                var pg = document.educationform.certificate_pg.value;
                var dc = document.educationform.certificate_doctorate.value;



                if (q == "") {
                    var namesms2 = "* Qualification must be filled out";
                    document.getElementById("qualification_error").innerHTML = namesms2;
                    document.educationform.qualification.focus();
                    return false;
                }else {
                        document.getElementById("qualification_error").innerHTML = "";
                      }

                
                if (dep == "") {
                    var namesms2 = "* Department must be filled out";
                    document.getElementById("department_error").innerHTML = namesms2;
                    document.educationform.department.focus();
                    return false;
                }else {
                        document.getElementById("department_error").innerHTML = "";
                       }


                if (scl == "") {
                    var namesms2 = "* school or college must be filled out";
                    document.getElementById("school_error").innerHTML = namesms2;
                    document.educationform.school.focus();
                    return false;
                }else {
                        document.getElementById("school_error").innerHTML = "";
                       }


                if (per == "") {
                    var namesms2 = "* Percentage must be filled out";
                    document.getElementById("percentage_error").innerHTML = namesms2;
                    document.educationform.percentage.focus();
                    return false;
                }else {
                        document.getElementById("percentage_error").innerHTML = "";
                       }


                if (yop == "") {
                    var namesms2 = "* Year of passed out must be filled out";
                    document.getElementById("year_error").innerHTML = namesms2;
                    document.educationform.year_passed.focus();
                    return false;
                }else {
                        document.getElementById("year_error").innerHTML = "";
                       }


               if (tenth == "") {
                    var namesms2 = "* 10 th certificate must be filled out";
                    document.getElementById("certificate_10th_error").innerHTML = namesms2;
                    document.educationform.certificate_10th.focus();
                    return false;
                }else {
                        document.getElementById("certificate_10th_error").innerHTML = "";
                       }

               if (tweleth == "") {
                    var namesms2 = "* 12 th certificate must be filled out";
                    document.getElementById("certificate_12th_error").innerHTML = namesms2;
                    document.educationform.certificate_12th.focus();
                    return false;
                }else {
                        document.getElementById("certificate_12th_error").innerHTML = "";
                       }


               if (ug == "") {
                    var namesms2 = "* UG certificate must be filled out";
                    document.getElementById("certificate_ug_error").innerHTML = namesms2;
                    document.educationform.certificate_ug.focus();
                    return false;
                }else {
                        document.getElementById("certificate_ug_error").innerHTML = "";
                       }


                
               if (pg == "") {
                    var namesms2 = "* PG certificate must be filled out";
                    document.getElementById("certificate_pg_error").innerHTML = namesms2;
                    document.educationform.certificate_pg.focus();
                    return false;
                }else {
                        document.getElementById("certificate_pg_error").innerHTML = "";
                       }


              if (dc == "") {
                    var namesms2 = "* PG certificate must be filled out";
                    document.getElementById("certificate_doctorate_error").innerHTML = namesms2;
                    document.educationform.certificate_doctorate.focus();
                    return false;
                }else {
                        document.getElementById("certificate_doctorate_error").innerHTML = "";
                       }


    //             var qualification = document.getElementById('qualification').value;
    //             var department = document.getElementById('department').value;
    //             var school = document.getElementById('school').value;
    //             var percentage = document.getElementById('percentage').value;
    //             var yearPassed = document.getElementById('year_passed').value;
    //             var certificate10th = document.getElementById('certificate_10th').value;
    //             var certificate12th = document.getElementById('certificate_12th').value;
    //             var certificateUg = document.getElementById('certificate_ug').value;
    //             var certificatePg = document.getElementById('certificate_pg').value;
    //             var certificate_doctorate = document.getElementById('certificate_doctorate').value;
               

    //             // Basic qualification validation
    //             if (!qualification) {
    //               alert("Please select a qualification");
    //               displayError('Please select a qualification', 'qualification_error');
    //               return false;
    //             }


    //             // Additional validation for "Bachelors," "Masters," and "Doctorate"
    //             if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
    //               var department = document.getElementById('department').value;
    //               var school = document.getElementById('school').value;
    //               var percentage = document.getElementById('percentage').value;
    //               var yearPassed = document.getElementById('year_passed').value;
                 

    //               // Validate department
    //               if (!department) {
    //                 alert("Department is required for selected qualification");
    //                 displayError('Department is required for selected qualification', 'department_error');
    //                 return false;
    //               }

    //               // Validate school/collegename
    //               if (!school) {
    //                 alert("School/collegename is required");
    //                 displayError('School/collegename is required', 'school_error');
    //                 return false;
    //               }

    //               // Validate percentage
    //               if (!percentage) {
    //                 alert("Percentage is required");
    //                 displayError('Percentage is required', 'percentage_error');
    //                 return false;
    //               }

    //               // Validate year of passed out
    //               if (!yearPassed) {
    //                 alert("Year of Passed Out is required");
    //                 displayError('Year of Passed Out is required', 'year_error');
    //                 return false;
    //               }

    //                 // Validate 10th Certificate Upload
    //             if (!certificate10th) {
    //                 alert("Please upload your 10th certificate");
    //                 displayError('Please upload your 10th certificate', 'certificate_10th_error');
    //                 return false;
    //             }

    //             // Validate 12th Certificate Upload
    //             if (!certificate12th) {
    //                 alert("Please upload your 12th certificate");
    //                 displayError('Please upload your 12th certificate', 'certificate_12th_error');
    //                 return false;
    //     }
    //     // Validate UG Degree Certificate Upload
    //     if (!certificateUg) {
    //         alert("Please upload your UG degree certificate");
    //         displayError('Please upload your UG degree certificate', 'certificate_ug_error');
    //         return false;
    //     }

    //     // Validate PG Certificate Upload
    //     if (!certificatePg) {
    //         alert("Please upload your PG certificate");
    //         displayError('Please upload your PG certificate', 'certificate_pg_error');
    //         return false;
    //     }
    //     if (!certificateDoctorate) {
    //     alert("Please upload your Doctorate certificate");
    //     displayError('Please upload your Doctorate certificate', 'certificate_doctorate_error');
    //     return false;
    // }

                
    //             }


    //             // Form is valid
                return true;
              }

              function toggleFields() {
                var selectedQualification = document.getElementById('qualification').value;
                var departmentGroup = document.getElementById('department-group');
                var schoolGroup = document.getElementById('school-group');
                var percentageGroup = document.getElementById('percentage-group');
                var yearGroup = document.getElementById('year-group');
                var certificate10thGroup = document.getElementById('certificate_10th-group');
                 var certificate12thGroup = document.getElementById('certificate_12th-group');
                 var certificateUgGroup = document.getElementById('certificate_ug-group');
                  var certificatePgGroup = document.getElementById('certificate_pg-group');
                  var certificatedcGroup = document.getElementById('certificate_doctorate-group');
                var addButton = document.getElementById('addButton');
               

                // Show/hide the additional fields based on the selected qualification
                if (selectedQualification === 'below_8th') {
                  departmentGroup.style.display = 'none';
                  schoolGroup.style.display = 'none';
                  percentageGroup.style.display = 'none';
                  yearGroup.style.display = 'none';
                  certificate10thGroup.style.display = 'none';
                  certificate12thGroup.style.display = 'none';
                  certificateUgGroup.style.display = 'none';
                  certificatePgGroup.style.display = 'none';
                  certificatedcGroup.style.display = 'none';
                  addButton.style.display = 'none';
                 
                } else {
                  // Show the school, percentage, and year fields by default
                  schoolGroup.style.display = 'block';
                  percentageGroup.style.display = 'block';
                  certificate10thGroup.style.display = 'block';
                  certificate12thGroup.style.display = 'block';
                  certificateUgGroup.style.display = 'block';
                  certificatePgGroup.style.display = 'block';
                  certificatedcGroup.style.display = 'block';
                  yearGroup.style.display = 'block';
                 
                }
                  // Hide the department field for SSLC and HSC
                  if (selectedQualification === 'sslc') {
                    departmentGroup.style.display = 'none';
                    certificate12thGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                    
                  // } else {
                    // Show the department field for other qualifications
                    // departmentGroup.style.display = 'block';
                   
                  
                    // addButton.style.display = 'block';
                  }
                  else if (selectedQualification === 'hsc') {
                    departmentGroup.style.display = 'none';
                    certificateUgGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    certificatedcGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                    
                  } 
                  else if(selectedQualification === 'bachelors')
                  {
                    certificatedcGroup.style.display = 'none';
                    certificatePgGroup.style.display = 'none';
                    // addButton.style.display = 'none';
                  }
                  else if(selectedQualification === 'masters'){
                    certificatedcGroup.style.display = 'none';

                  }
            }
            </script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                </tbody>
            </table>
        </div>
    </div>

    <?php
          }  elseif ($method == 'projectTable') {
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
             <div class="">
        <h2 class="text-center">Project Details</h2>
        <a id="regis" href="<?php echo baseUrl . "seekerController/addProjectForm"?>">+ Add Project Details</a>
       
        <div class="clearfix"></div>
        <br>
        
        <div class="table-responsive">
           
                <thead>
                <table class="table table-bordered table-striped">
            
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Project Duration</th>
                        <th>Role In Project</th>
                        <th>Starting Date</th>
                        <th>Ending Date</th>
                        <th>Responsibility In Project</th>
                        <th>Skills Used In Project</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                if (isset($projectTable[0]['id'])) {
                  foreach ($projectTable as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                  
                    <tr>
                 
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['projectName']?></td>
                        <td><?php echo $value['projectDuration'] ?></td>
                        <td><?php echo $value['roleInProject']?></td>
                        <td><?php echo $value['startingDate'] ?></td>
                        <td><?php echo $value['endingDate']?></td>
                        <td><?php echo $value['responsibilityInProject']?></td>
                        <td><?php echo $value['skillsUsedInProject']?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateProject"?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteProject"?>/<?php echo $value['id'] ?>">delete</a>
                            </div>
                        </td>
                    </tr>


                    <?php 
                  }
                }
        } elseif ($method == 'addProjectForm') {
        ?>

     

            <div class="container">
              <h3 id="projectdeailsform">Project Details Form</h3>
              <form name="projectform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/insertProjectForm"?>">
      
                    
                    <div id="project-sections">
                      <div class="project-section">
                        <div class="form-group">
                          <label for="projectname">Project Name</label>
                          <input type="text" class="form-control" id="projectname" name="projectname" ">
                          <div id="projectname_error" class="error"></div>
                          <div class="form-group">
                            <label for="Duration of project">Duration of Project</label>
                            <input type="text" class="form-control" id="durationofproject" name="durationofproject"  ">
                            <div id="durationofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="role in the project">Role in the Project</label>
                            <input type="text" class="form-control" id="roleofproject" name="roleofproject"  >
                            <div id="roleofproject_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="">start date of project*</label>
                            <input type="date" class="form-control" id="startdate" name="startdate"  >
                            <div id="startdate_error" class="error"></div>
                            <label for="">End date of the project*</label>
                            <input type="date" class="form-control" id="enddate" name="enddate"  >
                            <div id="enddate_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Responsibity">My responsibility in project*</label>
                            <input type="text" class="form-control" rows="3" class="form-control" id="responsibility"  name="responsibility">
                            <div id="responsibility_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="Skills used in project">Skills used in project*</label>
                            <input type="text" class="form-control" id="skillsused" name="skillsused" >
                            <div id="skills_error" class="error"></div>
                          </div>
                          <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                        </div>
                        <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>
                     
              </form>

              <script>
                var projectFormCount = 1;

                function validateForm() {
                  var projectname = document.getElementById("projectname");
                  var durationofproject = document.getElementById("durationofproject");
                  var startdate = document.getElementById("startdate");
                  var enddate = document.getElementById("enddate");
                  var responsibility = document.getElementById("responsibility");
                  var skillsused = document.getElementById("skillsused");
                  if (projectname.value === '') {
                    displayError('please enter a project name', 'projectname_error');
                    return false;
                  }
                  if (durationofproject.value === '') {
                    alert("please enter a project duration");
                    displayError('please enter a project duration', 'durationofproject_error');
                    return false;
                  }
                  if (roleofproject.value === '') {
                    alert("please enter a role of project");
                    displayError('please enter a role of project', 'roleofproject_error');
                  }
                  if (startdate.value === '') {
                    alert("please select a start date");
                    displayError('please select a start date', 'startdate_error');
                    return false;
                  }
                  if (enddate.value === '') {
                    alert("please select a end date");
                    displayError('please select a end date', 'enddate_error');
                    return false;
                  }
                  if (responsibilty.value === '') {
                    alert("This Field is required!");
                    displayError('This Field is required!', 'responsibility_error');
                    return false;
                  }
                  if (skillsused.value === '') {
                    alert("please enter a Skills used in the project");
                    displayError('please enter a Skills used in the project', 'skillsused_error');
                    return false;
                  }
                  return true;
                }


                function addProjectSection() {
                  projectFormCount++;
                  var newProjectSection = document.createElement('div');
                  newProjectSection.className = 'project-section';

                  // Clone the original project section
                  var originalSection = document.querySelector('.project-section');
                  var clone = originalSection.cloneNode(true);

                  // Clear input values in the cloned section
                  var inputs = clone.querySelectorAll('input[type="text"], input[type="date"], textarea');
                  inputs.forEach(function(input) {
                    input.value = '';
                  });

                  // Append the cloned section to the project sections container
                  newProjectSection.appendChild(clone);
                  document.getElementById('project-sections').appendChild(newProjectSection);

                  // Move the "Submit" button to the end of the last added project section
                  var submitButton = document.getElementById('finalsubmit');
                  newProjectSection.appendChild(submitButton);

                  // Hide the "Add Project" button in the previous section
                  var addButton = document.querySelector('button[type="button"]');
                  addButton.style.display = 'none';
                }


                function clearErrorMessages() {
                  var errorElements = document.querySelectorAll('.error');
                  errorElements.forEach(function(errorElement) {
                    errorElement.textContent = '';
                  });
                }

                function displayError(message, elementId) {
                  var errorElement = document.getElementById(elementId);
                  errorElement.innerHTML = message;
                  errorElement.style.color = 'red';
                }
              </script>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



              
    <?php
          }  elseif ($method == 'areaOfIntrestTable') {
            ?>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
             <div class="">
        <h2 class="text-center">Area of Job Interest</h2>
        <a id="regis" href="<?php echo baseUrl . "seekerController/addAreaOfIntrestForm"?>">+ Add Area of Job Interest</a>
       
        <div class="clearfix"></div>
        <br>
        
        <div class="table-responsive">
           
                <thead>
                <table class="table table-bordered table-striped">
            
                    <tr>
                        <th>ID</th>
                        <th>Job Category</th>
                        <th>Job Sub Category</th>
                        <th>Prefered Location</th>
                        <th>Experience</th>
                        <th>Job Type</th>
                        <th>Description</th>
                        <th>Expected_salary</th>
                        <!-- <th>skill</th>
                        <th>Skill Experience</th>
                        <th>Skill Level</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php
                if (isset($areaOfIntrestTable[0]['id'])) {
                  foreach ($areaOfIntrestTable as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                ?>
                  
                    <tr>
                 
                        <td><?php echo $value['id']?></td>
                        <td><?php echo $value['other_interst_category']?></td>
                        <td><?php echo $value['other_sub_interst_category'] ?></td>
                        <td><?php echo $value['prefered_location']?></td>
                        <td><?php echo $value['experience'] ?></td>
                        <td><?php echo $value['job_type']?></td>
                        <td><?php echo $value['description']?></td>
                        <td><?php echo $value['expected_salary']?></td>
                        <!-- <td><?php echo $value['skill']?></td>
                        <td><?php echo $value['skillExperience'] ?></td>
                        <td><?php echo $value['skillLevel']?></td> -->
                        <td>
                            <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateAreaOfIntrest"?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteAreaOfIntrest"?>/<?php echo $value['id'] ?>">delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php 
                  }
                }
        } elseif ($method == 'addAreaOfIntrestForm') {
        ?>
                 


              <div class="container">
                <h3>Add Area of Interest</h3>
                <form method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/insertAreaOfIntrest"?>">

               
                  
                  <div id="educationFormsContainer">
                    <div class="education-form-container">
                      <div class="form-group">
                        <label for="category">Category *</label>
                        <select class="form-control" id="category" name="category"   onchange="toggleCategoryFields()">
                          <option value="">Select a category</option>
                          <option value="architech">Architech</option>
                        <option value="developer">Developer</option>
                        <option value="tester">Tester</option>
                        <option value="uiux">UI/UX Design</option>
                        <option value="datascience">Data Scientist</option>
                        <option value="databaseadmin">Database Admin</option>
                        <option value="teacher">Teacher</option>
                        <option value="professor">Professor</option>
                          <!-- <option value="others">Others</option> -->
                        </select>
                      </div>
                      <div class="form-group"">
                <label for=" subcategory">Subcategory *</label>
                        <select class="form-control" id="subcategory" name="subcategory"  >
                          <option value="">Select a sub category </option>
                        </select>
                      </div>
                      <div class="form-group" id="otherCategoryFields" style="display: none;">
                        <label for="customCategoryInput">Custom Category</label>
                        <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                        <label for="customSubcategoryInput">Custom Subcategory</label>
                        <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                      </div>
                      <div class="form-group" id="customCategory" style="display: none;">
                        <label for="customCategoryInput">Category Name</label>
                        <input type="text" class="form-control" id="customCategoryInput"  name="customCategoryInput">
                      </div>

                      <div class="form-group" id="customSubcategory" style="display: none;">
                        <label for="customSubcategoryInput"> Subcategory Name</label>
                        <input type="text" class="form-control" id="customSubcategoryInput"  name="customSubcategoryInput">
                      </div>

                      <div class="form-group">
                        <label for="preferred-location">Preferred Location to work</label>
                        <input type="text" class="form-control" id="preferred-location"  name="preferred-location" >

                        <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                      </div>
                      <div class="form-group">
                        <label for="experience">Experience</label>
                        <input type="text" class="form-control" id="experience"  name="experience">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control" id="description" name="description"  rows="3">
                      </div>
                      <div class="form-group">
                        <label for="jobtype">Job Type</label>
                        <select class="form-control" id="jobtype" name="jobtype" >
                          <option value="">Select a job type</option>
                          <option value="parttime">Part Time</option>
                          <option value="fulltime">Full Time</option>
                          <option value="both">Both</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="expected-salary">Expected Salary</label>
                        <input type="text" class="form-control" id="expected-salary" name="expected-salary" >
                      </div>

                      <div class="form-group">
                        <h4>Your Strength :</h4>
                      </div>

                      <div class="form-group">
                        <br><label for="skillName">Skill Name</label>
                        <input type="text" class="form-control" id="skillname" name="skillname" >
                      </div>
                      <div class="form-group">
                        <br><label for="experience">Experience</label>
                        <select class="form-control" name="skillExperience"  id="experience" ><br>
                          <option value="fresher">Fresher</option>
                          <option value="0-2">0-2 years</option>
                          <option value="2-5">2-5 years</option>
                          <option value="5-10">5-10 years</option>
                          <option value="10-20">10-20 years</option>
                          <option value="20-above">20 years above</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <br><label for="skillLevel">Skill Level</label>
                        <select class="form-control" name="skilllevel"  id="skilllevel" >
                          <option value="beginner">Beginner</option>
                          <option value="intermediate">Intermediate</option>
                          <option value="advanced">Advanced</option>
                        </select>
                      </div>
                      <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                   
                </form>
              </div>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
              <script>
                var educationFormCount = 1;



                function addEducationForm(button) {
                  educationFormCount++;
                  var newEducationFormContainer = document.createElement('div');
                  newEducationFormContainer.className = 'education-form-container';

                  // Clone the original form
                  var originalForm = document.querySelector('.education-form-container');
                  var newForm = originalForm.cloneNode(true);
                  newForm.id = 'educationform_' + educationFormCount;

                  // Clear the values in the new form
                  clearFormFields(newForm);

                  // Append the new form to the container
                  newEducationFormContainer.appendChild(newForm);
                  document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                  // Move the "Submit" button to the new form
                  var submitButton = document.querySelector('button[type="submit"]');
                  newForm.appendChild(submitButton);

                  // Hide the "Add" button in the previous form
                  button.style.display = "none";
                }

                function clearFormFields(form) {
                  var fieldsToClear = form.querySelectorAll('input, select');
                  for (var i = 0; i < fieldsToClear.length; i++) {
                    fieldsToClear[i].value = '';
                  }
                }

                function toggleCategoryFields() {
                  var category = document.getElementById("category").value;
                  var subcategorySelect = document.getElementById("subcategory");
                  var otherCategoryFields = document.getElementById("otherCategoryFields");

                  // Clear existing options and hide the otherCategoryFields
                  subcategorySelect.innerHTML = "";
                  otherCategoryFields.style.display = "none";

                  if (category === "architech") {
                    addSubcategoryOption("Architect", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Design", subcategorySelect);
                    addSubcategoryOption("Project", subcategorySelect);
                    addSubcategoryOption("Principal", subcategorySelect);
                    addSubcategoryOption("Landscape", subcategorySelect);
                    addSubcategoryOption("Urban Planner", subcategorySelect);
                    addSubcategoryOption("Interior Designer", subcategorySelect);
                    addSubcategoryOption("Architectural Technologist", subcategorySelect);
                    addSubcategoryOption("BIM (Building Information Modeling) Specialist", subcategorySelect);
                    addSubcategoryOption("Sustainable Design Consultant", subcategorySelect);
                    addSubcategoryOption("Architectural Drafter", subcategorySelect);
                    addSubcategoryOption("Architectural Visualization Artist", subcategorySelect);
                    addSubcategoryOption("Urban Designer", subcategorySelect);
                    addSubcategoryOption("Historic Preservation", subcategorySelect);
                    addSubcategoryOption("Residential Architect", subcategorySelect);
                    addSubcategoryOption("CAD (Computer-Aided Design) Technician", subcategorySelect);
                    addSubcategoryOption("Architectural Educator", subcategorySelect);
                    addSubcategoryOption("Construction Project Manage", subcategorySelect);
                    addSubcategoryOption("Industrial Designer", subcategorySelect);
                    addSubcategoryOption("Healthcare Facility Planner", subcategorySelect);
                    addSubcategoryOption("Retail Space Designer", subcategorySelect);
                  } else if (category === "developer") {
                    addSubcategoryOption("Python Software Engineer", subcategorySelect);
                    addSubcategoryOption("Python", subcategorySelect);
                    addSubcategoryOption("Python Data Scientist", subcategorySelect);
                    addSubcategoryOption("Python Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Python Automation", subcategorySelect);
                    addSubcategoryOption("Java Software ", subcategorySelect);
                    addSubcategoryOption("Java", subcategorySelect);
                    addSubcategoryOption("Java Full Stack ", subcategorySelect);
                    addSubcategoryOption("Java Android ", subcategorySelect);
                    addSubcategoryOption("Java Spring ", subcategorySelect);
                    addSubcategoryOption("Java Microservices ", subcategorySelect);
                    addSubcategoryOption("JavaScript", subcategorySelect);
                    addSubcategoryOption("Front-end ", subcategorySelect);
                    addSubcategoryOption("Node.js ", subcategorySelect);
                    addSubcategoryOption("React ", subcategorySelect);
                    addSubcategoryOption("Angular", subcategorySelect);
                    addSubcategoryOption("Vue.js ", subcategorySelect);
                    addSubcategoryOption("Full Stack JavaScript ", subcategorySelect);
                    addSubcategoryOption("C#  ", subcategorySelect);
                    addSubcategoryOption(".NET ", subcategorySelect);
                    addSubcategoryOption("ASP.NET ", subcategorySelect);
                    addSubcategoryOption("Unity ", subcategorySelect);
                    addSubcategoryOption("Xamarin ", subcategorySelect);
                    addSubcategoryOption("C++  ", subcategorySelect);
                    addSubcategoryOption("Game(using C++)", subcategorySelect);
                    addSubcategoryOption("C++ Systems ", subcategorySelect);
                    addSubcategoryOption("PHP", subcategorySelect);
                    addSubcategoryOption("WordPress", subcategorySelect);
                    addSubcategoryOption("Laravel ", subcategorySelect);
                    addSubcategoryOption("Symfony ", subcategorySelect);
                    addSubcategoryOption("Ruby ", subcategorySelect);
                    addSubcategoryOption("Ruby on Rails ", subcategorySelect);
                    addSubcategoryOption("Swift ", subcategorySelect);
                    addSubcategoryOption("iOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("macOS (using Swift)", subcategorySelect);
                    addSubcategoryOption("Kotlin ", subcategorySelect);
                    addSubcategoryOption("Android  (using Kotlin)", subcategorySelect);
                    addSubcategoryOption("Go  ", subcategorySelect);
                    addSubcategoryOption("Rust  ", subcategorySelect);
                    addSubcategoryOption("Systems  (using Rust", subcategorySelect);
                     addSubcategoryOption("TypeScript  ", subcategorySelect);
                     addSubcategoryOption("Front-end  (using TypeScript)", subcategorySelect);
                     addSubcategoryOption("SQL ", subcategorySelect);
                     addSubcategoryOption("Database ", subcategorySelect);
                     addSubcategoryOption("Scala  ", subcategorySelect);
                     addSubcategoryOption("Haskell  ", subcategorySelect);
                     addSubcategoryOption("Perl   ", subcategorySelect);
                     addSubcategoryOption("Lua   ", subcategorySelect);
                     addSubcategoryOption("Game  (using Lua) ", subcategorySelect);
                     addSubcategoryOption("MATLAB   ", subcategorySelect);
                     addSubcategoryOption("Data Analyst (using MATLAB) ", subcategorySelect);
                     
                  } else if (category === "tester") {
                    addSubcategoryOption("Software ", subcategorySelect);
                    addSubcategoryOption("Test Engineer", subcategorySelect);
                    addSubcategoryOption("QA Analyst (Quality Assurance Analyst)", subcategorySelect);
                    addSubcategoryOption("Test Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Manual ", subcategorySelect);
                    addSubcategoryOption("QA Lead (Quality Assurance Lead)", subcategorySelect);
                    addSubcategoryOption("Test Manager", subcategorySelect);
                    addSubcategoryOption("Performance ", subcategorySelect);
                    addSubcategoryOption("Usability ", subcategorySelect);
                    addSubcategoryOption("Regression ", subcategorySelect);
                    addSubcategoryOption("User Acceptance ", subcategorySelect);
                    addSubcategoryOption("Security ", subcategorySelect);
                    addSubcategoryOption("Mobile App ", subcategorySelect);
                    addSubcategoryOption("Game ", subcategorySelect);
                    addSubcategoryOption("Functional ", subcategorySelect);
                    addSubcategoryOption("Test Architect", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Continuous Integration", subcategorySelect);
                    addSubcategoryOption("Load ", subcategorySelect);
                    addSubcategoryOption("Test Designer", subcategorySelect);
                    addSubcategoryOption("Test Technician", subcategorySelect);
                    addSubcategoryOption("QA Inspector (Quality Assurance Inspector)", subcategorySelect);
                    addSubcategoryOption("Test Coordinator", subcategorySelect);
                    addSubcategoryOption("Compliance ", subcategorySelect);
                    // addSubcategoryOption("Load", subcategorySelect);
                    // otherCategoryFields.style.display = "block";
                  } 
                  else if (category === "uiux") {
                    addSubcategoryOption("UI/UX Designer", subcategorySelect);
                    addSubcategoryOption("User Experience Designer", subcategorySelect);
                    addSubcategoryOption("User Interface Designer", subcategorySelect);
                    addSubcategoryOption("Interaction Designer", subcategorySelect);
                    addSubcategoryOption("Visual Designer", subcategorySelect);
                    addSubcategoryOption("UX Researcher", subcategorySelect);
                    addSubcategoryOption("UI/UX Architect", subcategorySelect);
                    addSubcategoryOption("Information Architect", subcategorySelect);
                    addSubcategoryOption("UX Strategist", subcategorySelect);
                    addSubcategoryOption("Product Designer", subcategorySelect);
                    addSubcategoryOption("User-Centered Design Specialist", subcategorySelect);
                    addSubcategoryOption("Usability Analyst", subcategorySelect);
                    addSubcategoryOption("UI/UX Developer", subcategorySelect);
                    addSubcategoryOption("Mobile App Designer", subcategorySelect);
                    addSubcategoryOption("Web Designer", subcategorySelect);
                    addSubcategoryOption("Visual Experience Designer", subcategorySelect);
                    addSubcategoryOption("UX Content Strategist", subcategorySelect);
                    addSubcategoryOption("Interaction Architect", subcategorySelect);
                    addSubcategoryOption("UX/UI Illustrator", subcategorySelect);
                    addSubcategoryOption("User Interface Animator", subcategorySelect);
                    addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist", subcategorySelect);
                    addSubcategoryOption("Accessibility Designer ", subcategorySelect);
                    addSubcategoryOption("Prototype Designer ", subcategorySelect);
                    addSubcategoryOption("UI/UX Lead ", subcategorySelect);
                    addSubcategoryOption("Design Systems Manager ", subcategorySelect);
                    // addSubcategoryOption("Software", subcategorySelect);
                    
                  } else if (category === "datascience") {
                    addSubcategoryOption("Data Scientist", subcategorySelect);
                    addSubcategoryOption("Senior", subcategorySelect);
                    addSubcategoryOption("Machine Learning Engineer", subcategorySelect);
                    addSubcategoryOption("Data Analyst", subcategorySelect);
                    addSubcategoryOption("Senior Data Analyst", subcategorySelect);
                    addSubcategoryOption("Statistician", subcategorySelect);
                    addSubcategoryOption("Business Intelligence Analyst", subcategorySelect);
                    addSubcategoryOption("Quantitative Analyst (Quant)", subcategorySelect);
                    addSubcategoryOption("Data Engineer", subcategorySelect);
                    addSubcategoryOption("Data Architect", subcategorySelect);
                    addSubcategoryOption("AI Research Scientist", subcategorySelect);
                    addSubcategoryOption("Predictive Modeler", subcategorySelect);
                    addSubcategoryOption("Natural Language Processing (NLP) Engineer", subcategorySelect);
                    addSubcategoryOption("Computer Vision Engineer", subcategorySelect);
                    addSubcategoryOption("Big Data Engineer", subcategorySelect);
                    addSubcategoryOption("Analytics Manager", subcategorySelect);
                    addSubcategoryOption("Data Science Manager", subcategorySelect);
                    addSubcategoryOption("Chief Data Officer (CDO)", subcategorySelect);
                    addSubcategoryOption("Research Scientist (AI/ML)", subcategorySelect);
                    addSubcategoryOption("Decision Scientist", subcategorySelect);
                    addSubcategoryOption("Marketing Analyst", subcategorySelect);
                    addSubcategoryOption("Operations Research Analyst", subcategorySelect);
                    addSubcategoryOption("Data Visualization Specialist", subcategorySelect);
                    addSubcategoryOption("Customer Insights Analyst", subcategorySelect);
                    addSubcategoryOption("Fraud Analyst", subcategorySelect);
                  
                  }else if (category === "databaseadmin") {
                    addSubcategoryOption("Database  (DBA)", subcategorySelect);
                    addSubcategoryOption("Senior  Administrator", subcategorySelect);
                    addSubcategoryOption("Database Engineer", subcategorySelect);
                    addSubcategoryOption("Database Architect", subcategorySelect);
                    addSubcategoryOption("Database Analyst", subcategorySelect);
                    addSubcategoryOption("Data Warehouse ", subcategorySelect);
                    addSubcategoryOption("SQL Server", subcategorySelect);
                    addSubcategoryOption("Oracle Database Administrator", subcategorySelect);
                    addSubcategoryOption("MySQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("PostgreSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("MongoDB Administrator", subcategorySelect);
                    addSubcategoryOption("NoSQL Database Administrator", subcategorySelect);
                    addSubcategoryOption("DBMS Administrator (Database Management System)", subcategorySelect);
                    addSubcategoryOption("Database Operations Manager", subcategorySelect);
                    addSubcategoryOption("Database Performance Tuning Specialist", subcategorySelect);
                    addSubcategoryOption("Data Migration Specialist", subcategorySelect);
                    addSubcategoryOption("Database Security Administrator", subcategorySelect);
                    addSubcategoryOption("Database Backup and Recovery Specialist", subcategorySelect);
                    addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)", subcategorySelect);
                    addSubcategoryOption("Database Compliance Officer", subcategorySelect);
                    addSubcategoryOption("Database DevOps Engineer", subcategorySelect);
                    addSubcategoryOption("Database Automation Engineer", subcategorySelect);
                    addSubcategoryOption("Database Replication Specialist", subcategorySelect);
                    addSubcategoryOption("Data Governance Manager", subcategorySelect);
                    addSubcategoryOption("Data Steward", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                    // addSubcategoryOption("", subcategorySelect);
                  }
                  else if (category === "teacher") {
                    addSubcategoryOption("Tamil", subcategorySelect);
                    addSubcategoryOption("Mathematics ", subcategorySelect);
                    addSubcategoryOption("Math Instructor", subcategorySelect);
                    addSubcategoryOption("Algebra ", subcategorySelect);
                    addSubcategoryOption("Geometry ", subcategorySelect);
                    addSubcategoryOption("Calculus ", subcategorySelect);
                    addSubcategoryOption("Statistics ", subcategorySelect);
                    addSubcategoryOption("Math Tutor", subcategorySelect);
                    addSubcategoryOption("Math Coach", subcategorySelect);
                    addSubcategoryOption("Math Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Math Department Chair", subcategorySelect);
                    addSubcategoryOption("English ", subcategorySelect);
                    addSubcategoryOption("Language Arts ", subcategorySelect);
                    addSubcategoryOption("Literature ", subcategorySelect);
                    addSubcategoryOption("Writing Instructor", subcategorySelect);
                    addSubcategoryOption("Creative Writing ", subcategorySelect);
                    addSubcategoryOption("English as a Second Language (ESL) ", subcategorySelect);
                    addSubcategoryOption("Reading Specialist", subcategorySelect);
                    addSubcategoryOption("English Tutor", subcategorySelect);
                    addSubcategoryOption("English Department Chair", subcategorySelect);
                    addSubcategoryOption("Science ", subcategorySelect);
                    addSubcategoryOption("Biology ", subcategorySelect);
                    addSubcategoryOption("Chemistry ", subcategorySelect);
                    addSubcategoryOption("Physics ", subcategorySelect);
                    addSubcategoryOption("Environmental Science ", subcategorySelect);
                    addSubcategoryOption("Earth Science ", subcategorySelect);
                    addSubcategoryOption("Anatomy and Physiology ", subcategorySelect);
                    addSubcategoryOption("Science Lab Instructor", subcategorySelect);
                    addSubcategoryOption("Science Curriculum Specialist", subcategorySelect);
                    addSubcategoryOption("Social Studies ", subcategorySelect);
                    addSubcategoryOption("History ", subcategorySelect);
                    addSubcategoryOption("Geography ", subcategorySelect);
                    addSubcategoryOption("Civics ", subcategorySelect);
                    addSubcategoryOption("Government ", subcategorySelect);
                    addSubcategoryOption("Economics ", subcategorySelect);
                    addSubcategoryOption("World History ", subcategorySelect);
                    addSubcategoryOption("Social Studies Department Chair", subcategorySelect);
                    addSubcategoryOption("Foreign Language ", subcategorySelect);
                    addSubcategoryOption("Language Instructor", subcategorySelect);
                    addSubcategoryOption("Spanish ", subcategorySelect);
                    addSubcategoryOption("French ", subcategorySelect);
                    addSubcategoryOption("German ", subcategorySelect);
                    addSubcategoryOption("Chinese ", subcategorySelect);
                    addSubcategoryOption("Language Lab Coordinator", subcategorySelect);
                    addSubcategoryOption("Physical Education ", subcategorySelect);
                    addSubcategoryOption("PE Instructor", subcategorySelect);
                    addSubcategoryOption("Fitness Coach", subcategorySelect);
                    addSubcategoryOption("Health Education ", subcategorySelect);
                    addSubcategoryOption("Sports Coach", subcategorySelect);
                    addSubcategoryOption("Physical Education Department Chair", subcategorySelect);
                    addSubcategoryOption("Art ", subcategorySelect);
                    addSubcategoryOption("Music ", subcategorySelect);
                    addSubcategoryOption("Drama ", subcategorySelect);
                    addSubcategoryOption("Visual Arts ", subcategorySelect);
                    addSubcategoryOption("Choir Director", subcategorySelect);
                    addSubcategoryOption("Band ", subcategorySelect);
                    addSubcategoryOption("Art History ", subcategorySelect);
                    addSubcategoryOption("Special Education ", subcategorySelect);
                    addSubcategoryOption("Learning Support ", subcategorySelect);
                    addSubcategoryOption("Resource ", subcategorySelect);
                    addSubcategoryOption("Inclusion ", subcategorySelect);
                    addSubcategoryOption("Autism Specialist", subcategorySelect);
                    addSubcategoryOption("Behavioral Interventionist", subcategorySelect);
                    addSubcategoryOption("Vocational Teacher", subcategorySelect);
                    addSubcategoryOption("Career and Technical Education (CTE) Instructor", subcategorySelect);
                    addSubcategoryOption("Culinary Arts Instructor", subcategorySelect);
                    addSubcategoryOption("Automotive Technology ", subcategorySelect);
                    addSubcategoryOption("Computer Science ", subcategorySelect);
                    addSubcategoryOption("Digital Media Instructor", subcategorySelect);
            
                  }
                  else if (category === "professor") {
                    addSubcategoryOption("University ", subcategorySelect);
                    addSubcategoryOption("Assistant ", subcategorySelect);
                    addSubcategoryOption("Associate ", subcategorySelect);
                    addSubcategoryOption("Full ",subcategorySelect);
                    addSubcategoryOption("Distinguished ", subcategorySelect);
                    addSubcategoryOption("Adjunct ", subcategorySelect);
                    addSubcategoryOption("Visiting ", subcategorySelect);
                    addSubcategoryOption("Research ", subcategorySelect);
                    addSubcategoryOption("Clinical ", subcategorySelect);
                    addSubcategoryOption("Philosophy", subcategorySelect);
                    addSubcategoryOption("Professor of History", subcategorySelect);
                    addSubcategoryOption("English", subcategorySelect);
                    addSubcategoryOption("Psychology", subcategorySelect);
                    addSubcategoryOption("Sociology", subcategorySelect);
                    addSubcategoryOption("Political Science", subcategorySelect);
                    addSubcategoryOption("Anthropology", subcategorySelect);
                    addSubcategoryOption("Linguistics", subcategorySelect);
                    addSubcategoryOption("Biology", subcategorySelect);
                    addSubcategoryOption("Chemistry", subcategorySelect);
                    addSubcategoryOption("Physics", subcategorySelect);
                    addSubcategoryOption("Mathematics", subcategorySelect);
                    addSubcategoryOption("Geology", subcategorySelect);
                    addSubcategoryOption("Astronomy", subcategorySelect);
                    addSubcategoryOption(" Environmental Science", subcategorySelect);
                    addSubcategoryOption("Computer Science", subcategorySelect);
                    addSubcategoryOption("Electrical Engineering", subcategorySelect);
                    addSubcategoryOption("Mechanical Engineering", subcategorySelect);
                    addSubcategoryOption("Civil Engineering", subcategorySelect);
                    addSubcategoryOption("Chemical Engineering", subcategorySelect);
                    addSubcategoryOption("Information Technology", subcategorySelect);
                    addSubcategoryOption("Business Administration", subcategorySelect);
                    addSubcategoryOption("Economics", subcategorySelect);
                    addSubcategoryOption("Finance", subcategorySelect);
                    addSubcategoryOption("Marketing", subcategorySelect);
                    addSubcategoryOption("Management", subcategorySelect);
                    addSubcategoryOption("Accounting", subcategorySelect);
                    addSubcategoryOption("Fine Arts", subcategorySelect);
                    addSubcategoryOption("Music", subcategorySelect);
                    addSubcategoryOption("Visual Arts", subcategorySelect);
                    addSubcategoryOption("Theater", subcategorySelect);
                    addSubcategoryOption("Dance", subcategorySelect);
                    addSubcategoryOption("Film Studies", subcategorySelect);
                    addSubcategoryOption("Educational Psychology", subcategorySelect);
                    addSubcategoryOption("Medicine", subcategorySelect);
                    addSubcategoryOption("Nursing", subcategorySelect);
                    addSubcategoryOption("Public Health", subcategorySelect);
                    addSubcategoryOption("Pharmacy", subcategorySelect);
                    addSubcategoryOption("Dentistry", subcategorySelect);
                    addSubcategoryOption("Law", subcategorySelect);
                     addSubcategoryOption("Constitutional Law", subcategorySelect);
                     addSubcategoryOption("Criminal Law",subcategorySelect);
                     addSubcategoryOption("International Law", subcategorySelect);
                     addSubcategoryOption("Environmental Law", subcategorySelect);
                     addSubcategoryOption("Social Work", subcategorySelect);
                     addSubcategoryOption("Social Welfare", subcategorySelect);
                     addSubcategoryOption("Clinical Social Work", subcategorySelect);
                     addSubcategoryOption("Library Science", subcategorySelect);
                     addSubcategoryOption("Information Studies", subcategorySelect);
                     
                  }
                  else {
                    // Handle other categories here
                    addSubcategoryOption("Other Subcategory", subcategorySelect);

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

                function showOtherCategoryFields() {
                  document.getElementById("otherCategoryField").style.display = "block";
                  document.getElementById("otherSubcategoryField").style.display = "block";
                }


                function validateForm() {
                  var category = document.getElementById("category").value;
                  var subcategory = document.getElementById("subcategory").value;
                  var preferredLocation = document.getElementById("preferred-location").value;
                  var jobtype = document.getElementById("jobtype").value;
                  var experience = document.getElementById("experience").value;
                  var description = document.getElementById("description").value;
                  var expectedSalary = document.getElementById("expected-salary").value;
                  // var skillExperience = document.getElementById("skillExperience").value;
                  // var skillName = docment.getElementById("skillname").value;
                  // var skillLevel = document.getElementById("skilllevel").value; 
                  


                  if (category === "") {
                    alert("Please select a category.");
                    

                    return false;
                  }

                  if (subcategory.value === '') {
                    displayError('Please select a subcategory.', 'subcategory_error');
                    return false;
                  }
                  if (experience.value === 'fresher') {
                    hideFields();
                  } else if (experience.value === '') {
                    displayError('Please select an experience.', 'experience_error');
                    return false;
                  }
                  if (companyname.value === '') {
                    displayError('Please enter a company name.', 'companyname_error');
                    return false;
                  }
                  if (description.trim() === "") {
                    alert("Please provide a description.");
                    return false;
                  }

                  if (role.value === '') {
                    displayError('Please enter a role.', 'role_error');
                    return false;
                  }

                  if (description.trim() === "") {
                    alert("Please provide a description.");
                    return false;
                  }
                  if (expectedSalary.trim() === "") {
                    alert("Please provide a expected Salary.");
                    return false;
                  }
                  
                  // if (skillName.trim() === "") {
                  //   alert("Please provide a skillname");
                  //   return false;
                  // }
                  // if (skillExperience.trim() === "") {
                  //   alert("Please provide a experience");
                  //   return false;
                  // }
                  // if (skillLevel.trim() === "") {
                  //   alert("Please provide a skillLevel");
                  //   return false;
                  // }


                  return true;
                }

                function clearErrorMessages() {
                  var errorElements = document.querySelectorAll('.error');
                  errorElements.forEach(function(errorElement) {
                    errorElement.textContent = '';
                  });
                }

                function displayError(message, elementId) {
                  var errorElement = document.getElementById(elementId);
                  errorElement.innerHTML = message;
                  errorElement.style.color = 'red';
                }
              </script>

            <?php
          } elseif ($method == 'insertEducationDetails') {
            ?>
              <div class="container" id="education">
                <h3>Education Form</h3>

                <div id="educationFormsContainer">
                  <div class="education-form-container">

                    <form name="educationform" action="<?php echo baseUrl . "seekerController/insertEducation" ?>" method="post" onsubmit="return validateForm()">
                      <?php
                      // foreach($educationDetails as $key => $value) {

                      if (isset($educationalDetails[0]['id'])) {
                        foreach ($educationalDetails as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];

                      ?>
                          <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                          <input type="hidden" class="form-control" id="id" name="id" placeholder="Enter your name">
                          <div class="form-group">
                            <label for="qualification">Educational Qualification*</label>
                            <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                              <option value="">Select Qualification</option>
                              <option value="below_8th">Below 8th</option>
                              <option value="sslc">SSLC</option>
                              <option value="hsc">HSC</option>
                              <option value="bachelors">Bachelors</option>
                              <option value="masters">Masters</option>
                              <option value="doctorate">Doctorate</option>
                            </select>
                            <div id="qualification_error" class="error"></div>
                          </div>
                          <div class="form-group" id="department-group" style="display: none;">
                            <label for="department">Department</label>
                            <select class="form-control" id="department" name="department">
                              <option value="">Select Department</option>
                              <option value="Tamil">Tamil</option>
                              <option value="english">English</option>
                              <option value="maths">Maths</option>
                              <option value="physics">Physics</option>
                              <option value="chemistry">Chemistry</option>
                              <option value="computer_science">Computer Science</option>
                            </select>
                            <div id="department_error" class="error"></div>
                          </div>
                          <div class="form-group" id="school-group" style="display: none;">
                            <label for="school">School Name/collegename</label>
                            <input type="text" class="form-control" id="school" name="school">
                          </div>
                          <div class="form-group" id="percentage-group" style="display: none;">
                            <label for="percentage">Percentage</label>
                            <input type="text" class="form-control" id="percentage" id="school" name="percentage">
                            <div id="percentage_error" class="error"></div>
                          </div>
                          <div class="form-group" id="year-group" style="display: none;">
                            <label for="year_passed">Year of Passed Out</label>
                            <input type="number" class="form-control" id="year_passed" name="year_passed">
                            <div id="year_error" class="error"></div>
                          </div>
                          <!-- <button type="button" class="btn mt-3" id="educationadd" onclick="addEducationForm()">Add</button> -->
                  </div>
                  <button type="submit" id="educationsubmit" class="btn">Submit</button>

                  </form>
              <?php
                        }
                      }
              ?>
                </div>
                <script>
                  var educationFormCount = 1;

                  function addEducationForm(button) {
                    educationFormCount++;
                    var newEducationFormContainer = document.createElement('div');
                    newEducationFormContainer.className = 'education-form-container';

                    // Clone the original form
                    var originalForm = document.querySelector('.education-form-container');
                    var newForm = originalForm.cloneNode(true);
                    newForm.id = 'educationform_' + educationFormCount;

                    // Clear the values in the new form
                    clearFormFields(newForm);

                    // Append the new form to the container
                    newEducationFormContainer.appendChild(newForm);
                    document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                    // Move the "Submit" button to the new form
                    var submitButton = document.querySelector('button[type="submit"]');
                    newForm.appendChild(submitButton);

                    // Hide the "Add" button in the previous form
                    button.style.display = "none";
                  }
                  // Function to clear the form fields in a given education form
                  function clearFormFields(educationForm) {
                    var fieldsToClear = educationForm.querySelectorAll('input, select');
                    for (var i = 0; i < fieldsToClear.length; i++) {
                      fieldsToClear[i].value = '';
                    }
                  }

                  function validateForm() {
                    var qualification = document.getElementById('qualification').value;
                    var department = document.getElementById('department').value;
                    var school = document.getElementById('school').value;
                    var percentage = document.getElementById('percentage').value;
                    var yearPassed = document.getElementById('year_passed').value;


                    // Basic qualification validation
                    if (!qualification) {
                      displayError('Please select a qualification', 'qualification_error');
                      return false;
                    }


                    // Additional validation for "Bachelors," "Masters," and "Doctorate"
                    if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                      var department = document.getElementById('department').value;
                      var school = document.getElementById('school').value;
                      var percentage = document.getElementById('percentage').value;
                      var yearPassed = document.getElementById('year_passed').value;

                      // Validate department
                      if (!department) {
                        displayError('Department is required for selected qualification', 'department_error');
                        return false;
                      }

                      // Validate school/collegename
                      if (!school) {
                        displayError('School/collegename is required', 'school_error');
                        return false;
                      }

                      // Validate percentage
                      if (!percentage) {
                        displayError('Percentage is required', 'percentage_error');
                        return false;
                      }

                      // Validate year of passed out
                      if (!yearPassed) {
                        displayError('Year of Passed Out is required', 'year_error');
                        return false;
                      }
                    }


                    // Form is valid
                    return true;
                  }

                  function toggleFields() {
                    var selectedQualification = document.getElementById('qualification').value;
                    var departmentGroup = document.getElementById('department-group');
                    var schoolGroup = document.getElementById('school-group');
                    var percentageGroup = document.getElementById('percentage-group');
                    var yearGroup = document.getElementById('year-group');
                    var addButton = document.getElementById('addButton');

                    // Show/hide the additional fields based on the selected qualification
                    if (selectedQualification === 'below_8th') {
                      departmentGroup.style.display = 'none';
                      schoolGroup.style.display = 'none';
                      percentageGroup.style.display = 'none';
                      yearGroup.style.display = 'none';
                      addButton.style.display = 'none';
                    } else {
                      // Show the school, percentage, and year fields by default
                      schoolGroup.style.display = 'block';
                      percentageGroup.style.display = 'block';
                      yearGroup.style.display = 'block';

                      // Hide the department field for SSLC and HSC
                      if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                        departmentGroup.style.display = 'none';
                        addButton.style.display = 'none';
                      } else {
                        // Show the department field for other qualifications
                        departmentGroup.style.display = 'block';
                        addButton.style.display = 'block';
                      }
                    }
                  }
                </script>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



              <?php
            } elseif ($method == 'educationTable') {
              ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="">
                  <h2 class="text-center">Educational Details</h2>
                  <a id="regis" href="<?php echo baseUrl . "seekerController/addEducationForm" ?>">+ Add Educational Details</a>

                  <div class="clearfix"></div>
                  <br>

                  <div class="table-responsive">

                    <thead>
                      <table class="table table-bordered table-striped">

                        <tr>
                          <th>ID</th>
                          <th>Educational Qualification</th>
                          <th>Department</th>
                          <th>School (OR) College Name</th>
                          <th>Percentage</th>
                          <th>YearOfPassing</th>
                          <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php
                      if (isset($educationTable[0]['id'])) {
                        foreach ($educationTable as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];
                      ?>

                          <tr>

                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['educational_qualification'] ?></td>
                            <td><?php echo $value['department'] ?></td>
                            <td><?php echo $value['school_college_name'] ?></td>
                            <td><?php echo $value['percentage'] ?></td>
                            <td><?php echo $value['yearOfPassing'] ?></td>
                            <td>
                              <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateEducation" ?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteEducation" ?>/<?php echo $value['id'] ?>">delete</a>
                              </div>
                            </td>
                          </tr>





                      <?php
                        }
                      }
                    } elseif ($method == 'addEducationForm') {
                      ?>
                      <div class="container" id="education">
                        <h3>Education Form</h3>

                        <div id="educationFormsContainer">
                          <div class="education-form-container">

                            <form name="educationform" action="<?php echo baseUrl . "seekerController/insertEducationForm" ?>" method="post" onsubmit="return validateForm()">

                              <div class="form-group">
                                <label for="qualification">Educational Qualification*</label>
                                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                                  <option value="">Select Qualification</option>
                                  <option value="below_8th">Below 8th</option>
                                  <option value="sslc">SSLC</option>
                                  <option value="hsc">HSC</option>
                                  <option value="bachelors">Bachelors</option>
                                  <option value="masters">Masters</option>
                                  <option value="doctorate">Doctorate</option>
                                </select>
                                <div id="qualification_error" class="error"></div>
                              </div>
                              <div class="form-group" id="department-group">
                                <label for="department">Department</label>
                                <select class="form-control" id="department" name="department" ">
                      <option value="">Select Department</option>
                      <option value=" Tamil">Tamil</option>
                                  <option value="english">English</option>
                                  <option value="maths">Maths</option>
                                  <option value="physics">Physics</option>
                                  <option value="chemistry">Chemistry</option>
                                  <option value="computer_science">Computer Science</option>
                                </select>
                                <div id="department_error" class="error"></div>
                              </div>
                              <div class="form-group" id="school-group">
                                <label for="school">School Name/collegename</label>
                                <input type="text" class="form-control" id="school" name="school">
                              </div>
                              <div class="form-group" id="percentage-group">
                                <label for="percentage">Percentage</label>
                                <input type="text" class="form-control" id="percentage" id="school" name="percentage">
                                <div id="percentage_error" class="error"></div>
                              </div>
                              <div class="form-group" id="year-group">
                                <label for="year_passed">Year of Passed Out</label>
                                <input type="number" class="form-control" id="year_passed" name="year_passed">
                                <div id="year_error" class="error"></div>
                              </div>

                          </div>
                          <button type="submit" id="educationsubmit" class="btn">Submit</button>

                          </form>

                        </div>
                        <script>
                          var educationFormCount = 1;

                          function addEducationForm(button) {
                            educationFormCount++;
                            var newEducationFormContainer = document.createElement('div');
                            newEducationFormContainer.className = 'education-form-container';

                            // Clone the original form
                            var originalForm = document.querySelector('.education-form-container');
                            var newForm = originalForm.cloneNode(true);
                            newForm.id = 'educationform_' + educationFormCount;

                            // Clear the values in the new form
                            clearFormFields(newForm);

                            // Append the new form to the container
                            newEducationFormContainer.appendChild(newForm);
                            document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                            // Move the "Submit" button to the new form
                            var submitButton = document.querySelector('button[type="submit"]');
                            newForm.appendChild(submitButton);

                            // Hide the "Add" button in the previous form
                            button.style.display = "none";
                          }
                          // Function to clear the form fields in a given education form
                          function clearFormFields(educationForm) {
                            var fieldsToClear = educationForm.querySelectorAll('input, select');
                            for (var i = 0; i < fieldsToClear.length; i++) {
                              fieldsToClear[i].value = '';
                            }
                          }

                          function validateForm() {
                            var qualification = document.getElementById('qualification').value;
                            var department = document.getElementById('department').value;
                            var school = document.getElementById('school').value;
                            var percentage = document.getElementById('percentage').value;
                            var yearPassed = document.getElementById('year_passed').value;


                            // Basic qualification validation
                            if (!qualification) {
                              displayError('Please select a qualification', 'qualification_error');
                              return false;
                            }


                            // Additional validation for "Bachelors," "Masters," and "Doctorate"
                            if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                              var department = document.getElementById('department').value;
                              var school = document.getElementById('school').value;
                              var percentage = document.getElementById('percentage').value;
                              var yearPassed = document.getElementById('year_passed').value;

                              // Validate department
                              if (!department) {
                                displayError('Department is required for selected qualification', 'department_error');
                                return false;
                              }

                              // Validate school/collegename
                              if (!school) {
                                displayError('School/collegename is required', 'school_error');
                                return false;
                              }

                              // Validate percentage
                              if (!percentage) {
                                displayError('Percentage is required', 'percentage_error');
                                return false;
                              }

                              // Validate year of passed out
                              if (!yearPassed) {
                                displayError('Year of Passed Out is required', 'year_error');
                                return false;
                              }
                            }


                            // Form is valid
                            return true;
                          }

                          function toggleFields() {
                            var selectedQualification = document.getElementById('qualification').value;
                            var departmentGroup = document.getElementById('department-group');
                            var schoolGroup = document.getElementById('school-group');
                            var percentageGroup = document.getElementById('percentage-group');
                            var yearGroup = document.getElementById('year-group');
                            var addButton = document.getElementById('addButton');

                            // Show/hide the additional fields based on the selected qualification
                            if (selectedQualification === 'below_8th') {
                              departmentGroup.style.display = 'none';
                              schoolGroup.style.display = 'none';
                              percentageGroup.style.display = 'none';
                              yearGroup.style.display = 'none';
                              addButton.style.display = 'none';
                            } else {
                              // Show the school, percentage, and year fields by default
                              schoolGroup.style.display = 'block';
                              percentageGroup.style.display = 'block';
                              yearGroup.style.display = 'block';

                              // Hide the department field for SSLC and HSC
                              if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                                departmentGroup.style.display = 'none';
                                addButton.style.display = 'none';
                              } else {
                                // Show the department field for other qualifications
                                departmentGroup.style.display = 'block';
                                addButton.style.display = 'block';
                              }
                            }
                          }
                        </script>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


                      <?php


                    } elseif ($method == 'updateEducation') {
                      ?>
                        <div class="container" id="education">
                          <h3>Education Form</h3>

                          <div id="educationFormsContainer">
                            <div class="education-form-container">

                              <form name="educationform" action="<?php echo baseUrl . "seekerController/updateInsertEducation" ?>" method="post" onsubmit="return validateForm()">
                                <?php
                                if (isset($updateEducation[0]['id'])) {
                                  foreach ($updateEducation as $key => $value) {
                                    $seekerId = $_SESSION['seekerId'];
                                ?>
                                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">
                                    <div class="form-group">
                                      <label for="qualification">Educational Qualification*</label>
                                      <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>" name="qualification" onchange="toggleFields()">
                                        <option value="">Select Qualification</option>
                                        <option value="below_8th" <?php if ($value['educational_qualification'] === 'below_8th') echo ' selected'; ?>>Below 8th</option>
                                        <option value="sslc" <?php if ($value['educational_qualification'] === 'sslc') echo ' selected'; ?>>SSLC</option>
                                        <option value="hsc" <?php if ($value['educational_qualification'] === 'hsc') echo ' selected'; ?>>HSC</option>
                                        <option value="bachelors" <?php if ($value['educational_qualification'] === 'bachelors') echo ' selected'; ?>>Bachelors</option>
                                        <option value="masters" <?php if ($value['educational_qualification'] === 'masters') echo ' selected'; ?>>Masters</option>
                                        <option value="doctorate" <?php if ($value['educational_qualification'] === 'doctorate') echo ' selected'; ?>>Doctorate</option>
                                      </select>
                                      <div id="qualification_error" class="error"></div>
                                    </div>

                                    <div class="form-group" id="department-group" ">
                <label for=" department">Department</label>
                                      <select class="form-control" id="department" value="<?php echo $value['department']; ?>" name="department">
                                        <option value="">Select Department</option>
                                        <option value="Tamil" <?php if ($value['department'] === 'Tamil') echo ' selected'; ?>>Tamil</option>
                                        <option value="english" <?php if ($value['department'] === 'english') echo ' selected'; ?>>English</option>
                                        <option value="maths" <?php if ($value['department'] === 'maths') echo ' selected'; ?>>Maths</option>
                                        <option value="physics" <?php if ($value['department'] === 'physics') echo ' selected'; ?>>Physics</option>
                                        <option value="chemistry" <?php if ($value['department'] === 'chemistry') echo ' selected'; ?>>Chemistry</option>
                                        <option value="computer_science" <?php if ($value['department'] === 'computer_science') echo ' selected'; ?>>Computer Science</option>
                                      </select>
                                      <div id="department_error" class="error"></div>
                                    </div>

                                    <div class="form-group" id="school-group">
                                      <label for="school">School Name/collegename</label>
                                      <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                                    </div>
                                    <div class="form-group" id="percentage-group">
                                      <label for="percentage">Percentage</label>
                                      <input type="text" class="form-control" id="percentage" id="school" value="<?php echo $value['percentage']; ?>" name="percentage">
                                      <div id="percentage_error" class="error"></div>
                                    </div>
                                    <div class="form-group" id="year-group">
                                      <label for="year_passed">Year of Passed Out</label>
                                      <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>" name="year_passed">
                                      <div id="year_error" class="error"></div>
                                    </div>

                            </div>
                            <button type="submit" id="educationsubmit" class="btn">Submit</button>

                            </form>
                          <?php
                                  }
                                } else {
                                  $seekerId = $_SESSION['seekerId'];
                          ?>
                          <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                          <div class="form-group">
                            <label for="qualification">Educational Qualification*</label>
                            <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                              <option value="">Select Qualification</option>
                              <option value="below_8th" <?php if ($value['educational_qualification'] === 'below_8th') echo ' selected'; ?>>Below 8th</option>
                              <option value="sslc" <?php if ($value['educational_qualification'] === 'sslc') echo ' selected'; ?>>SSLC</option>
                              <option value="hsc" <?php if ($value['educational_qualification'] === 'hsc') echo ' selected'; ?>>HSC</option>
                              <option value="bachelors" <?php if ($value['educational_qualification'] === 'bachelors') echo ' selected'; ?>>Bachelors</option>
                              <option value="masters" <?php if ($value['educational_qualification'] === 'masters') echo ' selected'; ?>>Masters</option>
                              <option value="doctorate" <?php if ($value['educational_qualification'] === 'doctorate') echo ' selected'; ?>>Doctorate</option>
                            </select>
                            <div id="qualification_error" class="error"></div>
                            <div class="form-group" id="department-group" style="display: none;">
                              <label for="department">Department</label>
                              <select class="form-control" id="department" name="department">
                                <option value="">Select Department</option>
                                <option value="Tamil" <?php if ($value['department'] === 'Tamil') echo ' selected'; ?>>Tamil</option>
                                <option value="english" <?php if ($value['department'] === 'english') echo ' selected'; ?>>English</option>
                                <option value="maths" <?php if ($value['department'] === 'maths') echo ' selected'; ?>>Maths</option>
                                <option value="physics" <?php if ($value['department'] === 'physics') echo ' selected'; ?>>Physics</option>
                                <option value="chemistry" <?php if ($value['department'] === 'chemistry') echo ' selected'; ?>>Chemistry</option>
                                <option value="computer_science" <?php if ($value['department'] === 'computer_science') echo ' selected'; ?>>Computer Science</option>
                              </select>
                              <div id="department_error" class="error"></div>
                              <div class="form-group" id="school-group" style="display: none;">
                                <label for="school">School Name/collegename</label>
                                <input type="text" class="form-control" id="school" name="school">
                              </div>
                              <div class="form-group" id="percentage-group" style="display: none;">
                                <label for="percentage">Percentage</label>
                                <input type="text" class="form-control" id="percentage" id="school" name="percentage">
                                <div id="percentage_error" class="error"></div>
                              </div>
                              <div class="form-group" id="year-group" style="display: none;">
                                <label for="year_passed">Year of Passed Out</label>
                                <input type="number" class="form-control" id="year_passed" name="year_passed">
                                <div id="year_error" class="error"></div>
                              </div>

                            </div>
                            <button type="submit" id="educationsubmit" class="btn">Submit</button>
                          <?php } ?>
                          </div>
                          <script>
                            var educationFormCount = 1;

                            function addEducationForm(button) {
                              educationFormCount++;
                              var newEducationFormContainer = document.createElement('div');
                              newEducationFormContainer.className = 'education-form-container';

                              // Clone the original form
                              var originalForm = document.querySelector('.education-form-container');
                              var newForm = originalForm.cloneNode(true);
                              newForm.id = 'educationform_' + educationFormCount;

                              // Clear the values in the new form
                              clearFormFields(newForm);

                              // Append the new form to the container
                              newEducationFormContainer.appendChild(newForm);
                              document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                              // Move the "Submit" button to the new form
                              var submitButton = document.querySelector('button[type="submit"]');
                              newForm.appendChild(submitButton);

                              // Hide the "Add" button in the previous form
                              button.style.display = "none";
                            }
                            // Function to clear the form fields in a given education form
                            function clearFormFields(educationForm) {
                              var fieldsToClear = educationForm.querySelectorAll('input, select');
                              for (var i = 0; i < fieldsToClear.length; i++) {
                                fieldsToClear[i].value = '';
                              }
                            }

                            function validateForm() {
                              var qualification = document.getElementById('qualification').value;
                              var department = document.getElementById('department').value;
                              var school = document.getElementById('school').value;
                              var percentage = document.getElementById('percentage').value;
                              var yearPassed = document.getElementById('year_passed').value;


                              // Basic qualification validation
                              if (!qualification) {
                                displayError('Please select a qualification', 'qualification_error');
                                return false;
                              }


                              // Additional validation for "Bachelors," "Masters," and "Doctorate"
                              if (qualification === 'bachelors' || qualification === 'masters' || qualification === 'doctorate') {
                                var department = document.getElementById('department').value;
                                var school = document.getElementById('school').value;
                                var percentage = document.getElementById('percentage').value;
                                var yearPassed = document.getElementById('year_passed').value;

                                // Validate department
                                if (!department) {
                                  displayError('Department is required for selected qualification', 'department_error');
                                  return false;
                                }

                                // Validate school/collegename
                                if (!school) {
                                  displayError('School/collegename is required', 'school_error');
                                  return false;
                                }

                                // Validate percentage
                                if (!percentage) {
                                  displayError('Percentage is required', 'percentage_error');
                                  return false;
                                }

                                // Validate year of passed out
                                if (!yearPassed) {
                                  displayError('Year of Passed Out is required', 'year_error');
                                  return false;
                                }
                              }


                              // Form is valid
                              return true;
                            }

                            function toggleFields() {
                              var selectedQualification = document.getElementById('qualification').value;
                              var departmentGroup = document.getElementById('department-group');
                              var schoolGroup = document.getElementById('school-group');
                              var percentageGroup = document.getElementById('percentage-group');
                              var yearGroup = document.getElementById('year-group');
                              var addButton = document.getElementById('addButton');

                              // Show/hide the additional fields based on the selected qualification
                              if (selectedQualification === 'below_8th') {
                                departmentGroup.style.display = 'none';
                                schoolGroup.style.display = 'none';
                                percentageGroup.style.display = 'none';
                                yearGroup.style.display = 'none';
                                addButton.style.display = 'none';
                              } else {
                                // Show the school, percentage, and year fields by default
                                schoolGroup.style.display = 'block';
                                percentageGroup.style.display = 'block';
                                yearGroup.style.display = 'block';

                                // Hide the department field for SSLC and HSC
                                if (selectedQualification === 'sslc' || selectedQualification === 'hsc') {
                                  departmentGroup.style.display = 'none';
                                  addButton.style.display = 'none';
                                } else {
                                  // Show the department field for other qualifications
                                  departmentGroup.style.display = 'block';
                                  addButton.style.display = 'block';
                                }
                              }
                            }
                          </script>
                          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    </tbody>
                    </table>
                  </div>
                </div>

              <?php
                    } elseif ($method == 'projectTable') {
              ?>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="">
                  <h2 class="text-center">Project Details</h2>
                  <a id="regis" href="<?php echo baseUrl . "seekerController/addProjectForm" ?>">+ Add Project Details</a>

                  <div class="clearfix"></div>
                  <br>

                  <div class="table-responsive">

                    <thead>
                      <table class="table table-bordered table-striped">

                        <tr>
                          <th>ID</th>
                          <th>Project Name</th>
                          <th>Project Duration</th>
                          <th>Role In Project</th>
                          <th>Starting Date</th>
                          <th>Ending Date</th>
                          <th>Responsibility In Project</th>
                          <th>Skills Used In Project</th>
                          <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                      <?php
                      if (isset($projectTable[0]['id'])) {
                        foreach ($projectTable as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];
                      ?>

                          <tr>

                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['projectName'] ?></td>
                            <td><?php echo $value['projectDuration'] ?></td>
                            <td><?php echo $value['roleInProject'] ?></td>
                            <td><?php echo $value['startingDate'] ?></td>
                            <td><?php echo $value['endingDate'] ?></td>
                            <td><?php echo $value['responsibilityInProject'] ?></td>
                            <td><?php echo $value['skillsUsedInProject'] ?></td>
                            <td>
                              <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateProject" ?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteProject" ?>/<?php echo $value['id'] ?>">delete</a>
                              </div>
                            </td>
                          </tr>


                      <?php
                        }
                      }
                    } elseif ($method == 'addProjectForm') {
                      ?>



                      <div class="container">
                        <h3 id="projectdeailsform">Project Details Form</h3>
                        <form name="projectform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/insertProjectForm" ?>">


                          <div id="project-sections">
                            <div class="project-section">
                              <div class="form-group">
                                <label for="projectname">Project Name</label>
                                <input type="text" class="form-control" id="projectname" name="projectname" ">
                          <div id=" projectname_error" class="error">
                              </div>
                              <div class="form-group">
                                <label for="Duration of project">Duration of Project</label>
                                <input type="text" class="form-control" id="durationofproject" name="durationofproject" ">
                            <div id=" durationofproject_error" class="error">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="role in the project">Role in the Project</label>
                              <input type="text" class="form-control" id="roleofproject" name="roleofproject">
                              <div id="roleofproject_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="">start date of project*</label>
                              <input type="date" class="form-control" id="startdate" name="startdate">
                              <div id="startdate_error" class="error"></div>
                              <label for="">End date of the project*</label>
                              <input type="date" class="form-control" id="enddate" name="enddate">
                              <div id="enddate_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Responsibity">My responsibility in project*</label>
                              <input type="text" class="form-control" rows="3" class="form-control" id="responsibility" name="responsibility">
                              <div id="responsibility_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="Skills used in project">Skills used in project*</label>
                              <input type="text" class="form-control" id="skillsused" name="skillsused">
                              <div id="skills_error" class="error"></div>
                            </div>
                            <!-- <button type="button" class="btn btn-primary" onclick="addProjectSection()">Add Project</button> -->
                          </div>
                          <button type="submit" class="btn btn-primary" id="finalsubmit">Submit</button>

                        </form>

                        <script>
                          var projectFormCount = 1;

                          function validateForm() {
                            var projectname = document.getElementById("projectname");
                            var durationofproject = document.getElementById("durationofproject");
                            var startdate = document.getElementById("startdate");
                            var enddate = document.getElementById("enddate");
                            var responsibility = document.getElementById("responsibility");
                            var skillsused = document.getElementById("skillsused");
                            if (projectname.value === '') {
                              displayError('please enter a project name', 'projectname_error');
                              return false;
                            }
                            if (durationofproject.value === '') {
                              displayError('please enter a project duration', 'durationofproject_error');
                              return false;
                            }
                            if (roleofproject.value === '') {
                              displayError('please enter a role of project', 'roleofproject_error');
                            }
                            if (startdate.value === '') {
                              displayError('please select a start date', 'startdate_error');
                              return false;
                            }
                            if (enddate.value === '') {
                              displayError('please select a end date', 'enddate_error');
                              return false;
                            }
                            if (responsibilty.value === '') {
                              displayError('This Field is required!', 'responsibility_error');
                              return false;
                            }
                            if (skillsused.value === '') {
                              displayError('please enter a Skills used in the project', 'skillsused_error');
                              return false;
                            }
                            return true;
                          }


                          function addProjectSection() {
                            projectFormCount++;
                            var newProjectSection = document.createElement('div');
                            newProjectSection.className = 'project-section';

                            // Clone the original project section
                            var originalSection = document.querySelector('.project-section');
                            var clone = originalSection.cloneNode(true);

                            // Clear input values in the cloned section
                            var inputs = clone.querySelectorAll('input[type="text"], input[type="date"], textarea');
                            inputs.forEach(function(input) {
                              input.value = '';
                            });

                            // Append the cloned section to the project sections container
                            newProjectSection.appendChild(clone);
                            document.getElementById('project-sections').appendChild(newProjectSection);

                            // Move the "Submit" button to the end of the last added project section
                            var submitButton = document.getElementById('finalsubmit');
                            newProjectSection.appendChild(submitButton);

                            // Hide the "Add Project" button in the previous section
                            var addButton = document.querySelector('button[type="button"]');
                            addButton.style.display = 'none';
                          }


                          function clearErrorMessages() {
                            var errorElements = document.querySelectorAll('.error');
                            errorElements.forEach(function(errorElement) {
                              errorElement.textContent = '';
                            });
                          }

                          function displayError(message, elementId) {
                            var errorElement = document.getElementById(elementId);
                            errorElement.innerHTML = message;
                            errorElement.style.color = 'red';
                          }
                        </script>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>




                      <?php
                    } elseif ($method == 'areaOfIntrestTable') {
                      ?>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="">
                          <h2 class="text-center">Area Of Intrest Details</h2>
                          <a id="regis" href="<?php echo baseUrl . "seekerController/addAreaOfIntrestForm" ?>">+ Add Area Of Interest Details</a>

                          <div class="clearfix"></div>
                          <br>

                          <div class="table-responsive">

                            <thead>
                              <table class="table table-bordered table-striped">

                                <tr>
                                  <th>ID</th>
                                  <th>Job Category</th>
                                  <th>Job Sub Category</th>
                                  <th>Prefered Location</th>
                                  <th>Experience</th>
                                  <th>Job Type</th>
                                  <th>Description</th>
                                  <th>Expected_salary</th>
                                  <th>Action</th>
                                </tr>
                            </thead>

                    <tbody>
                      <?php
                      if (isset($areaOfIntrestTable[0]['id'])) {
                        foreach ($areaOfIntrestTable as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];
                      ?>

                          <tr>

                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['other_interst_category'] ?></td>
                            <td><?php echo $value['other_sub_interst_category'] ?></td>
                            <td><?php echo $value['prefered_location'] ?></td>
                            <td><?php echo $value['experience'] ?></td>
                            <td><?php echo $value['job_type'] ?></td>
                            <td><?php echo $value['description'] ?></td>
                            <td><?php echo $value['expected_salary'] ?></td>
                            <td>
                              <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>">delete</a>
                              </div>
                            </td>
                          </tr>
                      <?php
                        }
                      }
                    } elseif ($method == 'addAreaOfIntrestForm') {
                      ?>



                      <div class="container">
                        <h3>Area of Interest Form</h3>
                        <form method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/insertAreaOfIntrest" ?>">



                          <div id="educationFormsContainer">
                            <div class="education-form-container">
                              <div class="form-group">
                                <label for="category">Category *</label>
                                <select class="form-control" id="category" name="category" onchange="toggleCategoryFields()">
                                  <option value="">Select a category</option>
                                  <option value="architech">Architech</option>
                                  <option value="developer">Developer</option>
                                  <option value="tester">Tester</option>
                                  <option value="uiux">UI/UX Design</option>
                                  <option value="datascience">Data Scientist</option>
                                  <option value="databaseadmin">Database Admin</option>
                                  <option value="teacher">Teacher</option>
                                  <option value="professor">Professor</option>
                                  <!-- <option value="others">Others</option> -->
                                </select>
                              </div>
                              <div class="form-group"">
                <label for=" subcategory">Subcategory *</label>
                                <select class="form-control" id="subcategory" name="subcategory">
                                  <option value="">Select a sub category </option>
                                </select>
                              </div>
                              <div class="form-group" id="otherCategoryFields" style="display: none;">
                                <label for="customCategoryInput">Custom Category</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                                <label for="customSubcategoryInput">Custom Subcategory</label>
                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                              </div>
                              <div class="form-group" id="customCategory" style="display: none;">
                                <label for="customCategoryInput">Category Name</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                              </div>

                              <div class="form-group" id="customSubcategory" style="display: none;">
                                <label for="customSubcategoryInput"> Subcategory Name</label>
                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
                              </div>

                              <div class="form-group">
                                <label for="preferred-location">Preferred Location to work</label>
                                <input type="text" class="form-control" id="preferred-location" name="preferred-location">

                                <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                    <option value="">Select a Preferred location</option>
                    <option value="chennai">chennai</option>
                    <option value="Bangalore">Bangalore</option>
                    <option value="others">others</option>
                </select> -->
                              </div>
                              <div class="form-group">
                                <label for="experience">Experience</label>
                                <input type="text" class="form-control" id="experience" name="experience">
                              </div>
                              <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" id="description" name="description" rows="3">
                              </div>
                              <div class="form-group">
                                <label for="jobtype">Job Type</label>
                                <select class="form-control" id="jobtype" name="jobtype">
                                  <option value="">Select a job type</option>
                                  <option value="parttime">Part Time</option>
                                  <option value="fulltime">Full Time</option>
                                  <option value="both">Both</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="expected-salary">Expected Salary</label>
                                <input type="text" class="form-control" id="expected-salary" name="expected-salary">
                              </div>
                              <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                      </div>
                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                      <script>
                        var educationFormCount = 1;



                        function addEducationForm(button) {
                          educationFormCount++;
                          var newEducationFormContainer = document.createElement('div');
                          newEducationFormContainer.className = 'education-form-container';

                          // Clone the original form
                          var originalForm = document.querySelector('.education-form-container');
                          var newForm = originalForm.cloneNode(true);
                          newForm.id = 'educationform_' + educationFormCount;

                          // Clear the values in the new form
                          clearFormFields(newForm);

                          // Append the new form to the container
                          newEducationFormContainer.appendChild(newForm);
                          document.querySelector('#educationFormsContainer').appendChild(newEducationFormContainer);

                          // Move the "Submit" button to the new form
                          var submitButton = document.querySelector('button[type="submit"]');
                          newForm.appendChild(submitButton);

                          // Hide the "Add" button in the previous form
                          button.style.display = "none";
                        }

                        function clearFormFields(form) {
                          var fieldsToClear = form.querySelectorAll('input, select');
                          for (var i = 0; i < fieldsToClear.length; i++) {
                            fieldsToClear[i].value = '';
                          }
                        }

                        function toggleCategoryFields() {
                          var category = document.getElementById("category").value;
                          var subcategorySelect = document.getElementById("subcategory");
                          var otherCategoryFields = document.getElementById("otherCategoryFields");

                          // Clear existing options and hide the otherCategoryFields
                          subcategorySelect.innerHTML = "";
                          otherCategoryFields.style.display = "none";

                          if (category === "architech") {
                            addSubcategoryOption("Architect", subcategorySelect);
                            addSubcategoryOption("Senior", subcategorySelect);
                            addSubcategoryOption("Design", subcategorySelect);
                            addSubcategoryOption("Project", subcategorySelect);
                            addSubcategoryOption("Principal", subcategorySelect);
                            addSubcategoryOption("Landscape", subcategorySelect);
                            addSubcategoryOption("Urban Planner", subcategorySelect);
                            addSubcategoryOption("Interior Designer", subcategorySelect);
                            addSubcategoryOption("Architectural Technologist", subcategorySelect);
                            addSubcategoryOption("BIM (Building Information Modeling) Specialist", subcategorySelect);
                            addSubcategoryOption("Sustainable Design Consultant", subcategorySelect);
                            addSubcategoryOption("Architectural Drafter", subcategorySelect);
                            addSubcategoryOption("Architectural Visualization Artist", subcategorySelect);
                            addSubcategoryOption("Urban Designer", subcategorySelect);
                            addSubcategoryOption("Historic Preservation", subcategorySelect);
                            addSubcategoryOption("Residential Architect", subcategorySelect);
                            addSubcategoryOption("CAD (Computer-Aided Design) Technician", subcategorySelect);
                            addSubcategoryOption("Architectural Educator", subcategorySelect);
                            addSubcategoryOption("Construction Project Manage", subcategorySelect);
                            addSubcategoryOption("Industrial Designer", subcategorySelect);
                            addSubcategoryOption("Healthcare Facility Planner", subcategorySelect);
                            addSubcategoryOption("Retail Space Designer", subcategorySelect);
                          } else if (category === "developer") {
                            addSubcategoryOption("Python Software Engineer", subcategorySelect);
                            addSubcategoryOption("Python", subcategorySelect);
                            addSubcategoryOption("Python Data Scientist", subcategorySelect);
                            addSubcategoryOption("Python Machine Learning Engineer", subcategorySelect);
                            addSubcategoryOption("Python Automation", subcategorySelect);
                            addSubcategoryOption("Java Software ", subcategorySelect);
                            addSubcategoryOption("Java", subcategorySelect);
                            addSubcategoryOption("Java Full Stack ", subcategorySelect);
                            addSubcategoryOption("Java Android ", subcategorySelect);
                            addSubcategoryOption("Java Spring ", subcategorySelect);
                            addSubcategoryOption("Java Microservices ", subcategorySelect);
                            addSubcategoryOption("JavaScript", subcategorySelect);
                            addSubcategoryOption("Front-end ", subcategorySelect);
                            addSubcategoryOption("Node.js ", subcategorySelect);
                            addSubcategoryOption("React ", subcategorySelect);
                            addSubcategoryOption("Angular", subcategorySelect);
                            addSubcategoryOption("Vue.js ", subcategorySelect);
                            addSubcategoryOption("Full Stack JavaScript ", subcategorySelect);
                            addSubcategoryOption("C#  ", subcategorySelect);
                            addSubcategoryOption(".NET ", subcategorySelect);
                            addSubcategoryOption("ASP.NET ", subcategorySelect);
                            addSubcategoryOption("Unity ", subcategorySelect);
                            addSubcategoryOption("Xamarin ", subcategorySelect);
                            addSubcategoryOption("C++  ", subcategorySelect);
                            addSubcategoryOption("Game(using C++)", subcategorySelect);
                            addSubcategoryOption("C++ Systems ", subcategorySelect);
                            addSubcategoryOption("PHP", subcategorySelect);
                            addSubcategoryOption("WordPress", subcategorySelect);
                            addSubcategoryOption("Laravel ", subcategorySelect);
                            addSubcategoryOption("Symfony ", subcategorySelect);
                            addSubcategoryOption("Ruby ", subcategorySelect);
                            addSubcategoryOption("Ruby on Rails ", subcategorySelect);
                            addSubcategoryOption("Swift ", subcategorySelect);
                            addSubcategoryOption("iOS (using Swift)", subcategorySelect);
                            addSubcategoryOption("macOS (using Swift)", subcategorySelect);
                            addSubcategoryOption("Kotlin ", subcategorySelect);
                            addSubcategoryOption("Android  (using Kotlin)", subcategorySelect);
                            addSubcategoryOption("Go  ", subcategorySelect);
                            addSubcategoryOption("Rust  ", subcategorySelect);
                            addSubcategoryOption("Systems  (using Rust", subcategorySelect);
                            addSubcategoryOption("TypeScript  ", subcategorySelect);
                            addSubcategoryOption("Front-end  (using TypeScript)", subcategorySelect);
                            addSubcategoryOption("SQL ", subcategorySelect);
                            addSubcategoryOption("Database ", subcategorySelect);
                            addSubcategoryOption("Scala  ", subcategorySelect);
                            addSubcategoryOption("Haskell  ", subcategorySelect);
                            addSubcategoryOption("Perl   ", subcategorySelect);
                            addSubcategoryOption("Lua   ", subcategorySelect);
                            addSubcategoryOption("Game  (using Lua) ", subcategorySelect);
                            addSubcategoryOption("MATLAB   ", subcategorySelect);
                            addSubcategoryOption("Data Analyst (using MATLAB) ", subcategorySelect);

                          } else if (category === "tester") {
                            addSubcategoryOption("Software ", subcategorySelect);
                            addSubcategoryOption("Test Engineer", subcategorySelect);
                            addSubcategoryOption("QA Analyst (Quality Assurance Analyst)", subcategorySelect);
                            addSubcategoryOption("Test Automation Engineer", subcategorySelect);
                            addSubcategoryOption("Manual ", subcategorySelect);
                            addSubcategoryOption("QA Lead (Quality Assurance Lead)", subcategorySelect);
                            addSubcategoryOption("Test Manager", subcategorySelect);
                            addSubcategoryOption("Performance ", subcategorySelect);
                            addSubcategoryOption("Usability ", subcategorySelect);
                            addSubcategoryOption("Regression ", subcategorySelect);
                            addSubcategoryOption("User Acceptance ", subcategorySelect);
                            addSubcategoryOption("Security ", subcategorySelect);
                            addSubcategoryOption("Mobile App ", subcategorySelect);
                            addSubcategoryOption("Game ", subcategorySelect);
                            addSubcategoryOption("Functional ", subcategorySelect);
                            addSubcategoryOption("Test Architect", subcategorySelect);
                            addSubcategoryOption("Test Coordinator", subcategorySelect);
                            addSubcategoryOption("Continuous Integration", subcategorySelect);
                            addSubcategoryOption("Load ", subcategorySelect);
                            addSubcategoryOption("Test Designer", subcategorySelect);
                            addSubcategoryOption("Test Technician", subcategorySelect);
                            addSubcategoryOption("QA Inspector (Quality Assurance Inspector)", subcategorySelect);
                            addSubcategoryOption("Test Coordinator", subcategorySelect);
                            addSubcategoryOption("Compliance ", subcategorySelect);
                            // addSubcategoryOption("Load", subcategorySelect);
                            // otherCategoryFields.style.display = "block";
                          } else if (category === "uiux") {
                            addSubcategoryOption("UI/UX Designer", subcategorySelect);
                            addSubcategoryOption("User Experience Designer", subcategorySelect);
                            addSubcategoryOption("User Interface Designer", subcategorySelect);
                            addSubcategoryOption("Interaction Designer", subcategorySelect);
                            addSubcategoryOption("Visual Designer", subcategorySelect);
                            addSubcategoryOption("UX Researcher", subcategorySelect);
                            addSubcategoryOption("UI/UX Architect", subcategorySelect);
                            addSubcategoryOption("Information Architect", subcategorySelect);
                            addSubcategoryOption("UX Strategist", subcategorySelect);
                            addSubcategoryOption("Product Designer", subcategorySelect);
                            addSubcategoryOption("User-Centered Design Specialist", subcategorySelect);
                            addSubcategoryOption("Usability Analyst", subcategorySelect);
                            addSubcategoryOption("UI/UX Developer", subcategorySelect);
                            addSubcategoryOption("Mobile App Designer", subcategorySelect);
                            addSubcategoryOption("Web Designer", subcategorySelect);
                            addSubcategoryOption("Visual Experience Designer", subcategorySelect);
                            addSubcategoryOption("UX Content Strategist", subcategorySelect);
                            addSubcategoryOption("Interaction Architect", subcategorySelect);
                            addSubcategoryOption("UX/UI Illustrator", subcategorySelect);
                            addSubcategoryOption("User Interface Animator", subcategorySelect);
                            addSubcategoryOption("Conversion Rate Optimization (CRO) Specialist", subcategorySelect);
                            addSubcategoryOption("Accessibility Designer ", subcategorySelect);
                            addSubcategoryOption("Prototype Designer ", subcategorySelect);
                            addSubcategoryOption("UI/UX Lead ", subcategorySelect);
                            addSubcategoryOption("Design Systems Manager ", subcategorySelect);
                            // addSubcategoryOption("Software", subcategorySelect);

                          } else if (category === "datascience") {
                            addSubcategoryOption("Data Scientist", subcategorySelect);
                            addSubcategoryOption("Senior", subcategorySelect);
                            addSubcategoryOption("Machine Learning Engineer", subcategorySelect);
                            addSubcategoryOption("Data Analyst", subcategorySelect);
                            addSubcategoryOption("Senior Data Analyst", subcategorySelect);
                            addSubcategoryOption("Statistician", subcategorySelect);
                            addSubcategoryOption("Business Intelligence Analyst", subcategorySelect);
                            addSubcategoryOption("Quantitative Analyst (Quant)", subcategorySelect);
                            addSubcategoryOption("Data Engineer", subcategorySelect);
                            addSubcategoryOption("Data Architect", subcategorySelect);
                            addSubcategoryOption("AI Research Scientist", subcategorySelect);
                            addSubcategoryOption("Predictive Modeler", subcategorySelect);
                            addSubcategoryOption("Natural Language Processing (NLP) Engineer", subcategorySelect);
                            addSubcategoryOption("Computer Vision Engineer", subcategorySelect);
                            addSubcategoryOption("Big Data Engineer", subcategorySelect);
                            addSubcategoryOption("Analytics Manager", subcategorySelect);
                            addSubcategoryOption("Data Science Manager", subcategorySelect);
                            addSubcategoryOption("Chief Data Officer (CDO)", subcategorySelect);
                            addSubcategoryOption("Research Scientist (AI/ML)", subcategorySelect);
                            addSubcategoryOption("Decision Scientist", subcategorySelect);
                            addSubcategoryOption("Marketing Analyst", subcategorySelect);
                            addSubcategoryOption("Operations Research Analyst", subcategorySelect);
                            addSubcategoryOption("Data Visualization Specialist", subcategorySelect);
                            addSubcategoryOption("Customer Insights Analyst", subcategorySelect);
                            addSubcategoryOption("Fraud Analyst", subcategorySelect);

                          } else if (category === "databaseadmin") {
                            addSubcategoryOption("Database  (DBA)", subcategorySelect);
                            addSubcategoryOption("Senior  Administrator", subcategorySelect);
                            addSubcategoryOption("Database Engineer", subcategorySelect);
                            addSubcategoryOption("Database Architect", subcategorySelect);
                            addSubcategoryOption("Database Analyst", subcategorySelect);
                            addSubcategoryOption("Data Warehouse ", subcategorySelect);
                            addSubcategoryOption("SQL Server", subcategorySelect);
                            addSubcategoryOption("Oracle Database Administrator", subcategorySelect);
                            addSubcategoryOption("MySQL Database Administrator", subcategorySelect);
                            addSubcategoryOption("PostgreSQL Database Administrator", subcategorySelect);
                            addSubcategoryOption("MongoDB Administrator", subcategorySelect);
                            addSubcategoryOption("NoSQL Database Administrator", subcategorySelect);
                            addSubcategoryOption("DBMS Administrator (Database Management System)", subcategorySelect);
                            addSubcategoryOption("Database Operations Manager", subcategorySelect);
                            addSubcategoryOption("Database Performance Tuning Specialist", subcategorySelect);
                            addSubcategoryOption("Data Migration Specialist", subcategorySelect);
                            addSubcategoryOption("Database Security Administrator", subcategorySelect);
                            addSubcategoryOption("Database Backup and Recovery Specialist", subcategorySelect);
                            addSubcategoryOption("Cloud Database Administrator (e.g., AWS, Azure, Google Cloud)", subcategorySelect);
                            addSubcategoryOption("Database Compliance Officer", subcategorySelect);
                            addSubcategoryOption("Database DevOps Engineer", subcategorySelect);
                            addSubcategoryOption("Database Automation Engineer", subcategorySelect);
                            addSubcategoryOption("Database Replication Specialist", subcategorySelect);
                            addSubcategoryOption("Data Governance Manager", subcategorySelect);
                            addSubcategoryOption("Data Steward", subcategorySelect);
                            // addSubcategoryOption("", subcategorySelect);
                            // addSubcategoryOption("", subcategorySelect);
                          } else if (category === "teacher") {
                            addSubcategoryOption("Tamil", subcategorySelect);
                            addSubcategoryOption("Mathematics ", subcategorySelect);
                            addSubcategoryOption("Math Instructor", subcategorySelect);
                            addSubcategoryOption("Algebra ", subcategorySelect);
                            addSubcategoryOption("Geometry ", subcategorySelect);
                            addSubcategoryOption("Calculus ", subcategorySelect);
                            addSubcategoryOption("Statistics ", subcategorySelect);
                            addSubcategoryOption("Math Tutor", subcategorySelect);
                            addSubcategoryOption("Math Coach", subcategorySelect);
                            addSubcategoryOption("Math Curriculum Specialist", subcategorySelect);
                            addSubcategoryOption("Math Department Chair", subcategorySelect);
                            addSubcategoryOption("English ", subcategorySelect);
                            addSubcategoryOption("Language Arts ", subcategorySelect);
                            addSubcategoryOption("Literature ", subcategorySelect);
                            addSubcategoryOption("Writing Instructor", subcategorySelect);
                            addSubcategoryOption("Creative Writing ", subcategorySelect);
                            addSubcategoryOption("English as a Second Language (ESL) ", subcategorySelect);
                            addSubcategoryOption("Reading Specialist", subcategorySelect);
                            addSubcategoryOption("English Tutor", subcategorySelect);
                            addSubcategoryOption("English Department Chair", subcategorySelect);
                            addSubcategoryOption("Science ", subcategorySelect);
                            addSubcategoryOption("Biology ", subcategorySelect);
                            addSubcategoryOption("Chemistry ", subcategorySelect);
                            addSubcategoryOption("Physics ", subcategorySelect);
                            addSubcategoryOption("Environmental Science ", subcategorySelect);
                            addSubcategoryOption("Earth Science ", subcategorySelect);
                            addSubcategoryOption("Anatomy and Physiology ", subcategorySelect);
                            addSubcategoryOption("Science Lab Instructor", subcategorySelect);
                            addSubcategoryOption("Science Curriculum Specialist", subcategorySelect);
                            addSubcategoryOption("Social Studies ", subcategorySelect);
                            addSubcategoryOption("History ", subcategorySelect);
                            addSubcategoryOption("Geography ", subcategorySelect);
                            addSubcategoryOption("Civics ", subcategorySelect);
                            addSubcategoryOption("Government ", subcategorySelect);
                            addSubcategoryOption("Economics ", subcategorySelect);
                            addSubcategoryOption("World History ", subcategorySelect);
                            addSubcategoryOption("Social Studies Department Chair", subcategorySelect);
                            addSubcategoryOption("Foreign Language ", subcategorySelect);
                            addSubcategoryOption("Language Instructor", subcategorySelect);
                            addSubcategoryOption("Spanish ", subcategorySelect);
                            addSubcategoryOption("French ", subcategorySelect);
                            addSubcategoryOption("German ", subcategorySelect);
                            addSubcategoryOption("Chinese ", subcategorySelect);
                            addSubcategoryOption("Language Lab Coordinator", subcategorySelect);
                            addSubcategoryOption("Physical Education ", subcategorySelect);
                            addSubcategoryOption("PE Instructor", subcategorySelect);
                            addSubcategoryOption("Fitness Coach", subcategorySelect);
                            addSubcategoryOption("Health Education ", subcategorySelect);
                            addSubcategoryOption("Sports Coach", subcategorySelect);
                            addSubcategoryOption("Physical Education Department Chair", subcategorySelect);
                            addSubcategoryOption("Art ", subcategorySelect);
                            addSubcategoryOption("Music ", subcategorySelect);
                            addSubcategoryOption("Drama ", subcategorySelect);
                            addSubcategoryOption("Visual Arts ", subcategorySelect);
                            addSubcategoryOption("Choir Director", subcategorySelect);
                            addSubcategoryOption("Band ", subcategorySelect);
                            addSubcategoryOption("Art History ", subcategorySelect);
                            addSubcategoryOption("Special Education ", subcategorySelect);
                            addSubcategoryOption("Learning Support ", subcategorySelect);
                            addSubcategoryOption("Resource ", subcategorySelect);
                            addSubcategoryOption("Inclusion ", subcategorySelect);
                            addSubcategoryOption("Autism Specialist", subcategorySelect);
                            addSubcategoryOption("Behavioral Interventionist", subcategorySelect);
                            addSubcategoryOption("Vocational Teacher", subcategorySelect);
                            addSubcategoryOption("Career and Technical Education (CTE) Instructor", subcategorySelect);
                            addSubcategoryOption("Culinary Arts Instructor", subcategorySelect);
                            addSubcategoryOption("Automotive Technology ", subcategorySelect);
                            addSubcategoryOption("Computer Science ", subcategorySelect);
                            addSubcategoryOption("Digital Media Instructor", subcategorySelect);

                          } else if (category === "professor") {
                            addSubcategoryOption("University ", subcategorySelect);
                            addSubcategoryOption("Assistant ", subcategorySelect);
                            addSubcategoryOption("Associate ", subcategorySelect);
                            addSubcategoryOption("Full ", subcategorySelect);
                            addSubcategoryOption("Distinguished ", subcategorySelect);
                            addSubcategoryOption("Adjunct ", subcategorySelect);
                            addSubcategoryOption("Visiting ", subcategorySelect);
                            addSubcategoryOption("Research ", subcategorySelect);
                            addSubcategoryOption("Clinical ", subcategorySelect);
                            addSubcategoryOption("Philosophy", subcategorySelect);
                            addSubcategoryOption("Professor of History", subcategorySelect);
                            addSubcategoryOption("English", subcategorySelect);
                            addSubcategoryOption("Psychology", subcategorySelect);
                            addSubcategoryOption("Sociology", subcategorySelect);
                            addSubcategoryOption("Political Science", subcategorySelect);
                            addSubcategoryOption("Anthropology", subcategorySelect);
                            addSubcategoryOption("Linguistics", subcategorySelect);
                            addSubcategoryOption("Biology", subcategorySelect);
                            addSubcategoryOption("Chemistry", subcategorySelect);
                            addSubcategoryOption("Physics", subcategorySelect);
                            addSubcategoryOption("Mathematics", subcategorySelect);
                            addSubcategoryOption("Geology", subcategorySelect);
                            addSubcategoryOption("Astronomy", subcategorySelect);
                            addSubcategoryOption(" Environmental Science", subcategorySelect);
                            addSubcategoryOption("Computer Science", subcategorySelect);
                            addSubcategoryOption("Electrical Engineering", subcategorySelect);
                            addSubcategoryOption("Mechanical Engineering", subcategorySelect);
                            addSubcategoryOption("Civil Engineering", subcategorySelect);
                            addSubcategoryOption("Chemical Engineering", subcategorySelect);
                            addSubcategoryOption("Information Technology", subcategorySelect);
                            addSubcategoryOption("Business Administration", subcategorySelect);
                            addSubcategoryOption("Economics", subcategorySelect);
                            addSubcategoryOption("Finance", subcategorySelect);
                            addSubcategoryOption("Marketing", subcategorySelect);
                            addSubcategoryOption("Management", subcategorySelect);
                            addSubcategoryOption("Accounting", subcategorySelect);
                            addSubcategoryOption("Fine Arts", subcategorySelect);
                            addSubcategoryOption("Music", subcategorySelect);
                            addSubcategoryOption("Visual Arts", subcategorySelect);
                            addSubcategoryOption("Theater", subcategorySelect);
                            addSubcategoryOption("Dance", subcategorySelect);
                            addSubcategoryOption("Film Studies", subcategorySelect);
                            addSubcategoryOption("Educational Psychology", subcategorySelect);
                            addSubcategoryOption("Medicine", subcategorySelect);
                            addSubcategoryOption("Nursing", subcategorySelect);
                            addSubcategoryOption("Public Health", subcategorySelect);
                            addSubcategoryOption("Pharmacy", subcategorySelect);
                            addSubcategoryOption("Dentistry", subcategorySelect);
                            addSubcategoryOption("Law", subcategorySelect);
                            addSubcategoryOption("Constitutional Law", subcategorySelect);
                            addSubcategoryOption("Criminal Law", subcategorySelect);
                            addSubcategoryOption("International Law", subcategorySelect);
                            addSubcategoryOption("Environmental Law", subcategorySelect);
                            addSubcategoryOption("Social Work", subcategorySelect);
                            addSubcategoryOption("Social Welfare", subcategorySelect);
                            addSubcategoryOption("Clinical Social Work", subcategorySelect);
                            addSubcategoryOption("Library Science", subcategorySelect);
                            addSubcategoryOption("Information Studies", subcategorySelect);

                          } else {
                            // Handle other categories here
                            addSubcategoryOption("Other Subcategory", subcategorySelect);
                          }
                        }


                        function validateForm() {
                          var category = document.getElementById("category").value;
                          var subcategory = document.getElementById("subcategory").value;
                          var preferredLocation = document.getElementById("preferred-location").value;
                          var jobtype = document.getElementById("jobtype").value;
                          var experience = document.getElementById("experience").value;
                          var description = document.getElementById("description").value;

                          if (category === "") {
                            alert("Please select a category.");
                            return false;
                          }

                          if (subcategory === "" && category !== "") {
                            alert("Please select a subcategory.");
                            return false;
                          }
                          if (preferredLocation.trim() === "") {
                            alert("Please provide a preferred location.");
                            return false;
                          }

                          if (experience.trim() === "") {
                            alert("Please provide your experience.");
                            return false;
                          }

                          if (jobtype.trim() === "") {
                            alert("Please select your job type.");
                            return false;
                          }


                          if (description.trim() === "") {
                            alert("Please provide a description.");
                            return false;
                          }

                          return true;
                        }
                        // Function to update the subcategories based on the selected category

                        // Helper function to add a subcategory option to the select element
                        function addSubcategoryOption(value, selectElement) {
                          var option = document.createElement("option");
                          option.value = value.toLowerCase();
                          option.text = value;
                          selectElement.appendChild(option);
                        }
                      </script>
                    <?php
                    } elseif ($method == 'skillTable') {
                    ?>

                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <br>
                      <div class="">
                        <h2 class="text-center">Skills</h2>
                        <a id="regis" href="<?php echo baseUrl . "seekerController/addSkillForm" ?>">+ Add Skills Details</a>

                        <div class="clearfix"></div>
                        <br>

                        <div class="table-responsive">

                          <thead>
                            <table class="table table-bordered table-striped">

                              <tr>
                                <th>ID</th>
                                <th>Skill</th>
                                <th>Experience</th>
                                <th>Skill Level</th>
                                <th>Action</th>
                              </tr>
                          </thead>

                    <tbody>
                      <?php
                      if (isset($skillTable[0]['id'])) {
                        foreach ($skillTable as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];
                      ?>


                          <tr>

                            <td><?php echo $value['id'] ?></td>
                            <td><?php echo $value['skill'] ?></td>
                            <td><?php echo $value['experience'] ?></td>
                            <td><?php echo $value['skill_level'] ?></td>

                            <td>
                              <div class="btn-group" role="group">
                                <a id="regis" href="<?php echo baseUrl . "seekerController/updateSkill" ?>/<?php echo $value['id'] ?>">Update</a>
                                <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteSkill" ?>/<?php echo $value['id'] ?>">delete</a>
                              </div>
                            </td>
                          </tr>
                      <?php
                        }
                      }
                    } elseif ($method == 'addSkillForm') {
                      ?>


                      <div class="container">

                        <h3>Skill Form</h3>
                        <form id="skillForm" method="post" action="<?php echo baseUrl . "seekerController/insertSkillForm" ?>">


                          <div class="skill-entry">
                            <div class="form-row">
                              <div class="col-md-4 mb-3">
                                <br><label for="skillName">Skill Name</label>
                                <input type="text" class="form-control" id="skillname" name="skillname" required>
                              </div>
                              <div class="col-md-4 mb-3">
                                <br><label for="experience">Experience</label>
                                <select class="form-control" name="experience" id="experience" required><br>
                                  <option value="fresher">Fresher</option>
                                  <option value="0-2">0-2 years</option>
                                  <option value="2-5">2-5 years</option>
                                  <option value="5-10">5-10 years</option>
                                  <option value="10-20">10-20 years</option>
                                  <option value="20-above">20 years above</option>
                                </select>
                              </div>
                              <div class="col-md-4 mb-3">
                                <br><label for="skillLevel">Skill Level</label>
                                <select class="form-control" name="skilllevel" id="skilllevel" required>
                                  <option value="beginner">Beginner</option>
                                  <option value="intermediate">Intermediate</option>
                                  <option value="advanced">Advanced</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <!-- <br><button class="btn" type="button" id="addSkillBtn">Add Skill</button> -->
                          <button class="btn" id="addskillsubmit" type="submit">Submit</button>

                        </form>

                        <ul id="addedSkills"></ul>
                      </div>

                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                      <script>
                        $(document).ready(function() {
                          $("#addSkillBtn").click(function() {
                            const clonedField = $(".skill-entry").first().clone();
                            $("#skillForm").append(clonedField);
                          });

                          $("#skillForm").submit(function() {
                            const skillDetails = [];

                            // $(".skill-entry").each(function() {
                            //   const skillName = $(this).find('input[name="skillname[]"]').val();
                            //   const experience = $(this).find('select[name="experience[]"]').val();
                            //   const skillLevel = $(this).find('select[name="skilllevel[]"]').val();
                            //   skillDetails.push(`${skillName} - Experience: ${experience}, Skill Level: ${skillLevel}`);
                            // });

                            $("#addedSkills").empty();
                            skillDetails.forEach(skill => {
                              $("#addedSkills").append(`<li>${skill}</li>`);
                            });
                          });
                        });
                      </script>

                    <?php
                    } else if ($method == 'insertBasicdetails') {
                    ?>


                      <div class="container" id="page1">
                        <h3>Personal Details</h3>

                        <form name="applicationform" enctype="multipart/form-data" method="post" onsubmit="return validateFormPage()" action='<?php echo baseUrl . "seekerController/updateBasicDetails" ?>'>


                          <div class="form-group">
                            <label for="Name">Name *</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                            <div id="Name_error" class="error"></div>

                          </div>
                          <div class="form-group">
                            <label for="emailid">Email *</label><br>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            <div id="emailid_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="phonenumber">Phone Number *</label>
                            <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your phonenumber" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>" required>
                            <div id="phonenumber_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="dob">Date of Birth *</label>
                            <input type="date" class="form-control" id="dateofbirth" name="dateofbirth" required>
                            <div id="dob_error" class="error"></div>
                          </div>
                          <div class="form-group">
                            <label for="gender">Gender *</label>
                            <select class="form-control" id="gender" name="gender" required>
                              <option value="">Select your Gender</option>
                              <option value="male">male</option>
                              <option value="female">female</option>
                              <option value="others">others</option>
                            </select>
                            <div id="gender_error" class="error"></div>
                          </div>
                          <h4> Address : </h3>
                            <div class="form-group">
                              <label for="Door no">Door no/building name </label>
                              <input type="text" class="form-control" id="doorno" name="doorno">
                              <div id="doorno_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="street address">Street address </label>
                              <input type="text" class="form-control" id="streetaddress" name="streetaddress">
                              <div id="streetaddress_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="landmark">Landmark </label>
                              <input type="text" class="form-control" id="landmark" name="landmark">
                              <div id="landmark_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="pincode">Pin Code</label>
                              <input type="text" class="form-control" id="pincode" name="pincode">
                              <div id="pincode_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="district">District *</label>
                              <input type="text" class="form-control" id="district" name="district" value="Erode" disabled>
                              <div id="district_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="maritalstatus">Marital Status*</label>
                              <select class="form-control" id="maritalstatus" name="maritalstatus">
                                <option value="">Select your marital status</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                              </select>
                              <div id="maritalstatus_error" class="error"></div>
                            </div>
                            <h4>Identification Details</h4>
                            <div class="form-group">
                              <label for="aadharfrontphoto">Aadhar front photo </label>
                              <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto">
                              <div id="aadharfrontphoto_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="aadharbackphoto">Aadhar back Photo</label>
                              <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto">
                              <div id="aadharbackphoto_error" class="error"></div>
                            </div>
                            <div class="form-group">
                              <label for="photo">Photo</label>
                              <input type="file" class="form-control" id="photo" name="photo">
                              <div id="photo_error" class="error"></div>
                            </div>
                            <button type="submit" name="submitBtn" class="btn btn-primary">submit</button>
                        </form>


                      </div>

                      <script>
                        function validateFormPage() {

                          var Name = document.getElementById('name').value;
                          var email = document.getElementById('email').value;
                          var phoneNumber = document.getElementById('phonenumber').value;
                          var dob = document.getElementById('dob').value;
                          var gender = document.getElementById('gender').value;
                          var doorno = document.getElementById('doorno').value;
                          var streetaddress = document.getElementById('streetaddress').value;
                          var landmark = document.getElementById('landmark').value;
                          var pincode = document.getElementById('pincode').value;
                          var maritalstatus = document.getElementById('maritalstatus').value;
                          var aadharFrontPhoto = document.getElementById('aadharfrontphoto').value;
                          var aadharBackPhoto = document.getElementById('aadharbackphoto').value;
                          var photo = document.getElementById('photo').value;
                          var nameRegex = /^[A-Za-z\s]/;
                          clearErrorMessages();

                          if (Name.trim() === '') {
                            displayError('Name is required.', 'Name_error');
                            return false;
                          } else if (!nameRegex.test(Name)) {
                            displayError('Please enter a valid name.', 'Name_error');
                            return false;
                          }

                          if (email.trim() === '') {
                            displayError('Email is required.', 'emailid_error');
                            return false;
                          } else if (!validateEmail(email)) {
                            displayError('Please enter a valid email address.', 'emailid_error');
                            return false;
                          }

                          if (phoneNumber.trim() === '') {
                            displayError('Phone Number is required.', 'phonenumber_error');
                            return false;
                          } else if (!validatePhoneNumber(phoneNumber)) {
                            displayError('Please enter a valid phone number.', 'phonenumber_error');
                            return false;
                          }

                          if (dob.trim() === '') {
                            displayError('Date of Birth is required.', 'dob_error');
                            return false;
                          }
                          if (gender.trim() === '') {
                            displayError('Gender is required.', 'gender_error');
                            return false;
                          }

                          if (doorno.trim() === '') {
                            displayError('First line is required.', 'firstline_error');
                            return false;
                          }

                          if (streetaddress.trim() === '') {
                            displayError('Street address is required.', 'streetaddress_error');
                            return false;
                          }

                          if (landmark.trim() === '') {
                            displayError('City is required.', 'city_error');
                            return false;
                          }

                          if (pincode.trim() === '') {
                            displayError('Pin Code is required.', 'pincode_error');
                            return false;
                          }
                          if (maritalstatus.trim() === '') {
                            displayError('marital status is required.', 'maritalstatus_error');
                            return false;
                          }
                          if (aadharFrontPhoto.trim() === '') {
                            displayError('Aadhar front photo is required.', 'aadharfrontphoto_error');
                            return false;
                          }

                          if (aadharBackPhoto.trim() === '') {
                            displayError('Aadhar back photo is required.', 'aadharbackphoto_error');
                            return false;
                          }

                          if (photo.trim() === '') {
                            displayError('Photo is required.', 'photo_error');
                            return false;
                          }
                          return true;
                        }

                        function isValidDate(dateString) {
                          var currentDate = new Date();
                          var inputDate = new Date(dateString);
                          return inputDate <= currentDate;
                        }

                        function validateEmail(email) {
                          var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                          return regex.test(email);
                        }

                        function validatePhoneNumber(phoneNumber) {
                          var regex = /^\d{10}$/;
                          return regex.test(phoneNumber);
                        }


                        function clearErrorMessages() {
                          var errorElements = document.querySelectorAll('.error');
                          errorElements.forEach(function(errorElement) {
                            errorElement.textContent = '';
                          });
                        }

                        function displayError(errorMessage, errorElementId) {
                          var errorElement = document.getElementById(errorElementId);
                          errorElement.textContent = errorMessage;
                        }

                        function resetForm() {
                          document.getElementById('application_form').reset();
                          clearErrorMessages();
                          document.getElementById('successMessage').textContent = '';
                          document.getElementById('submitBtn').disabled = false;
                        }
                      </script>
                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    <?php } ?>


                  </div>

                </div>
      </main>

</body>

</html>