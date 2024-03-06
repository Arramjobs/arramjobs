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
    #pincode::-webkit-outer-spin-button,
    #pincode::-webkit-inner-spin-button,
    #year_passed::-webkit-outer-spin-button,
    #year_passed::-webkit-inner-spin-button,
    #percentage::-webkit-outer-spin-button,
    #percentage::-webkit-inner-spin-button,
    #phonenumber::-webkit-outer-spin-button,
    #phonenumber::-webkit-inner-spin-button,
    #phonenumber1::-webkit-outer-spin-button,
    #phonenumber1::-webkit-inner-spin-button,
    #number::-webkit-outer-spin-button,
    #number::-webkit-inner-spin-button,
    #company_mobilenum::-webkit-outer-spin-button,
    #company_mobilenum::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    th {
    white-space: nowrap;
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

    .sidebar ul .nav-item:hover {
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
              <a href="<?php echo $value['photo'] ?>"><img
                  src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>" alt="profilep" width="30" height="30"
                  class="rounded-circle"></a>
            <?php }
          } else {
            ?>
            <img src="<?php echo baseUrl . "assets/profilephoto.png" ?>" width="30" height="30" alt="Profile"
              class="rounded-circle">
          <?php }
          ?>
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

            <span class="d-none d-md-block dropdown-toggle ps-2">
              <?php echo $_SESSION['seekerName']; ?>
            </span>
            <span class="d-block d-md-none dropdown-toggle ps-2"></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>
                <?php echo $_SESSION['seekerName']; ?>
              </h6>
              <p class="pt-1">
                <?php echo $_SESSION['employeeidd']; ?>
              </p>
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
            <span>Basic Details</span>
          </div>
          <?php
          if (isset($basicDetails)) {
            if ($basicDetails[0]['bdsubmited'] === "1") {
              ?>
              <!-- <div class="border border-success border-5 rounded-circle" style="width: 15px; height:15px;"></div> -->
              <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile"
                class="rounded-circle">
            <?php } else { ?>
              <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
            <?php }
          } ?>
        </a>
      </li><!-- End Tables Nav -->

      <li class="nav-item" id="educations">
        <a class="nav-link d-flex justify-content-between" href="<?php echo baseUrl . "Candidate/educationTable" ?>">
          <div><i class="bi bi-bar-chart"></i>
            <span>Education Details</span>
          </div>
          <?php
          if (isset($eduTotalRows)) {
            if ($eduTotalRows >= "1") {
              ?>
              <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile"
                class="rounded-circle">
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
            <span>Experience Details</span>
          </div>
          <?php
          if (isset($expTotalRows)) {
            if ($expTotalRows >= "1") { ?>
              <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile"
                class="rounded-circle">
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
        <a class="nav-link d-flex justify-content-between"
          href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
          <div><i class="bi bi-box-arrow-in-right"></i>
            <span>Area of Job Interest</span>
          </div>
          <?php
          if (isset($areaTotalRows)) {
            if ($areaTotalRows >= "1") {
              ?>
              <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile"
                class="rounded-circle">
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
            <span>Resume</span>
          </div>
          <?php
          if (isset($resume[0]['resume_filename']) && ($resume[0]['resume_filename']) != null) {
            ?>
            <img src="<?php echo baseUrl . "assets/tick.svg" ?>" width="20" height="20" alt="Profile"
              class="rounded-circle">
            <?php
          } else {
            ?>
            <div class="border border-secondary border-5 rounded-circle" style="width: 15px; height:15px;"></div>
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
                  <p>At Arram Job Portal, our unwavering commitment is to empower individuals to realize their utmost
                    potential.
                    Regardless of where you stand in your career journey—whether you're a recent graduate venturing into
                    the
                    professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in
                    between—we are
                    your steadfast companion in the job search expedition. With our comprehensive platform, you gain
                    access to
                    a wealth of opportunities, career resources, and expert guidance to navigate the ever-evolving job
                    market.
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

                    <a class="my-5 " href="<?php echo baseUrl . "Candidate/basicdetails" ?>"><button type="button"
                        class="btn btn-success">Create Profile</button></a>

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
            <form class="row g-3 needs-validation" novalidate name="applicationform" enctype="multipart/form-data"
              method="post" onsubmit="return group()" action='<?php echo baseUrl . "Candidate/updateBasicDetails" ?>'>

              <?php
              foreach ($basicDetails as $key => $value) {
                ?>

                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

                <div class="col-12">
                  <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name"
                    oninput="validateName(this)" required>
                  <div id="Name_error" style="color: red;"></div>
                </div>
                <div class="col-md-12">
                  <label for="emailid" class="form-label">Email <span class="text-danger">*</span></label><br>
                  <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email"
                    required>
                  <div id="emailid_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <input type="password" class="form-control" id="password" value="<?php echo $value['password']; ?>"
                      name="password" required>
                    <button type="button" class="btn btn-outline-secondary"
                      onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                      <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                    </button>
                  </div>
                  <div id="password_error" style="color: red;"></div>
                </div>
                <div class="text-secondary" style="font-size:15px;display:none;margin:0px" id="passwordmessage">Enter the
                  date of birth in DDMMYYYY (01051996).</div>

                <div class="col-md-6">
                  <label for="phonenumber" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>"
                    name="phonenumber" pattern="[0-9]{1,15}" maxlength="10" oninput="validatePhoneNumber1(this)" required
                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                  <div id="phonenumber_error" style="color: red;"></div>
                </div>

                <div class="col-md-6">
                  <label for="phonenumber1" class="form-label">Emergency Mobile Number </label>
                  <input type="number" class="form-control" id="phonenumber1" value="<?php echo $value['phonenumber1']; ?>"
                    name="phonenumber1" pattern="[0-9]{1,15}" maxlength="10" oninput="validatePhoneNumber1(this)" placeholder="-"
                    required onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
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
                  <input type="number" class="form-control" id="age"
                    value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" name="age" readonly required>
                  <div id="age_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                  <select class="form-control" id="gender" name="gender" required>
                    <option value="">Select your Gender</option>
                    <option value="Male" <?php if (isset($value['gender']) && $value['gender'] === 'Male')
                      echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if (isset($value['gender']) && $value['gender'] === 'Female')
                      echo 'selected'; ?>>Female</option>
                    <option value="Others" <?php if (isset($value['gender']) && $value['gender'] === 'Others')
                      echo 'selected'; ?>>Others</option>
                  </select>
                  <div id="gender_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="maritalstatus" class="form-label">Marital Status <span class="text-danger">*</span></label>
                  <select class="form-control" id="maritalstatus"
                    value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>"
                    name="maritalstatus" required>
                    <option value="">Select your Marital Status</option>

                    <option value="Single" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'Single')
                      echo 'selected'; ?>>Single</option>
                    <option value="Married" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'Married')
                      echo 'selected'; ?>>Married</option>
                    <option value="Widow" <?php if (isset($value['maritalStatus']) && $value['maritalStatus'] === 'Widow')
                      echo 'selected'; ?>>Widow</option>
                  </select>
                  <div id="maritalstatus_error" style="color: red;"></div>
                </div>

                <h5 class="card-title">Address</h5>

                <div class="col-md-6">
                  <label for="Door no" class="form-label">Door no / Building Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="doorno"
                    value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno"
                    required>
                  <div id="doorno_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="street address" class="form-label">Street Address <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="streetaddress"
                    value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress" required>
                  <div id="streetaddress_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="landmark" class="form-label">Landmark <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="landmark"
                    value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark">
                  <div id="landmark_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="pincode" class="form-label">Pincode <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="pincode"
                    value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode" maxlength="6"
                    oninput="validatePincode(this)" required>
                  <div id="pincode_error" style="color: red;"></div>
                </div>
                <div class="col-md-6">
                  <label for="district" class="form-label">District <span class="text-danger">*</span></label>

                  <select class="form-control" id="district"
                    value="<?php echo isset($value['district']) ? $value['district'] : ''; ?>" name="district" required>
                    <option value="">Select your District</option>

                    <option value="Erode" <?php if (isset($value['district']) && $value['district'] === 'Erode')
                      echo 'selected'; ?>>Erode</option>
                    <option value="Namakkal" <?php if (isset($value['district']) && $value['district'] === 'Namakkal')
                      echo 'selected'; ?>>Namakkal</option>
                    <option value="Tirupur" <?php if (isset($value['district']) && $value['district'] === 'Tirupur')
                      echo 'selected'; ?>>Tirupur</option>
                    <option value="Karur" <?php if (isset($value['district']) && $value['district'] === 'Karur')
                      echo 'selected'; ?>>Karur</option>
                  </select>
                  <div id="district_error" style="color: red;"></div>
                </div>



                <h5 class="card-title">Identification Details</h5>

                <div class="col-md-6">
                  <label for="aadharfrontphoto" class="form-label">Aadhaar Front Photo <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="oldaadharfront"
                    value="<?php echo $value['aadharfront_filename']; ?>" hidden>
                  <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto"
                    accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <label id="file-input-labelaf" for="aadharfrontphoto" class="form-control" style="cursor:pointer">Choose
                      File</label>
                    <a href="<?php echo $value['aadhar_front']; ?>" class="filelink ps-2 pt-1" target="blank"
                      id="existfileaf">
                      <?php echo $value['aadharfront_filename']; ?>
                    </a>
                  </div>
                  <div id="aadharfrontphoto_error" style="color: red;"></div>
                </div>

                <div class="col-md-6">
                  <label for="aadharbackphoto" class="form-label">Aadhaar Back Photo <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="oldaadharback"
                    value="<?php echo $value['aadharback_filename']; ?>" hidden>
                  <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto"
                    accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <label id="file-input-labelab" for="aadharbackphoto" class="form-control" style="cursor:pointer">Choose
                      File</label>
                    <a href="<?php echo $value['aadhar_back']; ?>" class="filelink ps-2 pt-1" target="blank"
                      id="existfileab">
                      <?php echo $value['aadharback_filename']; ?>
                    </a>
                  </div>
                  <div id="aadharbackphoto_error" style="color: red;"></div>
                </div>

                <div class="col-md-6">
                  <label for="aadharnumber" class="form-label">Aadhaar number <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="aadharnumber"
                    value="<?php echo ($value['aadharnumber']) ? $value['aadharnumber'] : ''; ?>" name="aadharnumber"
                    maxlength="14" pattern="\d{4} \d{4} \d{4}" oninput="validateAadharNumber(this)" required>
                  <div id="aadharnumber_error" style="color: red;"></div>
                </div>

                <div class="col-md-6">
                  <label for="photo" class="form-label">Photo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="oldprofilephoto"
                    value="<?php echo $value['photo_filename']; ?>" hidden>
                  <input type="file" class="form-control" id="photo" name="photo" accept="image/png ,image/jpg, image/jpeg"
                    hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <label id="file-input-labelpp" for="photo" class="form-control" style="cursor:pointer">Choose
                      File</label>
                    <a href="<?php echo $value['photo']; ?>" class="filelink ps-2 pt-1" target="blank" id="existfilepp">
                      <?php echo $value['photo_filename']; ?>
                    </a>
                  </div>
                  <div id="photo_error" style="color: red;"></div>


                  <input type="number" class="form-control" value="1" name="bdsubmit" hidden>

                  <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF Maximum size:
                    1024KB</p>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

              <?php
              if ($value['bdsubmited'] == '1') {
                ?>
                <script>
                  let bds = "data";
                  document.getElementById("existfileaf").style.display = "block";
                  document.getElementById("existfileab").style.display = "block";
                  document.getElementById("existfilepp").style.display = "block";
                </script>
                <?php
              } else {
                ?>
                <script>
                  document.getElementById("existfileaf").style.display = "none";
                  document.getElementById("existfileab").style.display = "none";
                  document.getElementById("existfilepp").style.display = "none";
                </script>

                <?php
              }
              }
              ?>

          </div>
        </div>
      </section>

      <!-- NAME CHARACTERS VALIDATION -->
      <script>
        function validateName(input) {
          input.value = input.value.replace(/[0-9]/g, '');
        }
      </script>

      <!-- PHONE NUMBER SCRIPTING -->
      <script>
        function validatePhoneNumber1(input) {
          var phoneNumber1 = input.value.replace(/\D/g, '');

          if (phoneNumber1.length > 10) {
            input.value = phoneNumber1.slice(0, 10);
          }

          var phoneNumberError = document.getElementById('phonenumber_error');
          if (/[^0-9]/.test(input.value)) {
            phoneNumberError.innerHTML = 'Please enter only numeric characters';
          } else {
            phoneNumberError.innerHTML = '';
          }
        }
      </script>
      <!-- Pincode -->
      <script>
        function validatePincode(input) {
          input.value = input.value.replace(/\D/g, '');

          if (input.value.length > 6) {
            input.value = input.value.slice(0, 6);
          }

          var pincodeError = document.getElementById('pincode_error');
          if (/[^0-9]/.test(input.value)) {
            pincodeError.innerHTML = 'Please enter only numeric characters';
          } else {
            pincodeError.innerHTML = '';
          }
        }
      </script>
      <!-- AADHAR NUMBER SPACE SCRIPTING -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script>
        $(document).ready(function () {
          $('#aadharnumber').on('input', function () {

            var inputVal = $(this).val().replace(/\s/g, '');

            var formattedVal = inputVal.replace(/(\d{4})/g, '$1 ').trim();

            $(this).val(formattedVal);
          });
        });

        function validateAadharNumber(input) {
          var aadharNumber = input.value.replace(/\D/g, '');

          if (aadharNumber.length > 4 && aadharNumber.length <= 8) {
            aadharNumber = aadharNumber.slice(0, 4) + ' ' + aadharNumber.slice(4);
          } else if (aadharNumber.length > 8) {
            aadharNumber = aadharNumber.slice(0, 4) + ' ' + aadharNumber.slice(4, 8) + ' ' + aadharNumber.slice(8);
          }

          input.value = aadharNumber;
          var errorDiv = document.getElementById('aadharnumber_error');
          if (!/^\d{4} \d{4} \d{4}$/.test(aadharNumber)) {
            input.setCustomValidity('Enter a valid Aadhaar number.');
            errorDiv.textContent = 'Enter a valid Aadhaar number.';
          } else {
            input.setCustomValidity('');
            errorDiv.textContent = '';
          }
        }
      </script>
      <!-- PASSWORD VALIDATION -->
      <script>
        document.getElementById("password").onfocus = function () {
          document.getElementById("passwordmessage").style.display = "block";
        }

        document.getElementById("password").onblur = function () {
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
      <!-- DATE OF BIRTH VALIDATION -->
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
      <!-- AADHAR PHOTO UPLOAD -->
      <script>
        document.getElementById("file-input-labelaf").addEventListener("click", function () {
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

        document.getElementById("file-input-labelab").addEventListener("click", function () {
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

        document.getElementById("file-input-labelpp").addEventListener("click", function () {
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
          var p1 = document.applicationform.phonenumber1.value;
          var d = document.applicationform.dateofbirth.value;
          var ag = document.applicationform.age.value;
          var g = document.applicationform.gender.value;
          var b = document.applicationform.doorno.value;
          var s = document.applicationform.streetaddress.value;
          var l = document.applicationform.landmark.value;
          var pin = document.applicationform.pincode.value;
          var dt = document.applicationform.district.value;
          var m = document.applicationform.maritalstatus.value;
          var aa = document.applicationform.aadharfrontphoto.value;
          var ab = document.applicationform.aadharbackphoto.value;
          var an = document.applicationform.aadharnumber.value;
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
          } else {
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
          } else {
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
          } else {
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
          } else {
            document.getElementById("pincode_error").innerHTML = "";
          }

          if (m == "") {
            var namesms2 = "District must be filled out";
            document.getElementById("district_error").innerHTML = namesms2;
            document.applicationform.district.focus();
            return false;
          } else {
            document.getElementById("district_error").innerHTML = "";
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

          if (an == "" && document.getElementById('existfileab').style.display == "none") {
            var namesms2 = "Aadhaar Number is required";
            document.getElementById("aadharnumber_error").innerHTML = namesms2;
            document.applicationform.aadharnumber.focus();
            return false;
          } else {
            document.getElementById("aadharnumber_error").innerHTML = "";
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
      <section class="usertable ">
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

        <div class="d-flex justify-content-between">
            <h5 class="card-title">Education Table</h5>
            <div>
                  <a class="" href="<?php echo baseUrl . "Candidate/basicdetails" ?>"> <button type="button"
                      class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i> </button></a>
                  <a class="" href="<?php echo baseUrl . "Candidate/experiencetable" ?>"> <button type="button"
                      class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                </div>
            </div>

          <div class="card recent-sales overflow-auto">

            <div class="card-body pt-4">
              <p><b style="color:blue;">Note:</b> Kindly provide your education history, starting from your <b>HIGHEST
                  QUALIFICATION</b> to the lowest, ensuring a sequential order for accurate and efficient processing.</p>
              <!-- <h5 class="card-title">Education Table<span></span></h5> -->
              <div class="d-flex justify-content-between">
                <!-- <a href="<?php echo baseUrl . "Candidate/addEducationForm" ?>">
              <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->

                <a href="#addeduform"><button onclick="addeduformfunction()" type="button" class="btn btn-success mb-4">+
                    Add Education</button></a>
                
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
                          <td>
                            <form method="post" action="<?php echo baseUrl . 'Candidate/delete_selected'; ?>"
                              id="form_<?= $value['id']; ?>">
                              <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                onchange="updateDeleteButton2(this)">

                          </td>

                          <td><a>
                              <?php echo $count++; ?>.
                            </a></td>
                          <td>
                            <?php echo $value['educational_qualification'] ?>
                          </td>
                          <!-- <td><?php echo $value['department'] ?></td> -->
                          <!-- Department -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" || $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" ||
                            $value['educational_qualification'] === "LLM" || $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] == "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                          ) {
                            ?>
                            <td>
                              <?php echo $value['department'] ?>
                            </td>
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
                          <?php } else { ?>
                            <td>Regular</td>
                          <?php } ?>
                          <td>
                            <?php echo $value['school_college_name'] ?>
                          </td>
                          <td>
                            <?php echo $value['yearOfPassing'] ?>
                          </td>
                          <!-- Percentage -->
                          <!-- <td><?php echo $value['percentage'] ?></td> -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" ||
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                            $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "12th/HSC"
                          ) {
                            ?>
                            <td>
                              <?php echo $value['percentage'] ?>
                            </td>
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
                            <td><a href="<?php echo $value['tencer_url'] ?>" target="blank">
                                <?php echo $value['ten_cer'] ?>
                              </a></td>
                            <?php
                          } else if ($value['educational_qualification'] == '12th/HSC') {
                            ?>
                              <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank">
                                <?php echo $value['twelve_cer'] ?>
                                </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                          ) {
                            ?>
                                <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank">
                                <?php echo $value['diploma_cer'] ?>
                                  </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" || $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.Pharm"
                          ) {
                            ?>
                                  <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank">
                                <?php echo $value['ug_cer'] ?>
                                    </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" ||
                            $value['educational_qualification'] === "LLM" || $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                          ) {
                            ?>
                                    <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank">
                                <?php echo $value['pg_cer'] ?>
                                      </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                          ) {
                            ?>
                                      <td><a href="<?php echo $value['doccer_url'] ?>" target="blank">
                                <?php echo $value['doc_cer'] ?>
                                        </a></td>
                            <?php
                          } else {
                            ?>
                                      <td>NA</a></td>
                            <?php
                          }

                          ?>

                          <td class="d-flex">
                            <a class=""
                              href="<?php echo baseUrl . "Candidate/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button
                                type="button" class="btn btn-secondary mx-1">Edit</button></a>
                            <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>


                <button type="submit" name="submit" id="deleteList2" class="btn btn-danger disabled"
                  onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Add Education Details</h5>
            <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>">
              <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
          </div>

          <!-- Multi Columns Form -->
          <form class="row g-3" autocomplete="off" novalidate name="educationform" method="post"
            enctype="multipart/form-data" onsubmit="return validateForm()"
            action="<?php echo baseUrl . "Candidate/insertEducationForm" ?>">

            <input type="hidden" class="form-control" id="id" value="" name="seekerId">

            <div class="col-12 autocomplete">
              <label for="qualification" class="form-label">Educational Qualification <span
                  class="text-danger">*</span></label>
              <input id="qualification" class="form-control" type="text" name="qualification" onchange="toggleFields()">
              <div id="qualification_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="department-group" style="display: none;">
              <label for="department" class="form-label">Specialization <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="department" name="department">
              <div id="department_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="course-group" style="display: none;">
              <label for="educationmode" class="form-label">Mode of Education <span class="text-danger">*</span></label>
              <select class="form-control" id="educationmode" name="educationmode" required>
                <option value="">Select mode of education </option>
                <option value="Regular">Regular course</option>
                <option value="Corres">Correspondence course</option>
              </select>
              <div id="course_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="school-group" style="display: none;">
              <label for="school" class="form-label">Institute <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="school" name="school">
              <div id="school_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="percentage-group" style="display: none;">
              <label for="percentage" class="form-label">Percentage <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="percentage" id="school" name="percentage">
              <div id="percentage_error" class="text-danger"></div>
              <div class="text-secondary" style="font-size:15px; display:none; margin:0px" id="percentmesssage">Note:
                Please provide your previous semester percentage if currently pursuing your degree.</div>
            </div>

            <div class="col-md-6" id="year-group" style="display: none;">
              <label for="year_passed" class="form-label">Year of Passed Out <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="year_passed" name="year_passed" maxlength="4" pattern="\d{4}">
              <div id="year_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_10th-group" style="display: none;">
              <label for="certificate_10th" class="form-label">10th Certificate Upload <span
                  class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_10th" name="certificate_10th"
                accept="image/png ,image/jpg, image/jpeg, application/pdf">
              <div id="certificate_10th_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_12th-group" style="display: none;">
              <label for="certificate_12th" class="form-label">12th Certificate Upload <span
                  class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_12th" name="certificate_12th"
                accept="image/png ,image/jpg, image/jpeg, application/pdf">
              <div id="certificate_12th_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_dip-group" style="display: none;">
              <label id="additionalFieldLabeldip" for="certificate_dip" class="form-label">Diploma Certificate Upload
                <span class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
              <div id="certificate_dip_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_ug-group" style="display: none;">
              <label id="additionalFieldLabelug" for="certificate_ug" class="form-label">UG Degree Certificate Upload
                <span class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_ug" name="certificate_ug"
                accept="image/png ,image/jpg, image/jpeg, application/pdf">
              <div id="certificate_ug_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_pg-group" style="display: none;">
              <label id="additionalFieldLabelpg" for="certificate_pg" class="form-label">PG Certificate Upload <span
                  class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_pg" name="certificate_pg"
                accept="image/png ,image/jpg, image/jpeg, application/pdf">
              <div id="certificate_pg_error" class="text-danger"></div>
            </div>

            <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
              <label id="additionalFieldLabeldoc" for="certificate_doctorate" class="form-label">Doctorate Certificate
                Upload <span class="text-danger">*</span></label>
              <input type="file" class="form-control" id="certificate_doctorate" name="certificate_doctorate"
                accept="image/png ,image/jpg, image/jpeg, application/pdf">
              <div id="certificate_doctorate_error" class="text-danger"></div>
            </div>

            <input type="number" class="form-control" value="1" name="edusubmit" hidden>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
          </form><!-- End Multi Columns Form -->

        </div>
      </div>

      <script>
        function updateDeleteButton2(checkbox) {
          var deleteButton2 = document.getElementById('deleteList2');

          if (checkbox.checked) {
            deleteButton2.classList.remove('disabled');
          } else {
            deleteButton2.classList.add('disabled');
          }
        }

        function confirmDelete2() {
          return confirm('Are you sure you want to delete?');
        }
      </script>

      <script>

        document.getElementById("percentage").onfocus = function () {
          document.getElementById("percentmesssage").style.display = "block";
        }
        document.getElementById("percentage").onblur = function () {
          document.getElementById("percentmesssage").style.display = "none";
        }


        function autocomplete(inp, arr) {
          var currentFocus;

          inp.addEventListener("input", function (e) {
            var a, b, i, val = this.value;
            closeAllLists();
            if (!val) { return false; }
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
                b.addEventListener("click", function (e) {
                  inp.value = this.getElementsByTagName("input")[0].value;
                  closeAllLists();
                  // Show or hide additional fields based on the selected value
                  showAdditionalFields(inp.value);
                });
                a.appendChild(b);
              }
            }
          });

          inp.addEventListener("keydown", function (e) {
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
          else if (selectedValue === "10th/SSLC") {
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
          else if (selectedValue === "B.E" || selectedValue === "B.A" || selectedValue === "B.COM" || selectedValue === "B.ED" || selectedValue === "B.LIT" || selectedValue === "B.TECH" || selectedValue === "BCA" || selectedValue === "BBA" || selectedValue === "B.SC" || selectedValue === "BSW" || selectedValue === "BFA" || selectedValue === "B.Arch" || selectedValue === "B.N" || selectedValue === "BCS" || selectedValue === "LLB" || selectedValue === "BDS" || selectedValue === "B.Pharm") {
            document.getElementById("department-group").style.display = "block";
            document.getElementById("course-group").style.display = "block";
            document.getElementById("school-group").style.display = "block";
            document.getElementById("percentage-group").style.display = "block";
            document.getElementById("year-group").style.display = 'block';
            document.getElementById("certificate_ug-group").style.display = 'block';
            document.getElementById("additionalFieldLabelug").innerText = "Upload " + selectedValue + " Certificate";
          }
          else if (selectedValue === "M.E" || selectedValue === "M.A" || selectedValue === "M.COM" || selectedValue === "M.ED" || selectedValue === "M.LIT" || selectedValue === "M.TECH" || selectedValue === "MCA" || selectedValue === "MBA" || selectedValue === "M.SC" || selectedValue === "MSW" || selectedValue === "MFA" || selectedValue === "M.Arch" || selectedValue === "M.N" || selectedValue === "MCS" || selectedValue === "LLM" || selectedValue === "MBBS" || selectedValue === "M.Pharm" || selectedValue === "MPhil") {
            document.getElementById("department-group").style.display = "block";
            document.getElementById("course-group").style.display = "block";
            document.getElementById("school-group").style.display = "block";
            document.getElementById("percentage-group").style.display = "block";
            document.getElementById("year-group").style.display = 'block';
            document.getElementById("certificate_pg-group").style.display = 'block';
            document.getElementById("additionalFieldLabelpg").innerText = "Upload " + selectedValue + " Certificate";
          }
          else if (selectedValue === "Ph.D" || selectedValue === "DBA" || selectedValue === "Ed.D" || selectedValue === "MD" || selectedValue === "DMD" || selectedValue === "DVM") {
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
          "B.A", "B.COM", "B.ED", "B.E", "B.LIT", "B.SC", "BBA", "BCA", "B.TECH", "BSW", "BFA", "B.Arch", "B.N", "BCS", "LLB", "BDS", "B.Pharm",
          "M.A", "M.COM", "M.ED", "M.E", "M.LIT", "M.SC", "MBA", "MCA", "M.TECH", "MSW", "MFA", "M.Arch", "M.N", "MCS", "LLM", "MBBS", "M.Pharm",
          "MPhil", "Ph.D", "DBA", "Ed.D", "MD", "DMD", "DVM"];

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
          var diploma = document.educationform.certificate_dip.value;
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
          } else if (per > 100) {
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
          } else if (!/^\d{4}$/.test(yop)) {
            document.getElementById("year_error").innerHTML = "Please enter a valid year in YYYY format.";
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

      <script>
        function addeduformfunction() {
          document.getElementById("addeduform").style.display = "block";
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
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Education Table</h5>
            <div>
                  <a href="<?php echo baseUrl . "Candidate/basicdetails" ?>"> <button type="button"
                      class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                  <a href="<?php echo baseUrl . "Candidate/experiencetable" ?>"> <button type="button"
                      class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                </div>
            </div>
          <div class="card recent-sales overflow-auto">

            <div class="card-body pt-4">

              <!-- <h5 class="card-title">Education Table<span></span></h5> -->

              <div class="d-flex justify-content-between">
                <!-- <a href="<?php echo baseUrl . "Candidate/addEducationForm" ?>">
            <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->

                <a href="#addeduform"><button onclick="addeduformfunction()" type="button" class="btn btn-success mb-4"
                    disabled>+ Add Education</button></a>
                
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
                          <td>
                            <form method="post" action="<?php echo baseUrl . 'Candidate/delete_selected'; ?>"
                              id="form_<?= $value['id']; ?>">
                              <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                onchange="updateDeleteButton2(this)">
                          <td><a>
                              <?php echo $count++; ?>.
                            </a></td>
                          <td>
                            <?php echo $value['educational_qualification'] ?>
                          </td>
                          <!-- <td><?php echo $value['department'] ?></td> -->
                          <!-- Department -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" ||
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                          ) {
                            ?>
                            <td>
                              <?php echo $value['department'] ?>
                            </td>
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
                          <td>
                            <?php echo $value['school_college_name'] ?>
                          </td>
                          <td>
                            <?php echo $value['yearOfPassing'] ?>
                          </td>
                          <!-- <td><?php echo $value['percentage'] ?></td> -->
                          <!-- Percentage -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" ||
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                            $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "11th" || $value['educational_qualification'] === "12th/HSC"
                          ) {
                            ?>
                            <td>
                              <?php echo $value['percentage'] ?>
                            </td>
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
                            <td><a href="<?php echo $value['tencer_url'] ?>" target="blank">
                                <?php echo $value['ten_cer'] ?>
                              </a></td>
                            <?php
                          } else if ($value['educational_qualification'] == '12th/HSC') {
                            ?>
                              <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank">
                                <?php echo $value['twelve_cer'] ?>
                                </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                          ) {
                            ?>
                                <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank">
                                <?php echo $value['diploma_cer'] ?>
                                  </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm"
                          ) {
                            ?>
                                  <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank">
                                <?php echo $value['ug_cer'] ?>
                                    </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                          ) {
                            ?>
                                    <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank">
                                <?php echo $value['pg_cer'] ?>
                                      </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] == "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                          ) {
                            ?>
                                      <td><a href="<?php echo $value['doccer_url'] ?>" target="blank">
                                <?php echo $value['doc_cer'] ?>
                                        </a></td>
                            <?php
                          } else {
                            ?>
                                      <td>NA</a></td>
                            <?php
                          }

                          ?>
                          <td class="d-flex">
                            <a class=""
                              href="<?php echo baseUrl . "Candidate/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button
                                type="button" class="btn btn-secondary mx-1">Edit</button></a>
                            <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
                <button type="submit" name="submit" id="deleteList2" class="btn btn-danger disabled"
                  onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
        <div class="card">
          <div class="card-body" id="editeduform">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Update Education Details</h5>
              <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>">
                <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
            </div>

            <!-- Multi Columns Form -->
            <form class="row g-3" novalidate name="educationform" method="post" enctype="multipart/form-data"
              onsubmit="return validateForm()" action="<?php echo baseUrl . "Candidate/updateInsertEducation" ?>">

              <?php
              foreach ($updateEducation as $key => $value) {
                $seekerId = $_SESSION['seekerId'];
                ?>
                <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                <div class="col-12">
                  <label class="form-label" for="qualification">Educational Qualification <span
                      class="text-danger">*</span></label>
                  <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>"
                    name="qualification" onchange="toggleFields()" readonly>
                    <option value="<?php echo $value['educational_qualification']; ?>">
                      <?php echo $value['educational_qualification']; ?>
                    </option>
                  </select>
                  <div id="qualification_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="department-group" style="display: none;">
                  <label class="form-label" for="department">Department <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="department" name="department"
                    value="<?php echo $value['department']; ?>">
                  <div id="department_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="course-group" style="display: none;">
                  <label for="educationmode" class="form-label">Mode of Education <span class="text-danger">*</span></label>
                  <select class="form-control" id="educationmode" name="educationmode" required>
                    <option value="">Select mode of education </option>
                    <option value="Regular" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Regular')
                      echo 'selected'; ?>>Regular course</option>
                    <option value="Corres" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Corres')
                      echo 'selected'; ?>>Correspondence course</option>
                  </select>
                  <div id="course_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="school-group">
                  <label class="form-label" for="school">Institution Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>"
                    name="school">
                  <div id="school_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="percentage-group">
                  <label class="form-label" for="percentage">Percentage <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="percentage" value="<?php echo $value['percentage']; ?>"
                    name="percentage">
                  <div id="percentage_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="year-group">
                  <label class="form-label" for="year_passed">Year of Passed Out <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>"
                    name="year_passed">
                  <div id="year_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                  <label class="form-label" for="certificate_10th">10th Certificate Upload <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="old10cer" value="<?php echo $value['ten_cer']; ?>" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cer10upload" id="certificate_10th" name="certificate_10th"
                      accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-label" for="certificate_10th">Change File</label>
                    <a href="<?php echo $value['tencer_url']; ?>" class="filelink p-2" target="blank" id="existfile">
                      <?php echo $value['ten_cer']; ?>
                    </a>
                  </div>
                  <div id="certificate_10th_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_12th-group" style="display: none;">
                  <label class="form-label" for="certificate_12th">12th Certificate Upload <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="old12cer" value="<?php echo $value['twelve_cer']; ?>"
                    hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cer12upload" id="certificate_12th" name="certificate_12th"
                      accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-label12" for="certificate_12th">Change File</label>
                    <a href="<?php echo $value['twelvecer_url']; ?>" class="filelink p-2" target="blank" id="existfile12">
                      <?php echo $value['twelve_cer']; ?>
                    </a>
                  </div>
                  <div id="certificate_12th_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_dip-group" style="display: none;">
                  <label id="additionalFieldLabeldip" class="form-label" for="certificate_dip">Diploma Certificate Upload
                    <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="olddipcer" value="<?php echo $value['diploma_cer']; ?>"
                    hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cerdipupload" id="certificate_dip" name="certificate_dip"
                      accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-labeldip" for="certificate_dip">Change File</label>
                    <a href="<?php echo $value['diplomacer_url']; ?>" class="filelink p-2" target="blank" id="existfiledip">
                      <?php echo $value['diploma_cer']; ?>
                    </a>
                  </div>
                  <div id="certificate_dip_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                  <label id="additionalFieldLabelug" class="form-label" for="certificate_ug">UG Degree Certificate Upload
                    <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="oldugcer" value="<?php echo $value['ug_cer']; ?>" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cerugupload" id="certificate_ug" name="certificate_ug"
                      accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-labelug" for="certificate_ug">Change File</label>
                    <a href="<?php echo $value['ugcer_url']; ?>" class="filelink p-2" target="blank" id="existfileug">
                      <?php echo $value['ug_cer']; ?>
                    </a>
                  </div>
                  <div id="certificate_ug_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                  <label id="additionalFieldLabelpg" class="form-label" for="certificate_pg">PG Certificate Upload <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="oldpgcer" value="<?php echo $value['pg_cer']; ?>" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cerpgupload" id="certificate_pg" name="certificate_pg"
                      accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-labelpg" for="certificate_pg">Change File</label>
                    <a href="<?php echo $value['pgcer_url']; ?>" class="filelink p-2" target="blank" id="existfilepg">
                      <?php echo $value['pg_cer']; ?>
                    </a>
                  </div>
                  <div id="certificate_pg_error" class="text-danger"></div>
                </div>

                <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                  <label id="additionalFieldLabeldoc" class="form-label" for="certificate_doctorate">Doctorate Certificate
                    Upload <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="olddoccer" value="<?php echo $value['doc_cer']; ?>" hidden>
                  <div class="uploadedfile" style="display:flex;">
                    <input type="file" class="form-control cerdocupload" id="certificate_doctorate"
                      name="certificate_doctorate" accept="image/png ,image/jpg, image/jpeg, application/pdf" hidden />
                    <label class="form-control" id="file-input-labeldoc" for="certificate_doctorate">Change File</label>
                    <a href="<?php echo $value['doccer_url']; ?>" class="filelink p-2" target="blank" id="existfiledoc">
                      <?php echo $value['doc_cer']; ?>
                    </a>
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
        function updateDeleteButton2(checkbox) {
          var deleteButton2 = document.getElementById('deleteList2');

          if (checkbox.checked) {
            deleteButton2.classList.remove('disabled');
          } else {
            deleteButton2.classList.add('disabled');
          }
        }
      </script>
      <script>
        document.getElementById("file-input-label").addEventListener("click", function () {
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
        document.getElementById("file-input-label12").addEventListener("click", function () {
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
        document.getElementById("file-input-labeldip").addEventListener("click", function () {
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
        document.getElementById("file-input-labelug").addEventListener("click", function () {
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
        document.getElementById("file-input-labelpg").addEventListener("click", function () {
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
        document.getElementById("file-input-labeldoc").addEventListener("click", function () {
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
          || qualify === "M.SC" || qualify === "MSW" || qualify === "MFA" || qualify === "M.Arch" ||
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
          } else if (per > 100) {
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
        </div>
        <div class="col-12">
        <div class="d-flex justify-content-between">
                <h5 class="card-title">Experience Table<span></span></h5>
                <div class="pt-10">
                  <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>">
                    <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                  <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
                    <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                </div>
              </div>
          <div class="card recent-sales overflow-auto">

            <div class="card-body">              

              <div class="exptableheading" id="fresherExp">
                <p style="font-size:18px; font-weight: bold; color: #007BFF;">Kindly mention your work experience and work
                  status.</p>
                <p><b style="color:blue;">Note:</b> Indicate <b>'No Experience'</b> if you are a <b>Fresher</b> or have
                  had <b>no professional experience</b> since graduation.</p>
                
                  <input type="radio" name="fresherExperience" value="experience" id="exp"
                  onclick="showContent('addexpform')" hidden>
                <label for="exp" class="btn btn-success">Experienced</label>
                <input type="radio" name="fresherExperience" value="fresher" id="fre" onclick="showContent('fresher')"
                  hidden>
                <label for="fre" class="btn btn-danger"> Fresher / No Experience</label>
              </div>

              <div id="fresher" class="button-content mt-4" style="display: none;">
                <p>Now you can proceed to the <b>'Area of Job Interest'</b> section to specify your career preferences.
                </p>
                <form method="post" action=" <?php echo baseUrl . "Candidate/insertFresherForm" ?>">
                  <input name="fresher" value="1" hidden>
                  <button type="submit" class="btn btn-danger">Next</button>
                </form>
              </div>

              <div class="d-flex justify-content-between pt-4">
                <a class="" href="#addexpform">
                  <button id="expAddButton" style="display:none;" type="button" onclick="addexpform()"
                    class="btn btn-success mb-4">+ Add Experience</button></a>
              </div>

              <?php
              if (isset($experienceTable[0]['id'])) {
                $count = 1;
                ?>
                <table class="table" id="exptable">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">S.No</th>
                      <th scope="col">Job Category</th>
                      <th scope="col">Job Subcategory</th>
                      <th scope="col">Experience</th>
                      <th scope="col">Company Name</th>
                      <th scope="col">Company Location</th>
                      <th scope="col">Role</th>
                      <th scope="col">Company Mobile Number</th>
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
                          <td>
                            <form method="post" action="<?php echo baseUrl . 'Candidate/deleteExperience'; ?>"
                              id="form_<?= $value['id']; ?>">
                              <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                onchange="updateDeleteButton5(this)">
                          </td>
                          <td>
                            <?php echo $count++ ?>.
                          </td>
                          <td>
                            <?php echo $value['other_category'] ?>
                          </td>
                          <td>
                            <?php echo $value['other_sub_category'] ?>
                          </td>
                          <td>
                            <?php $formattedexpYear = date('d-m-Y', strtotime($value['expYear'])); ?>
                            <?php echo $formattedexpYear; ?>  <br> to <br>

                            <?php $formattedexpMonth = date('d-m-Y', strtotime($value['expMonth'])); ?>
                            <?php echo $formattedexpMonth; ?>
                          </td>
                          <td>
                            <?php echo $value['company_name'] ?>
                          </td>
                          <td>
                            <?php echo $value['company_location'] ?>
                          </td>
                          <td>
                            <?php echo $value['job_role'] ?>
                          </td>
                          <td>
                            <?php echo $value['company_mobilenum'] ?>
                          </td>
                          <td>
                            <?php echo $value['previous_employer_name'] ?>
                          </td>
                          <td>
                            <?php echo $value['previous_employer_mobile'] ?>
                          </td>
                          <td>
                            <?php echo $value['previous_employer_email'] ?>
                          </td>
                          <td>
                            <div class="d-flex">
                              <a
                                href="<?php echo baseUrl . "Candidate/updateExperience" ?>/<?php echo $value['id'] ?>#editexpform">
                                <button type="button" class="btn btn-secondary mx-1 ">Edit</button></a>
                            </div>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>

                  </tbody>
                </table>

                <button type="submit" name="submit" id="deleteList5" class="btn btn-danger disabled"
                  onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                </form>

                <div id="fresherNoexp" style="display:none;">
                  <form method="post" action="<?php echo baseUrl . 'Candidate/deleteExperience'; ?>"
                    id="form_<?= $value['id']; ?>">
                    <div style="display:flex;">
                      <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                        onchange="updateDeleteButton3(this)">
                      <p style="padding-left:10px; padding-top: 18px;"> Not a Fresher?</p>
                    </div>
                    <button type="submit" name="submit" id="deleteList3" class="btn btn-danger disabled"
                      onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                  </form>
                </div>

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
        function validateName1(input) {
          input.value = input.value.replace(/[0-9]/g, '');
        }
      </script>
      <script>
        function showContent(button) {
          document.querySelectorAll('.button-content').forEach(function (element) {
            element.style.display = 'none';
          });
          document.getElementById(button).style.display = 'block';
        }

        function addexpform() {
          document.getElementById("addexpform").style.display = "block";
        }
      </script>
      <script>

        <?php
        if (isset($expTotalRows)) {
          if ($expTotalRows >= "1" && $experienceTable[0]['workStatus'] == '0') {
            ?>
            document.getElementById("fresherExp").style.display = "none";
            document.getElementById("expAddButton").style.display = "block";
            <?php
          } else if ($expTotalRows >= "1" && $experienceTable[0]['workStatus'] == '1') { ?>
              document.getElementById("fresherExp").style.display = "none";
              document.getElementById("fresherNoexp").style.display = "block";
              document.getElementById("exptable").style.display = "none";
              document.getElementById("deleteList5").style.display = "none";
            <?php
          }
        } ?>
      </script>
      <script>
        function updateDeleteButton3(checkbox) {
          var deleteButton3 = document.getElementById('deleteList3');

          if (checkbox.checked) {
            deleteButton3.classList.remove('disabled');
          } else {
            deleteButton3.classList.add('disabled');
          }
        }

        function updateDeleteButton5(checkbox) {
          var deleteButton5 = document.getElementById('deleteList5');

          if (checkbox.checked) {
            deleteButton5.classList.remove('disabled');
          } else {
            deleteButton5.classList.add('disabled');
          }
        }
      </script>

      <div class="card" id="addexpform" style="display:none">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Add Experience Details</h5>
            <a class="" href="<?php echo baseUrl . "Candidate/experiencetable" ?>">
              <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
          </div>

          <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
            onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Candidate/insertExperienceForm" ?>">

            <input type="hidden" class="form-control" id="id" value="" name="seekerId">

            <div class="col-6">
              <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
              <select class="form-control" id="category" name="category" autocomplete="off"
                onchange="showHideOtherField()" required>
                <option value="">Select a Category</option>
                <?php
                foreach ($categoryList as $key => $value) {
                  ?>
                  <option value="<?php echo $value->categoryName ?>">
                    <?php echo $value->categoryName ?>
                  </option>
                <?php } ?>
                <option value="others">Others</option>
              </select>
              <div id="category_error" class="text-danger error"></div>
            </div>

            <div class="col-6" id="newcategory_group" style="display: none;">
              <label for="newcategory" class="form-label">Reason for choosing category as others</label>
              <input class="form-control" id="newcategory" name="newcategory">
              <div id="newcategory_error" class="text-danger error"></div>
              <input id="categoryothers" name="categoryothers" value="1" hidden>
            </div>

            <div class="col-md-6">
              <label for="subcategory" class="form-label">Subcategory <span class="text-danger">*</span></label>
              <input class="form-control" id="subcategory" name="subcategory" required>
              <div id="subcategory_error" class="text-danger error"></div>
            </div>

            <div class="col-md-6">
              <label for="company name" class="form-label">Company Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="companyname" name="companyname" required>
              <div id="companyname_error" class="text-danger error"></div>
            </div>

            <div class="col-md-6">
              <label for="company location" class="form-label">Company Location <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="companylocation" name="companylocation" required>
              <div id="companylocation_error" class="text-danger error"></div>
            </div>

            <div class="col-md-6">
              <div class="experience-container">
                <label for="expYear" class="form-label">Experience <span class="text-danger">*</span></label>
                <div class="d-md-flex">
                  <label for="fromDate" class="pt-1 pe-2">From <span class="text-danger">*</span></label>
                  <div class="col-md-3  me-2">
                    <input type="date" class="form-control" id="fromDate" name="fromDate" required>
                    <div id="experienceexp_error" class="text-danger error"></div>
                  </div>
                  <label for="toDate" class="pt-1 px-2">To <span class="text-danger">*</span></label>
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
              <label class="form-label">Total duration <span class="text-danger">*</span></label>
              <p class="form-control" id="result"><span id="years"></span> Years & <span id="months"> </span> Months</p>
            </div>

            <div class="col-md-6">
              <label for="role" class="form-label">Role in the Company <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="role" name="role" required>
              <div id="role_error" class="text-danger error"></div>
            </div>
            <div class="col-md-6">
              <label for="mobilenumber" class="form-label">Company Mobile Number <span
                  class="text-danger">*</span></label>
              <input type="number" class="form-control" id="company_mobilenum" name="company_mobilenum"
                pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)" required
                onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
              <div id="compmobile_error" class="text-danger error"></div>
            </div>
            <!-- JOB PROFILE -->
            <!-- <div class="col-md-6">
                              <label for="profile" class="form-label">Job Profile</label>
                              <input type="text" class="form-control" id="profile" name="profile" required>
                              <div id="profile_error" class="text-danger error"></div>
                            </div> -->

            <h5 class="card-title">Previous Job's reference details</h5>

            <div class="col-md-6">
              <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="nameofemployer" name="nameofemployer"
                oninput="validateName1(this)" required>
              <div id="name_error" class="text-danger error"></div>
            </div>

            <div class="col-md-6">
              <label for="number" class="form-label">Mobile Number <span class="text-danger">*</span></label>
              <input type="number" class="form-control" id="number" name="number" pattern="[0-9]{1,15}" maxlength="15"
                oninput="validatePhoneNumber(this)" required
                onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
              <div id="mobilenum_error" class="text-danger error"></div>
            </div>

            <div class="col-md-6" class="form-label">
              <label for="email">Email-Id <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="emailid" name="emailid" required>
              <div id="emailid_error" class="text-danger error"></div>
            </div>

            <input type="number" class="form-control" value="1" name="expsubmit" hidden>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

          </form><!-- End Multi Columns Form -->
        </div>
      </div>
      </section>
      <script>
        function validateName1(input) {
          input.value = input.value.replace(/[0-9]/g, '');
        }
      </script>

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

        window.onload = function () {
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
      </script>

      <script>
        function validateexpForm() {
          clearErrorMessages();

          var category = document.getElementById("category");
          var newothercategory = document.getElementById("newcategory_group");
          var subcategory = document.getElementById("subcategory");
          var expYear = document.getElementById("fromDate");
          var expMonth = document.getElementById("toDate");
          var companyname = document.getElementById("companyname");
          var companylocation = document.getElementById("companylocation");
          var role = document.getElementById("role");
          var compMobile = document.getElementById("company_mobilenum");
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


          if (companyname.value === '') {
            displayError('Company name must be filled out', 'companyname_error');
            return false;
          }

          if (companylocation.value === '') {
            displayError('Company location must be filled out', 'companylocation_error');
            return false;
          }

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

          if (role.value === '') {
            displayError('Role must be filled out', 'role_error');
            return false;
          }

          if (compMobile.value === '') {
            displayError('Company mobile number must be filled out', 'compmobile_error');
            return false;
          } else if (!/^\d{10}$/.test(compMobile.value)) {
            displayError('Mobile number must have exactly 10 digits', 'compmobile_error');
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
        <div class="d-flex justify-content-between">
        <h5 class="card-title">Experience Table<span></span></h5>
        <div style="float:right;">
              <a class="" href="<?php echo baseUrl . "Candidate/educationTable" ?>"> <button type="button"
                  class="btn btn-info mb-8 "><i class="bi bi-arrow-left"></i></button></a>
              <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>"> <button type="button"
                  class="btn btn-info mb-8 "><i class="bi bi-arrow-right"></i></button></a>
            </div>
        </div>
        <div class="card recent-sales overflow-auto">

          <div class="card-body">
            
            <div class="mt-3">
            <a class="" href="#addexpform"><button type="button" class="btn btn-success m-2" disabled>+ Add
                Experience</button></a>
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
                    <th scope="col">Company Location</th>
                    <th scope="col">Role</th>
                    <th scope="col">Company Mobile Number</th>
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
                        <td>
                          <form method="post" action="<?php echo baseUrl . 'Candidate/deleteExperience'; ?>"
                            id="form_<?= $value['id']; ?>">
                            <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                              onchange="updateDeleteButton5(this)">
                        <td>
                          <?php echo $count++ ?>.
                        </td>
                        <td>
                          <?php echo $value['other_category'] ?>
                        </td>
                        <td>
                          <?php echo $value['other_sub_category'] ?>
                        </td>
                        <td>
                          <?php echo $value['expYear'] ?> -
                          <?php echo $value['expMonth'] ?>
                        </td>
                        <td>
                          <?php echo $value['company_name'] ?>
                        </td>
                        <td>
                          <?php echo $value['company_location'] ?>
                        </td>
                        <td>
                          <?php echo $value['job_role'] ?>
                        </td>
                        <td>
                          <?php echo $value['company_mobilenum'] ?>
                        </td>
                        <td>
                          <?php echo $value['previous_employer_name'] ?>
                        </td>
                        <td>
                          <?php echo $value['previous_employer_mobile'] ?>
                        </td>
                        <td>
                          <?php echo $value['previous_employer_email'] ?>
                        </td>
                        <td>
                          <div class="d-flex">
                            <a href="<?php echo baseUrl . "Candidate/updateExperience" ?>/<?php echo $value['id'] ?>">
                              <button type="button" class="btn btn-secondary mx-1 ">Edit</button></a>

                          </div>
                        </td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </tbody>
              </table>
              <button type="submit" name="submit" id="deleteList5" class="btn btn-danger disabled"
                onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Update Experience Details</h5>
              <a class="" href="<?php echo baseUrl . "Candidate/experiencetable" ?>">
                <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
            </div>


            <!-- Multi Columns Form -->
            <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
              onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Candidate/updateInsertExperience" ?>">

              <?php
              foreach ($updateExperience as $key => $value) {
                $seekerId = $_SESSION['seekerId'];
                ?>
                <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

                <div class="col-6">
                  <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                  <select class="form-control" id="category" name="category" required>
                    <?php
                    $defaultSelectedValue = $value['other_category'];
                    foreach ($categoryList as $key => $cvalue) {
                      $selected = ($cvalue->categoryName == $defaultSelectedValue) ? 'selected' : ''; ?>
                      <option value="<?php echo $cvalue->categoryName ?>" <?php echo $selected ?>>
                        <?php echo $cvalue->categoryName ?>
                      </option>
                    <?php } ?>
                  </select>
                  <div id="category_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="subcategory">Subcategory <span class="text-danger">*</span></label>
                  <input class="form-control" id="subcategory" name="subcategory"
                    value="<?php echo $value['other_sub_category']; ?>" required>
                  <div id="subcategory_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="company name">Company Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname"
                    name="companyname" required>
                  <div id="companyname_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="company location">Company Location <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" value="<?php echo $value['company_location']; ?>"
                    id="companylocation" name="companylocation" required>
                  <div id="companylocation_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <div class="experience-container">
                    <label for="expYear" class="form-label">Experience <span class="text-danger">*</span></label>

                    <div class="d-md-flex">

                      <label for="fromDate" class="pt-1 pe-2">From <span class="text-danger">*</span></label>

                      <div class="col-md-3  me-2">
                        <input type="date" class="form-control" id="fromDate" name="fromDate"
                          value="<?php echo $value['expYear']; ?>" required>
                        <div id="experienceexp_error" class="text-danger error"></div>
                      </div>


                      <label for="toDate" class="pt-1 px-2">To <span class="text-danger">*</span></label>

                      <div class="col-md-3">
                        <input type="date" class="form-control" id="toDate" name="toDate"
                          value="<?php echo $value['expMonth']; ?>" required>
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
                  <label class="form-label" for="role">Role in the Company <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role"
                    required>
                  <div id="role_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label for="mobilenumber" class="form-label">Company Mobile Number <span
                      class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="company_mobilenum"
                    value="<?php echo $value['company_mobilenum']; ?>" name="company_mobilenum" pattern="[0-9]{1,15}"
                    maxlength="15" oninput="validatePhoneNumber(this)" required
                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                  <div id="compmobile_error" class="text-danger error"></div>
                </div>

                <!-- JOB PROFILE -->

                <!-- <div class="col-12">
                                        <label class="form-label" for="profile">Job Profile</label>
                                        <input type="text" class="form-control" value="<?php echo $value['profile']; ?>" id="profile" name="profile" required>
                                        <div id="profile_error" class="error"></div>
                           </div> -->

                <h5 class="card-title">Previous Job's Reference Details</h5>

                <div class="col-md-6">
                  <label class="form-label" for="Name">Name <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>"
                    id="nameofemployer" name="nameofemployer" oninput="validateName1(this)" required>
                  <div id="name_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="phone number">Mobile Number <span class="text-danger">*</span></label>
                  <input type="number" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>"
                    id="number" name="number" pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)"
                    required onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                  <div id="mobilenum_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="email">Email</label>
                  <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>"
                    id="emailid" name="emailid" required>
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
      <!-- NAME CHARACTERS VALIDATION -->
      <script>
        function validateName1(input) {
          input.value = input.value.replace(/[0-9]/g, '');
        }
      </script>
      <script>
        function updateDeleteButton5(checkbox) {
          var deleteButton5 = document.getElementById('deleteList5');

          if (checkbox.checked) {
            deleteButton5.classList.remove('disabled');
          } else {
            deleteButton5.classList.add('disabled');
          }
        }

        function confirmDelete5() {
          return confirm('Are you sure you want to delete?');
        }
      </script>

      <script>
        function validateexpForm() {
          clearErrorMessages();

          var category = document.getElementById("category");
          var subcategory = document.getElementById("subcategory");
          var expYear = document.getElementById("fromDate");
          var expMonth = document.getElementById("toDate");
          var companyname = document.getElementById("companyname");
          var companylocation = document.getElementById("companylocation");
          var role = document.getElementById("role");
          var compMobile = document.getElementById("company_mobilenum");
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

          if (companyname.value === '') {
            displayError('Company name must be filled out', 'companyname_error');
            return false;
          }

          if (companylocation.value === '') {
            displayError('Company location must be filled out', 'companylocation_error');
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

          if (role.value === '') {
            displayError('Role must be filled out', 'role_error');
            return false;
          }

          if (compMobile.value === '') {
            displayError('Company mobile number must be filled out', 'compmobile_error');
            return false;
          } else if (!/^\d{10}$/.test(compMobile.value)) {
            displayError('Mobile number must have exactly 10 digits', 'compmobile_error');
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

        window.onload = function () {
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
        <div class="d-flex justify-content-between">
        <h5 class="card-title">Area of Job Interest Table<span></span></h5>
                  <div>
                  <a class="" href="<?php echo baseUrl . "Candidate/experienceTable" ?>">
                    <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                  <a class="" href="<?php echo baseUrl . "Candidate/resume" ?>">
                    <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
                  </div>
              
                </div>

          <div class="card recent-sales overflow-auto">

            <div class="card-body">
              <div class="mt-3">
                <a class="" href="#addinterestform">
                  <button type="button" class="btn btn-success mb-4" onclick="addinterestform()">+ Add Area of Job
                    interest</button></a>                
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
                      <th scope="col">Preferred Location</th>
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
                          <td>
                            <form method="post" action="<?php echo baseUrl . 'Candidate/deleteAreaInterest'; ?>"
                              id="form_<?= $value['id']; ?>">
                              <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                onchange="updateDeleteButton2(this)">
                          <td>
                            <?php echo $count++ ?>.
                          </td>
                          <td>
                            <?php echo $value['other_interst_category'] ?>
                          </td>
                          <td>
                            <?php echo $value['other_sub_interst_category'] ?>
                          </td>
                          <td>
                            <?php echo $value['prefered_location'] ?>
                          </td>
                          <!-- <td><?php echo $value['expYear'] ?> Years & <?php echo $value['expMonth'] ?> Months</td> -->
                          <td>
                            <?php echo $value['job_type'] ?>
                          </td>
                          <td>
                            <?php echo $value['description'] ?>
                          </td>
                          <td>
                            <?php echo $value['expected_salary'] ?>
                          </td>
                          <td>
                            <div class="d-flex">
                              <a
                                href="<?php echo baseUrl . "Candidate/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button
                                  type="button" class="btn btn-secondary mx-1">Edit</button></a>

                            </div>
                          </td>
                        </tr>
                        <?php
                      }
                    }
                    ?>
                  </tbody>
                </table>
                <button type="submit" name="submit" id="deleteList2" class="btn btn-danger disabled"
                  onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
              <div class="d-flex justify-content-between">
                <h5 class="card-title">Add Job Interest</h5>
                <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
                  <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
              </div>
              <!-- Multi Columns Form -->
              <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateAreaForm()"
                action="<?php echo baseUrl . "Candidate/insertAreaOfIntrest" ?>">

                <div class="col-md-6">
                  <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                  <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required>
                    <option value="">Select a Category</option>
                    <?php
                    foreach ($categoryList as $key => $value) { ?>
                      <option value="<?php echo $value->categoryName ?>">
                        <?php echo $value->categoryName ?>
                      </option>
                    <?php } ?>
                    <option value="others">Others</option>
                  </select>
                  <div id="areacat_error" class="error"></div>
                </div>

                <div class="col-12" id="newcategory_group" style="display: none;">
                  <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                  <input class="form-control" id="newcategory" name="newcategory">
                  <div id="newcategory_error" class="text-danger error"></div>
                  <input id="categoryothers" name="categoryothers" value="1" hidden>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for=" subcategory">Subcategory <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subcategory" name="subcategory" required>
                  <div id="areasubcat_error" class="error"></div>
                </div>

                <div class="col-md-6" id="otherCategoryFields" style="display: none;">
                  <label for="customCategoryInput">Custom Category</label>
                  <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                  <label for="customSubcategoryInput">Custom Subcategory</label>
                  <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
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
                  <label class="form-label" for="preferred-location">Preferred Location to work <span
                      class="text-danger">*</span></label>
                  <select class="form-control" id="preferred-location" name="preferred-location" required>
                    <option value="">Select district</option>
                    <option value="Erode">Erode</option>
                    <option value="Karur">Karur</option>
                    <option value="Namakkal">Namakkal</option>
                    <option value="Tirupur">Tirupur</option>
                  </select>
                  <div id="arealocation_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
                  <input class="form-control" id="description" name="description" rows="3" required>
                  <div id="areades_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="jobtype">Job Type <span class="text-danger">*</span></label>
                  <select class="form-control" id="jobtype" name="jobtype" required>
                    <option value="">Select a Job Type</option>
                    <option value="fulltime">Full Time</option>
                    <option value="parttime">Part Time</option>
                  </select>
                  <div id="areajob_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="expected-salary">Expected Salary <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="expected-salary" name="expected-salary" required>
                  <div id="areasalary_error" class="error"></div>
                </div>

                <input type="number" class="form-control" value="1" name="areasubmit" hidden>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>

              </form><!-- End Multi Columns Form -->

            </div>
          </div>

          <script>
            function updateDeleteButton2(checkbox) {
              var deleteButton2 = document.getElementById('deleteList2');

              if (checkbox.checked) {
                deleteButton2.classList.remove('disabled');
              } else {
                deleteButton2.classList.add('disabled');
              }
            }

            function confirmDelete2() {
              return confirm('Are you sure you want to delete?');
            }
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
                <button type="button" class="btn btn-success mb-4" onclick="addskillform()">+ Add Skill</button>
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
                              <td>
                                <form method="post" action="<?php echo baseUrl . 'Candidate/deleteSkill'; ?>"
                                  id="form_<?= $value['id']; ?>">
                                  <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                    onchange="updateDeleteButton1(this)">
                              <td>
                                <?php echo $count++ ?>.
                              </td>
                              <td>
                                <?php echo $value['skill'] ?>
                              </td>
                              <td>
                                <?php echo $value['experience'] ?> Years
                              </td>
                              <td>
                                <?php echo $value['skill_level'] ?>
                              </td>
                              <td>
                                <div class="d-flex">
                                  <a class=""
                                    href="<?php echo baseUrl . "Candidate/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button
                                      type="button" class="btn btn-secondary mx-1">Edit</button></a>

                                </div>
                              </td>
                            </tr>
                            <?php
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                    <button type="submit" name="submit" id="deleteList1" class="btn btn-danger disabled"
                      onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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

      <div class="card" id="addskillform" style="display:none">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h5 class="card-title">Add New Skill</h5>
            <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
              <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
          </div>


          <!-- Multi Columns Form -->
          <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateSkillForm()"
            action="<?php echo baseUrl . "Candidate/insertSkillForm" ?>">

            <input type="hidden" class="form-control" id="id" value="" name="seekerId">

            <div class="col-12">
              <label class="form-label" for="skillname">Skill Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="skillname" name="skillname" required>
              <div id="sname_error" class="error"></div>
            </div>

            <div class="col-md-6">
              <div class="experience-container">
                <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                <div class="d-flex">
                  <select class="form-control" id="experience" name="experience" required>
                    <option value=""> Select year </option>
                    <?php for ($i = 0; $i <= 20; $i++): ?>

                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                        <?php echo $i !== 1 ? 'years' : 'year'; ?>
                      </option>
                    <?php endfor; ?>
                    <option value="20+"> 20+ Years</option>
                  </select>

                </div>
                <div id="sexp_error" class="error"></div>
              </div>
            </div>

            <div class="col-md-6">
              <label class="form-label" for="skillLevel">Skill Level <span class="text-danger">*</span></label>
              <select class="form-control" name="skilllevel" id="skilllevel" required>
                <option value="">Select Skill Level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
              </select>
              <div id="slevel_error" class="error"></div>
            </div>

            <input type="number" class="form-control" value="1" name="areasubmit" hidden>

            <div class="text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-secondary">Reset</button>
            </div>

          </form><!-- End Multi Columns Form -->

        </div>
      </div>

      <script>
        function addinterestform() {
          document.getElementById("addinterestform").style.display = "block";
        }
        function addskillform() {
          document.getElementById("addskillform").style.display = "block";
          document.getElementById("skillname").focus();
        }</script>

      <script>
        function updateDeleteButton1(checkbox) {
          var deleteButton1 = document.getElementById('deleteList1');

          if (checkbox.checked) {
            deleteButton1.classList.remove('disabled');
          } else {
            deleteButton1.classList.add('disabled');
          }
        }

        function confirmDelete1() {
          return confirm('Are you sure you want to delete?');
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
            <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateAreaForm()"
              action="<?php echo baseUrl . "Candidate/insertAreaOfIntrest" ?>">

              <div class="col-12">
                <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required>
                  <option value="">Select a Category</option>
                  <?php
                  foreach ($categoryList as $key => $value) {
                    ?>
                    <option value="<?php echo $value->categoryName ?>">
                      <?php echo $value->categoryName ?>
                    </option>
                  <?php } ?>
                  <option value="others">Others</option>
                </select>
                <div id="areacat_error" class="error"></div>
              </div>

              <div class="col-12" id="newcategory_group" style="display: none;">
                <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                <input class="form-control" id="newcategory" name="newcategory">
                <div id="newcategory_error" class="text-danger error"></div>
                <input id="categoryothers" name="categoryothers" value="1" hidden>
              </div>

              <div class="col-md-6">
                <label class="form-label" for=" subcategory">Subcategory <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="subcategory" name="subcategory" required>
                <div id="areasubcat_error" class="error"></div>
              </div>

              <div class="col-md-6" id="otherCategoryFields" style="display: none;">
                <label for="customCategoryInput">Custom Category</label>
                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                <label for="customSubcategoryInput">Custom Subcategory</label>
                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
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
                <label for="preferred-location">Preferred Location to work <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="preferred-location" name="preferred-location" required>
                <div id="arealocation_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="description">Description</label>
                <input class="form-control" id="description" name="description" rows="3" required>
                <div id="areades_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="jobtype">Job Type <span class="text-danger">*</span></label>
                <select class="form-control" id="jobtype" name="jobtype" required>
                  <option value="">Select a Job Type</option>
                  <option value="parttime">Part Time</option>
                  <option value="fulltime">Full Time</option>
                </select>
                <div id="areajob_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="expected-salary">Expected Salary <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="expected-salary" name="expected-salary" required>
                <div id="areasalary_error" class="error"></div>
              </div>


              <input type="number" class="form-control" value="1" name="areasubmit" hidden>

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
            <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateSkillForm()"
              action="<?php echo baseUrl . "Candidate/insertSkillForm" ?>">


              <div class="col-12">
                <label class="form-label" for="skillname">Skill Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="skillname" name="skillname" required>
                <div id="sname_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <div class="experience-container">
                  <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                  <div class="d-flex">
                    <select class="form-control" id="experience" name="experience" required>
                      <option value=""> Select year </option>
                      <?php for ($i = 0; $i <= 20; $i++): ?>

                        <option value="<?php echo $i; ?>">
                          <?php echo $i; ?> Year
                          <?php echo $i !== 1 ? 's' : ''; ?>
                        </option>
                      <?php endfor; ?>
                      <option value="20+ years"> 20+ Years </option>
                    </select>

                  </div>
                  <div id="sexp_error" class="error"></div>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="skillLevel">Skill Level <span class="text-danger">*</span></label>
                <select class="form-control" name="skilllevel" id="skilllevel" required>
                  <option value="">Select Skill Level</option>
                  <option value="beginner">Beginner</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="advanced">Advanced</option>
                </select>
                <div id="slevel_error" class="error"></div>
              </div>

              <input type="number" class="form-control" value="1" name="areasubmit" hidden>

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
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Area of Job Interest Table<span></span></h5>
        <div>
                <a href="<?php echo baseUrl . "Candidate/experienceTable" ?>"> <button type="button"
                    class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                <a href="<?php echo baseUrl . "Candidate/resume" ?>"> <button type="button" class="btn btn-info mb-4 "><i
                      class="bi bi-arrow-right"></i></button></a>
              </div>              
            </div>

        <div class="card recent-sales overflow-auto">

          <div class="card-body">
            <div class="mt-3">
            <a class="" href="#addinterestform">
                <button type="button" class="btn btn-success mb-4" disabled>+ Add Area of Job Interest</button></a>
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
                    <th scope="col">Preferred Location</th>
                    <!-- <th scope="col">Experience</th> -->
                    <th scope="col">Job Type</th>
                    <th scope="col">Description</th>
                    <th scope="col">Expected Salary</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (1) {
                    $count = 1;
                    foreach ($areaOfIntrestTable as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                      ?>
                      <tr>
                        <td>
                          <form method="post" action="<?php echo baseUrl . 'Candidate/deleteAreaInterest'; ?>"
                            id="form_<?= $value['id']; ?>">
                            <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                              onchange="updateDeleteButton2(this)">
                        <td>
                          <?php echo $count++ ?>.
                        </td>
                        <td>
                          <?php echo $value['other_interst_category'] ?>
                        </td>
                        <td>
                          <?php echo $value['other_sub_interst_category'] ?>
                        </td>
                        <td>
                          <?php echo $value['prefered_location'] ?>
                        </td>
                        <!-- <td><?php echo $value['expYear'] ?> Years & <?php echo $value['expMonth'] ?> Months</td> -->
                        <td>
                          <?php echo $value['job_type'] ?>
                        </td>
                        <td>
                          <?php echo $value['description'] ?>
                        </td>
                        <td>
                          <?php echo $value['expected_salary'] ?>
                        </td>
                        <td>
                          <div class="d-flex">
                            <a
                              href="<?php echo baseUrl . "Candidate/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button
                                type="button" class="btn btn-secondary mx-1">Edit</button></a>
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
              <button type="submit" name="submit" id="deleteList2" class="btn btn-danger disabled"
                onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Update Job Interest</h5>
              <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
                <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
            </div>
            <!-- Multi Columns Form -->
            <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateAreaForm()"
              action="<?php echo baseUrl . "Candidate/updateInsertAreaOfIntrest" ?>">

              <?php
              foreach ($updateAreaOfIntrest as $key => $value) {
                $seekerId = $_SESSION['seekerId'];
                ?>
                <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

                <div class="col-md-6">
                  <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                  <select class="form-control" id="category" name="category"
                    value="<?php echo $value['other_interst_category']; ?>">
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
                  <label class="form-label" for="subcategory">Subcategory <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="subcategory" name="subcategory"
                    value="<?php echo $value['other_sub_interst_category'] ?>" required>
                  <div id="areasubcat_error" class="error"></div>
                </div>


                <div class="" id="otherCategoryFields" style="display: none;">
                  <label for="customCategoryInput">Custom Category</label>
                  <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                  <label for="customSubcategoryInput">Custom Subcategory</label>
                  <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput">
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
                  <label class="form-label" for="preferred-location">Preferred Location to work <span
                      class="text-danger">*</span></label>
                  <select class="form-control" id="preferred-location" name="preferred-location"
                    value="<?php echo $value['prefered_location']; ?>" required>
                    <option value="Erode" <?php if ($value['prefered_location'] === 'Erode')
                      echo ' selected'; ?>>Erode
                    </option>
                    <option value="Karur" <?php if ($value['prefered_location'] === 'Karur')
                      echo ' selected'; ?>>Karur
                    </option>
                    <option value="Namakkal" <?php if ($value['prefered_location'] === 'Namakkal')
                      echo ' selected'; ?>>
                      Namakkal</option>
                    <option value="Tirupur" <?php if ($value['prefered_location'] === 'Tirupur')
                      echo ' selected'; ?>>Tirupur
                    </option>
                  </select>
                  <div id="arealocation_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="description">Description <span class="text-danger">*</span></label>
                  <input class="form-control" id="description" name="description"
                    value="<?php echo $value['description']; ?>" rows="3" required>
                  <div id="areades_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="jobtype">Job Type <span class="text-danger">*</span></label>
                  <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>"
                    required>
                    <option value="parttime" <?php if ($value['job_type'] === 'parttime')
                      echo ' selected'; ?>>Part Time
                    </option>
                    <option value="fulltime" <?php if ($value['job_type'] === 'fulltime')
                      echo ' selected'; ?>>Full Time
                    </option>
                  </select>
                  <div id="areajob_error" class="error"></div>
                </div>

                <div class="col-md-6">
                  <label class="form-label" for="expected-salary">Expected Salary <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="expected-salary" name="expected-salary"
                    value="<?php echo $value['expected_salary']; ?>" required>
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
        function updateDeleteButton2(checkbox) {
          var deleteButton2 = document.getElementById('deleteList2');

          if (checkbox.checked) {
            deleteButton2.classList.remove('disabled');
          } else {
            deleteButton2.classList.add('disabled');
          }
        }

        function confirmDelete2() {
          return confirm('Are you sure you want to delete?');
        }
      </script>
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
          errorElements.forEach(function (errorElement) {
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
                <button type="button" class="btn btn-success mb-4" onclick="addskillform()" disabled>+ Add
                  Skill</button></a>
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
                          <td>
                            <form method="post" action="<?php echo baseUrl . 'Candidate/deleteSkill'; ?>"
                              id="form_<?= $value['id']; ?>">
                              <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                onchange="updateDeleteButton1(this)">
                          <td>
                            <?php echo $count++ ?>.
                          </td>
                          <td>
                            <?php echo $value['skill'] ?>
                          </td>
                          <td>
                            <?php echo $value['experience'] ?> Years
                          </td>
                          <td>
                            <?php echo $value['skill_level'] ?>
                          </td>
                          <td>
                            <div class="d-flex">
                              <a class=""
                                href="<?php echo baseUrl . "Candidate/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button
                                  type="button" class="btn btn-secondary mx-1">Edit</button></a>
                              <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Candidate/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
                            </div>
                          </td>
                        </tr>
                        <?php
                      }
                      ?>
                    </tbody>
                  </table>
                  <button type="submit" name="submit" id="deleteList1" class="btn btn-danger disabled"
                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
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

        <div class="card" id="editskillforrm">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Update Skill</h5>
              <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
                <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
            </div>
            <!-- Multi Columns Form -->
            <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateSkillForm()"
              action="<?php echo baseUrl . "Candidate/updateInsertSkill" ?>">

              <?php
              if (isset($updateSkill[0]['id'])) {
                foreach ($updateSkill as $key => $value) {
                  $seekerId = $_SESSION['seekerId'];
                  ?>
                  <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                  <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

                  <div class="col-12">
                    <label class="form-label" for="skillname">Skill Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="skillname" name="skillname"
                      value="<?php echo $value['skill']; ?>" required>
                    <div id="sname_error" class="error"></div>
                  </div>

                  <div class="col-md-6">
                    <div class="experience-container">
                      <label for="experience" class="form-label">Experience <span class="text-danger">*</span></label>
                      <div class="d-flex">
                        <select class="form-control col-3 me-2" id="experience" name="experience" required>
                          <?php $selectedValue = $value['experience'];
                          for ($i = 0; $i <= 20; $i++): ?>
                            <option value="<?php echo $i; ?>" <?php echo ($i == $selectedValue) ? 'selected' : ''; ?>>
                              <?php echo $i; ?> Year
                              <?php echo ($i !== 1) ? 's' : ''; ?>
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
                    <label class="form-label" for="skillLevel">Skill Level <span class="text-danger">*</span></label>
                    <select class="form-control" name="skilllevel" id="skilllevel" required>
                      <option value="beginner" <?php if ($value['skill_level'] === 'beginner')
                        echo ' selected'; ?>>Beginner
                      </option>
                      <option value="intermediate" <?php if ($value['skill_level'] === 'intermediate')
                        echo ' selected'; ?>>
                        Intermediate</option>
                      <option value="advanced" <?php if ($value['skill_level'] === 'advanced')
                        echo ' selected'; ?>>Advanced
                      </option>
                    </select>
                    <div id="slevel_error" class="error"></div>
                  </div>

                  <input type="number" class="form-control" value="1" name="areasubmit" hidden>

                  <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                  </div>

                </form><!-- End Multi Columns Form -->

              </div>
            </div>
          </section>

          <script>
            function updateDeleteButton1(checkbox) {
              var deleteButton1 = document.getElementById('deleteList1');

              if (checkbox.checked) {
                deleteButton1.classList.remove('disabled');
              } else {
                deleteButton1.classList.add('disabled');
              }
            }

            function confirmDelete1() {
              return confirm('Are you sure you want to delete?');
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
        <div class="d-flex justify-content-between">
            <h5 class="card-title">Upload Resume</h5>
            <a class="" href="<?php echo baseUrl . "Candidate/areaOfIntrestTable" ?>">
              <button type="button" class="btn btn-info"><i class="bi bi-arrow-left"></i></button></a>
            </div>

        <div class="card">
          <div class="card-body pt-4">            

            <!-- Multi Columns Form -->
            <form class="row g-3 needs-validation" novalidate name="resumeform" id="resumeForm" method="post"
              enctype="multipart/form-data" onsubmit="return validateForm()"
              action="<?php echo baseUrl . "Candidate/registered" ?>">

              <?php if (!empty($arearesume[0]['resume_filename'])) { ?>
                <div class="col-md-6">
                  <label class="form-label" for="file">Uploaded Resume</label>
                  <input type="file" name="oldresume" id="oldresume" value="<?php echo $arearesume[0]['resume_filename'] ?>"
                    hidden>
                  <div class="uploadedfile d-md-flex">
                    <input type="file" class="form-control " id="idresume" name="file" accept=".pdf,.doc" hidden>
                    <label id="file-input-labelresume" for="idresume" class="form-control">Change file</label>
                    <a href="<?php echo $arearesume[0]['resume_filename_url'] ?>" id="existfileresume" class="ms-2"
                      style="margin-top:10px">
                      <?php echo $arearesume[0]['resume_filename'] ?>
                    </a>
                  </div>
                </div>
              <?php } else {
                ?>
                <div class="col-12">
                  <label class="form-label" for="file">Upload Resume <span class="text-danger">*</span></label>
                  <input type="file" class="form-control" name="file" id="idresume" accept=".pdf,.doc" required>
                  <div id="resume_error" class="text-danger"></div>
                </div>
              <?php } ?>

              <input type="number" class="form-control" value="1" name="resumesubmit" hidden>

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
        document.getElementById("file-input-labelresume").addEventListener("click", function () {
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
      <?php
      if (($basicDetails[0]['bdsubmited'] != '1')) { ?>
        <p>Please enter your Basic Details to complete the process.</p>
      <?php } else if (isset($eduTotalRows) && $eduTotalRows < "1") { ?>
          <p>Please enter your Education Details to complete the process.</p>
      <?php } else if ((isset($expTotalRows) && $expTotalRows < "1")) { ?>
            <p>Please enter your Experience Details to complete the process.</p>
      <?php } else if ((isset($wreaTotalRows) && $areaTotalRows < "1")) { ?>
              <p>Please enter your Area of Job Interest to complete the process.</p>
      <?php } else { ?>
              <section class="Multi Columns Form" style="padding-bottom: 165px;">
                <div>
                  <div class="text-center"><br><br><br>
                    <img class="p-sm-5 img-fluid" src="<?php echo baseUrl . "assets/employee_thanks.png" ?>" alt="Thanks"
                      style="width:70%; height:120%; align-items: center">
                  </div>
                </div>
              </section>
      <?php } ?>

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
                        <img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>" alt="profilep" width="150"
                          height="150">
                        <p class="h2 text-secondary p-2 text-uppercase">
                          <?php echo $value['name']; ?>
                        </p>
                        <div class="text-end mt-2">
                          <p>
                            <?php echo $value['phonenumber'] ?>
                          </p>
                          <p>
                            <?php echo $value['phonenumber1'] ?>
                          </p>
                          <p>
                            <?php echo $value['email'] ?>
                          </p>
                          <p>
                            <?php echo $value['buildingName'] ?>,
                            <?php echo $value['address'] ?>,
                          </p>
                          <p>
                            <?php echo $value['landmark'] ?>,
                          </p>
                          <p>
                            <?php echo $value['district'] ?>,
                            <?php echo $value['pincode'] ?>
                          </p>
                        </div>
                      </div>

                      <div class="d-sm-flex justify-content-between pt-4">
                        <div>
                          <p>D.O.B :
                          <?php $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth'])); ?>
                          <?php echo $formattedDateOfBirth; ?>
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
                          <th class="col-4" scope="col">Aadhaar Number</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><a href="<?php echo $value['photo'] ?>" target="_blank">
                              <?php echo $value['photo_filename'] ?>
                            </a></td>
                          <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank">
                              <?php echo $value['aadharfront_filename'] ?>
                            </a></td>
                          <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank">
                              <?php echo $value['aadharback_filename'] ?>
                            </a></td>
                          <td>
                              <?php echo $value['aadharnumber'] ?>
                          </td>
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
                 <?php
                                        if (isset($educationTable[0]['id']) && !empty($educationTable)) {
                                            ?>
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
                          <td>
                            <?php echo $count; ?>.
                          </td>
                          <td>
                            <?php echo $value['educational_qualification'] ?>
                          </td>
                          <!-- <td><?php echo $value['department'] ?></td> -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" ||
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"

                          ) {
                            ?>
                            <td>
                              <?php echo $value['department'] ?>
                            </td>
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
                          <td>
                            <?php echo $value['school_college_name'] ?>
                          </td>
                          <!-- <td><?php echo $value['percentage'] ?></td> -->
                          <?php
                          if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm" ||
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm" ||
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm" ||
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM" ||
                            $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "12th/HSC"
                          ) {
                            ?>
                            <td>
                              <?php echo $value['percentage'] ?>
                            </td>
                            <?php
                          } else {
                            ?>
                            <td>NA</a></td>
                            <?php
                          }
                          ?>
                          <td>
                            <?php echo $value['yearOfPassing'] ?>
                          </td>
                          <?php
                          if ($value['educational_qualification'] == '10th/SSLC') {
                            ?>
                            <td><a href="<?php echo $value['tencer_url'] ?>" target="blank">
                                <?php echo $value['ten_cer'] ?>
                              </a></td>
                            <?php
                          } else if ($value['educational_qualification'] == '12th/HSC') {
                            ?>
                              <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank">
                                <?php echo $value['twelve_cer'] ?>
                                </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "DIPLOMA" || $value['educational_qualification'] === "D.Pharm"
                          ) {
                            ?>
                                <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank">
                                <?php echo $value['diploma_cer'] ?>
                                  </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                            $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                            $value['educational_qualification'] === "BFA" || $value['educational_qualification'] === "B.Arch" || $value['educational_qualification'] === "B.N" || $value['educational_qualification'] === "BCS" ||
                            $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" ||
                            $value['educational_qualification'] === "B.Pharm"
                          ) {
                            ?>
                                  <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank">
                                <?php echo $value['ug_cer'] ?>
                                    </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                            $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                            $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
                            $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.N" || $value['educational_qualification'] === "MCS" || $value['educational_qualification'] === "LLM" ||
                            $value['educational_qualification'] === "MBBS" || $value['educational_qualification'] === "MPhil" || $value['educational_qualification'] === "M.Pharm"
                          ) {
                            ?>
                                    <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank">
                                <?php echo $value['pg_cer'] ?>
                                      </a></td>
                            <?php
                          } else if (
                            $value['educational_qualification'] === "Ph.D" || $value['educational_qualification'] === "DBA" || $value['educational_qualification'] === "Ed.D" || $value['educational_qualification'] === "MD" ||
                            $value['educational_qualification'] === "DMD" || $value['educational_qualification'] === "DVM"
                          ) {
                            ?>
                                      <td><a href="<?php echo $value['doccer_url'] ?>" target="blank">
                                <?php echo $value['doc_cer'] ?>
                                        </a></td>
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
                <?php } else { ?>
                                            <p>Education qualification is not entered</p>
                                        <?php } ?>
              </div>
            </div>


            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <div id="experiencedContent">
                  <h5 class="card-title">Experience Details</h5>

                  <?php
                  if (isset($experienceTable[0]['id'])) { ?>
                    <table class="table table-striped" id="expTable">
                      <thead>
                        <tr>
                          <th scope="col">S.No</th>
                          <th scope="col">Job Category</th>
                          <th scope="col">Job Sub Category</th>
                          <th scope="col">Experience</th>
                          <th scope="col">Company Name</th>
                          <th scope="col">Company Location</th>
                          <th scope="col">Job Role</th>
                          <th scope="col">Company Mobile Number</th>
                          <th scope="col">Previous Job's Reference Name</th>
                          <th scope="col">Previous Job's Reference Mobile number</th>
                          <th scope="col">Previous Job's Reference Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $loopcount = 1;
                        foreach ($experienceTable as $key => $ivalue) {
                          ?>
                          <tr>
                            <td>
                              <?php echo $loopcount ?>
                            </td>
                            <td>
                              <?php echo $ivalue['other_category'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['other_sub_category'] ?>
                            </td>
                            <td>                            

                              <?php $formattedexpYear = date('d-m-Y', strtotime($ivalue['expYear'])); ?>
                              <?php echo $formattedexpYear; ?>  <br> to <br>

                              <?php $formattedexpMonth = date('d-m-Y', strtotime($ivalue['expMonth'])); ?>
                              <?php echo $formattedexpMonth; ?>

                            </td>
                            <td>
                              <?php echo $ivalue['company_name'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['company_location'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['job_role'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['company_mobilenum'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['previous_employer_name'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['previous_employer_mobile'] ?>
                            </td>
                            <td>
                              <?php echo $ivalue['previous_employer_email'] ?>
                            </td>
                          </tr>
                          <?php
                          $loopcount++;
                        } ?>
                      </tbody>
                    </table>
                    <p id="noexperience">Fresher / No experience after graduation.</p>
                  <?php } else { ?>
                    <div id="fresherContent">
                      <p>Experience is not entered.</p>
                    </div>
                  <?php }
                  ?>
                </div>
              </div>
            </div>

            <script>
              <?php
              if ($experienceTable[0]['workStatus'] == '0') {
                ?>
                document.getElementById("expTable").style.display = "block";
                document.getElementById("noexperience").style.display = "none";

                <?php
              } else if ($experienceTable[0]['workStatus'] == '1') { ?>
                  document.getElementById("expTable").style.display = "none";
                  document.getElementById("noexperience").style.display = "block";

                <?php
              } ?>
            </script>

            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Skills</h5>

                <?php
                if (isset($skillTable[0]['id']) && !empty($skillTable)) {
                  ?>
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
                      $loopcount = 1;
                      foreach ($skillTable as $key => $svalue) {
                        ?>
                        <tr>
                          <td>
                            <?php echo $loopcount; ?>.
                          </td>
                          <td>
                            <?php echo $svalue['skill'] ?>
                          </td>
                          <td>
                            <?php echo $svalue['experience'] ?> years
                          </td>
                          <td>
                            <?php echo $svalue['skill_level'] ?>
                          </td>
                        </tr>
                        <?php
                        $loopcount++;
                      }
                      ?>
                    </tbody>
                  </table>
                  <?php
                } else {
                  echo '<p>Skill is not entered.</p>';
                }
                ?>
              </div>
            </div>

            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Area of Job Interest</h5>

                <?php
                if (isset($areaOfIntrestTable[0]['id'])) {
                  ?>

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Job Category</th>
                        <th scope="col">Job Sub Category</th>
                        <th scope="col">Preferred Location</th>
                        <!-- <th scope="col">Experience</th> -->
                        <th scope="col">Job Type</th>
                        <th scope="col">Description</th>
                        <th scope="col">Expected Salary</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $loopcount = 1;
                      foreach ($areaOfIntrestTable as $key => $avalue) {
                        ?>
                        <tr>
                          <td scope="row">
                            <?php echo $loopcount; ?>.
                          </td>
                          <td>
                            <?php echo $avalue['other_interst_category'] ?>
                          </td>
                          <td>
                            <?php echo $avalue['other_sub_interst_category'] ?>
                          </td>
                          <td>
                            <?php echo $avalue['prefered_location'] ?>
                          </td>
                          <!-- <td><?php echo $avalue['experience'] ?></td> -->
                          <td>
                            <?php echo $avalue['job_type'] ?>
                          </td>
                          <td>
                            <?php echo $avalue['description'] ?>
                          </td>
                          <td>
                            <?php echo $avalue['expected_salary'] ?>
                          </td>
                        </tr>
                        <?php
                        $loopcount++;
                      }
                      ?>
                    </tbody>
                  </table>
                  <?php
                } else {
                  echo '<p> Areas of job interest is not entered. </p>';
                }
                ?>
              </div>
            </div>

            <div class="card recent-sales overflow-auto">
              <div class="card-body">
                <h5 class="card-title">Resume</h5>
                <?php
                if (isset($areaOfIntrestTable[0]['id'])) {
                  ?>
                  <a href="<?php echo $areaOfIntrestTable[0]['resume_filename_url']; ?>" target="blank">
                    <?php echo $areaOfIntrestTable[0]['resume_filename'] ? $areaOfIntrestTable[0]['resume_filename'] : 'No file'; ?>
                  </a>
                  <?php

                } else {
                  echo '<p>Resume not uploaded.</p>';
                }
                ?>
              </div>
            </div>


          </div>

        </div>
      </section>

      <!-- <script>
        function showContent(selection) {
          document.getElementById('experiencedContent').style.display = 'none';
          document.getElementById('fresherContent').style.display = 'none';

          if (selection === 'experience') {
            document.getElementById('experiencedContent').style.display = 'block';
          } else if (selection === 'fresher') {
            document.getElementById('fresherContent').style.display = 'block';
          }
        }
      </script> -->
      <?php
    }
    ?>

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer mt-auto py-3">
    <div class="contact">
      <p style="padding-left:38%; color:#blue;">Need help? Contact us anytime: <a href="tel:7418334443"><strong>+91
            7418334443</strong></a></p>
    </div>
    <div class="copyright">
      &copy; Copyright <strong><span>ArramJobs</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->


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
  <script>
    function validatePhoneNumber(input) {
      // Remove non-numeric characters
      var phoneNumber = input.value.replace(/\D/g, '');

      // Limit to 15 digits
      if (phoneNumber.length > 15) {
        input.value = phoneNumber.slice(0, 15);
      }
    }
  </script>
</body>

</html>