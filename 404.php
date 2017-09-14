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
        <title><?php echo $lang['title_404']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        <section style="border-bottom: 2px solid #d3d3d3; background-color: #f5f5f5;">
            <div class="navigation-icon custom-drop" >
                <ul class="social-icon top-bar-icon">
                    <li style="padding: 0 10px;"><a href="?lang=en">English</a></li>
                    <li style="padding: 0 10px;"><a href="?lang=jp">日本語</a></li>
                </ul>
            </div>
        </section>
        <section class="padTB30 padB70 dishes">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="error-page text-center">
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="marB30"><?php echo $lang['404_oops']; ?></h2>
                                </div>
                                <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                                    <figure class="marB30">
                                        <img src="assets/img/all/error.png" alt=""/>
                                    </figure>
                                </div>
                                <div class="clear"></div>
                                <div class="col-md-12 col-sm-12">
                                    <h1><?php echo $lang['404_not_found_title']; ?></h1>
                                </div>
                                <div class="clear"></div>
                                <div class="col-md-12 col-sm-12">
                                    <h3 class="marB30"><?php echo $lang['404_not_found_content']; ?></h3>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <a href="index.php" class="marB30 itg-button dark"><?php echo $lang['404_button_back_home']; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>