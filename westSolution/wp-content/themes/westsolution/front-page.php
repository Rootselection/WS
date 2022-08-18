<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

  <main class="page">
    <section class="header-intro">
  <div class="swiper swiperHeader">
    <div class="swiper-wrapper">
      <?php
      $loop = CFS()->get('header_slide');
      foreach ($loop as $row) {
        ?>
      <div class="swiper-slide header-intro__item" >
        <img class="swiper-slide-bg" src="images/header/bg.jpg" alt="">
        <span class="header-intro__pretitle">
          <?php echo $row['slider_subtitle'] ?>
        </span>
        <h1 class="header-intro__title">
        <?php echo $row['slider_title'] ?>
        </h1>
            <a class="header-intro__link" href="<?php echo $row['slider_link_url'] ?>"><?php echo $row['slider_link_text'] ?></a>
      </div>
        <?php
      }
      ?>


    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
    <section id="about" class="about container">
  <div class="title__inner about__title-inner">
  <span class="pretitle">What we do</span>
    <h2 class="title">Story about us</h2>
  </div>
  <p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
  <div class="about__inner">
      <?php
      $loop = CFS()->get('about_us_photos');
      foreach ($loop as $row) {
        ?>
    <div class="about__item">
      <img class="about__item-img" src="<?php echo $row['about_us_image'] ?>" alt="about photo">
      <div class="about__item-hover" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about/box-bg.jpg');">
        <img class="about__item-hover-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/team.svg" alt="team icon">
        <h3 class="about__item-hover-title"><?php echo $row['about_us_title'] ?></h3>
      </div>
      </div>
      <?php
      }
      ?>
  </div>
</section>
    <section class="stats">
  <div class="stats__wrapper container">
    <div class="stats__item">
      <span id="odometer1" class="stats__count odometer"></span>
      <span class="stats__text">Web Design Projects</span>
    </div>
    <div class="stats__item">
      <span id="odometer2" class="stats__count odometer"></span>
      <span class="stats__text">happy client</span>
    </div>
    <div class="stats__item">
      <span id="odometer3" class="stats__count odometer"></span>
      <span class="stats__text">award winner</span>
    </div>
    <div class="stats__item">
      <span id="odometer4" class="stats__count odometer"></span>
      <span class="stats__text">cup of coffee</span>
    </div>
    <div class="stats__item">
      <span id="odometer5" class="stats__count odometer"></span>
      <span class="stats__text">members</span>
    </div>
  </div>
</section>
    <section id="services" class="services container">
  <div class="title__inner services__title-inner">
    <span class="pretitle">We work with</span>
    <h2 class="title">Amazing Services</h2>
  </div>
  <div class="services__inner">
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/1.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          Photography
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/2.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          Web Design
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/3.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          Creativity
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/4.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          seo
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/5.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          Css/Html
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
    <div class="services__item">
      <img class="services__item-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/services/6.png" alt="services icon">
      <div class="services__item-box">
        <h3 class="services__item-title">
          digital
        </h3>
        <p class="services__item-text">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
        </p>
      </div>
    </div>
  </div>
</section>
    <section style="  background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/design/bg.jpg');" class="design">
  <div class="title__inner design__title-inner">
    <span class="pretitle">For all devices</span>
    <h2 class="title">Unique design</h2>
  </div>
  <div class="design__inner">
    <img class="design__img-one" src="<?php echo get_template_directory_uri(); ?>/assets/images/design/tablet.png" alt="tablet photo">
    <img class="design__img-second" src="<?php echo get_template_directory_uri(); ?>/assets/images/design/phone.png" alt="phone photo">
  </div>
</section>
    <section id="processes" class="processes container">
  <div class="title__inner processes__title-inner">
    <span class="pretitle">Service</span>
    <h2 class="title">what we do</h2>
  </div>
  <p class="processes__text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
  </p>
  <div class="processes__inner">
    <div class="processes__img-box">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/processes/box-bg.jpg" alt="">
    </div>
    <div class="processes__row">
      <div class="processes__col">
        <div class="processes__tabs">
          <div class="processes__tab">
            <input type="radio" id="rd1" name="rd">
            <label class="processes__tab-label" for="rd1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/processes/1.png" alt="processes icon"> <span>Photography</span>
              <div class="processes__tab-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #ccc;
                        fill-rule: evenodd;
                      }
                    </style>
                  </defs>
                  <path id="ARROW_DOWN" data-name="ARROW / DOWN" class="cls-1" d="M1521.14,4194.52l7.86,7.86,7.96-7.96h0a1.5,1.5,0,0,1,2.12,2.12h0l-9,9h0a1.511,1.511,0,0,1-1.08.46h-0.01a1.528,1.528,0,0,1-1.08-.46h0l-9-9h0.01A1.5,1.5,0,1,1,1521.14,4194.52Z" transform="translate(-1518.5 -4194)"/>
                </svg>
              </div>
            </label>
            <div class="processes__tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

          </div>
          <div class="processes__tab">
            <input type="radio" id="rd2" name="rd">
            <label class="processes__tab-label" for="rd2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/processes/2.png" alt="processes icon"> <span>creativity</span>
              <div class="processes__tab-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #ccc;
                        fill-rule: evenodd;
                      }
                    </style>
                  </defs>
                  <path id="ARROW_DOWN" data-name="ARROW / DOWN" class="cls-1" d="M1521.14,4194.52l7.86,7.86,7.96-7.96h0a1.5,1.5,0,0,1,2.12,2.12h0l-9,9h0a1.511,1.511,0,0,1-1.08.46h-0.01a1.528,1.528,0,0,1-1.08-.46h0l-9-9h0.01A1.5,1.5,0,1,1,1521.14,4194.52Z" transform="translate(-1518.5 -4194)"/>
                </svg>
              </div>
            </label>
            <div class="processes__tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
          <div class="processes__tab">
            <input type="radio" id="rd3" name="rd">
            <label class="processes__tab-label" for="rd3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/processes/3.png" alt="processes icon"> <span>web design</span>
              <div class="processes__tab-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="12" viewBox="0 0 21 12">
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #ccc;
                        fill-rule: evenodd;
                      }
                    </style>
                  </defs>
                  <path id="ARROW_DOWN" data-name="ARROW / DOWN" class="cls-1" d="M1521.14,4194.52l7.86,7.86,7.96-7.96h0a1.5,1.5,0,0,1,2.12,2.12h0l-9,9h0a1.511,1.511,0,0,1-1.08.46h-0.01a1.528,1.528,0,0,1-1.08-.46h0l-9-9h0.01A1.5,1.5,0,1,1,1521.14,4194.52Z" transform="translate(-1518.5 -4194)"/>
                </svg>
              </div>
            </label>
            <div class="processes__tab-content">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <section class="comments">
  <div class="comments__wrapper container">
    <div class="swiper commentsSwiper">
      <div class="commentsSwiper-arrow-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="#95e1d3">
          <defs>
          </defs>
          <path id="ARROW_DOWN_copy_2" data-name="ARROW / DOWN copy 2" class="cls-1" d="M394.477,4572.86l-7.858-7.86,7.962-7.96h0a1.5,1.5,0,0,0-2.121-2.12h0l-9,9h0A1.481,1.481,0,0,0,383,4565h0v0.01a1.475,1.475,0,0,0,.459,1.07h0l9,9h0A1.5,1.5,0,1,0,394.477,4572.86Z" transform="translate(-383 -4554.5)"/>
        </svg>
        
      </div>
      <div class="swiper-wrapper swiper-wrapper__inner">
      <?php
      $loop = CFS()->get('comments_slider');
      if(isset($loop) && is_array($loop))
      foreach ($loop as $row) {
        ?>
        <div class="swiper-slide">
          <div class="swiper-slide__img-box">
            <img src="<?php echo $row['comments_avatar'] ?>" alt="comment icon">
          </div>
          <div class="swiper-slide__content">
            <p class="swiper-slide__content-text">
            “<?php echo $row['comments_text'] ?>”
            </p>
            <div class="swiper-slide__content-author">
            <?php echo $row['comments_name'] ?>
            </div>
          </div>
        </div>

        <?php
      }
      ?>
      </div>
      <div class="commentsSwiper-arrow-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="#95e1d3">
          <defs>
          </defs>
          <path id="ARROW_DOWN_copy" data-name="ARROW / DOWN copy" class="cls-1" d="M1523.52,4572.86l7.86-7.86-7.96-7.96h0a1.5,1.5,0,0,1,2.12-2.12h0l9,9h0a1.493,1.493,0,0,1,.46,1.08h0v0.01a1.488,1.488,0,0,1-.46,1.07h0l-9,9h0A1.5,1.5,0,1,1,1523.52,4572.86Z" transform="translate(-1523 -4554.5)"/>
        </svg>
        
      </div>
    </div>
  </div>
</section>
    <section class="team container">
  <div class="title__inner team__title-inner">
    <span class="pretitle">Who we are</span>
    <h2 class="title">Meet our team</h2>
  </div>
  <p class="team__text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
  </p>
  <div class="team__inner">
  <?php

// Запрашиваем продукты
$var = CFS()->get('team_post_per_page');
$query = new WP_Query( [
  'post_type'      => 'team',
  'posts_per_page' => $var,
] );

// Обрабатываем полученные в запросе продукты, если они есть

if ( $query->have_posts() ) {

  while ( $query->have_posts() ) {
	$query->the_post();?>

<div class="team__item">
      <div class="team__item-photo-box">
        <img class="team__item-img" src="<?php echo CFS()->get('team_img') ?>" alt="team photo">
        <div class="team__item-hover-box">

          <a class="team__item-hover-link" href="<?php echo CFS()->get('facebook-team_link') ?>">

            <svg width="13" height="26" viewBox="0 0 13 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_1162_68)">
              <path d="M3.22739 26V13.8H0.00146484V9.40748H3.22739V5.65565C3.22739 2.70743 5.13296 0 9.52378 0C11.3016 0 12.6161 0.17043 12.6161 0.17043L12.5126 4.27235C12.5126 4.27235 11.1719 4.25929 9.7089 4.25929C8.1255 4.25929 7.87182 4.98898 7.87182 6.20009V9.40748H12.6384L12.431 13.8H7.87182V26H3.22739Z" fill="#F38181"/>
              </g>
              <defs>
              <clipPath id="clip0_1162_68">
              <rect width="12.64" height="26" fill="white"/>
              </clipPath>
              </defs>
              </svg>
          </a>
          <a class="team__item-hover-link" href="<?php echo CFS()->get('twitter_team_link') ?>">

            <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M25.6133 5.34842C24.7087 5.74925 23.737 6.02009 22.7154 6.1425C23.7695 5.51178 24.5581 4.51909 24.9341 3.34967C23.9437 3.93791 22.8598 4.35196 21.7296 4.57384C20.9695 3.76227 19.9627 3.22436 18.8656 3.0436C17.7684 2.86284 16.6423 3.04936 15.6621 3.57419C14.6818 4.09903 13.9022 4.93281 13.4444 5.9461C12.9865 6.95938 12.8761 8.09548 13.1301 9.178C11.1234 9.07725 9.16032 8.55568 7.36826 7.64715C5.57621 6.73862 3.99521 5.46343 2.72789 3.90434C2.29455 4.65184 2.04539 5.5185 2.04539 6.4415C2.0449 7.27241 2.24952 8.0906 2.64109 8.82346C3.03265 9.55633 3.59906 10.1812 4.29005 10.6427C3.48869 10.6172 2.705 10.4006 2.00422 10.0111V10.0761C2.00414 11.2415 2.40726 12.371 3.14517 13.273C3.88308 14.175 4.91034 14.7939 6.05264 15.0248C5.30924 15.2259 4.52984 15.2556 3.7733 15.1114C4.09559 16.1142 4.72338 16.991 5.56878 17.6193C6.41419 18.2475 7.43488 18.5956 8.48797 18.6149C6.70029 20.0183 4.49251 20.7795 2.2198 20.7762C1.81722 20.7763 1.41497 20.7528 1.01514 20.7058C3.32207 22.189 6.00751 22.9762 8.75014 22.9732C18.0343 22.9732 23.1097 15.2837 23.1097 8.61467C23.1097 8.398 23.1043 8.17917 23.0946 7.9625C24.0818 7.24856 24.934 6.36447 25.6111 5.35167L25.6133 5.34842V5.34842Z" fill="#F38181"/>
              </svg>
              
                      
          </a>
          <a class="team__item-hover-link" href="<?php echo CFS()->get('pinterest_item_link') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.594" height="25.62" viewBox="0 0 19.594 25.62">
              <defs>
              </defs>
              <path id="pinterest" class="cls-1" d="M566.051,5328.85c-0.209.84-.42,1.71-0.638,2.56a18.96,18.96,0,0,1-.718,2.47,12.691,12.691,0,0,1-2.043,3.53c-0.575.66-.453,0.4-0.626,0.36-0.132-.03-0.143-0.16-0.169-0.34a19.314,19.314,0,0,1,.007-3.34,17.909,17.909,0,0,1,.589-3.47c0.484-2.07.946-4.09,1.435-6.17a1.422,1.422,0,0,0,.09-0.44,6.471,6.471,0,0,1-.429-1.7,5.448,5.448,0,0,1,.139-1.95,3.224,3.224,0,0,1,1.894-2.34,2.206,2.206,0,0,1,1.735.14,1.851,1.851,0,0,1,.867,1.24,4.463,4.463,0,0,1-.08,1.89c-0.267,1.22-.618,2.14-0.937,3.31a3.648,3.648,0,0,0-.189,1.81,2.119,2.119,0,0,0,.847,1.28,2.493,2.493,0,0,0,1.625.46,3.572,3.572,0,0,0,2.651-1.57,9.309,9.309,0,0,0,1.675-4.69,11.565,11.565,0,0,0,.07-2.01,5.473,5.473,0,0,0-1.127-3.12,5.282,5.282,0,0,0-2.512-1.71,8.285,8.285,0,0,0-3.747-.23,6.613,6.613,0,0,0-4.915,3.53,7.085,7.085,0,0,0-.837,3.41,4.438,4.438,0,0,0,.678,2.5c0.133,0.2.328,0.37,0.458,0.6a1.718,1.718,0,0,1-.119,1.16c-0.11.43-.122,1.01-0.618,1.02a1.377,1.377,0,0,1-.638-0.24,5.108,5.108,0,0,1-2.422-3.74,8.878,8.878,0,0,1,0-3.23,9.244,9.244,0,0,1,4.4-6.15,10.4,10.4,0,0,1,3.907-1.34,13.322,13.322,0,0,1,1.605-.13,9.627,9.627,0,0,1,4.326.8,8.862,8.862,0,0,1,2.98,2.15,8.14,8.14,0,0,1,1.834,3.31,7.922,7.922,0,0,1,.4,2.29,13.861,13.861,0,0,1-.308,2.37,9.315,9.315,0,0,1-3.838,6.45,6.924,6.924,0,0,1-4,1.1,4.642,4.642,0,0,1-1.983-.58A3.306,3.306,0,0,1,566.051,5328.85Z" transform="translate(-557.906 -5312.22)"/>
            </svg>            
          </a>
          <a class="team__item-hover-link" href="<?php echo CFS()->get('instagram_team_link') ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="25.594" height="25.62" viewBox="0 0 25.594 25.62">
              <defs>

              </defs>
              <path id="instagram" class="cls-1" d="M632.7,5337.8H613.5a3.2,3.2,0,0,1-3.2-3.2v-19.2a3.2,3.2,0,0,1,3.2-3.2h19.2a3.2,3.2,0,0,1,3.2,3.2v19.2A3.2,3.2,0,0,1,632.7,5337.8Zm-9.6-17.76a4.954,4.954,0,0,0-4.5,2.88h0a0.244,0.244,0,0,1-.022.05c-0.047.11-.088,0.22-0.128,0.33-0.019.05-.04,0.1-0.057,0.15-0.037.11-.067,0.23-0.1,0.34-0.014.05-.03,0.11-0.042,0.16-0.026.12-.044,0.25-0.061,0.37-0.007.05-.017,0.1-0.023,0.15a5.074,5.074,0,0,0-.029.53,4.96,4.96,0,1,0,9.92,0,5.074,5.074,0,0,0-.029-0.53c-0.006-.05-0.016-0.1-0.023-0.15-0.017-.12-0.035-0.25-0.061-0.37-0.012-.05-0.028-0.11-0.042-0.16-0.028-.11-0.058-0.23-0.1-0.34-0.017-.05-0.038-0.1-0.057-0.15-0.04-.11-0.081-0.22-0.128-0.33a0.244,0.244,0,0,1-.022-0.05h0A4.954,4.954,0,0,0,623.1,5320.04Zm9.92-3.68a1.278,1.278,0,0,0-1.28-1.28h-2.56a1.278,1.278,0,0,0-1.28,1.28v2.56a1.278,1.278,0,0,0,1.28,1.28h2.56a1.278,1.278,0,0,0,1.28-1.28v-2.56Zm0,6.56h-2.36a7.84,7.84,0,1,1-15.12,0h-2.36v10.72a1.278,1.278,0,0,0,1.28,1.28h17.28a1.278,1.278,0,0,0,1.28-1.28v-10.72Z" transform="translate(-610.312 -5312.19)"/>
            </svg>
            
          </a>
        </div>
      </div>
      <div class="team__item-content">
      <a href="<?php echo get_page_link( 55 ); ?>">
        <h3 class="team__item-title">

        <?php echo CFS()->get('team_title') ?>

        </h3>
        </a>
        <a href="<?php echo get_page_link( 55 ); ?>">
        <span class="team__item-subtitle">
        <?php echo CFS()->get('team_profession') ?>
        </span>
        </a>
      </div>
    </div>

  <?php }

  wp_reset_postdata();
}
?>
  </div>
</section>
    <section class="promo">
  <div class="promo__wrapper">
  <img class="promo__img container" src="<?php echo get_template_directory_uri(); ?>/assets/images/promo/1.png" alt="promo img">
</div>
</section>
    <section class="gallery">
  <div class="title__inner gallery__title-inner">
    <span class="pretitle">What we do</span>
    <h2 class="title">some of our work</h2>
  </div>
  <p class="gallery__text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
    aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  </p>

  <div class="grid-container">
    <div class="column">
      <div class="grid-item">
        <img src='<?php echo get_template_directory_uri(); ?>/assets/images/gallery/1.jpg'>
        <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/5.jpg">
        <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/2.jpg">
        <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/6.jpg">
        <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/3.jpg">
        <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/4.jpg">
                <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
      <div class="grid-item">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/7.jpg">
                <div class="grid-hover">
          <img class="grid-hover__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery/author/default.png" alt="author avatar">
          <h3 class="grid-hover__title">
            creatively designed
          </h3>
          <p class="grid-hover__text">
            Lorem ipsum dolor sit
          </p>
        </div>
      </div>
    </div>

  </div>
</section>
    <section class="blockquote">
  <div class="blockquote__wrapper container">
    <div class="swiper blockquoteSwiper">
      <div class="blockquoteSwiper-arrow-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="#95e1d3">
          <defs>
          </defs>
          <path id="ARROW_DOWN_copy_2" data-name="ARROW / DOWN copy 2" class="cls-1"
            d="M394.477,4572.86l-7.858-7.86,7.962-7.96h0a1.5,1.5,0,0,0-2.121-2.12h0l-9,9h0A1.481,1.481,0,0,0,383,4565h0v0.01a1.475,1.475,0,0,0,.459,1.07h0l9,9h0A1.5,1.5,0,1,0,394.477,4572.86Z"
            transform="translate(-383 -4554.5)" />
        </svg>

      </div>
      <div class="swiper-wrapper swiper-wrapper__inner">
      <?php
      $loop = CFS()->get('blockquote_slider');
      if(isset($loop) && is_array($loop))
      foreach ($loop as $row) {
        ?>
        <div class="swiper-slide">
          <div class="swiper-slide__img-box">
            <img src="<?php echo $row['bloquote_avatar'] ?>" alt="comment icon">
          </div>
          <div class="swiper-slide__content">
            <p class="swiper-slide__content-text">
            “<?php echo $row['bloquote_text'] ?>”
            </p>
            <div class="swiper-slide__content-author">
            <?php echo $row['bloquote_name'] ?>
            </div>
          </div>
        </div>

        <?php
      }
      ?>

      </div>
      <div class="blockquoteSwiper-arrow-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="21" viewBox="0 0 12 21" fill="#95e1d3">
          <defs>
          </defs>
          <path id="ARROW_DOWN_copy" data-name="ARROW / DOWN copy" class="cls-1"
            d="M1523.52,4572.86l7.86-7.86-7.96-7.96h0a1.5,1.5,0,0,1,2.12-2.12h0l9,9h0a1.493,1.493,0,0,1,.46,1.08h0v0.01a1.488,1.488,0,0,1-.46,1.07h0l-9,9h0A1.5,1.5,0,1,1,1523.52,4572.86Z"
            transform="translate(-1523 -4554.5)" />
        </svg>

      </div>
    </div>
  </div>
</section>
    <section style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images//feedback/bg.jpg');" class="feedback">
  <div class="feedback--bg-mask"></div>
  <div class="feedback__wrapper container">
    <div class="title__inner feedback__title-inner">
      <span class="pretitle">Happy Clients</span>
      <h2 class="title">What people say</h2>
    </div>
    <div class="feedback__inner">
      <div class="feedback__item">
        <div class="feedback__item-avatar-box">
          <img class="feedback__item-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/avatar/1.jpg" alt="feedback avatar">
        </div>
        <div class="feedback__item-content">
          <h3 class="feedback__item-title">
            Matthew Dix
          </h3>
          <span class="feedback__item-subtitle">
            Graphic Design
          </span>
          <p class="feedback__item-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
          </p>
        </div>
      </div>
      <div class="feedback__item">
        <div class="feedback__item-avatar-box">
          <img class="feedback__item-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/avatar/2.jpg" alt="feedback avatar">
        </div>
        <div class="feedback__item-content">
          <h3 class="feedback__item-title">
            Nick Karvounis
          </h3>
          <span class="feedback__item-subtitle">
            Graphic Design
          </span>
          <p class="feedback__item-text">
            Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
          </p>
        </div>
      </div>
      <div class="feedback__item">
        <div class="feedback__item-avatar-box">
          <img class="feedback__item-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/avatar/3.jpg" alt="feedback avatar">
        </div>
        <div class="feedback__item-content">
          <h3 class="feedback__item-title">
            Jaelynn Castillo 
          </h3>
          <span class="feedback__item-subtitle">
            Graphic Design
          </span>
          <p class="feedback__item-text">
            Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
          </p>
        </div>
      </div>
      <div class="feedback__item">
        <div class="feedback__item-avatar-box">
          <img class="feedback__item-avatar" src="<?php echo get_template_directory_uri(); ?>/assets/images/feedback/avatar/4.jpg" alt="feedback avatar">
        </div>
        <div class="feedback__item-content">
          <h3 class="feedback__item-title">
            Mike Petrucci
          </h3>
          <span class="feedback__item-subtitle">
            Graphic Design
          </span>
          <p class="feedback__item-text">
            Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
    <section id="blogPreview" class="blog-preview container">
  <div class="title__inner blog-preview__title-inner">
    <span class="pretitle">Our stories</span>
    <h2 class="title">Latest blog</h2>
  </div>
  <div class="blog-preview__inner">

  <?php
  
      // задаем нужные нам критерии выборки данных из БД
    $args = array(
      'posts_per_page' => 3,
      'orderby' => 'comment_count'
    );

    $query = new WP_Query( $args );

    // Цикл
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post();
        ?>
        	     <article class="blog-preview__item">
      <div class="blog-preview__item-img-box">
        <a href="<?php the_permalink() ?>">
          <img class="blog-preview__item-img" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="blog preview photo">
        </a>
        <div class="blog-preview__item-date-box">
          <div class="blog-preview__item-date">
          <?php echo get_the_date('d'); ?><span><?php echo get_the_date('M'); ?></span>
          </div>
        </div>
      </div>
      <div class="blog-preview__item-content">

        <div class="blog-preview__item-title">
          <a href="<?php the_permalink() ?>">
            <h3>
            <?php the_title(); ?>
            </h3>
          </a> 
        </div>
        <div class="blog-preview__item-text">
          <a href="<?php the_permalink() ?>">
            <p>
            <?php the_content(); ?>
            </p>
          </a>
        </div>
        </a>
      </div>
      <div class="blog-preview__item-bottom">
        <div class="blog-preview__item-views">
          <img class="blog-preview__item-views-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blog/eye.svg" alt="count views icon">
          <span class="blog-preview__item-views-count"><?php echo get_post_meta( $post->ID, 'views', true ); ?></span>
        </div>
        <div class="blog-preview__item-comments">
          <img class="blog-preview__item-viecommentsws-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/blog/comment.svg"
            alt="count comment icon">
          <span class="blog-preview__item-comments-count">17</span>
        </div>
      </div>

    </article>
        <?php
      }
    }
    else {
      // Постов не найдено
    }

    // Возвращаем оригинальные данные поста. Сбрасываем $post.
    wp_reset_postdata();
  ?>

  </div>
  <?php $page_id = 2 ?>
  <a class="blog-preview__link" href="<?php echo get_page_link( 25 ); ?>">See More</a>
</section>
    <section class="map">
  <div class="mapouter"><div class="gmap_canvas"><iframe width="1920" height="200" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:left;height:200px;width:100%;}</style><a href="https://www.embedgooglemap.net">make google map responsive</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:200px;width:100%;}</style></div></div>
</section>
  </main>

  <?php get_footer(); ?>


