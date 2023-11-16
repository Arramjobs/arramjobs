<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employee Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
   /* To hide arrows in number field */
 #pincode::-webkit-outer-spin-button,
   #pincode::-webkit-inner-spin-button ,
   #year_passed::-webkit-outer-spin-button,
    #year_passed::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
   </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo baseUrl; ?>" class="logo d-flex align-items-center">
                <img src="<?php echo baseUrl . "assets/logo.png" ?>" alt="ArramJobs">
                <!-- <span class="d-none d-lg-block">Arramjobs</span> -->
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo baseUrl . "assets/profilephoto.png" ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['seekerName']; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['seekerName']; ?></h6>
                            <span>Employee</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center disabled" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li> -->
                        <!-- <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li> -->
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Are you sure to logout?')"
                             href="<?php echo baseUrl . "Employee/logout" ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav>
        <!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="<?php echo baseUrl . "Employee/dash" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link  d-flex justify-content-between" href="<?php echo baseUrl . "Employee/basicDetails" ?>">
                    <div><i class="bi bi-person"></i>
                    <span>Basic Details</span></div>
                    <?php
            $basicdetaildata = $_SESSION['basicdetaildata'];
            if ($basicdetaildata == "1") {
              ?>
                    <div class="rounded-circle bg-success text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">1</div>
                    <?php
            } else{
              ?>
                  <div class="rounded-circle bg-secondary text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">1</div>
               <?php
            }
              ?>
                </a>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Employee/educationTable" ?>">
                    <div><i class="bi bi-bar-chart"></i>
                    <span>Education Details</span></div>
                    <?php
           $educationdata = $_SESSION['edudata'];
           if ($educationdata == "1") {
             ?>
                    <div class="rounded-circle bg-success text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">2</div>
                    <?php
            } else{
              ?>
                  <div class="rounded-circle bg-secondary text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">2</div>
               <?php
            }
              ?>
                </a>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Employee/experienceTable" ?>">
                    <div><i class="bi bi-gem"></i>
                    <span>Experience Details</span></div>
                    <?php
                $experiencedata = $_SESSION['expdata'];
                if ($experiencedata == "1") {
             ?>
                    <div class="rounded-circle bg-success text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">3</div>
                    <?php
            } else{
              ?>
                  <div class="rounded-circle bg-secondary text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">3</div>
               <?php
            }
              ?>
                </a>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
            <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Employee/areaOfIntrestTable" ?>">
            <div><i class="bi bi-box-arrow-in-right"></i>
                    <span>Area of Job Interest</span></div>
                    <?php
            $areaofinterestdata = $_SESSION['areadata'];
            if ($areaofinterestdata == "1") {
             ?>
                    <div class="rounded-circle bg-success text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">4</div>
                    <?php
            } else{
              ?>
                  <div class="rounded-circle bg-secondary text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">4</div>
               <?php
            }
              ?>
                </a>
            </li><!-- End Icons Nav -->
          
            <li class="nav-item">
            <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Employee/resume" ?>">
            <div><i class="bi bi-file-earmark"></i>
                    <span>Resume</span></div>
                    <?php
          $resumesubmitdata = $_SESSION['resumedata'];
          if ($resumesubmitdata == "1") {
             ?>
                    <div class="rounded-circle bg-success text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">5</div>
                    <?php
            } else{
              ?>
                  <div class="rounded-circle bg-secondary text-light text-center pt-1" style="width: 25px; height:25px;font-size: 12px;">5</div>
               <?php
            }
              ?>
                    
                </a>
            </li><!-- End Icons Nav -->

        </ul>

    </aside><!-- End Sidebar-->


    <main id="main" class="main">
        <?php
        if ($method == "dash") {
            ?>
                <section class="section dashboard">
                        <div class="pagetitle">
                            <h1>Dashboard</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="row">

                                    <h5 class="card-title">Welcome To Employee Dashboard</h5>
                                    <div class="col-12">
                                        <div class="card info-card sales-card p-4 ">
                                            <p>At Arram Job Portal, our unwavering commitment is to empower individuals to realize their utmost potential. 
                                            Regardless of where you stand in your career journey—whether you're a recent graduate venturing into the
                                            professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in between—we are
                                            your steadfast companion in the job search expedition. With our comprehensive platform, you gain access to
                                            a wealth of opportunities, career resources, and expert guidance to navigate the ever-evolving job market.
                                            We prioritize your aspirations, offering support and solutions tailored to your unique needs.</p>
                                       <div class="d-sm-flex justify-content-between">
                                            <div>
                                                   <p><b>Note : </b>The following documents are required :</p>
                                                    <ul>
                                                        <li>Aadhaar card [front and back page]</li>
                                                        <li>Profile photo</li>
                                                        <li>Educational certificates [10th, 12th, Degree]</li>
                                                        <li>Resume</li>
                                                    </ul> 
                                                   </div> 

                                                  <a class="my-5" href="<?php echo baseUrl . "Employee/basicdetails" ?>"><button type="button" class="btn btn-success">Create Profile</button></a>
                                        
                                                  </div>
                                                </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>

            <?php
        } elseif ($method == "basicdetails") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Employee Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Profile</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Basic Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate name="applicationform" enctype="multipart/form-data" method="post" 
                            onsubmit="return group()" action='<?php echo baseUrl . "Employee/updateBasicDetails" ?>'>
                           
                            <?php
                            foreach ($basicDetails as $key => $value) {
                                ?>

                                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>"
                                 name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                                        <div class="col-12">
                                        <label for="Name" class="form-label">Name *</label>
                                        <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>"
                                         name="name" placeholder="Enter your name" required>
                                        <div id="Name_error" style="color: red;"></div>
                                        </div>

                                        <div class="col-12">
                                        <label for="emailid" class="form-label">Email *</label><br>
                                        <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" 
                                        name="email" placeholder="Enter your email" required>
                                        <div id="emailid_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="phonenumber" class="form-label">Mobile Number *</label>
                                        <input type="tel" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>" 
                                        name="phonenumber" placeholder="Enter your number" required>
                                        <div id="phonenumber_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="dob" class="form-label">Date of Birth *</label>
                                        <input type="date" class="form-control" id="dateofbirth" value="<?php echo $value['dateofbirth']; ?>"
                                         name="dateofbirth" required>
                                        <div id="dob_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="age" class="form-label">Age *</label>
                                        <input type="number" class="form-control" id="age" value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" 
                                        name="age" placeholder="Enter age" required>
                                        <div id="age_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender *</label>
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="">Select your Gender</option>
                                            <option value="male" <?php if (isset($value['gender']) && $value['gender'] === 'male')
                                                echo 'selected'; ?>>Male</option>
                                            <option value="female" <?php if (isset($value['gender']) && $value['gender'] === 'female')
                                                echo 'selected'; ?>>Female</option>
                                            <option value="others" <?php if (isset($value['gender']) && $value['gender'] === 'others')
                                                echo 'selected'; ?>>Others</option>
                                        </select>
                                        <div id="gender_error" style="color: red;"></div>
                                        </div>

                                        <h5 class="card-title">Address</h5>

                                        <div class="col-md-6">
                                        <label for="Door no" class="form-label">Door no / Building Name *</label>
                                        <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" 
                                        name="doorno" placeholder="Enter door no / building name" required>
                                        <div id="doorno_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="street address" class="form-label">Street Address *</label>
                                        <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" 
                                        name="streetaddress" placeholder="Enter street address" required>
                                        <div id="streetaddress_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="landmark" class="form-label">Landmark *</label>
                                        <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" 
                                        name="landmark" placeholder="Enter landmark" required>
                                        <div id="landmark_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode *</label>
                                        <input type="number" class="form-control" id="pincode" value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" 
                                        name="pincode" placeholder="Enter pincode" required>
                                        <div id="pincode_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="district">District *</label>
                                        <input type="text" class="form-control" id="district" value="Erode" name="district" readonly>
                                        <div id="district_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="maritalstatus" class="form-label">Marital Status *</label>

                                        <select class="form-control" id="maritalstatus" value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>"
                                         name="maritalstatus" required>
                                            <option value="">Select your Marital Status</option>

                                            <option value="single" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'single')
                                                echo 'selected'; ?>>Single</option>
                                            <option value="married" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'married')
                                                echo 'selected'; ?>>Married</option>
                                            <option value="widow" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'widow')
                                                echo 'selected'; ?>>Widow</option>
                                        </select>
                                        <div id="maritalstatus_error" style="color: red;"></div>
                                        </div>

                                        <h5 class="card-title">Identification Details</h5>

                                        <div class="col-md-6" >
                                        <label for="aadharfrontphoto" class="form-label">Aadhaar Front Photo *</label>
                                        <input type="text" class="form-control"  name="oldaadharfront" value="<?php echo $value['aadharfront_filename']; ?>" hidden>
                                        <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                                        <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelaf" for="aadharfrontphoto" class="form-control">Choose File</label>  
                                        <a href="<?php echo $value['aadhar_front']; ?>" class="filelink" target="blank" id="existfileaf" ><?php echo $value['aadharfront_filename']; ?></a>
                                        </div>
                                        <div id="aadharfrontphoto_error" style="color: red;"></div>
                                        </div>

                                        <div class="col-md-6">
                                        <label for="aadharbackphoto" class="form-label">Aadhaar Back Photo *</label>
                                        <input type="text" class="form-control"  name="oldaadharback" value="<?php echo $value['aadharback_filename']; ?>" hidden>
                                        <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                                        <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelab" for="aadharbackphoto" class="form-control">Choose File</label>  
                                        <a href="<?php echo $value['aadhar_back']; ?>" class="filelink" target="blank" id="existfileab" ><?php echo $value['aadharback_filename']; ?></a>
                                        </div>
                                        <div id="aadharbackphoto_error" style="color: red;"></div>
                                        </div>

                                        <div class="col-md-6">
                                        <label for="photo" class="form-label">Photo *</label>
                                        <input type="text" class="form-control"  name="oldprofilephoto" value="<?php echo $value['photo_filename']; ?>" hidden>
                                        <input type="file" class="form-control" id="photo" name="photo" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                                        <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelpp" for="photo" class="form-control">Choose File</label>  
                                        <a href="<?php echo $value['photo']; ?>" class="filelink" target="blank" id="existfilepp" ><?php echo $value['photo_filename']; ?></a>
                                        </div>
                                        <div id="photo_error" style="color: red;"></div>
                                        </div>

                                        <input type="number" class="form-control"  value="1" name="bdsubmit" hidden>

                                        <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF Maximum size: 1024KB</p>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form><!-- End Multi Columns Form -->

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
                    </div>
                </section>

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
                }else {
                    document.getElementById("Name_error").innerHTML = "";
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
                }else {
                    document.getElementById("emailid_error").innerHTML = "";
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
                }else {
                    document.getElementById("phonenumber_error").innerHTML = "";
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
                }else {
                    document.getElementById("pincode_error").innerHTML = "";
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

<?php
        } elseif ($method == "educationTable") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Education Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Table</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           
                            <div class="card-body">
                                       
                                        <h5 class="card-title">Education Table<span></span></h5>

                                        <div class="d-flex justify-content-between">
                                        <a href="<?php echo baseUrl . "Employee/addEducationForm" ?>">
                                        <button type="button" class="btn btn-success mb-4">+ Add Education</button></a>
                                       <div>
                                       <a  href="<?php echo baseUrl . "Employee/basicdetails" ?>"> <button type="button" class="btn btn-info mb-4 ">Previous</button></a>
                                       <a  href="<?php echo baseUrl . "Employee/experiencetable" ?>"> <button type="button" class="btn btn-info mb-4 ">Next</button></a>
                                       </div>
                                    </div>
                                    <?php
                                         if (isset($educationTable[0]['id'])) {
                                           $count=1;
                                            ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Institution Name</th>
                                                    <th scope="col">Educational Qualification</th>
                                                    <th scope="col">Percentage</th>
                                                    <th scope="col">Year of Passing</th>
                                                    <th scope="col">Certificate</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                         if (isset($educationTable[0]['id'])) {
                                           $count=1;
                                            foreach ($educationTable as $key => $value) {
                                            $seekerId = $_SESSION['seekerId'];
                                            ?>
                                                    <tr>
                                                    <td><a><?php echo $count++; ?>.</a></td>
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
                                            <td class="d-flex">
                                                <a href="<?php echo baseUrl . "Employee/updateEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Employee/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                            </td>
                                      </tr>
                                        <?php
                                            }
                                        } 
                                        ?>
                                            </tbody>
                                        </table>
                                        <?php
                                } else {
                                    ?>
                                        <h5 class="card-title">No Records Found<span></span></h5>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>

            <?php
        } elseif ($method == "addEducationForm") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Education Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Add Education</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Education Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" novalidate name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" 
                            action="<?php echo baseUrl . "Employee/insertEducationForm" ?>">

                                <div class="col-12">
                                <label for="qualification" class="form-label">Educational Qualification</label>
                                <select class="form-control" id="qualification" name="qualification" onchange="toggleFields()" required>
                                  <option value="">Select Qualification</option>
                                  <option value="below_8th">Below 8th</option>
                                  <option value="sslc">SSLC</option>
                                  <option value="hsc">HSC</option>
                                  <option value="diploma">Diploma</option>
                                  <option value="bachelors">Bachelors</option>
                                  <option value="masters">Masters</option>
                                  <option value="doctorate">Doctorate</option>
                                </select>
                                <div id="qualification_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="department-group" style="display: none;">
                                <label for="department" class="form-label">Department</label>
                                <input type="text" class="form-control" id="department" name="department" placeholder="Enter department name">
                                <div id="department_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="school-group" style="display: none;">
                                <label for="school" class="form-label">Institution Name</label>
                                <input type="text" class="form-control" id="school" name="school" placeholder="Enter institution name">
                                <div id="school_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="percentage-group" style="display: none;">
                                <label for="percentage" class="form-label">Percentage</label>
                                <input type="text" class="form-control" id="percentage" id="school" name="percentage" placeholder="Enter percentage">
                                <div id="percentage_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="year-group" style="display: none;">
                                <label for="year_passed" class="form-label">Year of Passed Out</label>
                                <input type="number" class="form-control" id="year_passed" name="year_passed" maxlength="4" pattern="\d{4}" placeholder="Enter year of passed out">
                                <div id="year_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                                <label for="certificate_10th" class="form-label">10th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_10th" name="certificate_10th" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_10th_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_12th-group" style="display: none;">
                                <label for="certificate_12th" class="form-label">12th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_12th" name="certificate_12th" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_12th_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_dip-group" style="display: none;">
                                <label for="certificate_dip" class="form-label">Diploma Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                                <div id="certificate_dip_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                                <label for="certificate_ug" class="form-label">UG Degree Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_ug_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                                <label for="certificate_pg" class="form-label">PG Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_pg_error" class="text-danger"></div>
                              </div>

                              <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                                <label for="certificate_doctorate" class="form-label">Doctorate Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                                <div id="certificate_doctorate_error" class="text-danger"></div>
                              </div>

                              <input type="number" class="form-control"  value="1" name="edusubmit" hidden>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>
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
                              var namesms2 = "Please select qualification";
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
                            } else if (!/^\d{4}$/.test(yop)) {
                                document.getElementById("year_error").innerHTML = "Please enter a valid year in YYYY format.";
                                return false;
                            }else {
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
           
           <?php
        } elseif ($method == "updateEducation") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Education Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Edit Education</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Education Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" novalidate name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" 
                            action="<?php echo baseUrl . "Employee/updateInsertEducation" ?>">

                            <?php
                                foreach ($updateEducation as $key => $value) {
                                $seekerId = $_SESSION['seekerId'];
                                ?>
                                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                                    <div class="col-12">
                                        <label class="form-label" for="qualification">Educational Qualification</label>
                                        <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>" name="qualification" onchange="toggleFields()" readonly>
                                        <option value="<?php echo $value['educational_qualification']; ?>"><?php echo $value['educational_qualification']; ?></option>
                                        </select>
                                        <div id="qualification_error" class="text-danger"></div>
                                    </div>

                                    <div class="col-md-6" id="department-group" style="display: none;">
                                        <label class="form-label" for="department">Department</label>
                                        <input type="text" class="form-control" id="department" name="department" value="<?php echo $value['department']; ?>">
                                        <div id="department_error" class="text-danger"></div>
                                    </div>

                                    <div class="col-md-6" id="school-group" style="display: none;">
                                        <label class="form-label" for="school">Institution Name</label>
                                        <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                                        <div id="school_error" class="text-danger"></div>
                                    </div>

                                    <div class="col-md-6" id="percentage-group" style="display: none;">
                                        <label class="form-label" for="percentage">Percentage</label>
                                        <input type="text" class="form-control" id="percentage" id="school" value="<?php echo $value['percentage']; ?>" name="percentage">
                                        <div id="percentage_error" class="text-danger"></div>
                                    </div>

                                    <div class="col-md-6" id="year-group" style="display: none;">
                                        <label class="form-label" for="year_passed">Year of Passed Out</label>
                                        <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>" name="year_passed">
                                        <div id="year_error" class="text-danger"></div>
                                    </div>

                            <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                                <label class="form-label" for="certificate_10th">10th Certificate Upload</label>
                                <input type="text" class="form-control"  name="old10cer" value="<?php echo $value['ten_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cer10upload" id="certificate_10th" name="certificate_10th" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                                <label class="form-control" id="file-input-label" for="certificate_10th">Change File</label>  
                                <a href="<?php echo $value['tencer_url']; ?>" class="filelink p-2" target="blank" id="existfile" ><?php echo $value['ten_cer']; ?></a>
                                </div>
                                <div id="certificate_10th_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_12th-group" style="display: none;">
                                <label class="form-label" for="certificate_12th">12th Certificate Upload</label>
                                <input type="text" class="form-control"  name="old12cer" value="<?php echo $value['twelve_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cer12upload" id="certificate_12th" name="certificate_12th" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label class="form-control" id="file-input-label12" for="certificate_12th">Change File</label>  
                                <a href="<?php echo $value['twelvecer_url']; ?>" class="filelink p-2" target="blank" id="existfile12" ><?php echo $value['twelve_cer']; ?></a>
                                </div>
                                <div id="certificate_12th_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_dip-group" style="display: none;">
                                <label class="form-label" for="certificate_dip">Diploma Certificate Upload</label>
                                <input type="text" class="form-control"  name="olddipcer" value="<?php echo $value['diploma_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cerdipupload" id="certificate_dip" name="certificate_dip" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label class="form-control" id="file-input-labeldip" for="certificate_dip">Change File</label>  
                                <a href="<?php echo $value['diplomacer_url']; ?>" class="filelink p-2" target="blank" id="existfiledip" ><?php echo $value['diploma_cer']; ?></a>
                                </div>
                                <div id="certificate_dip_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                                <label class="form-label" for="certificate_ug">UG Degree Certificate Upload</label>
                                <input type="text" class="form-control"  name="oldugcer" value="<?php echo $value['ug_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cerugupload" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label class="form-control" id="file-input-labelug" for="certificate_ug">Change File</label>  
                                <a href="<?php echo $value['ugcer_url']; ?>" class="filelink p-2" target="blank" id="existfileug" ><?php echo $value['ug_cer']; ?></a>
                                </div>
                                <div id="certificate_ug_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                                <label class="form-label" for="certificate_pg">PG Certificate Upload</label>
                                <input type="text" class="form-control"  name="oldpgcer" value="<?php echo $value['pg_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cerpgupload" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label class="form-control" id="file-input-labelpg" for="certificate_pg">Change File</label>  
                                <a href="<?php echo $value['pgcer_url']; ?>" class="filelink p-2" target="blank" id="existfilepg" ><?php echo $value['pg_cer']; ?></a>
                                </div>
                                <div id="certificate_pg_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                                <label class="form-label" for="certificate_doctorate">Doctorate Certificate Upload</label>
                                <input type="text" class="form-control"  name="olddoccer" value="<?php echo $value['doc_cer']; ?>" hidden>
                                <div class="uploadedfile"  style="display:flex;">
                                <input type="file" class="form-control cerdocupload" id="certificate_doctorate" name="certificate_doctorate" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label class="form-control" id="file-input-labeldoc" for="certificate_doctorate">Change File</label>  
                                <a href="<?php echo $value['doccer_url']; ?>" class="filelink p-2" target="blank" id="existfiledoc" ><?php echo $value['doc_cer']; ?></a>
                                </div>
                                <div id="certificate_doctorate_error" class="text-danger"></div>
                            </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                                <?php
                                  }
                                  ?>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>
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

<?php
        } elseif ($method == "experienceTable") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Experience Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Table</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           
                            <div class="card-body">
                                       
                                        <h5 class="card-title">Experience Table<span></span></h5>
                                        <div class="mb-4">
                                            Are you a fresher ?  <a href="<?php echo baseUrl . "Employee/areaOfIntrestTable" ?>"><button type="button" class="btn btn-danger mx-2">Skip</button></a>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                        <a href="<?php echo baseUrl . "Employee/addExperirenceForm" ?>">
                                        <button type="button" class="btn btn-success mb-4">+ Add Experience</button></a>
                                       <div>
                                       <a  href="<?php echo baseUrl . "Employee/educationTable" ?>"> <button type="button" class="btn btn-info mb-4 ">Previous</button></a>
                                       <a  href="<?php echo baseUrl . "Employee/areaOfIntrestTable" ?>"> <button type="button" class="btn btn-info mb-4 ">Next</button></a>
                                       </div>
                                    </div>
                                    <?php
                                         if (isset($experienceTable[0]['id'])) {
                                           $count=1;
                                            ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Job Category</th>
                                                    <th scope="col">Job Subcategory</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Name of Employer</th>
                                                    <th scope="col">Mobile Number of Employer</th>
                                                    <th scope="col">Email Id</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if (isset($experienceTable[0]['id'])) {
                                                    $count=1;
                                                foreach ($experienceTable as $key => $value) {
                                                $seekerId = $_SESSION['seekerId'];
                                                ?>
                                                    <tr>
                                                    <td><?php echo $count++ ?>.</td>
                                                    <td><?php echo $value['other_category'] ?></td>
                                                    <td><?php echo $value['other_sub_category'] ?></td>
                                                    <td><?php echo $value['experience'] ?></td>
                                                    <td><?php echo $value['company_name'] ?></td>
                                                    <td><?php echo $value['job_role'] ?></td>
                                                    <td><?php echo $value['previous_employer_name'] ?></td>
                                                    <td><?php echo $value['previous_employer_mobile'] ?></td>
                                                    <td><?php echo $value['previous_employer_email'] ?></td>
                                                    <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo baseUrl . "Employee/updateExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Employee/deleteExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </div>
                                                    </td>
                                      </tr>
                                        <?php
                                            }
                                        } 
                                        ?>
                                            </tbody>
                                        </table>
                                        <?php
                                } else {
                                    ?>
                                        <h5 class="card-title">No Records Found<span></span></h5>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>

                <?php
        } elseif ($method == "addExperirenceForm") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Experience Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Add Experience</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Experience Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
                             onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Employee/insertExperienceForm" ?>">

                             <div class="col-12">
                      <label for="category" class="form-label">Category</label>
                      <select class="form-control" id="category" name="category" required>
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
                      <div id="category_error" class="text-danger"></div>
                    </div>

                    <div class="col-md-6">
                      <label for="subcategory" class="form-label">Subcategory</label>
                      <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory" required>
                      <div id="subcategory_error" class="text-danger"></div>
                    </div>

                    <div class="col-md-6">
                      <label for="experience" class="form-label">Experience</label>
                     <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" required>
                      <!-- <select class="form-control" id="experience" name="experience" required>
                        <option value="">Select your experience</option>
                        <option value="0-2">0-2</option>
                        <option value="3-5">3-5</option>
                        <option value="5-10">5-10</option>
                        <option value="10-15">10-15</option>
                        <option value="15-20">15-20</option>
                        <option value="above 20 years">Above 20 years</option>
                      </select> -->
                      <div id="experienceexp_error" class="text-danger"></div>
                    </div>


                    <div class="form-control" id="otherCategoryField" style="display: none;">
                      <label for="othercategory">Other Category:</label>
                      <select class="form-control" id="experience" name="experience">
                        <input type="text" class="form-control" id="othercategory" name="othercategory">
                    </div>
                    <div class="form-control" id="otherSubcategoryField" style="display: none;">
                      <label for="othersubcategory">Other Subcategory:</label>
                      <select class="form-control" id="experience" name="experience">
                        <input type="text" class="form-control" id="othersubcategory" name="othersubcategory">
                    </div>


                    <div class="col-md-6">
                      <label for="company name" class="form-label">Company Name</label>
                      <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter company name" required>
                      <div id="companyname_error" class="text-danger"></div>
                    </div>

                    <div class="col-md-6">
                      <label for="role" class="form-label">Role in the Company</label>
                      <input type="text" class="form-control" id="role" name="role" placeholder="Enter role" required>
                      <div id="role_error" class="text-danger"></div>
                    </div>

                    <h5 class="card-title">Previous Job's Manager Details</h5>

                    <div class="col-md-6">
                      <label for="Name" class="form-label">Name</label>
                      <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" placeholder="Enter employer name" required>
                      <div id="name_error" class="text-danger"></div>
                    </div>

                    <div class="col-md-6">
                      <label for="number" class="form-label">Mobile Number</label>
                      <input type="text" class="form-control" id="number" name="number" placeholder="Enter mobile number" required>
                      <div id="mobilenum_error" class="text-danger"></div>
                    </div>

                    <div class="col-md-6" class="form-label">
                      <label for="email">Email-Id</label>
                      <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email" required>
                      <div id="emailid_error" class="text-danger"></div>
                    </div>

                    <input type="number" class="form-control"  value="1" name="expsubmit" hidden>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>

                </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>

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
        } elseif ($method == "updateExperience") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Experience Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Edit Experience</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Experience Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" 
                            onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Employee/updateInsertExperience" ?>">

                            <?php
                            foreach ($updateExperience as $key => $value) {
                            $seekerId = $_SESSION['seekerId'];
                                ?>
                                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" >

                                    <div class="col-12">
                                      <label class="form-label" for="category">Category</label>
                                      <select class="form-control" id="category" name="category" value="<?php echo $value['other_category']; ?>" required>
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
                                        <option value="others"<?php if ($value['other_category'] === 'others')
                                          echo ' selected'; ?>>Others</option>
                                      </select>
                                      <div id="category_error" class="error"></div>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="subcategory">Subcategory</label>
                                      <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_category']; ?>" placeholder="Enter subcategory" required>
                                      <div id="subcategory_error" class="error"></div>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="experience">Experience</label>
                                      <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" value="<?php echo $value['experience']; ?>" required>
                                      <!-- <select class="form-control" id="experience" name="experience" required>
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
                                      </select> -->
                                      <div id="experience_error" class="error"></div>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="company name">Company Name</label>
                                      <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname" name="companyname" required>
                                      <div id="companyname_error" class="error"></div>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="role">Role in the Company</label>
                                      <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role" required>
                                      <div id="role_error" class="error"></div>
                                    </div>

                                    <h5 class="card-title">Previous Job's Manager Details</h5>

                                    <div class="col-md-6">
                                      <label class="form-label" for="Name">Name</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>" id="nameofemployer" name="nameofemployer" required>
                                      <div id="name_error" class="error"></div>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="phone number">Mobile Number</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>" id="number" name="number" required>
                                    </div>

                                    <div class="col-md-6">
                                      <label class="form-label" for="email">Email</label>
                                      <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>" id="emailid" name="emailid" required>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>

                                </form><!-- End Multi Columns Form -->

                                <?php 
                            }
                            ?>
                        </div>
                    </div>
                </section>

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
        } elseif ($method == "areaOfIntrestTable") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Area of Job Interest and Skill Table</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Table</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                           
                            <div class="card-body">
                                       
                                        <h5 class="card-title">Area of Job Interest Table<span></span></h5>
                                        
                                        <div class="d-flex justify-content-between">
                                        <a href="<?php echo baseUrl . "Employee/addAreaOfIntrestForm" ?>">
                                        <button type="button" class="btn btn-success mb-4">+ Add Area of Job Interest</button></a>
                                       <div>
                                       <a  href="<?php echo baseUrl . "Employee/experienceTable" ?>"> <button type="button" class="btn btn-info mb-4 ">Previous</button></a>
                                       <a  href="<?php echo baseUrl . "Employee/resume" ?>"> <button type="button" class="btn btn-info mb-4 ">Next</button></a>
                                       </div>
                                    </div>
                                    <?php
                                         if (isset($areaOfIntrestTable[0]['id'])) {
                                           $count=1;
                                            ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Job Category</th>
                                                    <th scope="col">Job Subcategory</th>
                                                    <th scope="col">Prefered Location</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Expected Salary</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                if (isset($areaOfIntrestTable[0]['id'])) {
                                                    $count=1;
                                                foreach ($areaOfIntrestTable as $key => $value) {
                                                $seekerId = $_SESSION['seekerId'];
                                                ?>
                                                <?php $resumefilenameconst = $value['resume_filename']; ?>
                                                    <tr>
                                                    <td><?php echo $count++ ?>.</td>
                                                    <td><?php echo $value['other_interst_category'] ?></td> 
                                                    <td><?php echo $value['other_sub_interst_category'] ?></td>
                                                    <td><?php echo $value['prefered_location'] ?></td>
                                                    <td><?php echo $value['experience'] ?></td>
                                                    <td><?php echo $value['job_type'] ?></td>
                                                    <td><?php echo $value['description'] ?></td>
                                                    <td><?php echo $value['expected_salary'] ?></td>
                                                    <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo baseUrl . "Employee/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Employee/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </div>
                                                    </td>
                                      </tr>
                                        <?php
                                            }
                                        } 
                                        ?>
                                            </tbody>
                                        </table>
                                        <?php
                                } else {
                                    ?>
                                        <h5 class="card-title">No Records Found<span></span></h5>
                                    <?php
                                }
                                ?>

                                
                              <h5 class="card-title">Skill Table<span></span></h5>
                                  <div>
                                        <a href="<?php echo baseUrl . "Employee/addSkillForm" ?>">
                                        <button type="button" class="btn btn-success mb-4">+ Add Skill</button></a>
                                  <div>
                                        <?php
                                         if (isset($areaOfIntrestTable[0]['id'])) {
                                           $count=1;
                                            ?>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Skill Name</th>
                                                    <th scope="col">Skill Experience</th>
                                                    <th scope="col">Skill Level</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                      if (isset($skillTable[0]['id'])) {
                        $count= 1;
                        foreach ($skillTable as $key => $value) {
                          $seekerId = $_SESSION['seekerId'];
                      ?>
                                                    <tr>
                                                    <td><?php echo $count++ ?>.</td>
                                                    <td><?php echo $value['skill'] ?></td>
                                                    <td><?php echo $value['experience'] ?></td>
                                                    <td><?php echo $value['skill_level'] ?></td> 
                                                    <td>
                                                    <div class="d-flex">
                                                        <a href="<?php echo baseUrl . "Employee/updateSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                        <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Employee/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                                    </div>
                                                    </td>
                                      </tr>
                                        <?php
                                            }
                                        } 
                                        ?>
                                            </tbody>
                                        </table>
                                        <?php
                                } else {
                                    ?>
                                        <h5 class="card-title">No Records Found<span></span></h5>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>



            <?php
        } elseif ($method == "addAreaOfIntrestForm") {
            ?>
               <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Area of Job Interest Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Add Job Interest</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Job Interest</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate  method="post"
                            onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Employee/insertAreaOfIntrest" ?>">

                              <div class="col-12">
                                <label class="form-label" for="category">Category</label>
                                <select class="form-control" id="category" name="category" required>
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
                                <div id="areacat_error" class="error"></div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for=" subcategory">Subcategory</label>
                                <input type="text" class="form-control" id="subcategory" name="subcategory" placeholder="Enter subcategory" required>
                                <div id="areasubcat_error" class="error"></div>
                              </div>

                              <div class="col-md-6" id="otherCategoryFields" style="display: none;">
                                <label for="customCategoryInput">Custom Category</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                                <label for="customSubcategoryInput">Custom Subcategory</label>
                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                              </div>
                              <div class="col-md-6" id="customCategory" style="display: none;">
                                <label for="customCategoryInput">Category Name</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                              </div>

                              <div class="col-md-6" id="customSubcategory" style="display: none;">
                                <label for="customSubcategoryInput"> Subcategory Name</label>
                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
                              </div>

                              <div class="col-md-6">
                                <label for="preferred-location">Preferred Location to work</label>
                                <input type="text" class="form-control" id="preferred-location" name="preferred-location" placeholder="Enter prefered location" required>
                                <div id="arealocation_error" class="error"></div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="experience">Experience</label>
                                <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" required>
                                <!-- <select class="form-control" id="experience" name="experience" required>
                                  <option value="">Select your experience</option>
                                  <option value="fresher">Fresher</option>
                                  <option value="0-2">0-2</option>
                                  <option value="3-5">3-5</option>
                                  <option value="5-10">5-10</option>
                                  <option value="10-15">10-15</option>
                                  <option value="15-20">15-20</option>
                                  <option value="above 20 years">Above 20 years</option>
                                </select> -->
                                <div id="areaexp_error" class="error"></div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="description">Description</label>
                                <input class="form-control" id="description" name="description" rows="3" placeholder="Enter description" required>
                                <div id="areades_error" class="error"></div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="jobtype">Job Type</label>
                                <select class="form-control" id="jobtype" name="jobtype" required>
                                  <option value="">Select a Job Type</option>
                                  <option value="parttime">Part Time</option>
                                  <option value="fulltime">Full Time</option>
                                </select>
                                <div id="areajob_error" class="error"></div>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="expected-salary">Expected Salary</label>
                                <input type="text" class="form-control" id="expected-salary" name="expected-salary" placeholder="Enter salary expectation" required>
                                <div id="areasalary_error" class="error"></div>
                              </div>

                      
                            <input type="number" class="form-control"  value="1" name="areasubmit" hidden>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>

                </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>

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
        } elseif ($method == "addSkillForm") {
            ?>
               <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Skill Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Add Skill</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add New Skill</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate  method="post"
                            onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Employee/insertSkillForm" ?>">

                            
                              <div class="col-12">
                                <label class="form-label" for="skillname">Skill Name</label>
                                <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name" required>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="experience">Experience</label>
                                <input type="text" class="form-control" name="skillexperience" id="skillexperience" placeholder="Enter skill experience" required>
                                <!-- <select class="form-control" name="skillexperience" id="skillexperience" required>
                                  <option value="">Select Experience</option>
                                  <option value="fresher">Fresher</option>
                                  <option value="0-2">0-2 years</option>
                                  <option value="2-5">2-5 years</option>
                                  <option value="5-10">5-10 years</option>
                                  <option value="10-20">10-20 years</option>
                                  <option value="20-above">20 years above</option>
                                </select> -->
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="skillLevel">Skill Level</label>
                                <select class="form-control" name="skilllevel" id="skilllevel" required>
                                  <option value="">Select Skill Level</option>
                                  <option value="beginner">Beginner</option>
                                  <option value="intermediate">Intermediate</option>
                                  <option value="advanced">Advanced</option>
                                </select>
                              </div>

                            <input type="number" class="form-control"  value="1" name="areasubmit" hidden>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>

                
            <?php
        } elseif ($method == 'updateAreaOfIntrest') {
            ?>
                
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Area of Job Interest Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Edit Job Interest</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Job Interest</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate  method="post"
                            onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Employee/updateInsertAreaOfIntrest" ?>">

                            <?php
                            foreach ($updateAreaOfIntrest as $key => $value) {
                              $seekerId = $_SESSION['seekerId'];
                              ?>
                                          <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                                          <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                                          
                                              <div class="col-12">
                                                <label class="form-label" for="category">Category</label>
                                                <select class="form-control" id="category" name="category" value="<?php echo $value['other_interst_category']; ?>" required>
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

                                              <div class="col-md-6">
                                                <label class="form-label" for="subcategory">Subcategory</label>
                                                <input type="text" class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_interst_category'] ?>" placeholder="Enter subcategory" required>
                                                <div id="areasubcat_error" class="error"></div>
                                              </div>


                                              <div class="" id="otherCategoryFields" style="display: none;">
                                                <label for="customCategoryInput">Custom Category</label>
                                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput" placeholder="Enter custom category">
                                                <label for="customSubcategoryInput">Custom Subcategory</label>
                                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput" placeholder="Enter custom subcategory">
                                              </div>
                                              <div class="" id="customCategory" style="display: none;">
                                                <label for="customCategoryInput">Category Name</label>
                                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                                              </div>
                                              <div class="" id="customSubcategory" style="display: none;">
                                                <label for="customSubcategoryInput"> Subcategory Name</label>
                                                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
                                              </div>


                                              <div class="col-md-6">
                                                <label for="preferred-location">Preferred Location to work</label>
                                                <input type="text" class="form-control" id="preferred-location" name="preferred-location" value="<?php echo $value['prefered_location']; ?>" required>
                                                <div id="arealocation_error" class="error"></div>

                                              </div>
                                              <div class="col-md-6">
                                                <label class="form-label" for="experience">Experience</label>
                                                <input type="text" class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>" required>
                                                <!-- <select class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>" required>
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
                                                </select> -->
                                                <div id="areaexp_error" class="error"></div>
                                              </div>

                                              <div class="col-md-6">
                                                <label class="form-label" for="description">Description</label>
                                                <input class="form-control" id="description" name="description" value="<?php echo $value['description']; ?>" rows="3" required>
                                                <div id="areades_error" class="error"></div>
                                              </div>

                                              <div class="col-md-6">
                                                <label class="form-label" for="jobtype">Job Type</label>
                                                <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>" required>
                                                  <option value="parttime" <?php if ($value['job_type'] === 'parttime')
                                                    echo ' selected'; ?>>Part Time</option>
                                                  <option value="fulltime" <?php if ($value['job_type'] === 'fulltime')
                                                    echo ' selected'; ?>>Full Time</option>
                                                </select>
                                                <div id="areajob_error" class="error"></div>
                                              </div>

                                              <div class="col-md-6">
                                                <label class="form-label" for="expected-salary">Expected Salary</label>
                                                <input type="text" class="form-control" id="expected-salary" name="expected-salary" value="<?php echo $value['expected_salary']; ?>" required>
                                                <div id="areasalary_error" class="error"></div>
                                              </div>

                                                <!-- <h4 class="card-title">Your Strength</h4>

                                              <div class="col-md-6">
                                                <label class="form-label" for="skillname">Skill Name</label>
                                                <input type="text" class="form-control" id="skillname" name="skillname" value="<?php echo $value['skillname']; ?>" placeholder="Enter skill name" required>
                                              </div>

                                              <div class="col-md-6">
                                                <label class="form-label" for="experience">Experience</label>
                                                <select class="form-control" name="skillexperience" id="skillexperience" value="<?php echo $value['skillexperience']; ?>" required><br>
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
                                              <div class="col-md-6">
                                                <label class="form-label" for="skillLevel">Skill Level</label>
                                                <select class="form-control" name="skilllevel" id="skilllevel" value="<?php echo $value['skilllevel']; ?>" required>
                                                 <option value="">Select a skill level</option>
                                                  <option value="beginner" <?php if ($value['skilllevel'] === 'beginner')
                                                    echo ' selected'; ?>>Beginner</option>
                                                  <option value="intermediate" <?php if ($value['skilllevel'] === 'intermediate')
                                                    echo ' selected'; ?>>Intermediate</option>
                                                  <option value="advanced" <?php if ($value['skilllevel'] === 'advanced')
                                                    echo ' selected'; ?>>Advanced</option>
                                                </select>
                                              </div>
                                            </div> -->

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                            </div>
                                           
                        <?php
                          }
                            ?>
                            </form>
                        </div>
                    </div>
                </section>     

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
        } elseif ($method == "updateSkill") {
            ?>
               <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Skill Details</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Edit Skill</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Skill</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate  method="post"
                            onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Employee/updateInsertSkill" ?>">

                            <?php
                  if (isset($updateSkill[0]['id'])) {
                    foreach ($updateSkill as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                  ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name">

                              <div class="col-12">
                                <label class="form-label" for="skillname">Skill Name</label>
                                <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name"  value="<?php echo $value['skill']; ?>" required>
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="experience">Experience</label>
                                <input type="text" class="form-control" name="skillexperience" id="skillexperience" value="<?php echo $value['experience']; ?>" required >
                                <!-- <select class="form-control" name="skillexperience" id="skillexperience" required>
                                  <option value="fresher" <?php if ($value['experience'] === 'fresher') echo ' selected'; ?>>Fresher</option>
                                  <option value="0-2" <?php if ($value['experience'] === '0-2') echo ' selected'; ?>>0-2 years</option>
                                  <option value="2-5" <?php if ($value['experience'] === '2-5') echo ' selected'; ?>>2-5 years</option>
                                  <option value="5-10" <?php if ($value['experience'] === '5-10') echo ' selected'; ?>>5-10 years</option>
                                  <option value="10-20" <?php if ($value['experience'] === '10-20') echo ' selected'; ?>>10-20 years</option>
                                  <option value="20-above" <?php if ($value['experience'] === '20-above') echo ' selected'; ?>>20 years above</option>
                                </select> -->
                              </div>

                              <div class="col-md-6">
                                <label class="form-label" for="skillLevel">Skill Level</label>
                                <select class="form-control" name="skilllevel" id="skilllevel" required>
                                  <option value="beginner" <?php if ($value['skill_level'] === 'beginner') echo ' selected'; ?>>Beginner</option>
                              <option value="intermediate" <?php if ($value['skill_level'] === 'intermediate') echo ' selected'; ?>>Intermediate</option>
                              <option value="advanced" <?php if ($value['skill_level'] === 'advanced') echo ' selected'; ?>>Advanced</option>
                                </select>
                              </div>

                            <input type="number" class="form-control"  value="1" name="areasubmit" hidden>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>

                
            <?php
                    }
                  }
        } elseif ($method == "resume") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Resume</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Resume</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Upload Resume</h5>

                            <!-- Multi Columns Form -->
                        <form class="row g-3 needs-validation" novalidate name="resumeform" id="resumeForm" method="post" enctype="multipart/form-data"
                            onsubmit="return validateForm()" action="<?php echo baseUrl . "Employee/registered" ?>">

                         <div class="col-12">
                            <label class="form-label" for="file">Upload Resume</label>
                            <input type="file" class="form-control" name="file" id="idresume" accept="image/png ,image/jpg, image/jpeg, application/pdf" required>
                            <div id="resume_error" class="text-danger"></div>
                        </div> 


                            <!-- <div class="col-12">
                                <label class="form-label" for="file">Uploaded Resume</label>
                                <input type="file" name="oldresume" id="oldresume" value="<?php echo $areaOfIntrestTable['resume_filename']; ?>" >
                                <div class="uploadedfile">
                                <input type="file" class="form-control " id="idresume" name="file" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                <label id="file-input-labelresume" for="idresume">Select File</label>  
                                <a href="<?php echo  $areaOfIntrestTable['resume_filename']; ?>" target="blank" id="existfileresume"  style="margin-top:10px"><?php echo  $areaOfIntrestTable['resume_filename_url']; ?></a>
                                </div>
                            </div> -->

                            <input type="number" class="form-control"  value="1" name="resumesubmit" hidden>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>

                        

                        </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>

                <script>

                    function validateForm() {
                        var ur = document.resumeform.file.value;

                    if (ur == "") {
                        var msg = "Resume must be uploaded";
                        document.getElementById("resume_error").innerHTML = msg;
                        return false;
                    } else {
                        document.getElementById("resume_error").innerHTML = "";
                    }
                       
                    }
                    </script>

            <?php
        } elseif ($method == "thank") {
            ?>
                 <section class="Multi Columns Form">
                    <div class="pagetitle my-2">
                        <h1>Registered Successfully</h1>
                    </div><!-- End Page Title -->
                    <div class="card my-5">
                        <div class="text-center">
                            <img class="p-sm-5 img-fluid" src="<?php echo baseUrl . "assets/employee_thanks.png" ?>" alt="Thanks">
                        </div>
                    </div>
                </section>

            <?php
        }
        ?>

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>ArramJobs</span></strong>. All Rights Reserved
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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