<!DOCTYPE html>
<?php $page = basename($_SERVER['PHP_SELF']); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title></title>
<link rel="shortcut icon" href="assets/imgs/favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="assets/css/bootstrap.css" />
<link type="text/css" rel="stylesheet" href="assets/css/theme.css" />
<link rel="stylesheet" href="assets/css/slippry.css" />
<link type="text/css" rel="stylesheet" href="assets/css/mobilenav.css" />

<script src="//code.jquery.com/jquery.min.js"></script>
<script src="assets/js/slippry.js"></script>


<!-- Typekit stuff, needs to be in the header -->
<script src="//use.typekit.net/kpy6txz.js"></script>
<script>try{Typekit.load();}catch(e){}</script>

</head>
<body id="top">
<div id="page-content">
<!-- Mobile nav implementation -->
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="slide-nav">
        <div class="container">

        <div class="navbar-header">
        <a class="navbar-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </a>
        <a class="navbar-brand" href="#">Menu</a>

        <a class="mobile-backtotop">Back to Top<img src="assets/imgs/up.png"></a>
        </div>

        <div id="slidemenu">
        <ul class="nav navbar-nav">
         <li <?php if ($page == "about.php"){ echo "class='active'"; } ?>><a href="about.php">ABOUT</a></li>
         <li <?php if ($page == "news.php"){ echo "class='active'"; } ?>><a href="news.php">NEWS & EVENTS</a></li>
         <li <?php if ($page == "careers.php"){ echo "class='active'"; } ?>><a href="careers.php">CAREERS</a></li>
         <li <?php if ($page == "contact.php"){ echo "class='active'"; } ?>><a href="contact.php">CONTACT</a></li>
        </ul>
        <ul class="nav navbar-nav">
         <li <?php if ($page == "index.php"){ echo "class='active'"; } ?>><a href="index.php">HOME</a></li>
         <li <?php if ($page == "industries.php"){ echo "class='active'"; } ?>><a href="industries.php">INDUSTRIES</a></li>
         <li <?php if ($page == "grades.php"){ echo "class='active'"; } ?>><a href="grades.php">GRADES</a></li>
         <li <?php if ($page == "quality.php"){ echo "class='active'"; } ?>><a href="quality.php">QUALITY</a></li>
         <li <?php if ($page == "library.php"){ echo "class='active'"; } ?>><a href="library.php">LIBRARY</a></li>
         <li <?php if ($page == "toolbox.php"){ echo "class='active'"; } ?>><a href="toolbox.php">TOOLBOX</a></li>
        </ul>
        </div>

        </div>
        </div>
<div class="header-content">
    <div class="black-background">
        <div class="desktop-header container">
            <div class="row">
                <div class="logowrap col-md-5 col-xs-12">
                  <img style="width: 500px;" class="img-responsive" src="assets/imgs/GCLogo.gif"/>
                </div>
                <div class="linkwrap col-xs-7">
                  <div class="header-position-right">
                    <ul class="contact-navigation">
                        <li <?php if ($page == "about.php"){ echo "class='currentnav'"; } ?>><a href="about.php">About</a></li> |
                        <li <?php if ($page == "news.php"){ echo "class='currentnav'"; } ?>><a href="news.php">News & Events</a></li> |
                        <li <?php if ($page == "careers.php"){ echo "class='currentnav'"; } ?>><a href="careers.php">Careers</a></li> |
                        <li <?php if ($page == "contact.php"){ echo "class='currentnav'"; } ?>><a href="contact.php">Contact</a></li>
                    </ul>
                  </div>
                </div>
            </div>

        </div>


        <div class="tablet-header container">

            <div class="row">

              <div class="logowrap col-xs-6">
                <img class="img-responsive" src="assets/imgs/GCLogo.gif"/>
              </div>

              <div class="searchbar col-xs-6">
                  <div class="header-position-right">
                    <ul class="contact-navigation">
                      <li <?php if ($page == "about.php"){ echo "class='currentnav'"; } ?>><a href="about.php">About</a></li> |
                      <li <?php if ($page == "news.php"){ echo "class='currentnav'"; } ?>><a href="news.php">News & Events</a></li> |
                      <li <?php if ($page == "careers.php"){ echo "class='currentnav'"; } ?>><a href="careers.php">Careers</a></li> |
                      <li <?php if ($page == "contact.php"){ echo "class='currentnav'"; } ?>><a href="contact.php">Contact</a></li>
                    </ul>
                  </div>
              </div>
            </div>
        </div>

        <div class="mobile-header container">
          <div class="row">
            <img class="img-responsive" src="assets/imgs/GCLogo.gif"/>
          </div>
        </div>
    </div>


    <div class="red-background">
        <div class="lower-nav container">
            <div class="row">
                <ul class="col-sm-12 navigation">
                    <li <?php if ($page == "index.php"){ echo "class='currentnav'"; } ?>><a href="index.php">HOME</a></li>
                    <li <?php if ($page == "industries.php"){ echo "class='currentnav'"; } ?>><a href="industries.php">INDUSTRIES</a></li>
                    <li <?php if ($page == "grades.php"){ echo "class='currentnav'"; } ?>><a href="grades.php">GRADES</a></li>
                    <li <?php if ($page == "quality.php"){ echo "class='currentnav'"; } ?>><a href="quality.php">QUALITY</a></li>
                    <li <?php if ($page == "library.php"){ echo "class='currentnav'"; } ?>><a href="library.php">LIBRARY</a></li>
                    <li <?php if ($page == "toolbox.php"){ echo "class='currentnav'"; } ?>><a href="toolbox.php">TOOLBOX</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>
