<!doctype html>
<!--[if IE 7 ]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8 ]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico">
<title> Big Forest </title>
<!-- Bootstrap core CSS -->
<link href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_url'); ?>/js/html5shiv.js"></script>
      <script src="<?php echo bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />
<!-- Custom styles for this template -->
<link href="<?php echo bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/jquery.bxslider.css" type="text/css" media="screen" />
<link href="<?php echo bloginfo('template_url'); ?>/css/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/css/jquery.selectbox.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/css/style__.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/css/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/css/settings.css" media="screen" />
<link href="<?php echo bloginfo('template_url'); ?>/css/animate.min.css" rel="stylesheet">
<link href="<?php echo bloginfo('template_url'); ?>/css/ts.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/wow.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key&amp;sensor=false"></script>

<!-- Twitter Feed Scripts 
     Uncomment to activate

<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
<script type="text/javascript" src="js/twitter/twitter_feed.js"></script> -->

</head>

<body>
	
    <!--Header Start-->
        <header  data-spy="affix" data-offset-top="1" class="clearfix">


            <section class="toolbar">
                <div class="container text-right">

                    <div class="widget-icon-box"> <a class="icon-box" href="tel:123456789">
                            <i class="fa  fa-phone  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">1-888-123-4567</h4>
                                <span class="icon-box__subtitle">info@buildpress.com</span>
                            </div>
                        </a>
                    </div>
                    <div class="widget-icon-box"> 
                        <div class="icon-box">
                            <i class="fa  fa-home  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title"> Киевское шоссе Бизнес-Парк</h4>
                                <span class="icon-box__subtitle">"Румяанцево", Москва</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-icon-box">
                        <div class="icon-box">
                            <i class="fa  fa-clock-o  fa-3x"></i>
                            <div class="icon-box__text">
                                <h4 class="icon-box__title">ПОН - СУБ 8.00 - 18.00</h4>
                                <span class="icon-box__subtitle">Воскресение ВЫХОДНОЙ</span>
                            </div>
                        </div>
                    </div>
                    <div class="widget-icon-box social_top"> 
                        <div class="icon-box">
                            <a class="" href="#" target="_blank">
                                <i class="fa  fa-facebook"></i>
                            </a>
                        </div>
                    </div> 


                </div>
                <div class="toolbar_shadow"></div>
            </section>
            <div class="bottom-header" >
                <div class="container">
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="container-fluid"> 
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                    <span class="logo"><span class="primary_text">Big</span> 
                                        <span class="secondary_text">Forest</span></span></a> 
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                <?php
                                wp_nav_menu(array(
                                    'theme_location' => 'main-menu',
                                    'menu_class' => 'nav navbar-nav pull-right',
                                    'container' => 'ul'
                                ));
                                ?>
                            </div>
                            <!-- /.navbar-collapse --> 
                        </div>
                        <!-- /.container-fluid --> 
                    </nav>
                </div>
                <div class="header_shadow"></div>
            </div>
        </header>

        <section id="secondary-banner" class="dynamic-image-10">
            <!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                        <h2>Our Products</h2>
                        <h4>Exceptional images deserve an exceptional presentation.</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 ">
                        <ul class="breadcrumb">
                            <li><a href="<?php echo home_url(); ?>">Home</a></li>
                            <li>Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
	