<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Page</title>
    <link rel="stylesheet" href="./shop-page.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/product_category.css">
    <link rel="stylesheet" href="../productcategory_productdetail_productcreateTime/cookies.css">
</head>
<?php

// Create the the relevant array 
$time = array();
$items = array();
$store = array();
$product = array();
$product_price = array();
$count_line = 0;
$count = 0;
$count_store = 0;

// read product csv file and add to array  
if (($handle = fopen('products.csv', 'r')) !== FALSE) { // Check the resource is valid
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) { // Check opening the file is OK!
        $count++; // count line in data file
        $product_price[] = $data; // add the data in product csv file to product_price array
        if ($count == 1) { continue; } // delete the first line in product csv file
        $items[] = $data;
        $time[] = $data;
        // check if the product has store id = 22 and feature in store = true
        if ($data[4] == 22 and $data[6] == "TRUE") {
            $count_line++;
            $product[] = $data[1]; // add the name product csv file to product_price array
            $store[] = $data[4]; // add the store id in product csv file to product_price array
            $product_price[] = $data[2]; // add the price in product csv file to product_price array
        }
      
        
    }
}   
    // finding and remove the unique value of the array
    $product = array_unique($product);
    $store = array_unique($store);

  // read store csv file and add to array  
    if (($storecsv = fopen('stores.csv', 'r')) !== FALSE) { // Check the resource is valid
      while (($store_data = fgetcsv($storecsv, 1000, ",")) !== FALSE) { // Check opening the file is OK!
          $count_store++;
          if ($count == 1) { continue; } // delete the first line in product csv file
          // finding the name of the store by store id
          if ($store_data[0] == $store[0]) {
            $store_name = $store_data[1];
        }
      }
    }


    // adding data file to array by store id
    $category = [];
    $max_prob = 0;
    for ($row = 0; $row < 1000; $row++) {
        if ($time[$row][4] == 22) {
            $category[] = $time[$row];
            
        }
    }
    
    // adding data to array
    $new_product = [];
    $flag = 0;
    
    for ($i = 0; $i < count( $category); $i++) {
        
        $new_product[] = $category[$i][3];
    
    }
    
    // sort the new_product array
    rsort($new_product);

    // closing csv file
    fclose($handle);
    fclose($storecsv);
?>

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
            <li><a href="aboutus-shop.php">About us</a></li>
            <li><div class="dropdown">
              <button class="dropbtn">Product</button>
              <div class="dropdown-content">
              <a href="../productcategory_productdetail_productcreateTime/product_category.html">Browse by category</a>
              <a href="../productcategory_productdetail_productcreateTime/product_createTime.php?page=1">Browse by created time</a>
              </div>
            </div></li>
            <li><a href="./contact_shop.php">Contact</a></li>
          </ul>
        </nav>
        <div class="hero">
          <h1>Welcome to <?echo $store_name ?></h1> 
          <p>Your style is our inspire</p>
        </div>
      </header>
     <main>
        <section class='block-product'>
          <div class="product-section">
            <h3>Featured Products</h3>
            <?php
            // display the information of the feature in store product in array items by product csv file
            for ($row = 0; $row < 1000; $row++) {
              if ($items[$row][4] == 22 and $items[$row][6] == "TRUE") {
                $product_id = $items[$row][0];
                $product_name = $items[$row][1];
                $product_price = $items[$row][2];
                // html code
                echo "<div class='product'>
                <div class='upper'>
                <div class='two-third'>
                    <h3><a ' href='../productcategory_productdetail_productcreateTime/product_detail.php'></a></h3>
                    <a href='../productcategory_productdetail_productcreateTime/product_detail.php'><img src='../productcategory_productdetail_productcreateTime/store/$product_name.png' alt=''></a>
                  </div>
                </div>
                <div class='lower'>
                  <p class='price'>$product_name</p>
                  <p style='margin-left: 50%; margin-bottom: 0;'> $product_price USD</p>
                  <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
                  <div class='btn'>
                    <a href='../productcategory_productdetail_productcreateTime/product_detail.php?product=$product_name&product_id=$product_id' class='btn-1'>VIEW DETAIL</a>
                  </div>
                </div>
              </div>";
          }
        }
      
            ?>

        <div class="product-section">
            <h3>New Products</h3>
            <?php 
            // display the 5 of the recently added products in time array items by product csv file 
            for ($i = 0; $i < 5; $i++) {
                  $timeProduct = $new_product[$i];
                  for ($j = 0; $j < 17; $j++){
                      if ($timeProduct == $category[$j][3]){
                          $product_id = $category[$j][0];
                          $name_product_time = $category[$j][1];
                          $price_product_time = $category[$j][2];
                          echo "<div class='product'>
                          <div class='upper'>
                          <div class='two-third'>
                              <h3><a ' href='../productcategory_productdetail_productcreateTime/product_detail.php'></a></h3>
                              <a href='../productcategory_productdetail_productcreateTime/product_detail.php'><img src='../productcategory_productdetail_productcreateTime/store/$name_product_time.png' alt=''></a>
                            </div>
                          </div>
                          <div class='lower'>
                            <p class='price'>$name_product_time</p>
                            <p style='margin-left: 50%; margin-bottom: 0;'> $price_product_time USD</p>
                            <p class='description'>Long, crew-neck T-shirt in soft jersey with a rounded hem.</p>
                            <div class='btn'>
                              <a href='../productcategory_productdetail_productcreateTime/product_detail.php?product=$name_product_time&product_id=$product_id' class='btn-1'>VIEW DETAIL</a>
                            </div>
                          </div>
                        </div>";
                      }
                  }
              }
              ?>


          </section>
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
                 <div class="logo"> <img class="img" src="./images/hm-logo-png.png" alt="H&M logo"></div>
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
