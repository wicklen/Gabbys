<?php 
/**
* Register our sidebars and widgetized areas. *
*/

if(function_exists('register_sidebar')){
    function child_theme_widget_area() {
        register_sidebar( array(
            'name' => 'custom',
            'id' => 'custom',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="rounded">',
            'after_title' => '</h2>'
        ) );
    }
    add_action( 'widgets_init', 'child_theme_widget_area' );
}



/*
* Register nav menus
*/
register_nav_menus( array(
    'mobile_menu' => 'My Mobile Navigation Menu', 
    'footer_menu' => 'My Custom Footer Menu'
) );

// Load google-fonts to your WP
function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Merriweather');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');


// add a favicon to your site 

function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_stylesheet_directory_uri() .'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// function no_wp_logo_admin_bar_remove() {
//     global $wp_admin_bar;
//     $wp_admin_bar->remove_menu('wp-logo');
// }
// add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);


// Change the loggo in the loggin area 

function my_login_logo() { ?>
<style type="text/css">
body.login div#login h1 a {
background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo1.png);
margin-bottom: 30px;
border-radius: 2px;
}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );





/*
* Change the footer of your Wordpress administration
*/
function remove_footer_admin () {
echo '
Skapad av: Gustav Wicklén |
För hjälp och support kontakta mig: <a href="mailto:en@epostadress.se">en@epostadress.se</a> ';
}
add_filter('admin_footer_text', 'remove_footer_admin');






?>