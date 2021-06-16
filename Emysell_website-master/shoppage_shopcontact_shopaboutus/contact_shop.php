<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact shop</title>
    <link rel="stylesheet" href="./contact_shop__aboutus.css">
    <link rel="stylesheet" href="./shop-page.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">

<body onload="check();">
</head>
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
            <li><a href="aboutus-shop.php">About us</a></li>
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
      <div style="background-image: url('image/contact-background.png'); background-repeat: repeat; ">
        <div class="row-contact">
                <section class="container_contact">
                    <form method="get" style="padding-top: 10%;">
                        <h1>Contact Us</h1>
                        <div style="padding-top: 5%;">Contact Purpose
                            <select name="Choose" id="select_style" placeholder="Please">
                                <option Value ="" disabled selected>Choose</option>
                                <option Value ="1" >Business</option>
                                <option Value ="2">Personal</option>
                            </select>
                        </div><br>
                        <div style="display:flex;">
                            <p style="padding-right: 2%; padding-top:1.5%;"><i><b>Name:</b></i></p>
                            <input type="text" id="name" name="name" placeholder="Please type your full name" maxlength="50" class="style_form_shop">
                        </div><br>
                        <div style="display:flex; padding-top: 3%;">
                            <p style="padding-right: 2%; padding-top:1.5%;"><i><b>Email:</b></i></p>
                            <input type="email" id="email" name="email" placeholder="Please type your email" class="style_form_shop">
                        </div><br>
                        <div style="display:flex; padding-top: 3%;">
                            <p style="padding-right: 2%; padding-top:1.5%;" ><i><b>Phone</b></i></p>
                            <input type="tel" id="email" name="email" placeholder="Enter phone number" class="style_form_shop">
                        </div><br>
                        <div style="display:flex; padding-top: 3%;">
                            <i><b>Preferred contact method: </b></i>
                            <br><br>
                            <div style="display:flex; padding-left: 5%;">
                            <div style="margin-right: auto;">
                            <input type="radio" id="email" name="method" value="email">
                            <label for="email">Email</label>
                            </div>
                            <div>
                            <input type="radio" id="phone" name="method" value="phone">
                            <label for="phone">Phone</label>
                            </div>
                            </div>
                        </div><br>
                        <div>
                            <p style="padding-right: 2%;"><i><b>Contact day(s):</b></i></p>
                            <div id="contactday">
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="mon">
                            <label for="mon">Monday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="tue">
                            <label for="tue">Tuesday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="wed">
                            <label for="wed">Wednesday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="thu">
                            <label for="thu">Thursday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="fri">
                            <label for="fri">Friday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="sat">
                            <label for="sat">Saturday</label>
                            </div>
                            <div>
                            <input type="checkbox" class="contact_checkbox" name="sun">
                            <label for="sun">Sunday</label>
                            </div>
                            </div>
                        </div><br>
                        <div class="comment">
                            <textarea class="textinput" placeholder="Comment"></textarea>
                        </div>
                        <div style="padding-top: 10%;">
                            <button type="reset" value="Clear" class="style_button">CLEAR</button>
                            <button type="submit" value="Send" class="style_button"> SEND</button>
                        </div>
                    </div>
                    </form>
                    </section>
            </div>
          </div>
        </div>


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
            <li><a href="aboutus-shop.php">About us</a></li>
            <li><a href="../productcategory_productdetail_productcreateTime/product_category.html">Product</a></li>
            <li><a href="contact_shop.php">Contact</a></li>
        </ul>
    </div>
</footer>
<script type="text/javascript" src="../productcategory_productdetail_productcreateTime/javascript.js"></script>
</body>
</html>
