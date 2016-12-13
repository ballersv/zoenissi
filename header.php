<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset' ); ?>">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
	<?php wp_title(); ?></title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css">
	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-theme.min.css">
    <!--material design-->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap-material-design.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/ripples.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('template_url'); ?>/assets/css/css/font-awesome.css" rel="stylesheet">
   
    <!-- Editable css -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/main.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
 </head>
  <body>
    
 <div id="wrapper">
        
 	<div class="overlay"></div>
        
        <!--navigation-->
      	<div class="navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        	<ul class="nav sidebar-nav" >
                
                <li>
                    <a href="index.html">Consumer</a>
                </li>
                <li>
                    <a href="#">Professional</a>
                </li>
                <li>
                    <a href="#">Corporate</a>
                </li>
               
                 
            </ul>
        </div>
        <!--end of navigation-->
        
        <!--main of navigation-->
<nav class="navbar navbar-default zoe-nav-menu ">
        <div class="container-fluid">
        
          <div class="col-xs-6 col-sm-3 col-md-3 no-gutter">
            <div class="row">
              <div class="col-xs-3 col-sm-3 col-md-3">
              <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
              </button>
              </div>
            <div class="col-xs-9 col-sm-9 col-md-9 text-align-left">
              <a href="/" title="Home" rel="home" class="" id="logo">
              <img src="assets/img/logo-zoe.svg" class="background-logo" onerror="this.src='assets/img/logo-zoe.png" height="30" alt="Zoe Nissi Logo">
            </a>
            </div>
            </div>
          </div>
        
          <div class="col-xs-6 col-sm-9 col-md-9 text-align-right no-gutter">
          <ul class="nav navbar-nav navbar-right">
             <li><a href="#search"><span class="icon-search font-adjust-mid white"></span></a></li>
             <li><a href=""><span class="icon-social font-adjust-mid white"></span></a></li>
          </ul>
          </div>
        
        </div> 
               
                 
<div class="container-fluid no-gutter">
<div class="pos-rel z-index-two">
  <div class="pos-abs sub-nav-bg">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    MENU
    </button>
    
    </div>
    
     <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        
        
    
   
   <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav nav-spacer">
        <li class="active">
        <span class="icon-internet-1 font-adjust-big grey hidden-xs"></span>
        <a href="#" class="black">Home <span class="sr-only">(current)</span></a></li>
      
        <li class="dropdown">
        <span class="icon-paint-fresh font-adjust-big grey hidden-xs"></span>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Products <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="#">Obagi</a></li>
        <li><a href="#">ZO Skin Health</a></li>
        <li><a href="#">PCA Skin</a></li>
        <li><a href="#">Lycogel</a></li>
        
        </ul>
        </li>
        <li>
        <span class="icon-play-button font-adjust-big grey hidden-xs"></span>
        <a href="#" class="black">Media</a></li>
        <li>
        <span class="icon-gps font-adjust-big grey hidden-xs"></span>
        <a href="#" class="black">Clinic Locator</a></li>
        <li>
        <span class="icon-shirt font-adjust-big grey hidden-xs"></span>
        <a href="#" class="black">Careers</a></li>
        <li>
        <span class="icon-letter font-adjust-big grey hidden-xs"></span>
        <a href="#" class="black">Contact</a></li>
      </ul>
    </div> --> 
  </div>
</div>
</div>
 
<?php wp_head(); ?>                 
</nav>   

<div class="container-fluid no-gutter">
<?php if(!is_front_page()) : ?>
 <div class="blog-header">
 <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
 <p class="lead blog-description"><?php bloginfo('description') ?></p>
</div>
<?php endif; ?>

 <?php if(is_front_page()) : ?>
        <div class="container-fluid no-gutter"> 
      <?php else : ?>
        <div class="container">
    <?php endif; ?>
