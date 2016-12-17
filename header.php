<!DOCTYPE html>
<html lang="ja" id="pageTop">
<head>
    <meta charset="UTF-8">
    <title><?php bloginfo('name'); ?></title>
<meta name="robots" content="index, follow" />
<meta name="keywords" content="">
<meta name="description" content="">

    <meta name="author" content="na2ken" />
    <meta name="format-detection" content="telephone=no,address=no,email=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="alternate" hreflang="ja" href="http://bp-media.iaowd.com">
    <link rel="icon" href="http://bp-media.iaowd.com/favicon.ico">
    <link rel="apple-touch-icon" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/icon.png">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/bootstrap.css">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/animate.css">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/css/bp.css">
    <link rel="stylesheet" href="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/style.css">
</head>
<body class="page">
<header id="header" class="navbar navbar-default navbar-fixed-top l-header" role="banner">
  <div class="container-liquid page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="textSize-xxxs text-center hamburgerMenu">MENU</span>
      </button>
      <div class="l-vi page-scroll">
            <a href="http://bp-media.iaowd.com" class="vi-a">
                <img src="http://bp-media.iaowd.com/wp-content/themes/bootpress-media/img/vi.svg" class="viUnit" height="auto" alt="bp-media.iaowd.com">
            </a>
      </div>

      <div class="navbar-collapse collapse l-globalNav">
            <div class="l-globalNav-main">
                <?php wp_nav_menu( array( 'theme_location' => 'header-navi', 'items_wrap' => '<ul class="nav navbar-nav">%3$s</ul>' ) ); ?>
            </div>

            <div class="l-globalNav-sub">
                 <ul class="nav navbar-nav">
                     <li class="navbarNavUnit-sub">
                         <a href="http://bp-media.iaowd.com/contact/" class="is-navbarNavUnit-sub-active">お問い合わせ <i class="fa fa-paper-plane-o fa-lg horizontalMargin-l-ss"></i></a></li>
                 </ul>
           </div>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
</header>
