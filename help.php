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
        <title><?php echo $lang['title_faq']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- herder -->
        <?php $page = 'four'; include('header.php'); ?>

        <!-- Help -->
        <section class="padT100 padB70">
            <!--- Theme heading start-->
            <div class="theme-heading marB20 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1><?php echo $lang['help_title_head'];?></h1>
                            <p>
                                <?php echo $lang['help_title_body'];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--- Theme heading end-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="faq marB100">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="faqs">
                                        <h3>How far do you deliver?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_1'];?>
                                            </p>
                                        </div>
                                        <h3>What is the minimum order rate for dilivery ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_2'];?>
                                            </p>
                                        </div>
                                        <h3>Can you organize events ? If yes, of what size ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_3'];?>
                                            </p>
                                        </div>
                                 
                                        <h3>Why are delivery rates higher than resturant rates ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_5'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="faqs">
                                        <h3>What is the type of meat that you serve ? </h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_6'];?>
                                            </p>
                                        </div>
                                        <h3>Are you vegetarian friendly ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_7'];?>
                                            </p>
                                        </div>
                                        <h3>Do you have parking facility ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_8'];?>
                                            </p>
                                        </div>
                                        <h3>Do you accept reservations ?</h3>
                                        <div>
                                            <p>
                                                <?php echo $lang['help_A_8'];?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.countTo.js"></script> 
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
        <script src="assets/plugin/acordian/js/jquery-ui.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>