<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="description" content="株式会社アンドゼンは、渋谷区を拠点にWeb制作とWebサービス開発を行っております。世の中に新しい常識を打ち出すべく、若手を中心に活動している会社です。高品質はもちろんのこと、納品後の管理・運用面を意識した製品づくりを心がけています。">
  <meta name="keywords" content="web制作, webサービス, ベンチャー, スタートアップ, 本のアプリ">
  <meta name="viewport" content="width=device-width">
  <meta name="google-site-verification" content="P4kIXk0YjJT3HQ4HD5MDJVCWRhhZvObDLXLvMMy3GK0" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/sanitize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/animsition.min.css">
  <link rel="pinback" href="<?php bloginfo( 'pinback_url' ); ?>" />
  <?php wp_deregister_script('jquery'); ?>
<!-- WordPressのjQueryを読み込ませない -->
  <?php wp_head(); ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81020258-1', 'auto');
  ga('send', 'pageview');
  </script>
</head>

<body <?php body_class(); ?>>

<div class="animsition">

<header class="header-bg" id="top-head">
  <div class="inner">
    <div id="mobile-head">
      <div class="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/andthen_logo.png"></a>
      </div>
      <!-- logo -->
      <div id="nav-toggle">
        <div>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <!-- nav-toggle -->
    </div>
    <!-- mobile-head -->
    <nav id="global-nav">
      <ul>
        <li><a href="<?php echo home_url(); ?>"><span>Home</span></a></li>
        <li><a href="<?php echo home_url(); ?>/company/"><span>Company</span></a>
          <ul>
            <li><a href="<?php echo home_url(); ?>/company/company-info/"><span>会社情報</span></a></li>
            <li><a href="<?php echo home_url(); ?>/comapny/member/"><span>メンバー</span></a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url(); ?>/service/"><span>Service</span></a>
          <ul>
            <li><a href="<?php echo home_url(); ?>/service/web/"><span>Web制作</span></a></li>
            <li><a href="<?php echo home_url(); ?>/service/app/"><span>サービス開発</span></a></li>
          </ul>
        </li>
        <li><a href="<?php echo home_url(); ?>/works/"><span>Works</span></a></li>
        <li><a href="<?php echo home_url(); ?>/blog/"><span>Blog</span></a></li>
        <li><a href="<?php echo home_url(); ?>/contact/"><span>Contact</span></a></li>
      </ul>
    </nav>
    <!-- global-nav -->
  </div>
 <!-- inner -->
</header>
<!-- header -->
