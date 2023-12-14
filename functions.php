<?php

add_action( 'wp_enqueue_scripts', 'wp_my_scripts' );

function wp_my_scripts() {
  // стилі 
  wp_enqueue_style( 'Oswald', 'https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap' );
  wp_enqueue_style( 'reset', get_template_directory_uri() . '/assets/css/reset.css');
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css');
  wp_enqueue_style( 'animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css' );
  wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/css/styles.css' );
// скрипти   
// джикверім 

  if ( !is_admin() ) {
    // дерегістрація 
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js' ), false, null, true );
    wp_enqueue_script( 'jquery' );
  }

// кінець джикверім 
    // в ереї пишему від кого залежить якщо залежить фалсе то версія а от тру друга то щоб в футере всі скрипти були 
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/scripts/slick.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'min', get_template_directory_uri() . '/assets/scripts/wow.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), false, true );
}
// нові можливості теми
add_theme_support( 'title-tag' ); 
// миниатюри   
// <!-- наприклда заміть ерая може бути де саме виводити  -->
    // add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
add_theme_support( 'post-thumbnails', array('post') );    
add_theme_support( 'custom-logo', 
array(
  'height'      => 64,
  'width'       => 64,
  'flex-width'  => true,
  'flex-height' => true,        
)
);

 // Обрізати зображення постів ширина висота обрізати тру
 add_image_size('my_post_img', 1000, 500, true);
 // ширина висота та так жорстка обрізка
 // ширина висота та так жорстка обрізка 
//  а my_post_img це імя ми його вриокристаємо в the_post_thumbnail(ТУТ)
 // замяна на три читати далі пілс я крапки  після обрізу 
//  **
//  СВОЇ ЗАПИСИ
// **
//  <!-- додаю своє записи вони будуть в адмінці окремо від записів  -->
// УВАГА
// Старайтесь избегать общих названий типов записей, таких как product, order, 
//  список зарезервированных слов, которые нельзя использовать: 
//  post, page, attachment, revision, nav_menu_item, custom_css, customize_changeset, 
//  action, order, theme, author.
// Не используйте префикс wp_.
// Убедитесь, что длина названия типа записи не превосходит 20 символов,
 add_action( 'init', 'true_register_cpt' );
 
function true_register_cpt() {
 
	$args = array(
		'labels' => array(
			'menu_name' => 'Авиабилеты'
		),
		'public' => true,
		'menu_icon' => 'dashicons-airplane'
	);
	register_post_type( 'misha_aviatickets', $args );
}
 ?>


