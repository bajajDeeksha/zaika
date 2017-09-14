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
        <?php include('header.php'); ?>
        
        <div id="privacy" class="padT100 padB100">
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Disclaimer</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p> This site https://www.haysdock.co.uk/ (“the Site”) is operated by or on behalf of Hay's Dock Café Restaurant. When you view the Site, your visit and any disputes arising from it are subject to this Disclaimer, and our Terms and Conditions of Use. </p>
                <p> We have taken reasonable steps to ensure that the Website and all information provided on or through it is accurate. However, Hay's Dock Café Restaurant assumes no responsibility for information contained on this Website and disclaims all liability in respect of such information. </p>
                <p> We shall not be held liable for any losses you suffer, including any indirect or consequential loss, including but not limited to loss of business or profits or any other financial loss arising out of or in any way connected with the use of this Site. </p>
                <p> Hay's Dock Café Restaurant are not responsible for the content of any sites directly or indirectly linked to or linked from any pages on this Website. If you consider any linked pages to be inappropriate, illegal or offensive please contact us. </p>
            </div>
        </div>

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