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
        #expected_salaryu::-webkit-inner-spin-button{
            -webkit-appearance: none;
            margin: 0;
            }


         /* To print candidate deatils */
         @media print {
            body {
                visibility: hidden;
            }

            #resumeprint {
                visibility: visible;
            }

            .printdiv,
            .printhide {
                visibility: hidden;
            }
        }

        /* Sidebar changes */

        

        .sidebar {
  position: fixed;
  top: 70px;
  left: 0;
  bottom: 0;
  width: 300px;
  z-index: 996;
  transition: all 0.3s;
  padding: 20px;
  overflow-y: auto;
  scrollbar-width: thin;
  scrollbar-color: #aab7cf transparent;
  box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background: #fff;
  color: #4154f1;
  border-radius: 10px;
} 

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
}

.sidebar-nav .nav-link:hover i {
    color: #fff;
}


        /* End of changes */
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="<?php echo baseUrl; ?>" class="logo d-flex align-items-center">
                <img src="<?php echo baseUrl . "assets/logo.png" ?>" alt="ArramJobs">
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
                        <img src="<?php echo baseUrl . "assets/profilephoto.png" ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['jobProviderUsername']; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['jobProviderUsername']; ?></h6>
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
                            <a class="dropdown-item d-flex align-items-center" onclick="return confirm('Are you sure to logout?')" href="<?php echo baseUrl . "Employer/logout" ?>">
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

            <li class="nav-item <?php echo isPageActive('Employer/dashboard') ? 'active' : ''; ?>">
                <a class="nav-link " href="<?php echo baseUrl . "Employer/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item <?php echo isPageActive('Employer/updateRegistration') ? 'active' : ''; ?>">
                <a class="nav-link "   href="<?php echo baseUrl . "Employer/updateRegistration" ?>">
                    <!-- <i class="bi bi-menu-button-wide"></i> -->
                    <i class="bi bi-person"></i>
                    <span>Employer Profile</span>
                </a>
            </li><!-- End profile Nav -->

            <li class="nav-item <?php echo isPageActive('Employer/jobViewTable') || isPageActive('Employer/jobMatchedTable') || isPageActive('Employer/updateAddNew') || isPageActive('Employer/deleteAddJob') || isPageActive('Employer/addNewJob') || isPageActive('Employer/resumeCard')? 'active' : ''; ?>">
                <a class="nav-link "   href="<?php echo baseUrl . "Employer/jobViewTable" ?>">
                    <i class="bi bi-bar-chart"></i>
                    <span>Employer Jobs</span>
                </a>
            </li><!-- End jobs Nav -->

        </ul>

    </aside><!-- End Sidebar-->

        <?php
            function isPageActive($page)
        {
            // Get the current page URL
            $currentUrl = $_SERVER['REQUEST_URI'];

            // Check if the current page URL contains the specified page
            return strpos($currentUrl, $page) !== false || ($page === 'Employer/dashboard' && $currentUrl === '/');
        }
        ?>


    <main id="main" class="main">
        <?php
        if ($method == "dashboard") {
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

                                <h5 class="card-title">Welcome To Employer Dashboard</h5>
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
        } elseif ($method == "updateJob") {
            ?>
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Company Details</h5>

                            <?php
                        foreach ($this->data['providerDetail'] as $key => $value) {
                            $file_path = $value['company_logo'];
                        ?>
                            <!-- Multi Columns Form -->
                            <form name="forms" class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "Employer/update_record" ?>" method="post" enctype="multipart/form-data" onsubmit="return validateprofile()">
                            <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id"  onkeypress="return allowOnlyLetters(event, this)">
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="inputName5" name="name" value="<?php echo $value['company_name']; ?>"
                                    onkeypress="return allowOnlyLetters(event, this)" placeholder="Enter name" required>
                                    <p id="nameerr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number:</label>
                                    <input type="number" class="form-control" id="inputNumber5" value='<?php echo $value['company_mobile_number']; ?>' name="phno" placeholder="Enter mobile number" required>
                                    <p id="pherr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email" 
                                    value='<?php echo $value['company_email']; ?>' placeholder="Enter email" required >
                                    <p id="mailerr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddres5s" class="form-label">Street Address:</label>
                                    <input type="text" class="form-control" id="inputAddres5s" value='<?php echo $value['street_address']; ?>' 
                                      name="addr" placeholder="Enter address" required>
                                    <p id="adderr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Landmark:</label>
                                    <input type="text" class="form-control" id="inputAddress2"  value='<?php echo $value['Landmark']; ?>' 
                                    name="landmark1" placeholder="Enter landmark" required>
                                <p id="landerr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City:</label>
                                    <input type="text" class="form-control" id="inputCity"  value='<?php echo $value['City']; ?>'
                                    name="city1" placeholder="Enter city" required>
                                <p id="cityerr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputDistrict" class="form-label">District:</label>
                                    <input type="text" class="form-control" id="inputDistrict" value='<?php echo $value['district']; ?>' 
                                    name="district1" placeholder="Enter district" required>
                                <p id="diserr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">State:</label>
                                    <input type="text" class="form-control"  value='<?php echo $value['state']; ?>' 
                                    id="inputState" name="state1" placeholder="Enter state" required>
                                <p id="stateerr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPincode" class="form-label">Pincode:</label>
                                    <input type="text" class="form-control" id="inputPincode" value='<?php echo $value['pincode']; ?>' 
                                    name="pincode1" placeholder="Enter pincode" required>
                                <p id="pinerr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="logo1" class="form-label">Logo:</label>
                                    <div class="uploadedfile" style="display:flex;">
                                    <input type="file" class="form-control" id="logo1" name="logo1" value="<?php echo $value['company_logo']; ?>" hidden/>
                                    <label id="file-input-label" class="form-control" for="logo1">Change File</label>  
                                    <a href="<?php echo $value['company_logourl']; ?>" target="_blank" id="existfile" style="margin-top:10px"><?php echo $value['company_logo']; ?></a>
                                    </div>
                                    <input type="text" class="form-control" value='<?php echo $value['company_logo']; ?>' name="oldimgname" hidden>
                                    <p id="logerr" style="color: red;"></p>
                                    <p style="color:grey;textalign:center;font-size:small;">PNG, JPG, JPEG, PDF Maximum size: 1024KB</p>
                                </div>
                                <div class="col-md-6">
                                    <label for="cwebsite1" class="form-label">Website:</label>
                                    <input type="text" class="form-control" value='<?php echo $value['companywebsite']; ?>'
                                     id="cwebsite1" name="cwebsite1" placeholder="Enter company website">
                                    <p id="weberr" style="color: red;"></p>
                                </div> <div class="col-md-6">
                                    <label for="cpan1" class="form-label">PAN Number:</label>
                                    <input type="text" class="form-control"   value='<?php echo $value['companypan']; ?>'
                                     id="cpan1" name="cpan1" placeholder="Enter company pan number">
                                    <p id="weberr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="cgst1" class="form-label">GST Number:</label>
                                    <input type="text" class="form-control" value='<?php echo $value['companygst']; ?>' 
                                    id="cgst1" name="cgst1" placeholder="Enter company gst number">
                                <p id="weberr" style="color: red;"></p>
                                </div>

                                <h5 class="card-title">Contact Person Details</h5>
                                <div class="col-md-6">
                                    <label for="cpname" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="cpname" value='<?php echo $value['name']; ?>'
                                    name="name1" placeholder="Enter name" onkeypress="return allowOnlyLetters1(event, this)" required>
                                    <p id="nameerr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="cprole" class="form-label">Role:</label>
                                    <input type="text" class="form-control" id="cprole" value='<?php echo $value['role']; ?>' 
                                     name="role" placeholder="Enter role" required>
                                <p id="rolerr" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="cpmobilno" class="form-label">Mobile Number:</label>
                                    <input type="number" class="form-control" id="cpmobilno" value='<?php echo $value['mobile_number']; ?>'
                                     name="phno1" placeholder="Enter mobile number" required>
                                <p id="pherr1" style="color: red;"></p>
                                </div>
                                <div class="col-md-6">
                                    <label for="cpemail" class="form-label">Email-ID:</label>
                                    <input type="email" class="form-control" id="cpemail" value='<?php echo $value['email']; ?>'
                                    name="mail1" placeholder="Enter email" required>
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
                    }else{
                        document.getElementById("adderr").innerHTML = " ";

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
        } elseif ($method == "jobview") {
            ?>
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
                        <div class="card recent-sales overflow-auto">

                            <div class="card-body">
                            <h5 class="card-title">Jobs</h5>

                            <div class="d-flex justify-content-between">
                                     <a class="<?php echo isPageActive('Employer/addNewJob') ? 'active' : ''; ?>" href="<?php echo baseUrl . "Employer/addNewJob" ?>">
                                     <button type="button" class="btn btn-success mb-4">+ Add Job Requirements</button></a>
                                     <a  href="<?php echo baseUrl . "Employer/updateRegistration" ?>"> <button type="button" class="btn btn-info mb-4 ">Previous</button></a>
                                    </div>
                                <?php
                                if (isset($this->data['providerJobs'][0]['company_name'])) {
                                    ?>
                                  
                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Company Name</th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Salary</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Number of Openings</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                 $countjobs = 1;
                                                foreach ($this->data['providerJobs'] as $key => $value) {
                                                $dateap =  $value['date'] ;
                                                    $twelveHourTime = date(" F j, Y", strtotime($dateap));
                                                    ?>

                                                        <tr>
                                                            <td><a ><?php echo $countjobs++; ?>.</a></td>
                                                            <td><?php echo $value['company_name'] ?></td>
                                                            <td><?php echo $value['jobSubCategory'] ?> <?php echo $value['jobCategory'] ?></td>
                                                            <td><?php echo $value['location'] ?></td>
                                                            <td><?php echo $value['job_type'] ?></td>
                                                            <td><?php echo $value['salary'] ?></td>
                                                            <td><?php echo $value['experience'] ?></td>
                                                            <td><?php echo $value['number_of_openings'] ?></td>
                                                            <td><?php echo $twelveHourTime ?></td>
                                                            <td class="d-flex">
                                                            <a class="<?php echo isPageActive('Employer/jobMatchedTable') ? 'active' : ''; ?>" href="<?php echo baseUrl . "Employer/jobMatchedTable" ?>/<?php echo $value['jobCategory'] ?>"><button type="button" class="btn btn-success">List</button></a>
                                                            <a class="px-1 <?php echo isPageActive('Employer/updateAddNew') ? 'active' : ''; ?>" href="<?php echo baseUrl . "Employer/updateAddNew" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-secondary">Edit</button></a>
                                                            <a <?php echo isPageActive('Employer/deleteAddJob') ? 'active' : ''; ?> onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Employer/deleteAddJob" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a>
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
                    </div><!-- End Recent Sales -->
                </section>

                <?php
        } elseif ($method == "addnew") {
            ?>
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

                 <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" onsubmit="return validateForm()" action="<?php echo baseUrl . "Employer/insertJob" ?>">

                    <div class="col-12">
                        <label class="form-label" for="company_name">Company Name:</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo $_SESSION['jobProviderUsername'] ?>" readonly>
                        <div id="company_name_error" class="error"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="category">Category:</label>
                        <select class="form-control" id="category" name="category" onchange="showHideOtherField()" required >
                             <option value="">Select a Category</option>
                                <?php
                            foreach ($categoryList as $key => $value) {
                                ?>
                                  <option value="<?php echo $value->categoryName ?>"><?php echo $value->categoryName ?></option>
                                  <?php } ?>
                                  <option value="others">Others</option>
                        </select>
                        <div id="category_error" class="error"></div>
                    </div>

                    <div class="col-12" id="newcategory_group" style="display: none;">
                        <label for="newcategory" class="form-label">Reason for choosing category as others:</label>
                        <input class="form-control" id="newcategory" name="newcategory"  placeholder="Enter new category">
                        <div id="newcategory_error" class="text-danger error"></div>
                        <!-- <input id="categoryothers" name="categoryothers" value="1" hidden > -->
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="subcategory">Subcategory:</label>
                        <input class="form-control" id="subcategory" name="subcategory"  placeholder="Enter subcategory" required>
                        <div id="subcategory_error" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="experience">Experience:</label>
                        <input type="text" class="form-control" id="experience" name="experience" placeholder="Enter experience" required>
                        <!-- <select class="form-control" id="experience" name="experience" required>
                            <option value="">Select experience</option>
                            <option value="fresher">Fresher</option>
                            <option value="0-3 years">0-3 years</option>
                            <option value="3-5 years">3-5 years</option>
                            <option value="5-10 years">5-10 years</option>
                            <option value="10-15 years">10-15 years</option>
                            <option value="15-20 years">15-20 years</option>
                            <option value="above 20 years">above 20 years</option>
                        </select> -->
                        <div id="experience_error" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="preferred_location">Location:</label>
                        <input type="text" class="form-control" id="preferred_location" name="preferred_location" placeholder="Enter location" required>
                        <div id="preferred_location_error" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="jobtype">Job Type :</label>
                        <select class="form-control" id="jobtype" name="jobtype" required>
                            <option value="">Select jobtype</option>
                            <option value="Fulltime">Full Time</option>
                            <option value="Parttime">Part Time</option>
                        </select>
                        <div id="jobtype_error" class="error"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="expected_salary">Salary:</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" placeholder="Enter salary" required>
                        <div id="expected_salary_error" class="error"></div>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="no_of_openings">No of Openings :</label>
                        <input type="number" class="form-control" id="no_of_openings" name="no_of_openings" placeholder="Enter no of openings" required >
                        <div id="no_of_openings_error" class="error"></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter description" required>
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

                        if (subcategory.value === "") {
                            // alert("Please Select a subcategory");
                            displayError('Subcategory must be filled out', 'subcategory_error');
                            // document.experienceform.subcategorycategory.focus();
                            return false;
                        } else if (subcategory.value !== '') {
                            subcategoryError.innerHTML = '';
                        }

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
        } elseif ($method == "updateaddnew") {
            ?>
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Update Job Requirement</h5>
                <form class="row g-3 needs-validation" novalidate name="experienceform" method="post" onsubmit="return validateFormUpdate()" action="<?php echo baseUrl . "Employer/updateInsert" ?>">
                    <?php
                    foreach ($this->data['updateAddNew'] as $key => $value) {
                    ?>

                        <input type="hidden" class="form-control" value=<?php echo $value['id']; ?> id="id" name="id" placeholder="enter name" onkeypress="return allowOnlyLetters(event, this)">
                        <div class="col-12">
                            <label class="form-label"  for="company_name">Company Name:</label>
                            <input type="text" class="form-control" id="company_name" value="<?php echo $value['company_name']; ?>" name="company_name" readonly>
                            <div id="company_name_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"  for="category">Category:</label>
                            <select class="form-control" id="category" value="<?php echo $value['jobCategory']; ?>" name="category" required>
                            <option value="<?php echo $value['jobCategory'];?>"><?php echo $value['jobCategory'];?></option>
                            <!-- <option value="">Select a category</option>
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
                                                                echo ' selected'; ?>>Professor</option> -->
                            </select>
                            <div id="category_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                              <label class="form-label"  for="subcategory">Subcategory:</label>
                              <input class="form-control" id="subcategory" name="subcategory" value="<?php echo $value['jobSubCategory']; ?>" placeholder="Enter subcategory" required>
                              <div id="subcategory_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"  for="experience">Experience:</label>
                            <input type="text" class="form-control" id="experience" value="<?php echo $value['experience']; ?>" name="experience" placeholder="Enter experience" required>
                            <!-- <select class="form-control" id="experience" value="<?php echo $value['experience']; ?>" name="experience" required>
                                <option value="fresher" <?php if ($value['experience'] === 'fresher')
                                                            echo ' selected'; ?>>Fresher</option>
                                <option value="0-3 years" <?php if ($value['experience'] === '0-3 years')
                                                        echo ' selected'; ?>>0-3 years</option>
                                <option value="3-5 years" <?php if ($value['experience'] === '3-5 years')
                                                        echo ' selected'; ?>>3-5 years</option>
                                <option value="5-10 years" <?php if ($value['experience'] === '5-10 years')
                                                            echo ' selected'; ?>>5-10 years</option>
                                <option value="10-15 years" <?php if ($value['experience'] === '10-15 years')
                                                            echo ' selected'; ?>>10-15 years</option>
                                <option value="15-20 years" <?php if ($value['experience'] === '15-20 years')
                                                            echo ' selected'; ?>>15-20 years</option>
                                <option value="above 20 years" <?php if ($value['experience'] === 'above 20 years')
                                                                    echo ' selected'; ?>>above 20 years</option>
                            </select> -->
                            <div id="experience_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"  for="preferred_location">Preferred Location:</label>
                            <input type="text" class="form-control" id="preferred_location" value="<?php echo $value['location']; ?>" name="preferred_location"  required>
                            <div id="preferred_location_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"  for="jobtype">Job Type:</label>
                            <select class="form-control" id="jobtype" value="<?php echo $value['job_type']; ?>" name="jobtype" required>
                                <!-- <option value="">Select jobtype</option> -->
                                <option value="FullTime" <?php if ($value['job_type'] === 'Fulltime')
                                                                echo ' selected'; ?>>Full Time</option>
                                <option value="PartTime" <?php if ($value['job_type'] === 'Parttime')
                                                                echo ' selected'; ?>>Part Time</option>
                            </select>
                            <div id="jobtype_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"  for="expected_salary">Salary:</label>
                            <input type="number" class="form-control" id="expected_salaryu" value="<?php echo $value['salary']; ?>" name="expected_salary" required>
                            <div id="expected_salary_error" class="error"></div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label"  for="no_of_openings">No of Openings:</label>
                            <input type="number" class="form-control" id="no_of_openings" value="<?php echo $value['number_of_openings']; ?>" name="no_of_openings" required>
                            <div id="no_of_openings_error" class="error"></div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"  for="description">Description:</label>
                            <input type="text" class="form-control" id="description" value="<?php echo $value['description']; ?>" name="description" required>
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
                           displayError('Subcategory must be filled out', 'subcategory_error');
                           return false;
                       } else if (subcategory.value !== '') {
                           subcategoryError.innerHTML = '';
                       }


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
        } elseif ($method == "match") {
            ?>
                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Job Matched Candidates</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Matched Candidate</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">

                        <div> <a  href="<?php echo baseUrl . "Employer/jobViewTable" ?>"> <button type="button" class="btn btn-info m-4 ">Back</button></a> </div>
                            <div class="card-body">
                                <?php
                                if (isset($this->data['response'][0]['name'])) {
                                    ?>
                                        <h5 class="card-title">Matched Candidates<span></span></h5>

                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Subcategory</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Skill Name</th>
                                                    <th scope="col">Action</th>
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
                                                            <td><a class="<?php echo isPageActive('Employer/resumeCard') ? 'active' : ''; ?>" href="<?php echo baseUrl . "Employer/resumeCard" ?>/<?php echo $value['seekerId'] ?>"><button type="button" class="btn btn-warning">Candidate Resume</button></a>
                                                        </td>
                                                        </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                            <div class="d-flex justify-content-between">
                                    <p>Registered id : <?php echo $employerid = $_SESSION['employerid']; ?></p>
                                    <p>Category : <?php echo $this->data['category'] ?></p>
                                    <p>Count :<?php echo $count-1; ?></p>
                                    </div>
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
        } elseif ($method == "resume") {
            ?>
                <section>
                    <!-- Default Card -->
                    <div class="card" id="resumeprint">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    </div>
                                    <div class="">
                                        <h2 class="text-center py-3">Candidate Resume</h2>
                                    </div>
                                    <?php
                                    foreach ($this->data['basicDetails'] as $nkey => $nvalue) {
                                    ?>
                                        <p class="d-flex flex-row-reverse">Candidate ID : <?php echo $nvalue['eeid'] ?></p>
                                    <?php
                                    }
                                    ?>
                                 <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Photo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        foreach ($this->data['basicDetails'] as $nkey => $nvalue) {
                                        ?>
                                                    <tr>
                                                        <td><?php echo $this->data['basicDetails'][0]['name']; ?></td>
                                                        <td><img class="h-100" src="<?php echo $nvalue['photo'] ?>" class="card-img-top" width="160" height="160" alt="profile photo"></td>
                                                    </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <?php
                                if (($basicDetails[0]['requestCandidate'] == '2')) {
                                  foreach ($basicDetails as $key => $value) { 
                                ?>
                                    <table class="table table-striped mt-2">
                                              <thead>
                                                  <tr>
                                                      <th class="col-2" scope="col">Mobile No.</th>
                                                      <th class="col-4" scope="col">Mail</th>
                                                      <th class="col-2" scope="col">D.O.B</th>
                                                      <th class="col-1" scope="col">Age</th>
                                                      <th class="col-1" scope="col">Gender</th>
                                                      <th class="col-2" scope="col">Marital Status </th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                      <tr>
                                                          <td><?php echo $value['phonenumber'] ?></td>
                                                          <td><?php echo $value['email'] ?></td>
                                                          <td><?php echo $value['dateofbirth'] ?></td>
                                                          <td><?php echo $value['age'] ?></td>
                                                          <td><?php echo $value['gender'] ?></td>
                                                          <td><?php echo $value['maritalStatus'] ?></td>
                                                      </tr>
                                              </tbody>
                                          </table>
                                          <table class="table table-striped pt-3">
                                              <thead>
                                                  <tr>
                                                      <th class="col-3" scope="col">Door No.</th>
                                                      <th class="col-4" scope="col">Street Address</th>
                                                      <th class="col-2" scope="col">Landmark</th>
                                                      <th class="col-1" scope="col">Pincode</th>
                                                      <th class="col-1" scope="col">District</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                      <tr>
                                                          <td><?php echo $value['buildingName'] ?></td>
                                                          <td><?php echo $value['address'] ?></td>
                                                          <td><?php echo $value['landmark'] ?></td>
                                                          <td><?php echo $value['pincode'] ?></td>
                                                          <td><?php echo $value['district'] ?></td>
                                                      </tr>
                                              </tbody>
                                          </table>
          
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
                                                <th scope="col">Certificates</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $countedu=1;
                                        foreach ($this->data['education'] as $key => $value) {
                                        ?>
                                                    <tr>
                                                        <th ><?php echo $countedu++; ?>.</th>
                                                        <td><?php echo $value['educational_qualification'] ?></td>
                                                        <td><?php echo $value['department'] ?></td>
                                                        <td><?php echo $value['school_college_name'] ?></td>
                                                        <td><?php echo $value['percentage'] ?></td>
                                                        <td><?php echo $value['yearOfPassing'] ?></td>
                                                        <?php
                    if ( $value['educational_qualification'] == '10th/SSLC' ) {
                      ?>
                                  <td><a href="<?php echo $value['tencer_url'] ?>" target="blank"><?php echo $value['ten_cer'] ?></a></td>
                  <?php
                    }
                    else if ( $value['educational_qualification'] == '12th/HSC' ) {
                    ?>
                     <td><a href="<?php echo $value['twelvecer_url'] ?>" target="blank"><?php echo $value['twelve_cer'] ?></a></td>
                     <?php
                    } else if ($value['educational_qualification'] == 'DIPLOMA') {
                    ?>
                            <td><a href="<?php echo $value['diplomacer_url'] ?>" target="blank"><?php echo $value['diploma_cer'] ?></a></td>
                     <?php
                    }
                    else if ( $value['educational_qualification'] == "B.E" || $value['educational_qualification'] === "B.A" || $value['educational_qualification'] === "B.COM" || $value['educational_qualification'] === "B.ED" ||
                    $value['educational_qualification'] === "B.LIT" || $value['educational_qualification'] === "B.TECH" || $value['educational_qualification'] === "BCA" || $value['educational_qualification'] === "BBA" || 
                    $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW") {
                    ?>
                    <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank"><?php echo $value['ug_cer'] ?></a></td>
                    <?php
                   }
                  else if ( $value['educational_qualification'] == "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                  $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                   $value['educational_qualification'] === "M.SC" || $value['educational_qualification'] === "MSW" ) {
                   ?>
                   <td><a href="<?php echo $value['pgcer_url'] ?>" target="blank"><?php echo $value['pg_cer'] ?></a></td>
                   <?php
                    }
                    else if ( $value['educational_qualification'] == 'Ph.D' ) {
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
                                $countskill = 1;
                                foreach ($this->data['skills'] as $skey => $svalue) {
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
                                $countarea=1;
                                foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                ?>
                                                    <tr>
                                                        <th><?php echo $countarea++; ?>.</th>
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
                                $countexp=1;
                                foreach ($this->data['experienceDetails'] as $ikey => $ivalue) {
                                ?>
                                                    <tr>
                                                        <th><?php echo $countexp++; ?>.</th>
                                                        <td><?php echo $ivalue['other_category'] ?></td>
                                                        <td><?php echo $ivalue['other_sub_category'] ?></td>
                                                        <td><?php echo $ivalue['company_name'] ?></td>
                                                        <td><?php echo $ivalue['job_role'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_name'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_mobile'] ?></td>
                                                        <td><?php echo $ivalue['previous_employer_email'] ?></td>
                                                    </tr>
                                                <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->
                                          <?php
                                             if (($basicDetails[0]['requestCandidate'] == '2')) {
                                          ?>
                                        <h5 class="card-title">Resume</h5>
                                         <a href="<?php echo $areaOfInterest[0]['resume_filename_url'] ;?>" target="blank" >
                                         <?php echo $areaOfInterest[0]['resume_filename'] ?  $areaOfInterest[0]['resume_filename'] : 'No file'; ?>
                                        </a>
                                         <?php
                                               }
                                         ?>
                                </div>
                            </div>

                            
                            
                            <div class="d-flex justify-content-between" id="printdiv">

                                    <form action="<?php echo baseUrl . "employer/requestCandidate" ?>" method="post" >
                                        <input class="form-check-input" type="text" name="requestadmin" id="" value="1" hidden>
                                        <input class="form-check-input" type="text" name="candidateid" id="" value="<?php echo $this->data['basicDetails'][0]['id']; ?>" hidden>
                                        <input class="form-check-input" type="text" name="employer_id" id="" value="<?php echo $_SESSION['employerid'] ?>" hidden>

                                        <button type="submit" id="candidaterequest" class="btn btn-success printhide" onclick="return confirm('Are you sure you want to send requuest ?')">Request to view details</button>
                                    </form>
                                    <button id="candidaterequested" class="btn btn-success printhide" style="display:none" disabled >Request send to view details</button>
                            <!-- <button type="button" onclick="generatePDF()" id="view" class="printhide">Export to PDF</button> -->
                            <button onClick="window.print()"  type="button" class="btn btn-dark printhide">Print</button>
                            </div>

                        </div>
                    </div><!-- End Default Card -->
                </section>
                <?php
                if (($basicDetails[0]['requestCandidate'] == '1')) {
                ?>
                <script>
                    document.getElementById("candidaterequest").style.display = "none";
                    document.getElementById("candidaterequested").style.display = "block";
                </script>
                <?php 
                }
                ?>
                    <?php
                    if (($basicDetails[0]['requestCandidate'] == '2')) {
                    ?>
                    <script>
                        document.getElementById("candidaterequest").style.display = "none";
                    </script>
                    <?php 
                    }
                    ?>
            
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

</body>

</html>