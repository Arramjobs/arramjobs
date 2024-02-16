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
        #inputMobileNumber5::-webkit-inner-spin-button,
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

            #resumeprint,
            #employerprint {
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

        .sidebar ul .nav-item:hover {
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

        .highlighted {
            background-color: yellow;
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
                        <img src="<?php echo baseUrl . "assets/profilephoto.png" ?>" alt="Profile"
                            class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            <?php echo $_SESSION['adminName']; ?>
                        </span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>
                                <?php echo $_SESSION['adminid']; ?> /
                                <?php echo $_SESSION['adminName']; ?>
                            </h6>
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
                            <a class="dropdown-item d-flex align-items-center"
                                onclick="return confirm('Are you sure to logout?')"
                                href="<?php echo baseUrl . "admin/logout" ?>">
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

            <li class="nav-item " id="dash">
                <a class="nav-link " href="<?php echo baseUrl . "admin/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span id="dashboardad">Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="mb-1">
                <a class="nav-link collapsed " id="adminuser" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
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
                <a class="nav-link collapsed" id="employerslist" data-bs-target="#charts-nav" data-bs-toggle="collapse"
                    href="#">
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
                <a class="nav-link collapsed" id="candidatelist" data-bs-target="#icons-nav" data-bs-toggle="collapse"
                    href="#">
                    <i class="bi bi-gem"></i><span>Candidates</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a id="candidatecreate" href="<?php echo baseUrl . "admin/createCandidates" ?>">
                            <i class="bi bi-circle"></i><span>Create New Candidate</span>
                        </a>
                    </li>
                    <!-- <li>
                        <a id="candidatedetail" href="<?php echo baseUrl . "admin/createCandidatesAdmin" ?>">
                            <i class="bi bi-circle"></i><span>New Candidate details</span>
                        </a>
                    </li>
                    <li> -->
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
                        <a id="candidatereappliedlist" href="#">
                            <i class="bi bi-circle"></i><span>Reapplied List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidateplacedlist" href="#">
                            <i class="bi bi-circle"></i><span>Placed List</span>
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
                <a class="nav-link collapsed" id="candidaterequest"
                    href="<?php echo baseUrl . "admin/candidateRequestList" ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Request For Candidate View</span>
                    <!-- <?php if ($canReqTotalRows > 0) { ?>
                        <div class="border border-success border-2 rounded-circle bg-success text-light"
                            style="width: 25px; height:25px;background-color:green;text-align:center;">
                            <?php echo isset($canReqTotalRows) ? $canReqTotalRows : null; ?>
                        </div>
                    <?php } ?> -->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" id="categoryrequest"
                    href="<?php echo baseUrl . "admin/categoryRequest" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Add Category Request</span>
                </a>
            </li>

            <!-- <?php if ($_SESSION['role'] == 'supadm') { ?> -->

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

            <?php } ?>

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
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>
                                                    <?php echo $this->data['admin']['totalRows']; ?>
                                                </h6>
                                                <span class="text-success small pt-1 fw-bold">12%</span> <span
                                                    class="text-muted small pt-2 ps-1">increase</span>

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
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>
                                                    <?php echo $this->data['employer']['totalRows']; ?>
                                                </h6>
                                                <span class="text-success small pt-1 fw-bold">8%</span> <span
                                                    class="text-muted small pt-2 ps-1">increase</span>

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
                                            <div
                                                class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>
                                                    <?php echo $this->data['employee']['totalRows']; ?>
                                                </h6>
                                                <span class="text-success small pt-1 fw-bold">44%</span> <span
                                                    class="text-muted small pt-2 ps-1">increase</span>

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
                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/insertAdminUser" ?>" method="post">
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputName5" name="name" placeholder="Enter name"
                                    required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputUserrole" class="form-label">User Role: <span
                                        class="text-danger">*</span></label>
                                <select id="inputUserrole" class="form-select" name="userRole" required>
                                    <option selected value="adm">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email: <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="inputEmail5" name="email"
                                    placeholder="Enter email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Mobile Number: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="inputMobileNumber5" name="mobileNumber"
                                    placeholder="Enter number" required>
                                <div class="invalid-feedback">Please enter a Mobile Number!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">UserName: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputUserName5" name="userName"
                                    placeholder="Enter username" required>
                                <div class="invalid-feedback">Please choose a username.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password: <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="inputPassword5" name="password"
                                    placeholder="Enter password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address"
                                    placeholder="Enter address">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2:</label>
                                <input type="text" class="form-control" id="inputAddress2" name="address2"
                                    placeholder="Enter address 2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City:</label>
                                <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter city">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State:</label>
                                <select id="inputState" name="state" class="form-select" disabled>
                                    <option selected>Tamil Nadu</option>
                                    <!-- <option>...</option> -->
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Pincode:</label>
                                <input type="text" class="form-control" id="inputZip" name="pincode"
                                    placeholder="Enter pincode">
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
                                        $dateap = $value['dateTime'];
                                        $twelveHourTime = date(" F j, Y", strtotime($dateap));
                                        ?>
                                        <tr>
                                            <td><a href="#">
                                                    <?php echo $loopcount; ?>.
                                                </a></td>
                                            <td>
                                                <?php echo $value['admin_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['name']; ?>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <?php echo $value['mobileNumber']; ?>
                                                </a></td>
                                            <td>
                                                <?php echo $value['email']; ?>
                                            </td>
                                            <!-- <td><?php echo $value['userRole']; ?></td> -->
                                            <td>
                                                <?php echo $value['userName']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['password']; ?>
                                            </td>
                                            <td>
                                                <?php echo $twelveHourTime; ?>
                                            </td>
                                            <!-- <td><span class="badge bg-success">Approved</span></td> -->
                                            <td><a href="<?php echo baseUrl . "admin/deleteAdminuser/" . $value['id'] ?>">
                                                    <button type="button" class="btn btn-danger d-flex"
                                                        onclick="return confirm('Are you sure you want to delete?')"><i
                                                            class="bi bi-trash pe-1"></i> Remove</button></a></td>
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
                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/insertEmployer" ?>" method="post">
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Company Name: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputName5" name="name"
                                    placeholder="Enter company name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Company Number: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile"
                                    placeholder="Enter company number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Company Email: <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="inputEmail5" name="email"
                                    placeholder="Enter company email" required>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                            <div class="col-md-6">
                                <label for="crpassword" class="form-label">Create Password: <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="crpassword" name="crpassword"
                                    placeholder="Abc@1234" required>
                                <p id="crpassworderr" style="color: red;"></p>
                                <div class="text-secondary" style="font-size:12px;margin-top:0px" id="passwordmessage">
                                    Passwords must contain atleast 1 uppercase, 1 lowercase, 1 special character, 1 number
                                    and a minimum of 8 characters.</div>
                            </div>
                            <div class="col-md-6">
                                <label for="cmpassword" class="form-label">Confirm Password: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cmpassword" name="cmpassword"
                                    placeholder="Abc@1234" required>
                                <p id="cmpassworderr" style="color: red;"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress5" class="form-label">Street Address: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address"
                                    placeholder="Enter street address" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Landmark: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputAddress2" name="landmark"
                                    placeholder="Enter landmark" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter city"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">District: <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="inputDistrict" name="district" required>
                                    <option value="">Select district</option>
                                    <option value="Erode">Erode</option>
                                    <option value="Karur">Karur</option>
                                    <option value="Namakkal">Namakkal</option>
                                    <option value="Tirupur">Tirupur</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">State: <span class="text-danger">*</span></label>
                                <select id="inputState" class="form-select" name="state">
                                    <option selected value="tamil nadu">Tamil Nadu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Pincode: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputPincode" name="pincode"
                                    placeholder="Enter pincode" required>
                            </div>
                            <div class="col-md-6">
                                <label for="locationUrl" class="form-label">Location URL: <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="locationUrl" name="locationUrl"
                                    placeholder="Enter company location link" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="inputFile" name="logo">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Website</label>
                                <input type="text" class="form-control" id="cwebsite" name="cwebsite"
                                    placeholder="Enter company website">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="cpan" name="cpan"
                                    placeholder="Enter company PAN number">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">GST Number</label>
                                <input type="text" class="form-control" id="cgst" name="cgst"
                                    placeholder="Enter company GST number">
                            </div>

                            <h5 class="card-title">Contact Person Details</h5>

                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Name: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputEmail5" name="name1"
                                    placeholder="Enter cp name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Role: <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputEmail5" name="role"
                                    placeholder="Enter cp role" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Mobile Number: <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile1"
                                    placeholder="Enter cp number" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email-ID: <span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="inputEmail5" name="email1"
                                    placeholder="Enter cp email" required>
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
                                            $dateap = $value['dateTime'];
                                            // $twelveHourTime = date(" F j, Y", strtotime($dateap));
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>
                                                    </a>.</td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?><a
                                                            href="<?php echo $value['companyLocationUrl']; ?>"
                                                            class="px-2 text-danger"><i class='bx bx-map'></i></a>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['role']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['mobile_number']; ?>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex"><a class=""
                                                        href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <!-- <a class="ms-1" href="<?php echo baseUrl . "admin/deleteEmployer/" . $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button> -->
                                                    <button type="button" class="btn btn-danger d-flex ms-1" data-toggle="modal"
                                                        data-target="#deleteemployer"
                                                        onclick="(function(id, button) { deleteformdl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)"><i
                                                            class="bi bi-trash pe-1"></i>Delete</button>
                                                    <script>
                                                        function deleteformdl(employertid) {
                                                            document.getElementById("EmployerID").value = employertid;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>

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
                                            <th scope="col">Verified By</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['verifiedEmployers'] as $key => $value) {
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?><a
                                                            href="<?php echo $value['companyLocationUrl']; ?>"
                                                            class="px-2 text-danger"><i class='bx bx-map'></i></a>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a> </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['role']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['mobile_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['verifiedBy']; ?>
                                                </td>
                                                <td class="d-flex py-3"><a
                                                        href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <button type="button" class="btn btn-danger ms-1 d-flex" data-toggle="modal"
                                                        data-target="#deleteemployer"
                                                        onclick="(function(id, button) { deleteformvl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)"><i
                                                            class="bi bi-trash pe-1"></i> Delete</button>
                                                    <script>
                                                        function deleteformvl(employertid) {
                                                            document.getElementById("EmployerID").value = employertid;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>

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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?><a
                                                            href="<?php echo $value['companyLocationUrl']; ?>"
                                                            class="px-2 text-danger"><i class='bx bx-map'></i></a>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['role']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['mobile_number']; ?>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex py-3"><a
                                                        href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <button type="button" class="btn btn-danger d-flex ms-1" data-toggle="modal"
                                                        data-target="#deleteemployer"
                                                        onclick="(function(id, button) { deleteformpl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)"><i
                                                            class="bi bi-trash pe-1"></i>Delete</button>
                                                    <script>
                                                        function deleteformpl(employertid) {
                                                            document.getElementById("EmployerID").value = employertid;
                                                        }
                                                    </script>
                                                </td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>

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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?><a
                                                            href="<?php echo $value['companyLocationUrl']; ?>"
                                                            class="px-2 text-danger"><i class='bx bx-map'></i></a>
                                                    </p>
                                                </td>
                                                <td>
                                                    <?php echo $value['company_mobile_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['deleteRemarks']; ?>
                                                </td>
                                                <?php
                                                if ($value['verifyOne'] == 1 && $value['verifyTwo'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success">Verified By</span><br>
                                                        <?php echo $value['verifiedBy']; ?>
                                                    </td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                    <?php
                                                }
                                                ?>
                                                <td class="d-flex">
                                                    <form action="<?php echo baseUrl . "admin/restoreEmployerform" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="EmployerId" id=""
                                                            value="<?php echo $value['id'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="deleteStatus" id=""
                                                            value="0" hidden>

                                                        <button type="submit" class="btn btn-success d-flex"
                                                            onclick="return confirm('Are you sure you want to restore?')"><i
                                                                class="bi bi-arrow-counterclockwise pe-1"></i>Restore</button>
                                                    </form>
                                                    <a class="ms-1"
                                                        href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>

                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                                        <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i
                                                class="bi bi-chevron-down"></i>
                                        </p>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
                                            <!-- <li class="mb-2"> <h4>Filter</h4> </li> -->
                                            <li>
                                                <p>Select Year :
                                                    <select id="yearCd" onchange="filterByYearMonth()">
                                                        <option value="">Year</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                <p>Select Month:
                                                    <select id="monthCd" onchange="filterByYearMonth()">
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
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <div class="d-sm-flex ">
                                                    <p>From : <input type="date" id="fromDateEr"></p>
                                                    <p class="ms-2">To : <input type="date" id="toDateEr"></p>
                                                    <p onclick="clearDateFields()" style="width: 18px;height:auto;"
                                                        class="border border-secondary ms-1"><i class="bi bi-x"></i></p>
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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?><a
                                                            href="<?php echo $value['companyLocationUrl']; ?>"
                                                            class="px-2 text-danger"><i class='bx bx-map'></i></a>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <!-- <td><?php echo $value['role']; ?></td> -->
                                                <td>
                                                    <?php echo $value['mobile_number']; ?>
                                                </td>
                                                <?php
                                                if ($value['verifyOne'] == 1 && $value['verifyTwo'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success">Verified By</span><br>
                                                        <?php echo $value['verifiedBy']; ?>
                                                    </td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                    <?php
                                                }
                                                ?>
                                                <td><a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/verifyEmployer" ?>" method="post">
                            <?php
                            foreach ($this->data['manageEmployer'] as $key => $value) {
                                ?>
                                <p>Employer ID :
                                    <?php echo $value['erid'] ?>
                                </p>

                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="inputName5"
                                        value="<?php echo $value['company_name'] ?>" readonly name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Company Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" name="mobile"
                                        value="<?php echo $value['company_mobile_number'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email"
                                        value="<?php echo $value['company_email'] ?>" readonly required>
                                </div>
                                <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St"
                                        name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor" name="landmark"
                                        value="<?php echo $value['Landmark'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city"
                                        value="<?php echo $value['City'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">District</label>
                                    <input type="text" class="form-control" id="inputDistrict" name="district"
                                        value="<?php echo $value['district'] ?>" readonly required>
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
                                    <input type="text" class="form-control" id="inputPincode"
                                        value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLogo" class="form-label">Logo</label>
                                    <!-- <input type="text" class="form-control" id="inputLogo" value="<?php echo $value['company_logo'] ?>" readonly name="pincode"> -->
                                    <?php if ($value['company_logo'] == "None") { ?>
                                        <p class="form-control">Not Entered</p>
                                    <?php } else { ?>
                                        <a href="<?php echo $value['company_logourl']; ?>" class="form-control text-primary"
                                            target="blank">
                                            <?php echo $value['company_logo']; ?>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputWebsite" class="form-label">Website</label>
                                    <!-- <input type="text" class="form-control" id="inputWebsite" value="<?php echo $value['companywebsite'] ?>" readonly name="cwebsite1"> -->
                                    <?php if ($value['companywebsite'] != null) { ?>
                                        <a href="<?php echo $value['companywebsite']; ?>" class=" text-primary form-control"
                                            target="blank">
                                            <?php echo $value['companywebsite']; ?>
                                        </a>
                                    <?php } else { ?>
                                        <p class="form-control">Not Entered</p>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPan" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="inputPan"
                                        value="<?php echo $value['companypan'] ?>" readonly name="cpan1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputGst" class="form-label">GST Number</label>
                                    <input type="text" class="form-control" id="inputGst"
                                        value="<?php echo $value['companygst'] ?>" readonly name="cgst1">
                                </div>

                                <h5 class="card-title">Contact Person Details</h5>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['name'] ?>" readonly name="name1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['role'] ?>" readonlyname="role" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5"
                                        value="<?php echo $value['mobile_number'] ?>" readonlyname="mobile1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email-ID</label>
                                    <input type="email" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['email'] ?>" readonly name="email1" required>
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
                                                    <input class="form-check-input" type="checkbox" name="verifyone"
                                                        id="ercheckbox1" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['manageEmployer'][0]['verifyOne'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios1"> 1.DETAILS</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="verifytwo"
                                                        id="ercheckbox2" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['manageEmployer'][0]['verifyTwo'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios2"> 2.ADDRESS</label>
                                                </div>
                                            </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                name="verificationRemarks" style="height: 100px;"
                                                required><?php echo $this->data['manageEmployer'][0]['verificationRemarks'] ?></textarea>
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
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios1" value="0">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Verification Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios2" value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Verification success
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios" value="2">
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                name="verificationRemarks" style="height: 100px;"></textarea>
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
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                name="deleteRequestRemarks" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                <?php }
                                ?>

                                <input class="form-check-input" type="text" name="id" id=""
                                    value="<?php echo $this->data['manageEmployer'][0]['id'] ?>" hidden>
                                <input class="form-check-input" type="text" name="newList" id="" value="1" hidden>
                                <input class="form-check-input" type="text" name="verifiedName" id=""
                                    value="<?php echo $_SESSION['adminName'] . ' / ' . $_SESSION['adminid'] ?>" hidden>

                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-success" id="verifyButton" disabled>Verified</button>
                                    <button type="submit" class="btn btn-danger" id="pendingButton">Pending</button>
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
                    <div class="card-body">
                        <div class="col">
                            <h2 class="text-center py-3">Employer Details</h2>
                            <div class="d-sm-flex justify-content-between">
                                <p class="card-title">Company Name :
                                    <?php echo $this->data['manageEmployer'][0]['company_name']; ?>
                                </p>
                                <p class="card-title">Employer ID :
                                    <?php echo $this->data['manageEmployer'][0]['erid']; ?>
                                </p>
                            </div>
                        </div>
                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th class="col-3" scope="col">Mobile Number</th>
                                    <th class="col-3" scope="col">Mail ID</th>
                                    <th class="col-4" scope="col">Address</th>
                                    <th class="col-2" scope="col">Landmark</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['company_mobile_number'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['company_email'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['street_address'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['Landmark'] ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th class="col-3" scope="col">City</th>
                                    <th class="col-3" scope="col">District</th>
                                    <th class="col-3" scope="col">State</th>
                                    <th class="col-3" scope="col">Pincode</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $value['City'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['district'] ?>
                                        </td>
                                        <td>Tamil Nadu</td>
                                        <td>
                                            <?php echo $value['pincode'] ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th class="col-2" scope="col">Location</th>
                                    <th class="col-2" scope="col">Logo</th>
                                    <th class="col-2" scope="col">Website</th>
                                    <th class="col-3" scope="col">PAN Number</th>
                                    <th class="col-3" scope="col">GST Number</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                    <tr>

                                        <?php if ($value['companyLocationUrl'] != null) { ?>
                                            <td> <a href="<?php echo $value['companyLocationUrl']; ?>" class=" text-primary"
                                                    target="blank">Location</a></td>
                                        <?php } else { ?>
                                            <td> Not Entered</td>
                                        <?php } ?>

                                        <?php if ($value['company_logo'] == "None") { ?>
                                            <td> Not Entered</td>
                                        <?php } else { ?>
                                            <td> <a href="<?php echo $value['company_logourl']; ?>" class=" text-primary"
                                                    target="blank">Logo</a></td>
                                        <?php } ?>

                                        <?php if ($value['companywebsite'] != null) { ?>
                                            <td> <a href="<?php echo $value['companywebsite']; ?>" class=" text-primary"
                                                    target="blank">Website</a></td>
                                        <?php } else { ?>
                                            <td> Not Entered</td>
                                        <?php } ?>

                                        <td>
                                            <?php echo $value['companypan'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['companygst'] ?>
                                        </td>
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
                                    <th scope="col">Job Location</th>
                                    <th scope="col">Job Timing</th>
                                    <th scope="col">Salary</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $countjobs = 1;
                                foreach ($this->data['jobDetails'] as $key => $value) {
                                    $dateap = $value['date'];
                                    $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                    ?>

                                    <tr>
                                        <td><a>
                                                <?php echo $countjobs++; ?>.
                                            </a></td>
                                        <td>
                                            <?php echo $value['jobCategory'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['jobSubCategory'] ?>
                                        </td>
                                        <td><a href="<?php echo $value['locationUrl'] ?>" class=" text-primary" target="blank">
                                                <?php echo $value['location'] ?>
                                            </a> </td>
                                        <td>
                                            <?php echo $value['job_type'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['salary'] ?>
                                        </td>
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
                                    <th scope="col">Job Description</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $countjobs = 1;
                                foreach ($this->data['jobDetails'] as $key => $value) {
                                    $dateap = $value['date'];
                                    $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                    ?>

                                    <tr>
                                        <td><a>
                                                <?php echo $countjobs++; ?>.
                                            </a></td>

                                        <td>
                                            <?php echo $value['experience'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['number_of_openings'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['description'] ?>
                                        </td>
                                        <td>
                                            <?php echo $twelveHourTime ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                        <div style="float:right;">
                            <button onClick="window.print()" type="button" class="btn btn-dark printhide">Print</button>
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

                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/employeeRegistration" ?>" method="post">
                            <div class="col-12">
                                <label for="yourName" class="form-label">Candidate Name: <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter name"
                                    required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Candidate Email: <span
                                        class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" id="yourEmail"
                                    placeholder="Enter email" required>
                                <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Candidate Mobile Number: <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="phonenumber" class="form-control" id="yourEmail"
                                    placeholder="Enter number" required>
                                <div class="invalid-feedback">Please, enter mobile number!</div>
                            </div>
                            <div class="col-12">
                                <label for="createpassword" class="form-label">Create Password: <span
                                        class="text-danger">*</span></label>
                                <input type="password" name="createpassword" class="form-control" id="createpassword"
                                    placeholder="Enter new password" required>
                                <div class="invalid-feedback">Please, enter new password!</div>
                                <div class="text-secondary" style="font-size:12px;margin-top:0px" id="passwordmessage">Enter
                                    the date of birth in DDMMYYYY (01051996).</div>
                            </div>
                            <div class="col-12">
                                <label for="confirmpassword" class="form-label">Confirm Password: <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="cmpassword" class="form-control" id="confirmpassword"
                                    placeholder="Enter retype password" required>
                                <div class="invalid-feedback">Please, retype the password!</div>
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
        
    
      } elseif ($method == "createEmployeesAdmin") {
        ?>
        <!-- Sidebar Active  -->
        <script>
            document.getElementById('candidatelist').classList.add('active');
            document.getElementById('candidatedetail').classList.add('active');
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
                        <h5 class="card-title text-center pb-0 fs-4">Create New Candidate details</h5>
                    </div>

                    <form class="row g-3 needs-validation" novalidate
                        action="<?php echo baseUrl . "admin/employeeRegistrationAdmin" ?>" method="post">
                        <div class="col-12">
                            <label for="yourName" class="form-label">Candidate Name: <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter name"
                                required>
                            <div class="invalid-feedback">Please, enter your name!</div>
                        </div>

                        <div class="col-12">
                            <label for="yourEmail" class="form-label">Candidate Email: <span
                                    class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" id="yourEmail"
                                placeholder="Enter email" required>
                            <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                        </div>

                        <div class="col-12">
                            <label for="yourEmail" class="form-label">Candidate Mobile Number: <span
                                    class="text-danger">*</span></label>
                            <input type="number" name="phonenumber" class="form-control" id="yourEmail"
                                placeholder="Enter number" required>
                            <div class="invalid-feedback">Please, enter mobile number!</div>
                        </div>
                        <div class="col-12">
                            <label for="createpassword" class="form-label">Create Password: <span
                                    class="text-danger">*</span></label>
                            <input type="password" name="createpassword" class="form-control" id="createpassword"
                                placeholder="Enter new password" required>
                            <div class="invalid-feedback">Please, enter new password!</div>
                            <div class="text-secondary" style="font-size:12px;margin-top:0px" id="passwordmessage">Enter
                                the date of birth in DDMMYYYY (01051996).</div>
                        </div>
                        <div class="col-12">
                            <label for="confirmpassword" class="form-label">Confirm Password: <span
                                    class="text-danger">*</span></label>
                            <input type="text" name="cmpassword" class="form-control" id="confirmpassword"
                                placeholder="Enter retype password" required>
                            <div class="invalid-feedback">Please, retype the password!</div>
                        </div>
                        <!-- <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" name="terms" type="checkbox" value="" id="acceptTerms" required>
                                <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="#">terms and conditions</a></label>
                                <div class="invalid-feedback">You must agree before submitting.</div>
                            </div>
                        </div>-->
                        <div class="text-center">
                        <a class="" href="<?php echo baseUrl . "Admin/basicdetails" ?>"> <button type="submit"
                                class="btn btn-primary"><i class="bi bi-arrow-right">Create Account</i></button></a>
                                <!-- <button type="submit" class="btn btn-primary">Create Account</button> -->
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                        <div>                            
                            <a class="" href="<?php echo baseUrl . "Admin/basicdetails" ?>"> <button type="button"
                                class="btn btn-info mb-4 "><i class="bi bi-arrow-right">Form</i></button></a>
                          </div>
                    </form>

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
                  
                  
                  <div class="d-flex justify-content-between">         
                  <h5 class="card-title">Basic Details</h5>                   
                            <!-- <a class="" href="<?php echo baseUrl . "Admin/educationTable" ?>"> <button type="button"
                                class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a> -->

                                <a class="" href="<?php echo baseUrl . "admin/educationTable/" ?>"> 
                                  <button type="button" class="btn btn-info mt-4 "><i class="bi bi-arrow-right"></i></button>
                                </a>
                          </div>
                  <!-- Multi Columns Form -->
                  <form class="row g-3 needs-validation" novalidate name="applicationform" enctype="multipart/form-data"
                    method="post" onsubmit="return group()" action='<?php echo baseUrl . "Admin/updateBasicDetails/" . $value['id'] ?>'>
      
                    <?php
                    foreach ($basicDetails as $key => $value) {
                      ?>
      
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id"
                        placeholder="Enter your name">
      
                      <div class="col-12">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>" name="name"
                          placeholder="Michael" oninput="validateName(this)">
                        <div id="Name_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-12">
                        <label for="emailid" class="form-label">Email</label><br>
                        <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>" name="email"
                          placeholder="example@gmail.com">
                        <div id="emailid_error" style="color: red;"></div>
                      </div>
                      
                      <div class="col-md-6">
                        <label for="phonenumber" class="form-label">Mobile Number</label>
                        <input type="number" class="form-control" id="phonenumber" value="<?php echo $value['phonenumber']; ?>"
                          name="phonenumber" placeholder="9879879879" pattern="[0-9]{1,15}" maxlength="15"
                          oninput="validatePhoneNumber1(this)">
                        <div id="phonenumber_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" class="form-control" id="dateofbirth" value="<?php echo $value['dateofbirth']; ?>"
                          name="dateofbirth">
                        <div id="dob_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="age" class="form-label">Age </label>
                        <input type="number" class="form-control" id="age"
                          value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" name="age" placeholder="Your age" readonly
                        >
                        <div id="age_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="gender" class="form-label">Gender </label>
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
                        <label for="Door no" class="form-label">Door no / Building Name </label>
                        <input type="text" class="form-control" id="doorno"
                          value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>" name="doorno"
                          placeholder="15 / Appartment 4">
                        <div id="doorno_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="street address" class="form-label">Street Address </label>
                        <input type="text" class="form-control" id="streetaddress"
                          value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>" name="streetaddress"
                          placeholder="Gandhi nagar">
                        <div id="streetaddress_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="landmark" class="form-label">Landmark</label>
                        <input type="text" class="form-control" id="landmark"
                          value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>" name="landmark"
                          placeholder="Near temple">
                        <div id="landmark_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="pincode" class="form-label">Pincode </label>
                        <input type="text" class="form-control" id="pincode"
                          value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode" placeholder="638100"
                          maxlength="6" oninput="validatePincode(this)">
                        <div id="pincode_error" style="color: red;"></div>
                      </div>
                      <div class="col-md-6">
                        <label for="district" class="form-label">District </label>
      
                        <select class="form-control" id="district"
                          value="<?php echo isset($value['district']) ? $value['district'] : ''; ?>" name="district">
                          <option value="">Select your District</option>
      
                          <option value="erode" <?php if (isset($value['district']) && $value['district'] === 'erode')
                            echo 'selected'; ?>>Erode</option>
                          <option value="namakkal" <?php if (isset($value['district']) && $value['district'] === 'namakkal')
                            echo 'selected'; ?>>Namakkal</option>
                          <option value="tirupur" <?php if (isset($value['district']) && $value['district'] === 'tirupur')
                            echo 'selected'; ?>>Tirupur</option>
                          <option value="karur" <?php if (isset($value['district']) && $value['district'] === 'karur')
                            echo 'selected'; ?>>Karur</option>
                        </select>
                        <div id="district_error" style="color: red;"></div>
                      </div>
      
                      <div class="col-md-6">
                        <label for="maritalstatus" class="form-label">Marital Status </label>
      
                        <select class="form-control" id="maritalstatus"
                          value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>"
                          name="maritalstatus">
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
      
                      <div class="col-md-6">
                        <label for="aadharfrontphoto" class="form-label">Aadhaar Front Photo </label>
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
                        <label for="aadharbackphoto" class="form-label">Aadhaar Back Photo </label>
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
                        <label for="aadharnumber" class="form-label">Aadhaar number </label>
                        <input type="text" class="form-control" id="aadharnumber"
                          value="<?php echo ($value['aadharnumber']) ? $value['aadharnumber'] : ''; ?>" name="aadharnumber"
                          placeholder="1234 5678 9012" maxlength="14" pattern="\d{4} \d{4} \d{4}"
                          oninput="validateAadharNumber(this)">
                        <div id="aadharnumber_error" style="color: red;"></div>
                      </div>
      
                      <div class="col-md-6">
                        <label for="photo" class="form-label">Photo </label>
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
                        
                        <a class="" href="<?php echo baseUrl . "Admin/updateBasicDetails/" . $value['id'] ?>"> <button type="submit" class="btn btn-primary">Submit</button></a>
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
                input.value = input.value.replace(/[^A-Za-z]/g, '');
              }
            </script>
            <!-- PHONE NUMBER SCRIPTING -->
            <script>
              function validatePhoneNumber1(input) {
                var phoneNumber1 = input.value.replace(/\D/g, '');
      
                if (phoneNumber1.length > 15) {
                  input.value = phoneNumber1.slice(0, 15);
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
                    <div class="card recent-sales overflow-auto">
          
                      <div class="card-body pt-4">
                        <p><b style="color:blue;">Note:</b> Kindly provide your education history, starting from your <b>HIGHEST
                            QUALIFICATION</b> to the lowest, ensuring a sequential order for accurate and efficient processing.</p>
                        <!-- <h5 class="card-title">Education Table<span></span></h5> -->
                        <div class="d-flex justify-content-between">
                          <!-- <a href="<?php echo baseUrl . "Admin/addEducationForm" ?>">
                        <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->
          
                          <a href="#addeduform"><button onclick="addeduformfunction()" type="button" class="btn btn-success mb-4">+
                              Add Education</button></a>
                          <div>
                            <a class="" href="<?php echo baseUrl . "Admin/basicdetails" ?>"> <button type="button"
                                class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i> </button></a>
                            <a class="" href="<?php echo baseUrl . "Admin/experiencetable" ?>"> <button type="button"
                                class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
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
                                    <td>
                                      <form method="post" action="<?php echo baseUrl . 'Admin/delete_selected'; ?>"
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
                                      $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" || $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.Pharm"
                                    ) {
                                      ?>
                                            <td><a href="<?php echo $value['ugcer_url'] ?>" target="blank">
                                          <?php echo $value['ug_cer'] ?>
                                              </a></td>
                                      <?php
                                    } else if (
                                      $value['educational_qualification'] === "M.E" || $value['educational_qualification'] === "M.A" || $value['educational_qualification'] === "M.COM" || $value['educational_qualification'] === "M.ED" ||
                                      $value['educational_qualification'] === "M.LIT" || $value['educational_qualification'] === "M.TECH" || $value['educational_qualification'] === "MCA" || $value['educational_qualification'] === "MBA" ||
                                      $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
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
                                        href="<?php echo baseUrl . "Admin/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button
                                          type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                      <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
                      <a class="" href="<?php echo baseUrl . "Admin/educationTable" ?>">
                        <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
                    </div>
          
                    <!-- Multi Columns Form -->
                    <form class="row g-3" autocomplete="off" novalidate name="educationform" method="post"
                      enctype="multipart/form-data" onsubmit="return validateForm()"
                      action="<?php echo baseUrl . "Admin/insertEducationForm" ?>">
          
                      <div class="col-12 autocomplete">
                        <label for="qualification" class="form-label">Educational Qualification</label>
                        <input id="qualification" class="form-control" type="text" name="qualification" onchange="toggleFields()"
                          placeholder="Enter qualification">
                        <div id="qualification_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="department-group" style="display: none;">
                        <label for="department" class="form-label">Specialization</label>
                        <input type="text" class="form-control" id="department" name="department"
                          placeholder="Enter specialization">
                        <div id="department_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="course-group" style="display: none;">
                        <label for="educationmode" class="form-label">Mode of Education</label>
                        <select class="form-control" id="educationmode" name="educationmode">
                          <option value="">Select your mode of education </option>
                          <option value="Regular">Regular course</option>
                          <option value="Corres">Correspondence course</option>
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
                        <input type="number" class="form-control" id="percentage" id="school" name="percentage"
                          placeholder="Enter percentage">
                        <div id="percentage_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="year-group" style="display: none;">
                        <label for="year_passed" class="form-label">Year of Passed Out</label>
                        <input type="number" class="form-control" id="year_passed" name="year_passed" maxlength="4" pattern="\d{4}"
                          placeholder="Enter year of passed out">
                        <div id="year_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                        <label for="certificate_10th" class="form-label">10th Certificate Upload</label>
                        <input type="file" class="form-control" id="certificate_10th" name="certificate_10th"
                          accept="image/png ,image/jpg, image/jpeg, application/pdf">
                        <div id="certificate_10th_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_12th-group" style="display: none;">
                        <label for="certificate_12th" class="form-label">12th Certificate Upload</label>
                        <input type="file" class="form-control" id="certificate_12th" name="certificate_12th"
                          accept="image/png ,image/jpg, image/jpeg, application/pdf">
                        <div id="certificate_12th_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_dip-group" style="display: none;">
                        <label id="additionalFieldLabeldip" for="certificate_dip" class="form-label">Diploma Certificate
                          Upload</label>
                        <input type="file" class="form-control" id="certificate_dip" name="certificate_dip">
                        <div id="certificate_dip_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                        <label id="additionalFieldLabelug" for="certificate_ug" class="form-label">UG Degree Certificate
                          Upload</label>
                        <input type="file" class="form-control" id="certificate_ug" name="certificate_ug"
                          accept="image/png ,image/jpg, image/jpeg, application/pdf">
                        <div id="certificate_ug_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                        <label id="additionalFieldLabelpg" for="certificate_pg" class="form-label">PG Certificate Upload</label>
                        <input type="file" class="form-control" id="certificate_pg" name="certificate_pg"
                          accept="image/png ,image/jpg, image/jpeg, application/pdf">
                        <div id="certificate_pg_error" class="text-danger"></div>
                      </div>
          
                      <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                        <label id="additionalFieldLabeldoc" for="certificate_doctorate" class="form-label">Doctorate Certificate
                          Upload</label>
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
                    "B.A", "B.COM", "B.ED", "B.E", "B.LIT", "B.SC/BS", "BBA", "BCA", "B.TECH", "BSW", "BFA", "B.Arch", "B.N", "BCS", "LLB", "BDS", "B.Pharm",
                    "M.A", "M.COM", "M.ED", "M.E", "M.LIT", "M.Sc/MS", "MBA", "MCA", "M.TECH", "MSW", "MFA", "M.Arch", "M.N", "MCS", "LLM", "MBBS", "M.Pharm",
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
                <div class="card recent-sales overflow-auto">
      
                  <div class="card-body pt-4">
      
                    <div class="d-flex justify-content-between">
                      <!-- <a href="<?php echo baseUrl . "Admin/addEducationForm" ?>">
                  <button type="button" class="btn btn-success mb-4">+ Add Education</button></a> -->
      
                      <a href="#addeduform"><button onclick="addeduformfunction()" type="button" class="btn btn-success mb-4"
                          disabled>+ Add Education</button></a>
                      <div>
                        <a href="<?php echo baseUrl . "Admin/basicdetails" ?>"> <button type="button"
                            class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                        <a href="<?php echo baseUrl . "Admin/experiencetable" ?>"> <button type="button"
                            class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
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
                                <td>
                                  <form method="post" action="<?php echo baseUrl . 'Admin/delete_selected'; ?>"
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
                                  $value['educational_qualification'] === "LLB" || $value['educational_qualification'] === "BDS" || $value['educational_qualification'] === "B.SC/BS" || $value['educational_qualification'] === "BSW" ||
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
                                  $value['educational_qualification'] === "M.SC/MS" || $value['educational_qualification'] === "MSW" || $value['educational_qualification'] === "MFA" || $value['educational_qualification'] === "M.Arch" ||
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
                                    href="<?php echo baseUrl . "Admin/updateEducation" ?>/<?php echo $value['id'] ?>#editeduform"><button
                                      type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                  <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteEducation" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
                  <!-- <a onclick="return confirm('Are you sure you want to delete?')" ><button type="button" class=" ms-4 mb-4 btn btn-danger" onclick="deleteRows()">Delete</button></a> -->
      
                </div>
              </div>
              <div class="card">
                <div class="card-body" id="editeduform">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title">Update Education Details</h5>
                    <a class="" href="<?php echo baseUrl . "Admin/educationTable" ?>">
                      <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
                  </div>
      
                  <!-- Multi Columns Form -->
                  <form class="row g-3" novalidate name="educationform" method="post" enctype="multipart/form-data"
                    onsubmit="return validateForm()" action="<?php echo baseUrl . "Admin/updateInsertEducation" ?>">
      
                    <?php
                    foreach ($updateEducation as $key => $value) {
                      $seekerId = $_SESSION['seekerId'];
                      ?>
                      <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                      <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                      <div class="col-12">
                        <label class="form-label" for="qualification">Educational Qualification</label>
                        <select class="form-control" id="qualification" value="<?php echo $value['educational_qualification']; ?>"
                          name="qualification" onchange="toggleFields()" readonly>
                          <option value="<?php echo $value['educational_qualification']; ?>">
                            <?php echo $value['educational_qualification']; ?>
                          </option>
                        </select>
                        <div id="qualification_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="department-group" style="display: none;">
                        <label class="form-label" for="department">Department</label>
                        <input type="text" class="form-control" id="department" name="department"
                          value="<?php echo $value['department']; ?>">
                        <div id="department_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="course-group" style="display: none;">
                        <label for="educationmode" class="form-label">Mode of Education</label>
                        <select class="form-control" id="educationmode" name="educationmode">
                          <option value="">Select your mode of education </option>
                          <option value="Regular" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Regular')
                            echo 'selected'; ?>>Regular course</option>
                          <option value="Corres" <?php if (isset($value['educationmode']) && $value['educationmode'] === 'Corres')
                            echo 'selected'; ?>>Correspondence course</option>
                        </select>
                        <div id="course_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="school-group">
                        <label class="form-label" for="school">Institution Name</label>
                        <input type="text" class="form-control" id="school" value="<?php echo $value['school_college_name']; ?>"
                          name="school">
                        <div id="school_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="percentage-group">
                        <label class="form-label" for="percentage">Percentage</label>
                        <input type="number" class="form-control" id="percentage" id="school"
                          value="<?php echo $value['percentage']; ?>" name="percentage">
                        <div id="percentage_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="year-group">
                        <label class="form-label" for="year_passed">Year of Passed Out</label>
                        <input type="number" class="form-control" id="year_passed" value="<?php echo $value['yearOfPassing']; ?>"
                          name="year_passed">
                        <div id="year_error" class="text-danger"></div>
                      </div>
      
                      <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                        <label class="form-label" for="certificate_10th">10th Certificate Upload</label>
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
                        <label class="form-label" for="certificate_12th">12th Certificate Upload</label>
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
                        <label id="additionalFieldLabeldip" class="form-label" for="certificate_dip">Diploma Certificate
                          Upload</label>
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
                        <label id="additionalFieldLabelug" class="form-label" for="certificate_ug">UG Degree Certificate
                          Upload</label>
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
                        <label id="additionalFieldLabelpg" class="form-label" for="certificate_pg">PG Certificate Upload</label>
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
                          Upload</label>
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
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Experience Table<span></span></h5>
              <div class="pt-4">
                <a class="" href="<?php echo baseUrl . "Admin/educationTable" ?>"> <button type="button"
                    class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>"> <button type="button"
                    class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
              </div>
            </div>

            <div class="exptableheading" id="fresherExp">
              <p style="font-size:18px; font-weight: bold; color: #007BFF;">Kindly mention your work experience and work
                status.</p>
              <p><b style="color:blue;">Note:</b> Indicate <b>'No Experience'</b> if you are a <b>Fresher</b> or have
                had <b>no professional experience</b> since graduation.</p>
              <input type="radio" name="fresherExperience" value="experience" id="exp"
                onclick="showContent('experience')" hidden>
              <label for="exp" class="btn btn-success">Experienced</label>
              <input type="radio" name="fresherExperience" value="fresher" id="fre" onclick="showContent('fresher')"
                hidden>
              <label for="fre" class="btn btn-danger"> Fresher / No Experience</label>
            </div>

            <div id="experience" class="button-content" style="display: none;">
              <div class="d-flex justify-content-between pt-4">
                <h5 class="card-title">Add Experience Details</h5>
                <a class="" href="<?php echo baseUrl . "Admin/experiencetable" ?>">
                  <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
              </div>
              <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
                onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Admin/insertExperienceForm" ?>">

                <div class="col-6">
                  <label for="category" class="form-label">Category </label>
                  <select class="form-control" id="category" name="category" autocomplete="off"
                    onchange="showHideOtherField()">
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
                  <label for="newcategory" class="form-label">Reason for choosing category as others <span
                      class="text-danger">*</span></label>
                  <input class="form-control" id="newcategory" name="newcategory" placeholder="Enter new category">
                  <div id="newcategory_error" class="text-danger error"></div>
                  <input id="categoryothers" name="categoryothers" value="1" hidden>
                </div>

                <div class="col-md-6">
                  <label for="subcategory" class="form-label">Subcategory </label>
                  <input class="form-control" id="subcategory" name="subcategory" placeholder="Enter subcategory"
                >
                  <div id="subcategory_error" class="text-danger error"></div>
                </div>

                <div class="col-md-6">
                  <label for="company name" class="form-label">Company Name </label>
                  <input type="text" class="form-control" id="companyname" name="companyname"
                    placeholder="Enter company name">
                  <div id="companyname_error" class="text-danger error"></div>
                </div>

                <div class="col-md-6">
                  <label for="company location" class="form-label">Company Location <span
                      class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="companylocation" name="companylocation"
                    placeholder="Enter company location">
                  <div id="companylocation_error" class="text-danger error"></div>
                </div>
                <div class="col-md-6">
                  <div class="experience-container">
                    <label for="expYear" class="form-label">Experience </label>
                    <div class="d-md-flex">
                      <label for="fromDate" class="pt-1 pe-2">From</label>
                      <div class="col-md-3  me-2">
                        <input type="date" class="form-control" id="fromDate" name="fromDate">
                        <div id="experienceexp_error" class="text-danger error"></div>
                      </div>
                      <label for="toDate" class="pt-1 px-2">To</label>
                      <div class="col-md-3">
                        <input type="date" class="form-control" id="toDate" name="toDate">
                        <div id="experienceexpmonth_error" class="text-danger error"></div>
                      </div>

                      <input type="checkbox" id="till_now" name="till_now" class="ms-3">
                      <label for="toDate" class="pt-1 px-2">Till now</label>

                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">Total duration </label>
                  <p class="form-control" id="result"><span id="years"></span> Years & <span id="months"> </span> Months
                  </p>
                </div>

                <div class="col-md-6">
                  <label for="role" class="form-label">Role in the Company </label>
                  <input type="text" class="form-control" id="role" name="role" placeholder="Enter role">
                  <div id="role_error" class="text-danger error"></div>
                </div>
                <div class="col-md-6">
                  <label for="mobilenumber" class="form-label">Company Mobile Number <span
                      class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="company_mobilenum" name="company_mobilenum"
                    placeholder="9879879879" pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)"
                >
                  <div id="compmobile_error" class="text-danger error"></div>
                </div>

                <h5 class="card-title">Previous Job's reference details</h5>

                <div class="col-md-6">
                  <label for="Name" class="form-label">Name </label>
                  <input type="text" class="form-control" id="nameofemployer" name="nameofemployer"
                    placeholder="Krishna" oninput="validateName1(this)">
                  <div id="name_error" class="text-danger error"></div>
                </div>

                <div class="col-md-6">
                  <label for="number" class="form-label">Mobile Number <span class="text-danger"></span></label>
                  <input type="number" class="form-control" id="number" name="number" placeholder="9999999999"
                    pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)">
                  <div id="mobilenum_error" class="text-danger error"></div>
                </div>

                <div class="col-md-6" class="form-label">
                  <label for="email">Email-Id </label>
                  <input type="text" class="form-control" id="emailid" name="emailid" placeholder="manager@gmail.com"
                >
                  <div id="emailid_error" class="text-danger error"></div>
                </div>

                <input type="number" class="form-control" value="1" name="expsubmit" hidden>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>

            <div id="fresher" class="button-content mt-4" style="display: none;">
              <p>Now you can proceed to the <b>'Area of Job Interest'</b> section to specify your career preferences.
              </p>
              <form method="post" action=" <?php echo baseUrl . "Admin/insertFresherForm" ?>">
                <input name="fresher" value="1" hidden>
                <button type="submit" class="btn btn-danger">Next</button>
              </form>
            </div>

            <div class="d-flex justify-content-between">
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
                          <form method="post" action="<?php echo baseUrl . 'Admin/deleteExperience'; ?>"
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
                            <a
                              href="<?php echo baseUrl . "Admin/updateExperience" ?>/<?php echo $value['id'] ?>#editexpform"><button
                                type="button" class="btn btn-secondary mx-1 ">Edit</button></a>
                            <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
                <form method="post" action="<?php echo baseUrl . 'Admin/deleteExperience'; ?>"
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

      </div><!-- End Recent Sales -->
    </section>

    <script>
      function validateName1(input) {
        input.value = input.value.replace(/[^A-Za-z]/g, '');
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
          <a class="" href="<?php echo baseUrl . "Admin/experiencetable" ?>">
            <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
        </div>

        <!-- Multi Columns Form -->
        <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
          onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Admin/insertExperienceForm" ?>">

          <div class="col-6">
            <label for="category" class="form-label">Category </label>
            <select class="form-control" id="category" name="category" autocomplete="off"
              onchange="showHideOtherField()">
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
            <input class="form-control" id="newcategory" name="newcategory" placeholder="Enter new category">
            <div id="newcategory_error" class="text-danger error"></div>
            <input id="categoryothers" name="categoryothers" value="1" hidden>
          </div>

          <div class="col-md-6">
            <label for="subcategory" class="form-label">Subcategory </label>
            <input class="form-control" id="subcategory" name="subcategory" placeholder="Enter subcategory">
            <div id="subcategory_error" class="text-danger error"></div>
          </div>

          <div class="col-md-6">
            <label for="company name" class="form-label">Company Name </label>
            <input type="text" class="form-control" id="companyname" name="companyname" placeholder="Enter company name"
            >
            <div id="companyname_error" class="text-danger error"></div>
          </div>

          <div class="col-md-6">
            <label for="company location" class="form-label">Company Location </label>
            <input type="text" class="form-control" id="companylocation" name="companylocation"
              placeholder="Enter company location">
            <div id="companylocation_error" class="text-danger error"></div>
          </div>

          <div class="col-md-6">
            <div class="experience-container">
              <label for="expYear" class="form-label">Experience</label>

              <div class="d-md-flex">
                <label for="fromDate" class="pt-1 pe-2">From</label>
                <div class="col-md-3  me-2">
                  <input type="date" class="form-control" id="fromDate" name="fromDate">
                  <div id="experienceexp_error" class="text-danger error"></div>
                </div>
                <label for="toDate" class="pt-1 px-2">To</label>
                <div class="col-md-3">
                  <input type="date" class="form-control" id="toDate" name="toDate">
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
            <label for="role" class="form-label">Role in the Company </label>
            <input type="text" class="form-control" id="role" name="role" placeholder="Enter role">
            <div id="role_error" class="text-danger error"></div>
              </div>
          <div class="col-md-6">
            <label for="mobilenumber" class="form-label">Company Mobile Number <span
                class="text-danger">*</span></label>
            <input type="number" class="form-control" id="company_mobilenum" name="company_mobilenum"
              placeholder="9879879879" pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)"
            >
            <div id="compmobile_error" class="text-danger error"></div>
          </div>
          <!-- JOB PROFILE -->
          <!-- <div class="col-md-6">
                            <label for="profile" class="form-label">Job Profile</label>
                            <input type="text" class="form-control" id="profile" name="profile" placeholder="Enter Job profile">
                            <div id="profile_error" class="text-danger error"></div>
                          </div> -->

          <h5 class="card-title">Previous Job's reference details</h5>

          <div class="col-md-6">
            <label for="Name" class="form-label">Name </label>
            <input type="text" class="form-control" id="nameofemployer" name="nameofemployer"
              placeholder="Enter employer name" oninput="validateName1(this)">
            <div id="name_error" class="text-danger error"></div>
          </div>

          <div class="col-md-6">
            <label for="number" class="form-label">Mobile Number </label>
            <input type="number" class="form-control" id="number" name="number" placeholder="Enter mobile number"
              pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)">
            <div id="mobilenum_error" class="text-danger error"></div>
          </div>

          <div class="col-md-6" class="form-label">
            <label for="email">Email-Id </label>
            <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email">
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
        input.value = input.value.replace(/[^A-Za-z]/g, '');
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
          <a class="" href="#addexpform"><button type="button" class="btn btn-success m-2" disabled>+ Add
              Experience</button></a>
          <div style="float:right;">
            <a class="" href="<?php echo baseUrl . "Admin/educationTable" ?>"> <button type="button"
                class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
            <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>"> <button type="button"
                class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
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
                        <form method="post" action="<?php echo baseUrl . 'Admin/deleteExperience'; ?>"
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
                        <?php echo $value['expYear'] ?> to
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
                          <a href="<?php echo baseUrl . "Admin/updateExperience" ?>/<?php echo $value['id'] ?>"><button
                              type="button" class="btn btn-secondary mx-1 ">Edit</button></a>
                          <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteExperience" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
            <a class="" href="<?php echo baseUrl . "Admin/experiencetable" ?>">
              <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
          </div>

          <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
            onsubmit="return validateexpForm()" action=" <?php echo baseUrl . "Admin/updateInsertExperience" ?>">

            <?php
            foreach ($updateExperience as $key => $value) {
              $seekerId = $_SESSION['seekerId'];
              ?>
              <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
              <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

              <div class="col-6">
                <label class="form-label" for="category">Category</label>
                <select class="form-control" id="category" name="category">
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
                <label class="form-label" for="subcategory">Subcategory</label>
                <input class="form-control" id="subcategory" name="subcategory"
                  value="<?php echo $value['other_sub_category']; ?>" placeholder="Enter subcategory">
                <div id="subcategory_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="company name">Company Name</label>
                <input type="text" class="form-control" value="<?php echo $value['company_name']; ?>" id="companyname"
                  name="companyname">
                <div id="companyname_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="company location">Company Location</label>
                <input type="text" class="form-control" value="<?php echo $value['company_location']; ?>"
                  id="companylocation" name="companylocation">
                <div id="companylocation_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <div class="experience-container">
                  <label for="expYear" class="form-label">Experience</label>

                  <div class="d-md-flex">

                    <label for="fromDate" class="pt-1 pe-2">From</label>

                    <div class="col-md-3  me-2">
                      <input type="date" class="form-control" id="fromDate" name="fromDate"
                        value="<?php echo $value['expYear']; ?>">
                      <div id="experienceexp_error" class="text-danger error"></div>
                    </div>

                    <label for="toDate" class="pt-1 px-2">To</label>

                    <div class="col-md-3">
                      <input type="date" class="form-control" id="toDate" name="toDate"
                        value="<?php echo $value['expMonth']; ?>">
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
                <label class="form-label" for="role">Role in the Company</label>
                <input type="text" class="form-control" value="<?php echo $value['job_role']; ?>" id="role" name="role"
                >
                <div id="role_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label for="mobilenumber" class="form-label">Company Mobile Number <span
                    class="text-danger">*</span></label>
                <input type="number" class="form-control" id="company_mobilenum"
                  value="<?php echo $value['company_mobilenum']; ?>" name="company_mobilenum" placeholder="9879879879"
                  pattern="[0-9]{1,15}" maxlength="15" oninput="validatePhoneNumber(this)">
                <div id="compmobile_error" class="text-danger error"></div>
              </div>

              <h5 class="card-title">Previous Job's Reference Details</h5>

              <div class="col-md-6">
                <label class="form-label" for="Name">Name</label>
                <input type="text" class="form-control" value="<?php echo $value['previous_employer_name']; ?>"
                  id="nameofemployer" name="nameofemployer" oninput="validateName1(this)">
                <div id="name_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="phone number">Mobile Number</label>
                <input type="number" class="form-control" value="<?php echo $value['previous_employer_mobile']; ?>"
                  id="number" name="number" placeholder="9879879879" pattern="[0-9]{1,15}" maxlength="15"
                  oninput="validatePhoneNumber(this)">
                <div id="mobilenum_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="email">Email</label>
                <input type="text" class="form-control" value="<?php echo $value['previous_employer_email']; ?>"
                  id="emailid" name="emailid" >
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
        input.value = input.value.replace(/[^A-Za-z]/g, '');
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
        <div class="card recent-sales overflow-auto">

          <div class="card-body">

            <h5 class="card-title">Area of Job Interest Table<span></span></h5>

            <div class="d-flex justify-content-between">
              <a class="" href="#addinterestform">
                <button type="button" class="btn btn-success mb-4" onclick="addinterestform()">+ Add Area of Job
                  Interest</button></a>
              <div>
                <a class="" href="<?php echo baseUrl . "Admin/experienceTable" ?>"> <button type="button"
                    class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
                <a class="" href="<?php echo baseUrl . "Admin/resume" ?>"> <button type="button"
                    class="btn btn-info mb-4 "><i class="bi bi-arrow-right"></i></button></a>
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
                          <form method="post" action="<?php echo baseUrl . 'Admin/deleteAreaInterest'; ?>"
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
                              href="<?php echo baseUrl . "Admin/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button
                                type="button" class="btn btn-secondary mx-1">Edit</button></a>
                            <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
              <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>">
                <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
            </div>
            <!-- Multi Columns Form -->
            <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateAreaForm()"
              action="<?php echo baseUrl . "Admin/insertAreaOfIntrest" ?>">

              <div class="col-md-6">
                <label class="form-label" for="category">Category</label>
                <select class="form-control" id="category" name="category" onchange="showHideOtherField()" >
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
                <input class="form-control" id="newcategory" name="newcategory" placeholder="Enter new category">
                <div id="newcategory_error" class="text-danger error"></div>
                <input id="categoryothers" name="categoryothers" value="1" hidden>
              </div>

              <div class="col-md-6">
                <label class="form-label" for=" subcategory">Subcategory</label>
                <input type="text" class="form-control" id="subcategory" name="subcategory"
                  placeholder="Enter subcategory" >
                <div id="areasubcat_error" class="error"></div>
              </div>

              <div class="col-md-6" id="otherCategoryFields" style="display: none;">
                <label for="customCategoryInput">Custom Category</label>
                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput"
                  placeholder="Enter custom category">
                <label for="customSubcategoryInput">Custom Subcategory</label>
                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput"
                  placeholder="Enter custom subcategory">
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
                <select class="form-control" id="preferred-location" name="preferred-location" >
                  <option value="">Select district</option>
                  <option value="Erode">Erode</option>
                  <option value="Karur">Karur</option>
                  <option value="Namakkal">Namakkal</option>
                  <option value="Tirupur">Tirupur</option>
                </select>
                <div id="arealocation_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="description">Description</label>
                <input class="form-control" id="description" name="description" rows="3" placeholder="Enter description"
                  >
                <div id="areades_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="jobtype">Job Type</label>
                <select class="form-control" id="jobtype" name="jobtype" >
                  <option value="">Select a Job Type</option>
                  <option value="fulltime">Full Time</option>
                  <option value="parttime">Part Time</option>
                </select>
                <div id="areajob_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="expected-salary">Expected Salary</label>
                <input type="text" class="form-control" id="expected-salary" name="expected-salary"
                  placeholder="Enter salary expectation" >
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
            var description = document.getElementById("description").value;
            var expectedSalary = document.getElementById("expected-salary").value;

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
                              <form method="post" action="<?php echo baseUrl . 'Admin/deleteSkill'; ?>"
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
                                  href="<?php echo baseUrl . "Admin/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button
                                    type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
          <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>">
            <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
        </div>

        <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateSkillForm()"
          action="<?php echo baseUrl . "Admin/insertSkillForm" ?>">


          <div class="col-12">
            <label class="form-label" for="skillname">Skill Name</label>
            <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name"
              >
            <div id="sname_error" class="error"></div>
          </div>

          <div class="col-md-6">
            <div class="experience-container">
              <label for="experience" class="form-label">Experience</label>
              <div class="d-flex">
                <select class="form-control" id="experience" name="experience" >
                  <option value=""> Select year </option>
                  <?php for ($i = 0; $i <= 20; $i++): ?>

                    <option value="<?php echo $i; ?>">
                      <?php echo $i; ?> Year
                      <?php echo $i !== 1 ? 's' : ''; ?>
                    </option>
                  <?php endfor; ?>
                  <option value="20+"> 20+ Years</option>
                </select>

              </div>
              <div id="sexp_error" class="error"></div>
            </div>
          </div>

          <div class="col-md-6">
            <label class="form-label" for="skillLevel">Skill Level</label>
            <select class="form-control" name="skilllevel" id="skilllevel" >
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
      }
      </script>

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
            action="<?php echo baseUrl . "Admin/insertSkillForm" ?>">


            <div class="col-12">
              <label class="form-label" for="skillname">Skill Name</label>
              <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name"
                >
              <div id="sname_error" class="error"></div>
            </div>

            <div class="col-md-6">
              <div class="experience-container">
                <label for="experience" class="form-label">Experience</label>
                <div class="d-flex">
                  <select class="form-control" id="experience" name="experience" >
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
              <label class="form-label" for="skillLevel">Skill Level</label>
              <select class="form-control" name="skilllevel" id="skilllevel" >
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

      <div class="card recent-sales overflow-auto">

        <div class="card-body">

          <h5 class="card-title">Area of Job Interest Table<span></span></h5>
          <div class="d-flex justify-content-between">
            <a class="" href="#addinterestform">
              <button type="button" class="btn btn-success mb-4" disabled>+ Add Area of Job Interest</button></a>
            <div>
              <a href="<?php echo baseUrl . "Admin/experienceTable" ?>"> <button type="button"
                  class="btn btn-info mb-4 "><i class="bi bi-arrow-left"></i></button></a>
              <a href="<?php echo baseUrl . "Admin/resume" ?>"> <button type="button" class="btn btn-info mb-4 "><i
                    class="bi bi-arrow-right"></i></button></a>
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
                        <form method="post" action="<?php echo baseUrl . 'Admin/deleteAreaInterest'; ?>"
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
                            href="<?php echo baseUrl . "Admin/updateAreaOfIntrest" ?>/<?php echo $value['id'] ?>#editinterestform"><button
                              type="button" class="btn btn-secondary mx-1">Edit</button></a>
                          <!-- <a onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteAreaOfIntrest" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
            <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>">
              <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
          </div>
          <!-- Multi Columns Form -->
          <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateAreaForm()"
            action="<?php echo baseUrl . "Admin/updateInsertAreaOfIntrest" ?>">

            <?php
            foreach ($updateAreaOfIntrest as $key => $value) {
              $seekerId = $_SESSION['seekerId'];
              ?>
              <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
              <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">

              <div class="col-md-6">
                <label class="form-label" for="category">Category</label>
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
                <label class="form-label" for="subcategory">Subcategory</label>
                <input type="text" class="form-control" id="subcategory" name="subcategory"
                  value="<?php echo $value['other_sub_interst_category'] ?>" placeholder="Enter subcategory" >
                <div id="areasubcat_error" class="error"></div>
              </div>


              <div class="" id="otherCategoryFields" style="display: none;">
                <label for="customCategoryInput">Custom Category</label>
                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput"
                  placeholder="Enter custom category">
                <label for="customSubcategoryInput">Custom Subcategory</label>
                <input type="text" class="form-control" id="customSubcategoryInput" name="customSubcategoryInput"
                  placeholder="Enter custom subcategory">
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
                <label class="form-label" for="preferred-location">Preferred Location to work</label>
                <select class="form-control" id="preferred-location" name="preferred-location"
                  value="<?php echo $value['prefered_location']; ?>" >
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
                <label class="form-label" for="description">Description</label>
                <input class="form-control" id="description" name="description"
                  value="<?php echo $value['description']; ?>" rows="3" >
                <div id="areades_error" class="error"></div>
              </div>

              <div class="col-md-6">
                <label class="form-label" for="jobtype">Job Type</label>
                <select class="form-control" id="jobtype" name="jobtype" value="<?php echo $value['job_type']; ?>"
                  >
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
                <label class="form-label" for="expected-salary">Expected Salary</label>
                <input type="text" class="form-control" id="expected-salary" name="expected-salary"
                  value="<?php echo $value['expected_salary']; ?>" >
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
          displayError('Please select a category', 'areacat_error');
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
                              <form method="post" action="<?php echo baseUrl . 'Admin/deleteSkill'; ?>"
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
                                  href="<?php echo baseUrl . "Admin/updateSkill" ?>/<?php echo $value['id'] ?>#editskillform"><button
                                    type="button" class="btn btn-secondary mx-1">Edit</button></a>
                                <!-- <a class="" onclick="return confirm('Are you sure you want to delete?')" href="<?php echo baseUrl . "Admin/deleteSkill" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a> -->
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
                <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>">
                  <button type="button" class="btn btn-danger mt-4 "><i class="bi bi-x"></i></button></a>
              </div>
              <!-- Multi Columns Form -->
              <form class="row g-3 needs-validation" novalidate method="post" onsubmit="return validateSkillForm()"
                action="<?php echo baseUrl . "Admin/updateInsertSkill" ?>">
  
                <?php
                if (isset($updateSkill[0]['id'])) {
                  foreach ($updateSkill as $key => $value) {
                    $seekerId = $_SESSION['seekerId'];
                    ?>
                    <input type="hidden" name="seekerId" value="<?php echo $seekerId; ?>">
                    <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id"
                      placeholder="Enter your name">
  
                    <div class="col-12">
                      <label class="form-label" for="skillname">Skill Name</label>
                      <input type="text" class="form-control" id="skillname" name="skillname" placeholder="Enter skill name"
                        value="<?php echo $value['skill']; ?>" >
                      <div id="sname_error" class="error"></div>
                    </div>
  
                    <div class="col-md-6">
                      <div class="experience-container">
                        <label for="experience" class="form-label">Experience</label>
                        <div class="d-flex">
                          <select class="form-control col-3 me-2" id="experience" name="experience" >
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
                      <label class="form-label" for="skillLevel">Skill Level</label>
                      <select class="form-control" name="skilllevel" id="skilllevel" >
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
                  <div class="card">
                    <div class="card-body pt-4">
                      <a class="" href="<?php echo baseUrl . "Admin/areaOfIntrestTable" ?>"> <button type="button"
                          class="btn btn-info"><i class="bi bi-arrow-left"></i></button></a>
          
                      <h5 class="card-title">Upload Resume</h5>
          
                      <!-- Multi Columns Form -->
                      <form class="row g-3 needs-validation" novalidate name="resumeform" id="resumeForm" method="post"
                        enctype="multipart/form-data" onsubmit="return validateForm()"
                        action="<?php echo baseUrl . "Admin/registered" ?>">
          
          
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
                            <label class="form-label" for="file">Upload Resume</label>
                            <input type="file" class="form-control" name="file" id="idresume" accept=".pdf,.doc" >
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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['eeid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['phonenumber']; ?>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['email']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['dateofbirth']; ?>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex py-3">
                                                     <a class="mx-1" href="<?php echo baseUrl . "admin/basicdetails/" . $value['id'] ?>">
                                                    <button type="button" class="btn btn-primary d-flex">
                                                    <i class="bi bi-plus"></i></i>Add</button>
                                                  </a>
                                                  <a class="mx-1" href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>">
                                                    <button type="button" class="btn btn-success d-flex">
                                                    <i class="bi bi-eye pe-1"></i>View</button>
                                                  </a>
                                                    <button type="button" class="btn btn-danger  d-flex" data-toggle="modal" data-target="#deleteemployee"
                                                        onclick="(function(id, button) { deleteformnl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)">
                                                        <i class="bi bi-trash pe-1"></i>Delete</button>
                                                    <script>
                                                        function deleteformnl(employeetid) {
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
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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

            <script>
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>


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
                                            <th scope="col">Verified By</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['verifiedEmployees'] as $key => $value) {
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['eeid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['phonenumber']; ?>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['email']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['dateofbirth']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['verifiedBy']; ?>
                                                </td>
                                                <td class="d-flex py-3">
                                                    <a class=""
                                                        href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <button type="button" class="btn btn-danger d-flex ms-1" data-toggle="modal"
                                                        data-target="#deleteemployee"
                                                        onclick="(function(id, button) { deleteformvl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)"><i
                                                            class="bi bi-trash pe-1"></i>Delete</button>
                                                    <script>
                                                        function deleteformvl(employeetid) {
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
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>

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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['eeid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['phonenumber']; ?>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['email']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['dateofbirth']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['verificationRemarks']; ?>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex py-3"><a
                                                        href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <button type="button" class="btn btn-danger d-flex ms-1" data-toggle="modal"
                                                        data-target="#deleteemployee"
                                                        onclick="(function(id, button) { deleteformpl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)"><i
                                                            class="bi bi-trash pe-1"></i>Delete</button>
                                                    <script>
                                                        function deleteformpl(employeetid) {
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
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                function highlightRow(button) {
                    var row = button.closest('tr');

                    var allRows = document.querySelectorAll('.table tbody tr');
                    allRows.forEach(function (row) {
                        row.classList.remove('table-active');
                    });

                    row.classList.add('table-active');

                    document.body.addEventListener('click', function (event) {
                        var targetElement = event.target;

                        if (!row.contains(targetElement)) {
                            row.classList.remove('table-active');
                        }
                    });
                }
            </script>

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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['eeid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['phonenumber']; ?>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['email']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['dateofbirth']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['deleteRemarks']; ?>
                                                </td>
                                                <?php
                                                if ($value['identityverify'] == 1 && $value['addressverify'] == 1 && $value['employmentverify'] == 1 && $value['educationverify'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success">Verified By</span><br>
                                                        <?php echo $value['verifiedBy']; ?>
                                                    </td>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                    <?php
                                                }
                                                ?>
                                                <td class="d-flex">
                                                    <span>
                                                        <form action="<?php echo baseUrl . "admin/restoreEmployeeform" ?>"
                                                            method="post">
                                                            <input class="form-check-input" type="text" name="EmployeeId" id=""
                                                                value="<?php echo $value['id'] ?>" hidden>
                                                            <input class="form-check-input" type="text" name="restoreEmployee" id=""
                                                                value="0" hidden>

                                                            <button type="submit" class="btn btn-success d-flex"
                                                                onclick="return confirm('Are you sure you want to restore?')"><i
                                                                    class="bi bi-arrow-counterclockwise pe-1"></i>Restore</button>
                                                        </form>
                                                    </span>
                                                    <a class="ms-1"
                                                        href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success">View</button>

                                                        <!-- <a class="ms-1" onclick="return confirm('Are you sure you want to delete permanently?')" href="<?php echo baseUrl . "Admin/deleteEmployeeDetails" ?>/<?php echo $value['id'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td> -->
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                                        <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i
                                                class="bi bi-chevron-down"></i>
                                        </p>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
                                            <!-- <li class="mb-2"> <h4>Filter</h4> </li> -->
                                            <li>
                                                <p>Select Year :
                                                    <select id="yearCd" onchange="filterByYearMonth()">
                                                        <option value="">Year</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                <p>Select Month:
                                                    <select id="monthCd" onchange="filterByYearMonth()">
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
                                                    </select>
                                                </p>
                                            </li>
                                            <li>
                                                <div class="d-sm-flex ">
                                                    <p>From : <input type="date" id="fromDateCd"></p>
                                                    <p class="ms-2">To : <input type="date" id="toDateCd"></p>
                                                    <p onclick="clearDateFields()" style="width: 18px;height:auto;"
                                                        class="border border-secondary ms-1"><i class="bi bi-x"></i></p>
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
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount; ?>.
                                                    </a></td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['eeid']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['phonenumber']; ?>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['email']; ?>
                                                    </a></td>
                                                <?php
                                                if ($value['identityverify'] == 1 && $value['addressverify'] == 1 && $value['employmentverify'] == 1 && $value['educationverify'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success">Verified By</span><br>
                                                        <?php echo $value['verifiedBy']; ?>
                                                    </td>
                                                <?php } else { ?>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                <?php } ?>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
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
                                <h2 class="text-center pt-2">Candidate Resume</h2>

                                <div class="card recent-sales overflow-auto mt-4">
                                    <div class="card-body">
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                            ?>
                                            <div class="d-md-flex justify-content-between pt-4">
                                                <div class="col d-none d-md-block">
                                                    <img class="h-100" src="<?php echo baseUrl . "assets/profilephoto.png" ?>"
                                                        class="card-img-top" alt="...">
                                                </div>

                                                <div class="col">
                                                    <h5 class="card-title">Name :
                                                        <?php echo $value['name']; ?>
                                                    </h5>
                                                    <h5 class="card-title">Candidate ID :
                                                        <?php echo $value['eeid']; ?>
                                                    </h5>
                                                </div>
                                                <div class="text-end mt-2">
                                                    <p>
                                                        <?php echo $value['phonenumber'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['email'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['buildingName'] ?>,
                                                        <?php echo $value['address'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['district'] ?>,
                                                        <?php echo $value['pincode'] ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-sm-flex justify-content-between pt-4">
                                                <div>
                                                    <p><b>D.O.B :</b>
                                                        <?php echo $value['dateofbirth'] ?>
                                                    </p>
                                                    <p><b>Age :</b>
                                                        <?php echo $value['age'] ?>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p><b>Gender :</b>
                                                        <?php echo $value['gender'] ?>
                                                    </p>
                                                    <p><b>Marital Status :</b>
                                                        <?php echo $value['maritalStatus'] ?>
                                                    </p>
                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="card recent-sales overflow-auto mt-4">
                                        <div class="card-body">

                                            <table class="table table-striped mt-2">
                                                <thead>
                                                    <tr>
                                                        <th class="col-3" scope="col">Profile Photo</th>
                                                        <th class="col-3" scope="col">Aadhaar Front</th>
                                                        <th class="col-3" scope="col">Aadhaar Back</th>
                                                        <th class="col-3" scope="col">Aadhaar Number</th>
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

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        ?>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">

                                        <h5 class="card-title">Educational Qualification</h5>

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

                                    </div>
                                </div>
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Skills</h5>

                                        <!-- Table with stripped rows -->
                                        <?php
                                        if (isset($skills[0]['id']) && !empty($skills)) {
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
                                                    foreach ($this->data['skills'] as $skey => $svalue) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $loopcount; ?>.
                                                            </td>
                                                            <td>
                                                                <?php echo $svalue['skill'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $svalue['experience'] ?>
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
                                            <!-- End Table with stripped rows -->
                                        <?php } else { ?>
                                            <p>No Skills</p>
                                        <?php } ?>
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
                                        <!-- End Table with stripped rows -->

                                    </div>
                                </div>


                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Experience Details</h5>

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

                                        <p id="noexperience">This candidate is a fresher or did not have any work experience
                                            after graduation.</p>
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
                                        <h5 class="card-title">Resume</h5>

                                        <!-- <a href="<?php echo $this->data['areaOfInterest'][0]['resume_filename_url']; ?>" target="blank" ><?php echo $this->data['areaOfInterest'][0]['resume_filename']; ?></a> -->
                                        <a href="<?php echo isset($this->data['areaOfInterest'][0]['resume_filename_url']) ? $this->data['areaOfInterest'][0]['resume_filename_url'] : ''; ?>"
                                            target="blank">
                                            <?php echo isset($this->data['areaOfInterest'][0]['resume_filename']) ? $this->data['areaOfInterest'][0]['resume_filename'] : 'No file'; ?>
                                        </a>


                                    </div>
                                </div>
                                <form class="row g-3 needs-validation" novalidate
                                    action="<?php echo baseUrl . "admin/verifyEmployee" ?>" method="post">
                                    <input class="form-check-input" type="text" name="EmployeeId" id=""
                                        value="<?php echo $this->data['basicDetails'][0]['id'] ?>" hidden>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Verification Checklist</legend>
                                        <?php if (isset($this->data['basicDetails'][0]['id'])) {
                                            ?>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="identityVerify"
                                                        id="checkbox1" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['basicDetails'][0]['identityverify'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios1"> 1.IDENTITY – Photo
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="addressVerify"
                                                        id="checkbox2" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['basicDetails'][0]['addressverify'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios2"> 2.ADDRESS – Aadhaar
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="employmentVerify"
                                                        id="checkbox3" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['basicDetails'][0]['employmentverify'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios2"> 3.EMPLOYMENT – Employer
                                                        details </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="educationVerify"
                                                        id="checkbox4" onclick="verifyCheckboxes()" value="1" <?php if ($this->data['basicDetails'][0]['educationverify'] == '1') {
                                                            echo 'checked';
                                                        } ?>>
                                                    <label class="form-check-label" for="gridRadios2"> 4.EDUCATION - Certifiates
                                                    </label>
                                                </div>

                                                <input class="form-check-input" type="text" name="newList" id="" value="1"
                                                    hidden>
                                                <input class="form-check-input" type="text" name="verifiedName" id=""
                                                    value="<?php echo $_SESSION['adminName'] . ' / ' . $_SESSION['adminid'] ?>"
                                                    hidden>



                                                <!-- <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;"><?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?></textarea>
                                                            <label for="floatingTextarea">Remarkser</label>
                                                        </div>
                                                    </div> -->

                                                <!-- <div class="form-check">
                                            <input class="form-check-input" type="radio" name="verificationStatus" id="gridRadios"
                                            value="2" <?php if ($this->data['basicDetails'][0]['verificationStatus'] == '2') {
                                                echo 'checked';
                                            } ?>>
                                            <label class="form-check-label" for="gridRadios3"> Rejected </label>
                                        </div> -->
                                            </div>
                                        </fieldset>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea" name="verificationRemarks"
                                                    style="height: 100px;"><?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?> </textarea>
                                                <label for="floatingTextarea">Remarks</label>
                                                <div class="invalid-feedback">
                                                    Please enter a remark.
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        } else {
                                            ?>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios1" value="0">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Verification Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios2" value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Verification success
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios" value="2">
                                                <label class="form-check-label" for="gridRadios3">
                                                    Rejected
                                                </label>
                                            </div>
                                        </div>
                                    <?php }
                                        ?>


                                    <!-- <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="verificationRemarks" style="height: 100px;" >
                                        <?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?></textarea>
                                        <label for="floatingTextarea">Remarks</label>
                                    </div>
                                </div> -->

                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-success" id="verifyButton"
                                            disabled>Verified</button>
                                        <button type="submit" class="btn btn-danger" id="pendingButton">Pending</button>
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
                                <h2 class="text-center pt-2">Candidate Resume</h2>

                                <div class="card recent-sales overflow-auto mt-4">
                                    <div class="card-body">
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                            ?>
                                            <div class="d-md-flex justify-content-between pt-4">
                                                <div class="col d-none d-md-block">
                                                    <img class="h-100" src="<?php echo baseUrl . "assets/profilephoto.png" ?>"
                                                        class="card-img-top" alt="...">
                                                </div>

                                                <div class="col">
                                                    <h5 class="card-title">Name :
                                                        <?php echo $value['name']; ?>
                                                    </h5>
                                                    <h5 class="card-title">Candidate ID :
                                                        <?php echo $value['eeid']; ?>
                                                    </h5>
                                                </div>
                                                <div class="text-end mt-2">
                                                    <p>
                                                        <?php echo $value['phonenumber'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['email'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['buildingName'] ?>,
                                                        <?php echo $value['address'] ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $value['district'] ?>,
                                                        <?php echo $value['pincode'] ?>
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="d-sm-flex justify-content-between pt-4">
                                                <div>
                                                    <p><b>D.O.B : </b>
                                                        <?php echo $value['dateofbirth'] ?>
                                                    </p>
                                                    <p><b>Age :</b>
                                                        <?php echo $value['age'] ?>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p><b>Gender :</b>
                                                        <?php echo $value['gender'] ?>
                                                    </p>
                                                    <p><b>Marital Status :</b>
                                                        <?php echo $value['maritalStatus'] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card recent-sales overflow-auto mt-4">
                                        <div class="card-body">

                                            <table class="table table-striped mt-2">
                                                <thead>
                                                    <tr>
                                                        <th class="col-3" scope="col">Profile Photo</th>
                                                        <th class="col-3" scope="col">Aadhaar Front</th>
                                                        <th class="col-3" scope="col">Aadhaar Back</th>
                                                        <th class="col-3" scope="col">Aadhaar Number</th>
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

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                        ?>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">

                                        <h5 class="card-title">Educational Qualification</h5>

                                        <!-- Table with stripped rows -->
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">S.No</th>
                                                    <th scope="col">Educational Qualification</th>
                                                    <th scope="col">Specialization</th>
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

                                    </div>
                                </div>
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Skills</h5>

                                        <?php
                                        if (isset($skills[0]['id']) && !empty($skills)) {
                                            ?>
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
                                                            <td>
                                                                <?php echo $loopcount; ?>.
                                                            </td>
                                                            <td>
                                                                <?php echo $svalue['skill'] ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $svalue['experience'] ?>
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
                                            <!-- End Table with stripped rows -->
                                        <?php } else { ?>
                                            <p>No skills </p>
                                        <?php } ?>
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
                                                $loopcount = 1;
                                                foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
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
                                        <!-- End Table with stripped rows -->

                                    </div>
                                </div>
                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Experience Details</h5>

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

                                        <p id="noexperience">This candidate is a fresher or did not have any work experience
                                            after graduation.</p>
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
                                        <h5 class="card-title">Resume</h5>

                                        <!-- <a href="<?php echo $this->data['areaOfInterest'][0]['resume_filename_url']; ?>" target="blank" ><?php echo $this->data['areaOfInterest'][0]['resume_filename']; ?></a> -->
                                        <a href="<?php echo isset($this->data['areaOfInterest'][0]['resume_filename_url']) ? $this->data['areaOfInterest'][0]['resume_filename_url'] : ''; ?>"
                                            target="blank">
                                            <?php echo isset($this->data['areaOfInterest'][0]['resume_filename']) ? $this->data['areaOfInterest'][0]['resume_filename'] : 'No file'; ?>
                                        </a>
                                    </div>
                                </div>

                                <div style="float:right;">
                                    <button onClick="window.print()" type="button"
                                        class="btn btn-dark printhide">Print</button>
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
                                                <td><a href="#">
                                                        <?php echo $loopcount++; ?>.
                                                    </a></td>
                                                <td>Candidate Experience</td>
                                                <td>
                                                    <?php echo $value['other_category'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['newCategory'] ?>
                                                </td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn btn-success d-flex me-1" data-toggle="modal"
                                                        data-target="#newcategoryexp"
                                                        onclick="categoryexp('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')"><i
                                                            class="bi bi-check2 pe-1"></i>Add</button>
                                                    <form action="<?php echo baseUrl . "admin/cancelNewCategoryExp" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="jobTableId" id=""
                                                            value="<?php echo $value['id'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="categoryothers" id=""
                                                            value="0" hidden>

                                                        <button type="submit" class="btn btn-danger d-flex"
                                                            onclick="return confirm('Are you sure you want to cancel?')"><i
                                                                class="bi bi-trash pe-1"></i>Delete</button>
                                                    </form>
                                            </tr>
                                            <script>
                                                function categoryexp(exptableID, expcategory) {
                                                    document.getElementById("expTableId").value = exptableID;
                                                    document.getElementById("expnewcategory").value = expcategory;
                                                }
                                            </script>
                                            <?php
                                        }

                                        foreach ($this->data['candidateNewCategoryArea'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td><a href="#">
                                                        <?php echo $loopcount++; ?>.
                                                    </a></td>
                                                <td>Candidate Job Interest</td>
                                                <td>
                                                    <?php echo $value['other_interst_category'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['newCategory'] ?>
                                                </td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn btn-success me-1" data-toggle="modal"
                                                        data-target="#newcategoryarea"
                                                        onclick="categoryarea('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                    <form action="<?php echo baseUrl . "admin/cancelNewCategoryArea" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="jobTableId" id=""
                                                            value="<?php echo $value['id'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="categoryothers" id=""
                                                            value="0" hidden>

                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to cancel?')">Delete</button>
                                                    </form>
                                                    <script>
                                                        function categoryarea(areatableID, areacategory) {
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
                                                <td><a href="#">
                                                        <?php echo $loopcount++; ?>.
                                                    </a></td>
                                                <td>Employer Job</td>
                                                <td>
                                                    <?php echo $value['jobCategory'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['newCategory'] ?>
                                                </td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn btn-success me-1" data-toggle="modal"
                                                        data-target="#employerjobcategory"
                                                        onclick="categoryjob('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                    <form action="<?php echo baseUrl . "admin/cancelNewCategoryJob" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="jobTableId" id=""
                                                            value="<?php echo $value['id'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="categoryothers" id=""
                                                            value="0" hidden>

                                                        <button type="submit" class="btn btn-danger"
                                                            onclick="return confirm('Are you sure you want to cancel?')">Delete</button>
                                                    </form>
                                            </tr>
                                            <script>
                                                function categoryjod(jobtableID, jobcategory) {
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
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Candidate Mobile Number</th>
                                            <!-- <th scope="col">Email</th> -->
                                            <!-- <th scope="col">D.O.B</th> -->
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['candidateRequestList'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $loopcount; ?>.
                                                </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>">
                                                        <?php echo $value['emprid']; ?>
                                                    </a></td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>">
                                                        <?php echo $value['cdid']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['mobilenum']; ?>
                                                </td>
                                                <!-- <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td> -->
                                                <!-- <td><?php echo $value['dateofbirth']; ?></td> -->
                                                <td class="d-flex">
                                                    <form action="<?php echo baseUrl . "admin/approveCandidateRequest" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="approveCandidateRequest"
                                                            id="" value="2" hidden>
                                                        <button type="submit" class="btn btn-success d-flex"
                                                            onclick="return confirm('Are you sure you want to approve?')"><i
                                                                class="bi bi-check2 pe-1"></i>Approve to View</button>
                                                    </form>
                                                    <form action="<?php echo baseUrl . "admin/cancelCandidateRequest" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId'] ?>" hidden> <input
                                                            class="form-check-input" type="text" name="cancelCandidateRequest" id=""
                                                            value="0" hidden>
                                                        <button type="submit" class="btn btn-danger d-flex ms-1"
                                                            onclick="return confirm('Are you sure to cancel the request?')"><i
                                                                class="bi bi-x pe-1"></i>Cancel</button>
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
                                            <td><a href="#">
                                                    <?php echo $loopcount; ?>
                                                </a></td>
                                            <td>
                                                <?php echo $value['company_name']; ?>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <?php echo $value['company_mobile_number']; ?>
                                                </a></td>
                                            <td>
                                                <?php echo $value['name']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['role']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['mobile_number']; ?>
                                            </td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                        type="button" class="btn btn-success">View</button></a></td>
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
                                                    <td><a href="#">
                                                            <?php echo $loopcount; ?>.
                                                        </a></td>
                                                    <td>
                                                        <?php echo $value['erid']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $value['company_name']; ?>
                                                    </td>
                                                    <td><a href="#" class="text-primary">
                                                            <?php echo $value['company_mobile_number']; ?>
                                                        </a></td>
                                                    <td>
                                                        <?php echo $value['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $value['role']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $value['mobile_number']; ?>
                                                    </td>
                                                    <td>Add Request</td>
                                                    <td><span class="badge bg-success">Add Request</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $value['id'] ?>"><button
                                                                type="button" class="btn btn-success">View</button></a></td>
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
                                                    <td><a href="#">
                                                            <?php echo $loopcount++; ?>.
                                                        </a></td>
                                                    <td>
                                                        <?php echo $dvalue['erid']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dvalue['company_name']; ?>
                                                    </td>
                                                    <td><a href="#" class="text-primary">
                                                            <?php echo $dvalue['company_mobile_number']; ?>
                                                        </a></td>
                                                    <td>
                                                        <?php echo $dvalue['name']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dvalue['role']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dvalue['mobile_number']; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $dvalue['deleteRequestRemarks']; ?>
                                                    </td>
                                                    <td><span class="badge bg-danger">Delete Request</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $dvalue['id'] ?>"><button
                                                                type="button" class="btn btn-success">View</button></a></td>
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
                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/employerApprovelStatus" ?>" method="post">
                            <?php
                            foreach ($this->data['manageEmployer'] as $key => $value) {
                                ?>
                                <p>Employer ID :
                                    <?php echo $value['erid'] ?>
                                </p>
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="inputName5"
                                        value="<?php echo $value['company_name'] ?>" readonly name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Company Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" name="mobile"
                                        value="<?php echo $value['company_mobile_number'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email"
                                        value="<?php echo $value['company_email'] ?>" readonly required>
                                </div>
                                <!-- <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword5">
                            </div> -->
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St"
                                        name="address" value="<?php echo $value['street_address'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Apartment, studio, or floor" name="landmark"
                                        value="<?php echo $value['Landmark'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city"
                                        value="<?php echo $value['City'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">District</label>
                                    <input type="text" class="form-control" id="inputDistrict" name="district"
                                        value="<?php echo $value['district'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select" name="state">
                                        <option selected value="tamil nadu">Tamil Nadu</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputZip" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputPincode"
                                        value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLogo" class="form-label">Logo</label>
                                    <!-- <input type="text" class="form-control" id="inputLogo" value="<?php echo $value['company_logo'] ?>" readonly name="pincode"> -->
                                    <a href="<?php echo $value['company_logourl']; ?>" class="form-control text-primary"
                                        target="blank">
                                        <?php echo $value['company_logo']; ?>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputWebsite" class="form-label">Website</label>
                                    <input type="text" class="form-control" id="inputWebsite"
                                        value="<?php echo $value['companywebsite'] ?>" readonly name="cwebsite1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPan" class="form-label">PAN Number</label>
                                    <input type="text" class="form-control" id="inputPan"
                                        value="<?php echo $value['companypan'] ?>" readonly name="cpan1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputGst" class="form-label">GST Number</label>
                                    <input type="text" class="form-control" id="inputGst"
                                        value="<?php echo $value['companygst'] ?>" readonly name="cgst1">
                                </div>

                                <h5 class="card-title">Contact Person Details</h5>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['name'] ?>" readonly name="name1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['role'] ?>" readonly name="role" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5"
                                        value="<?php echo $value['mobile_number'] ?>" readonly name="mobile1" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email-ID</label>
                                    <input type="email" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['email'] ?>" readonly name="email1" required>
                                </div>

                                <h5 class="card-title">Employer Approval</h5>
                                <?php
                                if (isset($this->data['manageEmployer'][0]['id'])) {
                                    ?>

                                    <?php if ($this->data['manageEmployer'][0]['addNewRequest'] == '1') { ?>
                                        <fieldset class="row mb-3">
                                            <legend class="col-form-label col-sm-4 pt-0">Employer Add Approval Request</legend>
                                            <div class="col-sm-8">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1"
                                                        value="1" checked>
                                                    <label class="form-check-label" for="gridRadios1">Add</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2"
                                                        value="2">
                                                    <label class="form-check-label" for="gridRadios2">Delete</label>
                                                </div>

                                        </fieldset>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                    name="addNewApprovelRemarks" style="height: 100px;" required></textarea>
                                                <label for="floatingTextarea">Remarks</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="deleteApprovel" value="0" id="" hidden>
                                                <input type="text" name="deleteApprovelRemarks" value="" id="" hidden>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="addNewRequest" value="0" id="" hidden>
                                                <input type="text" name="deleteRequest" value="0" id="" hidden>
                                            </div>
                                        </div>

                                        <?php
                                    } else if ($this->data['manageEmployer'][0]['deleteRequest'] == '1') { ?>
                                            <fieldset class="row mb-3">
                                                <legend class="col-form-label col-sm-4 pt-0">Employer Delete Approval Request</legend>
                                                <div class="col-sm-8">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1"
                                                            value="1" checked>
                                                        <label class="form-check-label" for="gridRadios1">Delete</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2"
                                                            value="2">
                                                        <label class="form-check-label" for="gridRadios2">Add</label>
                                                    </div>
                                            </fieldset>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                        name="deleteApprovelRemarks" style="height: 100px;" required></textarea>
                                                    <label for="floatingTextarea">Remarks</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="addNewApprovel" value="0" id="" hidden>
                                                    <input type="text" name="addNewApprovelRemarks" value="" id="" hidden>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="addNewRequest" value="0" id="" hidden>
                                                    <input type="text" name="deleteRequest" value="0" id="" hidden>
                                                </div>
                                            </div>
                                        <?php
                                    } ?>


                                    <input class="form-check-input" type="text" name="id" id=""
                                        value="<?php echo $this->data['manageEmployer'][0]['id'] ?>" hidden>
                                    <?php
                                } else {
                                    ?>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-4 pt-0">Add Employer Approval</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios1"
                                                    value="0">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="addNewApprovel" id="gridRadios2"
                                                    value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval Success
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                name="addNewApprovelRemarks" style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-4 pt-0">Delete Employer Approvel</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1"
                                                    value="0">
                                                <label class="form-check-label" for="gridRadios1">
                                                    Approval Pending
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2"
                                                    value="1">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Approval success
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"
                                                name="deleteApprovelRemarks" style="height: 100px;"></textarea>
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
        <div class="modal fade" id="deleteemployee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
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
                        <form class="needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/deleteEmployeeform" ?>" method="post">
                            <input class="form-check-input" type="text" name="EmployeeId" id="EmployeeId" value=""
                                hidden>
                            <input class="form-check-input" type="text" name="deleteEmployeeStatus" id="" value="1"
                                hidden>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" name="deleteEmployeeRemarks" cols="30" rows="20"
                                        required></textarea>
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
        <div class="modal fade" id="deleteemployer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Employer Delete Remark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/deleteEmployerForm" ?>" method="post">
                            <input class="form-check-input" type="text" name="id" id="EmployerID" value="" hidden>
                            <input class="form-check-input" type="text" name="deleteStatus" id="" value="1" hidden>

                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Leave a comment here"
                                        id="floatingTextarea" name="deleteRemarks" style="height: 100px;"
                                        required></textarea>
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
        <div class="modal fade" id="newcategoryexp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/addNewCategoryExperience" ?>" method="post">

                            <div class="col-12">
                                <label for="expnewcategory">New Category :</label>
                                <input type="text" id="expnewcategory" value="" name="new_category">
                            </div>
                            <input class="form-check-input" type="text" name="categoryexp" id="" value="0" hidden>
                            <input class="form-check-input" type="text" name="expTableId" id="expTableId"
                                value="<?php echo $value['id'] ?>" hidden>

                            <button type="submit" class="btn btn-success mt-4">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup add new category in candidate area -->
        <div class="modal fade" id="newcategoryarea" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/addNewCategoryArea" ?>" method="post">

                            <div class="col-12">
                                <label for="expnewcategory">New Category :</label>
                                <input type="text" id="areanewcategory" value="" name="new_category">
                            </div>
                            <input class="form-check-input" type="text" name="categoryarea" id="" value="0" hidden>
                            <input class="form-check-input" type="text" value="" id="areaTableId" name="areaTableId"
                                hidden>

                            <button type="submit" class="btn btn-success mt-4">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup add new category in employer job -->
        <div class="modal fade" id="employerjobcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/employerNewCategory" ?>" method="post">

                            <div class="col-12">
                                <label for="expnewcategory">New Category :</label>
                                <input type="text" id="jobnewcategory" value="" name="new_category">
                            </div>
                            <input class="form-check-input" type="text" name="categoryjob" id="" value="0" hidden>
                            <input class="form-check-input" type="text" name="jobTableId" id="jobTableId"
                                value="<?php echo $value['id'] ?>" hidden>

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

</body>

</html>