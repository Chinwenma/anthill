<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <base href="<?= domain ?>">
  <title><?= $title ?></title>
  <link rel="icon" type="image/png" href="<?= $assets ?>/images/favicon.png" sizes="16x16">
  <!-- bootstrap 4  -->
  <link rel="stylesheet" href="<?= $assets ?>/css/vendor/bootstrap.min.css">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="<?= $assets ?>/css/all.min.css">
  <!-- line-awesome webfont -->
  <link rel="stylesheet" href="<?= $assets ?>/css/line-awesome.min.css">
  <link rel="stylesheet" href="<?= $assets ?>/css/vendor/animate.min.css">
  <!-- slick slider css -->
  <link rel="stylesheet" href="<?= $assets ?>/css/vendor/slick.css">
  <link rel="stylesheet" href="<?= $assets ?>/css/vendor/dots.css">
  <!-- dashdoard main css -->
  <link rel="stylesheet" href="<?= $assets ?>/css/main.css">
</head>
  <body>
    <div class="preloader">
      <div class="preloader-container">
        <span class="animated-preloader"></span>
      </div>
    </div>
  
    <!-- scroll-to-top start -->
    <div class="scroll-to-top">
      <span class="scroll-icon">
        <i class="fa fa-rocket" aria-hidden="true"></i>
      </span>
    </div>
    <!-- scroll-to-top end -->

  <div class="full-wh">
    <!-- STAR ANIMATION -->
    <div class="bg-animation">
      <div id='stars'></div>
      <div id='stars2'></div>
      <div id='stars3'></div>
      <div id='stars4'></div>
    </div><!-- / STAR ANIMATION -->
  </div>
  <div class="page-wrapper">
      <!-- header-section start  -->
  <header class="header">
    <div class="header__bottom">
      <div class="container">
        <nav class="navbar navbar-expand-xl p-0 align-items-center">
          <a class="site-logo site-title" href="index.html"><img src="<?= $assets ?>/images/logo.png" alt="site-logo"></a>
          <ul class="account-menu mobile-acc-menu">
            <li class="icon">
              <a href="login.html"><i class="las la-user"></i></a>
            </li>
          </ul> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu m-auto">
              <li><a href="./">Home</a></li>
              <li><a href="./about">About Us</a></li>
              <li><a href="./services">Services</a></li>
              <li><a href="./contact">Contact</a></li>
            </ul>
            <div class="nav-right">
              <ul class="account-menu ml-3">
                <li class="icon">
                  <a href="login.html"><i class="las la-user"></i></a>
                </li>
              </ul> 
              <select class="select d-inline-block w-auto ml-xl-3">
                <option>Eng</option>
                <option>Ban</option>
                <option>Hin</option>
              </select>
            </div>
          </div> 
        </nav>
      </div>
    </div><!-- header__bottom end -->
  </header>