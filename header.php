<!DOCTYPE html>

<html <?php language_attributes() ?>>

<head>
  <meta charset=<?php bloginfo('charset'); ?>>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <?php wp_head(); ?>

  <title>AutoExpress</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">

  
</head>



  <header class="header">
    <div class="container">
      <div class="header__top">
        <!-- все про лого видалили і після маніпуляцій з довзолом в свг суппорт плагіні
        додаємо в адмінці лого и пишемо тут  -->
        <?php the_custom_logo(); ?>


<!-- телефон  -->
        <a class="phone" href="tel:<?php the_field('home_phone'); ?>
"><?php the_field('home_phone'); ?>
</a>

      </div>
      <div class="header__content">
        <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
        <?php the_field('title'); ?>
        </h1>
        <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
                <?php the_field('triger'); ?>
        </h2>
        <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
          <?php the_field('generalText'); ?>
        </p>
        <a class="button" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        <div class="social header__social">

        <a class="social__link" href="<?php the_field('insta_link'); ?>" target="_blank">
            <img class="social__img" src="<?php  the_field('insta_link_svg'); ?>" alt="instagram icon">
          </a>
<!-- телеграм  -->
          
<a class="social__link" href="<?php the_field('telegram_link'); ?>" target="_blank">
<img class="social__img" src="<?php  the_field('telegram_link_svg');?>" alt="telegram icon">
        </a>
      
<!-- віберь  -->
          <a class="social__link" href="<?php the_field('viber_link'); ?>" target="_blank">
          <img class="social__img" src="<?php  the_field('viber_link_svg');?>" alt="telegram icon">
          </a>

<!-- fb  -->

<a class="social__link" href="<?php the_field('Fb_link  '); ?>"target="_blank">
<img class="social__img" src="<?php  the_field('fb_link_svg');?>" alt="telegram icon">
          </a>
        </div>
        
        <img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php the_field('avtoAnimate'); ?>"
          alt="ford mustang">
      </div>
    </div>
  </header>
                          
                          
                          
                          
                        
	