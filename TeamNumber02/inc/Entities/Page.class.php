<?php
include_once("inc/Entities/User.class.php");

class Page
{
    static function header()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

            <title>Online Shopping</title>

            <!-- Bootstrap -->
            <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

            <!-- Custom stylesheets -->
            <link type="text/css" rel="stylesheet" href="css/style.css" />
            <link type="text/css" rel="stylesheet" href="css/accountbtn.css" />
            <link type="text/css" rel="stylesheet" href="css/more-styles.css" />
            <link type="text/css" rel="stylesheet" href="css/searchInfo.css" />

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->

        </head>

        <body>
            <!-- HEADER -->
            <header>
                <!-- TOP HEADER -->
                <div id="top-header">
                    <div class="container">
                        <ul class="header-links pull-right">
                            <li><a href="#"><i class="fa fa-inr"></i> INR</a></li>
                            <li>
                                <?php

                                if (isset($_SESSION["id"])) {

                                    echo '
   <div class="dropdownn">
      <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI ' . $_SESSION["username"] . '</a>
      <div class="dropdownn-content">
        <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
        <a href="inc/Entities/logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
        
      </div>
    </div>';
                                } else {
                                    echo '
    <div class="dropdownn">
      <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
      <div class="dropdownn-content">
        <a href="inc/Entities/login_form.php" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
      </div>
    </div>';
                                }
                                ?>

                                <!-- Replace the PHP code with your account-related HTML -->
                                <!-- For example, if the user is logged in, show their name and account options, otherwise show login option -->
                                <!-- Your account-related HTML here -->
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /TOP HEADER -->

                <!-- MAIN HEADER -->
                <div id="header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="header-logo">
                                    <!-- ... (logo code) ... -->
                                    <a href="index.php" class="logo">
                                        <font style="font-style:normal; font-size: 33px;color: aliceblue;font-family: serif">
                                            Online Grocery
                                        </font>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="header-search">
                                    <!-- Add the form element with method="post" -->
                                    <form method="post" action="ItemSearchResults.php">
                                        <select class="input-select" name="category">
                                            <option value="">All Categories</option>
                                            <option value="Fruits">Fruits</option>
                                            <option value="Vegetables">Vegetables</option>
                                            <option value="Dairy">Dairy</option>
                                            <option value="Bakery">Bakery</option>
                                            <option value="Meat">Meat</option>
                                            <option value="Grains">Grains</option>
                                            <option value="Breakfast">Breakfast</option>
                                        </select>
                                        <!-- Add the name attribute to the input field to retrieve the search term -->
                                        <input class="input" name="search_term" type="text" placeholder="Search here">
                                        <button type="submit" id="search_btn" class="search-btn">Search</button>
                                        <!-- Price input boxes -->
                                        <div class="">
                                            <!-- Price input boxes -->
                                            <input class="input-lg" name="min_price" type="number" step="0.01" placeholder="Min Price">
                                            <input class="input-lg" name="max_price" type="number" step="0.01" placeholder="Max Price">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-3 clearfix">
                                <!-- ... (other header content) ... -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /MAIN HEADER -->
                 <!-- NAVIGATION -->

            <div class="modal fade" id="Modal_login" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                            <?php
                            include_once "inc/Entities/login_form.php";

                            ?>

                        </div>

                    </div>

                </div>
            </div>
            </header>

            
            <!-- /HEADER -->
        <?php
    }
    static function footer()
    {
        ?>
            <footer id="footer">
                <!-- top footer -->
                <div class="section">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <div class="col-md-3 col-xs-6">
                                <div class="footer">
                                    <h3 class="footer-title">About Us</h3>
                                    <ul class="footer-links">
                                        <li><a href="#"><i class="fa fa-map-marker"></i>address</a></li>
                                        <li><a href="#"><i class="fa fa-phone"></i>9846372444</a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i>abc@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6 text-center" style="margin-top:80px;">
                                <ul class="footer-payments">
                                    <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                                    <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                                    <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                                </ul>
                                <span class="copyright">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                </span>
                            </div>
                            <div class="clearfix visible-xs"></div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /top footer -->

                <!-- bottom footer -->
                <!-- Your bottom footer content here -->
                <!-- /bottom footer -->
            </footer>
        <?php
    }
    public static function mainPage($products, $searchTerm = null, $category = null, $minPrice = null, $maxPrice = null)
    {
        $showSearchInfo = (!empty($searchTerm) || !empty($category) || ($minPrice !== null) || ($maxPrice !== null));
        ?>
            <!-- Item Page Content Here -->
            <div class="main main-raised">
                <!-- Your item page content goes here -->
                <div class="container mainn-raised" style="width: 100%;">
                    <!-- Item details content here -->
                </div>

                <!-- Show search information if there is a search -->
                <?php if ($showSearchInfo) { ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="search-info">
                                    <h2>Search Information:</h2>
                                    <?php if (!empty($searchTerm)) { ?>
                                        <p><span>Items with Term in:</span> <?php echo $searchTerm; ?></p>
                                    <?php } ?>
                                    <?php if (!empty($category)) { ?>
                                        <p><span>Category:</span> <?php echo $category; ?></p>
                                    <?php } ?>
                                    <?php if ($minPrice !== null) { ?>
                                        <p><span>Min Price:</span> <?php echo "$" . $minPrice; ?></p>
                                    <?php } ?>
                                    <?php if ($maxPrice !== null) { ?>
                                        <p><span>Max Price:</span> <?php echo "$" . $maxPrice; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- END Search Information -->

                <!-- RELATED ITEMS SECTION -->
                <div id="related-items" class="section mainn mainn-raised">
                    <div class="container">
                        <div class="row">
                            <?php foreach ($products as $product) {
                                // Access the properties using getter methods
                                $product_id = $product->getProductID();
                                $product_name = $product->getProductName();
                                $price = $product->getPrice();
                                $quantity = $product->getQuantity();
                                $category = $product->getCategory();
                            ?>
                                <!-- Replace the following code with the related product information from the $products array -->
                                <div class="col-md-4 col-xs-6">
                                    <a href="#">
                                        <div class="shop">
                                            <div class="shop-img">
                                                <img src="img/No_image_available.svg.png" alt="">
                                            </div>
                                            <div class="shop-body">
                                                <h3><?php echo $product_name; ?></h3>
                                                <p>Price: $<?php echo $price; ?></p>
                                                <p>Quantity: <?php echo $quantity; ?></p>
                                                <!-- Add other product details as needed -->
                                                <a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <!-- END RELATED ITEMS SECTION -->

            </div>
            <!-- END Item Page Content -->

           
    <?php
    }
}



    ?>