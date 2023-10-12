<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Employer</title>
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
            margin-top: 100px;
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
                        <a class="nav-link mx-4" href="https://arramjobs.in/blog">Blog</a>
                    </li>
                </ul>
            </div>
    </nav>
    <div class="thankscontent">

        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHkAAAB5CAMAAAAqJH57AAAAYFBMVEUrtnP///8Ws2vE59QAsGUltXAAr2Lc8ebr9/D7/v0IsWj0+vdmxpTK6tiX1rTN69ux4MZVwYqP1K8/u3695dA1uXmG0Kmn3MBzyp2d2bl+zaJdw49tyJhJvoO34sri8+qHa9jeAAAEI0lEQVRoge2b3ZqjIAyGLRpRbK3WaW2n25n7v8tR0YoIyJ/Dwc53ut15n5AEQojRIZSiP/IfWaa8wHH1KHs9qhgX+a+QcftZozRJCKIiSZKi+rPFu5Jx++wwABEvAJQk9cOIrk/GZYTQGsrgEYpKfbgmuahqQArqJAR1VXgkZ+WVqKxdWE6uZeaJXFwi5SqvVz0qNezeJOet1jJzix61m5m2RT41xJjbizQnJ3J+T0zWmRUkd/WSK8kni4WehUBptop80Q5oidnkYkXOjnYeZkWO8gSTknHjstKTUCPd1GTkc+S20pMAzmbk2NHFDJrEJuSP1BO3V/qhT459gju00GoR+ewe1EsRka8FZOwpuGZBJIjwNTlrfIM7dLPO6zX56COPeaHjNrn07WQqUm6RT/uAOzR/fHDkXFBY+hFAriTf93AyFbqryOdkN3AUJWc5Od8hoWZBk0vJ1V7hRUUqGbnYldurkJDL/cKLCpVicrYzt1cmJD/2Nrkz+iEiF7sGNhU0hYD8tW9gU5EvAbne3+TO6HpNxh7Biqsn4BXZY3wl8UW6C88x9iZfvdmM4v5iJPlHuPLkb28mo6HSlKLRN0dufZHRWOLKNkTUcuSnp8VG79pagoYnR/aUzMxVRhayZEnGfm4VyQyWOjrFC3Llxc0M+CZdRFQtyDcfbmaW+lPuPbgtyD62TqRj8byBjmS/YKmPKZol5+4BxoLVFWyaM2T30Ca6Fr+Dm5Kd62yddHr/9syQXauCZG5IqIKLaqwOKNlx10Za6fT+dcuQ3Q5nFqzxh8YjmpI3K23VFRMMfDyQSwMyev6T/kI7j23IUGe5DG2QTiKy2s/w6qtkcf/EJJ0mMutnZWzDlZbnteBHWqcTT2ZjW5XP8Jquvc8VWu904v8Tm88nxR7GNGv5BTdMp1GLPUy5b8/FORdmmscir8W+rTyrAL5nNEMwTqeJzJ5V6vMZhFbbgpfn80ZNAtFs9eRri3Qa/9iyJtmow5gFHyPcJp3Gv7Wsw7ZqT2bBB7RVOlFxtedmUcKij8Qunai4env7jrEIM5NCgBd3x9C4V7G+dgCv7lUaVYngTcAsqget7pJYw10rtAV4fX/W6hkweW231KKegV4pxka4cToNEvRJ9HpDDPpmVTUKekOal7o32sbH4n6YbrU/JpflE4+wB6jb9xzQpd11SNz31G5vdxH+sLwNiXu9Bv1tYn0lEfe3w/X0A75jHNpQbzd7v1e95O9V4d7oAr5LBnyLDff+HPDNPeCcQcDZinDzJAFnaALODQWclQo4HxZwJi7gHGDA2cdDuHnPQ8AZ14BzvQeHWeaX2yzzwXZ+G9zntzsVZZiZ9V5Z2QSZ0+9VfNWgY7jvbxMGBfoeY4SH+QZlolf9dzfpL393MynP8en3vzXypj/y/0H+AVxLN/zoYsaXAAAAAElFTkSuQmCC"
            alt="success" >
            <h3 style="padding-top:40px;">Thank you for filling out your information!</h3>
            <p>Registered Successfully.</p>
            <br>
            <p>We’ve sent you an email with [the Username and Password ] at the email address you provided. <br> Please login with these credentials.</p>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>

</body>

</html>