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
        <title><?php echo $lang['title_about']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
        <link href="assets/plugin/flaticon/flaticon.css" rel="stylesheet">   
    </head>
    <body>

        <!-- herder -->
        <?php $page = 'three'; include('header.php'); ?>
        
        <!-- About Us -->
        <section class="padT100 padB70">
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1><?php echo $lang['about_title_head']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="about-us">
                        <div class="col-md-6 col-xs-12 pull-right">
                            <figure class="marB30 text-center">
                                <img src="assets/img/all/about-1.jpg" alt="" class="img-responsive"/>
                            </figure>
                        </div>
                        <div class="col-md-6 col-xs-12 pull-left">
                            <p>
                                We are a family-run restaurant serving up authentic Indian cuisine made from locally sourced and sustainable ingredients. We believe the only way to achieve amazing is with fresh and thus every dish served is made by fresh wholesome ingredients. All our food is cooked mild to medium spiced to cater to general public.</br>
                                Whether you are looking for a quick lunch or a leisurely dinner, you’ll discover great service and a welcoming atmosphere. Our warm ambience along with our flavourful food is sure to give you a homely feel.</br>
                                It’s always been as much about the customers as the food. We strive to continue building our relationships with our customers and solidifying the quality of food we provide to them. </br>
                                In addition, we also provide Indian food catering for groups of any size – large or small, please call us for more information.</br>
                                Visit us to feel the ‘Zaika’ in the true sense.</br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <div class="clear"></div>
        
        <!-- Banner -->
        <section>
            <div class="special-style overlay">
                <div class="special-banner-image "></div>
            </div>
            <div class="padT100 padB70">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-xs-6">
                            <div class="facts text-center marB30">
                                <i class="f55 flaticon-man-eating" aria-hidden="true"></i>
                                <div class="count-number" data-count="200">
                                    <h1><span class="counter">200</span> +</h1>
                                </div>
                                <h3><span style="color: #F89516">Daily </span> Customers</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="facts text-center marB30">
                                <i class="f55 flaticon-chicken" aria-hidden="true"></i>
                                <div class="count-number" data-count="150">
                                    <h1><span class="counter">150</span> +</h1>
                                </div>
                                <h3><span style="color: #F89516">Amazing </span> Dishes</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="facts text-center marB30">
                                <i class="f55 flaticon-chef-1" aria-hidden="true"></i>
                                <div class="count-number" data-count="20">
                                    <h1><span class="counter">20</span> +</h1>
                                </div>
                                <h3><span style="color: #F89516">Master </span> Chef</h3>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-6">
                            <div class="facts text-center marB30">
                                <i class="f55 flaticon-company-workers" aria-hidden="true"></i>
                                <div class="count-number" data-count="9999">
                                    <h1><span class="counter">9999</span> +</h1>
                                </div>
                                <h3><span style="color: #F89516">Total </span>Experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="clear"></div>
        
        <!-- Take out and Dilevery -->
        <section>
            <div class="padT70 grey-bg padB30">
                <div class="theme-heading marB50 positionR">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                                <h1><?php echo $lang['about_service_title']; ?></h1>
                                <p>
                                    <?php echo $lang['about_service_body']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm-6 pad40">
                            <div class="opening-hours" style="background: #fff;">
                                <span class="icon">
                                    <i style="font-size: 45px;" class="flaticon-take-away" aria-hidden="true"></i>
                                </span>
                                <h3><?php echo $lang['about_service_modal_title_1']; ?></h3>
                                <h3 style="font-size:18px;"><?php echo $lang['about_service_modal_content_1']; ?></h3>
                                <a href="#modal-work01" data-toggle="modal" class="itg-button mar30"><?php echo $lang['about_service_button_more']; ?></a>
                            </div>
                        </div>
                        <div class="col-sm-6 marB30 pad40">
                            <div class="opening-hours" style="background: #fff;">
                                <span class="icon">
                                    <i style="font-size: 45px;" class="flaticon-scooter" aria-hidden="true"></i>
                                </span>
                                <h3><?php echo $lang['about_service_modal_title_2']; ?></h3>
                                <h3 style="font-size:18px;"><?php echo $lang['about_service_modal_content_2']; ?></h3>
                                <a href="#modal-work02" data-toggle="modal" class="itg-button mar30"><?php echo $lang['about_service_button_more']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Modal for Take Out --> 
        <div class="modal fade" id="modal-work01" tabindex="-1" role="dialog" aria-labelledby="modal-work01" aria-hidden="true">
				<div class="modal-dialog modal-md">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title" id="modal-work03"><?php echo $lang['about_service_modal_title_1']; ?></h4>
						</div>
						<div class="modal-body">
                            <p>
                                <?php echo $lang['about_modal_content_1']; ?>
                            </p>
                        </div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['about_title_head']; ?></button>
						</div>

					</div>
				</div>
			</div>
        
        <div class="clear"></div>

        <!-- Modal for Home Delivery --> 
        <div class="modal fade" id="modal-work02" tabindex="-1" role="dialog" aria-labelledby="modal-work02" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modal-work03"><?php echo $lang['about_service_modal_title_2']; ?></h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            <?php echo $lang['about_modal_content_2']; ?>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $lang['about_title_head']; ?></button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="clear"></div>

        <!-- herder -->
        <?php include('footer.php'); ?>
        	
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>