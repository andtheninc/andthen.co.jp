<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="株式会社アンドゼンは、渋谷区を拠点にWeb制作とWebサービス開発を行っております。世の中に新しい常識を打ち出すべく、若手を中心に活動している会社です。高品質はもちろんのこと、納品後の管理・運用面を意識した製品づくりを心がけています。">
  <meta name="keywords" content="web制作, webサービス, ベンチャー, スタートアップ, 本のアプリ">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320"/>
  <meta name="viewport" content="width=device-width">
  <meta name="google-site-verification" content="P4kIXk0YjJT3HQ4HD5MDJVCWRhhZvObDLXLvMMy3GK0" />
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/sanitize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/style.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/animsition.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/page.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/single.css">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/library/images/favicon.ico">
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
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/andthen_logo.png"></a>
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
    <nav id="global-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<?php wp_nav_menu(array(
					 'container' => false,                           // remove nav container
					 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					 'menu' => 'menu',  // nav name
					 'menu_class' => 'nav top-nav cf',               // adding custom nav class
					 'theme_location' => 'main-nav',                 // where it's located in the theme
					 'before' => '',                                 // before the menu
								 'after' => '',                                  // after the menu
								 'link_before' => '<span>',                            // before each link
								 'link_after' => '</span>',                             // after each link
								 'depth' => 0,                                   // limit the depth of the nav
					 'fallback_cb' => ''                             // fallback function (if there is one)
			)); ?>
		</nav>
    <!-- global-nav -->
  </div>
 <!-- inner -->
</header>
<!-- header -->
