<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arram Jobs Admin Dashboard</title>
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

         /* To print candidate deatils */
         @media print {
            body {
                visibility: hidden;
            }

            #resumeprint , #employerprint {
                visibility: visible;
            }

            .printhide {
                visibility: hidden;
            }
        }

/* Sidebar css changes */

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


.sidebar-nav .nav-link.collapsed.active i,
.sidebar-nav .nav-link.collapsed:hover i {
  color: #fff;
  /* background: #4154f1; */
  padding-top: 0.1rem;
  padding-bottom: 0.1rem;
  
}

.sidebar-nav .nav-link.collapsed.active,
.sidebar-nav .nav-link.collapsed:hover {
  color: #fff;
  background-color: #4154f1;
  }

.sidebar-nav .nav-link.collapsed i {
  color: #4154f1;
  background-color: transparent;
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

.sidebar-nav .nav-content a i {
  font-size: 6px;
  margin-right: 8px;
  line-height: 0;
  border-radius: 50%;
  }

.sidebar-nav .nav-content a:hover,
.sidebar-nav .nav-content a.active {
  background: #4154f1;
  color: #fff;
  margin-top: 2px;
  margin-bottom: 2px;
}

.sidebar-nav .nav-content a.active i {
  background-color: #4154f1;
  color: #fff;

}

.sidebar-nav .nav-link {
  display: flex;
  align-items: center;
  font-size: 15px;
  font-weight: 600;
  color: #4154f1;
  transition: 0.3;
  background: transparent;
  padding: 10px 15px;
  border-radius: 4px;
}

.sidebar-nav .nav-link1 {
  
  color: #4154f1;
  background: black;
  
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
                            <h6><?php echo $_SESSION['adminid']; ?> / <?php echo $_SESSION['adminName']; ?></h6>
                                <span>Admin</span>
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

            <li class="nav-item " id="dash" >
                <a class="nav-link " href="<?php echo baseUrl . "admin/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span id="dashboardad">Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="mb-1">
                <a class="nav-link collapsed " id="adminuser" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <!-- <i class="bi bi-menu-button-wide"></i> -->
                    <i class="bi bi-person"></i>
                    <span>Admin Users</span>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a id="adminusernew" href="<?php echo baseUrl . "admin/createAdminUser" ?>">
                            <i class="bi bi-circle"></i><span>Create New User</span>
                        </a>
                    </li>
                    <li>
                        <a id="adminuserlist" href="<?php echo baseUrl . "admin/adminUsers" ?>">
                            <i class="bi bi-circle"></i><span>Users List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" id="employerslist" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Employers</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a id="employercreate" href="<?php echo baseUrl . "admin/createEmployer" ?>">
                            <i class="bi bi-circle"></i><span>Create New Employer</span>
                        </a>
                    </li>
                    <li>
                        <a id="employernewlist" href="<?php echo baseUrl . "admin/newEmployersList" ?>">
                            <i class="bi bi-circle"></i><span>New Employer List</span>
                        </a>
                    </li>
                    <li>
                        <a id="employerverifiedlist" href="<?php echo baseUrl . "admin/verifiedEmployers" ?>">
                            <i class="bi bi-circle"></i><span>Verified List</span>
                        </a>
                    </li>
                    <li>
                        <a id="employerpendinglist" href="<?php echo baseUrl . "admin/pendingEmployers" ?>">
                            <i class="bi bi-circle"></i><span>Pending List</span>
                        </a>
                    </li>
                    <li>
                        <a id="employerdeletedlist" href="<?php echo baseUrl . "admin/deleteEmployerList" ?>">
                            <i class="bi bi-circle"></i><span>Deleted List</span>
                        </a>
                    </li>
                    <li>
                        <a id="employeroveralllist" href="<?php echo baseUrl . "admin/overallEmployers" ?>">
                            <i class="bi bi-circle"></i><span>Overall List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" id="candidatelist" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Candidates</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a id="candidatecreate" href="<?php echo baseUrl . "admin/createCandidates" ?>">
                            <i class="bi bi-circle"></i><span>Create New Candidate</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidatenewlist" href="<?php echo baseUrl . "admin/newCandidateList" ?>">
                            <i class="bi bi-circle"></i><span>New Candidate List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidateverifiedlist" href="<?php echo baseUrl . "admin/verifiedCandidate" ?>">
                            <i class="bi bi-circle"></i><span>Verified List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidatependinglist" href="<?php echo baseUrl . "admin/pendingCandidates" ?>">
                            <i class="bi bi-circle"></i><span>Pending List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidatedeletedlist" href="<?php echo baseUrl . "admin/deleteCandidateList" ?>">
                            <i class="bi bi-circle"></i><span>Deleted List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidateoveralllist" href="<?php echo baseUrl . "admin/overallCandidates" ?>">
                            <i class="bi bi-circle"></i><span>Overall List</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
            <li class="nav-item ">
                <a class="nav-link collapsed" id="candidaterequest" href="<?php echo baseUrl . "admin/candidateRequestList" ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Request For Candidate</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" id="categoryrequest" href="<?php echo baseUrl . "admin/categoryRequest" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Add Category Request</span>
                </a>
            </li>

            <!-- <?php  if ($_SESSION['role'] == 'supadm') {   ?> -->

                  <!-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#approvel-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-file-earmark"></i><span>Approval Request</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="approvel-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                        <a href="<?php echo baseUrl . "admin/createEmployees" ?>">
                            <i class="bi bi-circle"></i><span>Admin Approvel</span>
                        </a>
                    </li>
                        <li>
                            <a href="<?php echo baseUrl . "admin/employerApprovelRequest" ?>">
                                <i class="bi bi-circle"></i><span>Employer Approval</span>
                            </a>
                        </li>
                    </ul>
                </li>End Icons Nav -->

                <?php  } ?>

            <!-- <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#delete_nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-dash-circle"></i><span>Recently Deleted</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="delete_nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Employer</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Employee</span>
                        </a>
                    </li>
                </ul>
            </li>End Charts Nav -->

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

        <!-- <?php
        function isPageActive($page)
        {
            // Get the current page URL
            $currentUrl = $_SERVER['REQUEST_URI'];

            // Check if the current page URL contains the specified page
            return strpos($currentUrl, $page) !== false || ($page === 'Employee/dash' && $currentUrl === '/');
        }
    ?> -->

    <main id="main" class="main">
        <?php
        if ($method == "dashboard") {
            $admin = $this->data['admin']['totalRows'];
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
                                        <h5 class="card-title">Candidates <span>| Verified</span></h5>

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
<!-- Sidebar Active  -->
            <script>
                 document.getElementById('adminuser').classList.add('active');
                 document.getElementById('adminusernew').classList.add('active');
            </script> 

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
        <!-- Sidebar Active  -->
         <script>
                 document.getElementById('adminuser').classList.add('active');
                 document.getElementById('adminuserlist').classList.add('active');
            </script> 

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
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Email</th>
                                        <!-- <th scope="col">User Role</th> -->
                                        <th scope="col">User Name</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">Date</th>
                                        <!-- <th scope="col">Status</th> -->
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $loopcount = 1;
                                    foreach ($this->data['adminUsers'] as $key => $value) {
                                        $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date(" F j, Y", strtotime($dateap));
                                    ?>
                                        <tr>
                                            <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                            <td><?php echo $value['admin_id']; ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><a href="#" class="text-primary"><?php echo $value['mobileNumber']; ?></a></td>
                                            <td><?php echo $value['email']; ?></td>
                                            <!-- <td><?php echo $value['userRole']; ?></td> -->
                                            <td><?php echo $value['userName']; ?></td>
                                            <td><?php echo $value['password']; ?></td>
                                            <td><?php echo $twelveHourTime; ?></td>
                                            <!-- <td><span class="badge bg-success">Approved</span></td> -->
                                           <td><a href="<?php echo baseUrl . "admin/deleteAdminuser/" . $value['id'] ?>">
                                           <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">Remove</button></a></td>
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
        <!-- Sidebar Active  -->
         <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employercreate').classList.add('active');
            </script> 
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
                                <label for="locationUrl" class="form-label">Location URL</label>
                                <input type="text" class="form-control" id="locationUrl" name="locationUrl"  placeholder="Enter company location link" >
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
                                <button type="submit" class="btn btn-primary">Create Account</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </section>
        <?php
        } elseif ($method == "unVerifiedEmployers") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employernewlist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>New Employers List</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">New Employers</li>
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
                                <h5 class="card-title">New Employers<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col"> Company Number</th>
                                            <th scope="col">Contact Person Name</th>
                                            <th scope="col">Contact Person Role</th>
                                            <th scope="col">Contact Person Mobile</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['unVerifiedEmployers'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            // $twelveHourTime = date(" F j, Y", strtotime($dateap));
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?></a>.</td>
                                                <td><?php echo $twelveHourTime;?></td>
                                                <td><?php echo $value['erid']; ?></td>
                                                <td><p class="d-flex"><?php echo $value['company_name']; ?><a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" ><i class='bx bx-map'></i></a></p></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['role']; ?></td>
                                                <td><?php echo $value['mobile_number']; ?></td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex"><a class="" href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <!-- <a class="ms-1" href="<?php echo baseUrl . "admin/deleteEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button> -->
                                                <button type="button" class="btn btn-danger ms-1" data-toggle="modal" data-target="#deleteemployer"
                                                 onclick="deleteformnl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformnl(employertid){
                                                document.getElementById("EmployerId").value = employertid;
                                            }
                                        </script>
                                            </td>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employerverifiedlist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>Verified Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Verified List</li>
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
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col"> Company Number</th>
                                            <th scope="col">Contact Person Name</th>
                                            <th scope="col">Contact Person Role</th>
                                            <th scope="col">Contact Person Mobile</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['verifiedEmployers'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['erid']; ?></td>
                                                <td><p class="d-flex"><?php echo $value['company_name']; ?><a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" ><i class='bx bx-map'></i></a></p></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a> </td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['role']; ?></td>
                                                <td><?php echo $value['mobile_number']; ?></td>
                                                <td><span class="badge bg-success">Verified</span></td>
                                                <td class="d-flex"><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <button type="button" class="btn btn-danger ms-1" data-toggle="modal" data-target="#deleteemployer"
                                                 onclick="deleteformvl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformvl(employertid){
                                                document.getElementById("EmployerId").value = employertid;
                                            }
                                        </script>
                                            </td>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "pendingEmployers") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employerpendinglist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>Pending Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Pending Employers</li>
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
                            if (isset($this->data['pendingEmployers'][0]['company_name'])) {
                            ?>
                                <h5 class="card-title">Pending List<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col"> Company Number</th>
                                            <th scope="col">Contact Person Name</th>
                                            <th scope="col">Contact Person Role</th>
                                            <th scope="col">Contact Person Mobile</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['pendingEmployers'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['erid']; ?></td>
                                                <td><p class="d-flex"><?php echo $value['company_name']; ?><a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" ><i class='bx bx-map'></i></a></p></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['role']; ?></td>
                                                <td><?php echo $value['mobile_number']; ?></td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex"><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <button type="button" class="btn btn-danger ms-1" data-toggle="modal" data-target="#deleteemployer"
                                                 onclick="deleteformpl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformpl(employertid){
                                                document.getElementById("EmployerId").value = employertid;
                                            }
                                        </script>
                                            </td>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "deleteEmployerList") {
                ?>
                 <!-- Sidebar Active  -->
            <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employerdeletedlist').classList.add('active');
            </script> 
                    <section class="usertable">
                        <div class="pagetitle">
                            <h1>Deleted Employers</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Employer</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
        
                                <div class="card-body">
                                    <?php
                                    if (isset($this->data['deleteEmployerList'][0]['name'])) {
                                    ?>
                                        <h5 class="card-title">Deleted Employers<span></span></h5>
        
                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Employer ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Delete Remarks</th>
                                                    <th scope="col">Verification Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['deleteEmployerList'] as $key => $value) {
                                                    $dateap =  $value['dateTime'] ;
                                                    $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                                ?>
                                                    <tr>
                                                        <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                        <td><?php echo $twelveHourTime; ?></td>
                                                        <td><?php echo $value['erid']; ?></td>
                                                        <td><p class="d-flex"><?php echo $value['company_name']; ?><a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" ><i class='bx bx-map'></i></a></p></td>
                                                        <td><?php echo $value['company_mobile_number']; ?></td>
                                                        <td><?php echo $value['deleteRemarks']; ?></td>
                                            <?php 
                                            if($value['verifyOne']== 1 && $value['verifyTwo']== 1 ) {
                                            ?>
                                                        <td><span class="badge bg-success">Verified</span></td>
                                            <?php 
                                            } else{
                                            ?>
                                                        <td><span class="badge bg-danger">Pending</span></td>
                                            <?php
                                            }        
                                            ?>
                                                        <td class="d-flex">
                                                            <form action="<?php echo baseUrl . "admin/restoreEmployerform" ?>" method="post" >
                                                                <input class="form-check-input" type="text" name="EmployerId" id="" value="<?php echo $value['id'] ?>" hidden>
                                                                <input class="form-check-input" type="text" name="deleteStatus" id="" value="0" hidden>
        
                                                                <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to restore?')">Restore</button>
                                                            </form>
                                                        <a class="ms-1" href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>

                                                    </tr>
                                                <?php
                                                    $loopcount++;
                                                }
                                                ?>
                                            </tbody>
                                            <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "overallEmployers") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employeroveralllist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>Overall Employers</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">All Employers</li>
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
                            if (isset($this->data['overallEmployers'][0]['company_name'])) {
                            ?>
                                <div class="d-sm-flex ">
                            <h5 class="card-title me-5">Overall List<span></span></h5>
                        <div class="filter pt-3 ms-5">
                        <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i class="bi bi-chevron-down"></i>
                        </p>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
                            <!-- <li class="mb-2"> <h4>Filter</h4> </li> -->
                            <li> 
                             <p>Select Year :  
                            <select id="yearCd" onchange="filterByYearMonth()"  >
                                <option value="">Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        <p>Select Month:
                            <select id="monthCd" onchange="filterByYearMonth()" >
                                <option value="">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select></p>
                         </li>
                            <li><div class="d-sm-flex ">
                                <p>From : <input type="date" id="fromDateEr" ></p>
                                <p class="ms-2">To :  <input type="date" id="toDateEr" ></p>
                                <p onclick="clearDateFields()" style="width: 18px;height:auto;" class="border border-secondary ms-1"><i class="bi bi-x"></i></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div> 

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table" id="myTableEr">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Company Number</th>
                                            <th scope="col">Contact Person Name</th>
                                            <!-- <th scope="col">Contact Person Role</th> -->
                                            <th scope="col">Contact Person Mobile</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['overallEmployers'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['erid']; ?></td>
                                                <td><p class="d-flex"><?php echo $value['company_name']; ?><a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" ><i class='bx bx-map'></i></a></p></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['company_mobile_number']; ?></a></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <!-- <td><?php echo $value['role']; ?></td> -->
                                                <td><?php echo $value['mobile_number']; ?></td>
                                    <?php 
                                    if($value['verifyOne']== 1 && $value['verifyTwo']== 1) {
                                    ?>
                                                <td><span class="badge bg-success">Verified</span></td>
                                    <?php 
                                    } else{
                                    ?>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                    <?php
                                    }        
                                    ?>                                                
                                    <td><a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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

            <script>
                function filterTableEr() {
                    var fromDateInput = document.getElementById("fromDateEr").value;
                    var toDateInput = document.getElementById("toDateEr").value;

                    var table = document.getElementById("myTableEr");
                    var rows = table.getElementsByTagName("tr");

                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var dateColumn = row.getElementsByTagName("td")[1]; // "Date" column

                        if (dateColumn) {
                            var dateValue = dateColumn.textContent || dateColumn.innerText;
                            var date = parseDate(dateValue, "dd/mm/yyyy");

                            var fromDate = fromDateInput ? parseDate(fromDateInput, "yyyy-mm-dd") : null;
                            var toDate = toDateInput ? parseDate(toDateInput, "yyyy-mm-dd") : null;

                            if ((fromDate === null || date >= fromDate) &&
                                (toDate === null || date <= toDate)) {
                                row.style.display = "";
                            } else {
                                row.style.display = "none";
                            }
                        }
                    }
                }

                function parseDate(dateString, format) {
                    var parts;
                    if (format === "yyyy-mm-dd") {
                        parts = dateString.split("-");
                        return new Date(parts[0], parts[1] - 1, parts[2]);
                    } else if (format === "dd/mm/yyyy") {
                        parts = dateString.split("/");
                        return new Date(parts[2], parts[1] - 1, parts[0]);
                    }
                }

                function clearDateFields() {
                    document.getElementById("yearCd").value = "";
                    document.getElementById("monthCd").value = "";
                        document.getElementById("fromDateEr").value = "";
                        document.getElementById("toDateEr").value = "";
                        filterTableEr();
                    }

                document.getElementById("fromDateEr").addEventListener("input", filterTableEr);
                document.getElementById("toDateEr").addEventListener("input", filterTableEr);
            </script>
        <script>
            function filterByYearMonth() {
            var fromDateInput = document.getElementById("fromDateEr").value;
            var toDateInput = document.getElementById("toDateEr").value;
            var selectedYear = document.getElementById("yearCd").value;
            var selectedMonth = document.getElementById("monthCd").value;

            var table = document.getElementById("myTableEr");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var dateColumn = row.getElementsByTagName("td")[1]; // Assuming the "Date" column is at index 1

                if (dateColumn) {
                var dateValue = dateColumn.textContent || dateColumn.innerText;
                var date = parseDate(dateValue, "dd/mm/yyyy");

                var fromDate = fromDateInput ? parseDate(fromDateInput, "yyyy-mm-dd") : null;
                var toDate = toDateInput ? parseDate(toDateInput, "yyyy-mm-dd") : null;

                var yearMatch = selectedYear === "" || date.getFullYear() == selectedYear;
                var monthMatch = selectedMonth === "" || date.getMonth() + 1 == selectedMonth;

                if ((fromDate === null || date >= fromDate) &&
                    (toDate === null || date <= toDate) &&
                    yearMatch && monthMatch) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
                }
            }
            }
            document.getElementById("fromDateEr").addEventListener("input", filterByYearMonth);
            document.getElementById("toDateEr").addEventListener("input", filterByYearMonth);
            document.getElementById("yearCd").addEventListener("change", filterByYearMonth);
            document.getElementById("monthCd").addEventListener("change", filterByYearMonth);
        </script>

        <?php
        } elseif ($method == 'manageEmployer') {
        ?>
        <!-- Sidebar Active  -->
        <script>
                 document.getElementById('employerslist').classList.add('active');
            </script> 
            <section class="Multi Columns Form">
                <div class="pagetitle">
                    <h1>Employer Details</h1>
                    <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Employer</li>
                                </ol>
                            </nav>
                </div><!-- End Page Title -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Unverified Employer Details</h5>

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
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St" name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
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
                                    <label for="inputPincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputPincode" value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLogo" class="form-label">Logo</label>
                                    <!-- <input type="text" class="form-control" id="inputLogo" value="<?php echo $value['company_logo'] ?>" readonly name="pincode"> -->
                                    <a href="<?php echo $value['company_logourl'] ;?>" class="form-control text-primary" target="blank"><?php echo $value['company_logo'] ;?></a>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputWebsite" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="inputWebsite" value="<?php echo $value['companywebsite'] ?>" readonly name="cwebsite1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPan" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="inputPan" value="<?php echo $value['companypan'] ?>" readonly name="cpan1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputGst" class="form-label">GST Number</label>
                                    <input type="text" class="form-control" id="inputGst" value="<?php echo $value['companygst'] ?>" readonly name="cgst1">
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
                                        <legend class="col-form-label col-sm-4 pt-0">Verification Checklist :</legend>
                                        <div class="col-sm-8">
                                        <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="verifyone" id="ercheckbox1" onclick="verifyCheckboxes()" 
                                            value="1" <?php if ($this->data['manageEmployer'][0]['verifyOne'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios1"> 1.DETAILS</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="verifytwo" id="ercheckbox2" onclick="verifyCheckboxes()" 
                                            value="1" <?php if ($this->data['manageEmployer'][0]['verifyTwo'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios2">  2.ADDRESS</label>
                                        </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;" required><?php echo $this->data['manageEmployer'][0]['verificationRemarks'] ?></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>

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

                                <input class="form-check-input" type="text" name="id" id="" value="<?php echo $this->data['manageEmployer'][0]['id'] ?>" hidden>
                                <input class="form-check-input" type="text" name="newList" id="" value="1" hidden>

                                 <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-success"  id="verifyButton" disabled>Verified</button>
                                    <button type="submit" class="btn btn-danger"  id="pendingButton">Pending</button>
                                </div>
                            <?php
                            }
                            ?>
                        </form><!-- End Multi Columns Form -->

                    </div>
                </div>
            </section>

            <script>
        function verifyCheckboxes() {
            var checkbox1 = document.getElementById('ercheckbox1').checked;
            var checkbox2 = document.getElementById('ercheckbox2').checked;
            

            var verifyButton = document.getElementById('verifyButton');
            var pendingButton = document.getElementById('pendingButton');

            if (checkbox1 && checkbox2) {
                verifyButton.disabled = false;
                pendingButton.disabled = true;
            } else {
                verifyButton.disabled = true;
                pendingButton.disabled = false;
            }
        }
    </script>

<?php
        } elseif ($method == 'viewEmployer') {
    ?>
    <!-- Sidebar Active  -->
    <script>
                 document.getElementById('employerslist').classList.add('active');
                 document.getElementById('employeroveralllist').classList.add('active');
            </script> 
        <section>
            <!-- <div class="pagetitle">
                <h1>Employer Details</h1>
                <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Employer</li>
                            </ol>
                        </nav>
            </div> -->
            <!-- End Page Title -->
            <div class="card" id="employerprint">
                <div class="card-body" >
                <div class="col">
                                <h2 class="text-center py-3">Employer Details</h2>
                                <div class="d-flex justify-content-between">
                                <p class="card-title">Company Name : <?php echo $this->data['manageEmployer'][0]['company_name']; ?></p>
                                <p class="card-title">Employer ID : <?php echo $this->data['manageEmployer'][0]['erid']; ?></p>
                            </div>
                            </div>
                    <table class="table table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th class="col-4" scope="col">Mobile Number</th>
                                        <th class="col-2" scope="col">Mail ID</th>
                                        <th class="col-1" scope="col">Address</th>
                                        <th class="col-1" scope="col">Landmark</th>
                                        <th class="col-2" scope="col">City</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($this->data['manageEmployer'] as $key => $value) {
                            ?>
                                        <tr>
                                            <td><?php echo $value['company_mobile_number'] ?></td>
                                            <td><?php echo $value['company_email'] ?></td>
                                            <td><?php echo $value['street_address'] ?></td>
                                            <td><?php echo $value['Landmark'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <table class="table table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th class="col-2" scope="col">City</th>
                                        <th class="col-4" scope="col">District</th>
                                        <th class="col-2" scope="col">State</th>
                                        <th class="col-1" scope="col">Pincode</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($this->data['manageEmployer'] as $key => $value) {
                            ?>
                                        <tr>
                                            <td><?php echo $value['City'] ?></td>
                                            <td><?php echo $value['district'] ?></td>
                                            <td>Tamil Nadu</td>
                                            <td><?php echo $value['pincode'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <table class="table table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th class="col-3" scope="col">Location</th>
                                        <th class="col-3" scope="col">Logo</th>
                                        <th class="col-2" scope="col">Website</th>
                                        <th class="col-2" scope="col">PAN Number</th>
                                        <th class="col-2" scope="col">GST Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                        foreach ($this->data['manageEmployer'] as $key => $value) {
                            ?>
                                        <tr>

                                        <?php if($value['companyLocationUrl'] != null){ ?>
                                             <td> <a href="<?php echo $value['companyLocationUrl'] ;?>"
                                              class=" text-primary" target="blank">Location</a></td>
                                              <?php } else {  ?>  <td> Not Entered</td> <?php } ?>
                                             
                                             <?php if($value['company_logo'] == "None"){ ?>
                                                <td> Not Entered</td>
                                              <?php } else {  ?>  
                                                <td> <a href="<?php echo $value['company_logourl'] ;?>"
                                              class=" text-primary" target="blank">Logo</a></td> <?php } ?>
                                        
                                        <?php if($value['companywebsite'] != null){ ?>
                                             <td> <a href="<?php echo $value['companywebsite'] ;?>"
                                              class=" text-primary" target="blank">Website</a></td>
                                              <?php }   else {  ?>  <td> Not Entered</td> <?php } ?>

                                            <td><?php echo $value['companypan'] ?></td>
                                            <td><?php echo $value['companygst'] ?></td>


                                        <!-- <td><a href="<?php echo $value['companyLocationUrl'] ;?>"
                                             class=" text-primary" target="blank">Location</a></td>
                                            <td><a href="<?php echo $value['company_logourl'] ;?>"
                                             class=" text-primary" target="blank"><?php echo $value['company_logo'] ;?></a></td>
                                            <td><a href="<?php echo $value['companywebsite'] ?>"
                                             class=" text-primary" target="blank">Website</a></td> -->
                                            <td><?php echo $value['companypan'] ?></td>
                                            <td><?php echo $value['companygst'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Job Subcategory</th>
                                                    <th scope="col">Location</th>
                                                    <th scope="col">Job Type</th>
                                                    <th scope="col">Salary</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                 $countjobs = 1;
                                                foreach ($this->data['jobDetails'] as $key => $value) {
                                                $dateap =  $value['date'] ;
                                                    $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                                    ?>

                                                        <tr>
                                                            <td><a ><?php echo $countjobs++; ?>.</a></td>
                                                            <td><?php echo $value['jobCategory'] ?></td>
                                                            <td><?php echo $value['jobSubCategory'] ?> </td>
                                                            <td><a href="<?php echo $value['locationUrl'] ?>"
                                                            class=" text-primary" target="blank"><?php echo $value['location'] ?></a> </td>
                                                            <td><?php echo $value['job_type'] ?></td>
                                                            <td><?php echo $value['salary'] ?></td>
                                                        </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Experience</th>
                                                    <th scope="col">Number of Openings</th>
                                                    <th scope="col">Description</th>
                                                    <th scope="col">Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                 $countjobs = 1;
                                                foreach ($this->data['jobDetails'] as $key => $value) {
                                                $dateap =  $value['date'] ;
                                                    $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                                    ?>

                                                        <tr>
                                                            <td><a ><?php echo $countjobs++; ?>.</a></td>
                                                            
                                                            <td><?php echo $value['experience'] ?></td>
                                                            <td><?php echo $value['number_of_openings'] ?></td>
                                                            <td><?php echo $value['description'] ?></td>
                                                            <td><?php echo $twelveHourTime ?></td>
                                                        </tr>
                                                    <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                    <div style="float:right;">
                            <button onClick="window.print()"  type="button" class="btn btn-dark printhide">Print</button>
                    </div>
                </div>
            </div>
        </section>

    <?php 
        } elseif ($method == "createEmployees") {
        ?>
        <!-- Sidebar Active  -->
        <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidatecreate').classList.add('active');
            </script> 
            <section class="Multi Columns Form">
                <div class="pagetitle">
                    <h1>Create Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Create Candidate</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <div class="card mb-3">

                    <div class="card-body">

                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create New Candidate</h5>
                        </div>

                        <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/employeeRegistration" ?>" method="post">
                            <div class="col-12">
                                <label for="yourName" class="form-label">Candidate Name</label>
                                <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter name" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Candidate Email</label>
                                <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Enter email" required>
                                <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Candidate Mobile Number</label>
                                <input type="number" name="phonenumber" class="form-control" id="yourEmail" placeholder="Enter number" required>
                                <div class="invalid-feedback">Please, enter mobile number!</div>
                            </div>

                            <!-- <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                    <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                    <div class="invalid-feedback">You must agree before submitting.</div>
                                </div>
                            </div>-->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>

                    </div>
                </div>
            </section>
        <?php
        } elseif ($method == "unVerifiedEmployees") {
        ?>
         <!-- Sidebar Active  -->
        <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidatenewlist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>New Candidate List</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">New Candidate</li>
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
                                <h5 class="card-title">New Candidates<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">D.O.B</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['unVerifiedEmployees'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex"><a class="mx-1" href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#deleteemployee"
                                                 onclick="deleteformnl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformnl(employeetid){
                                                document.getElementById("EmployeeId").value =employeetid;
                                            }
                                        </script>
                                                </td>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
                </div>
                                            
            </section>

        <?php
        } elseif ($method == "verifiedEmployees") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidateverifiedlist').classList.add('active');
            </script> 
            <section class="usertablewithscrool">
                <div class="pagetitle">
                    <h1>Verified Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Verified Candidates</li>
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
                                <h5 class="card-title">Verified List<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">D.O.B</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['verifiedEmployees'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><span class="badge bg-success">Verified</span></td>
                                                <td class="d-flex">
                                                    <a class="" href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                <button type="button" class="btn btn-danger ms-1" data-toggle="modal" data-target="#deleteemployee"
                                                 onclick="deleteformvl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformvl(employeetid){
                                                document.getElementById("EmployeeId").value =employeetid;
                                            }
                                        </script>
                                            </td>
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "pendingEmployees") {
                ?>
                 <!-- Sidebar Active  -->
        <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidatependinglist').classList.add('active');
            </script> 
                    <section class="usertablewithscrool">
                        <div class="pagetitle">
                            <h1>Pending Candidates</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Pending Candidates</li>
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
                                    if (isset($this->data['pendingEmployees'][0]['name'])) {
                                    ?>
                                        <h5 class="card-title">Pending List<span></span></h5>
        
                                        <!-- <table class="table table-borderless datatable"> -->
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Candidate ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">D.O.B</th>
                                                    <th scope="col">Remarks</th>
                                                    <th scope="col">Verification Status</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['pendingEmployees'] as $key => $value) {
                                                    $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                                ?>
                                                    <tr>
                                                        <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                        <td><?php echo $twelveHourTime; ?></td>
                                                        <td><?php echo $value['eeid']; ?></td>
                                                        <td><?php echo $value['name']; ?></td>
                                                        <td><?php echo $value['phonenumber']; ?></td>
                                                        <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                        <td><?php echo $value['dateofbirth']; ?></td>
                                                        <td><?php echo $value['verificationRemarks']; ?></td>
                                                        <td><span class="badge bg-danger">Pending</span></td>
                                                        <td class="d-flex"><a href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                                        <button type="button" class="btn btn-danger ms-1" data-toggle="modal" data-target="#deleteemployee"
                                                 onclick="deleteformpl(<?php echo $value['id'] ?>)">Delete</button>
                                        <script>
                                            function deleteformpl(employeetid){
                                                document.getElementById("EmployeeId").value = employeetid;
                                            }
                                        </script>
                                                    </td>
                                                    </tr>
                                                <?php
                                                    $loopcount++;
                                                }
                                                ?>
                                            </tbody>
                                            <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "deleteEmployeeList") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidatedeletedlist').classList.add('active');
            </script> 
            <section class="usertable">
                <div class="pagetitle">
                    <h1>Deleted Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Candidate</li>
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
                                <h5 class="card-title">Deleted List<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">D.O.B</th>
                                            <th scope="col">Remarks</th>
                                            <th scope="col">Verification Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['deleteEmployeeList'] as $key => $value) {
                                            $dateap =  $value['dateTime'] ;
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                        ?>
                                            <tr>
                                                <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                                <td><?php echo $twelveHourTime; ?></td>
                                                <td><?php echo $value['eeid']; ?></td>
                                                <td><?php echo $value['name']; ?></td>
                                                <td><?php echo $value['phonenumber']; ?></td>
                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                <td><?php echo $value['deleteRemarks']; ?></td>
                                    <?php 
                                    if($value['identityverify']== 1 && $value['addressverify']== 1 && $value['employmentverify']== 1 && $value['educationverify']== 1) {
                                    ?>
                                                <td><span class="badge bg-success">Verified</span></td>
                                    <?php 
                                    } else{
                                    ?>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                    <?php
                                    }        
                                    ?>
                                                <td class="d-flex">
                                                <span>
                                                <form action="<?php echo baseUrl . "admin/restoreEmployeeform" ?>" method="post" >
                                                        <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $value['id']?>" hidden>
                                                        <input class="form-check-input" type="text" name="restoreEmployee" id="" value="0" hidden>

                                                        <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to restore?')">Restore</button>
                                                    </form>
                                                </span>
                                                <a class="ms-1" href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button>

                                                    <!-- <a class="ms-1" onclick="return confirm('Are you sure you want to delete permanently?')" href="<?php echo baseUrl . "Admin/deleteEmployeeDetails" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td> -->
                                            </tr>
                                        <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        } elseif ($method == "overallEmployees") {
    ?>
     <!-- Sidebar Active  -->
     <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidateoveralllist').classList.add('active');
            </script> 
        <section class="usertablewithscrool">
            <div class="pagetitle">
                <h1>All Candidates</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                        <li class="breadcrumb-item active">All Candidates</li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <!-- Recent Sales -->
            <div class="col-12">
                <div class="card recent-sales overflow-auto">

                    <div class="card-body">

                        <?php
                        if (isset($this->data['overallEmployees'][0]['name'])) {
                        ?>
                        <div class="d-sm-flex ">
                            <h5 class="card-title me-5">Overall List<span></span></h5>
                        <div class="filter pt-3 ms-5">
                        <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i class="bi bi-chevron-down"></i>
                        </p>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
                            <!-- <li class="mb-2"> <h4>Filter</h4> </li> -->
                            <li> 
                             <p>Select Year :  
                            <select id="yearCd" onchange="filterByYearMonth()"  >
                                <option value="">Year</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                            </select>
                        <p>Select Month:
                            <select id="monthCd" onchange="filterByYearMonth()" >
                                <option value="">Month</option>
                                <option value="1">January</option>
                                <option value="2">February</option>
                                <option value="3">March</option>
                                <option value="4">April</option>
                                <option value="5">May</option>
                                <option value="6">June</option>
                                <option value="7">July</option>
                                <option value="8">August</option>
                                <option value="9">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select></p>
                         </li>
                            <li><div class="d-sm-flex ">
                                <p>From : <input type="date" id="fromDateCd" ></p>
                                <p class="ms-2">To :  <input type="date" id="toDateCd" ></p>
                                <p onclick="clearDateFields()" style="width: 18px;height:auto;" class="border border-secondary ms-1"><i class="bi bi-x"></i></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    </div>   
                            <!-- <table class="table table-borderless datatable"> -->
                            <table class="table" id="myTableCd">
                                <thead>
                                    <tr>
                                        <th scope="col">S.No</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Candidate ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile Number</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Verification Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $loopcount = 1;
                                    foreach ($this->data['overallEmployees'] as $key => $value) {
                                        $dateap =  $value['dateTime'] ;
                                        $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                    ?>
                                        <tr>
                                            <td><a href="#"><?php echo $loopcount; ?>.</a></td>
                                            <td><?php echo $twelveHourTime; ?></td>
                                            <td><?php echo $value['eeid']; ?></td>
                                            <td><?php echo $value['name']; ?></td>
                                            <td><?php echo $value['phonenumber']; ?></td>
                                            <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                            <?php 
                                    if($value['identityverify']== 1 && $value['addressverify']== 1 && $value['employmentverify']== 1 && $value['educationverify']== 1) {
                                    ?>
                                                <td><span class="badge bg-success">Verified</span></td>
                                    <?php   } else{  ?>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                    <?php  }    ?>
                                        <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['id'] ?>"><button type="button" class="btn btn-success">View</button></a>
                                        </tr>
                                    <?php
                                        $loopcount++;
                                    }
                                    ?>
                                </tbody>
                                <p class="text-end " style="margin-top:-40px" >Count : <b><?php echo $loopcount - 1; ?></b></p>
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
        <script>
                function filterTableCd() {
                    var fromDateInput = document.getElementById("fromDateCd").value;
                    var toDateInput = document.getElementById("toDateCd").value;

                    var table = document.getElementById("myTableCd");
                    var rows = table.getElementsByTagName("tr");

                    for (var i = 1; i < rows.length; i++) {
                        var row = rows[i];
                        var dateColumn = row.getElementsByTagName("td")[1]; // "Date" column

                        if (dateColumn) {
                            var dateValue = dateColumn.textContent || dateColumn.innerText;
                            var date = parseDate(dateValue, "dd/mm/yyyy");

                            var fromDate = fromDateInput ? parseDate(fromDateInput, "yyyy-mm-dd") : null;
                            var toDate = toDateInput ? parseDate(toDateInput, "yyyy-mm-dd") : null;

                            if ((fromDate === null || date >= fromDate) &&
                                (toDate === null || date <= toDate)) {
                                row.style.display = "";
                            } else {
                                row.style.display = "none";
                            }
                        }
                    }
                }

                function parseDate(dateString, format) {
                    var parts;
                    if (format === "yyyy-mm-dd") {
                        parts = dateString.split("-");
                        return new Date(parts[0], parts[1] - 1, parts[2]);
                    } else if (format === "dd/mm/yyyy") {
                        parts = dateString.split("/");
                        return new Date(parts[2], parts[1] - 1, parts[0]);
                    }
                }

                function clearDateFields() {
                    document.getElementById("yearCd").value = "";
                    document.getElementById("monthCd").value = "";
                        document.getElementById("fromDateCd").value = "";
                        document.getElementById("toDateCd").value = "";
                        filterTableCd();
                    }

                document.getElementById("fromDateCd").addEventListener("input", filterTableCd);
                document.getElementById("toDateCd").addEventListener("input", filterTableCd);
            </script>
        <script>
            function filterByYearMonth() {
            var fromDateInput = document.getElementById("fromDateCd").value;
            var toDateInput = document.getElementById("toDateCd").value;
            var selectedYear = document.getElementById("yearCd").value;
            var selectedMonth = document.getElementById("monthCd").value;

            var table = document.getElementById("myTableCd");
            var rows = table.getElementsByTagName("tr");

            for (var i = 1; i < rows.length; i++) {
                var row = rows[i];
                var dateColumn = row.getElementsByTagName("td")[1]; // Assuming the "Date" column is at index 1

                if (dateColumn) {
                var dateValue = dateColumn.textContent || dateColumn.innerText;
                var date = parseDate(dateValue, "dd/mm/yyyy");

                var fromDate = fromDateInput ? parseDate(fromDateInput, "yyyy-mm-dd") : null;
                var toDate = toDateInput ? parseDate(toDateInput, "yyyy-mm-dd") : null;

                var yearMatch = selectedYear === "" || date.getFullYear() == selectedYear;
                var monthMatch = selectedMonth === "" || date.getMonth() + 1 == selectedMonth;

                if ((fromDate === null || date >= fromDate) &&
                    (toDate === null || date <= toDate) &&
                    yearMatch && monthMatch) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
                }
            }
            }
            document.getElementById("fromDateCd").addEventListener("input", filterByYearMonth);
            document.getElementById("toDateCd").addEventListener("input", filterByYearMonth);
            document.getElementById("yearCd").addEventListener("change", filterByYearMonth);
            document.getElementById("monthCd").addEventListener("change", filterByYearMonth);
        </script>
            

        <?php
        } elseif ($method == "manageEmployee") {
        ?>
         <!-- Sidebar Active  -->
         <script>
                 document.getElementById('candidatelist').classList.add('active');
            </script> 
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
                                    <h2 class="">Candidate Resume</h2>
                                    <h5 class="card-title">Name : <?php echo $this->data['basicDetails'][0]['name']; ?></h5>
                                    <h5 class="card-title">Candidate ID : <?php echo $this->data['basicDetails'][0]['eeid']; ?></h5>
                                </div>
                                <!-- <div class="col">
                                    Column
                                </div> -->
                            </div>
                        </div>
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">

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
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $value['phonenumber'] ?></td>
                                                <td><?php echo $value['email'] ?></td>
                                                <td><?php echo $value['dateofbirth'] ?></td>
                                                <td><?php echo $value['age'] ?></td>
                                                <td><?php echo $value['gender'] ?></td>
                                                <td><?php echo $value['maritalStatus'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $value['buildingName'] ?></td>
                                                <td><?php echo $value['address'] ?></td>
                                                <td><?php echo $value['landmark'] ?></td>
                                                <td><?php echo $value['pincode'] ?></td>
                                                <td><?php echo $value['district'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
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
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><a href="<?php echo $value['photo'] ?>" target="_blank" ><?php echo $value['photo_filename'] ?></a></td>
                                                <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank" ><?php echo $value['aadharfront_filename'] ?></a></td>
                                                <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank" ><?php echo $value['aadharback_filename'] ?></a></td>
                                            </tr>
                                        <?php
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
                                            <th class="col-2" scope="col">S.No</th>
                                            <th class="col-4" scope="col">Skill</th>
                                            <th class="col-3" scope="col">Experience</th>
                                            <th class="col-3" scope="col">Skill Level</th>
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
                                        $loopcount ++;
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
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <h5 class="card-title">Resume</h5>

                               <!-- <a href="<?php echo $this->data['areaOfInterest'][0]['resume_filename_url']; ?>" target="blank" ><?php echo $this->data['areaOfInterest'][0]['resume_filename']; ?></a> -->
                               <a href="<?php echo isset($this->data['areaOfInterest'][0]['resume_filename_url']) ?  $this->data['areaOfInterest'][0]['resume_filename_url'] : ''; ?>" target="blank" ><?php echo isset($this->data['areaOfInterest'][0]['resume_filename']) ?  $this->data['areaOfInterest'][0]['resume_filename'] : 'No file'; ?></a>

                               
                            </div>
                        </div>
                        <form class="row g-3 needs-validation" novalidate action="<?php echo baseUrl . "admin/verifyEmployee" ?>" method="post">
                            <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $this->data['basicDetails'][0]['id'] ?>" hidden>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Verification Checklist</legend>
                                <?php if (isset($this->data['basicDetails'][0]['id'])) {
                                ?>
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="identityVerify" id="checkbox1" onclick="verifyCheckboxes()" 
                                            value="1" <?php if ($this->data['basicDetails'][0]['identityverify'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios1"> 1.IDENTITY – Photo </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="addressVerify" id="checkbox2" onclick="verifyCheckboxes()" 
                                            value="1" <?php if ($this->data['basicDetails'][0]['addressverify'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios2">  2.ADDRESS – Aadhaar </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="employmentVerify" id="checkbox3" onclick="verifyCheckboxes()"
                                            value="1" <?php if ($this->data['basicDetails'][0]['employmentverify'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios2">  3.EMPLOYMENT – Employer details </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="educationVerify" id="checkbox4" onclick="verifyCheckboxes()"
                                            value="1" <?php if ($this->data['basicDetails'][0]['educationverify'] == '1') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios2">  4.EDUCATION - Certifiates </label>
                                        </div>

                                        <input class="form-check-input" type="text" name="newList" id="" value="1" hidden>

                                        <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios"
                                            value="2" <?php if ($this->data['basicDetails'][0]['verificationStatus'] == '2') { echo 'checked'; } ?>>
                                            <label class="form-check-label" for="gridRadios3"> Rejected </label>
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
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;" required>
                                    <?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?></textarea>
                                    <label for="floatingTextarea">Remarks</label>
                                </div>
                            </div>
                            <div class="d-flex justify-content-around">
                            <button type="submit" class="btn btn-success"  id="verifyButton" disabled>Verified</button>
                            <button type="submit" class="btn btn-danger"  id="pendingButton">Pending</button>
                            </div>
                        </form>
                    </div>
                </div><!-- End Default Card -->
            </section>

            <script>
                function verifyCheckboxes() {
                    var checkbox1 = document.getElementById('checkbox1').checked;
                    var checkbox2 = document.getElementById('checkbox2').checked;
                    var checkbox3 = document.getElementById('checkbox3').checked;
                    var checkbox4 = document.getElementById('checkbox4').checked;

                    var verifyButton = document.getElementById('verifyButton');
                    var pendingButton = document.getElementById('pendingButton');

                    if (checkbox1 && checkbox2 && checkbox3 && checkbox4) {
                        verifyButton.disabled = false;
                        pendingButton.disabled = true;
                    } else {
                        verifyButton.disabled = true;
                        pendingButton.disabled = false;
                    }
                }
            </script>

<?php 
        } elseif ($method == "viewEmployee") {
    ?>
     <!-- Sidebar Active  -->
     <script>
                 document.getElementById('candidatelist').classList.add('active');
                 document.getElementById('candidateoveralllist').classList.add('active');
            </script> 
        <section>
            <!-- Default Card -->
            <div class="card" id="resumeprint">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="h-100" src="<?php echo baseUrl . "assets/profilephoto.png" ?>" class="card-img-top" alt="...">
                            </div>
                            <div class="col">
                                <h2 class="">Candidate Resume</h2>
                                <h5 class="card-title">Name : <?php echo $this->data['basicDetails'][0]['name']; ?></h5>
                                <h5 class="card-title">Candidate ID : <?php echo $this->data['basicDetails'][0]['eeid']; ?></h5>
                            </div>
                            <!-- <div class="col">
                                Column
                            </div> -->
                        </div>
                    </div>
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

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
                                    <?php
                                    foreach ($this->data['basicDetails'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['phonenumber'] ?></td>
                                            <td><?php echo $value['email'] ?></td>
                                            <td><?php echo $value['dateofbirth'] ?></td>
                                            <td><?php echo $value['age'] ?></td>
                                            <td><?php echo $value['gender'] ?></td>
                                            <td><?php echo $value['maritalStatus'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
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
                                    <?php
                                    foreach ($this->data['basicDetails'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $value['buildingName'] ?></td>
                                            <td><?php echo $value['address'] ?></td>
                                            <td><?php echo $value['landmark'] ?></td>
                                            <td><?php echo $value['pincode'] ?></td>
                                            <td><?php echo $value['district'] ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
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
                                    <?php
                                    foreach ($this->data['basicDetails'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><a href="<?php echo $value['photo'] ?>" target="_blank" ><?php echo $value['photo_filename'] ?></a></td>
                                            <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank" ><?php echo $value['aadharfront_filename'] ?></a></td>
                                            <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank" ><?php echo $value['aadharback_filename'] ?></a></td>
                                        </tr>
                                    <?php
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
                                        <th class="col-2" scope="col">S.No</th>
                                        <th class="col-4" scope="col">Skill</th>
                                        <th class="col-3" scope="col">Experience</th>
                                        <th class="col-3" scope="col">Skill Level</th>
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
                                    $loopcount ++;
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
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">Resume</h5>

                           <!-- <a href="<?php echo $this->data['areaOfInterest'][0]['resume_filename_url']; ?>" target="blank" ><?php echo $this->data['areaOfInterest'][0]['resume_filename']; ?></a> -->
                           <a href="<?php echo isset($this->data['areaOfInterest'][0]['resume_filename_url']) ?  $this->data['areaOfInterest'][0]['resume_filename_url'] : ''; ?>" target="blank" ><?php echo isset($this->data['areaOfInterest'][0]['resume_filename']) ?  $this->data['areaOfInterest'][0]['resume_filename'] : 'No file'; ?></a>
                        </div>
                    </div>
                    
                    <div style="float:right;">
                            <button onClick="window.print()"  type="button" class="btn btn-dark printhide">Print</button>
                    </div>

                </div>
            </div><!-- End Default Card -->
        </section>


            <?php
        } elseif ($method == "categoryRequest") {
                ?>
                 <!-- Sidebar Active  -->
        <script>
                 document.getElementById('categoryrequest').classList.add('active');
            </script> 
                    <section class="usertable">
                        <div class="pagetitle">
                            <h1>Category Request</h1>
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                    <li class="breadcrumb-item active">Category</li>
                                </ol>
                            </nav>
                        </div><!-- End Page Title -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">
        
                                <div class="card-body">
                                    <?php
                                    if (isset($this->data['candidateNewCategory'][0]['id']) || isset($this->data['candidateNewCategoryArea'][0]['id']) || isset($this->data['employerNewCategory'][0]['id'])) {
                                    ?>
                                        <h5 class="card-title">Add New Category<span></span></h5>
        
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Candidate / Employer</th>
                                                    <th scope="col">Category</th>
                                                    <th scope="col">New Category</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $loopcount = 1;
                                                foreach ($this->data['candidateNewCategory'] as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <td><a href="#"><?php echo $loopcount++; ?>.</a></td>
                                                        <td>Candidate Experience</td>
                                                        <td><?php echo $value['other_category'] ?></td>
                                                        <td><?php echo $value['newCategory'] ?></td>
                                                        <td class="d-flex">
                                                        <button type="button" class="btn btn-success me-1" data-toggle="modal" data-target="#newcategoryexp"
                                                        onclick="categoryexp('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                        <form action="<?php echo baseUrl . "admin/cancelNewCategoryExp" ?>" method="post" >
                                                                <input class="form-check-input" type="text" name="jobTableId" id="" value="<?php echo $value['id'] ?>" hidden>
                                                                <input class="form-check-input" type="text" name="categoryothers" id="" value="0" hidden>
        
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel?')">Delete</button>
                                                            </form>
                                                    </tr>
                                                    <script>
                                                            function categoryexp(exptableID,expcategory){
                                                                document.getElementById("expTableId").value = exptableID;
                                                                document.getElementById("expnewcategory").value = expcategory;
                                                            }
                                                    </script>
                                                <?php
                                                }
                                               
                                                foreach ($this->data['candidateNewCategoryArea'] as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <td><a href="#"><?php echo $loopcount++; ?>.</a></td>
                                                        <td>Candidate Job Interest</td>
                                                        <td><?php echo $value['other_interst_category'] ?></td>
                                                        <td><?php echo $value['newCategory'] ?></td>
                                                        <td class="d-flex">
                                                        <button type="button" class="btn btn-success me-1" data-toggle="modal" data-target="#newcategoryarea"
                                                         onclick="categoryarea('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                         <form action="<?php echo baseUrl . "admin/cancelNewCategoryArea" ?>" method="post" >
                                                                <input class="form-check-input" type="text" name="jobTableId" id="" value="<?php echo $value['id'] ?>" hidden>
                                                                <input class="form-check-input" type="text" name="categoryothers" id="" value="0" hidden>
        
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel?')">Delete</button>
                                                            </form>                                                        <script>
                                                            function categoryarea(areatableID,areacategory){
                                                                document.getElementById("areaTableId").value = areatableID;
                                                                document.getElementById("areanewcategory").value = areacategory;
                                                            }
                                                        </script>
                                                        </td>
                                                    </tr>

                         

                                                <?php
                                                }
                                                foreach ($this->data['employerNewCategory'] as $key => $value) {
                                                    ?>
                                                        <tr>
                                                            <td><a href="#"><?php echo $loopcount++; ?>.</a></td>
                                                            <td>Employer Job</td>
                                                            <td><?php echo $value['jobCategory'] ?></td>
                                                            <td><?php echo $value['newCategory'] ?></td>
                                                            <td class="d-flex">
                                                            <button type="button" class="btn btn-success me-1" data-toggle="modal" data-target="#employerjobcategory"
                                                         onclick="categoryjob('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                         <form action="<?php echo baseUrl . "admin/cancelNewCategoryJob" ?>" method="post" >
                                                                <input class="form-check-input" type="text" name="jobTableId" id="" value="<?php echo $value['id'] ?>" hidden>
                                                                <input class="form-check-input" type="text" name="categoryothers" id="" value="0" hidden>
        
                                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel?')">Delete</button>
                                                            </form>                                                        </tr>
                                                        <script>
                                                            function categoryjod(jobtableID,jobcategory){
                                                                document.getElementById("jobTableId").value = jobtableID;
                                                                document.getElementById("jobnewcategory").value = jobcategory;
                                                            }
                                                        </script>
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
        } elseif ($method == "candidateRequestList") {
                        ?>
                         <!-- Sidebar Active  -->
        <script>
                 document.getElementById('candidaterequest').classList.add('active');
            </script> 
                            <section class="usertable">
                                <div class="pagetitle">
                                    <h1>Request For Candidate List</h1>
                                    <nav>
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                            <li class="breadcrumb-item active">Request</li>
                                        </ol>
                                    </nav>
                                </div><!-- End Page Title -->
                                <div class="col-12">
                                    <div class="card recent-sales overflow-auto">
                                        <div class="card-body">
                                            <?php
                                            if (isset($this->data['candidateRequestList'][0]['name'])) {
                                            ?>
                                                <h5 class="card-title">Request to Candidate Details<span></span></h5>
                
                                                <!-- <table class="table table-borderless datatable"> -->
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Employer ID</th>
                                                    <th scope="col">Candidate ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Mobile Number</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">D.O.B</th>
                                                    <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $loopcount = 1;
                                                        foreach ($this->data['candidateRequestList'] as $key => $value) {
                                                        ?>
                                                            <tr>
                                                                <td><a href="#"><?php echo $loopcount; ?></a>.</td>
                                                                <td><?php echo $value['requestedEmployer']; ?></td>
                                                                <td><?php echo $value['eeid']; ?></td>
                                                                <td><?php echo $value['name']; ?></td>
                                                                <td><?php echo $value['phonenumber']; ?></td>
                                                                <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td>
                                                                <td><?php echo $value['dateofbirth']; ?></td>
                                                                <td class="d-flex">
                                                                <form action="<?php echo baseUrl . "admin/approveCandidateRequest" ?>" method="post" >
                                                                    <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $value['id']?>" hidden>
                                                                    <input class="form-check-input" type="text" name="approveCandidateRequest" id="" value="2" hidden>
                                                                    <button type="submit" class="btn btn-success" onclick="return confirm('Are you sure you want to approve?')">Approve to View</button>
                                                                </form>
                                                                <form action="<?php echo baseUrl . "admin/cancelCandidateRequest" ?>" method="post" >
                                                                    <input class="form-check-input" type="text" name="EmployeeId" id="" value="<?php echo $value['id']?>" hidden>
                                                                    <input class="form-check-input" type="text" name="cancelCandidateRequest" id="" value="0" hidden>
                                                                    <button type="submit" class="btn btn-danger ms-1" onclick="return confirm('Are you sure to cancel the request?')">Cancel</button>
                                                                </form>
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
            } elseif ($method == 'addNewAdminApprovel') {
        ?>
        <!-- ******************************** Not in use ********************************* -->
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
                <!-- ******************************** Not in use ********************************* -->
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
                                            <th scope="col">Request Remarks</th>
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
                                                    <td>Add Request</td>
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
                                                    <td><a href="#"><?php echo $loopcount++; ?>.</a></td>
                                                    <td><?php echo $dvalue['erid']; ?></td>
                                                    <td><?php echo $dvalue['company_name']; ?></td>
                                                    <td><a href="#" class="text-primary"><?php echo $dvalue['company_mobile_number']; ?></a></td>
                                                    <td><?php echo $dvalue['name']; ?></td>
                                                    <td><?php echo $dvalue['role']; ?></td>
                                                    <td><?php echo $dvalue['mobile_number']; ?></td>
                                                    <td><?php echo $dvalue['deleteRequestRemarks']; ?></td>
                                                    <td><span class="badge bg-danger">Delete Request</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $dvalue['id'] ?>"><button type="button" class="btn btn-success">View</button></a></td>
                                                </tr>
                                        <?php
                                            }
                                            // $loopcount++;
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
                <!-- ******************************** Not in use ********************************* -->
            <section class="Multi Columns Form">
                <div class="pagetitle">
                    <h1>Employer Details</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Approval</li>
                        </ol>
                    </nav>
                </div><!-- End Page Title -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Approve Employer</h5>

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
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St" name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
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
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputZip" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputPincode" value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLogo" class="form-label">Logo</label>
                                    <!-- <input type="text" class="form-control" id="inputLogo" value="<?php echo $value['company_logo'] ?>" readonly name="pincode"> -->
                                    <a href="<?php echo $value['company_logourl'] ;?>" class="form-control text-primary" target="blank"><?php echo $value['company_logo'] ;?></a>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputWebsite" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="inputWebsite" value="<?php echo $value['companywebsite'] ?>" readonly name="cwebsite1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPan" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="inputPan" value="<?php echo $value['companypan'] ?>" readonly name="cpan1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputGst" class="form-label">GST Number</label>
                                    <input type="text" class="form-control" id="inputGst" value="<?php echo $value['companygst'] ?>" readonly name="cgst1">
                                </div>

                                <h5 class="card-title">Contact Person Details</h5>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['name'] ?>" readonly name="name1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="inputEmail5" value="<?php echo $value['role'] ?>" readonly name="role" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" value="<?php echo $value['mobile_number'] ?>" readonly name="mobile1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email-ID</label>
                                    <input type="email" class="form-control" id="inputEmail5" value="<?php echo $value['email'] ?>" readonly name="email1" required>
                                </div>

                                <h5 class="card-title">Employer Approval</h5>
                                <?php
                                if (isset($this->data['manageEmployer'][0]['id'])) {
                                ?>
                                   
                                    <?php if ($this->data['manageEmployer'][0]['addNewRequest'] == '1')
                                     { ?>
                                      <fieldset class="row mb-3">
                                      <legend class="col-form-label col-sm-4 pt-0">Employer Add Approval Request</legend>
                                      <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1" value="1" checked>
                                                <label class="form-check-label" for="gridRadios1">Add</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2" value="2">
                                                <label class="form-check-label" for="gridRadios2">Delete</label>
                                            </div>
                                            
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="addNewApprovelRemarks" style="height: 100px;" required></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="deleteApprovel" value="0" id="" hidden >
                                            <input type="text" name="deleteApprovelRemarks" value="" id="" hidden >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                        <input type="text" name="addNewRequest" value="0" id="" hidden >
                                        <input type="text" name="deleteRequest" value="0" id="" hidden >
                                        </div>
                                    </div>
                                     
                                     <?php
                                    } else if ($this->data['manageEmployer'][0]['deleteRequest'] == '1')
                                     { ?>
                                      <fieldset class="row mb-3">
                                      <legend class="col-form-label col-sm-4 pt-0">Employer Delete Approval Request</legend>
                                      <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1" value="1" checked>
                                                <label class="form-check-label" for="gridRadios1">Delete</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2" value="2">
                                                <label class="form-check-label" for="gridRadios2">Add</label>
                                            </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteApprovelRemarks" style="height: 100px;" required></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" name="addNewApprovel" value="0" id="" hidden >
                                            <input type="text" name="addNewApprovelRemarks" value="" id="" hidden >
                                        </div>
                                        <div class="form-floating mb-3">
                                        <input type="text" name="addNewRequest" value="0" id="" hidden >
                                        <input type="text" name="deleteRequest" value="0" id="" hidden >
                                     </div>
                                    </div>
                                     <?php
                                    } ?>
                                        
                                    
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
            </section>

        <?php
        }
        ?>

<!-- Popup Remark Employee -->
    <div class="modal fade" id="deleteemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Candidate Delete Remark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <!-- <p id="demo" >Employee ID :  </p> -->
                    <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/deleteEmployeeform" ?>" method="post">
                            <input class="form-check-input" type="text" name="EmployeeId" id="EmployeeId" value="" hidden>
                            <input class="form-check-input" type="text" name="deleteEmployeeStatus" id="" value="1" hidden>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteEmployeeRemarks" cols="30" rows="20" required></textarea>
                                    <label for="floatingTextarea">Remarks</label>
                                </div>
                            </div>
                            <input class="form-check-input" type="text" name="newList" id="" value="1" hidden>

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    </div>
                </div>
    </div>
                
        <!-- Popup Remark Employer -->
            <div class="modal fade" id="deleteemployer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Employer Delete Remark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/deleteEmployerForm" ?>" method="post">
                            <input class="form-check-input" type="text" name="id" id="EmployerID" value="" hidden>
                            <input class="form-check-input" type="text" name="deleteStatus" id="" value="1" hidden>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="deleteRemarks" style="height: 100px;" required></textarea>
                                    <label for="floatingTextarea">Remarks</label>
                                </div>
                            </div>
                            <input class="form-check-input" type="text" name="newList" id="" value="1" hidden>

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>

        <!-- Popup add new category in candidate experience -->
        <div class="modal fade" id="newcategoryexp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/addNewCategoryExperience" ?>" method="post">
                            
                                <div class="col-12">
                                        <label for="expnewcategory">New Category :</label>
                                        <input type="text" id="expnewcategory" value="" name="new_category" >
                                </div>
                                <input class="form-check-input" type="text" name="categoryexp" id="" value="0" hidden>
                                <input class="form-check-input" type="text" name="expTableId" id="expTableId" value="<?php echo $value['id'] ?>" hidden>
                                
                                <button type="submit" class="btn btn-success mt-4">Add</button>
                            </form>
                        </div>
                        </div>
                    </div>
        </div>

        <!-- Popup add new category in candidate area -->
        <div class="modal fade" id="newcategoryarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/addNewCategoryArea" ?>" method="post">
                    
                        <div class="col-12">
                                <label for="expnewcategory">New Category :</label>
                                <input type="text" id="areanewcategory" value="" name="new_category" >
                        </div>
                        <input class="form-check-input" type="text" name="categoryarea" id="" value="0" hidden>
                        <input class="form-check-input" type="text" value="" id="areaTableId" name="areaTableId" hidden>
                        
                        <button type="submit" class="btn btn-success mt-4">Add</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        <!-- Popup add new category in employer job -->
        <div class="modal fade" id="employerjobcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="needs-validation" novalidate action="<?php echo baseUrl . "admin/employerNewCategory" ?>" method="post">
                    
                        <div class="col-12">
                                <label for="expnewcategory">New Category :</label>
                                <input type="text" id="jobnewcategory" value="" name="new_category" >
                        </div>
                        <input class="form-check-input" type="text" name="categoryjob" id="" value="0" hidden>
                        <input class="form-check-input" type="text" name="jobTableId" id="jobTableId" value="<?php echo $value['id'] ?>" hidden>
                        
                        <button type="submit" class="btn btn-success mt-4">Add</button>
                    </form>
                </div>
                </div>
            </div>
        </div>


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

    <!-- bootstrap popup link -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


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