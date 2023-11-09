<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arram Jobs Admin Dashboard</title>
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

  <style>
   /* To hide arrows in number field */
 #inputMobileNumber5::-webkit-outer-spin-button,
   #inputMobileNumber5::-webkit-inner-spin-button ,
   #inputNumber5::-webkit-outer-spin-button,
    #inputNumber5::-webkit-inner-spin-button,
    #yourEmail::-webkit-outer-spin-button,
    #yourEmail::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* .popup {
  display: none;
  position: fixed;
  padding: 10px;
  width: 280px;
  left: 50%;
  margin-left: -150px;
  height: 180px;
  top: 50%;
  margin-top: -100px;
  background: #FFF;
  border: 3px solid #F04A49;
  z-index: 20;
}

#popup:after {
  position: fixed;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: rgba(0,0,0,0.5);
  z-index: -2;
}

#popup:before {
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  background: #FFF;
  z-index: -1;
}

body {
  background: offwhite;
  font-family: Arial, sans-serif;
  text-align: center;
} */

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

        <!-- <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <!-- <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>End Search Icon -->

                <li class="nav-item dropdown">

                    <!-- <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a>End Messages Icon -->



                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?php echo baseUrl . "assets/profilephoto.png" ?>" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $_SESSION['adminName']; ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?php echo $_SESSION['adminName']; ?></h6>
                            <span><?php echo $_SESSION['role']; ?></span>
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
                            <a class="dropdown-item d-flex align-items-center" href="<?php echo baseUrl . "admin/logout" ?>">
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
                <a class="nav-link " href="<?php echo baseUrl . "admin/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <!-- <i class="bi bi-menu-button-wide"></i> -->
                    <i class="bi bi-person"></i>
                    <span>Admin Users</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo baseUrl . "admin/createAdminUser" ?>">
                            <i class="bi bi-circle"></i><span>Create New User</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/adminUsers" ?>">
                            <i class="bi bi-circle"></i><span>Users List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Employers</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo baseUrl . "admin/createEmployer" ?>">
                            <i class="bi bi-circle"></i><span>Create New Employer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/unVerifiedEmployers" ?>">
                            <i class="bi bi-circle"></i><span>Unverified Employer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/verifiedEmployers" ?>">
                            <i class="bi bi-circle"></i><span>Verified Employer</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Employees</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo baseUrl . "admin/createEmployees" ?>">
                            <i class="bi bi-circle"></i><span>Create New Employee</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/unVerifiedEmployees" ?>">
                            <i class="bi bi-circle"></i><span>Unverified Employees</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/verifiedEmployees" ?>">
                            <i class="bi bi-circle"></i><span>Verified Employees</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->

            <?php
            if ($_SESSION['role'] == 'supadm') {
            ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#approvel-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-file-earmark"></i><span>Approval Request</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="approvel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <!-- <li>
                        <a href="<?php echo baseUrl . "admin/createEmployees" ?>">
                            <i class="bi bi-circle"></i><span>Admin Approvel</span>
                        </a>
                    </li> -->
                        <li>
                            <a href="<?php echo baseUrl . "admin/employerApprovelRequest" ?>">
                                <i class="bi bi-circle"></i><span>Employer Approval</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Icons Nav -->
            <?php
            }
            ?>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#delete_nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-dash-circle"></i><span>Deleted List</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="delete_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?php echo baseUrl . "" ?>">
                            <i class="bi bi-circle"></i><span>Employer</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo baseUrl . "admin/deleteEmployeeList" ?>">
                            <i class="bi bi-circle"></i><span>Employee</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <!-- <li class="nav-heading">Pages</li> -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>End Profile Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed disabled" href="pages-faq.html">
                    <i class="bi bi-question-circle"></i>
                    <span>Employee Request</span>
                </a>
            </li> -->
            <!-- End F.A.Q Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-contact.html">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>
            </li>End Contact Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Register</span>
                </a>
            </li>End Register Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Login</span>
                </a>
            </li>End Login Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.html">
                    <i class="bi bi-dash-circle"></i>
                    <span>Error 404</span>
                </a>
            </li>End Error 404 Page Nav -->

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Blank</span>
                </a>
            </li>End Blank Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <?php
        if ($method == "dashboard") {
            $admin = $this->data['admin']['totalRows'];
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

                    <!-- Left side columns -->
                    <div class="col-lg-12">
                        <div class="row">

                            <h5 class="card-title">Verified Users</h5>
                            <!-- Sales Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card">

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
                                        <h5 class="card-title">Admin Users <span>| Verified</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6><?php echo $this->data['admin']['totalRows']; ?></h6>
                                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Sales Card -->

                            <!-- Revenue Card -->
                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card revenue-card">

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
                                        <h5 class="card-title">Employers <span>| Verified</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6><?php echo $this->data['employer']['totalRows']; ?></h6>
                                                <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div><!-- End Revenue Card -->

                            <!-- Customers Card -->
                            <div class="col-xxl-4 col-xl-12">

                                <div class="card info-card customers-card">

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
                                        <h5 class="card-title">Employees <span>| Verified</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6><?php echo $this->data['employee']['totalRows']; ?></h6>
                                                <span class="text-success small pt-1 fw-bold">44%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div><!-- End Customers Card -->

                            <!-- <h5 class="card-title">Unverified Users</h5> -->
                            <!-- Sales Card -->
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="card info-card sales-card"> -->

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

                            <!-- <div class="card-body">
                                        <h5 class="card-title">Admin Users <span>| Request</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>145</h6>
                                                <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>End Sales Card -->

                            <!-- Revenue Card -->
                            <!-- <div class="col-xxl-4 col-md-6">
                                <div class="card info-card revenue-card"> -->

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

                            <!-- <div class="card-body">
                                        <h5 class="card-title">Employers <span>| Request</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>$3,264</h6>
                                                <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>End Revenue Card -->

                            <!-- Customers Card -->
                            <!-- <div class="col-xxl-4 col-xl-12">

                                <div class="card info-card customers-card"> -->

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

                            <!-- <div class="card-body">
                                        <h5 class="card-title">Employees <span>| Request</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>1244</h6>
                                                <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                                            </div>
                                        </div>

                                    </div>
                                </div> -->

                        </div><!-- End Customers Card -->

                    </div>
                </div><!-- End Left side columns -->


                </div>
            </section>
        <?php
        } elseif ($method == "createAdminUser") {
        ?>
            <section class="Multi Columns Form">
                <div class="pagetitle">
                    <h1>Create Admin User</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">CreateAdminUser</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Admin User</h5>

                        <!-- Multi Columns Form -->
                        <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/insertAdminUser" ?>" method="post">
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName5" name="name" placeholder="Enter name" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputUserrole" class="form-label">User Role</label>
                                <select id="inputUserrole" class="form-select" name="userRole" required>
                                    <option selected value="adm">Admin</option>
                                    <?php
                                        if ($_SESSION['role'] == 'supadm') {
                                        ?>
                                         <option value="supadm">Super Admin</option>
                                        <?php
                                        }
                                        ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail5" name="email" placeholder="Enter email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="inputMobileNumber5" name="mobileNumber" placeholder="Enter number" required>
                                <div class="invalid-feedback">Please enter a Mobile Number!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">UserName</label>
                                <input type="text" class="form-control" id="inputUserName5" name="userName" placeholder="Enter username" required>
                                <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5" name="password" placeholder="Enter password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address"  placeholder="Enter address">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" name="address2"  placeholder="Enter address 2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity" name="city"  placeholder="Enter city" >
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="state" class="form-select" disabled>
                                    <option selected>Tamil Nadu</option>
                                    <!-- <option>...</option> -->
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="inputZip" name="pincode"  placeholder="Enter pincode">
                            </div>
                            <!-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div> -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </section>
        <?php
        } elseif ($method == "adminUsers") {
        ?>
            <section class="usertablewithscrool">
                <div class="pagetitle">
                    <h1>Admin Users List</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">User List</li>
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
                                        <?php
                                        if ($_SESSION['role'] == 'supadm') {
                                        ?>
                                        <th scope="col">User Name</th>
                                        <th scope="col">Password</th>
                                        <?php
                                        }
                                        ?>
                                        <th scope="col">Status</th>
                                        <?php
                                        if ($_SESSION['role'] == 'supadm') {
                                        ?>
                                        <th scope="col">Action</th>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $loopcount = 1;
                                    foreach ($this->data['adminUsers'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><a href="#" class="text-primary"><?php echo $value['mobileNumber']; ?></a></td>
                                            <td><?php echo $value['email']; ?></td>
                                            <td><?php echo $value['userRole']; ?></td>
                                            <?php
                                            if ($_SESSION['role'] == 'supadm') {
                                            ?>
                                           <td><?php echo $value['userName']; ?></td>
                                           <td><?php echo $value['password']; ?></td>
                                            <?php
                                            }
                                            ?>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <?php
                                            if ($_SESSION['role'] == 'supadm') {
                                            ?>
                                           <td><a href="<?php echo baseUrl . "admin/deleteAdminuser/" . $value['id'] ?>">
                                           <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Remove</button></a></td>
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
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
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
                                <input type="text" class="form-control" id="inputName5" name="name" placeholder="Enter company name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Company Number</label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile" placeholder="Enter company number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Company Email</label>
                                <input type="email" class="form-control" id="inputEmail5" name="email" placeholder="Enter company email" required>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                            <div class="col-md-6">
                                <label for="inputAddress5" class="form-label">Street Address</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address" placeholder="Enter street address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Landmark</label>
                                <input type="text" class="form-control" id="inputAddress2" name="landmark" placeholder="Enter landmark" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter city" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">District</label>
                                <input type="text" class="form-control" id="inputDistrict" name="district" placeholder="Enter district" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select" name="state">
                                    <option selected value="tamil nadu">Tamil Nadu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="inputPincode" name="pincode"  placeholder="Enter pincode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="inputFile" name="logo">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Website</label>
                                <input type="text" class="form-control" id="cwebsite" name="cwebsite" placeholder="Enter company website">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="cpan" name="cpan" placeholder="Enter company PAN number">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">GST Number</label>
                                <input type="text" class="form-control" id="cgst" name="cgst" placeholder="Enter company GST number">
                            </div>

                            <h5 class="card-title">Contact Person Details</h5>

                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputEmail5" name="name1" placeholder="Enter cp name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Role</label>
                                <input type="text" class="form-control" id="inputEmail5" name="role" placeholder="Enter cp role" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile1" placeholder="Enter cp number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email-ID</label>
                                <input type="email" class="form-control" id="inputEmail5" name="email1" placeholder="Enter cp email" required>
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
                    <h1>Unverified Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Unverified Employers</li>
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
                                <h5 class="card-title">Unverified Employers<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Employer ID</th>
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
                                                <td><?php echo $value['erid']; ?></td>
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
                    <h1>Verified Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Verified Employers</li>
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
                                            <th scope="col">Employer ID</th>
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
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $value['erid']; ?></td>
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
                               <p>Employer ID : <?php echo $value['erid'] ?></p>

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
                                        <!-- <option>...</option> -->
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
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;"><?php echo $this->data['manageEmployer'][0]['verificationRemarks'] ?></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>

                                    <!-- <h5 class="card-title">Send Employer Delete Request</h5>
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
                                            </div> -->

                                            <!-- <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios" value="2" <?php if ($this->data['manageEmployer'][0]['verificationStatus'] == '2') {
                                                                                                                                                        echo 'checked';
                                                                                                                                                    } ?>>
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div>
                                        </div> -->

                                    <!-- </fieldset> -->

                                    <!-- <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteRequestRemarks" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div> -->
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
                    <h1>Create Employees</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Create Employees</li>
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
                                <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter name" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Employee Email</label>
                                <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Enter email" required>
                                <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Employee Mobile Number</label>
                                <input type="number" name="phonenumber" class="form-control" id="yourEmail" placeholder="Enter number" required>
                                <div class="invalid-feedback">Please, enter mobile number!</div>
                            </div>

                            <!-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>
                            <div class="col-12"> -->
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
                    <h1>Unverified Employees</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Unverified Employees</li>
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
                                <h5 class="card-title">Unverified Employees<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Employee ID</th>
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
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><span class="badge bg-primary">Verification Pending</span></td>
                                                <td class="d-flex"><a class="mx-1" href="<?php echo baseUrl . "admin/manageEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <a href="<?php echo baseUrl . "admin/deleteEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
                    <h1>Verified Employees</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Verified Employees</li>
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
                                            <th scope="col">Employee ID</th>
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
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><span class="badge bg-success">Verification success</span></td>
                                                <td><a href="<?php echo baseUrl . "admin/manageEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <a href="<?php echo baseUrl . "admin/deleteEmployee/" . $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
                                    <h5 class="card-title">Employee ID : <?php echo $this->data['basicDetails'][0]['eeid']; ?></h5>
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
                                                <td><?php echo $loopcount; ?>.</td>
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
                                        foreach ($this->data['skills'] as $skey => $svalue) {
                                        ?>
                                            <tr>
                                                <td><?php echo $loopcount; ?>.</td>
                                                <td><?php echo $svalue['skill'] ?></td>
                                                <td><?php echo $svalue['experience'] ?></td>
                                                <td><?php echo $svalue['skill_level'] ?></td>
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
                                                <td scope="row"><?php echo $loopcount; ?>.</td>
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
                                                <td scope="row"><?php echo $loopcount; ?>.</td>
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
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;" >
                                    <?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?></textarea>
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
                    <h1>Verified Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Verified Employers</li>
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
                    <h1>Employer Approval Request</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Employer Approval Request</li>
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
                                            <th scope="col">Employer ID</th>
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
                                                    <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                    <td><?php echo $value['erid']; ?></td>
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
                                                    <td><?php echo $value['erid']; ?></td>
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
                            <p>Employer ID : <?php echo $value['erid'] ?></p>
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
                                <h5 class="card-title">Add Employer Approval</h5>
                                <?php
                                if (isset($this->data['manageEmployer'][0]['id'])) {
                                ?>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-4 pt-0">Add Employer Approval</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1" value="0" <?php if ($this->data['manageEmployer'][0]['addNewApprovel'] == '0') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2" value="1" <?php if ($this->data['manageEmployer'][0]['addNewApprovel'] == '1') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval success
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
                                        <legend class="col-form-label col-sm-4 pt-0">Delete Employer Approval</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1" value="0" <?php if ($this->data['manageEmployer'][0]['deleteApprovel'] == '0') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2" value="1" <?php if ($this->data['manageEmployer'][0]['deleteApprovel'] == '1') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval success
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
                                        <legend class="col-form-label col-sm-4 pt-0">Add Employer Approval</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1" value="0">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2" value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval Success
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
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2" value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval success
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
            </section><?php
        } elseif ($method == "deleteEmployeeList") {
        ?>
            <section class="usertable">
                <div class="pagetitle">
                    <h1>Deleted Employees</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Employee</li>
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
                            if (isset($this->data['deleteEmployeeList'][0]['name'])) {
                            ?>
                                <h5 class="card-title">Deleted Employees<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Employee ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">D.O.B</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['deleteEmployeeList'] as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><?php echo $value['deleteRemarks']; ?></td>
                                    <?php 
                                    if($value['verificationStatus']== 1) {
                                    ?>
                                                <td><span class="badge bg-success">Verification Success</span></td>
                                    <?php 
                                    } else{
                                    ?>
                                                <td><span class="badge bg-danger">Verification Pending</span></td>
                                    <?php
                                    }        
                                    ?>
                                                <td>
                                                    <form action="<?php echo baseUrl . "admin/restoreEmployeeform" ?>" method="post" >
                                                        <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $this->data['deleteEmployeeList'][0]['id'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="restoreEmployee" id="" value="0" hidden>

                                                        <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to restore?')">Restore</button>
                                                    </form>
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
        } elseif ($method == "deleteEmployee") {
        ?>
            <section>
                <div class="pagetitle">
                    <h1>Delete Employee</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Delete</li>
                        </ol>
                    </nav>
                </div>

                <div class="card">
                    <div class="card-body pt-4">
                        
                        <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/deleteEmployeeform" ?>" method="post">
                            <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $this->data['basicDetails'][0]['id'] ?>" hidden>
                            <input class="form-check-input" type="text" name="deleteEmployeeStatus" id="" value="1" hidden>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteEmployeeRemarks" style="height: 100px;" required></textarea>
                                    <label for="floatingTextarea">Remarks</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div><!-- End Default Card -->
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