<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
  <title>Employer Login Form</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <!-- <div id="google_translate_element"></div>
  <script src="https://translate.Google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
  <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en'
      }, 'google_translate_element');
    }
  </script> -->
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

  <div class="formcss container container-lg mt-5 mx-auto ">
    <h3>Provider Login </h3>
    <form name="login_form" method="post" action="<?php echo baseUrl . "providerController/viewDashboard" ?>"
      onsubmit="return validateForm()">
      <div class="form-group">
        <label for="userID">Company Name:</label>
        <!-- <input type="text" class="form-control" id="userID" name="userID" placeholder="Enter your user name"> -->
        <input type="text" class="form-control" id="userID" name="userName" placeholder="Enter your user name">
        <div id="userID_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="password">Company Mobile Number:</label>
        <!-- <input type="password" class="form-control" id="password" name="password"> -->
        <input type="number" class="form-control" id="password" name="number"  placeholder="Enter your number">
        <div id="password_error" class="error"></div>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
      <br>
      <br>
    </form>
    <div id="sign">
      <p>Create an account ? <a id="regis" href="<?php echo baseUrl . "provider/registration" ?>">Register</a></p>
    </div>
  </div>
  <br>
  <br>
  <script>
    function validateForm() {
      var userID = document.getElementById('userID').value;
      var password = document.getElementById('password').value;

      if (userID.trim() === '') {
        displayError('User ID is required.', 'userID_error');
        return false;
      }

      if (password.trim() === '') {
        displayError('Password is required.', 'password_error');
        return false;
      }

      return true;
    }

    function displayError(errorMessage, errorElementId) {
      var errorElement = document.getElementById(errorElementId);
      errorElement.innerText = errorMessage;
    }
  </script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>