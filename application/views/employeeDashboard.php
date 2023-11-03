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

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
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


        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>End Search Bar -->

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
                             href="<?php echo baseUrl . "seekerController/logout" ?>">
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
                <a class="nav-link " href="<?php echo baseUrl . "seekerController/dash" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo baseUrl . "seekerController/basicDetails" ?>">
                    <i class="bi bi-person"></i>
                    <span>Basic Details</span>
                </a>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link" href="<?php echo baseUrl . "seekerController/educationTable" ?>">
                    <i class="bi bi-bar-chart"></i>
                    <span>Education Details</span>
                </a>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link " href="<?php echo baseUrl . "seekerController/experienceTable" ?>">
                    <i class="bi bi-gem"></i>
                    <span>Experience Details</span>
                </a>
            </li><!-- End Icons Nav -->

            <li class="nav-item">
                <a class="nav-link " href="<?php echo baseUrl . "seekerController/areaOfIntrestTable" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Area of Interest</span>
                </a>
            </li><!-- End Icons Nav -->
          
            <li class="nav-item">
                <a class="nav-link " href="<?php echo baseUrl . "seekerController/resume" ?>">
                    <i class="bi bi-file-earmark"></i>
                    <span>Resume</span>
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
                                                    <p><b>Note : </b>The following documents are required :</p>
                                                    <ul>
                                                        <li>Aadhaar card [front and back page]</li>
                                                        <li>Profile photo</li>
                                                        <li>Educational certificates [10th, 12th, Degree]</li>
                                                        <li>Resume</li>
                                                    </ul> 
                                                    <a class="" href="<?php echo baseUrl . "seekerController/basicdetails" ?>"><button type="button" class="btn btn-success">Create Profile</button></a>
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
                            onsubmit="return group()" action='<?php echo baseUrl . "seekerController/updateBasicDetails" ?>'>
                           
                            <?php
                            foreach ($basicDetails as $key => $value) {
                                ?>

                                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                                        <div class="col-12">
                                        <label for="Name" class="form-label">Name *</label>
                                        <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name" placeholder="Enter your name">
                                        <div id="Name_error" style="color: red;"></div>
                                        </div>

                                        <div class="col-12">
                                        <label for="emailid" class="form-label">Email *</label><br>
                                        <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email" placeholder="Enter your email">
                                        <div id="emailid_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="phonenumber" class="form-label">Mobile Number *</label>
                                        <input type="tel" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>" name="phonenumber" placeholder="Enter your number" value="<?= isset($updateData['phonenumber']) ? $updateData['phonenumber'] : ''; ?>">
                                        <div id="phonenumber_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="dob" class="form-label">Date of Birth *</label>
                                        <input type="date" class="form-control" id="dateofbirth" value="<?php echo $value['dateofbirth']; ?>" name="dateofbirth">
                                        <div id="dob_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="age" class="form-label">Age *</label>
                                        <input type="number" class="form-control" id="age" value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" name="age" placeholder="Enter age">
                                        <div id="age_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="gender" class="form-label">Gender *</label>
                                        <select class="form-control" id="gender" name="gender">
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
                                        <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno" placeholder="Enter door no / building name">
                                        <div id="doorno_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="street address" class="form-label">Street Address *</label>
                                        <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress" placeholder="Enter street address">
                                        <div id="streetaddress_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="landmark" class="form-label">Landmark *</label>
                                        <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark" placeholder="Enter landmark">
                                        <div id="landmark_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="pincode" class="form-label">Pincode *</label>
                                        <input type="number" class="form-control" id="pincode" value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode" placeholder="Enter pincode">
                                        <div id="pincode_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="district">District *</label>
                                        <input type="text" class="form-control" id="district" value="Erode" name="district" readonly>
                                        <div id="district_error" style="color: red;"></div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="maritalstatus" class="form-label">Marital Status *</label>

                                        <select class="form-control" id="maritalstatus" value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>" name="maritalstatus">
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

            <?php
        } elseif ($method == "adminUsers") {
            ?>
                <section class="usertablewithscrool">
                    <div class="pagetitle">
                        <h1>Admin Users List</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">adminUsers</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <h5 class="card-title">User List<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">User Role</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['adminUsers'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                    <td><?php echo $value['name']; ?></td>
                                                    <td><a href="#" class="text-primary"><?php echo $value['mobileNumber']; ?></a></td>
                                                    <td><?php echo $value['email']; ?></td>
                                                    <td><?php echo $value['userRole']; ?></td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>
            <?php
        } elseif ($method == "createEmployer") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Create Employer</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Home</a></li>
                                <li class="breadcrumb-item active">Create Employer</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Employer Registration Form</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/insertEmployer" ?>" method="post">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="inputName5" name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Company Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" name="mobile" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email" required>
                                </div>
                                <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                                <div class="col-12">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St" name="address" required>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress2" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="landmark" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">District</label>
                                    <input type="text" class="form-control" id="inputDistrict" name="district" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select" name="state">
                                        <option selected value="tamil nadu">Tamil Nadu</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputZip" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputPincode" name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputFile" class="form-label">Logo</label>
                                    <input type="file" class="form-control" id="inputFile" name="logo">
                                </div>
                                <h5 class="card-title">Contact Person Details</h5>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="name1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="role" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" name="mobile1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email-ID</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email1" required>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>
            <?php
        } elseif ($method == "unVerifiedEmployers") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Un Verified Employers</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Un Verified Employers</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <?php
                                if (isset($this->data['unVerifiedEmployers'][0]['company_name'])) {
                                    ?>
                                        <h5 class="card-title">Un Verified Employers<span></span></h5>

                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col"> Company Number</th>
                                                    <th scope="col">Contact Person Name</th>
                                                    <th scope="col">Contact Person Role</th>
                                                    <th scope="col">Contact Person Mobile</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['unVerifiedEmployers'] as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                            <td><?php echo $value['company_name']; ?></td>
                                                            <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                            <td><?php echo $value['name']; ?></td>
                                                            <td><?php echo $value['role']; ?></td>
                                                            <td><?php echo $value['mobile_number']; ?></td>
                                                            <td><span class="badge bg-success">Pending</span></td>
                                                            <td><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                        </tr>
                                                    <?php
                                                    $loopcount++;
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
        } elseif ($method == "verifiedEmployers") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>verifiedEmployers</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">verifiedEmployers</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <?php
                                if (isset($this->data['verifiedEmployers'][0]['company_name'])) {
                                    ?>
                                        <h5 class="card-title">Verified Employers<span></span></h5>

                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col"> Company Number</th>
                                                    <th scope="col">Contact Person Name</th>
                                                    <th scope="col">Contact Person Role</th>
                                                    <th scope="col">Contact Person Mobile</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['verifiedEmployers'] as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                            <td><?php echo $value['company_name']; ?></td>
                                                            <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                            <td><?php echo $value['name']; ?></td>
                                                            <td><?php echo $value['role']; ?></td>
                                                            <td><?php echo $value['mobile_number']; ?></td>
                                                            <td><span class="badge bg-success">Approved</span></td>
                                                            <td><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                        </tr>
                                                    <?php
                                                    $loopcount++;
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
        } elseif ($method == 'manageEmployer') {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Employer Details</h1>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Manage Employer Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/verifyEmployer" ?>" method="post">
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="inputName5" value="<?php echo $value['company_name'] ?>" readonly name="name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNumber5" class="form-label">Company Number</label>
                                            <input type="number" class="form-control" id="inputNumber5" name="mobile" value="<?php echo $value['company_mobile_number'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Company Email</label>
                                            <input type="email" class="form-control" id="inputEmail5" name="email" value="<?php echo $value['company_email'] ?>" readonly required>
                                        </div>
                                        <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                                        <div class="col-12">
                                            <label for="inputAddress5" class="form-label">Street Address</label>
                                            <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St" name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Landmark</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="landmark" value="<?php echo $value['Landmark'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $value['City'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">District</label>
                                            <input type="text" class="form-control" id="inputDistrict" name="district" value="<?php echo $value['district'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select" name="state">
                                                <option selected value="tamil nadu">Tamil Nadu</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Pincode</label>
                                            <input type="text" class="form-control" id="inputPincode" value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                        </div>
                                        <h5 class="card-title">Contact Person Details</h5>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['name'] ?>" readonly name="name1" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['role'] ?>" readonlyname="role" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNumber5" class="form-label">Mobile Number</label>
                                            <input type="number" class="form-control" id="inputNumber5" value="<?php echo $value['mobile_number'] ?>" readonlyname="mobile1" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Email-ID</label>
                                            <input type="email" class="form-control" id="inputEmail5" value="<?php echo $value['email'] ?>" readonly name="email1" required>
                                        </div>
                                        <h5 class="card-title">Employer Verification Status</h5>
                                        <?php
                                        if (isset($this->data['manageEmployer'][0]['id'])) {
                                            ?>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Verification Status</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios1" value="0" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '0') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Verification Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios2" value="1" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '1') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Verification success
                                                            </label>
                                                        </div>
                                                        <!-- <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '2') {
                                                    echo 'checked';
                                                } ?>>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div> -->
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <h5 class="card-title">Send Employer Delete Request</h5>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Delete Request Status</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteRequest" id="" value="0" <?php if ($this->data['manageEmployer'][0]['deleteRequest'] == '0') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Request Not Send
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteRequest" id="" value="1" <?php if ($this->data['manageEmployer'][0]['deleteRequest'] == '1') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Request Send
                                                            </label>
                                                        </div>
                                                        <!-- <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '2') {
                                                    echo 'checked';
                                                } ?>>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div> -->
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteRequestRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <input class="form-check-input" type="text" name="id" id="" value="<?php echo $this->data['manageEmployer'][0]['id'] ?>" hidden>
                                            <?php
                                        } else {
                                            ?>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-2 pt-0">Verification Status</legend>
                                                    <div class="col-sm-10">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios1" value="0">
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Verification Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios2" value="1">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Verification success
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2">
                                                            <label class="form-check-label" for="gridRadios3">
                                                                Rejected
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Delete Request Status</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteRequest" id="" value="0">
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Request Not Send
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteRequest" id="" value="1">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Request Send
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteRequestRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                        <?php }
                                        ?>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    <?php
                                }
                                ?>
                            </form><!-- End Multi Columns Form -->

                        </div>
                    </div>
                </section>
            <?php
        } elseif ($method == "createEmployees") {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>createEmployees</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Create Employees</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Create New Employee</h5>
                            </div>

                            <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/employeeRegistration" ?>" method="post">
                                <div class="col-12">
                                    <label for="yourName" class="form-label">Employee Name</label>
                                    <input type="text" name="name" class="form-control" id="yourName" required>
                                    <div class="invalid-feedback">Please, enter your name!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Employee Email</label>
                                    <input type="email" name="email" class="form-control" id="yourEmail" required>
                                    <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourEmail" class="form-label">Employee Mobile</label>
                                    <input type="number" name="phonenumber" class="form-control" id="yourEmail" required>
                                    <div class="invalid-feedback">Please, enter mobile number!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                        <div class="invalid-feedback">You must agree before submitting.</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Create Account</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>
            <?php
        } elseif ($method == "unVerifiedEmployees") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Un Verified Employees</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Un Verified Employees</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <?php
                                if (isset($this->data['unVerifiedEmployees'][0]['name'])) {
                                    ?>
                                        <h5 class="card-title">Un Verified Employees<span></span></h5>

                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">D.O.B</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['unVerifiedEmployees'] as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                            <td><?php echo $value['name']; ?></td>
                                                            <td><?php echo $value['phonenumber']; ?></td>
                                                            <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                            <td><?php echo $value['dateofbirth']; ?></td>
                                                            <td><span class="badge bg-primary">Verification Pending</span></td>
                                                            <td><a href="<?php echo baseUrl . "admin/manageEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                        </tr>
                                                    <?php
                                                    $loopcount++;
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    <?php
                                } else {
                                    ?>
                                        <h5 class="card-title">No Records Found</h5>
                                    <?php
                                }
                                ?>
                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>
            <?php
        } elseif ($method == "verifiedEmployees") {
            ?>
                <section class="usertablewithscrool">
                    <div class="pagetitle">
                        <h1>VerifiedEmployees</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">VerifiedEmployees</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <!-- Recent Sales -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <?php
                                if (isset($this->data['verifiedEmployees'][0]['name'])) {
                                    ?>
                                        <h5 class="card-title">Verified Employees<span></span></h5>

                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">D.O.B</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['verifiedEmployees'] as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                            <td><?php echo $value['name']; ?></td>
                                                            <td><?php echo $value['phonenumber']; ?></td>
                                                            <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                            <td><?php echo $value['dateofbirth']; ?></td>
                                                            <td><span class="badge bg-success">Verification success</span></td>
                                                            <td><a href="<?php echo baseUrl . "admin/manageEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                        </tr>
                                                    <?php
                                                    $loopcount++;
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
        } elseif ($method == "manageEmployee") {
            ?>
                <section>
                    <!-- Default Card -->
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img class="h-100" src="<?php echo baseUrl . "assets/profilephoto.png" ?>" class="card-img-top" alt="...">
                                    </div>
                                    <div class="col">
                                        <h2 class="">Employee Resume</h2>
                                        <h5 class="card-title">Name : <?php echo $this->data['basicDetails'][0]['name']; ?></h5>
                                    </div>
                                    <!-- <div class="col">
                                    Column
                                </div> -->
                                </div>
                            </div>
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Educational Qualification</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Educational Qualification</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Institution Name</th>
                                                <th scope="col">Percentage</th>
                                                <th scope="col">Year of Passed Out</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['education'] as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $loopcount; ?></th>
                                                        <td><?php echo $value['educational_qualification'] ?></td>
                                                        <td><?php echo $value['department'] ?></td>
                                                        <td><?php echo $value['school_college_name'] ?></td>
                                                        <td><?php echo $value['percentage'] ?></td>
                                                        <td><?php echo $value['yearOfPassing'] ?></td>
                                                    </tr>
                                                <?php
                                                $loopcount++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Skills</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Skill</th>
                                                <th scope="col">Experience</th>
                                                <th scope="col">Skill Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['areaOfInterest'] as $skey => $svalue) {
                                                ?>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td><?php echo $svalue['skillname'] ?></td>
                                                        <td><?php echo $svalue['skillexperience'] ?></td>
                                                        <td><?php echo $svalue['skilllevel'] ?></td>
                                                    </tr>
                                                <?php
                                                $loopcount++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Area of Interest</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Job Category</th>
                                                <th scope="col">Job Sub Category</th>
                                                <th scope="col">Prefered Location</th>
                                                <th scope="col">Experience</th>
                                                <th scope="col">Job Type</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Expected Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $loopcount; ?></th>
                                                        <td><?php echo $avalue['other_interst_category'] ?> </td>
                                                        <td><?php echo $avalue['other_sub_interst_category'] ?></td>
                                                        <td><?php echo $avalue['prefered_location'] ?></td>
                                                        <td><?php echo $avalue['experience'] ?></td>
                                                        <td><?php echo $avalue['job_type'] ?></td>
                                                        <td><?php echo $avalue['description'] ?></td>
                                                        <td> <?php echo $avalue['expected_salary'] ?></td>
                                                    </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                            <div class="card recent-sales overflow-auto">
                                <div class="card-body">
                                    <h5 class="card-title">Experience Details</h5>

                                    <!-- Table with stripped rows -->
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Job Category</th>
                                                <th scope="col">Job Sub Category</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Job Role</th>
                                                <th scope="col">Previous Employer Name</th>
                                                <th scope="col">Previous Employer Mobile</th>
                                                <th scope="col">Previous Employer Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['experienceDetails'] as $ikey => $ivalue) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $loopcount; ?> </th>
                                                        <td><?php echo $ivalue['other_category'] ?></td>
                                                        <td><?php echo $ivalue['other_sub_category'] ?></td>
                                                        <td><?php echo $ivalue['company_name'] ?></td>
                                                        <td><?php echo $ivalue['job_role'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_name'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_mobile'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_email'] ?></td>
                                                    </tr>
                                                <?php
                                                $loopcount++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

                                </div>
                            </div>
                            <form action="<?php echo baseUrl . "admin/verifyEmployee" ?>" method="post">
                                <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $this->data['basicDetails'][0]['id'] ?>" hidden>
                                <fieldset class="row mb-3">
                                    <legend class="col-form-label col-sm-2 pt-0">Verification Status</legend>
                                    <?php if (isset($this->data['basicDetails'][0]['id'])) {
                                        ?>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios1" value="0" <?php if ($this->data['basicDetails'][0]['verificationStatus'] == '0') {
                                                        echo 'checked';
                                                    } ?>>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Verification Pending
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios2" value="1" <?php if ($this->data['basicDetails'][0]['verificationStatus'] == '1') {
                                                        echo 'checked';
                                                    } ?>>
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Verification success
                                                    </label>
                                                </div>
                                                <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2" <?php if ($this->data['basicDetails'][0]['verificationStatus'] == '2') {
                                                echo 'checked';
                                            } ?>>
                                            <label class="form-check-label" for="gridRadios3">
                                                Rejected
                                            </label>
                                        </div> -->
                                            </div>
                                        <?php
                                    } else {
                                        ?>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios1" value="0">
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Verification Pending
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios2" value="1">
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Verification success
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2">
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Rejected
                                                    </label>
                                                </div>
                                            </div>
                                    <?php }
                                    ?>
                                </fieldset>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;"></textarea>
                                        <label for="floatingTextarea">Remarks</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">submit</button>
                            </form>
                        </div>
                    </div><!-- End Default Card -->
                </section>
            <?php
        } elseif ($method == 'addNewAdminApprovel') {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>verifiedEmployers</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">verifiedEmployers</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->

                            <div class="card-body">
                                <h5 class="card-title">Verified Employers<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col"> Company Number</th>
                                            <th scope="col">Contact Person Name</th>
                                            <th scope="col">Contact Person Role</th>
                                            <th scope="col">Contact Person Mobile</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['verifiedEmployers'] as $key => $value) {
                                            ?>
                                                <tr>
                                                    <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                    <td><?php echo $value['company_name']; ?></td>
                                                    <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                    <td><?php echo $value['name']; ?></td>
                                                    <td><?php echo $value['role']; ?></td>
                                                    <td><?php echo $value['mobile_number']; ?></td>
                                                    <td><span class="badge bg-success">Approved</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div><!-- End Recent Sales -->
                </section>
            <?php
        } elseif ($method == 'addNewEmployerApprovel') {
            $addNewApprovel = $this->data['addNewEmployerApprovel']['response'];
            $deleteApprovel = $this->data['deleteEmployerApprovel']['response'];
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Employer Approvel Request</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Employer Approvel Request</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                            <!-- <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div> -->
                            <div class="card-body">
                                <?php if ($this->data['addNewEmployerApprovel']['totalRows'] >= 1 || $this->data['deleteEmployerApprovel']['totalRows'] >= 1) {
                                    ?>
                                        <h5 class="card-title">Employer Add / Delete Request<span></span></h5>

                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col"> Company Number</th>
                                                    <th scope="col">Contact Person Name</th>
                                                    <th scope="col">Contact Person Role</th>
                                                    <th scope="col">Contact Person Mobile</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                if ($this->data['addNewEmployerApprovel']['totalRows'] >= 1) {
                                                    ?>
                                                        <?php
                                                        $loopcount = 1;
                                                        foreach ($addNewApprovel as $key => $value) {
                                                            ?>
                                                                <tr>
                                                                    <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                                    <td><?php echo $value['company_name']; ?></td>
                                                                    <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                                    <td><?php echo $value['name']; ?></td>
                                                                    <td><?php echo $value['role']; ?></td>
                                                                    <td><?php echo $value['mobile_number']; ?></td>
                                                                    <td><span class="badge bg-success">Add Request</span></td>
                                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                                </tr>
                                                        <?php
                                                        $loopcount++;
                                                        }
                                                }
                                                ?>
                                                <?php
                                                if ($this->data['deleteEmployerApprovel']['totalRows'] >= 1) {
                                                    foreach ($deleteApprovel as $dkey => $dvalue) {
                                                        ?>
                                                                <tr>
                                                                    <td><a href="#"><?php echo $loopcount; ?></a></td>
                                                                    <td><?php echo $dvalue['company_name']; ?></td>
                                                                    <td><a href="#" class="text-primary"><?php echo $dvalue['company_mobile_number']; ?></a></td>
                                                                    <td><?php echo $dvalue['name']; ?></td>
                                                                    <td><?php echo $dvalue['role']; ?></td>
                                                                    <td><?php echo $dvalue['mobile_number']; ?></td>
                                                                    <td><span class="badge bg-danger">Delete Request</span></td>
                                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $dvalue['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                                </tr>
                                                        <?php
                                                    }
                                                    $loopcount++;
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
        } elseif ($method == 'employerApprovel') {
            ?>
                <section class="Multi Columns Form">
                    <div class="pagetitle">
                        <h1>Employer Details</h1>
                    </div><!-- End Page Title -->
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Approve Employer Details</h5>

                            <!-- Multi Columns Form -->
                            <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/employerApprovelStatus" ?>" method="post">
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="inputName5" value="<?php echo $value['company_name'] ?>" readonly name="name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNumber5" class="form-label">Company Number</label>+
                                            <input type="number" class="form-control" id="inputNumber5" name="mobile" value="<?php echo $value['company_mobile_number'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Company Email</label>
                                            <input type="email" class="form-control" id="inputEmail5" name="email" value="<?php echo $value['company_email'] ?>" readonly required>
                                        </div>
                                        <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                                        <div class="col-12">
                                            <label for="inputAddress5" class="form-label">Street Address</label>
                                            <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St" name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAddress2" class="form-label">Landmark</label>
                                            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="landmark" value="<?php echo $value['Landmark'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $value['City'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">District</label>
                                            <input type="text" class="form-control" id="inputDistrict" name="district" value="<?php echo $value['district'] ?>" readonly required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select" name="state">
                                                <option selected value="tamil nadu">Tamil Nadu</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputZip" class="form-label">Pincode</label>
                                            <input type="text" class="form-control" id="inputPincode" value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                        </div>
                                        <h5 class="card-title">Contact Person Details</h5>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['name'] ?>" readonly name="name1" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Role</label>
                                            <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['role'] ?>" readonlyname="role" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNumber5" class="form-label">Mobile Number</label>
                                            <input type="number" class="form-control" id="inputNumber5" value="<?php echo $value['mobile_number'] ?>" readonlyname="mobile1" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Email-ID</label>
                                            <input type="email" class="form-control" id="inputEmail5" value="<?php echo $value['email'] ?>" readonly name="email1" required>
                                        </div>
                                        <h5 class="card-title">Add Employer Approvel</h5>
                                        <?php
                                        if (isset($this->data['manageEmployer'][0]['id'])) {
                                            ?>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Add Employer Approvel</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1" value="0" <?php if ($this->data['manageEmployer'][0]['addNewApprovel'] == '0') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Approvel Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2" value="1" <?php if ($this->data['manageEmployer'][0]['addNewApprovel'] == '1') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Approvel success
                                                            </label>
                                                        </div>
                                                        <!-- <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '2') {
                                                    echo 'checked';
                                                } ?>>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div> -->
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="addNewApprovelRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Delete Employer Approvel</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1" value="0" <?php if ($this->data['manageEmployer'][0]['deleteApprovel'] == '0') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Approvel Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2" value="1" <?php if ($this->data['manageEmployer'][0]['deleteApprovel'] == '1') {
                                                                echo 'checked';
                                                            } ?>>
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Approvel success
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteApprovelRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <input class="form-check-input" type="text" name="id" id="" value="<?php echo $this->data['manageEmployer'][0]['id'] ?>" hidden>
                                            <?php
                                        } else {
                                            ?>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Add Employer Approvel</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1" value="0">
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Approvel Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2" value="1">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Approvel Success
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="addNewApprovelRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                                <fieldset class="row mb-3">
                                                    <legend class="col-form-label col-sm-4 pt-0">Delete Employer Approvel</legend>
                                                    <div class="col-sm-8">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1" value="0">
                                                            <label class="form-check-label" for="gridRadios1">
                                                                Approvel Pending
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2" value="1">
                                                            <label class="form-check-label" for="gridRadios2">
                                                                Approvel success
                                                            </label>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteApprovelRemarks" style="height: 100px;"></textarea>
                                                        <label for="floatingTextarea">Remarks</label>
                                                    </div>
                                                </div>
                                        <?php }
                                        ?>
                                        <!-- <div class="col-md-6">
                                <label>Admin Verification Remarks</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="addNewApprovelRemarks" style="height: 100px;"></textarea>
                                </div>
                            </div> -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    <?php
                                }
                                ?>
                            </form><!-- End Multi Columns Form -->

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
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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