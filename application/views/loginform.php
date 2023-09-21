<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Google Fonts -->
  <title>Login Form</title>
  <style>
    .btn-primary {
      background-color: #f39c12 !important;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      margin: 0;
      padding: 0;
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
    }

    .formcss h2 {
      text-align: center;
      margin-bottom: 30px;
      margin-left: -40px;
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

    /* Form input styles */
    .form-control {
      border-radius: 3px;
      border: 1px solid #ccc;
      padding: 10px;
    }

    /* Form button style */
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
            <a class="nav-link mx-4" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4" href="#how-it-works">How It Works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4" href="#job-seekers">Seekers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4" href="#job-providers">Providers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-4" href="#blog">Blog</a>
          </li>
        </ul>
      </div>
  </nav>

  <div class="formcss container-lg mt-5 mx-auto">
    <h2>Seeker Login </h2>
    <form id="phoneForm" action="<?php echo baseUrl . "seekerController/seekerLogin" ?>" method="post"
      onsubmit="return validateForm()">

      <div class="form-group">
        <label for="phone">Name</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name" required>
      </div>
      <div class="form-group">
        <label for="phone">Mobile Number</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber" placeholder="Enter your mobile number" required>
          <p id="pherr" style="color: red;"></p>
      </div>
      <!--  <button type="button" class="btn btn-link">New User</a> -->
      <button type="submit" class="btn btn-primary">Submit</button>

    </form>
    <br>
    <div id="sign">
      <p>Create an account ? <a id="regis" href="<?php echo baseUrl . "seekerController/registration" ?>">Register</a>
      </p>
    </div>
    <div class="error">
      <?php if (isset($login_error))
        echo $login_error; ?>
    </div>
  </div>

  <script>
    function validateForm() {
      var phoneNumber = document.getElementById("phonenumber").value;
      // var phoneRegex = /^\d{10}$/;
 
      // if (!phoneRegex.test(phoneNumber)) {
      //   alert("Please enter a valid 10-digit mobile number.");
      //   return false;
      // }


      if (phoneNumber != "") {
                if (phoneNumber.length < 10) {
                    document.getElementById("pherr").innerHTML = "Mobile number must be in 10 digits";
                    // document.forms.phno.focus();
                    return false;
                } else if (phoneNumber.length > 11) {
                    document.getElementById("pherr").innerHTML = "Mobile number should not exceed 10 digits";
                    // document.forms.phno.focus();
                    return false;
                } else {
                    document.getElementById("pherr").innerHTML = "";
                }
            } else if (phoneNumber == "") {
                var phsms = "Mobile number must be filled out";
                document.getElementById("pherr").innerHTML = phsms;
                // document.forms.phno.focus();
                return false;
            }
      return true;
    }
  </script>


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>