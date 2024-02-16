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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tiro+Tamil:ital@0;1&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="style.css">
</head>
<style>
 
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
  html {
    scroll-padding-top: 120px;
  }
  /* .tiro-tamil-regular {
  font-family: "Tiro Tamil", serif;
  font-weight: 400;
  font-style: normal;
}
.tiro-tamil-regular-italic {
  font-family: "Tiro Tamil", serif;
  font-weight: 400;
  font-style: italic;
} */

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: "Tiro Tamil", serif;
    line-height: 24px;
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

  .carousel-caption {
    z-index: 2;
    text-align: center;
    justify-content: center;
    margin-top: 50px;
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


  .carousel-caption h2 {
    font-size: 24px;
    font-weight: bold;
    font-size: 65px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    color: #1ea6ec;
    font-style: bold;
  }

  .carousel-caption p {
    margin: auto;
    font-size: 35px;
    list-style: 1.9;
    padding-bottom: 160px;
    color: #9acd32;
    text-align: center;
    margin-bottom: 16%;
  }

  .carousel-caption h3 {
    font-size: 24px;
    font-weight: bold;
    font-size: 60px;
    text-transform: uppercase;
    letter-spacing: 2px;
    text-align: center;
    margin: 20px 0;
    padding-bottom: 0px;
    color: #1ea6ec;
    font-style: bold;
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
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php echo baseUrl . "assets/Home_images/img.jpg" ?>');
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
    padding: 50px 45px; 
    background: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.header.sticky {
   background-color: #131D3B; 
   backdrop-filter: blur(10px);
}
.header ul {
  margin-right: 2px;
}
.header ul li {
  display: inline-block;
  line-height: 60px;
  margin:0 10px;
  list-style: none;
}
.header ul li a {
  display: inline-block;
  position: relative;
  padding: 18px 8px;
  border-radius: 8px;
  text-decoration: none;
  color: #fff;
  font-size: 15px;
  transition: all 0.3s ease;
}
.header ul li a:hover {
  color: #131D3B;
  padding: 18px 8px;
  border-radius: 8px;
  background-color: white;
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
  margin-top: 20px;
}
#check {
  display: none;
}
.header ul .dropdown {
  position: absolute;
  width: 200px;
  background-color: #333;
  z-index: -999;
  opacity: 0;
  padding-left: 15px;
  transition: all ease 0.5s;
  line-height: 60px;
}
.header ul li:hover .dropdown {
  z-index: 99;
  opacity: 1;
  border-radius: 8px;
}
.header .btn {
  width: 135px;
  height: 45px;
  border: 2px solid #fff;
  outline: none;
  border-radius: 8px;  
  background: transparent;
  color: #fff;
  transition: transform .6s;
  font-size: 15px;
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
  font-size: 62px;
  margin-bottom: 10px;
  color: #fff;
  margin-top: 30%;
}
.column1 p {
  font-size: 25px;
  margin-top: 40px;
  color: #fff;
  line-height: 45px;
}
  .w-100 {
    height: 130vh;
  }

  .carousel-innerts {
    display: none;
  }

  .section-padding1 {
    /* margin-top: 0; */
    padding-top: 50px;
    padding-bottom: 50px;
    margin-bottom: 80px;
    text-align: justify;
  }

  .section-padding1 h2 {
    font-size: 25px;
  }

  .section-padding1 p {
    font-size: 12px;
    margin-bottom: 7px;
  }

  .recent-posts .section-title h1 {
    margin-top: -80px;
    padding-top: 20px;
    margin-bottom: 40px;
    font-size: 32px;
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
    font-size: 12px;
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
    font-size: 16px;
  }

  .text-reset1 {
    font-size: 16px;
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
    font-size: 14px;
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

  .about-text p {
      font-size: 14px;
    }
    .about-img-img {
      margin-top: 25px;
    }

  @keyframes RightToLeft {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }
  .custom-paragraph {
    font-size: 32px; 
  padding-top: 30px;
  margin-bottom: 40px;
  }
  .lead.px-4{
    color: black;
    text-align: justify;
    font-size: 16px;
  }

  @media only screen and (max-width:991px) {
    .card-sec {
      margin-top: 20px;
    }
    .nav img {
      left: 8%;
      top: 20px;
    }
    
  }

  @media only screen and (max-width:1200px) {
    .row1 {
    flex-direction: column;
    width: 100%;
  }
    .column1 h1 {
      font-size: 35px;
      text-align: center;
      font-weight: bold;
      color: #E63B60;
    margin-top: 24%;
    }
    .column1 p {
      font-size: 20px;
      text-align: center;
      padding-top: 5px;
      color: bisque;
    }
    .column2 h2 {
      font-size: 22px;
    }
    .column2 .profile-card p {
      font-size: 13px;
    }
    .column2 .profile-card {
      height: 230px;
      width: 165px;
    }
    .column2 .profile-card:hover {
      height: 220px;
    }
    .column2 .profile-card h4 {
      font-size: 16px;
    }
  }

  @media only screen and (max-width:1164px) {
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
      /* padding: 5px 10px; */
      background: black;
    }
    .header ul li {
      display: block;
      margin: 10px 0;
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
  @media only screen and (max-width:550px) {
  
    .column1 h1 {
      margin-top: 35%;
      font-size: 30px;
      text-align: center;
    }
    .column1 p {
      /* padding-top: 5%; */
      font-size: 20px;
      text-align: center;
    } 
    .column2 h2 {
      /* margin-top: 8%; */
      font-size: 22px;
    }
    .column2 .profile-card h4 {
      font-size: 16px;
    }
    .column2 .profile-card p {
      font-size: 12px;
    }
    .column2 .profile-card {
      height: 210px;
      width: 155px;
    }
    .column2 .profile-card:hover {
      height: 225px;
    }
  }
  @media only screen and (max-width:370px) {
  
  .column1 h1 {
    margin-top: 43%;
    font-size: 30px;
    text-align: center;
  }
  .column1 p {
    /* padding-top: 5%; */
    font-size: 18px;
    text-align: center;
  } 
  .column2 h2 {
    /* margin-top: 8%; */
    font-size: 22px;
  }
  .column2 .profile-card h4 {
    font-size: 14px;
  }
  .column2 .profile-card p {
    font-size: 12px;
  }
  .column2 .profile-card {
    height: 210px;
    width: 125px;
  }
  .column2 .profile-card:hover {
    height: 205px;
  }
}
  @media only screen and (max-width:767px) {
    .carousel-caption {
      text-align: center;
    }

    .carousel-caption h2 {
      font-size: 35px;
    }

    .carousel-caption h3 {
      font-size: 25px;
    }

    .section-padding1 {
      margin-bottom: 40px;
    }

    .section-padding1 h2 {
      font-size: 20px;
    }
    .section-padding1 p {
      font-size: 14px;
    }
    .lead.px-4 {
      color: black;
      font-size: 14px;
      text-align: justify;
    }
    .recent-posts .section-title h1{
      font-size: 26px;
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

    .carousel-caption p {
      font-size: 18px;
      padding-right: 10px;
      padding-top: 10px;
      padding-bottom: 10px;
      margin-bottom: 150px;
    }

    .card-sec {
      margin-top: 30px;
    }

    .about-img-img {
      margin-top: 0px;
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

    .dropdown-menu {
      margin-left: 45px;
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
      font-size: 12px;
    }

    .RightToLeft {
      animation: RightToLeft 5s linear infinite;
    }
    .custom-paragraph {
      font-size: 26px;
      overflow: hidden;
    }
    .section-header h4 {
      font-size: 20px;
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
    /* .row1 {
      flex-direction: column;
      width: 20%;
    } */
   
  }
  .language-selector {
      position: relative;
      display: inline-block;
      cursor: pointer;
      margin-right: 32px;
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
      font-size: 14px;
    }
    .language-icon:hover {
      color: #333;
      background-color: white;
    }

    .language-dropdown {
      position: absolute;
      width: auto;
      background-color: #222;
      color: white;
      opacity: 0;
      z-index: -999;
      transition: all ease 0.5s;
      line-height: 30px;
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
      padding: 8px;
      background-color: white;  
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
      align-items: flex-start;
      padding: 20px;
      width: 90%;
      gap: 10px;
      transition: .6s;
      cursor: default;
    }
    .verticals-container h3 {
      position: relative;
      font-size: 2.4em;
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
.column2 {
  margin-top: 20%;
  align-items: center;
}
.column2  h4 {
  font-size: 20px;
}
.column2 .profile {
  display: flex;
}
.column2 h2 {
  text-align: center;
  color: white;
  font-weight: bold;
  padding: 30px;
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
    font-size: 18px;
    padding-top: 20px;
    color: white;
}
.caption p {
    text-align: center;
    transform: translateY(-90px);
    opacity: 0;
    transition: .6s;
    font-size: 14px;
    color: #567812;
    margin: 1px 0 0 0;
    font-weight: bold;
}
.profile-card:hover .caption p {
    opacity: 1;
}
.caption .social-links {
    color: black;
    font-size: 18px;
    transition: .6s;
    overflow: hidden;
    transform: translateY(-70px);
    opacity: 0;
    display: flex;
}
.profile-card:hover .caption .social-links {
  opacity: 1;
  transform: translateY(-70px);
  padding-left: 20px;
  display: flex;
}

.wrapper2{
    box-sizing: content-box;
    background-color: #fff;
    height: 40px;
    width: 40%;
    padding: 20px;
    display: flex;
    border-radius: 8px;
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
span{
    display: block;
    height: 100%;
    padding-top: 10px;
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
                <li><a href="#">முகப்பு பக்கம்</a></li>
                  <li><a href="#about">எங்களை பற்றி</a></li>
                  <li><a href="#footercontact">தொடர்பு</a></li>
                  <li class="btn2"><a href="<?php echo baseUrl . "Candidate" ?>">உள்நுழைய</a></li>
                  <li class="btn2"><a href="<?php echo baseUrl . "Candidate/registration" ?>">பதிவு செய்தல்</a></li>
                  
                  <li> <li><a href="#" class="dropdown-toggle">முதலாளி</a>
                  <ul class="dropdown">
                  <li><a href="<?php echo baseUrl . "Employer/login" ?>">உள்நுழைய</a></li>
                    <li><a href="<?php echo baseUrl . "Employer/registration" ?>">பதிவு செய்தல்</a></li>
                  </ul></li>
              </ul>
            </nav>
            
            <div class="language-selector">
            <div class="language-icon dropdown-toggle"><a>மொழி</a>
    <!-- <i class="fa-solid fa-globe trans"></i> -->
  </div>
    <div class="language-dropdown">
      <div class="language-option" onclick="changeLanguage('ta')"><a href="<?php echo baseUrl; ?>">English</a></div>
    </div>
  </div>
           </header>

           <div class="row1">
            <div class="column1">
              <h1>அறம் அறக்கட்டளை</h1>
              <p>"உங்கள் கனவு வேலையை எங்களுடன் தேடுங்கள்"</p>
            </div>

            <div class="column2">           
        <div class="profile-container">
    <h2>நிர்வாகிகள்</h2>
    <div class="profile" >
  <div class="profile-card">
            <div class="img">
            <img src="<?php echo baseUrl . "assets/Saraswathi4.png" ?>" alt="Dr.C. Saraswathi">
            </div>
            <div class="caption">
                <h4>C.சரஸ்வதி</h4>
                <p>செயலாளர்</p>
                <div class="social-links">
                    <a href="https://www.youtube.com/@arramcharitytrust" target="_blank"><i class="fab fa-youtube" style="color:red;"></i></a>
                    <a href="https://www.instagram.com/drcksaraswathi/" target="_blank"><i class="fab fa-instagram" style="color:#e64096;"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
            <img src="<?php echo baseUrl . "assets/Kiruthika2.png" ?>" alt="Mrs. Kirthika Shivkumar">
            </div>
            <div class="caption">
                <h4>Mrs.கிர்த்திகா</h4>
                <p>பொறுப்பாட்சியர்</p>
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
  <section class="image-section">
    
    <!-- Profile images and content -->
    <div class="verticals-container">
     <h3>We largely work and touch on</h3>
   <div class="wrapper2"><h2>Five Verticals</h2>
   <div class="words">
     <!-- <div class="word" id="health"> -->
       <span>ஆரோக்கியம்</span>
     <!-- </div><br> -->
     <!-- <div class="word" id="food"> -->
       <span>உணவு</span>
     <!-- </div><br> -->
     <!-- <div class="word" id="spiritual"> -->
       <span>ஆன்மீகம்</span>
     <!-- </div><br> -->
     <!-- <div class="word" id="education"> -->
       <span>கல்வி</span>
     <!-- </div><br> -->
     <!-- <div class="word" id="environment"> -->
       <span>சுற்றுச்சூழல்</span>
     <!-- </div><br> -->
     </div>
   </div>
   <div class="verticals">
   <a href="https://arramsei.org/"  target="_blank">மேலும் படிக்க</a>
   </div>
   </div>
     </section>

    <div class="scroll-container">
      <div class="scroll">

        <div class="RightToLeft" id="scrollContent">
          <a href="#accessid" style="text-decoration: none;" onclick="highlightContent('accessid')">
            <p><i class="bi bi-phone" style="display:block;"><b> மொபைல் அணுகல் </b></i></p>
          </a>

          <a href="#accredit" style="text-decoration: none;" onclick="highlightContent('accredit')">
            <p><i class="bi bi-book-fill"> <b>அங்கீகாரம் பெற்றது</b></i></p>
          </a>

          <a href="#interface" style="text-decoration: none;" onclick="highlightContent('interface')">
            <p><i class="bi bi-laptop-fill"> <b>பயனர் நட்பு இடைமுகம்</b></i></p>
          </a>

          <a href="#jobid" style="text-decoration: none;" onclick="highlightContent('jobid')">
            <p><i class="bi bi-subtract"> <b>விரிவான வேலை வாய்ப்புகள்</b></i></p>
          </a>

          <a href="#quickresponse" style="text-decoration: none;" onclick="highlightContent('quickresponse')">
            <p><i class="bi bi-shield-shaded"> <b>உடனடி பதிலளிப்பு</b></i></p>
          </a>

          <a href="#search" style="text-decoration: none;" onclick="highlightContent('search')">
            <p><i class="bi bi-tablet-landscape"> <b>மேம்பட்ட தேடல் மற்றும் வடிகட்டுதல்</b></i></p>
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
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center">
            <div class="about-text">
              <h2><b>அறம் வேலைவாய்ப்பு</b></h2>
              <p>அறம் வேலைவாய்ப்பில், வேலை தேடுபவர்கள் மற்றும் முதலாளிகளின் தனிப்பட்ட தேவைகளைப் பூர்த்தி செய்யும் விரிவான தீர்வுகளை வழங்க நாங்கள் கடமைப்பட்டுள்ளோம். அனைவருக்கும் தடையற்ற மற்றும் பலனளிக்கும் அனுபவத்தை உறுதிசெய்யும் வகையில், மதிப்புமிக்க சேவைகள் மற்றும் பலன்களை வழங்குவதற்காக எங்கள் தளம் வடிவமைக்கப்பட்டுள்ளது.</p>
              <p>வேலைவாய்ப்பில், திறமையான நபர்களை அவர்களின் அபிலாஷைகளுடன் ஒத்துப்போகும் தொழில் வாய்ப்புகளுடன் இணைக்கும் பணியில் நாங்கள் ஈடுபட்டுள்ளோம். சரியான வேலை வாழ்க்கையை மாற்றும், தனிப்பட்ட வளர்ச்சியை வளர்க்கும் மற்றும் நிறுவன வெற்றியை உந்தும் என்று நாங்கள் நம்புகிறோம். ஆட்சேர்ப்புக்கான எங்களின் புதுமையான அணுகுமுறையின் மூலம், விதிவிலக்கான திறமை மற்றும் உயர்மட்ட முதலாளிகளுக்கு இடையே உள்ள இடைவெளியைக் குறைத்து, இருவருக்கும் பிரகாசமான எதிர்காலத்தை உருவாக்குவதை நோக்கமாகக் கொண்டுள்ளோம்.</p>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Recent-posts Section - Home Page -->
    <section id="recent-posts" class="recent-posts px-4"
      style="margin-bottom: 30px; margin-top: 10px; background-color: #f7f6f5;">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h1 class="text-center"><b>அறம் என்ன வழங்குகிறது</b></h1>
      </div>

      <div class="container">
        <div class="row">
          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/Home_images/search.jpg" ?>" class="card-img-top" alt="Search">
                <h5 class="card-title pt-4"><b>வேலை தேடுதல்</b></h5>
                <p class="lead px-4">
                  அறம் வேலை போர்ட்டலில், உங்கள் திறனைத் திறக்க உங்களுக்கு உதவ நாங்கள் அர்ப்பணித்துள்ளோம். நீங்கள் உங்கள் வாழ்க்கையைத் தொடங்கும் சமீபத்திய பட்டதாரியாக இருந்தாலும் அல்லது புதிய சவால்களைத் தேடும் அனுபவமிக்க நிபுணராக இருந்தாலும், நாங்கள் உங்களின் நம்பகமான வேலை தேடல் கூட்டாளியாக இருக்கிறோம்.</p>
              </div>
            </div>
          </div>

          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/jobprovide.jpg" ?>" class="card-img-top" alt="provide">
                <h5 class="card-title pt-4"><b>வேலை வழங்குதல்</b></h5>
                <p class="lead px-4">
                  வேலை போர்ட்டல், உங்கள் திறனைத் திறக்க உங்களுக்கு உதவ நாங்கள் அர்ப்பணித்துள்ளோம். நீங்கள் உங்கள் வாழ்க்கையைத் தொடங்கும் சமீபத்திய பட்டதாரியாக இருந்தாலும் அல்லது புதிய சவால்களைத் தேடும் அனுபவமிக்க நிபுணராக இருந்தாலும், நாங்கள் உங்களின் நம்பகமான வேலை தேடல் கூட்டாளியாக இருக்கிறோம்.</p>
              </div>
            </div>
          </div>

          <div class="cards col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-5"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s">
                <img src="<?php echo baseUrl . "assets/uniquefeature.jpeg" ?>" class="card-img-top" alt="Feature">
                <h5 class="card-title pt-4"><b>அறமின்  தனித்துவமான  <br> அம்சங்கள்</b></h5>
                <p class="lead px-4">
                  அறம் வேலை வழங்குதலானது ஆட்சேர்ப்பை மறுவரையறை செய்யும் தனித்துவமான அம்சங்களுடன் தனித்து நிற்கிறது. திறமைகள், கலாச்சாரம் மற்றும் ஆளுமைத் திறன் ஆகியவற்றைப் பொருத்துவதற்கு எங்கள் இயங்குதளம் அதிநவீன அல்காரிதங்களைப் பயன்படுத்துகிறது.</p>
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
            <div class="section-header text-center">
              <h4><b>எங்களை தேர்ந்தெடுக்கும் காரணங்கள்</b></h4>
              <p class="custom-paragraph"><b>மக்கள் எங்களை தேர்ந்தெடுப்பதற்கான ஆறு காரணங்கள்</b></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4 " id="accessid"
              style="background-color: #fff;box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-phone" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 20px; color: black;">மொபைல் அணுகல்</h4>
                <p class="lead"
                  style="color: black; font-size: 15px; padding-left: 20px; padding-right: 20px; padding-bottom: 5px; text-align: justify;">
                  மொபைல் அணுகல்தன்மை என்பது தடைகளை நீக்குதல், பயனர் அனுபவங்களை மேம்படுத்துதல் மாற்றுத்திறனாளிகள் மற்றும் மொபைல் சாதனங்களை பயன்படுத்துபவர்கள் உட்பட அனைத்து பயனர்களையும் வேலைப் பட்டியல்களை அணுகவும் தொடர்பு கொள்ளவும், பதவிகளுக்கு விண்ணப்பிக்கவும், போர்ட்டலின் அம்சங்களை சிரமமின்றி செல்லவும் உதவுகிறது.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center  pb-4 pb-xl-1" id="accredit"
              style="background-color: #fff;  box-shadow: 0 0 11px rgba(33,33,33,.2); ">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-book-fill" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 20px; color: black;">அங்கீகாரம் பெற்றது</h4>
                <p class="lead"
                  style="color: black; font-size: 15px; padding-left: 20px; padding-right: 20px; padding-bottom: 0px; text-align: justify;">
                  அங்கீகாரம் பெற்ற வேலை போர்ட்டல், அங்கீகாரம் பெற்ற அமைப்புகளிடமிருந்து அதிகாரப்பூர்வ அங்கீகாரம் மற்றும் சான்றிதழைப் பெற்ற பிறகு வேலை தேடுபவர்களையும் முதலாளிகளையும் இணைக்கிறது. அங்கீகாரம் என்பது போர்ட்டலின் செயல்பாடுகள், அம்சங்கள், தொழில் தரநிலைகள், சட்ட விதிமுறைகள் மற்றும் நெறிமுறைகளுடன் இணங்குதல் ஆகியவற்றை உள்ளடக்கியது.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4" id="interface"
              style="background-color: #fff;  box-shadow: 0 0 11px rgba(33,33,33,.2); ">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-laptop-fill" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 20px; color: black;">பயனர் நட்பு இடைமுகம்</h4>
                <p class="lead"
                  style="color: black; font-size: 15px; padding-left: 20px; padding-right: 20px; text-align: justify;">
                  ஒரு ஜாப் போர்ட்டல் தெளிவு மற்றும் செயல்திறன் ஆகியவற்றிற்கு முன்னுரிமை அளிக்கிறது, இதன் மூலம் வேலை தேடுபவர்கள் மற்றும் முதலாளிகள் இருவருக்கும் பயனளிக்கிறது. இந்த போர்டல் வேலை வாய்ப்புகளுக்கான தேடலை எளிதாக்குகிறது மற்றும் பணியமர்த்தல் செயல்முறைகளை ஒழுங்குபடுத்துகிறது, தடையற்ற மற்றும் திறமையான அனுபவத்தை உறுதி செய்கிறது.</p>
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
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 0px; color: black;">விரிவான வேலை வாய்ப்புகள்</h4>
                <p class="lead"
                  style="color: black; font-size: 15px;  padding-left: 20px; padding-right: 20px; text-align: justify;">
                  ஏராளமான விரிவான வேலை வாய்ப்புகள் ஒரு வலுவான வேலை சந்தையைக் குறிக்கிறது. இது ஏராளமான வாய்ப்புகளை வழங்குகிறது. இது வேலை தேடுபவர்கள், தொழில் மாற்றுபவர்கள் மற்றும் பல்வேறு தொழில் வளர்ச்சியை எளிதாக்கும் புதிய பாத்திரங்கள் அல்லது தொழில்களை ஆராய்வதை நோக்கமாகக் கொண்ட தொழில் வல்லுநர்களுக்கு மிகவும் சாதகமானது.</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-1" id="quickresponse"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-shield-shaded" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 30px; color: black;">உடனடி பதிலளிப்பு
                </h4>
                <p class="lead"
                  style="color: black; font-size: 15px; padding-left: 20px; padding-right: 20px; padding-bottom: 18px;text-align: justify;">
                  விரைவான பதில் வேலை தேடுபவர்கள் அல்லது வேலை வழங்குபவர்கள் சில செயல்களைச் செய்யும்போது அல்லது மேடையில் விண்ணப்பங்களைச் சமர்ப்பிக்கும் போது அவர்களுக்கு உடனடி மற்றும் சரியான நேரத்தில் பின்னூட்டம் அல்லது ஒப்புதல் வழங்கப்படுகிறது. பயனர்கள் உடனடி உறுதிப்படுத்தலைப் பெறுவதை உறுதிசெய்வதன் மூலம் பயனர் அனுபவத்தை மேம்படுத்த இந்த அம்சம் வடிவமைக்கப்பட்டுள்ளது. </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-12 col-lg-4 mb-lg-5">
            <div class="card-sec text-white text-center pb-4" id="search"
              style="background-color: #fff; box-shadow: 0 0 11px rgba(33,33,33,.2);">
              <div class="card-body-s" style="padding-top: 30px;">
                <i class="bi bi-tablet-landscape" style="color: black; font-size: 30px;"></i>
                <h4 class="card-tittle" style="padding-top: 10px; padding-bottom: 10px; color: black;">மேம்பட்ட தேடல் மற்றும் வடிகட்டுதல்</h4>
                <p class="lead"
                  style="color: black; font-size: 15px; padding-left: 20px; padding-right: 20px; padding-bottom: 15px; text-align: justify;">
                  வேலைகள் போர்ட்டலில் மேம்பட்ட தேடல் மற்றும் வடிகட்டுதல் அம்சங்களின் குறிக்கோள், வேலை தேடுபவர்களுக்கு அவர்களின் தனிப்பட்ட விருப்பத்தேர்வுகள் மற்றும் தகுதிகளுடன் நெருக்கமாக இருக்கும் வேலைப் பட்டியலைக் குறிக்க அதிகாரம் அளிப்பதாகும், நேரத்தைச் சேமிக்கிறது மற்றும் மிகவும் பொருத்தமான வேலை வாய்ப்புகளைக் கண்டறியும் வாய்ப்பை அதிகரிக்கிறது. </p>
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
              <img src="<?php echo baseUrl . "assets/Home_images/employee4.jpg" ?>" alt="Candidate" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-2 justify-content-center" style="text-align: justify;">
            <div class="about-text pt-4 pt-lg-0" style="margin-top:-22px; ">
              <p class="abtcandidate fs-3">விண்ணப்பதாரர்</p>
              <p style="font-size: 15px;">அறம் வேலை போர்ட்டலில், தனிநபர்கள் தங்களின் அதிகபட்ச திறனை உணர அதிகாரம் அளிப்பதே எங்கள் அசைக்க முடியாத அர்ப்பணிப்பாகும். 
                உங்கள் வாழ்க்கைப் பயணத்தில் நீங்கள் எந்த இடத்தில் நிற்கிறீர்கள் என்பதைப் பொருட்படுத்தாமல் நீங்கள் தொழில்முறை நிலப்பரப்பில் ஈடுபடும் சமீபத்திய பட்டதாரியாக இருந்தாலும் சரி, 
                புதிய சவால்களுக்காக ஏங்கும் அனுபவமுள்ள தொழில்முறையாக இருந்தாலும் சரி அல்லது இடையில் எங்காவது இருந்தாலும், வேலை தேடல் பயணத்தில் நாங்கள் உங்களின் உறுதியான துணை. 
                எங்களின் விரிவான தளத்தின் மூலம், எப்போதும் உருவாகி வரும் வேலைச் சந்தையில் செல்ல, ஏராளமான வாய்ப்புகள், தொழில் வளங்கள் மற்றும் நிபுணர்களின் வழிகாட்டுதலுக்கான அணுகலைப் பெறுவீர்கள். 
                உங்கள் அபிலாஷைகளுக்கு முன்னுரிமை அளிக்கிறோம், உங்களின் தனிப்பட்ட தேவைகளுக்கு ஏற்ப ஆதரவையும் தீர்வுகளையும் வழங்குகிறோம்.</p>
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
              <p class="fs-3" style="padding-right:200px; ">முதலாளி</p>
              <p style="font-size: 15px;">அறம் வேலை வழங்குதலில், ஒரு வளமான நிறுவனத்திற்கான திறவுகோல் சரியான நபர்களை கப்பலில் வைத்திருப்பது என்று நாங்கள் உறுதியாக நம்புகிறோம். குழு விரிவாக்கம், திட்ட துவக்கம் அல்லது சிறப்புத் திறன்களின் தேவை என எதுவாக இருந்தாலும், திறமையைப் பெறுவதில் உங்களின் நம்பகமான பங்காளியாக நாங்கள் பணியாற்றுகிறோம். 
                எங்களின் விரிவான நெட்வொர்க் மற்றும் நிபுணத்துவம் மூலம், உங்களின் தனிப்பட்ட தேவைகளுக்கு ஏற்ற உயர்மட்ட நிபுணர்களை நாங்கள் அடையாளம் கண்டு அவர்களை இணைக்கிறோம். சிறந்து விளங்குவதற்கான எங்கள் அர்ப்பணிப்பு உங்கள் எதிர்பார்ப்புகளை பூர்த்தி செய்வது மட்டுமல்லாமல், அதை மீறும் வேட்பாளர்களைப் பெறுவதை உறுதி செய்கிறது. 
                உங்களின் ஆட்சேர்ப்பு செயல்முறையை ஒழுங்குபடுத்துவதற்கும், நேரத்தையும் வளங்களையும் சேமிப்பதற்கும் நாங்கள் அர்ப்பணித்துள்ளோம். எனவே நீங்கள் சிறப்பாகச் செய்வதில் கவனம் செலுத்தலாம் - உங்கள் வணிக இலக்குகளை அடைதல்.</p>
                </div>
          </div>
          <div class="col-lg-4 col-md-12 col-12 order-lg-2 order-1">
            <div class="about-img-img">
              <img src="<?php echo baseUrl . "assets/Home_images/img.jpg" ?>" alt="Employer" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
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
                          <img class="img-fluid s-10" alt="One" src="<?php echo baseUrl . "assets/special1.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="Two" src="<?php echo baseUrl . "assets/special2.jpg" ?>">
                          <div class="card-body" style="padding:1rem">
                            <h4 class="card-title"><b>Special title treatment</b></h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.
                            </p>

                          </div>
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <div class="card">
                          <img class="img-fluid s-10" alt="Three"
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
                          <img class="img-fluid s-10" alt="Four"
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
                          <img class="img-fluid s-10" alt="Five"
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
                          <img class="img-fluid s-10" alt="Six"
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
      <div class="me-5 d-none d-lg-block" style="color:white;">
        <h6>சமூக வலைப்பின்னல்களில் எங்களுடன் இணைந்திருங்கள்:</h6>
      </div>
      <!-- Left -->

      <!-- Right -->
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
    
    <section class="">
      <div class="container text-center text-md-start" style="margin-top: 40px;">
        <div class="row mt-3">
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
              <img src="" alt="AJ" height="50" width="65">
              அறம் வேலைவாய்ப்பு
            </h5>
            <p style="color: white;text-align:justify;font-size:15px">அறம் வேலைவாய்ப்பு ஆட்சேர்ப்பு துறையில் நம்பகமான பங்குதாரராக வேகமாக உருவெடுத்துள்ளது. எங்கள் பயணம் எளிமையான ஆனால் சக்திவாய்ந்த யோசனையுடன் தொடங்கியது.
            </p>
          </div>
         
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 footer2">
            <!-- Links -->
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">
            நாங்கள் யார் 
            </h5>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#about" class="text-reset" style="text-decoration: none; ">எங்களை பற்றி</a>
            </p>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#candidate" class="text-reset" style="text-decoration: none;">விண்ணப்பதாரர்</a>
            </p>
            <p style="color: white;" onmouseover="this.style.color='#61d3ed'" onmouseout="this.style.color='white'">
              <a href="#employer" class="text-reset" style="text-decoration: none;">முதலாளி</a>
            </p>
          </div>
         
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 footer3" id="footercontact">
            <h5 class="text-uppercase fw-bold mb-4" style="color: #EF4444;">தொடர்பு கொள்ளவும்</h5>
            <p  class="text-reset1" style="color: white; font-size:14px;"><i class="fas fa-home me-3 text-reset" style="color: white;"></i>
            யூனியன் அலுவலக பேருந்து நிறுத்தம் அருகில்,<br>
            மூதூர் பிரதான வீதி, ஆலங்காட்டுவலசு,<br>
            மொடக்குறிச்சி, ஈரோடு - 638 104
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

    <!-- Copyright -->
    <div class="text-center p-4" style="color: white;">
      © 2023 Copyright:
      <a class="text-reset fw-bold" style="color: white; text-decoration: none;"
        href="http://arramjobs.in/">Arramjobs.in</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <script src="<?php echo baseUrl; ?>/assets/js/main.js"></script>
</body>

</html>