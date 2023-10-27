<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employer Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="path/to/bootstrap.min.css"> -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Google Fonts -->
  <style>
    .btn-primary {
      background-color: #f39c12 !important;
    }

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

    /* Form */
    .formcss {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      width: 400px;
    }

    @media screen and (max-width:576px) {
      .formcss {
        width: 280px;
      }

      .tamilcss {
        padding-right: 8%;
      }
    }

    .formcss h3 {
      text-align: center;
      margin-bottom: 30px;
      color: navy;
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      font-weight: bold;
      padding-bottom: 10px;
    }

    .form-control {
      border-radius: 3px;
      padding: 10px;
    }

    .btn-primary {
      background-color: #4285f4;
      border: none;
    }

    .btn-primary:hover {
      background-color: #2d76d9;
    }

    button[type="submit"] {
      width: 100%;
      margin-top: 20px;
      padding: 12px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    /* to hide arrows in number */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
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
            <a class="nav-link mx-4 " href="<?php echo baseUrl . "#contact" ?>">Contact</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link mx-4" href="https://arramjobs.in/blog">Blog</a>
          </li> -->
        </ul>
      </div>
  </nav>


  <div class="containers formcss container-lg mt-5 mx-auto">

    <div class="" style="font-size: x-large">
      <h3>Employer Login<h3>
    </div>
    <form name="login_form" method="post" action="<?php echo baseUrl . "providerController/viewDashboard" ?>"
      onsubmit="return validateForm()">
      <div class="form-group">
        <label for="userID">Registered ID :</label>
        <input type="text" class="form-control" id="userID" name="userName" placeholder="Enter your registered id">
        <p id="nameerr" style="color: red;"></p>
      </div>
      <!-- <div class="form-group">
        <label for="password">Password:</label>
        <input type="tel" class="form-control" id="password" name="number" placeholder="Enter password">
        <p id="pherr" style="color: red;"></p>
      </div> -->
      <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div id="sign">
      <p>Create an account ? <a id="regis" href="<?php echo baseUrl . "provider/registration" ?>">Register</a></p>
    </div>
  </div>

  <script>
    function validateForm() {
      var x = document.login_form.userID.value;
      // var p = document.login_form.password.value;

      // if (x != "") {
      //   if (x.length < 2) {
      //     document.getElementById("nameerr").innerHTML = "Name should be in atleast 2 characters";
      //     return false;
      //   } else if (x.length > 50) {
      //     document.getElementById("nameerr").innerHTML = "Name should not exceed 50 characters";
      //     return false;
      //   } else {
      //     document.getElementById("nameerr").innerHTML = "";
      //   }
      // } else if (x == "") {
      //   var namesms1 = "Name must be filled out";
      //   document.getElementById("nameerr").innerHTML = namesms1;
      //   return false;
      // }
      if (x == "") {
        var namesms1 = "Employer id must be filled out";
        document.getElementById("nameerr").innerHTML = namesms1;
        return false;
      }

      // if (p != "") {
      //   if (p.length < 10) {
      //     document.getElementById("pherr").innerHTML = "Mobile number must be in 10 digits";
      //     return false;
      //   } else if (p.length > 11) {
      //     document.getElementById("pherr").innerHTML = "Mobile number should not exceed 10 digits";
      //     return false;
      //   } else {
      //     document.getElementById("pherr").innerHTML = "";
      //   }
      // } else if (p == "") {
      //   var phsms = "Mobile number must be filled out";
      //   document.getElementById("pherr").innerHTML = phsms;
      //   return false;
      // }
      // if (p == "") {
      //   var phsms = "Password must be filled out";
      //   document.getElementById("pherr").innerHTML = phsms;
      //   return false;
      // }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</body>

</html>