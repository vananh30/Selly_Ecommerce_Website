<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Shop</title>
    <link rel="stylesheet" href="./contact_shop__aboutus.css">
    <link rel="stylesheet" href="./shop-page.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">
</head>
<body onload="check();">
    <header>
        <nav>
          <div class="logo">
            <img class="img" src="./images/hm-logo-png.png" alt="">
          </div>


          <input type="checkbox" id="check">
          <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
          </label>

          <ul class="main-nav">
            <li><a href="shop-page.php">Home</a></li>
            <li><a href="./aboutus-shop.php">About us</a></li>
            <li><div class="dropdown">
              <button class="dropbtn">Product</button>
              <div class="dropdown-content">
              <a href="../productcategory_productdetail_productcreateTime/product_category.html">Browse by category</a>
              <a href="../productcategory_productdetail_productcreateTime/product_createTime.php?page=1">Browse by created time</a>
              </div>
            </div></li>
            <li><a href="contact_shop.php">Contact</a></li>
          </ul>

        </nav>
        <div class="hero">
          <h1>Welcome to H&M</h1>
          <p>Your style is our inspire</p>
        </div>

      </header>
    <main>
        <!-- About Section -->
  <div class="cotainer-about-us">
    <div class="img-about-us">
     <img src="./images/hm-logo.jpg" class="img" alt="HM logo">
    </div>

    <div class="content-about-us-shop">
      <h1 class="aboutus-intro">About H&M Group</h1><br>
      <h5 class="aboutus-intro">Tradition since 1889</h5>
      <P class="aboutus-intro">
        We are a family of brands, driven by our desire to make great design available to everyone in a sustainable way. Together we offer fashion, design and services, that enable people to be inspired and to express their own personal style, making it easier to live in a more circular way.
      </P>
      <P class="aboutus-intro">
        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </P>

    </div>
  </div>
    </main>

    <div id="cookies">
      <h3>I use cookies</h3>
      <p>My website uses cookies neccessary for its basic functioning. By continue browsing, you consent to my use of cookies and other technologies</p>
      <button type="button" name="button" onclick="agree();">I understand</button>
      <a href="https://gdpr-info.eu/" target="_blank">Learn more</a>
    </div>
    
<footer>
    <div class="footer--left">
        <div class="footer-logo">
           <div class="logo"> <img class="img" src="./images/hm-logo-png.png" alt=""></div>
        </div>
        <p>© Copyright 2021. All rights reserved</p>
        <p>Term of Service</p>
        <p>Privacy Policy</p>
    </div>
    <div class="footer--right">
        <ul class="footer-nav">
            <li><a href="shop-page.php">Home</a></li>
            <li><a href="./aboutus-shop.php">About us</a></li>
            <li><a href="../productcategory_productdetail_productcreateTime/product_category.html">Product</a></li>
            <li><a href="./contact_shop.php">Contact</a></li>
        </ul>
    </div>
</footer>
<script type="text/javascript" src="../productcategory_productdetail_productcreateTime/javascript.js"></script>
</body>
</html>
