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
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="first_object"></div>
					<div class="object" id="second_object"></div>
					<div class="object" id="third_object"></div>
					<div class="object" id="forth_object"></div>
				</div>
			</div>
		</div>

        <!-- content -->
        <section style="z-index:1000;">
            <div class="navigation-icon custom-drop" >
                <ul class="social-icon top-bar-icon">
                    <li style="padding: 0 10px;"><a href="?lang=en"><b>English</b></a></li>
                    <li style="padding: 0 10px;"><a href="?lang=jp"><b>日本語</b></a></li>
                </ul>
            </div>
        </section>
        <section class="special-section">
            <div class="special-style special-style-fixed dark-overlay">
                <div class="comming-soon-style-1 parallax-style"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0">
                        <div class="comming-soon-content text-center">
                            <figure class="marB20">
                                <img src="assets/img/logo-light.png" alt=""/>
                            </figure>
                            <h2 class="colorW marB10"><?php echo $lang['coming_title'];?></h2>
                            <h1 class="colorW marB20"><?php echo $lang['coming_title_2'];?> </h1>
                            <div class="timer">
                                <ul id="coming-soon-timer">
                                    <li class="colorW after-border"><span id="days"></span><br>
                                        <span class="normal"><?php echo $lang['coming_days'];?></span>
                                    </li>
                                    <li class="colorW after-border"><span id="hours"></span><br>
                                        <span class="normal"><?php echo $lang['coming_hours'];?></span>
                                    </li>
                                    <li class="colorW after-border"><span id="minutes"></span><br>
                                        <span class="normal"><?php echo $lang['coming_minutes'];?></span>
                                    </li>
                                    <li class="colorW"><span id="seconds"></span><br>
                                        <span class="normal"><?php echo $lang['coming_seconds'];?></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-8 col-xs-10 col-md-offset-2 col-sm-offset-2 col-xs-offset-1">
                                    <h3 class="colorW marB20"><?php echo $lang['coming_body_1'];?><span class="theme-color"><b> <?php echo $lang['coming_body_2'];?> </b></span><?php echo $lang['coming_body_3'];?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- jQuery and plugins -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugin/counter/js/jquery.appear.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>