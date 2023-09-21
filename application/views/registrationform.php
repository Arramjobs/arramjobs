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
        padding-right: 5%;
      }
    }

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
  <title>Employee Registration </title>
</head>

<body>

  <nav class="navcss navbar navbar-expand-lg sticky-top"
    style="background-color: navy; padding-top: 40px; padding-bottom: 40px;">
    <div class="container-fluid">
      <h5 class="tamilcss mx=sm-4" style="color:white;">அறம் வேலைவாய்ப்பு</h5>
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

  <div class="formcss container container-lg mt-5 mx-auto">
    <h2>
      <center>Employee Registration </center>
    </h2>
    <br>
    <!-- <form name="registration_form" method="post" onsubmit="return validateForm()"
      action="<?php echo baseUrl . "seekerController/registration" ?>"> -->

    <form name="registration_form" method="post" onsubmit="return validateForm()"
      action="<?php echo baseUrl . "seekerController/seekerRegistration" ?>">
      <div class="form-group">
        <label for="username">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
        <div id="username_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="email">Email ID</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <div id="email_error" class="error"></div>
      </div>
      <div class="form-group">
        <label for="phonenumber">Mobile number</label>
        <input type="tel" class="form-control" id="phonenumber" name="phonenumber"
          placeholder="Enter your mobile number">
        <div id="phone_error" class="error"></div>
      </div>
      <button type="Submit" class="btn btn-primary">Register</button>
    </form>
    <br>
    <div id="sign" class="d-flex justify-content-start align-items-center">
      <p>Already have an account ? <a id="regis" href="<?php echo baseUrl . "seekerController" ?>">login</a></p>
    </div>
  </div>


  <script>
    function validateForm() {
      var username = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var phone = document.getElementById('phonenumber').value;

      clearErrors();

      if (!username.trim()) {

        displayError('Name must be filled out', 'username_error');

        return false;
      }

      if (!email.trim()) {

        displayError('Email must be filled out', 'email_error');

        return false;
      } else if (!validateEmail(email)) {
        displayError('Please enter a valid email address', 'email_error');
        return false;
      }

      if (!phone.trim()) {

        displayError('Mobile number must be filled out', 'phone_error');
        return false;
      } else if (!validatePhone(phone)) {
        displayError('Please enter a valid mobile number', 'phone_error');

        return false;
      }

      // window.location.href = 'sample';
      // event.preventDefault();


      return true;
    }

    function validateEmail(email) {
      var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }

    function validatePhone(phone) {
      var regex = /^\d{10}$/;
      return regex.test(phone);
    }

    function displayError(errorMessage, errorElementId) {
      var errorElement = document.getElementById(errorElementId);
      errorElement.textContent = errorMessage;
    }

    function clearErrors() {
      var errorElements = document.getElementsByClassName('error');
      for (var i = 0; i < errorElements.length; i++) {
        errorElements[i].textContent = '';
      }
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