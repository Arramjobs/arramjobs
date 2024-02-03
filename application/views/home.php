<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>அறம் அறக்கட்டளை</title>

  <link href="<?php echo baseUrl; ?>/assets/title logo.png" rel="icon">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha384-0lG3cFw5FvJ8uBpWGpj4MlOOwDlelpzcvr7n3D5y/A8sPk5L4fhFV+XDI7KC5F5q" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Google Fonts -->

  <!-- Template Main CSS File -->
  <link href="<?php echo baseUrl; ?>/assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">
</head>
<style>
  
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
  html {
    scroll-padding-top: 120px;
  }

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: montserrat;
  }

  body {
    background-color: #F8F8F8;
  }

  .head {
    margin-top: 40px;
  }

  .carousel-item {
    min-height: 100px;
  }

  .wrapper {
    margin: auto;
    width: 75%;
    display: flex;
    overflow: hidden;
    padding: 0 auto;
  }

  .carousel-item img {
    width: 100%;
    height: 200px;
  }
  .carousel-inner::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0%;
    left: 0%;
    z-index: 1;
    overflow: hidden;
  }

  .carousel-item image {
    width: 100%;
    height: 100px;
  }

  .carousel-item active {
    content: '';
    position: absolute;
    width: 100%;
    height: 10%;
    top: 0%;
    left: 0%;
    z-index: 1;
  }

  .home-container {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('assets/Home_images/img.jpg');
    height: 100vh;
    width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding-left: 8%;
    padding-right: 8%;
    box-sizing: border-box;
    overflow: hidden;
  }

  .logo {
    width: 60px;
    cursor: pointer;
    margin-left: 40px;
  }

  .header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 3rem 6%; 
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header.sticky {
    background-color: #131D3B; 
    backdrop-filter: blur(10px);
}
.header .title1 {
  color: white;
}
.header ul {
  margin-right: 0;
}
.header ul li {
  display: inline-block;
  line-height: 30px;
  margin: 0 20px;
  list-style: none;
}
.header ul li a {
  display: inline-block;
  position: relative;
  padding: 10px;
  border-radius: 8px;
  text-decoration: none;
  color: #fff;
  font-size: 20px;
  transition: all 0.3s ease;
}
.header ul li a:hover {
  background: white;
  color: #131D3B;
  padding: 10px;
  border-radius: 8px;
}
label #btns,
label #cancel {
  color: white;
  font-size: 30px;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;  
}
#check {
  display: none;
}
.header ul .dropdown {
  position: absolute;
  width: 200px;
  /* background-color: #445964; */
  background-color: #333;
  opacity: 0;
  padding-left: 15px;
  z-index: -999;
  transition: all ease 0.5s;
  line-height: 60px;
}
.header ul li:hover .dropdown {
  z-index: 99;
  opacity: 1;
  border-radius: 8px;
}
.header .btn {
  width: 150px;
  height: 45px;
  border: 2px solid #fff;
  outline: none;
  border-radius: 8px;  
  background: transparent;
  color: #fff;
  transition: transform .6s;
  font-size: 18px;
}
.header .btn:hover {
  background: white;
  color: #222;
  display: block;
}
.header ul .dropdown li {
  margin: 0;
  width: 100%;
}
.header ul .dropdown li a {
  padding: 5px;
  display: inline-block;
  width: 100%;
}
.row1 {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.column1 {
  flex-basis: 50%;
}
.column1 h1 {
  color: #fff;
  font-size: 60px;
  font-weight: 600;

}
.column1 p {
  color: #fff;
  font-size: 35px;                                                                                                                                                                                  0px;
  line-height: 65px;
}
 
  .w-100 {
    height: 130vh;
  }

  .carousel-innerts {
    display: none;
  }

  .section-padding1 {
    margin-top: 0;
    padding-top: 60px;
    padding-bottom: 50px;
    margin-bottom: 80px;
  }

  .section-padding1 h2 {
    margin-top: 0px;
    margin-bottom: 8px;
  }

  .section-padding1 p {
    font-size: 18px;
    margin-bottom: 7px;
  }

  .recent-posts .section-title h1 {
    margin-top: -80px;
    padding-top: 20px;
    padding-bottom: 20px;
  }

  .section-padding {
    padding: 50px 0;
  }

  .wrapper .carousel {
    margin: 0 auto;
    width: 100%;
    overflow: hidden;
    display: grid;
    grid-auto-flow: column;
    grid-auto-columns: calc((100% / 3)- 12px);
    gap: 16px;
  }

  .carousel .card {
    height: 342px;
    list-style: none;
    border-radius: 8px;
  }

  .footer2,
  .footer3 {
    text-align: left;
  }

  .recent-posts article {
    box-shadow: 0 4px 16px rgba(var(--default-color-rgb), 0.1);
    padding-top: 30px;
    padding-bottom: 20px;
    height: 100%;
    border-radius: 10px;
    overflow: visible;
    transition: 0.5s;
    cursor: pointer;
  }

  .recent-posts .title {
    font-size: 20px;
    font-weight: 600;
    padding: 0;
    margin: 0 0 20px 0;
  }

  .recent-posts .title a {
    color: var(--secondary-color);
    transition: 0.3s;
  }

  .recent-posts .title a:hover {
    color: var(--primary-color);
  }

  .text-reset {
    font-size: 18px;
  }

  .recent-posts .cards:hover {
    transform: scale(1.05);
    transition: 0.5s;
    cursor: default;
  }

  .recent-posts .card {
    cursor: pointer;
  }

  .scroll-container {
    align-items: center;
    overflow: hidden;
    padding: 10px 0px;
    background: white;
    white-space: nowrap;
    position: relative;
  }

  .scroll:hover .RightToLeft {
    animation-play-state: paused;
    cursor: pointer;
  }

  .scroll {
    white-space: nowrap;
    padding: 2px 0px;
  }

  .scroll div {
    display: flex;
    gap: 3em;
  }

  .scroll p {
    font-size: 1.2em;
    display: inline-block;
    color: black;
    margin-bottom: 0;
    text-decoration: none;
  }

  .RightToLeft {
    display: inline-block;
    white-space: nowrap;
    animation: RightToLeft 10s linear infinite;
    text-decoration: none;
  }

  @keyframes RightToLeft {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

 .scroll-container {
    overflow: hidden;
    background: #e8e6e6;
  }

  .scroll {
    white-space: nowrap;
    overflow: hidden;
    position: relative;
  }

  .RightToLeft {
    display: inline-block;
    white-space: nowrap;
    animation: RightToLeft 15s linear infinite;
  }

  .RightToLeft a {
    display: inline-block;
    padding: 0 1em; 
    color: #567812;
    text-decoration: none;
  }

  @keyframes RightToLeft {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }
 
  @media only screen and (max-width:991px) {

    .card-sec {
      margin-top: 20px;
    }
    .nav img {
      left: 8%;
      top: 20px;
    }
    .row1 {
    flex-direction: column;
  }
  .column1 {
    margin-top: 15%;
  }
    .column1 h1 {
      font-size: 54px;
      text-align: center;
    }
    .column1 p {
      padding-top: 5%;
      font-size: 28px;
      text-align: center;
    } 
    .column2 h2 {
      margin-top: -20%;
      font-size: 25px;
    }
    .column2 .profile-card h4 {
      font-size: 20px;
    }
    .column2 .profile-card p {
      font-size: 14px;
    }
    .column2 .profile-card {
      height: 230px;
      width: 165px;
    }
    .column2 .profile-card:hover {
      height: 220px;
    }
    .column2 .profile-card:hover .social-links {
      padding-left: 60px;
    }
    .language-selector {
      margin-bottom: 12px;
    }
    .verticals-container .wrapper2 {
      width: 100%;
      display: flex;
      /* height: 15%; */
    }
    .verticals-container .wrapper2 h2 {
      font-size: 21px;
    }
    .verticals-container .wrapper2 .words {
      font-size: 20px;
    }
  }

  @media only screen and (max-width:590px) {
    .row1 {
    flex-direction: column;
    width: 100%;
  }
  .column1 {
    margin-top: 45%;
  }
    .column1 h1 {
      font-size: 30px;
      text-align: center;
      /* margin-top: 80%; */
    }
    .column1 p {
      padding-top: 5%;
      font-size: 20px;
      text-align: center;
    } 
    .column2 h2 {
      margin-top: 8%;
      font-size: 25px;
    }
    .column2 .profile-card h4 {
      font-size: 16px;
    }
    .column2 .profile-card p {
      font-size: 12px;
    }
    .column2 .profile-card {
      height: 210px;
      width: 135px;
    }
    .column2 .profile-card:hover {
      height: 225px;
    }
    .language-selector {
      margin-bottom: 12px;
    }
    .language-icon {
      display: none;
    }
    .fa-globe {
      display: block;
    }
  }
  
  @media only screen and (max-width:1206px) {
    label #btns {
      display: block;
      font-size: 25px;
    }
    .logo {
      margin: 12px;
    }
    .header {
      background: #131D3B;
    }
    ul {
      position: fixed;
      width: 50%;
      height: 100vh;
      top: 80px;
      left: 100%;
      transition: all .5s;
      padding: 15px 10px;
      background: black;
    }
    .header ul li {
      display: block;
      margin: 30px 0;
      line-height: 10px;
      width: 100%;
    }
    .header ul li a {
      font-size: 20px;
    }
    .header ul li .dropdown {
      position: relative;
      width: 50%;
      height: 20%;
      left: 0;
    }
    .header ul li .dropdown li a {
      padding: 20px;
    }
    .header ul li:hover .dropdown {
      display: block;
      position: static;
      padding: 10px;
    }
    #check:checked ~ ul {
      left: 0;
    }
    #check:checked ~ label #btns {
      display: none;
    }
    #check:checked ~ label #cancel {
      display: block;
    }
  }

  @media only screen and (max-width:767px) {
    .section-padding1 {
      margin-top: -10px;
      margin-bottom: 40px;
    }

    .provider.section-padding {
      div.about-text {
        order: 2;
      }
      div.about-img-img {
        order: 1;
      }
      .wrapper .card-text {
        overflow: hidden;
      }
    }

    .section-paddings {
      padding-bottom: 100px;
    }

    .head {
      margin-top: 40px;
    }

    .card-sec {
      margin-top: 30px;
    }

    .about-img-img {
      padding-top: 30px;
    }

    .carousel-item active {
      background-image: hero-bg;
    }

    .m-20 {
      font-size: 10px;
    }

    .w-100 {
      height: 50vh;
    }

    .section-paddings {
      padding-bottom: 10px;
    }

    .carousel-inners {
      display: none;
      margin-left: 50px;
    }

    section.pt-5.pb-5 {
      display: none;
    }

    .carousel-innerts {
      display: flex;
      margin-top: 60px;
      padding-bottom: 40px;
    }

    .footer2,
    .footer3 {
      text-align: center;
    }

    .about-text h2 {
      margin-top: 25px;
    }

    .scroll-container {
      padding: 5px 0px;
    }

    .RightToLeft {
      animation: RightToLeft 10s linear infinite;
    }
  
    ul {
      position: fixed;
      width: 100%;
      height: 100vh;
      top: 80px;
      left: 100%;
      transition: all .5s;
      padding: 15px 10px;
      background: black;
    }
    .header ul li {
      display: block;
      margin: 30px 0;
      line-height: 20px;
      width: 100%;
    }
    .header ul li a {
      font-size: 20px;
    }
    .header ul li .dropdown {
      position: relative;
      width: 50%;
      height: 20%;
      left: 0;
    }
    .header ul li .dropdown li a {
      padding: 20px;
    }
    .header ul li:hover .dropdown {
      display: block;
      position: static;
      padding: 10px;
    }
    #check:checked ~ ul {
      left: 0;
    }
    #check:checked ~ label #btns {
      display: none;
    }
    #check:checked ~ label #cancel {
      display: block;
    }
    .profile-card:hover .caption .social-links {
  opacity: 1;
  transform: translateY(-70px);
  padding-left: 15%;
  font-size: 8px;
  /* display: flex; */
}
  }

    .language-selector {
      position: relative;
      display: inline-block;
      cursor: pointer;
      margin-right: 30px;
    }

    .language-icon {
      display: block;
      align-items: center;
      justify-content: center;
      color: white;
      padding-right: 15px;
      border-radius: 8px;
      border: 2px solid #a899a0;
      padding: 8px; 
      font-size: 18px;
    }
    .language-icon:hover {
      color: #333;
      background-color: white;
    }
    .fa-globe {
      display: none;
    }
    .language-dropdown {
      position: absolute;
      width: auto;
      background-color: #222;
      opacity: 0;
      z-index: -999;
      transition: all ease 0.5s;
      line-height: 30px;
      padding-top: 10px;
    }

    .language-option {
      padding: 8px;
      cursor: pointer;
    }

    .language-option a {
      color: white;
      padding: 8px;
    }
    .language-option a:hover {
      text-decoration: none;
      border-radius: 8px;
      color: #333; 
      background-color: white;   
      padding: 8px;  
    }

    .language-selector:hover .language-dropdown {
      z-index: 99;
      opacity: 1;
      border-radius: 8px;
      color: white;
    }
    img {
      max-width: 100%;
      height: auto; 
    }

    .image-section {
      display: flex;
      justify-content: flex-end;
      padding: 30px;
      background: #f7f6f5;
    }

    .verticals-container {
      display: flex;
      flex-direction: column;
      float: left;
      padding: 20px;
      width: 100%;
      gap: 10px;
      transition: .6s;
      cursor: default;
    }
    .verticals-container h3 {
      position: relative;
      font-size: 40px ;
      font-weight: bold;
      letter-spacing: 1px;
      background: linear-gradient(90deg, #000, #567812, #000);
      overflow: hidden;
      animation: animates 10s linear infinite;
      background-size: 80%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: rgba(255, 255, 255, 0.25);
    }
  @keyframes animates {
    0% {
      background-position: -500%;
    }
    100% {
      background-position: 500%;
    }
  }
  .verticals-title {
      position: relative;
      text-transform: uppercase;
      font-size: 40px;
      font-weight: bold;
      letter-spacing: 4px;
      background: linear-gradient(90deg, #3798d4, #000, #3798d4);
      overflow: hidden;
      /* background: linear-gradient(90deg, red, yellow, red); */
      animation: animate 5s linear infinite;
      background-size: 80%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: rgba(255, 255, 255, 0.25);
    }
  @keyframes animate {
    0% {
      background-position: -500%;
    }
    100% {
      background-position: 500%;
    }
  }

.verticals a{
  position: relative;
  color: #2061ca;;
  text-decoration: none;
  font-size: 20px;
  letter-spacing: 0.02em;
  font-weight: 600;
  padding: 10px 20px;
  transition: 0.5s;
  border-radius: 10px;
  box-shadow: 0 0 5px #0e6ffc;
  background: transparent;
}
.verticals a:hover {
  background: #0e6ffc;
  letter-spacing: 0.1em;
  box-shadow: 0 0 30px #0e6ffc;
  text-decoration: none;
  color: white;
  text-transform: uppercase;
}
@font-face {
  font-family: Exo;
  src: url(./fonts/Exo2.0-Medium.otf);
}
.column1 h1 {
  margin-top: 10%;
  margin-bottom: 20px;
}
/* .column2 p {
  padding-top: 55%;
} */
.column2 {
  margin-top: 20%;
  align-items: center;
}
.column2 .profile {
  display: flex;
}
.column2 h2 {  
  text-align: center;
  color: white;
  font-weight: bold;
  padding-bottom: 30px;
}
.profile-card {
    position: relative;
    width: 180px;
    height: 250px;
    background: #a899a0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 22px #3336;
    transition: .6s;
    margin: 0px 10px;
}
.profile-card:hover {
    border-radius: 8px;
    height: 240px;
    background: white;
}
.profile-card .img {
    width: 100%;
    height: 90%;
    transition: .6s;
    z-index: 99;
    text-align: center;
    padding-top: 5px;
}
.profile-card:hover .img {
    transform: translateY(-60px);
    border-radius: 8px;
}
.profile-card:hover h4 {
    transform: translateY(-90px);
    color: #3188eb;
}
.img img {
    position: relative;
    width: 100%;
    box-shadow: 0 0 22px #3336;
    border-radius: 8px;
    transition: .6s;
}
.caption h4 {
    text-align: center;
    transform: translateY(-40px);
    opacity: 1;
    transition: .6s;
    font-size: 20px;
    padding-top: 20px;
    color: white;
}
.caption p {
    text-align: center;
    transform: translateY(-90px);
    opacity: 0;
    transition: .6s;
    font-size: 17px;
    color: #567812;
    margin: 3px 0 0 0;
    font-weight: bold;
}
.profile-card:hover .caption p {
    opacity: 1;
}
.caption .social-links {
    color: black;
    font-size: 20px;
    transition: .6s;
    transform: translateY(-70px);
    opacity: 0;
    display: flex;
}
.profile-card:hover .caption .social-links {
  opacity: 1;
  transform: translateY(-70px);
  padding-left: 32%;
  display: flex;
}

.wrapper2{
    box-sizing: content-box;
    background-color: #fff;
    height: 40px;
    width: 40%;
    padding: 20px;
    display: flex;
    border-radius: 10px;
    box-shadow: 0 20px 25px rgba(0,0,0,0.2);
    margin-bottom: 30px;
}
.wrapper2 h2 {
  background: linear-gradient(90deg, #3798d4, #000, #3798d4);
  overflow: hidden;
  /* background: linear-gradient(90deg, red, yellow, red); */
  animation: animate 5s linear infinite;
  background-size: 80%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: rgba(255, 255, 255, 0.25);
  font-weight: bold;
}
@keyframes animate {
  0% {
    background-position: -500%;
  }
  100% {
    background-position: 500%;
  }
}
.words{
    overflow: hidden;
    font-size: 25px;
    padding-left: 20px;
}
.words span{
    display: block;
    height: 100%;
    color: #0e6ffc;
    animation: spin_words 6s infinite;
    font-weight: 600;
}
@keyframes spin_words{
    10%{
        transform: translateY(-112%);
    }
    25%{
        transform: translateY(-100%);
    }
    35%{
        transform: translateY(-212%);
    }
    50%{
        transform: translateY(-200%);
    }
    60%{
        transform: translateY(-312%);
    }
    75%{
        transform: translateY(-300%);
    }
    85%{
        transform: translateY(-412%);
    }
    100%{
        transform: translateY(-400%);
    }
}
.btn2 {
  border: 2px solid #fff;
  border-radius: 8px;
}
  </style>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

    <div class="home-container"> 
           <header class="header" id="header">
            <img src="<?php echo baseUrl; ?>/assets/title logo.png" alt="Arram jobs" class="logo">
            <nav>
              <input type="checkbox" id="check">
              <label for="check">
                <i class="fas fa-bars" id="btns"></i>
                <i class="fas fa-times" id="cancel"></i></label>
              <ul>
                <li><a href="#">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#footercontact">Contact</a></li>
                  <li class="btn2"><a href="<?php echo baseUrl . "Candidate" ?>">Login</a></li>
                  <li class="btn2"><a href="<?php echo baseUrl . "Candidate/registration" ?>">Register</a></li>
                
               <li><a href="#" class="dropdown-toggle">For employers</a>
                  <ul class="dropdown">
                  <li><a href="<?php echo baseUrl . "Employer/login" ?>">Login</a></li>
                    <li><a href="<?php echo baseUrl . "Employer/registration" ?>">Register</a></li>
                  </ul></li>

              </ul>
            </nav>
            <div class="language-selector">
    <div class="language-icon dropdown-toggle"><a>Language</a>
    <i class="fa-solid fa-globe trans"></i>
  </div>
    <div class="language-dropdown">
      <div class="language-option" onclick="changeLanguage('ta')"><a href="<?php echo baseUrl . "Welcome/Tamil" ?>">தமிழ்</a></div>
    </div>
  </div>
           </header>

           <div class="row1">
            <div class="column1">
              <h1>ARRAM JOBS</h1>
              <p>"Find Your Dream Job with Us"</p>
            </div>

            <div class="column2">           
        <div class="profile-container">
    <h2>TRUSTEES</h2>
    <div class="profile" >
  <div class="profile-card">
            <div class="img">
            <img src="assets/Saraswathi4.png" alt="Dr.C. Saraswathi">
            </div>
            <div class="caption">
                <h4>Dr.C.Saraswathi</h4>
                <p>Secretary</p>
                <div class="social-links">
                    <a href="https://www.youtube.com/@arramcharitytrust" target="_blank"><i class="fab fa-youtube" style="color:red;"></i></a>
                    <a href="https://www.instagram.com/drcksaraswathi/" target="_blank"><i class="fab fa-instagram" style="color:#e64096;"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
            <img src="assets/Kiruthika2.png" alt="Mrs. Kirthika Shivkumar">
            </div>
            <div class="caption">
                <h4>Mrs.Kirthika</h4>
                <p>Managing Trustee</p>
                <div class="social-links">
                    <a href="https://www.facebook.com/kirthikashivkumarerode" target="_blank"><i class="fab fa-facebook" style="color:#316FF6;"></i></a>
                    <a href="https://www.instagram.com/kirthika_shivkumar/" target="_blank"><i class="fab fa-instagram" style="color:#e64096;"></i></a>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
            </div>
           </div>
          <script>
    document.addEventListener('DOMContentLoaded', function() {
      var header = document.getElementById('header');
      var menuIcon = document.querySelector('.menu-icon');
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          header.classList.add('sticky');
        } else {
          header.classList.remove('sticky');
        }
      });

      menuIcon.addEventListener('click', function() {
        nav.classList.toggle('show');
      });
    });
  </script>
    <!-- Home page scroll -->
    <section class="image-section">
   
   <div class="verticals-container">
    <h3>We largely work and touch on</h3>
  <div class="wrapper2"><h2>Five Verticals</h2>
  <div class="words">
    <!-- <div class="word" id="health"> -->
      <span>Health</span>
    <!-- </div><br> -->
    <!-- <div class="word" id="food"> -->
      <span>Food</span>
    <!-- </div><br> -->
    <!-- <div class="word" id="spiritual"> -->
      <span>Spiritual</span>
    <!-- </div><br> -->
    <!-- <div class="word" id="education"> -->
      <span>Education</span>
    <!-- </div><br> -->
    <!-- <div class="word" id="environment"> -->
      <span>Environment</span>
    <!-- </div><br> -->
    </div>
  </div>
  <div class="verticals">
  <a href="https://arramsei.org/"  target="_blank">Read more</a>
  </div>
  </div>
  
    </section>
    <div class="scroll-container">
      <div class="scroll">

        <div class="RightToLeft" id="scrollContent">
          <a href="#accessid" style="text-decoration: none;" onclick="highlightContent('accessid')">
            <p><i class="bi bi-phone" style="display:block; color:#053686;"><b> Mobile Accessibility </b></i></p>
          </a>

          <a href="#accredit" style="text-decoration: none;" onclick="highlightContent('accredit')">
            <p><i class="bi bi-book-fill" style="display:block; color:#053686;"> <b>Accredited</b></i></p>
          </a>

          <a href="#interface" style="text-decoration: none;" onclick="highlightContent('interface')">
            <p><i class="bi bi-laptop-fill" style="display:block; color:#053686;"> <b>User-friendly Interface</b></i></p>
          </a>

          <a href="#jobid" style="text-decoration: none;" onclick="highlightContent('jobid')">
            <p><i class="bi bi-subtract" style="display:block; color:#053686;"> <b>Extensive Job opportunities</b></i></p>
          </a>

          <a href="#quickresponse" style="text-decoration: none;" onclick="highlightContent('quickresponse')">
            <p><i class="bi bi-shield-shaded" style="display:block; color:#053686;"> <b>Quick Response</b></i></p>
          </a>

          <a href="#search" style="text-decoration: none;" onclick="highlightContent('search')">
            <p><i class="bi bi-tablet-landscape" style="display:block; color:#053686;"> <b>Advanced search and filtering</b></i></p>
          </a>
        </div>

      </div>
    </div>

    <script>
      function highlightContent(contentId) {

        var element = document.getElementById(contentId);

        element.classList.add('bg-secondary');

        setTimeout(function () {
          element.classList.remove('bg-secondary');
        }, 2000);
      }
    </script>

    <section id="about" class="about section-padding1" style="background-color: #f7f6f5;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="<?php echo baseUrl . "assets/blog-2.jpg" ?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center"
            style="text-align: justify; font-size: medium;">
            <div class="about-text">
              <h2><b>About Arramjobs</b></h2>
              <p>At Arram Jobs, we're committed to providing comprehensive solutions that cater to the unique needs of
                both job seekers and employers. Our platform is designed to offer a range of valuable services and
                benefits, ensuring a seamless and rewarding experience for all.</p>
              <p>At Arram Jobs, we are on a mission to connect talented individuals with the career opportunities that
                align with their aspirations. We believe that the right job can transform lives, foster personal growth,
                and drive organizational success. With our innovative approach to recruitment, we aim to bridge the gap
                between exceptional talent and top-tier employers, creating a brighter future for both.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="recent-posts" class="recent-posts px-4"
      style="margin-bottom: 30px; margin-top: 10px; background-color: #f7f6f5;">

      <div class="container section-title" data-aos="fade-up">
        <h1 class="text-center"><b>What does Arram Offer</b></h1>
      </div>

      <div class="container">
        <div class="row">
          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/Home_images/search.jpg" ?>" class="card-img-top" alt="...">
                <h5 class="card-title pt-4"><b>JOB SEARCHING</b></h5>
                <p class="lead px-4" style="color: black; font-size: 16px; text-align: justify;">
                  At Arram Job Portal, we're dedicated to help you to unlock your potential. Whether you're a recent
                  graduate
                  starting your career or a seasoned expert seeking new challenges, we're your trusted job search
                  partner.</p>
              </div>
            </div>
          </div>

          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/jobprovide.jpg" ?>" class="card-img-top" alt="...">
                <h5 class="card-title pt-4"><b>JOB PROVIDING</b></h5>
                <p class="lead px-4" style="color: black; font-size: 16px; text-align: justify;">
                  Job Portal, we're dedicated to help you to unlock your potential. Whether you're a recent graduate
                  starting your career or a seasoned expert seeking new challenges, we're your trusted job search
                  partner.</p>
              </div>
            </div>
          </div>

          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/uniquefeature.jpeg" ?>" class="card-img-top" alt="...">
                <h5 class="card-title pt-4"><b>ARRAM UNIQUE FEATURES</b></h5>
                <p class="lead px-4" style="color: black; font-size: 16px; text-align: justify;">
                  Arram Job Providing stands out with unique features redefining recruitment. Our platform uses
                  cutting-edge
                  algorithms to match skills, culture, and personality for ideal candidate-employer pairings.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Six Reasons For People Choosing Us -->

    <div class="section services section-padding" id="services"
      style="background-color: #f7f6f5; padding-top: 40px;  margin-top:-30px;padding-bottom:5px;">
      <div class="container" style="padding-top:30px;">
        <div class="row">
          <div class="col-md-12">
            <div class="section-header text-center pb-5">
              <h4><b>Why Choose Us</b></h4>
              <p style="font-size: 50px;" class="custom-paragraph">Six Reasons For People Choosing Us</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4 " id="accessid"
              style="background-color: #fff;box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-phone" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 22px; color: black;">Mobile
                  Accessibility</h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  Mobile accessibility aims to remove barriers, enhance user experiences, and enable all users,
                  including
                  those with disabilities and those using mobile devices exclusively, to access and interact with job
                  listings, apply for positions, and navigate the portal's features effortlessly.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center  pb-4 pb-xl-1" id="accredit"
              style="background-color: #fff;  box-shadow: 0 0 11px rgba(33,33,33,.2); ">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-book-fill" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 20px; color: black;"> Accredited</h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-bottom: 0px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  An accredited job portal connects job seekers and employers after obtaining official recognition and
                  certification from accrediting bodies. Accreditation involves evaluating the portal's operations,
                  features, and compliance with industry standards, legal regulations, and ethics.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4" id="interface"
              style="background-color: #fff;  box-shadow: 0 0 11px rgba(33,33,33,.2); ">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-laptop-fill" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 32px; color: black;">User-friendly
                  Interface</h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-bottom: 12px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  A job portal's user-friendly interface prioritizes easy navigation, clarity, and effectiveness,
                  benefiting the job seekers and the employers by simplifying the search for their employment
                  opportunities and hiring processes.</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4" id="jobid"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-subtract" style="color: black;  font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">Extensive Job
                  opportunities</h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-bottom: 5px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  An abundance of 'extensive job opportunities' signifies a robust job market, offering plentiful
                  prospects. This is highly advantageous for job seekers, career changers, and professionals aiming to
                  explore new roles or industries, facilitating diverse career growth.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-1" id="quickresponse"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-shield-shaded" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">Quick Response
                </h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  Quick response" the prompt and timely feedback or acknowledgment provided to
                  job seekers or employers when they take certain actions or submit applications within the platform.
                  This
                  feature is designed to enhance the user experience by ensuring that users receive immediate
                  confirmation. </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4" id="search"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-tablet-landscape" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 13px; color: black;">Advanced search
                  and
                  filtering </h4>
                <p class="lead"
                  style="color: black; font-size: 16px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  The
                  goal of advanced search and filtering features in a jobs portal is to empower job seekers to pinpoint
                  job listings that align closely with their unique preferences and qualifications, saving time and
                  increasing the likelihood of finding the most suitable job opportunities. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- seeker -->

    <section id="candidate" class="seeker section-padding" style="background-color: #fff;padding-bottom:50px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-12">
            <div class="about-img">
              <img src="<?php echo baseUrl . "assets/Home_images/employee4.jpg" ?>" alt="" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 justify-content-center" style="text-align: justify;">
            <div class="about-text1 pt-4 pt-lg-0" style="margin-top:-35px;">
              <p class="abtcandidate fs-1" style="padding-top:20px; ">Candidate</p>
              <p style="font-size: 18px;">At Arram Job Portal, our unwavering commitment is to empower individuals to
                realize their utmost potential. Regardless of where you stand in your career journey—whether you're a recent graduate
                venturing into the professional landscape, a seasoned professional yearning for fresh challenges, or somewhere in
                between—we are your steadfast companion in the job search expedition. With our comprehensive platform,
                you gain access to a wealth of opportunities, career resources, and expert guidance to navigate the
                ever-evolving job market. We prioritize your aspirations, offering support and solutions tailored to
                your unique needs. </p>
            </div>
          </div>
        </div>
      </div>
    </section>

     <!-- provider -->

    <section id="employer" class="provider section-padding"
      style="background-color: #f2f8fa; padding-top:50px; padding-bottom:50px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-12 order-lg-1 order-2 mt-md-2 justify-content-center "
            style="text-align: justify;">
            <div class="about-text pt-4 pt-lg-0" style="margin-top:-25px; margin-right:20px;">
              <p class="fs-1" style="padding-top:20px; ">Employer</p>
              <p style="font-size: 18px;">At Arram Job Providing, we firmly believe that the key to a prosperous
                organization lies in having the
                right people onboard. Be it team expansion, project initiation, or the need for specialized skills, we
                serve as your dependable partner in talent acquisition. With our extensive network and expertise, we
                identify and connect you with top-notch professionals who fit your unique requirements. Our commitment
                to
                excellence ensures that you receive candidates who not only meet but exceed your expectations. We're
                dedicated to streamlining your recruitment process, saving you time and resources, so you can focus on
                what you do best - achieving your business goals.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12 order-lg-2 order-1">
            <div class="about-img-img">
              <img src="<?php echo baseUrl . "assets/Home_images/img.jpg" ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- Team section -->
    <section id="team" class="team section-paddings">
    <!-- <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-header text-center pb-5">
    <p class="head" style="font-size: 50px;">Team</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, voluptatem?</p>
    </div>
        </div>
      </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3" id="card-sf">
        <div class="card text-center">
          <div class="card-body">
            <img src="<?php echo baseUrl . "assets/team-6.jpg" ?>" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2">Person 1</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

            <p class="socials">
              <i class="bi bi-twitter text-dark mx-1"></i>
              <i class="bi bi-facebook text-dark mx-1"></i>
              <i class="bi bi-linkedin text-dark mx-1"></i>
              <i class="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="<?php echo baseUrl . "assets/team-3.jpg" ?>" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2">Person 2</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

            <p class="socials">
              <i class="bi bi-twitter text-dark mx-1"></i>
              <i class="bi bi-facebook text-dark mx-1"></i>
              <i class="bi bi-linkedin text-dark mx-1"></i>
              <i class="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="<?php echo baseUrl . "assets/team-4.jpg" ?>" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2">Person 3</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

            <p class="socials">
              <i class="bi bi-twitter text-dark mx-1"></i>
              <i class="bi bi-facebook text-dark mx-1"></i>
              <i class="bi bi-linkedin text-dark mx-1"></i>
              <i class="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card text-center">
          <div class="card-body">
            <img src="<?php echo baseUrl . "assets/team-1.jpg" ?>" alt="" class="img-fluid rounded-circle">
            <h3 class="card-title py-2">Person 4</h3>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, in.</p>

            <p class="socials">
              <i class="bi bi-twitter text-dark mx-1"></i>
              <i class="bi bi-facebook text-dark mx-1"></i>
              <i class="bi bi-linkedin text-dark mx-1"></i>
              <i class="bi bi-instagram text-dark mx-1"></i>
            </p>
          </div>
        </div>
      </div>
    </div> 
    </div> -->
  </section>

    <section class="pt-5 pb-5">
      <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="col-6" style="margin-top:10px;">
              <!-- <h3 class="mb-3">Carousel cards title </h3> -->
            </div>
            <div class="col-6 text-right">
              <a class="btn btn-secondary ws-1 mb-3 mr-1" href="#carouselExampleIndicators2" role="button"
                data-slide="prev">
                <i class="fa fa-arrow-left"></i>
              </a>
              <a class="btn btn-secondary mb-3 ws-1 " href="#carouselExampleIndicators2" role="button"
                data-slide="next">
                <i class="fa fa-arrow-right"></i>
              </a>
            </div>
            <div class="col-12">
              <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel" data-interval="5000">

                <div class="carousel-inners">
                  <div class="carousel-item active">
                    <div class="row">

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="" src="<?php echo baseUrl . "assets/special1.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>

                        </div>
                      </div>

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="" src="<?php echo baseUrl . "assets/special2.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="100%x280"
                            src="<?php echo baseUrl . "assets/special3.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="100%x280"
                            src="<?php echo baseUrl . "assets/special4.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>

                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="100%x280"
                            src="<?php echo baseUrl . "assets/special5.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="100%x280"
                            src="<?php echo baseUrl . "assets/special6.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>


  <div class="wrapper">
    <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-slider" data-slide-to="1"></li>
        <li data-target="#carousel-slider" data-slide-to="2"></li>
      </ol>
      <!--Indicators-->
      <!--Slides-->
      <div class="carousel-innerts" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <div class="col-md-4 mb-3">
            <div class="card">
              <image class="img-fluid" alt="" src="<?php echo baseUrl . "assets/special1.jpg" ?>">
                <div class="card-body" style="padding:1rem">
                  <h4 class="card-title"><b>Special title treatment</b></h4>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>

            </div>
          </div>
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="card">
            <image class="img-fluid " alt="" src="<?php echo baseUrl . "assets/special2.jpg" ?>">
              <div class="card-body" style="padding:1rem">
                <h4 class="card-title"><b>Special title treatment</b></h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
          </div>
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <div class="card">
            <image class="img-fluid" alt="100%x280" src="<?php echo baseUrl . "assets/special3.jpg" ?>">
              <div class="card-body" style="padding:1rem">
                <h4 class="card-title"><b>Special title treatment</b></h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

              </div>
          </div>
        </div>
        <!--/Third slide-->
        <!--fourth slide-->
        <div class="carousel-item">
          <div class="card">
            <image class="img-fluid " alt="" src="<?php echo baseUrl . "assets/special4.jpg" ?>">
              <div class="card-body" style="padding:1rem">
                <h4 class="card-title"><b>Special title treatment</b></h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
          </div>
        </div>
        <!--/Second slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="card">
            <image class="img-fluid " alt="" src="<?php echo baseUrl . "assets/special5.jpg" ?>">
              <div class="card-body" style="padding:1rem">
                <h4 class="card-title"><b>Special title treatment</b></h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
          </div>
        </div>
        <!--/Second slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <div class="card">
            <image class="img-fluid " alt="" src="<?php echo baseUrl . "assets/special6.jpg" ?>">
              <div class="card-body" style="padding:1rem">
                <h4 class="card-title"><b>Special title treatment</b></h4>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              </div>
          </div>
        </div>
        <!--/Second slide-->
      </div>
    </div>
  </div>
  <!-- Include Bootstrap JS and jQuery -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <!-- Footer -->
  <footer class="text-center text-lg-start text-muted" style="background-color: #131D3B;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-around p-4 border-bottom" id="contact">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block" style="color:white ;">
        <h5>Get connected with us on social networks:</h5>
      </div>
     
      <div class="me-md-5">
        <a href="https://www.facebook.com/Arram.2019?mibextid=ZbWKwL" class="me-4 link-secondary" target="_blank">
          <i class="fa-brands fa-facebook-f" style="color: white;"></i>
        </a>
        <a href="https://www.youtube.com/@arramcharitytrust" class="me-4 link-secondary" target="_blank">
          <i class="fa-brands fa-youtube" style="color: white;"></i>
        </a>
        <a href="https://www.instagram.com/arramcharitytrust/?utm_source=qr&igshid=ZDc4ODBmNjlmNQ%3D%3D"
          class="me-4 link-secondary" target="_blank">
          <i class="fa-brands fa-instagram" style="color: white;"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <section class="">
      <div class="container text-center text-md-start" style="margin-top: 40px;">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
              <img src="<?php echo baseUrl . "assets/title logo.png" ?>" alt="ArramJobs" height="50" width="65">
              ARRAM JOBS
            </h5>
            <p style="color: white;text-align:justify;font-size:18px">Arram Jobs has rapidly emerged as a trusted
              partner in the recruitment industry. Our journey began with a simple yet powerful idea.
            </p>
          </div>
          
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer2">
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
              Who We Are
            </h5>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#about" class="text-reset" style="text-decoration: none; ">About Us</a>
            </p>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#candidate" class="text-reset" style="text-decoration: none;">Candidate</a>
            </p>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#employer" class="text-reset" style="text-decoration: none;">Employer</a>
            </p>          
          </div>
          <!-- Grid column -->

          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 footer3" id="footercontact">
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">Contact</h5>
            <p style="color: white;"><i class="fas fa-home me-3 text-reset" style="color: white;"></i>H-72, Periyar
              Nagar, Erode.
            </p>
            <p style="color: white;">
              <i class="fas fa-envelope me-3 text-reset" style="color: white;"></i>
              <a href="mailto:arramjobs@gmail.com" style="color: white; text-decoration: none; font-size:18px"
                onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'"> arramjobs@gmail.com</a>
            </p>
            <p style="color: white;">
              <i class="fas fa-phone me-3 text-reset" style="color: white;"></i>
              <a href="tel:7418334443" style="color: white; text-decoration: none; font-size:18px"
                onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">+91 7418334443</a>
            </p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>

    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="color: white;">
      © 2023 Copyright:
      <a class="text-reset fw-bold" style="color: white; text-decoration: none;"
        href="http://arramjobs.in/">Arramjobs.in</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo baseUrl; ?>/assets/js/main.js"></script>
</body>

</html>