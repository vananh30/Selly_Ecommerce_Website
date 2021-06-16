<?php
    session_start();

    // check if the admin has been log in to the system
    if (!isset($_SESSION['username'])) {
        // check cookie
        if (isset($_COOKIE['loggedin_name'])) {
        $_SESSION['username'] = $_COOKIE['loggedin_name'];
        } else {
        header('location: login_admin.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8" />
        <title>EmySell's Admin</title>


        <link rel="stylesheet" href="index_product.css">
        <link rel="stylesheet" href="header.css">
        <link rel="stylesheet" href="button_custom.css">



        <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">

        <!--FontList was getting from the Google Font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <!--Header Area-->
        <header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="index.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="fee.php">Fees</a>
            <a href=".\login\myaccount.php">My Account</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Browse
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="browsebycate.php">Browse by categories</a>
                    <a href="browsebyname.php">Browse by name</a>
                </div>
            </div>
            <a href="faq.php">FAQS</a>
            <a href="contact.php">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>
        <main style="padding:5%">
        <h1 style="width:100%; text-align:center;">Welcome to the Dashboard <?= $_SESSION['username'] ?></h1>

        <a href="cms.php"><button class="button_submit">Edit Terms of Service</button></a>
        <a href="cmspp.php"><button class="button_submit">Edit Privacy Policy</button></a>
        <a href="cmscr.php"><button class="button_submit">Edit Copyright</button></a>
        <a href="logout.php"><button class="button_submit">Logout</button></a>
       
        </main>
       
    </body>

        <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
        <footer style="background-color: #131a22; color:white; padding-bottom:5%;">
        <div class="flex">
            <!--Zero Columns-->
            <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                <img src="image\logo123.png" width="20%" alt="img_logo_website" />
                <p style="font-size:13px">EmySell is the lastest website for whom who are looking for the place to start their business. We provided the solution to help our potential custumers to achive the greatest outcome for their first start</p>
            </div>
            <!--First Columns-->
            <div class="footer_column1" style="flex: 1;font-size:10px;">
                <h2>Contact us</h2>
                <h3><i class="fa fa-envelope"></i> Email: cinemax@gmail.com</h3>
                <h3><i class="fa fa-phone" aria-hidden="true" style='font-size:15px'></i> Phone: 09737283823</h3>
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Address: Ho Chi Minh City</h3>
            </div>
            <!--Second Columns-->
            <div class="footer_column2" style="flex: 1; font-size:10px;">
                <h2>Members List</h2>
                <h3>La Tran Hai Dang - s3836605</h3>
                <h3>Huynh Van Anh - s3836320</h3>
                <h3>Pham Gia Nguyen - s3819521</h3>
                <h3>Ngo My Quynh - S3836322</h3>
            </div>

            <!--Third Columns-->
            <div style="flex: 0.25" class="footer_column3">
                <!--Remember to add link Github-->
                <h3><a href="https://morioh.com/p/c479c01cf484" style="text-decoration: none"><i class="fa fa-github" aria-hidden="true"></i></a></h3>
                <h3><i class="fa fa-facebook-official" aria-hidden="true"></i></h3>
                <h3><i class="fa fa-twitter" aria-hidden="true"></i></h3>
            </div>
        </div>

        <div class="footer_col">
            <a href="tos.php"><span>Terms of Service</span></a>
            <a href="privacypolicy.php"><span>Privacy Policy</span></a>
            <a>
                <span> 
                <?php
                // If the variable is not be set and it was empty, echo the default 
                 if (!isset($_SESSION['cr'])  && empty($_SESSION['cr'])){
                    $_SESSION['cr'] = '© 2021, EmySell.com, Inc. or its affiliates';
                        echo $_SESSION['cr'];
                    } else {
                    echo $_SESSION['cr'];
                }
                ?>
                </span>
            </a>
        </div>

    </footer>

</html>