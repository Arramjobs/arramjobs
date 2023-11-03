<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Google Fonts -->

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
    }

    /* To hide arrows in number field */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    #skillForm {
      margin-bottom: -30px;
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

    .container {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 40%;
    }

    /* All page heading */
    h3 {
      text-align: center;
      margin-bottom: 30px;
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
      width: 100%;
    }

    .btn-primary {
      background-color: #F8802A;
      border: none;
    }

    .btn-primary:hover {
      /* background-color: #2d76d9; */
      background-color: navy;
    }

    .form-control[type="file"] {
      border: none;
      color: #4285f4;
      /* background-color: transparent; */
      /* cursor: pointer; */
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

    .main {
      margin-top: 70px;
      padding: 20px;
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

    #deletes {
      display: inline-block;
      padding: 8px 16px;
      margin-left: 5px;
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


    /* Sidebar */
    .sidebar {
      width: 250px;
      height: 100vh;
      position: fixed;
      z-index: 1000;
      padding: 20px 0;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      background-image: linear-gradient(62deg, #ff681d 0%, #ffad57 100%);
      margin-top: -100px;
    }

    @media screen and (max-width:768px) {
      .sidebar {
        width: 30%;
      }
    }

    .nav-link {
      /* sidebar css */
      display: block;
      color: #0d1d46;
      font-weight: bold;
      text-decoration: none;
      padding: 0px 20px;
    }

    .nav-item h4 {
      margin: 0;
      padding: 10px 10px;
      color: #7b3503;
      font-weight: 700;
    }

    @media screen and (max-width:768px) {
      .seekerdashboard {
        padding-left: 30%;
      }
    }

    .seekerdashboardcontent  {
      text-align: justify;
      text-indent: 50px;
      letter-spacing: 0.5px;
    }

    @media screen and (max-width:768px) {
      .seekerdashboardcontent ,  .notecontent {
        margin-left: 30%;
      }
    }

    /* 1 basic detail css    2 1 education form css  3 1 Experience form css   5 1 Area form css  Resume css */
    .basicdetailcss,
    .eduformcss,
    .expdetailcss,
    .areaformcss,
    .uploadresumecss,
    .expdetailsform {
      width: 400px;
    }

    /* 2 Education Details table   3 Experience Details table css  5 Area of interest table css*/
    .edutablecss,
    .exptablecss,
    .areatablecss {
      width: 80%;
      margin-left: 10%;
    }

    @media screen and (max-width:768px) {

      .basicdetailcss,
      .eduformcss,
      .expdetailcss,
      .areaformcss,
      .uploadresumecss,
      .expdetailsform {
        width: 55%;
        margin-left: 40%;
      }

      .edutablecss,
      .exptablecss,
      .areatablecss {
        width: 55%;
        margin-left: 40%;
      }
    }

    /* sidebar active */
    /* .active { 
          background-color: yellow;
        } */

/* Display uploaded file */
      .uploadedfile{
            display: flex;
        }

      .filelink{
        text-decoration: none;
        margin-top: 10px;
      }

      .cer10upload , .cer12upload  , .cerdipupload ,  .cerugupload ,  .cerpgupload ,  .cerdocupload{
            display: none;
        }

        #file-input-label ,  #file-input-label12 ,  #file-input-labeldip ,  #file-input-labelug ,  #file-input-labelpg ,  #file-input-labeldoc ,  #file-input-labelaf ,   #file-input-labelab  ,   #file-input-labelpp {
            font-weight: 200;
            border: 1px solid #ccc;
            border-radius: 2px;
            padding: 6px 12px;
            margin-right: 10px;
        }


 /*Progress bar*/
        .pdiv{
          width: 100%;
          background-color: #f2f7f7;
          top: 112px;
          z-index: 1;
        }
        .pbar{
          display: flex;
          justify-content: space-between;
          width: 800px;
          height: 100px;
          margin-left: 450px;
          background-color:#f2f7f7;
          padding-top: 20px;
        }

        .round{
          width: 30px;
          height: 30px;
          border-radius: 50%;
          border: 1.5px solid black;
          background-color:white;
          text-align: center;
          line-height: 30px;
          margin-left: 10px;
        }

  </style>
</head>

<body>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

  <nav class="navcss navbar navbar-expand-lg sticky-top" style="background-color: navy; padding-top: 40px; padding-bottom: 40px;">
    <div class="container-fluid">
      <h5 class="tamilcss mx-sm-4" style="color:white;">அறம் வேலைவாய்ப்பு</h5>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="material-symbols-outlined text-light px-sm-4">menu</span>
      </button>
      <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="<?php echo baseUrl . "#about" ?>">About Us</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="#how-it-works">How It Works</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="<?php echo baseUrl . "#provider" ?>">Employer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="<?php echo baseUrl . "#seeker" ?>">Employee</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="<?php echo baseUrl . "#contact" ?>">Contact</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" href="https://arramjobs.in/blog">Blog</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link mx-4 pt-lg-0 pt-3" style="background-color:white;color:grey;padding: 0 10px;border-radius:2px" onclick="return confirm('Are you sure to logout?')" href="<?php echo baseUrl . "seekerController/logout" ?>">LogOut</a>
          </li>
        </ul>
      </div>
  </nav>

<div class="pdiv sticky-top" >
      <div class="pbar" >
        <div> <p class="round" id="round1">1</p>
        <p>Details</p></div>

        <div><p  class="round " id="round2" >2</p>
        <p>Education</p></div>

        <div><p class="round" id="round3">3</p>
        <p>Experience</p></div>

        <div><p class="round" id="round4">4</p>
        <p>Interest</p></div>

        <div><p class="round" id="round5">5</p>
        <p>Resume</p></div>
      </div>
      </div>


  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <nav class="col-md-3 col-lg-2 d-md-block sidebar">
        <div class="position-sticky">

          <ul class="nav flex-column">

            <li class="nav-item ">
              <h4 class="ms-1 mb-3">Create Profile</h4>
              <a class="nav-link btna active" href="<?php echo baseUrl . "seekerController/dash" ?>">
                Employee Dashboard
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link btna" href="<?php echo baseUrl . "seekerController/basicDetails" ?>">
                Basic Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link btna" href="<?php echo baseUrl . "seekerController/educationTable" ?>">
                Education Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link btna" href="<?php echo baseUrl . "seekerController/experienceTable" ?>">
                Experience Details
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link btna" href="<?php echo baseUrl . "seekerController/areaOfIntrestTable" ?>">
                Area of Job Interest
              </a>
            </li><br>
            <li class="nav-item">
              <a class="nav-link btna" href="<?php echo baseUrl . "seekerController/resume" ?>">
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
                <div class="form-step form-step-active">
                  <h1 class="seekerdashboard my-5" style="text-align:center;color:navy" id="w">
                    Welcome To Job Employee Dashboard </h1>
                  <p class="seekerdashboardcontent my-5 mx-md-5 px-5">At Arram Job Portal, our unwavering commitment is to empower individuals to realize their utmost potential. Regardless of where you stand in your career journey—whether you're
                    a recent graduate venturing into the professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in between—we are your steadfast companion in the job search expedition. With our comprehensive platform, you gain
                    access to a wealth of opportunities, career resources, and expert guidance to navigate the ever-evolving job market. We prioritize your aspirations, offering support and solutions tailored to your unique needs.</p>
                 
                   <div class=" notecontent mx-md-5 px-5" style="text-align: justify;">
                    <p ><b>Note : </b>The following documents are required :</p>
                 <ul>
                        <li>Aadhaar card [front and back page]</li>
                        <li>Profile photo</li>
                        <li>Educational certificates [10th, 12th, Degree]</li>
                        <li>Resume</li>
                      </ul> 
                      </div>
                  <a id="regis" style="margin-left:40%;" class="btn-next" href="<?php echo baseUrl . "seekerController/basicdetails" ?>">Create Profile</a>
                </div>
              <?php
        } elseif ($method == 'basicdetails') {
          ?>

                <!-- 1 Basic details ******************************************************************************************************************************************************************************************* -->


                <div class="basicdetailcss container mt-5 mx-md-auto form-step " id="page1">
                  <h3>Basic Details</h3>

                  <form name="applicationform" enctype="multipart/form-data" method="post" onsubmit="return group()" action='<?php echo baseUrl . "seekerController/updateBasicDetails" ?>'>
                    <?php
                    foreach ($basicDetails as $key => $value) {
                      ?>
                            <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                            <div class="form-group">
                              <label for="Name">Name *</label>
                              <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name">
                              <div id="Name_error" class="text-danger"></div>
                            </div>

                            <div class="form-group">
                              <label for="emailid">Email *</label><br>
                              <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email" placeholder="Enter your email">
                              <div id="emailid_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="phonenumber">Mobile Number *</label>
                              <input type="tel" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>" name="phonenumber" placeholder="Enter your number" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>">
                              <div id="phonenumber_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="dob">Date of Birth *</label>
                              <input type="date" class="form-control" id="dateofbirth" value="<?php echo $value['dateofbirth']; ?>" name="dateofbirth">
                              <div id="dob_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="age">Age *</label>
                              <input type="number" class="form-control" id="age" value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" name="age" placeholder="Enter age">
                              <div id="age_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="gender">Gender *</label>
                              <select class="form-control" id="gender" name="gender">
                                <option value="">Select your Gender</option>
                                <option value="male" <?php if (isset($value['gender']) && $value['gender'] === 'male')
                                  echo 'selected'; ?>>Male</option>
                                <option value="female" <?php if (isset($value['gender']) && $value['gender'] === 'female')
                                  echo 'selected'; ?>>Female</option>
                                <option value="others" <?php if (isset($value['gender']) && $value['gender'] === 'others')
                                  echo 'selected'; ?>>Others</option>
                              </select>
                              <div id="gender_error" class="text-danger"></div>
                            </div>

                            <h4 class="py-3" style="color:navy"> Address : </h4>

                            <div class="form-group">
                              <label for="Door no">Door no / Building Name *</label>
                              <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno" placeholder="Enter door no / building name">
                              <div id="doorno_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="street address">Street Address *</label>
                              <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress" placeholder="Enter street address">
                              <div id="streetaddress_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="landmark">Landmark *</label>
                              <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark" placeholder="Enter landmark">
                              <div id="landmark_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="pincode">Pincode *</label>
                              <input type="number" class="form-control" id="pincode" value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode" placeholder="Enter pincode">
                              <div id="pincode_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="district">District *</label>
                              <input type="text" class="form-control" id="district" value="Erode" name="district" readonly>
                              <div id="district_error" class="text-danger"></div>
                            </div>
                            <div class="form-group">
                              <label for="maritalstatus">Marital Status *</label>

                              <select class="form-control" id="maritalstatus" value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>" name="maritalstatus">
                                <option value="">Select your Marital Status</option>

                                <option value="single" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'single')
                                  echo 'selected'; ?>>Single</option>
                                <option value="married" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'married')
                                  echo 'selected'; ?>>Married</option>
                                <option value="widow" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'widow')
                                  echo 'selected'; ?>>Widow</option>
                              </select>
                              <div id="maritalstatus_error" class="text-danger"></div>
                            </div>

                            <h4 class="py-3" style="color:navy">Identification Details :</h4>

                            <div class="form-group" >
                              <label for="aadharfrontphoto">Aadhaar Front Photo *</label>
                             <input type="text" class="form-control"  name="oldaadharfront" value="<?php echo $value['aadharfront_filename']; ?>" hidden>
                             <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                             <div class="uploadedfile">
                             <label id="file-input-labelaf" for="aadharfrontphoto">Choose File</label>  
                             <a href="<?php echo $value['aadhar_front']; ?>" class="filelink" target="blank" id="existfileaf" ><?php echo $value['aadharfront_filename']; ?></a>
                             </div>
                             <div id="aadharfrontphoto_error" class="text-danger"></div>
                            </div>

                       
                            <div class="form-group">
                              <label for="aadharbackphoto">Aadhaar Back Photo *</label>
                              <input type="text" class="form-control"  name="oldaadharback" value="<?php echo $value['aadharback_filename']; ?>" hidden>
                              <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                              <div class="uploadedfile">
                             <label id="file-input-labelab" for="aadharbackphoto">Choose File</label>  
                             <a href="<?php echo $value['aadhar_back']; ?>" class="filelink" target="blank" id="existfileab" ><?php echo $value['aadharback_filename']; ?></a>
                             </div>
                              <div id="aadharbackphoto_error" class="text-danger"></div>
                            </div>
                        
                            <div class="form-group">
                              <label for="photo">Photo *</label>
                              <input type="text" class="form-control"  name="oldprofilephoto" value="<?php echo $value['photo_filename']; ?>" hidden>
                              <input type="file" class="form-control" id="photo" name="photo" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                              <div class="uploadedfile">
                             <label id="file-input-labelpp" for="photo">Choose File</label>  
                             <a href="<?php echo $value['photo']; ?>" class="filelink" target="blank" id="existfilepp" ><?php echo $value['photo_filename']; ?></a>
                             </div>
                              <div id="photo_error" class="text-danger"></div>
                            </div>

                            <input type="number" class="form-control"  value="1" name="bdsubmit" hidden>

                            <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF Maximum size: 1024KB</p>

                            <button type="submit" name="submitBtn" class="btn btn-primary btn-next" id="bdsubmitbtn">Submit</button>
                        </form>

                        <?php
                        if ($value['bdsubmited'] == '1') {
                          ?>
                                       <script>
                                        let bds= "data";
                                        document.getElementById("existfileaf").style.display= "block";
                                        document.getElementById("existfileab").style.display= "block";
                                        document.getElementById("existfilepp").style.display= "block";
                                      </script>
                        <?php
                        } else {
                          ?>
                                      <script>
                                        document.getElementById("existfileaf").style.display= "none";
                                        document.getElementById("existfileab").style.display= "none";
                                        document.getElementById("existfilepp").style.display= "none";
                                      </script>
                        <?php
                        }
                    }
                    ?>
                </div>

                <script>

                  document.getElementById("file-input-labelaf").addEventListener("click", function() {
                              document.getElementById("existfileaf").style.display = "none";
                            });

                        const fileInputaf = document.getElementById("aadharfrontphoto");
                        const fileInputLabelaf = document.getElementById("file-input-labelaf");

                        fileInputaf.addEventListener("change", function () {
                            if (fileInputaf.files.length > 0) {
                            fileInputLabelaf.textContent = fileInputaf.files[0].name;
                            } else {
                            fileInputLabelaf.textContent = "Select a File";
                            }
                        });

                        document.getElementById("file-input-labelab").addEventListener("click", function() {
                              document.getElementById("existfileab").style.display = "none";
                            });

                        const fileInputab = document.getElementById("aadharbackphoto");
                        const fileInputLabelab = document.getElementById("file-input-labelab");

                        fileInputab.addEventListener("change", function () {
                            if (fileInputab.files.length > 0) {
                            fileInputLabelab.textContent = fileInputab.files[0].name;
                            } else {
                            fileInputLabelab.textContent = "Select a File";
                            }
                        });

                        document.getElementById("file-input-labelpp").addEventListener("click", function() {
                              document.getElementById("existfilepp").style.display = "none";
                            });

                        const fileInputpp = document.getElementById("photo");
                        const fileInputLabelpp = document.getElementById("file-input-labelpp");

                        fileInputpp.addEventListener("change", function () {
                            if (fileInputpp.files.length > 0) {
                            fileInputLabelpp.textContent = fileInputpp.files[0].name;
                            } else {
                            fileInputLabelpp.textContent = "Select a File";
                            }
                        });

                     

                  function group() {
                    var x = document.applicationform.name.value;
                    var y = document.applicationform.email.value;
                    var p = document.applicationform.phonenumber.value;
                    var d = document.applicationform.dateofbirth.value;
                    var ag = document.applicationform.age.value;
                    var g = document.applicationform.gender.value;
                    var b = document.applicationform.doorno.value;
                    var s = document.applicationform.streetaddress.value;
                    var l = document.applicationform.landmark.value;
                    var pin = document.applicationform.pincode.value;
                    var m = document.applicationform.maritalstatus.value;
                    var aa = document.applicationform.aadharfrontphoto.value;
                    var ab = document.applicationform.aadharbackphoto.value;
                    var photo = document.applicationform.photo.value;

                    //Age validation
                        var dob = new Date(d);
                        var age = parseInt(ag);
                        var currentDate = new Date();
                        var ageFromDateOfBirth = currentDate.getFullYear() - dob.getFullYear();
                          
                    if (x != "") {
                      if (x.length < 2) {
                        document.getElementById("Name_error").innerHTML = "Name should be in atleast 3 characters";
                        document.applicationform.name.focus();
                        // alert("Name should be in atleast 4 characters");
                        return false;
                      } else if (x.length > 50) {
                        document.getElementById("Name_error").innerHTML = "Name should not exceed 50 characters";
                        document.applicationform.name.focus();
                        // alert("Name should not exceed 50 characters");
                        return false;
                      } else {
                        document.getElementById("Name_error").innerHTML = "";
                      }

                    } else if (x == "") {
                      var namesms1 = "Name must be filled out";
                      // alert("* Name must be filled out");
                      document.getElementById("Name_error").innerHTML = namesms1;
                      document.applicationform.name.focus();
                      return false;
                    }

                    if (y == "") {
                      var emailsms = "Email must be filled out";
                      // alert("email must be filled out");
                      document.getElementById("emailid_error").innerHTML = emailsms;
                      document.applicationform.email.focus();
                      return false;
                    } else if (y != "") {
                      document.getElementById("emailid_error").innerHTML = "";
                      /* var strmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/ ;*/
                      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(y)) {
                        document.getElementById("emailid_error").innerHTML = "";
                        // return (true);
                      } else {
                        document.getElementById("emailid_error").innerHTML = "You have entered an invalid email address";
                        document.applicationform.email.focus();
                        // alert("you have entered an invalid email address");
                        return false;
                      }
                    }
                    if (p != "") {
                      if (p.length !== 10) {
                        document.getElementById("phonenumber_error").innerHTML = "Mobile number  must be in 10 digits";
                        document.applicationform.phonenumber.focus();
                        // alert("Phone number  must be in 10 digits")
                        return false;
                      } else if (p.length > 11) {
                        document.getElementById("phonenumber_error").innerHTML = "Mobile number should not exceed 10 digits";
                        document.applicationform.phonenumber.focus();
                        // alert("phone number should not exceed 10 digits");
                        return false;
                      } else {
                        document.getElementById("phonenumber_error").innerHTML = "";

                      }
                    } else if (p == "") {
                      var phsms = "Mobile number must be filled out";
                      document.getElementById("phonenumber_error").innerHTML = phsms;
                      document.applicationform.phonenumber.focus();
                      return false;
                    }

                    if (d == "") {
                      var namesms2 = "Date of birth must be filled out";
                      document.getElementById("dob_error").innerHTML = namesms2;
                      document.applicationform.dateofbirth.focus();
                      return false;
                    } else {
                      document.getElementById("dob_error").innerHTML = "";
                    }

                    if (ag == "") {
                      var namesms2 = "Age must be filled out";
                      document.getElementById("age_error").innerHTML = namesms2;
                      document.applicationform.age.focus();
                      return false;
                      } else if (ag!= '' && age !== ageFromDateOfBirth) {
                      document.getElementById("age_error").textContent = "Age does not match with Date of Birth and current date.";
                      document.applicationform.age.focus();
                      return false;
                      } else {
                      document.getElementById("age_error").innerHTML = "";
                    }

                    if (g == "") {
                      var namesms2 = "Gender must be filled out";
                      document.getElementById("gender_error").innerHTML = namesms2;
                      document.applicationform.gender.focus();
                      return false;
                    } else {
                      document.getElementById("gender_error").innerHTML = "";
                    }

                    if (b == "") {
                      var namesms2 = "Door no & Building name must be filled out";
                      document.getElementById("doorno_error").innerHTML = namesms2;
                      document.applicationform.doorno.focus();
                      return false;
                    } else {
                      document.getElementById("doorno_error").innerHTML = "";

                    }

                    if (s == "") {
                      var namesms2 = "Street Address must be filled out";
                      document.getElementById("streetaddress_error").innerHTML = namesms2;
                      document.applicationform.streetaddress.focus();
                      return false;
                    } else {
                      document.getElementById("streetaddress_error").innerHTML = "";

                    }


                    if (l == "") {
                      var namesms2 = "Landmark must be filled out";
                      document.getElementById("landmark_error").innerHTML = namesms2;
                      document.applicationform.landmark.focus();
                      return false;
                    } else {
                      document.getElementById("landmark_error").innerHTML = "";
                    }


                    if (pin != "") {
                      if (pin.length !== 6) {
                        document.getElementById("pincode_error").innerHTML = "Pincode  must be in 6 digits";
                        document.applicationform.pincode.focus();
                        return false;
                      } else if (pin.length > 6) {
                        document.getElementById("pincode_error").innerHTML = "Pincode should not exceed 6 digits";
                        document.applicationform.pincode.focus();
                        return false;
                      } else {
                        document.getElementById("pincode_error").innerHTML = "";

                      }
                    } else if (pin == "") {
                      var pincode = "Pincode must be filled out";
                      document.getElementById("pincode_error").innerHTML = pincode;
                      document.applicationform.pincode.focus();
                      return false;
                    }


                    if (m == "") {
                      var namesms2 = "Marital status must be filled out";
                      document.getElementById("maritalstatus_error").innerHTML = namesms2;
                      document.applicationform.maritalstatus.focus();
                      return false;
                    } else {
                      document.getElementById("maritalstatus_error").innerHTML = "";
                    }

                    if (aa == "" && document.getElementById('existfileaf').style.display == "none") {
                      var namesms2 = "Aadhaar Front Photo must be uploaded";
                      document.getElementById("aadharfrontphoto_error").innerHTML = namesms2;
                      document.applicationform.aadharfrontphoto.focus();
                      return false;
                    } else {
                      document.getElementById("aadharfrontphoto_error").innerHTML = "";
                    }

                    if (ab == "" && document.getElementById('existfileab').style.display == "none") {
                      var namesms2 = "Aadhaar Back Photo must be uploade";
                      document.getElementById("aadharbackphoto_error").innerHTML = namesms2;
                      document.applicationform.aadharbackphoto.focus();
                      return false;
                    } else {
                      document.getElementById("aadharbackphoto_error").innerHTML = "";
                    }

                    if (photo == "" && document.getElementById('existfilepp').style.display == "none") {
                      var namesms2 = "Photo must be uploaded";
                      document.getElementById("photo_error").innerHTML = namesms2;
                      document.applicationform.photo.focus();
                      return false;
                    } else {
                      document.getElementById("photo_error").innerHTML = "";
                    }

                  }

                </script>

                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


              <?php
        } elseif ($method == 'educationTable') {
          ?>
                <!-- 2 Education table ************************************************************************************************************************************************* -->
                <div class="container edutablecss mt-5">
                  <h3 class="text-center mx-auto" style="color:navy">Education Details</h3>
                  <a id="regis" href="<?php echo baseUrl . "seekerController/addEducationForm" ?>">+ Add Education</a>
                  <div style="float:right">
                    <a id="regis" href="<?php echo baseUrl . "seekerController/basicdetails" ?>">Previous</a>
                    <a id="regis" href="<?php echo baseUrl . "seekerController/experiencetable" ?>">Next</a>
                  </div>
                  <div class="clearfix"></div>
                  <br>
                  <div class="table-responsive">

                    <thead>
                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>ID</th>
                          <th>Educational Qualification</th>
                          <th>Department</th>
                          <th>Institution Name</th>
                          <th>Percentage</th>
                          <th>Year of Passing</th>
                          <th>Certificate</th>
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
                                        <?php
                                        if ($value['educational_qualification'] == 'sslc') {
                                          ?>
                           <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                          <?php
                                        } else if ($value['educational_qualification'] == 'hsc') {
                                          ?>
                               <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                             <?php
                                        } else if ($value['educational_qualification'] == 'diploma') {
                                          ?>
                                   <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank"><?php echo $value['diploma_cer'] ?></a></td>
                               <?php
                                        } else if ($value['educational_qualification'] == 'bachelors') {
                                          ?>
                                  <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                            <?php
                                        } else if ($value['educational_qualification'] == 'masters') {
                                          ?>
                                   <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                           <?php
                                        } else if ($value['educational_qualification'] == 'doctorate') {
                                          ?>
                                      <td><a href="<?php echo $value['doccer_url'] ?>" target="blank"><?php echo $value['doc_cer'] ?></a></td>
                             <?php
                                        } else {
                                          ?>
                                      <td>NA</a></td>
                            <?php
                                        }
                                        ?>
                                        <td>
                                          <div class="btn-group" role="group">
                                            <a id="regis" href="<?php echo baseUrl . "seekerController/updateEducation" ?>/<?php echo $value['id'] ?>">Edit</a>
                                            <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteEducation" ?>/<?php echo $value['id'] ?>">Delete</a>
                                          </div>
                                        </td>
                                      </tr>
                                  <?php
                        }
                      }
                      ?>


                    <?php
        } elseif ($method == 'addEducationForm') {
          ?>
                      <!-- 2 1 Education insert ***********************************************************************************************************-->

                      <div class="eduformcss container mt-5 mx-md-auto form-step " id="education">
                        <h3>Add Education Details</h3>
                         

                            <form name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/insertEducationForm" ?>">

                              <div class="form-group">
                                <label for="qualification">Educational Qualification</label>
                                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()">
                                  <option value="">Select Qualification</option>
                                  <option value="below_8th">Below 8th</option>
                                  <option value="sslc">SSLC</option>
                                  <option value="hsc">HSC</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="bachelors">Bachelors</option>
                                  <option value="masters">Masters</option>
                                  <option value="doctorate">Doctorate</option>
                                </select>
                                <div id="qualification_error" class="error"></div>
                              </div>

                              <!-- <div class="form-group" id="department-group" style="display: none;">
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
                        </div> -->

                              <div class="form-group" id="department-group" style="display: none;">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" id="department" name="department" placeholder="Enter department name">
                                <div id="department_error" class="error"></div>
                              </div>

                              <div class="form-group" id="school-group" style="display: none;">
                                <label for="school">Institution Name</label>
                                <input type="text" class="form-control" id="school" name="school" placeholder="Enter institution name">
                                <div id="school_error" class="error"></div>
                              </div>

                              <div class="form-group" id="percentage-group" style="display: none;">
                                <label for="percentage">Percentage</label>
                                <input type="text" class="form-control" id="percentage" id="school" name="percentage" placeholder="Enter percentage">
                                <div id="percentage_error" class="error"></div>
                              </div>

                              <div class="form-group" id="year-group" style="display: none;">
                                <label for="year_passed">Year of Passed Out</label>
                                <input type="number" class="form-control" id="year_passed" name="year_passed" placeholder="Enter year of passed out">
                                <div id="year_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_10th-group" style="display: none;">
                                <label for="certificate_10th">10th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_10th" name="certificate_10th" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_10th_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_12th-group" style="display: none;">
                                <label for="certificate_12th">12th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_12th" name="certificate_12th" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_12th_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_dip-group" style="display: none;">
                                <label for="certificate_dip">Diploma Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                                <div id="certificate_dip_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_ug-group" style="display: none;">
                                <label for="certificate_ug">UG Degree Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_ug_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_pg-group" style="display: none;">
                                <label for="certificate_pg">PG Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_pg_error" class="error"></div>
                              </div>

                              <div class="form-group" id="certificate_doctorate-group" style="display: none;">
                                <label for="certificate_doctorate">Doctorate Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_doctorate_error" class="error"></div>
                              </div>

                              <input type="number" class="form-control"  value="1" name="edusubmit" hidden>

                               <button type="submit" id="educationsubmit" class="btn btn-primary btn-next">Submit</button>

                          </form>
                        </div>

                        <script>
                          function toggleFields() {
                            var selectedQualification = document.getElementById('qualification').value;
                            var departmentGroup = document.getElementById('department-group');
                            var schoolGroup = document.getElementById('school-group');
                            var percentageGroup = document.getElementById('percentage-group');
                            var yearGroup = document.getElementById('year-group');
                            var certificate10thGroup = document.getElementById('certificate_10th-group');
                            var certificate12thGroup = document.getElementById('certificate_12th-group');
                            var certificatedipGroup = document.getElementById('certificate_dip-group');
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
                              certificatedipGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';
                              addButton.style.display = 'none';

                            } else {
                              schoolGroup.style.display = 'block';
                              percentageGroup.style.display = 'block';
                              certificate10thGroup.style.display = 'block';
                              certificate12thGroup.style.display = 'block';
                              certificatedipGroup.style.display = 'block';
                              certificateUgGroup.style.display = 'block';
                              certificatePgGroup.style.display = 'block';
                              certificatedcGroup.style.display = 'block';
                              yearGroup.style.display = 'block';

                            }

                            if (selectedQualification === 'sslc') {
                              departmentGroup.style.display = 'none';
                              certificate12thGroup.style.display = 'none';
                              certificatedipGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';
                           
                            } else if (selectedQualification === 'hsc') {
                              departmentGroup.style.display = 'none';
                              certificate10thGroup.style.display = 'none';
                              certificatedipGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';

                            } else if (selectedQualification === 'diploma') {
                              departmentGroup.style.display = 'block';
                              certificate10thGroup.style.display = 'none';
                              certificate12thGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';

                            } else if (selectedQualification === 'bachelors') {
                              departmentGroup.style.display = 'block';
                              certificate10thGroup.style.display = 'none';
                              certificate12thGroup.style.display = 'none';
                              certificatedipGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';

                            } else if (selectedQualification === 'masters') {
                              departmentGroup.style.display = 'block';
                              certificate10thGroup.style.display = 'none';
                              certificate12thGroup.style.display = 'none';
                              certificatedipGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatedcGroup.style.display = 'none';

                            } else if (selectedQualification === 'doctorate') {
                              departmentGroup.style.display = 'block';
                              certificate10thGroup.style.display = 'none';
                              certificate12thGroup.style.display = 'none';
                              certificatedipGroup.style.display = 'none';
                              certificateUgGroup.style.display = 'none';
                              certificatePgGroup.style.display = 'none';
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
                            var diploma =document.educationform.certificate_dip.value;
                            var ug = document.educationform.certificate_ug.value;
                            var pg = document.educationform.certificate_pg.value;
                            var dc = document.educationform.certificate_doctorate.value;

                            if (q == "") {
                              var namesms2 = "Qualification must be filled out";
                              document.getElementById("qualification_error").innerHTML = namesms2;
                              document.educationform.qualification.focus();
                              return false;
                            } else {
                              document.getElementById("qualification_error").innerHTML = "";
                            }


                            if (dep == "" && document.getElementById('department-group').style.display !== "none") {
                              var namesms2 = "Department must be filled out";
                              document.getElementById("department_error").innerHTML = namesms2;
                              document.educationform.department.focus();
                              return false;
                            } else {
                              document.getElementById("department_error").innerHTML = "";
                            }


                            if (scl == "" && document.getElementById('school-group').style.display != "none") {
                              var namesms2 = "School or college must be filled out";
                              document.getElementById("school_error").innerHTML = namesms2;
                              document.educationform.school.focus();
                              return false;
                            } else {
                              document.getElementById("school_error").innerHTML = "";
                            }


                            if (per == "" && document.getElementById('percentage-group').style.display !== "none") {
                              var namesms2 = "Percentage must be filled out";
                              document.getElementById("percentage_error").innerHTML = namesms2;
                              document.educationform.percentage.focus();
                              return false;
                            } else if(per > 100) {
                              var pervalidate = "Please enter valid percentage";
                              document.getElementById("percentage_error").innerHTML = pervalidate;
                              document.educationform.percentage.focus();
                              return false;
                            } else  {
                              document.getElementById("percentage_error").innerHTML = "";
                            }


                            if (yop == "" && document.getElementById('year-group').style.display !== "none") {
                              var namesms2 = "Year of passed out must be filled out";
                              document.getElementById("year_error").innerHTML = namesms2;
                              document.educationform.year_passed.focus();
                              return false;
                            } else {
                              document.getElementById("year_error").innerHTML = "";
                            }


                            if (tenth == "" && document.getElementById('certificate_10th-group').style.display !== "none") {
                              var namesms2 = "10 th certificate must be uploaded";
                              document.getElementById("certificate_10th_error").innerHTML = namesms2;
                              document.educationform.certificate_10th.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_10th_error").innerHTML = "";
                            }

                            if (tweleth == "" && document.getElementById('certificate_12th-group').style.display !== "none") {
                              var namesms2 = "12 th certificate must be uploaded";
                              document.getElementById("certificate_12th_error").innerHTML = namesms2;
                              document.educationform.certificate_12th.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_12th_error").innerHTML = "";
                            }

                            if (diploma == "" && document.getElementById('certificate_dip-group').style.display !== "none") {
                              var namesms2 = "Diploma certificate must be uploaded";
                              document.getElementById("certificate_dip_error").innerHTML = namesms2;
                              document.educationform.certificate_dip.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_dip_error").innerHTML = "";
                            }

                            if (ug == "" && document.getElementById('certificate_ug-group').style.display !== "none") {
                              var namesms2 = "UG certificate must be uploaded";
                              document.getElementById("certificate_ug_error").innerHTML = namesms2;
                              document.educationform.certificate_ug.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_ug_error").innerHTML = "";
                            }


                            if (pg == "" && document.getElementById('certificate_pg-group').style.display !== "none") {
                              var namesms2 = "PG certificate must be uploaded";
                              document.getElementById("certificate_pg_error").innerHTML = namesms2;
                              document.educationform.certificate_pg.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_pg_error").innerHTML = "";
                            }


                            if (dc == "" && document.getElementById('certificate_doctorate-group').style.display !== "none") {
                              var namesms2 = "Certificate must be uploaded";
                              document.getElementById("certificate_doctorate_error").innerHTML = namesms2;
                              document.educationform.certificate_doctorate.focus();
                              return false;
                            } else {
                              document.getElementById("certificate_doctorate_error").innerHTML = "";
                            }

                            return true;
                          }
                        </script>
                        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


                      <?php


        } elseif ($method == 'updateEducation') {
          ?>
                        <!-- 2 2 Educational  Update********************************************************************************************************************************** -->

                        <div class="eduformcss container mt-5 mx-md-auto" id="education">
                          <h3>Update Education Details</h3>

                          <div id="educationFormsContainer">
                            <div class="education-form-container">

                              <form name="educationform" enctype="multipart/form-data" action="<?php echo baseUrl . "seekerController/updateInsertEducation" ?>" method="post" onsubmit="return validateForm()">
                                <?php
                                if (isset($updateEducation[0]['id'])) {
                                  foreach ($updateEducation as $key => $value) {
                                    $seekerId = $_SESSION['seekerId'];
                                    ?>
                                                <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                                                <div class="form-group">
                                                  <label for="qualification">Educational Qualification</label>
                                                  <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>" name="qualification" onchange="toggleFields()" readonly>
                                                    <option value="<?php echo $value['educational_qualification']; ?>"><?php echo $value['educational_qualification']; ?></option>
                                                    <!--  <option value="">Select Qualification</option>
                                           <option value="below_8th"<?php if ($value['educational_qualification'] === 'below_8th')
                                             echo ' selected'; ?>>Below 8th</option>
                                            <option value="sslc"<?php if ($value['educational_qualification'] === 'sslc')
                                              echo ' selected'; ?>>SSLC</option>
                                            <option value="hsc"<?php if ($value['educational_qualification'] === 'hsc')
                                              echo ' selected'; ?>>HSC</option>
                                            <option value="bachelors"<?php if ($value['educational_qualification'] === 'bachelors')
                                              echo ' selected'; ?>>Bachelors</option>
                                            <option value="masters"<?php if ($value['educational_qualification'] === 'masters')
                                              echo ' selected'; ?>>Masters</option>
                                            <option value="doctorate"<?php if ($value['educational_qualification'] === 'doctorate')
                                              echo ' selected'; ?>>Doctorate</option> -->
                                                  </select>
                                                  <div id="qualification_error" class="error"></div>
                                                </div>

                                                <div class="form-group" id="department-group" style="display: none;">
                                                  <label for="department">Department</label>
                                                  <input type="text" class="form-control" id="department" name="department" value="<?php echo $value['department']; ?>">
                                                  <div id="department_error" class="error"></div>
                                                </div>

                                                <div class="form-group" id="school-group" style="display: none;">
                                                  <label for="school">Institution Name</label>
                                                  <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                                                  <div id="school_error" class="error"></div>
                                                </div>

                                                <div class="form-group" id="percentage-group" style="display: none;">
                                                  <label for="percentage">Percentage</label>
                                                  <input type="text" class="form-control" id="percentage" id="school" value="<?php echo $value['percentage']; ?>" name="percentage">
                                                  <div id="percentage_error" class="error"></div>
                                                </div>

                                                <div class="form-group" id="year-group" style="display: none;">
                                                  <label for="year_passed">Year of Passed Out</label>
                                                  <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>" name="year_passed">
                                                  <div id="year_error" class="error"></div>
                                                </div>

                                        </div>

                                        <div class="form-group" id="certificate_10th-group" style="display: none;">
                                          <label for="certificate_10th">10th Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_10th" name="certificate_10th"> -->
                                          <input type="text" class="form-control"  name="old10cer" value="<?php echo $value['ten_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cer10upload" id="certificate_10th" name="certificate_10th" accept="image/png ,image/jpg, image/jpeg, application/pdf" />
                                          <label id="file-input-label" for="certificate_10th">Change File</label>  
                                          <a href="<?php echo $value['tencer_url']; ?>" class="filelink" target="blank" id="existfile" ><?php echo $value['ten_cer']; ?></a>
                                          </div>
                                          <div id="certificate_10th_error" class="error"></div>
                                        </div>

                                        <div class="form-group" id="certificate_12th-group" style="display: none;">
                                          <label for="certificate_12th">12th Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_12th" name="certificate_12th"> -->
                                          <input type="text" class="form-control"  name="old12cer" value="<?php echo $value['twelve_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cer12upload" id="certificate_12th" name="certificate_12th" accept="image/png ,image/jpg, image/jpeg, application/pdf"/>
                                          <label id="file-input-label12" for="certificate_12th">Change File</label>  
                                          <a href="<?php echo $value['twelvecer_url']; ?>" class="filelink" target="blank" id="existfile12" ><?php echo $value['twelve_cer']; ?></a>
                                          </div>
                                          <div id="certificate_12th_error" class="error"></div>
                                        </div>

                                        <div class="form-group" id="certificate_dip-group" style="display: none;">
                                          <label for="certificate_dip">Diploma Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_12th" name="certificate_12th"> -->
                                          <input type="text" class="form-control"  name="olddipcer" value="<?php echo $value['diploma_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cerdipupload" id="certificate_dip" name="certificate_dip" accept="image/png ,image/jpg, image/jpeg, application/pdf" />
                                          <label id="file-input-labeldip" for="certificate_dip">Change File</label>  
                                          <a href="<?php echo $value['diplomacer_url']; ?>" class="filelink" target="blank" id="existfiledip" ><?php echo $value['diploma_cer']; ?></a>
                                          </div>
                                          <div id="certificate_dip_error" class="error"></div>
                                        </div>

                                        <div class="form-group" id="certificate_ug-group" style="display: none;">
                                          <label for="certificate_ug">UG Degree Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_ug" name="certificate_ug"> -->
                                          <input type="text" class="form-control"  name="oldugcer" value="<?php echo $value['ug_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cerugupload" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf" />
                                          <label id="file-input-labelug" for="certificate_ug">Change File</label>  
                                          <a href="<?php echo $value['ugcer_url']; ?>" class="filelink" target="blank" id="existfileug" ><?php echo $value['ug_cer']; ?></a>
                                          </div>
                                          <div id="certificate_ug_error" class="error"></div>
                                        </div>

                                        <div class="form-group" id="certificate_pg-group" style="display: none;">
                                          <label for="certificate_pg">PG Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_pg" name="certificate_pg"> -->
                                          <input type="text" class="form-control"  name="oldpgcer" value="<?php echo $value['pg_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cerpgupload" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf" />
                                          <label id="file-input-labelpg" for="certificate_pg">Change File</label>  
                                          <a href="<?php echo $value['pgcer_url']; ?>" class="filelink" target="blank" id="existfilepg" ><?php echo $value['pg_cer']; ?></a>
                                          </div>
                                          <div id="certificate_pg_error" class="error"></div>
                                        </div>

                                        <div class="form-group" id="certificate_doctorate-group" style="display: none;">
                                          <label for="certificate_doctorate">Doctorate Certificate Upload</label>
                                          <!-- <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate"> -->
                                          <input type="text" class="form-control"  name="olddoccer" value="<?php echo $value['doc_cer']; ?>" hidden>
                                          <div class="uploadedfile">
                                          <input type="file" class="form-control cerdocupload" id="certificate_doctorate" name="certificate_doctorate" accept="image/png ,image/jpg, image/jpeg, application/pdf" />
                                          <label id="file-input-labeldoc" for="certificate_doctorate">Change File</label>  
                                          <a href="<?php echo $value['doccer_url']; ?>" class="filelink" target="blank" id="existfiledoc" ><?php echo $value['doc_cer']; ?></a>
                                          </div>
                                          <div id="certificate_doctorate_error" class="error"></div>
                                        </div>

                                        <button type="submit" id="educationsubmit" class="btn btn-primary">Update</button>

                                        </form>
                                      </div>

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
                                  <div class="form-group" id="certificate_10th-group" style="display: none;">
                                    <label for="certificate_10th">10th Certificate Upload*</label>
                                    <input type="file" class="form-control" id="certificate_10th" name="certificate_10th">
                                    <div id="certificate_10th_error" class="error"></div>
                                  </div>

                                  <div class="form-group" id="certificate_12th-group" style="display: none;">
                                    <label for="certificate_12th">12th Certificate Upload*</label>
                                    <input type="file" class="form-control" id="certificate_12th" name="certificate_12th">
                                    <div id="certificate_12th_error" class="error"></div>
                                  </div>

                          <div class="form-group" id="certificate_dip-group" style="display: none;">
                              <label for="certificate_dip">Diploma Certificate Upload</label>
                              <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                              <div id="certificate_dip_error" class="error"></div>
                            </div>

                          <div class="form-group" id="certificate_ug-group" style="display: none;">
                            <label for="certificate_ug">UG Degree Certificate Upload</label>
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

                        <!-- Display uploaded certificates -->
                        <script>
                            document.getElementById("file-input-label").addEventListener("click", function() {
                                document.getElementById("existfile").style.display = "none";
                            });

                        const fileInput = document.getElementById("certificate_10th");
                        const fileInputLabel = document.getElementById("file-input-label");

                        fileInput.addEventListener("change", function () {
                            if (fileInput.files.length > 0) {
                            fileInputLabel.textContent = fileInput.files[0].name;
                            } else {

                            fileInputLabel.textContent = "Select a File";
                            }
                        });
                
                        // 12 certificate
                            document.getElementById("file-input-label12").addEventListener("click", function() {
                                document.getElementById("existfile12").style.display = "none";
                            });

                        const fileInput12 = document.getElementById("certificate_12th");
                        const fileInputLabel12 = document.getElementById("file-input-label12");

                        fileInput12.addEventListener("change", function () {
                            if (fileInput12.files.length > 0) {
                            fileInputLabel12.textContent = fileInput12.files[0].name;
                            } else {
                            fileInputLabel12.textContent = "Select a File";
                            }
                        });
                
                        // Diploma certificate
                        document.getElementById("file-input-labeldip").addEventListener("click", function() {
                                document.getElementById("existfiledip").style.display = "none";
                            });

                        const fileInputdip = document.getElementById("certificate_dip");
                        const fileInputLabeldip = document.getElementById("file-input-labeldip");

                        fileInputdip.addEventListener("change", function () {
                            if (fileInputdip.files.length > 0) {
                            fileInputLabeldip.textContent = fileInputdip.files[0].name;
                            } else {
                            fileInputLabeldip.textContent = "Select a File";
                            }
                        });

                        // ug certificate
                            document.getElementById("file-input-labelug").addEventListener("click", function() {
                                document.getElementById("existfileug").style.display = "none";
                            });

                        const fileInputug = document.getElementById("certificate_ug");
                        const fileInputLabelug = document.getElementById("file-input-labelug");

                        fileInputug.addEventListener("change", function () {
                            if (fileInputug.files.length > 0) {
                            fileInputLabelug.textContent = fileInputug.files[0].name;
                            } else {
                            fileInputLabelug.textContent = "Select a File";
                            }
                        });
                
                        // pg certificate
                            document.getElementById("file-input-labelpg").addEventListener("click", function() {
                                document.getElementById("existfilepg").style.display = "none";
                            });

                        const fileInputpg = document.getElementById("certificate_pg");
                        const fileInputLabelpg = document.getElementById("file-input-labelpg");

                        fileInputpg.addEventListener("change", function () {
                            if (fileInputpg.files.length > 0) {
                            fileInputLabelpg.textContent = fileInputpg.files[0].name;
                            } else {
                            fileInputLabelpg.textContent = "Select a File";
                            }
                        });
                 
                        // doc certificate
                            document.getElementById("file-input-labeldoc").addEventListener("click", function() {
                                document.getElementById("existfiledoc").style.display = "none";
                            });

                        const fileInputdoc = document.getElementById("certificate_doctorate");
                        const fileInputLabeldoc = document.getElementById("file-input-labeldoc");

                        fileInputdoc.addEventListener("change", function () {
                            if (fileInputdoc.files.length > 0) {
                            fileInputLabeldoc.textContent = fileInputdoc.files[0].name;
                            } else {
                            fileInputLabeldoc.textContent = "Select a File";
                            }
                        });
                        </script>
            
                        <script>
                          // This is for displaying in update form
                          if (document.getElementById('qualification').value !== 'below_8th') {
                            document.getElementById('school-group').style.display = 'block';
                            document.getElementById('percentage-group').style.display = 'block';
                            document.getElementById('year-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'sslc') {
                            document.getElementById('certificate_10th-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'hsc') {
                            document.getElementById('certificate_12th-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'diploma') {
                            document.getElementById('department-group').style.display = 'block';
                            document.getElementById('certificate_dip-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'bachelors') {
                            document.getElementById('department-group').style.display = 'block';
                            document.getElementById('certificate_ug-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'masters') {
                            document.getElementById('department-group').style.display = 'block';
                            document.getElementById('certificate_pg-group').style.display = 'block';
                          }

                          if (document.getElementById('qualification').value === 'doctorate') {
                            document.getElementById('department-group').style.display = 'block';
                            document.getElementById('certificate_doctorate-group').style.display = 'block';
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
                              var namesms2 = "Qualification must be filled out";
                              document.getElementById("qualification_error").innerHTML = namesms2;
                              document.educationform.qualification.focus();
                              return false;
                            } else {
                              document.getElementById("qualification_error").innerHTML = "";
                            }

                            if (dep == "" && document.getElementById('department-group').style.display !== "none") {
                              var namesms2 = "Department must be filled out";
                              document.getElementById("department_error").innerHTML = namesms2;
                              document.educationform.department.focus();
                              return false;
                            } else {
                              document.getElementById("department_error").innerHTML = "";
                            }

                            if (scl == "" && document.getElementById('school-group').style.display != "none") {
                              var namesms2 = "School or college must be filled out";
                              document.getElementById("school_error").innerHTML = namesms2;
                              document.educationform.school.focus();
                              return false;
                            } else {
                              document.getElementById("school_error").innerHTML = "";
                            }


                            if (per == "" && document.getElementById('percentage-group').style.display !== "none") {
                              var namesms2 = "Percentage must be filled out";
                              document.getElementById("percentage_error").innerHTML = namesms2;
                              document.educationform.percentage.focus();
                              return false;
                            } else if(per > 100) {
                              var pervalidate = "Please enter valid percentage";
                              document.getElementById("percentage_error").innerHTML = pervalidate;
                              document.educationform.percentage.focus();
                              return false;
                            } else {
                              document.getElementById("percentage_error").innerHTML = "";
                            }


                            if (yop == "" && document.getElementById('year-group').style.display !== "none") {
                              var namesms2 = "Year of passed out must be filled out";
                              document.getElementById("year_error").innerHTML = namesms2;
                              document.educationform.year_passed.focus();
                              return false;
                            } else {
                              document.getElementById("year_error").innerHTML = "";
                            }

                            return true;
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
        } elseif ($method == 'experienceTable') {
          ?>
                <!-- 3 Experience Table ******************************************************************************************************************-->

                <div class=" container exptablecss mt-5">
                  <h3 class="text-center">Experience Details </h3>
                  <div style="padding-bottom:20px">
                    Are you a fresher ?  <a id="deletes" href="<?php echo baseUrl . "seekerController/areaOfIntrestTable" ?>">Skip</a>
                  </div>
                  <a id="regis" href="<?php echo baseUrl . "seekerController/addExperirenceForm" ?>">+ Add Experience</a>
                  <div style="float:right">
                    <a id="regis" href="<?php echo baseUrl . "seekerController/educationTable" ?>">Previous </a>
                    <a id="regis" href="<?php echo baseUrl . "seekerController/areaOfIntrestTable" ?>">Next </a>
                  </div>

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
                          <th>Company Name</th>
                          <th>Role</th>
                          <th>Name of Employer</th>
                          <th>Mobile Number of Employer</th>
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
                                            <a id="regis" id="updates" href="<?php echo baseUrl . "seekerController/updateExperience" ?>/<?php echo $value['id'] ?>">Edit</a>
                                            <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteExperience" ?>/<?php echo $value['id'] ?>">Delete</a>
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
        } elseif ($method == 'addExperirenceForm') {
          ?>

                <!-- 3 1 Experience details insert ********************************************************************************************************************-->

                <div class="expdetailcss container mt-5 mx-md-auto">
                  <h3 class="mx-auto" style="color:navy"> Add Experience Details</h3>

                  <form name="experienceform" method="post" onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "seekerController/insertExperienceForm" ?>">


                    <div class="form-group">
                      <label for="category">Category</label>
                      <select class="form-control" id="category" name="category">

                        <option value="">Select a Category</option>
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
                      <div id="category_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="subcategory">Subcategory</label>
                      <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory">
                      <div id="subcategory_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="experience">Experience</label>
                      <select class="form-control" id="experience" name="experience">
                        <option value="">Select your experience</option>
                        <option value="0-2">0-2</option>
                        <option value="3-5">3-5</option>
                        <option value="5-10">5-10</option>
                        <option value="10-15">10-15</option>
                        <option value="15-20">15-20</option>
                        <option value="above 20 years">Above 20 years</option>
                      </select>
                      <div id="experienceexp_error" class="error"></div>
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
                      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter company name">
                      <div id="companyname_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="role">Role in the Company</label>
                      <input type="text" class="form-control" id="role" name="role" placeholder="Enter role">
                      <div id="role_error" class="error"></div>
                    </div>

                    <h4 class="mx-auto py-3" style="color:navy">Previous Company Manager Details :</h4>

                    <div class="form-group">
                      <label for="Name">Name</label>
                      <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" placeholder="Enter employer name">
                      <div id="name_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="number">Mobile Number</label>
                      <input type="text" class="form-control" id="number" name="number" placeholder="Enter mobile number">
                      <div id="mobilenum_error" class="error"></div>
                    </div>

                    <div class="form-group">
                      <label for="email">Email-Id</label>
                      <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email">
                      <div id="emailid_error" class="error"></div>
                    </div>

                    <input type="number" class="form-control"  value="1" name="expsubmit" hidden>

                    <button type="submit" class="btn btn-primary">Submit</button>


                  </form>
                </div>

                <script>
              
                  function validateexpForm() {
                    var category = document.getElementById("category");
                    var subcategory = document.getElementById("subcategory");
                    var experience = document.getElementById("experience");
                    var companyname = document.getElementById("companyname");
                    var role = document.getElementById("role");
                    var ename = document.getElementById("nameofemployer");
                    var phonenumber1 = document.getElementById("number");
                    var email1 = document.getElementById("emailid");

                    if (category.value == '') {
                      // alert("Please select a Category.");
                      displayError('Please select a category', 'category_error');
                      // document.experienceform.category.focus();
                      return false;
                    }

                    if (subcategory.value == '') {
                      // alert("Please select a subcategory.");
                      displayError('Please select a subcategory', 'subcategory_error');
                      // document.experienceform.subcategory.focus();
                      return false;
                    }

                    // if (experience.value === 'fresher') {
                    //   hideFields();
                    // } else if (experience.value === '') {
                    //   // alert("Please select an experience.");
                    //   displayError('Please select an experience.', 'experience_error');
                    //   document.experienceform.experience.focus();
                    //   return false;
                    // }
                    if (experience.value === '') {
                      // alert("Please select an experience.");
                      displayError('Please select an experience', 'experienceexp_error');
                      // document.experienceform.experience.focus();
                      return false;
                    }

                    if (companyname.value === '') {
                      // alert("Company name must be filled out.");
                      displayError('Company name must be filled out', 'companyname_error');
                      // document.experienceform.companyname.focus();
                      return false;
                    }

                    if (role.value === '') {
                      // displayError('Please enter a role.', 'role_error');
                      // alert("Role must be filled out.");
                      displayError('Role must be filled out', 'role_error');
                      // document.experienceform.role.focus();
                      return false;
                    }

                    if (ename.value === '') {
                      // alert("Name must be filled out.");
                      displayError('Employer name must be filled out', 'name_error');
                      return false;
                    }

                    if (phonenumber1.value === '') {
                      // alert("Mobile number must be filled out.");
                      displayError('Mobile number must be filled out', 'mobilenum_error');
                      return false;
                    }

                    if (email1.value === '') {
                      // alert("Email must be filled out.");
                      displayError('Email id must be filled out', 'emailid_error');
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
        } elseif ($method == 'updateExperience') {
          ?>

                <!-- 3 2 Experience Update ****************************************************************************************************************************** -->

                <div class="expdetailsform container mt-5 mx-md-auto ">
                  <h3>Update Experience Details</h3>

                  <form name="experienceform" method="post" onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "seekerController/updateInsertExperience" ?>">
                    <?php
                    if (isset($updateExperience[0]['id'])) {
                      foreach ($updateExperience as $key => $value) {
                        $seekerId = $_SESSION['seekerId'];
                        ?>
                                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">


                                    <div class="form-group">
                                      <label for="category">Category</label>
                                      <select class="form-control" id="category" name="category" value="<?php echo $value['other_category']; ?>">
                                        <option value="">Select a Category</option>
                                        <option value="architech" <?php if ($value['other_category'] === 'architech')
                                          echo ' selected'; ?>>Architect</option>
                                        <option value="developer" <?php if ($value['other_category'] === 'developer')
                                          echo ' selected'; ?>>Developer</option>
                                        <option value="tester" <?php if ($value['other_category'] === 'tester')
                                          echo ' selected'; ?>>Tester</option>
                                        <option value="uiux" <?php if ($value['other_category'] === 'uiux')
                                          echo ' selected'; ?>>UI/UX Design</option>
                                        <option value="datascience" <?php if ($value['other_category'] === 'datascience')
                                          echo ' selected'; ?>>Data Scientist</option>
                                        <option value="databaseadmin" <?php if ($value['other_category'] === 'databaseadmin')
                                          echo ' selected'; ?>>Database Admin</option>
                                        <option value="teacher" <?php if ($value['other_category'] === 'teacher')
                                          echo ' selected'; ?>>Teacher</option>
                                        <option value="professor" <?php if ($value['other_category'] === 'professor')
                                          echo ' selected'; ?>>Professor</option>
                                        <!-- <option value="others"<?php if ($value['other_category'] === 'others')
                                          echo ' selected'; ?>>Others</option> -->
                                      </select>
                                      <div id="category_error" class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="subcategory">Subcategory</label>
                                      <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_category']; ?>" placeholder="Enter subcategory">
                                      <div id="subcategory_error" class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="experience">Experience</label>
                                      <select class="form-control" id="experience" name="experience">
                                        <option value="">Select your experience</option>
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
                                          echo ' selected'; ?>>Above 20 years</option>
                                      </select>
                                      <div id="experience_error" class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="company name">Company Name</label>
                                      <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname" name="companyname">
                                      <div id="companyname_error" class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="role">Role in the Company</label>
                                      <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role">
                                      <div id="role_error" class="error"></div>
                                    </div>

                                    <h4 class="mx-auto py-3" style="color:navy">Previous Company Manager Details :</h4>

                                    <div class="form-group">
                                      <label for="Name">Name</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>" id="nameofemployer" name="nameofemployer">
                                      <div id="name_error" class="error"></div>
                                    </div>

                                    <div class="form-group">
                                      <label for="phone number">Mobile Number</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>" id="number" name="number">
                                    </div>

                                    <div class="form-group">
                                      <label for="email">Email</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>" id="emailid" name="emailid">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Update</button>
                                  <?php
                      }
                    } else {
                      $seekerId = $_SESSION['seekerId'];
                      ?>
                            <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">

                            <div class="form-group">
                              <label for="category">Category</label>
                              <select class="form-control" id="category" name="category" >

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
                              <label for="subcategory">Subcategory</label>
                              <input class="form-control" id="subcategory" name="subcategory" placeholder="Enter subcategory">
                              <div id="areasubcat_error" class="error"></div>
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
                
                  function validateexpForm() {
                    var category = document.getElementById("category");
                    var subcategory = document.getElementById("subcategory");
                    var experience = document.getElementById("experience");
                    var companyname = document.getElementById("companyname");
                    var role = document.getElementById("role");
                    var ename = document.getElementById("nameofemployer");
                    var phonenumber1 = document.getElementById("phonenumber");
                    var email1 = document.getElementById("email");

                    if (category.value === '') {
                      // alert("Category is required");
                      displayError('Please select a category', 'category_error');
                      return true;
                    }

                    if (subcategory.value === '') {
                      // alert("Please select a subcategory");
                      displayError('Please select a subcategory', 'subcategory_error');
                      return false;
                    }
                    if (experience.value === 'fresher') {
                      hideFields();
                    } else if (experience.value === '') {
                      // alert("Please select an experience");
                      displayError('Please select an experience.', 'experience_error');
                      return false;
                    }

                    if (companyname.value === '') {
                      // alert("Please enter a company name.");
                      displayError('Company name must be filled out', 'companyname_error');
                      return false;
                    }

                    if (role.value === '') {
                      // alert("Please enter a role.");
                      displayError('Role must befilled out', 'role_error');
                      return false;
                    }

                    if (ename.value === '') {
                      // alert("Name must be filled out.");
                      displayError('Employer name must be filled out', 'name_error');
                      return false;
                    }
                    if (phonenumber1.value === '') {
                      // alert("Mobile number must be filled out.");
                      displayError('Mobile number must be filled out', 'mobilenum_error');
                      return false;
                    }
                    if (email1.value === '') {
                      // alert("Email must be filled out.");
                      displayError('Email id must be filled out', 'emailid_error');
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
        } elseif ($method == 'areaOfIntrestTable') {
          ?>

                <!-- 4 Area of interest table *****************************************************************************************-->

                <div class="container areatablecss mt-5">
                  <h3 class="mx-auto" style="color:navy">Area of Job Interest Details</h3>
                  <a id="regis" href="<?php echo baseUrl . "seekerController/addAreaOfIntrestForm" ?>">+ Add Area of Job Interest</a>
                  <div style="float:right">
                    <a id="regis" href="<?php echo baseUrl . "seekerController/experienceTable" ?>">Previous</a>
                    <a id="regis" href="<?php echo baseUrl . "seekerController/resume" ?>">Next</a>
                  </div>
                  <div class="clearfix"></div>
                  <br>
                  <div class="table-responsive">
                    <thead>
                      <table class="table table-bordered table-striped">
                        <tr>
                          <th>ID</th>
                          <th>Job Category</th>
                          <th>Job Subcategory</th>
                          <th>Prefered Location</th>
                          <th>Experience</th>
                          <th>Job Type</th>
                          <th>Description</th>
                          <th>Expected Salary</th>
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
                                        <td><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['other_interst_category'] ?></td>
                                        <td><?php echo $value['other_sub_interst_category'] ?></td>
                                        <td><?php echo $value['prefered_location'] ?></td>
                                        <td><?php echo $value['experience'] ?></td>
                                        <td><?php echo $value['job_type'] ?></td>
                                        <td><?php echo $value['description'] ?></td>
                                        <td><?php echo $value['expected_salary'] ?></td>


                                        <!-- <td><?php echo $value['skillname'] ?></td>
                                          <td><?php echo $value['skillexperience'] ?></td>
                                          <td><?php echo $value['skilllevel'] ?></td> -->
                                        <td>
                                          <div class="btn-group" role="group">
                                            <a id="regis" href="<?php echo baseUrl . "seekerController/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>">Edit</a>
                                            <a id="deletes" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "seekerController/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>">Delete</a>
                                          </div>
                                        </td>
                                      </tr>
                                  <?php
                        }
                      }
        } elseif ($method == 'addAreaOfIntrestForm') {
          ?>

                      <!-- 4 1 Area insert **********************************************************************************************************************-->

                      <div class="areaformcss container mt-5 mx-md-auto">
                        <h3>Add Area of Interest</h3>
                        <form method="post" onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "seekerController/insertAreaOfIntrest" ?>">

                          <div id="educationFormsContainer">
                            <div class="education-form-container">
                              <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control" id="category" name="category">
                                  <option value="">Select a Category</option>
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
                                <div id="areacat_error" class="error"></div>
                              </div>

                              <div class="form-group">
                                <label for=" subcategory">Subcategory</label>
                                <input type="text" class="form-control" id="subcategory" name="subcategory" placeholder="Enter subcategory">
                                <div id="areasubcat_error" class="error"></div>
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
                                <input type="text" class="form-control" id="preferred-location" name="preferred-location" placeholder="Enter prefered location">
                                <div id="arealocation_error" class="error"></div>
                                <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                                  <option value="">Select a Preferred location</option>
                                  <option value="chennai">chennai</option>
                                  <option value="Bangalore">Bangalore</option>
                                  <option value="others">others</option>
                              </select> -->
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
                                <!-- <input type="text" class="form-control" id="experience"  name="experience" placeholder="Enter experience" > -->
                                <div id="areaexp_error" class="error"></div>
                              </div>

                              <div class="form-group">
                                <label for="description">Description</label>
                                <input class="form-control" id="description" name="description" rows="3" placeholder="Enter description">
                                <div id="areades_error" class="error"></div>
                              </div>

                              <div class="form-group">
                                <label for="jobtype">Job Type</label>
                                <select class="form-control" id="jobtype" name="jobtype">
                                  <option value="">Select a Job Type</option>
                                  <option value="parttime">Part Time</option>
                                  <option value="fulltime">Full Time</option>
                                </select>
                                <div id="areajob_error" class="error"></div>
                              </div>

                              <div class="form-group">
                                <label for="expected-salary">Expected Salary</label>
                                <input type="text" class="form-control" id="expected-salary" name="expected-salary" placeholder="Enter salary expectation">
                                <div id="areasalary_error" class="error"></div>
                              </div>

                              <div class="form-group ">
                                <h4 class="mx-auto py-3" style="color:navy">Your Strength :</h4>
                              </div>

                              <div class="form-group">
                                <label for="skillname">Skill Name</label>
                                <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name">
                              </div>
                              <div class="form-group">
                                <label for="experience">Experience</label>
                                <select class="form-control" name="skillexperience" id="skillexperience">
                                  <option value="">Select Experience</option>
                                  <option value="fresher">Fresher</option>
                                  <option value="0-2">0-2 years</option>
                                  <option value="2-5">2-5 years</option>
                                  <option value="5-10">5-10 years</option>
                                  <option value="10-20">10-20 years</option>
                                  <option value="20-above">20 years above</option>
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="skillLevel">Skill Level</label>
                                <select class="form-control" name="skilllevel" id="skilllevel">
                                  <option value="">Select Skill Level</option>
                                  <option value="beginner">Beginner</option>
                                  <option value="intermediate">Intermediate</option>
                                  <option value="advanced">Advanced</option>
                                </select>
                              </div>
                              <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                            </div>

                            <input type="number" class="form-control"  value="1" name="areasubmit" hidden>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>
                      </div>
                      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                      <script>
                        function clearFormFields(form) {
                          var fieldsToClear = form.querySelectorAll('input, select');
                          for (var i = 0; i < fieldsToClear.length; i++) {
                            fieldsToClear[i].value = '';
                          }
                        }

                        function validateAreaForm() {
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
                            // alert("Please select a category.");
                            displayError('Please select a category', 'areacat_error');
                            return false;
                          }

                          if (subcategory === "" && category !== "") {
                            // alert("Please select a subcategory.");
                            displayError('Please select a subcategory', 'areasubcat_error');
                            return false;
                          }

                          if (preferredLocation.trim() === "") {
                            // alert("Preferred location must be filled out.");
                            displayError('Preferred location must be filled out', 'arealocation_error');
                            return false;
                          }

                          if (experience.trim() === "") {
                            // alert("Experience must be filled out.");
                            displayError('Experience must be filled out', 'areaexp_error');
                            return false;
                          }

                          if (description.trim() === "") {
                            // alert("Description must be filled out.");
                            displayError('Description must be filled out', 'areades_error');
                            return false;
                          }

                          if (jobtype.trim() === "") {
                            // alert("Please select your job type.");    
                            displayError('Job type must be filled out', 'areajob_error');
                            return false;
                          }

                          if (expectedSalary.trim() === "") {
                            // alert("Expected salary must be filled out.");
                            displayError('Expected salary must be filled out', 'areasalary_error');
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
        } elseif ($method == 'updateAreaOfIntrest') {
          ?>

                      <!-- 4 2 Area form update *************************************************************************************************************************-->

                      <div class="areaformcss container mt-5 mx-md-auto">
                        <h3>Update Area of Job Interest</h3>
                        <form method="post" onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "seekerController/updateInsertAreaOfIntrest" ?>">

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
                                                <label for="category">Category</label>
                                                <select class="form-control" id="category" name="category" value="<?php echo $value['other_interst_category']; ?>">
                                                  <option value="architech" <?php if ($value['other_interst_category'] === 'architech')
                                                    echo ' selected'; ?>>Architech</option>
                                                  <option value="developer">Developer</option>
                                                  <option value="tester" <?php if ($value['other_interst_category'] === 'tester')
                                                    echo ' selected'; ?>>Tester</option>
                                                  <option value="uiux" <?php if ($value['other_interst_category'] === 'uiux')
                                                    echo ' selected'; ?>>UI/UX Design</option>
                                                  <option value="datascience" <?php if ($value['other_interst_category'] === 'datascience')
                                                    echo ' selected'; ?>>Data Scientist</option>
                                                  <option value="databaseadmin" <?php if ($value['other_interst_category'] === 'databaseadmin')
                                                    echo ' selected'; ?>>Database Admin</option>
                                                  <option value="teacher" <?php if ($value['other_interst_category'] === 'teacher')
                                                    echo ' selected'; ?>>Teacher</option>
                                                  <option value="professor" <?php if ($value['other_interst_category'] === 'professor')
                                                    echo ' selected'; ?>>Professor</option>
                                                  <option value="others" <?php if ($value['other_interst_category'] === 'others')
                                                    echo ' selected'; ?>>Others</option>
                                                </select>
                                                <div id="areacat_error" class="error"></div>
                                              </div>

                                              <div class="form-group">
                                                <label for="subcategory">Subcategory</label>
                                                <input type="text" class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_interst_category'] ?>" placeholder="Enter subcategory">
                                                <div id="areasubcat_error" class="error"></div>
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
                                                <div id="arealocation_error" class="error"></div>

                                                <!-- <select class="form-control" id="preferred-location" name="preferred-location">
                                              <option value="">Select a Preferred location</option>
                                              <option value="chennai">chennai</option>
                                              <option value="Bangalore">Bangalore</option>
                                              <option value="others">others</option>
                                               </select> -->
                                              </div>
                                              <div class="form-group">
                                                <label for="experience">Experience</label>
                                                <select class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>">
                                                  <!-- <option value="">Select your experience</option> -->
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
                                                    echo ' selected'; ?>>Above 20 years</option>
                                                </select>
                                                <!-- <input type="text" class="form-control" id="experience"  name="experience" value="<?php echo $value['experience']; ?>"> -->
                                                <div id="areaexp_error" class="error"></div>
                                              </div>

                                              <div class="form-group">
                                                <label for="description">Description</label>
                                                <input class="form-control" id="description" name="description" value="<?php echo $value['description']; ?>" rows="3">
                                                <div id="areades_error" class="error"></div>
                                              </div>

                                              <div class="form-group">
                                                <label for="jobtype">Job Type</label>
                                                <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>">
                                                  <!-- <option value="">Select a job type</option> -->
                                                  <option value="parttime" <?php if ($value['job_type'] === 'parttime')
                                                    echo ' selected'; ?>>Part Time</option>
                                                  <option value="fulltime" <?php if ($value['job_type'] === 'fulltime')
                                                    echo ' selected'; ?>>Full Time</option>
                                                  <!-- <option value="both">Both</option> -->
                                                </select>
                                                <div id="areajob_error" class="error"></div>
                                              </div>

                                              <div class="form-group">
                                                <label for="expected-salary">Expected Salary</label>
                                                <input type="text" class="form-control" id="expected-salary" name="expected-salary" value="<?php echo $value['expected_salary']; ?>">
                                                <div id="areasalary_error" class="error"></div>
                                              </div>

                                              <div class="form-group">
                                                <h4 class="mx-auto py-3" style="color:navy">Your Strength :</h4>
                                              </div>

                                              <div class="form-group">
                                                <label for="skillname">Skill Name</label>
                                                <input type="text" class="form-control" id="skillname" name="skillname" value="<?php echo $value['skillname']; ?>" placeholder="Enter skill name">
                                              </div>

                                              <div class="form-group">
                                                <label for="experience">Experience</label>
                                                <select class="form-control" name="skillexperience" id="skillexperience" value="<?php echo $value['skillexperience']; ?>"><br>
                                                 <option value="">Select an experience</option>
                                                  <option value="fresher" <?php if ($value['skillexperience'] === 'fresher')
                                                    echo ' selected'; ?>>Fresher</option>
                                                  <option value="0-2" <?php if ($value['skillexperience'] === '0-2')
                                                    echo ' selected'; ?>>0-2 years</option>
                                                  <option value="2-5" <?php if ($value['skillexperience'] === '2-5')
                                                    echo ' selected'; ?>>2-5 years</option>
                                                  <option value="5-10" <?php if ($value['skillexperience'] === '5-10')
                                                    echo ' selected'; ?>>5-10 years</option>
                                                  <option value="10-20" <?php if ($value['skillexperience'] === '10-20')
                                                    echo ' selected'; ?>>10-20 years</option>
                                                  <option value="20-above" <?php if ($value['skillexperience'] === '20-above')
                                                    echo ' selected'; ?>>20 years above</option>
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                <label for="skillLevel">Skill Level</label>
                                                <select class="form-control" name="skilllevel" id="skilllevel" value="<?php echo $value['skilllevel']; ?>">
                                                 <option value="">Select a skill level</option>
                                                  <option value="beginner" <?php if ($value['skilllevel'] === 'beginner')
                                                    echo ' selected'; ?>>Beginner</option>
                                                  <option value="intermediate" <?php if ($value['skilllevel'] === 'intermediate')
                                                    echo ' selected'; ?>>Intermediate</option>
                                                  <option value="advanced" <?php if ($value['skilllevel'] === 'advanced')
                                                    echo ' selected'; ?>>Advanced</option>
                                                </select>
                                              </div>
                                              <!-- <button type="button" class="btn btn-secondary mt-3" onclick="addEducationForm()">Add</button> -->
                                            </div>
                                            <button type="submit" class="btn btn-primary">Update</button>
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
                                          <input type="text" class="form-control" id="skillname" name="skillname">
                                        </div>
                                        <div class="form-group">
                                          <br><label for="experience">Experience</label>
                                          <select class="form-control" name="skillExperience" id="experience"><br>
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
                                          <select class="form-control" name="skilllevel" id="skilllevel">
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
                      
                        function validateAreaForm() {
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
                            // alert("Please select a category.");
                            displayError('Please select a category', 'areacat_error');
                            return false;
                          }

                          if (subcategory === "" && category !== "") {
                            // alert("Please select a subcategory.");
                            displayError('Please select a subcategory', 'areasubcat_error');
                            return false;
                          }

                          if (preferredLocation.trim() === "") {
                            // alert("Preferred location must be filled out.");
                            displayError('Preferred location must be filled out', 'arealocation_error');
                            return false;
                          }

                          if (experience.trim() === "") {
                            // alert("Experience must be filled out.");
                            displayError('Experience must be filled out', 'areaexp_error');
                            return false;
                          }

                          if (description.trim() === "") {
                            // alert("Description must be filled out.");
                            displayError('Description must be filled out', 'areades_error');
                            return false;
                          }

                          if (jobtype.trim() === "") {
                            // alert("Please select your job type.");    
                            displayError('Job type must be filled out', 'areajob_error');
                            return false;
                          }

                          if (expectedSalary.trim() === "") {
                            // alert("Expected salary must be filled out.");
                            displayError('Expected salary must be filled out', 'areasalary_error');
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
        } elseif ($method == 'resume') {
          ?>

                      <!-- 5 Upload resume ******************************************************************************************************************-->

                      <div class="uploadresumecss container mt-5">
                        <h3>Upload Resume</h3>

                        <?php
                        // if (isset($areaOfIntrestTable[0]['id'])) {
                        //   foreach ($areaOfIntrestTable as $key => $value) {
                        //     $seekerId = $_SESSION['seekerId'];
                        //     ?>
                        <form id="resumeForm" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" action="<?php echo baseUrl . "seekerController/resumeupload" ?>">
                     
                          <div class="form-group">
                            <label class="mb-3" for="file">Upload Resume</label>
                            <!-- <a href="<?php echo $value['resume_filename']; ?>" target="blank" id="existfileaf"  style="margin-top:10px"><?php echo $value['resume_filename_url']; ?></a> -->
                            <input type="file" class="form-control" name="file" id="idresume" value="" onchange="validateFileType()" accept="image/png ,image/jpg, image/jpeg, application/pdf" required>

                            <input type="number" class="form-control"  value="1" name="resumesubmit" hidden>

                          </div>
                      

                     
                          <!-- <div class="form-group" id="resumeupload">
                        <label class="mb-3" for="file">Uploaded Resume</label>
                        <input type="file" name="file" id="idresume" value=""  accept="image/png ,image/jpg, image/jpeg, application/pdf" required>
                        <div class="uploadedfile">
                        <input type="file" class="form-control " id="idresume" name="file" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                        <label id="file-input-labelaf" for="idresume">Select File</label>  
                        <a href="<?php echo $value['resume_filename']; ?>" target="blank" id="existfileaf"  style="margin-top:10px"><?php echo $value['resume_filename_url']; ?></a>
                        </div>
                      </div> -->


                          <button id="resumeButton" type="submit" class="btn btn-primary">Submit</button>
                      </div>
                   
                      <!-- <table>
                             <tr>
                                    <th>File Name</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>path</th>
                                  <tr> -->
                        <!-- <?php
                        if ($resume[0]['id']) {
                          foreach ($resume as $key => $value) {
                            $seekerId = $_SESSION['seekerId'];
                            ?> -->
                                        <!-- <tr>
                              <th><?= $data['file_name'] ?></th>
                              <th><?= $data['file_type'] ?></th>
                              <th><?= $data['file_size'] ?></th>
                              <th><?= $data['file_path'] ?></th>
                            <tr> 
                      <?php } ?>
                    <?php } ?>
                  </table> -->


                 
                      <script>

                       var reusmevalue = document.getElementById('idresume');

                        function validateForm() {
                          if (resumevalue.value == '') {
                            alert('Please choose a resume!');
                          }
                        }

                        // File type validations

                        // function validateFileType() {
                        //       var selectedFile = document.getElementById('idresume').files[0];
                        //       var allowedTypes = ['image/jpg','image/jpeg', 'image/png', 'application/pdf'];
                        //       if (!allowedTypes.includes(selectedFile.type)) {
                        //           alert('Invalid file type. Please upload a JPG, JPEG, PNG or PDF file.');
                        //           document.getElementById('idresume').value = '';
                        //       }
                        //     }
                      </script>

                      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

                      <!-- ************************************************************************************************************************************************** -->

                    <?php
        } elseif ($method == 'thank') {
          ?>
                      <!-- 6 thankyou ******************************************************************************************************************-->
                      <img src="https://uploads-ssl.webflow.com/5ef0df6b9272f7410180a013/60c0e28575cd7c21701806fd_q1cunpuhbdreMPFRSFLyfUXNzpqv_I5fz_plwv6gV3sMNXwUSPrq88pC2iJijEV7wERnKXtdTA0eE4HvdnntGo9AHAWn-IcMPKV-rZw1v75vlTEoLF4OdNqsRb7C6r7Mvzrm7fe4.png" style="margin-left:30%;margin-top:5%" alt="Success">

              <?php } ?>

            </div>

          </div>

      </main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Progress Bar -->
     <script>
            <?php
            $basicdetaildata = $_SESSION['basicdetaildata'];
            if ($basicdetaildata == "1") {
              ?>
                           document.getElementById("round1").style.backgroundColor= "green";
                           document.getElementById("round1").style.color= "white";
           <?php } ?>

           <?php
           $educationdata = $_SESSION['edudata'];
           if ($educationdata == "1") {
             ?>
                           document.getElementById("round2").style.backgroundColor= "green";
                           document.getElementById("round2").style.color= "white";
           <?php } ?>

           <?php
           $experiencedata = $_SESSION['expdata'];
           if ($experiencedata == "1") {
             ?>
                           document.getElementById("round3").style.backgroundColor= "green";
                           document.getElementById("round3").style.color= "white";
           <?php } ?>

           <?php
           $areaofinterestdata = $_SESSION['areadata'];
           if ($areaofinterestdata == "1") {
             ?>
                           document.getElementById("round4").style.backgroundColor= "green";
                           document.getElementById("round4").style.color= "white";
           <?php } ?>

           <?php
           $resumesubmitdata = $_SESSION['resumedata'];
           if ($resumesubmitdata == "1") {
             ?>
                           document.getElementById("round5").style.backgroundColor= "green";
                           document.getElementById("round5").style.color= "white";
           <?php } ?>

     </script>

      <!-- sidebar active class -->
      <!-- <script>
        function setActiveButton(index) {
          var btns = document.getElementsByClassName("btna");
          for (var i = 0; i < btns.length; i++) {
            btns[i].classList.remove("active");
          }
          btns[index].classList.add("active");
          localStorage.setItem("activeButtonIndex", index);
        }

        var btns = document.getElementsByClassName("btna");

        var storedIndex = localStorage.getItem("activeButtonIndex");

        if (storedIndex !== null) {
          setActiveButton(parseInt(storedIndex));
        } else {
          setActiveButton(0);
        }

        for (var i = 0; i < btns.length; i++) {
          btns[i].addEventListener("click", function() {
            var index = Array.prototype.indexOf.call(btns, this);
            setActiveButton(index);
          });
        }
      </script> -->


</body>

</html>