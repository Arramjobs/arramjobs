<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Employer Page</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="<?php echo baseUrl; ?>/assets/title logo.png" rel="icon">

    <!-- Favicons -->
    <!-- <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Job deccription Popup-->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

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
        #inputNumber5::-webkit-outer-spin-button,
        #inputNumber5::-webkit-inner-spin-button,
        #cpmobilno::-webkit-outer-spin-button,
        #cpmobilno::-webkit-inner-spin-button,
        #expected_salary::-webkit-outer-spin-button,
        #expected_salary::-webkit-inner-spin-button,
        #expected_salaryu::-webkit-outer-spin-button,
        #expected_salaryu::-webkit-inner-spin-button,
        #inputPincode::-webkit-outer-spin-button,
        #inputPincode::-webkit-inner-spin-button,
        #no_of_openings::-webkit-outer-spin-button,
        #no_of_openings::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
            }

/* To print candidate details */
@media print {
            body {
                visibility: hidden;
            }

            img {
                display: block;
            }

            #resumeprint,
            #employerprint,
            #printCandidate,
            #printEmployer {
                visibility: visible;
            }

            @page {
                size: auto;
                margin: 0;
            }

            .printhide {
                visibility: hidden;
            }
        }

        th {
    white-space: nowrap;
}

        /* Sidebar changes */

.sidebar ul li a:hover {
    background: #4154f1;
    color: #fff;
    transition: .3s ease;
    /* border-top-left-radius: 20px;
    border-bottom-left-radius: 20px; */
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
 /* background: red; change hover colour in the side bar */
}

.sidebar-nav .nav-link:hover i {
    color: #fff;
}

@media only screen and (max-width:500px) {
    .resumephoto img{
        width: 120px;
       height: 120px;
    }
}

        /* End of changes */
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo baseUrl; ?>" class="logo d-flex align-items-center">
                <img src="<?php echo baseUrl."assets/logo.png" ?>" alt="ArramJobs">
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown">
                    <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>End Messages Icon -->
                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo baseUrl."assets/profilephoto.png" ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['jobProviderUsername']; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['jobProviderUsername']; ?></h6>
                            <p class="pt-2">
                                <?php echo $_SESSION['employerid']; ?>
                            </p>
                            <span>Employer</span>                          
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
                            <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Are you sure to logout?')" href="<?php echo baseUrl."Employer/logout" ?>">
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

            <li class="nav-item" id="dash" >
                <a class="nav-link " href="<?php echo baseUrl."Employer/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item" id="employerprofile">
                <a class="nav-link "   href="<?php echo baseUrl."Employer/updateRegistration" ?>">
                    <!-- <i class="bi bi-menu-button-wide"></i> -->
                    <i class="bi bi-person"></i>
                    <span>Employer Profile</span>
                </a>
            </li><!-- End profile Nav -->

            <li class="nav-item" id="employerjobs">
                <a class="nav-link "   href="<?php echo baseUrl."Employer/jobViewTable" ?>">
                    <i class="bi bi-bar-chart"></i>
                    <span>Employer Jobs</span>
                </a>
            </li><!-- End jobs Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <?php
        if($method == "dashboard") {
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

                                    <h5 class="card-title ps-4">Welcome To Employer Dashboard</h5>
                                    <div class="col-12">
                                        <div class="card info-card sales-card p-4 ">

                                            <p>At Arram Job Providing, we firmly believe that the key to a prosperous organization lies in
                                                 having the right people onboard. Be it team expansion, project initiation, or the need for
                                                  specialized skills, we serve as your dependable partner in talent acquisition. With our 
                                                  extensive network and expertise, we identify and connect you with top-notch professionals 
                                                  who fit your unique requirements. Our commitment to excellence ensures that you receive 
                                                  candidates who not only meet but exceed your expectations. We're dedicated to streamlining 
                                                  your recruitment process, saving you time and resources, so you can focus on what you do
                                                   best - achieving your business goals.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </section>

                    <?php
        } elseif($method == "updateJob") {
            ?>
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerprofile').classList.add('active');
            </script>
                    <section class="Multi Columns Form">
                        <div class="pagetitle">
                            <h1>Edit Employer Profile</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Profile</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="card-title">Company Details</h5>
                                <a  href="<?php echo baseUrl."Employer/jobViewTable" ?>"> <button type="button" class="btn btn-info"> Next  <i class="bi bi-arrow-right pe-2"></i></button></a>
                                </div>

                        <div class="card">
                            <div class="card-body mt-3">

                                <?php
                                foreach($this->data['providerDetail'] as $key => $value) {
                                    $file_path = $value['company_logo'];
                                    ?>
                                    <!-- Multi Columns Form -->
                                    <form name="forms" class="row g-3 needs-validation" novalidate action="<?php echo baseUrl."Employer/update_record" ?>" method="post" enctype="multipart/form-data" onsubmit="return validateprofile()">
                                    <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id"  onkeypress="return allowOnlyLetters(event, this)">
                                        <div class="col-md-12">
                                            <label for="inputName5" class="form-label">Company Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="inputName5" name="name" value="<?php echo $value['company_name']; ?>"
                                            onkeypress="return allowOnlyLetters(event, this)" required>
                                            <p id="nameerr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputNumber5" class="form-label">Company Mobile Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="inputNumber5" value='<?php echo $value['company_mobile_number']; ?>' name="phno" required 
                                            onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                            <p id="pherr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail5" class="form-label">Email-Id </label>
                                            <input type="email" class="form-control" id="inputEmail5" name="email" value='<?php echo $value['company_email']; ?>' >
                                            <p id="mailerr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="password" class="form-label">Password </label>
                                            <div class="input-group">
                                            <input type="password" class="form-control" id="password" name="password" value='<?php echo $value['password']; ?>' required>
                                            <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                                <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                            </button>
                                            </div>
                                            <p id="passworderr" style="color: red;"></p>
                                            <div class="text-secondary" style="font-size:12px;margin-top:0px" id="passwordmessage">Passwords must contain atleast 1 uppercase, 1 lowercase, 1 special character, 1 number and a minimum of 8 characters.</div>
                                        </div>
                                        <div class="col-md-6">
                                        <label for="inputAddres5s" class="form-label">Street Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="inputAddres5s" value='<?php echo $value['street_address']; ?>' name="addr" required>
                                            <p id="adderr" style="color: red;"></p>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <label for="inputAddress2" class="form-label">Landmark </label>
                                            <input type="text" class="form-control" id="inputAddress2"  value='<?php echo $value['Landmark']; ?>' name="landmark1">
                                        <p id="landerr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputCity" class="form-label">City <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="inputCity"  value='<?php echo $value['City']; ?>' name="city1" required>
                                        <p id="cityerr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputDistrict" class="form-label">District <span class="text-danger">*</span></label>
                                            <select class="form-control" id="inputDistrict" name="district1" required>
                                                <option value="Erode" <?php if ($value['district'] === 'Erode')
                                                            echo ' selected'; ?>>Erode</option>
                                                <option value="Karur" <?php if ($value['district'] === 'Karur')
                                                            echo ' selected'; ?>>Karur</option>
                                                <option value="Namakkal" <?php if ($value['district'] === 'Namakkal')
                                                            echo ' selected'; ?>>Namakkal</option>
                                                <option value="Tirupur" <?php if ($value['district'] === 'Tirupur')
                                                            echo ' selected'; ?>>Tirupur</option>
                                            </select>
                                        <p id="diserr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputState" class="form-label">State <span class="text-danger">*</span></label>
                                            <select class="form-control" id="inputState" name="state1" required>
                                                <option value="<?php echo $value['state']; ?>" selected>Tamil Nadu</option>
                                                    </select>
                                                <p id="stateerr1" style="color: red;"></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="inputPincode" class="form-label">Pincode <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control" id="inputPincode" value='<?php echo $value['pincode']; ?>' name="pincode1" required>
                                        <p id="pinerr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="locationUrl" class="form-label">Location URL </label>
                                            <input type="text" class="form-control" id="locationUrl" name="locationUrl" value='<?php echo $value['companyLocationUrl']; ?>'  pattern="https?://.+">
                                            <p id="lUrlerr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="logo1" class="form-label">Logo</label>
                                            <div class="uploadedfile" style="display:flex;">
                                            <input type="file" class="form-control" id="logo1" name="logo1" value="<?php echo $value['company_logo']; ?>" hidden/>
                                            <label id="file-input-label" class="form-control" for="logo1">Change File</label>  
                                            <a class="ps-2 pt-2" href="<?php echo $value['company_logourl']; ?>" target="_blank" id="existfile" ><?php echo $value['company_logo']; ?></a>
                                            </div>
                                            <input type="text" class="form-control" value='<?php echo $value['company_logo']; ?>' name="oldimgname" hidden>
                                            <p id="logerr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cwebsite1" class="form-label">Website</label>
                                            <input type="text" class="form-control" value='<?php echo $value['companywebsite']; ?>' id="cwebsite1" name="cwebsite1">
                                            <p id="weberr" style="color: red;"></p>
                                        </div> <div class="col-md-6">
                                            <label for="cpan1" class="form-label">PAN Number</label>
                                            <input type="text" class="form-control"   value='<?php echo $value['companypan']; ?>' id="cpan1" name="cpan1">
                                            <p id="weberr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cgst1" class="form-label">GST Number</label>
                                            <input type="text" class="form-control" value='<?php echo $value['companygst']; ?>' id="cgst1" name="cgst1">
                                        <p id="weberr" style="color: red;"></p>
                                        </div>

                                        <h5 class="card-title">Contact Person Details</h5>
                                        <div class="col-md-6">
                                            <label for="cpname" class="form-label">Name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="cpname" value='<?php echo $value['name']; ?>' name="name1" onkeypress="return allowOnlyLetters1(event, this)" required>
                                            <p id="nameerr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cprole" class="form-label">Role <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="cprole" value='<?php echo $value['role']; ?>' name="role" required>
                                        <p id="rolerr" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cpmobilno" class="form-label">Mobile Number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="cpmobilno" value='<?php echo $value['mobile_number']; ?>' name="phno1" required  onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                        <p id="pherr1" style="color: red;"></p>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="cpemail" class="form-label">Email-ID </label>
                                            <input type="email" class="form-control" id="cpemail" value='<?php echo $value['email']; ?>' name="mail1">
                                        <p id="mailerr1" style="color: red;"></p>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                        </div>
                                    </form><!-- End Multi Columns Form -->
                            <?php } ?>
                            </div>
                        </div>
                    </section>

                    <script>
                            document.getElementById("password").onfocus = function() {
                            document.getElementById("passwordmessage").style.display = "block";
                            }

                            document.getElementById("password").onblur = function() {
                            document.getElementById("passwordmessage").style.display = "block";
                            }

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
                    </script>

                    <script>
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

</script>
<script>
                    function validateprofile(){
                        var namep = document.forms.name.value;
                        var phop = document.forms.phno.value;
                        var mailp = document.forms.email.value;
                        // var pswd = document.forms.password.value;
                        var addp =  document.forms.addr.value;
                        var landp = document.forms.landmark1.value;
                        var cityp = document.forms.city1.value;
                        // var distp = document.forms.district1.value;
                        // var statep = document.forms.state1.value;
                        var pincodep = document.forms.pincode1.value;
                         var locurlp = document.forms.locationUrl.value;
                        // var logop = document.forms.logo1.value;
                        var cpname = document.forms.name1.value;
                        var cprole = document.forms.role.value;
                        var cppho = document.forms.phno1.value;
                        var cpmail = document.forms.mail1.value;


                        if(namep == ''){
                            var namesms1 = "Company name must be filled out";
                            document.getElementById("nameerr").innerHTML = namesms1;
                            return false;
                        } else {
                                document.getElementById("nameerr").innerHTML = "";
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
                        } else {
                                document.getElementById("pherr").innerHTML = "";
                            }

                        if (mailp != "") {
                            document.getElementById("mailerr").innerHTML = "";
                            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mailp)) {
                                document.getElementById("mailerr").innerHTML = "";
                            } else {
                                document.getElementById("mailerr").innerHTML = "You have entered an invalid email address";
                                document.forms.email.focus();
                                return false;
                            }
                        } else {
                                document.getElementById("mailerr").innerHTML = "";
                            }

                        //  if (pswd == "") {
                        //     var emailsms = "Password must be filled out";
                        //     document.getElementById("passworderr").innerHTML = emailsms;
                        //     document.forms.password.focus();
                        //     return false;
                        // } else if (mailp != "") {
                        //     document.getElementById("passworderr").innerHTML = "";
                        //     if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(pswd)) {
                        //         document.getElementById("passworderr").innerHTML = "";
                        //     } else {
                        //         document.getElementById("passworderr").innerHTML = "You have entered an invalid password";
                        //         document.forms.password.focus();
                        //         return false;
                        //     }
                        // }

                        if(addp == ''){
                            var adderr = "Street address must be in filled out";
                            document.getElementById("adderr").innerHTML = adderr;
                            document.forms.addr.focus();
                            return false;
                        }else{
                            document.getElementById("adderr").innerHTML = " ";
                        }

                        if (landp == ''){
                            var landmark = "Landmark must be in filled out";
                            document.getElementById("landerr1").innerHTML = landmark;
                            document.forms.landmark1.focus();
                            return false;
                        } else {
                                document.getElementById("landerr1").innerHTML = "";
                            }

                        if(cityp =='')
                        {
                            var city = "City must be in filled out";
                            document.getElementById("cityerr1").innerHTML = city;
                            document.forms.city1.focus();
                            return false;
                        } else {
                                document.getElementById("cityerr1").innerHTML = "";
                            }

                        // if(distp =='')
                        // {
                        //     var dist = "District must be in filled out";
                        //     document.getElementById("diserr1").innerHTML = dist;
                        //     document.forms.district1.focus();
                        //     return false;
                        // }

                        // if(statep == ''){
                        //     var state = "State must be in filled out";
                        //     document.getElementById("stateerr1").innerHTML = state;
                        //     document.forms.state1.focus();
                        //     return false;
                        // }

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
                        } else {
                                document.getElementById("pinerr1").innerHTML = "";
                            }

                        if(locurlp =='')
                        {
                            var city = "Location Url must be in filled out";
                            document.getElementById("lUrlerr").innerHTML = city;
                            document.forms.city1.focus();
                            return false;
                        } else {
                            document.getElementById("lUrlerr").innerHTML = "";
                        }

                        // //  if(logop == '' && document.getElementById('existfile').style.display == "none"){
                        // //     var logo = "Logo must be uploaded";
                        // //     document.getElementById("logoerr").innerHTML = logo;
                        // //     document.forms.logo1.focus();
                        // //     return false;
                        // // }

                        if(cpname == '')
                        {
                            var namesms2 = "Name must be filled out";
                            document.getElementById("nameerr1").innerHTML = namesms2;
                            document.forms.name1.focus();
                            return false;
                        } else {
                                document.getElementById("nameerr1").innerHTML = "";
                            }

                        if(cprole == ''){
                            var role = "Role must be in filled out";
                            document.getElementById("rolerr").innerHTML = role;
                            document.forms.role.focus();
                            return false;
                        } else {
                                document.getElementById("rolerr").innerHTML = "";
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
                        } else {
                                document.getElementById("pherr1").innerHTML = "";
                            }

                        if (cpmail != "") {
                            document.getElementById("mailerr1").innerHTML = "";
                            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(cpmail)) {
                                document.getElementById("mailerr1").innerHTML = "";
                            } else {
                                document.getElementById("mailerr1").innerHTML = "You have entered an invalid email address";
                                document.forms.mail1.focus();
                                return false;
                            }
                        } else {
                                document.getElementById("mailerr1").innerHTML = "";
                            }

                    }

                </script>
            <?php
        } elseif($method == "jobview") {
            ?>
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerjobs').classList.add('active');
            </script>
                    <section class="usertable">
                        <div class="pagetitle">
                            <h1>Employer Jobs</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Table</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->
                        <div class="col-12">
                                <div class="d-flex justify-content-between mt-4">
                                     
                                <a  href="#addjobs"><button type="button" class="btn btn-success mb-4" onclick="addjob()">+ Add Job Requirements</button></a>
                                         <a  href="<?php echo baseUrl."Employer/updateRegistration" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left pe-2"></i> Previous</button></a>
                                        </div>
                            <div class="card recent-sales overflow-auto">

                                <div class="card-body mt-4">
                                <!-- <h5 class="card-title">Jobs</h5> -->

                                    <?php
                                    if(isset($this->data['providerJobs'][0]['company_name'])) {
                                        ?>
                                  
                                                <!-- <table class="table table-borderless datatable"> -->
                                                <table class="table" id="jobTable">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col"></th>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Job Title</th>
                                                            <th scope="col">Job Location</th>
                                                            <th scope="col">Job Timing</th>
                                                            <th scope="col">Salary</th>
                                                            <th scope="col">Experience</th>
                                                            <th scope="col">No. of Openings</th>
                                                            <th scope="col">Job Description</th>
                                                            <th scope="col">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $countjobs = 1;
                                                    foreach($this->data['providerJobs'] as $key => $value) {
                                                        $dateap = $value['date'];
                                                        $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                                        ?>

                                                                    <tr>
                                                                        <td>
                                                                            <form method="post" action="<?php echo baseUrl . 'Employer/deleteAddJob'; ?>"
                                                                                id="form_<?= $value['id']; ?>">
                                                                            <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                                                                onchange="updateDeleteButton(this)">
                                                                        </td>
                                                                        <td><a ><?php echo $countjobs++; ?>.</a></td>
                                                                        <td><?php echo $twelveHourTime ?></td>
                                                                        <td><?php echo $value['jobCategory'] ?>             <?php echo $value['jobSubCategory'] ?></td>
                                                                        <td><?php echo $value['location'] ?></td>
                                                                        <td><?php echo $value['job_type'] ?></td>
                                                                        <td><?php echo $value['salary'] ?></td>
                                                                        <td><?php echo $value['experience'] ?></td>
                                                                        <td><?php echo $value['number_of_openings'] ?></td>
                                                                        <td><?php echo $value['description'] ?></td>
                                                                        <td class="d-flex">
                                                                        <a class="" href="<?php echo baseUrl."Employer/jobMatchedTable" ?>/<?php echo $value['jobCategory'] ?>"><button type="button" class="btn btn-success">Matched Candidates</button></a>
                                                                       <div class="filter">
                                                                                <a class="icon mt-5" href="#" data-bs-toggle="dropdown"><p class="p-3"><i class="bi bi-three-dots-vertical"></i></p></a>
                                                                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                                                    <li><a class="px-1 " href="<?php echo baseUrl."Employer/updateAddNew" ?>/<?php echo $value['id'] ?>#updatejob"><button type="button" class="btn btn-secondary"><i class="bi bi-pencil"></i> Edit</button></a>
                                                                                    <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl."Employer/deleteAddJob" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button></a></li>
                                                                                </ul>
                                                                            </div> 
                                                                  </td> 
                                                                    </tr>
                                                                <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <button type="submit" name="submit" id="deleteList" class="btn btn-danger disabled"
                                                    onclick="return confirm('Are you sure you want to delete?')">Delete</button>
                                                </form>

                                                <div id="paginationButtons" class="text-center mt-4">
                                                    <button onclick="previousPage()">Previous</button>
                                                    <span id="pageInfo"></span>
                                                    <button onclick="nextPage()">Next</button>
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
                        function addjob(){
                        document.getElementById("addjobs").style.display = "block";
                        }
                    </script>

            <script>
                function updateDeleteButton(checkbox) {
              var deleteButton = document.getElementById('deleteList');

              if (checkbox.checked) {
                deleteButton.classList.remove('disabled');
              } else {
                deleteButton.classList.add('disabled');
              }
            }
            </script>

                    <div class="card" id="addjobs" style="display:none">
                            <div class="card-body">
                                <h5 class="card-title">Add New Job Requirement</h5>

                     <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl."Employer/insertJob" ?>">

                        <div class="col-12">
                            <label class="form-label" for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $_SESSION['jobProviderUsername'] ?>" readonly>
                            <div id="company_name_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="category">Category <span class="text-danger">*</span></label>
                            <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required >
                                 <option value="">Select a Category</option>
                                    <?php
                                    foreach($categoryList as $key => $value) {
                                        ?>
                                          <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                                      <?php } ?>
                                      <option value="others">Others</option>
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>

                        <div class="col-12" id="newcategory_group" style="display: none;">
                            <label for="newcategory" class="form-label">Reason for choosing category as others <span class="text-danger">*</span></label>
                            <input class="form-control" id="newcategory" name="newcategory">
                            <div id="newcategory_error" class="text-danger error"></div>
                            <!-- <input id="categoryothers" name="categoryothers" value="1" hidden > -->
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="subcategory">Subcategory</label>
                            <input class="form-control" id="subcategory" name="subcategory">
                            <div id="subcategory_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="experience">Experience <span class="text-danger">*</span></label>
                            <!-- <input type="text" class="form-control" id="experience" name="experience" required> -->
                            <select class="form-control" id="experience" name="experience" required>
                                <option value="">Select experience</option>
                                <option value="fresher">Fresher</option>
                                <option value="0-3 years">0-3 years</option>
                                <option value="3-5 years">3-5 years</option>
                                <option value="5-10 years">5-10 years</option>
                                <option value="10-15 years">10-15 years</option>
                                <option value="15-20 years">15-20 years</option>
                                <option value="above 20 years">above 20 years</option>
                            </select>
                            <div id="experience_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="preferred_location">Job Location <span class="text-danger">*</span></label>
                            <select class="form-control" id="preferred_location" name="preferred_location" required>
                                <option value="">Select job location</option>
                                <option value="Erode">Erode</option>
                                <option value="Karur">Karur</option>
                                <option value="Namakkal">Namakkal</option>
                                <option value="Tirupur">Tirupur</option>
                            </select>
                            <div id="preferred_location_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="preferred_location_url">Job Location URL </label>
                            <input type="text" class="form-control" id="preferred_location_url" name="preferred_location_url" pattern="https?://.+">
                            <div id="preferred_location_url_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jobtype">Job Timing <span class="text-danger">*</span></label>
                            <select class="form-control" id="jobtype" name="jobtype" required>
                                <option value="">Select job timing</option>
                                <option value="Fulltime">Full Time</option>
                                <option value="Parttime">Part Time</option>
                            </select>
                            <div id="jobtype_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="expected_salary">Salary <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="expected_salary" name="expected_salary" required
                            onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            <div id="expected_salary_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="no_of_openings">No of Openings <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="no_of_openings" name="no_of_openings" min="0" required 
                            onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            <div id="no_of_openings_error" class="error"></div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label" for="jobdescription">Job Description </label>
                            <input type="text" class="form-control" id="jobdescription" name="description" data-toggle="popover" data-trigger="hover focus">
                            <div id="description_error" class="error"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                       
                            </div>
                        </div>
                    </section>

                    <!-- <script>
                    document.addEventListener('DOMContentLoaded', function () {
                    var inputField = document.getElementById('jobdescription');
                    var popover = new bootstrap.Popover(inputField, {
                        placement: 'top' 
                    });

                    inputField.addEventListener('input', function () {
                        inputField.setAttribute('data-content', inputField.value);
                    });

                    inputField.addEventListener('mouseover', function () {
                        inputField.setAttribute('data-content', inputField.value);
                        popover.show();
                    });

                    inputField.addEventListener('mouseout', function () {
                        popover.hide();
                    });
                    });
                </script> -->

                <script>
    var table = document.getElementById('jobTable');
    var rowsPerPage = 7;
    var currentPage = 1;
    var totalPages = Math.ceil(table.rows.length / rowsPerPage);

    showPage(currentPage);

    function showPage(page) {
        var startIndex = (page - 1) * rowsPerPage;
        var endIndex = startIndex + rowsPerPage;
        for (var i = 0; i < table.rows.length; i++) {
            if (i >= startIndex && i < endIndex) {
                table.rows[i].style.display = 'table-row';
            } else {
                table.rows[i].style.display = 'none';
            }
        }
    }

    function goToPage(page) {
        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;
        currentPage = page;
        showPage(currentPage);
        updatePaginationButtons();
    }

    function updatePaginationButtons() {
        var buttonsHtml = '';
        for (var i = 1; i <= totalPages; i++) {
            var activeClass = (i === currentPage) ? 'active' : '';
            buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
        }
        document.getElementById('paginationButtons').innerHTML = buttonsHtml;
    }

    updatePaginationButtons();
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
                
                    function validateForm() {

                        var company_name = document.getElementById("company_name");
                        var company_nameError = document.getElementById('company_name_error');

                        var newothercategory = document.getElementById("newcategory_group");
                        var newothercategory_error = document.getElementById("newcategory_error");

                        var category = document.getElementById("category");
                        var categoryError = document.getElementById('category_error');

                        // var subcategory = document.getElementById("subcategory");
                        // var subcategoryError = document.getElementById('subcategory_error');

                        var experience = document.getElementById("experience");
                        var experienceError = document.getElementById('experience_error');

                        var jobtype = document.getElementById("jobtype");
                        var jobtypeError = document.getElementById('jobtype_error')

                        var preferred_location = document.getElementById("preferred_location");
                        var preferred_locationError = document.getElementById("preferred_location_error");

                        var preferred_location_url = document.getElementById("preferred_location_url");
                        var preferred_locationurlError = document.getElementById("preferred_location_url_error");

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

                            if (newothercategory.value === '' &&  document.getElementById("newcategory_group").style.display == "block") {
                                // alert("Please Select a Category");
                                displayError('Please ener new Category', 'newothercategory_error');
                                //  document.experienceform.category.focus();
                                return false;
                            } else if (newothercategory.value !== '') {
                                newothercategory_error.innerHTML = '';
                            }

                            // if (subcategory.value === "") {
                            //     // alert("Please Select a subcategory");
                            //     displayError('Subcategory must be filled out', 'subcategory_error');
                            //     // document.experienceform.subcategorycategory.focus();
                            //     return false;
                            // } else if (subcategory.value !== '') {
                            //     subcategoryError.innerHTML = '';
                            // }

                            if (experience.value.trim() === "") {
                                // alert("Please enter a experience")
                                displayError('Please select an experience', 'experience_error');
                                // document.experienceform.experience.focus();
                                return false;
                            } else if (experience.value !== '') {
                                experienceError.innerHTML = '';
                            }

                            if (preferred_location.value.trim() === "") {
                                // alert("Please enter a preferred location")
                                displayError('Please select a location', 'preferred_location_error');
                                // document.experienceform.preferred_location.focus();
                                return false;
                            } else if (preferred_location.value !== '') {
                                preferred_locationError.innerHTML = '';
                            }

                            // if (preferred_location_url.value.trim() === "") {
                            //     displayError('Location URL must be filled out', 'preferred_location_url_error');
                            //     return false;
                            // } else if (preferred_location_url.value !== '') {
                            //     preferred_locationurlError.innerHTML = '';
                            // }

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

                            // if (description.value.trim() === "") {
                            //     displayError('Description must be filled out', 'description_error');
                            //     return false;
                            // } else if (description.value !== '') {
                            //     description_error.innerHTML = '';
                            // }

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
                } elseif($method == "addnew") {
            ?>
            <!-- Not in use -->
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerjobs').classList.add('active');
            </script>
                    <section class="Multi Columns Form">
                        <div class="pagetitle">
                            <h1>Employer Jobs</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Add Jobs</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Add New Job Requirement</h5>

                     <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl."Employer/insertJob" ?>">

                        <div class="col-12">
                            <label class="form-label" for="company_name">Company Name</label>
                            <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $_SESSION['jobProviderUsername'] ?>" readonly>
                            <div id="company_name_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="category">Category</label>
                            <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required >
                                 <option value="">Select a Category</option>
                                    <?php
                                    foreach($categoryList as $key => $value) {
                                        ?>
                                          <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                                      <?php } ?>
                                      <option value="others">Others</option>
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>

                        <div class="col-12" id="newcategory_group" style="display: none;">
                            <label for="newcategory" class="form-label">Reason for choosing category as others</label>
                            <input class="form-control" id="newcategory" name="newcategory">
                            <div id="newcategory_error" class="text-danger error"></div>
                            <!-- <input id="categoryothers" name="categoryothers" value="1" hidden > -->
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="subcategory">Subcategory</label>
                            <input class="form-control" id="subcategory" name="subcategory">
                            <div id="subcategory_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="experience">Experience</label>
                            <!-- <input type="text" class="form-control" id="experience" name="experience" required> -->
                            <select class="form-control" id="experience" name="experience" required>
                                <option value="">Select experience</option>
                                <option value="fresher">Fresher</option>
                                <option value="0-3 years">0-3 years</option>
                                <option value="3-5 years">3-5 years</option>
                                <option value="5-10 years">5-10 years</option>
                                <option value="10-15 years">10-15 years</option>
                                <option value="15-20 years">15-20 years</option>
                                <option value="above 20 years">above 20 years</option>
                            </select>
                            <div id="experience_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="preferred_location">Location</label>
                            <input type="text" class="form-control" id="preferred_location" name="preferred_location" required>
                            <div id="preferred_location_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="jobtype">Job Timing </label>
                            <select class="form-control" id="jobtype" name="jobtype" required>
                                <option value="">Select jobtype</option>
                                <option value="Fulltime">Full Time</option>
                                <option value="Parttime">Part Time</option>
                            </select>
                            <div id="jobtype_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="expected_salary">Salary</label>
                            <input type="number" class="form-control" id="expected_salary" name="expected_salary" required
                            onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            <div id="expected_salary_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="no_of_openings">No of Openings </label>
                            <input type="number" class="form-control" id="no_of_openings" name="no_of_openings" min="0" required
                            onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            <div id="no_of_openings_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label" for="description">Job Description</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                            <div id="description_error" class="error"></div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form>
                       
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
                
                    function validateForm() {

                        var company_name = document.getElementById("company_name");
                        var company_nameError = document.getElementById('company_name_error');

                        var newothercategory = document.getElementById("newcategory_group");
                        var newothercategory_error = document.getElementById("newcategory_error");

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

                            if (newothercategory.value === '' &&  document.getElementById("newcategory_group").style.display == "block") {
                                // alert("Please Select a Category");
                                displayError('Please ener new Category', 'newothercategory_error');
                                //  document.experienceform.category.focus();
                                return false;
                            } else if (newothercategory.value !== '') {
                                newothercategory_error.innerHTML = '';
                            }

                            // if (subcategory.value === "") {
                            //     displayError('Subcategory must be filled out', 'subcategory_error');
                            //     return false;
                            // } else if (subcategory.value !== '') {
                            //     subcategoryError.innerHTML = '';
                            // }

                            if (experience.value.trim() === "") {
                                // alert("Please enter a experience")
                                displayError('Please select an experience', 'experience_error');
                                // document.experienceform.experience.focus();
                                return false;
                            } else if (experience.value !== '') {
                                experienceError.innerHTML = '';
                            }

                            if (preferred_location.value.trim() === "") {
                                // alert("Please enter a preferred location")
                                displayError('Location must be filled out', 'preferred_location_error');
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

                            // if (description.value.trim() === "") {
                            //     // alert("Please enter a description")
                            //     displayError('Description must be filled out', 'description_error');
                            //     // document.experienceform.description.focus();
                            //     return false;
                            // } else if (description.value !== '') {
                            //     description_error.innerHTML = '';
                            // }

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
        } elseif($method == "updateaddnew") {
            ?>
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerjobs').classList.add('active');
            </script>
                    <section class="Multi Columns Form">
                        <div class="pagetitle">
                            <h1>Employer Jobs</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Jobs</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->

                        <div class="d-flex justify-content-between">
                        <h5 class="card-title">Jobs</h5>
        
                  <a  href="<?php echo baseUrl."Employer/updateRegistration" ?>"> <button type="button" class="btn btn-info mb-4 "><i class="bi bi-arrow-left pe-2"></i> Previous</button></a>
                 </div>
                        <div class="card recent-sales overflow-auto">

    <div class="card-body mt-4">
    
    <a href="<?php echo baseUrl."Employer/jobViewTable" ?>"><button type="button" class="btn btn-success mb-4" >+ Add Job Requirements</button></a>
        <?php
        if(isset($this->data['providerJobs'][0]['company_name'])) {
            ?>
      
                    <!-- <table class="table table-borderless datatable"> -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Date</th>
                                <th scope="col">Company Name</th>
                                <th scope="col">Job Title</th>
                                <th scope="col">Job Location</th>
                                <th scope="col">Job Timing</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Experience</th>
                                <th scope="col">Number of Openings</th>
                                <th scope="col">Job Description</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $countjobs = 1;
                        foreach($this->data['providerJobs'] as $key => $value) {
                            $dateap = $value['date'];
                            $twelveHourTime = date(" F j, Y", strtotime($dateap));
                            ?>

                                        <tr>
                                            <td><a ><?php echo $countjobs++; ?>.</a></td>
                                            <td><?php echo $twelveHourTime ?></td>
                                            <td><?php echo $value['company_name'] ?></td>
                                            <td><?php echo $value['jobCategory'] ?> <?php echo $value['jobSubCategory'] ?></td>
                                            <td><?php echo $value['location'] ?></td>
                                            <td><?php echo $value['job_type'] ?></td>
                                            <td><?php echo $value['salary'] ?></td>
                                            <td><?php echo $value['experience'] ?></td>
                                            <td><?php echo $value['number_of_openings'] ?></td>
                                            <td><?php echo $value['description'] ?></td>
                                            <td class="d-flex">
                                            <a class="" href="<?php echo baseUrl."Employer/jobMatchedTable" ?>/<?php echo $value['jobCategory'] ?>"><button type="button" class="btn btn-success">List</button></a>
                                            <a class="px-1 " href="<?php echo baseUrl."Employer/updateAddNew" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                                            <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl."Employer/deleteAddJob" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
                                      </td> 
                                        </tr>
                                    <?php
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

                        <div class="card" id="updatejob">
                            <div class="card-body">
                                <h5 class="card-title">Update Job Requirement</h5>
                    <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" onsubmit="return validateFormUpdate()" action="<?php echo baseUrl."Employer/updateInsert" ?>">
                        <?php
                        foreach($this->data['updateAddNew'] as $key => $value) {
                            ?>

                                <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" onkeypress="return allowOnlyLetters(event, this)">
                                <div class="col-12">
                                    <label class="form-label"  for="company_name">Company Name:</label>
                                    <input type="text" class="form-control" id="company_name" value="<?php echo $value['company_name']; ?>" name="company_name" readonly>
                                    <div id="company_name_error" class="error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  for="category">Category: <span class="text-danger">*</span></label>
                                    <select class="form-control" id="category" value="<?php echo $value['jobCategory']; ?>" name="category" required>
                                    <?php
                                    $defaultSelectedValue = $value['jobCategory'];
                                    foreach($categoryList as $key => $cvalue) {
                                        $selected = ($cvalue->categoryName == $defaultSelectedValue) ? 'selected' : ''; ?>
                                                      <option value="<?php echo $cvalue->categoryName ?>" <?php echo $selected ?>>
                                                          <?php echo $cvalue->categoryName ?>
                                                      </option>
                                              <?php } ?>
                                              <option value="others" <?php if($value['jobCategory'] === 'others')
                                                          echo ' selected'; ?>>Others</option>
                                    </select>
                                    <div id="category_error" class="error"></div>
                                </div>
                                <div class="col-md-6">
                                      <label class="form-label"  for="subcategory">Subcategory:</label>
                                      <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['jobSubCategory']; ?>">
                                      <div id="subcategory_error" class="error"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"  for="experience">Experience: <span class="text-danger">*</span></label>
                                    <!-- <input type="text" class="form-control" id="experience" value="<?php echo $value['experience']; ?>" name="experience" required> -->
                                    <select class="form-control" id="experience" value="<?php echo $value['experience']; ?>" name="experience" required>
                                        <option value="fresher" <?php if($value['experience'] === 'fresher')
                                            echo ' selected'; ?>>Fresher</option>
                                        <option value="0-3 years" <?php if($value['experience'] === '0-3 years')
                                            echo ' selected'; ?>>0-3 years</option>
                                        <option value="3-5 years" <?php if($value['experience'] === '3-5 years')
                                            echo ' selected'; ?>>3-5 years</option>
                                        <option value="5-10 years" <?php if($value['experience'] === '5-10 years')
                                            echo ' selected'; ?>>5-10 years</option>
                                        <option value="10-15 years" <?php if($value['experience'] === '10-15 years')
                                            echo ' selected'; ?>>10-15 years</option>
                                        <option value="15-20 years" <?php if($value['experience'] === '15-20 years')
                                            echo ' selected'; ?>>15-20 years</option>
                                        <option value="above 20 years" <?php if($value['experience'] === 'above 20 years')
                                            echo ' selected'; ?>>above 20 years</option>
                                    </select>
                                    <div id="experience_error" class="error"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"  for="preferred_location">Preferred Location: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="preferred_location" value="<?php echo $value['location']; ?>" name="preferred_location"  required>
                                    <div id="preferred_location_error" class="error"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="preferred_location_url">Job Location URL:</label>
                                    <input type="text" class="form-control" id="preferred_location_url" value="<?php echo $value['locationUrl']; ?>" name="preferred_location_url" pattern="https?://.+">
                                    <div id="preferred_location_url_error" class="error"></div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label"  for="jobtype">Job Timing: <span class="text-danger">*</span></label>
                                    <select class="form-control" id="jobtype" value="<?php echo $value['job_type']; ?>" name="jobtype" required>
                                        <!-- <option value="">Select jobtype</option> -->
                                        <option value="FullTime" <?php if($value['job_type'] === 'Fulltime')
                                            echo ' selected'; ?>>Full Time</option>
                                        <option value="PartTime" <?php if($value['job_type'] === 'Parttime')
                                            echo ' selected'; ?>>Part Time</option>
                                    </select>
                                    <div id="jobtype_error" class="error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  for="expected_salary">Salary: <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="expected_salaryu" value="<?php echo $value['salary']; ?>" name="expected_salary" required
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                    <div id="expected_salary_error" class="error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label"  for="no_of_openings">No of Openings: <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="no_of_openings" value="<?php echo $value['number_of_openings']; ?>" name="no_of_openings" min="0" required
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                    <div id="no_of_openings_error" class="error"></div>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label"  for="description">Job Description: </label>
                                    <input type="text" class="form-control" id="description" value="<?php echo $value['description']; ?>" name="description">
                                    <div id="description_error" class="error"></div>
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-primary">Update</button>
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
               
                   function validateFormUpdate() {

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

                    //    var preferred_location_url = document.getElementById("preferred_location_url");
                    //    var preferred_locationurlError = document.getElementById("preferred_location_url_error");

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


                        //    if (subcategory.value === "") {
                        //        displayError('Subcategory must be filled out', 'subcategory_error');
                        //        return false;
                        //    } else if (subcategory.value !== '') {
                        //        subcategoryError.innerHTML = '';
                        //    }


                           if (experience.value.trim() === "") {
                               // alert("Please enter a experience");
                               displayError('Please select an experience', 'experience_error');
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


                        //    if (preferred_location_url.value.trim() === "") {
                        //         alert("Please enter a preferred location")
                        //         displayError('Location URL must be filled out', 'preferred_location_url_error');
                        //         document.experienceform.preferred_location.focus();
                        //         return false;
                        //     } else if (preferred_location_url.value !== '') {
                        //         preferred_locationurlError.innerHTML = '';
                        //     }


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
                               displayError('No of openings must be filled out', 'no_of_openings_error');
                               return false;
                           } else if (no_of_openings.value !== '') {
                               no_of_openings_error.innerHTML = '';
                           }



                        //    if (description.value.trim() === "") {
                        //        // alert("Please enter a description");
                        //        displayError('Description must be filled out', 'description_error');
                        //        return false;
                        //    } else if (description.value !== '') {
                        //        description_error.innerHTML = '';
                        //    }

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
        } elseif($method == "match") {
            ?>
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerjobs').classList.add('active');
            </script>
                    <section class="usertable">
                        <div class="pagetitle">
                            <div class="d-flex justify-content-between mt-4">
                            <h1>Job Matched Candidates</h1>                            
                            </div>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Matched Candidate</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->

                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">            
                                <div class="card-body">
                                    <?php
                                    if(isset($this->data['response'][0]['name'])) {
                                        ?>
                                        <div class="d-flex justify-content-between mt-4"> 
                                                <h5 class="card-title">Matched Candidates</h5>
                                                <a  href="<?php echo baseUrl."Employer/jobViewTable" ?>"> <button type="button" class="btn btn-info m-4 "><i class="bi bi-arrow-left pe-2"></i>Back</button></a>
                                        </div>

                                                <table class="table mt-4">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">S.No</th>
                                                            <th scope="col">Candidate ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Category</th>
                                                            <th scope="col">Subcategory</th>
                                                            <th scope="col">Experience</th>
                                                            <th scope="col">Skills</th>
                                                            <th scope="col">Action</th>
                                                            <!-- <th scope="col">Status</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $count = 1;
                                                    foreach($this->data['response'] as $key => $value) {
                                                        ?>
                                                                    <tr>
                                                                        <td><?php echo $count++; ?>.</td>
                                                                        <td><?php echo $value['cdid'] ?></td>
                                                                        <td><?php echo $value['name'] ?> </td>
                                                                        <td><?php echo $value['oic'] ?></td>
                                                                        <td><?php echo $value['oisc'] ?></td>
                                                                        
                                                                        <?php if($value['experienceTable']== "1" ){ ?>
                                                                        <td>Fresher</td>
                                                                        <?php  } 
                                                                        else if($value['experienceTable']== "0" ){ ?> 
                                                                        <td>Experienced</td>
                                                                        <?php } else { ?>
                                                                        <td>Not mentioned</td> 
                                                                        <?php }?>                                                                        
                                                                        
                                                                        <?php if(isset($value['skills'])){ ?>
                                                                        <td><?php echo $value['skills'] ?></td>
                                                                        <?php } else {?>
                                                                        <td>No skills</td>
                                                                        <?php } ?>

                                                                        <!-- <td><a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Candidate Resume</button></a>
                                                                        </td> -->

                                                                        <td><?php if($value['rqsts']== 1 && $value['eprid'] == $_SESSION['employerid']){ ?>
                                                                            <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Requested to Admin to view complete Resume</button></a>
                                                                        <!-- <span class="badge bg-warning"><i class="bi bi-check"></i> Requested to view</span> -->
                                                                    </td>

                                                                        <td> <?php  } else if($value['rqsts']== 3 && $value['eprid']== $_SESSION['employerid']){ ?> 
                                                                            <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Approved to view complete details</button></a>
                                                                        <!-- <span class="badge bg-primary"><i class="bi bi-check2"></i> Approved to view</span> -->
                                                                    </td>

                                                                        <td> <?php  } else if($value['rqsts']== 2 && $value['eprid']== $_SESSION['employerid']){ ?> 
                                                                            <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Request cancelled to view Candidate Resume</button></a>
                                                                        <!-- <span class="badge bg-dark"><i class="bi bi-x"></i> Request cancelled</span> -->
                                                                    </td>

                                                                        <td> <?php  } else if($value['rqsts']== 4  && $value['eprid']== $_SESSION['employerid']){ ?> 
                                                                            <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Candidate Resume (Interviewed)</button></a>
                                                                        <!-- <span class="badge bg-success"><i class="bi bi-check2-all"></i> Interviewed</span> -->
                                                                    </td>

                                                                        <td> <?php  } else if($value['rqsts']== 5 && $value['eprid']== $_SESSION['employerid']){ ?> 
                                                                            <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">Rejected Candidate Resume</button></a>
                                                                        <!-- <span class="badge bg-danger"><i class="bi bi-x-lg"></i> Rejected</span> -->
                                                                    </td>

                                                                        <?php } else {?>
                                                                    <td>
                                                                        <!-- <span class="badge bg-info">Request to view</span> -->
                                                                        <a class="" href="<?php echo baseUrl."Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-secondary">View Candidate Resume</button></a>
                                                                    </td>
                                                                        <?php } ?>                                                                        

                                                                    </tr>
                                                                <?php
                                                    }
                                                    ?>
                                                    </tbody>
                                                    <div class="d-flex justify-content-between">
                                            <b><p style="color:#4BBCF0">Registered id : <?php echo $employerid = $_SESSION['employerid']; ?></p></b>
                                            <b><p style="color:#4BBCF0">Category : <?php echo $this->data['category'] ?></p></b>
                                            <b><p style="color:#E72868">Count : <?php echo $count - 1; ?></p></b>
                                            </div>
                                                </table>
                                            <?php
                                    } else {
                                        ?>
                                                <div class="d-flex justify-content-between mt-4">
                                                <h5 class="card-title">No Records Found</h5>
                                                <a  href="<?php echo baseUrl."Employer/jobViewTable" ?>"> <button type="button" class="btn btn-info "><i class="bi bi-arrow-left"></i> Back </button></a>
                                                </div>
                                            <?php
                                    }
                                    ?>
                                </div>

                            </div>
                        </div><!-- End Recent Sales -->
                    </section>

                    <script>
                        <?php
                    if ($experienceTable[0]['workStatus'] == '0') {
                        ?>
                        document.getElementById("expTable").style.display = "block";
                        document.getElementById("noexperience").style.display = "none";

                    <?php
                    } else if($experienceTable[0]['workStatus'] == '1'){?>
                        document.getElementById("expTable").style.display = "none";
                        document.getElementById("noexperience").style.display = "block";

                    <?php
                    }  ?>
                 </script>

                    <?php
        } elseif($method == "resume") {
            ?>
                <!-- Sidebar Active  -->
            <script>
             document.getElementById('employerjobs').classList.add('active');
            </script>
                    <section>
                        <!-- Default Card -->
                        <div class="card" id="resumeprint">
                            <div class="card-body">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                        </div>
                                        <div class="pagetitle pt-3 d-flex justify-content-between">
                                            <h2 class=" text-center d-flex">Candidate Resume</h2>
                                            <a  href="<?php echo baseUrl."Employer/jobViewTable" ?>"> 
                                            <button type="button" class="btn btn-secondary mb-4 "><i class="bi bi-arrow-left pe-2"></i> Back</button></a>
                                        </div>
                                        <div class="d-flex justify-content-between" id="printdiv">
<div></div>
                                        <form action="<?php echo baseUrl."employer/requestCandidate" ?>" method="post" >
                                                <input class="form-check-input" type="text" name="employer_id" id="" value="<?php echo $_SESSION['employerid'] ?>" hidden>
                                                <input class="form-check-input" type="text" name="candidateid" id="" value="<?php echo $this->data['basicDetails'][0]['id']; ?>" hidden>
                                                    <input class="form-check-input" type="text" name="requestadmin" id="" value="1" hidden>

                                                <button type="submit" id="candidaterequest" class="btn btn-success printhide" onclick="return confirm('Are you sure to send request to view complete details?')">Request to view complete details</button>
                                            </form>
                                            <button id="candidaterequested" class="btn btn-success printhide" style="display:none" disabled >Requested to view complete details</button>
                                    <!-- <button type="button" onclick="generatePDF()" id="view" class="printhide">Export to PDF</button> -->
                                    <!-- <button onClick="window.print()"  type="button" class="btn btn-dark printhide" id="printbutton" style="display:none">Print</button> -->
                                    </div>
                                        <?php
                                        foreach($this->data['basicDetails'] as $nkey => $nvalue) {
                                            ?>
                                                
                                                <h2 class="h2 text-secondary p-2 text-uppercase text-center pb-3"><?php echo $nvalue['name']; ?></h2>
                                                <p class="text-center flex-row-reverse pb-3">Candidate ID : <?php echo $nvalue['eeid'] ?></p>
                                                 <?php
                                            foreach($this->data['canReqStatus'] as $key => $value) {
                                                if (isset($value['request_status']) && $value['request_status'] == '3') {?>
                                                <div class="d-sm-flex justify-content-between py-4 resumephoto">
                                                <img  src="<?php echo baseUrl."uploads/".$nvalue['photo_filename'] ?>" class="" width="160" height="160"  alt="profile photo">
                                                 <?php
                                                }
                                            if (isset($value['request_status']) && $value['request_status'] == '3') { ?>
                                            <div class="text-sm-end mt-4" >
                                               <p><?php echo $nvalue['phonenumber'] ?></p>
                                               <p><?php echo $nvalue['phonenumber1'] ?></p>
                                                <p><?php echo $nvalue['email'] ?></p>
                                                <p><?php echo $nvalue['buildingName'] ?>, <?php echo $nvalue['address'] ?></p>
                                                <p><?php echo $nvalue['district'] ?>, <?php echo $nvalue['pincode'] ?></p>
                                                </div>
                                            </div>
                                          
                                    <div class="d-sm-flex justify-content-between" >
                                        <div>
                                            <p><b>D.O.B :</b> 
                                            <?php $formattedDateOfBirth = date('d-m-Y', strtotime($nvalue['dateofbirth'])); ?>
                                            <?php echo $formattedDateOfBirth; ?></p>
                                            <p><b>Age : </b><?php echo $nvalue['age'] ?></p>
                                        </div>
                                        <div>
                                            <p><b>Gender : </b> <?php echo $nvalue['gender'] ?></p>
                                            <p><b>Marital Status : </b><?php echo $nvalue['maritalStatus'] ?></p>
                                        </div>
                                    </div>

                                    <?php
                                            break;
                                        }
                                        }
                                        ?>
                                         <?php
                                            break;
                                        }
                                        
                                        ?>
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">

                                        <h5 class="card-title">Educational Qualification</h5>
                                        <?php
                                        if (isset($education[0]['id']) && !empty($education)) {
                                            ?>
                                            <!-- Table with stripped rows -->

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">S.No</th>
                                                        <th scope="col">Educational Qualification</th>
                                                        <th scope="col">Specialiization</th>
                                                        <th scope="col">Mode of education</th>
                                                        <th scope="col">Institution Name</th>
                                                        <th scope="col">Percentage</th>
                                                        <th scope="col">Year of Passed Out</th>
                                                        <th scope="col">Certificates</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $loopcount = 1;
                                                    foreach ($this->data['education'] as $key => $value) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $loopcount; ?>.
                                                            </td>
                                                            <td>
                                                                <?php echo $value['educational_qualification'] ?>
                                                            </td>
                                                            <?php if (
                                                                $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                                $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "11th" || $value['educational_qualification'] === "12th/HSC"
                                                            ) { ?>
                                                                <td>NA</td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <?php echo $value['department'] ?>
                                                                </td>
                                                            <?php }
                                                            if ($value['educationmode'] == 'Corres') { ?>
                                                                <td>Correspondance</td>
                                                            <?php } else { ?>
                                                                <td>Regular</td>
                                                            <?php } ?>
                                                            <td>
                                                                <?php echo $value['school_college_name'] ?>
                                                            </td>
                                                            <?php if (
                                                                $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                                $value['educational_qualification'] === "11th"
                                                            ) { ?>
                                                                <td>NA</td>
                                                            <?php } else { ?>
                                                                <td>
                                                                    <?php echo $value['percentage'] ?>
                                                                </td>
                                                            <?php } ?>
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
                                                            } else if ($value['educational_qualification'] == 'DIPLOMA') {
                                                                ?>
                                                                        <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank">
                                                                        <?php echo $value['diploma_cer'] ?>
                                                                            </a></td>
                                                                <?php
                                                            } else if (
                                                                $value['educational_qualification'] == "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                                                                $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" ||
                                                                $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW"
                                                            ) {
                                                                ?>
                                                                            <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank">
                                                                        <?php echo $value['ug_cer'] ?>
                                                                                </a></td>
                                                                <?php
                                                            } else if (
                                                                $value['educational_qualification'] == "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                                                $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                                                $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW"
                                                            ) {
                                                                ?>
                                                                                <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank">
                                                                        <?php echo $value['pg_cer'] ?>
                                                                                    </a></td>
                                                                <?php
                                                            } else if ($value['educational_qualification'] == 'Ph.D') {
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
                                                        $loopcount++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <!-- End Table with stripped rows -->
                                        <?php } else { ?>
                                            <p>No education qualification </p>
                                        <?php } ?>
                                        <!-- End Table with stripped rows -->
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Experience Details</h5>

                                        <?php
                                        if (isset($experienceDetails[0]['id']) && !empty($experienceDetails)) {
                                            ?>
                                        <!-- Table with stripped rows -->
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
                                                    <th scope="col">Previous Employer's Name</th>
                                                    <th scope="col">Previous Employer's Mobile number</th>
                                                    <th scope="col">Previous Employer's Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['experienceDetails'] as $ikey => $ivalue) {
                                                    ?>
                                                    <tr>
                                                        <td scope="row">
                                                            <?php echo $loopcount; ?>.
                                                        </td>
                                                        <td>
                                                            <?php echo $ivalue['other_category'] ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $ivalue['other_sub_category'] ?>
                                                        </td>
                                                        <td>
                                                        <?php echo $ivalue['expYear'] ?> to 
                                                        <?php echo $ivalue['expMonth'] ?>

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
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- End Table with stripped rows -->

                                        <p id="noexperience">Fresher / No experience after graduation.</p>
                  <?php } else { ?>
                    <div id="fresherContent">
                      <p>Experience is not entered.</p>
                    </div>
                  <?php }
                  ?>
                </div>
              </div>

           <script>
                                    <?php
                                    if ($experienceDetails[0]['workStatus'] == '0') {
                                        ?>
                                        document.getElementById("expTable").style.display = "block";
                                        document.getElementById("noexperience").style.display = "none";

                                        <?php
                                    } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
                                            document.getElementById("expTable").style.display = "none";
                                            document.getElementById("noexperience").style.display = "block";

                                        <?php
                                    } ?>
                                </script>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Skills</h5>
                                <?php if(isset($this->data['skills'][0]['skill'])){?>
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
                                            $countskill = 1;
                                            foreach($this->data['skills'] as $skey => $svalue) {
                                                ?>
                                                            <tr>
                                                                <th><?php echo $countskill++; ?>.</th>
                                                                <td><?php echo $svalue['skill'] ?></td>
                                                                <td><?php echo $svalue['experience'] ?></td>
                                                                <td><?php echo $svalue['skill_level'] ?></td>
                                                            </tr>
                                                        <?php
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                        <?php } else{ ?>
                                            <p>No Skills</p>
                                       <?php }?>
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
                                                    <!-- <th scope="col">Experience</th> -->
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Expected Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $countarea = 1;
                                            foreach($this->data['areaOfInterest'] as $akey => $avalue) {
                                                ?>
                                                            <tr>
                                                                <th><?php echo $countarea++; ?>.</th>
                                                                <td><?php echo $avalue['other_interst_category'] ?> </td>
                                                                <td><?php echo $avalue['other_sub_interst_category'] ?></td>
                                                                <td><?php echo $avalue['prefered_location'] ?></td>
                                                                <!-- <td><?php echo $avalue['experience'] ?></td> -->
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
                                

                                        <!-- End Table with stripped rows -->
                                        <!-- <?php
                                              if (isset($canReqStatus[0]['request_status']) && $canReqStatus[0]['request_status'] == '2') {
                                                  ?>
                                        <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                                <h5 class="card-title">Resume</h5>
                                                 <a href="<?php echo $areaOfInterest[0]['resume_filename_url']; ?>" target="blank" >
                                                 <?php echo $areaOfInterest[0]['resume_filename'] ? $areaOfInterest[0]['resume_filename'] : 'No file'; ?>
                                                </a>
                                                </div>
                                </div>
                                                 <?php
                                              }
                                              ?> -->                                  

                            
                                <div class="d-flex justify-content-between" id="printdiv">

                                        <form action="<?php echo baseUrl."employer/requestCandidate" ?>" method="post" >
                                                <input class="form-check-input" type="text" name="employer_id" id="" value="<?php echo $_SESSION['employerid'] ?>" hidden>
                                                <input class="form-check-input" type="text" name="candidateid" id="" value="<?php echo $this->data['basicDetails'][0]['id']; ?>" hidden>
                                                    <input class="form-check-input" type="text" name="requestadmin" id="" value="1" hidden>

                                                <!-- <button type="submit" id="candidaterequest" class="btn btn-success printhide" onclick="return confirm('Are you sure to send request to view complete details?')">Request to view complete details</button> -->
                                            </form>
                                            <!-- <button id="candidaterequested" class="btn btn-success printhide" style="display:none" disabled >Requested to view details</button> -->
                                    <!-- <button type="button" onclick="generatePDF()" id="view" class="printhide">Export to PDF</button> -->
                                    <button onClick="window.print()"  type="button" class="btn btn-dark printhide" id="printbutton" style="display:none">Print</button>
                                    </div>

                                </div>
                            </div><!-- End Default Card -->

                            <!-- <div>
                            <a class="mx-1"
                                                        href="<?php echo baseUrl . "Employer/resumePrint/" . $nvalue['id'] ?>">
                                                        <button type="button" class="btn btn-primary d-flex"><i
                                                                class="bi bi-eye pe-1"></i>Resume</button></a>
                            </div> -->

                        </section>
                    <?php
                    if (isset($canReqStatus[0]['request_status']) && $canReqStatus[0]['request_status'] == '1') {
                        ?>
                        <script>
                            document.getElementById("candidaterequest").style.display = "none";
                            document.getElementById("candidaterequested").style.display = "block";
                        </script>
                    <?php
                    }
                    ?>
                        <?php
                        if (isset($canReqStatus[0]['request_status']) && $canReqStatus[0]['request_status'] == '3') {
                            ?>
                            <script>
                                document.getElementById("candidaterequest").style.display = "none";
                                document.getElementById("printbutton").style.display = "block";
                            </script>
                        <?php
                        }
                        ?>


                    <?php

} elseif ($method == "resumePrint") {
    ?>
    <!-- Sidebar Active  -->
    <script>
        document.getElementById('candidatelist').classList.add('active');
        document.getElementById('candidateoveralllist').classList.add('active');
    </script>
    <section>
        <!-- Default Card -->
        <div id="resumeprint">
                <div class="container">
                    <div class="row">

                    <div class="d-flex justify-content-between">
                        <div></div>
                        <div class=" text-center mt-4" style="margin-right:15px;">
                        <h3 style=" letter-spacing: 3px; color:#94b123;"><b>ARRAM CHARITY TRUST</b></h3>
                        <h4 style="color: #31a5d6;"><b>ARRAM JOBS - CANDIDATE RESUME</b></h4>
                    </div>
                    <img src="<?php echo baseUrl . "assets/title logo.png" ?>" alt="ArramJobs" style="height:65px; width:85px; margin-top: 20px;">
                    </div>
                    
                        <div class=" recent-sales overflow-auto mt-1">
                                <?php
                                foreach ($this->data['basicDetails'] as $key => $nvalue) {
                                    ?>
                                    <div class="d-flex justify-content-between pt-4">
                                        <div class="">
                                            <img src="<?php echo baseUrl . "uploads/" . $nvalue['photo_filename'] ?>"
                                                alt="Your image" width="100" height="100"><br>
                                        <!-- </div>

                                        <div class="col"> -->
                                           <br> <h5>Name :
                                                <?php echo $nvalue['name']; ?>
                                            </h5>
                                            <h5>Candidate ID :
                                                <?php echo $nvalue['eeid']; ?>
                                            </h5><br>
                                        </div>
                                        <div class="text-end mt-0">
                                            <p>
                                                <?php echo $nvalue['phonenumber'] ?>
                                            </p>
                                            <p>
                                                <?php echo $nvalue['email'] ?>
                                            </p>
                                            <p>
                                                <?php echo $nvalue['buildingName'] ?>,
                                                <?php echo $nvalue['address'] ?>
                                            </p>
                                            <p>
                                                <?php echo $nvalue['district'] ?>,
                                                <?php echo $nvalue['pincode'] ?>
                                            </p>
                                        </div>
                                    </div>
                            <?php
                                }
                                ?>
                            </div><br><br>
                            <div class=" recent-sales overflow-auto">
                            <div>
                                <h4><b>Personal Details</b></h4>
                                <div class="d-flex mt-4">
                                <?php
                                foreach ($this->data['basicDetails'] as $key => $nvalue) {
                                    ?>                                     
                                            <!-- <p><b>Phone number : </b>
                                                <?php echo $nvalue['phonenumber1'] ?>
                                            </p> -->
                                            <div class="d-flex">
                                            <div>
                                            <p style="margin-right: 35px;"><b>D.O.B : </b>
                                            <?php $formattedDateOfBirth = date('d-m-Y', strtotime($nvalue['dateofbirth']));?>
                                            <?php echo $formattedDateOfBirth; ?></p>  
                                            <p style="margin-right: 35px;">
                                            <b>Marital Status :</b>
                                                <?php echo $nvalue['maritalStatus'] ?>
                                             </p>                                           
                                                                 
                                            </div>                      
                                            <div>
                                            <p style="margin-right: 35px;">
                                            <b>Age :</b>
                                                <?php echo $nvalue['age'] ?>
                                            </p>                                                                           
                                            <p style="margin-right: 35px;">
                                            <b>Aadhaar Number :</b>
                                            <?php echo $nvalue['aadharnumber'] ?><br>  
                                            </p> 
                                            </div>
                                            <div>
                                            <p style="margin-right: 35px;">
                                            <b>Gender :</b>
                                                <?php echo $nvalue['gender'] ?>
                                            </p>                                            
                                            
                                            </div>
                                            </div>
                                    </div>
                                </div>
                            </div>  


                        <div class=" recent-sales overflow-auto">
                            <div>
                                <h4><b>Educational Qualification</b></h4>

                                <?php
                                if (isset($education[0]['id']) && !empty($education)) {
                                    ?>                                        
                                            <div>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['education'] as $key => $value) {
                                                ?>
                                                        <p><b><?php echo $loopcount; ?> .</b>

                                                    <?php echo $value['educational_qualification'] ?>
                                                      
                                                    <?php if (
                                                        $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                        $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "11th" || $value['educational_qualification'] === "12th/HSC"
                                                    ) { ?>
                                                        
                                                    <?php } else { ?> - <?php echo $value['department'] ?>

                                                        <?php } ?> - <?php echo $value['school_college_name'] ?>

                                                    <?php if (
                                                        $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                        $value['educational_qualification'] === "11th"
                                                    ) { ?>
                                                        NA
                                                    <?php } else { ?>  with <?php echo $value['percentage'] ?>%                                   
                                                    <?php } ?> - <?php echo $value['yearOfPassing'] ?>

                                                <?php
                                                $loopcount++;
                                            }
                                            ?>
                                            </div><br>

                                <?php } else { ?>
                                    <p>Education qualification is not entered</p>
                                <?php } ?>
                                <!-- End Table with stripped rows -->
                            </div>
                        </div>
                       

                        <div class=" recent-sales overflow-auto">
              <div>
                <div id="experiencedContent">
                  <h4><b>Experience Details</b></h4>

                  <?php
                  if (isset($experienceDetails[0]['id'])) { ?>
                    
                        <div id="expTable">
                        <?php
                        $loopcount = 1;
                        foreach ($experienceDetails as $key => $ivalue) {
                          ?>
                         <p>
                    <h5><b><?php echo $loopcount ?> . 
                    <?php echo $ivalue['other_category'] ?> : <?php echo $ivalue['other_sub_category'] ?></h5></b>
                
                    *  Worked in <?php echo $ivalue['company_name'] ?>,
                    <?php echo $ivalue['expYear'] ?> to 
                            <?php echo $ivalue['expMonth'] ?>
                    <?php echo $ivalue['job_role'] ?>
                        , 
                        <?php echo $ivalue['company_location'] ?>                           
                          <?php
                          $loopcount++;
                        } ?>
                        </p>
                        </div>
                        
                        <p id="noexperience">Fresher / No experience after graduation.</p><br>
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
                            if ($experienceDetails[0]['workStatus'] == '0') {
                                ?>
                                document.getElementById("expTable").style.display = "block";
                                document.getElementById("noexperience").style.display = "none";

                                <?php
                            } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
                                    document.getElementById("expTable").style.display = "none";
                                    document.getElementById("noexperience").style.display = "block";

                                <?php
                            } ?>
                        </script>

                        <div class=" recent-sales overflow-auto">
                            <div>
                                <h4><b>Skills</b></h4>
                                <?php
                                if (isset($skills[0]['id']) && !empty($skills)) { ?>
                                    
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['skills'] as $skey => $svalue) {
                                                ?>
                                                        <b><h5><?php echo $loopcount; ?>. <?php echo $svalue['skill'] ?> skills : </h5></b>  
                                                        * <?php echo $svalue['experience'] ?> years of experience at
                                                         <?php echo $svalue['skill_level'] ?> level.
                                                    
                                                <?php
                                                $loopcount++;
                                            }
                                            ?><br>

                                <?php
                                } else { ?>
                                    <p>Skill is not entered</p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class=" recent-sales overflow-auto">
                            <div><br>
                                <h4><b>Area of Job Interest</b></h4>

                                <?php
                                if (isset($areaOfInterest[0]['id']) && !empty($areaOfInterest)) { ?>                                    
                                           
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                                ?>
                                                        <b><h5><?php echo $loopcount; ?>. <?php echo $avalue['other_interst_category'] ?> : <?php echo $avalue['other_sub_interst_category'] ?> </h5></b>
                                                   <b>* Prefered Location : </b><?php echo $avalue['prefered_location'] ?> <br>
                                                   <b>* Expected salary :</b> <?php echo $avalue['expected_salary'] ?> <br>
                                                   <b>* Job type : </b> <?php echo $avalue['job_type'] ?> <br>
                                                    
                                                    <b>* Job description : </b>    <?php echo $avalue['description'] ?><br>
                                                   
                                                <?php
                                                $loopcount++;
                                            }
                                            ?><br><br>

                                <?php } else { ?>
                                    <p>Area of job interest is not entered</p><br>

                                <?php } ?>

                            </div>
                        </div>                        

                            <?php
                                }
                                ?>
                            </div>
                        </div>

                        <div style="float:right;">
                            <button onClick="window.print()" type="button"
                                class="btn btn-dark printhide">Print</button>
                        </div>
                    </div>
    </section>
    <script>
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

            
               <?php
        }
        ?>

        <!-- To download pdf -->
        <!-- <script type="text/javascript">
                function generatePDF() {

                    var element = document.getElementById('resumeprint');
                    var opt = {
                        margin: 0.5,
                        filename: 'Employee_profile.pdf',
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
            </script> -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
    <div class="contact">
      <p style="padding-left:38%; color:#blue;">Need help? Contact us anytime: <a href="tel:7418334443"><strong>+91 7418334443</strong></a></p>
    </div>
        <div class="copyright">
            &copy; Copyright <strong><span>ArramJobs</span></strong>. All Rights Reserved
        </div>
        <div class="credits">

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

    <!-- Event listener to block right-click -->
<script>
    function blockRightClick(event) {
        event.preventDefault(); 
    }

    document.addEventListener('contextmenu', blockRightClick);
</script>

</body>

</html>