<?php
  
  session_start();
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="style" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="StyleSheet1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList was getting from the Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body onload="check(); HiddenSignup();">

    <!--Navigation area-->
    <header>
      <!--Navigation area-->
      <nav class="navbar" id="myTopnav">
        <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
        <a class="navbar-brand" href="index.php">
            <div class="logo-image">
                <img src="image\logo123.png" class="img-fluid" alt="image_logo_website">
            </div>
        </a>

        <a href="index.php">Home</a>
        <a href="aboutus.php">About us</a>
        <a href="fee.php">Fees</a>
        <a href="Myaccount/myaccount.php">My Account</a>
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
        <a id='signup' class="signup" href="./Myaccount/myaccount.php" style="padding:0;">
            <p class="button">Sign Up</p>
        </a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


      </nav>
    </header>

<div>
  <img src="image/aboutusbanner.jpg" class="banner" />
</div>
<h1 style="padding-top: 100px; text-align: center; font-family: cursive;">MEET OUR TEAM</h1>
<h5 style="text-align: center; padding-left: 25%; padding-right: 25%; padding-bottom: 50px; font-family: monospace;">This is my our development team of this website. Our group aim to design a sustainable website for e-commerce in order to provide customers convenient for online shopping. Each member collaborate in developing website effectively which help the workload reduced significantly. It means that we can deliver the product faster for users to experience better, that will enable people to purchase product freely in a short of time, making things easier to experience. </h5>
<section class="container_aboutus">


  <!-- New 03 (Javascript)-->
    <div id="overlay" onclick="off();"></div>
  <!-- End New 03 (Javascript) -->


<div class="row">
  <div class="column">
    <img src="./image/Dang.jpg" alt="The avatar of Hai Dang" class="ava_picture Dang" onclick="on('Dang');">
    <h5>LA TRAN HAI DANG</h5>
    <a href="https://www.facebook.com/dangla2000/" target="_blank" class="fa fa-facebook-official"></a>
    <a href="https://www.facebook.com/dangla2000/" target="_blank" class="fa fa-google-plus"></a>
  </div>
  <div class="column">
    <img src="./image/Van Anh.jpg" alt="The avatar of Van Anh" class="ava_picture VA" onclick="on('Anh');">
    <h5>HUYNH VAN ANH</h5>

    <a href="https://www.facebook.com/danidol/" target="_blank" class="fa fa-facebook-official"></a>
    <a href="https://www.facebook.com/dangla2000/" target="_blank" class="fa fa-google-plus"></a>
  </div>
  <div class="column">
    <img src="./image/gianguyen.png" alt="The avatar of Gia Nguyen" class="ava_picture Nguyen" onclick="on('Nguyen');">
    <h5>PHAM GIA NGUYEN</h5>
    <a href="https://www.facebook.com/gianguyen.pham.98/" target="_blank" class="fa fa-facebook-official"></a>
    <a href="https://www.facebook.com/dangla2000/" target="_blank" class="fa fa-google-plus"></a>
  </div>
  <div class="column">
    <img src="./image/quynh.png " alt="The avatar of My Quynh" class="ava_picture Quynh" onclick="on('Quynh');">
    <h5>NGO MY QUYNH</h5>
    <a href="https://www.facebook.com/profile.php?id=100041083941712" target="_blank" class="fa fa-facebook-official"></a>
    <a href="https://www.facebook.com/dangla2000/" target="_blank" class="fa fa-google-plus"></a>
  </div>
</div>
</section>

<div id="cookies">
  <h3>I use cookies</h3>
  <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
  <button type="button" name="button" onclick="agree();">I understand</button>
  <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
</div>

    <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
        <footer style="background-color: #131a22; color:white; padding-bottom:5%;">
            <div class="flex">
                <!--Zero Columns-->
                <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="image\logo123.png" width="20%" alt="image_logo_website"/>
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
                <div class="footer_column2" style="flex: 1; font-size:10px;" >
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
                  // If the copy right is not be set, it will echo the default one 
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


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
    <script type="text/javascript" src="productcategory_productdetail_productcreateTime/javascript.js"></script>
    <script type="text/javascript" src="Myaccount/myaccount.js"></script>
</body>
</html>
