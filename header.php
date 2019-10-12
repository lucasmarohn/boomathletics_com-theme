<!DOCTYPE html>
<html lang="en" <?php language_attributes(); ?> class="no-js">

<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NPX2ZJ8');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">

<?php wp_head(); ?>
</head>

<body class="resources">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPX2ZJ8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <aside class="wrapper top-nav">
    <span class="f-left address">241 Winter Street, Haverhill, Mass 01830 | Backside door on left of building | 5th Floor</span>
    <span class="f-right meta">
    <?php if ( is_user_logged_in() ) {
          echo '<a href="' . get_dashboard_url() .'">Dashboard</a>';
          echo '<a href="' . get_edit_post_link() .'">Edit Page</a>';
          echo '<a href="' . wp_logout_url() .'">Log Out</a>';
        } else {
          echo '<a href="' . home_url() . '/wp-login.php">Log in</a> <a href="' . home_url().'/wp-login.php">Sign Up</a>'; 
        } ?>
       | <a href="tel:+1<?php echo lm_get_phone(); ?>"><?php echo lm_print_phone(); ?></a>
    </span>
  </aside>

  <nav class="o-navbar group">
  <div class="container">
    <div class="o-navbar__logo">
      <a href="<?php echo home_url(); ?>">
        <div class="o-navbar__logo--icon">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Logo-01.svg" class="helmet" width="100">
        </div>
        <div class="o-navbar__logo--text">
          <img src="<?php echo get_template_directory_uri(); ?>/images/icons/Logo-02.svg" width="100">
        </div>
      </a>
    </div><!-- navbar__logo -->

    <div class="o-navbar__metaInfo">
      <div class="metaInfo__links">
        <a href="<?php echo get_home_url(); ?>/wp-login.php">Log in</a> | <a href="<?php echo get_home_url(); ?>/wp-admin">Sign Up</a>
        <a href="tel:+1<?php echo lm_get_phone(); ?>" class="metaInfo__phoneNumber">(978) 500-0319</a><br/>
      </div>
      <div class="metaInfo__address">
        <span class="address">241 Winter Street, Haverhill, Mass 01830</span><br/>
        <span class="address">Backside door on left of building | 5th Floor</span><br/>
      </div>
    </div><!-- metaInfo -->
    <div class="o-navbar__metaPhone">
      <a href="tel:9785000319" id="o-navbar__phone">Call Us</a>
    </div>
    
    <input type="checkbox" name="o-navbar__toggle" id="o-navbar__toggle" />
    <label for="o-navbar__toggle" id="o-navbar__toggleLabel">Menu</label>
    
    <section class='m-navToggle'>
      <ul class="m-navList">
        <li class="m-navList__item home <?php echo lm_is_page_active('home'); ?>">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>">Home</a>
        </li>
        <li class="m-navList__item memberships <?php lm_is_page_active('programs'); ?>">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>/programs">Programs</a>
        </li>
        <li class="m-navList__item schedule <?php lm_is_page_active('schedule'); ?>">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>/schedule">Schedule</a>
        </li>
        <li class="m-navList__item about <?php lm_is_page_active('about'); ?>">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>/about">About</a>
        </li>
        <li class="m-navList__item resources <?php if( is_home() ) {echo '--active';} ?> ">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>/resources">Resources</a>
        </li>
        <li class="m-navList__item contact <?php lm_is_page_active('contact-us'); ?>">
          <a class="m-navList__link" href="<?php echo get_home_url(); ?>/contact-us">Contact</a>
        </li>
      </ul>
      <div class="m-navToggle__mobileMeta">
        <span class="m-navToggle__address">241 Winter Street, Haverhill, Mass 01830</span>
      </div>
      
    </section><!-- navToggle -->
  </div><!-- container -->
</nav>
