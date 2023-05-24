<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-3153218804237740",
    enable_page_level_ads: true
  });
</script>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<![endif]-->
<script src="https://use.fontawesome.com/8ae8bc623b.js"></script>
    <meta name='yandex-verification' content='60f435765c641031' />
    <link rel="shortcut icon" href="/wp-content/uploads/2016/05/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/bootstrap-grid-3.3.1.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/assets/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/magnific/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/scrollto/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/equalheight/jquery.equalheight.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/magnific/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WZ3MSZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WZ3MSZ');</script>
<!-- End Google Tag Manager -->
		<header class="wrapper-fluid header-page">
      <div class="wrapper-fluid header-menu">
        <div class="wrapper">
			<?php
					$args = array(
					'theme_location'  => '',
					'menu'            => 'Меню 1', 
					'container'       => '', 
					'container_class' => '', 
					'container_id'    => '',
					'menu_class'      => 'menu', 
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul  class="super_menu">%3$s</ul>',
					'depth'           => 0
				);

				wp_nav_menu(  $args  ); 
			?>
        </div>
      </div>
      <div class="wrapper-fluid bottom-header">
        <div class="wrapper">
        	<div class="wrap-logo">
            <a href="/" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.png" alt="logo"></a>
          </div>
          <div class="s-title-site"><span style="color:#5d860d">Nova House</span></div>
          <div class="wrap-order">
            <div class="wrap-phone">
              <div class="phone-block hidden-xs"><?php the_field('телефон','option');?></div>
           		<a class="phone-mobile-xs" href="tel:+79164592702"><span>8 (916) 459-27-02<span></a>
              <a class="style_link" href="#">ЗАКАЗАТЬ ЗВОНОК</a>
            </div>
            <div class="delivery">
              <img src="<?php echo get_template_directory_uri(); ?>/img/delivery-ico.png" alt="">
              <span>Бесплатная доставка вашего проекта по России</span>
            </div>
          </div>
        </div>
      </div>
		</header>