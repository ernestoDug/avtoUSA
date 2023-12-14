<footer>
<footer class="footer">
    <div class="container">
      <div class="footer__inner">
      <?php the_custom_logo(); ?>      
        
<!-- інста  -->

        <div class="social footer__social">
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
       
        

        <a class="footer__copy" href="<?php echo get_page_link(86);?>">
          Политика конфиденциальности
        </a>
      </div>
    </div>
  </footer>
</footer>
<?php wp_footer(); ?>  




