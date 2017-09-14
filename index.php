<!DOCTYPE html>
<?php
include_once 'common.php';
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="keywords" content="Zaika Tokyo Indian Resturant Curry" />
        <meta name="description" content="Zaika Tokyo - Indian Resturant in Tokyo Japan" />
        <meta name="author" content="Zaika Tokyo - Developer - DeekshaBajaj" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Title -->
        <title><?php echo $lang['title_home']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
        <link href="assets/plugin/flaticon/flaticon.css" rel="stylesheet">        
    </head>
    <body>
        <!-- herder -->
        <?php $page = 'one'; include('header.php'); ?>
        
        <!-- Slider -->
        <section id="slider-section">
            <div id="main-slider" class="owl-carousel owl-theme slider positionR">
                <div class="item positionR">
                    <figure class="slider-image positionR">
                        <img src="assets/img/slider/main-1.jpg" alt="" class="hidden-xs"/>
                        <img src="assets/img/slider/main-xs-1.jpg" alt="" class="hidden-sm hidden-lg hidden-md"/>
                    </figure>
                    <div class="slider-text positionA text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 text-center">
                                    <h2><i></i></h2>
                                    <h1>The secret to making life better - <span class="theme-color">great-tasting food</span></h1>
                                    <a href="menu.php" class="itg-button light">Menu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item positionR">
                    <figure class="slider-image positionR">
                        <img src="assets/img/slider/main-2.jpg" alt="" class="hidden-xs"/>
                        <img src="assets/img/slider/main-xs-2.jpg" alt="" class="hidden-sm hidden-lg hidden-md"/>
                    </figure>
                    <div class="slider-text positionA text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 text-center">
                                    <h2><i></i></h2>
                                    <h1><span class="theme-color">Zaika </span> - where food is the <span class="theme-color">Star </span> </h1>
                                    <a href="menu.php" class="itg-button light">Menu</a>
                                    <!-- Where food speaks with your palate -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
     
        <!-- ABout Us -->
        <section id="index_about" class="padT100 padB100">
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Welcome to Zaika</h1>
                            <p>
                                Whatever your occasion be, We make it one to remember!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-lg-8">
                        <div class="about-content text-center marB60">
                            <p>
                                Zaika Tokyo, a fine dining restaurant. Nestled in Oyamadai of Setagaya-Ku.. Despite its relaxed ambiance this casual restaurant is wonderfully glamorous, both by day and by night making it the perfect spot to dine with your friends and family. We have a real passion to serve delicious meals in which there is no compromise on freshness, quality, hygiene and healthiness.
                            </p>                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-open" aria-hidden="true"></i></span>
                                <h4>Everyday Open</h4>
                            </span>                         
                        </div>
                    </div>
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-chef" aria-hidden="true"></i></span>
                                <h4>Expert Chef</h4>
                            </span>                         
                        </div>
                    </div>
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-menu" aria-hidden="true"></i></span>
                                <h4>English - Japanese Menu</h4>
                            </span>                         
                        </div>
                    </div>
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-covered-food-tray-on-a-hand-of-hotel-room-service" aria-hidden="true"></i></span>
                                <h4>Well Service</h4>
                            </span>                         
                        </div>
                    </div>
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-take-away" aria-hidden="true"></i></span>
                                <h4>Take Out</h4>
                            </span>                         
                        </div>
                    </div>
                    <div class="marT30 col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div class="feature-box text-center">
                            <span class="icon">
                                <i class="flaticon-scooter" aria-hidden="true"></i></span>
                                <h4>House Delivery</h4>
                            </span>                         
                        </div>
                    </div>
                </div>
                <div class="text-center marT50">
                    <a href="about.php" class="itg-button">Read More</a>
                <div>
            </div>
        </section>

        <!-- hours -->
        <section>
            <div class="special-style overlay">
                <div class="special-video-image parallax-style"></div>
            </div>
            <div class="padT100 padB70">
                <div class="theme-heading background marB50 positionR">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                                <h1>Opening hours</h1>
                                <p>
                                    We are open all Days of the Week. Come Join Us. :)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="opening-box text-center">
                        <div class="opening-hours pad40">
                            <h2>Lunch </h2>
                            <h1>11:00 to 15:00</h1>
                        </div>
                        <div class="opening-hours marB30 pad40">
                            <h2>Dinner</h2>
                            <h1>17:00 to 22:00</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   
        <!-- Featured Dishes -->
        <section class="grey-bg padT100 padB100">
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Our Popular Dishes</h1>
                            <p>
                                We've rounded up our most-popular dishes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-6">
                        <div class="collection-box theme-hover sticker">
                            <figure class="marB20">
                                <img src="assets/img/dishes/1.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Muffins</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <span class="sticker-tag">Only 1000 Yen</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="collection-box theme-hover sticker">
                            <figure class="marB20">
                                <img src="assets/img/dishes/2.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Juice</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <span class="sticker-tag">Only 1290 Yen</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="collection-box theme-hover sticker">
                            <figure class="marB20">
                                <img src="assets/img/dishes/3.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">BBQ chicken</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <span class="sticker-tag">Only 400 Yen</span>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="collection-box theme-hover sticker">
                            <figure class="marB20">
                                <img src="assets/img/dishes/4.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Salade</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <span class="sticker-tag">Only 500 Yen</span>
                        </div>
                    </div>
                    <div class="text-center marT50">
                        <a href="Menu.php" class="itg-button">View All Dishes</a>
                    <div>
                </div>
            </div>
        </section>

        <!-- Testimonials -->
        <section class="padTB100 customer-section" >
            <div class="theme-heading background marB100 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Testimonials</h1>
                            <p>
                                What our Happy Customers say about us.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div id="customer-slider" class="owl-carousel owl-theme slider positionR">
                        <div class="item">
                            <div class="col-md-12">
                                <div class="customer-box">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        eiusmod tempor incididuntdolor sit amet, consectetur 
                                        adipisicing incididuntdolor sit amet
                                    </blockquote>
                                    <div class="customer-detail">
                                        <div class="customer-img">
                                            <figure>
                                                <img src="assets/img/all/5.jpg" alt=""/>
                                            </figure>
                                        </div>
                                        <div class="caption">
                                            <h3>Pellentesque cursus</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="customer-box">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        eiusmod tempor incididuntdolor sit amet, consectetur 
                                        adipisicing incididuntdolor sit amet
                                    </blockquote>
                                    <div class="customer-detail">
                                        <div class="customer-img">
                                            <figure>
                                                <img src="assets/img/all/6.jpg" alt=""/>
                                            </figure>
                                        </div>
                                        <div class="caption">
                                            <h3>Pellentesque cursus</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="customer-box">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        eiusmod tempor incididuntdolor sit amet, consectetur 
                                        adipisicing incididuntdolor sit amet
                                    </blockquote>
                                    <div class="customer-detail">
                                        <div class="customer-img">
                                            <figure>
                                                <img src="assets/img/all/5.jpg" alt=""/>
                                            </figure>
                                        </div>
                                        <div class="caption">
                                            <h3>Pellentesque cursus</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-12">
                                <div class="customer-box">
                                    <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit 
                                        eiusmod tempor incididuntdolor sit amet, consectetur 
                                        adipisicing incididuntdolor sit amet
                                    </blockquote>
                                    <div class="customer-detail">
                                        <div class="customer-img">
                                            <figure>
                                                <img src="assets/img/all/6.jpg" alt=""/>
                                            </figure>
                                        </div>
                                        <div class="caption">
                                            <h3>Pellentesque cursus</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customer-background">
                <figure>
                    <img src="assets/img/background/customer.png" alt=""/>
                </figure>
            </div>
        </section>
 
        <div class="clear"></div>
        
        <!-- Footer -->
        <?php include('footer.php'); ?>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugin/megamenu/js/hover-dropdown-menu.js"></script>
        <script src="assets/plugin/megamenu/js/jquery.hover-dropdown-menu-addon.js"></script>
        <script src="assets/plugin/owl-carousel/js/owl.carousel.min.js"></script>
        
         
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>