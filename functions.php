<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 * 
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Меню в шапке',
		'footer_right_menu' => 'Footer right menu',
	) );
});

function left_widget_init() {

	register_sidebar( 
		array(
			'name'          => 'Наши преймущества',
			'id'            => 'about_us',
			'before_widget' => '<div class="sidebar-widget">',
			'after_widget'  => '</ul><a href="" class="big-link">Подробнее о компании</a></div>',
			'before_title'  => '<div class="sidebar-widget-header"><h3>',
			'after_title'   => '</h3></div><ul>',
		) 
		);

}
add_action( 'widgets_init', 'left_widget_init' );