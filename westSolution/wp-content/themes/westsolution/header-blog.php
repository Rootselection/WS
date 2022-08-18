<!DOCTYPE html>
<html lang="ua" <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
    href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Montserrat:wght@400;700&family=Roboto:ital@0;1&display=swap"
    rel="stylesheet">
  <!-- <link href="https://github.hubspot.com/odometer/themes/odometer-theme-default.css" rel="stylesheet"> -->
  
  <title>Wordpress Test Page</title>

  <?php wp_head(); ?>
</head>

<body <?php body_class( $class ); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
  <div class="header__content container">
    <div class="header__logo">
      <a href="<?php echo get_home_url(); ?>">
        <img class="header__logo-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="header logo image">
      </a>
    </div>
    <div class='header__menu menu'>
      <div class="icon-menu__wrapper" id="menuBtn">
        <div class='menu__icon icon-menu'>
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <nav class='menu__body' id="menu__body">
        <div class="menu__mask" id="menu__mask"></div>
        <div class="menu__inner" id="menu__inner">
          <ul class='menu__list' id="menu__list">
          <li class='menu__item'>
            <a class='menu__link' href='<?php echo get_home_url(); ?>'>Home</a>
          </li>

        </ul>
        <div class="menu__close" id="menu__close">
          <span></span>
          <span></span>
        </div>
      </nav>
    </div>
    <div class="header__sidebar">
      <button class="header__sidebar-cart">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cart.png" alt="">
      </button>
      <button class="header__sidebar-search">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.png" alt="">
      </button>
    </div>
  </div>
</header>
