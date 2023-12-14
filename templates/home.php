<?php
/*
Template Name: home
*/
get_header();
?>


<?php wp_body_open(); ?>   

  <section class="services">
    <div class="container">
      <h2 class="title">НАШИ УСЛУГИ</h2>
      <div class="services__inner">
        <div class="services__content">
          <div class="services__content-box">
            <h6 class="services__content-title">
              Почему ввоз авто из США?
            </h6>
            <div class="services__content-textbox">
              <p class="services__content-text">
                Мы сравнили рынки США с Европейскими и поняли, что покупка автомобиля в Америке выгоднее в несколько
                раз, как бы
                парадоксально это не звучало. Это вызвано продуманной логистикой, уровнем развития сервисов по
                оцениванию состояния авто
                и самим процессом покупки автомобиля.
              </p>
              <?php the_field('servise'); ?>

            </div>
          </div>
          <div class="services__content-box">
            <h6 class="services__content-title">
              Из-за чего такая низкая цена?
            </h6>
            <div class="services__content-textbox">

              <?php the_field('servise_title'); ?>

            </div>
          </div>
          <a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
        </div>

        <!-- ось сюди в поле едітор типу засунут спико був  -->
        <?php the_field('list'); ?>

      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">

        <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php  the_field('avtobenifits')?>" alt="car">
        
        <div class="benefits__content">
          <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <p class="benefits__item-num">650</p>
              <p class="benefits__item-title">успешно доставленных авто</p>
              <p class="benefits__item-text">
                большой опыт пригона автомобилей из США под ключ, все клиенты остались довольны на 100%
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__item-num">5</p>
              <p class="benefits__item-title">лет на рынке Украины</p>
              <p class="benefits__item-text">
                Работаем по всей территории Украины, работаем по договору с клиентами
              </p>
            </li>
            <li class="benefits__item">
              <p class="benefits__item-num">100%</p>
              <p class="benefits__item-title">доверия клиентов</p>
              <p class="benefits__item-text">
                Онлайн отчетность. Вы всегда в курсе статуса подбора вашего авто. Фото и видео отчет
              </p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="carousel">
    <div class="container">
      <h2 class="title">
        ПРИГНАННЫЕ НАМИ АВТО
      </h2>
      <div class="carousel__inner">
        <?php 
global $post ;

// <!-- вивід постів КАТЕГОРІЇ СЛАЙДЕР  -->
$myposts = get_posts ([
	 'numberposts' => -1,
   'category' => 2,
  //  ТОМУ ЩО КАТЕГОРІЯ СЛАЙДЕР МАЄ ТАКУ АЙ ДІ В АДРЕСІ ВИДНО

]);

if ( $myposts ){
	 foreach ( $myposts as $post ){
		 setup_postdata ( $post );
		?> 

      <div class="carousel__item">
        <div class="carousel__item-box">
          <!-- заголовки постів  -->
          <h4 class="carousel__item-title"><?php the_title(); ?></h4>
          <!-- написи з постів  -->
          <p class="carousel__item-text"><?php the_content(); ?></p>
          <!-- світлини постів  my_post_img це прийшло з фанкшин з подіх add_image_size-->
<?php the_post_thumbnail('my_post_img', array( 
  // додали клас з верстки 
	 'class' =>"carousel__item-img" )); ?>
        
        </div>
      
      </div>

  <?php
		
	}
}
wp_reset_postdata (); // Скидання $post 
?>
<!-- кінець виводу  -->
</div>
  </div> 

    
  </section>

  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">
            КОНТАКТЫ
          </h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">Адрес</p>
              <p class="contacts__item-text">
              <?php the_field('adress') ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Время работы</p>
              <p class="contacts__item-text">
              <?php the_field('time') ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Телефон</p>
              <p class="contacts__item-text">
          <!-- телефон  -->
        <a class="phone" href="tel:<?php the_field('home_phone'); ?>
"><?php the_field('home_phone'); ?>
</a>
              </p>
            </li>
          </ul>
        </div>
        <form class="contacts__form">
          <h2 class="title contacts__title">Оставить заявку</h2>
          <!-- далі іинпути вводимо ф конткт форм 7 по типу інпута  там пишешь клас плейсзолдер п/с
        пишешь в значення за замовчуваня та обираешь обрати як заповнювач зберігаєш і там будеть теги готові
        між тегами ніяких пробілів не стаившь кнопу теж туди закидаеш
        потім копіюш шорт код в горі і вставляш заміть формі в статитикі 
        на помилки в плагіні уваги н е звертай це томущо локалка о имейл форми не вазаний
        -->
        <!-- вставили шорткод -->
    <?php echo do_shortcode('[contact-form-7 id="7c2494f" title="Контактна форма 1"]')?>
        </form>
      </div>
    </div>
  </section>

</html>






<?php get_footer(); ?>