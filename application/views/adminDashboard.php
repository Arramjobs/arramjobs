<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard with Sidebar</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* #education{
        color:
    } */
        #candidateResume {
            color: white;
            background-color: #F8802A;
            font-weight: bold;
        }

        /* .bg-warning{
        background-color: #F8802A;
    } */
        #educationTable {
            width: 100%;
        }

        .btn-warning:hover {
            background-color: #2d76d9;
        }

        .bg-secondary {
            background-color: navy !important;
        }

        #updatesubmit {
            background-color: #F8802A !important;
            color: white;
            font-size: large;
        }

        #search {

            margin-left: 950px;
        }

        #categorys {
            margin-left: 300px;
            width: 40%;
        }

        #subcategorys {
            width: 50%;
        }

        /* label{
            margin-left: 330px;
        } */
        #lab {
            margin-left: 10px;
        }

        #lab {
            margin-left: 10px;
        }

        .full {
            align-items: center;


            background-color: #f1f1f1;

        }

        .bg-primary {
            background-color: navy !important;
        }

        .bg-dark {
            background-color: rgb(243, 139, 12) !important;
        }


        /* Adjust sidebar height to match content height */
        .sidebar {
            height: 200vh;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            padding: 0;
            /* margin-left:-200px;
  margin-right:290px; */
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 50px auto;
        }

        h3 {
            text-align: center;
            margin-bottom: 30px;
            margin-left: -30px;
            color: navy;
        }


        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .error {
            color: red;
            margin-top: 5px;
        }


        .form-control {
            border-radius: 3px;
            border: 1px solid #ccc;
            padding: 10px;
        }

        .form-control-file {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .btn-primary {
            background-color: #f39c12 !important;
        }

        .btn-primary {
            /* background-color: #4285f4; */
            border: none;
            background-color: #F8802A;
        }


        .form-control[type="file"] {
            border: none;
            background-color: transparent;
            color: #4285f4;
            cursor: pointer;
        }

        button[type="submit"] {
            width: 100%;
            margin-top: 20px;
            padding: 12px;
            font-weight: bold;
        }

        .next-button {
            float: right;
        }

        #con {
            width: 50%;
        }

        #addnew {
            width: 50%;
        }

        #updateaddnew {
            width: 50%;
        }

        /* Update header background color to a darker navy */
        /* Header styles */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px;
            z-index: 1000;
            background-color: navy;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h2 {
            color: white;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            color: white;
        }

        header nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 50%;
            right: 20px;
            transform: translateY(-50%);

        }

        header nav ul li {
            display: inline-block;
            margin-left: 50px;
        }

        header nav ul li a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            /* background-color: #f39c12 ;  */
        }

        header nav ul li a:hover {
            /* background-color: #007bff;
    .btn-primary{ */
            /* background-color: #f39c12 ; */
            color: #F8802A;
            text-decoration: none;
            /* } */
        }


        .logo {
            margin-top: 50px;
        }

        .sidebar {
            position: fixed;
            width: 18%;
            /* Slightly increased width for more content space */
            top: 110px;
            /* Adjusted top spacing */
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 20px 0;
            /* Reduced padding for a cleaner look */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Adjusted shadow */
            background-color: #F8802A;
            /* A darker, professional color */
        }

        .nav-link {
            display: block;
            color: #ffffff;
            font-weight: bold;
            text-decoration: none;
            padding: 20px 20px;
            /* Added padding for better touch interaction */
        }

        /* 
.nav-link:hover {
    background-color: #007bff;
}
.nav-item.active .nav-link {
    background-color: #FF4500;
} */

        .nav-item h3 {
            margin: 0;
            padding: 10px 20px;
            color: white;
        }

        #view {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid #f39c12;
            background-color: #f39c12;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #view:hover {
            background-color: transparent;
            /* Change background on hover */
            color: #f39c12;
            /* Change text color on hover */
        }

        #updates {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid navy;
            /* Border color (adjust as needed) */
            background-color: navy;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #updates:hover {
            background-color: transparent;
            /* Change background on hover */
            color: navy;
            /* Change text color on hover */
        }

        #deletes {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid red;
            /* Border color (adjust as needed) */
            background-color: red;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #deletes:hover {
            background-color: transparent;
            /* Change background on hover */
            color: red;
            /* Change text color on hover */
        }

        #regis {
            display: inline-block;
            padding: 8px 16px;
            border: 2px solid navy;
            /* Border color (adjust as needed) */
            background-color: navy;
            /* Background color (adjust as needed) */
            color: #fff;
            /* Text color */
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #regis:hover {
            background-color: transparent;
            /* Change background on hover */
            color: navy;
            /* Change text color on hover */
        }

        #tamil {
            color: white;
            margin-left: 20px;
        }
    </style>

</head>



<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <div id="google_translate_element"></div>
  <script src="https://translate.Google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
  <script>
    function googleTranslateElementInit(){
      new google.translate.TranslateElement({pageLanguage: 'en'},'google_translate_element');
    }
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <nav class="navbar navbar-expand-lg" style="background-color: navy; padding-top: 30px; padding-bottom: 30px;">
        <div class="container">
            <!-- <img src="logo 1.jpeg" alt="Arram Jobs" width="120" height="50"> -->
            <a style="text-decoration: none" href="<?php echo baseUrl ?>">
                <h4 style="color: white">அறம் வேலைவாய்ப்பு</h4>
            </a>
            <!-- <a href="" style="color: white">ArramJobs</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
				<a class="nav-link" href="#" style="color: white; padding-right: 40px;">Home</a>
				</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#about" style="color: white; padding-right: 40px;">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#provider" style="color: white; padding-right: 40px;">Employer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#seeker" style="color: white; padding-right: 40px;">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white; padding-right: 40px;">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white; padding-right: 40px;">Contact</a>
                    </li>
                </ul>
                <div>
                    <!-- <form class="d-flex" role="search">
         <button class="btn btn-danger btn-lg">LogIn</button>
      	</form> -->
                    <div class="dropdown" style="margin-left: 15px;">
                        <button class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            LogIn
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo baseUrl . "provider/login" ?>">Employer LogIn</a></li>
                            <li><a class="dropdown-item" href="<?php echo baseUrl . "seekerController" ?>">Employee LogIn</a></li>
                        </ul>
                    </div>
                </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class=" sidebar col-md-3 col-lg-2 d-md-block">
                <div class="position-sticky">

                    <ul class="nav flex-column">
                        <br>

                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo baseUrl . "providerController/dashboard" ?>">
                                Provider Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="http://localhost/arramjobs/providerController/providerUpdateRegistration"> -->
                            <a class="nav-link" href="<?php echo baseUrl . "providerController/providerUpdateRegistration" ?>">
                                Provider Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl . "providerController/jobViewTable" ?>">
                                Provider Jobs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo baseUrl . "providerController/matchedCandidate" ?>">
                                Candidates List
                            </a>
                        </li>

                        <!-- Add more menu items as needed -->
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <?php
                if ($method == "dash") {
                ?>

                    <h1 class="" id="w">
                        <center>Welcome To Job Employee Dashboard </center>
                    </h1>


                <?php
                } else if ($method == 'basicdetails') {
                ?>

                <?php  }
                ?>

            </main>