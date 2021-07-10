<?php
    include('includes/database.php');
    include('functions/functions.php');
    $sub_categories=getSubCategories();
?>
<!doctype html>
<html lang="en">

<head>
    <title>HASCORP Apparels - Manufacturer & Exporter of Sports and Safety Apparels :: #destinedforgreatness</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo/website LOGO mini ico file.ico" />
    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- ionicons icon -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- mega menu -->
    <link href="css/mega-menu/mega_menu.css" rel="stylesheet" type="text/css" />
    <!-- owl-carousel -->
    <link href="css/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <!-- jquery ui -->
    <link rel="stylesheet" href="css/jquery-ui.css" />
    <!-- magnific popup -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css" />
    <!-- animate -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" />
    <!-- media element player -->
    <link href="css/mediaelementplayer.min.css" rel="stylesheet" type="text/css" />
    <!-- REVOLUTION STYLE SHEETS -->
    <link href="revolution/css/settings.css" rel="stylesheet" type="text/css">
    <!-- ADD-ONS CSS FILES -->
    <link href="revolution/css/revolution.addon.particles.css" rel="stylesheet" type="text/css">
    <!-- shortcodes -->
    <link href="css/shortcodes.css" rel="stylesheet" type="text/css" />
    <!-- main style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- shop style -->
    <link href="css/shop.css" rel="stylesheet" type="text/css" />
    <!-- responsive -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css" />
    <!-- custom -->
    <link href="css/color/color-5.css" rel="stylesheet" type="text/css" />
</head>

<body>
<!-- loading -->
<div id="loading">
    <div id="loading-center">
        <img src="images/logo/loader3.gif" alt="loader">
    </div>
</div>
<!-- loading End -->
<!-- HEADER  -->
<header class="header-03 white">
    <!-- menu start -->
    <nav id="menu-1" class="mega-menu">
        <!-- menu list items container -->
        <section class="menu-list-items">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- menu logo -->
                        <ul class="menu-logo">
                            <li>
                                <a href="index">
                                    <img id="logo_img" src="images/logo/FINAL.png" alt="logo">
                                </a>
                            </li>
                        </ul>
                        <!-- menu links -->
                        <ul class="menu-links">
                            <!-- active class -->
                            <li class="active"><a href="index">Home</a>                             
                            </li>
                            <li><a href="about-us">About Us</a>
                            </li>
                            <li><a href="#">Products</a>
                                <!-- drop down multilevel  -->
                                <ul class="drop-down-multilevel">
                                    <?php 
                                    if(!empty($sub_categories)){
                                    for($i=0;$i<count($sub_categories);$i++){ 
                                    ?>
                                    <li><a href="product-category"><?php echo $sub_categories[$i]['sub_category_title'] ?><i class=""></i> </a>
                                    </li>
                                    <?php 
                                        }
                                    }
                                    ?>

                                    <li><a style="font-weight: bold;" href="all-products">View All Products<i class=""></i> </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li><a href="javascript:void(0)">Send an Inquiry</a>
                            </li> -->
                            <li><a href="make-an-inquiry.html">Make an Inquiry</a>
                            </li>
                            <li><a href="contact-us.html">Contact Us</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </section>
    </nav>
</header>
<!-- HEADER END -->