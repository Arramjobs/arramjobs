<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="path/to/bootstrap.min.css"> -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Google Fonts -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            width: 100%;
        }

        /* Navbar */
        .navcss {
            color: white;
            font-weight: bold;
        }

        .navbar-nav li a {
            color: white;
            text-decoration: none;
        }

        .navbar-nav li a:hover {
            color: #F8802A;
            text-decoration: none;
        }

        .tamilcss {
            padding-right: 15%;
        }
        

        @media screen and (max-width:576px) {
            .tamilcss {
                padding-right: 8%;
            }
        }
        .thankscontent{
            margin-top: 150px;
            text-align:center
        }
    </style>
</head>

<body>

    <nav class="navcss navbar navbar-expand-lg sticky-top"
        style="background-color: navy; padding-top: 40px; padding-bottom: 40px;">
        <div class="container-fluid">
            <h5 class="tamilcss mx-sm-4" style="color:white;">அறம் வேலைவாய்ப்பு</h5>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="material-symbols-outlined text-light px-sm-4">menu</span>
            </button>
            <div class="collapse navbar-collapse justify-content-end " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link mx-4" href="<?php echo baseUrl . "#about" ?>">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-4" href="<?php echo baseUrl . "#home" ?>">How It Works</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="<?php echo baseUrl . "#provider" ?>">Employer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="<?php echo baseUrl . "#seeker" ?>">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4" href="<?php echo baseUrl . "#contact" ?>">Contact</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link mx-4" href="https://arramjobs.in/blog">Blog</a>
                    </li> -->
                </ul>
            </div>
    </nav>
    <div class="thankscontent">
            <h1>Registered Successfully.</h1>
            <h3 style="padding-top:40px;">Thank you.</h3>
            <br>
            <p>Registered id is <b>  <?php echo $generatedeeid; ?> </b>.</p>
            <p>Your Registered id and mobile number has been sent to whatsapp. Use this registered id and mobile number for <a id="regis" href="<?php echo baseUrl . "seekerController" ?>">Login</a>.</p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>