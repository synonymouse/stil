<?php
/**
 * Чистый Шаблон для разработки
 * Функции шаблона
 * http://websaytik.ru
 * @package WordPress
 * @subpackage clean
 */
register_nav_menus( array( // Регистрируем 2 меню
	'top' => 'Верхнее меню'
) );
register_nav_menus( array( // Регистрируем 3 меню
	'service' => 'Меню услуг'
) );
add_theme_support('post-thumbnails'); // Включаем поддержку миниатюр
set_post_thumbnail_size(262, 210); // Задаем размеры миниатюре

if ( function_exists('register_sidebar') )
register_sidebar(array('name' => 'Sidebar')); // Регистрируем сайдбар



/*
function activate_maintenance_mode() {
    if ( !(current_user_can( 'administrator' ) ||  current_user_can( 'super admin' ))) {
    wp_die('<h1>Сайт на обслуживании</h1><p>Привет, мой сайт в настоящее время проходит плановый ремонт.
    Пожалуйста, зайдите в ближайшее время.<br /><strong>Прошу извинить за доставленные неудобства!</strong></p>', 'Maintenance Mode');
    }
}
add_action('get_header', 'activate_maintenance_mode');
*/

// function stiljagi_scripts() {
//   wp_enqueue_style( 'stiljagi-style', get_stylesheet_uri() );

//   wp_enqueue_script( 'stiljagi-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

//   wp_enqueue_script( 'stiljagi-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

//   if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//     wp_enqueue_script( 'comment-reply' );
//   }
// }
// add_action( 'wp_enqueue_scripts', 'stiljagi_scripts' );

function my_theme_wrapper_start() {
  echo '<section id="main">';
}
 
function my_theme_wrapper_end() {
  echo '</section>';
}

?>