<?php
//carrega o css do tema
function load_stylesheets(){
    wp_register_style('foundation', get_template_directory_uri(). '/css/foundation.min.css', array(), false, 'all');
    wp_enqueue_style('foundation');

    wp_register_style('style', get_template_directory_uri(). '/style.css', array(), false,'all');
    wp_enqueue_style('style');
} 

add_action('wp_enqueue_scripts', 'load_stylesheets');

//registra o logo 
add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );

//registra o menu no header
function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_my_menu' );

add_theme_support('menus');

/* customização da página de login*/

function my_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/style-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
		height:140;
		width:320px;
		background-size: 320px 65px;
		background-repeat: no-repeat;
        	padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Your Site Name and Info';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );