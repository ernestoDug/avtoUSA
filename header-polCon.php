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
<!-- прибираємо тут все зайве  від стокового хедеру-->

  <header class="header hed2">
    <div class="container">
      <div class="header__top">
        <!-- все про лого видалили і після маніпуляцій з довзолом в свг суппорт плагіні
        додаємо в адмінці лого и пишемо тут  -->
        <?php the_custom_logo(); ?>


<!-- телефон  -->
        <a class="phone" href="tel:<?php the_field('home_phone'); ?>
"><?php the_field('home_phone', 7); ?>
</a>

      </div>
      
        <div class="social header__social">

        <a class="social__link" href="<?php the_field('insta_link', 7); ?>" target="_blank">
            <img class="social__img" src="<?php  the_field('insta_link_svg', 7); ?>" alt="instagram icon">
          </a>
<!-- телеграм  -->
          
<a class="social__link" href="<?php the_field('telegram_link', 7); ?>" target="_blank">
<img class="social__img" src="<?php  the_field('telegram_link_svg',7);?>" alt="telegram icon">
        </a>
      
<!-- віберь  -->
          <a class="social__link" href="<?php the_field('viber_link',7); ?>" target="_blank">
          <img class="social__img" src="<?php  the_field('viber_link_svg',7);?>" alt="telegram icon">
          </a>

<!-- fb  -->

<a class="social__link" href="<?php the_field('Fb_link  ',7); ?>"target="_blank">
<img class="social__img" src="<?php  the_field('fb_link_svg',7);?>" alt="telegram icon">
          </a>
        </div>
        
             </div>
    </div>
  </header>
                          
                          
                          
                          
                        
	