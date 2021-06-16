<?php
  session_start(); // start the session action
  
?>
<?php 
unset($_SESSION['current_product']); //unset the current_product session when the thankyou.php run
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <title>EmySell</title>
    <link rel="stylesheet" href="OrderPlacement_thankyou.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">
    <title></title>
    <!--FontList was getting from the Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .purchase{
					text-align: center;
					cursor: pointer;
					transition: .4s ease;
					color: white;
					background-color: #17486a;

					border-radius: 40px;
				    margin: 20px 10px;
					padding: 9px 15px;
				}

</style>
<body onload="check();">
     <!--Header Area-->
     <header>
        <!--Navigation area-->
        <nav class="navbar" id="myTopnav">
            <!--Home (this page), About Us, Fees, My Account, Browse, FAQs, and Contact.-->
            <a class="navbar-brand" href="..\index.php">
                <div class="logo-image">
                    <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                    <img src="..\image\logo123.png" class="img-fluid" alt="img_logo_website">
                </div>
            </a>

            <a href="..\index.php">Home</a>
            <a href="..\aboutus.php">About us</a>
            <a href="..\fee.php">Fees</a>
            <a href="../login/myaccount.php">My Account</a>
            <div class="dropdown">
                <button class="dropbtn">
                    Browse
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="..\browsebycate.php">Browse by categories</a>
                    <a href="..\browsebyname.php">Browse by name</a>
                </div>
            </div>
            <a href="..\faq.php">FAQS</a>
            <a href="..\contact.php">Contact</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>


        </nav>
    </header>

      <div class="thankyou_container" style="text-align: center;">
        <i style="font-size:10vw; color: green; ;" class="fa">&#xf058;</i>
        <h1 style="font-size: 2.5vw; padding-top: 5%; padding-bottom: 3%;">You're all set!</h1>
        <hr style="margin-bottom: 2%; background-color:black; border-color: black; margin-top: 2%">
        <p style="display: inline-block; font-size: 20px;">Your number order is</p>
        <p style="display: inline-block; color: red; font-size: 20px">#442566</p>
        <hr style="margin-bottom: 2%; background-color:black; border-color: black; margin-top: 2%">
        <div>
            <p style="display: inline-block; font-size: 15px">You'll receive an email confirmation shorly to </p>
            <p style="display: inline-block; color: seagreen; font-size: 15px;">dinhthi.khanhlinh@gmail.com</p>
        </div>
        <div style="padding-top: 1%;">
            <p style="display: inline-block; font-size: 15px">Payment method</p>
            <p style="display: inline-block; font-size: 15px; padding-left: 12%; padding-bottom:5%">Momo</p>
        </div>
        <a class='purchase' href='../shoppage_shopcontact_shopaboutus/shop-page.php' style="text-decoration: none;">BACK TO HOME</a>
      </div>

      <div id="cookies">
        <h3>I use cookies</h3>
        <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
        <button type="button" name="button" onclick="agree();">I understand</button>
        <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
      </div>

      <!--Footer Area-->
    <!-- Element that contains the client's contact email, phone and address details
        (these can be dummy data). Please put your student name(s) and student id(s) in the footer with a link to your GitHub repository.-->
        <footer style="background-color: #131a22; color:white; margin-top:5%;  padding-bottom:5%;">
          <div class="flex">
              <!--Zero Columns-->
              <div class="footer_column0" style="flex: 2; margin: 1% 5% 0 5%">
                  <!--Source image: https://dribbble.com/shots/14624703-E-Commerce-Logo -->
                  <img src="..\image\logo123.png" width="20%" alt="image_logo_website"/>
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


  <script type="text/javascript">
      $('.autoplay').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          dots: true,
          arrows: true
      });
  </script>

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
  <script type="text/javascript" src="../productcategory_productdetail_productcreateTime/javascript.js"></script>
  <script src="cart.js"></script>
</html>
