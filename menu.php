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
        <title><?php echo $lang['title_menu']; ?></title>
        
        <!-- Favicon -->
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
        
        <!-- Master Css -->
        <link href="main.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- herder -->
        <?php $page = 'two'; include('header.php'); ?>

        <!-- Complete Menu -->
        <section class="padT100 padB70">
            <!--- Theme heading start-->
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Some special menu</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem 
                                quam, adipiscing condimentum 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--- Theme heading end-->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="tab text-center marB50">
                            <a class="tablinks active" data-id="lunch">Lunch</a>
                            <a class="tablinks" data-id="breakfast">Breakfast</a>
                            <a class="tablinks " data-id="desert">Desert</a>
                            <a class="tablinks " data-id="pizza">Fresh pizza</a>
                            <a class="tablinks " data-id="dinner">Dinner</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="lunch" class="tabcontent" style="display:block;" >
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/14.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Chees pizza </a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/15.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Drinks</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/16.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Icecreams</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/17.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Pasta</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/18.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Cakes</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/19.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Noodels</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="breakfast" class="tabcontent">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/19.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Noodels</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/18.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Cakes</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/17.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Pasta</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/16.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Icecreams</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/14.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Chees pizza </a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/15.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Drinks</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="desert" class="tabcontent">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/14.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Chees pizza </a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/15.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Drinks</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/17.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Pasta</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/16.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Icecreams</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/19.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Noodels</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/18.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Cakes</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pizza" class="tabcontent">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/15.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Drinks</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/18.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Cakes</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/19.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Noodels</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/17.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Pasta</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/16.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Icecreams</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/14.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Chees pizza </a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="dinner" class="tabcontent">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/17.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Pasta</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/19.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Noodels</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/18.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Cakes</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/14.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Chees pizza </a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/16.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Icecreams</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="row">
                                <div class="menu-list-box marB30">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <figure>
                                            <img src="assets/img/dishes/15.jpg" alt=""/>
                                        </figure>
                                    </div>
                                    <div class="col-sm-8 col-md-8">
                                        <h3><a href="#">Drinks</a><span class="theme-color">$15.00</span></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adip
                                            elit. Integer lorem quam, adipiscing condi
                                            lorem quam, adipiscing 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="clear"></div>
        
        <section class="padT100 padB70">
            <!--- Theme heading start-->
            <div class="theme-heading marB50 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                            <h1>Menu of the day</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem 
                                quam, adipiscing condimentum 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--- Theme heading end-->
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="collection-box theme-hover sticker marB50">
                            <figure class="marB20">
                                <img src="assets/img/dishes/6.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Chinese food</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <a href="#" class="colorB">Order Now</a>
                            <div class="sticker-box">
                                <span class="sticker-tag">Only 12.99 $</span>
                                <br>
                                <span class="sticker-tag">10% OFF</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="collection-box theme-hover sticker marB50">
                            <figure class="marB20">
                                <img src="assets/img/dishes/7.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Italian pizza</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <a href="#" class="colorB">Order Now</a>
                            <div class="sticker-box">
                                <span class="sticker-tag">Only 12.99 $</span>
                                <br>
                                <span class="sticker-tag">10% OFF</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="collection-box theme-hover sticker marB50">
                            <figure class="marB20">
                                <img src="assets/img/dishes/8.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Icecreams</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <a href="#" class="colorB">Order Now</a>
                            <div class="sticker-box">
                                <span class="sticker-tag">Only 12.99 $</span>
                                <br>
                                <span class="sticker-tag">10% OFF</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="collection-box theme-hover sticker marB50">
                            <figure class="marB20">
                                <img src="assets/img/dishes/9.jpg" alt=""/>
                            </figure>
                            <h3 class="marB10"><a href="#">Kids meals</a></h3>
                            <p>Integr lorem quam adipiscing the
                                tristique , eleifend turpis Pelle
                                tesque cursus arcu 
                            </p>
                            <a href="#" class="colorB">Order Now</a>
                            <div class="sticker-box">
                                <span class="sticker-tag">Only 12.99 $</span>
                                <br>
                                <span class="sticker-tag">10% OFF</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center marB30">
                        <a href="#" class="itg-button">Load more</a>
                    </div>
                </div>
            </div>
            <div class="menu-background">
                <figure>
                    <img src="assets/img/background/menu-back.png" alt=""/>
                </figure>
            </div>
        </section>

        <div class="clear"></div>
        
        <!-- Footer -->
        <?php $page = 'two'; include('footer.php'); ?>

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