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

<!-- header -->
<header class="positionR">
    <div class="top-bar padTB30">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <a class="navbar-brand" href="index.php">
                    <img class="site_logo" alt="Site Logo"  src="assets/img/logo.png" />
                    </a>
                </div>
                <div class="col-md-9 col-sm-9 col-xs-12 hidden-xs">
                    <div class="contact-info pull-right padTB5">
                        <a href="book-table.php" class="itg-button"><?php echo $lang['header_button_book_now']; ?></a>
                    </div>
                    <div class="contact-info pull-right padTB5">
                        <div class="pull-left">
                            <a href="#" class="theme-circle marR10"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </div>
                        <div class="pull-left">
                            <h5><?php echo $lang['email_title']; ?></h5>
                            <p><?php echo $lang['email_content']; ?></p>
                        </div>
                    </div>
                    <div class="contact-info pull-right padTB5">
                        <div class="pull-left">
                            <a href="#" class="theme-circle marR10"><i class="fa fa-phone" aria-hidden="true"></i></a>
                        </div>
                        <div class="pull-left">
                            <h5><?php echo $lang['call_title']; ?></h5>
                            <p><?php echo $lang['call_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="main-menu" class="wa-main-menu">
        <div class="wathemes-menu relative">
            <div class="navbar navbar-default dark-grey-bg mar0" role="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="navigation-icon custom-drop">
                                    <ul class="social-icon top-bar-icon">
                                        <li style="padding: 0 10px;"><a href="?lang=en">English</a></li>
                                        <li style="padding: 0 10px;"><a href="?lang=jp">日本語</a></li>
                                    </ul>
                                </div>
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span> 
                                    <span class="icon-bar"></span>
                                    </button> 
                                </div>
                                <div class="navbar-collapse collapse">
                                    <ul class="nav navbar-nav">
                                        <li <?php echo ($page == 'one') ? "class='active'" : ""; ?> >
                                            <a href="index.php"><?php echo $lang['home']; ?></a>
                                        </li>
                                        <li <?php echo ($page == 'three') ? "class='active'" : ""; ?> >
                                            <a href="about.php"><?php echo $lang['about']; ?></a>
                                        </li>
                                        <li <?php echo ($page == 'two') ? "class='active'" : ""; ?> >
                                            <a href="menu.php"><?php echo $lang['menu']; ?></a>
                                        </li>
                                        <li <?php echo ($page == 'four') ? "class='active'" : ""; ?> >
                                            <a href="help.php"><?php echo $lang['faq']; ?></a>
                                        </li>
                                        <li <?php echo ($page == 'five') ? "class='active'" : ""; ?> >
                                            <a href="contact.php"><?php echo $lang['contact']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>