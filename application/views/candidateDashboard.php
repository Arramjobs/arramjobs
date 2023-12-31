<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Candidate Page</title>
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

   <style>
        /* To hide arrows in number field */
      #pincode::-webkit-outer-spin-button,
      #pincode::-webkit-inner-spin-button ,
      #year_passed::-webkit-outer-spin-button,
      #year_passed::-webkit-inner-spin-button,
      #percentage::-webkit-outer-spin-button,
      #percentage::-webkit-inner-spin-button,
      #phonenumber::-webkit-outer-spin-button,
      #phonenumber::-webkit-inner-spin-button,
      #number::-webkit-outer-spin-button,
      #number::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Education Autocomplete */
    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
    }

    .autocomplete-items div:hover {
      background-color: #ddd;
    }

    .autocomplete-active {
      background-color: #007BFF;
      color: white;
    }

    /* Sidebar changes */
    
.sidebar ul li a:hover {
    background: #4154f1;
    color: #fff;
    transition: .3s ease;
    /* border-top-left-radius: 20px;
    border-bottom-left-radius: 20px; */
}

.sidebar ul li.active {
    background: #fff;
    color: #4154f1;
    padding-top: 0.4rem;
    padding-bottom: 0.4rem;
}

.sidebar ul li.active a {
    color: #fff;
    background: #4154f1;
       
}

.sidebar ul .nav-item.active,
.sidebar ul .nav-item.active i {
    background: #fff;
    color: #4154f1;
    padding-top: 0.1rem;
    padding-bottom: 0.1rem;
    border-radius: 50%;
}

.sidebar ul .nav-item.active i {   
    color: #fff;
    background: #4154f1;   
    border-radius: 50%; 
}

.sidebar ul .nav-item:hover  {
    color: #fff;
    border-radius: 50%;
}

  .sidebar-nav .nav-link:hover {
   color: #fff;
  transition: 0.3;
  background: #4154f1;
  border-radius: 4px;
}

.sidebar-nav .nav-link:hover i {
    color: #fff;
}

    /* End of sidebar changes */

/* .footer {
  position: absolute; 
     bottom: 0;
   }
      */
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

                <li class="nav-item dropdown pe-3 d-flex">

                <?php
                if (($basicDetails[0]['bdsubmited'] == '1')) {
                  foreach ($basicDetails as $key => $value) {
                    ?>
                                          <a href="<?php echo $value['photo'] ?>"><img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>" alt="profilep"  width="30" height="30" class="rounded-circle"></a>
                              <?php }
                } else {
                  ?>
                            <img  src="<?php echo baseUrl . "assets/profilephoto.png" ?>" width="30" height="30" alt="Profile" class="rounded-circle">
               <?php }
                ?>
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                              
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['seekerName']; ?></span>
                        <span class="d-block d-md-none dropdown-toggle ps-2"></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['seekerName']; ?></h6>
                            <p class="pt-1"><?php echo $_SESSION['employeeidd']; ?></p>
                            <span>Candidate</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo baseUrl . "Candidate/myProfile" ?>">
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
                             href="<?php echo baseUrl . "Candidate/logout" ?>">
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

            <li class="nav-item" id="dash">
                <a class="nav-link " href="<?php echo baseUrl . "Candidate/dash" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item" id="basicdetails">
                <a class="nav-link  d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/basicDetails" ?>">
                    <div><i class="bi bi-person"></i>
                    <span>Basic Details</span></div>
                    <?php
                    if (isset($basicDetails)) {
                      if ($basicDetails[0]['bdsubmited'] === "1") {
                        ?>
                                 <!-- <div class="border border-success border-5 rounded-circle" style="width: 15px; height:15px;"></div> -->
                                 <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile" class="rounded-circle">
                     <?php } else { ?>
                                 <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
                            <?php }
                    } ?>
                </a>
            </li><!-- End Tables Nav -->

            <li class="nav-item" id="educations">
                <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/educationTable" ?>">
                    <div><i class="bi bi-bar-chart"></i>
                    <span>Education Details</span></div>
                    <?php
                    if (isset($basicDetails)) {
                      if ($basicDetails[0]['edusubmited'] === "1") {
                        ?>
                                 <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile" class="rounded-circle">
                                 <?php
                      } else {
                        ?>
                                 <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
                               <?php
                      }
                    }
                    ?>
                </a>
            </li><!-- End Charts Nav -->

            <li class="nav-item" id="experiences">
                <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/experienceTable" ?>">
                    <div><i class="bi bi-gem"></i>
                    <span>Experience Details</span></div>
                    <?php
                    if (isset($basicDetails)) {
                      if ($basicDetails[0]['expsubmited'] === "1") {

                        // if (isset($experienceTable['totalRows']) > 0) {
                        ?>
                                 <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile" class="rounded-circle">
                                 <?php
                      } else {
                        ?>
                                 <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
                               <?php
                      }
                    }
                    ?>
                </a>
            </li><!-- End Icons Nav -->

            <li class="nav-item" id="areaofinterest">
            <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
            <div><i class="bi bi-box-arrow-in-right"></i>
                    <span>Area of Job Interest</span></div>
                    <?php
                    if (isset($basicDetails)) {
                      if ($basicDetails[0]['areasubmited'] === "1") {
                        ?>
                                 <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile" class="rounded-circle">
                                 <?php
                      } else {
                        ?>
                                 <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
                               <?php
                      }
                    }
                    ?>
                </a>
            </li><!-- End Icons Nav -->
          
            <li class="nav-item" id="resumes">
            <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/resume" ?>">
            <div><i class="bi bi-file-earmark"></i>
                    <span>Resume</span></div>
                    <?php
                    if (isset($basicDetails)) {
                      if ($basicDetails[0]['resumesubmited'] === "1") {
                        ?>
                                 <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile" class="rounded-circle">
                                 <?php
                      } else {
                        ?>
                                 <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
                               <?php
                      }
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
                       <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('dash').classList.add('active');
                        </script> 

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

                                     <h5 class="card-title ps-3">Welcome To Candidate Dashboard</h5>
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

                           <a class="my-5 " href="<?php echo baseUrl . "Candidate/basicdetails" ?>"><button type="button" class="btn btn-success">Create Profile</button></a>
            
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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('basicdetails').classList.add('active');
                        </script>
                        <section class="Multi Columns Form">
                            <div class="pagetitle">
                                <h1>Candidate Details</h1>
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
                                    onsubmit="return group()" action='<?php echo baseUrl . "Candidate/updateBasicDetails" ?>'>
                           
                                    <?php
                                    foreach ($basicDetails as $key => $value) {
                                      ?>

                                             <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>"
                                              name="id" placeholder="Enter your name" onkeypress="return allowOnltLetters(event,this)">

                                              <div class="col-12">
                                              <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>"
                                               name="name" placeholder="Enter your name" required>
                                              <div id="Name_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-12">
                                              <label for="emailid" class="form-label">Email <span class="text-danger">*</span></label><br>
                                              <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" 
                                              name="email" placeholder="Enter your email" required>
                                              <div id="emailid_error" style="color: red;"></div>
                                              </div>
                                              <!-- <div class="col-md-6">
                                            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" value="<?php echo $value['password']; ?>" name="password"
                                                    placeholder="Enter password" required>
                                                  <button type="button" class="btn btn-outline-secondary"
                                                    onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                  </button>
                                                </div>
                                                <div id="password_error" style="color: red;"></div>
                                              </div>
                                          <div class="text-secondary" style="font-size:12px;display:none" id="passwordmessage">Passwords must contain atleast 1 uppercase, 1 lowercase, 1 special character, 1 number and a minimum of 8 characters.</div> -->
                                              <div class="col-md-6">
                                              <label for="phonenumber" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                              <input type="number" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>" 
                                              name="phonenumber" placeholder="Enter your number" required>
                                              <div id="phonenumber_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                              <input type="date" class="form-control" id="dateofbirth" value="<?php echo $value['dateofbirth']; ?>"
                                               name="dateofbirth" required>
                                              <div id="dob_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                                              <input type="number" class="form-control" id="age" value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" 
                                              name="age" placeholder="Enter age" readonly required>
                                              <div id="age_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
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
                                              <label for="Door no" class="form-label">Door no / Building Name <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" id="doorno" value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" 
                                              name="doorno" placeholder="Enter door no / building name" required>
                                              <div id="doorno_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="street address" class="form-label">Street Address <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" id="streetaddress" value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" 
                                              name="streetaddress" placeholder="Enter street address" required>
                                              <div id="streetaddress_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="landmark" class="form-label">Landmark <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" id="landmark" value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" 
                                              name="landmark" placeholder="Enter landmark" required>
                                              <div id="landmark_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="pincode" class="form-label">Pincode <span class="text-danger">*</span></label>
                                              <input type="number" class="form-control" id="pincode" value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" 
                                              name="pincode" placeholder="Enter pincode" required>
                                              <div id="pincode_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="district">District <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control" id="district" value="Erode" name="district" readonly>
                                              <div id="district_error" style="color: red;"></div>
                                              </div>
                                              <div class="col-md-6">
                                              <label for="maritalstatus" class="form-label">Marital Status <span class="text-danger">*</span></label>

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
                                              <label for="aadharfrontphoto" class="form-label">Aadhaar Front Photo <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control"  name="oldaadharfront" value="<?php echo $value['aadharfront_filename']; ?>" hidden>
                                                <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto"
                                            accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden >
                                              <div class="uploadedfile" style="display:flex;">
                                            <label id="file-input-labelaf" for="aadharfrontphoto" class="form-control" style="cursor:pointer">Choose File</label>
                                            <a href="<?php echo $value['aadhar_front']; ?>" class="filelink ps-2 pt-1" target="blank" id="existfileaf">
                                              <?php echo $value['aadharfront_filename']; ?>
                                            </a> </div>
                                                <div id="aadharfrontphoto_error" style="color: red;"></div>
                                               </div>

                                               <div class="col-md-6">
                                               <label for="aadharbackphoto" class="form-label">Aadhaar Back Photo <span class="text-danger">*</span></label>
                                               <input type="text" class="form-control"  name="oldaadharback" value="<?php echo $value['aadharback_filename']; ?>" hidden>
                                              <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden >
                                              <div class="uploadedfile" style="display:flex;">
                                              <label id="file-input-labelab" for="aadharbackphoto" class="form-control"  style="cursor:pointer">Choose File</label>  
                                              <a href="<?php echo $value['aadhar_back']; ?>" class="filelink ps-2 pt-1" target="blank" id="existfileab" ><?php echo $value['aadharback_filename']; ?></a>
                                              </div>
                                              <div id="aadharbackphoto_error" style="color: red;"></div>
                                              </div>

                                              <div class="col-md-6">
                                              <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
                                              <input type="text" class="form-control"  name="oldprofilephoto" value="<?php echo $value['photo_filename']; ?>" hidden>
                                              <input type="file" class="form-control" id="photo" name="photo" accept="image/png ,image/jpg, image/jpeg" hidden>
                                              <div class="uploadedfile" style="display:flex;">
                                              <label id="file-input-labelpp" for="photo" class="form-control" style="cursor:pointer">Choose File</label>  
                                              <a href="<?php echo $value['photo']; ?>" class="filelink ps-2 pt-1" target="blank" id="existfilepp" ><?php echo $value['photo_filename']; ?></a>
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
                              document.getElementById("password").onfocus = function() {
                              document.getElementById("passwordmessage").style.display = "block";
                              }

                              document.getElementById("password").onblur = function() {
                              document.getElementById("passwordmessage").style.display = "none";
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
                    document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('dateofbirth').addEventListener('input', function () {
                        var dob = new Date(this.value);

                        var age = calculateAge(dob);
                        document.getElementById('age').value = age;
                    });
                });

                function calculateAge(dob) {
                    var today = new Date();
                    var birthDate = new Date(dob);

                    var age = today.getFullYear() - birthDate.getFullYear();
                    var monthDiff = today.getMonth() - birthDate.getMonth();
                    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
                        age--;
                    }
                    return age;
                }
            </script>

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
                  var namesms2 = "Aadhaar Back Photo must be uploaded";
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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('educations').classList.add('active');
                        </script>
                        <section class="usertable " >
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
                           
                                    <div class="card-body pt-4">
           
                       <!-- <h5 class="card-title">Education Table<span></span></h5> -->
                       <div class="d-flex justify-content-between">
                       <!-- <a href="<?php echo baseUrl . "Candidate/addEducationForm" ?>">
              <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->
            
                       <a  href="#addeduform"><button  onclick="addeduformfunction()" type="button" class="btn btn-success mb-4">+ Add Education</button></a>
                      <div>
                      <a class="" href="<?php echo baseUrl . "Candidate/basicdetails" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i> </button></a>
                      <a class="" href="<?php echo baseUrl . "Candidate/experiencetable" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                      </div>
                                     </div>
                                     <?php
                                     if (isset($educationTable[0]['id'])) {
                                       $count = 1;
                                       ?>
                                              <table class="table overflow-auto " id="myTable">
                                               <thead>
                                            <tr>
                                              <th scope="col"></th>
                                  <th scope="col">S.No</th>
                                  <th scope="col">Educational Qualification</th>
                                  <th scope="col">Specialiization</th>
                                  <th scope="col">Mode of Education</th>
                                  <th scope="col">Institute</th>
                                  <th scope="col">Year of Passing</th>
                                  <th scope="col">Percentage</th>
                                  <th scope="col">Certificate</th>
                                  <th scope="col">Action</th>
                                                </tr>
                                                   </thead>
                                                   <tbody>
                                                      <?php
                                                      if (isset($educationTable[0]['id'])) {
                                                        foreach ($educationTable as $key => $value) {
                                                          $seekerId = $_SESSION['seekerId'];
                                                          ?>
                                   
                                                             <tr>
                                                            <td> <form method="post" action="<?php echo baseUrl . 'Candidate/delete_selected'; ?>" id="form_<?= $value['id']; ?>">
                                                                <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                                              
                                                            </td>

                                                              <td><a><?php echo $count++; ?>.</a></td>
                                                             <td><?php echo $value['educational_qualification'] ?></td>
                                                             <!-- <td><?php echo $value['department'] ?></td> -->
                                                          <!-- Department -->
                                                             <?php
                                                             if (
                                                               $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                                               $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                                               $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                                               $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                                               $value['educational_qualification'] === "B.Pharm" || $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                                                               $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                                               $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                                               $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                                               $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" ||
                                                               $value['educational_qualification'] === "LLM" || $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                                                               $value['educational_qualification'] == "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                                               $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                                                             ) {
                                                               ?>
                                                               <td><?php echo $value['department'] ?></td>                                         
                                                               <?php } else { ?>
                                                                <td>NA</a></td>
                                                              <?php } ?>
                                                             <!-- <td><?php echo $value['educationmode'] ?></td> -->
                                                            <!-- Mode of education -->
                                                            <?php
                                                            if (
                                                              $value['educationmode'] == "Corres"
                                                            ) {
                                                              ?>
                                                                    <td>Correspondence</td>                                                                           
                                                             <?php  } else { ?>
                                                                     <td>Regular</td>
                                                           <?php }  ?> 
                                                            <td><?php echo $value['school_college_name'] ?></td>
                                                             <td><?php echo $value['yearOfPassing'] ?></td>
                                                       <!-- Percentage -->
                                                             <!-- <td><?php echo $value['percentage'] ?></td> -->
                                                             <?php
                                                             if (
                                                               $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                                               $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                                               $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                                               $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                                               $value['educational_qualification'] === "B.Pharm" ||
                                                               $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                                                               $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                                               $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                                               $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                                               $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                                                               $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                                                               $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                                               $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                                                               $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "12th/HSC"
                                                             ) {
                                                               ?>
                                                                        <td><?php echo $value['percentage'] ?></td>                                         
                                                               <?php
                                                             } else {
                                                               ?>
                                                                          <td>NA</a></td>
                                                                             <?php
                                                             }
                                                             ?>
                                                              <!-- Certificate -->
                                                               <?php
                                                               if ($value['educational_qualification'] == '10th/SSLC') {
                                                                 ?>
                                                                       <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                                                       <?php
                                                               } else if ($value['educational_qualification'] == '12th/HSC') {
                                                                 ?>
                                                                        <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                                                               ) {
                                                                 ?>
                                                                      <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank"><?php echo $value['diploma_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                                                 $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                                                 $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" || $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.Pharm"
                                                               ) {
                                                                 ?>
                                                                          <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                                                 $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                                                 $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                                                 $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" ||
                                                                 $value['educational_qualification'] === "LLM" || $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                                                               ) {
                                                                 ?>
                                                                  <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                                                 $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                                                               ) {
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
                                              <a class="" href="<?php echo baseUrl . "Candidate/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                              <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                                               </td>
                                                              </tr>
                                                <?php
                                 }
                               }
                               ?>
                                               </tbody>
                                              </table>

                                        
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
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

                        <div class="card" id="addeduform" style="display:none">
                                <div class="card-body">
                                    <h5 class="card-title">Add Education Details</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3" autocomplete="off" novalidate name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" 
                                    action="<?php echo baseUrl . "Candidate/insertEducationForm" ?>">

                                      <div class="col-12 autocomplete">
                      <label for="qualification" class="form-label">Educational Qualification</label>
                      <input id="qualification" class="form-control" type="text" name="qualification" onchange="toggleFields()"  placeholder="Enter qualification">
                      <div id="qualification_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="department-group" style="display: none;">
                      <label for="department" class="form-label">Specialization</label>
                      <input type="text" class="form-control" id="department" name="department" placeholder="Enter specialization">
                      <div id="department_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="course-group" style="display: none;">
                       <label for="educationmode" class="form-label" >Mode of Education</label>
                       <select class="form-control" id="educationmode" name="educationmode" required>
                                      <option value="">Select your mode of education </option>
                                      <option value="Regular" >Regular course</option>
                                      <option value="Corres" >Correspondence course</option>
                                      </select>
                       <div id="course_error" class="text-danger"></div>
                       </div>

                                      <div class="col-md-6" id="school-group" style="display: none;">
                      <label for="school" class="form-label">Institute</label>
                      <input type="text" class="form-control" id="school" name="school" placeholder="Enter institute name">
                      <div id="school_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="percentage-group" style="display: none;">
                      <label for="percentage" class="form-label">Percentage</label>
                      <input type="number" class="form-control" id="percentage" id="school" name="percentage" placeholder="Enter percentage">
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
                      <label id="additionalFieldLabeldip" for="certificate_dip" class="form-label">Diploma Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                      <div id="certificate_dip_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                      <label id="additionalFieldLabelug" for="certificate_ug" class="form-label">UG Degree Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                      <div id="certificate_ug_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                      <label id="additionalFieldLabelpg" for="certificate_pg" class="form-label">PG Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                      <div id="certificate_pg_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                      <label id="additionalFieldLabeldoc" for="certificate_doctorate" class="form-label">Doctorate Certificate Upload</label>
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
                
                                <script>
                       function autocomplete(inp, arr) {
                        var currentFocus;

                        inp.addEventListener("input", function(e) {
                            var a, b, i, val = this.value;
                            closeAllLists();
                            if (!val) { return false;}
                            currentFocus = -1;
                            a = document.createElement("DIV");
                            a.setAttribute("id", this.id + "autocomplete-list");
                            a.setAttribute("class", "autocomplete-items");
                            this.parentNode.appendChild(a);
                            for (i = 0; i < arr.length; i++) {
                                if (arr[i].toUpperCase().includes(val.toUpperCase())) {
                                    b = document.createElement("DIV");
                                    b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                                    b.innerHTML += arr[i].substr(val.length);
                                    b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                                    b.addEventListener("click", function(e) {
                      inp.value = this.getElementsByTagName("input")[0].value;
                      closeAllLists();
                      // Show or hide additional fields based on the selected value
                      showAdditionalFields(inp.value);
                                    });
                                    a.appendChild(b);
                                }
                            }
                        });

                       inp.addEventListener("keydown", function(e) {
                        var x = document.getElementById(this.id + "autocomplete-list");
                        if (x) x = x.getElementsByTagName("div");
                        if (e.keyCode == 40) {
                            currentFocus++;
                            addActive(x);
                        } else if (e.keyCode == 38) { 
                            currentFocus--;
                            addActive(x);
                        } else if (e.keyCode == 13) {
                            e.preventDefault();
                            if (currentFocus > -1) {
                                if (x) x[currentFocus].click();
                            }
                        }
                       });

                       function addActive(x) {
                        if (!x) return false;
                        removeActive(x);
                        if (currentFocus >= x.length) currentFocus = 0;
                        if (currentFocus < 0) currentFocus = (x.length - 1);
                        x[currentFocus].classList.add("autocomplete-active");
                       }

                       function removeActive(x) {
                        for (var i = 0; i < x.length; i++) {
                            x[i].classList.remove("autocomplete-active");
                        }
                       }

                       function closeAllLists(elmnt) {
                        var x = document.getElementsByClassName("autocomplete-items");
                        for (var i = 0; i < x.length; i++) {
                            if (elmnt != x[i] && elmnt != inp) {
                                x[i].parentNode.removeChild(x[i]);
                            }
                        }
                       }

                       document.addEventListener("click", function (e) {
                        closeAllLists(e.target);
                       });
                                     }

                                     function showAdditionalFields(selectedValue) {
                       document.getElementById("school-group").style.display = "none";
                       document.getElementById("percentage-group").style.display = "none";
                       document.getElementById("department-group").style.display = "none";
                       document.getElementById("course-group").style.display = "none";
                       document.getElementById("year-group").style.display = 'none';
                       document.getElementById("certificate_10th-group").style.display = 'none';
                       document.getElementById("certificate_12th-group").style.display = 'none';
                       document.getElementById("certificate_dip-group").style.display = 'none';
                       document.getElementById("certificate_ug-group").style.display = 'none';
                       document.getElementById("certificate_pg-group").style.display = 'none';
                       document.getElementById("certificate_doctorate-group").style.display = 'none';
           
                       if (selectedValue === "Below_9th" || selectedValue === "9th" || selectedValue === "11th") {
                      document.getElementById("school-group").style.display = "block";
                       document.getElementById("year-group").style.display = 'block';
                       } 
                     else if (selectedValue === "10th/SSLC" ) {
                            document.getElementById("school-group").style.display = "block";
                            document.getElementById("percentage-group").style.display = "block";
                            document.getElementById("year-group").style.display = 'block';
                            document.getElementById("certificate_10th-group").style.display = 'block';
                       } 
                       else if (selectedValue === "12th/HSC") {
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_12th-group").style.display = 'block';
                       } 
                       else if (selectedValue === "DIPLOMA" || selectedValue === "D.Pharm") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "block";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_dip-group").style.display = 'block';
                        document.getElementById("additionalFieldLabeldip").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "B.E" || selectedValue === "B.A" || selectedValue === "B.COM" || selectedValue === "B.ED" || selectedValue === "B.LIT" || selectedValue === "B.TECH" || selectedValue === "BCA" || selectedValue === "BBA" || selectedValue === "B.SC/BS" || selectedValue === "BSW" || selectedValue === "BFA" || selectedValue === "B.Arch" || selectedValue === "B.N" || selectedValue === "BCS" || selectedValue === "LLB" || selectedValue === "BDS" || selectedValue === "B.Pharm") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "block";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_ug-group").style.display = 'block';
                        document.getElementById("additionalFieldLabelug").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "M.E" || selectedValue === "M.A" || selectedValue === "M.COM" || selectedValue === "M.ED" || selectedValue === "M.LIT" || selectedValue === "M.TECH" || selectedValue === "MCA" || selectedValue === "MBA" || selectedValue === "M.SC/MS" || selectedValue === "MSW" || selectedValue === "MFA" || selectedValue === "M.Arch" || selectedValue === "M.N" || selectedValue === "MCS" || selectedValue === "LLM" || selectedValue === "MBBS" || selectedValue === "M.Pharm" || selectedValue === "MPhil") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "block";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_pg-group").style.display = 'block';
                        document.getElementById("additionalFieldLabelpg").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "Ph.D" || selectedValue === "DBA" || selectedValue === "Ed.D" || selectedValue === "MD" || selectedValue === "DMD" || selectedValue === "DVM" ) {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "block";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_doctorate-group").style.display = 'block';
                        document.getElementById("additionalFieldLabeldoc").innerText = "Upload " + selectedValue + " Certificate";
                       } 
           
                   
                                     }

                                     var countries = [
                       "Below_9th", "9th", "10th/SSLC", "11th", "12th/HSC", "DIPLOMA", "D.Pharm", 
                       "B.A", "B.COM", "B.ED", "B.E", "B.LIT", "B.SC/BS", "BBA", "BCA", "B.TECH", "BSW", "BFA", "B.Arch", "B.N", "BCS", "LLB", "BDS", "B.Pharm",
                       "M.A", "M.COM", "M.ED", "M.E", "M.LIT", "M.Sc/MS", "MBA", "MCA", "M.TECH", "MSW", "MFA", "M.Arch", "M.N", "MCS", "LLM", "MBBS", "M.Pharm",
                       "MPhil", "Ph.D", "DBA", "Ed.D", "MD", "DMD", "DVM" ];

                                     autocomplete(document.getElementById("qualification"), countries);



                          function validateForm() {
                                    var q = document.educationform.qualification.value;
                                    var dep = document.educationform.department.value;
                                    var edu = document.educationform.educationmode.value;
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

                                    if (edu == "" && document.getElementById('course-group').style.display != "none") {
                                      var namesms2 = "Mode of Education must be filled out";
                                      document.getElementById("course_error").innerHTML = namesms2;
                                      document.educationform.educationmode.focus();
                                      return false;
                                    } else {
                                      document.getElementById("course_error").innerHTML = "";
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

               

                          <script>
                                function addeduformfunction(){
                                document.getElementById("addeduform").style.display = "block";
                                }
                                </script>

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
                                    <form class="row g-3" autocomplete="off" novalidate name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" 
                                    action="<?php echo baseUrl . "Candidate/insertEducationForm" ?>">

                      <!-- <div class="col-12">
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
                              </div> -->
                                      <div class="col-12 autocomplete">
                      <label for="qualification" class="form-label">Educational Qualification</label>
                      <input id="qualification" class="form-control" type="text" name="qualification" onchange="toggleFields()"  placeholder="Enter qualification">
                      <div id="qualification_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="department-group" style="display: none;">
                      <label for="department" class="form-label">Specialization</label>
                      <input type="text" class="form-control" id="department" name="department" placeholder="Enter specialization">
                      <div id="department_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="course-group" style="display: none;">
                       <label for="educationmode" class="form-label" >Mode of Education</label>
                       <select class="form-control" id="educationmode" name="educationmode" required>
                                      <option value="">Select your mode of education </option>
                                      <option value="Regular" >Regular course</option>
                                      <option value="Corres" >Correspondence course</option>
                                      </select>
                       <div id="course_error" class="text-danger"></div>
                       </div>

                                      <div class="col-md-6" id="school-group" style="display: none;">
                      <label for="school" class="form-label">Institute</label>
                      <input type="text" class="form-control" id="school" name="school" placeholder="Enter institute name">
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
                      <label id="additionalFieldLabeldip" for="certificate_dip" class="form-label">Diploma Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                      <div id="certificate_dip_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                      <label id="additionalFieldLabelug" for="certificate_ug" class="form-label">UG Degree Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                      <div id="certificate_ug_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                      <label id="additionalFieldLabelpg" for="certificate_pg" class="form-label">PG Certificate Upload</label>
                      <input type="file" class="form-control" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf">
                      <div id="certificate_pg_error" class="text-danger"></div>
                                      </div>

                                      <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                      <label id="additionalFieldLabeldoc" for="certificate_doctorate" class="form-label">Doctorate Certificate Upload</label>
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
                        function autocomplete(inp, arr) {
                            var currentFocus;

                            inp.addEventListener("input", function(e) {
                                var a, b, i, val = this.value;
                                closeAllLists();
                                if (!val) { return false;}
                                currentFocus = -1;
                                a = document.createElement("DIV");
                                a.setAttribute("id", this.id + "autocomplete-list");
                                a.setAttribute("class", "autocomplete-items");
                                this.parentNode.appendChild(a);
                                for (i = 0; i < arr.length; i++) {
                                    if (arr[i].toUpperCase().includes(val.toUpperCase())) {
                      b = document.createElement("DIV");
                      b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                      b.innerHTML += arr[i].substr(val.length);
                      b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                      b.addEventListener("click", function(e) {
                                     inp.value = this.getElementsByTagName("input")[0].value;
                                     closeAllLists();
                                     // Show or hide additional fields based on the selected value
                                     showAdditionalFields(inp.value);
                      });
                      a.appendChild(b);
                                    }
                                }
                            });

                       inp.addEventListener("keydown", function(e) {
                        var x = document.getElementById(this.id + "autocomplete-list");
                        if (x) x = x.getElementsByTagName("div");
                        if (e.keyCode == 40) {
                            currentFocus++;
                            addActive(x);
                        } else if (e.keyCode == 38) { 
                            currentFocus--;
                            addActive(x);
                        } else if (e.keyCode == 13) {
                            e.preventDefault();
                            if (currentFocus > -1) {
                                if (x) x[currentFocus].click();
                            }
                        }
                       });

                       function addActive(x) {
                        if (!x) return false;
                        removeActive(x);
                        if (currentFocus >= x.length) currentFocus = 0;
                        if (currentFocus < 0) currentFocus = (x.length - 1);
                        x[currentFocus].classList.add("autocomplete-active");
                       }

                       function removeActive(x) {
                        for (var i = 0; i < x.length; i++) {
                            x[i].classList.remove("autocomplete-active");
                        }
                       }

                       function closeAllLists(elmnt) {
                        var x = document.getElementsByClassName("autocomplete-items");
                        for (var i = 0; i < x.length; i++) {
                            if (elmnt != x[i] && elmnt != inp) {
                                x[i].parentNode.removeChild(x[i]);
                            }
                        }
                       }

                       document.addEventListener("click", function (e) {
                        closeAllLists(e.target);
                       });
                                     }

                                     function showAdditionalFields(selectedValue) {
                       document.getElementById("school-group").style.display = "none";
                       document.getElementById("percentage-group").style.display = "none";
                       document.getElementById("department-group").style.display = "none";
                       document.getElementById("course-group").style.display = "none";
                       document.getElementById("year-group").style.display = 'none';
                       document.getElementById("certificate_10th-group").style.display = 'none';
                       document.getElementById("certificate_12th-group").style.display = 'none';
                       document.getElementById("certificate_dip-group").style.display = 'none';
                       document.getElementById("certificate_ug-group").style.display = 'none';
                       document.getElementById("certificate_pg-group").style.display = 'none';
                       document.getElementById("certificate_doctorate-group").style.display = 'none';
           
                       if (selectedValue === "Below_9th" || selectedValue === "9th" || selectedValue === "11th") {
                      document.getElementById("school-group").style.display = "block";
                       document.getElementById("year-group").style.display = 'block';
                       } 
                     else if (selectedValue === "10th/SSLC" ) {
                            document.getElementById("school-group").style.display = "block";
                            document.getElementById("percentage-group").style.display = "block";
                            document.getElementById("year-group").style.display = 'block';
                            document.getElementById("certificate_10th-group").style.display = 'block';
                       } 
                       else if (selectedValue === "12th/HSC") {
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_12th-group").style.display = 'block';
                       } 
                       else if (selectedValue === "DIPLOMA" || selectedValue === "D.Pharm") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("school-group").style.display = "block";
                      document.getElementById("course-group").style.display = "none";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_dip-group").style.display = 'block';
                        document.getElementById("additionalFieldLabeldip").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "B.E" || selectedValue === "B.A" || selectedValue === "B.COM" || selectedValue === "B.ED" || selectedValue === "B.LIT" || selectedValue === "B.TECH" || selectedValue === "BCA" || selectedValue === "BBA" || selectedValue === "B.SC" || selectedValue === "BSW") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "none";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_ug-group").style.display = 'block';
                        document.getElementById("additionalFieldLabelug").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "M.E" || selectedValue === "M.A" || selectedValue === "M.COM" || selectedValue === "M.ED" || selectedValue === "M.LIT" || selectedValue === "M.TECH" || selectedValue === "MCA" || selectedValue === "MBA" || selectedValue === "M.SC" || selectedValue === "MSW") {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "none";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_pg-group").style.display = 'block';
                        document.getElementById("additionalFieldLabelpg").innerText = "Upload " + selectedValue + " Certificate";
                       } 
                       else if (selectedValue === "Ph.D" || qualify === "DBA" || qualify === "Ed.D" || qualify === "MD" || qualify === "DMD" || qualify === "DVM"  ) {
                      document.getElementById("department-group").style.display = "block";
                      document.getElementById("course-group").style.display = "none";
                      document.getElementById("school-group").style.display = "block";
                        document.getElementById("percentage-group").style.display = "block";
                        document.getElementById("year-group").style.display = 'block';
                        document.getElementById("certificate_doctorate-group").style.display = 'block';
                        document.getElementById("additionalFieldLabeldoc").innerText = "Upload " + selectedValue + " Certificate";
                       } 
           
                   
                                     }

                                     var countries = [
                       "Below_9th", "9th", "10th/SSLC", "11th", "12th/HSC", "DIPLOMA", 
                       "B.A", "B.COM", "B.ED", "B.E", "B.LIT", "B.SC/BS", "BBA", "BCA", "B.TECH", "BSW", "BFA", "B.Arch", "B.N", "BCS", "LLB", "BDS", 
                       "M.A", "M.COM", "M.ED", "M.E", "M.LIT", "M.Sc/MS", "MBA", "MCA", "M.TECH", "MSW", "MFA", "M.Arch", "M.N", "MCS", "LLM", "MBBS",
                       "MPhil", "Ph.D", "DBA", "Ed.D", "MD", "DMD", "DVM" ];

                                     autocomplete(document.getElementById("qualification"), countries);



                          function validateForm() {
                                    var q = document.educationform.qualification.value;
                                    var dep = document.educationform.department.value;
                                    var edu = document.educationform.educationmode.value;
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

                                    if (edu == "" && document.getElementById('course-group').style.display !== "none") {
                                      var namesms2 = "Mode of education must be filled out";
                                      document.getElementById("course_error").innerHTML = namesms2;
                                      document.educationform.educationmode.focus();
                                      return false;
                                    } else {
                                      document.getElementById("course_error").innerHTML = "";
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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('educations').classList.add('active');
                        </script>
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
                            <div class="col-12">
                                <div class="card recent-sales overflow-auto">
                           
                                    <div class="card-body pt-4">
           
                       <!-- <h5 class="card-title">Education Table<span></span></h5> -->

                       <div class="d-flex justify-content-between">
                       <!-- <a href="<?php echo baseUrl . "Candidate/addEducationForm" ?>">
            <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->
            
                       <a href="#addeduform"><button  onclick="addeduformfunction()" type="button" class="btn btn-success mb-4" disabled>+ Add Education</button></a>
                      <div>
                      <a  href="<?php echo baseUrl . "Candidate/basicdetails" ?>"> <button type="button" class="btn btn-info mb-4 ">Previous</button></a>
                      <a  href="<?php echo baseUrl . "Candidate/experiencetable" ?>"> <button type="button" class="btn btn-info mb-4 ">Next</button></a>
                      </div>
                                     </div>
                                     <?php
                                     if (isset($educationTable[0]['id'])) {
                                       ?>
                                              <table class="table overflow-auto " id="myTable">
                                               <thead>
                                            <tr>
                                            <th scope="col"></th>
                              <th scope="col">S.No</th>
                              <th scope="col">Educational Qualification</th>
                              <th scope="col">Specialiization</th>
                              <th scope="col">Mode of Education</th>
                              <th scope="col">Institute</th>
                              <th scope="col">Year of Passing</th>
                              <th scope="col">Percentage</th>
                              <th scope="col">Certificate</th>
                              <th scope="col">Action</th>
                                            </tr>
                                               </thead>
                                               <tbody>
                               <?php
                               if (isset($educationTable[0]['id'])) {
                                 $count = 1;
                                 foreach ($educationTable as $key => $value) {
                                   $seekerId = $_SESSION['seekerId'];
                                   ?>
                                                             <tr>
                                                              <td> <form method="post" action="<?php echo baseUrl . 'Candidate/delete_selected'; ?>" id="form_<?= $value['id']; ?>">
                                                                          <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                                     <td><a><?php echo $count++; ?>.</a></td>
                                                             <td><?php echo $value['educational_qualification'] ?></td>
                                                             <!-- <td><?php echo $value['department'] ?></td> -->
                  <!-- Department -->
                  <?php
                  if (
                    $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                    $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                    $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                    $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                    $value['educational_qualification'] === "B.Pharm" ||
                    $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                    $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                    $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                    $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                    $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                    $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                    $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                    $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                  ) {
                    ?>
                                                                                      <td><?php echo $value['department'] ?></td>                                         
                                                               <?php
                  } else {
                    ?>
                                                                                    <td>NA</a></td>
                                                                             <?php
                  }
                  ?>
                                                               <?php
                                                               if (
                                                                 $value['educationmode'] == "Corres"
                                                               ) {
                                                                 ?>
                                                                                      <td>Correspondence</td>                                                                           
                                                               <?php
                                                               } else {
                                                                 ?>
                                                                                    <td>Regular</td>
                                                                             <?php
                                                               }
                                                               ?> 
                                                             <td><?php echo $value['school_college_name'] ?></td>
                                                             <td><?php echo $value['yearOfPassing'] ?></td>
                                                             <!-- <td><?php echo $value['percentage'] ?></td> -->
                  <!-- Percentage -->
                  <?php
                  if (
                    $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                    $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                    $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                    $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                    $value['educational_qualification'] === "B.Pharm" ||
                    $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                    $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                    $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                    $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                    $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                    $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                    $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                    $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                    $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "11th" || $value['educational_qualification'] === "12th/HSC"
                  ) {
                    ?>
                                                                                      <td><?php echo $value['percentage'] ?></td>                                         
                                                               <?php
                  } else {
                    ?>
                                                                                    <td>NA</a></td>
                                                                             <?php
                  }
                  ?>
                                                               <?php
                                                               if ($value['educational_qualification'] == '10th/SSLC') {
                                                                 ?>
                                                                       <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                                                       <?php
                                                               } else if ($value['educational_qualification'] == '12th/HSC') {
                                                                 ?>
                                                                               <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                                                               ) {
                                                                 ?>
                                                                                    <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank"><?php echo $value['diploma_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                                                 $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                                                 $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                                                 $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                                                 $value['educational_qualification'] === "B.Pharm"
                                                               ) {
                                                                 ?>
                                                                                            <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                                                 $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                                                 $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                                                 $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                                                                 $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                                                               ) {
                                                                 ?>
                                                                                      <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                                                       <?php
                                                               } else if (
                                                                 $value['educational_qualification'] == "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                                                 $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                                                               ) {
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
                                              <a class="" href="<?php echo baseUrl . "Candidate/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                              <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                                               </td>
                                                              </tr>
                                                <?php
                                 }
                               }
                               ?>
                                               </tbody>
                                              </table>
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                              <?php
                                     } else {
                                       ?>
                                              <h5 class="card-title">No Records Found<span></span></h5>
                               <?php
                                     }
                                     ?>
                                    </div>
                                    <!-- <a onclick="return confirm('Are you sure you want to delete?')" ><button type="button" class=" ms-4 mb-4 btn btn-danger" onclick="deleteRows()">Delete</button></a> -->

                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body" id="editeduform">
                                    <h5 class="card-title">Update Education Details</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3" novalidate name="educationform" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" 
                                    action="<?php echo baseUrl . "Candidate/updateInsertEducation" ?>">

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

                               <div class="col-md-6" id="course-group" style="display: none;">
                                              <label for="educationmode" class="form-label" >Mode of Education</label>
                                              <select class="form-control" id="educationmode" name="educationmode" required>
                                               <option value="">Select your mode of education </option>
                                               <option value="Regular" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Regular')
                                                 echo 'selected'; ?>>Regular course</option>
                                               <option value="Corres" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Corres')
                                                 echo 'selected'; ?>>Correspondence course</option>
                                               </select>
                                              <div id="course_error" class="text-danger"></div>
                                              </div>

                               <div class="col-md-6" id="school-group" >
                                              <label class="form-label" for="school">Institution Name</label>
                                              <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>" name="school">
                                              <div id="school_error" class="text-danger"></div>
                               </div>

                               <div class="col-md-6" id="percentage-group">
                                              <label class="form-label" for="percentage">Percentage</label>
                                              <input type="text" class="form-control" id="percentage" id="school" value="<?php echo $value['percentage']; ?>" name="percentage">
                                              <div id="percentage_error" class="text-danger"></div>
                               </div>

                               <div class="col-md-6" id="year-group" >
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
                                             <label id="additionalFieldLabeldip" class="form-label" for="certificate_dip">Diploma Certificate Upload</label>
                                             <input type="text" class="form-control"  name="olddipcer" value="<?php echo $value['diploma_cer']; ?>" hidden>
                                             <div class="uploadedfile"  style="display:flex;">
                                             <input type="file" class="form-control cerdipupload" id="certificate_dip" name="certificate_dip" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                             <label class="form-control" id="file-input-labeldip" for="certificate_dip">Change File</label>  
                                             <a href="<?php echo $value['diplomacer_url']; ?>" class="filelink p-2" target="blank" id="existfiledip" ><?php echo $value['diploma_cer']; ?></a>
                                             </div>
                                             <div id="certificate_dip_error" class="text-danger"></div>
                                         </div>

                                         <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                                             <label id="additionalFieldLabelug" class="form-label" for="certificate_ug">UG Degree Certificate Upload</label>
                                             <input type="text" class="form-control"  name="oldugcer" value="<?php echo $value['ug_cer']; ?>" hidden>
                                             <div class="uploadedfile"  style="display:flex;">
                                             <input type="file" class="form-control cerugupload" id="certificate_ug" name="certificate_ug" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                             <label class="form-control" id="file-input-labelug" for="certificate_ug">Change File</label>  
                                             <a href="<?php echo $value['ugcer_url']; ?>" class="filelink p-2" target="blank" id="existfileug" ><?php echo $value['ug_cer']; ?></a>
                                             </div>
                                             <div id="certificate_ug_error" class="text-danger"></div>
                                         </div>

                                         <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                                             <label id="additionalFieldLabelpg" class="form-label" for="certificate_pg">PG Certificate Upload</label>
                                             <input type="text" class="form-control"  name="oldpgcer" value="<?php echo $value['pg_cer']; ?>" hidden>
                                             <div class="uploadedfile"  style="display:flex;">
                                             <input type="file" class="form-control cerpgupload" id="certificate_pg" name="certificate_pg" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden/>
                                             <label class="form-control" id="file-input-labelpg" for="certificate_pg">Change File</label>  
                                             <a href="<?php echo $value['pgcer_url']; ?>" class="filelink p-2" target="blank" id="existfilepg" ><?php echo $value['pg_cer']; ?></a>
                                             </div>
                                             <div id="certificate_pg_error" class="text-danger"></div>
                                         </div>

                                         <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                                             <label id="additionalFieldLabeldoc" class="form-label" for="certificate_doctorate">Doctorate Certificate Upload</label>
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

                                  var qualify = document.getElementById('qualification').value;


                                  // This is for displaying in update form
                                  if (qualify == 'Below_9th' || qualify == '9th' || qualify == '11th') {
                                    document.getElementById('percentage-group').style.display = 'none';
                                  }

                                  if (qualify === '10th/SSLC') {
                                    document.getElementById('certificate_10th-group').style.display = 'block';
                                  }

                                  if (document.getElementById('qualification').value === '12th/HSC') {
                                    document.getElementById('certificate_12th-group').style.display = 'block';
                                  }

                                  if (qualify === "DIPLOMA" || qualify === "D.Pharm") {
                                    document.getElementById('department-group').style.display = 'block';
                                    document.getElementById('course-group').style.display = 'block';
                                    document.getElementById('certificate_dip-group').style.display = 'block';
                                    document.getElementById("additionalFieldLabeldip").innerText = "Uploaded " + qualify + " Certificate";
                                  }

                                  if (qualify === "B.E" || qualify === "B.A" || qualify === "B.COM" || 
                                  qualify === "B.ED" || qualify === "B.LIT" || qualify === "B.TECH" || 
                                  qualify === "BCA" || qualify === "BBA" || qualify === "B.SC" || 
                                  qualify === "BSW" || qualify === "BFA" || qualify === "B.Arch" || 
                                  qualify === "B.N" || qualify === "BCS" || qualify === "LLB" || 
                                  qualify === "BDS" || qualify === "B.Pharm") {
                                    document.getElementById('department-group').style.display = 'block';
                                    document.getElementById('course-group').style.display = 'block';
                                    document.getElementById('certificate_ug-group').style.display = 'block';
                                    document.getElementById("additionalFieldLabelug").innerText = "Uploaded " + qualify + " Certificate";
                                  }

                                  if (qualify === "M.E" || qualify === "M.A" || qualify === "M.COM" || qualify === "M.ED"
                                   || qualify === "M.LIT" || qualify === "M.TECH" || qualify === "MCA" || qualify === "MBA"
                                    || qualify === "M.SC" || qualify === "MSW"|| qualify === "MFA" || qualify === "M.Arch" || 
                                  qualify === "M.N" || qualify === "MCS" || qualify === "LLM" || 
                                  qualify === "MDS" || qualify === "M.Pharm" || qualify === "MPhil") {
                                    document.getElementById('department-group').style.display = 'block';
                                    document.getElementById('course-group').style.display = 'block';
                                    document.getElementById('certificate_pg-group').style.display = 'block';
                                    document.getElementById("additionalFieldLabelpg").innerText = "Uploaded " + qualify + " Certificate";
                                  }

                                  if (qualify === "Ph.D" || qualify === "DBA" || qualify === "Ed.D" || qualify === "MD" || qualify === "DMD" || qualify === "DVM") {
                                    document.getElementById('department-group').style.display = 'block';
                                    document.getElementById('course-group').style.display = 'block';
                                    document.getElementById('certificate_doctorate-group').style.display = 'block';
                                    document.getElementById("additionalFieldLabeldoc").innerText = "Uploaded " + qualify + " Certificate";
                                  }



                                  function validateForm() {
                                    var q = document.educationform.qualification.value;
                                    var dep = document.educationform.department.value;
                                    var edu = document.educationform.educationmode.value;
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

                                      if (edu == "" && document.getElementById('course-group').style.display !== "none") {
                                      var namesms2 = "Mode of education must be filled out";
                                      document.getElementById("course_error").innerHTML = namesms2;
                                      document.educationform.educationmode.focus();
                                      return false;
                                    } else {
                                      document.getElementById("course_error").innerHTML = "";
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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('experiences').classList.add('active');
                        </script>
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
                       <div id="exptableheading" class="mb-4">
                                     Are you a fresher ? <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>"><button type="button" class="btn btn-danger mx-2">Skip</button></a> <br>
                                     or Experienced ? <a class="" href="#addexpform" onclick="addexpform()"><button type="button" onclick="exptablevisible()" class="btn btn-success m-2">Add Experience</button></a>
                       </div>
                       <div class="d-flex justify-content-between" >
                       <a class="" href="#addexpform">
                       <button id="expadd" style="display:none;" type="button" onclick="addexpform()" class="btn btn-success mb-4">+ Add Experience</button></a>
                      <div>
                      <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>"> <button id="expprevious" style="visibility: hidden;" type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                      <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>"> <button id="expnext" style="visibility: hidden;" type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                      </div>
                                     </div>
                                     <?php
                                     if (isset($experienceTable[0]['id'])) {
                                       $count = 1;
                                       ?>
                                              <table class="table" id="exptable" style="display:none;">
                                               <thead>
                                            <tr>
                                               <th scope="col"></th>
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
                                                 $count = 1;
                                                 foreach ($experienceTable as $key => $value) {
                                                   $seekerId = $_SESSION['seekerId'];
                                                   ?>
                                               
                                                       <tr>
                                                        <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteExperience'; ?>" id="form_<?= $value['id']; ?>">
                                                                    <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                              <td><?php echo $count++ ?>.</td>
                                      <td><?php echo $value['other_category'] ?></td>
                                      <td><?php echo $value['other_sub_category'] ?></td>
                                      <td><?php echo $value['expYear'] ?> - <?php echo $value['expMonth'] ?></td>
                                      <td><?php echo $value['company_name'] ?></td>
                                      <td><?php echo $value['job_role'] ?></td>
                                      <td><?php echo $value['previous_employer_name'] ?></td>
                                      <td><?php echo $value['previous_employer_mobile'] ?></td>
                                      <td><?php echo $value['previous_employer_email'] ?></td>
                                      <td>
                                      <div class="d-flex">
                                          <a href="<?php echo baseUrl . "Candidate/updateExperience" ?>/<?php echo $value['id'] ?>#editexpform"><button type="button" class="btn btn-secondary mx-1 ">Edit</button></a>
                                          <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                      </div>
                                      </td>
                                    </tr>
                          <?php
                                                 }
                                               }
                                               ?>
                                     </tbody>
                                 </table>
                                 <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
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


                        <script>
                          function exptablevisible() {
                            document.getElementById("expadd").style.display = "block";
                            document.getElementById("expprevious").style.visibility = "visible";
                            document.getElementById("expnext").style.visibility = "visible";
                            document.getElementById("exptable").style.display = "block";
                           document.getElementById("addexpform").style.display = "block";
                          }
                          function addexpform() {
                           document.getElementById("addexpform").style.display = "block";
                          }

                        <?php
                        if (isset($basicDetails)) {
                          if ($basicDetails[0]['expsubmited'] === "1") {
                            ?>
                                                       document.getElementById("expadd").style.display = "block";
                                                       document.getElementById("expprevious").style.visibility = "visible";
                                                       document.getElementById("expnext").style.visibility = "visible";
                                                       document.getElementById("exptable").style.display = "block";
                                                       document.getElementById("exptableheading").style.display = "none";          
                                       <?php
                          }
                        }
                        ?>
                        </script>

            <div class="card" id="addexpform" style="display:none">
                                <div class="card-body">
                                    <h5 class="card-title">Add Experience Details</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
                                     onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Candidate/insertExperienceForm" ?>">

                                     <!-- <div class="col-12">
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
              <div id="category_error" class="text-danger error"></div>
                            </div> -->
                           
                                    <div class="col-12">
                      <label for="category" class="form-label">Category</label>
                      <select class="form-control" id="category" name="category" autocomplete="off" onchange="showHideOtherField()" required>
                      <option value="">Select a Category</option>
                      <?php
                      foreach ($categoryList as $key => $value) {
                        ?>
                      <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                        <?php } ?>
                        <option value="others">Others</option>
                      </select>
                      <div id="category_error" class="text-danger error"></div>
                                    </div>
                        

                                    <div class="col-12" id="newcategory_group" style="display: none;">
                                      <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                                      <input class="form-control" id="newcategory" name="newcategory"  placeholder="Enter new category">
                                      <div id="newcategory_error" class="text-danger error"></div>
                                      <input id="categoryothers" name="categoryothers" value="1" hidden >
                                    </div>

                            <div class="col-md-6">
                              <label for="subcategory" class="form-label">Subcategory</label>
                              <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory" required>
                              <div id="subcategory_error" class="text-danger error"></div>
                            </div>

                            <div class="col-md-6">
                                <label for="company name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter company name" required>
                                <div id="companyname_error" class="text-danger error"></div>
                              </div>

                            <!-- <div class="col-md-6">
                  <label for="experience" class="form-label">Experience</label>
                 <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" required> 
                  <select type="text" class="form-control" id="experience" name="experience" required>
                        <option value="">Select your experience</option>
                        <option value="0-2">0-2 years</option>
                        <option value="3-5">3-5 years</option>
                        <option value="5-10">5-10 years</option>
                        <option value="10-15">10-15 years</option>
                        <option value="15-20">15-20 years</option>
                        <option value="above 20 years">Above 20 years</option>
                      </select>
                  <div id="experienceexp_error" class="text-danger error"></div>
                </div> -->

                            <!-- <div class="col-md-3">
                            <div class="experience-container">
                                <label for="expYear" class="form-label">Experience</label>
                                <div class="d-flex">
                                  <div class="col-6 col-md-12 me-2">
                                    <select class="form-control" id="expYear" name="expYear" required>
                      <option value=""> Select year </option>
                      <?php for ($i = 0; $i <= 30; $i++): ?>
                          <option value="<?php echo $i; ?>"><?php echo $i; ?> Year<?php echo $i !== 1 ? 's' : ''; ?></option>
                      <?php endfor; ?>
                      <option value="30+ years" >30+ Years</option>
                                    </select>
                      <div  id="experienceexp_error" class="text-danger error"></div>
                                </div>

                                     <div class=" col-6 col-md-12">
                                    <select class="form-control" id="expMonth" name="expMonth" required>
                      <option value=""> Select month </option>
                      <?php for ($i = 0; $i <= 11; $i++): ?>
                          <option value="<?php echo $i; ?>" ><?php echo $i; ?> Month<?php echo $i !== 1 ? 's' : ''; ?></option>
                      <?php endfor; ?>
                                    </select>
                                  <div id="experienceexpmonth_error" class="text-danger error"></div>
                                </div>

                                 </div>
                            </div>
                        </div> -->

                        <!--  <div class="col-md-3">
     <div class="experience-container">
      <div class="d-flex">
        <label for="expYear" class="form-label" style="padding-top: 10px; padding-right: 10px;">From</label>
        <input type="date" class="form-control col-3 me-2" id="fromDate" name="fromDate" required>
        <div id="experienceexp_error" class="text-danger error"></div>

        <label for="expMonth" class="form-label" style="padding-top: 10px; padding-left: 60px; padding-right: 10px;">To</label>
        <input type="date" class="form-control col-3 me-2" id="toDate" name="toDate" required>
        <div id="experienceexpmonth_error" class="text-danger error"></div>

        <label for="till_now" class="form-check-label col-3">
          <input type="checkbox" id="till_now" name="till_now" style="padding-top: 10px; padding-right: 10px;"> Till Now
        </label>
      </div>
    </div>
  </div>

  <p id="result">Total duration: <span id="years">0</span> years, <span id="months">0</span> months</p> -->

  

                              <!-- <div class="form-control" id="otherCategoryField" style="display: none;">
                  <label for="othercategory">Other Category:</label>
                  <select class="form-control" id="experience" name="experience">
                    <input type="text" class="form-control" id="othercategory" name="othercategory">
                </div>
                <div class="form-control" id="otherSubcategoryField" style="display: none;">
                  <label for="othersubcategory">Other Subcategory:</label>
                  <select class="form-control" id="experience" name="experience">
                    <input type="text" class="form-control" id="othersubcategory" name="othersubcategory">
                </div> -->

                              <div class="col-md-6">
                              <div class="experience-container">
                                  <label for="expYear" class="form-label">Experience</label>

                                  <div class="d-md-flex">

                                    <label for="fromDate" class="pt-1 pe-2">From</label>

                                    <div class="col-md-3  me-2">
                                      <input type="date" class="form-control" id="fromDate" name="fromDate" required>
                                    <div id="experienceexp_error" class="text-danger error"></div>
                                  </div>

                                  <label for="toDate" class="pt-1 px-2">To</label>

                                  <div class="col-md-3">
                                      <input type="date" class="form-control" id="toDate" name="toDate" required>
                                    <div id="experienceexpmonth_error" class="text-danger error"></div>
                                  </div>

                                
                                  <input type="checkbox" id="till_now" name="till_now" class="ms-3"> 
                                  <label for="toDate" class="pt-1 px-2">Till now</label>
                                
                                  
                                </div>
                              </div>
                            </div> 
                        

                              <div class="col-md-6">                                 
                                <label class="form-label">Total duration</label>
                                <p class="form-control" id="result"><span id="years"></span> Years & <span id="months"> </span> Months</p>
                              </div>
                          
                             <div class="col-md-6">
                                <label for="role" class="form-label">Role in the Company</label>
                                <input type="text" class="form-control" id="role" name="role" placeholder="Enter role" required>
                                <div id="role_error" class="text-danger error"></div>
                              </div>
                            <!-- JOB PROFILE -->
                              <!-- <div class="col-md-6">
                              <label for="profile" class="form-label">Job Profile</label>
                              <input type="text" class="form-control" id="profile" name="profile" placeholder="Enter Job profile" required>
                              <div id="profile_error" class="text-danger error"></div>
                            </div> -->

                              <h5 class="card-title">Previous Job's Manager Details</h5>

                              <div class="col-md-6">
                                <label for="Name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" placeholder="Enter employer name" required>
                                <div id="name_error" class="text-danger error"></div>
                              </div>

                              <div class="col-md-6">
                                <label for="number" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="number" name="number" placeholder="Enter mobile number" required>
                                <div id="mobilenum_error" class="text-danger error"></div>
                              </div>

                              <div class="col-md-6" class="form-label">
                                <label for="email">Email-Id</label>
                                <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email" required>
                                <div id="emailid_error" class="text-danger error"></div>
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
      document.getElementById('fromDate').addEventListener('input', updateDateDifference);
      document.getElementById('toDate').addEventListener('input', updateDateDifference);
      document.getElementById('till_now').addEventListener('change', updateToDate);

      function updateDateDifference() {
        var fromDate = new Date(document.getElementById('fromDate').value);
        var toDate = new Date(document.getElementById('toDate').value);

        var tillNowChecked = document.getElementById('till_now').checked;

        document.getElementById('toDate').disabled = tillNowChecked;

        if (tillNowChecked) {
          var today = new Date();
          var formattedDate = today.toISOString().split('T')[0];
          document.getElementById('toDate').value = formattedDate;
        }

        if (!isNaN(fromDate.getTime()) && (!tillNowChecked || !isNaN(toDate.getTime()))) {
          var timeDiff = tillNowChecked ? (new Date() - fromDate) : (toDate - fromDate);

          var yearsDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 365.25)) : toDate.getFullYear() - fromDate.getFullYear();
          var monthsDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 30.44)) % 12 : toDate.getMonth() - fromDate.getMonth();
          var daysDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24)) % 30.44 : toDate.getDate() - fromDate.getDate();

          if (daysDiff < 0) {
            monthsDiff--;
            daysDiff += new Date(toDate.getFullYear(), toDate.getMonth(), 0).getDate();
          }

          if (monthsDiff < 0) {
            yearsDiff--;
            monthsDiff += 12;
          }

          document.getElementById('years').textContent = yearsDiff;
          document.getElementById('months').textContent = monthsDiff;
        }
      }

      function updateToDate() {
    var today = new Date();

    today.setHours(0, 0, 0, 0);

    var to_date_input = document.getElementById('toDate');
    var till_now_checkbox = document.getElementById('till_now');

    if (till_now_checkbox.checked) {
    
      var yesterday = new Date(today);
      yesterday.setDate(today.getDate() - 1);

      to_date_input.valueAsDate = yesterday;
    } else {
      to_date_input.disabled = false;
    }

    updateDateDifference();
  }

  window.onload = function() {
        updateDateDifference();
      };
    </script>



                          <script>
                         function showHideOtherField() {
                              var categoryDropdown = document.getElementById('category');
                              var otherCategoryField = document.getElementById('newcategory_group');

                              if (categoryDropdown.value === 'others') {
                                  otherCategoryField.style.display = 'block';
                              } else {
                                  otherCategoryField.style.display = 'none';
                              }
                          }

                        function validateexpForm() {
                          clearErrorMessages(); 

                          var category = document.getElementById("category");
                          var newothercategory = document.getElementById("newcategory_group");
                          var subcategory = document.getElementById("subcategory");
                          var expYear = document.getElementById("fromDate");
                          var expMonth = document.getElementById("toDate");
                          var companyname = document.getElementById("companyname");
                          var role = document.getElementById("role");
                          var profile = document.getElementById("profile");
                          var ename = document.getElementById("nameofemployer");
                          var phonenumber1 = document.getElementById("number");
                          var email1 = document.getElementById("emailid");

                          if (category.value === '') {
                            displayError('Please select a category', 'category_error');
                            return false;
                          }

                          if (newothercategory.value === '' && document.getElementById('newcategory_group').style.display == "block") {
                            displayError('Please enter newcategory', 'newcategory_error');
                            return false;
                          }

                          if (subcategory.value === '') {
                            displayError('Please select a subcategory', 'subcategory_error');
                            return false;
                          }

                          // if (experience.value === '') {
                          //   displayError('Please select an experience', 'experienceexp_error');
                          //   return false;
                          // }

                          if (expYear.value === '') {
                            displayError('From date must be filled out', 'experienceexp_error');
                            return false;
                          }

                          if (expMonth.value === '') {
                            displayError('To date must be filled out', 'experienceexpmonth_error');
                            return false;
                          }

                          if (expYear.value >= expMonth.value) {
                                displayError('To date must be after From date', 'experienceexpmonth_error');
                                return false;
                            } 

                          if (companyname.value === '') {
                            displayError('Company name must be filled out', 'companyname_error');
                            return false;
                          }

                          if (role.value === '') {
                            displayError('Role must be filled out', 'role_error');
                            return false;
                          }

              // JOB PROFILE

                          // if (profile.value === '') {
                          //   displayError('Job profile must be filled out', 'profile_error');
                          //   return false;
                          // }

                          if (ename.value === '') {
                            displayError('Employer name must be filled out', 'name_error');
                            return false;
                          }

                          if (phonenumber1.value === '') {
                              displayError('Mobile number must be filled out', 'mobilenum_error');
                              return false;
                            } else if (!/^\d{10}$/.test(phonenumber1.value)) {
                              displayError('Mobile number must have exactly 10 digits', 'mobilenum_error');
                              return false;
                            }

                          if (email1.value === '') {
                            displayError('Email id must be filled out', 'emailid_error');
                            return false;
                          } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email1.value)) {
                            displayError('Invalid email address', 'emailid_error');
                            return false;
                          }

                          return true;
                        }

                        function displayError(message, elementId) {
                          var errorElement = document.getElementById(elementId);
                          errorElement.innerHTML = message;
                          errorElement.style.color = 'red';
                        }

                        function clearErrorMessages() {
                          var errorElements = document.getElementsByClassName('error');
                          Array.from(errorElements).forEach(function (errorElement) {
                            errorElement.textContent = '';
                          });
                        }
                      </script>

                        <?php
        } elseif ($method == "addExperirenceForm") {
          ?>
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('experiences').classList.add('active');
                        </script>
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
                                     onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Candidate/insertExperienceForm" ?>">

                                     <!-- <div class="col-12">
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
              <div id="category_error" class="text-danger error"></div>
                            </div> -->
                           
                                    <div class="col-12">
                      <label for="category" class="form-label">Category</label>
                      <select class="form-control" id="category" name="category" autocomplete="off" onchange="showHideOtherField()" required>
                      <option value="">Select a Category</option>
                      <?php
                      foreach ($categoryList as $key => $value) {
                        ?>
                                               <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                        <?php } ?>
                        <option value="others">Others</option>
                      </select>
                      <div id="category_error" class="text-danger error"></div>
                                    </div>
                        

                                    <div class="col-12" id="newcategory_group" style="display: none;">
                                      <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                                      <input class="form-control" id="newcategory" name="newcategory"  placeholder="Enter new category">
                                      <div id="newcategory_error" class="text-danger error"></div>
                                      <input id="categoryothers" name="categoryothers" value="1" hidden >
                                    </div>

                            <div class="col-md-6">
                              <label for="subcategory" class="form-label">Subcategory</label>
                              <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory" required>
                              <div id="subcategory_error" class="text-danger error"></div>
                            </div>

                            <!-- <div class="col-md-6">
                  <label for="experience" class="form-label">Experience</label>
                 <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" required> 
                  <select type="text" class="form-control" id="experience" name="experience" required>
                        <option value="">Select your experience</option>
                        <option value="0-2">0-2 years</option>
                        <option value="3-5">3-5 years</option>
                        <option value="5-10">5-10 years</option>
                        <option value="10-15">10-15 years</option>
                        <option value="15-20">15-20 years</option>
                        <option value="above 20 years">Above 20 years</option>
                      </select>
                  <div id="experienceexp_error" class="text-danger error"></div>
                </div> -->

                            <div class="col-md-3">
                              <div class="experience-container">
                                  <label for="experience" class="form-label">Experience</label>
                                  <div class="d-flex">
                                      <select class="form-control col-3 me-2" id="expYear" name="expYear" required>
                        <option value=""> Select year </option>
                        <?php for ($i = 0; $i <= 30; $i++): ?>
              
                              <option value="<?php echo $i; ?>"><?php echo $i; ?> Year<?php echo $i !== 1 ? 's' : ''; ?></option>
                        <?php endfor; ?>
                        <option value="30+ years" >30+ Years</option>
                                      </select>
                                      <!-- <div id="experienceexp_error" class="text-danger error"></div> -->

                                      <label for="experience" class="form-label"></label>
                                      <select class="form-control col-3" id="expMonth" name="expMonth" required>
                        <option value=""> Select month </option>
                        <?php for ($i = 0; $i <= 11; $i++): ?>
                              <option value="<?php echo $i; ?>" ><?php echo $i; ?> Month<?php echo $i !== 1 ? 's' : ''; ?></option>
                        <?php endfor; ?>
                                      </select>
                                      <!-- <div id="experienceexpmonth_error" class="text-danger error"></div> -->
                                  </div>
                      
                              </div>
                          </div>

                            <!-- <div class="form-control" id="otherCategoryField" style="display: none;">
                  <label for="othercategory">Other Category:</label>
                  <select class="form-control" id="experience" name="experience">
                    <input type="text" class="form-control" id="othercategory" name="othercategory">
                </div>
                <div class="form-control" id="otherSubcategoryField" style="display: none;">
                  <label for="othersubcategory">Other Subcategory:</label>
                  <select class="form-control" id="experience" name="experience">
                    <input type="text" class="form-control" id="othersubcategory" name="othersubcategory">
                </div> -->


                            <div class="col-md-6">
                              <label for="company name" class="form-label">Company Name</label>
                              <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter company name" required>
                              <div id="companyname_error" class="text-danger error"></div>
                            </div>

                            <div class="col-md-6">
                              <label for="role" class="form-label">Role in the Company</label>
                              <input type="text" class="form-control" id="role" name="role" placeholder="Enter role" required>
                              <div id="role_error" class="text-danger error"></div>
                            </div>
                          <!-- JOB PROFILE -->
                            <!-- <div class="col-md-12">
                            <label for="profile" class="form-label">Job Profile</label>
                            <input type="text" class="form-control" id="profile" name="profile" placeholder="Enter Job profile" required>
                            <div id="profile_error" class="text-danger error"></div>
                          </div> -->

                            <h5 class="card-title">Previous Job's Manager Details</h5>

                            <div class="col-md-6">
                              <label for="Name" class="form-label">Name</label>
                              <input type="text" class="form-control" id="nameofemployer" name="nameofemployer" placeholder="Enter employer name" required>
                              <div id="name_error" class="text-danger error"></div>
                            </div>

                            <div class="col-md-6">
                              <label for="number" class="form-label">Mobile Number</label>
                              <input type="text" class="form-control" id="number" name="number" placeholder="Enter mobile number" required>
                              <div id="mobilenum_error" class="text-danger error"></div>
                            </div>

                            <div class="col-md-6" class="form-label">
                              <label for="email">Email-Id</label>
                              <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email" required>
                              <div id="emailid_error" class="text-danger error"></div>
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

                       function showHideOtherField() {
                            var categoryDropdown = document.getElementById('category');
                            var otherCategoryField = document.getElementById('newcategory_group');

                            if (categoryDropdown.value === 'others') {
                                otherCategoryField.style.display = 'block';
                            } else {
                                otherCategoryField.style.display = 'none';
                            }
                        }


                      function validateexpForm() {
                        clearErrorMessages(); 

                        var category = document.getElementById("category");
                        var newothercategory = document.getElementById("newcategory_group");
                        var subcategory = document.getElementById("subcategory");
                        // var experience = document.getElementById("experience");
                        var expYear = document.getElementById("expYear");
                        var expMonth = document.getElementById("expMonth");
                        var companyname = document.getElementById("companyname");
                        var role = document.getElementById("role");
            // JOB PROFILE
                        // var profile = document.getElementById("profile");
                        var ename = document.getElementById("nameofemployer");
                        var phonenumber1 = document.getElementById("number");
                        var email1 = document.getElementById("emailid");

                        if (category.value === '') {
                          displayError('Please select a category', 'category_error');
                          return false;
                        }

                        if (newothercategory.value === '' && document.getElementById('newcategory_group').style.display == "block") {
                          displayError('Please enter newcategory', 'newcategory_error');
                          return false;
                        }

                        if (subcategory.value === '') {
                          displayError('Please select a subcategory', 'subcategory_error');
                          return false;
                        }

                        // if (experience.value === '') {
                        //   displayError('Please select an experience', 'experienceexp_error');
                        //   return false;
                        // }

                        if (expYear.value === '') {
                          displayError('Please select the year', 'experienceexp_error');
                          return false;
                        }

                        if (expMonth.value === '') {
                          displayError('Please select the month', 'experienceexpmonth_error');
                          return false;
                        }

                        if (companyname.value === '') {
                          displayError('Company name must be filled out', 'companyname_error');
                          return false;
                        }

                        if (role.value === '') {
                          displayError('Role must be filled out', 'role_error');
                          return false;
                        }

            // JOB PROFILE

                        // if (profile.value === '') {
                        //   displayError('Job profile must be filled out', 'profile_error');
                        //   return false;
                        // }

                        if (ename.value === '') {
                          displayError('Employer name must be filled out', 'name_error');
                          return false;
                        }

                        if (phonenumber1.value === '') {
                          displayError('Mobile number must be filled out', 'mobilenum_error');
                          return false;
                        }

                        if (email1.value === '') {
                          displayError('Email id must be filled out', 'emailid_error');
                          return false;
                        }

                        return true;
                      }

                      function displayError(message, elementId) {
                        var errorElement = document.getElementById(elementId);
                        errorElement.innerHTML = message;
                        errorElement.style.color = 'red';
                      }

                      function clearErrorMessages() {
                        var errorElements = document.getElementsByClassName('error');
                        Array.from(errorElements).forEach(function (errorElement) {
                          errorElement.textContent = '';
                        });
                      }
                       </script>

                                    <?php
        } elseif ($method == "updateExperience") {
          ?>
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('experiences').classList.add('active');

                         </script>
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

                            <div class="card recent-sales overflow-auto">
                           
                                    <div class="card-body">
           
                       <h5 class="card-title">Experience Table<span></span></h5>
                       <a class="" href="#addexpform"><button type="button" class="btn btn-success m-2" disabled>+ Add Experience</button></a>
                      <div style="float:right;">
                              <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i> Previous</button></a>
                      <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>"> <button type="button" class="btn btn-info mb-4 ">Next <i class="bi bi-arrow-right"></i></button></a>
                      </div>
                                     <?php
                                     if (isset($experienceTable[0]['id'])) {
                                       $count = 1;
                                       ?>
                                              <table class="table">
                                               <thead>
                                            <tr>
                              <th scope="col"></th>
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
                                                 $count = 1;
                                                 foreach ($experienceTable as $key => $value) {
                                                   $seekerId = $_SESSION['seekerId'];
                                                   ?>
                                                             <tr>
                                                              <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteExperience'; ?>" id="form_<?= $value['id']; ?>">
                                                                          <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                                     <td><?php echo $count++ ?>.</td>
                                                             <td><?php echo $value['other_category'] ?></td>
                                                             <td><?php echo $value['other_sub_category'] ?></td>
                                                             <td><?php echo $value['expYear'] ?> to <?php echo $value['expMonth'] ?></td>
                                                             <td><?php echo $value['company_name'] ?></td>
                                                             <td><?php echo $value['job_role'] ?></td>
                                                             <td><?php echo $value['previous_employer_name'] ?></td>
                                                             <td><?php echo $value['previous_employer_mobile'] ?></td>
                                                             <td><?php echo $value['previous_employer_email'] ?></td>
                                                             <td>
                                                             <div class="d-flex">
                                               <a href="<?php echo baseUrl . "Candidate/updateExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary mx-1 ">Edit</button></a>
                                               <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                                             </div>
                                                             </td>
                                                              </tr>
                                                <?php
                                                 }
                                               }
                                               ?>
                                               </tbody>
                                              </table>
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                                        </form>
                                              <?php
                                     } else {
                                       ?>
                                              <h5 class="card-title">No Records Found<span></span></h5>
                               <?php
                                     }
                                     ?>
                                    </div>

                                </div>
   
                            <div class="card" id="editexpform">
                                <div class="card-body">
                                    <h5 class="card-title">Update Experience Details</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" 
                                    onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Candidate/updateInsertExperience" ?>">

                                    <?php
                                    foreach ($updateExperience as $key => $value) {
                                      $seekerId = $_SESSION['seekerId'];
                                      ?>
                               <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                               <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id" >

                               <div class="col-12">
                                            <label class="form-label" for="category">Category</label>
                                            <select class="form-control" id="category" name="category" required>
                                            <?php
                                            $defaultSelectedValue = $value['other_category'];
                                            foreach ($categoryList as $key => $cvalue) {
                                              $selected = ($cvalue->categoryName == $defaultSelectedValue) ? 'selected' : ''; ?>
                                      <option value="<?php echo $cvalue->categoryName ?>" <?php echo $selected ?>>
                                                     <?php echo $cvalue->categoryName ?>
                                      </option>
                                <?php } ?> </select>
                                <div id="category_error" class="error"></div>
                               </div>

                               <div class="col-md-6">
                                            <label class="form-label" for="subcategory">Subcategory</label>
                                            <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['other_sub_category']; ?>" placeholder="Enter subcategory" required>
                                            <div id="subcategory_error" class="error"></div>
                               </div>


                               <!-- <div class="col-md-3">
                            <div class="experience-container">
                                           <label for="experience" class="form-label">Experience</label>
                                           <div class="d-flex">
                          <select class="form-control col-3 me-2" id="expYear" name="expYear" required>
                          <?php $selectedValue = $value['expYear'];
                          for ($i = 0; $i <= 30; $i++): ?>
                                 <option value="<?php echo $i; ?>" <?php echo ($i == $selectedValue) ? 'selected' : ''; ?>>
                                                 <?php echo $i; ?> Year<?php echo ($i !== 1) ? 's' : ''; ?>
                                 </option>
                          <?php endfor; ?>
                          <option value="30+" <?php if ($value['experience'] === '30+')
                            echo ' selected'; ?>>30+ Years</option>
                           </select>
                          <label for="experience" class="form-label"></label>
                          <select class="form-control col-3" id="expMonth" name="expMonth" required>
                          <?php $selectedValue = $value['expMonth'];
                          for ($i = 0; $i <= 11; $i++): ?>
                                 <option value="<?php echo $i; ?>" <?php echo ($i == $selectedValue) ? 'selected' : ''; ?>>
                                                 <?php echo $i; ?> Month<?php echo ($i !== 1) ? 's' : ''; ?>
                                 </option>
                          <?php endfor; ?>
                          </select>
                            </div>
                            <div id="experienceexp_error" class="text-danger error"></div>
                            </div>
                           </div> -->

                                      <!-- <div class="col-md-3">
                            <div class="experience-container">
                                <label for="expYear" class="form-label">Experience</label>
                                <div class="d-md-flex">
                                  <label for="fromDate" class="pt-1 pe-2">From</label>
                                  <div class="col-md-8  me-2">
                                    <input type="date" class="form-control" id="fromDate" name="fromDate" value="<?php echo $value['expYear']; ?>" required>
                                      <div id="experienceexp_error" class="text-danger error"></div>
                                    </div>
                                <label for="expMonth" class="pt-1 px-2">To</label>
                                    <div class="col-md-8 ">
                                        <input type="date" class="form-control" id="toDate" name="toDate" value="<?php echo $value['expMonth']; ?>" required>
                                          <div id="experienceexpmonth_error" class="text-danger error"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div> -->

                                 
                                          <div class="col-md-6">
                                              <label class="form-label" for="company name">Company Name</label>
                                              <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname" name="companyname" required>
                                  <div id="companyname_error" class="error"></div>
                               </div>

                               <div class="col-md-6">
                                <div class="experience-container">
                                    <label for="expYear" class="form-label">Experience</label>

                                    <div class="d-md-flex">

                                      <label for="fromDate" class="pt-1 pe-2">From</label>

                                      <div class="col-md-3  me-2">
                                        <input type="date" class="form-control" id="fromDate" name="fromDate" value="<?php echo $value['expYear']; ?>" required>
                                      <div id="experienceexp_error" class="text-danger error"></div>
                                    </div>


                                    <label for="toDate" class="pt-1 px-2">To</label>

                                    <div class="col-md-3">
                                        <input type="date" class="form-control" id="toDate" name="toDate" value="<?php echo $value['expMonth']; ?>" required>
                                      <div id="experienceexpmonth_error" class="text-danger error"></div>
                                    </div>

                                
                                    <input type="checkbox" id="till_now" name="till_now" class="ms-3"> 
                                    <label for="toDate" class="pt-1 px-2">Till now</label>
                                
                                  
                                  </div>
                                </div>
                              </div> 
                        

                                <div class="col-md-6">                                 
                                  <label class="form-label">Total duration</label>
                                  <p class="form-control" id="result"><span id="years"></span> Years & <span id="months"> </span> Months</p>
                                </div>

                               <div class="col-md-12">
                                            <label class="form-label" for="role">Role in the Company</label>
                                            <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role" required>
                                            <div id="role_error" class="error"></div>
                               </div>

                        <!-- JOB PROFILE -->

                               <!-- <div class="col-12">
                                        <label class="form-label" for="profile">Job Profile</label>
                                        <input type="text" class="form-control" value="<?php echo $value['profile']; ?>" id="profile" name="profile" required>
                                        <div id="profile_error" class="error"></div>
                           </div> -->

                               <h5 class="card-title">Previous Job's Manager Details</h5>

                               <div class="col-md-6">
                                            <label class="form-label" for="Name">Name</label>
                                            <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>" id="nameofemployer" name="nameofemployer" required>
                                            <div id="name_error" class="error"></div>
                               </div>

                               <div class="col-md-6">
                                            <label class="form-label" for="phone number">Mobile Number</label>
                                            <input type="text" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>" id="number" name="number" required>
                                            <div id="mobilenum_error" class="error"></div>
                               </div>

                               <div class="col-md-6">
                                            <label class="form-label" for="email">Email</label>
                                            <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>" id="emailid" name="emailid" required>
                                            <div id="emailid_error" class="error"></div>
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
                          clearErrorMessages();

                          var category = document.getElementById("category");
                          var subcategory = document.getElementById("subcategory");
                          var expYear = document.getElementById("fromDate");
                          var expMonth = document.getElementById("toDate");
                          var companyname = document.getElementById("companyname");
                          var role = document.getElementById("role");
                          var profile = document.getElementById("profile");
                          var ename = document.getElementById("nameofemployer");
                          var phonenumberu = document.getElementById("number");
                          var emailu = document.getElementById("emailid");

                          if (category.value === '') {
                            displayError('Please select a category', 'category_error');
                            return false;
                          }

                          if (subcategory.value === '') {
                            displayError('Please select a subcategory', 'subcategory_error');
                            return false;
                          }

                          if (expYear.value === '') {
                            displayError('From date must be filled out', 'experienceexp_error');
                            return false;
                          }

                          if (expMonth.value === '') {
                            displayError('To dtae must be filled out', 'experienceexpmonth_error');
                            return false;
                          }

                          if (expYear.value >= expMonth.value) {
                                displayError('To date must be after From date', 'experienceexpmonth_error');
                                return false;
                            } 

                          if (companyname.value === '') {
                            displayError('Company name must be filled out', 'companyname_error');
                            return false;
                          }

                          if (role.value === '') {
                            displayError('Role must be filled out', 'role_error');
                            return false;
                          }
      
                         // JOB PROFILE
                          // if (profile.value === '') {
                          //   displayError('Job profile must be filled out', 'profile_error');
                          //   return false;
                          // }

                          if (ename.value === '') {
                            displayError('Employer name must be filled out', 'name_error');
                            return false;
                          }

                          if (phonenumberu.value === '') {
                            displayError('Mobile number must be filled out', 'mobilenum_error');
                            return false;
                          } else if (!/^\d{10}$/.test(phonenumberu.value)) {
                            displayError('Mobile number must have exactly 10 digits', 'mobilenum_error');
                            return false;
                          }

                          if (emailu.value === '') {
                            displayError('Email id must be filled out', 'emailid_error');
                            return false;
                          } else if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(emailu.value)) {
                            displayError('Invalid email address', 'emailid_error');
                            return false;
              }
                          return true;
                        }

                        function displayError(message, elementId) {
                          var errorElement = document.getElementById(elementId);
                          errorElement.innerHTML = message;
                          errorElement.style.color = 'red';
                        }

                        function clearErrorMessages() {
                          var errorElements = document.getElementsByClassName('error');
                          Array.from(errorElements).forEach(function (errorElement) {
                            errorElement.textContent = '';
                          });
                        }
                      </script>

  <script>
      document.getElementById('fromDate').addEventListener('input', updateDateDifference);
      document.getElementById('toDate').addEventListener('input', updateDateDifference);
      document.getElementById('till_now').addEventListener('change', updateToDate);

      function updateDateDifference() {
        var fromDate = new Date(document.getElementById('fromDate').value);
        var toDate = new Date(document.getElementById('toDate').value);

        // Check if "Till Now" checkbox is checked
        var tillNowChecked = document.getElementById('till_now').checked;

        // Disable or enable "To Date" based on "Till Now" checkbox
        document.getElementById('toDate').disabled = tillNowChecked;

        // If "Till Now" is checked, set "To Date" to current date
        if (tillNowChecked) {
          var today = new Date();
          var formattedDate = today.toISOString().split('T')[0]; // Get the date in YYYY-MM-DD format
          document.getElementById('toDate').value = formattedDate;
        }

        if (!isNaN(fromDate.getTime()) && (!tillNowChecked || !isNaN(toDate.getTime()))) {
          var timeDiff = tillNowChecked ? (new Date() - fromDate) : (toDate - fromDate);

          var yearsDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 365.25)) : toDate.getFullYear() - fromDate.getFullYear();
          var monthsDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24 * 30.44)) % 12 : toDate.getMonth() - fromDate.getMonth();
          var daysDiff = tillNowChecked ? Math.floor(timeDiff / (1000 * 60 * 60 * 24)) % 30.44 : toDate.getDate() - fromDate.getDate();

          if (daysDiff < 0) {
            monthsDiff--;
            daysDiff += new Date(toDate.getFullYear(), toDate.getMonth(), 0).getDate();
          }

          if (monthsDiff < 0) {
            yearsDiff--;
            monthsDiff += 12;
          }

          document.getElementById('years').textContent = yearsDiff;
          document.getElementById('months').textContent = monthsDiff;
        }
      }

      function updateToDate() {
    var today = new Date();

    // Adjust to set the current date at midnight (start of the day)
    today.setHours(0, 0, 0, 0);

    var to_date_input = document.getElementById('toDate');
    var till_now_checkbox = document.getElementById('till_now');

    if (till_now_checkbox.checked) {
      // Subtract one day (24 hours) from today's date
      var yesterday = new Date(today);
      yesterday.setDate(today.getDate() - 1);

      to_date_input.valueAsDate = yesterday;
    } else {
      // Enable the "To Date" input field
      to_date_input.disabled = false;
    }

    updateDateDifference();
  }

  window.onload = function() {
        updateDateDifference();
      };
    </script>

                                    <?php
        } elseif ($method == "areaOfIntrestTable") {
          ?>
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('areaofinterest').classList.add('active');
                        </script>
                        <section class="usertable">
                            <div class="pagetitle">
                                <h1>Area of Job Interest and Skill Details</h1>
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
                       <a class="" href="#addinterestform">
                       <button type="button" class="btn btn-success mb-4" onclick="addinterestform()">+ Add Area of Job Interest</button></a>
                      <div>
                      <a class="" href="<?php echo baseUrl . "Candidate/experienceTable" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                      <a class="" href="<?php echo baseUrl . "Candidate/resume" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                      </div>
                                     </div>
                                     <?php
                                     if (isset($areaOfIntrestTable[0]['id'])) {
                                       $count = 1;
                                       ?>
                                              <table class="table">
                                               <thead>
                                            <tr>
                              <th scope="col"></th>
                              <th scope="col">S.No</th>
                              <th scope="col">Job Category</th>
                              <th scope="col">Job Subcategory</th>
                              <th scope="col">Prefered Location</th>
                              <!-- <th scope="col">Experience</th> -->
                              <th scope="col">Job Type</th>
                              <th scope="col">Description</th>
                              <th scope="col">Expected Salary</th>
                              <th scope="col">Action</th>
                                            </tr>
                                               </thead>
                                               <tbody>
                                               <?php
                                               if (isset($areaOfIntrestTable[0]['id'])) {
                                                 $count = 1;
                                                 foreach ($areaOfIntrestTable as $key => $value) {
                                                   $seekerId = $_SESSION['seekerId'];
                                                   ?>
                                                             <tr>
                                                               <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteAreaInterest'; ?>" id="form_<?= $value['id']; ?>">
                                                                          <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                                     <td><?php echo $count++ ?>.</td>
                                                             <td><?php echo $value['other_interst_category'] ?></td> 
                                                             <td><?php echo $value['other_sub_interst_category'] ?></td>
                                                             <td><?php echo $value['prefered_location'] ?></td>
                                                             <!-- <td><?php echo $value['expYear'] ?> Years & <?php echo $value['expMonth'] ?> Months</td> -->
                                                             <td><?php echo $value['job_type'] ?></td>
                                                             <td><?php echo $value['description'] ?></td>
                                                             <td><?php echo $value['expected_salary'] ?></td>
                                                             <td>
                                                             <div class="d-flex">
                                               <a href="<?php echo baseUrl . "Candidate/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                               <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                                             </div>
                                                             </td>
                                                              </tr>
                                                <?php
                                                 }
                                               }
                                               ?>
                                               </tbody>
                                              </table>
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                              <?php
                                     } else {
                                       ?>
                                              <h5 class="card-title">No Records Found<span></span></h5>
                               <?php
                                     }
                                     ?>
                                    </div>
                                </div>

                                <div class="card" id="addinterestform" style="display:none">
                                <div class="card-body">
                                    <h5 class="card-title">Add Job Interest</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate  method="post"
                                    onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Candidate/insertAreaOfIntrest" ?>">

                                      <div class="col-12">
                      <label class="form-label" for="category">Category</label>
                      <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required>
                      <option value="">Select a Category</option>
                      <?php
                      foreach ($categoryList as $key => $value) { ?>
                                               <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                        <?php } ?>
                        <option value="others">Others</option>
                      </select>
                      <div id="areacat_error" class="error"></div>
                                      </div>

                                      <div class="col-12" id="newcategory_group" style="display: none;">
                                      <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                                      <input class="form-control" id="newcategory" name="newcategory"  placeholder="Enter new category">
                                      <div id="newcategory_error" class="text-danger error"></div>
                                      <input id="categoryothers" name="categoryothers" value="1" hidden >
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
                      <label class="form-label" for="preferred-location">Preferred Location to work</label>
                      <input type="text" class="form-control" id="preferred-location" name="preferred-location" placeholder="Enter prefered location" required>
                      <div id="arealocation_error" class="error"></div>
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
                        <option value="fulltime">Full Time</option>
                        <option value="parttime">Part Time</option>
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

                            <script>

                        function showHideOtherField() {
                                     var categoryDropdown = document.getElementById('category');
                                     var otherCategoryField = document.getElementById('newcategory_group');

                                     if (categoryDropdown.value === 'others') {
                       otherCategoryField.style.display = 'block';
                                     } else {
                       otherCategoryField.style.display = 'none';
                                     }
                                     }

                       function clearFormFields(form) {
                      var fieldsToClear = form.querySelectorAll('input, select');
                      for (var i = 0; i < fieldsToClear.length; i++) {
                        fieldsToClear[i].value = '';
                      }
                       }

                       function validateAreaForm() {
                      clearErrorMessages();

                      var category = document.getElementById("category").value;
                      var newothercategory = document.getElementById("newcategory_group");
                      var subcategory = document.getElementById("subcategory").value;
                      var preferredLocation = document.getElementById("preferred-location").value;
                      var jobtype = document.getElementById("jobtype").value;
                      // var expYear = document.getElementById("expYear").value;
                      // var expMonth = document.getElementById("expMonth").value;
                      var description = document.getElementById("description").value;
                      var expectedSalary = document.getElementById("expected-salary").value;

                      if (category === "") {
                        displayError('Please select a category', 'areacat_error');
                        return false;
                      }

                      if (newothercategory.value === '' && document.getElementById('newcategory_group').style.display == "block") {
                          displayError('Please enter newcategory', 'newcategory_error');
                          return false;
                        }

                      if (subcategory === "" && category !== "") {
                        displayError('Please select a subcategory', 'areasubcat_error');
                        return false;
                      }

                      if (preferredLocation.trim() === "") {
                        displayError('Preferred location must be filled out', 'arealocation_error');
                        return false;
                      }

                      // if (expYear.trim() === "") {
                      //   displayError('Year must be filled out', 'areaexp_error');
                      //   return false;
                      // }

                      // if (expMonth.trim() === "") {
                      //   displayError('Month must be filled out', 'areaexp_error');
                      //   return false;
                      // }

                      if (description.trim() === "") {
                        displayError('Description must be filled out', 'areades_error');
                        return false;
                      }

                      if (jobtype.trim() === "") {
                        displayError('Job type must be filled out', 'areajob_error');
                        return false;
                      }

                      if (expectedSalary.trim() === "") {
                        displayError('Expected salary must be filled out', 'areasalary_error');
                        return false;
                      }

                      return true;
                       }

                       function clearErrorMessages() {
                      var errorElements = document.querySelectorAll('.error');
                      errorElements.forEach(function (errorElement) {
                        errorElement.textContent = '';
                      });
                       }

                       function displayError(message, elementId) {
                      var errorElement = document.getElementById(elementId);
                      errorElement.innerHTML = message;
                      errorElement.style.color = 'red';
                       }
                                       </script>


  <div class="card recent-sales overflow-auto">      
                                    <div class="card-body">
                                      <h5 class="card-title">Skill Table<span></span></h5>
                        <div>
                       <a class="" href="#addskillform">
                       <button type="button" class="btn btn-success mb-4" onclick="addskillform()" >+ Add Skill</button></a>
                        <div>
                       <?php
                       if (isset($skillTable[0]['id'])) {
                         $count = 1;
                         ?>
                                              <table class="table">
                                               <thead>
                                            <tr>
                              <th scope="col"></th>
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
                                                 $count = 1;
                                                 foreach ($skillTable as $key => $value) {
                                                   $seekerId = $_SESSION['seekerId'];
                                                   ?>
                                                             <tr>
                                                              <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteSkill'; ?>" id="form_<?= $value['id']; ?>">
                                                                          <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                                     <td><?php echo $count++ ?>.</td>
                                                             <td><?php echo $value['skill'] ?></td>
                                                             <td><?php echo $value['experience'] ?> Years</td>
                                                             <td><?php echo $value['skill_level'] ?></td> 
                                                             <td>
                                                             <div class="d-flex">
                                               <a class="" href="<?php echo baseUrl . "Candidate/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                               <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                                             </div>
                                                             </td>
                                                </tr>
                                                <?php
                                                 }
                                               }
                                               ?>
                                               </tbody>
                                              </table>
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                              <?php
                       } else {
                         ?>
                                              <h5 class="card-title">No Records Found<span></span></h5>
                               <?php
                       }
                       ?>
                                    </div>
                        </div>
                                </div>
                              </div><!-- End Recent Sales -->
                        </section>

                        <div class="card" id="addskillform" style="display:none" >
                                <div class="card-body">
                                    <h5 class="card-title">Add New Skill</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate  method="post"
                                    onsubmit="return validateSkillForm()" action="<?php echo baseUrl . "Candidate/insertSkillForm" ?>">

                            
                                      <div class="col-12">
                      <label class="form-label" for="skillname">Skill Name</label>
                      <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name" required>
                      <div id="sname_error" class="error"></div>
                                      </div>

                                      <!-- <div class="col-md-6">
                            <label class="form-label" for="experience">Experience</label>
                            <input type="text" class="form-control" name="skillexperience" id="skillexperience" placeholder="Enter skill experience" required>
                            <select class="form-control" name="skillexperience" id="skillexperience" required>
                <option value="">Select Experience</option>
                <option value="fresher">Fresher</option>
                <option value="0-2">0-2 years</option>
                <option value="2-5">2-5 years</option>
                <option value="5-10">5-10 years</option>
                <option value="10-20">10-20 years</option>
                <option value="20-above">20 years above</option>
              </select>
                            <div id="sexp_error" class="error"></div>
                          </div> -->

                                      <div class="col-md-6">
                            <div class="experience-container">
                        <label for="experience" class="form-label">Experience</label>
                        <div class="d-flex">
                        <select class="form-control" id="experience" name="experience" required>
                        <option value=""> Select year </option>
                            <?php for ($i = 0; $i <= 20; $i++): ?>
                  
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?> Year<?php echo $i !== 1 ? 's' : ''; ?></option>
                            <?php endfor; ?>
                            <option value="20+"> 20+ Years</option>
                        </select>
            
                        </div>
                        <div id="sexp_error" class="error"></div>
                            </div>
                            </div>               

                                      <div class="col-md-6">
                      <label class="form-label" for="skillLevel">Skill Level</label>
                      <select class="form-control" name="skilllevel" id="skilllevel" required>
                        <option value="">Select Skill Level</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                      </select>
                      <div id="slevel_error" class="error"></div>
                                      </div>

                                    <input type="number" class="form-control"  value="1" name="areasubmit" hidden>

                                    <div class="text-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>

                                </form><!-- End Multi Columns Form -->

                                </div>
                            </div>

                            <script>
                          function validateSkillForm(){
                            var sname = document.getElementById("skillname").value;
                            var sexp = document.getElementById("experience").value;
                            var slevel = document.getElementById("skilllevel").value;

                            clearErrorMessages();

                            if (sname.trim() === "") {
                            displayError('Skill name must be filled out', 'sname_error');
                            return false;
                          }

                          if (sexp.trim() === "") {
                            displayError('Select an experience', 'sexp_error');
                            return false;
                          }

                          if (slevel.trim() === "") {
                            displayError('Skill level must be filled out', 'slevel_error');
                            return false;
                          }

                          return true;
                        }

                        function displayError(message, elementId) {
                          var errorElement = document.getElementById(elementId);
                          errorElement.innerHTML = message;
                          errorElement.style.color = 'red';
                        }

                        function clearErrorMessages() {
                          var errorElements = document.getElementsByClassName('error');
                          Array.from(errorElements).forEach(function (errorElement) {
                            errorElement.textContent = '';
                          });
                        }
                  
                        </script>

                            <script>
                     function addinterestform(){
                           document.getElementById("addinterestform").style.display = "block";
                            }
                    function addskillform(){
                           document.getElementById("addskillform").style.display = "block";
                            }
                            </script> 

              <?php
        } elseif ($method == "addAreaOfIntrestForm") {
          ?>
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('areaofinterest').classList.add('active');
                        </script>
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
                                    onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Candidate/insertAreaOfIntrest" ?>">

                                      <div class="col-12">
                      <label class="form-label" for="category">Category</label>
                      <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required>
                      <option value="">Select a Category</option>
                      <?php
                      foreach ($categoryList as $key => $value) {
                        ?>
                                               <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                        <?php } ?>
                        <option value="others">Others</option>
                      </select>
                      <div id="areacat_error" class="error"></div>
                                      </div>

                                      <div class="col-12" id="newcategory_group" style="display: none;">
                                      <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                                      <input class="form-control" id="newcategory" name="newcategory"  placeholder="Enter new category">
                                      <div id="newcategory_error" class="text-danger error"></div>
                                      <input id="categoryothers" name="categoryothers" value="1" hidden >
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

                          
                                      <!-- <div class="col-md-3">
                <div class="experience-container">
            <label for="experience" class="form-label">Experience</label>
            <div class="d-flex">
            <select class="form-control col-3 me-2" id="expYear" name="expYear" required>
            <option value="years"> Select year </option>
                <?php for ($i = 0; $i <= 30; $i++): ?>
                  
                    <option value="<?php echo $i; ?>"><?php echo $i; ?> Year<?php echo $i !== 1 ? 's' : ''; ?></option>
                <?php endfor; ?>
                <option value="20+ years"> 20+ Years </option>
            </select>
            
            <select class="form-control col-3" id="expMonth" name="expMonth" required>
            <option value="months"> Select month </option>
                <?php for ($i = 0; $i <= 11; $i++): ?>
                  
                    <option value="<?php echo $i; ?>"><?php echo $i; ?> Month<?php echo $i !== 1 ? 's' : ''; ?></option>
                <?php endfor; ?>
            </select>
            </div>
            <div id="experienceexp_error" class="text-danger error"></div>
                </div>
                </div>                -->

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

                        function showHideOtherField() {
                                     var categoryDropdown = document.getElementById('category');
                                     var otherCategoryField = document.getElementById('newcategory_group');

                                     if (categoryDropdown.value === 'others') {
                       otherCategoryField.style.display = 'block';
                                     } else {
                       otherCategoryField.style.display = 'none';
                                     }
                                     }

                       function clearFormFields(form) {
                      var fieldsToClear = form.querySelectorAll('input, select');
                      for (var i = 0; i < fieldsToClear.length; i++) {
                        fieldsToClear[i].value = '';
                      }
                       }

                       function validateAreaForm() {
                      clearErrorMessages();

                      var category = document.getElementById("category").value;
                      var newothercategory = document.getElementById("newcategory_group");
                      var subcategory = document.getElementById("subcategory").value;
                      var preferredLocation = document.getElementById("preferred-location").value;
                      var jobtype = document.getElementById("jobtype").value;
                      // var expYear = document.getElementById("expYear").value;
                      // var expMonth = document.getElementById("expMonth").value;
                      var description = document.getElementById("description").value;
                      var expectedSalary = document.getElementById("expected-salary").value;

                      if (category === "") {
                        displayError('Please select a category', 'areacat_error');
                        return false;
                      }

                      if (newothercategory.value === '' && document.getElementById('newcategory_group').style.display == "block") {
                          displayError('Please enter newcategory', 'newcategory_error');
                          return false;
                        }

                      if (subcategory === "" && category !== "") {
                        displayError('Please select a subcategory', 'areasubcat_error');
                        return false;
                      }

                      if (preferredLocation.trim() === "") {
                        displayError('Preferred location must be filled out', 'arealocation_error');
                        return false;
                      }

                      // if (expYear.trim() === "") {
                      //   displayError('Year must be filled out', 'areaexp_error');
                      //   return false;
                      // }

                      // if (expMonth.trim() === "") {
                      //   displayError('Month must be filled out', 'areaexp_error');
                      //   return false;
                      // }

                      if (description.trim() === "") {
                        displayError('Description must be filled out', 'areades_error');
                        return false;
                      }

                      if (jobtype.trim() === "") {
                        displayError('Job type must be filled out', 'areajob_error');
                        return false;
                      }

                      if (expectedSalary.trim() === "") {
                        displayError('Expected salary must be filled out', 'areasalary_error');
                        return false;
                      }

                      return true;
                       }

                       function clearErrorMessages() {
                      var errorElements = document.querySelectorAll('.error');
                      errorElements.forEach(function (errorElement) {
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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('areaofinterest').classList.add('active');
                        </script>
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
                                    onsubmit="return validateSkillForm()" action="<?php echo baseUrl . "Candidate/insertSkillForm" ?>">

                            
                                      <div class="col-12">
                      <label class="form-label" for="skillname">Skill Name</label>
                      <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name" required>
                      <div id="sname_error" class="error"></div>
                                      </div>

                                      <!-- <div class="col-md-6">
                            <label class="form-label" for="experience">Experience</label>
                            <input type="text" class="form-control" name="skillexperience" id="skillexperience" placeholder="Enter skill experience" required>
                            <select class="form-control" name="skillexperience" id="skillexperience" required>
                <option value="">Select Experience</option>
                <option value="fresher">Fresher</option>
                <option value="0-2">0-2 years</option>
                <option value="2-5">2-5 years</option>
                <option value="5-10">5-10 years</option>
                <option value="10-20">10-20 years</option>
                <option value="20-above">20 years above</option>
              </select>
                            <div id="sexp_error" class="error"></div>
                          </div> -->

                                      <div class="col-md-6">
                            <div class="experience-container">
                        <label for="experience" class="form-label">Experience</label>
                        <div class="d-flex">
                        <select class="form-control" id="experience" name="experience" required>
                        <option value=""> Select year </option>
                            <?php for ($i = 0; $i <= 20; $i++): ?>
                  
                                            <option value="<?php echo $i; ?>"><?php echo $i; ?> Year<?php echo $i !== 1 ? 's' : ''; ?></option>
                            <?php endfor; ?>
                            <option value="20+ years"> 20+ Years </option>
                        </select>
            
                        </div>
                        <div id="sexp_error" class="error"></div>
                            </div>
                            </div>               

                                      <div class="col-md-6">
                      <label class="form-label" for="skillLevel">Skill Level</label>
                      <select class="form-control" name="skilllevel" id="skilllevel" required>
                        <option value="">Select Skill Level</option>
                        <option value="beginner">Beginner</option>
                        <option value="intermediate">Intermediate</option>
                        <option value="advanced">Advanced</option>
                      </select>
                      <div id="slevel_error" class="error"></div>
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
                          function validateSkillForm(){
                            var sname = document.getElementById("skillname").value;
                            var sexp = document.getElementById("experience").value;
                            var slevel = document.getElementById("skilllevel").value;

                            clearErrorMessages();

                            if (sname.trim() === "") {
                            displayError('Skill name must be filled out', 'sname_error');
                            return false;
                          }

                          if (sexp.trim() === "") {
                            displayError('Skill experience must be filled out', 'sexp_error');
                            return false;
                          }

                          if (slevel.trim() === "") {
                            displayError('Skill level must be filled out', 'slevel_error');
                            return false;
                          }

                          return true;
                        }

                        function displayError(message, elementId) {
                          var errorElement = document.getElementById(elementId);
                          errorElement.innerHTML = message;
                          errorElement.style.color = 'red';
                        }

                        function clearErrorMessages() {
                          var errorElements = document.getElementsByClassName('error');
                          Array.from(errorElements).forEach(function (errorElement) {
                            errorElement.textContent = '';
                          });
                        }
                  
                        </script>
                
                       <?php
        } elseif ($method == 'updateAreaOfIntrest') {
          ?>
                           <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('areaofinterest').classList.add('active');
                        </script> 
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

                            <div class="card recent-sales overflow-auto">
                           
                                       <div class="card-body">
              
                       <h5 class="card-title">Area of Job Interest Table<span></span></h5>
               
                       <div class="d-flex justify-content-between">
                       <a class="" href="#addinterestform">
                       <button type="button" class="btn btn-success mb-4" onclick="addinterestform()" disabled>+ Add Area of Job Interest</button></a>
                      <div>
                      <a class="" href="<?php echo baseUrl . "Candidate/experienceTable" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i> Previous</button></a>
                      <a class="" href="<?php echo baseUrl . "Candidate/resume" ?>"> <button type="button" class="btn btn-info mb-4 ">Next <i class="bi bi-arrow-right"></i></button></a>
                      </div>
                      </div>
                      <?php
                      if (isset($areaOfIntrestTable[0]['id'])) {
                        $count = 1;
                        ?>
                               <table class="table">
                                <thead>
                                               <tr>
                                                <th scope="col"></th>
                                             <th scope="col">S.No</th>
                                             <th scope="col">Job Category</th>
                                             <th scope="col">Job Subcategory</th>
                                             <th scope="col">Prefered Location</th>
                                             <!-- <th scope="col">Experience</th> -->
                                             <th scope="col">Job Type</th>
                                             <th scope="col">Description</th>
                                             <th scope="col">Expected Salary</th>
                                             <th scope="col">Action</th>
                                               </tr>
                                </thead>
                                <tbody>
                                <?php
                                if (isset($areaOfIntrestTable[0]['id'])) {
                                  $count = 1;
                                  foreach ($areaOfIntrestTable as $key => $value) {
                                    $seekerId = $_SESSION['seekerId'];
                                    ?>
                                              <tr>
                                                 <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteAreaInterest'; ?>" id="form_<?= $value['id']; ?>">
                                                            <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                                      <td><?php echo $count++ ?>.</td>
                                              <td><?php echo $value['other_interst_category'] ?></td> 
                                              <td><?php echo $value['other_sub_interst_category'] ?></td>
                                              <td><?php echo $value['prefered_location'] ?></td>
                                              <!-- <td><?php echo $value['expYear'] ?> Years & <?php echo $value['expMonth'] ?> Months</td> -->
                                              <td><?php echo $value['job_type'] ?></td>
                                              <td><?php echo $value['description'] ?></td>
                                              <td><?php echo $value['expected_salary'] ?></td>
                                              <td>
                                              <div class="d-flex">
                                                              <a href="<?php echo baseUrl . "Candidate/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                              <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                              </div>
                                              </td>
                                               </tr>
                                                              <?php
                                  }
                                }
                                ?>
                                </tbody>
                               </table>
                               <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                               </form>
                               <?php
                      } else {
                        ?>
                               <h5 class="card-title">No Records Found<span></span></h5>
                                             <?php
                      }
                      ?>
                                       </div>
                                   </div>

                            <div class="card" id="editinterestform">
                                <div class="card-body">
                                    <h5 class="card-title">Update Job Interest</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate  method="post"
                                    onsubmit="return validateAreaForm()" action="<?php echo baseUrl . "Candidate/updateInsertAreaOfIntrest" ?>">

                                    <?php
                                    foreach ($updateAreaOfIntrest as $key => $value) {
                                      $seekerId = $_SESSION['seekerId'];
                                      ?>
                              <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                              <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
              
                               <div class="col-12">
                                            <label class="form-label" for="category">Category</label>
                                            <select class="form-control" id="category" name="category" value="<?php echo $value['other_interst_category']; ?>" >
                                            <?php
                                            $defaultSelectedValue = $value['other_interst_category'];
                                            foreach ($categoryList as $key => $cvalue) {
                                              $selected = ($cvalue->categoryName == $defaultSelectedValue) ? 'selected' : ''; ?>
                                                       <option value="<?php echo $cvalue->categoryName ?>" <?php echo $selected ?>>
                                      <?php echo $cvalue->categoryName ?>
                                                       </option>
                                             <?php } ?>
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
                               <!-- <div class="col-md-6">
                              <label class="form-label" for="experience">Experience</label>
                              <input type="text" class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>" required>
                               <select class="form-control" id="experience" name="experience" value="<?php echo $value['experience']; ?>" required>
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
                              <div id="areaexp_error" class="error"></div>
                            </div> -->

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
                                  // var experience = document.getElementById("experience").value;
                                  var description = document.getElementById("description").value;
                                  var expectedSalary = document.getElementById("expected-salary").value;

                                  clearErrorMessages();

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

                                  // if (experience.trim() === "") {
                                  //    alert("Experience must be filled out.");
                                  //   displayError('Experience must be filled out', 'areaexp_error');
                                  //   return false;
                                  // }

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
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('areaofinterest').classList.add('active');
                        </script>
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

                            <div class="card recent-sales overflow-auto">      
                                    <div class="card-body">
                                      <h5 class="card-title">Skill Table<span></span></h5>
                        <div>
                       <a class="" href="#addskillform">
                       <button type="button" class="btn btn-success mb-4" onclick="addskillform()" disabled>+ Add Skill</button></a>
                        <div>
                            
                       <table class="table">
                                      <thead>
                                       <tr>
                                    <th scope="col"></th>
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
                                        $count = 1;
                                        foreach ($skillTable as $key => $value) {
                                          $seekerId = $_SESSION['seekerId'];
                                          ?>
                                      <tr>
                                        <td> <form method="post" action="<?php echo baseUrl . 'Candidate/deleteSkill'; ?>" id="form_<?= $value['id']; ?>">
                                                  <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>">
                                            <td><?php echo $count++ ?>.</td>
                                      <td><?php echo $value['skill'] ?></td>
                                      <td><?php echo $value['experience'] ?> Years</td>
                                      <td><?php echo $value['skill_level'] ?></td> 
                                      <td>
                                      <div class="d-flex">
                                                     <a class="" href="<?php echo baseUrl . "Candidate/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                                     <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                                      </div>
                                      </td>
                                       </tr>
                                                      <?php
                                        }
                                        ?>
                                               </tbody>
                                              </table>
                                              <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                              <?php
                                      } else {
                                        ?>
                                              <h5 class="card-title">No Records Found<span></span></h5>
                               <?php
                                      }
                                      ?>
                                    </div>
                        </div>
                                </div>
                              </div>

                            <div class="card" id="editskillforrm" >
                                <div class="card-body">
                                    <h5 class="card-title">Update Skill</h5>

                                    <!-- Multi Columns Form -->
                                    <form class="row g-3 needs-validation" novalidate  method="post"
                                    onsubmit="return validateSkillForm()" action="<?php echo baseUrl . "Candidate/updateInsertSkill" ?>">

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
                                                       <div id="sname_error" class="error"></div>
                                                     </div>

                                                     <!-- <div class="col-md-6">
                            <label class="form-label" for="experience">Experience</label>
                            <input type="text" class="form-control" name="skillexperience" id="skillexperience" value="<?php echo $value['experience']; ?>" required >
                            <select class="form-control" name="skillexperience" id="skillexperience" required>
                               <option value="fresher" <?php if ($value['experience'] === 'fresher')
                                 echo ' selected'; ?>>Fresher</option>
                               <option value="0-2" <?php if ($value['experience'] === '0-2')
                                 echo ' selected'; ?>>0-2 years</option>
                               <option value="2-5" <?php if ($value['experience'] === '2-5')
                                 echo ' selected'; ?>>2-5 years</option>
                               <option value="5-10" <?php if ($value['experience'] === '5-10')
                                 echo ' selected'; ?>>5-10 years</option>
                               <option value="10-20" <?php if ($value['experience'] === '10-20')
                                 echo ' selected'; ?>>10-20 years</option>
                               <option value="20-above" <?php if ($value['experience'] === '20-above')
                                 echo ' selected'; ?>>20 years above</option>
                             </select> 
                            <div id="sexp_error" class="error"></div>
               </div> -->


                                       <div class="col-md-6">
                                      <div class="experience-container">
                                                     <label for="experience" class="form-label">Experience</label>
                                                     <div class="d-flex">
                                                     <select class="form-control col-3 me-2" id="experience" name="experience" required>
                                                     <?php $selectedValue = $value['experience'];
                                                     for ($i = 0; $i <= 20; $i++): ?>
                                                               <option value="<?php echo $i; ?>" <?php echo ($i == $selectedValue) ? 'selected' : ''; ?>>
                                              <?php echo $i; ?> Year<?php echo ($i !== 1) ? 's' : ''; ?>
                                                               </option>
                                                     <?php endfor; ?>
                                                     <option value="20+" <?php if ($value['experience'] === '20+')
                                                       echo ' selected'; ?>>20+ Years</option>
                                                       </select>
                                      </div>
                                      <div id="sexp_error" class="error"></div>
                                      </div>
                                      </div>                


                                                     <div class="col-md-6">
                                                       <label class="form-label" for="skillLevel">Skill Level</label>
                                                       <select class="form-control" name="skilllevel" id="skilllevel" required>
                                                      <option value="beginner" <?php if ($value['skill_level'] === 'beginner')
                                                        echo ' selected'; ?>>Beginner</option>
                                                     <option value="intermediate" <?php if ($value['skill_level'] === 'intermediate')
                                                       echo ' selected'; ?>>Intermediate</option>
                                                     <option value="advanced" <?php if ($value['skill_level'] === 'advanced')
                                                       echo ' selected'; ?>>Advanced</option>
                                                       </select>
                                                       <div id="slevel_error" class="error"></div>
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
                                       function validateSkillForm(){
                                                    var sname = document.getElementById("skillname").value;
                                                    var sexp = document.getElementById("experience").value;
                                                    var slevel = document.getElementById("skilllevel").value;

                                                    clearErrorMessages();

                                                    if (sname.trim() === "") {
                                                    displayError('Skill name must be filled out', 'sname_error');
                                                    return false;
                                       }

                                       if (sexp.trim() === "") {
                                                    displayError('Skill experience must be filled out', 'sexp_error');
                                                    return false;
                                       }

                                       if (slevel.trim() === "") {
                                                    displayError('Skill level must be filled out', 'slevel_error');
                                                    return false;
                                       }

                                       return true;
                                                       }

                                                       function displayError(message, elementId) {
                                       var errorElement = document.getElementById(elementId);
                                       errorElement.innerHTML = message;
                                       errorElement.style.color = 'red';
                                                       }

                                                       function clearErrorMessages() {
                                       var errorElements = document.getElementsByClassName('error');
                                       Array.from(errorElements).forEach(function (errorElement) {
                                                    errorElement.textContent = '';
                                       });
                                                       }
                  
                                                       </script>

                
                                                      <?php
                                      }
                                    }
        } elseif ($method == "resume") {
          ?>
                      <!-- Sidebar Active  -->
                    <script>
                         document.getElementById('resumes').classList.add('active');
                        </script>
                        <section class="Multi Columns Form" style="padding-bottom: 290px;">
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
                                    onsubmit="return validateForm()" action="<?php echo baseUrl . "Candidate/registered" ?>">

                            
                                    <?php if (!empty($arearesume[0]['resume_filename'])) { ?>
                                           <div class="col-md-6">
                                             <label class="form-label" for="file">Uploaded Resume</label>
                                             <input type="file" name="oldresume" id="oldresume" value="<?php echo $arearesume[0]['resume_filename'] ?>" hidden>
                                             <div class="uploadedfile d-md-flex" >
                                             <input type="file" class="form-control " id="idresume" name="file" accept=".pdf,.doc" hidden >
                                             <label id="file-input-labelresume" for="idresume" class="form-control">Change file</label>  
                                             <a href="<?php echo $arearesume[0]['resume_filename_url'] ?>" id="existfileresume" class="ms-2" style="margin-top:10px"><?php echo $arearesume[0]['resume_filename'] ?></a>
                                             </div>
                                         </div>
                                    <?php } else {
                                      ?>
                                           <div class="col-12">
                                         <label class="form-label" for="file">Upload Resume</label>
                                         <input type="file" class="form-control" name="file" id="idresume" accept=".pdf,.doc" required>
                                         <div id="resume_error" class="text-danger"></div>
                                     </div> 
                                    <?php } ?>

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
                                // uploaded resume
                                document.getElementById("file-input-labelresume").addEventListener("click", function() {
                      document.getElementById("existfileresume").style.display = "none";
                                    });

                                const fileInputresume = document.getElementById("idresume");
                                const fileInputLabelresume = document.getElementById("file-input-labelresume");

                                fileInputresume.addEventListener("change", function () {
                                    if (fileInputresume.files.length > 0) {
                                      fileInputLabelresume.textContent = fileInputresume.files[0].name;
                                    } else {
                                      fileInputLabelresume.textContent = "Select a File";
                                    }
                                });

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
                         <section class="Multi Columns Form" style="padding-bottom: 165px;">
                            <div class="pagetitle my-2">
                                <!-- <h1>Registered Successfully</h1> -->
                            </div><!-- End Page Title -->
                            <!-- <div class="card my-5"> -->
                              <div>
                                <div class="text-center"><br><br><br>
                                    <img class="p-sm-5 img-fluid" src="<?php echo baseUrl . "assets/employee_thanks.png" ?>" alt="Thanks" style="width:70%; height:120%; align-items: center">
                                </div>
                            </div>
                        </section>

                        <?php
        } elseif ($method == "myProfile") {
          ?>
              <section>
               <!-- Default Card -->
               <div class="card">
                  <div class="card-body">
                        <div class="container">
                                       <h2 class="text-center py-3">My Profile</h2>

                            <div class="row card recent-sales overflow-auto ">
                                          <div class="card-body">

                                      <?php
                                      if (isset($basicDetails)) {
                                        foreach ($basicDetails as $key => $value) {
                                          ?>
                                      <div class="col d-md-flex justify-content-between my-4">
                                                           <img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>" alt="profilep" width="150" height="150">
                                                            <p class="h2 text-secondary p-2 text-uppercase"><?php echo $value['name']; ?></p>
                                                            <div class="text-end mt-2" >
                                                           <p><?php echo $value['phonenumber'] ?> </p>
                                                                    <p> <?php echo $value['email'] ?>
                                                                    </p>
                                                                    <p> <?php echo $value['buildingName'] ?>, <?php echo $value['address'] ?>
                                                                    </p>
                                                                    <p> <?php echo $value['district'] ?>,
                                                                      <?php echo $value['pincode'] ?>
                                                                    </p>
                                                                  </div>
                                            </div>

                                            <div class="d-sm-flex justify-content-between pt-4" >
                                              <div>
                                                  <p>D.O.B : <?php echo $value['dateofbirth'] ?>
                                                      </p>
                                                      <p>Age :
                                                        <?php echo $value['age'] ?>
                                                      </p>
                                                    </div>
                                                    <div>
                                                      <p>Gender :
                                                        <?php echo $value['gender'] ?>
                                                      </p>
                                                      <p>Marital Status :
                                                        <?php echo $value['maritalStatus'] ?>
                                                      </p>
                                                    </div>
                                                  </div>
              
                                  </div>
                                </div>
                              </div>

                                <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                       <table class="table table-striped mt-2">
                                       <thead>
                                            <tr>
                                          <th class="col-4" scope="col">Profile Photo</th>
                                          <th class="col-4" scope="col">Aadhaar Front</th>
                                          <th class="col-4" scope="col">Aadhaar Back</th>
                                            </tr>
                                       </thead>
                                    <tbody>
                                        <tr>
                                          <td><a href="<?php echo $value['photo'] ?>" target="_blank" ><?php echo $value['photo_filename'] ?></a></td>
                                          <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank" ><?php echo $value['aadharfront_filename'] ?></a></td>
                                          <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank" ><?php echo $value['aadharback_filename'] ?></a></td>
                                        </tr>
                                                    <?php
                                        }
                                      }
                                      ?>
                       </tbody>
                      </table>
                                     </div>
                                </div>

                            <div class="card recent-sales overflow-auto">
                              <div class="card-body">
          
                      <h5 class="card-title">Educational Qualification</h5>
                             <table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col">S.No</th>
                               <th scope="col">Educational Qualification</th>
                               <th scope="col">Specialiization</th>
                               <th scope="col">Mode of Education</th>
                               <th scope="col">Institution Name</th>
                               <th scope="col">Percentage</th>
                               <th scope="col">Year of Passed Out</th>
                               <th scope="col">Certificates</th>
                           </tr>
                       </thead>
                       <tbody>
                     <?php
                     if (isset($educationTable[0]['id'])) {
                       $count = 1;
                       foreach ($educationTable as $key => $value) {
                         ?>
                              <tr>
                                <td><?php echo $count; ?>.</td>
                                <td><?php echo $value['educational_qualification'] ?></td>
                                <!-- <td><?php echo $value['department'] ?></td> -->
                                <?php
                                if (
                                  $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                  $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                  $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                  $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                  $value['educational_qualification'] === "B.Pharm" ||
                                  $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                                  $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                  $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                  $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                  $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                                  $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                                  $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                  $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"

                                ) {
                                  ?>
                                                                                    <td><?php echo $value['department'] ?></td>                                         
                                                             <?php
                                } else {
                                  ?>
                                                                                  <td>NA</a></td>
                                                                           <?php
                                }
                                ?>
                                <!-- <td><?php echo $value['educationmode'] ?></td> -->
                                <?php
                                if (
                                  $value['educationmode'] == "Corres"
                                ) {
                                  ?>
                                                                                    <td>Correspondence</td>                                                                           
                                                             <?php
                                } else {
                                  ?>
                                                                                  <td>Regular</td>
                                                                           <?php
                                }
                                ?> 
                                <td><?php echo $value['school_college_name'] ?></td>
                                <!-- <td><?php echo $value['percentage'] ?></td> -->
                                <?php
                                if (
                                  $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                  $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                  $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                  $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                  $value['educational_qualification'] === "B.Pharm" ||
                                  $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                                  $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                  $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                  $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                  $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                                  $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                                  $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                  $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                                  $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "12th/HSC"
                                ) {
                                  ?>
                                                                                    <td><?php echo $value['percentage'] ?></td>                                         
                                                             <?php
                                } else {
                                  ?>
                                                                                  <td>NA</a></td>
                                                                           <?php
                                }
                                ?>
                                <td><?php echo $value['yearOfPassing'] ?></td>
                                <?php
                                if ($value['educational_qualification'] == '10th/SSLC') {
                                  ?>
                                        <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                                          <?php
                                } else if ($value['educational_qualification'] == '12th/HSC') {
                                  ?>
                                                <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                                          <?php
                                } else if (
                                  $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                                ) {
                                  ?>
                                                        <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank"><?php echo $value['diploma_cer'] ?></a></td>
                                          <?php
                                } else if (
                                  $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                  $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                  $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                                  $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
                                  $value['educational_qualification'] === "B.Pharm"
                                ) {
                                  ?>
                                                                  <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                                          <?php
                                } else if (
                                  $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                  $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                  $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                                  $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                                  $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                                ) {
                                  ?>
                                                                          <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                                          <?php
                                } else if (
                                  $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                                  $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                                ) {
                                  ?>
                                                                                <td><a href="<?php echo $value['doccer_url'] ?>" target="blank"><?php echo $value['doc_cer'] ?></a></td>
                                          <?php
                                } else {
                                  ?>
                                                                                  <td>NA</a></td>
                                          <?php
                                }
                                ?>
                              </tr>
                                <?php
                                $count++;
                       }
                     }
                     ?>
                       </tbody>
                      </table>
                           </div>
                        </div>

                        <div class="card recent-sales overflow-auto">
                                       <div class="card-body">
                      <h5 class="card-title">Experience Details</h5>
          
                      <table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col">S.No</th>
                               <th scope="col">Job Category</th>
                               <th scope="col">Job Sub Category</th>
                               <th scope="col">Experience</th>
                               <th scope="col">Company Name</th>
                               <th scope="col">Job Role</th>
                               <th scope="col">Previous Job's Manager Name</th>
                               <th scope="col">Previous Job's Manager Mobile</th>
                               <th scope="col">Previous Job's Manager Email</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php
                       if (isset($experienceTable[0]['id'])) {
                         $loopcount = 1;
                         foreach ($experienceTable as $key => $ivalue) {
                           ?>
                                                    <tr>
                                                     <td scope="row"><?php echo $loopcount; ?>.</td>
                                                     <td><?php echo $ivalue['other_category'] ?></td>
                                                     <td><?php echo $ivalue['other_sub_category'] ?></td>
                                                     <td><?php echo $ivalue['expYear']; ?> - <?php echo $ivalue['expMonth']; ?></td>
                                                     <td><?php echo $ivalue['company_name'] ?></td>
                                                     <td><?php echo $ivalue['job_role'] ?></td>
                                                     <td><?php echo $ivalue['previous_employer_name'] ?></td>
                                                     <td><?php echo $ivalue['previous_employer_mobile'] ?></td>
                                                     <td><?php echo $ivalue['previous_employer_email'] ?></td>
                                                    </tr>
                                                      <?php
                                                      $loopcount++;
                         }
                       }
                       ?>
                       </tbody>
                      </table>
                                       </div>
                        </div>

                        <div class="card recent-sales overflow-auto">
                                       <div class="card-body">
                      <h5 class="card-title">Skills</h5>
          
                      <table class="table table-striped">
                       <thead>
                           <tr>
                               <th class="col-2" scope="col">S.No</th>
                               <th class="col-4" scope="col">Skill</th>
                               <th class="col-3" scope="col">Experience</th>
                               <th class="col-3" scope="col">Skill Level</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php
                           if (isset($skillTable[0]['id'])) {
                             $loopcount = 1;
                             foreach ($skillTable as $key => $svalue) {
                               ?>
                                    <tr>
                                      <td><?php echo $loopcount; ?>.</td>
                                      <td><?php echo $svalue['skill'] ?></td>
                                      <td><?php echo $svalue['experience'] ?> years</td>
                                      <td><?php echo $svalue['skill_level'] ?></td>
                                    </tr>
                                      <?php
                                      $loopcount++;
                             }
                           }
                           ?>
                       </tbody>
                      </table>          
                       </div>
                        </div>

                        <div class="card recent-sales overflow-auto">
                                       <div class="card-body">
                      <h5 class="card-title">Area of Interest</h5>
                             <table class="table table-striped">
                       <thead>
                           <tr>
                               <th scope="col">S.No</th>
                               <th scope="col">Job Category</th>
                               <th scope="col">Job Sub Category</th>
                               <th scope="col">Prefered Location</th>
                               <!-- <th scope="col">Experience</th> -->
                               <th scope="col">Job Type</th>
                               <th scope="col">Description</th>
                               <th scope="col">Expected Salary</th>
                           </tr>
                       </thead>
                       <tbody>
                       <?php
                       if (isset($areaOfIntrestTable[0]['id'])) {
                         $loopcount = 1;
                         foreach ($areaOfIntrestTable as $key => $avalue) {
                           ?>
                                      <tr>
                                        <td scope="row"><?php echo $loopcount; ?>.</td>
                                        <td><?php echo $avalue['other_interst_category'] ?> </td>
                                        <td><?php echo $avalue['other_sub_interst_category'] ?></td>
                                        <td><?php echo $avalue['prefered_location'] ?></td>
                                        <!-- <td><?php echo $avalue['experience'] ?></td> -->
                                        <td><?php echo $avalue['job_type'] ?></td>
                                        <td><?php echo $avalue['description'] ?></td>
                                        <td> <?php echo $avalue['expected_salary'] ?></td>
                                      </tr>
                                        <?php
                                        $loopcount++;
                         }
                       }
                       ?>
                       </tbody>
                      </table>          
                      </div>
                        </div>

                        <div class="card recent-sales overflow-auto">
                                       <div class="card-body">
                      <h5 class="card-title">Resume</h5>
                      <?php
                      if (isset($areaOfIntrestTable[0]['id'])) {
                        ?>
                                  <a href="<?php echo $areaOfIntrestTable[0]['resume_filename_url']; ?>" target="blank" >
                                  <?php echo $areaOfIntrestTable[0]['resume_filename'] ? $areaOfIntrestTable[0]['resume_filename'] : 'No file'; ?>
                                </a>
                                  <?php
                      }
                      ?>
                       </div>
                        </div>


                           </div>

                          </div>
                        </section>

        <?php
        }
        ?>

    </main><!-- End #main -->


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-auto py-3">
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