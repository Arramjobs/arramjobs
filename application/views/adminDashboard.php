<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arram Jobs Admin Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
        #yourEmail::-webkit-inner-spin-button,
        #company_mobilenum::-webkit-outer-spin-button,
        #company_mobilenum::-webkit-inner-spin-button,
        #number::-webkit-outer-spin-button,
        #number::-webkit-inner-spin-button,
        #percentage::-webkit-outer-spin-button,
        #percentage::-webkit-inner-spin-button,
        #year_passed::-webkit-outer-spin-button,
        #year_passed::-webkit-inner-spin-button,
        #phonenumber::-webkit-outer-spin-button,
        #phonenumber::-webkit-inner-spin-button,
        #phonenumber1::-webkit-outer-spin-button,
        #phonenumber1::-webkit-inner-spin-button,
        #no_of_openings::-webkit-outer-spin-button,
        #no_of_openings::-webkit-inner-spin-button,
        #expected_salary::-webkit-outer-spin-button,
        #expected_salary::-webkit-inner-spin-button,
        #expected_salaryu::-webkit-outer-spin-button,
        #expected_salaryu::-webkit-inner-spin-button {
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

        .pagination-btn {
            padding: 5px 10px;
        }

        th {
            white-space: nowrap;
        }

        @media (max-width: 767px) {

            .ellipsis {
                display: none;
            }

            .pagination-btn {
                padding: 5px 8px;
                font-size: 12px;
            }
        }

        .form-label {
            font-weight: 600;
        }

        th,
        td {
            white-space: nowrap;
        }

        /* Sidebar */

        .sidebar ul li a:hover {
            background: #4154f1;
            color: #fff;
            transition: .3s ease;
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

        .paginationButtons.active {
            background-color: #007bff;
            color: #fff;
        }
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
        </div>

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

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
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center text-danger"
                                onclick="return confirm('Are you sure to logout?')" href="<?php echo baseUrl . "admin/logout" ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </header>

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <!-- Admin dashboard -->

            <li class="nav-item " id="dash">
                <a class="nav-link " href="<?php echo baseUrl . "admin/dashboard" ?>">
                    <i class="bi bi-grid"></i>
                    <span id="dashboardad">Dashboard</span>
                </a>
            </li>

            <!-- Admin users -->

            <li class="mb-1">
                <a class="nav-link collapsed " id="adminuser" data-bs-target="#components-nav" data-bs-toggle="collapse"
                    href="#">
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
            </li>

            <!-- Admin Employers -->

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
            </li>

            <!-- Admin Candidates -->

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
                    <li>
                        <a id="candidatenewlist" href="<?php echo baseUrl . "admin/newCandidateList" ?>">
                            <i class="bi bi-circle"></i><span>New Candidate List</span>
                        </a>
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
                        <a id="candidateplacedlist" href="<?php echo baseUrl . "admin/placedCandidate" ?>">
                            <i class="bi bi-circle"></i><span>Placed List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidateinterviewedlist" href="<?php echo baseUrl . "admin/interviewedCandidate" ?>">
                            <i class="bi bi-circle"></i><span>Interviewed List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidaterejectedlist" href="<?php echo baseUrl . "admin/rejectedCandidate" ?>">
                            <i class="bi bi-circle"></i><span>Relieved List</span>
                        </a>
                    </li>
                    <li>
                        <a id="candidateoveralllist" href="<?php echo baseUrl . "admin/overallCandidates" ?>">
                            <i class="bi bi-circle"></i><span>Overall List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Request for candidate view -->

            <li class="nav-item ">
                <a class="nav-link collapsed" id="candidaterequest"
                    href="<?php echo baseUrl . "admin/candidateRequestList" ?>">
                    <i class="bi bi-card-list"></i>
                    <span>Request For Candidate View</span>
                    <?php if ($canReqTotalRows > 0) { ?>
                        <div class="border border-success border-2 rounded-circle bg-success text-light"
                            style="width: 25px; height:25px;background-color:green;text-align:center;">
                            <?php echo isset($canReqTotalRows) ? $canReqTotalRows : null; ?>
                        </div>
                    <?php } ?>
                </a>
            </li>

            <!-- Add category request -->

            <li class="nav-item">
                <a class="nav-link collapsed" id="categoryrequest"
                    href="<?php echo baseUrl . "admin/categoryRequest" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Add Category Request</span>
                </a>
            </li>

            <!-- Candidate tracking chart -->

            <li class="nav-item">
                <a class="nav-link collapsed" id="candidatechart" href="<?php echo baseUrl . "admin/candidateChart" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Candidate Tracking Chart</span>
                </a>
            </li>

            <!-- Employer tracking chart -->

            <li class="nav-item">
                <a class="nav-link collapsed" id="employerchart" href="<?php echo baseUrl . "admin/employerchart" ?>">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Employer Tracking Chart</span>
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
                </li>End Icons Nav 

        <?php } ?>-->'

        </ul>
    </aside><!-- End Sidebar-->

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
                </div>

                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="row">
                       
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
                                                <h6>
                                                    <?php echo $this->data['admin']['totalRows']; ?>
                                                </h6>
                                                <span class="text-success small pt-1 fw-bold">12%</span>
                                                <span class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card revenue-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Employers <span>| Verified</span></h5>
                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                            </div>

                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card customers-card">

                                    <div class="card-body">
                                        <h5 class="card-title">Candidates <span>| Verified</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
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
                            </div>

                            <div class="col-xxl-4 col-md-6">
                                <div class="card info-card customers-card">

                                    <div class="card-body">
                                        <h5 class="card-title"> Placed Lists <span>| No. of placed candidates</span></h5>

                                        <div class="d-flex align-items-center">
                                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-people"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h6>
                                                    <?php echo $this->data['placedCandidatesList']['totalRows']; ?>
                                                </h6>
                                                <span class="text-success small pt-1 fw-bold">44%</span> <span
                                                    class="text-muted small pt-2 ps-1">increase</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Admin User</h5>

                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/insertAdminUser" ?>" method="post">
                            <div class="col-md-6">
                                <label for="inputName5" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputName5" name="name" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputUserrole" class="form-label">User Role <span
                                        class="text-danger">*</span></label>
                                <select id="inputUserrole" class="form-select" name="userRole" required>
                                    <option selected value="adm">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="inputEmail5" name="email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Mobile Number <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="inputMobileNumber5" name="mobileNumber"
                                    min="0" required onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                <div class="invalid-feedback">Please enter a Mobile Number!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">UserName <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputUserName5" name="userName" required>
                                <div class="invalid-feedback">Please choose a username!</div>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword5" class="form-label">Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="inputPassword5" name="password" required>
                                <div class="invalid-feedback">Please enter your password!</div>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress5" class="form-label">Address 1</label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address">
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" name="address2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" id="inputCity" name="city">
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" name="state" class="form-select" disabled>
                                    <option selected>Tamil Nadu</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="inputZip" name="pincode">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>

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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <h5 class="card-title">User List<span></span></h5>

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
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $value['admin_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['name']; ?>
                                            </td>
                                            <td><a href="#" class="text-primary">
                                                    <?php echo $value['mobileNumber']; ?>
                                                </a>
                                            </td>
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
                                                            class="bi bi-trash pe-1"></i> Remove</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $loopcount++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Employer Registration Form</h5>

                        <form class="row g-3 " action="<?php echo baseUrl . "admin/insertEmployer" ?>" method="post">
                            <div class="col-md-12">
                                <label for="inputName5" class="form-label">Company Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputName5" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Company Number <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile" required
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Company Email </label>
                                <input type="email" class="form-control" id="inputEmail5" name="email">
                            </div>
                            <div class="col-md-6">
                                <label for="crpassword" class="form-label">Create Password <span
                                        class="text-danger">*</span></label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="crpassword" name="crpassword" required>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="togglePasswordVisibility('crpassword', 'visibilityIcon')">
                                        <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                    </button>
                                    <p id="crpassworderr" style="color: red;"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="cmpassword" class="form-label">Confirm Password <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="cmpassword" name="cmpassword" required>
                                <p id="cmpassworderr" style="color: red;"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress5" class="form-label">Street Address </label>
                                <input type="text" class="form-control" id="inputAddres5s" name="address">
                            </div>
                            <div class="col-md-6">
                                <label for="inputAddress2" class="form-label">Landmark </label>
                                <input type="text" class="form-control" id="inputAddress2" name="landmark">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City </label>
                                <input type="text" class="form-control" id="inputCity" name="city">
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">District </label>
                                <select class="form-control" id="inputDistrict" name="district">
                                    <option value="">Select district</option>
                                    <option value="Erode">Erode</option>
                                    <option value="Karur">Karur</option>
                                    <option value="Namakkal">Namakkal</option>
                                    <option value="Tirupur">Tirupur</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">State </label>
                                <select id="inputState" class="form-select" name="state">
                                    <option selected value="Tamil Nadu">Tamil Nadu</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Pincode </label>
                                <input type="text" class="form-control" id="inputPincode" name="pincode">
                            </div>
                            <div class="col-md-6">
                                <label for="locationUrl" class="form-label">Location URL</label>
                                <input type="text" class="form-control" id="locationUrl" name="locationUrl"
                                    pattern="https?://.+">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="inputFile" name="logo">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">Website</label>
                                <input type="text" class="form-control" id="cwebsite" name="cwebsite">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">PAN Number</label>
                                <input type="text" class="form-control" id="cpan" name="cpan">
                            </div>
                            <div class="col-md-6">
                                <label for="inputFile" class="form-label">GST Number</label>
                                <input type="text" class="form-control" id="cgst" name="cgst">
                            </div>

                            <h5 class="card-title">Contact Person Details</h5>

                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Name </label>
                                <input type="text" class="form-control" id="inputEmail5" name="name1">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Role </label>
                                <input type="text" class="form-control" id="inputEmail5" name="role">
                            </div>
                            <div class="col-md-6">
                                <label for="inputNumber5" class="form-label">Mobile Number </label>
                                <input type="number" class="form-control" id="inputNumber5" name="mobile1"
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail5" class="form-label">Email-ID </label>
                                <input type="email" class="form-control" id="inputEmail5" name="email1">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>

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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <?php
                            if (isset($this->data['unVerifiedEmployers'][0]['company_name'])) {
                                ?>
                                <h5 class="card-title">New Employers<span></span></h5>

                                <table class="table" id="unverifyTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Company Number</th>
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
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['erid']; ?> </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?>
                                                        <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                            <a href="<?php echo $value['companyLocationUrl']; ?>"
                                                                class="px-2 text-danger" target="_blank"><i class='bx bx-map'></i></a>
                                                        <?php } ?>
                                                    </p>
                                                </td>
                                                <td class="text-primary"> <?php echo $value['company_mobile_number']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['role']; ?> </td>
                                                <td> <?php echo $value['mobile_number']; ?> </td>
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
                </div>
            </section>
<!-- Pagination -->
            <script>
                var table = document.getElementById('verifyTable');
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

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) { 
                        startPage = 1;
                        endPage = totalPages;
                    } else { 
                        if (currentPage <= 2) { 
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else { 
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }

                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }

                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }

                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }

                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
            </script>

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
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                        <div class="d-sm-flex ">
                        <h5 class="card-title">Verified Employers<span></span></h5>
                                <div class="filter pt-3 ms-5">
                                <input type="text" class="form-control" id="searchCompanyNameInput" placeholder="Search by Company Name">
</div>
                            </div>

<!-- Search by Company name -->
<script>
    $(document).ready(function() {
        $('#searchCompanyNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#verifyTable tbody tr').filter(function() {
                var companyName = $(this).find('td:eq(3)').text().toLowerCase(); // Index 3 is the Company Name column
                var matches = companyName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#verifyTable thead').hide();
                $('#paginationButtons').hide();
            } else {
                $('#noRecordsFound').hide();
                $('#verifyTable thead').show(); 
                $('#paginationButtons').show();
            }
        });
    });
</script>
                            <?php
                            if (isset($this->data['verifiedEmployers'][0]['company_name'])) {
                                ?>                                

<div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>

                                <table class="table" id="verifyTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Company Number</th>
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
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?>
                                                        <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                            <a href="<?php echo $value['companyLocationUrl']; ?>"
                                                                class="px-2 text-danger" target="_blank"><i class='bx bx-map'></i></a>
                                                        <?php } ?>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a> 
                                                </td>
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
                                                <td class="d-flex py-3"><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>"><button
                                                            type="button" class="btn btn-success d-flex"><i class="bi bi-eye pe-1"></i>View</button></a>
                                                    <button type="button" class="btn btn-danger ms-1 d-flex" data-toggle="modal"
                                                        data-target="#deleteemployer"  
                                                        onclick="(function(id, button) { deleteformvl(id); highlightRow(button); })(<?php echo $value['id'] ?>, this)">
                                                        <i class="bi bi-trash pe-1"></i> Delete</button>

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
                                    <p class="text-end " id="verifyCount" style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- Pagination -->
            <script>
                var table = document.getElementById('verifyTable');
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
                function previousPage() {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function nextPage() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function updatePaginationButtons() {
                    var buttonsHtml = '';
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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
                        <div class="card-body">
                            <?php
                            if (isset($this->data['pendingEmployers'][0]['company_name'])) {
                                ?>
                                <h5 class="card-title">Pending List<span></span></h5>

                                <!-- <table class="table table-borderless datatable"> -->
                                <table class="table" id="pendingTableEr">
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
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo $twelveHourTime; ?>
                                                </td>
                                                <td>
                                                    <?php echo $value['erid']; ?>
                                                </td>
                                                <td>
                                                    <p class="d-flex">
                                                        <?php echo $value['company_name']; ?>
                                                        <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                            <a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger" target="_blank"><i class='bx bx-map'></i></a>
                                                        <?php } ?>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a>
                                                </td>
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
                                                            type="button" class="btn btn-success d-flex"><i class="bi bi-eye pe-1"></i>View</button></a>
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

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- Pagination -->
            <script>
                var table = document.getElementById('pendingTableEr');
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
            </script>

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
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <?php
                            if (isset($this->data['deleteEmployerList'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Deleted Employers<span></span></h5>

                                <table class="table" id="delTableEr">
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
                                                        <?php echo $value['company_name']; ?>
                                                        <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                            <a href="<?php echo $value['companyLocationUrl']; ?>"
                                                                class="px-2 text-danger" target="_blank"><i class='bx bx-map'></i></a>
                                                        <?php } ?>
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
                                                            type="button" class="btn btn-success d-flex"><i class="bi bi-eye pe-1"></i>View</button></a>
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

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
                                </div>

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

            <!-- Pagination -->
            <script>
                var table = document.getElementById('delTableEr');
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

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));
                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;
                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <div class="d-sm-flex ">
                                <h5 class="card-title me-5">Overall List<span></span></h5>
                                <div class="filter pt-3 ms-5">
                                    <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i
                                            class="bi bi-chevron-down"></i>
                                    </p>

                                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
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
                                <div class="mt-2 ms-5">
    <input type="text" class="form-control" id="searchCompanyNameInput" placeholder="Search by Company Name">
</div>
                            </div>

                            <!-- Search option -->
                            <script>
    $(document).ready(function() {
        $('#searchCompanyNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#myTableEr tbody tr').filter(function() {
                var companyName = $(this).find('td:eq(4)').text().toLowerCase(); // Index 4 is the Company Name column
                var matches = companyName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#myTableEr thead').hide(); 
                $('#deleteList2').hide();
                $('#count1').hide();
                $('#paginationButtons').hide();
            } else {
                $('#noRecordsFound').hide();
                $('#myTableEr thead').show(); 
                $('#deleteList2').show();
                $('#count1').show();
                $('#paginationButtons').show();
            }
        });
    });
</script>

                            <?php
                            if (isset($this->data['overallEmployers'][0]['company_name'])) {
                                ?>

<div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>

                                <table class="table" id="myTableEr">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Company Name</th>
                                            <th scope="col">Company Number</th>
                                            <th scope="col">Contact Person Name</th>
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
                                                <td>
                                                    <form method="post"
                                                        action="<?php echo baseUrl . 'Admin/deleteOverallEmployers'; ?>"
                                                        id="form_<?= $value['id']; ?>">
                                                        <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                                            onchange="updateDeleteButton2(this)">
                                                </td>
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
                                                        <?php echo $value['company_name']; ?>
                                                        <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                            <a href="<?php echo $value['companyLocationUrl']; ?>"
                                                                class="px-2 text-danger" target="_blank"><i class='bx bx-map'></i></a>
                                                        <?php } ?>
                                                    </p>
                                                </td>
                                                <td><a href="#" class="text-primary">
                                                        <?php echo $value['company_mobile_number']; ?>
                                                    </a></td>
                                                <td>
                                                    <?php echo $value['name']; ?>
                                                </td>
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
                                                <td class="d-flex py-3">
                                                    <a class="mx-1"
                                                        href="<?php echo baseUrl . "admin/viewEmployer/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " id="count1" style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <?php
    if (count($this->data['overallEmployers']) > 0) {
    ?>
        <button type="submit" name="submit" id="deleteList2" class="btn btn-danger disabled"
            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
        </form>
    <?php
    }
    ?>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- Pagination -->
            <script>
                var table = document.getElementById('myTableEr');
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
                function previousPage() {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function nextPage() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function updatePaginationButtons() {
                    var buttonsHtml = '';

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

<!-- Filter -->
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
                </div>
                <div class="card" id="printEmployer">
                    <div class="card-body">
                        <!-- <h5 class="card-title">Employer Details</h5> -->

                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/verifyEmployer" ?>" method="post">
                            <?php
                            foreach ($this->data['manageEmployer'] as $key => $value) {
                                ?>
                                <p><h5 style="color:blue"><b>Employer ID :
                                    <?php echo $value['erid'] ?></b></h5>
                                </p>
                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Company Name</label>
                                    <input type="text" class="form-control" id="inputName5"
                                        value="<?php echo $value['company_name'] ?>" readonly name="name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Company Number</label>
                                    <input type="number" class="form-control" id="inputNumber5" name="mobile"
                                        value="<?php echo $value['company_mobile_number'] ?>" readonly required
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email"
                                        value="<?php echo $value['company_email'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password"
                                            value='<?php echo $value['password']; ?>' readonly>
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                            <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" name="address"
                                        value="<?php echo $value['street_address'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="landmark"
                                        value="<?php echo $value['Landmark'] ?>" readonly>
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
                                        <option selected value="Tamil Nadu">Tamil Nadu</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPincode" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" id="inputPincode"
                                        value="<?php echo $value['pincode'] ?>" readonly name="pincode">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLogo" class="form-label">Logo</label>

                                    <?php if ($value['company_logo'] == "None") { ?>
                                        <p class="form-control">-</p>
                                    <?php } else { ?>
                                        <a href="<?php echo $value['company_logourl']; ?>" class="form-control text-primary"
                                            target="blank">
                                            <?php echo $value['company_logo']; ?>
                                        </a>
                                    <?php } ?>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputWebsite" class="form-label">Website</label>
                                    <?php if ($value['companywebsite'] != null) { ?>
                                        <a href="<?php echo $value['companywebsite']; ?>" class=" text-primary form-control"
                                            target="blank">
                                            <?php echo $value['companywebsite']; ?>
                                        </a>
                                    <?php } else { ?>
                                        <p class="form-control">-</p>
                                    <?php } ?>
                                </div>

                                <div class="col-md-6">
                                    <?php if ($value['companyLocationUrl'] != null) { ?>
                                        <label for="locationUrl" class="form-label">Location URL</label>
                                        <a href="<?php echo $value['companyLocationUrl']; ?>" class=" text-primary form-control"
                                            target="blank">Location Map <i class='bx bx-map'></i></a>
                                    <?php } else { ?>
                                        <p class="form-control">-</p>
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
                                        value="<?php echo $value['role'] ?>" readonly name="role" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5"
                                        value="<?php echo $value['mobile_number'] ?>" readonly name="mobile1" required
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
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
                                                    <label class="form-check-label" for="gridRadios2"> 2.ADDRESS </label>
                                                    <?php if (!empty($value['companyLocationUrl'])) { ?>
                                                        <a href="<?php echo $value['companyLocationUrl']; ?>" class="px-2 text-danger"
                                                            target="_blank"><i class='bx bx-map'></i></a>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                    </fieldset>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="floatingTextarea" name="verificationRemarks"
                                                style="height: 100px;"
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
                                                    Relieved
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="floatingTextarea" name="verificationRemarks"
                                                style="height: 100px;"></textarea>
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
                                            <textarea class="form-control" id="floatingTextarea" name="deleteRequestRemarks"
                                                style="height: 100px;"></textarea>
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
                                    <button type="submit" class="btn btn-success" id="verifyButton">Verified</button>
                                    <button type="submit" class="btn btn-danger" id="pendingButton">Pending</button>
                                    <button onClick="window.print()" type="button" class="btn btn-dark printhide">Print</button>
                                </div>
                                <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </section>

            <!-- <script>
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
            </script> -->

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
        } elseif ($method == 'viewEmployer') {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('employerslist').classList.add('active');
                document.getElementById('employeroveralllist').classList.add('active');
            </script>

            <section>
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

                        </div><br>
                        <h5 style="color:#C6334B">Contact Person Details</h5>

                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th class="col-3" scope="col">Name</th>
                                    <th class="col-3" scope="col">Mobile number</th>
                                    <th class="col-3" scope="col">Role</th>
                                    <th class="col-3" scope="col">Email-id</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($this->data['manageEmployer'] as $key => $value) {
                                    ?>
                                    <tr>
                                        <td> <?php echo $value['name'] ?> </td>
                                        <td> <?php echo $value['mobile_number'] ?> </td>
                                        <td> <?php echo $value['role'] ?> </td>
                                        <td> <?php echo $value['email'] ?> </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table><br>

                        <h5 style="color:#C6334B">Company Details</h5>

                        <table class="table table-striped mt-2">
                            <thead>
                                <tr>
                                    <th class="col-3" scope="col">Mobile Number</th>
                                    <th class="col-3" scope="col">Mail ID</th>
                                    <th class="col-3" scope="col">Password</th>
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
                                            <div class="input-group">
                                                <input type="password" class="form-control" id="password" name="password"
                                                    value='<?php echo $value['password']; ?>' readonly>
                                                <button type="button" class="btn btn-outline-secondary"
                                                    onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                </button>
                                            </div>
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
                        </table><br>

                        <h5 style="color:#C6334B">Company Address</h5>

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
                                        <td><?php echo $value['City'] ?></td>
                                        <td><?php echo $value['district'] ?></td>
                                        <td>Tamil Nadu</td>
                                        <td><?php echo $value['pincode'] ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table><br>

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
                                                    target="blank">Location <i class='bx bx-map'></i></a></td>
                                        <?php } else { ?>
                                            <td> - </td>
                                        <?php } ?>

                                        <?php if ($value['company_logo'] == "None") { ?>
                                            <td> - </td>

                                        <?php } else { ?>
                                            <td> <a href="<?php echo $value['company_logourl']; ?>" class=" text-primary"
                                                    target="blank">
                                                    <?php echo $value['company_logo'] ?>
                                                </a> </td>
                                        <?php } ?>

                                        <?php if ($value['companywebsite'] != null) { ?>
                                            <td> <a href="<?php echo $value['companywebsite']; ?>" class=" text-primary"
                                                    target="blank">
                                                    <?php echo $value['companywebsite'] ?>
                                                </a></td>
                                        <?php } else { ?>
                                            <td> -</td>

                                        <?php } ?>

                                        <?php if ($value['companypan'] != null) { ?>
                                            <td>
                                                <?php echo $value['companypan'] ?>
                                            </td>
                                        <?php } else { ?>
                                            <td> - </td>

                                        <?php } ?>

                                        <?php if ($value['companygst'] != null) { ?>
                                            <td>
                                                <?php echo $value['companygst'] ?>
                                            </td>
                                        <?php } else { ?>
                                            <td> - </td>

                                        <?php } ?>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table><br>

                        <h5 style="color:#C6334B">Job Details</h5>

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
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $value['jobCategory'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['jobSubCategory'] ?>
                                        </td>
                                        <td><a href="<?php echo $value['locationUrl'] ?>" class=" text-primary" target="blank">
                                                <?php echo $value['location'] ?> <i class='bx bx-map'></i>
                                            </a>
                                        </td>
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
                        </table><br>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Experience</th>
                                    <th scope="col">Number of Openings</th>
                                    <th scope="col">Job Description</th>
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
                                            </a>
                                        </td>
                                        <td>
                                            <?php echo $twelveHourTime ?>
                                        </td>
                                        <td>
                                            <?php echo $value['experience'] ?>
                                        </td>
                                        <td>
                                            <?php echo $value['number_of_openings'] ?>
                                        </td>
                                        <td>
                                        <div class="overflow-auto" style="max-height: 400px; max-width: 300px;">
                                                    <?php echo $value['description'] ?>
                                                    </div>
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
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="pt-4 pb-2">
                            <h5 class="card-title text-center pb-0 fs-4">Create New Candidate</h5>
                        </div>

                        <form class="row g-3 needs-validation" novalidate
                            action="<?php echo baseUrl . "admin/employeeRegistration" ?>" method="post">
                            <div class="col-12">
                                <label for="yourName" class="form-label">Candidate Name <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" id="yourName" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="yourEmail" class="form-label">Candidate Email </label>
                                <input type="email" name="email" class="form-control" id="yourEmail">
                                <div class="invalid-feedback">Please, enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="phonenumber" class="form-label">Candidate Mobile Number <span
                                        class="text-danger">*</span></label>
                                <input type="number" name="phonenumber" class="form-control" id="phonenumber" required
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                <div class="invalid-feedback">Please, enter mobile number!</div>
                            </div>

                            <div class="col-12">
                                <label for="phonenumber1" class="form-label">Emergency Mobile Number</label>
                                <input type="number" name="phonenumber1" class="form-control" id="phonenumber1"
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                <div class="invalid-feedback">Please, enter mobile number!</div>
                            </div>

                            <div class="col-12">
                                <label for="createpassword" class="form-label">Create Password <span
                                        class="text-danger">*</span></label>
                                <div class="input-group has-validation">
                                    <input type="password" name="createpassword" class="form-control" id="createpassword"
                                        required>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="togglePasswordVisibility('createpassword', 'visibilityIcon')">
                                        <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                    </button>
                                    <div class="invalid-feedback">Please, enter new password!</div>
                                </div>
                                <div class="text-secondary" style="font-size:14px;margin-top:5px; display:none;"
                                    id="passwordmessage">
                                    Enter the date of birth as password in DDMMYYYY format(01051996).
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="confirmpassword" class="form-label">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <input type="text" name="cmpassword" class="form-control" id="confirmpassword" required>
                                <div class="invalid-feedback">Please, retype the password!</div>
                                <div class="text-secondary" style="font-size:14px;margin-top:5px; display:none;"
                                    id="passwordmessage">
                                    Enter the date of birth as password in DDMMYYYY format(01051996).
                                </div>
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

            <script>
                // Password visibility
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

                // Password message
                document.getElementById("createpassword").onfocus = function () {
                    document.getElementById("passwordmessage").style.display = "block";
                }
                document.getElementById("createpassword").onblur = function () {
                    document.getElementById("passwordmessage").style.display = "none";
                }
            </script>

            <?php
        } elseif ($method == "basicdetails") {
            ?>

            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section class="Multi Columns Form">
                <div class="pagetitle" style="padding-bottom:20px; padding-top:15px;">
                    <h1>Candidate Details</h1>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title" style="padding-bottom:20px;">Basic Details</h5>
                            <div>
                                <a href="<?php echo baseUrl . "admin/newCandidateList" ?>"> <button type="button"
                                        class="btn btn-info mt-3"><i class="bi bi-arrow-left"></i></button></a>
                            </div>
                        </div>

                        <form class="row g-3 needs-validation" novalidate name="applicationform"
                            enctype="multipart/form-data" method="post" onsubmit="return group()"
                            action='<?php echo baseUrl . "Admin/updateBasicDetails" ?>'>

                            <?php
                            foreach ($basicDetails as $key => $value) {
                                ?>

                                <input type="hidden" class="form-control" id="id" value="<?php echo $value['id']; ?>" name="id">
                                <div class="col-12">
                                    <label for="Name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" value="<?php echo $value['name']; ?>"
                                        name="name" oninput="validateName(this)" required>
                                    <div id="name_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="emailid" class="form-label">Email</label><br>
                                    <input type="text" class="form-control" id="email" value="<?php echo $value['email']; ?>"
                                        name="email">
                                    <div id="emailid_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password"
                                            value="<?php echo $value['password']; ?>" name="password" required>
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                            <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                        </button>
                                    </div>
                                    <div id="password_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="phonenumber" class="form-label">Mobile Number <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="phonenumber"
                                        value="<?php echo $value['phonenumber']; ?>" name="phonenumber" pattern="[0-9]{1,15}"
                                        maxlength="15" oninput="validatePhoneNumber1(this)" required
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                    <div id="phonenumber_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="phonenumber1" class="form-label">Emergency Mobile Number</label>
                                    <input type="number" class="form-control" id="phonenumber1"
                                        value="<?php echo !empty($value['phonenumber1']) ? $value['phonenumber1'] : ''; ?>"
                                        name="phonenumber1" pattern="[0-9]{1,15}" maxlength="15"
                                        oninput="validatePhoneNumber2(this)"
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                </div>

                                <div class="col-md-6">
                                    <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="dateofbirth"
                                        value="<?php
                                                        if (!empty($value['dateofbirth'])) {
                                                            $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                            echo $formattedDateOfBirth;
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?>" name="dateofbirth" required>
                                    <div id="dob_error" style="color: red;"></div>
                                    <p class="text-secondary"
                                        style="color:red;textalign:center;font-size:small;margin-top:20px; display:none;"
                                        id="expmesssage">Enter the DOB in DD-MM-YYYY format</p>
                                </div>

                                <div class="col-md-6">
                                    <label for="age" class="form-label">Age <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="age"
                                        value="<?php echo ($value['age']) ? $value['age'] : ''; ?>" name="age" readonly
                                        required>
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
                                    <label for="maritalstatus" class="form-label">Marital Status </label>

                                    <select class="form-control" id="maritalstatus"
                                        value="<?php echo isset($value['maritalStatus']) ? $value['maritalStatus'] : ''; ?>"
                                        name="maritalstatus">
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
                                    <label for="Door no" class="form-label">Door no / Building Name </label>
                                    <input type="text" class="form-control" id="doorno"
                                        value="<?php echo isset($value['buildingName']) ? $value['buildingName'] : ''; ?>"
                                        name="doorno">
                                    <div id="doorno_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="street address" class="form-label">Street Address </label>
                                    <input type="text" class="form-control" id="streetaddress"
                                        value="<?php echo isset($value['address']) ? $value['address'] : ''; ?>"
                                        name="streetaddress">
                                    <div id="streetaddress_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="landmark" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="landmark"
                                        value="<?php echo isset($value['landmark']) ? $value['landmark'] : ''; ?>"
                                        name="landmark">
                                    <div id="landmark_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="pincode" class="form-label">Pincode </label>
                                    <input type="text" class="form-control" id="pincode"
                                        value="<?php echo ($value['pincode']) ? $value['pincode'] : ''; ?>" name="pincode"
                                        maxlength="6" oninput="validatePincode(this)">
                                    <div id="pincode_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="district" class="form-label">District </label>

                                    <select class="form-control" id="district"
                                        value="<?php echo isset($value['district']) ? $value['district'] : ''; ?>"
                                        name="district">
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
                                    <label for="aadharfrontphoto" class="form-label">Aadhaar Front Photo </label>
                                    <input type="text" class="form-control" name="oldaadharfront"
                                        value="<?php echo $value['aadharfront_filename']; ?>" hidden>
                                    <input type="file" class="form-control" id="aadharfrontphoto" name="aadharfrontphoto"
                                        accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                        application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        hidden>
                                    <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelaf" for="aadharfrontphoto" class="form-control"
                                            style="cursor:pointer">Choose File</label>
                                        <a href="<?php echo $value['aadhar_front']; ?>" class="filelink ps-2 pt-1"
                                            target="blank" id="existfileaf">
                                            <?php echo $value['aadharfront_filename']; ?>
                                        </a>
                                    </div>
                                    <div id="aadharfrontphoto_error" style="color: red;"></div>
                                    <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF
                                        Maximum size: 2MB</p>
                                </div>

                                <div class="col-md-6">
                                    <label for="aadharbackphoto" class="form-label">Aadhaar Back Photo </label>
                                    <input type="text" class="form-control" name="oldaadharback"
                                        value="<?php echo $value['aadharback_filename']; ?>" hidden>
                                    <input type="file" class="form-control" id="aadharbackphoto" name="aadharbackphoto"
                                        accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                        application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document" hidden>
                                    <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelab" for="aadharbackphoto" class="form-control"
                                            style="cursor:pointer">Choose File</label>
                                        <a href="<?php echo $value['aadhar_back']; ?>" class="filelink ps-2 pt-1" target="blank"
                                            id="existfileab">
                                            <?php echo $value['aadharback_filename']; ?>
                                        </a>
                                    </div>
                                    <div id="aadharbackphoto_error" style="color: red;"></div>
                                    <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG, PDF
                                        Maximum size: 2MB</p>
                                </div>

                                <div class="col-md-6">
                                    <label for="aadharnumber" class="form-label">Aadhaar number </label>
                                    <input type="text" class="form-control" id="aadharnumber"
                                        value="<?php echo ($value['aadharnumber']) ? $value['aadharnumber'] : ''; ?>"
                                        name="aadharnumber" maxlength="14" pattern="\d{4} \d{4} \d{4}"
                                        oninput="validateAadharNumber(this)">
                                    <div id="aadharnumber_error" style="color: red;"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="photo" class="form-label">Photo </label>
                                    <input type="text" class="form-control" name="oldprofilephoto"
                                        value="<?php echo $value['photo_filename']; ?>" hidden>
                                    <input type="file" class="form-control" id="photo" name="photo"
                                        accept="image/png ,image/jpg, image/jpeg" hidden>
                                    <div class="uploadedfile" style="display:flex;">
                                        <label id="file-input-labelpp" for="photo" class="form-control"
                                            style="cursor:pointer">Choose File</label>
                                        <a href="<?php echo $value['photo']; ?>" class="filelink ps-2 pt-1" target="blank"
                                            id="existfilepp">
                                            <?php echo $value['photo_filename']; ?>
                                        </a>
                                    </div>
                                    <div id="photo_error" style="color: red;"></div>

                                    <input type="number" class="form-control" value="1" name="bdsubmit" hidden>

                                    <p style="color:grey;textalign:center;font-size:small;margin-top:20px">PNG, JPG, JPEG
                                        Maximum size: 2MB</p>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>

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

                function validatePhoneNumber2(input) {
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

            <!-- DATE OF BIRTH VIEW -->
            <script>
                document.getElementById("dateofbirth").onfocus = function () {
                    document.getElementById("expmesssage").style.display = "block";
                }
                document.getElementById("dateofbirth").onblur = function () {
                    document.getElementById("expmesssage").style.display = "none";
                }
            </script>

            <!-- AGE CALCULATION -->
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    document.getElementById('dateofbirth').addEventListener('input', function () {
                        var dob = parseDate(this.value);

                        if (dob) {
                            var age = calculateAge(dob);
                            document.getElementById('age').value = age;
                        } else {
                            document.getElementById('age').value = ''; // Clear age if date of birth is empty
                        }
                    });
                });

                function parseDate(dateString) {
                    if (!dateString) {
                        return null;
                    }
                    var parts = dateString.split('-');
                    var firstPart = parseInt(parts[0]);
                    var secondPart = parseInt(parts[1]);
                    var thirdPart = parseInt(parts[2]);

                    if (firstPart <= 31 && secondPart <= 12) {
                        return new Date(thirdPart, secondPart - 1, firstPart);
                    } else {
                        return new Date(firstPart, secondPart - 1, thirdPart);
                    }
                }
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
                }
            </script>

            <?php
        } elseif ($method == "educationTable") {
            ?>

            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section class="usertable ">
                <div class="pagetitle" style="padding-bottom:20px; padding-top:15px;">
                    <h1>Education Details</h1>
                </div>

                <div class="card" id="addeduform">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title" style="padding-bottom:20px;">Add Education Details</h5>

                            <div>
                                <a href="<?php echo baseUrl . "admin/newCandidateList" ?>"> <button type="button"
                                        class="btn btn-info mt-3 "><i class="bi bi-arrow-left"></i></button></a>
                            </div>
                        </div>

                        <form class="row g-3" autocomplete="off" novalidate name="educationform" method="post"
                            enctype="multipart/form-data" onsubmit="return validateForm()"
                            action="<?php echo baseUrl . "Admin/insertEducationForm" ?>">

                            <input type="hidden" class="form-control" id="seekerId" value="<?php echo $candidateId; ?>"
                                name="seekerId">

                            <div class="col-12 autocomplete">
                                <label for="qualification" class="form-label">Educational Qualification</label>
                                <input id="qualification" class="form-control" type="text" name="qualification"
                                    onchange="toggleFields()">
                                <div id="qualification_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="department-group" style="display: none;">
                                <label for="department" class="form-label">Specialization</label>
                                <input type="text" class="form-control" id="department" name="department">
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
                                <input type="text" class="form-control" id="school" name="school">
                                <div id="school_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="percentage-group" style="display: none;">
                                <label for="percentage" class="form-label">Percentage</label>
                                <input type="number" class="form-control" id="percentage" id="school" name="percentage"
                                    onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                <div id="percentage_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="year-group" style="display: none;">
                                <label for="year_passed" class="form-label">Year of Passed Out</label>
                                <input type="number" class="form-control" id="year_passed" name="year_passed" maxlength="4"
                                    pattern="\d{4}" onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                <div id="year_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_10th-group" style="display: none;">
                                <label for="certificate_10th" class="form-label">10th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_10th" name="certificate_10th"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_10th_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_12th-group" style="display: none;">
                                <label for="certificate_12th" class="form-label">12th Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_12th" name="certificate_12th"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_12th_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_dip-group" style="display: none;">
                                <label id="additionalFieldLabeldip" for="certificate_dip" class="form-label">Diploma
                                    Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_dip" name="certificate_dip"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_dip_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_ug-group" style="display: none;">
                                <label id="additionalFieldLabelug" for="certificate_ug" class="form-label">UG Degree
                                    Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_ug" name="certificate_ug"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_ug_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_pg-group" style="display: none;">
                                <label id="additionalFieldLabelpg" for="certificate_pg" class="form-label">PG Certificate
                                    Upload</label>
                                <input type="file" class="form-control" id="certificate_pg" name="certificate_pg"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_pg_error" class="text-danger"></div>
                            </div>

                            <div class="col-md-6" id="certificate_doctorate-group" style="display: none;">
                                <label id="additionalFieldLabeldoc" for="certificate_doctorate" class="form-label">Doctorate
                                    Certificate Upload</label>
                                <input type="file" class="form-control" id="certificate_doctorate"
                                    name="certificate_doctorate"
                                    accept="image/png ,image/jpg, image/jpeg, application/pdf, 
                                    application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                                <div id="certificate_doctorate_error" class="text-danger"></div>
                            </div>

                            <input type="number" class="form-control" value="1" name="edusubmit" hidden>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Education autocomplete -->
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
                    else if (selectedValue === "B.E" || selectedValue === "B.A" || selectedValue === "B.COM" || selectedValue === "B.ED" || selectedValue === "B.LIT" || selectedValue === "B.TECH" || selectedValue === "BCA" || selectedValue === "BBA" || selectedValue === "B.SC" || selectedValue === "BSW" || selectedValue === "BFA" || selectedValue === "B.Arch" || selectedValue === "B.N" || selectedValue === "BCS" || selectedValue === "LLB" || selectedValue === "BDS" || selectedValue === "B.Pharm" || selectedValue === "BBM") {
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
                    "B.A", "B.COM", "B.ED", "B.E", "B.LIT", "B.SC", "BBA", "BCA", "B.TECH", "BSW", "BFA", "B.Arch", "B.N", "BCS", "LLB", "BDS", "B.Pharm", "BBM",
                    "M.A", "M.COM", "M.ED", "M.E", "M.LIT", "M.SC", "MBA", "MCA", "M.TECH", "MSW", "MFA", "M.Arch", "M.N", "MCS", "LLM", "MBBS", "M.Pharm",
                    "MPhil", "Ph.D", "DBA", "Ed.D", "MD", "DMD", "DVM"];

                autocomplete(document.getElementById("qualification"), countries);

            </script>

            <script>
                function addeduformfunction() {
                    document.getElementById("addeduform").style.display = "block";
                }
            </script>

            <?php
        } elseif ($method == "experienceTable") {
            ?>

            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle" style="padding-bottom:20px; padding-top:15px;">
                    <h1>Experience Details</h1>
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title" style="padding-bottom:20px;">Add Experience Details</h5>
                                <div>
                                    <a class="" href="<?php echo baseUrl . "Admin/newCandidateList" ?>">
                                        <button type="button" class="btn btn-info mt-3 "><i
                                                class="bi bi-arrow-left"></i></button></a>
                                </div>
                            </div>

                            <form class="row g-3 needs-validation" novalidate name="experienceform" method="post"
                                onsubmit="return validateexpForm()"
                                action=" <?php echo baseUrl . "Admin/insertExperienceForm" ?>">

                                <input type="hidden" class="form-control" id="seekerId" value="<?php echo $candidateId; ?>"
                                    name="seekerId">

                                <div class="col-6">
                                    <label for="category" class="form-label">Category <span
                                            class="text-danger">*</span></label>
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
                                    <label for="newcategory" class="form-label"> New category </label>
                                    <input class="form-control" id="newcategory" name="newcategory">
                                    <div id="newcategory_error" class="text-danger error"></div>
                                    <input id="categoryothers" name="categoryothers" value="1" hidden>
                                </div>

                                <div class="col-md-6">
                                    <label for="subcategory" class="form-label">Subcategory </label>
                                    <input class="form-control" id="subcategory" name="subcategory">
                                </div>

                                <div class="col-md-6">
                                    <label for="company name" class="form-label">Company Name </label>
                                    <input type="text" class="form-control" id="companyname" name="companyname">
                                    <div id="companyname_error" class="text-danger error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="company location" class="form-label">Company Location</label>
                                    <input type="text" class="form-control" id="companylocation" name="companylocation">
                                    <div id="companylocation_error" class="text-danger error"></div>
                                </div>

                                <div class="col-md-6">
                                    <div class="experience-container">
                                        <label for="expYear" class="form-label">Experience <span
                                                class="text-danger">*</span></label>
                                        <div class="d-md-flex">
                                            <label for="fromDate" class="pt-1 pe-2">From : </label>
                                            <div class="col-md-3  me-2">
                                                <input type="text" class="form-control" id="fromDate" name="fromDate"
                                                    required>
                                                <div id="experienceexp_error" class="text-danger error"></div>
                                                <p class="text-secondary"
                                                    style="color:red;textalign:center;font-size:small;margin-top:20px; display:none;"
                                                    id="expmesssage">DD-MM-YYYY or YYYY</p>
                                            </div>
                                            <label for="toDate" class="pt-1 px-2">To : </label>
                                            <div class="col-md-3">
                                                <input type="text" class="form-control" id="toDate" name="toDate" required>
                                                <div id="experienceexpmonth_error" class="text-danger error"></div>
                                                <p class="text-secondary"
                                                    style="color:red;textalign:center;font-size:small;margin-top:20px; display:none;"
                                                    id="expmesssage1">DD-MM-YYYY or YYYY</p>
                                            </div>
                                            <input type="checkbox" id="till_now" name="till_now" class="ms-3 px-2">
                                            <label for="toDate" class="pt-1 px-2">Till now</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Total duration </label>
                                    <p class="form-control" id="result"><span id="years"></span> Years & <span id="months">
                                        </span> Months</p>
                                </div>

                                <div class="col-md-6">
                                    <label for="role" class="form-label">Role in the Company </label>
                                    <input type="text" class="form-control" id="role" name="role">
                                    <div id="role_error" class="text-danger error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="mobilenumber" class="form-label">Company Mobile Number </label>
                                    <input type="number" class="form-control" id="company_mobilenum"
                                        name="company_mobilenum" pattern="[0-9]{1,15}" maxlength="10"
                                        oninput="validatePhoneNumber(this)"
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                    <div id="compmobile_error" class="text-danger error"></div>
                                </div>

                                <h5 class="card-title">Previous Job's reference details</h5>

                                <div class="col-md-6">
                                    <label for="Name" class="form-label">Name </label>
                                    <input type="text" class="form-control" id="nameofemployer" name="nameofemployer"
                                        oninput="validateName1(this)">
                                    <div id="name_error" class="text-danger error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="number" class="form-label">Mobile Number </label>
                                    <input type="number" class="form-control" id="number" name="number"
                                        pattern="[0-9]{1,10}" maxlength="10" oninput="validatePhoneNumber(this)"
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                    <div id="mobilenum_error" class="text-danger error"></div>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email-Id </label>
                                    <input type="text" class="form-control" id="emailid" name="emailid">
                                    <div id="emailid_error" class="text-danger error"></div>
                                </div>

                                <input type="number" class="form-control" value="1" name="expsubmit" hidden>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                </div>
            </section>

            <script>
                function validateName1(input) {
                    input.value = input.value.replace(/[0-9]/g, '');
                }
            </script>

            <!-- TOTAL DURATION CALCULATION -->
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
                        var formattedDate = formatDate(today);
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

                    var toDateInput = document.getElementById('toDate');
                    var tillNowCheckbox = document.getElementById('till_now');

                    if (tillNowCheckbox.checked) {
                        var formattedDate = formatDate(today);
                        toDateInput.value = formattedDate;
                    }
                    toDateInput.disabled = tillNowCheckbox.checked;
                    updateDateDifference();
                }

                window.onload = function () {
                    updateDateDifference();
                };

                function formatDate(date) {
                    var dd = String(date.getDate()).padStart(2, '0');
                    var mm = String(date.getMonth() + 1).padStart(2, '0'); // January is 0!
                    var yyyy = date.getFullYear();

                    return dd + '-' + mm + '-' + yyyy;
                }
            </script>

            <!-- WORK STATUS -->
            <script>
    <?php if ($experienceDetails[0]['workStatus'] == '0') { ?>
        document.getElementById("expTable").style.display = "block";
        document.getElementById("noexperience").style.display = "none";
    <?php } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
        document.getElementById("expTable").style.display = "none";
        document.getElementById("noexperience").style.display = "block";
    <?php } ?>
</script>

<!-- Total duration calculation -->
<script>
                document.getElementById('fromDate').addEventListener('input', updateDateDifference);
                document.getElementById('toDate').addEventListener('input', updateDateDifference);
                document.getElementById('till_now').addEventListener('change', updateToDate);

                function updateDateDifference() {
                    var fromDate = parseDate(document.getElementById('fromDate').value);
                    var toDate = parseDate(document.getElementById('toDate').value);

                    var tillNowChecked = document.getElementById('till_now').checked;

                    document.getElementById('toDate').disabled = tillNowChecked;

                    if (tillNowChecked) {
                        var today = new Date();
                        var formattedDate = formatDate(today);
                        document.getElementById('toDate').value = formattedDate;
                    }

                    if (fromDate && toDate) {
                        var yearsDiff = toDate.getFullYear() - fromDate.getFullYear();
                        var monthsDiff = 0;

                        if (toDate.getMonth() < fromDate.getMonth() || (toDate.getMonth() === fromDate.getMonth() && toDate.getDate() < fromDate.getDate())) {
                            yearsDiff--;
                            monthsDiff = (12 - fromDate.getMonth()) + toDate.getMonth();
                        } else {
                            monthsDiff = toDate.getMonth() - fromDate.getMonth();
                        }

                        document.getElementById('years').textContent = yearsDiff;
                        document.getElementById('months').textContent = monthsDiff;
                    } else {
                        document.getElementById('years').textContent = '';
                        document.getElementById('months').textContent = '';
                    }
                }

                function updateToDate() {
                    var today = new Date();
                    today.setHours(0, 0, 0, 0);

                    var toDateInput = document.getElementById('toDate');
                    var tillNowCheckbox = document.getElementById('till_now');

                    if (tillNowCheckbox.checked) {
                        var formattedDate = formatDate(today, true);
                        toDateInput.value = formattedDate;
                    }

                    toDateInput.disabled = tillNowCheckbox.checked;
                    updateDateDifference();
                }

                window.onload = function () {
                    updateDateDifference();
                };

                function parseDate(dateString) {
                    var parts = dateString.split('-');
                    if (parts.length === 1) {
                        // If only year is provided
                        var year = parseInt(parts[0], 10);
                        return new Date(year, 0, 1); // Assume January 1st of the year
                    } else if (parts.length === 3) {
                        // If full date is provided
                        var year = parseInt(parts[2], 10);
                        var month = parseInt(parts[1], 10) - 1;
                        var day = parseInt(parts[0], 10);
                        return new Date(year, month, day);
                    } else {
                        // Invalid format
                        return null;
                    }
                }

                function formatDate(date) {
                    var dd = String(date.getDate()).padStart(2, '0');
                    var mm = String(date.getMonth() + 1).padStart(2, '0'); // January is 0!
                    var yyyy = date.getFullYear();

                    return dd + '-' + mm + '-' + yyyy;
                }
            </script>

            <script>
                document.getElementById("fromDate").onfocus = function () {
                    document.getElementById("expmesssage").style.display = "block";
                }
                document.getElementById("fromDate").onblur = function () {
                    document.getElementById("expmesssage").style.display = "none";
                }

                document.getElementById("toDate").onfocus = function () {
                    document.getElementById("expmesssage1").style.display = "block";
                }
                document.getElementById("toDate").onblur = function () {
                    document.getElementById("expmesssage1").style.display = "none";
                }
            </script>

            <?php

        } elseif ($method == "areaOfIntrestTable") {
            ?>

            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle" style="padding-bottom:20px; padding-top:15px;">
                    <h1>Area of Job Interest</h1>
                </div>

                <div class="card" id="addinterestform">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title" style="padding-bottom:20px;">Add Job Interest</h5>
                            <div>
                                <a href="<?php echo baseUrl . "admin/newCandidateList" ?>"> <button type="button"
                                        class="btn btn-info mt-3 "><i class="bi bi-arrow-left"></i></button></a>
                            </div>
                        </div>
                        
                        <form class="row g-3" novalidate method="post" onsubmit="return validateAreaForm()"
                            enctype="multipart/form-data" action="<?php echo baseUrl . "Admin/insertAreaOfIntrest" ?>">

                            <input type="hidden" class="form-control" id="seekerId" value="<?php echo $candidateId; ?>"
                                name="seekerId">

                            <div class="col-md-6">
                                <label class="form-label" for="category">Category</label>
                                <select class="form-control" id="category" name="category" onchange="showHideOtherField()">
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

                            <div class="col-6" id="newcategory_group" style="display: none;">
                                <label for="newcategory" class="form-label"> New category </label>
                                <input class="form-control" id="newcategory" name="newcategory">
                                <div id="newcategory_error" class="text-danger error"></div>
                                <input id="categoryothers" name="categoryothers" value="1" hidden>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for=" subcategory">Subcategory</label>
                                <input type="text" class="form-control" id="subcategory" name="subcategory">
                                <div id="areasubcat_error" class="error"></div>
                            </div>

                            <div class="col-md-6" id="otherCategoryFields" style="display: none;">
                                <label for="customCategoryInput">Custom Category</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                                <label for="customSubcategoryInput">Custom Subcategory</label>
                                <input type="text" class="form-control" id="customSubcategoryInput"
                                    name="customSubcategoryInput">
                            </div>

                            <div class="col-md-6" id="customCategory" style="display: none;">
                                <label for="customCategoryInput">Category Name</label>
                                <input type="text" class="form-control" id="customCategoryInput" name="customCategoryInput">
                            </div>

                            <div class="col-md-6" id="customSubcategory" style="display: none;">
                                <label for="customSubcategoryInput"> Subcategory Name</label>
                                <input type="text" class="form-control" id="customSubcategoryInput"
                                    name="customSubcategoryInput">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="preferred-location">Preferred Location to work</label>
                                <select class="form-control" id="preferred-location" name="preferred-location">
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
                                <input class="form-control" id="description" name="description" rows="3">
                                <div id="areades_error" class="error"></div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="jobtype">Job Type</label>
                                <select class="form-control" id="jobtype" name="jobtype">
                                    <option value="">Select a Job Type</option>
                                    <option value="fulltime">Full Time</option>
                                    <option value="parttime">Part Time</option>
                                </select>
                                <div id="areajob_error" class="error"></div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="expected-salary">Expected Salary</label>
                                <input type="text" class="form-control" id="expected-salary" name="expected-salary">
                                <div id="areasalary_error" class="error"></div>
                            </div>

                            <input type="number" class="form-control" value="1" name="areasubmit" hidden>

                            <div class="col-12">
                                <label class="form-label" for="file">Upload Resume</label>
                                <input type="file" class="form-control" name="resumeFile" id="idresume" accept=".pdf,.doc">
                                <div id="resume_error" class="text-danger"></div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Name validation -->
            <script>
                function validateName1(input) {
                    input.value = input.value.replace(/[0-9]/g, '');
                }
            </script>

<!-- Display category -->
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

                // Saving category format
                function formatCategoryInput() {
              var newCategoryInput = document.getElementById("newcategory");
              newCategoryInput.value = newCategoryInput.value.replace(/\s/g, '-');
            }
            document.getElementById("newcategory").addEventListener("input", formatCategoryInput);
            </script>

<!-- Calculate total duration -->
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
                        var formattedDate = formatDate(today);
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

                    var toDateInput = document.getElementById('toDate');
                    var tillNowCheckbox = document.getElementById('till_now');

                    if (tillNowCheckbox.checked) {
                        var formattedDate = formatDate(today);
                        toDateInput.value = formattedDate;
                        toDateInput.disabled = true;
                    } else {
                        toDateInput.disabled = false;
                    }
                    updateDateDifference();
                }

                window.onload = function () {
                    updateDateDifference();
                };

                function formatDate(date) {
                    var dd = String(date.getDate()).padStart(2, '0');
                    var mm = String(date.getMonth() + 1).padStart(2, '0'); // January is 0!
                    var yyyy = date.getFullYear();

                    return dd + '-' + mm + '-' + yyyy;
                }
            </script>

            <script>
                function validateexpForm() {
                    clearErrorMessages();
                    var category = document.getElementById("category");
                    var newothercategory = document.getElementById("newcategory_group");
                    var subcategory = document.getElementById("subcategory");
                    var companyname = document.getElementById("companyname");
                    var companylocation = document.getElementById("companylocation");
                    var role = document.getElementById("role");
                    var compMobile = document.getElementById("company_mobilenum");

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
                    if (companyname.value === '') {
                        displayError('Company name must be filled out', 'companyname_error');
                        return false;
                    }
                    if (companylocation.value === '') {
                        displayError('Company location must be filled out', 'companylocation_error');
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
        } elseif ($method == "addSkillForm") {
            ?>

            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section class="Multi Columns Form">
                <div class="pagetitle" style="padding-bottom:20px; padding-top:15px;">
                    <h1>Skill Details</h1>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h5 class="card-title" style="padding-bottom:20px;">Add New Skill</h5>
                            <div>
                                <a href="<?php echo baseUrl . "admin/newCandidateList" ?>"> <button type="button"
                                        class="btn btn-info mt-3"><i class="bi bi-arrow-left"></i></button></a>
                            </div>
                        </div>

                        <form class="row g-3 needs-validation" novalidate method="post"
                            onsubmit="return validateSkillForm()" action="<?php echo baseUrl . "Admin/insertSkillForm" ?>">

                            <input type="hidden" class="form-control" id="seekerId" value="<?php echo $candidateId; ?>"
                                name="seekerId">

                            <div class="col-12">
                                <label class="form-label" for="skillname">Skill Name</label>
                                <input type="text" class="form-control" id="skillname" name="skillname">
                                <div id="sname_error" class="error"></div>
                            </div>

                            <div class="col-md-6">
                                <div class="experience-container">
                                    <label for="experience" class="form-label">Experience</label>
                                    <div class="d-flex">
                                        <select class="form-control" id="experience" name="experience">
                                            <option value=""> Select year </option>
                                            <?php for ($i = 0; $i <= 20; $i++): ?>

                                                <option value="<?php echo $i; ?>">
                                                    <?php echo $i; ?>
                                                    <?php echo $i !== 1 ? 'years' : 'year'; ?>
                                                </option>
                                            <?php endfor; ?>
                                            <option value="20+ "> 20+ Years </option>
                                        </select>
                                    </div>
                                    <div id="sexp_error" class="error"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label" for="skillLevel">Skill Level</label>
                                <select class="form-control" name="skilllevel" id="skilllevel">
                                    <option value="">Select Skill Level</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Advanced">Advanced</option>
                                </select>
                                <div id="slevel_error" class="error"></div>
                            </div>

                            <input type="number" class="form-control" value="1" name="areasubmit" hidden>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
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
                <div class="pagetitle" style="padding-bottom:10px; padding-top:15px;">
                    <h1>New Candidate List</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">New Candidate</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <?php
                            if (isset($this->data['unVerifiedEmployees'][0]['name'])) {
                                ?>

                                <h5 class="card-title">New Candidates<span></span></h5>

                                <table class="table" id="newList">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <!-- <th scope="col">Email</th> -->
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
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['eeid']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['phonenumber']; ?> </td>
                                                <!-- <td><a href="#" class="text-primary"> <?php echo $value['email']; ?> </a> </td> -->
                                                <td>
                                                    <?php
                                                    if (!empty($value['dateofbirth'])) {
                                                        $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                        echo $formattedDateOfBirth;
                                                    } else {
                                                        echo "-";
                                                    }
                                                    ?>
                                                </td>
                                                <td><span class="badge bg-danger">Pending</span></td>
                                                <td class="d-flex py-3">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">  Add Details
                                                        </button>
                                                        <ul class="dropdown-menu shadow-lg p-3 rounded" style="background-color:#b6bab8;" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/basicdetails/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success  my-1">
                                                                        <i class="bi bi-plus"></i> Basic Details</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/educationTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Education</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/experienceTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Experience</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/skillTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Skills</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/areaOfIntrestTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Job Interest</button>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <a class="mx-1"
                                                        href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-success d-flex">
                                                            <i class="bi bi-eye pe-1"></i>View</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger  d-flex" data-toggle="modal"
                                                        data-target="#deleteemployee"
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
                                            <?php echo $loopcount - 1; ?> </b></p>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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

<!-- Pagination -->
            <script>
                var table = document.getElementById('newList');
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;


                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }

                updatePaginationButtons();
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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                        <div class="d-sm-flex ">
                        <h5 class="card-title">Verified Candidates<span></span></h5>
                                <div class="filter pt-3 ms-5">
                                <input type="text" class="form-control" id="searchNameInput" placeholder="Search by Name">
</div>
                            </div>

                            <!-- Search option -->
                            <script>
    $(document).ready(function() {
        $('#searchNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#verifyTableCd tbody tr').filter(function() {
                var candidateName = $(this).find('td:eq(3)').text().toLowerCase(); // Index 4 is the Company Name column
                var matches = candidateName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#verifyTableCd thead').hide(); 
                $('#verifyCountCnd').hide();
                $('#paginationButtons').hide();
            } else {
                $('#noRecordsFound').hide();
                $('#verifyTableCd thead').show(); 
                $('#verifyCountCnd').show();
                $('#paginationButtons').show();
            }
        });
    });
</script>

                            <?php
                            if (isset($this->data['verifiedEmployees'][0]['name'])) {
                                ?>
                               
                               <div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>

                                <table class="table" id="verifyTableCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <!-- <th scope="col">Email</th> -->
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
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['eeid']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td class="text-primary"> <?php echo $value['phonenumber']; ?> </td>
                                                <!-- <td><a href="#" class="text-primary"> <?php echo $value['email']; ?> </a> </td> -->
                                                <td>
                                                    <?php
                                                    if (!empty($value['dateofbirth'])) {
                                                        $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                        echo $formattedDateOfBirth;
                                                    } else {
                                                        echo "-";
                                                    }
                                                    ?>
                                                </td>
                                                <td> <?php echo $value['verifiedBy']; ?> </td>
                                                <td class="d-flex py-3">
                                                    <a class=""
                                                        href="<?php echo baseUrl . "admin/manageCandidate/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button>
                                                    </a>
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
                                    <p class="text-end " id="verifyCountCnd" style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('verifyTableCd');
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));
                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['pendingEmployees'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Pending List<span></span></h5>

                                <table class="table" id="pendingCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <!-- <th scope="col">Email</th> -->
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
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['eeid']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td class="text-primary"> <?php echo $value['phonenumber']; ?> </td>
                                                <!-- <td><a href="#" class="text-primary"> <?php echo $value['email']; ?> </a> </td> -->
                                                <td>
                                                    <?php
                                                    if (!empty($value['dateofbirth'])) {
                                                        $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                        echo $formattedDateOfBirth;
                                                    } else {
                                                        echo "-";
                                                    }
                                                    ?>
                                                </td>
                                                <td> <?php echo $value['verificationRemarks']; ?> </td>
                                                <td> <span class="badge bg-danger">Pending</span> </td>
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

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('pendingCd');
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }

                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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
                </div>

                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['deleteEmployeeList'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Deleted List<span></span></h5>

                                <table class="table" id="deleteCd">
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
                                                <td><a href="#"> <?php echo $loopcount; ?>. </a></td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['eeid']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['phonenumber']; ?> </td>
                                                <td><a href="#" class="text-primary"> <?php echo $value['email']; ?> </a></td>
                                                <td>
                                                    <?php
                                                    if (!empty($value['dateofbirth'])) {
                                                        $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                        echo $formattedDateOfBirth;
                                                    } else {
                                                        echo "-";
                                                    }
                                                    ?>
                                                </td>
                                                <td> <?php echo $value['deleteRemarks']; ?> </td>
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
                                                            type="button" class="btn btn-success">View</button></a>
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

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
                                </div>
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

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('deleteCd');
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

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));
                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

            <?php
        } elseif ($method == "placedCandidates") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateplacedlist').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle">
                    <h1>Placed Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Candidate</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-sm-flex mb-4">
                <h5 class="card-title">Placed Candidate List<span></span></h5>           
                        <div class="mt-2 ms-5">
    <input type="text" class="form-control" id="searchNameInput" placeholder="Search by Candidate Name">
        </div>
                    </div>

                                        <!-- Search option -->
                                        <script>
    $(document).ready(function() {
        $('#searchNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#placedCd tbody tr').filter(function() {
                var candidateName = $(this).find('td:eq(2)').text().toLowerCase(); 
                var matches = candidateName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#placedCd thead').hide();
                $('#count').hide();
                $('#paginationButtons').hide();
            } else {
                $('#noRecordsFound').hide();
          $('#placedCd thead').show(); 
          $('#count').show();
                $('#paginationButtons').show();
            }
        });
    });
</script>

                <div class="col-12">
                        
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body mt-4">
                            <?php
                            if (isset($this->data['placedCandidates'][0]['name'])) {
                                ?>
                                
                                <div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>
                                <table class="table" id="placedCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Placed At</th>
                                            <!-- <th scope="col">Position</th> -->
                                            <th scope="col">Candidate Mobile Number</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['placedCandidates'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>" target="_blank"> <?php echo $value['cdid']; ?> </a> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td>
                                                    <?php echo $value['compName']; ?> / <a
                                                        href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>" target="_blank">
                                                        <?php echo $value['emprid']; ?> </a>
                                                </td>
                                                <!-- <td><?php echo $value['jobCategory'] ?></td> -->
                                                <td> <?php echo $value['mobilenum']; ?> </td>
                                                <td><span class="badge bg-success">Placed</span></td>
                                                <!-- <td><a class=""
                                                        href="<?php echo baseUrl . "admin/placedCandidatesDetails/" . $value['seekerId'] ?>">
                                                        <button type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>Placed</button></a></td> -->
                                                <td>
                                                    <form class="" action="<?php echo baseUrl . "admin/updateCurrentStatus" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId']; ?>" hidden>
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid']; ?>" hidden>
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <input type="radio" id="rejected" name="currentStatus" value="5"
                                                                    required>
                                                                <label for="rejected" class="mb-2">Relieved</label><br>
                                                            </div>
                                                            <div class="col ms-5">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " id="employerStatusCount" style="margin-top:-50px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('placedCd');
                var rowsPerPage = 12;
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

            <?php
        } elseif ($method == "placedCandidatesDetails") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateplacedlist').classList.add('active');
            </script>

            <section>
                <div id="resumeprint">
                    <div class="container">
                        <div class="row">

                            <div class="d-flex justify-content-between">
                                <div></div>
                                <div class=" text-center mt-4" style="margin-right:15px;">
                                    <h3 style=" letter-spacing: 3px; color:#94b123;"><b>ARRAM CHARITY TRUST</b></h3>
                                    <h3 style="letter-spacing: 2px; color: #31a5d6;"><b>ARRAM JOBS</b></h3>
                                </div>
                                <img src="<?php echo baseUrl . "assets/title logo.png" ?>" alt="ArramJobs"
                                    style="height:65px; width:85px; margin-top: 20px;">
                            </div>

                            <div class=" recent-sales overflow-auto mt-1">

                                <?php
                                if (isset($basicDetails)) {
                                    foreach ($basicDetails as $key => $value) {
                                        ?>
                                        <div class="d-flex justify-content-between pt-4">
                                            <div class="">
                                                <br>
                                                <p style="font-size: 18px;"><b>Name :</b>
                                                    <?php echo $value['name']; ?></p>

                                                <p style="font-size: 18px;"><b>Candidate ID : </b>
                                                    <?php echo $value['eeid']; ?></p>
                                                <br>
                                                <?php
                                    }
                                }
                                ?>
                                    </div>

                                    <div>
                                    <?php
                                        if (isset($areaOfInterest[0]['id']) && !empty($areaOfInterest)) { 
                                        foreach ($this->data['areaOfInterest'] as $akey => $avalue) {
                                            ?>
                                             <p style="font-size: 18px;"><b>Job category </b>
                                             <?php echo $avalue['other_interst_category'] ?> <br> </p>
                                            <?php
                                    }
                                }
                                    ?>

                                    </div>

                                    <?php
                                        foreach ($this->data['jobDetails'] as $key => $value) {                                        
                                            ?>
                                        <br>
                                        <p style="font-size: 18px;"><b>Employer Id :</b>
                                            <?php echo $value['jobProviderId']; ?></p>
                                        <p style="font-size: 18px;"><b>Company name :</b>
                                            <?php echo $value['comapny_name']; ?></p>
                                            <p>
                                           
                                        <br>
                                    <?php
                                    }
                                
                                    ?>
                            </div>
                                    </div>

                            <div style="float:right;">
                                <button onClick="window.print()" type="button" class="btn btn-dark printhide">Print</button>
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
        } elseif ($method == "interviewedCandidates") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateinterviewedlist').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle">
                    <h1>Interviewed Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Candidate</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['interviewedCandidates'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Interviewed Candidate List<span></span></h5>

                                <table class="table" id="interviewCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Interviewed At</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Candidate Mobile Number</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['interviewedCandidates'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>"> <?php echo $value['cdid']; ?> </a> </td>
                                                <td>
                                                    <?php echo $value['compName']; ?> / <a
                                                        href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>">
                                                        <?php echo $value['emprid']; ?> </a>
                                                </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['mobilenum']; ?> </td>
                                                <td><span class="badge bg-success">Interviewed</span></td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('interviewCd');
                var rowsPerPage = 12;
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;
                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

            <?php
        } elseif ($method == "rejectedCandidate") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidaterejectedlist').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle">
                    <h1>Relieved Candidates</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Candidate</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['rejectedCandidates'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Relieved Candidate List<span></span></h5>

                                <table class="table" id="rejectCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Candidate ID</th>
                                            <!-- <th scope="col">Rejected At</th> -->
                                            <th scope="col">Relieved At</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Candidate Mobile Number</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['rejectedCandidates'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>" target="_blank"> <?php echo $value['cdid']; ?> </a> </td>
                                                <td>
                                                    <?php echo $value['compName']; ?> / <a
                                                        href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>" target="_blank">
                                                        <?php echo $value['emprid']; ?> </a>
                                                </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['mobilenum']; ?> </td>
                                                <td><span class="badge bg-danger">Relieved</span></td>
                                                <td>
                                                    <form class="" action="<?php echo baseUrl . "admin/updateCurrentStatus" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId']; ?>" hidden>
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid']; ?>" hidden>
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <input type="radio" id="interviwed" name="currentStatus" value="7"
                                                                    required>
                                                                <label for="interviwed" class="mb-2">Reapplied</label><br>
                                                            </div>
                                                            <div class="col ms-5">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>

                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('rejectCd');
                var rowsPerPage = 12;
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
                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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
                </div>

                <div class="col-12">
                    <div class="d-sm-flex">
                        <h5 class="card-title me-5">Overall List<span></span></h5>
                        <div class="filter pt-3 ms-5 ">
                            <p class="icon" href="#" data-bs-toggle="dropdown" style="cursor:pointer;"> Filter <i
                                    class="bi bi-chevron-down"></i>
                            </p>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow p-4 z-3">
                                
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
                        <div class="mt-2 ms-5">
    <input type="text" class="form-control" id="searchNameInput" placeholder="Search by Candidate Name">
</div>
                    </div>

                    <!-- Search option -->
                    <script>
    $(document).ready(function() {
        $('#searchNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#myTableCd tbody tr').filter(function() {
                var candidateName = $(this).find('td:eq(4)').text().toLowerCase(); 
                var matches = candidateName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#myTableCd thead').hide();
                $('#deleteList3').hide();
                $('#count').hide();
                $('#paginationButtons').hide();
            } else {
                $('#noRecordsFound').hide();
          $('#myTableCd thead').show(); 
          $('#deleteList3').show();
          $('#count').show();
                $('#paginationButtons').show();
            }
        });
    });
</script>

                    <div class="card recent-sales overflow-auto">
                        <div class="card-body pt-4">
                       
                            <?php
                            if (isset($this->data['overallEmployees'][0]['name'])) {
                                ?>

<div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>

                                <table class="table" id="myTableCd">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Mobile Number</th>
                                            <!-- <th scope="col">Email</th> -->
                                            <th scope="col">Verification by</th>
                                            <!-- <th scope="col">Verification status (Admin)</th> -->
                                            <th scope="col">Action</th>
                                            <th scope="col">Candidates Status</th>
                                            <!-- <th scope="col">Status</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['overallEmployees'] as $key => $value) {
                                            $dateap = $value['dateTime'];
                                            $twelveHourTime = date("d/m/Y", strtotime($dateap));
                                            ?>
                                            <tr class="candidate-row">
                                                <td>
                                                    <form method="post"
                                                        action="<?php echo baseUrl . 'Admin/deleteOverallEmployees'; ?>"
                                                        id="form_<?= $value['id']; ?>">
                                                        <input type="checkbox" name="selected_items[]" value="<?= $value['id']; ?>"
                                                            onchange="updateDeleteButton3(this)">
                                                </td>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo $twelveHourTime; ?> </td>
                                                <td> <?php echo $value['eeid']; ?> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td class="text-primary"> <?php echo $value['phonenumber']; ?> </td>
                                                <!-- <td> <a href="#" class="text-primary"> <?php echo $value['email']; ?> </a> </td> -->

                                                <?php
                                                if ($value['identityverify'] == 1 && $value['addressverify'] == 1 && $value['employmentverify'] == 1 && $value['educationverify'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success">Verified By</span><br>
                                                        <?php echo $value['verifiedBy']; ?>
                                                    </td>
                                                <?php } else { ?>
                                                    <td><span class="badge bg-danger">Pending</span></td>
                                                <?php } ?>

                                                <!-- <td> Verification status </td> -->

                                                <td class="d-flex py-3">
                                                    <div class="dropdown">
                                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false"> Add Details
                                                        </button>
                                                        <ul class="dropdown-menu shadow-lg p-3 rounded"
                                                            style="background-color:#b6bab8;" aria-labelledby="dropdownMenuButton1">
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/basicdetails/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success  my-1">
                                                                        <i class="bi bi-plus"></i> Basic Details</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/educationTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Education</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/experienceTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Experience</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/skillTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Skills</button>
                                                                </a></li>
                                                            <li><a class="my-1"
                                                                    href="<?php echo baseUrl . "admin/areaOfIntrestTable/" . $value['id'] ?>">
                                                                    <button type="button" class="btn btn-success my-1">
                                                                        <i class="bi bi-plus"></i>Job Interest</button>
                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                    <a class="mx-1"
                                                        href="<?php echo baseUrl . "admin/viewCandidate/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-success d-flex"><i
                                                                class="bi bi-eye pe-1"></i>View</button></a>
                                                    <a class="mx-1"
                                                        href="<?php echo baseUrl . "admin/resumePrint/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-primary d-flex"><i
                                                                class="bi bi-eye pe-1"></i>Resume</button></a>
                                                </td>

                                                <?php
                                                if ($value['currentStatus'] == 1) {
                                                    ?>
                                                    <td><span class="badge bg-success"><i class="bi bi-check2-circle"></i> Placed
                                                        </span> </td>

                                                <?php } else {
                                                    ?>
                                                    <td><span class="badge bg-primary"><i class="bi bi-check2"></i> Available
                                                        </span>
                                                    </td>
                                                    <?php
                                                } ?>

                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " id="count" style="margin-top:-54px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <?php
    if (count($this->data['overallEmployees']) > 0) {
    ?>
        <button type="submit" name="submit" id="deleteList3" class="btn btn-danger disabled"
            onclick="return confirm('Are you sure you want to delete?')">Delete</button>
        </form>
    <?php
    }
    ?>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('myTableCd');
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
                function previousPage() {
                    if (currentPage > 1) {
                        currentPage--;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function nextPage() {
                    if (currentPage < totalPages) {
                        currentPage++;
                        showPage(currentPage);
                        updatePaginationButtons();
                    }
                }
                function updatePaginationButtons() {
                    var buttonsHtml = '';

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));
                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

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

<!-- Filter -->
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

            <script>
                function updateDeleteButton3(checkbox) {
                    var deleteButton3 = document.getElementById('deleteList3');

                    if (checkbox.checked) {
                        deleteButton3.classList.remove('disabled');
                    } else {
                        deleteButton3.classList.add('disabled');
                    }
                }
            </script>

            <?php
        } elseif ($method == "manageEmployee") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
            </script>

            <section>
                <div class="card" id="printCandidate">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="padding-top:15px;">
                            <h5 class="card-title"></h5>
                            <h2 class="text-center pt-2">Candidate Resume</h2>
                            <div>
                                <a href="<?php echo baseUrl . "admin/overallCandidates" ?>"> <button type="button"
                                        class="btn btn-info mt-3 "><i class="bi bi-arrow-left"></i></button></a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="card recent-sales overflow-auto mt-4">
                                    <div class="card-body">
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                            ?>
                                            <div class="d-md-flex justify-content-between pt-4">
                                                <div class="col d-none d-md-block">
                                                    <img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>"
                                                        alt="Upload your Profile photo" width="150" height="150">
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
                                                    <p> <?php echo $value['email'] ?>  </p>
                                                    <p> <?php echo $value['phonenumber'] ?> </p>
                                                    <p> <?php echo !empty($value['phonenumber1']) ? $value['phonenumber1'] : ''; ?> </p>
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
                                                        <?php
                                                        if (!empty($value['dateofbirth'])) {
                                                            $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                            echo $formattedDateOfBirth;
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?>
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
                                                        <th class="col-3" scope="col">Password</th>
                                                        <th class="col-3" scope="col">Profile Photo</th>
                                                        <th class="col-3" scope="col">Aadhaar Front</th>
                                                        <th class="col-3" scope="col">Aadhaar Back</th>
                                                        <th class="col-3" scope="col">Aadhaar Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" value='<?php echo $value['password']; ?>'
                                                                    readonly>
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td><a href="<?php echo $value['photo'] ?>" target="_blank"> <?php echo $value['photo_filename'] ?> </a> </td>
                                                        <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank"> <?php echo $value['aadharfront_filename'] ?> </a></td>
                                                        <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank"> <?php echo $value['aadharback_filename'] ?> </a> </td>
                                                        <td> <?php echo $value['aadharnumber'] ?> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">

                                        <h5 class="card-title">Educational Qualification</h5>
                                        <?php
                                        if (isset($education[0]['id']) && !empty($education)) {
                                            ?>

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
                                                                $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" || $value['educational_qualification'] === "BBM"
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

                                        <?php } else { ?>
                                            <p>Education qualification is not entered</p>
                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Experience Details</h5>

                                        <?php
                                        if (isset($experienceDetails[0]['id']) && !empty($experienceDetails)) {
                                            ?>

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
                                                        <th scope="col">Previous Employer Name</th>
                                                        <th scope="col">Previous Employer Mobile number</th>
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
                                                                <?php if (is_numeric($ivalue['expYear'])) {
                                                                    echo $ivalue['expYear'];
                                                                } else {
                                                                    echo date('d-m-Y', strtotime($ivalue['expYear']));
                                                                } ?>
                                                                to <br>
                                                                <?php
                                                                if ($ivalue['expMonth'] == 'Till now') {
                                                                    echo $ivalue['expMonth'];
                                                                } else {
                                                                    if (is_numeric($ivalue['expMonth'])) {
                                                                        echo $ivalue['expMonth'];
                                                                    } else {
                                                                        echo date('d-m-Y', strtotime($ivalue['expMonth']));
                                                                    }
                                                                }
                                                                ?>
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
                                                    }
                                                    ?>
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

                                <script>
                                    <?php if ($experienceDetails[0]['workStatus'] == '0') { ?>
                                        document.getElementById("expTable").style.display = "block";
                                        document.getElementById("noexperience").style.display = "none";

                                        <?php  } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
                                            document.getElementById("expTable").style.display = "none";
                                            document.getElementById("noexperience").style.display = "block";

                                        <?php } ?>
                                </script>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Skills</h5>
                                        <?php
                                        if (isset($skills[0]['id']) && !empty($skills)) { ?>

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
                                                            <td> <?php echo $loopcount; ?>. </td>
                                                            <td> <?php echo $svalue['skill'] ?> </td>
                                                            <td> <?php echo $svalue['experience'] ?> </td>
                                                            <td> <?php echo $svalue['skill_level'] ?> </td>
                                                        </tr>
                                                        <?php
                                                        $loopcount++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                            <?php
                                        } else { ?>
                                            <td>Skill is not entered</td>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Area of Job Interest</h5>

                                        <?php
                                        if (isset($areaOfInterest[0]['id']) && !empty($areaOfInterest)) { ?>

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
                                                            <td scope="row"> <?php echo $loopcount; ?>. </td>
                                                            <td> <?php echo $avalue['other_interst_category'] ?> </td>
                                                            <td> <?php echo $avalue['other_sub_interst_category'] ?> </td>
                                                            <td> <?php echo $avalue['prefered_location'] ?> </td>
                                                            <td> <?php echo $avalue['job_type'] ?> </td>
                                                            <td> <?php echo $avalue['description'] ?> </td>
                                                            <td> <?php echo $avalue['expected_salary'] ?> </td>
                                                        </tr>
                                                        <?php
                                                        $loopcount++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        <?php } else { ?>
                                            <p>Area of job interest is not entered</p>

                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Resume</h5>
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
                                                    <label class="form-check-label" for="gridRadios2"> 4.EDUCATION -
                                                        Certificates </label>
                                                </div>

                                                <input class="form-check-input" type="text" name="newList" id="" value="1"
                                                    hidden>
                                                <input class="form-check-input" type="text" name="verifiedName" id=""
                                                    value="<?php echo $_SESSION['adminName'] . ' / ' . $_SESSION['adminid'] ?>"
                                                    hidden>
                                            </div>
                                        </fieldset>

                                        <div class="col-md-6">
                                            <div class="form-floating mb-3">
                                                <textarea class="form-control" id="floatingTextarea" name="verificationRemarks"
                                                    style="height: 100px;"><?php echo $this->data['basicDetails'][0]['verificationRemarks'] ?> 
                                                                    </textarea>
                                                <label for="floatingTextarea">Remarks</label>
                                                <div class="invalid-feedback"> Please enter a remark. </div>
                                            </div>
                                        </div>

                                        <?php
                                        } else {
                                            ?>
                                        <div class="col-sm-10">

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios1" value="0">
                                                <label class="form-check-label" for="gridRadios1"> Verification Pending </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios2" value="1">
                                                <label class="form-check-label" for="gridRadios2"> Verification success </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="verificationStatus"
                                                    id="gridRadios" value="2">
                                                <label class="form-check-label" for="gridRadios3"> Relieved </label>
                                            </div>
                                        </div>
                                    <?php }
                                        ?>

                                    <div class="d-flex justify-content-around">
                                        <button type="submit" class="btn btn-success" id="verifyButton">Verified</button>
                                        <button type="submit" class="btn btn-danger" id="pendingButton">Pending</button>
                                    </div>

                                </form>
                            </div>
                        </div>
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
        } elseif ($method == "viewEmployee") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section>
                <div class="card" id="resumeprint">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" style="padding-top:15px;">
                            <h5 class="card-title"></h5>
                            <h2 class="text-center pt-2">Candidate Resume</h2>
                            <div>
                                <a class="" href="<?php echo baseUrl . "admin/overallCandidates" ?>">
                                    <button type="button" class="btn btn-info mt-3 "><i class="bi bi-arrow-left"></i>
                                    </button></a>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="card recent-sales overflow-auto mt-4">
                                    <div class="card-body">
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                            ?>
                                            <div class="d-md-flex justify-content-between pt-4">
                                                <div class="col d-none d-md-block">
                                                    <img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>"
                                                        alt="Your image" width="150" height="150">
                                                </div>

                                                <div class="col">
                                                    <h5 class="card-title">Name : <?php echo $value['name']; ?> </h5>
                                                    <h5 class="card-title">Candidate ID : <?php echo $value['eeid']; ?> </h5>
                                                </div>

                                                <div class="text-end mt-2">
                                                    <p> <?php echo $value['phonenumber'] ?> </p>
                                                    <p> <?php echo !empty($value['phonenumber1']) ? $value['phonenumber1'] : ''; ?> </p>
                                                    <p> <?php echo $value['email'] ?> </p>
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
                                                        <?php
                                                        if (!empty($value['dateofbirth'])) {
                                                            $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                            echo $formattedDateOfBirth;
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?>
                                                    </p>
                                                    <p><b>Age :</b> <?php echo $value['age'] ?> </p>
                                                </div>
                                                <div>
                                                    <p><b>Gender :</b> <?php echo $value['gender'] ?> </p>
                                                    <p><b>Marital Status :</b> <?php echo $value['maritalStatus'] ?> </p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="card recent-sales overflow-auto mt-4">
                                        <div class="card-body">

                                            <table class="table table-striped mt-2">
                                                <thead>
                                                    <tr>
                                                        <th class="col-3" scope="col">Password</th>
                                                        <th class="col-3" scope="col">Profile Photo</th>
                                                        <th class="col-3" scope="col">Aadhaar Front</th>
                                                        <th class="col-3" scope="col">Aadhaar Back</th>
                                                        <th class="col-3" scope="col">Aadhaar Number</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="password" class="form-control" id="password"
                                                                    name="password" value='<?php echo $value['password']; ?>'
                                                                    readonly>
                                                                <button type="button" class="btn btn-outline-secondary"
                                                                    onclick="togglePasswordVisibility('password', 'visibilityIcon')">
                                                                    <i id="visibilityIcon" class="bi bi-eye-slash"></i>
                                                                </button>
                                                            </div>
                                                        </td>
                                                        <td><a href="<?php echo $value['photo'] ?>" target="_blank"> <?php echo $value['photo_filename'] ?> </a> </td>
                                                        <td><a href="<?php echo $value['aadhar_front'] ?>" target="_blank"> <?php echo $value['aadharfront_filename'] ?> </a> </td>
                                                        <td><a href="<?php echo $value['aadhar_back'] ?>" target="_blank"> <?php echo $value['aadharback_filename'] ?> </a> </td>
                                                        <td> <?php echo $value['aadharnumber'] ?> </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <?php  } ?>
                                        </div>
                                    </div>
                                   

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">

                                        <h5 class="card-title">Educational Qualification</h5>

                                        <?php
                                        if (isset($education[0]['id']) && !empty($education)) {
                                            ?>

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
                                                            <td> <?php echo $loopcount; ?>. </td>
                                                            <td> <?php echo $value['educational_qualification'] ?> </td>
                                                            <?php if (
                                                                $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                                $value['educational_qualification'] === "10th/SSLC" || $value['educational_qualification'] === "11th" || $value['educational_qualification'] === "12th/HSC"
                                                            ) { ?>
                                                                <td>NA</td>
                                                            <?php } else { ?>
                                                                <td> <?php echo $value['department'] ?> </td>
                                                            <?php }
                                                            if ($value['educationmode'] == 'Corres') { ?>
                                                                <td>Correspondance</td>
                                                            <?php } else { ?>
                                                                <td>Regular</td>
                                                            <?php } ?>
                                                            <td> <?php echo $value['school_college_name'] ?> </td>
                                                            <?php if (
                                                                $value['educational_qualification'] == "Below_9th" || $value['educational_qualification'] === "9th" ||
                                                                $value['educational_qualification'] === "11th"
                                                            ) { ?>
                                                                <td>NA</td>
                                                            <?php } else { ?>
                                                                <td> <?php echo $value['percentage'] ?> </td>
                                                            <?php } ?>
                                                            <td> <?php echo $value['yearOfPassing'] ?> </td>
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
                                                                $value['educational_qualification'] === "B.SC" || $value['educational_qualification'] === "BSW" || $value['educational_qualification'] === "BBM"
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

                                        <?php } else { ?>
                                            <p>Education qualification is not entered</p>
                                        <?php } ?>
                                        
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Experience Details</h5>

                                        <?php
                                        if (isset($experienceDetails[0]['id']) && !empty($experienceDetails)) {
                                            ?>

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
                                                            <td scope="row"> <?php echo $loopcount; ?>. </td>
                                                            <td> <?php echo $ivalue['other_category'] ?> </td>
                                                            <td> <?php echo $ivalue['other_sub_category'] ?> </td>
                                                            <td>
                                                                <?php if (is_numeric($ivalue['expYear'])) {
                                                                    echo $ivalue['expYear'];
                                                                } else {
                                                                    echo date('d-m-Y', strtotime($ivalue['expYear']));
                                                                } ?>
                                                                to <br>
                                                                <?php
                                                                if ($ivalue['expMonth'] == 'Till now') {
                                                                    echo $ivalue['expMonth'];
                                                                } else {
                                                                    if (is_numeric($ivalue['expMonth'])) {
                                                                        echo $ivalue['expMonth'];
                                                                    } else {
                                                                        echo date('d-m-Y', strtotime($ivalue['expMonth']));
                                                                    }
                                                                }
                                                                ?>
                                                            </td>
                                                            <td> <?php echo $ivalue['company_name'] ?> </td>
                                                            <td> <?php echo $ivalue['company_location'] ?>  </td>
                                                            <td> <?php echo $ivalue['job_role'] ?> </td>
                                                            <td> <?php echo $ivalue['company_mobilenum'] ?> </td>
                                                            <td> <?php echo $ivalue['previous_employer_name'] ?> </td>
                                                            <td> <?php echo $ivalue['previous_employer_mobile'] ?> </td>
                                                            <td> <?php echo $ivalue['previous_employer_email'] ?> </td>
                                                        </tr>
                                                        <?php
                                                        $loopcount++;
                                                    }
                                                    ?>
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

                                <script>
                                    <?php if ($experienceDetails[0]['workStatus'] == '0') { ?>
                                        document.getElementById("expTable").style.display = "block";
                                        document.getElementById("noexperience").style.display = "none";

                                        <?php  } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
                                            document.getElementById("expTable").style.display = "none";
                                            document.getElementById("noexperience").style.display = "block";

                                        <?php } ?>
                                </script>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Skills</h5>
                                        <?php
                                        if (isset($skills[0]['id']) && !empty($skills)) { ?>

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
                                                            <td> <?php echo $loopcount; ?>. </td>
                                                            <td> <?php echo $svalue['skill'] ?> </td>
                                                            <td> <?php echo $svalue['experience'] ?> </td>
                                                            <td> <?php echo $svalue['skill_level'] ?> </td>
                                                        </tr>
                                                        <?php
                                                        $loopcount++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                            <?php
                                        } else { ?>
                                            <td>Skill is not entered</td>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Area of Job Interest</h5>

                                        <?php
                                        if (isset($areaOfInterest[0]['id']) && !empty($areaOfInterest)) { ?>

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
                                                            <td scope="row"> <?php echo $loopcount; ?>.  </td>
                                                            <td> <?php echo $avalue['other_interst_category'] ?>  </td>
                                                            <td> <?php echo $avalue['other_sub_interst_category'] ?> </td>
                                                            <td> <?php echo $avalue['prefered_location'] ?> </td>
                                                            <td> <?php echo $avalue['job_type'] ?> </td>
                                                            <td> <?php echo $avalue['description'] ?> </td>
                                                            <td> <?php echo $avalue['expected_salary'] ?> </td>
                                                        </tr>
                                                        <?php
                                                        $loopcount++;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>

                                        <?php } else { ?>
                                            <p>Area of job interest is not entered</p>

                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="card recent-sales overflow-auto">
                                    <div class="card-body">
                                        <h5 class="card-title">Resume</h5>
                                        <a href="<?php echo isset($this->data['areaOfInterest'][0]['resume_filename_url']) ? $this->data['areaOfInterest'][0]['resume_filename_url'] : ''; ?>"
                                            target="blank">
                                            <?php echo isset($this->data['areaOfInterest'][0]['resume_filename']) ? $this->data['areaOfInterest'][0]['resume_filename'] : 'No file'; ?>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
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
        } elseif ($method == "resumePrint") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatelist').classList.add('active');
                document.getElementById('candidateoveralllist').classList.add('active');
            </script>

            <section>
                <div id="resumeprint">
                    <div class="container">
                        <div class="row">

                            <div class="d-flex justify-content-between">
                                <div></div>
                                <div class=" text-center mt-4" style="margin-right:15px;">
                                    <h3 style=" letter-spacing: 3px; color:#94b123;"><b>ARRAM CHARITY TRUST</b></h3>
                                    <h4 style="color: #31a5d6;"><b>ARRAM JOBS - CANDIDATE RESUME</b></h4>
                                </div>
                                <img src="<?php echo baseUrl . "assets/title logo.png" ?>" alt="ArramJobs"
                                    style="height:65px; width:85px; margin-top: 20px;">
                            </div>

                            <div class=" recent-sales overflow-auto mt-1">
                                <?php
                                foreach ($this->data['basicDetails'] as $key => $value) {
                                    ?>
                                    <div class="d-flex justify-content-between pt-4">
                                        <div class="">
                                            <img src="<?php echo baseUrl . "uploads/" . $value['photo_filename'] ?>"
                                                alt="Your image" width="100" height="100"><br>
                                            <br>
                                            <h5>Name : <?php echo $value['name']; ?> </h5>
                                            <h5>Candidate ID : <?php echo $value['eeid']; ?> </h5><br>
                                        </div>

                                        <div class="text-end mt-0">
                                            <p> <?php echo $value['phonenumber'] ?> </p>
                                            <p> <?php echo $value['email'] ?> </p>
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
                                    <?php
                                }
                                ?>
                            </div><br><br>

                            <div class=" recent-sales overflow-auto">
                                <div>
                                    <h4><b>Personal Details</b></h4>
                                    <div class="d-flex mt-4">
                                        <?php
                                        foreach ($this->data['basicDetails'] as $key => $value) {
                                            ?>
                                            <div class="d-flex">
                                                <div>
                                                    <p style="margin-right: 35px;"><b>D.O.B : </b>
                                                        <?php
                                                        if (!empty($value['dateofbirth'])) {
                                                            $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth']));
                                                            echo $formattedDateOfBirth;
                                                        } else {
                                                            echo "-";
                                                        }
                                                        ?>
                                                    </p>
                                                    <p style="margin-right: 35px;">
                                                        <b>Marital Status :</b>
                                                        <?php echo $value['maritalStatus'] ?>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p style="margin-right: 35px;"> <b>Age :</b> <?php echo $value['age'] ?> </p>
                                                    <p style="margin-right: 35px;"> <b>Aadhaar Number :</b> <?php echo $value['aadharnumber'] ?><br> </p>
                                                </div>
                                                <div>
                                                    <p style="margin-right: 35px;"> <b>Gender :</b> <?php echo $value['gender'] ?> </p>
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
                                                        <?php } else { ?> with <?php echo $value['percentage'] ?>%
                                                        <?php } ?> - <?php echo $value['yearOfPassing'] ?>

                                                        <?php
                                                        $loopcount++;
                                                }
                                                ?>
                                            </div><br>

                                        <?php } else { ?>
                                            <p>Education qualification is not entered</p>
                                        <?php } ?>
                                        
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
                                                                <?php echo $ivalue['other_category'] ?> :
                                                                <?php echo $ivalue['other_sub_category'] ?></h5></b>

                                                        * Worked in <?php echo $ivalue['company_name'] ?> company,
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
                                    <?php if ($experienceDetails[0]['workStatus'] == '0') { ?>
                                        document.getElementById("expTable").style.display = "block";
                                        document.getElementById("noexperience").style.display = "none";

                                        <?php  } else if ($experienceDetails[0]['workStatus'] == '1') { ?>
                                            document.getElementById("expTable").style.display = "none";
                                            document.getElementById("noexperience").style.display = "block";

                                        <?php } ?>
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
                                                <h5><b><?php echo $loopcount; ?>. <?php echo $svalue['skill'] ?> skills : </b></h5>
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
                                                <b>
                                                    <h5><?php echo $loopcount; ?>. <?php echo $avalue['other_interst_category'] ?> :
                                                        <?php echo $avalue['other_sub_interst_category'] ?>
                                                    </h5>
                                                </b>
                                                <b>* Prefered Location : </b><?php echo $avalue['prefered_location'] ?> <br>
                                                <b>* Expected salary :</b> <?php echo $avalue['expected_salary'] ?> <br>
                                                <b>* Job type : </b> <?php echo $avalue['job_type'] ?> <br>

                                                <?php if (!empty($avalue['description'])) { ?>
                                                    <b>* Job description : </b> <?php echo $avalue['description']; ?>
                                                <?php } ?> <br><br>

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
                        <button onClick="window.print()" type="button" class="btn btn-dark printhide">Print</button>
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
                </div>
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
                                                <td> <?php echo $loopcount++; ?>. </td>
                                                <td>Candidate Experience</td>
                                                <td> <?php echo $value['other_category'] ?> </td>
                                                <td> <?php echo $value['newCategory'] ?> </td>
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
                                                </td>
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
                                                <td> <?php echo $loopcount++; ?>. </td>
                                                <td>Candidate Job Interest</td>
                                                <td> <?php echo $value['other_interst_category'] ?> </td>
                                                <td> <?php echo $value['newCategory'] ?> </td>
                                                <td class="d-flex">
                                                    <button type="button" class="btn btn-success me-1" data-toggle="modal"
                                                        data-target="#newcategoryarea"
                                                        onclick="categoryarea('<?php echo $value['id']; ?>','<?php echo $value['newCategory']; ?>')">Add</button>
                                                    <form action="<?php echo baseUrl . "admin/cancelNewCategoryArea" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="areaTableId" id=""
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
                                                <td> <?php echo $loopcount++; ?>.  </td>
                                                <td>Employer Job</td>
                                                <td> <?php echo $value['jobCategory'] ?> </td>
                                                <td> <?php echo $value['newCategory'] ?> </td>
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
                                                </td>
                                            </tr>

                                            <script>
                                                function categoryjob(jobtableID, jobcategory) {
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
                </div>
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
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['candidateRequestList'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Request to Candidate Details<span></span></h5>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Employer Name</th>
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
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>" target="_blank"> <?php echo $value['emprid']; ?> </a> </td>
                                                <td> <?php echo $value['cname'] ?> </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>" target="_blank"> <?php echo $value['cdid']; ?> </a></td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['mobilenum']; ?> </td>
                                                <!-- <td><a href="#" class="text-primary"><?php echo $value['email']; ?></a></td> -->
                                                <!-- <td><?php $formattedDateOfBirth = date('d-m-Y', strtotime($value['dateofbirth'])); ?>
                                                    <?php echo $formattedDateOfBirth; ?></td> -->
                                                <td class="d-flex">
                                                    <form action="<?php echo baseUrl . "admin/approveCandidateRequest" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId'] ?>" hidden>
                                                        <input class="form-check-input" type="text" name="approveCandidateRequest"
                                                            id="" value="3" hidden>
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
                                                            value="2" hidden>
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
                </div>
            </section>

            <?php
        } elseif ($method == "candidateChart") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('candidatechart').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle">
                    <h1>Candidate Status</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Candidate status</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">
                            <?php
                            if (isset($this->data['candidateChartList'][0]['name'])) {
                                ?>
                                <h5 class="card-title">Candidate Tracking Chart<span></span></h5>

                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Employer ID</th>
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Candidate Mobile Number</th>
                                            <th scope="col">Current Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['candidateChartList'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>" target="blank">
                                                        <?php echo $value['emprid']; ?> </a> / <?php echo $value['c_name']; ?>
                                                </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>" target="blank">
                                                        <?php echo $value['cdid']; ?> </a>
                                                </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td> <?php echo $value['mobilenum']; ?> </td>
                                                <?php
                                                if ($value['curStatus'] == 3) {
                                                    ?>
                                                    <td><span class="badge bg-warning">Request Approved</span></td>
                                                    <?php
                                                } else if ($value['curStatus'] == 4) {
                                                    ?>
                                                        <td><span class="badge bg-success">Interviewed</span></td>

                                                <?php } ?>
                                                <td>
                                                    <form class="" action="<?php echo baseUrl . "admin/updateCurrentStatus" ?>"
                                                        method="post">
                                                        <input class="form-check-input" type="text" name="seekerId" id=""
                                                            value="<?php echo $value['seekerId']; ?>" hidden>
                                                        <input class="form-check-input" type="text" name="employerId" id=""
                                                            value="<?php echo $value['emprid']; ?>" hidden>
                                                        <div class="d-flex align-items-center">
                                                            <div class="">
                                                                <input type="radio" id="interviwed" name="currentStatus" value="4"
                                                                    <?php if ($value['curStatus'] == '4') {
                                                                        echo 'checked';
                                                                    } ?>
                                                                    required>
                                                                <label for="interviwed" class="mb-2">Interviewed</label><br>
                                                                <input type="radio" id="rejected" name="currentStatus" value="5"
                                                                    required>
                                                                <label for="rejected" class="mb-2">Relieved</label><br>
                                                                <input type="radio" id="placed" name="currentStatus" value="6"
                                                                    required>
                                                                <label for="placed" class="mb-2">Placed</label><br>
                                                            </div>

                                                            <div class="col ms-5">
                                                                <button type="submit" class="btn btn-success">Save</button>
                                                            </div>
                                                        </div>
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
                </div>
            </section>

            <?php
        } elseif ($method == "employerChart") {
            ?>
            <!-- Sidebar Active  -->
            <script>
                document.getElementById('employerchart').classList.add('active');
            </script>

            <section class="usertable">
                <div class="pagetitle">
                    <h1>Employer Status</h1>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                            <li class="breadcrumb-item active">Employer status</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                        <div class="d-sm-flex ">
                        <h5 class="card-title">Employer Tracking Chart<span></span></h5>
                                <div class="filter pt-3 ms-5">
                                <input type="text" class="form-control" id="searchCompanyNameInput" placeholder="Search by Company Name">
</div>
                            </div>

<!-- Search by Company name -->
<script>
    $(document).ready(function() {
        $('#searchCompanyNameInput').on('keyup', function() {
            var value = $(this).val().toLowerCase();
            var found = false;
            $('#placedCd tbody tr').filter(function() {
                var companyName = $(this).find('td:eq(3)').text().toLowerCase(); // Index 3 is the Company Name column
                var matches = companyName.indexOf(value) > -1;
                $(this).toggle(matches);
                if (matches) {
                    found = true;
                }
            });
            if (!found) {
                $('#noRecordsFound').show();
                $('#placedCd thead').hide();
                $('#paginationButtons').hide();
                $('#employerStatusCount').hide();
            } else {
                $('#noRecordsFound').hide();
                $('#placedCd thead').show(); 
                $('#paginationButtons').show();
                $('#employerStatusCount').show();
            }
        });
    });
</script>

                            <?php
                            if (isset($this->data['employerChart'][0]['name'])) {
                                ?>                                

<div id="noRecordsFound" style="display: none;">
    <h5><b>No records found</b></h4>
</div>
                                <table class="table" id="placedCd">
                                    <thead>
                                        <tr>
                                            <th scope="col">S.No</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Employer Id</th>
                                            <th scope="col">Company Name</th>
                                            <!-- <th scope="col">Position</th> -->
                                            <th scope="col">Candidate ID</th>
                                            <th scope="col">Candidate Name</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $loopcount = 1;
                                        foreach ($this->data['employerChart'] as $key => $value) {
                                            ?>
                                            <tr>
                                                <td> <?php echo $loopcount; ?>. </td>
                                                <td> <?php echo date('d-m-Y', strtotime($value['dateTime'])); ?> </td>
                                                <td> <a href="<?php echo baseUrl . "admin/viewEmployer/" . $value['providerId'] ?>"> <?php echo $value['emprid']; ?> </a> </td>
                                                <td> <?php echo $value['compName']; ?> </td>
                                                <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['seekerId'] ?>"> <?php echo $value['cdid']; ?> </a> </td>
                                                <td> <?php echo $value['name']; ?> </td>
                                                <td><span class="badge bg-success">Placed</span></td>
                                            </tr>
                                            <?php
                                            $loopcount++;
                                        }
                                        ?>
                                    </tbody>
                                    <p class="text-end " id="employerStatusCount" style="margin-top:-40px">Count : <b>
                                            <?php echo $loopcount - 1; ?>
                                        </b></p>
                                </table>

                                <div id="paginationButtons" class="text-center mt-4">
                                    <div id="paginationBtnsContainer"></div>
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
                </div>
            </section>

            <!-- PAGINATION -->
            <script>
                var table = document.getElementById('placedCd');
                var rowsPerPage = 12;
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

                    currentPage = Math.max(1, Math.min(currentPage, totalPages));

                    var startPage, endPage;
                    if (totalPages <= 3) {
                        startPage = 1;
                        endPage = totalPages;
                    } else {
                        if (currentPage <= 2) {
                            startPage = 1;
                            endPage = 3;
                        } else if (currentPage >= totalPages - 1) {
                            startPage = totalPages - 2;
                            endPage = totalPages;
                        } else {
                            startPage = currentPage - 1;
                            endPage = currentPage + 1;
                        }
                    }
                    if (startPage > 1) {
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(1)">1</button>';
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                    }
                    for (var i = startPage; i <= endPage; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn ' + activeClass + '" onclick="goToPage(' + i + ')">' + i + '</button>';
                    }
                    if (endPage < totalPages) {
                        buttonsHtml += '<span class="ellipsis mx-1">...</span>';
                        buttonsHtml += '<button class="btn btn-outline-secondary mx-1 pagination-btn" onclick="goToPage(' + totalPages + ')">' + totalPages + '</button>';
                    }
                    buttonsHtml = '<button class="btn btn-outline-secondary me-3" id="previousBtn" onclick="previousPage()">&lt;</button>' +
                        buttonsHtml +
                        '<button class="btn btn-outline-secondary ms-3" id="nextBtn" onclick="nextPage()">&gt;</button>';

                    document.getElementById('paginationBtnsContainer').innerHTML = buttonsHtml;

                    var previousBtn = document.getElementById('previousBtn');
                    var nextBtn = document.getElementById('nextBtn');
                    previousBtn.style.display = (currentPage === 1) ? 'none' : 'inline-block';
                    nextBtn.style.display = (currentPage === totalPages) ? 'none' : 'inline-block';
                }
                updatePaginationButtons();
            </script>

            <!-- <?php
        } elseif ($method == "employerChart") {
            ?>
                <script>
                    document.getElementById('employerchart').classList.add('active');
                </script>

                <section class="usertable">
                    <div class="pagetitle">
                        <h1>Employer Status</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo baseUrl; ?>">Home</a></li>
                                <li class="breadcrumb-item active">Employer status</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12">
                        <div class="card recent-sales overflow-auto">
                            <div class="card-body">
                                <?php
                                if (isset($this->data['employerChartList'][0]['id'])) {
                                    ?>
                                    <h5 class="card-title">Employer Tracking Chart<span></span></h5>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">S.No</th>
                                                <th scope="col">Employer Id</th>
                                                <th scope="col">Company Name</th>
                                                <th scope="col">Candidate Name</th>
                                                <th scope="col">Candidate ID</th>
                                                <th scope="col">Current Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $loopcount = 1;
                                            foreach ($this->data['employerChartList'] as $key => $value) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $loopcount; ?> .
                                                    </td>
                                                    <td>
                                                        <?php echo $value['placedAtEmployer']; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $value['companyName']; ?>
                                                </td>
                                                    <td>
                                                        <?php echo $value['name']; ?>
                                                    </td>
                                                    <td><a href="<?php echo baseUrl . "admin/viewCandidate/" . $value['id'] ?>"
                                                            target="blank">
                                                            <?php echo $value['eeid']; ?> </a>
                                                    </td>
                                                    <?php
                                                    if ($value['currentStatus'] == 1) {
                                                        ?>
                                                        <td><span class="badge bg-success"><i class="bi bi-check2-circle"></i> Placed
                                                            </span> </td>

                                                    <?php } else {
                                                        ?>
                                                        <td><span class="badge bg-primary"><i class="bi bi-check2"></i> Available
                                                            </span>
                                                        </td>
                                                        <?php
                                                    } ?>
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
                    </div>
                </section> -->

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

                        <div class="card-body">
                            <h5 class="card-title">Verified Employers<span></span></h5>

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
                                            <td> <?php echo $loopcount; ?> </td>
                                            <td> <?php echo $value['company_name']; ?> </td>
                                            <td><a href="#" class="text-primary"> <?php echo $value['company_mobile_number']; ?> </a></td>
                                            <td> <?php echo $value['name']; ?> </td>
                                            <td> <?php echo $value['role']; ?> </td>
                                            <td> <?php echo $value['mobile_number']; ?> </td>
                                            <td><span class="badge bg-success">Approved</span></td>
                                            <td><a href="<?php echo baseUrl . "admin/manageEmployer/" . $value['id'] ?>">
                                                <button type="button" class="btn btn-success">View</button></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $loopcount++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
                </div>
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">

                        <div class="card-body">
                            <?php if ($this->data['addNewEmployerApprovel']['totalRows'] >= 1 || $this->data['deleteEmployerApprovel']['totalRows'] >= 1) {
                                ?>
                                <h5 class="card-title">Employer Add / Delete Request<span></span></h5>

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
                                                    <td> <?php echo $loopcount; ?>. </td>
                                                    <td> <?php echo $value['erid']; ?> </td>
                                                    <td> <?php echo $value['company_name']; ?> </td>
                                                    <td><a href="#" class="text-primary"> <?php echo $value['company_mobile_number']; ?> </a></td>
                                                    <td> <?php echo $value['name']; ?> </td>
                                                    <td> <?php echo $value['role']; ?> </td>
                                                    <td> <?php echo $value['mobile_number']; ?> </td>
                                                    <td>Add Request</td>
                                                    <td><span class="badge bg-success">Add Request</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $value['id'] ?>">
                                                        <button type="button" class="btn btn-success">View</button></a></td>
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
                                                    <td> <?php echo $loopcount++; ?>. </td>
                                                    <td> <?php echo $dvalue['erid']; ?> </td>
                                                    <td> <?php echo $dvalue['company_name']; ?> </td>
                                                    <td> <a href="#" class="text-primary"> <?php echo $dvalue['company_mobile_number']; ?> </a></td>
                                                    <td> <?php echo $dvalue['name']; ?> </td>
                                                    <td> <?php echo $dvalue['role']; ?> </td>
                                                    <td> <?php echo $dvalue['mobile_number']; ?> </td>
                                                    <td> <?php echo $dvalue['deleteRequestRemarks']; ?> </td>
                                                    <td><span class="badge bg-danger">Delete Request</span></td>
                                                    <td><a href="<?php echo baseUrl . "admin/employerApprovel/" . $dvalue['id'] ?>">
                                                        <button type="button" class="btn btn-success">View</button></a>
                                                    </td>
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
                </div>
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
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Approve Employer</h5>

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
                                        value="<?php echo $value['company_mobile_number'] ?>" readonly required
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Company Email</label>
                                    <input type="email" class="form-control" id="inputEmail5" name="email"
                                        value="<?php echo $value['company_email'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Street Address</label>
                                    <input type="text" class="form-control" id="inputAddres5s" name="address"
                                        value="<?php echo $value['street_address'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress2" class="form-label">Landmark</label>
                                    <input type="text" class="form-control" id="inputAddress2" name="landmark"
                                        value="<?php echo $value['Landmark'] ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city"
                                        value="<?php echo $value['City'] ?>" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">District</label>
                                    <input type="text" class="form-control" id="inputDistrict" name="district"
                                        value="<?php echo $value['district'] ?>" readonly required>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">State</label>
                                    <select id="inputState" class="form-select" name="state">
                                        <option selected value="Tamil Nadu">Tamil Nadu</option>
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
                                        value="<?php echo $value['name'] ?>" readonly name="name1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['role'] ?>" readonly name="role">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputNumber5" class="form-label">Mobile Number</label>
                                    <input type="number" class="form-control" id="inputNumber5"
                                        value="<?php echo $value['mobile_number'] ?>" readonly name="mobile1"
                                        onkeydown="return event.keyCode !== 38 && event.keyCode !== 40;">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email-ID</label>
                                    <input type="email" class="form-control" id="inputEmail5"
                                        value="<?php echo $value['email'] ?>" readonly name="email1">
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
                                                <textarea class="form-control" id="floatingTextarea" name="addNewApprovelRemarks"
                                                    style="height: 100px;" required></textarea>
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
                                                    <textarea class="form-control" id="floatingTextarea" name="deleteApprovelRemarks"
                                                        style="height: 100px;" required></textarea>
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
                                            <textarea class="form-control" id="floatingTextarea" name="addNewApprovelRemarks"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-4 pt-0">Delete Employer Approvel</legend>
                                        <div class="col-sm-8">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios1"
                                                    value="0">
                                                <label class="form-check-label" for="gridRadios1"> Approval Pending </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="deleteApprovel" id="gridRadios2"
                                                    value="1">
                                                <label class="form-check-label" for="gridRadios2"> Approval success </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="col-md-6">
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" id="floatingTextarea" name="deleteApprovelRemarks"
                                                style="height: 100px;"></textarea>
                                            <label for="floatingTextarea">Remarks</label>
                                        </div>
                                    </div>
                                <?php }
                                ?>
                                <!-- <div class="col-md-6">
                                <label>Admin Verification Remarks</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="floatingTextarea" name="addNewApprovelRemarks" style="height: 100px;"></textarea>
                                </div>
                            </div> -->

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                <?php
                            }
                            ?>
                        </form>
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
                                    <textarea class="form-control" id="floatingTextarea" name="deleteEmployeeRemarks"
                                        cols="30" rows="20" required></textarea>
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
                                    <textarea class="form-control" id="floatingTextarea" name="deleteRemarks"
                                        style="height: 100px;" required></textarea>
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
                                <input type="text" id="expnewcategory" value="<?php echo $value['newCategory'] ?>" name="new_category">
                            </div>
                            <input class="form-check-input" type="text" name="categoryexp" id="" value="0" hidden>
                            <input class="form-check-input" type="text" name="expTableId" id="expTableId" value=""
                                hidden>

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
                                <label for="expnewcategory">New Category </label>
                                <input type="text" id="areanewcategory" value="<?php echo $value['newCategory'] ?>" name="new_category">
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
                                <label for="expnewcategory">New Category </label>
                                <input type="text" id="jobnewcategory" value="<?php echo $value['newCategory'] ?>" name="new_category">
                            </div>
                            <input class="form-check-input" type="text" name="categoryjob" id="" value="0" hidden>
                            <input class="form-check-input" type="text" name="jobTableId" id="jobTableId" value=""
                                hidden>

                            <button type="submit" class="btn btn-success mt-4">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>ArramJobs</span></strong>. All Rights Reserved
        </div>
    </footer>

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

    <!-- Event listener to block right-click -->
    <script>
        function blockRightClick(event) {
            event.preventDefault();
        }

        document.addEventListener('contextmenu', blockRightClick);
    </script>

</body>

</html>